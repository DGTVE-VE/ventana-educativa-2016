<!DOCTYPE html>
<html>
    <body>
        <a href="{{url ('verificaCorreo')}}/{{$correo}}/{{$hash}}"> 
            {{ HTML::image('imagenes/ventana/envioCorreo/banner2.jpg','Activa tu correo', array('class'=>'image-responsive', 'width' => 600, 'height' => 600))}}
         </a>        
    </body>
</html>
