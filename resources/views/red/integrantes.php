
<div class="row" style="background-image: url('imagenes/red/integrantes/gradiente.jpg');">
    <div class="col-md-12 fondo_Obscuro">
        <div class="col-md-12 text-center text-uppercase">
            <h2> Nuestros integrantes </h2>
        </div>
    </div>
    <div class="col-md-6">
        <img name="imagenMapa_n"  src="imagenes/red/integrantes/gris.png"  border="5px" id="imagenMapa" class="mapaCentroAmerica img-responsive" usemap="#mapa_n" alt="" />
        <map name="mapa_n" id="mapa">         
            <area alt="Colombia" onmouseover="document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/colombia.png';" onmouseout="saleMouse();" href="#" shape="poly" coords="331,279,347,261,347,226,377,187,394,230,434,238,431,274,414,279,413,321,381,380,318,330"/>
            <area alt="Costa Rica" onmouseover="document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/costarica.png';" onmouseout="saleMouse();" href="#" shape="poly" coords="265,192,290,182,308,208,307,223,291,216"/>
            <area alt="Dominicana" onmouseover="document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/dominicana.png';" onmouseout="saleMouse();" href="#" shape="poly" coords="379,130,389,111,414,114,433,130"/>
            <area alt="El Salvador" onmouseover="document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/salvador.png';" onmouseout="saleMouse();" href="#" shape="poly" coords="237,173,243,155,254,183"/>
            <area alt="Guatemala" onmouseover="document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/guatemala.png';" onmouseout="saleMouse();" href="#" shape="poly" coords="214,162,240,128,249,143,237,173"/>
            <area alt="Honduras" onmouseover="document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/honduras.png';" onmouseout="saleMouse();" href="#" shape="poly" coords="242,156,247,142,290,146,253,183"/>
            <area alt="México" onmouseover="document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/mexico.png';" onmouseout="saleMouse();" href="#" shape="poly" coords="126,131,187,124,225,112,227,94,262,100,216,162,160,147"/>
            <area alt="Nicaragua" onmouseover="document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/nicaragua.png';" onmouseout="saleMouse();" href="#" shape="poly" coords="254,182,292,145,291,181,267,194"/>
            <area alt="Panama" onmouseover="document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/panama.png';" onmouseout="saleMouse();" href="#" shape="poly" coords="309,223,311,207,346,201,348,212,360,212,348,228,326,231"/>
        </map>
    </div>
    <div class="col-md-6">
        <button type="button" class="btn btn-lg btn-link center-block" style="	margin-top: 150px;" data-toggle="modal" data-target="#modalIntegrantes" data-local="#carruselIntegrantes">Ver más</button>
    </div>
</div>


<div id="carruselIntegrantes" class="carousel slide carousel-fit" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide">
      <div class="carousel-caption">
        <h3>First slide label</h3>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="item">
      <img data-src="holder.js/750x400/auto/#666:#444/text:Second slide" alt="Second slide">
      <div class="carousel-caption">
        <h3>Second slide label</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="item">
      <img data-src="holder.js/600x300/auto/#555:#333/text:Third slide" alt="Third slide">
      <div class="carousel-caption">
        <h3>Third slide label</h3>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>

<div class="modal fade modal-fullscreen force-fullscreen" id="modalIntegrantes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button class="btn btn-danger pull-right" type="button" data-dismiss="modal" aria-hidden="true">
          <span class="glyphicon glyphicon-remove"></span>
          <span>Cerrar</span>
        </button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body…</p>
      </div>
      <div class="modal-footer">
        <!-- Controls -->
        <a class="left carousel-control" href="#carruselIntegrantes" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carruselIntegrantes" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    function saleMouse(){
        document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/gris.png';    
    }
    
</script>