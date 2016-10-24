<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Model\Conocenos\Blog;
use App\Model\Tag;
use App\Model\Conocenos\Colaborador;
use App\Model\Conocenos\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Log;
class ConocenosBlogController extends Controller
{
    public $widthImage = 400;
    public $heigtImage = 300;
    
    public function __construct() {
        
        $this->middleware('auth', ['only' => ['create', 'update', 'edit', 'store', 'comment']]);
    }
    
    public function index (){
        $recientes = Blog::orderBy('created_at', 'desc')->take (5)->get ();
        $leidos = Blog::orderBy ('visitas', 'desc')->take (5)->get ();
        $comentados = $this->geBlogstMasComentados (5);    
        $blogs = Blog::paginate (5);
        $colaboradores = array ();
        foreach ($blogs as $blog){
            $colaboradores [$blog->colaborador_id] = Colaborador::find ($blog->colaborador_id);
        }
        
        return view('viewConocenos/blog/list', compact ('blogs', 'colaboradores', 'recientes', 'leidos','comentados'));
    }
    
    public function store (Request $request){
        
        $user = Auth::user ();
        $colaborador = Colaborador::find ($user->id);
        $blog = new Blog();
        $blog->titulo = filter_input(INPUT_POST, 'titulo');
        $blog->cuerpo = filter_input(INPUT_POST, 'cuerpo');
        $blog->usuario_id = $user->id;
        $blog->colaborador_id = $colaborador->id;
        $blog->visitas = 0;
        $blog->imagen = $this->storeImage ($request);        
        $blog->save();
        $this->storeTags ($blog, filter_input(INPUT_POST, 'tags'));
        return Redirect::to ('conocenos/blog');
    }
    
    public function storeTags ($blog, $tags){
        $tag_array = explode(',', $tags);
        foreach ($tag_array as $tag){        
            $t = Tag::where ('tag', $tag)->first ();
            if (is_null ($t)){
                $blog->tags ()->save (new Tag (['tag'=>$tag]));                
            }
            else{
                $blog->tags ()->save ($t);
            }
        }
    }
    
    public function storeImage ($request){
        $file = $request->file('imagen');        
        if (Input::file('imagen')->isValid()) {            
            $targetFile = 'red/blog/'. md5($file->getFilename()) . '.png';  
            $this->resize($targetFile, Input::file('imagen')->getRealPath());            
            return $targetFile;
        } else {           
            Log::error ('La imagen no es valida para subir: '.$file->getClientOriginalName());
            return null;
        }
    }
    
    public function create (){
        
        return view('viewConocenos/blog/create');
    }
    
    public function show ($id_blog){
		$blog = Blog::find ($id_blog);
        $blog->visitas ++;
        $blog->save ();
        
        $recientes = Blog::orderBy('created_at', 'desc')->take (5)->get ();
        $leidos = Blog::orderBy ('visitas', 'desc')->take (5)->get ();
        $comentados = $this->geBlogstMasComentados (5);
        $colaborador = Colaborador::find ($blog->colaborador_id);
//        dd($colaborador);
        return view('viewConocenos/blog/show', compact('blog', 'colaborador', 'leidos', 'recientes', 'comentados'));
	}
    
    public function destroy ($blog){
        
    }
    
    public function update ($blog){
        
    }
    
    public function edit ($blog){
        
    }
    
    public function comment (){
        $comment = new Comment;
        $comment->id_blog = filter_input(INPUT_POST, 'id_blog');
        $comment->id_comment = filter_input(INPUT_POST, 'id_comment');
        $comment->id_colaborador = filter_input(INPUT_POST, 'id_colaborador');
        $comment->comment = filter_input(INPUT_POST, 'comment');
        $comment->save();
        return redirect('conocenos/blog/'.$comment->id_blog);
    }
    
    private function newImage ($originalFile){
        $info = getimagesize($originalFile);
        $mime = $info['mime'];
        switch ($mime) {
            case 'image/jpeg':
                $img = imagecreatefromjpeg($originalFile);                
                break;

            case 'image/png':
                $img = imagecreatefrompng($originalFile);                
                break;

            case 'image/gif':
                $img = imagecreatefromgif($originalFile);                
                break;

            default:
                throw new Exception('Unknown image type.');
        }
        
        return $img;
    }
    
    private function resize($targetFile, $originalFile) {        
        $img = $this->newImage ($originalFile);        
        list($width, $height) = getimagesize($originalFile);
        
        $tmp = imagecreatetruecolor($this->widthImage, $this->heigtImage);        
      
        imagecopyresampled($tmp, $img, 
                0,              //dst_x
                0,              //dst_y
                0,              //src_x
                0,              //src_y
                $this->widthImage,      //dst_w
                $this->heigtImage,     //dst_h  
                $width,         //src_w
                $height);       //src_h

        if (file_exists($targetFile)) {
            unlink($targetFile);
        }
        imagepng ($tmp, $targetFile);
    }
    
    private function geBlogstMasComentados ($cuantos){
        $numComments = DB::table ('con_blog_comments')
                ->select ('id_blog', DB::raw ('count(*) as total'))
                ->groupBy ('id_blog')->take ($cuantos)->get ();
//                print($numComments);
        $ids = array ();
        foreach ($numComments as $num){
            $ids [] = $num->id_blog;
        }
        $comentados = DB::table('con_blog')
                    ->whereIn('id', $ids)
                    ->get();   
        return $comentados;
    }

}
