<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css5/animate.css">


  <link rel="stylesheet" href="css5/bootstrap-edited.css">
  <!-- <link rel="stylesheet" href="css5/bootstrap-theme.css"> -->
  <link rel="stylesheet" href="css5/bootstrap-theme.min.css">
  <!-- <link rel="stylesheet" href="css5/bootstrap.min.css"> -->


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">


  <link rel="stylesheet" href="css/afcs.css">
  <link rel=stylesheet href="css/about.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
  <link href="css5/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css5/normalize.css">
  <link type="image/png" href="images5/afcs-favicon.png" rel="icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">


  <link rel=stylesheet href="css/calendar.css">
  <link rel=stylesheet href="css/navbar.css">
  <link rel=stylesheet href="css/acquisition.css">
  <link rel=stylesheet href="css/contact.css">
  <link rel="stylesheet" href="tipuesearch/tipuesearch.css">
  <title><?php echo "Air Force Civilian Service 4.0"; ?></title>


</head>

<body>
  <a href="#bottom" id="top"></a>

  <a href="#veryBottom" id="veryTop"></a>
  <div style="background: #262932 !important;" id="site-wrapper">
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
            <a id="list3" class="highlight three thing" href="careers.php">Careers</a>
          </li>
          <li id="list4">
            <a class="highlight four thing" href="find-a-job.php">Find A Job</a>
          </li>
          <li>
            <a id="list5" class="active fun darker highlight five" href="contact.php">Contact</a>
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
                  <input type="text" name="q" id="tipue_search_input" pattern=".{3,}" placeholder="Search" title="At least 3 characters" required="">
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
            <li style="list-style-type:none !important">
              <a href="https://www.facebook.com/AirForceCivilianService/" target="_blank" alt="AFCS Facebook page" class="social-head"><i class="fab fa-facebook"></i>
              </a>
            </li>
            <li style="list-style-type:none !important">
              <a class="social-head" href="https://www.linkedin.com/company/air-force-civilian-service" target="_blank" alt="AFCS LinkedIn page"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
            </li>
            <li style="list-style-type:none !important">
              <a class="social-head" href="https://www.instagram.com/afcivilian/" target="_blank" alt="AFCS Instagram"><i class="fab fa-instagram"></i></a>
            </li>
            <li style="list-style-type:none !important">
              <a class="social-head" href="https://twitter.com/afcivilian/" target="_blank" alt="AFCS Twitter"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            </li>
            <li style="list-style-type:none !important">
              <a class="social-head" href="https://www.youtube.com/channel/UC1L_oa0A2iMfJFuNa44EcFQ" target="_blank" alt="AFCS YouTube link"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
            </li>
          </ul>
        </span>
      </div>
    </div>

  </nav>

  <div id="tipModal">

  </div>

  <div class="container-fluid">
    <div class="row bottomBoxShadow">
      <div class="col-xs-12 col-lg-12">
        <div id="hero-slider2">
          <div class="hero-slide" style="background-image: url('./images5/contact-slider.png');">
            <div class="container">
              <div class="row hero-content acq">
                <div class="col-sm-12">
                  <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="0.8s">
                    <h1 class="slicker">CONTACT US</h1>
                  </div>
                  <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay=".9s">
                    <h1 class="slicker two"></h1>
                  </div>
                  <div class="img-responsive slide-message"  data-animation="fadeInUp" data-delay="1s">
                    <h1 class="slicker three"></h1>
                  </div>
                  <img src="images5/liner.jpg" id="slideUpLiner" class="img-responsive" data-animation="fadeInUpBig" data-delay="1.1s" />
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </div>
  </div>

  <section class="blocksTop">
    <center>
      <div class="container-fluid w800 second">

        <div class="row heros">

          <div class="col-xs-12 col-lg-12">
            <div class="content-top transparent">
              <img src="images5/liner.jpg" id="slideUpLiner2">

              <p class="small">If you have questions that are not answered on this site, please contact us directly at the Total Force Service Center.</p>
            </div>
            <p class="small content-middle transparent">We are available worldwide at <a class="small" href="tel:1-800-525-0102">800-525-0102</a>, through DSN <span class="small">665-0102</span>, or <a class="small" href="tel:1-210-565-0102">210-565-0102</a>, 24 hours a day, seven days a week.</p>

            <p class="small content-bottom transparent">(Closed New Year's Day, Independence Day (July 4), Thanksgiving Day, and Christmas.)<p>

              <div class="content-last transparent">
                <p class="small noMargin2"><span class="strong">Postal Address:</span></p>
                <p class="small noMargin">HQ AFPC/DPDXIDL</p>
                <p class="small noMargin">550 C St West Ste 50</p>
                <p class="small noMargin">JBSA-Randolph, TX 78150-4752</p>
              </div>
              <a href="#bottomLinks" id="topLinks"></a>

              <div style="position:relative;">
                <a name="linksAnchor" style="position:absolute;top:-150px;"></a>
              </div>



              <div class="content-secondLast transparent">
                <p class="small noMargin">
                  <a class="small strong" href="https://www.foia.af.mil/" target="_blank">Freedom of Information Act (FOIA)</a>
                </p>
                <p class="small noMargin">
                  <a class="small strong" href="https://www.afinspectorgeneral.af.mil/" target="_blank">Air Force Inspector General (IG)</a>
                </p>
                <p class="small noMargin">
                  <a class="small strong" href="https://www.adr.af.mil/" target="_blank">Negotiation & Dispute Resolution</a>
                </p>
                <p class="small noMargin">
                  <a class="small strong" href="accessibility.php">Accessibility Policy</a>
                </p>
                <p class="small noMargin">

                  <a class="small strong" href="mailto:techsupport@afciviliancareers.com?Subject='AF Civilian Careers Website Question/Issue'">Webmaster</a>
                </p>

              </div>

              <div class="content-thirdLast transparent">
                <p class="small noMargin">
                  <a class="small strong" href="https://www.defense.gov/our-story/" target="_blank">About Us (Department of Defense)</a>
                </p>
                <p class="small noMargin">
                  <a class="small strong" href="https://cmo.defense.gov/Home/" target="_blank">Department of Defense Annual Performance Plan and Report</a>
                </p>
                <p class="small noMargin">
                  <a class="small strong" href="legal.php">Legal Policies</a>
                </p>
                <p class="small noMargin">
                  <a class="small strong" href="regulatory.php">Regulatory Guidance</a>
                </p>
                <!-- <p class="small noMargin">
                  <a class="small strong" href="https://www.nafjobs.org/" target="_blank">Additional Jobs at Air Force Bases</a>
                </p> -->
                <img src="images5/liner.jpg" id="slideUpLiner3">
              </div>




            </div>
          </div>
        </div>
      </center>
    </section>
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
                <li class="smaller"><a class="whiteLink" href="about.php#anchorPointTop">Video Gallery</a></li>


              </ul>
            </div>

            <div class="flexCol">

              <ul class="footer-links">
                <li class="smaller2"><a class="whiteLink two" href="careers.php"><strong>Careers</strong></a></li>
                <li class="smaller"><a class="whiteLink" href="careers.php#occupations">Occupations</a></li>
                <li class="smaller"><a class="whiteLink" href="find-a-job.php">Job App</a></li>
                <li class="smaller"><a class="whiteLink" href="students-and-graduates.php">Students & Recent Grads</a></li>
                <li class="smaller"><a class="whiteLink" href="careers.php#careerLastAnchor">Veterans</a></li>
                <li class="smaller"><a class="whiteLink" href="careers.php#careerLastAnchor">Military Spouses</a></li>
                <li class="smaller"><a class="whiteLink" href="careers.php#careerLastAnchor">Persons W/ Disabilities</a></li>
                <li class="smaller"><a class="whiteLink" href="careers.php#careerLastAnchor">Why AFCS</a></li>
                <li class="smaller"><a class="whiteLink" href="careers.php#careerSecondAnchor">Work Life Balance</a></li>
                <li class="smaller"><a class="whiteLink" id="openBlock" href="careers.php#careerSecondAnchor">Training</a></li>
                <li class="smaller"><a class="whiteLink" id="openBlock" href="careers.php#careerSecondAnchor">Job Security</a></li>
                <li class="smaller"><a class="whiteLink" id="openBlock" href="careers.php#careerSecondAnchor">Opportunity</a></li>
                <li class="smaller"><a class="whiteLink" href="careers.php#careerSecondAnchor">Federal Benefits</a></li>
              </ul>

            </div>
            <div class="flexCol">
              <ul class="footer-links">
                <li class="smaller2"><a class="whiteLink two" href="find-a-job.php"><strong>Find A Job</strong></a></li>
                <li class="smaller"><a class="whiteLink" href="find-a-job.php">Job Map</a></li>
                <li class="smaller"><a class="whiteLink" href="find-a-job.php#applyAnchor">How to Apply</a></li>
                <br>

                <li class="smaller2"><a class="whiteLink two" href="#top" id="bottom"><strong>Contact Us</strong></a></li>
                <li class="smaller"><a class="whiteLink" href="#topLinks" id="bottomLinks">Links</a></li>
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
                          <li class="smaller3"><a class="whiteLink" href="about.php#diversityAnchor">Diversity & Inclusion</a></li>
                          <li class="smaller3"><a class="whiteLink" href="about.php#location">Locations</a></li>
                          <li class="smaller3"><a class="whiteLink" href="history.php">History</a></li>
                          <li class="smaller3"><a class="whiteLink" href="innovations.php">AFCS Innovations</a></li>
                          <li class="smaller3"><a class="whiteLink" href="about.php#anchorPointTop">Video Gallery</a></li>

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
                          <li class="smaller3"><a class="whiteLink" href="careers.php#occupations">Occupations</a></li>
                          <li class="smaller3"><a class="whiteLink" href="find-a-job.php">Job App</a></li>
                          <li class="smaller3"><a class="whiteLink" href="students-and-graduates.php">Students & Recent Grads</a></li>
                          <li class="smaller3"><a class="whiteLink" href="careers.php#careerLastAnchor">Veterans</a></li>
                          <li class="smaller3"><a class="whiteLink" href="careers.php#careerLastAnchor">Military Spouses</a></li>
                          <li class="smaller3"><a class="whiteLink" href="careers.php#careerLastAnchor">Persons W/ Disabilities</a></li>
                          <li class="smaller3"><a class="whiteLink" href="careers.php#careerLastAnchor">Why AFCS</a></li>
                          <li class="smaller3"><a class="whiteLink" href="careers.php#careerSecondAnchor">Work Life Balance</a></li>
                          <li class="smaller3"><a id="openBlock" class="whiteLink" href="careers.php#careerSecondAnchor">Training</a></li>
                          <li class="smaller3"><a id="openBlock" class="whiteLink" href="careers.php#careerSecondAnchor">Job Security</a></li>
                          <li class="smaller3"><a id="openBlock" class="whiteLink" href="careers.php#careerSecondAnchor">Opportunity</a></li>
                          <li class="smaller3"><a class="whiteLink" href="careers.php#careerSecondAnchor">Federal Benefits</a></li>
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
                          <li class="smaller3"><a class="whiteLink" href="#top" id="bottom">Links</a></li>
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
              <p style="padding-top:10px;font-size:13px;text-align:left">Official United States Air Force Website. The Air Force Civilian Service is an Equal Opportunity Employer.</p>

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

  <script src="js5/jquery-3.3.1.min.js"></script>

  <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <!-- <script src="js5/bootstrap.js"></script> -->
  <script src="js5/bootstrap.min.js"></script>

  <script src="js5/slick.js"></script>
  <script src="js5/slick.min.js"></script>


  <script src="js5/TweenMax.min.js"></script>
  <script src="js5/Draggable.min.js"></script>

  <script src="js5/lettering.min.js"></script>


  <script src="http://jschr.github.io/textillate/jquery.textillate.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>



  <script src="tipuesearch/tipuesearch_set.js"></script>
  <script src="tipuesearch/tipuesearch_content.js"></script>
  <script src="tipuesearch/tipuesearch.js"></script>

  <script src="js5/scrollTop.js"></script>
  <script src="js5/careers.js"></script>


  <script>


  //hero slider

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
      autoplaySpeed: 9000,
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
