<div class="navbar"> <!-- navbar-fixed-top role="navigation"-->

    <div class="navbar-header">
        <div class="navbar-header"><a class="navbar-brand" href="#">Logo Ventana</a></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse pull-right">
        <ul class="nav navbar-nav">
      
            <form class="navbar-form col-md-5" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Entrar</b> <span class="caret"></span></a>
                <ul id="login-dp" class="dropdown-menu pull-left">
                    <li>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="social-buttons">
                                    <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                    <a href="#" class="btn btn-tw"><i class="fa fa-google-plus"></i> Google</a>
                                </div>
                                <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2">Dirección de correo electrónico</label>
                                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputPassword2">Contraseña</label>
                                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                        <div class="help-block text-right"><a href="">¿Olvide mi contraseña?</a></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </li> 
            <li class="dropdown">
                <button type="button dropdown-toggle" data-toggle="dropdown" class="btn btn-default btn-lg">
                    <span class="glyphicon glyphicon glyphicon-th"></span>
                </button>                            
                <ul class="dropdown-menu pull-left">
                    <li>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="btn-group-vertical">
                                    <li><a href="{{URL::to('indexRed')}}">Red Mesoamericana</a></li>
                                    <li><a href="{{URL::to('indexVod')}}">VOD</a></li>
                                    <li><a href="{{URL::to('indexDocentes')}}">Docentes</a></li>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li> 
        </ul>
    </div>    
</div>