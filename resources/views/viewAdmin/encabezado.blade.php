<nav class="navbar navbar-default no-margin">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header fixed-brand">
        <a href="{{url('ventana_educativa')}}">
            {{ HTML::image('imagenes/admin/logoventana.png','Ventana Educativa', ['class'=>'image-responsive imgLogo']) }}
        </a>                    
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button></li>
        </ul>
    </div><!-- bs-example-navbar-collapse-1 -->
</nav>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
            <li class="active">
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa  fa-home fa-stack-1x "></i></span> Inicio</a>
            </li>
            <li class="">
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa  fa-book fa-stack-1x "></i></span> Biblioteca</a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                    <li><a href="#">link1</a></li>
                    <li><a href="#">link2</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-binoculars fa-stack-1x "></i></span> Conocenos</a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>

                </ul>
            </li>                    
            <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span> Cultura</a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>

                </ul>
            </li>
            <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span> Educamedia</a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>

                </ul>
            </li> 
            <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-film fa-stack-1x "></i></span> Educaplay</a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>

                </ul>
            </li>                    
            <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-globe fa-stack-1x "></i></span> Redmite</a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>

                </ul>
            </li>                    
            <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-user-md fa-stack-1x "></i></span> Salud</a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>

                </ul>
            </li>                    
        </ul>
    </div><!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid xyz">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->