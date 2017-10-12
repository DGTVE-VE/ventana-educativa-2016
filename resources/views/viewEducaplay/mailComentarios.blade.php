<!DOCTYPE html>
<html>
    <body>
        <h2><img src="{{asset('imagenes/ventana/encabezado/logoNegro/logoventana.png')}}" alt="CONOCENOS"/> Recepción de comentarios.</h2>
        <p> Se ha recibido un comentario desde la sección videos de EDUCAPLAY, con la siguiente información: </p>
        <p> Nombre de usuario: {{$usuario}} <br>
            Id de Usuario: {{$comentario->usuario_id}} <br>
            Id de serie: {{$comentario->serie_id}} <br>
            Id de video: {{$comentario->video_id}} <br>
            Comentario: {{$comentario->comment}}
        </p>
    </body>
</html>