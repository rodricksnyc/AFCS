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

    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/nasa.jpg)">
        <img src="images5/nasa.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">SPACE <span style="color:#33ccff;">INNOVATIONS</span><br>GPS CONSTELLATIONS</p>
        <span class="caption">Did you know that GPS is provided by the U.S. Air Force to the entire world free of charge? It’s made possible by satellites developed by Air Force civilian researchers. These satellites orbit the earth broadcasting radio signals that allow a form of triangulation. Beyond providing highly accurate positioning that enable the navigation devices in our cars and on our smart phones, GPS enables critical networks like cellular phones, ATM banking, and power grids, to name a few. It also provides crucial precision navigation and timing capabilities to our military forces around the world. The latest addition to this system was successfully launched from Cape Canaveral on May 15, 2013. This GPS IIF-4 spacecraft was added to the orbiting constellation of 64 satellites circling 11,000 nautical miles above Earth.</span>
      </div>
    </div>

    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/rockets-innovations.jpg)">
        <img src="images5/rockets-innovations.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">SPACE <span style="color:#33ccff;">INNOVATIONS</span><br>ROCKETS</p>
        <span class="caption">The Air Force Office of Scientific Research and NASA successfully launched a nine-foot rocket 1,300 feet over the skies of Indiana using an environmentally friendly, safe propellant composed of Aluminum powder and water ice (ALICE). ALICE has the consistency of toothpaste when made and can be fit into molds and cooled to -30° C, 24 hours before flight. The concept has really taken off with researchers for several reasons. When optimized, ALICE could have a higher performance than conventional propellants; it can be used both for flight on Earth and in long-distance space missions; and it can theoretically be manufactured on distant planets – the moon or Mars, for example – instead of having to be transported to those distant locations.</span>
      </div>
    </div>

    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/space-weather.jpg)">
        <img src="images5/rockets-innovations.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">SPACE <span style="color:#33ccff;">INNOVATIONS</span><br>SPACE WEATHER</p>
        <span class="caption">The Coriolis satellite that carries Air Force Research Lab’s (AFRL) Solar Mass Ejection Imager, or SMEI, has successfully detected and tracked 360 coronal mass ejections (CMEs) and shown the practicality of forecasting effects at Earth of these hazardous space weather phenomena. Since 2003, SMEI cameras have captured nearly full sky images of great sensitivity every 103 minutes; there is no other celestial record of this length, field of view, continuity, sensitivity and cadence. Since 2003, SMEI cameras have captured nearly full sky images of great sensitivity every 103 minutes; there is no other celestial record of this length, field of view, continuity, sensitivity and cadence.</span>
      </div>
    </div>

    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/gps.jpg)">
        <img src="images5/gps.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">SPACE <span style="color:#33ccff;">INNOVATIONS</span><br>SATELLITE TECHNOLOGY</p>
        <span class="caption">U.S. Government data received from satellites have increased 100,000-fold in the last decade due primarily to the addition of nearly 50 new instruments to the nation’s exploratory toolbox. Currently, scientists are studying information that satellites are gathering on how our solar system affects the weather. In addition to heating the land, the sun’s energy can create weather disturbances and drive ocean currents. Researchers monitoring the amounts of solar energy reaching the earth theorize that it is small increases in the sun's total energy output over the last century that’s responsible for climate change.</span>
      </div>
    </div>

    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/cyber-attack.jpg)">
        <img src="images5/cyber-attack.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">CYBER <span style="color:#33ccff;">INNOVATIONS</span><br>CYBER ATTACK</p>
        <span class="caption">The Air Force Research Laboratory (AFRL) developed a Network Intrusion, Risk and Vulnerability Analysis (NIRVANA) software tool to provide comprehensive cyber security analysis capability. The tool uses data from multiple intrusion detection systems to produce a comprehensive situation awareness picture, including a static evaluation of network vulnerabilities. NIRVANA identifies the consequences of actions. With this tool, network vulnerabilities are identified using the novel attack graphs associated with applications and mission requirements. The technology can estimate the probable targets intended by the attacker, allowing operators to counter with near-real-time actions, effectively denying the attacker’s goals. The technique is designed to scale, allowing for coordination of multiple security domains, and several runtime operators.</span>
      </div>
    </div>

    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/nano.jpg)">
        <img src="images5/nano.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">CYBER <span style="color:#33ccff;">INNOVATIONS</span><br>NANO TECHNOLOGY</p>
        <span class="caption">While nanoscientists study matter on an atomic and molecular scale, nanotechnologists develop materials and devices 100 nanometers or smaller in one or more dimensions. (A nanometer is one billionth of a meter, or the comparative size of a marble to the earth; a meter is about three feet.) Since it began in the 1980s, their work has advanced on two tracks – controlling self-recognizable/self-assembling molecular components and scaling down larger entities without atomic-level control. The seemingly infinite number of potential applications will impact multiple fields: robotics, medicine, electronics, and geo-engineering are just a few. AFCS is pushing the leading edge of research and development in this fascinating field.</span>
      </div>
    </div>

    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/router.jpg)">
        <img src="images5/router.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">CYBER <span style="color:#33ccff;">INNOVATIONS</span><br>WORLD'S FASTEST ROUTER</p>
        <span class="caption">The U.S. Air Force recently completed testing on a new “flying wireless router” system that will help give ground forces and pilots real-time tactical information in the field. The main difference between this router and a typical one you might be using at home is that it is attached to fighter planes. It is essentially a software upgrade called Net-T, for “network tactical,” and is designed to facilitate almost instantaneous communication between commanders, ground troops, and fighter aircraft. This new development provides real-time information like videos, images, maps, coordinates, or any file type from the forward deployed elements without relying on satellite, radio or other forms of traditional communication</span>
      </div>
    </div>

    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/super.jpg)">
        <img src="images5/super.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">CYBER <span style="color:#33ccff;">INNOVATIONS</span><br>SUPER COMPUTING</p>
        <span class="caption">The game console’s price-to-performance ratio inspired one AFCS research team to place an order for 1,700 of them to go with the 336 they already have. The system will use 300 to 320 kilowatts at full bore and about 10 percent to 30 percent of that in standby, when most supercomputers are using 5 megawatts. However, much of the time the cluster will only be running the nodes it needs and it will be turned off when not in use. By taking advantage of a growing gaming market, the price performance is just $2 to $3 per gigaFLOPS. The research team has been able to take advantage of about 60 percent of the PlayStations’ performance ability. Once complete, they are expecting to have a unit capable of 500 teraFLOPS or 500 trillion operations per second.</span>
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
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/nasa.jpg)">
        <img src="images5/nasa.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">GPS CONSTELLATIONS</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/rockets-innovations.jpg)">
        <img src="images5/rockets-innovations.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">ROCKETS</p>
      </div>
    </div>

    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/space-weather.jpg)">
        <img src="images5/space-weather.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">SPACE WEATHER</p>
      </div>
    </div>

    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/gps.jpg)">
        <img src="images5/gps.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">SATELLITE TECHNOLOGY</p>
      </div>
    </div>

    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/cyber-attack.jpg)">
        <img src="images5/cyber-attack.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">CYBER ATTACK</p>
      </div>
    </div>

    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/nano.jpg)">
        <img src="images5/nano.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">NANO TECHNOLOGY</p>
      </div>
    </div>

    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/router.jpg)">
        <img src="images5/nano.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">WORLD'S FASTEST ROUTER</p>
      </div>
    </div>

    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(../images5/super.jpg)">
        <img src="images5/nano.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">SUPER COMPUTING</p>
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
