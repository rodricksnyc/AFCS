<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css5/animate-edited.css">

  <link rel="stylesheet" href="css5/bootstrap-edited.css">

  <link rel="stylesheet" href="css5/bootstrap-theme.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">


  <link rel="stylesheet" href="css/afcs-new.css">
  <link rel="stylesheet" href="css/about.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  <link rel="stylesheet" href="css5/normalize.css">

  <link type="image/png" href="images5/afcs-favicon.png" rel="icon">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel=stylesheet href="css/videos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/swiper.css">
  <!-- <link rel="stylesheet" href="http://moransh4.github.io/Luca/css/swiper.min.css"> -->

  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

  <link rel=stylesheet href="css/calendar.css">
  <link rel=stylesheet href="css/navbar.css">
  <link rel="stylesheet" href="tipuesearch/tipuesearch.css">

  <title><?php echo "Air Force Civilian Service 4.0"; ?></title>
</head>
<style>



#container2, #container3, #container4, #container5, #container6, #container7, #container8, #container9, #container10, #container11, #container12, #container13, #container14, #container15, #container16 {
  cursor: none;
  touch-action: none;
  z-index:999;
}

.section, .section3, .section4, .section5, .section6, .section7, .section8, .section9, .section10, .section11, .section12, .section13, .section14, .section15, .section16 {
  display: flex;
  position: relative;
  width:1000px;
  height: auto;
  box-sizing: border-box;
  flex-direction:column;
  align-content: center;
  z-index:999;
}

.block2 {
  /* display: flex; */
  position: relative;
  width:1000px;
  height: auto;
  /* box-sizing: border-box;
  flex-direction:column;
  align-content: center; */
  z-index:999;
  left: 3%;
}



.circle, .circle3, .circle4, .circle5, .circle6, .circle7, .circle8, .circle9, .circle10, .circle11, .circle12, .circle13, .circle14, .circle15, .circle16 {
  position: absolute;
  width: 100px;
  height: 100px;
  top: 0;
  left: 0;
  background: none;
  border:2px solid white;
  border-radius: 80%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  pointer-events: none;
  opacity: 0.5;
  z-index:999;

  /* margin-top: -15em; */
}

.circle:after, .circle3:after, .circle4:after, .circle5:after, .circle6:after, .circle7:after, .circle8:after, .circle9:after, .circle10:after,  .circle11:after, .circle12:after, .circle13:after, .circle14:after, .circle15:after, .circle16:after {
  content:"LEARN MORE";
  color:white;
  font-size:13px;
  text-align: center;
  position:absolute;
  top: 50%;
  left: 12%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  z-index:999999999999;
}

.circle2:after, .circle33:after, .circle44:after, .circle55:after, .circle66:after, .circle77:after, .circle88:after, .circle99:after, .circle100:after, .circle101:after, .circle111:after, .circle112:after, .circle113:after, .circle114:after, .circle115:after, .circle116:after {
  content:"GO BACK";
  color:white;
  font-size:13px;
  text-align: center;
  position:absolute;
  top: 50%;
  left: 24%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  z-index:999;
}

.mt100 {
  margin-top:60px;
  padding-bottom:160px;
}

.heavyWhite {
  color:white !important;
  font-weight:500 !important;
  font-size:18px;
  text-align:left;
  padding-top:3em;
  margin-bottom:0em;
  padding-bottom:0em;
  /* margin-left:-200px; */
}

.heavyWhite.two {
  padding-top:1em;
}


.lightBlue2 {
  text-shadow: none;
  color: #33ccff;
  font-size: 80px !important;
  font-weight: bold !important;
  position: absolute;
  top: -100px;
  z-index:9999;
  text-transform: uppercase;
  /* right:178px; */

}


.lightBlue {
  text-shadow: none;
  color: white;
  font-size: 40px !important;
  font-weight: bold !important;
  -webkit-transform: rotate(270deg);
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -o-transform: rotate(270deg);
  transform: rotate(270deg);
  position: absolute;
  top: 50%;
  left: -15%;
}

.lightBlue.cyber {
  text-shadow: none;
  color: white;
  font-size: 40px !important;
  font-weight: bold !important;
  -webkit-transform: rotate(270deg);
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -o-transform: rotate(270deg);
  transform: rotate(270deg);
  position: absolute;
  top: 40%;
  left: -26%;
}

.glyphicon-chevron-right:before {
  /* content: "\e080"; */
  font-family: 'FontAwesome';
  content: "\f105";
  font-size:40px;
}

.glyphicon-chevron-left:before {
  /* content: "\e080"; */
  font-family: 'FontAwesome';
  content: "\f104";
  font-size:40px;
}

/* .carousel-control .icon-prev, .carousel-control .icon-next, .carousel-control .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right {
position: absolute;
top: 48%;
z-index: 5;
display: inline-block;
} */

.toggled {
  max-width:1000px;
  margin-top:0px;
  display:flex;
  flex-direction:column;
  display:none;
}

/* .carousel-control {
position: absolute;
top: 0;
bottom: 0;
left: 0;
width: 15%;
font-size: 40px;
color: #ffffff;
text-align: center;
text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
opacity: 0.5;
filter: alpha(opacity=50);
z-index: 9999999999;
} */

.carousel-control.right  {
  background-image: none;
}

.carousel-control.left  {
  background-image: none;
}


.whiteButton {
  margin-right:1em;

  font-weight:500;
  font-size:22px;
  font-family: 'Roboto Condensed', sans-serif;

  color:white;
  border-radius: 0px;
  -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
  /* box-shadow: 0px 16px 31px 0px rgba(168,170,172,1); */


}



.whiteButton::after {
  content: "";

  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  box-shadow: 0px 16px 18px -13px rgba(168,170,172,1);
  opacity: 0;
  -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.whiteButton:hover {
  /* background:#0000ff;
  color:white; */

  transform: scale(.95, .95);
  /* box-shadow: -13px 16px 18px -13px rgba(168,170,172,1)  !important; */


}

.spaces {
  display:flex;
  display: -webkit-flex;
  justify-content:center;
  -webkit-justify-content:center;
  padding-top:160px;

}


.carousel-control .icon-prev, .carousel-control .icon-next, .carousel-control .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 35% !important;
  z-index: 5;
  display: inline-block;
}


.category {
  color:white !important;
  text-decoration:none;
  font-weight: 500 !important;
  font-size: 23px;
}

.category:hover {
  color:white !important;
  text-decoration:none;
  font-weight: 500 !important;
  font-size: 23px;
}

#menu1 {

  display:flex;
  justify-content: space-between;
  align-items: center;
  max-width:250px;
}


a:focus {
  text-decoration: none;
}




#menu1 li.slide-line1 {
  display: block;
  padding:0;
  margin:0;
  background: white;
  position: absolute;
  /* top: 0; */
  width: 31px;
  height: 5px;
  /* left: 20px; */
  top: 32px;
  z-index: 0;
}


#box1{
  position:relative;
  height:40px;
  margin:0 0 0 0;
}

.moveLeft {
  position:relative;
  left:2%;
}

@media (max-width: 991px) {
  li {
    height: auto;
  }

}

#myImg, #myImg2, #myImg3, #myImg4, #myImg5, #myImg6, #myImg7, #myImg8, #myImg9, #myImg10, #myImg11, #myImg12, #myImg13, #myImg14 {
  /* min-height: 320px; */
  cursor: pointer;
  transition: 0.3s;
}

.endDescription {
  color: white;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 12px;
  font-weight: 400;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-justify-content: flex-start;
  -moz-justify-content: flex-start;
  -ms-justify-content: flex-start;
  justify-content: flex-start;
  margin-left: 1em;
  margin-right: 1em;
  padding-bottom: 0em;
  padding-top: 0em;
}

.m300 {
  margin-top:300px;
  margin-bottom:300px;
}


</style>

<body>



  <a href="#bottom" id="top"></a>

  <div style="background:#0f1932" id="site-wrapper">

    <?php include("nav-include/about-navbar.php"); ?>

    <div id="tipModal">
    </div>



    <div class="hideOnTablet">
      <center>
        <div id="box1" style="margin-top:125px;">
          <ul id="menu1">

            <li class="around one">
              <a class="active category" data-target="#carousel-default" data-slide-to="0">AIR</a>
            </li>
            <li class="around two">
              <a class="category" href="#" data-target="#carousel-default" data-slide-to="7">SPACE</a>
            </li>
            <li class="around three">
              <a class="category" href="#" data-target="#carousel-default" data-slide-to="11">CYBER</a>
            </li>

          </div>
        </center>

      </div>


      <div class="hideOnTablet">

        <section class="carousel-default">
          <div id="carousel-default" class="carousel slide" data-ride="carousel" data-interval="false">

            <div class="carousel-inner" role="listbox">


              <div class="item active air">
                <center id="slidingDiv10" class="mt100">
                  <div id="container10" class="section10">
                    <h1 class="lightBlue">INNOVATIONS</h1>
                    <img src="images5/scram-jet.jpg" width="100%" id="expand10">
                    <div class="circle10"></div>

                  </div>

                  <div class="section10">

                    <div class="moveUp">
                      <h1 class="lightBlue2">SCRAMJET X51A RIDER</h1>

                      <p class="heavyWhite">The Air Force’s X-51A Wave Rider experimental aircraft is powered by a state-of-the-art supersonic combustion scramjet engine that, unlike a rocket, can capture and burn oxygen in the earth’s atmosphere instead of carrying it in a large tank. In May 2013, the X-51A set a flight time record by making the longest sustained scramjet-powered, air-breathing hypersonic flight to date, reaching Mach 5 – an astonishing one mile per second, or nearly 4,000 miles per hour and it continues to break records.</p>


                      <div class="toggled">

                        <p class="heavyWhite two">Researchers believe scramjet technology will soon produce game-changing hypersonic applications. Imagine a flight from New York to Los Angeles in less than 45 minutes!</p>
                        <p class="heavyWhite two"></p>
                      </div>

                    </div>
                  </div>
                </center>
              </div>

              <div class="item air">
                <center id="slidingDiv11" class="mt100">
                  <div id="container11" class="section11">
                    <h1 class="lightBlue">INNOVATIONS</h1>
                    <img src="images5/stealth.jpg" width="100%" id="expand11">
                    <div class="circle11"></div>

                  </div>

                  <div class="section11">

                    <div class="moveUp">
                      <h1 class="lightBlue2">STEALTH TECHNOLOGY</h1>

                      <p class="heavyWhite">The <span style="font-weight:900;">B-2 Spirit</span> is a multi-role bomber capable of delivering both conventional and nuclear munitions. The revolutionary blending of low-observable technologies with high aerodynamic efficiency and large payload gives the B-2 important advantages over existing bombers. Its stealthy features provide it with greater freedom of action at high altitudes, thus increasing its range and offering a better field of view for the aircraft's sensors. Its unrefueled range is approximately 6,000 nautical miles (9,600 kilometers).</p>


                      <div class="toggled">

                        <p class="heavyWhite two">The <span style="font-weight:900;">F-35 Lightning II</span> is a fifth-generation, single-seat, single-engine, stealth multi-role fighter that can perform close air support, tactical bombing, and air defense missions. The F-35 has three different models: a conventional takeoff and landing variant; a short takeoff and vertical-landing variant; and a carrier-based variant. The F-35 is intended to be the world's premier strike aircraft through 2040, with close- and long-range air-to-air capability second only to that of the F-22 Raptor.</p>
                        <p class="heavyWhite two">The <span style="font-weight:900;">F-22 Raptor</span> is a single seat, twin-engine, fifth-generation fighter aircraft. Its combination of stealth, supercruise, maneuverability, and integrated avionics, coupled with improved supportability, represents an exponential leap in warfighting capabilities. The Raptor performs both air-to-air and air-to-ground missions allowing full realization of operational concepts vital to the 21st century Air Force.</p>
                      </div>
                    </div>
                  </div>
                </center>
              </div>


              <div class="item air">
                <center id="slidingDiv12" class="mt100">
                  <div id="container12" class="section12">
                    <h1 class="lightBlue">INNOVATIONS</h1>
                    <img src="images5/micro.jpg" width="100%" id="expand12">
                    <div class="circle12"></div>

                  </div>

                  <div class="section12">

                    <div class="moveUp">
                      <h1 class="lightBlue2" style="font-size: 55px !important;">Micro Air Vehicles, Robotic Birds & Ornithopters</h1>

                      <p class="heavyWhite">Engineers at Wright-Patterson AFB have found that designing micro air vehicles – or MAVs – is nothing like shrinking an F-16. At a mere six inches in length, <span style="font-weight:900;">Robotic Birds</span> pack sensors, receivers, and power supplies that enable them to fly, hover, and rest virtually unnoticed – making them ideal vehicles for gathering intelligence. Motion capture – MOCAP – is an important support technology. Commonly used in video game development to record and digitize movement, MOCAP is now being employed by Air Force researchers to teach computers to fly remotely and to track air and land vehicles.</p>

                      <div class="toggled">
                        <p class="heavyWhite two">Speaking of research, it doesn’t get “battier” than Air Force efforts to advance MAV capabilities. While MAVs are successfully being used in Afghanistan and Iraq, their wings are unsuited for maneuvering in tight spaces and harsh weather. So, researchers are modelling the next generation of MAVs on the sophisticated wings of bats, which actually change shape during flight, enabling them to remain airborne and flexible in difficult conditions. These <span style="font-weight:900;">Ornithopters</span> (wing-flapping aircraft) will smoothly navigate turbulent weather and complex environments like forests, buildings, caves, and tunnels.</p>
                        <p class="heavyWhite two"></p>
                      </div>
                    </div>
                  </div>
                </center>
              </div>


              <div class="item air">
                <center id="slidingDiv13" class="mt100">
                  <div id="container13" class="section13">
                    <h1 class="lightBlue">INNOVATIONS</h1>
                    <img src="images5/arsenal.jpg" width="100%" id="expand13">
                    <div class="circle13"></div>

                  </div>

                  <div class="section13">

                    <div class="moveUp">
                      <h1 class="lightBlue2">Air Force Arsenal</h1>
                      <p class="heavyWhite">With 162 bombers, 2,286 fighter/attack aircraft, and 203 helicopters in total active inventory—not to mention 450 intercontinental ballistic missiles (ICBMs)—the United States Air Force is well-equipped to do some serious damage to the enemy. Our elite STEM civilian workforce researches and develops the next generation of weapons technology.</p>

                      <div class="toggled">
                        <p class="heavyWhite two"></p>
                        <p class="heavyWhite two"></p>
                      </div>
                    </div>
                  </div>
                </center>
              </div>

              <div class="item air">
                <center id="slidingDiv14" class="mt100">
                  <div id="container14" class="section14">
                    <h1 class="lightBlue">INNOVATIONS</h1>
                    <img src="images5/wind.jpg" width="100%" id="expand14">
                    <div class="circle14"></div>

                  </div>

                  <div class="section14">

                    <div class="moveUp">
                      <h1 class="lightBlue2">Wind Tunnels</h1>

                      <p class="heavyWhite">U.S. Air Force wind tunnels put aircraft, propulsion systems, and space craft through their paces. Arnold Engineering Development Center (AEDC) is the most advanced and largest complex of flight simulation test facilities in the world. The center operates 58 aerodynamic and propulsion wind tunnels, rocket and turbine engine test cells, space environmental chambers, arc heaters, ballistic ranges, and other specialized units. Twenty-seven of the center’s test units have capabilities unmatched elsewhere in the United States; 14 are unique in the world. Facilities can simulate flight conditions from sea level to an altitude of 300 miles and from subsonic velocities to Mach 2.0.</p>

                      <div class="toggled">
                        <p class="heavyWhite two"></p>
                        <p class="heavyWhite two"></p>
                      </div>
                    </div>
                  </div>
                </center>
              </div>

              <div class="item air">
                <center id="slidingDiv15" class="mt100">
                  <div id="container15" class="section15">
                    <h1 class="lightBlue">INNOVATIONS</h1>
                    <img src="images5/RPA.jpg" width="100%" id="expand15">
                    <div class="circle15"></div>

                  </div>

                  <div class="section15">

                    <div class="moveUp">
                      <h1 class="lightBlue2">RPAS</h1>

                      <p class="heavyWhite">Remotely piloted vehicles (RPAs), known as Predator and Reaper, have flown in on the winds of change. In 2010, for the first time in its history, the Air Force bought more RPAs than manned air vehicles.</p>

                      <div class="toggled">

                        <p class="heavyWhite two">These highly sophisticated aircraft for combat and reconnaissance are highly sought-after weapons systems, so too are the unsung pilots and intelligence analysts directing these RPAs from sites sometimes half a world away.</p>
                        <p class="heavyWhite two">Whether noiselessly observing an unsuspecting enemy or watching over our soldiers, these pilots’ abilities and psyches are every bit as engaged and challenged as those of their comrades in traditional aircraft.</p>
                      </div>
                    </div>
                  </div>
                </center>
              </div>

              <div class="item air">
                <center id="slidingDiv16" class="mt100">
                  <div id="container16" class="section16">
                    <h1 class="lightBlue">INNOVATIONS</h1>
                    <img src="images5/test-pilot.jpg" width="100%" id="expand16">
                    <div class="circle16"></div>

                  </div>

                  <div class="section16">

                    <div class="moveUp">
                      <h1 class="lightBlue2">Test Pilots</h1>

                      <p class="heavyWhite">In the 1950s, test pilots were being killed at the rate of about one a week, but the risks have dropped to a fraction of that, thanks to the maturation of aircraft technology, better ground-testing and simulation of aircraft performance, and, lately, the use of unmanned aerial vehicles to test experimental aircraft features. Still, piloting experimental aircraft remains more dangerous than most other types of flying.</p>

                      <div class="toggled">

                        <p class="heavyWhite two"></p>
                        <p class="heavyWhite two"></p>
                      </div>
                    </div>
                  </div>
                </center>
              </div>



              <div class="item spaceClass" id="logThis">
                <div class="outerPosition">
                  <center id="slidingDiv" class="mt100">
                    <div id="container2" class="section">
                      <h1 class="lightBlue">INNOVATIONS</h1>
                      <img src="images5/nasa.jpg" class="img-responsive" id="expand">
                      <div class="circle"></div>

                    </div>

                    <div class="section">

                      <div class="moveUp">
                        <h1 class="lightBlue2">GPS CONSTELLATIONS</h1>

                        <p class="heavyWhite">Did you know that GPS is provided by the U.S. Air Force to the entire world free of charge?<br>It’s made possible by satellites developed by Air Force civilian researchers.</p>

                        <div class="toggled">

                          <p class="heavyWhite two">These satellites orbit the earth broadcasting radio signals that allow a form of triangulation. Beyond providing highly accurate positioning that enable the navigation devices in our cars and on our smart phones, GPS enables critical networks like cellular phones, ATM banking, and power grids, to name a few. It also provides crucial precision navigation and timing capabilities to our military forces around the world. The latest addition to this system was successfully launched from Cape Canaveral on May 15, 2013. This GPS IIF-4 spacecraft was added to the orbiting constellation of 64 satellites circling 11,000 nautical miles above Earth.</p>
                          <p class="heavyWhite two">The capabilities of the new IIF satellites provide greater navigational accuracy through improvements in atomic clock technology; a more robust signal for commercial aviation and safety-of-life applications, known as the new third civil signal (L5); and a 12-year design life providing long-term service. These upgrades improve anti-jam capabilities for the warfighter and improve security for military and civilian users around the world.</p>
                        </div>
                      </div>
                    </div>
                  </center>
                </div>
              </div>

              <div class="item spaceClass">
                <center id="slidingDiv3" class="mt100">
                  <div id="container3" class="section3">
                    <h1 class="lightBlue">INNOVATIONS</h1>
                    <img src="images5/rockets-innovations.jpg" id="expand3" width='100%'>
                    <div class="circle3"></div>

                  </div>

                  <div class="block2">

                    <div class="moveUp">
                      <h1 class="lightBlue2">ROCKETS</h1>

                      <p class="heavyWhite">The Air Force Office of Scientific Research and NASA successfully launched a nine-foot rocket 1,300 feet over the skies of Indiana using an environmentally friendly, safe propellant composed of Aluminum powder and water ice (ALICE). ALICE has the consistency of toothpaste when made and can be fit into molds and cooled to -30° C, 24 hours before flight.</p>

                      <div class="toggled">

                        <p class="heavyWhite two">The concept has really taken off with researchers for several reasons. When optimized, ALICE could have a higher performance than conventional propellants; it can be used both for flight on Earth and in long-distance space missions; and it can theoretically be manufactured on distant planets – the moon or Mars, for example – instead of having to be transported to those distant locations.</p>
                        <p class="heavyWhite two"></p>
                      </div>
                    </div>
                  </div>
                </center>
              </div>

              <div class="item spaceClass">
                <center id="slidingDiv4" class="mt100">
                  <div id="container4" class="section4">
                    <h1 class="lightBlue">INNOVATIONS</h1>
                    <img src="images5/space-weather.jpg" width="100%" id="expand4">
                    <div class="circle4"></div>

                  </div>

                  <div class="section4">

                    <div class="moveUp">
                      <h1 class="lightBlue2">SPACE WEATHER</h1>

                      <p class="heavyWhite">The Coriolis satellite that carries Air Force Research Lab’s (AFRL) Solar Mass Ejection Imager, or SMEI, has successfully detected and tracked 360 coronal mass ejections (CMEs) and shown the practicality of forecasting effects at Earth of these hazardous space weather phenomena.</p>

                      <div class="toggled">

                        <p class="heavyWhite two">Since 2003, SMEI cameras have captured nearly full sky images of great sensitivity every 103 minutes; there is no other celestial record of this length, field of view, continuity, sensitivity and cadence.</p>
                        <p class="heavyWhite two">SMEI has collected unprecedented data in many areas of heliospheric observations including CME-comet tail interactions, zodiacal background variation through the solar cycle, discovery of high altitude auroras, and resident space object observations. SMEI data have also produced light curves for variable stars and novae with unparalleled time resolution.</p>
                      </div>
                    </div>
                  </div>
                </center>
              </div>

              <div class="item spaceClass">
                <center id="slidingDiv5" class="mt100">
                  <div id="container5" class="section5">
                    <h1 class="lightBlue">INNOVATIONS</h1>
                    <img src="images5/gps.jpg" width="100%" id="expand5">
                    <div class="circle5"></div>

                  </div>

                  <div class="section5">

                    <div class="moveUp">
                      <h1 class="lightBlue2">SATELLITE TECHNOLOGY</h1>
                      <p class="heavyWhite">U.S. Government data received from satellites have increased 100,000-fold in the last decade due primarily to the addition of nearly 50 new instruments to the nation’s exploratory toolbox.</p>

                      <div class="toggled">
                        <p class="heavyWhite two">Currently, scientists are studying information that satellites are gathering on how our solar system affects the weather. In addition to heating the land, the sun’s energy can create weather disturbances and drive ocean currents. Researchers monitoring the amounts of solar energy reaching the earth theorize that it is small increases in the sun's total energy output over the last century that’s responsible for climate change.</p>
                        <p class="heavyWhite two">With increasingly sophisticated satellites at their disposal, scientists will be able to make deeper observations and improve predictions about changing climatic conditions.</p>
                      </div>
                    </div>
                  </div>
                </center>
              </div>

              <div class="item cyberClass">
                <center id="slidingDiv6" class="mt100">
                  <div id="container6" class="section6">
                    <h1 class="lightBlue">INNOVATIONS</h1>
                    <img src="images5/cyber-attack.jpg" width="100%" id="expand6">
                    <div class="circle6"></div>

                  </div>

                  <div class="section6">

                    <div class="moveUp">
                      <h1 class="lightBlue2">CYBER ATTACK</h1>

                      <p class="heavyWhite">The Air Force Research Laboratory (AFRL) developed a Network Intrusion, Risk and Vulnerability Analysis (NIRVANA) software tool to provide comprehensive cyber security analysis capability. The tool uses data from multiple intrusion detection systems to produce a comprehensive situation awareness picture, including a static evaluation of network vulnerabilities.</p>

                      <div class="toggled">

                        <p class="heavyWhite two">NIRVANA identifies the consequences of actions. With this tool, network vulnerabilities are identified using the novel attack graphs associated with applications and mission requirements. The technology can estimate the probable targets intended by the attacker, allowing operators to counter with near-real-time actions, effectively denying the attacker’s goals. The technique is designed to scale, allowing for coordination of multiple security domains, and several runtime operators.</p>
                        <p class="heavyWhite two">Using this tool, the Air Force, Department of Defense (DoD) and other large enterprises have the first comprehensive capability to visualize the implications of a cyber-attack. Operators will be able to anticipate the actions of attackers, even when a slow-brewed or multi-prong attack is in progress. The ability to anticipate and adjust in order to maintain mission readiness during the attack, although present in DoD cyber security strategy, is a missing component of our current cyber deterrence arsenal. This NIRVANA technology is the first to provide coherent enterprise-wide network cyber-attack damage assessment.</p>
                      </div>
                    </div>
                  </div>
                </center>
              </div>

              <div class="item cyberClass">
                <center id="slidingDiv7" class="mt100">
                  <div id="container7" class="section7">
                    <h1 class="lightBlue">INNOVATIONS</h1>
                    <img src="images5/nano.jpg" width="100%" id="expand7">
                    <div class="circle7"></div>

                  </div>

                  <div class="section7">

                    <div class="moveUp">
                      <h1 class="lightBlue2">NANO TECHNOLOGY</h1>

                      <p class="heavyWhite">While nanoscientists study matter on an atomic and molecular scale, nanotechnologists develop materials and devices 100 nanometers or smaller in one or more dimensions. (A nanometer is one billionth of a meter, or the comparative size of a marble to the earth; a meter is about three feet.)</p>

                      <div class="toggled">

                        <p class="heavyWhite two">Since it began in the 1980s, their work has advanced on two tracks – controlling self-recognizable/self-assembling molecular components and scaling down larger entities without atomic-level control. The seemingly infinite number of potential applications will impact multiple fields: robotics, medicine, electronics, and geo-engineering are just a few. AFCS is pushing the leading edge of research and development in this fascinating field.</p>
                        <p class="heavyWhite two"></p>
                      </div>
                    </div>
                  </div>
                </center>
              </div>


              <div class="item cyberClass">
                <center id="slidingDiv8" class="mt100">
                  <div id="container8" class="section8">
                    <h1 class="lightBlue">INNOVATIONS</h1>
                    <img src="images5/router.jpg" width="100%" id="expand8">
                    <div class="circle8"></div>

                  </div>

                  <div class="section8">

                    <div class="moveUp">
                      <h1 class="lightBlue2">WORLD'S FASTEST ROUTER</h1>

                      <p class="heavyWhite">The U.S. Air Force recently completed testing on a new “flying wireless router” system that will help give ground forces and pilots real-time tactical information in the field.</p>

                      <div class="toggled">

                        <p class="heavyWhite two">The main difference between this router and a typical one you might be using at home is that it is attached to fighter planes. It is essentially a software upgrade called Net-T, for “network tactical,” and is designed to facilitate almost instantaneous communication between commanders, ground troops, and fighter aircraft. This new development provides real-time information like videos, images, maps, coordinates, or any file type from the forward deployed elements without relying on satellite, radio or other forms of traditional communication. It is setting the stage to provide beyond line-of-site command and control capability to warfighters in the air, sea, and on the ground.</p>
                        <p class="heavyWhite two"></p>
                      </div>
                    </div>
                  </div>
                </center>
              </div>


              <div class="item cyberClass">
                <center id="slidingDiv9" class="mt100">
                  <div id="container9" class="section9">
                    <h1 class="lightBlue">INNOVATIONS</h1>
                    <img src="images5/super.jpg" width="100%" id="expand9">
                    <div class="circle9"></div>

                  </div>

                  <div class="section9">

                    <div class="moveUp">
                      <h1 class="lightBlue2">SUPER COMPUTING</h1>

                      <p class="heavyWhite">Once thought to be just a part of home entertainment systems, Sony’s PlayStation 3 is proving itself to be more than just an online death-match machine.</p>

                      <div class="toggled">
                        <p class="heavyWhite two">The game console’s price-to-performance ratio inspired one AFCS research team to place an order for 1,700 of them to go with the 336 they already have. The system will use 300 to 320 kilowatts at full bore and about 10 percent to 30 percent of that in standby, when most supercomputers are using 5 megawatts. However, much of the time the cluster will only be running the nodes it needs and it will be turned off when not in use. By taking advantage of a growing gaming market, the price performance is just $2 to $3 per gigaFLOPS.</p>
                        <p class="heavyWhite two">\</p>
                      </div>
                    </div>
                  </div>
                </center>
              </div>



            </div>
            <a class="left carousel-control" href="#carousel-default" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <!-- <span class="sr-only">Previous</span> -->
            </a>
            <a class="right carousel-control" href="#carousel-default" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <!-- <span class="sr-only">Next</span> -->
            </a>
          </div>
        </section>
      </div>


      <div class="tabletHidden">

        <div class="container-fluid m300">
          <div class="row">
            <div class="col-xs-12 col-lg-12">

              <div style="-webkit-box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);-moz-box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);">
                <div class="m-carousel">
                  <div class="m-carousel__item one">
                    <img id="myImg" class="m-carousel__image" data-flickity-lazyload="images5/scram-jet.jpg" alt="SCRAMJET X51A RIDER: The Air Force’s X-51A Wave Rider experimental aircraft is powered by a state-of-the-art supersonic combustion scramjet engine that, unlike a rocket, can capture and burn oxygen in the earth’s atmosphere instead of carrying it in a large tank. In May 2013, the X-51A set a flight time record by making the longest sustained scramjet-powered, air-breathing hypersonic flight to date, reaching Mach 5 – an astonishing one mile per second, or nearly 4,000 miles per hour and it continues to break records. Researchers believe scramjet technology will soon produce game-changing hypersonic applications. Imagine a flight from New York to Los Angeles in less than 45 minutes!">
                    <div class="custCaption1"><p class="endDescription">SCRAMJET X51A RIDER: The Air Force’s X-51A Wave Rider experimental aircraft is powered by a state-of-the-art supersonic combustion scramjet engine that, unlike a rocket, can capture and burn oxygen in the earth’s atmosphere instead of carrying it in a large tank. In May 2013, the X-51A set a flight time record by making the longest sustained scramjet-powered, air-breathing hypersonic flight to date, reaching Mach 5 – an astonishing one mile per second, or nearly 4,000 miles per hour and it continues to break records. Researchers believe scramjet technology will soon produce game-changing hypersonic applications. Imagine a flight from New York to Los Angeles in less than 45 minutes!</p></div>
                  </div>

                  <div class="m-carousel__item two">
                    <img id="myImg2" class="m-carousel__image" data-flickity-lazyload="images5/stealth.jpg" alt="STEALTH TECHNOLOGY: The B-2 Spirit is a multi-role bomber capable of delivering both conventional and nuclear munitions. The revolutionary blending of low-observable technologies with high aerodynamic efficiency and large payload gives the B-2 important advantages over existing bombers. Its stealthy features provide it with greater freedom of action at high altitudes, thus increasing its range and offering a better field of view for the aircraft's sensors. Its unrefueled range is approximately 6,000 nautical miles (9,600 kilometers). The F-35 Lightning II is a fifth-generation, single-seat, single-engine, stealth multi-role fighter that can perform close air support, tactical bombing, and air defense missions. The F-35 has three different models: a conventional takeoff and landing variant; a short takeoff and vertical-landing variant; and a carrier-based variant. The F-35 is intended to be the world's premier strike aircraft through 2040, with close- and long-range air-to-air capability second only to that of the F-22 Raptor. The F-22 Raptor is a single seat, twin-engine, fifth-generation fighter aircraft. Its combination of stealth, supercruise, maneuverability, and integrated avionics, coupled with improved supportability, represents an exponential leap in warfighting capabilities. The Raptor performs both air-to-air and air-to-ground missions allowing full realization of operational concepts vital to the 21st century Air Force.">
                    <div class="custCaption2"><p class="endDescription">STEALTH TECHNOLOGY: The B-2 Spirit is a multi-role bomber capable of delivering both conventional and nuclear munitions. The revolutionary blending of low-observable technologies with high aerodynamic efficiency and large payload gives the B-2 important advantages over existing bombers. Its stealthy features provide it with greater freedom of action at high altitudes, thus increasing its range and offering a better field of view for the aircraft's sensors. Its unrefueled range is approximately 6,000 nautical miles (9,600 kilometers). The F-35 Lightning II is a fifth-generation, single-seat, single-engine, stealth multi-role fighter that can perform close air support, tactical bombing, and air defense missions. The F-35 has three different models: a conventional takeoff and landing variant; a short takeoff and vertical-landing variant; and a carrier-based variant. The F-35 is intended to be the world's premier strike aircraft through 2040, with close- and long-range air-to-air capability second only to that of the F-22 Raptor. The F-22 Raptor is a single seat, twin-engine, fifth-generation fighter aircraft. Its combination of stealth, supercruise, maneuverability, and integrated avionics, coupled with improved supportability, represents an exponential leap in warfighting capabilities. The Raptor performs both air-to-air and air-to-ground missions allowing full realization of operational concepts vital to the 21st century Air Force.</p></div>
                  </div>

                  <div class="m-carousel__item three">
                    <img id="myImg3" class="m-carousel__image" data-flickity-lazyload="images5/micro.jpg" alt="Micro Air Vehicles, Robotic Birds & Ornithopters: Engineers at Wright-Patterson AFB have found that designing micro air vehicles – or MAVs – is nothing like shrinking an F-16. At a mere six inches in length, Robotic Birds pack sensors, receivers, and power supplies that enable them to fly, hover, and rest virtually unnoticed – making them ideal vehicles for gathering intelligence. Motion capture – MOCAP – is an important support technology. Commonly used in video game development to record and digitize movement, MOCAP is now being employed by Air Force researchers to teach computers to fly remotely and to track air and land vehicles. Speaking of research, it doesn’t get “battier” than Air Force efforts to advance MAV capabilities. While MAVs are successfully being used in Afghanistan and Iraq, their wings are unsuited for maneuvering in tight spaces and harsh weather. So, researchers are modelling the next generation of MAVs on the sophisticated wings of bats, which actually change shape during flight, enabling them to remain airborne and flexible in difficult conditions. These Ornithopters (wing-flapping aircraft) will smoothly navigate turbulent weather and complex environments like forests, buildings, caves, and tunnels.">
                    <div class="custCaption3"><p class="endDescription">Micro Air Vehicles, Robotic Birds & Ornithopters: Engineers at Wright-Patterson AFB have found that designing micro air vehicles – or MAVs – is nothing like shrinking an F-16. At a mere six inches in length, Robotic Birds pack sensors, receivers, and power supplies that enable them to fly, hover, and rest virtually unnoticed – making them ideal vehicles for gathering intelligence. Motion capture – MOCAP – is an important support technology. Commonly used in video game development to record and digitize movement, MOCAP is now being employed by Air Force researchers to teach computers to fly remotely and to track air and land vehicles. Speaking of research, it doesn’t get “battier” than Air Force efforts to advance MAV capabilities. While MAVs are successfully being used in Afghanistan and Iraq, their wings are unsuited for maneuvering in tight spaces and harsh weather. So, researchers are modelling the next generation of MAVs on the sophisticated wings of bats, which actually change shape during flight, enabling them to remain airborne and flexible in difficult conditions. These Ornithopters (wing-flapping aircraft) will smoothly navigate turbulent weather and complex environments like forests, buildings, caves, and tunnels.</p></div>
                  </div>

                  <div class="m-carousel__item four">
                    <img id="myImg4" class="m-carousel__image" data-flickity-lazyload="images5/arsenal.jpg" alt="Air Force Arsenal: With 162 bombers, 2,286 fighter/attack aircraft, and 203 helicopters in total active inventory—not to mention 450 intercontinental ballistic missiles (ICBMs)—the United States Air Force is well-equipped to do some serious damage to the enemy. Our elite STEM civilian workforce researches and develops the next generation of weapons technology.">
                    <div class="custCaption4"><p class="endDescription">Air Force Arsenal: With 162 bombers, 2,286 fighter/attack aircraft, and 203 helicopters in total active inventory—not to mention 450 intercontinental ballistic missiles (ICBMs)—the United States Air Force is well-equipped to do some serious damage to the enemy. Our elite STEM civilian workforce researches and develops the next generation of weapons technology.</p></div>
                  </div>

                  <div class="m-carousel__item five">
                    <img id="myImg5" class="m-carousel__image" data-flickity-lazyload="images5/wind.jpg" alt="Wind Tunnels: U.S. Air Force wind tunnels put aircraft, propulsion systems, and space craft through their paces. Arnold Engineering Development Center (AEDC) is the most advanced and largest complex of flight simulation test facilities in the world. The center operates 58 aerodynamic and propulsion wind tunnels, rocket and turbine engine test cells, space environmental chambers, arc heaters, ballistic ranges, and other specialized units. Twenty-seven of the center’s test units have capabilities unmatched elsewhere in the United States; 14 are unique in the world. Facilities can simulate flight conditions from sea level to an altitude of 300 miles and from subsonic velocities to Mach 2.0.">
                    <div class="custCaption5"><p class="endDescription">Wind Tunnels: U.S. Air Force wind tunnels put aircraft, propulsion systems, and space craft through their paces. Arnold Engineering Development Center (AEDC) is the most advanced and largest complex of flight simulation test facilities in the world. The center operates 58 aerodynamic and propulsion wind tunnels, rocket and turbine engine test cells, space environmental chambers, arc heaters, ballistic ranges, and other specialized units. Twenty-seven of the center’s test units have capabilities unmatched elsewhere in the United States; 14 are unique in the world. Facilities can simulate flight conditions from sea level to an altitude of 300 miles and from subsonic velocities to Mach 2.0.</p></div>
                  </div>

                  <div class="m-carousel__item six">
                    <img id="myImg6" class="m-carousel__image" data-flickity-lazyload="images5/RPA.jpg" alt="RPAs: Remotely piloted vehicles (RPAs), known as Predator and Reaper, have flown in on the winds of change. In 2010, for the first time in its history, the Air Force bought more RPAs than manned air vehicles. These highly sophisticated aircraft for combat and reconnaissance are highly sought-after weapons systems, so too are the unsung pilots and intelligence analysts directing these RPAs from sites sometimes half a world away. Whether noiselessly observing an unsuspecting enemy or watching over our soldiers, these pilots’ abilities and psyches are every bit as engaged and challenged as those of their comrades in traditional aircraft.">
                    <div class="custCaption6"><p class="endDescription">RPAs: Remotely piloted vehicles (RPAs), known as Predator and Reaper, have flown in on the winds of change. In 2010, for the first time in its history, the Air Force bought more RPAs than manned air vehicles. These highly sophisticated aircraft for combat and reconnaissance are highly sought-after weapons systems, so too are the unsung pilots and intelligence analysts directing these RPAs from sites sometimes half a world away. Whether noiselessly observing an unsuspecting enemy or watching over our soldiers, these pilots’ abilities and psyches are every bit as engaged and challenged as those of their comrades in traditional aircraft.</p></div>
                  </div>

                  <div class="m-carousel__item seven">
                    <img id="myImg7" class="m-carousel__image" data-flickity-lazyload="images5/test-pilot.jpg" alt="Test Pilots: In the 1950s, test pilots were being killed at the rate of about one a week, but the risks have dropped to a fraction of that, thanks to the maturation of aircraft technology, better ground-testing and simulation of aircraft performance, and, lately, the use of unmanned aerial vehicles to test experimental aircraft features. Still, piloting experimental aircraft remains more dangerous than most other types of flying.">
                    <div class="custCaption7"><p class="endDescription">Test Pilots: In the 1950s, test pilots were being killed at the rate of about one a week, but the risks have dropped to a fraction of that, thanks to the maturation of aircraft technology, better ground-testing and simulation of aircraft performance, and, lately, the use of unmanned aerial vehicles to test experimental aircraft features. Still, piloting experimental aircraft remains more dangerous than most other types of flying.</p></div>
                  </div>

                  <div class="m-carousel__item eight">
                    <img id="myImg8" class="m-carousel__image" data-flickity-lazyload="images5/nasa.jpg" alt="GPS CONSTELLATIONS: Did you know that GPS is provided by the U.S. Air Force to the entire world free of charge? It’s made possible by satellites developed by Air Force civilian researchers. These satellites orbit the earth broadcasting radio signals that allow a form of triangulation. Beyond providing highly accurate positioning that enable the navigation devices in our cars and on our smart phones, GPS enables critical networks like cellular phones, ATM banking, and power grids, to name a few. It also provides crucial precision navigation and timing capabilities to our military forces around the world. The latest addition to this system was successfully launched from Cape Canaveral on May 15, 2013. This GPS IIF-4 spacecraft was added to the orbiting constellation of 64 satellites circling 11,000 nautical miles above Earth. The capabilities of the new IIF satellites provide greater navigational accuracy through improvements in atomic clock technology; a more robust signal for commercial aviation and safety-of-life applications, known as the new third civil signal (L5); and a 12-year design life providing long-term service. These upgrades improve anti-jam capabilities for the warfighter and improve security for military and civilian users around the world.">
                    <div class="custCaption8"><p class="endDescription">GPS CONSTELLATIONS: Did you know that GPS is provided by the U.S. Air Force to the entire world free of charge? It’s made possible by satellites developed by Air Force civilian researchers. These satellites orbit the earth broadcasting radio signals that allow a form of triangulation. Beyond providing highly accurate positioning that enable the navigation devices in our cars and on our smart phones, GPS enables critical networks like cellular phones, ATM banking, and power grids, to name a few. It also provides crucial precision navigation and timing capabilities to our military forces around the world. The latest addition to this system was successfully launched from Cape Canaveral on May 15, 2013. This GPS IIF-4 spacecraft was added to the orbiting constellation of 64 satellites circling 11,000 nautical miles above Earth. The capabilities of the new IIF satellites provide greater navigational accuracy through improvements in atomic clock technology; a more robust signal for commercial aviation and safety-of-life applications, known as the new third civil signal (L5); and a 12-year design life providing long-term service. These upgrades improve anti-jam capabilities for the warfighter and improve security for military and civilian users around the world.</p></div>
                  </div>

                  <div class="m-carousel__item nine">
                    <img id="myImg9" class="m-carousel__image" data-flickity-lazyload="images5/rockets-innovations.jpg" alt="ROCKETS: The Air Force Office of Scientific Research and NASA successfully launched a nine-foot rocket 1,300 feet over the skies of Indiana using an environmentally friendly, safe propellant composed of Aluminum powder and water ice (ALICE). ALICE has the consistency of toothpaste when made and can be fit into molds and cooled to -30° C, 24 hours before flight. The concept has really taken off with researchers for several reasons. When optimized, ALICE could have a higher performance than conventional propellants; it can be used both for flight on Earth and in long-distance space missions; and it can theoretically be manufactured on distant planets – the moon or Mars, for example – instead of having to be transported to those distant locations.">
                    <div class="custCaption9"><p class="endDescription">ROCKETS: The Air Force Office of Scientific Research and NASA successfully launched a nine-foot rocket 1,300 feet over the skies of Indiana using an environmentally friendly, safe propellant composed of Aluminum powder and water ice (ALICE). ALICE has the consistency of toothpaste when made and can be fit into molds and cooled to -30° C, 24 hours before flight. The concept has really taken off with researchers for several reasons. When optimized, ALICE could have a higher performance than conventional propellants; it can be used both for flight on Earth and in long-distance space missions; and it can theoretically be manufactured on distant planets – the moon or Mars, for example – instead of having to be transported to those distant locations.</p></div>
                  </div>

                  <div class="m-carousel__item ten">
                    <img id="myImg10" class="m-carousel__image" data-flickity-lazyload="images5/gps.jpg" alt="SATELLITE TECHNOLOGY: U.S. Government data received from satellites have increased 100,000-fold in the last decade due primarily to the addition of nearly 50 new instruments to the nation’s exploratory toolbox. Currently, scientists are studying information that satellites are gathering on how our solar system affects the weather. In addition to heating the land, the sun’s energy can create weather disturbances and drive ocean currents. Researchers monitoring the amounts of solar energy reaching the earth theorize that it is small increases in the sun's total energy output over the last century that’s responsible for climate change. With increasingly sophisticated satellites at their disposal, scientists will be able to make deeper observations and improve predictions about changing climatic conditions.">
                    <div class="custCaption10"><p class="endDescription">SATELLITE TECHNOLOGY: U.S. Government data received from satellites have increased 100,000-fold in the last decade due primarily to the addition of nearly 50 new instruments to the nation’s exploratory toolbox. Currently, scientists are studying information that satellites are gathering on how our solar system affects the weather. In addition to heating the land, the sun’s energy can create weather disturbances and drive ocean currents. Researchers monitoring the amounts of solar energy reaching the earth theorize that it is small increases in the sun's total energy output over the last century that’s responsible for climate change. With increasingly sophisticated satellites at their disposal, scientists will be able to make deeper observations and improve predictions about changing climatic conditions.</p></div>
                  </div>

                  <div class="m-carousel__item eleven">
                    <img id="myImg11" class="m-carousel__image" data-flickity-lazyload="images5/cyber-attack.jpg" alt="CYBER ATTACK: The Air Force Research Laboratory (AFRL) developed a Network Intrusion, Risk and Vulnerability Analysis (NIRVANA) software tool to provide comprehensive cyber security analysis capability. The tool uses data from multiple intrusion detection systems to produce a comprehensive situation awareness picture, including a static evaluation of network vulnerabilities. NIRVANA identifies the consequences of actions. With this tool, network vulnerabilities are identified using the novel attack graphs associated with applications and mission requirements. The technology can estimate the probable targets intended by the attacker, allowing operators to counter with near-real-time actions, effectively denying the attacker’s goals. The technique is designed to scale, allowing for coordination of multiple security domains, and several runtime operators. Using this tool, the Air Force, Department of Defense (DoD) and other large enterprises have the first comprehensive capability to visualize the implications of a cyber-attack. Operators will be able to anticipate the actions of attackers, even when a slow-brewed or multi-prong attack is in progress. The ability to anticipate and adjust in order to maintain mission readiness during the attack, although present in DoD cyber security strategy, is a missing component of our current cyber deterrence arsenal. This NIRVANA technology is the first to provide coherent enterprise-wide network cyber-attack damage assessment.">
                    <div class="custCaption11"><p class="endDescription">CYBER ATTACK: The Air Force Research Laboratory (AFRL) developed a Network Intrusion, Risk and Vulnerability Analysis (NIRVANA) software tool to provide comprehensive cyber security analysis capability. The tool uses data from multiple intrusion detection systems to produce a comprehensive situation awareness picture, including a static evaluation of network vulnerabilities. NIRVANA identifies the consequences of actions. With this tool, network vulnerabilities are identified using the novel attack graphs associated with applications and mission requirements. The technology can estimate the probable targets intended by the attacker, allowing operators to counter with near-real-time actions, effectively denying the attacker’s goals. The technique is designed to scale, allowing for coordination of multiple security domains, and several runtime operators. Using this tool, the Air Force, Department of Defense (DoD) and other large enterprises have the first comprehensive capability to visualize the implications of a cyber-attack. Operators will be able to anticipate the actions of attackers, even when a slow-brewed or multi-prong attack is in progress. The ability to anticipate and adjust in order to maintain mission readiness during the attack, although present in DoD cyber security strategy, is a missing component of our current cyber deterrence arsenal. This NIRVANA technology is the first to provide coherent enterprise-wide network cyber-attack damage assessment.</p></div>
                  </div>

                  <div class="m-carousel__item twelve">
                    <img id="myImg12" class="m-carousel__image" data-flickity-lazyload="images5/router.jpg" alt="WORLD'S FASTEST ROUTER: The U.S. Air Force recently completed testing on a new “flying wireless router” system that will help give ground forces and pilots real-time tactical information in the field. The main difference between this router and a typical one you might be using at home is that it is attached to fighter planes. It is essentially a software upgrade called Net-T, for “network tactical,” and is designed to facilitate almost instantaneous communication between commanders, ground troops, and fighter aircraft. This new development provides real-time information like videos, images, maps, coordinates, or any file type from the forward deployed elements without relying on satellite, radio or other forms of traditional communication. It is setting the stage to provide beyond line-of-site command and control capability to warfighters in the air, sea, and on the ground.">
                    <div class="custCaption12"><p class="endDescription">WORLD'S FASTEST ROUTER: The U.S. Air Force recently completed testing on a new “flying wireless router” system that will help give ground forces and pilots real-time tactical information in the field. The main difference between this router and a typical one you might be using at home is that it is attached to fighter planes. It is essentially a software upgrade called Net-T, for “network tactical,” and is designed to facilitate almost instantaneous communication between commanders, ground troops, and fighter aircraft. This new development provides real-time information like videos, images, maps, coordinates, or any file type from the forward deployed elements without relying on satellite, radio or other forms of traditional communication. It is setting the stage to provide beyond line-of-site command and control capability to warfighters in the air, sea, and on the ground.</p></div>
                  </div>

                  <div class="m-carousel__item thirteen">
                    <img id="myImg13" class="m-carousel__image" data-flickity-lazyload="images5/super.jpg" alt="SUPER COMPUTING: Once thought to be just a part of home entertainment systems, Sony’s PlayStation 3 is proving itself to be more than just an online death-match machine. The game console’s price-to-performance ratio inspired one AFCS research team to place an order for 1,700 of them to go with the 336 they already have. The system will use 300 to 320 kilowatts at full bore and about 10 percent to 30 percent of that in standby, when most supercomputers are using 5 megawatts. However, much of the time the cluster will only be running the nodes it needs and it will be turned off when not in use. By taking advantage of a growing gaming market, the price performance is just $2 to $3 per gigaFLOPS. The research team has been able to take advantage of about 60 percent of the PlayStations’ performance ability. Once complete, they are expecting to have a unit capable of 500 teraFLOPS or 500 trillion operations per second.">
                    <div class="custCaption13"><p class="endDescription">SUPER COMPUTING: Once thought to be just a part of home entertainment systems, Sony’s PlayStation 3 is proving itself to be more than just an online death-match machine. The game console’s price-to-performance ratio inspired one AFCS research team to place an order for 1,700 of them to go with the 336 they already have. The system will use 300 to 320 kilowatts at full bore and about 10 percent to 30 percent of that in standby, when most supercomputers are using 5 megawatts. However, much of the time the cluster will only be running the nodes it needs and it will be turned off when not in use. By taking advantage of a growing gaming market, the price performance is just $2 to $3 per gigaFLOPS. The research team has been able to take advantage of about 60 percent of the PlayStations’ performance ability. Once complete, they are expecting to have a unit capable of 500 teraFLOPS or 500 trillion operations per second.</p></div>
                  </div>

                </div>
              </div>


            </div>
          </div>

        </div>

      </div>

      <div class="container-fluid">

        <div class="row">
          <div class="col-xs-12 col-lg-12">
            <div id="mymodel" class="model">
              <div class="closeThis"></div>

              <div class="col-xs-12 col-lg-12 col-md-12 bigClose">

                <img class="img-responsive model1-content" id="img01">
              </div>
              <center>
                <div style="max-width:75% !important;" class="row">

                  <div class="col-xs-12 col-lg-12 col-md-12">

                    <div class="spaceBetween">
                      <div style="width:80%;" id="caption"></div>

                      <div><button type="button" id="getFile16">Download</button></div>
                    </div>
                  </div>
                </div>
              </center>

            </div>

          </div>
        </div>

        <div class="row">

          <div class="col-xs-12 col-lg-12 col-md-12">

            <div id="mymodel2" class="model2">
              <div class="closeThis2"></div>

              <div class="col-xs-12 col-lg-12 col-md-12 bigClose2">
                <img class="img-responsive model2-content" id="img02">

              </div>

              <center>
                <div style="max-width:75% !important;" class="row">

                  <div class="col-xs-12 col-lg-12 col-md-12">

                    <div class="spaceBetween">
                      <div style="width:80%;" id="caption2"></div>


                      <div><button type="button" id="getFile17">Download</button></div>
                    </div>
                  </div>
                </div>
              </center>

            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-xs-12 col-lg-12 col-md-12">

            <div id="mymodel3" class="model3">
              <div class="closeThis3"></div>

              <div class="col-xs-12 col-lg-12 col-md-12 bigClose3">
                <img class="img-responsive model3-content" id="img03">
              </div>

              <center>
                <div style="max-width:75% !important;" class="row">

                  <div class="col-xs-12 col-lg-12 col-md-12">

                    <div class="spaceBetween">
                      <div style="width:80%;" id="caption3"></div>

                      <div><button type="button" id="getFile18">Download</button></div>
                    </div>
                  </div>
                </div>
              </center>
            </div>

          </div>
        </div>

        <div class="row">

          <div class="col-xs-12 col-lg-12 col-md-12">

            <div id="mymodel4" class="model4">
              <div class="closeThis4"></div>

              <div class="col-xs-12 col-lg-12 col-md-12 bigClose4">
                <img class="img-responsive model4-content" id="img04">
              </div>

              <center>
                <div style="max-width:75% !important;" class="row">

                  <div class="col-xs-12 col-lg-12 col-md-12">

                    <div class="spaceBetween">
                      <div style="width:80%;" id="caption4"></div>

                      <div><button type="button" id="getFile19">Download</button></div>
                    </div>
                  </div>
                </div>
              </center>
            </div>
          </div>


        </div>

        <div class="row">

          <div class="col-xs-12 col-lg-12 col-md-12">

            <div id="mymodel5" class="model5">
              <div class="closeThis5"></div>


              <div class="col-xs-12 col-lg-12 col-md-12 bigClose5">
                <img class="img-responsive model5-content" id="img05">
              </div>

              <center>
                <div style="max-width:75% !important;" class="row">

                  <div class="col-xs-12 col-lg-12 col-md-12">

                    <div class="spaceBetween">
                      <div style="width:80%;" id="caption5"></div>

                      <div><button type="button" id="getFile20">Download</button></div>
                    </div>
                  </div>
                </div>
              </center>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-xs-12 col-lg-12 col-md-12">

            <div id="mymodel6" class="model6">
              <div class="closeThis6"></div>

              <div class="col-xs-12 col-lg-12 col-md-12 bigClose6">
                <img class="img-responsive model6-content" id="img06">

              </div>

              <center>
                <div style="max-width:75% !important;" class="row">

                  <div class="col-xs-12 col-lg-12 col-md-12">

                    <div class="spaceBetween">
                      <div style="width:80%;" id="caption6"></div>

                      <div><button type="button" id="getFile21">Download</button></div>
                    </div>
                  </div>
                </div>
              </center>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-xs-12 col-lg-12 col-md-12">

            <div id="mymodel7" class="model7">
              <div class="closeThis7"></div>

              <div class="col-xs-12 col-lg-12 col-md-12 bigClose7">
                <img class="img-responsive model7-content" id="img07">

              </div>

              <center>
                <div style="max-width:75% !important;" class="row">

                  <div class="col-xs-12 col-lg-12 col-md-12">

                    <div class="spaceBetween">
                      <div style="width:80%;" id="caption7"></div>




                      <div><button type="button" id="getFile22">Download</button></div>
                    </div>
                  </div>
                </div>
              </center>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-xs-12 col-lg-12 col-md-12">

            <div id="mymodel8" class="model8">
              <div class="closeThis8"></div>

              <div class="col-xs-12 col-lg-12 col-md-12 bigClose8">
                <img class="img-responsive model8-content" id="img08">

              </div>
              <center>
                <div style="max-width:75% !important;" class="row">

                  <div class="col-xs-12 col-lg-12 col-md-12">

                    <div class="spaceBetween">
                      <div style="width:80%;" id="caption8"></div>

                      <div><button type="button" id="getFile23">Download</button></div>
                    </div>
                  </div>
                </div>
              </center>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-xs-12 col-lg-12 col-md-12">

            <div id="mymodel9" class="model9">
              <div class="closeThis9"></div>

              <div class="col-xs-12 col-lg-12 col-md-12 bigClose9">
                <img class="img-responsive model9-content" id="img09">
              </div>

              <center>
                <div style="max-width:75% !important;" class="row">

                  <div class="col-xs-12 col-lg-12 col-md-12">

                    <div class="spaceBetween">
                      <div style="width:80%;" id="caption9"></div>


                      <div><button type="button" id="getFile24">Download</button></div>
                    </div>
                  </div>
                </div>
              </center>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-xs-12 col-lg-12 col-md-12">

            <div id="mymodel10" class="model10">
              <div class="closeThis10"></div>

              <div class="col-xs-12 col-lg-12 col-md-12 bigClose10">
                <img class="img-responsive model10-content" id="img10">
              </div>

              <center>
                <div style="max-width:75% !important;" class="row">

                  <div class="col-xs-12 col-lg-12 col-md-12">

                    <div class="spaceBetween">
                      <div style="width:80%;" id="caption10"></div>

                      <div><button type="button" id="getFile25">Download</button></div>
                    </div>
                  </div>
                </div>
              </center>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-xs-12 col-lg-12 col-md-12">

            <div id="mymodel11" class="model11">
              <div class="closeThis10"></div>

              <div class="col-xs-12 col-lg-12 col-md-12 bigClose11">
                <img class="img-responsive model11-content" id="img11">
              </div>

              <center>
                <div style="max-width:75% !important;" class="row">

                  <div class="col-xs-12 col-lg-12 col-md-12">

                    <div class="spaceBetween">
                      <div style="width:80%;" id="caption11"></div>

                      <div><button type="button" id="getFile26">Download</button></div>
                    </div>
                  </div>
                </div>
              </center>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-xs-12 col-lg-12 col-md-12">

            <div id="mymodel12" class="model12">
              <div class="closeThis10"></div>

              <div class="col-xs-12 col-lg-12 col-md-12 bigClose12">
                <img class="img-responsive model12-content" id="img12">
              </div>

              <center>
                <div style="max-width:75% !important;" class="row">

                  <div class="col-xs-12 col-lg-12 col-md-12">

                    <div class="spaceBetween">
                      <div style="width:80%;" id="caption12"></div>

                      <div><button type="button" id="getFile27">Download</button></div>
                    </div>
                  </div>
                </div>
              </center>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-xs-12 col-lg-12 col-md-12">

            <div id="mymodel13" class="model13">
              <div class="closeThis10"></div>

              <div class="col-xs-12 col-lg-12 col-md-12 bigClose13">
                <img class="img-responsive model12-content" id="img13">
              </div>

              <center>
                <div style="max-width:75% !important;" class="row">

                  <div class="col-xs-12 col-lg-12 col-md-12">

                    <div class="spaceBetween">
                      <div style="width:80%;" id="caption13"></div>

                      <div><button type="button" id="getFile28">Download</button></div>
                    </div>
                  </div>
                </div>
              </center>
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
    <script src="https://code.jquery.com/pep/0.4.3/pep.js"></script>


    <script src="js5/lettering.min.js"></script>

    <script src="http://jschr.github.io/textillate/jquery.textillate.js"></script>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script src="tipuesearch/tipuesearch_set.js"></script>
    <script src="tipuesearch/tipuesearch_content.js"></script>
    <script src="tipuesearch/tipuesearch.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="js5/about.js"></script>
    <script src="js5/scrollTop.js"></script>
    <script src="js5/innovations.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3bg43h0KXd3qUnwUBHGgGCbSag3WLpY8&libraries=places"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.js"></script> -->
    <!-- <script src="http://moransh4.github.io/Luca/js/swiper.jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.x.x/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.x.x/js/swiper.min.js"></script> -->

    <script>

    $(document).ready(function () {







      //set 1

      var container = document.getElementById("container2");

      var circle = document.querySelector(".circle");


      TweenMax.set(circle, { scale: 0, xPercent: -370, yPercent: -300 });

      container.addEventListener("pointerenter", function(e) {
        TweenMax.to(circle, 0.3, { scale: 1, opacity: 1 });
        positionCircle(e);
      });

      container.addEventListener("pointerleave", function(e) {
        TweenMax.to(circle, 0.3, { scale: 0, opacity: 0 });
        positionCircle(e);
      });

      container.addEventListener("pointermove", function(e) {
        positionCircle(e);
      });

      function positionCircle(e) {
        var rect = container.getBoundingClientRect();
        var relX = e.pageX - container.offsetLeft;
        var relY = e.pageY - container.offsetTop;

        TweenMax.to(circle, 0.3, { x: relX, y: relY });
      }


      //set 2


      var container3 = document.getElementById("container3");

      var circle3 = document.querySelector(".circle3");


      TweenMax.set(circle3, { scale: 0, xPercent: -370, yPercent: -300 });

      container3.addEventListener("pointerenter", function(e) {
        TweenMax.to(circle3, 0.3, { scale: 1, opacity: 1 });
        positionCircle3(e);
      });

      container3.addEventListener("pointerleave", function(e) {
        TweenMax.to(circle3, 0.3, { scale: 0, opacity: 0 });
        positionCircle3(e);
      });

      container3.addEventListener("pointermove", function(e) {
        positionCircle3(e);
      });

      function positionCircle3(e) {
        var rect = container3.getBoundingClientRect();
        var relX = e.pageX - container.offsetLeft;
        var relY = e.pageY - container.offsetTop;

        TweenMax.to(circle3, 0.3, { x: relX, y: relY });
      }


      //set 3


      var container4 = document.getElementById("container4");

      var circle4 = document.querySelector(".circle4");


      TweenMax.set(circle4, { scale: 0, xPercent: -370, yPercent: -300 });

      container4.addEventListener("pointerenter", function(e) {
        TweenMax.to(circle4, 0.3, { scale: 1, opacity: 1 });
        positionCircle4(e);
      });

      container4.addEventListener("pointerleave", function(e) {
        TweenMax.to(circle4, 0.3, { scale: 0, opacity: 0 });
        positionCircle4(e);
      });

      container4.addEventListener("pointermove", function(e) {
        positionCircle4(e);
      });

      function positionCircle4(e) {
        var rect = container4.getBoundingClientRect();
        var relX = e.pageX - container.offsetLeft;
        var relY = e.pageY - container.offsetTop;

        TweenMax.to(circle4, 0.3, { x: relX, y: relY });
      }

      //set 4

      var container5 = document.getElementById("container5");

      var circle5 = document.querySelector(".circle5");


      TweenMax.set(circle5, { scale: 0, xPercent: -370, yPercent: -300 });

      container5.addEventListener("pointerenter", function(e) {
        TweenMax.to(circle5, 0.3, { scale: 1, opacity: 1 });
        positionCircle5(e);
      });

      container5.addEventListener("pointerleave", function(e) {
        TweenMax.to(circle5, 0.3, { scale: 0, opacity: 0 });
        positionCircle5(e);
      });

      container5.addEventListener("pointermove", function(e) {
        positionCircle5(e);
      });

      function positionCircle5(e) {
        var rect = container5.getBoundingClientRect();
        var relX = e.pageX - container.offsetLeft;
        var relY = e.pageY - container.offsetTop;

        TweenMax.to(circle5, 0.3, { x: relX, y: relY });
      }


      //set 5

      var container6 = document.getElementById("container6");

      var circle6 = document.querySelector(".circle6");

      TweenMax.set(circle6, { scale: 0, xPercent: -370, yPercent: -300 });

      container6.addEventListener("pointerenter", function(e) {
        TweenMax.to(circle6, 0.3, { scale: 1, opacity: 1 });
        positionCircle6(e);
      });

      container6.addEventListener("pointerleave", function(e) {
        TweenMax.to(circle6, 0.3, { scale: 0, opacity: 0 });
        positionCircle6(e);
      });

      container6.addEventListener("pointermove", function(e) {
        positionCircle6(e);
      });

      function positionCircle6(e) {
        var rect = container6.getBoundingClientRect();
        var relX = e.pageX - container.offsetLeft;
        var relY = e.pageY - container.offsetTop;

        TweenMax.to(circle6, 0.3, { x: relX, y: relY });
      }

      //set 6

      var container7 = document.getElementById("container7");

      var circle7 = document.querySelector(".circle7");

      TweenMax.set(circle7, { scale: 0, xPercent: -370, yPercent: -300 });

      container7.addEventListener("pointerenter", function(e) {
        TweenMax.to(circle7, 0.3, { scale: 1, opacity: 1 });
        positionCircle7(e);
      });

      container7.addEventListener("pointerleave", function(e) {
        TweenMax.to(circle7, 0.3, { scale: 0, opacity: 0 });
        positionCircle7(e);
      });

      container7.addEventListener("pointermove", function(e) {
        positionCircle7(e);
      });

      function positionCircle7(e) {
        var rect = container7.getBoundingClientRect();
        var relX = e.pageX - container.offsetLeft;
        var relY = e.pageY - container.offsetTop;

        TweenMax.to(circle7, 0.3, { x: relX, y: relY });
      }


      //set 7

      var container8 = document.getElementById("container8");

      var circle8 = document.querySelector(".circle8");

      TweenMax.set(circle8, { scale: 0, xPercent: -370, yPercent: -300 });

      container8.addEventListener("pointerenter", function(e) {
        TweenMax.to(circle8, 0.3, { scale: 1, opacity: 1 });
        positionCircle8(e);
      });

      container8.addEventListener("pointerleave", function(e) {
        TweenMax.to(circle8, 0.3, { scale: 0, opacity: 0 });
        positionCircle8(e);
      });

      container8.addEventListener("pointermove", function(e) {
        positionCircle8(e);
      });

      function positionCircle8(e) {
        var rect = container8.getBoundingClientRect();
        var relX = e.pageX - container.offsetLeft;
        var relY = e.pageY - container.offsetTop;

        TweenMax.to(circle8, 0.3, { x: relX, y: relY });
      }


      //set 8

      var container9 = document.getElementById("container9");

      var circle9 = document.querySelector(".circle9");

      TweenMax.set(circle9, { scale: 0, xPercent: -370, yPercent: -300 });

      container9.addEventListener("pointerenter", function(e) {
        TweenMax.to(circle9, 0.3, { scale: 1, opacity: 1 });
        positionCircle9(e);
      });

      container9.addEventListener("pointerleave", function(e) {
        TweenMax.to(circle9, 0.3, { scale: 0, opacity: 0 });
        positionCircle9(e);
      });

      container9.addEventListener("pointermove", function(e) {
        positionCircle9(e);
      });

      function positionCircle9(e) {
        var rect = container9.getBoundingClientRect();
        var relX = e.pageX - container.offsetLeft;
        var relY = e.pageY - container.offsetTop;

        TweenMax.to(circle9, 0.3, { x: relX, y: relY });
      }

      //set 9

      var container10 = document.getElementById("container10");

      var circle10 = document.querySelector(".circle10");

      TweenMax.set(circle10, { scale: 0, xPercent: -370, yPercent: -300 });

      container10.addEventListener("pointerenter", function(e) {
        TweenMax.to(circle10, 0.3, { scale: 1, opacity: 1 });
        positionCircle10(e);
      });

      container10.addEventListener("pointerleave", function(e) {
        TweenMax.to(circle10, 0.3, { scale: 0, opacity: 0 });
        positionCircle10(e);
      });

      container10.addEventListener("pointermove", function(e) {
        positionCircle10(e);
      });

      function positionCircle10(e) {
        var rect = container10.getBoundingClientRect();
        var relX = e.pageX - container.offsetLeft;
        var relY = e.pageY - container.offsetTop;

        TweenMax.to(circle10, 0.3, { x: relX, y: relY });
      }

      //set 10

      var container11 = document.getElementById("container11");

      var circle11 = document.querySelector(".circle11");

      TweenMax.set(circle11, { scale: 0, xPercent: -370, yPercent: -300 });

      container11.addEventListener("pointerenter", function(e) {
        TweenMax.to(circle11, 0.3, { scale: 1, opacity: 1 });
        positionCircle11(e);
      });

      container11.addEventListener("pointerleave", function(e) {
        TweenMax.to(circle11, 0.3, { scale: 0, opacity: 0 });
        positionCircle11(e);
      });

      container11.addEventListener("pointermove", function(e) {
        positionCircle11(e);
      });

      function positionCircle11(e) {
        var rect = container11.getBoundingClientRect();
        var relX = e.pageX - container.offsetLeft;
        var relY = e.pageY - container.offsetTop;

        TweenMax.to(circle11, 0.3, { x: relX, y: relY });
      }


      //set 11

      var container12 = document.getElementById("container12");

      var circle12 = document.querySelector(".circle12");

      TweenMax.set(circle12, { scale: 0, xPercent: -370, yPercent: -300 });

      container12.addEventListener("pointerenter", function(e) {
        TweenMax.to(circle12, 0.3, { scale: 1, opacity: 1 });
        positionCircle12(e);
      });

      container12.addEventListener("pointerleave", function(e) {
        TweenMax.to(circle12, 0.3, { scale: 0, opacity: 0 });
        positionCircle12(e);
      });

      container12.addEventListener("pointermove", function(e) {
        positionCircle12(e);
      });

      function positionCircle12(e) {
        var rect = container12.getBoundingClientRect();
        var relX = e.pageX - container.offsetLeft;
        var relY = e.pageY - container.offsetTop;

        TweenMax.to(circle12, 0.3, { x: relX, y: relY });
      }



      //set 12

      var container13 = document.getElementById("container13");

      var circle13 = document.querySelector(".circle13");

      TweenMax.set(circle13, { scale: 0, xPercent: -370, yPercent: -300 });

      container13.addEventListener("pointerenter", function(e) {
        TweenMax.to(circle13, 0.3, { scale: 1, opacity: 1 });
        positionCircle13(e);
      });

      container13.addEventListener("pointerleave", function(e) {
        TweenMax.to(circle13, 0.3, { scale: 0, opacity: 0 });
        positionCircle13(e);
      });

      container13.addEventListener("pointermove", function(e) {
        positionCircle13(e);
      });

      function positionCircle13(e) {
        var rect = container13.getBoundingClientRect();
        var relX = e.pageX - container.offsetLeft;
        var relY = e.pageY - container.offsetTop;

        TweenMax.to(circle13, 0.3, { x: relX, y: relY });
      }


      //set 13

      var container14 = document.getElementById("container14");

      var circle14 = document.querySelector(".circle14");

      TweenMax.set(circle14, { scale: 0, xPercent: -370, yPercent: -3000 });

      container14.addEventListener("pointerenter", function(e) {
        TweenMax.to(circle14, 0.3, { scale: 1, opacity: 1 });
        positionCircle14(e);
      });

      container14.addEventListener("pointerleave", function(e) {
        TweenMax.to(circle14, 0.3, { scale: 0, opacity: 0 });
        positionCircle14(e);
      });

      container14.addEventListener("pointermove", function(e) {
        positionCircle14(e);
      });

      function positionCircle14(e) {
        var rect = container14.getBoundingClientRect();
        var relX = e.pageX - container.offsetLeft;
        var relY = e.pageY - container.offsetTop;

        TweenMax.to(circle14, 0.3, { x: relX, y: relY });
      }


      //set 14

      var container15 = document.getElementById("container15");

      var circle15 = document.querySelector(".circle15");

      TweenMax.set(circle15, { scale: 0, xPercent: -370, yPercent: -300 });

      container15.addEventListener("pointerenter", function(e) {
        TweenMax.to(circle15, 0.3, { scale: 1, opacity: 1 });
        positionCircle15(e);
      });

      container15.addEventListener("pointerleave", function(e) {
        TweenMax.to(circle15, 0.3, { scale: 0, opacity: 0 });
        positionCircle15(e);
      });

      container15.addEventListener("pointermove", function(e) {
        positionCircle15(e);
      });

      function positionCircle15(e) {
        var rect = container15.getBoundingClientRect();
        var relX = e.pageX - container.offsetLeft;
        var relY = e.pageY - container.offsetTop;

        TweenMax.to(circle15, 0.3, { x: relX, y: relY });
      }

      //set 15

      var container16 = document.getElementById("container16");

      var circle16 = document.querySelector(".circle16");

      TweenMax.set(circle16, { scale: 0, xPercent: -370, yPercent: -300 });

      container16.addEventListener("pointerenter", function(e) {
        TweenMax.to(circle16, 0.3, { scale: 1, opacity: 1 });
        positionCircle15(e);
      });

      container16.addEventListener("pointerleave", function(e) {
        TweenMax.to(circle16, 0.3, { scale: 0, opacity: 0 });
        positionCircle16(e);
      });

      container16.addEventListener("pointermove", function(e) {
        positionCircle16(e);
      });

      function positionCircle16(e) {
        var rect = container16.getBoundingClientRect();
        var relX = e.pageX - container.offsetLeft;
        var relY = e.pageY - container.offsetTop;

        TweenMax.to(circle16, 0.3, { x: relX, y: relY });
      }




      jQuery('#menu1').append('<li class="slide-line1"></li>');

      // animate slide-line on click
      jQuery(document).on('click', '#menu1 li a', function () {

        var $this = jQuery(this),
        offset = $this.offset(),
        //find the offset of the wrapping div
        offsetBody = jQuery('#box1').offset();

        // GSAP animate to clicked menu item
        TweenMax.to(jQuery('#menu1 .slide-line1'), 0.45, {
          css:{
            width: $this.outerWidth()+'px',
            left: (offset.left-offsetBody.left)+'px',
            top: (offset.top-offsetBody.top+jQuery(this).height())+'px'
          },
          ease:Power2.easeInOut
        });

        return false;
      });

      jQuery('#menu1 > li a').first().trigger("click");



      var thing = $('#logThis');

      console.log(thing)

      if ($('.item').is('.spaceClass.active')) {

        console.log('spaceclass');

        $('li.slide-line1').css('left', '758');
        $('li.slide-line1').css('width', '57');

      }



      // $('#carousel-default').on('slid.bs.carousel', function() {
      //   if ($('.spaceClass').hasClass('active')) {
      //
      //     console.log("skfub")
      //
      //
      //    $('li.slide-line1').css('left', '758');
      //    $('li.slide-line1').css('width', '57');
      //
      //   } else {
      //     $('li.slide-line1').css('left', 'auto');
      //     $('li.slide-line1').css('width', 'auto');
      //   }
      // });
      //
      // $('#carousel-default').on('slide.bs.carousel', function(event) {
      //   if ($('.spaceClass').hasClass('active')) {
      //       console.log("space has active")
      //   }
      //
      //   else {
      //     console.log("space does not have active")
      //   }
      // });
      //
      // $('#imagesCarousel').on('slid.bs.carousel', function(event) {
      //   if ($('.air').hasClass('active')) {
      //     console.log("space has air")
      //   }
      //   else {
      //     console.log("air does not have active")
      //   }
      // });




      //
      // $( "#expand" ).hover(function() {
      // $('.circle').css('margin-top', '-15em')
      // })
      //
      //
      // $( "#expand3" ).hover(function() {
      // $('.circle3').css('margin-left', '-20em');
      // $('.circle3').css('margin-top', '-17em')
      // })
      //
      //
      // $( "#expand4" ).hover(function() {
      //   $('.circle4').css('margin-left', '-18em');
      //   $('.circle4').css('margin-top', '-17em')
      // })
      //
      // $( "#expand5" ).hover(function() {
      //   $('.circle5').css('margin-left', '-18em');
      //   $('.circle5').css('margin-top', '-17em')
      // })
      //
      //
      // $( "#expand6" ).hover(function() {
      //   $('.circle6').css('margin-left', '-18em');
      //   $('.circle6').css('margin-top', '-17em')
      // })
      //
      // $( "#expand7" ).hover(function() {
      //   $('.circle7').css('margin-left', '-18em');
      //   $('.circle7').css('margin-top', '-17em')
      // })
      //
      // $( "#expand8" ).hover(function() {
      //   $('.circle8').css('margin-left', '-18em');
      //   $('.circle8').css('margin-top', '-17em')
      // })
      //
      // $( "#expand9" ).hover(function() {
      //   $('.circle9').css('margin-left', '-18em');
      //   $('.circle9').css('margin-top', '-17em')
      // })
      // //
      // // $( "#expand10" ).hover(function() {
      // //   $('.circle10').css('margin-left', '-18em');
      // //   $('.circle10').css('margin-top', '-17em')
      // // })
      //
      // $( "#expand11" ).hover(function() {
      //   $('.circle11').css('margin-left', '-18em');
      //   $('.circle11').css('margin-top', '-17em')
      // })
      //
      //
      // $( "#expand12" ).hover(function() {
      //   $('.circle12').css('margin-left', '-18em');
      //   $('.circle12').css('margin-top', '-17em')
      // })
      //
      // $( "#expand13" ).hover(function() {
      //   $('.circle13').css('margin-left', '-18em');
      //   $('.circle13').css('margin-top', '-17em')
      // })
      //
      // $( "#expand14" ).hover(function() {
      //   $('.circle14').css('margin-left', '-18em');
      //   $('.circle14').css('margin-top', '-17em')
      // })
      //
      // $( "#expand15" ).hover(function() {
      //   $('.circle15').css('margin-left', '-18em');
      //   $('.circle15').css('margin-top', '-17em')
      // })
      //
      // $( "#expand16" ).hover(function() {
      //   $('.circle16').css('margin-left', '-18em');
      //   $('.circle16').css('margin-top', '-17em')
      // })


      $( "#expand" ).click(function() {

        if($('#expand').hasClass('enlarged')){

          $('.carousel-control').show();

          // $('.carousel-control').css('top', '0%')

          setTimeout(function() {
            $('.toggled').slideToggle();
          },200)

          setTimeout(function() {
            $('.circle').removeClass('circle2')

          }, 700)

          $('#expand').removeClass('enlarged');
          // $('.block2').css('top', 'auto')
          $("#container2").stop().animate({
            width: 1000,
            height: 432},

            700);

            $('#slidingDiv').animate({ marginTop: '60px'}, 700)


            $("#box1").slideDown("slow", function() { $(this).show(); });

          }

          else {

            // $('.carousel-control').css('top', '-50%');
            // $('.carousel-control').css('width', '3%');

            $('.carousel-control').hide();


            setTimeout(function() {

              $('.toggled').slideToggle();
            },200)

            setTimeout(function() {

              $('.circle').addClass('circle2')
            }, 700)

            $('#expand').addClass('enlarged');
            // $('.block2').css('top', '-40%');
            //
            $( "#container2" ).animate({
              width: '100%',
              height: 800,

            }, 700 );


            $("#box1").slideUp("slow", function() { $(this).hide(); });


            $('#slidingDiv').animate({ marginTop: '67px'}, 700);



          }


        });


        $( "#expand3" ).click(function() {

          if($('#expand3').hasClass('enlarged')){

            $('.carousel-control').show();

            // $('.carousel-control').css('top', '0%')

            setTimeout(function() {
              $('.toggled').slideToggle();
            },200)

            setTimeout(function() {
              $('.circle3').removeClass('circle33')

            }, 700)

            $('#expand3').removeClass('enlarged');
            // $('.block2').css('top', 'auto')
            $("#container3").stop().animate({
              width: 1000,
              height: 432},

              700);

              $('#slidingDiv3').animate({ marginTop: '60px'}, 700)


              $("#box1").slideDown("slow", function() { $(this).show(); });

            }

            else {

              // $('.carousel-control').css('top', '-50%');
              // $('.carousel-control').css('width', '3%');

              $('.carousel-control').hide();


              setTimeout(function() {

                $('.toggled').slideToggle();
              },200)

              setTimeout(function() {

                $('.circle3').addClass('circle33')
              }, 700)

              $('#expand3').addClass('enlarged');
              // $('.block2').css('top', '-40%');
              //
              $( "#container3" ).animate({
                width: '100%',
                height: 800,

              }, 700 );


              $("#box1").slideUp("slow", function() { $(this).hide(); });


              $('#slidingDiv3').animate({ marginTop: '67px'}, 700);



            }


          });

          $( "#expand4" ).click(function() {

            if($('#expand4').hasClass('enlarged')){

              $('.carousel-control').show();

              // $('.carousel-control').css('top', '0%')

              setTimeout(function() {
                $('.toggled').slideToggle();
              },200)

              setTimeout(function() {
                $('.circle4').removeClass('circle44')

              }, 700)

              $('#expand4').removeClass('enlarged');
              // $('.block2').css('top', 'auto')
              $("#container4").stop().animate({
                width: 1000,
                height: 432},

                700);

                $('#slidingDiv4').animate({ marginTop: '60px'}, 700)


                $("#box1").slideDown("slow", function() { $(this).show(); });

              }

              else {

                // $('.carousel-control').css('top', '-50%');
                // $('.carousel-control').css('width', '3%');

                $('.carousel-control').hide();


                setTimeout(function() {

                  $('.toggled').slideToggle();
                },200)

                setTimeout(function() {

                  $('.circle4').addClass('circle44')
                }, 700)

                $('#expand4').addClass('enlarged');
                // $('.block2').css('top', '-40%');
                //
                $( "#container4" ).animate({
                  width: '100%',
                  height: 800,

                }, 700 );


                $("#box1").slideUp("slow", function() { $(this).hide(); });


                $('#slidingDiv4').animate({ marginTop: '67px'}, 700);



              }


            });

            $( "#expand5" ).click(function() {

              if($('#expand5').hasClass('enlarged')){

                $('.carousel-control').show();

                // $('.carousel-control').css('top', '0%')

                setTimeout(function() {
                  $('.toggled').slideToggle();
                },200)

                setTimeout(function() {
                  $('.circle5').removeClass('circle55')

                }, 700)

                $('#expand5').removeClass('enlarged');
                // $('.block2').css('top', 'auto')
                $("#container5").stop().animate({
                  width: 1000,
                  height: 432},

                  700);

                  $('#slidingDiv5').animate({ marginTop: '60px'}, 700)


                  $("#box1").slideDown("slow", function() { $(this).show(); });

                }

                else {

                  // $('.carousel-control').css('top', '-50%');
                  // $('.carousel-control').css('width', '3%');

                  $('.carousel-control').hide();


                  setTimeout(function() {

                    $('.toggled').slideToggle();
                  },200)

                  setTimeout(function() {

                    $('.circle5').addClass('circle55')
                  }, 700)

                  $('#expand5').addClass('enlarged');
                  // $('.block2').css('top', '-40%');
                  //
                  $( "#container5" ).animate({
                    width: '100%',
                    height: 800,

                  }, 700 );


                  $("#box1").slideUp("slow", function() { $(this).hide(); });


                  $('#slidingDiv5').animate({ marginTop: '67px'}, 700);



                }


              });
              $( "#expand6" ).click(function() {

                if($('#expand6').hasClass('enlarged')){

                  $('.carousel-control').show();

                  // $('.carousel-control').css('top', '0%')

                  setTimeout(function() {
                    $('.toggled').slideToggle();
                  },200)

                  setTimeout(function() {
                    $('.circle6').removeClass('circle66')

                  }, 700)

                  $('#expand6').removeClass('enlarged');
                  // $('.block2').css('top', 'auto')
                  $("#container6").stop().animate({
                    width: 1000,
                    height: 432},

                    700);

                    $('#slidingDiv6').animate({ marginTop: '60px'}, 700)


                    $("#box1").slideDown("slow", function() { $(this).show(); });

                  }

                  else {

                    // $('.carousel-control').css('top', '-50%');
                    // $('.carousel-control').css('width', '3%');

                    $('.carousel-control').hide();


                    setTimeout(function() {

                      $('.toggled').slideToggle();
                    },200)

                    setTimeout(function() {

                      $('.circle6').addClass('circle66')
                    }, 700)

                    $('#expand6').addClass('enlarged');


                    $( "#container6" ).animate({
                      width: '100%',
                      height: 800,

                    }, 700 );


                    $("#box1").slideUp("slow", function() { $(this).hide(); });


                    $('#slidingDiv6').animate({ marginTop: '67px'}, 700);



                  }


                });


                $( "#expand7" ).click(function() {

                  if($('#expand7').hasClass('enlarged')){

                    $('.carousel-control').show();

                    // $('.carousel-control').css('top', '0%')

                    setTimeout(function() {
                      $('.toggled').slideToggle();
                    },200)

                    setTimeout(function() {
                      $('.circle7').removeClass('circle77')

                    }, 700)

                    $('#expand7').removeClass('enlarged');
                    // $('.block2').css('top', 'auto')
                    $("#container7").stop().animate({
                      width: 1000,
                      height: 432},

                      700);

                      $('#slidingDiv7').animate({ marginTop: '60px'}, 700)


                      $("#box1").slideDown("slow", function() { $(this).show(); });

                    }

                    else {

                      // $('.carousel-control').css('top', '-50%');
                      // $('.carousel-control').css('width', '3%');

                      $('.carousel-control').hide();


                      setTimeout(function() {

                        $('.toggled').slideToggle();
                      },200)

                      setTimeout(function() {

                        $('.circle7').addClass('circle77')
                      }, 700)

                      $('#expand7').addClass('enlarged');
                      // $('.block2').css('top', '-40%');
                      //
                      $( "#container7" ).animate({
                        width: '100%',
                        height: 800,

                      }, 700 );


                      $("#box1").slideUp("slow", function() { $(this).hide(); });


                      $('#slidingDiv7').animate({ marginTop: '67px'}, 700);



                    }


                  });


                  $( "#expand8" ).click(function() {

                    if($('#expand8').hasClass('enlarged')){

                      $('.carousel-control').show();

                      // $('.carousel-control').css('top', '0%')

                      setTimeout(function() {
                        $('.toggled').slideToggle();
                      },200)

                      setTimeout(function() {
                        $('.circle8').removeClass('circle88')

                      }, 700)

                      $('#expand8').removeClass('enlarged');
                      // $('.block2').css('top', 'auto')
                      $("#container8").stop().animate({
                        width: 1000,
                        height: 432},

                        700);

                        $('#slidingDiv8').animate({ marginTop: '60px'}, 700)


                        $("#box1").slideDown("slow", function() { $(this).show(); });

                      }

                      else {

                        // $('.carousel-control').css('top', '-50%');
                        // $('.carousel-control').css('width', '3%');

                        $('.carousel-control').hide();


                        setTimeout(function() {

                          $('.toggled').slideToggle();
                        },200)

                        setTimeout(function() {

                          $('.circle8').addClass('circle88')
                        }, 700)

                        $('#expand8').addClass('enlarged');
                        // $('.block2').css('top', '-40%');
                        //
                        $( "#container8" ).animate({
                          width: '100%',
                          height: 800,

                        }, 700 );


                        $("#box1").slideUp("slow", function() { $(this).hide(); });


                        $('#slidingDiv8').animate({ marginTop: '67px'}, 700);



                      }


                    });

                    $( "#expand9" ).click(function() {

                      if($('#expand9').hasClass('enlarged')){

                        $('.carousel-control').show();

                        // $('.carousel-control').css('top', '0%')

                        setTimeout(function() {
                          $('.toggled').slideToggle();
                        },200)

                        setTimeout(function() {
                          $('.circle9').removeClass('circle99')

                        }, 700)

                        $('#expand9').removeClass('enlarged');
                        // $('.block2').css('top', 'auto')
                        $("#container9").stop().animate({
                          width: 1000,
                          height: 432},

                          700);

                          $('#slidingDiv9').animate({ marginTop: '60px'}, 700)


                          $("#box1").slideDown("slow", function() { $(this).show(); });

                        }

                        else {

                          // $('.carousel-control').css('top', '-50%');
                          // $('.carousel-control').css('width', '3%');

                          $('.carousel-control').hide();


                          setTimeout(function() {

                            $('.toggled').slideToggle();
                          },200)

                          setTimeout(function() {

                            $('.circle9').addClass('circle99')
                          }, 700)

                          $('#expand9').addClass('enlarged');
                          // $('.block2').css('top', '-40%');
                          //
                          $( "#container9" ).animate({
                            width: '100%',
                            height: 800,

                          }, 700 );


                          $("#box1").slideUp("slow", function() { $(this).hide(); });


                          $('#slidingDiv9').animate({ marginTop: '67px'}, 700);



                        }


                      });

                      $( "#expand10" ).click(function() {

                        if($('#expand10').hasClass('enlarged')){

                          $('.carousel-control').show();

                          // $('.carousel-control').css('top', '0%')

                          setTimeout(function() {
                            $('.toggled').slideToggle();
                          },200)

                          setTimeout(function() {
                            $('.circle10').removeClass('circle100')

                          }, 700)

                          $('#expand10').removeClass('enlarged');
                          // $('.block2').css('top', 'auto')
                          $("#container10").stop().animate({
                            width: 1000,
                            height: 432},

                            700);

                            $('#slidingDiv10').animate({ marginTop: '60px'}, 700)


                            $("#box1").slideDown("slow", function() { $(this).show(); });

                          }

                          else {

                            // $('.carousel-control').css('top', '-50%');
                            // $('.carousel-control').css('width', '3%');

                            $('.carousel-control').hide();


                            setTimeout(function() {

                              $('.toggled').slideToggle();
                            },200)

                            setTimeout(function() {

                              $('.circle10').addClass('circle100')
                            }, 700)

                            $('#expand10').addClass('enlarged');


                            $( "#container10" ).animate({
                              width: '100%',
                              height: 800,

                            }, 700 );


                            $("#box1").slideUp("slow", function() { $(this).hide(); });


                            $('#slidingDiv10').animate({ marginTop: '67px'}, 700);



                          }


                        });


                        $( "#expand11" ).click(function() {

                          if($('#expand11').hasClass('enlarged')){

                            $('.carousel-control').show();

                            // $('.carousel-control').css('top', '0%')

                            setTimeout(function() {
                              $('.toggled').slideToggle();
                            },200)

                            setTimeout(function() {
                              $('.circle11').removeClass('circle111')

                            }, 700)

                            $('#expand11').removeClass('enlarged');
                            // $('.block2').css('top', 'auto')
                            $("#container11").stop().animate({
                              width: 1000,
                              height: 432},

                              700);

                              $('#slidingDiv11').animate({ marginTop: '60px'}, 700)


                              $("#box1").slideDown("slow", function() { $(this).show(); });

                            }

                            else {

                              // $('.carousel-control').css('top', '-50%');
                              // $('.carousel-control').css('width', '3%');

                              $('.carousel-control').hide();


                              setTimeout(function() {

                                $('.toggled').slideToggle();
                              },200)

                              setTimeout(function() {

                                $('.circle11').addClass('circle111')
                              }, 700)

                              $('#expand11').addClass('enlarged');
                              // $('.block2').css('top', '-40%');
                              //
                              $( "#container11" ).animate({
                                width: '100%',
                                height: 800,

                              }, 700 );


                              $("#box1").slideUp("slow", function() { $(this).hide(); });


                              $('#slidingDiv11').animate({ marginTop: '67px'}, 700);



                            }


                          });

                          $( "#expand12" ).click(function() {

                            if($('#expand12').hasClass('enlarged')){

                              $('.carousel-control').show();

                              // $('.carousel-control').css('top', '0%')

                              setTimeout(function() {
                                $('.toggled').slideToggle();
                              },200)

                              setTimeout(function() {
                                $('.circle12').removeClass('circle112')

                              }, 700)

                              $('#expand12').removeClass('enlarged');
                              // $('.block2').css('top', 'auto')
                              $("#container12").stop().animate({
                                width: 1000,
                                height: 432},

                                700);

                                $('#slidingDiv12').animate({ marginTop: '60px'}, 700)


                                $("#box1").slideDown("slow", function() { $(this).show(); });

                              }

                              else {

                                // $('.carousel-control').css('top', '-50%');
                                // $('.carousel-control').css('width', '3%');

                                $('.carousel-control').hide();


                                setTimeout(function() {

                                  $('.toggled').slideToggle();
                                },200)

                                setTimeout(function() {

                                  $('.circle12').addClass('circle112')
                                }, 700)

                                $('#expand12').addClass('enlarged');
                                // $('.block2').css('top', '-40%');
                                //
                                $( "#container12" ).animate({
                                  width: '100%',
                                  height: 800,

                                }, 700 );


                                $("#box1").slideUp("slow", function() { $(this).hide(); });


                                $('#slidingDiv12').animate({ marginTop: '67px'}, 700);



                              }


                            });


                            $( "#expand13" ).click(function() {

                              if($('#expand13').hasClass('enlarged')){

                                $('.carousel-control').show();

                                // $('.carousel-control').css('top', '0%')

                                setTimeout(function() {
                                  $('.toggled').slideToggle();
                                },200)

                                setTimeout(function() {
                                  $('.circle13').removeClass('circle113')

                                }, 700)

                                $('#expand13').removeClass('enlarged');
                                // $('.block2').css('top', 'auto')
                                $("#container13").stop().animate({
                                  width: 1000,
                                  height: 432},

                                  700);

                                  $('#slidingDiv13').animate({ marginTop: '60px'}, 700)


                                  $("#box1").slideDown("slow", function() { $(this).show(); });

                                }

                                else {

                                  // $('.carousel-control').css('top', '-50%');
                                  // $('.carousel-control').css('width', '3%');

                                  $('.carousel-control').hide();


                                  setTimeout(function() {

                                    $('.toggled').slideToggle();
                                  },200)

                                  setTimeout(function() {

                                    $('.circle13').addClass('circle113')
                                  }, 700)

                                  $('#expand13').addClass('enlarged');
                                  // $('.block2').css('top', '-40%');
                                  //
                                  $( "#container13" ).animate({
                                    width: '100%',
                                    height: 800,

                                  }, 700 );


                                  $("#box1").slideUp("slow", function() { $(this).hide(); });


                                  $('#slidingDiv13').animate({ marginTop: '67px'}, 700);



                                }


                              });


                              $( "#expand14" ).click(function() {

                                if($('#expand14').hasClass('enlarged')){

                                  $('.carousel-control').show();

                                  // $('.carousel-control').css('top', '0%')

                                  setTimeout(function() {
                                    $('.toggled').slideToggle();
                                  },200)

                                  setTimeout(function() {
                                    $('.circle14').removeClass('circle114')

                                  }, 700)

                                  $('#expand14').removeClass('enlarged');
                                  // $('.block2').css('top', 'auto')
                                  $("#container14").stop().animate({
                                    width: 1000,
                                    height: 432},

                                    700);

                                    $('#slidingDiv14').animate({ marginTop: '60px'}, 700)


                                    $("#box1").slideDown("slow", function() { $(this).show(); });

                                  }

                                  else {

                                    // $('.carousel-control').css('top', '-50%');
                                    // $('.carousel-control').css('width', '3%');

                                    $('.carousel-control').hide();


                                    setTimeout(function() {

                                      $('.toggled').slideToggle();
                                    },200)

                                    setTimeout(function() {

                                      $('.circle14').addClass('circle114')
                                    }, 700)

                                    $('#expand14').addClass('enlarged');
                                    // $('.block2').css('top', '-40%');
                                    //
                                    $( "#container14" ).animate({
                                      width: '100%',
                                      height: 800,

                                    }, 700 );


                                    $("#box1").slideUp("slow", function() { $(this).hide(); });


                                    $('#slidingDiv14').animate({ marginTop: '67px'}, 700);



                                  }


                                });

                                $( "#expand15" ).click(function() {

                                  if($('#expand15').hasClass('enlarged')){

                                    $('.carousel-control').show();

                                    // $('.carousel-control').css('top', '0%')

                                    setTimeout(function() {
                                      $('.toggled').slideToggle();
                                    },200)

                                    setTimeout(function() {
                                      $('.circle15').removeClass('circle115')

                                    }, 700)

                                    $('#expand15').removeClass('enlarged');
                                    // $('.block2').css('top', 'auto')
                                    $("#container15").stop().animate({
                                      width: 1000,
                                      height: 432},

                                      700);

                                      $('#slidingDiv15').animate({ marginTop: '60px'}, 700)


                                      $("#box1").slideDown("slow", function() { $(this).show(); });

                                    }

                                    else {

                                      // $('.carousel-control').css('top', '-50%');
                                      // $('.carousel-control').css('width', '3%');

                                      $('.carousel-control').hide();


                                      setTimeout(function() {

                                        $('.toggled').slideToggle();
                                      },200)

                                      setTimeout(function() {

                                        $('.circle15').addClass('circle115')
                                      }, 700)

                                      $('#expand15').addClass('enlarged');
                                      // $('.block2').css('top', '-40%');
                                      //
                                      $( "#container15" ).animate({
                                        width: '100%',
                                        height: 800,

                                      }, 700 );


                                      $("#box1").slideUp("slow", function() { $(this).hide(); });


                                      $('#slidingDiv15').animate({ marginTop: '67px'}, 700);



                                    }


                                  });

                                  $( "#expand16" ).click(function() {

                                    if($('#expand16').hasClass('enlarged')){

                                      $('.carousel-control').show();

                                      // $('.carousel-control').css('top', '0%')

                                      setTimeout(function() {
                                        $('.toggled').slideToggle();
                                      },200)

                                      setTimeout(function() {
                                        $('.circle16').removeClass('circle116')

                                      }, 700)

                                      $('#expand16').removeClass('enlarged');
                                      // $('.block2').css('top', 'auto')
                                      $("#container16").stop().animate({
                                        width: 1000,
                                        height: 432},

                                        700);

                                        $('#slidingDiv16').animate({ marginTop: '60px'}, 700)


                                        $("#box1").slideDown("slow", function() { $(this).show(); });

                                      }

                                      else {

                                        // $('.carousel-control').css('top', '-50%');
                                        // $('.carousel-control').css('width', '3%');

                                        $('.carousel-control').hide();


                                        setTimeout(function() {

                                          $('.toggled').slideToggle();
                                        },200)

                                        setTimeout(function() {

                                          $('.circle16').addClass('circle116')
                                        }, 700)

                                        $('#expand16').addClass('enlarged');
                                        // $('.block2').css('top', '-40%');
                                        //
                                        $( "#container16" ).animate({
                                          width: '100%',
                                          height: 800,

                                        }, 700 );


                                        $("#box1").slideUp("slow", function() { $(this).hide(); });


                                        $('#slidingDiv16').animate({ marginTop: '67px'}, 700);



                                      }


                                    });



                                  });




                                  </script>


                                </body>
                                </html>
