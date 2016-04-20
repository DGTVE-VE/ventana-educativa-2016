<!DOCTYPE html>
<html>
    <body>
        <a href="{{url ('verificaCorreo')}}/{{$correo}}/{{$hash}}"> 
            {{ HTML::image('imagenes/ventana/envioCorreo/banner2.jpg','Activa tu correo', array('class'=>'image-responsive', 'width' => 550, 'height' => 400))}}
         </a>        
    </body>
</html>
