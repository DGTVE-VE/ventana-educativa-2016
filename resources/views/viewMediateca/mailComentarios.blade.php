<!DOCTYPE html>
<html>
    <body>
        <h2><img src="{{asset('imagenes/ventana/encabezado/logoNegro/logoventana.png')}}" alt="CONOCENOS"/> Recepción de comentarios.</h2>
        <p> Se ha recibido un comentario desde la sección videos de EDUCAMEDIA, con la siguiente información: </p>
        <p> Sección: {{$seccion}} <br>
            Id de Usuario: {{$comentario->usuario_id}} <br>
            Id de video: {{$videoId}} <br>
            Comentario: {{$comentario->comment}}
        </p>
    </body>
</html>