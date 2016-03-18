<style>
	.f1SM > ul{
		list-style: none;
		display: table;
		overflow: hidden;
		width: 100%;
		position: relative;
		margin-bottom:0px;
		padding:0px;
	   
	}
	.f1SM{
		padding:0px;

	}
	.f1SM > div {
		display: none;
		padding:20px;

	}

	.f1SM:hover > div{
		display: block;
		line-height: 20px;
		position: relative;
		text-align: center;
		text-decoration: none;
		background: rgba(0, 0, 0, 0.3);
	}
	.fondoColaboraSM{
		width:30px;
		height:80px;
		border-bottom: 100px solid rgba(0, 0, 0, 0.3); 
		padding-left:10px;
		/*border-right: 35px solid transparent;*/
		writing-mode: vertical-lr;
	}
	.fondoColaboraSM>a{
		text-decoration: none;
		 -webkit-transition: all 4s ease;
		-moz-transition: all 4s ease;
		-ms-transition: all 4s ease;
		-o-transition: all 4s ease;
		transition: all 4s ease;
	}
</style>
<div class="visible-xs-block visible-sm-block visible-md-block visible-lg-block">
    <div class="tabs_holder f1SM " style="position:fixed; top:90px; left:0px; width:120px;">
            <ul>
                <li><div class="fondoColaboraSM"><a href="#"><p class="txtPestanaSM" id="desplegar">MENU</p></a></div></li>
            </ul>
        
        <div id="efectobarramenu2" style="width:120px;">
            <table class="table tablaCOlaboradores" id="efectobarramenu2" style="border-top-style: none !important;">
                <tr>
                    <td>
                        <a href=" http://www.gob.mx/sep" target="_blank" onMouseOver="document.logosepsm.src = 'imagenes/ventana/pieventana/sepcolor.png';"
                           onMouseOut="document.logosepsm.src = 'imagenes/ventana/pieventana/sep.png';">
                            {{ HTML::image('imagenes/ventana/pieventana/sep.png','Logo sep',  ['name'=>'logosepsm', 'class'=>'img-responsive'])}}
                            <!--<img class="img-responsive" src="imagenes/ventana/pieventana/sep.png" style="margin-left: -10% !important;" name="logoSep">-->
                        </a> 
                    </td>
                </tr><tr>
                    <td>
                        <a href=" http://www.televisioneducativa.gob.mx/" target="_blank" onMouseOver="document.logotvesm.src = 'imagenes/ventana/pieventana/tvecolor.png';"
                           onMouseOut="document.logotvesm.src = 'imagenes/ventana/pieventana/tve.png';">
                            {{ HTML::image('imagenes/ventana/pieventana/tve.png','Logo tve',  ['name'=>'logotvesm','class'=>'img-responsive'])}}     
                         <!--<img class="img-responsive" src="imagenes/ventana/pieventana/tve.png" style="margin-left: -10% !important;" name="logotve" >-->
                        </a> 
                    </td>
                </tr><tr>
                    <td>
                        <a href=" http://www.csuca.org/" target="_blank" onMouseOver="document.logocsucasm.src = 'imagenes/ventana/pieventana/csucacolor.png';"
                           onMouseOut="document.logocsucasm.src = 'imagenes/ventana/pieventana/csuca.png';">                            
                            {{ HTML::image('imagenes/ventana/pieventana/csuca.png','Logo csuca',  ['name'=>'logocsucasm','class'=>'img-responsive'])}}
                             <!--<img class="img-responsive" src="{!! HTML::image('imagenes/ventana/pieventana/csuca.png') !!}" style="margin-left: -35% !important;" name="MyImage2">-->
                        </a>       
                    </td>
                </tr><tr>
                    <td>
                        <a href=" http://ceducar.info/ceducar/" target="_blank" onMouseOver="document.logoceccsicasm.src = 'imagenes/ventana/pieventana/ceccsicacolor.png';"
                           onMouseOut="document.logoceccsicasm.src = 'imagenes/ventana/pieventana/ceccsica.png';">
                            {{ HTML::image('imagenes/ventana/pieventana//ceccsica.png','Logo ceccsica',  ['name'=>'logoceccsicasm','class'=>'img-responsive'])}}
                            <!--<img class="img-responsive" src="imagenes/ventana/pieventana/ceccsica.png" style="margin-left: 30% !important;" name="MyImage3">-->
                        </a>    
                    </td>
                </tr><tr>
                    <td>
                        <a href=" https://www.unah.edu.hn/va" target="_blank" onMouseOver="document.logounahsm.src = 'imagenes/ventana/pieventana/unahcolor.png';"
                           onMouseOut="document.logounahsm.src = 'imagenes/ventana/pieventana/logounah.png';">
                            {{ HTML::image('imagenes/ventana/pieventana/logounah.png','Logo unah',  ['name'=>'logounahsm','class'=>'img-responsive'])}}
                            <!--<img class="img-responsive" src="imagenes/ventana/pieventana/logounah.png" style="margin-left: 30% !important;" name="MyImage4">-->
                        </a> 
                    </td>
                </tr><tr>
                    <td>
                        <a href="http://www.mep.go.cr/" target="_blank" onMouseOver="document.logomepsm.src = 'imagenes/ventana/pieventana/mepcolor.png';"
                           onMouseOut="document.logomepsm.src = 'imagenes/ventana/pieventana/mep.png';">
                            {{ HTML::image('imagenes/ventana/pieventana/mep.png','Logo sep',  ['name'=>'logomepsm','class'=>'img-responsive'])}}
                            <!--<img class="img-responsive" src="imagenes/ventana/pieventana/mep.png" style="margin-left: 30% !important;"  name="MyImage5">-->
                        </a> 
                    </td>
                </tr><tr>
                    <td>
                        <a href=" http://amexcid.gob.mx/" target="_blank" onMouseOver="document.logoamexcidsm.src = 'imagenes/ventana/pieventana/amexcidcolor.png';"
                           onMouseOut="document.logoamexcidsm.src = 'imagenes/ventana/pieventana/amexcid.png';">
                            {{ HTML::image('imagenes/ventana/pieventana/amexcid.png','Logo amexcid',  ['name'=>'logoamexcidsm','class'=>'img-responsive'])}}
                            <!--<img class="img-responsive" src="imagenes/ventana/pieventana/amexcid.png" name="MyImage6" width="120" height="100" style="margin-top: 5%; margin-left: 20% !important;">-->
                        </a> 
                    </td>
                </tr>
            </table>
           
        </div>
    </div>
</div>