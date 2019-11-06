<?php
define('WP_USE_THEMES', false);
include 'blog2/wp-load.php';
?>

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

  <link rel="stylesheet" href="css5/normalize.css">

  <link type="image/png" href="images5/afcs-favicon.png" rel="icon">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

  <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel=stylesheet href="calendar-css/main-core.css">
  <link rel=stylesheet href="calendar-css/main-daygrid.css">
  <link rel=stylesheet href="calendar-css/main-list.css">

  <link rel="stylesheet" href="tipuesearch/tipuesearch.css">

  <link rel=stylesheet href="css/calendar.css">
  <link rel=stylesheet href="css/navbar.css">
  <link rel=stylesheet href="css/aftac.css">
  <link rel=stylesheet href="css/aftac-landing.css">
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

    <?php include("nav-include/aftac-navbar.php"); ?>

    <div id="tipModal">
    </div>

    <a name='content'></a>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12">
          <div id="hero-slider2">
            <div class="hero-slide" style="background-image: url('./images5/aftac.png');" role="img" aria-label="Air Force Technical Applications Center Landing Image - 1 lab technician posing in front of an array of computing and analytic equipment">
              <div class="container">
                <div class="row hero-content acq">
                  <div class="col-sm-12 moveLeft">
                    <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="0.8s">
                      <h1 class="slicker">AFTAC</h1>
                    </div>
                    <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="0.9s">
                      <h1 class="slicker two">AIR FORCE TECHNICAL</h1>
                    </div>
                    <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="1s">
                      <h1 class="slicker four">APPLICATION CENTER</h1>
                    </div>
                    <div class="img-responsive slide-message"  data-animation="fadeInUp" data-delay="1.1s">
                      <h1 class="slicker three">A force with a global view.</h1>
                    </div>
                    <img src="images5/liner.jpg" id="slideUpLiner" class="img-responsive" data-animation="fadeInUpBig" data-delay="1.2s" />

                  </div>

                </div>
              </div>
            </div>

            <div class="hero-slide" style="background-image: url('./images5/aftac2.png');" role="img" aria-label="Air Force Technical Applications Center Landing Image - testing in a clean room">
              <div class="container">
                <div class="row hero-content acq">
                  <div class="col-sm-12 moveLeft">
                    <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="0.8s">
                      <h1 class="slicker">AFTAC</h1>
                    </div>
                    <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="0.9s">
                      <h1 class="slicker two">AIR FORCE TECHNICAL</h1>
                    </div>
                    <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="1s">
                      <h1 class="slicker four">APPLICATION CENTER</h1>
                    </div>
                    <div class="img-responsive slide-message"  data-animation="fadeInUp" data-delay="1.1s">
                      <h1 class="slicker three">A force with a global view.</h1>
                    </div>
                    <img src="images5/liner.jpg" id="slideUpLiner" class="img-responsive" data-animation="fadeInUpBig" data-delay="1.2s" />

                  </div>

                </div>
              </div>
            </div>
            <div class="hero-slide" style="background-image: url('./images5/aftac3.png');" role="img" aria-label="Air Force Technical Applications Center Landing Image Lab technician calibrating analytic and testing equipment">
              <div class="container">
                <div class="row hero-content acq">
                  <div class="col-sm-12 moveLeft">
                    <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="0.8s">
                      <h1 class="slicker">AFTAC</h1>
                    </div>
                    <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="0.9s">
                      <h1 class="slicker two">AIR FORCE TECHNICAL</h1>
                    </div>
                    <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="1s">
                      <h1 class="slicker four">APPLICATION CENTER</h1>
                    </div>
                    <div class="img-responsive slide-message"  data-animation="fadeInUp" data-delay="1.1s">
                      <h1 class="slicker three">A force with a global view.</h1>
                    </div>
                    <img src="images5/liner.jpg" id="slideUpLiner" class="img-responsive" data-animation="fadeInUpBig" data-delay="1.2s" />

                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <section id="blocksTop" class="blocksTop">
      <div class="container-fluid">
        <div class="row heros">

          <div class="centerBlocks">
            <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4 padding-0">
              <div class="parent content-top transparent">
                <a style="font-size:14px;" href="about-aftac.php" onclick="ga('send', 'event', 'Go to About AFTAC page', 'click', 'AFTAC Home');">
                  <img id="mobileSmall" src="images5/about-aftac.png" class="img-responsive i1 child" alt="About AFTAC Link Button Image - 3 lab technicians posing in front of an array of computing and analytic equipment">
                  <div class="funThing new" id="b33">
                    <h1 id="topLine3" class="overlayText tlt41">ABOUT</h1>
                    <h1 id="topLine4" class="overlayText tlt41">AFTAC</h1>
                    <hr id="line" class="trans--grow hr1 grow10">
                  </div>

                </a>
              </div>
            </div>


            <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4 padding-0">
              <div class="parent content-middle transparent">
                <a style="font-size:14px;" href="aftac-careers.php" onclick="ga('send', 'event', 'Go to AFTAC Careers page', 'click', 'AFTAC Home');">
                  <img id="mobileSmall" src="images5/aftac-careers.png" class="img-responsive i2 child" alt="Careers at AFTAC Link Button Image - 1 lab technicians posing in front of an array of computing and analytic equipment">
                  <div class="funThing" id="b33">
                    <h1 id="topLine3" class="overlayText tlt42">CAREERS</h1>
                    <h1 id="topLine4" class="overlayText tlt42">AT AFTAC</h1>
                    <hr id="line" class="trans--grow hr1">
                  </div>
                </a>
              </div>
            </div>

            <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4 padding-0">
              <div class="parent content-bottom transparent">
                <a style="font-size:14px;" href="contact-aftac.php" onclick="ga('send', 'event', 'Go to Contact AFTAC page', 'click', 'AFTAC Home');">
                  <img id="mobileSmall" src="images5/contact-aftac.png" class="img-responsive i3 child" alt="Contact AFTAC Link Button Image - 2 lab technicians">

                  <div class="funThing" id="b33">
                    <h1 id="topLine3" class="overlayText tlt41">CONTACT</h1>
                    <h1 id="topLine4" class="overlayText tlt41">AFTAC</h1>
                    <hr id="line" class="trans--grow hr1">
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

                <p class="small">We are America’s nuclear watch dog, dedicated to monitoring, detecting, and reporting data from foreign nuclear explosions or accidents.</p>
              </div>
              <p class="small content-middle transparent">North Korea’s recent nuclear tests and provocations are in the news. We’re the group that detected and analyzed data from our monitoring and sensing stations around the world that confirmed a nuclear test.</p>

              <p class="small content-bottom transparent">Simply put, AFTAC performs nuclear treaty monitoring and nuclear event detection by operating and maintaining the U.S. Atomic Energy Detection System (USAEDS). Consisting of a global network of more than 3,600 sensors monitored around the clock, USAEDS is the largest sensor network in the U.S. Air Force.</p>

              <p class="small content-last transparent">AFTAC provides quality technical measurements to monitor nuclear treaty compliance and develops advanced proliferation monitoring technologies to preserve our nation’s security. </p>

              <p class="small content-secondLast transparent">Once a disturbance is detected underground, underwater, in the atmosphere, or in space, the event is analyzed for nuclear identification and the findings are reported to national and command authorities.</p>

            </div>
          </div>
        </div>
      </center>
    </section>

    <section class="blocks500" style="margin-bottom:60px;">

      <div class="container-fluid" >
        <div class="row heros">

          <div class="col-xs-12 col-lg-12">
            <div class="content-top transparent">

              <div style="-webkit-box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);-moz-box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);">
                <div class="m-carousel">
                  <div class="m-carousel__item one">
                    <img id="myImg" class="m-carousel__image" data-flickity-lazyload="images5/aftac1.jpg" alt="USNS research vessel Howard O. Lorenzen, on the Columbia River in Oregon">
                    <div class="custCaption1"><p class="endDescription">USNS research vessel Howard O. Lorenzen, on the Columbia River in Oregon</p></div>
                  </div>

                  <div class="m-carousel__item two">
                    <img id="myImg2" class="m-carousel__image" data-flickity-lazyload="images5/aftac2.jpg" alt="Technicians moving radioactive material collected in Alaska to a waiting airplane">
                    <div class="custCaption2"><p class="endDescription">Technicians moving radioactive material collected in Alaska to a waiting airplane</p></div>
                  </div>

                  <div class="m-carousel__item three">
                    <img id="myImg3" class="m-carousel__image" data-flickity-lazyload="images5/aftac3.jpg" alt="Technician calibrating sensors in Alaska">
                    <div class="custCaption3"><p class="endDescription">Technician calibrating sensors in Alaska</p></div>
                  </div>

                  <div class="m-carousel__item four">
                    <img id="myImg4" class="m-carousel__image" data-flickity-lazyload="images5/aftac4.jpg" alt="Field researcher collecting data from a permanent monitoring station">
                    <div class="custCaption4"><p class="endDescription">Field researcher collecting data from a permanent monitoring station</p></div>
                  </div>

                  <div class="m-carousel__item five">
                    <img id="myImg5" class="m-carousel__image" data-flickity-lazyload="images5/aftac5.jpg" alt="Lab technician calibrating analytic and testing equipment">
                    <div class="custCaption5"><p class="endDescription">Lab technician calibrating analytic and testing equipment</p></div>
                  </div>

                  <div class="m-carousel__item six">
                    <img id="myImg6" class="m-carousel__image" data-flickity-lazyload="images5/aftac6.jpg" alt="Helicopter transport of materials for testing and analysis">
                    <div class="custCaption6"><p class="endDescription">Helicopter transport of materials for testing and analysis</p></div>
                  </div>

                  <div class="m-carousel__item seven">
                    <img id="myImg7" class="m-carousel__image" data-flickity-lazyload="images5/aftac7.jpg" alt="Research vessel at sea">
                    <div class="custCaption7"><p class="endDescription">Research vessel at sea</p></div>
                  </div>

                  <div class="m-carousel__item eight">
                    <img id="myImg8" class="m-carousel__image" data-flickity-lazyload="images5/aftac8.jpg" alt="Researchers gathering field samples">
                    <div class="custCaption8"><p class="endDescription">Rocket launch</p></div>
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

    </div>



    <section class="blocks4">
      <center>
        <div class="container-fluid w800">
          <div class="row heros">
            <div class="col-xs-12 col-lg-12 mt4">

              <p style="font-weight:lighter !important;font-family: "Roboto Condensed"" class="small content-top transparent">Our mission extends beyond nuclear testing and includes nuclear accidents. After the Fukushima Daiichi Power Plant accident in Japan we monitored the extent of the radioactive releases and collaborated with Japanese and other international authorities to analyze and monitor the disaster.</p>

              <p class="small content-middle transparent">AFTAC also performs research and development of new proliferation detection technologies to enhance or assist treaty verification to limit the proliferation of weapons of mass destruction.</p>
              <div class="content-bottom transparent">
                <p class="small" style="margin-bottom: 45px;">Our advanced array of sensors, monitoring stations, and technological advances is manned by a team of 1,000 dedicated and highly educated professionals, scientists, engineers, and trained specialists. Thinkers, innovators, analysts, administrators—all at the service of our national security in this age of nuclear proliferation.</p>
                <img src="images5/liner.jpg" id="slideUpLiner3" style="margin-bottom:40px;">
              </div>
            </div>

          </div>
        </div>
      </center>
    </section>

    <section class="blocks200" style="margin-bottom:0px;">
      <center>
        <div style="max-width:960px" class="container-fluid">
          <div class="row heros">
            <div class="col-xs-12 col-lg-12">

              <div class="content-top transparent">

                <img src="images5/aftac-main.jpg" class="img-responsive" style="-webkit-box-shadow: 0px 10px 17px 3px rgba(0,0,0,0.56);
                -moz-box-shadow: 0px 10px 17px 3px rgba(0,0,0,0.56);
                box-shadow: 0px 10px 17px 3px rgba(0,0,0,0.56);">


              </div>

            </div>
          </div>
        </div>
      </center>
    </section>


    <!--
    <div class="diversity"></div> -->

    <section class="blocks12">
      <center>
        <div class="container-fluid p60">
          <div class="row heros">
            <div class="col-xs-12 col-lg-12 content-top transparent">

              <img src="images5/liner.jpg" id="slideUpLiner2">


            </div>
          </div>
        </div>
      </center>
    </section>

    <div id="anchorPointTop2"></div>

    <section id="blocks4" class="blocks4">
      <div class="container-fluid">
        <div class="row heros">


          <div class="centerBlocks">
            <div class="col-xs-6 col-sm-6 col-lg-6 col-md-6 padding-0">
              <div class="parent content-top transparent">

                <img src="images5/afrl-news.png" class="img-responsive i1 child">
                <div class="funThing new">

                  <h1 id="topLine4" class="overlayText tlt41 openNews" onclick="ga('send', 'event', 'Open AFTAC News', 'click', 'AFTAC Home');">NEWS</h1>
                  <hr id="line" class="trans--grow hr1">
                </div>

              </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-lg-6 col-md-6 padding-0">
              <div class="parent content-middle transparent">

                <img src="images5/afrl-events.png" class="img-responsive i2 child">
                <div class="funThing">
                  <h1 id="topLine4" class="overlayText tlt42 openEvents" onclick="ga('send', 'event', 'Open AFTAC Events', 'click', 'AFTAC Home');">EVENTS</h1>
                  <hr id="line" class="trans--grow hr1">
                </div>

              </div>
            </div>

            <div class="cursor"></div>
          </div>


        </div>
      </div>
    </section>

    <div class="slideThisAftac">
      <div class="hiddenBlock1">

        <div class="container">
          <div class="row">

            <div class="col-lg-1 col-lg-offset-11 col-md-offset-11 col-md-1 col-sm-offset-11 col-sm-1 col-xs-offset-10 col-xs-1">
              <div style="opacity:1 !important;cursor: pointer !important;" class="close"></div>
            </div>

          </div>
          <br>
          <div class="row">
            <div class="col-xs-12 col-md-11 col-lg-11 col-sm-11">
              <div id='calendar'>
              </div>

            </div>
          </div>
        </div>

      </div>

      <div class="hiddenBlock2">
        <div class="container">

          <div class="row">

            <div class="col-lg-1 col-lg-offset-11 col-md-offset-11 col-md-1 col-sm-offset-11 col-sm-1 col-xs-offset-10 col-xs-1">
              <div style="opacity:1 !important;cursor: pointer !important;margin-bottom:1em !important;" class="close4"></div>
            </div>

          </div>

        </div>

        <center style="padding-left:1em;padding-right:1em;">
          <div id="container2" class="section">


            <?php
            $number_of_posts = 100;
            $args = array(
              'numberposts' => $number_of_posts,
              'category_name' => 'AFTAC',

            );
            $posts = get_posts( $args );
            foreach ($posts as $post) : setup_postdata( $post ); ?>


            <?php echo "<div class='expand'>"; ?>


              <?php echo "<div class='main-news-box'>"; ?>


                <h3 style='color:white;text-align:left;margin-bottom:10px;'><?php the_title();  ?></h3>
                <h4 style='text-align:left;margin-bottom:10px;'><?php the_date();  ?></h4>
                <div class="hideOnClick"><?php the_excerpt(); ?></div>

                <h2 class="clickMe"><a href="<?php echo  the_permalink() ?>" target="_blank">LEARN MORE</a></h2>

                <div class='hideInitial'>
                  <?php the_content(); ?>

                </div>



                <?php echo "</div>"; ?>
                <?php echo "</div>"; ?>

                <?php
              endforeach;
              ?>

              <!-- <div class='circle'></div>
              <div class="section"></div> -->
            </div>

          </center>
        </div>

        <div id="anchorPoint"></div>




        <section class="blocks9">

          <div class="container-fluid blacker2">
            <div class="row heros">
              <div class="col-xs-12 col-lg-12">
                <div class="center2 content-top transparent">
                  <p class="register" style="margin-bottom:0px !important;" class="small">Register here and we’ll keep you informed about the latest job openings.</p>
                </div>

                <div class="center2 bluish2 content-middle transparent">
                  <div class="bluishButton two"><a class="white" href="roa.php">Register</a></div>
                  <div class="bluishButton two"><a class="white" href="careers.php#occupations">Back to Occupations</a></div>

                </div>

              </div>
            </div>
          </div>
        </section>


        <?php include("footer-include/aftac-footer.php"); ?>
      </div>


      <script
      src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>

      <!-- <script src="js5/bootstrap.js"></script> -->
      <script src="js5/bootstrap.min.js"></script>
      <script src="js5/aos.js"></script>
      <!-- <script src="js5/slick.js"></script>
      <script src="js5/slick.min.js"></script> -->

      <script src="js5/TweenMax.min.js"></script>
      <!-- <script src="js5/Draggable.min.js"></script> -->

      <script src="js5/lettering.min.js"></script>
      <script src="js5/slick.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" async></script>

      <script src="http://jschr.github.io/textillate/jquery.textillate.js"></script>

      <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

      <script src="tipuesearch/tipuesearch_set.js"></script>
      <script src="tipuesearch/tipuesearch_content.js"></script>
      <script src="tipuesearch/tipuesearch.js"></script>
      <script src="calendar-js/core-main.js"></script>
      <script src="calendar-js/daygrid-main.js"></script>
      <script src="calendar-js/list-main.js"></script>

      <script src="js5/aftac.js"></script>
      <script src="js5/scrollTop.js"></script>
      <script>


      $('.close').on('click', function() {
        $('.hiddenBlock1').slideUp();
        var divPosition = $('#anchorPointTop2').offset();
        $('html, body').animate({scrollTop: divPosition.top - 200}, 500);
      })

      $('.close4').on('click', function() {
        $('.hiddenBlock2').slideUp();
        var divPosition = $('#anchorPointTop2').offset();
        $('html, body').animate({scrollTop: divPosition.top - 400}, 500);

      })


      $('.openNews').on('click', function() {


        if ($('.hiddenBlock2').is(':hidden') && $('.hiddenBlock1').is(':hidden')) {
          console.log('both are hidden1')
          $('.hiddenBlock2').slideDown();
          var divPosition = $('#anchorPoint').offset();
          $('html, body').animate({scrollTop: divPosition.top + 200}, 500);

        }

        if ($('.hiddenBlock1').is(':visible') && $('.hiddenBlock2').is(':hidden')) {
          console.log('events is open and we want to close it and open news')

          $('.hiddenBlock1').slideUp();
          var divPosition = $('#anchorPointTop2').offset();
          $('html, body').animate({scrollTop: divPosition.top - 200}, 1000);

          setTimeout(function() {
            calendar.render();
            $('.hiddenBlock2').slideDown();
            var divPosition = $('#anchorPoint').offset();
            $('html, body').animate({scrollTop: divPosition.top - 120}, 1000);
          }, 1200)

        }


      })


      $('.openEvents').on('click', function() {

        if ($('.hiddenBlock2').is(':hidden') && $('.hiddenBlock1').is(':hidden')) {
          console.log('both are hidden2')

          calendar.render();
          $('.hiddenBlock1').slideDown();
          var divPosition = $('#anchorPoint').offset();
          $('html, body').animate({scrollTop: divPosition.top + 200}, 500);

        }


        if ($('.hiddenBlock2').is(':visible') && $('.hiddenBlock1').is(':hidden')) {
          console.log('news is open abd we want to close it and open events')

          $('.hiddenBlock2').slideUp();
          var divPosition = $('#anchorPointTop2').offset();
          $('html, body').animate({scrollTop: divPosition.top - 200}, 1000);

          setTimeout(function() {
            calendar.render();
            $('.hiddenBlock1').slideDown();
            var divPosition = $('#anchorPoint').offset();
            $('html, body').animate({scrollTop: divPosition.top - 120}, 1000);
          }, 1200)

        }


        // if ($('.hiddenBlock1').is(':visible') && $('.hiddenBlock2').is(':hidden')) {
        // console.log('events is open')
        //
        //
        // $('.hiddenBlock1').hide();
        // // var divPosition = $('#anchorPointTop2').offset();
        // // $('html, body').animate({scrollTop: divPosition.top - 200}, 1000);
        //
        // setTimeout(function() {
        //
        // $('.hiddenBlock2').slideDown();
        // var divPosition = $('#anchorPoint').offset();
        // $('html, body').animate({scrollTop: divPosition.top + 200}, 1000);
        // }, 100)
        //
        //
        // }



      });



      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'list', 'dayGrid' ],
        timeZone: 'UTC',
        defaultView: 'listMonth',

        views: {

          listWeek: { buttonText: 'list week' },
          listMonth: { buttonText: 'list month' }
        },

        header: {

          right: 'dayGridMonth,listYear'
        },


        <?php include('event-calendar-script.php'); ?>

        eventClick: function(info) {
          info.jsEvent.preventDefault(); // don't let the browser navigate

          if (info.event.url) {
            window.open(info.event.url);
          }
        }

      });

      calendar.render();

      // if ($(document).innerWidth() >= 1025) {
      //
      //   $('.main-news-box').click(function () {
      //     if($(".hideInitial").is(':visible')) {
      //
      //       var par = $(this).parents('.expand');
      //       par.find(".hideInitial").slideToggle();
      //       // par.find(".clickMe").text('LEARN MORE');
      //
      //       par.find('.hideOnClick').show();
      //
      //       setTimeout(function() {
      //         $('.circle').removeClass('circle2');
      //       }, 400)
      //
      //       return false;
      //
      //     }
      //
      //     else if ($(".hideInitial").is(':hidden')){
      //
      //
      //
      //       var par = $(this).parents('.expand');
      //       par.find(".hideInitial").slideToggle();
      //
      //
      //       setTimeout(function() {
      //         $('.circle').addClass('circle2');
      //       }, 400)
      //
      //       // par.find(".clickMe").text('LESS');
      //       par.find('.hideOnClick').hide();
      //       return false;
      //
      //     }
      //
      //   });
      //
      //
      //   $(".main-news-box a").mouseenter(function(){
      //     $('a').click(function(e){
      //       e.stopPropagation();
      //     });
      //
      //    $('.circle').toggle();
      //    $('#container2').css('cursor', 'auto');
      //   });
      //
      //   $(".main-news-box a").mouseleave(function(){
      //     $('.circle').toggle();
      //     $('#container2').css('cursor', 'none');
      //
      //   });
      //
      //
      //   $(".main-news-box a").attr("target", "_blank");
      //
      //
      //
      //   var container = document.getElementById("container2");
      //   var circle = document.querySelector(".circle");
      //
      //
      //    TweenMax.set(circle, { scale: 0, xPercent: -50, yPercent: -50 });
      //
      //   container.addEventListener("pointerenter", function(e) {
      //     TweenMax.to(circle, 0.3, { scale: 1, opacity: 1 });
      //     positionCircle(e);
      //   });
      //
      //   container.addEventListener("pointerleave", function(e) {
      //     TweenMax.to(circle, 0.3, { scale: 0, opacity: 0 });
      //     positionCircle(e);
      //   });
      //
      //   container.addEventListener("pointermove", function(e) {
      //     positionCircle(e);
      //   });
      //
      //   function positionCircle(e) {
      //     var rect = container.getBoundingClientRect();
      //     var relX = e.pageX - container.offsetLeft;
      //     var relY = e.pageY - container.offsetTop;
      //
      //   TweenMax.to(circle, 0.3, { x: relX, y: relY });
      //
      //   }
      //
      //
      //
      //
      // }




      // if ($(document).innerWidth() <= 1024) {


      // $('.clickMe').click(function () {
      //   if($(".hideInitial").is(':visible')) {
      //
      //     var par = $(this).parents('.main-news-box');
      //     par.find(".hideInitial").slideToggle();
      //     par.find(".clickMe").text('LEARN MORE');
      //     par.find('.hideOnClick').show();
      //     return false;
      //
      //   }
      //
      //   else if ($(".hideInitial").is(':hidden')){
      //
      //     var par = $(this).parents('.main-news-box');
      //     par.find(".hideInitial").slideToggle();
      //     par.find(".clickMe").text('LESS');
      //     par.find('.hideOnClick').hide();
      //     return false;
      //
      //   }
      //
      // });
      //
      // $(".main-news-box a").attr("target", "_blank");


      // }






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
          autoplay: true,
          autoplaySpeed: 10000,
          dots: true,
          arrows: false,
          fade: true,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: false,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
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
