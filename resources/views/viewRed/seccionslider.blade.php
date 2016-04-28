<div class="row fondo_transparente">
    <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0px;">
        <div id="carouselSliderHome" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carouselSliderHome" data-slide-to="0" class="active" ></li>
                <li data-target="#carouselSliderHome" data-slide-to="1"></li>
                <li data-target="#carouselSliderHome" data-slide-to="2"></li>
                <li data-target="#carouselSliderHome" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" style="margin:0px;">
                <div class="item active">
					<div id="parallaxcarouselSliderHome" class="parallaxcarouselSliderHome">
						{{ HTML::image('imagenes/red/Banners/1.jpg','bannerSlider1', array('id'=>'imgSliderHome','class'=>'img-responsive imgSliderHome'))}}
					</div>
					{{ HTML::image('imagenes/red/Banners/imgTransparente.png','bannerSlider1', array('class'=>'img-responsive'))}}
                </div>
                <div class="item">
					{{ HTML::image('imagenes/red/Banners/imgTransparente.png','bannerSlider1', array('class'=>'img-responsive'))}}
					<div id="parallaxcarouselSliderHome1" class="parallaxcarouselSliderHome">
						{{ HTML::image('imagenes/red/Banners/2.jpg','bannerSlider1', array('id'=>'imgSliderHome','class'=>'img-responsive imgSliderHome'))}}
					</div>
                </div>
                <div class="item">
					{{ HTML::image('imagenes/red/Banners/imgTransparente.png','bannerSlider1', array('class'=>'img-responsive'))}}
					<div id="parallaxcarouselSliderHome2" class="parallaxcarouselSliderHome">
						{{ HTML::image('imagenes/red/Banners/banner-3.jpg','bannerSlider3', array('id'=>'imgSliderHome3','class'=>'img-responsive imgSliderHome'))}}
					</div>
                </div>
                <div class="item">
					{{ HTML::image('imagenes/red/Banners/imgTransparente.png','bannerSlider1', array('class'=>'img-responsive'))}}
					<div id="parallaxcarouselSliderHome3" class="parallaxcarouselSliderHome">
						{{ HTML::image('imagenes/red/Banners/banner-4.jpg','bannerSlider4', array('id'=>'imgSliderHome4','class'=>'img-responsive imgSliderHome'))}}
					</div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carouselSliderHome" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carouselSliderHome" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>