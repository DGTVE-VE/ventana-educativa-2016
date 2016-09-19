<div class="row fondo_transparente">
  <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0px;">
    <div id="carouselSliderHome" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carouselSliderHome" data-slide-to="0" class="active" ></li>
        @for($i = 1; $i < sizeof($banner); $i++)
        <li data-target="#carouselSliderHome" data-slide-to={{$i}}></li>
        @endfor
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox" style="margin:0px;">

        <div class="item active">
          <div id="parallaxcarouselSliderHome" class="parallaxcarouselSliderHome visible-md-block visible-lg-block">
            {{ HTML::image($banner[0]->url_archivo,'bannerSlider1', array('id'=>'imgSliderHome','class'=>'img-responsive imgSliderHome'))}}
          </div>
          <div class="visible-xs-block visible-sm-block">
            {{ HTML::image($banner[0]->url_archivo,'bannerSlider1', array('id'=>'imgSliderHomeSM','class'=>'img-responsive'))}}
          </div>
          {{ HTML::image('imagenes/red/Banners/imgTransparente.png','bannerSlider1', array('class'=>'img-responsive visible-md-block visible-lg-block tamMin'))}}
        </div>

        @for($i = 1; $i < sizeof($banner); $i++)
        <div class="item">
          <div id={{"parallaxcarouselSliderHome".$i}} class="parallaxcarouselSliderHome visible-md-block visible-lg-block">
            {{ HTML::image($banner[$i]->url_archivo,'bannerSlider', array('id'=>'imgSliderHome','class'=>'img-responsive imgSliderHome'))}}
          </div>
          <div class="visible-xs-block visible-sm-block">
            {{ HTML::image($banner[$i]->url_archivo,'bannerSlider', array('id'=>'imgSliderHomeSM','class'=>'img-responsive'))}}
          </div>
          {{ HTML::image('imagenes/red/Banners/imgTransparente.png','bannerSlider1', array('class'=>'img-responsive visible-md-block visible-lg-block tamMin'))}}
        </div>

        @endfor


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
