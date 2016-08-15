<link rel="stylesheet" type="text/css" href="js/fullPage/jquery.fullPage.css"/>
<script type="text/javascript" src="js/fullPage/vendors/scrolloverflow.min.js"></script>
<script type="text/javascript" src="js/fullPage/jquery.fullPage.js"></script>
<link rel="stylesheet" type="text/css" href="css/red/animate.css"/>

<div id="wrapperConocenos">
    <div class="overlayConocenos"></div>
    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapperConocenos" role="navigation">
        <ul class="nav sidebar-nav" style="color:white;">
            <h4 class="etiquetaMenu">MENÚ</h4>
            <li>
                <a href="#">BLOG</a>
            </li>
            <li>
                <a href="#">ACERCA DE</a>
            </li>
        </ul>
    </nav>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapperConocenos" style="padding:0;">
        <button type="button" class="hamburgerConocenos is-closed" data-toggle="offcanvas" style="position: relative; top:75px; left:50px">
            <span class="hamb-top" style="color:white;"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>
	<!--************** Dentro de este div va el contenido de la página *********************-->
        <div class="container-fluid" style="padding:0; position: relative; top:-35px;">
			<div id="fullpage">
				<div class="section fondo1">
					@include('viewConocenos.vistaVideo')
				</div>
				<div class="section">
					@include('viewConocenos.slider')
				</div>
				<div class="section fondo4 fp-auto-height">
					
				</div>
				<div class="section fondo3">LINKS</div>
				<div class="section fondo1">Comunidad Educativa</div>
				<div class="section fondo2">Noticias, Redes Sociales</div>
				<div class="section fondo3">Contacto</div>
			</div>
        </div>
        <!-- /#wrapper -->
    </div>
</div>
<script>
	$(document).ready(function(){
		
	});
/*	**********	Modificacion de estilo de barra de navegación de ventana	**********	*/
	$('#formaBuscar').css('visibility','hidden');
</script>