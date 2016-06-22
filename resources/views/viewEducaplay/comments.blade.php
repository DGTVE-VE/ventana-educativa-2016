@foreach ($comments as $comment)
    @include('viewEducaplay.comment', ['comment'=>$comment])
@endforeach 

<script>
 $('.link-respuesta').click (function (){            
            comment_id = $(this).attr ('comment-id');
//            $('#comment-'+comment_id).addClass ('animated fadeOut', {duration: 'slow'});
//            $('#comment-'+comment_id).removeClass ('col-md-6');
//            $('#comment-'+comment_id).removeClass ('fadeOut');
//            $('#comment-'+comment_id).addClass ('col-md-12 animated fadeInDown', {duration: 'slow'});
            $('#comment-'+comment_id).switchClass ('col-md-6', 'col-md-12', '1000');
            $('#responde-'+comment_id).toggle ("slow");
        });
</script>