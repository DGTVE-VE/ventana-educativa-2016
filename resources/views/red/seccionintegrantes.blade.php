
<div class="row" style="background-image: url('imagenes/red/integrantes/gradiente.jpg');">
    <div class="col-md-12 fondo_Obscuro">
        <div class="col-md-12 text-center text-uppercase">
            <h2> Nuestros integrantes </h2>
        </div>
    </div>
    <div class="col-md-6">
        <img name="imagenMapa_n"  src="imagenes/red/integrantes/gris.png"  border="5px" id="imagenMapa" class="mapaCentroAmerica img-responsive" usemap="#mapa_n" alt="" />
        <map name="mapa_n" id="mapa">         
            <area alt="Colombia" onmouseover="document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/colombia.png';" onmouseout="saleMouse();" href="integrantesporpais" shape="poly" coords="331,279,347,261,347,226,377,187,394,230,434,238,431,274,414,279,413,321,381,380,318,330"/>
            <area alt="Costa Rica" onmouseover="document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/costarica.png';" onmouseout="saleMouse();" href="#" shape="poly" coords="265,192,290,182,308,208,307,223,291,216"/>
            <area alt="Dominicana" onmouseover="document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/dominicana.png';" onmouseout="saleMouse();" href="#" shape="poly" coords="379,130,389,111,414,114,433,130"/>
            <area alt="El Salvador" onmouseover="document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/salvador.png';" onmouseout="saleMouse();" href="#" shape="poly" coords="237,173,243,155,254,183"/>
            <area alt="Guatemala" onmouseover="document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/guatemala.png';" onmouseout="saleMouse();" href="#" shape="poly" coords="214,162,240,128,249,143,237,173"/>
            <area alt="Honduras" onmouseover="document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/honduras.png';" onmouseout="saleMouse();" href="#" shape="poly" coords="242,156,247,142,290,146,253,183"/>
            <area alt="México" onmouseover="document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/mexico.png';" onmouseout="saleMouse();" href="#myModal" data-toggle="modal" shape="poly" coords="126,131,187,124,225,112,227,94,262,100,216,162,160,147"/>
            <area alt="Nicaragua" onmouseover="document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/nicaragua.png';" onmouseout="saleMouse();" href="#" shape="poly" coords="254,182,292,145,291,181,267,194"/>
            <area alt="Panama" onmouseover="document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/panama.png';" onmouseout="saleMouse();" href="#" shape="poly" coords="309,223,311,207,346,201,348,212,360,212,348,228,326,231"/>
        </map>
    </div>
</div>



<div class="modal fade modal-fullscreen force-fullscreen" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <img src="imagenes/red/integrantes/tache.png" class="close" data-dismiss="modal">
                <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
            </div>
            <div class="modal-body">
                <!-- Full Page Image Background Carousel Header -->
                <div id="myCarousel" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for Slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <!-- Set the first background image using inline CSS below. -->
                            <div class="fill text-center">
                                <img src="imagenes/red/integrantes/GIBZKARODRIGUEZ.png" class="img-circle">
                            </div>
                            <div class="carousel-caption">
                                <h3>GIBZKA RODRIGUEZ DE VERNIER</h3>
                                <p class="text-justify">                                                                    
                                <h4>Ministerio de Educación de Panamá</h4>
                                <h4>Supervisora Nacional de Matemáticas</h4>
                                    Licenciada y Profesora en Matemáticas. Maestría en Ciencias con  Especialización en Matemática 
                                    Educativa y  Maestría en Desarrollo de Sistemas Educativos con Especialización en Supervisión y 
                                    Currículum. Con más de 35 años al servicio de la Educación como: Profesora del Nivel Secundario. 
                                </p>
                            </div>
                        </div>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="icon-next"></span>
                    </a>

                </div>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
    function saleMouse() {
        document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/gris.png';
    }
    $(".force-fullscreen").on("show.bs.modal", function () {
        var width = $(window).width() - 500;
        $(this).find(".modal-body").css("max-width", width);
    });
</script>