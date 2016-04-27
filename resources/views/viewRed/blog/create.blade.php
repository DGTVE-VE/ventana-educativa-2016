@extends ('indexRed')
{{HTML::script('js/bootstrap-tagsinput.min.js')}}
{{HTML::style('css/bootstrap-tagsinput.css')}}
@include ('viewRed.seccionheader')
@section ('cuerpoRedmite')
<div class="row">
<div class='col-md-3'></div>
<div class='col-md-6'>
    <form action="{{url ('redmite/blog')}}" method="POST" enctype="multipart/form-data">
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
            <div id="selectImage">
                <div id="image_preview"><img height="66px" width='100px' id="previewing" src="{{url ('imagenes/ventana/encabezado/noimage.png')}}" /></div>
                <label>Selecciona tu imagen</label><br/>
                <input type="file" name="imagen" id="file" required />                
            </div>                                                    
            
            <div id='loading' class='hidden'> Cargando... </div>
            <div id="message"></div>
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
            $("#file").change(function () {
                $("#message").empty(); // To remove the previous error message
                var file = this.files[0];
                var imagefile = file.type;
                var match = ["image/jpeg", "image/png", "image/jpg"];
                // Si la imagen no es de tipo válido
                if (match.indexOf(imagefile) === -1)
                {
                    $('#previewing').attr('src', 'noimage.png');
                    $("#message").html("<p id='error'>Please Select A valid Image File</p>" + "<h4>Note</h4>" + "<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
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
            $("#file").css("color", "green");
            $('#image_preview').css("display", "block");
            $('#previewing').attr('src', e.target.result);
            $('#previewing').attr('width', '100px');
            $('#previewing').attr('height', '66px');
        }
        ;
    });
    /************ CAMBIAR AVATAR **************/
</script>
@include('viewRed.seccionpie')
@stop