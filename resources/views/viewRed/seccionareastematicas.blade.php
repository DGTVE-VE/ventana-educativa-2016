        <!--imagen oculta solo se usa para el compartir de facebook-->
    {{ HTML::image('imagenes/red/compartirfacebook.jpg','REDMITE')}}

<div class="row fondo_Obscuro" style="margin-top:-1px;">
    <div class="col-md-12 text-center text-uppercase">
        <p class="pleca"> Áreas Temáticas</p>
    </div>
</div>
<div class="row fondo_Claro">
    <div class="col-md-12">
        <div class="division">
        </div>
    </div>
    <div class="col-sm-6 col-md-3 col-md-offset-2">
        <div class="table-responsive">
            <table>
                <tr>
                    <td class="imgTabla"><a href="{{url('redmite/areastematicas#redesconocimiento')}}">
                        <!--<img href="#" id="imgRedesConocimiento" alt="imagen fija" src="imagenes/red/areasTematicas/RedesConocimiento.png" onmouseenter="imgResalta('RedesConocimiento')" onmouseleave="imgNormal('RedesConocimiento')"/></td>-->
                    {{ HTML::image('imagenes/red/areasTematicas/RedesConocimiento.png','imagen fija', array('id'=>'imgRedesConocimiento', 'onmouseenter'=>'imgResalta("RedesConocimiento")','onmouseleave'=>'imgNormal("RedesConocimiento")'))}}
                    </td>
                    </a>
                    <td class="txtTabla"><h3><strong>Redes de <br> Conocimiento y <br> Aprendizaje</strong></h3>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="table-responsive">
            <table>
                <tr>
                    <td class="imgTabla"><a href="{{('redmite/areastematicas#modelos')}}">
                        <!--<img href="#" id="imgAmbientesEducativos" alt="imagen fija" src="imagenes/red/areasTematicas/ambientesEducativos.png" onmouseenter="imgResalta('AmbientesEducativos')" onmouseleave="imgNormal('AmbientesEducativos')"/></td>-->
                    {{ HTML::image('imagenes/red/areasTematicas/ambientesEducativos.png','imagen fija', array('id'=>'imgAmbientesEducativos', 'onmouseenter'=>'imgResalta("AmbientesEducativos")','onmouseleave'=>'imgNormal("AmbientesEducativos")'))}}
                    </td>
                    </a>
                    <td class="txtTabla"><h3><strong>Modelos y <br> Ambientes <br> Educativos</strong></h3>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="table-responsive">
            <table>
                <tr>
                    <td class="imgTabla"><a href="{{('redmite/areastematicas#gestion')}}">
                        <!--<img id="imgGestioncalidad" alt="imagen fija" src="imagenes/red/areasTematicas/GestionCalidad.png" onmouseenter="imgResalta('Gestioncalidad')" onmouseleave="imgNormal('Gestioncalidad')"/></td>-->
                    {{ HTML::image('imagenes/red/areasTematicas/GestionCalidad.png','imagen fija', array('id'=>'imgGestioncalidad', 'onmouseenter'=>'imgResalta("Gestioncalidad")','onmouseleave'=>'imgNormal("Gestioncalidad")'))}}
                    </td>
                    </a>
                    <td class="txtTabla"><h3><strong>Gestión y Calidad <br> de Programas <br> Educativos</strong></h3>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="row fondo_Claro">
    <div class="division">
    </div>
</div>
<div class="row fondo_Claro">
    <div class="col-sm-6 col-md-4 col-md-offset-3">
        <div class="table-responsive">
            <table>
                <tr>
                    <td class="imgTabla"><a href="{{url('redmite/areastematicas#multimedia')}}">
                        <!--<img href="#" id="imgMultimedia" alt="imagen fija" src="imagenes/red/areasTematicas/Multimedia.png" onmouseenter="imgResalta('Multimedia')" onmouseleave="imgNormal('Multimedia')"/></td>-->
                        {{ HTML::image('imagenes/red/areasTematicas/Multimedia.png','imagen fija', array('id'=>'imgMultimedia', 'onmouseenter'=>'imgResalta("Multimedia")','onmouseleave'=>'imgNormal("Multimedia")'))}}
                    </td>
                    </a>
                    <td class="txtTabla"><h3><strong>Multimedia y <br> Desarrollo Educativo</strong></h3>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="table-responsive">
            <table>
                <tr>
                    <td class="imgTabla"><a href="{{url('redmite/areastematicas#politica')}}">
                        <!--<img id="imgPoliticaEducativa" alt="imagen fija" src="imagenes/red/areasTematicas/PoliticaEducativa.png" onmouseenter="imgResalta('PoliticaEducativa')" onmouseleave="imgNormal('PoliticaEducativa')"/></td>-->
                    {{ HTML::image('imagenes/red/areasTematicas/PoliticaEducativa.png','imagen fija', array('id'=>'imgPoliticaEducativa', 'onmouseenter'=>'imgResalta("PoliticaEducativa")','onmouseleave'=>'imgNormal("PoliticaEducativa")'))}}
                    </td>
                    </a>
                    <td class="txtTabla"><h3><strong>Política Educativa y <br> Cambio Social</strong></h3>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="row fondo_Claro">
    <div class="col-md-12">
        <div class="division">
        </div>
    </div>
</div>