<!DOCTYPE html>
<html>
    <body>
        <h2><img src="{{asset('imagenes/red/LogoRed/logoredmesoamericana.png')}}" alt="REDMITE"/> Recepción de comentarios.</h2>
        <p> Ha sido recibido un mensaje desde la sección Contacto de REDMITE, con la siguiente información: </p>
        <p> Nombre: {{$contacto->nombre_contacto}} <br>
            Correo eletcrónico: {{$contacto->correo}} <br>
            Asunto: {{$contacto->asunto}} <br>
            Mensaje: {{$contacto->mensaje}}
        </p>
    </body>
</html>
