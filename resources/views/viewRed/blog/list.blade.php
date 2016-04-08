@extends ('indexRed')
@section('menuRedmite')
@include('viewRed.seccionheader')
@endsection
@section ('cuerpoRedmite')	
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-7">
        @foreach ($blogs as $blog)

        <div class="row">
            <div class="col-md-3">
                <a href="{{url("redmite/blog/$blog->id")}}">
                    <img src="{{url ($blog->imagen)}}" height="90" width="140">
                </a>
            </div>
            <div class="col-md-6">
                <h3><a href="{{url("redmite/blog/$blog->id")}}"> {{$blog->titulo}} </a></h3>
                <?php
                $dt = new DateTime($blog->created_at);
                $date = $dt->format('m/d/Y');
                ?>
                {{$date}}
                <h3> {{$colaboradores[$blog->colaborador_id]->nombre}}</h3>
                {!!substr($blog->cuerpo, 0, 200)!!}...
                <a href="{{url("redmite/blog/$blog->id")}}"> Leer mas</a>
            </div>            
        </div>

        <hr>
        @endforeach
    </div>
    <div class='col-md-3'>
        <ul class="nav nav-tabs" id='myTabs'>
            <li class="active">
                <a data-toggle="tab" href="#leidos">Más leído</a></li>
            <li><a data-toggle="tab" href="#recientes">Más reciente</a></li>
            <li><a data-toggle="tab" href="#comentados">Más comentado</a></li>
        </ul>
        <div class="tab-content">
            <div id="leidos" class="tab-pane fade in active">
                <ul>
                    @foreach ($leidos as $leido)
                    <li> <a href="{{url("redmite/blog/$leido->id")}}"> {{$leido->titulo}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div id="recientes" class="tab-pane fade">
                <ul>
                    @foreach ($recientes as $reciente)
                    <li> <a href="{{url("redmite/blog/$reciente->id")}}"> {{$reciente->titulo}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div id="comentados" class="tab-pane fade">
                <ul>
                    @foreach ($comentados as $comentado)
                    <li> <a href="{{url("redmite/blog/$comentado->id")}}"> {{$comentado->titulo}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
      });
</script>
    

@include('viewRed.seccionpie')
@stop