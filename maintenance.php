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
  <link rel=stylesheet href="css/maintenance.css">
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
  margin-bottom:0em;
}

.hero-slide {
  background-position: 0px 100% !important;
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
            <div class="hero-slide" style="background-image: url('./images5/m-main.jpg');" role="img" aria-label="Air Force Sustainment Center Landing Image - large plane on runway">
              <div class="row hero-content acq">
                <div class="col-sm-12 moveLeft">
                  <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="0.8s">
                    <h1 class="slicker">READY FOR</h1>
                  </div>
                  <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="0.8s">
                    <h1 class="slicker two">ANYTHING</h1>
                  </div>
                  <div class="img-responsive slide-message"  data-animation="fadeInUp" data-delay="1s">
                    <h1 class="slicker three">Air Force Sustainment Center</h1>
                  </div>
                  <img src="images5/liner.jpg" id="slideUpLiner" class="img-responsive" data-animation="fadeInUpBig" data-delay="1.1s" />
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>


    <section class="blocksTop2">
      <div class="container-fluid">
        <div class="row heros">

          <div id="addTheShadow" class="centerBlocks">

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
              <div class="parent content-top transparent">
                <a style="font-size:14px" href="acquisition.php" onclick="ga('send', 'event', 'Go to Acquisition page', 'click', 'Maintenance page');">
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
                <a style="font-size:14px" href="maintenance-careers.php" onclick="ga('send', 'event', 'Go to Maintenance Careers page', 'click', 'Maintenance page');">
                  <img src="images5/careers-button.png" class="img-responsive i7 child" alt="Air Force Sustainment Center Careers Link Button Image">
                  <div style="left: 12% !important;" class="funThing">
                    <!-- <h1 id="topLine5" class="overlayText tlt101">NUCLEAR</h1> -->
                    <h1 id="topLine2" class="overlayText tlt101">CAREERS</h1>
                    <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">

              <div class="parent content-bottom transparent">
                <a style="font-size:14px" href="maintenance-benefits.php" onclick="ga('send', 'event', 'Go to Maintenance Benefits page', 'click', 'Maintenance page');">
                  <img src="images5/benefits-button-square.png" class="img-responsive i8 child" alt="Air Force Sustainment Center Benefits Link Button Image">
                  <div style="left: 12% !important;" class="funThing">
                    <h1 id="topLine2" class="overlayText tlt102">BENEFITS</h1>
                    <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow10">
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
              <div class="parent content-last transparent">
                <a style="font-size:14px" href="maintenance-locations.php" onclick="ga('send', 'event', 'Go to Maintenance Locations page', 'click', 'Maintenance page');">
                  <img src="images5/locations-button.png" class="img-responsive i5 child" alt="Air Force Sustainment Center Locations Link Button Image">
                  <div style="left: 12% !important;" class="funThing">
                    <!-- <h1 id="topLine5" class="overlayText tlt104">SPACE &</h1> -->
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

                <h1 class="acq">Agility & Quality is a powerful<br>secret weapon</h1>
              </div>
              <p class="small content-middle transparent">The Air Force Sustainment Center (AFSC) is the focal point for supplying and sustaining all Air Force weapon systems. Big job!</p>

              <p class="small content-bottom transparent">We work in highly specialized facilities, designed and built for the unique task of providing scheduled repair, modification, and overhaul to our extensive fleet of weapon systems and support equipment for all Air Force flight and space systems.</p>
              <div class="content-top transparent">
                <p class="small">Our success is rooted in the agility of our operations that can not only provide scheduled support but, more importantly, respond immediately and effectively to the unexpected.</p>
                <p class="small">But success also stems from our unwavering commitment to the old fashioned “job well done.” Quality execution in both planning and implementation gives the Air Force the tools and support they need to accomplish their mission in air, space, and cyberspace.</p>
              </div>
            </div>
          </div>
        </div>
      </center>
    </section>
    <section class="blocks500">

      <div class="container-fluid" >
        <div class="row heros">

          <div class="col-xs-12 col-lg-12">
            <div class="content-top transparent">


              <div style="-webkit-box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);-moz-box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);">
                <div class="m-carousel">
                  <div class="m-carousel__item one">
                    <img id="myImg" class="m-carousel__image" data-flickity-lazyload="images5/maint8.jpg" alt="C-130 deploying flares">
                    <div class="custCaption1"><p class="endDescription">C-130 deploying flares</p></div>
                  </div>

                  <div class="m-carousel__item two">
                    <img id="myImg2" class="m-carousel__image" data-flickity-lazyload="images5/maint1.jpg" alt="Aircraft sheet metal technician">
                    <div class="custCaption2"><p class="endDescription">Aircraft sheet metal technician</p></div>
                  </div>

                  <div class="m-carousel__item three">
                    <img id="myImg3" class="m-carousel__image" data-flickity-lazyload="images5/maint2.jpg" alt="C-17 on the tarmac in a snow storm">
                    <div class="custCaption3"><p class="endDescription">C-17 on the tarmac in a snow storm</p></div>
                  </div>

                  <div class="m-carousel__item four">
                    <img id="myImg4" class="m-carousel__image" data-flickity-lazyload="images5/maint3.jpg" alt="Avionics inspection">
                    <div class="custCaption4"><p class="endDescription">Avionics inspection</p></div>
                  </div>

                  <div class="m-carousel__item five">
                    <img id="myImg5" class="m-carousel__image" data-flickity-lazyload="images5/maint4.jpg" alt="C-17 on the tarmac, clear sky">
                    <div class="custCaption5"><p class="endDescription">C-17 on the tarmac, clear sky</p></div>
                  </div>

                  <div class="m-carousel__item six">
                    <img id="myImg6" class="m-carousel__image" data-flickity-lazyload="images5/maint6.jpg" alt="Cargo transport plane in hangar">
                    <div class="custCaption6"><p class="endDescription">Cargo transport plane in hangar</p></div>
                  </div>

                  <div class="m-carousel__item seven">
                    <img id="myImg7" class="m-carousel__image" data-flickity-lazyload="images5/maint7.jpg" alt="C-130 aircraft taking off">
                    <div class="custCaption7"><p class="endDescription">C-130 aircraft taking off</p></div>
                  </div>

                  <div class="m-carousel__item eight">
                    <img id="myImg8" class="m-carousel__image" data-flickity-lazyload="images5/careers-slider2.jpg" alt="Tradesman making repairs">
                    <div class="custCaption8"><p class="endDescription">Tradesman making repairs</p></div>
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

                  <div style="display:flex;justify-content:space-between;">
                    <div style="width:80%;" id="caption10"></div>


                    <div><button type="button" id="getFile15">Download</button></div>
                  </div>
                </div>
              </div>
            </center>
          </div>
        </div>
      </div>

    </div>

    <section class="blocks3">
      <center>
        <div class="container-fluid w800">
          <div class="row heros">
            <div class="col-xs-12 col-lg-12">
              <div class="content-top transparent">
                <h1 class="acq">Always Prepared</h1>
                <p class="small">Our sustainment team performs functions such as initial provisioning, cataloging, inventory management and warehousing, and depot- and field-level maintenance.  When you look at the equipment above you can see why this is a fascinating and exciting challenge.</p>
              </div>

              <div class="content-middle transparent">
                <p class="small">One of the primary functions performed by AFSC is Programmed Depot Maintenance (PDM). PDM occurs at regularly scheduled intervals throughout the life of every aircraft. Dedicated maintenance teams work diligently to extend the life and capabilities of aircraft in the Air Force inventory.</p>
              </div>
              <div class="content-bottom transparent">
                <p class="small" style="margin-bottom:0px;">Along with PDM, we are constantly adapting Air Force weapon systems to meet new warfighter requirements as well as technological advances and capabilities updates.</p>
              </div>
            </div>
          </div>
        </div>
      </center>
    </section>





    <section class="blocks14">
      <center>
        <div class="container-fluid w800" style="padding-top:0px;">
          <div class="row heros">
            <div class="col-xs-12 col-lg-12">
              <div class="content-top transparent">
                <h1 class="acq">The Bigger Picture</h1>
                <p class="small">AFSC is part of the Air Force Civilian Service (AFCS). That’s the indispensable force that provides the brain power and manpower that keep the Air Force ready for action.</p>

              </div>
              <div class="content-middle transparent">
                <p class="small">At 170,000 strong we at AFCS are a force to be reckoned with. We fill positions in over 600 different occupations. Dedicated and confident, we work shoulder to shoulder with Airmen around the country and around the world, committed to the vital Air Force mission in air, space, and cyberspace.</p>

                <p class="small">Together we are... <span class="strong">Forces. Joined.</span></p>

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
              <div class="bluishButton"><a class="white" href="roa.php" onclick="ga('send', 'event', 'Go to ROA page', 'click', 'Maintenance page');">Register</a></div>
              <div class="bluishButton new">
                <a class="white" href="careers.php#occupations" onclick="ga('send', 'event', 'Go to Careers page', 'click', 'Maintenance page');">Back to Occupations</a>
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


  <script src="js5/maintenance.js"></script>
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
