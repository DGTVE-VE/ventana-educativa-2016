<nav id="menuVOD" class="navbar navbar-default navbar-fixed-top ancho-menu-vod">
    <div class="navbar-header">
        <button class="navbar-toggle fondo-menu-SM" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse js-navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown mega-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="txt-explorar">Explorar<span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
                <ul class="dropdown-menu mega-dropdown-menu row">
                    <li class="col-sm-11">
                        <ul>
                            <li><a href="{{url('educaplay')}}">Inicio</a></li>
                            @foreach($menuEducaplay as $menuEducaplays)
                            <li><a href="#">{{$menuEducaplays->categoria}}</a></li>
                            @endforeach 
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div><!-- /.nav-collapse -->
</nav>