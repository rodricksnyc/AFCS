<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">

  <link rel="stylesheet" href="css5/bootstrap-edited.css">

  <link rel="stylesheet" href="css5/bootstrap-theme.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">

  <link rel="stylesheet" href="css/afcs-new.css">
  <link rel="stylesheet" href="css/about.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  <link rel="stylesheet" href="css5/normalize.css">

  <link type="image/png" href="images5/afcs-favicon.png" rel="icon">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel=stylesheet href="css/calendar.css">
  <link rel=stylesheet href="css/navbar.css">
  <link rel="stylesheet" href="tipuesearch/tipuesearch.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">

<title><?php echo "AFCS - Air Force Civilian Service"; ?></title>

</head>
<style>

[class^="swiper-button-"] {
  transition: all 0.3s ease;
}
.swiper-slide {
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
}
*, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
.swiper-container {
  width: 80%;
  height: 100vh;
  float: left;
  transition: opacity 0.6s ease, transform 0.3s ease;
}
.swiper-container.nav-slider {
  width: 20%;
  padding-left: 5px;
}
.swiper-container.nav-slider .swiper-slide {
  cursor: pointer;
  opacity: 0.4;
  transition: opacity 0.3s ease;
}
.swiper-container.nav-slider .swiper-slide.swiper-slide-active {
  opacity: 1;
}
.swiper-container.nav-slider .swiper-slide .content {
  width: 100%;
}
.swiper-container.nav-slider .swiper-slide .content .title {
  font-size: 20px;
}
.swiper-container:hover .swiper-button-prev, .swiper-container:hover .swiper-button-next {
  transform: translateX(0);
  opacity: 1;
  visibility: visible;
}
.swiper-container.loading {
  opacity: 0;
  visibility: hidden;
}
.swiper-slide {
  overflow: hidden;
}
.swiper-slide .slide-bgimg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-position: center;
  background-size: cover;
}
.swiper-slide .entity-img {
  display: none;
}
.swiper-slide .content {
  position: absolute;
  top: 40%;
  left: 0;
  width: 50%;
  padding-left: 5%;
  color: #fff;
}
.swiper-slide .content .title {
  font-size: 2.6em;
  font-weight: bold;
  margin-bottom: 30px;
}
.swiper-slide .content .caption {
  display: block;
  font-size: 13px;
  line-height: 1.4;
  transform: translateX(50px);
  opacity: 0;
  transition: opacity 0.3s ease, transform 0.7s ease;
}
.swiper-slide .content .caption.show {
  transform: translateX(0);
  opacity: 1;
}
[class^="swiper-button-"] {
  width: 44px;
  opacity: 0;
  visibility: hidden;
}
.swiper-button-prev {
  transform: translateX(50px);
}
.swiper-button-next {
  transform: translateX(-50px);
}


</style>

<body>
<a href="#bottom" id="top"></a>
<div style="background:#0f1932" id="site-wrapper">

  <?php include("nav-include/about-navbar.php"); ?>

  <div id="tipModal">
  </div>



<a href='#content' class='skipNav'>Skip to main content</a>

<a name='content'></a>

<div class="swiper-container main-slider loading">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLbVhsNzdIYmlfN1E)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLbVhsNzdIYmlfN1E" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Shaun Matthews</p>
        <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLWTdaX3J5b1VueDg)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLWTdaX3J5b1VueDg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Alexis Berry</p>
        <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLRml1b3B6eXVqQ2s)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLRml1b3B6eXVqQ2s" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Billie	Pierce</p>
        <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLVUpEems2ZXpHYVk)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLVUpEems2ZXpHYVk" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Trevor	Copeland</p>
        <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLNXBIcEdOUFVIWmM)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLNXBIcEdOUFVIWmM" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Bernadette	Newman</p>
        <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
      </div>
    </div>
  </div>
  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev swiper-button-white"></div>
  <div class="swiper-button-next swiper-button-white"></div>
</div>

<!-- Thumbnail navigation -->
<div class="swiper-container nav-slider loading">
  <div class="swiper-wrapper" role="navigation">
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLbVhsNzdIYmlfN1E)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLbVhsNzdIYmlfN1E" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Shaun Matthews</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLWTdaX3J5b1VueDg)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLWTdaX3J5b1VueDg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Alexis Berry</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLRml1b3B6eXVqQ2s)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLRml1b3B6eXVqQ2s" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Billie	Pierce</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLVUpEems2ZXpHYVk)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLVUpEems2ZXpHYVk" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Trevor	Copeland</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLNXBIcEdOUFVIWmM)">
        <img src="https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLNXBIcEdOUFVIWmM" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Bernadette	Newman</p>
      </div>
    </div>
  </div>
</div>



</div>

  <?php include("footer-include/site-footer.php"); ?>




<script
src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>

<script src="js5/bootstrap.min.js"></script>

<script src="js5/slick.min.js"></script>


<script src="js5/TweenMax.min.js"></script>



<script src="js5/lettering.min.js"></script>

<script src="http://jschr.github.io/textillate/jquery.textillate.js"></script>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<script src="tipuesearch/tipuesearch_set.js"></script>
<script src="tipuesearch/tipuesearch_content.js"></script>
<script src="tipuesearch/tipuesearch.js"></script>

<script src="js5/about.js"></script>
<script src="js5/scrollTop.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>

<script>

// Params
let mainSliderSelector = '.main-slider',
    navSliderSelector = '.nav-slider',
    interleaveOffset = 0.5;

// Main Slider
let mainSliderOptions = {
      loop: true,
      speed:1000,
      autoplay:{
        delay:3000
      },
      loopAdditionalSlides: 10,
      grabCursor: true,
      watchSlidesProgress: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      on: {
        init: function(){
          this.autoplay.stop();
        },
        imagesReady: function(){
          this.el.classList.remove('loading');
          this.autoplay.start();
        },
        slideChangeTransitionEnd: function(){
          let swiper = this,
              captions = swiper.el.querySelectorAll('.caption');
          for (let i = 0; i < captions.length; ++i) {
            captions[i].classList.remove('show');
          }
          swiper.slides[swiper.activeIndex].querySelector('.caption').classList.add('show');
        },
        progress: function(){
          let swiper = this;
          for (let i = 0; i < swiper.slides.length; i++) {
            let slideProgress = swiper.slides[i].progress,
                innerOffset = swiper.width * interleaveOffset,
                innerTranslate = slideProgress * innerOffset;

            swiper.slides[i].querySelector(".slide-bgimg").style.transform =
              "translateX(" + innerTranslate + "px)";
          }
        },
        touchStart: function() {
          let swiper = this;
          for (let i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = "";
          }
        },
        setTransition: function(speed) {
          let swiper = this;
          for (let i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = speed + "ms";
            swiper.slides[i].querySelector(".slide-bgimg").style.transition =
              speed + "ms";
          }
        }
      }
    };
let mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);

// Navigation Slider
let navSliderOptions = {
      loop: true,
      loopAdditionalSlides: 10,
      speed:1000,
      spaceBetween: 5,
      slidesPerView: 5,
      centeredSlides : true,
      touchRatio: 0.2,
      slideToClickedSlide: true,
      direction: 'vertical',
      on: {
        imagesReady: function(){
          this.el.classList.remove('loading');
        },
        click: function(){
          mainSlider.autoplay.stop();
        }
      }
    };
let navSlider = new Swiper(navSliderSelector, navSliderOptions);

// Matching sliders
mainSlider.controller.control = navSlider;
navSlider.controller.control = mainSlider;
</script>

</body>
</html>
