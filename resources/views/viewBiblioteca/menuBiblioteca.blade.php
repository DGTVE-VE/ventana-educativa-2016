<div class="row">
    <div id="wrapper-biblioteca">
        <div class="overlay"></div>
        <!-- Sidebar -->
        <div class="margensuperiormenuBib">
            <nav class="navbar navbar-inverse navbar-fixed-top margensuperiormenuBib" id="sidebar-wrapper-biblioteca" role="navigation">
                <ul class="nav sidebar-nav">
                    <li><a href="{{url('biblioteca/')}}">Inicio</a></li>
                    @foreach($bibliotecaMenu as $bibliotecaMenu)
                        <li><a href="{{url('biblioteca/tomos/'.$pais.'/'.$bibliotecaMenu->id)}}">{{$bibliotecaMenu->nombre}}</a></li>
                    @endforeach 
                </ul>
            </nav>

            <!-- Page Content -->
            <div id="page-content-wrapper-bib" class="margensuperiormenuBib">
                <button type="button" class="hamburger-biblioteca is-closed margensuperiormenuBib" data-toggle="offcanvas" >
                    <span class="vertical-biblioteca">MENÚ</span>
                </button>
            </div> <!-- fin page-content-->
        </div>
    </div> 
</div>

<script src="{{url('js/biblioteca/menuBiblioteca.js')}}"></script>