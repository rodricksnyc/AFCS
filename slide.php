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

.title {
  text-transform: uppercase;
  margin-bottom:10px !important;
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
      <figure class="slide-bgimg" style="background-image:url(../images5/scram-jet.jpg)">
        <img src="images5/scram-jet.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">AIR <span style="color:#33ccff;">INNOVATIONS</span><br>SCRAMJET X51A RIDER</p>
        <span class="caption">The Air Force’s X-51A Wave Rider experimental aircraft is powered by a state-of-the-art supersonic combustion scramjet engine that, unlike a rocket, can capture and burn oxygen in the earth’s atmosphere instead of carrying it in a large tank. In May 2013, the X-51A set a flight time record by making the longest sustained scramjet-powered, air-breathing hypersonic flight to date, reaching Mach 5 – an astonishing one mile per second, or nearly 4,000 miles per hour and it continues to break records. Researchers believe scramjet technology will soon produce game-changing hypersonic applications. Imagine a flight from New York to Los Angeles in less than 45 minutes!</span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/stealth.jpg)">
        <img src="images5/scram-jet.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">AIR <span style="color:#33ccff;">INNOVATIONS</span><br>STEALTH TECHNOLOGY</p>
        <span class="caption">The B-2 Spirit is a multi-role bomber capable of delivering both conventional and nuclear munitions. The revolutionary blending of low-observable technologies with high aerodynamic efficiency and large payload gives the B-2 important advantages over existing bombers. The F-35 Lightning II is a fifth-generation, single-seat, single-engine, stealth multi-role fighter that can perform close air support, tactical bombing, and air defense missions. The F-22 Raptor is a single seat, twin-engine, fifth-generation fighter aircraft. Its combination of stealth, supercruise, maneuverability, and integrated avionics, coupled with improved supportability, represents an exponential leap in warfighting capabilities. The Raptor performs both air-to-air and air-to-ground missions allowing full realization of operational concepts vital to the 21st century Air Force.</span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/micro.jpg)">
        <img src="images5/micro.jpg" class="entity-img" />
      </figure>
      <div class="content">
          <p class="title">AIR <span style="color:#33ccff;">INNOVATIONS</span><br>Micro Air Vehicles, Robotic Birds & Ornithopters</p>
        <span class="caption">Engineers at Wright-Patterson AFB have found that designing micro air vehicles – or MAVs – is nothing like shrinking an F-16. At a mere six inches in length, Robotic Birds pack sensors, receivers, and power supplies that enable them to fly, hover, and rest virtually unnoticed – making them ideal vehicles for gathering intelligence. Motion capture – MOCAP – is an important support technology. Commonly used in video game development to record and digitize movement, MOCAP is now being employed by Air Force researchers to teach computers to fly remotely and to track air and land vehicles. Speaking of research, it doesn’t get “battier” than Air Force efforts to advance MAV capabilities. While MAVs are successfully being used in Afghanistan and Iraq, their wings are unsuited for maneuvering in tight spaces and harsh weather.</span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/arsenal.jpg)">
        <img src="images5/arsenal.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">AIR <span style="color:#33ccff;">INNOVATIONS</span><br>Air Force Arsenal</p>
        <span class="caption">With 162 bombers, 2,286 fighter/attack aircraft, and 203 helicopters in total active inventory—not to mention 450 intercontinental ballistic missiles (ICBMs)—the United States Air Force is well-equipped to do some serious damage to the enemy. Our elite STEM civilian workforce researches and develops the next generation of weapons technology.</span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/wind.jpg)">
        <img src="images5/wind.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">AIR <span style="color:#33ccff;">INNOVATIONS</span><br>WIND TUNNELS</p>
        <span class="caption">U.S. Air Force wind tunnels put aircraft, propulsion systems, and space craft through their paces. Arnold Engineering Development Center (AEDC) is the most advanced and largest complex of flight simulation test facilities in the world. The center operates 58 aerodynamic and propulsion wind tunnels, rocket and turbine engine test cells, space environmental chambers, arc heaters, ballistic ranges, and other specialized units. Twenty-seven of the center’s test units have capabilities unmatched elsewhere in the United States; 14 are unique in the world. Facilities can simulate flight conditions from sea level to an altitude of 300 miles and from subsonic velocities to Mach 2.0.</span>
      </div>
    </div>

    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/RPA.jpg)">
        <img src="images5/RPA.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">AIR <span style="color:#33ccff;">INNOVATIONS</span><br>RPAs</p>
        <span class="caption">Remotely piloted vehicles (RPAs), known as Predator and Reaper, have flown in on the winds of change. In 2010, for the first time in its history, the Air Force bought more RPAs than manned air vehicles. These highly sophisticated aircraft for combat and reconnaissance are highly sought-after weapons systems, so too are the unsung pilots and intelligence analysts directing these RPAs from sites sometimes half a world away. Whether noiselessly observing an unsuspecting enemy or watching over our soldiers, these pilots’ abilities and psyches are every bit as engaged and challenged as those of their comrades in traditional aircraft.</span>
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
      <figure class="slide-bgimg" style="background-image:url(../images5/scram-jet.jpg)">
        <img src="images5/scram-jet.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">SCRAMJET X51A RIDER</span></p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/stealth.jpg)">
        <img src="images5/stealth.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">STEALTH TECHNOLOGY</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/micro.jpg)">
        <img src="images5/micro.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Micro Air Vehicles, Robotic Birds & Ornithopters</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/arsenal.jpg)">
        <img src="images5/arsenal.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Air Force Arsenal</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/wind.jpg)">
        <img src="images5/arsenal.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Wind Tunnels</p>
      </div>
    </div>

    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/RPA.jpg)">
        <img src="images5/RPA.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">RPAs</p>
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
        delay:5000
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
