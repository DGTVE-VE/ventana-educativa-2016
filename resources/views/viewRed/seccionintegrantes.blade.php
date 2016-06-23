<div class="row parallax-window" data-parallax="scroll" data-image-src= {{url('imagenes/red/integrantes/gradiente.jpg')}} speed="0.3">
    <div class="col-md-12 fondo_Obscuro">
        <div class="col-md-12 text-center text-uppercase">
            <p class="pleca"> Nuestros integrantes </p>
        </div>
    </div>
    <div class="col-md-6">
        {{ HTML::image('imagenes/red/integrantes/gris.png','integrantes', array('name'=>'imagenMapa_n','id'=>'imagenMapa', 'border'=>'5px','class' =>'mapaCentroAmerica img-responsive', 'usemap'=>'#mapa_n'))}}

          <?php if($colaboradoresco == "[]"){ $hrefco = "#";}else{ $hrefco = "#modalColombia";} ?>
          <?php if($colaboradorescr == "[]"){ $hrefcr = "#";}else{ $hrefcr = "#modalCostaRica";} ?>
          <?php if($colaboradoresdo == "[]"){ $hrefdo = "#";}else{ $hrefdo = "#modalRepublicaDominicana";} ?>
          <?php if($colaboradoressv == "[]"){ $hrefsv = "#";}else{ $hrefsv = "#modalSalvador";} ?>
          <?php if($colaboradoresgu == "[]"){ $hrefgu = "#";}else{ $hrefgu = "#modalGuatemala";} ?>
          <?php if($colaboradoresho == "[]"){ $hrefho = "#";}else{ $hrefho = "#modalHonduras";} ?>
          <?php if($colaboradoresmx == "[]"){ $hrefmx = "#";}else{ $hrefmx = "#modalMexico";} ?>
          <?php if($colaboradoresni == "[]"){ $hrefni = "#";}else{ $hrefni = "#modalNicaragua";} ?>
          <?php if($colaboradorespa == "[]"){ $hrefpa = "#";}else{ $hrefpa = "#modalPanama";} ?>

        <map name="mapa_n" id="mapa">

            <area alt="Colombia" onmouseover="entraPais(1)" onmouseout="saleMouseInte();" href={{$hrefco}} data-keyboard="true" data-toggle="modal" shape="poly" coords="330,279,347,262,347,226,378,187,394,230,433,238,431,274,414,279,414,319,366,292"/>
            <area alt="Costa Rica" onmouseover="entraPais(2)" onmouseout="saleMouseInte();" href={{$hrefcr}} shape="poly" data-toggle="modal" coords="265,192,290,182,308,208,307,223,291,216"/>
            <area alt="Dominicana" onmouseover="entraPais(3)" onmouseout="saleMouseInte();" href={{$hrefdo}} shape="poly" data-toggle="modal" coords="379,130,389,111,414,114,433,130"/>
            <area alt="El Salvador" onmouseover="entraPais(4)" onmouseout="saleMouseInte();" href={{$hrefsv}} shape="poly" data-toggle="modal" coords="237,173,243,155,254,183"/>
            <area alt="Guatemala" onmouseover="entraPais(5)" onmouseout="saleMouseInte();" href={{$hrefgu}} shape="poly" data-toggle="modal" coords="214,162,240,128,249,143,237,173"/>
            <area alt="Honduras" onmouseover="entraPais(6)" onmouseout="saleMouseInte();" href={{$hrefho}} shape="poly" data-toggle="modal" coords="242,156,247,142,290,146,253,183"/>
            <area alt="México" onmouseover="entraPais(7)" onmouseout="saleMouseInte();" href={{$hrefmx}} data-toggle="modal" shape="poly" coords="90,98,162,90,188,123,225,111,228,93,262,100,216,162,159,145,127,131,97,121"/>
            <area alt="Nicaragua" onmouseover="entraPais(8)" onmouseout="saleMouseInte();" href={{$hrefni}} shape="poly" data-toggle="modal" coords="254,182,292,145,291,181,267,194"/>
            <area alt="Panama" onmouseover="entraPais(9)" onmouseout="saleMouseInte();" href={{$hrefpa}} shape="poly" data-toggle="modal" coords="309,223,311,207,346,201,348,212,360,212,348,228,326,231"/>

        </map>
    </div>
    <div class="col-md-6 text-center" style="margin-top: 10%;">
        <h2 id="nombrepais"></h2>
        <h4 class="">Selecciona un país para ver más...</h4>
    </div>
</div>

<!-- Modal México-->
<div id="modalMexico" class="modal modal-fullscreen fade centraCont" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <!--<h3 class="modal-title modal-titleInt text-center">México</h3>-->
                <button type="button" class="close closeInt" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
                <div id="carouselMexico" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators" style="top:120%;">

                        @for($i = 0; $i < sizeof($colaboradoresmx); $i++)

                        <li data-target="#carouselMexico" data-slide-to={{$i}} class="active"></li>

                        @endfor
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner carousel-innerInt">

                      <?php
                        $classitem = 0;
                        $n_colaborador = "Colaborador México ";

                        for($i = 0; $i < sizeof($colaboradoresmx); $i++){

                          if($classitem == 0){
                            echo "<div class='item active'>";
                            $classitem = 1;
                          }
                          else{
                            echo "<div class='item'>";
                          }

                          echo "<div class='col-md-12 text-center'>";
                          ?>
                            {{ HTML::image($colaboradoresmx[$i]->url_foto, $n_colaborador.$i+1)}}
                          <?php
                          echo "</div>";

                          echo "<div class='col-md-12 carousel-caption carousel-captionInt'>";

                                echo "<h3>";
                                print_r($colaboradoresmx[$i]->name);
                                echo "</h3>";

                                echo "<h4>";
                                print_r($colaboradoresmx[$i]->puesto);
                                echo "<br>";
                                print_r($colaboradoresmx[$i]->area);
                                echo "</h4>";

                                echo "<div class='row'>";

                                    echo "<div class='col-md-1'></div>";

                                    echo "<div class='col-md-10'>";
                                        echo "<p class='text-justify'>";
                                        print_r($colaboradoresmx[$i]->resena);
                                        echo "</p>";
                                    echo "</div>";

                                    echo "<div class='col-md-1'></div>";

                              echo "</div>";

                            echo "</div>";
                            echo "</div>";
                          }

                          ?>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselMexico" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carouselMexico" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin modal México-->

<!-- Modal Costa Rica-->

<div id="modalCostaRica" class="modal modal-fullscreen fade centraCont" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <!--<h3 class="modal-title modal-titleInt text-center">México</h3>-->
                <button type="button" class="close closeInt" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
                <div id="carouselCostaRica" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators" style="top:120%;">

                        @for($i = 0; $i < sizeof($colaboradorescr); $i++)

                        <li data-target="#carouselCostaRica" data-slide-to={{$i}} class="active"></li>

                        @endfor
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner carousel-innerInt">

                      <?php
                        $classitem = 0;
                        $n_colaborador = "Colaborador Costa Rica ";

                        for($i = 0; $i < sizeof($colaboradorescr); $i++){

                          if($classitem == 0){
                            echo "<div class='item active'>";
                            $classitem = 1;
                          }
                          else{
                            echo "<div class='item'>";
                          }

                          echo "<div class='col-md-12 text-center'>";
                          ?>
                            {{ HTML::image($colaboradorescr[$i]->url_foto, $n_colaborador.$i+1)}}
                          <?php
                          echo "</div>";

                          echo "<div class='col-md-12 carousel-caption carousel-captionInt'>";

                                echo "<h3>";
                                print_r($colaboradorescr[$i]->name);
                                echo "</h3>";

                                echo "<h4>";
                                print_r($colaboradorescr[$i]->puesto);
                                echo "<br>";
                                print_r($colaboradorescr[$i]->area);
                                echo "</h4>";

                                echo "<div class='row'>";

                                    echo "<div class='col-md-1'></div>";

                                    echo "<div class='col-md-10'>";
                                        echo "<p class='text-justify'>";
                                        print_r($colaboradorescr[$i]->resena);
                                        echo "</p>";
                                    echo "</div>";

                                    echo "<div class='col-md-1'></div>";

                              echo "</div>";

                            echo "</div>";
                            echo "</div>";
                          }

                          ?>

                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselCostaRica" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carouselCostaRica" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin modal Costa Rica-->

<!-- Modal República Dominicana--><div id="modalRepublicaDominicana" class="modal modal-fullscreen fade centraCont" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <!--<h3 class="modal-title modal-titleInt text-center">México</h3>-->
                <button type="button" class="close closeInt" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
                <div id="carouselDominicana" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators" style="top:120%;">

                        @for($i = 0; $i < sizeof($colaboradoresdo); $i++)

                        <li data-target="#carouselDominicana" data-slide-to={{$i}} class="active"></li>

                        @endfor
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner carousel-innerInt">

                      <?php
                        $classitem = 0;
                        $n_colaborador = "Colaborador Republica Dominicana ";

                        for($i = 0; $i < sizeof($colaboradoresdo); $i++){

                          if($classitem == 0){
                            echo "<div class='item active'>";
                            $classitem = 1;
                          }
                          else{
                            echo "<div class='item'>";
                          }

                          echo "<div class='col-md-12 text-center'>";
                          ?>
                            {{ HTML::image($colaboradoresdo[$i]->url_foto, $n_colaborador.$i+1)}}
                          <?php
                          echo "</div>";

                          echo "<div class='col-md-12 carousel-caption carousel-captionInt'>";

                                echo "<h3>";
                                print_r($colaboradoresdo[$i]->name);
                                echo "</h3>";

                                echo "<h4>";
                                print_r($colaboradoresdo[$i]->puesto);
                                echo "<br>";
                                print_r($colaboradoresdo[$i]->area);
                                echo "</h4>";

                                echo "<div class='row'>";

                                    echo "<div class='col-md-1'></div>";

                                    echo "<div class='col-md-10'>";
                                        echo "<p class='text-justify'>";
                                        print_r($colaboradoresdo[$i]->resena);
                                        echo "</p>";
                                    echo "</div>";

                                    echo "<div class='col-md-1'></div>";

                              echo "</div>";

                            echo "</div>";
                            echo "</div>";
                          }

                          ?>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselDominicana" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carouselDominicana" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin modal República Dominicana-->

<!-- Modal Panáma--><div id="modalPanama" class="modal modal-fullscreen fade centraCont" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <!--<h3 class="modal-title modal-titleInt text-center">México</h3>-->
                <button type="button" class="close closeInt" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
                <div id="carouselPanama" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators" style="top:120%;">

                        @for($i = 0; $i < sizeof($colaboradorespa); $i++)

                        <li data-target="#carouselPanama" data-slide-to={{$i}} class="active"></li>

                        @endfor
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner carousel-innerInt">

                      <?php
                        $classitem = 0;
                        $n_colaborador = "Colaborador Panama ";

                        for($i = 0; $i < sizeof($colaboradorespa); $i++){

                          if($classitem == 0){
                            echo "<div class='item active'>";
                            $classitem = 1;
                          }
                          else{
                            echo "<div class='item'>";
                          }

                          echo "<div class='col-md-12 text-center'>";
                          ?>
                            {{ HTML::image($colaboradorespa[$i]->url_foto, $n_colaborador.$i+1)}}
                          <?php
                          echo "</div>";

                          echo "<div class='col-md-12 carousel-caption carousel-captionInt'>";

                                echo "<h3>";
                                print_r($colaboradorespa[$i]->name);
                                echo "</h3>";

                                echo "<h4>";
                                print_r($colaboradorespa[$i]->puesto);
                                echo "<br>";
                                print_r($colaboradorespa[$i]->area);
                                echo "</h4>";

                                echo "<div class='row'>";

                                    echo "<div class='col-md-1'></div>";

                                    echo "<div class='col-md-10'>";
                                        echo "<p class='text-justify'>";
                                        print_r($colaboradorespa[$i]->resena);
                                        echo "</p>";
                                    echo "</div>";

                                    echo "<div class='col-md-1'></div>";

                              echo "</div>";

                            echo "</div>";
                            echo "</div>";
                          }

                          ?>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselPanama" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carouselPanama" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin modal Panáma-->

<!-- Modal Guatemala-->
<div id="modalGuatemala" class="modal modal-fullscreen fade centraCont" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <!--<h3 class="modal-title modal-titleInt text-center">México</h3>-->
                <button type="button" class="close closeInt" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
                <div id="carouselGuatemala" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators" style="top:120%;">

                        @for($i = 0; $i < sizeof($colaboradoresgu); $i++)

                        <li data-target="#carouselGuatemala" data-slide-to={{$i}} class="active"></li>

                        @endfor
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner carousel-innerInt">

                      <?php
                        $classitem = 0;
                        $n_colaborador = "Colaborador Guatemala ";

                        for($i = 0; $i < sizeof($colaboradoresgu); $i++){

                          if($classitem == 0){
                            echo "<div class='item active'>";
                            $classitem = 1;
                          }
                          else{
                            echo "<div class='item'>";
                          }

                          echo "<div class='col-md-12 text-center'>";
                          ?>
                            {{ HTML::image($colaboradoresgu[$i]->url_foto, $n_colaborador.$i+1)}}
                          <?php
                          echo "</div>";

                          echo "<div class='col-md-12 carousel-caption carousel-captionInt'>";

                                echo "<h3>";
                                print_r($colaboradoresgu[$i]->name);
                                echo "</h3>";

                                echo "<h4>";
                                print_r($colaboradoresgu[$i]->puesto);
                                echo "<br>";
                                print_r($colaboradoresgu[$i]->area);
                                echo "</h4>";

                                echo "<div class='row'>";

                                    echo "<div class='col-md-1'></div>";

                                    echo "<div class='col-md-10'>";
                                        echo "<p class='text-justify'>";
                                        print_r($colaboradoresgu[$i]->resena);
                                        echo "</p>";
                                    echo "</div>";

                                    echo "<div class='col-md-1'></div>";

                              echo "</div>";

                            echo "</div>";
                            echo "</div>";
                          }

                          ?>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselGuatemala" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carouselGuatemala" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin modal Guatemala-->

<!-- Modal Honduras-->
<div id="modalHonduras" class="modal modal-fullscreen fade centraCont" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <!--<h3 class="modal-title modal-titleInt text-center">México</h3>-->
                <button type="button" class="close closeInt" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
                <div id="carouselHonduras" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators" style="top:120%;">

                        @for($i = 0; $i < sizeof($colaboradoresho); $i++)

                        <li data-target="#carouselHonduras" data-slide-to={{$i}} class="active"></li>

                        @endfor
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner carousel-innerInt">

                      <?php
                        $classitem = 0;
                        $n_colaborador = "Colaborador Guatemala ";

                        for($i = 0; $i < sizeof($colaboradoresho); $i++){

                          if($classitem == 0){
                            echo "<div class='item active'>";
                            $classitem = 1;
                          }
                          else{
                            echo "<div class='item'>";
                          }

                          echo "<div class='col-md-12 text-center'>";
                          ?>
                            {{ HTML::image($colaboradoresho[$i]->url_foto, $n_colaborador.$i+1)}}
                          <?php
                          echo "</div>";

                          echo "<div class='col-md-12 carousel-caption carousel-captionInt'>";

                                echo "<h3>";
                                print_r($colaboradoresho[$i]->name);
                                echo "</h3>";

                                echo "<h4>";
                                print_r($colaboradoresho[$i]->puesto);
                                echo "<br>";
                                print_r($colaboradoresho[$i]->area);
                                echo "</h4>";

                                echo "<div class='row'>";

                                    echo "<div class='col-md-1'></div>";

                                    echo "<div class='col-md-10'>";
                                        echo "<p class='text-justify'>";
                                        print_r($colaboradoresho[$i]->resena);
                                        echo "</p>";
                                    echo "</div>";

                                    echo "<div class='col-md-1'></div>";

                              echo "</div>";

                            echo "</div>";
                            echo "</div>";
                          }

                          ?>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselHonduras" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carouselHonduras" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin modal Honduras-->

<!-- Modal El salvador-->
<div id="modalSalvador" class="modal modal-fullscreen fade centraCont" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <!--<h3 class="modal-title modal-titleInt text-center">México</h3>-->
                <button type="button" class="close closeInt" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <div class="modal-body">
                <div id="carouselSalvador" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators" style="top:120%;">

                        @for($i = 0; $i < sizeof($colaboradoressv); $i++)

                        <li data-target="#carouselSalvador" data-slide-to={{$i}} class="active"></li>

                        @endfor
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner carousel-innerInt">

                      <?php
                        $classitem = 0;
                        $n_colaborador = "Colaborador Guatemala ";

                        for($i = 0; $i < sizeof($colaboradoressv); $i++){

                          if($classitem == 0){
                            echo "<div class='item active'>";
                            $classitem = 1;
                          }
                          else{
                            echo "<div class='item'>";
                          }

                          echo "<div class='col-md-12 text-center'>";
                          ?>
                            {{ HTML::image($colaboradoressv[$i]->url_foto, $n_colaborador.$i+1)}}
                          <?php
                          echo "</div>";

                          echo "<div class='col-md-12 carousel-caption carousel-captionInt'>";

                                echo "<h3>";
                                print_r($colaboradoressv[$i]->name);
                                echo "</h3>";

                                echo "<h4>";
                                print_r($colaboradoressv[$i]->puesto);
                                echo "<br>";
                                print_r($colaboradoressv[$i]->area);
                                echo "</h4>";

                                echo "<div class='row'>";

                                    echo "<div class='col-md-1'></div>";

                                    echo "<div class='col-md-10'>";
                                        echo "<p class='text-justify'>";
                                        print_r($colaboradoressv[$i]->resena);
                                        echo "</p>";
                                    echo "</div>";

                                    echo "<div class='col-md-1'></div>";

                              echo "</div>";

                            echo "</div>";
                            echo "</div>";
                          }

                          ?>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselSalvador" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carouselSalvador" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fin modal el Salvador-->

<script>
    function saleMouseInte() {
        document.getElementById('nombrepais').innerHTML = '';
        document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/gris.png';
    }
    function entraPais(v) {
        nombrepais = document.getElementById('nombrepais');
        if (v === 1) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/colombia.png';
            nombrepais = document.getElementById('nombrepais');
            nombrepais.innerHTML = 'Colombia';
        }
        if (v === 2) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/costarica.png';
            nombrepais.innerHTML = 'Costa Rica';
        }
        if (v === 3) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/dominicana.png';
            nombrepais.innerHTML = 'República Dominicana';
        }
        if (v === 4) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/elsalvador.png';
            nombrepais.innerHTML = 'El Salvador';
        }
        if (v === 5) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/guatemala.png';
            nombrepais.innerHTML = 'Guatemala';
        }
        if (v === 6) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/honduras.png';
            nombrepais.innerHTML = 'Honduras';
        }
        if (v === 7) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/mexico.png';
            nombrepais.innerHTML = 'México';
        }
        if (v === 8) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/nicaragua.png';
            nombrepais.innerHTML = 'Nicaragua';
        }
        if (v === 9) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/panama.png';
            nombrepais.innerHTML = 'Panamá';
        }
    }
    $("#sliderinte").on('slide.bs.carousel', function (evt) {

        var step = $(evt.relatedTarget).index();

        $('#slider_captions .carousel-caption:not(#caption-' + step + ')').fadeOut('fast', function () {
            $('#caption-' + step).fadeIn();
        });

    });

    $(document).ready(function (e) {
        $('img[usemap]').rwdImageMaps();
    });
</script>
