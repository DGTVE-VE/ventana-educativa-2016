<!DOCTYPE html>
<html>
    <body>
        <a href="{{url ('verificaCorreo')}}/{{$correo}}/{{$hash}}"> 
            {{ HTML::image('imagenes/ventana/envioCorreo/banner2.png','Activa tu correo', array('class'=>'image-responsive', 'width' => 600, 'height' => 400))}}
         </a>        
    </body>
</html>
