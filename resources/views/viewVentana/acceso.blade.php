@section('titleVentana')
    Ventana Educativa
@stop
@section('menuMediateca')
    @include('viewMediateca.encabezadoMediateca')
@endsection
@extends('indexMediateca')
@section('cuerpoMediateca')
<div class="container">
    <div class = "frmRegistro col-lg-offset-2 col-md-8">
        <h3 class = "panel-title tituloRegistro text-center text-uppercase">
            Acceso
        </h3>
        
        <li class="panel-body list-unstyled">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    @if (Auth::guest ())
                    <form id="login-form" action="{{url('sessions')}}" method="POST" role="form" style="display: block;">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="form-group">
                            <input type="email" name="email"  tabindex="1" class="form-control inputLogin" placeholder="Correo Electrónico" value="">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password"  tabindex="2" class="form-control inputLogin" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-md-offset-3">
                                    <input type="submit" name="login-submit" style="color: white;" id="login-submit" tabindex="4" class="form-control btn btn-sm" value="Entrar">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6 text-center">
                                <a href="{{url('password/email')}}" tabindex="5" style="color: white;" class="forgot-password">Olvide mi contraseña</a>
                            </div>

                            <div class=" col-md-6 text-center">
                                <a href="{{url('registro')}}"  tabindex="5" style="color: white;" class="forgot-password">Registrate</a>
                            </div>
                        </div>
                    </form>
                    @else 

                    <h5 style="color: white;" class="text-center">
                        <!--Iniciaste sesión como:--> 
                    </h5>
                    <h4 style="color: white;" class="text-center">{{Auth::user()->email}}</h4>                            

                    <div class="col-md-6 text-center">
                        <a href="{{url('logout')}}" tabindex="5" style="color: red; font-weight: bold;" class="forgot-password">
                            Cerrar Sesión
                        </a>
                    </div>
                    <div class="col-md-6 text-center">
                        <a id="link-cambia-avatar" style="color: white; font-weight: bold;" >Cambiar avatar</a>
                    </div>
                    <div>
                        <!--link para abrir formulario de registro de integrante de la RedMITE-->
                        @if (Auth::user()->is_researcher)
                        <div class="col-md-12 text-center">
                            <a href="{{url('redmite/admin/integrantes')}}" tabindex="5" style="color: #00B6F1; font-weight: bold;" class="forgot-password">
                                Registro integrante RedMITE
                            </a>
                        </div>
                        @endif
                        <hr id="line">
                        <!--<a id="link-cambia-avatar" href="#" tabindex="5" style="color: white;" class="forgot-password">Cambiar imagen</a>-->
                        <div id="form-avatar" class="hidden center-block" style="color: white;">
                            <form id="uploadimage" action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                @if (File::exists ('uploaded/avatares/'.Auth::user()->id.'.png'))
                                <div class="col-md-5" id="image_preview"><img height="100px" id="previewing" src="{{url('uploaded/avatares/'.Auth::user()->id.'.png')}}" /></div>
                                @else
                                <div class="col-md-5" id="image_preview"><img height="100px" id="previewing" src="imagenes/ventana/encabezado/noimage.png" /></div>
                                @endif
                                <div class="col-md-7" id="selectImage">
                                    <!--<label for="file">Selecciona tu imagen</label><br/>-->
                                    <span class="btn btn-file-avatar">
                                        Seleccionar imagen <input type="file" name="image" class="inputLogin" id="file" required />
                                    </span>                                                    
                                    <br><br>                                      
                                    <input type="submit" value="Subir Imagen" class="submit btn btn-info" />
                                    <!--<h4 id='loading' >Cargando...</h4>-->
                                </div>  

                            </form>
                        </div>
                    </div>
                    <div id="message" class="col-md-12" style="color: white; font-size: 9px;"></div>
                    @endif
                </div>
            </div>
        </li>
    </div>
</div>

@endsection
@section('pieMediateca')

@endsection        