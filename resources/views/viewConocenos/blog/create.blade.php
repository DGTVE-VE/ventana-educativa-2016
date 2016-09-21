@extends ('indexConocenos')
{{HTML::script('js/bootstrap-tagsinput.min.js')}}
{{HTML::style('css/bootstrap-tagsinput.css')}}
@section('menuConocenos')
@include ('viewConocenos.encabezado')
@endsection
@section ('cuerpoConocenos')
<div class="row">
<div class='col-md-3'></div>
<div class='col-md-6'>
    <form action="{{url ('conocenos/blog')}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name='titulo' placeholder="Título" >
        </div>
        <div class="form-group">
            <label for="tags">Etiquetas</label>
            <input type="text" class="form-control" name='tags' id="tags" placeholder="Etiquetas" data-role="tagsinput">
        </div>
        
        <hr id="line">
        <div class="form-group">                                                          
            <div id="selectImage_blog">                
                <img height="66px" width='100px' id="previewing_blog" src="{{url ('imagenes/ventana/encabezado/noimage.png')}}" />
                <label>Selecciona tu imagen</label><br/>
                <input type="file" name="imagen" id="file_blog" required />                
            </div>                                                    
            
            <div id='loading_blog' class='hidden'> Cargando... </div>
            <div id="message_blog"></div>
        </div>        
        <textarea name="cuerpo"></textarea>
        <button type="submit" class="btn btn-default"> Publicar </button>
    </form>
</div>
<div class="col-md-3"></div>
</div>


<!--<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>-->
<script src="{{asset ('tinymce/tinymce.min.js')}}"></script>
<script>
    tinymce.init({        
        selector: 'textarea',
        language: 'es_MX'
    });

</script>
<script>
    $(document).ready(function (e) {
    // Function to preview image after validation
        $(function () {
            $("#file_blog").change(function () {
                $("#message_blog").empty(); // To remove the previous error message
                var file = this.files[0];
                var imagefile = file.type;
                var match = ["image/jpeg", "image/png", "image/jpg"];
                // Si la imagen no es de tipo válido
                if (match.indexOf(imagefile) === -1)
                {
                    $('#previewing_blog').attr('src', 'noimage.png');
                    $("#message_blog").html("<p id='error'>Please Select A valid Image File</p>" + "<h4>Note</h4>" + "<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
                    return false;
                }
                else
                {
                    var reader = new FileReader();
                    reader.onload = imageIsLoaded;
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });
        function imageIsLoaded(e) {
            $("#file_blog").css("color", "green");
//            $('#image_preview').css("display", "block");
            $('#previewing_blog').attr('src', e.target.result);
            $('#previewing_blog').attr('width', '100px');
            $('#previewing_blog').attr('height', '66px');
        }
        ;
    });
    /************ CAMBIAR AVATAR **************/
</script>
@include('viewConocenos.pie')
@stop