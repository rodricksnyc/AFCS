<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css5/animate-edited.css">

  <link rel="stylesheet" href="css5/bootstrap-edited.css">

  <link rel="stylesheet" href="css5/bootstrap-theme.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">

  <link rel="stylesheet" href="css/afcs-new.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
  <link href="css5/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css5/normalize.css">
  <link type="image/png" href="images5/afcs-favicon.png" rel="icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel=stylesheet href="css/calendar.css">
  <link rel=stylesheet href="css/navbar.css">
  <link rel=stylesheet href="css/acquisition.css">
  <link rel=stylesheet href="css/lifecycle.css">
  <link rel="stylesheet" href="tipuesearch/tipuesearch.css">
  <title><?php echo "AFCS - Air Force Civilian Service"; ?></title>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-17154729-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-17154729-1');
</script>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-17154729-1', 'auto');
ga('send', 'pageview');
</script>

</head>

<style>

.i6, .i7, .i8, .i5 {
  margin-bottom:-2em;
}

.mb0 {
  margin-bottom:0px !important;
}

.blocks300 {
  margin-top: 0em;
}

.blocks500 {
  margin-top:55px;
}

@media (max-width:1024px) and (min-width:768px) {
  .i6, .i7, .i8, .i5 {
    margin-top: 0em;
    margin-bottom: 0em;
  }

  .blacker3 {
    padding-top: 4em;
    background: black;
    margin-bottom: 6em;
  }
}

@media (max-width:767px) {
  .funThing.new2 {
    left:14%;
  }
  .i6, .i7, .i8, .i5 {
    margin-bottom:0em;
  }

}

.funThing {
  display: -webkit-flex;
  display: flex;
  flex-direction: column;
  -webkit-flex-direction: column;
  position: absolute;
  z-index: 999;
  left: 9%;
  bottom: 30%;
}

.strong {
  font-weight: 600 !important;
  margin: 0;
  padding: 0;
  margin-bottom:0px !important;
}


.hero-slide {
  background-position: 0px 25% !important;
}


</style>

<body>
  <a href='#content' class='skipNav'>Skip to main content</a>
  <div class="preloader-wrap">
    <div class="preloader">
      <div class="loader">

      </div>
    </div>
  </div>

  <a href="#bottom" id="top"></a>

  <div style="background: #0f1932 !important;" id="site-wrapper">
    <a href="#veryBottom" id="veryTop"></a>
    <?php include("nav-include/acquisition-navbar.php"); ?>

    <div id="tipModal">
    </div>

    <a name='content'></a>
    <div class="container-fluid" id="mt67">
      <div class="row">
        <div class="col-xs-12 col-lg-12">
          <div id="hero-slider2">
            <div class="hero-slide" style="background-image: url('./images5/life-main.png');" role="img" aria-label="Research and Development Landing Image - several planes in the air">
              <div class="row hero-content acq">
                <div class="col-sm-12 moveLeft">
                  <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="0.8s">
                    <h1 class="slicker">REVOLUTION</h1>
                  </div>
                  <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="0.8s">
                    <h1 class="slicker two">STARTS HERE</h1>
                  </div>
                  <div class="img-responsive slide-message"  data-animation="fadeInUp" data-delay="1s">
                    <h1 class="slicker three">Life Cycle Management Center</h1>
                  </div>
                  <img src="images5/liner.jpg" id="slideUpLiner" class="img-responsive" data-animation="fadeInUpBig" data-delay="1.1s" />
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>


    <section class="blocksTop">
      <div class="container-fluid">
        <div class="row heros">

          <div id="addTheShadow" class="centerBlocks">

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
              <div class="parent content-top transparent">
                <a style="font-size:14px" href="acquisition.php" onclick="ga('send', 'event', 'Go to Acquisition page', 'click', 'Lifecycle page');">
                  <img src="images5/acqhome.png" class="img-responsive i6 child" alt="Acquisition Home Link Button Image">
                  <div style="left: 12% !important;" class="funThing">
                    <h1 id="topLine5" class="overlayText tlt100">ACQUISITION</h1>
                    <h1 id="topLine2" class="overlayText tlt100">HOME</h1>
                    <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
              <div class="parent content-middle transparent">
                <a style="font-size:14px" href="lifecycle-careers.php" onclick="ga('send', 'event', 'Go to Lifecycle Careers page', 'click', 'Lifecycle page');">
                  <img src="images5/careers-button.png" class="img-responsive i7 child" alt="Research and Development Careers Link Button Image">
                  <div style="left: 12% !important;" class="funThing">

                    <h1 id="topLine2" class="overlayText tlt101">CAREERS</h1>
                    <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">

              <div class="parent content-bottom transparent">
                <a style="font-size:14px" href="lifecycle-benefits.php" onclick="ga('send', 'event', 'Go to Lifecycle Benefits page', 'click', 'Lifecycle page');">
                  <img src="images5/benefits-button-square.png" class="img-responsive i8 child" alt="Research and Development Benefits Link Button Image">
                  <div style="left: 12% !important;" class="funThing">
                    <h1 id="topLine2" class="overlayText tlt102">BENEFITS</h1>
                    <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow10">
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
              <div class="parent content-last transparent">
                <a style="font-size:14px" href="lifecycle-locations.php" onclick="ga('send', 'event', 'Go to Lifecycle Locations page', 'click', 'Lifecycle page');">
                  <img src="images5/locations-button.png" class="img-responsive i5 child" alt="Research and Development Locations Link Button Image">
                  <div style="left: 12% !important;" class="funThing">

                    <h1 id="topLine2" class="overlayText tlt104">LOCATIONS</h1>
                    <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
                  </div>
                </a>
              </div>
            </div>
            <div class="cursor"></div>

          </div>

        </div>

      </div>

    </section>

    <section class="blocks02">
      <center>
        <div class="container-fluid w800">
          <div class="row heros">

            <div class="col-xs-12 col-lg-12">
              <div class="content-top transparent">
                <img src="images5/liner.jpg" id="slideUpLiner2">

                <p class="small">Our nation’s defense has always relied on revolutionary advancements to maintain superiority and readiness. Those revolutions start here.</p>
              </div>
              <p class="small content-middle transparent">The Air Force Life Cycle Management Center (AFLCMC) supports the mission of the U.S. Air Force through development, acquisitions, and product support of cutting-edge weapon systems and defense solutions for our men and women in uniform.</p>

              <p class="small content-bottom transparent">Headquartered at Wright-Patterson Air Force Base near Dayton, OH, and operating throughout the United States, we act as a guiding force behind the development, testing and modernization of Air Force aircraft, engines, and munitions, as well as all electronics, computer networks, cyber weapons, and other vital support systems.</p>
              <div class="content-last transparent">
                <h1 class="acq">Faster. Higher. Farther.</h1>
              </div>
            </div>
          </div>
        </div>
      </center>
    </section>

    <section class="blocks300">
      <center>
        <div class="container-fluid" style="max-width:1000px;">
          <div class="row heros">

            <div class="col-xs-12 col-lg-12">
              <div class="content-top transparent" style="-webkit-box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);-moz-box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);">
                <div class="videoWrapperACQ" style="-webkit-box-shadow: 0px 10px 17px 3px rgba(0,0,0,0.56);
                -moz-box-shadow: 0px 10px 17px 3px rgba(0,0,0,0.56);
                box-shadow: 0px 10px 17px 3px rgba(0,0,0,0.56);">
                <iframe src="https://www.youtube.com/embed/soxXOff3bLw" title="Video: Satisfaction" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>

            </div>
          </div>
        </div>
      </div>
    </center>
  </section>
  <section class="blocks3">
    <center>
      <div class="container-fluid w800">
        <div class="row heros">
          <div class="col-xs-12 col-lg-12">
            <div class="content-top transparent">
              <p class="small">AFLCMC is responsible for designing, developing, and delivering the aerospace weapon systems and capabilities that keep the U.S. warfighter and our allies on the leading edge of technology and advanced capabilities.</p>
              <p class="small">For more than nine decades, AFLCMC and its predecessors have provided the military aviation technologies that have allowed our Airmen to operate safely and effectively when flying into harm’s way. While the technologies and conflicts may have changed throughout the years, the mission has not.</p>
            </div>

            <div class="content-middle transparent">
              <p class="small">We work on projects and innovations most people only dream about—challenging developments and discoveries unavailable in private industry or academia. The pace of advancement is critical to success so the best resources to maintain revolutionary progress is available.</p>
            </div>

            <div class="content-bottom transparent">
              <p class="small">We trace our history all the way back to 1917, when the Army Signal Corps established the Airplane Engineering Department at McCook Field near Dayton, Ohio. In the ensuing decades, components of what would eventually form AFLCMC were established at Wright-Patterson Air Force Base and other installations around the country. Despite their varied locations, designations, and functions, these organizations always maintained the core principles that form our mission:</p>
              <p class="small mb0">Build and execute the very best equipment and systems, and support them with life cycle maintenance strategies to advance the Air Force mission in air, space, and cyberspace.</p>
            </div>
          </div>
        </div>
      </div>
    </center>
  </section>

  <section class="modalBlock">
    <div class="container-fluid blacker3">
      <div class="row heros">
        <div class="col-xs-12 col-lg-12">
          <div style="margin-top:1em;" class="center content-top transparent">
            <p style="margin-bottom:0em;" class="register two">Register here and we&rsquo;ll keep you informed about the latest job openings.</p>
          </div>

          <div class="bluish3 content-middle transparent">
            <div class="bluishButton"><a class="white" href="roa.php" onclick="ga('send', 'event', 'Go to ROA page', 'click', 'Lifecycle page');">Register</a></div>
            <div class="bluishButton new">
              <a class="white" href="careers.php#occupations" onclick="ga('send', 'event', 'Go to Careers page', 'click', 'Lifecycle page');">Back to Occupations</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="blocks500">
    <div class="container-fluid" >
      <div class="row heros">

        <div class="col-xs-12 col-lg-12">
          <div class="content-top transparent">
            <div style="-webkit-box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);-moz-box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);">
              <div class="m-carousel">
                <div class="m-carousel__item one">
                  <img id="myImg" class="m-carousel__image" data-flickity-lazyload="images5/life00.jpg" alt="Advanced pilot flight helmet">
                  <div class="custCaption1"><p class="endDescription">Advanced pilot flight helmet</p></div>
                </div>

                <div class="m-carousel__item two">
                  <img id="myImg2" class="m-carousel__image" data-flickity-lazyload="images5/life0.jpg" alt="Engineers doing materials testing">
                  <div class="custCaption2"><p class="endDescription">Engineers doing materials testing</p></div>
                </div>

                <div class="m-carousel__item three">
                  <img id="myImg3" class="m-carousel__image" data-flickity-lazyload="images5/life1.jpg" alt="F-16 deploying flares">
                  <div class="custCaption3"><p class="endDescription">F-16 deploying flares</p></div>
                </div>

                <div class="m-carousel__item four">
                  <img id="myImg4" class="m-carousel__image" data-flickity-lazyload="images5/life2.jpg" alt="C-130 cargo plane deploying flares">
                  <div class="custCaption4"><p class="endDescription">C-130 cargo plane deploying flares</p></div>
                </div>

                <div class="m-carousel__item five">
                  <img id="myImg5" class="m-carousel__image" data-flickity-lazyload="images5/life3.jpg" alt="B-2 aircraft refueling in flight">
                  <div class="custCaption5"><p class="endDescription">B-2 aircraft refueling in flight</p></div>
                </div>

                <div class="m-carousel__item six">
                  <img id="myImg6" class="m-carousel__image" data-flickity-lazyload="images5/life4.jpg" alt="Pilot training airplace on the tarmac">
                  <div class="custCaption6"><p class="endDescription">Pilot training airplace on the tarmac</p></div>
                </div>

                <div class="m-carousel__item seven">
                  <img id="myImg7" class="m-carousel__image" data-flickity-lazyload="images5/life5.jpg" alt="B-2 ready for take off">
                  <div class="custCaption7"><p class="endDescription">B-2 ready for take off</p></div>
                </div>

                <div class="m-carousel__item eight">
                  <img id="myImg8" class="m-carousel__image" data-flickity-lazyload="images5/life6.jpg" alt="Sophisticated avionics">
                  <div class="custCaption8"><p class="endDescription">Sophisticated avionics</p></div>
                </div>

                <div class="m-carousel__item nine">
                  <img id="myImg9" class="m-carousel__image" data-flickity-lazyload="images5/careers-slider4.jpg" alt="Scientist with test equipment">
                  <div class="custCaption9"><p class="endDescription">Scientist with test equipment</p></div>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


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

                <div style="display:flex;justify-content:space-between;">
                  <div style="width:80%;" id="caption"></div>


                  <div><button type="button" id="getFile6">Download</button></div>
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

                <div style="display:flex;justify-content:space-between;">
                  <div style="width:80%;" id="caption2"></div>


                  <div><button type="button" id="getFile7">Download</button></div>
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

                <div style="display:flex;justify-content:space-between;">
                  <div style="width:80%;" id="caption3"></div>


                  <div><button type="button" id="getFile8">Download</button></div>
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

                <div style="display:flex;justify-content:space-between;">
                  <div style="width:80%;" id="caption4"></div>

                  <div><button type="button" id="getFile9">Download</button></div>
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

                <div style="display:flex;justify-content:space-between;">
                  <div style="width:80%;" id="caption5"></div>

                  <div><button type="button" id="getFile10">Download</button></div>
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

                <div style="display:flex;justify-content:space-between;">
                  <div style="width:80%;" id="caption6"></div>

                  <div><button type="button" id="getFile11">Download</button></div>
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

                <div style="display:flex;justify-content:space-between;">
                  <div style="width:80%;" id="caption7"></div>

                  <div><button type="button" id="getFile12">Download</button></div>
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

                <div style="display:flex;justify-content:space-between;">
                  <div style="width:80%;" id="caption8"></div>

                  <div><button type="button" id="getFile13">Download</button></div>
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

                <div style="display:flex;justify-content:space-between;">
                  <div style="width:80%;" id="caption9"></div>

                  <div><button type="button" id="getFile14">Download</button></div>
                </div>
              </div>
            </div>
          </center>
        </div>
      </div>
    </div>
  </div>

  <section class="blocks14">
    <center>
      <div class="container-fluid w800">
        <div class="row heros">
          <div class="col-xs-12 col-lg-12">
            <div class="content-top transparent">
              <h1 class="acq">Impressively Capable</h1>
              <p class="small">Because of the incredible people who make up our ranks we are able to accomplish amazing things every day. Shoulder to shoulder we are a force to be reckoned with.</p>
            </div>
            <div class="content-middle transparent">
              <p class="small">We research, develop, test, and produce advanced fighters and bombers, keeping them modernized and updated as advancements are made.</p>

              <p class="small">We develop, test, and support the new KC-46 tanker and provide modification and sustainment of the KC-135 and KC-10.</p>
            </div>
            <div class="content-bottom transparent">
              <p class="small">We manage combat electronics systems, propulsion systems, simulator systems, training aircraft, and alternative fuels.</p>
              <p class="small">We research, develop, test, and produce advanced armaments.</p>
              <p class="small mb0">We develop and provide support for advanced fixed and deployable electronic, command and control, communications and cyber systems.</p>
            </div>

          </div>
        </div>
      </div>

    </center>
  </section>


  <section class="blocks4">
    <center>
      <div class="container-fluid w800" style="padding-top:0px;">
        <div class="row heros">
          <div class="col-xs-12 col-lg-12">
            <div class="content-top transparent">
              <p class="small">We supply the warfighter with the world’s best network-ready intelligence, surveillance, and reconnaissance capabilities.</p>
            </div>
            <div class="content-middle transparent">
              <p class="small">We provide life cycle management for two dozen different engine types for the Air Force and more than 40 international partners.</p>
              <p class="small">We ensure safe, secure, and effective nuclear capability for the nation.</p>
            </div>

            <div class="content-bottom transparent">

              <p class="small">AFLCMC is part of the Air Force Civilian Service (AFCS). That’s the indispensable force that provides the brain power and manpower that keep the Air Force ready for action.</p>
              <p class="small">At 170,000 strong we at AFCS are a force to be reckoned with. We fill positions in over 600 different occupations. Dedicated and confident, we work shoulder to shoulder with Airmen around the country and around the world, committed to the vital Air Force mission in air, space, and cyberspace. Together we are... <span class="strong">Forces. Joined.</span></p>
              <img src="images5/liner.jpg" id="slideUpLiner3">
            </div>

          </div>
        </div>
      </div>

    </center>
  </section>


  <section class="blocks9">
    <div class="container-fluid blacker3">
      <div class="row heros">
        <div class="col-xs-12 col-lg-12">
          <div style="margin-top:1em;" class="center content-top transparent">
            <p style="margin-bottom:0em;" class="register two">Register here and we&rsquo;ll keep you informed about the latest job openings.</p>
          </div>

          <div class="bluish3 content-middle transparent">
            <div class="bluishButton"><a class="white" href="roa.php" onclick="ga('send', 'event', 'Go to ROA page', 'click', 'Lifecycle page');">Register</a></div>
            <div class="bluishButton new">
              <a class="white" href="careers.php#occupations" onclick="ga('send', 'event', 'Go to Careers page', 'click', 'Lifecycle page');">Back to Occupations</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include("footer-include/footer.php"); ?>



</div>


<script src="js5/jquery-3.3.1.min.js"></script>

<script
src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>

<!-- <script src="js5/bootstrap.js"></script> -->
<script src="js5/bootstrap.min.js"></script>

<!-- <script src="js5/slick.js"></script> -->
<script src="js5/slick.min.js"></script>


<script src="js5/TweenMax.min.js"></script>
<script src="js5/Draggable.min.js"></script>

<script src="js5/lettering.min.js"></script>


<script src="http://jschr.github.io/textillate/jquery.textillate.js"></script>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>



<script src="js5/lifecycle.js"></script>
<script src="js5/scrollTop.js"></script>
<script src="tipuesearch/tipuesearch_set.js"></script>
<script src="tipuesearch/tipuesearch_content.js"></script>
<script src="tipuesearch/tipuesearch.js"></script>


<script>



//flickity carousel
var elem = document.querySelector('.m-carousel')
if(elem) {
  var flkty = new Flickity( elem, {
    wrapAround: true,
    pageDots: false,
    imagesLoaded: true,
    adaptiveHeight: false,
    lazyLoad: 3,


    arrowShape:'M27.1,46.45a5.07,5.07,0,0,0,0,7.12L55.74,82.21a5.08,5.08,0,0,0,7.14,0h0a5,5,0,0,0,0-7.14l-25-25,25-25a5.07,5.07,0,0,0,0-7.14h0a5,5,0,0,0-7.14,0Z'
  });
}


$(document).ready(function() {
  $('#hero-slider2').on('init', function(e, slick) {
    var $firstAnimatingElements = $('div.hero-slide:first-child').find('[data-animation]');
    doAnimations($firstAnimatingElements);
    $('.hero-content.acq').show();
  });
  $('#hero-slider2').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
    var $animatingElements = $('div.hero-slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
    doAnimations($animatingElements);
    $('.hero-content.acq').show();
  });
  $('#hero-slider2').slick({
    autoplay: false,
    autoplaySpeed: 10000,
    dots: false,
    fade: true
  });
  function doAnimations(elements) {
    var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    elements.each(function() {
      var $this = $(this);
      var $animationDelay = $this.data('delay');
      var $animationType = 'animated ' + $this.data('animation');
      $this.css({
        'animation-delay': $animationDelay,
        '-webkit-animation-delay': $animationDelay
      });
      $this.addClass($animationType).one(animationEndEvents, function() {
        $this.removeClass($animationType);
      });
    });
  }
});




</script>
</body>


</html>
