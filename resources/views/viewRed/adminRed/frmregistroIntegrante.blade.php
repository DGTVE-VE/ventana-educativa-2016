@section('titleRedmite')
Busca Usuario
@stop
@extends('indexRed')
@section('menuRedmite')
@include('viewRed.seccionheader')
@endsection
@section('cuerpoRedmite')
<div class="container">
    <div class="row">
        <hr>
        <div class="col-md-8 col-md-offset-2">
            @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Para ser parte de la RedMITE se requiere que capture la siguinete información</h3>
                </div>                
                <form action="{{url('redmite/admin/guardaIntegrantes')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">                        
                        <label for="puesto"></label>
                        <input type="text" name="puesto" class="form-control" id="puesto" placeholder="Puesto">
                    </div>
                    <div class="form-group">                        
                        <label for="area"></label>
                        <input type="text" name="area" class="form-control" id="area" placeholder="Área">
                    </div>
                    <div class="form-group">                        
                        <label for="dependencia"></label>
                        <input type="text" name="dependencia" class="form-control" id="dependencia" placeholder="Dependencia">
                    </div>
                    <div class="form-group">                        
                        <label for="resena"></label>
                        <textarea cols="5" rows="5" name="resena" placeholder="Reseña" class="form-control"></textarea>
                    </div>
                    <div class="form-group">                                                          
                        <div id="selectImage">
                            
                            <img height="100px" width='100px' id="previewing_colaborador" src="{{url ('imagenes/ventana/encabezado/noimage.png')}}" />
                            
                            <label>Selecciona tu imagen</label><br/>
                            <input type="file" name="imagen" id="file_colaborador" required />                
                        </div>                                                    

                        <div id='loading_colaborador' class='hidden'> Cargando... </div>
                        <div id="message_colaborador"></div>
                    </div>   
<!--                    <div class="">
                        <span class="btn btn-file-avatar">
                            Seleccionar foto <input type="file" name="image" class="inputLogin" id="file" required />
                        </span> 
                    </div>-->
                    <hr>
                    <div class="text-center">
                        <input class="btn  btn-info" type="submit" value="Envía Registro">
                    </div>
                </form>
            </div>
        </div>
        <hr>
    </div>
</div>
<script>
    $(document).ready(function (e) {
    // Function to preview image after validation
    console.log ('ready');
        
        $("#file_colaborador").change(function () {
            console.log ('entro');
            $("#message_colaborador").empty(); // To remove the previous error message
            var file = this.files[0];
            var imagefile = file.type;
            var match = ["image/jpeg", "image/png", "image/jpg"];
            // Si la imagen no es de tipo válido
            if (match.indexOf(imagefile) === -1)
            {
                $('#previewing_colaborador').attr('src', 'noimage.png');
                $("#message_colaborador").html("<p id='error'>Please Select A valid Image File</p>" + "<h4>Note</h4>" + "<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
                return false;
            }
            else
            {
                var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
            }
        });
        
        function imageIsLoaded(e) {
            $("#file_colaborador").css("color", "green");
//            $('#image_preview').css("display", "block");
            $('#previewing_colaborador').attr('src', e.target.result);
            $('#previewing_colaborador').attr('width', '100px');
            $('#previewing_colaborador').attr('height', '100px');
        }
        
    });
    /************ CAMBIAR AVATAR **************/
</script>
@include('viewRed.seccionpie')

@stop