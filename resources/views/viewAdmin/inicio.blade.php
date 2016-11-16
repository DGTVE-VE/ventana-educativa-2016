<br>
<div id="contenidoPrincipal" class="container" style="color: black">
    <div class="col-md-8 col-lg-8">
        <div class="col-xs-12 col-sm-6 col-lg-4 col-md-4">
            <div class="box">							
                <div class="icon">
                    <div class="image usuarios"><i class="fa fa-users"></i></div>
                    <div class="info">
                        <h3 class="title">Usuarios totales</h3>
                        <p>
                            {!!$usuarioTotal!!}
                        </p>
                    </div>
                </div>
                <div class="space"></div>
            </div> 
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4 col-md-4">
            <div class="box">							
                <div class="icon">
                    <div class="image usuarios"><i class="fa fa-users"></i></div>
                    <div class="info">
                        <h3 class="title">Docentes</h3>
                        <p>
                            {!!$docenteTotal!!}
                        </p>
                    </div>
                </div>
                <div class="space"></div>
            </div> 
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4 col-md-4">
            <div class="box">							
                <div class="icon">
                    <div class="image educamedia"><i class="fa fa-play"></i></div>
                    <div class="info">
                        <h3 class="title">Videos Telesecundaria</h3>
                        <p>
                            {!!$videosTotalTelesecundaria!!}
                        </p>
                    </div>
                </div>
                <div class="space"></div>
            </div> 
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4 col-md-4">
            <div class="box">							
                <div class="icon">
                    <div class="image educamedia"><i class="fa fa-play"></i></div>
                    <div class="info">
                        <h3 class="title">Videos Telebachillerato</h3>
                        <p>
                            {!!$videosTotalTelebachillerato!!}
                        </p>
                    </div>
                </div>
                <div class="space"></div>
            </div> 
        </div>
    </div>

    <div class="col-xs-12 col-sm-4 col-lg-4">
        <div class="box">							
            <div class="icon">
                <div class="image educaplay"><i class="fa fa-film"></i></div>
                <div class="info" >
                    <h3 class="title">Series en Educaplay</h3>
                    <table class="table table-condensed">
                        @foreach ($seriesLista as $item => $seriesListas )                        
                        <tr>                            
                            <td>{{$item+1}}</td>
                            <td>{{$seriesListas->titulo_serie}}</td>                            
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <!--<div class="space"></div>-->
        </div> 
    </div>
</div>
