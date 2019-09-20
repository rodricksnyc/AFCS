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

<title><?php echo "AFCS - Air Force Civilian Service"; ?></title>

</head>
<style>

.slick-slider .slick-track .slick-slide img {
    width: 100%;
    height: 100%;
    object-fit: contain !important;
}


.img-fill{
  width: 100%;
  display: block;
  overflow: hidden;
  position: relative;
  text-align: center
}

.img-fill img {
  min-height: 100%;
  min-width: 100%;
  position: relative;
  display: inline-block;
  max-width: none;
}

*,
*:before,
*:after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.04);
}

.Grid1k {
  padding: 0 15px;
  max-width: 1200px;
  margin: auto;
}

.blocks-box,
.slick-slider {
  margin: 0;
  padding: 0!important;
}

.slick-slide {
  float: left ;
  padding: 0;
}


.Modern-Slider .item .img-fill{
  height:100vh;
  background:#000;
}

.Modern-Slider .item .img-fill .info{
  position:absolute;
  width:100%;
  height:100%;
  top:325px;
  left:0px;

  line-height:100vh;
  text-align:center;
}



.Modern-Slider .item .info > div{
  display:inline-block!important;
  vertical-align:middle;
}

.Modern-Slider .NextArrow{
  position:absolute;
  top:50%;
  right:0px;
  width:45px;
  height:45px;
  background:none;
  border:0 none;
  margin-top:-22.5px;
  text-align:center;
  font:20px/45px FontAwesome;
  color:#FFF;
  z-index:5;
}

.Modern-Slider .NextArrow:before{
  content:'\f105';
  font-size:32px;
}

.Modern-Slider .PrevArrow{
  position:absolute;
  top:50%;
  left:0px;
  width:45px;
  height:45px;
  background:none;
  border:0 none;
  margin-top:-22.5px;
  text-align:center;
  font:20px/45px FontAwesome;
  color:#FFF;
  z-index:5;
}

.Modern-Slider .PrevArrow:before{
  content:'\f104';
  font-size:32px;
}

.Modern-Slider .slick-dots{
  position:absolute;
  height:5px;
  background:none;
  bottom:0px;
  width:100%;
  left:0px;
  padding:0px;
  margin:0px;
  list-style-type:none;
}
.Modern-Slider .slick-dots li button{display:none;}
.Modern-Slider .slick-dots li{
  float:left;
  width:0px;
  height:5px;
  background:white;
  position:absolute;
  left:0px;
  bottom:0px;
}

.Modern-Slider .slick-dots li.slick-active{
  width:100%;
  animation:ProgressDots 11s both;
}

.Modern-Slider .item h3{
  font-family: "Roboto Condensed", sans-serif;
  text-transform:uppercase;
  color:#FFF;
  animation:fadeOutRight 1s both;
  margin:0;
  padding:0;
  font-size:55px;
  font-weight:bold;
  text-align:left;
}

.Modern-Slider .item h4{
  font-family: "Roboto Condensed", sans-serif;
  text-transform:uppercase;
  color:#33ccff;
  animation:fadeOutRight 1s both;
  margin:0;
  padding:0;
  font-size:40px;
  font-weight:bold;
  text-align:left;
}

.Modern-Slider .item h5{
  margin:0;
  padding:0;
  font-family: "Roboto Condensed", sans-serif;
  color:#FFF;
  max-width:600px;
  overflow:hidden;
  text-align:left;
  height:auto;
  font-size:16px;
  animation:fadeOutLeft 1s both;
}

.Modern-Slider .item h5.second{
  margin:0;
  padding:0;
  font-family: "Roboto Condensed", sans-serif;
  color:#FFF;
  max-width:600px;
  overflow:hidden;
  text-align:left;
  height:auto;
  font-size:16px;
  animation:fadeOutLeft 1s both;
  margin-top:1em;
}

.Modern-Slider .item h5.third{
  margin:0;
  padding:0;
  font-family: "Roboto Condensed", sans-serif;
  color:#FFF;
  max-width:600px;
  overflow:hidden;
  text-align:left;
  height:auto;
  font-size:16px;
  animation:fadeOutLeft 1s both;
  margin-top:1em;
}

.Modern-Slider .item.slick-active h3{
  animation:fadeInDown 1s both 1s;
}

.Modern-Slider .item.slick-active h4{
  animation:fadeInDown 1s both 1s;
}

.Modern-Slider .item.slick-active h5{
  animation:fadeInLeft 1s both 1.5s;
}

.Modern-Slider .item.slick-active h5.second{
  animation:fadeInLeft 1s both 1.5s;
}

.Modern-Slider .item.slick-active h5.third{
  animation:fadeInLeft 1s both 1.5s;
}

.Modern-Slider .item.slick-active{
  animation:slide-in-right .5s both;
}


.slide-in-right {
	-webkit-animation: slide-in-right 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
	        animation: slide-in-right 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}


@-webkit-keyframes slide-in-right {
  0% {
    -webkit-transform: translateX(1000px);
            transform: translateX(1000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
  }
}
@keyframes slide-in-right {
  0% {
    -webkit-transform: translateX(1000px);
            transform: translateX(1000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
  }
}


.Modern-Slider {background:#000;}

/* ==== Slider Image Transition === */
@keyframes Slick-FastSwipeIn{
    0%{transform:rotate3d(0,1,0,150deg) scale(0)  perspective(400px);}
    100%{transform:rotate3d(0,1,0,0deg) scale(1) perspective(400px);}
}

@-webkit-keyframes ProgressDots{from{width:0px;}to{width:100%;}}
@keyframes ProgressDots{from{width:0px;}to{width:100%;}}

/* ==== Slick Slider Css Ruls === */
.slick-slider{position:relative;display:block;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent}
.slick-list{position:relative;display:block;overflow:hidden;margin:0;padding:0}
.slick-list:focus{outline:none}.slick-list.dragging{cursor:hand}
.slick-slider .slick-track,.slick-slider .slick-list{-webkit-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}
.slick-track{position:relative;top:0;left:0;display:block}
.slick-track:before,.slick-track:after{display:table;content:''}.slick-track:after{clear:both}
.slick-loading .slick-track{visibility:hidden}
.slick-slide{display:none;float:left /* If RTL Make This Right */ ;height:100%;min-height:1px}
.slick-slide.dragging img{pointer-events:none}
.slick-initialized .slick-slide{display:block}
.slick-loading .slick-slide{visibility:hidden}
.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}


@media (max-width:1024px) {
  .Modern-Slider .item h5{
    font-size:14px;
  }

  .Modern-Slider .item h5.second{
    font-size:14px;
  }

  .Modern-Slider .item h5.third{
    font-size:14px;
  }

  .Modern-Slider .item h4{
    font-size:30px;
  }

  .Modern-Slider .item h3{
    font-size:30px;
  }


}

@media (min-width:992px) and (max-width:1024px) {
  .Modern-Slider .item .img-fill .info {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 160px;
    left: 0px;
    line-height: 100vh;
    text-align: center;
}
.slick-slider .slick-track .slick-slide img {
    width: 100%;
    height: auto;
    object-fit: unset;
    background-position: center;
}

.img-fill img {
    min-height: 600px;
    min-width: 100%;
    position: relative;
    display: inline-block;
    max-width: none;
}

}


@media (min-width:768px) and (max-width:991px) {
  .Modern-Slider .item .img-fill .info {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 100px;
    left: 0px;
    line-height: 100vh;
    text-align: center;
}


.slick-slider .slick-track .slick-slide img {
    width: 100%;
    height: auto;
    object-fit: unset;
    background-position: center;
}

.img-fill img {
    min-height: 500px;
    min-width: 100%;
    position: relative;
    display: inline-block;
    max-width: none;
}
}


@media (max-width:767px) {
  .Modern-Slider .item .img-fill .info {
    position: absolute;
    width: 80%;
    height: 100%;
    top: 160px;
    left: 40px;
    line-height: 100vh;
    text-align: center;
}


.slick-slider .slick-track .slick-slide img {
    width: 100%;
    height: auto;
    object-fit: unset;
    background-position: center;
}

.img-fill img {
    min-height: 600px;
    min-width: 100%;
    position: relative;
    display: inline-block;
    max-width: none;
}
.Modern-Slider .item h5{
  font-size:12px;
  margin-top:10px;
}

.Modern-Slider .item h5.second{
  font-size:12px;
}

.Modern-Slider .item h5.third{
  font-size:12px;
}

.Modern-Slider .item h4{
  font-size:18px;
}

.Modern-Slider .item h3{
  font-size:18px;
}


.slick-slider, .slick-list, .slick-track {
    height: 100%;
    max-height: 600px !important;
}


.slick-slider {
    overflow: hidden;
    margin-top: 0em !important;
}

.slick-slider .slick-track .slick-slide img {
    width: 100%;
    height: 100%;
    object-fit:unset !important;
}

}

</style>


<a href="#bottom" id="top"></a>
<div style="background:#0f1932" id="site-wrapper">

  <?php include("nav-include/about-navbar.php"); ?>

  <div id="tipModal">
  </div>


<body>
<a href='#content' class='skipNav'>Skip to main content</a>

<a name='content'></a>
  <div class="Modern-Slider">
    <div class="item">
      <div class="img-fill">
        <img src="images5/scram-jet.jpg" alt="">
        <div class="info">
          <div>
            <h3>AIR INNOVATIONS</h3>
            <h4>SCRAMJET X51A RIDER</h4>
            <h5>The Air Force’s X-51A Wave Rider experimental aircraft is powered by a state-of-the-art supersonic combustion scramjet engine that, unlike a rocket, can capture and burn oxygen in the earth’s atmosphere instead of carrying it in a large tank. In May 2013, the X-51A set a flight time record by making the longest sustained scramjet-powered, air-breathing hypersonic flight to date, reaching Mach 5 – an astonishing one mile per second, or nearly 4,000 miles per hour and it continues to break records.</h5>
            <h5 class="second">Researchers believe scramjet technology will soon produce game-changing hypersonic applications. Imagine a flight from New York to Los Angeles in less than 45 minutes!</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="img-fill">
        <img src="images5/stealth.jpg" alt="">
        <div class="info">
          <div>
            <h3>AIR INNOVATIONS</h3>
            <h4>STEALTH TECHNOLOGY</h4>
            <h5>The <span style="font-weight:900;">B-2 Spirit</span> is a multi-role bomber capable of delivering both conventional and nuclear munitions. The revolutionary blending of low-observable technologies with high aerodynamic efficiency and large payload gives the B-2 important advantages over existing bombers. Its stealthy features provide it with greater freedom of action at high altitudes, thus increasing its range and offering a better field of view for the aircraft's sensors. Its unrefueled range is approximately 6,000 nautical miles (9,600 kilometers).</h5>
            <h5 class="second">The <span style="font-weight:900;">F-35 Lightning II</span> is a fifth-generation, single-seat, single-engine, stealth multi-role fighter that can perform close air support, tactical bombing, and air defense missions. The F-35 has three different models: a conventional takeoff and landing variant; a short takeoff and vertical-landing variant; and a carrier-based variant. The F-35 is intended to be the world's premier strike aircraft through 2040, with close- and long-range air-to-air capability second only to that of the F-22 Raptor.</h5>
            <h5 class="third">The <span style="font-weight:900;">F-22 Raptor</span> is a single seat, twin-engine, fifth-generation fighter aircraft. Its combination of stealth, supercruise, maneuverability, and integrated avionics, coupled with improved supportability, represents an exponential leap in warfighting capabilities. The Raptor performs both air-to-air and air-to-ground missions allowing full realization of operational concepts vital to the 21st century Air Force.</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="img-fill">
        <img src="images5/micro.jpg" alt="">
        <div class="info">
          <div>
            <h3>AIR INNOVATIONS</h3>
            <h4>Micro Air Vehicles, Robotic Birds & Ornithopters</h4>
            <h5>Engineers at Wright-Patterson AFB have found that designing micro air vehicles – or MAVs – is nothing like shrinking an F-16. At a mere six inches in length, <span style="font-weight:900;">Robotic Birds</span> pack sensors, receivers, and power supplies that enable them to fly, hover, and rest virtually unnoticed – making them ideal vehicles for gathering intelligence. Motion capture – MOCAP – is an important support technology. Commonly used in video game development to record and digitize movement, MOCAP is now being employed by Air Force researchers to teach computers to fly remotely and to track air and land vehicles.</h5>
            <h5 class="second">Speaking of research, it doesn’t get “battier” than Air Force efforts to advance MAV capabilities. While MAVs are successfully being used in Afghanistan and Iraq, their wings are unsuited for maneuvering in tight spaces and harsh weather. So, researchers are modelling the next generation of MAVs on the sophisticated wings of bats, which actually change shape during flight, enabling them to remain airborne and flexible in difficult conditions. These <span style="font-weight:900;">Ornithopters</span> (wing-flapping aircraft) will smoothly navigate turbulent weather and complex environments like forests, buildings, caves, and tunnels.</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="img-fill">
        <img src="images5/arsenal.jpg" alt="">
        <div class="info">
          <div>
            <h3>AIR INNOVATIONS</h3>
            <h4>Air Force Arsenal</h4>
            <h5>With 162 bombers, 2,286 fighter/attack aircraft, and 203 helicopters in total active inventory—not to mention 450 intercontinental ballistic missiles (ICBMs)—the United States Air Force is well-equipped to do some serious damage to the enemy. Our elite STEM civilian workforce researches and develops the next generation of weapons technology.</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="img-fill">
        <img src="images5/wind.jpg" alt="">
        <div class="info">
          <div>
            <h3>AIR INNOVATIONS</h3>
            <h4>Wind Tunnels</h4>
            <h5>U.S. Air Force wind tunnels put aircraft, propulsion systems, and space craft through their paces. Arnold Engineering Development Center (AEDC) is the most advanced and largest complex of flight simulation test facilities in the world. The center operates 58 aerodynamic and propulsion wind tunnels, rocket and turbine engine test cells, space environmental chambers, arc heaters, ballistic ranges, and other specialized units. Twenty-seven of the center’s test units have capabilities unmatched elsewhere in the United States; 14 are unique in the world. Facilities can simulate flight conditions from sea level to an altitude of 300 miles and from subsonic velocities to Mach 2.0.</h5>

          </div>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="img-fill">
        <img src="images5/RPA.jpg" alt="">
        <div class="info">
          <div>
            <h3>AIR INNOVATIONS</h3>
            <h4>RPAs</h4>
            <h5>Remotely piloted vehicles (RPAs), known as Predator and Reaper, have flown in on the winds of change. In 2010, for the first time in its history, the Air Force bought more RPAs than manned air vehicles.</h5>
            <h5 class="second">These highly sophisticated aircraft for combat and reconnaissance are highly sought-after weapons systems, so too are the unsung pilots and intelligence analysts directing these RPAs from sites sometimes half a world away.</h5>
            <h5 class="third">Whether noiselessly observing an unsuspecting enemy or watching over our soldiers, these pilots’ abilities and psyches are every bit as engaged and challenged as those of their comrades in traditional aircraft.</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="img-fill">
        <img src="images5/test-pilot.jpg" alt="">
        <div class="info">
          <div>
            <h3>AIR INNOVATIONS</h3>
            <h4>Test Pilots</h4>
            <h5>In the 1950s, test pilots were being killed at the rate of about one a week, but the risks have dropped to a fraction of that, thanks to the maturation of aircraft technology, better ground-testing and simulation of aircraft performance, and, lately, the use of unmanned aerial vehicles to test experimental aircraft features. Still, piloting experimental aircraft remains more dangerous than most other types of flying.</h5>
          </div>
        </div>
      </div>
    </div>


    <div class="item">
      <div class="img-fill">
        <img src="images5/nasa.jpg" alt="">
        <div class="info">
          <div>
            <h3>SPACE INNOVATIONS</h3>
            <h4>GPS CONSTELLATIONS</h4>
            <h5>Did you know that GPS is provided by the U.S. Air Force to the entire world free of charge? It’s made possible by satellites developed by Air Force civilian researchers.</h5>
            <h5 class="second">These satellites orbit the earth broadcasting radio signals that allow a form of triangulation. Beyond providing highly accurate positioning that enable the navigation devices in our cars and on our smart phones, GPS enables critical networks like cellular phones, ATM banking, and power grids, to name a few. It also provides crucial precision navigation and timing capabilities to our military forces around the world. The latest addition to this system was successfully launched from Cape Canaveral on May 15, 2013. This GPS IIF-4 spacecraft was added to the orbiting constellation of 64 satellites circling 11,000 nautical miles above Earth.</h5>
            <h5 class="third">The capabilities of the new IIF satellites provide greater navigational accuracy through improvements in atomic clock technology; a more robust signal for commercial aviation and safety-of-life applications, known as the new third civil signal (L5); and a 12-year design life providing long-term service. These upgrades improve anti-jam capabilities for the warfighter and improve security for military and civilian users around the world.</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="img-fill">
        <img src="images5/rockets-innovations.jpg" alt="">
        <div class="info">
          <div>
            <h3>SPACE INNOVATIONS</h3>
            <h4>Rockets</h4>
            <h5>The Air Force Office of Scientific Research and NASA successfully launched a nine-foot rocket 1,300 feet over the skies of Indiana using an environmentally friendly, safe propellant composed of Aluminum powder and water ice (ALICE). ALICE has the consistency of toothpaste when made and can be fit into molds and cooled to -30° C, 24 hours before flight.</h5>
            <h5 class="second">The concept has really taken off with researchers for several reasons. When optimized, ALICE could have a higher performance than conventional propellants; it can be used both for flight on Earth and in long-distance space missions; and it can theoretically be manufactured on distant planets – the moon or Mars, for example – instead of having to be transported to those distant locations.</h5>

          </div>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="img-fill">
        <img src="images5/space-weather.jpg" alt="">
        <div class="info">
          <div>
            <h3>SPACE INNOVATIONS</h3>
            <h4>SPACE WEATHER</h4>
            <h5>The Coriolis satellite that carries Air Force Research Lab’s (AFRL) Solar Mass Ejection Imager, or SMEI, has successfully detected and tracked 360 coronal mass ejections (CMEs) and shown the practicality of forecasting effects at Earth of these hazardous space weather phenomena.</h5>
            <h5 class="second">Since 2003, SMEI cameras have captured nearly full sky images of great sensitivity every 103 minutes; there is no other celestial record of this length, field of view, continuity, sensitivity and cadence.</h5>
            <h5 class="third">SMEI has collected unprecedented data in many areas of heliospheric observations including CME-comet tail interactions, zodiacal background variation through the solar cycle, discovery of high altitude auroras, and resident space object observations. SMEI data have also produced light curves for variable stars and novae with unparalleled time resolution.</h5>
          </div>
        </div>
      </div>
    </div>


    <div class="item">
      <div class="img-fill">
        <img src="images5/gps.jpg" alt="">
        <div class="info">
          <div>
            <h3>SPACE INNOVATIONS</h3>
            <h4>SATELLITE TECHNOLOGY</h4>
            <h5>U.S. Government data received from satellites have increased 100,000-fold in the last decade due primarily to the addition of nearly 50 new instruments to the nation’s exploratory toolbox.</h5>
            <h5 class="second">Currently, scientists are studying information that satellites are gathering on how our solar system affects the weather. In addition to heating the land, the sun’s energy can create weather disturbances and drive ocean currents. Researchers monitoring the amounts of solar energy reaching the earth theorize that it is small increases in the sun's total energy output over the last century that’s responsible for climate change.</h5>
            <h5 class="third">With increasingly sophisticated satellites at their disposal, scientists will be able to make deeper observations and improve predictions about changing climatic conditions.</h5>
          </div>
        </div>
      </div>
    </div>


    <div class="item">
      <div class="img-fill">
        <img src="images5/cyber-attack.jpg" alt="">
        <div class="info">
          <div>
            <h3>CYBER INNOVATIONS</h3>
            <h4>CYBER ATTACK</h4>
            <h5>The Air Force Research Laboratory (AFRL) developed a Network Intrusion, Risk and Vulnerability Analysis (NIRVANA) software tool to provide comprehensive cyber security analysis capability. The tool uses data from multiple intrusion detection systems to produce a comprehensive situation awareness picture, including a static evaluation of network vulnerabilities.</h5>
            <h5 class="second">NIRVANA identifies the consequences of actions. With this tool, network vulnerabilities are identified using the novel attack graphs associated with applications and mission requirements. The technology can estimate the probable targets intended by the attacker, allowing operators to counter with near-real-time actions, effectively denying the attacker’s goals. The technique is designed to scale, allowing for coordination of multiple security domains, and several runtime operators.</h5>
            <h5 class="third">Using this tool, the Air Force, Department of Defense (DoD) and other large enterprises have the first comprehensive capability to visualize the implications of a cyber-attack. Operators will be able to anticipate the actions of attackers, even when a slow-brewed or multi-prong attack is in progress. The ability to anticipate and adjust in order to maintain mission readiness during the attack, although present in DoD cyber security strategy, is a missing component of our current cyber deterrence arsenal. This NIRVANA technology is the first to provide coherent enterprise-wide network cyber-attack damage assessment.</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="img-fill">
        <img src="images5/nano.jpg" alt="">
        <div class="info">
          <div>
            <h3>CYBER INNOVATIONS</h3>
            <h4>NANO TECHNOLOGY</h4>
            <h5>While nanoscientists study matter on an atomic and molecular scale, nanotechnologists develop materials and devices 100 nanometers or smaller in one or more dimensions. (A nanometer is one billionth of a meter, or the comparative size of a marble to the earth; a meter is about three feet.)</h5>
            <h5 class="second">Since it began in the 1980s, their work has advanced on two tracks – controlling self-recognizable/self-assembling molecular components and scaling down larger entities without atomic-level control. The seemingly infinite number of potential applications will impact multiple fields: robotics, medicine, electronics, and geo-engineering are just a few. AFCS is pushing the leading edge of research and development in this fascinating field.</h5>

          </div>
        </div>
      </div>
    </div>


    <div class="item">
      <div class="img-fill">
        <img src="images5/router.jpg" alt="">
        <div class="info">
          <div>
            <h3>CYBER INNOVATIONS</h3>
            <h4>WORLD'S FASTEST ROUTER</h4>
            <h5>The U.S. Air Force recently completed testing on a new “flying wireless router” system that will help give ground forces and pilots real-time tactical information in the field.</h5>
            <h5 class="second">The main difference between this router and a typical one you might be using at home is that it is attached to fighter planes. It is essentially a software upgrade called Net-T, for “network tactical,” and is designed to facilitate almost instantaneous communication between commanders, ground troops, and fighter aircraft. This new development provides real-time information like videos, images, maps, coordinates, or any file type from the forward deployed elements without relying on satellite, radio or other forms of traditional communication. It is setting the stage to provide beyond line-of-site command and control capability to warfighters in the air, sea, and on the ground.</h5>

          </div>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="img-fill">
        <img src="images5/super.jpg" alt="">
        <div class="info">
          <div>
            <h3>CYBER INNOVATIONS</h3>
            <h4>SUPER COMPUTING</h4>
            <h5>The game console’s price-to-performance ratio inspired one AFCS research team to place an order for 1,700 of them to go with the 336 they already have. The system will use 300 to 320 kilowatts at full bore and about 10 percent to 30 percent of that in standby, when most supercomputers are using 5 megawatts. However, much of the time the cluster will only be running the nodes it needs and it will be turned off when not in use. By taking advantage of a growing gaming market, the price performance is just $2 to $3 per gigaFLOPS.</h5>
            <h5 class="second">The research team has been able to take advantage of about 60 percent of the PlayStations’ performance ability. Once complete, they are expecting to have a unit capable of 500 teraFLOPS or 500 trillion operations per second.</h5>

          </div>
        </div>
      </div>
    </div>

  </div>






  <?php include("footer-include/site-footer.php"); ?>

</div>


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



<script>

$(document).ready(function(){

  $(".Modern-Slider").slick({
    autoplay:false,
    autoplaySpeed:10000,
    speed:600,
    slidesToShow:1,
    slidesToScroll:1,
    pauseOnHover:false,
    dots:false,
    pauseOnDotsHover:true,
    cssEase:'linear',
   // fade:true,
    // draggable:true,
    prevArrow:'<button class="PrevArrow"></button>',
    nextArrow:'<button class="NextArrow"></button>',
  });

})

</script>

</body>
</html>
