        <!--imagen oculta solo se usa para el compartir de facebook-->
    {{ HTML::image('imagenes/red/compartirfacebook.jpg','REDMITE', array('style'=>'display:none'))}}

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
                    {{ HTML::image('imagenes/red/areasTematicas/RedesConocimiento.png','imagen fija', array('id'=>'imgRedesConocimiento', 'onmouseenter'=>'imgResaltaAreasTema("RedesConocimiento")','onmouseleave'=>'imgNormalAreasTema("RedesConocimiento")'))}}
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
                    {{ HTML::image('imagenes/red/areasTematicas/ambientesEducativos.png','imagen fija', array('id'=>'imgambientesEducativos', 'onmouseenter'=>'imgResaltaAreasTema("ambientesEducativos")','onmouseleave'=>'imgNormalAreasTema("ambientesEducativos")'))}}
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
                    {{ HTML::image('imagenes/red/areasTematicas/GestionCalidad.png','imagen fija', array('id'=>'imgGestionCalidad', 'onmouseenter'=>'imgResaltaAreasTema("GestionCalidad")','onmouseleave'=>'imgNormalAreasTema("GestionCalidad")'))}}
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
                        {{ HTML::image('imagenes/red/areasTematicas/Multimedia.png','imagen fija', array('id'=>'imgMultimedia', 'onmouseenter'=>'imgResaltaAreasTema("Multimedia")','onmouseleave'=>'imgNormalAreasTema("Multimedia")'))}}
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
                    {{ HTML::image('imagenes/red/areasTematicas/PoliticaEducativa.png','imagen fija', array('id'=>'imgPoliticaEducativa', 'onmouseenter'=>'imgResaltaAreasTema("PoliticaEducativa")','onmouseleave'=>'imgNormalAreasTema("PoliticaEducativa")'))}}
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