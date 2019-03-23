<!-- 
    index-carousel.php
    Picture carousel used in index.php
 -->

<div id="homeCarousel" class="carousel slide vhmavi-home-carousel" data-ride="carousel">
    <!--
        Carousel indicators
        It indicates on which picture of the carousel we are
    -->
    <ol class="carousel-indicators">
      <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#homeCarousel" data-slide-to="1"></li>
      <li data-target="#homeCarousel" data-slide-to="2"></li>
      <li data-target="#homeCarousel" data-slide-to="3"></li>
      <li data-target="#homeCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Carousel pictures -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/index/carousel1.jpg" class="d-block w-100" alt="carousel1">
        </div>
        <div class="carousel-item">
            <img src="img/index/carousel2.jpg" class="d-block w-100" alt="carousel2">
        </div>
        <div class="carousel-item">
            <img src="img/index/carousel3.jpg" class="d-block w-100" alt="carousel3">
        </div>
        <div class="carousel-item">
            <img src="img/index/carousel4.jpg" class="d-block w-100" alt="carousel4">
        </div>
        <div class="carousel-item">
            <img src="img/index/carousel5.jpg" class="d-block w-100" alt="carousel5">
        </div>
    </div>

    <!--
        Carousel controls
        It allows to change from one picture to the previous or next one.
    -->
    <!-- Previous -->
    <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <!-- Next -->
    <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>