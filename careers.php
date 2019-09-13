<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css5/animate-edited.css">

  <link rel="stylesheet" href="css5/bootstrap-edited.css">

  <link rel="stylesheet" href="css5/bootstrap-theme.min.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">

  <link rel="stylesheet" href="css/afcs-new.css">
  <link rel="stylesheet" href="css/careers.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">

  <link rel="stylesheet" href="css5/normalize.css">

  <link type="image/png" href="images5/afcs-favicon.png" rel="icon">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="tipuesearch/tipuesearch.css">
  <link rel=stylesheet href="css/calendar.css">

  <link rel=stylesheet href="css/navbar.css">
  <title>Air Force Civilian Service 4.0</title>
  <title><?php echo "Air Force Civilian Service 4.0"; ?></title>
</head>
<style>

.slicker.two {
    font-size: 5em !important;
    font-weight: 700;
    margin-top: -.4em;
}

.slicker.five {
    font-size: 3.8em !important;
    font-weight: 100;
    margin-top: -.6em;
}

.slicker.four {
  font-size:3.8em !important;
  font-weight:600;
  margin-top:-.6em;
}

.slicker.three {
    text-shadow: 5px 2px 6px #000000;
    font-weight: lighter !important;
    font-size: 3em !important;
    line-height: 80px;
    color: white;
    letter-spacing: 0.0em;
    margin-top: -0em;
    margin-bottom: 1.2em;
    color: white !important;
    font-family: "Roboto Condensed", Arial, sans-serif;
}

@media (max-width: 1024px) and (min-width:992px) {
  .slicker.two {
    font-size:3em !important;
    margin-top: -.8em !important;
  }

  .slicker.five {
    font-size:3em !important;
    margin-top: -1em !important;
  }


  .slicker.four {
      font-size: 3em !important;
      font-weight: 100;
      margin-top: -1.2em;
      margin-top: -.5em !important;
  }

  #motto {
      margin-top: 1em !important;
  }

}

@media (max-width: 991px) and (min-width:768px) {
h1.slicker {
    font-size:3.5em !important;
}
.slicker.two {
  font-size:3em !important;

}

#slideUpLiner {
    height: 4px;
    width: 100px;
    margin-top: 3em !important;
}

#motto {
    margin-top: 3em !important;
}

.slicker.five {
  font-size:3em !important;
  margin-top: -1em !important;
}


.slicker.four {
    font-size: 3em !important;
    font-weight: 100;
    margin-top: -1.2em;
    margin-top: -.5em !important;
}
}


@media (max-width: 767px) {

  h1.slicker {
      font-size: 2.5em !important;
      margin-top: 1.5em !important;
  }

  .slicker.two {
      font-size: 2.5em !important;
      margin-top: -.6em !important;
  }

  #motto {
      margin-top: 3em !important;
  }


  .slicker.five {
      font-size: 1.6em !important;
      margin-top: -.6em !important;
  }

  .slicker.four {
      font-size: 1.5em !important;
      margin-top: -.6em !important;
  }

  .hero-content.acq {
    margin-top:4em;
  }

}

@media (max-width:480px) {
  h1.slicker {
      font-size: 1.8em !important;
      margin-top: 1.5em !important;
  }

  .slicker.two {
      font-size: 1.8em !important;
      margin-top: -.6em !important;
  }
}

@media (max-width: 991px) and (min-width: 768px) {
.slicker.three {
    font-size: 1.8em !important;
    font-weight: lighter !important;
    margin-bottom: 0em;
    margin-top: -1em !important;
}
}

@media (max-width: 767px)  {
.slicker.three {
    font-size: 1em !important;
    margin-top: -2em !important;
}

}


</style>

<body>

  <div class="preloader-wrap">
    <div class="preloader">
      <div class="loader">

      </div>
    </div>
  </div>

  <div style="background: #0f1932 !important;" id="site-wrapper">
    <a href="#veryBottom" id="veryTop"></a>


    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid hideNav">
        <div class="collapse navbar-collapse navbar-right two" id="searchIt">
          <ul class="nav navbar-nav navbar-right">
            <li class="searchIt">
              <a class="grayBlock" href="#">
                <i class="fas fa-search"></i>
              </a>
            </li>
            <li><span id="thisSlided" class="bubble noShow">
              <form class="navbar-form navbar-right" role="search">
                <div class="horizontal">
                  <div id="barTop" class="con hideAgain2">
                    <div class="bar top"></div>
                    <div class="bar middle"></div>
                    <div class="bar bottom"></div>
                  </div>
                  <div class="form-group">
                    <div class="tipue_search_group">
                      <div class="horizontalDiv">
                        <input type="text" name="q" id="tipue_search_input" pattern=".{3,}" placeholder="Search" title="At least 3 characters" required>
                      </input>

                    </div>
                  </div>
                </div>
              </div>
            </form>
          </span>
        </li>
        <li>
          <a class="navyBlock" href="roa.php">Register</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
        <img class="img-responsive navLogo" src="images5/afcs-navbar.png">
      </a>
    </div>
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

      <span id="box2">
        <ul class="nav navbar-nav makeToggle tabs" id="menu2">
          <li>
            <a id="list1" class="highlight one thing" href="index.php">Home</a>
          </li>
          <li>
            <a id="list2" class="highlight two thing" href="about.php">About</a>
          </li>
          <li>
            <a id="list3" class="active fun darker highlight three" href="careers.php">Careers</a>
          </li>
          <li id="list4">
            <a class="highlight four thing" href="find-a-job.php">Find A Job</a>
          </li>
          <li>
            <a id="list5" class="highlight five thing" href="contact.php">Contact</a>
          </li>

        </span>
        <span class='nope'>
          <div class="spreadAcross">
            <li>
              <a href="https://www.facebook.com/AirForceCivilianService/" target="_blank" alt="AFCS Facebook page" class="social-head">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
            <li>
              <a class="social-head" href="https://www.linkedin.com/company/air-force-civilian-service" target="_blank" alt="AFCS LinkedIn page">
                <i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
              </li>
              <li>
                <a class="social-head" href="https://www.instagram.com/afcivilian/" target="_blank" alt="AFCS Instagram">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a class="social-head" href="https://twitter.com/afcivilian/" target="_blank" alt="AFCS Twitter">
                  <i class="fa fa-twitter-square" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a class="social-head" href="https://www.youtube.com/channel/UC1L_oa0A2iMfJFuNa44EcFQ" target="_blank" alt="AFCS YouTube link">
                  <i class="fa fa-youtube-square" aria-hidden="true"></i>
                </a>
              </li>
            </div>

            <ul class="nav navbar-nav makeToggle tabs">
              <form class="ml15">
                <div class="tipue_search_group">
                  <input type="text" name="q" id="tipue_search_input" pattern=".{3,}" title="At least 3 characters" required="" placeholder="Search">
                </div>
              </form>
              <br>
              <li class="allAcross">
                <a id="liRegister" class="highlight three thing" href="roa.php">Register</a>
              </li>
            </ul>
          </span>

          <li class="social">
            <a id="liSocial" class="blacker" href="#">Social</a>
          </li>
        </ul>

        <span id="funStuff" class="icon noShow2">
          <ul class="nav navbar-nav">
            <li style="list-style-type:none !important">
              <a href="#">
                <div class="con hideAgain">
                  <div class="bar top"></div>
                  <div class="bar middle"></div>
                  <div class="bar bottom"></div>
                </div>
              </a>
            </li>
            <li class="blackLine" style="list-style-type:none !important"></li>
            <li class="h40" style="list-style-type:none !important">
              <a href="https://www.facebook.com/AirForceCivilianService/" target="_blank" alt="AFCS Facebook page" class="social-head"><i class="fab fa-facebook"></i>
              </a>
            </li>
            <li class="h40" style="list-style-type:none !important">
              <a class="social-head" href="https://www.linkedin.com/company/air-force-civilian-service" target="_blank" alt="AFCS LinkedIn page"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
            </li>
            <li class="h40" style="list-style-type:none !important">
              <a class="social-head" href="https://www.instagram.com/afcivilian/" target="_blank" alt="AFCS Instagram"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="h40" style="list-style-type:none !important">
              <a class="social-head" href="https://twitter.com/afcivilian/" target="_blank" alt="AFCS Twitter"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            </li>
            <li class="h40" style="list-style-type:none !important">
              <a class="social-head" href="https://www.youtube.com/channel/UC1L_oa0A2iMfJFuNa44EcFQ" target="_blank" alt="AFCS YouTube link"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
            </li>
          </ul>
        </span>
      </div>
    </div>

  </nav>



  <div id="tipModal">
  </div>

  <a href="#bottom" id="top"></a>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <div id="hero-slider2" >
          <div class="hero-slide" style="background-image: url('./images5/career-man1.png');">
            <div class="container">
              <div class="row hero-content acq">
                <div class="col-sm-12 moveLeft">
                  <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="0.8s">
                    <h1 class="slicker">170,000 EMPLOYEES</h1>
                  </div>
                  <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="0.9s">
                    <h1 class="slicker two">600 OCCUPATIONS</h1>
                  </div>
                  <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="1s">
                    <h1 class="slicker four">ONE MISSION</h1>
                  </div>
                  <div class="img-responsive slide-message"  data-animation="fadeInUp" data-delay="1.1s">
                    <h1 class="slicker three">Supporting the U.S. Air Force</h1>
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



  <section id="blocksTop3" class="blocksTop3 hideOnMobile">
    <div class="container-fluid">
      <div class="row heros">

        <div class="centerBlocks">
          <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4 padding-0">
            <div class="parent content-top transparent">
              <a style="font-size:14px;" href="">
                <img id="mobileSmall" src="images5/career-slide3.png" class="img-responsive i1 new child">
                <div class="funThing" id="b31">
                  <h1 id="topLine3" class="overlayText tlt41">STUDENTS &</h1>
                  <h1 id="topLine4" class="overlayText tlt41">GRADUATES</h1>
                  <hr id="line" class="trans--grow hr1 grow10">
                </div>

              </a>
            </div>
          </div>


          <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4 padding-0">
            <div class="parent content-middle transparent">
              <a style="font-size:14px;" href="#slideDown" id="slideUp">
                <img id="mobileSmall" src="images5/baby-benefits.png" class="img-responsive i2 new child">
                <div class="funThing" id="b31">

                  <h1 id="topLine4" class="overlayText tlt42">BENEFITS</h1>
                  <hr id="line" class="trans--grow hr1">
                </div>
              </a>
            </div>
          </div>

          <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4 padding-0">
            <div class="parent content-bottom transparent">
              <a style="font-size:14px;" href="#slideDown" id="slideUp">
                <img id="mobileSmall" src="images5/why-afcs.png" class="img-responsive i3 new child">

                <div class="funThing" id="b31">
                  <h1 id="topLine4" class="overlayText tlt41">WHY AFCS</h1>
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


  <section id="blocksTop" class="blocksTop mobileHidden">
    <div class="container-fluid">
      <div class="row heros">

        <div class="centerBlocks">
          <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4 shrink padding-0">
            <div class="parent content-top transparent">
              <a style="font-size:14px;" href="">
              <img src="images5/students-graduates.png" class="img-responsive i1 child">
              <div class="funThing" style="left:18%">
                <h1 id="topLine3" class="overlayText tlt1">STUDENTS &</h1>
                <h1 id="topLine4" class="overlayText tlt1">GRADUATES</h1>
                <hr id="line" class="trans--grow hr1">
              </div>
            </a>
            </div>

          </div>

          <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4 shrink padding-0">

            <div class="parent content-middle transparent">
              <a style="font-size:14px;" href="#slideDown" id="slideUp">
              <img src="images5/baby-benefits.png" class="img-responsive i2 child">
              <div class="funThing">
                <h1 id="topLine4" class="overlayText tlt2">BENEFITS</h1>
                <hr id="line" class="trans--grow hr1">
              </div>
            </a>
            </div>


          </div>

          <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4 shrink padding-0">

            <div class="parent content-bottom transparent">
              <a style="font-size:14px;" href="#slideDown" id="slideUp">
              <img src="images5/why-afcs.png" class="img-responsive i3 child">
              <div class="funThing">
                <h1 id="topLine4" class="overlayText tlt3">WHY AFCS</h1>
                <hr id="line" class="trans--grow hr1">
              </div>
              </a>
            </div>

          </div>

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

              <h1 class="acq" style="margin-bottom:0px;">Work Should Mean Something</h1>
              <h1 class="acq two">Here it means everything.</h1>
            </div>
            <p class="small content-middle transparent">A career with AFCS offers everything you could want in a job: quality of life, career growth opportunities, competitive compensation and benefits, an Award Winning Workplace, and perhaps most importantly, personal satisfaction.</p>

            <p class="small content-bottom transparent">With thousands of employment opportunities at more than 80 domestic and overseas locations, we’re sure there’s a place for you on our team.
            </p>

            <div class="content-last transparent">

              <img src="images5/liner.jpg" id="slideUpLiner3" class="mobile20">

              <h1 class="acq three">Explore Occupations</h1>
            </div>

          </div>
        </div>
      </div>

    </center>
  </section>


  <div style="position:relative;">
    <a name="occupations" style="position:absolute;top:-250px;"></a>

  </div>

  <a href="#bottomOccupations" id="topOccupations"></a>

  <section id="blocks2" class="blocks2">
    <div class="container-fluid">
      <div class="row heros">

        <div class="addShadow">
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
            <div class="parent content-top transparent">
              <a href="acm.php" style="font-size:14px;">
                <img src="images5/acq-her.png" class="img-responsive i1 child">
                <div class="funThing new2" id="b30">
                  <h1 id="topLine5" class="overlayText tlt5">ACQUISITION</h1>
                  <h1 id="topLine5" class="overlayText tlt5">CONTRACT &</h1>
                  <h1 id="topLine2" class="overlayText tlt5">MANAGEMENT</h1>
                  <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
            <div class="parent content-middle transparent">
              <a href="administrative.php" style="font-size:14px;">
                <img src="images5/admin.png" class="img-responsive i2 child">
                <div class="funThing" id="b30">
                  <h1 id="topLine5" class="overlayText tlt6">ADMINISTRATIVE</h1>
                  <h1 id="topLine2" class="overlayText tlt6">& MANAGEMENT</h1>
                  <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
            <div class="parent content-bottom transparent">
              <a href="aircraft.php" style="font-size:14px;">
                <img src="images5/aircraft-new.png" class="img-responsive i3 child">
                <div class="funThing" id="b30">
                  <h1 id="topLine5" class="overlayText tlt7">AIRCRAFT</h1>
                  <h1 id="topLine2" class="overlayText tlt7">MAINTENANCE</h1>
                  <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
            <div class="parent content-last transparent">
              <a href="veterinarian.php" style="font-size:14px;">
                <img src="images5/vet.png" class="img-responsive i88 child">
                <div class="funThing" id="b30">
                  <h1 id="topLine5" class="overlayText tlt8">ANIMAL CARE &</h1>
                  <h1 id="topLine2" class="overlayText tlt8">VETERINARIAN</h1>
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

  <section id="blocks5" class="blocks5">
    <div class="container-fluid">
      <div class="row heros">

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
          <div class="parent content-top transparent">
            <a href="auditing.php" style="font-size:14px;">
              <img src="images5/audit.png" class="img-responsive i1 child">
              <div class="funThing new2" id="b30">
                <h1 id="topLine2" class="overlayText tlt9">AUDITING</h1>

                <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
          <div class="parent content-middle transparent">
            <a href="chaplain.php" style="font-size:14px;">
              <img src="images5/chaplain-square.png" class="img-responsive i2 child">
              <div class="funThing" id="b30">
                <h1 id="topLine2" class="overlayText tlt10">CHAPLAIN</h1>
                <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
              </div>
            </a>
          </a>
        </div>
      </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
          <div class="parent content-bottom transparent">
            <a href="engineering.php" style="font-size:14px;">
              <img src="images5/civil-e.png" class="img-responsive i2 child">
              <div class="funThing" id="b30">
                <h1 id="topLine5" class="overlayText tlt11">CIVIL</h1>
                <h1 id="topLine2" class="overlayText tlt11">ENGINEERING</h1>
                <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
              </div>
            </a>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
        <div class="parent content-last transparent">
          <a href="cyber.php" style="font-size:14px;">
            <img src="images5/cyber.png" class="img-responsive i3 child">
            <div class="funThing" id="b30">
              <h1 id="topLine5" class="overlayText tlt12">CYBER &</h1>
              <h1 id="topLine5" class="overlayText tlt12">INFORMATION</h1>
              <h1 id="topLine2" class="overlayText tlt12">TECHNOLOGY</h1>
              <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
            </div>
          </a>
        </div>
      </div>

      <div class="cursor"></div>
    </div>


  </div>

</section>

<section id="blocks6" class="blocks6">
  <div class="container-fluid">
    <div class="row heros">

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
        <div class="parent content-top transparent">
          <a href="finance.php" style="font-size:14px;">
            <img src="images5/finance-cropped.png" class="img-responsive i88 child">
            <div class="funThing new2" id="b30">
              <h1 id="topLine5" class="overlayText tlt13">FINANCE &</h1>
              <h1 id="topLine2" class="overlayText tlt13">ACCOUNTING</h1>
              <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
        <div class="parent content-middle transparent">
          <a href="fire.php" style="font-size:14px;">
            <img src="images5/fire.png" class="img-responsive i1 child">
            <div class="funThing" id="b30">
              <h1 id="topLine5" class="overlayText tlt14">FIRE</h1>
              <h1 id="topLine2" class="overlayText tlt14">PROTECTION</h1>
              <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
        <div class="parent content-bottom transparent">
          <a href="history-and-museums.php" style="font-size:14px;">
            <img src="images5/history-square.png" class="img-responsive i1 child">
            <div class="funThing" id="b30">
              <h1 id="topLine5" class="overlayText tlt15">HISTORY &</h1>
              <h1 id="topLine2" class="overlayText tlt15">MUSEUMS</h1>
              <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
            </div>
          </a>
        </div>
      </div>


      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
        <div class="parent content-last transparent">
          <a href="international.php" style="font-size:14px;">
            <img src="images5/international-square.png" class="img-responsive i1 child">
            <div class="funThing" id="b30">
              <h1 id="topLine5" class="overlayText tlt16">INTERNATIONAL</h1>
              <h1 id="topLine2" class="overlayText tlt16">AFFAIRS</h1>
              <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
            </div>
          </a>
        </div>
      </div>


      <div class="cursor"></div>
    </div>

  </div>
</section>

<section id="blocks7" class="blocks7">
  <div class="container-fluid">
    <div class="row heros">
      <div id="addShadow2">


        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
          <div class="parent content-top transparent">
            <a href="law.php" style="font-size:14px;">
              <img src="images5/law.png" class="img-responsive i2 child">
              <div class="funThing new2" id="b30">
                <h1 id="topLine5" class="overlayText tlt14">LAW</h1>
                <h1 id="topLine5" class="overlayText tlt14">ENFORCEMENT</h1>
                <h1 id="topLine2" class="overlayText tlt14">& SECURITY</h1>
                <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
              </div>
            </a>
          </div>

        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">

          <div class="parent content-middle transparent">
            <a href="logistics.php" style="font-size:14px;">
              <img src="images5/logistics.png" class="img-responsive i3 child">
              <div class="funThing" id="b30">
                <h1 id="topLine2" class="overlayText tlt15">LOGISTICS</h1>
                <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
              </div>
            </a>
          </div>

        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">

          <div class="parent content-bottom transparent">
            <a href="medical.php" style="font-size:14px;">
              <img src="images5/mental.png" class="img-responsive i88 child">
              <div class="funThing" id="b30">
                <h1 id="topLine5" class="overlayText tlt16">MEDICAL &</h1>
                <h1 id="topLine2" class="overlayText tlt16">MENTAL HEALTH</h1>
                <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
              </div>
            </a>
          </div>
        </div>


        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
          <div class="parent content-last transparent">
            <a href="pilot.php" style="font-size:14px;">
              <img src="images5/pilot.png" class="img-responsive i1 child">
              <div class="funThing" id="b30">
                <h1 id="topLine5" class="overlayText tlt17">PILOT &</h1>
                <h1 id="topLine5" class="overlayText tlt17">SIMULATOR</h1>
                <h1 id="topLine2" class="overlayText tlt17">INSTRUCTORS</h1>
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



<section id="blocks8" class="blocks8">
  <div class="container-fluid">
    <div class="row heros">
      <div id="addShadow2">

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
          <div class="parent content-top transparent">
            <a href="trades.php" style="font-size:14px;">
              <img src="images5/trades.png" class="img-responsive i2 child">
              <div class="funThing new2" id="b30">
                <h1 id="topLine2" class="overlayText tlt00">SKILLED TRADES</h1>
                <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
          <div class="parent content-middle transparent">
            <a href="stem.php" style="font-size:14px;">
              <img src="images5/stem-square.png" class="img-responsive i3 child">
              <div class="funThing" id="b30">
                <h1 id="topLine5" class="overlayText tlt01">STEM</h1>
                <h1 id="topLine2" class="overlayText tlt01">DISCIPLINES</h1>
                <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
          <div class="parent content-bottom transparent">
            <a href="social.php" style="font-size:14px;">
              <img src="images5/social-services.png" class="img-responsive i88 child">
              <div class="funThing" id="b30">
                <h1 id="topLine5" class="overlayText tlt02">SOCIAL</h1>
                <h1 id="topLine2" class="overlayText tlt02">SERVICES</h1>

                <hr style="padding: 1px 0 !important;" id="line" class="trans--grow hr1 grow3">
              </div>
            </a>
          </div>
        </div>


        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-0">
          <div class="parent content-last transparent">
            <a href="weather.php" style="font-size:14px;">
              <img src="images5/weather-square.png" class="img-responsive i88 child">
              <div class="funThing" id="b30">
                <h1 id="topLine2" class="overlayText tlt03">WEATHER</h1>

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

<section class="blocks3">
  <center>

    <div class="container-fluid w800">
      <!-- data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-cubic" -->
      <div class="row heros">

        <div class="col-xs-12 col-lg-12">

          <div class="content-top transparent">

            <img src="images5/liner.jpg" id="slideUpLiner2">

            <h1 class="acq">Discover Where You Fit In</h1>

          </div>

          <div class="content-middle transparent">

            <p class="small">AFCS fills over 600 different occupations to support our mission. The Discovery App is designed to show you how and where you might fit. Select your particular educational background or specific job skills and the app will present a variety of career choices, some of which you might not have considered. Go one step further and see currently available job openings that correspond to your selections.</p>


            <div class="form-group jobTypes">

              <select id="jobCategories" name="jobs" class="form-control" data-live-search="true">
                <option value="" selected="selected">I am interested in</option>
                <option value="Acquisition">Acquisition & Contract Management</option>
                <option value="Administration">Administration & Management</option>
                <option value="Aircraft">Air Craft Maintenance</option>
                <option value="Veterinary">Animal Care and Veterinarian</option>
                <option value="Auditor">Auditing</option>
                <option value="Chaplain">Chaplain</option>
                <option value="Engineer">Civil Engineering</option>
                <option value="Cyber">Cyber & Information Technology</option>
                <option value="Accountant">Finance & Accounting</option>
                <option value="Fire">Fire Protection</option>
                <option value="History">History & Museums</option>
                <option value="International">International Affairs</option>
                <option value="Security">Law Enforcement & Security</option>
                <option value="Logistics">Logistics</option>
                <option value="Medical">Medical & Mental Health</option>
                <option value="Pilot">Pilot & Simulator Instructors</option>
                <option value="Tradesman">Skilled Trades</option>
                <option value="Science">STEM Disciplines</option>
                <option value="Social">Social Services</option>
                <option value="Weather">Weather</option>

              </select>
            </div>

          </div>

          <div id="result">

          </div>


          <div class="content-bottom transparent"><img src="images5/liner.jpg" id="slideUpLiner2" class="mobile0"></div>

        </div>
      </div>
    </div>
  </center>
</section>



<div id="fsModal100" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-body">
        <div class="modal-footer">
          <div data-dismiss="modal">
            <div class="closeThis"></div>
          </div>

        </div>
        <section id="modalBlock" class="modalBlock">
          <center>
            <div class="container">
              <div class="row w800 heros">
                <div class="col-xs-12 col-lg-12">


                  <div class="content-top transparent">
                    <img src="images5/liner.jpg" id="slideUpLiner2">
                  </div>
                  <div class="content-middle transparent">
                    <div id="newResult">

                    </div>
                    <img src="images5/liner.jpg" id="slideUpLiner3" style="margin-top:5em">
                  </div>


                </div>
              </div>
            </div>
          </center>
        </section>
      </div>

    </div>

  </div>
</div>


<section class="blocks300">
  <center>
    <div class="container-fluid" style="max-width:1000px;">
      <div class="row heros">

        <div class="col-xs-12 col-lg-12">
          <div class="content-top transparent">
            <div class="videoWrapperACQ" style="-webkit-box-shadow: 0px 10px 17px 3px rgba(0,0,0,0.56);-moz-box-shadow: 0px 10px 17px 3px rgba(0,0,0,0.56);box-shadow: 0px 10px 17px 3px rgba(0,0,0,0.56);">
              <iframe src="https://www.youtube.com/embed/eZD80wrSugk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

          </div>
        </div>
      </div>
    </div>
  </center>
</section>



<section class="blocks">
  <center>

    <div class="container-fluid w800">

      <div class="row heros">

        <div class="col-xs-12 col-lg-12">

          <div class="content-top transparent">

            <img src="images5/liner.jpg" id="slideUpLiner2">

            <h1 class="acq">Why AFCS</h1>
          </div>

          <p class="small content-middle transparent">To be the most powerful air force on the planet takes more than the world’s most advanced aircraft and human nerves of steel. It takes excellence in every working task. As an Air Force civilian, you will only become better as you work shoulder to shoulder with Airmen and other civilians—who define dedication, professionalism, and focus in all they do.</p>

          <p class="small content-bottom transparent">Wherever your passion lies you will have the chance to make an impact on the world, working with a team like no other.<p>

            <div class="content-bottom transparent">

              <img src="images5/liner.jpg" id="slideUpLiner3">

            </div>

          </div>
        </div>
      </div>
    </center>
  </section>

  <div style="position:relative;">
    <a name="careerSecondAnchor" style="position:absolute;top:-350px;"></a>

  </div>

  <a href="#bottomSecondAnchor" id="topSecondAnchor"></a>

  <a href="#slideUp" id="slideDown"></a>


  <div id="anchorPointTop2"></div>



  <section id="blocks8" class="blocks8">
    <div class="container-fluid">
      <div class="row heros">

        <div id="addShadow3">

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 padding-0">
            <div class="parent content-top transparent">
              <img id="mobileSmall" src="images5/work-life-balance.png" class="img-responsive i1 new child">
              <div class="funThing new">
                <h1 id="topLine3" class="overlayText tlt00 openIt22">WORK-LIFE</h1>
                <h1 id="topLine4" class="overlayText tlt00 openIt22">BALANCE</h1>
                <hr id="line" class="trans--grow hr1">
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 padding-0">
            <div class="parent content-middle transparent">
              <img id="mobileSmall" src="images5/baby-benefits.png" class="img-responsive i2 new child">
              <div class="funThing">
                <h1 id="topLine3" class="overlayText tlt01 openIt33">FEDERAL</h1>
                <h1 id="topLine4" class="overlayText tlt01 openIt33">BENEFITS</h1>
                <hr id="line" class="trans--grow hr1">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 padding-0">
            <div class="parent content-bottom transparent">
              <img id="mobileSmall" src="images5/professional-growth.png" class="img-responsive i3 new child">
              <div class="funThing">
                <h1 id="topLine3" class="overlayText tlt02 openIt1">PROFESSIONAL</h1>
                <h1 id="topLine4" class="overlayText tlt02 openIt1">GROWTH</h1>
                <hr id="line" class="trans--grow hr1">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </section>




  <div class="slideThisPlease2">
    <div id="myCool2" class="cool2">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-lg-1 col-lg-offset-11">
            <div class="close10"></div>
          </div>
        </div>
      </div>


      <div class="container">
        <center>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">

              <center>

                <div class="container-fluid w800 third">
                  <div class="row heros">

                    <div class="col-xs-12 col-lg-12">


                      <img src="images5/liner.jpg" id="slideUpLiner2">
                      <h1 class="acq">Professional Growth</h1>

                      <p class="small">To help you on your way to a rewarding and exciting career, AFCS offers extensive educational opportunities including on-site training, the chance to attend educational events and programs around the world, and even tuition reimbursement and funding for advanced degrees. To help in planning your career, you will have access to extensive career path planning tools and guidance.</p>


                      <p class="small">As you grow with AFCS, your career can take you places you never imagined with abundant opportunities to expand your skill sets and put them to work at more than 80 locations in the U.S. and overseas. We hire the very best, and we not only want to keep you, we want you to keep getting better.</p>


                      <img src="images5/liner.jpg" id="slideUpLiner3">

                    </div>

                  </div>
                </div>
              </div>
            </center>


          </div>

        </div>
      </center>

    </div>




    <div id="hiddenVideos2">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-lg-1 col-lg-offset-11">
            <div class="close11"></div>
          </div>
        </div>
      </div>


      <div class="container">
        <center>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">

              <center>
                <div class="container-fluid w800 third">
                  <div class="row heros">

                    <div class="col-xs-12 col-lg-12">


                      <img src="images5/liner.jpg" id="slideUpLiner2">
                      <h1 class="acq">Work-Life Balance</h1>


                      <p class="small">At AFCS, we expect you to “work to live” not “live to work.” Maintaining a balance between your professional and personal responsibilities is vital to your happiness and your professional success.</p>

                      <p class="small">You will experience work schedules that are not only predictable, but flexible. A 40-hour workweek is the norm, but it doesn’t always have to be 9 to 5.</p>

                      <p class="small">As an AFCS employee, you will enjoy the peace of mind that comes from knowing that, if an emergency arises, we will be flexible in letting you take time to handle your personal and family needs. Personal and family leave is part of the generous overall leave package our employees enjoy that includes holidays, vacation, and sick time. And you can even save up unused sick leave for unforeseen emergencies.</p>

                      <p class="small">At AFCS, you will likely find yourself working on, or near, a United States Air Force installation, either in the U.S. or at locations around the world. While you will not live on the installation, you will probably notice that a United States Air Force installation is not unlike a small town. It is a self-contained community providing every kind of service: child care, shopping, entertainment, recreation, and more. You will quickly see how close-knit our communities are. AFCS employees often talk of the “sense of family” that they feel working on base. People look out for one another, and they offer support, encouragement, and friendship. Most bases have recreation areas, ball fields and courts, and state-of-the-art fitness facilities. Plus, many bases encourage team members to spend up to three hours a week in some form of fitness activity…on the clock</p>
                      <p class="small">At AFCS, we take care of our people. We want you to enjoy a long and prosperous career with us, so we do what it takes to keep a positive balance between life and work.</p>



                      <img src="images5/liner.jpg" id="slideUpLiner3">



                    </div>
                  </div>
                </div>
              </center>


            </div>

          </div>
        </center>

      </div>

    </div>



    <div id="news2" class="myNews2">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-lg-1 col-lg-offset-11">
            <div class="close12"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <center>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">

              <center>
                <div class="container-fluid w800 third">
                  <div class="row heros">

                    <div class="col-xs-12 col-lg-12">


                      <img src="images5/liner.jpg" id="slideUpLiner2">
                      <h1 class="acq">Federal Benefits</h1>

                      <p class="small">Federal careers are renowned for their exceptional employment benefits, and a career with AFCS is no different. Our health insurance program is a nationally recognized model that offers you choice and flexibility along with a substantial employer contribution to premiums, and you can pay your share of premiums as well as your out-of-pocket costs with pre-tax dollars. You will also be able to choose among several options for life insurance coverage for both you and your family members and have the option to participate in the largest group long-term care insurance program in the country. Our three-part retirement program includes a Social Security benefit, a 401(k)-type plan, and a defined benefit component based on years of employment and salary history.</p>

                      <p class="small">All of these benefits are what we call “portable,” meaning that whatever benefits you accrue with us will transfer to other Federal agencies if you decide to leave AFCS. Furthermore, if your career choices take you to the private sector, those benefits will largely remain intact should you return to employment with AFCS or any other Federal Government agency.</p>



                      <img src="images5/liner.jpg" id="slideUpLiner3">



                    </div>
                  </div>
                </div>
              </center>


            </div>

          </div>
        </center>

      </div>
    </div>

    <a href="#bottomLastAnchor" id="topLastAnchor"></a>
    <div id="anchorPoint2"></div>

    <div style="position:relative;">
      <a name="careerLastAnchor" style="position:absolute;top:-50px;"></a>

    </div>

    <div id="anchorPointTop"></div>


    <section id="blocks9" class="blocks9">
      <div class="container-fluid">
        <div class="row heros mb3" id="addShadowTop">
          <div id="addShadow3" class="centerBlocks">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 padding-0">
              <div class="parent content-top transparent">
                <img src="images5/veterans.png" class="img-responsive i1 new child">
                <div class="funThing new">

                  <h1 id="topLine4" class="overlayText tlt41 openIt2">VETERANS</h1>
                  <hr id="line" class="trans--grow hr1">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 padding-0">
              <div class="parent content-middle transparent">
                <img src="images5/military.png" class="img-responsive i2 new child">
                <div class="funThing">
                  <h1 id="topLine3" class="overlayText tlt42 openIt3">MILITARY</h1>
                  <h1 id="topLine4" class="overlayText tlt42 openIt3">SPOUSES</h1>
                  <hr id="line" class="trans--grow hr1">
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 padding-0">
              <div class="parent content-bottom transparent">
                <img src="images5/disabilities.png" class="img-responsive i3 new child">
                <div class="funThing">
                  <h1 id="topLine3" class="overlayText tlt43 openIt">PERSONS WITH</h1>
                  <h1 id="topLine4" class="overlayText tlt43 openIt">DISABILITIES</h1>
                  <hr id="line" class="trans--grow hr1 grow10">
                </div>
              </div>
            </div>
            <div class="cursor"></div>
          </div>

        </div>
      </div>
    </section>

    <div class="slideThisPlease">
      <div id="myCool" class="cool">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-1 col-lg-offset-11">
              <div class="close"></div>
            </div>
          </div>
        </div>


        <div class="container">
          <center>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-lg-12">

                <center>

                  <div class="container-fluid w800 third">
                    <div class="row heros">

                      <div class="col-xs-12 col-lg-12">


                        <img src="images5/liner.jpg" id="slideUpLiner2">
                        <h1 class="acq">Individuals wih Disabilities</h1>

                        <p class="small">The Air Force Civilian Service (AFCS) hires individuals in nearly all occupational areas and provides numerous opportunities for employment. If you are eligible and qualified, you can apply for available positions. If you are a person with an intellectual disability, a severe physical disability, or a psychiatric disability, you have an additional avenue you can pursue: a Schedule A special hiring authority.</p>


                        <p class="small">The Schedule A authority, specifically Schedule A 5 CFR 213.3102(u), enables AFCS to hire an eligible person in a more direct and stream-lined manner. To be eligible for Schedule A, you must provide a "proof of disability" letter stating that you have an intellectual disability, severe physical disability or psychiatric disability. You can get this letter from your doctor, a licensed medical professional, a licensed vocational rehabilitation specialist, or any federal, state, or local agency that issues or provides disability benefits. You can see sample letters by clicking on <a class="whiteStrong" href="https://www.opm.gov/policy-data-oversight/disability-employment/getting-a-job/sampleschedaletters.pdf" target="_blank">https://www.opm.gov/policy-data-oversight/disability-employment/getting-a-job/sampleschedaletters.pdf.</a></p>

                        <p class="small">When you have the appropriate documentation, you should contact the Air Force Selective Placement Program Coordinator (SPPC) at <a href class="whiteStrong" ="mailto:AFPC.EO.SELECTIVEPLACEMENT@us.af.mil">AFPC.EO.SELECTIVEPLACEMENT@us.af.mil</a> to receive employment assistance and help with the application process. The SPPC will contact and provide your documents to the Disability Program Manager (DPM) or Civilian Personnel Section (CPS) at the local AF installations in which you’re interested. The SPPC will give you the contact information for the local DPM or CPS so you can work more directly with the local officials as they determine if opportunities are available for which they opt to use the Schedule A hiring authority.</p>

                        <p class="small">If you are hired under the Schedule A authority, you may be converted to the competitive service after two years of successful job performance.</p>



                        <p class="small">If you would like to learn more about the Schedule A appointing authority, you can click here <a class="whiteStrong" href="http://www.eeoc.gov/eeoc/initiatives/lead/abcs_of_schedule_a.cfm">http://www.eeoc.gov/eeoc/initiatives/lead/abcs_of_schedule_a.cfm</a> and view "The ABCs of Schedule A for Applicants with Disabilities.”</p>


                        <img src="images5/liner.jpg" id="slideUpLiner2">

                      </div>

                    </div>
                  </div>
                </div>
              </center>


            </div>

          </div>
        </center>

      </div>


      <!-- end the mycool div -->

      <div id="hiddenVideos">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-1 col-lg-offset-11">
              <div class="close3"></div>
            </div>
          </div>
        </div>


        <div class="container">
          <center>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-lg-12">

                <center>
                  <div id="noPadding" class="container-fluid w800 third">
                    <div class="row heros">

                      <div class="col-xs-12 col-lg-12">


                        <img src="images5/liner.jpg" id="slideUpLiner2">
                        <h1 class="acq">Opportunities For Veterans</h1>


                        <p class="small">AFCS is, and has always been, committed to hiring veterans. While there are Federal laws providing hiring preference and special appointing authorities for veterans, more than ever, AFCS recognizes that hiring veterans just makes sense. By actively recruiting veterans, AFCS gains the value of their experience and provides them with a means to continue their service to our country.</p>

                        <p class="small">To meet veterans' employment information needs, the US Office of Personnel Management created a website to act as the pre-eminent source for Federal employment information for Veterans. Visit <a class="whiteStrong" href="FedsHireVets.gov" target="_blank">FedsHireVets.gov</a> for post-military career information.</p>



                        <h1 class="acq two">Veterans’ Recruitment Appointment (VRA)</h1>

                        <p class="small">VRA is an excepted hiring authority that allows AFCS to hire eligible veterans without competition, who meet any of the following requirements:</p>


                        <ul class="whiteList">
                          <li class="whiteList">Served on active duty and received a campaign badge for service during a war or in a campaign or expedition</li>
                          <li class="whiteList">Served on active duty and received an Armed Forces Service Medal for participation in a military operation</li>
                          <li class="whiteList">Have recently separated (within the last three years), and separate under honorable conditions (an honorable or general discharge)</li>

                          <li class="whiteList">Are disabled</li>
                        </ul>



                        <p class="small">Veterans can be given an excepted service appointment under this authority at any grade level up to and including a GS-11 or equivalent. After an individual successfully completes two years of service, that individual will be converted noncompetitively to a career-conditional or career appointment in the competitive service.</p>
                        <h1 class="acq two">Veterans Employment Opportunities Act (VEOA)</h1>


                        <p class="small">Under the VOW to Hire Heroes Act, active duty service members are treated as veterans and given preference-eligible status (when applicable) for purposes of appointment in the competitive service for up to 120 days prior to their actual discharge/release from active duty service.</p>



                        <p class="small">Along with the job application, a service member in this situation submits a “certification,” which is any written document from the armed forces that certifies he or she is expected to be discharged or released from active duty service in the armed forces under honorable conditions not later than 120 days after the date the certification is submitted.</p>
                        <h1 class="acq two">30 Percent or More Disabled Veterans</h1>
                        <p class="small">This hiring authority can be used to make appointments of eligible candidates to any position for which they are qualified, without competition. Unlike the VRA there are no grade-level limitations. Initial appointments are time-limited, lasting more than 60 days; however, the veteran can be converted to permanent status at any time during the time-limited appointment without competition.</p>



                        <p class="small">Eligibility applies to the following categories of veterans:</p>

                        <ul class="whiteList">
                          <li class="whiteList">Disabled veterans who were retired from active military service with a disability rating of 30 percent or more; and</li>
                          <li class="whiteList">Disabled veterans rated by the Department of Veterans Affairs (VA) as having a compensable service-connected disability of 30 percent or more.</li>


                          <li class="whiteList">Are disabled</li>
                        </ul>

                        <img src="images5/liner.jpg" id="slideUpLiner2">



                      </div>
                    </div>
                  </div>
                </center>


              </div>

            </div>
          </center>

        </div>

      </div>

      <!-- this is end of hidden videos -->

      <div id="news" class="myNews">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-1 col-lg-offset-11">
              <div class="close4"></div>
            </div>
          </div>
        </div>

        <div class="container">
          <center>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-lg-12">

                <center>
                  <div id="noPadding" class="container-fluid w800 third">
                    <div class="row heros">

                      <div class="col-xs-12 col-lg-12">


                        <img src="images5/liner.jpg" id="slideUpLiner2">
                        <h1 class="acq">Great News for Military Spouses</h1>

                        <h1 class="acq two">The Civilian Spouse of an Active Duty Airman May be Eligible for Civilian Employment with AFCS.</h1>


                        <p class="small">We are transforming the hiring process for military spouses. Simplified and streamlined, military spouses can now receive priority placement directly when they apply for positions through <a class="whiteStrong" href="USAJOBS.gov" target="_blank">USAJOBS.gov.</a></p>

                        <p class="small">Military spouses are no longer required to go to the local Civilian Personnel Section to register for the Priority Placement Program to exercise their preference for hiring. This was a time-consuming process for spouses and the Automated Stopper and Referral System (ASARS) limited their registration options to only five types of occupational series.</p>



                        <p class="small">Beginning April 1, 2019 in lieu of registration, military spouses will exercise their priority placement preference by applying for vacancies of their choosing on <a class="whiteStrong" href="USAJOBS.gov" target="_blank">USAJOBS.gov.</a>. Current enrollees should have received notification regarding their registration in the Department of Defense (DoD) Priority Placement Program (PPP) and future changes to the program.</p>

                        <p class="small">Military spouses who meet the best qualified standard are referred to the hiring manager with preference and can also be invited to participate in an interview, when applicable. Ultimately, this change standardizes military spouse procedures, simplifies the employment process and empowers military spouses to exercise their preference selectively.</p>



                        <p class="small">This is one of the most positive and exciting changes we have seen in a long time for our military spouses.</p>
                        <p class="small">When submitting an application, military spouses must complete the Military Spouse PPP Self-Certification checklist from Defense Civilian Personnel Advisory Service (DCPAS) website. This form must be submitted each time you apply to a Department of Defense (DoD) position on USAJOBS in order to receive military spouse preference. Click HERE to find this form.</p>




                        <p class="small">For more information on how to exercise your preference when applying for a job, please view this <a class="whiteStrong" href="https://www.dcpas.osd.mil/EC/Advise" target="_blank">WEBSITE</a> or contact the local Civilian Personnel Section.</p>

                        <img src="images5/liner.jpg" id="slideUpLiner2">



                      </div>
                    </div>
                  </div>
                </center>


              </div>

            </div>
          </center>

        </div>

      </div>


      <div id="anchorPoint"></div>



      <section class="blocks500">

        <div class="container-fluid" >
          <div class="row heros">

            <div class="col-xs-12 col-lg-12">
              <div class="content-top transparent">


                <div class="row bottomFlickity">
                  <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12">

                    <div class="topBoxShadow">
                      <div class="m-carousel">
                        <div class="m-carousel__item one">
                          <img id="myImg" class="m-carousel__image" data-flickity-lazyload="images5/careers-slider1.jpg" alt="LANGLEY AIR FORCE BASE, Va. (AFPN) -- Earl Harris adjusts the wing fold of the aerial regional-scale environmental survey of Mars airplane in the NASA 12-foot low-speed tunnel here. The tunnel will test the airplane for stability in various wind conditions and validate its aerodynamics. Mr. Harris is a mechanical engineering technician with the National Aeronautics and Space Administration. (U.S Air Force photo by Staff Sgt. Eric T. Sheler)">
                          <div class="custCaption1"><p class="endDescription">LANGLEY AIR FORCE BASE, Va. (AFPN) -- Earl Harris adjusts the wing fold of the aerial regional-scale environmental survey of Mars airplane in the NASA 12-foot low-speed tunnel here. The tunnel will test the airplane for stability in various wind conditions and validate its aerodynamics. Mr. Harris is a mechanical engineering technician with the National Aeronautics and Space Administration. (U.S Air Force photo by Staff Sgt. Eric T. Sheler)</p></div>
                        </div>

                        <div class="m-carousel__item two">
                          <img id="myImg2" class="m-carousel__image" data-flickity-lazyload="images5/careers-slider2.jpg" alt="Pre-test checks for NASA material sample, ATA Instrumentation Technician Doyle Jones performs a continuity check on the instrumentation inside the Orion Crew Exploration Vehicle heat shield material candidate model prior to a test run in H2. (Photo by Rick Goodfriend)">
                          <div class="custCaption2"><p class="endDescription">Pre-test checks for NASA material sample, ATA Instrumentation Technician Doyle Jones performs a continuity check on the instrumentation inside the Orion Crew Exploration Vehicle heat shield material candidate model prior to a test run in H2. (Photo by Rick Goodfriend)</p></div>
                        </div>

                        <div class="m-carousel__item three">
                          <img id="myImg3" class="m-carousel__image" data-flickity-lazyload="images5/careers-slider4.jpg" alt="Martin Leahy, performed voltage and continuity tests on a Tactical Satellite (TacSat-3) on July 17, 2008. Leahy is a  field engineer, with ATA Aerospace, at  the Space Vehicle Directorate of Air Force Research  Laboratory at Kirtland, Air Force Base, NM.  The TacSat-3 standardization and test mission payload features low-cost/modular interface and a Hyper Spectral Image Sensor/Processor.">
                          <div class="custCaption3"><p class="endDescription">Martin Leahy, performed voltage and continuity tests on a Tactical Satellite (TacSat-3) on July 17, 2008. Leahy is a  field engineer, with ATA Aerospace, at  the Space Vehicle Directorate of Air Force Research  Laboratory at Kirtland, Air Force Base, NM.  The TacSat-3 standardization and test mission payload features low-cost/modular interface and a Hyper Spectral Image Sensor/Processor.</p></div>
                        </div>

                        <div class="m-carousel__item four">
                          <img id="myImg4" class="m-carousel__image" data-flickity-lazyload="images5/careers-slider6.jpg" alt="">
                          <div class="custCaption4"><p class="endDescription"></p></div>
                        </div>

                        <div class="m-carousel__item five">
                          <img id="myImg5" class="m-carousel__image" data-flickity-lazyload="images5/careers-slider7.jpg" alt="The 45th Space Wing supported SpaceX’s successful launch of a Falcon 9 Dragon spacecraft headed to the International Space Station from Space Launch Complex 40 at Cape Canaveral Air Force Station, Fla., July 18, 2016. At about eight minutes after the launch, SpaceX successfully landed the Falcon 9 first-stage booster at Landing Zone 1 on Cape Canaveral AFS. This Falcon 9 Dragon launch was the 13th major launch operation for the Eastern Range this year, and marks the ninth contracted mission by SpaceX under NASA’s commercial resupply services contract. (Courtesy photo/SpaceX)">
                          <div class="custCaption5"><p class="endDescription">The 45th Space Wing supported SpaceX’s successful launch of a Falcon 9 Dragon spacecraft headed to the International Space Station from Space Launch Complex 40 at Cape Canaveral Air Force Station, Fla., July 18, 2016. At about eight minutes after the launch, SpaceX successfully landed the Falcon 9 first-stage booster at Landing Zone 1 on Cape Canaveral AFS. This Falcon 9 Dragon launch was the 13th major launch operation for the Eastern Range this year, and marks the ninth contracted mission by SpaceX under NASA’s commercial resupply services contract. (Courtesy photo/SpaceX)</p></div>
                        </div>

                        <div class="m-carousel__item six">
                          <img id="myImg6" class="m-carousel__image" data-flickity-lazyload="images5/careers-slider8.jpg" alt="B-2 enroute to Utah Test Range for a 32 JDAM wep sep test. F-16 chase with Mr. Don Weiss as pilot, Ms. Bobbi Garcia as photog. Date: Aug 14, 2003.">
                          <div class="custCaption6"><p class="endDescription">B-2 enroute to Utah Test Range for a 32 JDAM wep sep test. F-16 chase with Mr. Don Weiss as pilot, Ms. Bobbi Garcia as photog. Date: Aug 14, 2003.</p></div>
                        </div>



                      </div>
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

                      <div><button type="button" id="getFileC1">Download</button></div>
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


                      <div><button type="button" id="getFileC2">Download</button></div>
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

                      <div><button type="button" id="getFileC3">Download</button></div>
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

                      <div><button type="button" id="getFileC4">Download</button></div>
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

                      <div><button type="button" id="getFileC5">Download</button></div>
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

                      <div><button type="button" id="getFileC6">Download</button></div>
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



      <footer class="site-footer" style="background-color: #0c0f1c;">
        <center>
          <br><br>

          <div class="largeFooter">

            <div class="spaceAround" style="max-width:1200px;">

              <div class="flexCol">
                <ul class="footer-links">
                  <li class="smaller2"><a class="whiteLink two" href="index.php"><strong>Home</strong></a></li>
                  <li class="smaller"><a class="whiteLink" href="index.php#topHomeAnchor">News</a></li>
                  <li class="smaller"><a class="whiteLink" href="index.php#topHomeAnchor">Events</a></li>
                  <li class="smaller"><a class="whiteLink" href="index.php#topHomeAnchor">Videos</a></li>
                  <br>
                  <li class="smaller2"><a class="whiteLink two" href="about.php"><strong>About Us</strong></a></li>
                  <li class="smaller"><a class="whiteLink" href="acquisition.php">Acquisition Force</a></li>
                  <li class="smaller"><a class="whiteLink" href="aftac.php">AFTAC</a></li>
                  <li class="smaller"><a class="whiteLink" href="about.php#diversityAnchor">Diversity & Inclusion</a></li>
                  <li class="smaller"><a class="whiteLink" href="about.php#location">Locations</a></li>
                  <li class="smaller"><a class="whiteLink" href="history.php">History</a></li>
                  <li class="smaller"><a class="whiteLink" href="innovations.php">AFCS Innovations</a></li>
                  <!-- <li class="smaller"><a class="whiteLink" href="index.php#topHomeAnchor">Video Gallery</a></li> -->

                  <!-- <li class="smaller"><img src="images5/liner.jpg" id="slideUpLiner2"></li> -->

                </ul>
              </div>

              <div class="flexCol">

                <ul class="footer-links">
                  <li class="smaller2"><a class="whiteLink two" href="#top" id="bottom"><strong>CAREERS</strong></a></li>
                  <li class="smaller"><a class="whiteLink" href="#topOccupations" id="bottomOccupations">Occupations</a></li>
                  <li class="smaller"><a class="whiteLink" href="find-a-job.php">Job App</a></li>
                  <li class="smaller"><a class="whiteLink" href="students-and-graduates.php">Students & Recent Grads</a></li>
                  <li class="smaller"><a class="whiteLink veterans" href="#topLastAnchor" id="bottomLastAnchor">Veterans</a></li>
                  <li class="smaller"><a class="whiteLink military" href="#topLastAnchor" id="bottomLastAnchor">Military Spouses</a></li>
                  <li class="smaller"><a class="whiteLink disabilities" href="#topLastAnchor" id="bottomLastAnchor">Persons W/ Disabilities</a></li>
                  <li class="smaller"><a class="whiteLink whyAfcs" href="#topLastAnchor" id="bottomLastAnchor">Why AFCS</a></li>
                  <li class="smaller"><a class="whiteLink workLife" href="#topSecondAnchor" id="bottomSecondAnchor">Work Life Balance</a></li>
                  <li class="smaller"><a class="whiteLink training" href="#topSecondAnchor" id="bottomSecondAnchor">Training</a></li>
                  <li class="smaller"><a class="whiteLink security" href="#topSecondAnchor" id="bottomSecondAnchor">Job Security</a></li>
                  <li class="smaller"><a class="whiteLink opportunity" href="#topSecondAnchor" id="bottomSecondAnchor">Opportunity</a></li>
                  <li class="smaller"><a class="whiteLink benefits" href="#topSecondAnchor" id="bottomSecondAnchor">Federal Benefits</a></li>
                </ul>

              </div>
              <div class="flexCol">
                <ul class="footer-links">
                  <li class="smaller2"><a class="whiteLink two" href="find-a-job.php"><strong>Find A Job</strong></a></li>
                  <li class="smaller"><a class="whiteLink" href="find-a-job.php">Job Map</a></li>
                  <li class="smaller"><a class="whiteLink" href="find-a-job.php#applyAnchor">How to Apply</a></li>
                  <br>

                  <li class="smaller2"><a class="whiteLink two" href="contact.php"><strong>CONTACT US</strong></a></li>
                  <li class="smaller"><a class="whiteLink" href="contact.php#linksAnchor">Links</a></li>
                  <li class="smaller"><a class="whiteLink" href="legal.php">Legal</a></li>

                  <li class="smaller"><img src="images5/hashtag.png" class="img-responsive afcsWhite"></li>


                </ul>
              </div>
              <div class="flexCol">
                <ul>


                  <li class="smaller3"><a class="whiteLink" href="https://www.facebook.com/AirForceCivilianService/" target="_blank"><i id="bottomFoot" class="fa fa-facebook-square" aria-hidden="true"></i></a></li>

                  <li class="smaller3"><a class="whiteLink" href="https://www.linkedin.com/company/2619961/" target="_blank"><i id="bottomFoot" class="fa fa-linkedin-square"></i></a></li>

                  <li class="smaller3"><a class="whiteLink" href="https://www.instagram.com/afcivilian/" target="_blank"><i id="bottomFoot" class="fab fa-instagram"></i></a></li>

                  <li class="smaller3"><a class="whiteLink" href="https://twitter.com/afcivilian/" target="_blank"><i id="bottomFoot" class="fa fa-twitter-square" aria-hidden="true"></i></a></li>

                  <li class="smaller3"><a class="whiteLink" href="https://www.youtube.com/channel/UC1L_oa0A2iMfJFuNa44EcFQ" target="_blank"><i id="bottomFoot" class="fa fa-youtube-square"></i></a></li>
                </ul>

              </div>

            </div>


          </div>



          <div class="mobileFooter">
            <div class="flexStart">
              <img src="images5/hashtag.png" class="img-responsive afcsHidden">
            </div>

            <div style="padding-top:2em;" class="container">
              <div class="row">
                <div class="col-md-3">

                  <div class="accordion" id="accordionExample">

                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h4 style="color:white !important;" class="panel-title">
                          <a id="footerB" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            HOME
                          </a>
                        </h4>
                      </div>

                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                          <ul style="padding-top:1em;">
                            <li class="smaller3"><a class="whiteLink" href="index.php#topHomeAnchor">News</a></li>
                            <li class="smaller3"><a class="whiteLink" href="index.php#topHomeAnchor">Events</a></li>
                            <li class="smaller3"><a class="whiteLink" href="index.php#topHomeAnchor">Videos</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h4 style="color:white !important;" class="panel-title">
                          <a id="footerB" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ABOUT US
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                          <ul>
                            <li class="smaller3"><a class="whiteLink" href="acquisition.php">Acquisition Force</a></li>
                            <li class="smaller3"><a class="whiteLink" href="aftac.php">AFTAC</a></li>
                            <li class="smaller3"><a class="whiteLink" href="acquisition.php#diversityAnchor">Diversity & Inclusion</a></li>
                            <li class="smaller3"><a class="whiteLink" href="acquisition.php#locationAnchor">Locations</a></li>
                            <li class="smaller3"><a class="whiteLink" href="about.php#aboutBottomAnchor">History</a></li>
                            <li class="smaller3"><a class="whiteLink" href="about.php#aboutBottomAnchor">AFCS Innovations</a></li>
                            <!-- <li class="smaller3"><a class="whiteLink" href="#top" id="bottom">Video Gallery</a></li> -->

                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h4 style="color:white !important;" class="panel-title">
                          <a id="footerB" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            CAREERS
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                          <ul>
                            <li class="smaller3"><a class="whiteLink" href="#topOccupations" id="bottomOccupations">Occupations</a></li>
                            <li class="smaller3"><a class="whiteLink" href="find-a-job.php">Job App</a></li>
                            <li class="smaller3"><a class="whiteLink" href="students-and-graduates.php">Students & Recent Grads</a></li>
                            <li class="smaller3"><a class="whiteLink veterans" href="#topLastAnchor" id="bottomLastAnchor">Veterans</a></li>
                            <li class="smaller3"><a class="whiteLink military" href="#topLastAnchor" id="bottomLastAnchor">Military Spouses</a></li>
                            <li class="smaller3"><a class="whiteLink disabilities" href="#topLastAnchor" id="bottomLastAnchor">Persons W/ Disabilities</a></li>
                            <li class="smaller3"><a class="whiteLink whyAfcs" href="#topLastAnchor" id="bottomLastAnchor">Why AFCS</a></li>
                            <li class="smaller3"><a class="whiteLink workLife" href="#topSecondAnchor" id="bottomSecondAnchor">Work Life Balance</a></li>
                            <li class="smaller3"><a class="whiteLink training" href="#topSecondAnchor" id="bottomSecondAnchor">Training</a></li>
                            <li class="smaller3"><a class="whiteLink security" href="#topSecondAnchor" id="bottomSecondAnchor">Job Security</a></li>
                            <li class="smaller3"><a class="whiteLink opportunity" href="#topSecondAnchor" id="bottomSecondAnchor">Opportunity</a></li>
                            <li class="smaller3"><a class="whiteLink benefits" href="#topSecondAnchor" id="bottomSecondAnchor">Benefits</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>


                    <div class="card">
                      <div class="card-header" id="headingFour">
                        <h4 style="color:white !important;" class="panel-title">
                          <a id="footerB" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            FIND A JOB
                          </a>
                        </h4>
                      </div>
                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                          <ul>
                            <li class="smaller3"><a class="whiteLink" href="find-a-job.php">Job Map</a></li>
                            <li class="smaller3"><a class="whiteLink" href="find-a-job.php#applyAnchor">How to Apply</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header" id="headingFive">
                        <h4 style="color:white !important;" class="panel-title">
                          <a id="footerB" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            CONTACT US
                          </a>
                        </h4>
                      </div>
                      <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                          <ul>
                            <li class="smaller3"><a class="whiteLink" href="contact.php#linksAnchor">Links</a></li>
                            <li class="smaller3"><a class="whiteLink" href="legal.php">Legal</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header" id="headingSix">
                        <h4 style="color:white !important;" class="panel-title">
                          <a id="footerB" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            SOCIAL
                          </a>
                        </h4>
                      </div>
                      <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                          <ul>
                            <li class="smaller3"><a class="whiteLink" href="https://www.facebook.com/AirForceCivilianService/" target="_blank">Facebook</a></li>
                            <li class="smaller3"><a class="whiteLink" href="https://www.linkedin.com/company/2619961/" target="_blank">LinkedIn</a></li>
                            <li class="smaller3"><a class="whiteLink" href="https://www.instagram.com/afcivilian/" target="_blank">Instagram</a></li>
                            <li class="smaller3"><a class="whiteLink" href="https://twitter.com/afcivilian/" target="_blank" >Twitter</a></li>
                            <li class="smaller3"><a class="whiteLink" href="https://www.youtube.com/channel/UC1L_oa0A2iMfJFuNa44EcFQ" target="_blank">YouTube</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>


                    <div class="card">
                      <div class="card-header" id="headingSeven">
                        <h4 style="color:white !important;" class="panel-title">
                          <a id="footerB" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            LEGAL
                          </a>
                        </h4>
                      </div>
                      <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                        <div class="card-body">
                          <ul>
                            <li class="smaller3"><a class="whiteLink" href="https://prhome.defense.gov/NoFear/" target="_blank">No FEAR Act</a></li>
                            <li class="smaller3"><a class="whiteLink" href="privacy.php">Privacy</a></li>
                            <li class="smaller3"><a class="whiteLink" href="regulatory.php">Regulatory</a></li>
                            <li class="smaller3"><a class="whiteLink" href="accessibility.php">Accessibility</a></li>
                            <li class="smaller3"><a class="whiteLink" href="https://www.usa.gov/" target="_blank">USA.gov</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="middleTablet two">
              <img src="images5/aflogo.png" class="smallAF">
              <p><em>Official United States Air Force Website. The Air Force Civilian Service is an Equal Opportunity Employer.</em></p>
            </div>
          </div>
        </center>

        <div class="row bottomFoot">
          <div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1">
            <center>
              <div style="display:flex;align-items:center;max-width:1100px;">
                <img src="images5/aflogo.png" class="smallAF">
                <p style="padding-top:10px;font-size:13px;">Official United States Air Force Website. The Air Force Civilian Service is an Equal Opportunity Employer.</p>

                <div style="display:flex;justify-content:flex-end;margin-top:2px;">
                  <a class="whiteLink bottom" href="https://prhome.defense.gov/NoFear/" target="_blank" id="same">No FEAR Act</a>
                  <a class="whiteLink bottom" href="privacy.php">Privacy</a>
                  <a class="whiteLink bottom" href="regulatory.php">Regulatory</a>
                  <a class="whiteLink bottom" href="accessibility.php">Accessibility</a>
                  <a class="whiteLink bottom" href="https://www.usa.gov/" target="_blank">USA.gov</a>
                </div>
              </div>
            </center>
          </div>
        </div>


      </footer>

    </div>

    <script
    src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

    <!-- <script src="js5/bootstrap.js"></script> -->
    <script src="js5/bootstrap.min.js"></script>
    <!-- <script src="js5/aos.js"></script> -->
    <!-- <script src="js5/slick.js"></script> -->
    <script src="js5/slick.min.js"></script>


    <script src="js5/TweenMax.min.js"></script>
    <!-- <script src="js5/Draggable.min.js"></script> -->

    <script src="js5/lettering.min.js"></script>
    <!-- <script src="js5/index3.js"></script> -->

    <script src="http://jschr.github.io/textillate/jquery.textillate.js"></script>


    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>



    <script src="js5/scrollTop.js"></script>
    <script src="js5/careers.js"></script>
    <script src="js5/slider2.js"></script>
    <script src="tipuesearch/tipuesearch_set.js"></script>
    <script src="tipuesearch/tipuesearch_content.js"></script>
    <script src="tipuesearch/tipuesearch.js"></script>

    <script>



    var resultContainer = document.querySelector('#result');

    var host = 'data.usajobs.gov';
    var userAgent = 'rodricksnyc@gmail.com';
    var authKey = 'ZVRFnMsfJGJ+6jvGyznqQPRyhF9n5h9jSS259lekdgU=';

    var queryTerm = '';

    var newURL = '';

    var queryURLBase = "https://data.usajobs.gov/api/Search?Organization=AF"

    // queryTerm = ($(this).find("option:selected").val());
    // console.log( queryTerm)

    $("#jobCategories").change(function() {

      if ($(this).val() == 'Acquisition') {
        queryTerm = 'Acquisition';
      }

      if ($(this).val() == 'Administration') {
        queryTerm = 'Administration%20Management';

      }

      if ($(this).val() == 'Aircraft') {
        queryTerm = 'Aircraft';
      }

      if ($(this).val() == 'Veterinary') {
        queryTerm = 'Veterinary%20Veterinarian%20Animal%20Pest';
      }

      if ($(this).val() == 'Auditor') {
        queryTerm = 'Auditor%20Auditing%Audit';
      }


      if ($(this).val() == 'Engineer') {
        queryTerm = 'Civil%20Engineer%20Engineering';
      }


      if ($(this).val() == 'Chaplain') {
        queryTerm = 'Chaplain%20Chaplin';
      }

      if ($(this).val() == 'Cyber') {
        queryTerm = 'Cyber%20Technology';
      }

      if ($(this).val() == 'Accountant') {
        queryTerm = 'Accountant%20Finance';
      }


      if ($(this).val() == 'Fire') {
        queryTerm = 'Fire%20Protection';
      }


      if ($(this).val() == 'History') {
        queryTerm = 'History%20Museums%20Historian%20Curator';
      }

      if ($(this).val() == 'International') {
        queryTerm = 'International%20Affairs%20Foreign';
      }

      if ($(this).val() == 'Security') {
        queryTerm = 'Security%20Law%20Enforcement';
      }

      if ($(this).val() == 'Logistics') {
        queryTerm = 'Logistics';
      }

      if ($(this).val() == 'Medical') {
        queryTerm = 'Medical%20Health%20Psychologist%20Psychiatrist';
      }

      if ($(this).val() == 'Pilot') {
        queryTerm = 'Pilot%20Simulator%20Instructors';
      }

      if ($(this).val() == 'Tradesman') {
        queryTerm = 'HVAC%20Electrician%20Plumber%20Mechanic%20Construction%20Welder';
      }

      if ($(this).val() == 'Science') {
        queryTerm = 'Science%20Technology%20Engineering%20Mathematics';
      }

      if ($(this).val() == 'Social') {
        queryTerm = 'Social%20Services%20Social&Worker';
      }

      if ($(this).val() == 'Weather') {
        queryTerm = 'Meteorologist';
      }


      console.log( queryTerm)
      var newURL = queryURLBase + "&PositionTitle=" + queryTerm;
      console.log(newURL)

      $.ajax({
        url: newURL,
        method: 'GET',
        headers: {
          "Host": host,
          "User-Agent": userAgent,
          "Authorization-Key": authKey
        },
      }).done(function(response) {
        console.log('I am done ', response);
        $('#result').empty();




        //  for (let result in response.SearchResult.SearchResultItems) {
        //  let job = response.SearchResult.SearchResultItems[result].MatchedObjectDescriptor;
        //  console.log('This is result ', job);
        //  let title = job.PositionTitle;
        //  let company = job.OrganizationName;
        //  let location = job.PositionLocationDisplay;
        //  // let link = job.PositionURI;
        //  // $('#result').append(`<h6 class="jobFont">${company}</h6>`);
        //  // $('#result').append(`<h5 class="jobFont">${location}</h5>`);
        //  $("#result").append("<li class='mb7'><h2 class='jobFont'>" + title + "</h2><h6 class='jobFont'>" + company + "</h6><h5 class='jobFont'>" + location + "</h5><button id='showApi' class='btn btn-modal' data-toggle='modal' data-target='#fsModal100'>Learn More</button></li>");
        // }

        //elizabeth, add the dontShow class back on to the div above.... dont forget

        var outsideTitle, outsideDescription, outsideSummary, outsideLink;
        for (let result in response.SearchResult.SearchResultItems) {
          let job = response.SearchResult.SearchResultItems[result].MatchedObjectDescriptor;
          console.log('This is result ', job);
          let title = job.PositionTitle
          outsideTitle = job.PositionTitle;
          let company = job.OrganizationName;
          outsideCompany = job
          let location = job.PositionLocationDisplay;
          let description = job.UserArea.Details.JobSummary;
          outsideDescription = job.UserArea.Details.JobSummary;
          let summary = job.QualificationSummary;
          outsideSummary = job.QualificationSummary;
          let link = job.PositionURI;
          outsideLink = job.PositionURI;
          // $('#result').append(`<h6 class="jobFont">${company}</h6>`);
          // $('#result').append(`<h5 class="jobFont">${location}</h5>`);
          $("#result").append("<li class='mb7'><h2 class='jobFont'>" + title + "</h2><h6 class='jobFont'>" + company + "</h6><h5 class='jobFont'>" + location + "</h5><button id='showApi' class='btn btn-modal' data-toggle='modal' data-target='#fsModal100'>Learn More</button></li>");

        }

        $('#result').on('click', '#showApi', function(){
          $('#newResult').empty();
          $("#newResult").append("<h2 class='jobFont'>" + outsideTitle + "</h2><h4 class='jobFont'>" + outsideDescription + "</h4><div class='dontShow'><h4 class='jobFont2'>" + outsideSummary + "</h4></div><div id='jobButton' class='jobButton'>LEARN MORE</div><div class='jobButton'><a class='jobWhite' href=" + outsideLink + " ' target='_blank'>" + "APPLY NOW" + "</a></div>");

        })

        //
        // <form><div id='jobForm' class='form-group'><input type='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='\*ENTER EMAIL'></div></form>



        console.log(outsideTitle)
        console.log(outsideDescription)
        console.log(outsideLink)



        console.log(response);
      })
      .fail(function(error) {
        console.log(error);
      });


    });


    $('#newResult').on('click', '#jobButton', function(){

      if($(".dontShow").is(':visible')) {
        $("#jobButton").text('LEARN MORE');
        console.log('slide up')
        $(".dontShow").slideUp();


      }

      else if ($(".dontShow").is(':hidden')){
        $("#jobButton").text('LESS')
        console.log('slide no')
        $(".dontShow").slideDown();
      }

    });


    //   $('#result').on('click', '#showApi', function(){
    //
    //     console.log('second api call')
    //
    //
    //
    // console.log( queryTerm)
    // var newURL = queryURLBase + "&PositionTitle=" + queryTerm;
    // console.log(newURL)
    //
    // $.ajax({
    //       url: newURL,
    //       method: 'GET',
    //       headers: {
    //         "Host": host,
    //         "User-Agent": userAgent,
    //         "Authorization-Key": authKey
    //       },
    //     }).done(function(response) {
    //       console.log('I am done ', response);
    //       $('#newResult').empty();
    //
    //        for (let result in response.SearchResult.SearchResultItems) {
    //        let job = response.SearchResult.SearchResultItems[result].MatchedObjectDescriptor;
    //        console.log('This is result ', job);
    //        let title = job.PositionTitle
    //        // let company = job.OrganizationName;
    //        // let location = job.PositionLocationDisplay;
    //        let description = job.QualificationSummary;
    //        let link = job.PositionURI;
    //        // $('#result').append(`<h6 class="jobFont">${company}</h6>`);
    //        // $('#result').append(`<h5 class="jobFont">${location}</h5>`);
    //        $("#newResult").append("<li class='mb7'><h2 class='jobFont'>" + title + "</h2><h4 class='jobFont'>" + description + "</h4><button class='btn btn-default'><a id='showSecond' class='jobFont' href=" + link + " ' target='_blank'>" + "Learn More" + "</a></button></li>");
    //       }
    //
    //       //elizabeth, add the dontShow class back on to the div above.... dont forget
    //
    //       console.log(response);
    //       })
    //       .fail(function(error) {
    //       console.log(error);
    //       });
    //
    //   });


    </script>
  </body>
  </html>
