
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css5/animate.css">
<link rel="stylesheet" href="css5/bootstrap-edited.css">
<link rel="stylesheet" href="css5/bootstrap-theme.min.css">

<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
<link rel="stylesheet" href="css5/normalize.css">
<link type="image/png" href="images5/afcs-favicon.png" rel="icon">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

<link rel=stylesheet href="css/calendar.css">
<link rel=stylesheet href="css/acquisition.css">
<link rel=stylesheet href="css/navbar.css">
<link rel="stylesheet" href="css/afcs-new.css">
<link rel="stylesheet" href="tipuesearch/tipuesearch.css">

<title><?php echo "Air Force Civilian Service 4.0"; ?></title>

</head>
<style>


.whiteList {
    color: white;
    list-style-type: disc !important;
    font-size: 19px !important;
    text-align: left;
    margin-left: -.2em;
}
li.whiteList {
    height: auto !important;
}

.mb0 {
  margin-bottom: 0px !important;
}

a.small {
    font-size: 1em;
    font-weight: 100 !important;
    text-align: left;
    text-decoration: underline;
    line-height: 30px;
    font-family: "Roboto Condensed", sans-serif;
    font-weight: 100 !important;
    color: white;
    margin-bottom: 2em;
    letter-spacing: .04em;
}

.w800 {
  padding-top:0px;
  padding-bottom:0px;
}

.stronger {
  color:white;
  text-decoration: underline;
  font-weight: 600 !important;
  font-size: 18px;
}

.stronger:hover {
  color:white;
  text-decoration: underline;
  font-weight: 600 !important;
  font-size: 18px;
}

.strong {
  font-weight: 600 !important;
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
    <div class="collapse navbar-collapse navbar-right two">
      <ul class="nav navbar-nav navbar-right">
        <li class="searchIt">
         <a class="grayBlock" href="#">
           <i class="fas fa-search"></i>
          </a>
          </li>

          <li>
            <span id="thisSlided" class="bubble noShow">
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
                  <input type="text" name="q" id="tipue_search_input" pattern=".{3,}" title="At least 3 characters" required>
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
      <a class="navbar-brand" href="afcs-homepage.html">
        <img class="img-responsive navLogo" src="images5/afcs-navbar.png">
      </a>
    </div>
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

      <span id="box2">
        <ul class="nav navbar-nav makeToggle tabs" id="menu2">
          <li>
            <a id="list1" class="active highlight fun darker" href="index.php">Home</a>
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
              <a class="social-head" href="https://twitter.com/afcivilian?lang=en" target="_blank" alt="AFCS Twitter">
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

            <li class="allAcross">
              <a id="liSearch" class="highlight three thing" href="#">Search</a>
            </li>

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

<div id="bigThing">


  <div style="position:relative;">
      <a name="topHomeAnchor" style="position:absolute;top:-50px;"></a>
  </div>

  <a href="#bottom" id="top"></a>

      <div id="anchorPoint"></div>


        <section class="blocksTop4" style="margin-top:10em;">
          <center>

            <div class="container-fluid w800">

              <div class="row heros">

                <div class="col-xs-12 col-lg-12">
                  <div class="content-top transparent">
                    <img src="images5/liner.jpg" id="slideUpLiner2">
                    <h1 class="acq mb0">ACCESSIBILITY POLICY</h1>
                    <h1 class="acq two">Introduction</h1>

                  </div>

                  <div class="content-middle transparent">
                        <p class="whiteList">The General Services Administration (GSA) is committed to making all of our Internet documents accessible to everyone. To ensure that we meet or exceed the requirements of the 1998 Amendment to Section 508 of the Rehabilitation Act of 1973, we continually review our site and modify pages to remove accessibility problems for people with disabilities.</p>

                      <p class="whiteList">The documents on our site are in many formats. Many are in ASCII or HTML format, accessible to people who use screen reading software and to those with other vision or mobility impairments. Generally, we use Hypertext Markup Language (HTML) to create pages and documents that are accessible to that segment of our customer base. In creating HTML documents, we follow Section 508 standards; for example, we include alternate text to describe graphics.</p>

                  </div>

                  <div class="content-bottom transparent">

                      <p class="whiteList">Currently, our website contains documents in Adobe Acrobat PDF file format. Most PDF files will be accessible to those who use assistive technology such as screen readers. Some legacy or software created PDF files may not be accessible. If you are experiencing difficulty reading any PDF files please contact the Help Desk at 202-208-7420 and we will be happy to send you an alternate version.</p>

                  </div>

                  <div class="content-last transparent">
                    <p class="whiteList">All applets, plug-ins, or other applications required by GSA webpages that are not included on the specific page are found as links from this page.</p>

                    <p class="whiteList">Most of these links are to non-government sources. GSA does not endorse any of these products; they are listed below for the convenience of our visitors. Address questions about the particular plug-in or file viewer to the respective vendor.</p>
                    <br>
                    <h1 class="acq two">Accessibility Aids: Plug-ins and File Viewer</h1>
                    <br>
                    <ul class="whiteList">
                      <li class="whiteList">Adobe Reader<br>Use Adobe Acrobat to read Portable Document Format (PDF) files.<br><a class="stronger" href="https://get.adobe.com/reader/" target="_blank">Download Adobe Reader</a></li>
                    </ul>

                  </div>

                  </div>

                </div>
              </div>
            </div>
          </center>
        </section>

        <section class="blocks12">
          <center>

            <div class="container-fluid w800">

              <div class="row heros">

                <div class="col-xs-12 col-lg-12">


                  <div class="content-top transparent">
                    <ul class="whiteList">
                      <li class="whiteList">Flash Player<br>Use Adobe Flash player to view Video.<br><a class="stronger" href="https://get.adobe.com/flashplayer/" target="_blank">Download Macromedia Flash Player</a></li>
                    </ul>
                  </div>

                  <div class="content-middle transparent">
                    <ul class="whiteList">
                      <li class="whiteList">Accessible FormNet Software<br>GSA's forms server uses the Accessible FormNet Software.<br><a class="stronger" href="https://www.gsa.gov/?contentId=12455&bodyOnly=true&contentType=GSA_BASIC" target="_blank">Download Accessible FormNet software</a></li>
                    </ul>
                    <br>
                    <h1 class="acq two">What to do if you have trouble</h1>
                  </div>

                  <div class="content-bottom transparent">
                    <p class="whiteList">If you have a problem viewing any material on this site, please contact the web accessibility by email at <a class="stronger" href="mailto:TechSupport@AFciviliancareers.com">TechSupport@AFciviliancareers.com</a></p>

                  <p class="whiteList" style="margin-bottom:45px;">If your problem is a broken link, a link that goes to the wrong page, or other technical problems, please tell us where it is and what happened.</p>


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
                    <p style="margin-bottom:0em;" class="register two">Register here and we’ll keep you informed about the latest job openings.</p>
                  </div>

                  <div class="bluish3 content-middle transparent">
                    <div class="bluishButton"><a class="white" href="roa.php">Register</a></div>
                    <div class="bluishButton"><a class="white" href="careers.php">Careers</a></div>
                    <div class="bluishButton"><a class="white" href="find-a-job.php">Find A Job</a></div>
                  </div>
                </div>
              </div>
            </div>
      </section>





<?php include("footer-include/footer.php"); ?>

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



      <script src="js5/afcs-homepage2.js"></script>
      <script src="js5/scrollTop.js"></script>

      <script src="tipuesearch/tipuesearch_set.js"></script>
      <script src="tipuesearch/tipuesearch_content.js"></script>
      <script src="tipuesearch/tipuesearch.js"></script>


    </body>
    </html>
