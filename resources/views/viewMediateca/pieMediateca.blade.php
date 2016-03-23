<style>
	.f1SM > ul{
		list-style: none;
		display: table;
		overflow: hidden;
		width: 100%;
		position: relative;
		padding:0px;
	   
	}
	.f1SM{
		padding:0px;
		color:white;

	}
	.f1SM > div {
		display: none;
		padding:20px;

	}

	.f1SM:hover > div{
		display: block;
		position: relative;
		text-align: center;
		text-decoration: none;
		background: rgba(0, 0, 0, 0.3);
	}
	.fondoColaboraSM{
		border-bottom: 100px solid rgba(0, 0, 0, 0.3); 
		padding-left:50px;
		/*border-left: 35px solid transparent;*/
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
    <div class="f1SM " style="position:fixed; top:90px; left:0px; ">
		<ul>
			<li><div class="fondoColaboraSM"><a href="#"><p class="txtPestanaSM" id="desplegar">MENU</p></a></div></li>
		</ul>
        
        <div style="position: relative; top:-150px;">
            <table class="table">
                <tr>
                    <td>
                        Misión
                    </td>
                </tr><tr>
                    <td>
                        Mapa Curricular
                    </td>
                </tr><tr>
                    <td>
                        Calendario
                    </td>
                </tr><tr>
                    <td>
                        Materiales Educativos
                    </td>
                </tr><tr>
                    <td>
                        Programación Televisiva
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="derechaSociales" style="position:fixed; top: 50%; left:80%;">
	<ul class="sociales">
		<li><a href="https://twitter.com/tveducativamx" target="_blank" class="cambiacolorredesSociales"><span><i class="fa fa-twitter fa-2x " id="ct"></i></span></a></li><br/>
		<li><a href="https://www.facebook.com/TvEducativaMx" target="_blank" class="cambiacolorredesSociales"><span><i class="fa fa-facebook fa-2x" id="cf"></i></span></a></li><br/>
		<li><a href="https://www.youtube.com/user/tveducativamx?feature=sub_widget_1" target="_blank" class="cambiacolorredesSociales"><span><i class="fa fa-youtube-play fa-2x" id="cy"></i></span></a></li>
	</ul>
</div>