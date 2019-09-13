
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

<link rel=stylesheet href="css/videos.css">
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
      <a class="navbar-brand" href="index.php">
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



        <section class="blocksTop" style="margin-top:55px;">
          <center>

            <div class="container-fluid w800">
              <!-- data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-cubic" -->
              <div class="row heros">

                <div class="col-xs-12 col-lg-12">
                  <div class="content-top transparent">
                    <img src="images5/liner.jpg" id="slideUpLiner2">
                    <h1 class="acq">PRIVACY AND SECURITY NOTICE</h1>
                    <ul class="whiteList">
                      <li class="whiteList">AFciviliancareers.com is provided as a public service by the Air Force Personnel Center.</li>
                      <li class="whiteList">Information presented on this service not identified as protected by copyright is considered public information and may be distributed or copied. Use of appropriate byline, photo, and image credits is requested.</li>
                      <li class="whiteList">For site management, <a class="small strong" href="#lastTop" id="lastBottom"><u>information is collected</u></a> for statistical purposes. This U.S. Government computer system uses software programs to create summary statistics, which are used for such purposes as assessing what information is of most and least interest, determining technical design specifications, and identifying system performance or problem areas.</li>
                    </ul>
                  </div>


                  <div class="content-middle transparent">

                    <ul class="whiteList">
                      <li class="whiteList">For site security purposes and to ensure that this service remains available to all users, software programs are employed to monitor network traffic to identify unauthorized attempts to upload or change information, or otherwise cause damage.</li>
                      <li class="whiteList">Except for authorized law enforcement investigations and national security purposes, no other attempts are made to identify individual users or their usage habits beyond DoD websites. Raw data logs are used for no other purposes and are scheduled for regular destruction in accordance with National Archives and Records Administration Guidelines.</li>

                    </ul>
                  </div>

                  <div class="content-bottom transparent">

                    <ul class="whiteList">
                      <li class="whiteList">Web measurement and customization technologies (WMCT) may be used on this site to remember your online interactions, to conduct measurement and analysis of usage, or to customize your experience. The Department of Defense does not use the information associated with WMCT to track individual user activity on the Internet outside of Defense Department websites, nor does it share the data obtained through such technologies, without your explicit consent, with other departments or agencies. The Department of Defense does not keep a database of information obtained from the use of WMCT. General instructions for how you may opt out of some of the most commonly used WMCT is available at <a class="small strong" href="https://www.usa.gov/optout-instructions" target="_blank"><u>http://www.usa.gov/optout_instructions</u></a>
                      </li>
                      <li class="whiteList">Unauthorized attempts to upload information or change information on this site are strictly prohibited and may be punishable under the Computer Fraud and Abuse Act of 1987 and the National Information Infrastructure Protection Act (18 U.S.C. § 1030).</li>
                      <li class="whiteList">If you have any questions or comments about the information presented here, please Contact Us.</li>
                    </ul>
                  </div>
                    <a href="#lastBottom" id="lastTop"></a>
                  <br>

                  <div class="content-last transparent">
                  <h1 class="acq two">Information Collected from afciviliancareers.com<br>for Statistical Purposes, Examples</h1>
                  <ul class="whiteList">
                    <li class="whiteList">xxx.yyy.com -- [28/Jan/2008:00:00:01 -0500] “GET /Defense/news/nr012708.html HTTP/1.0” 200 16704 Mozilla 3.0/www.google.com</li>
                    <li class="whiteList">xxx.yyy.com (or 123.123.23.12)-- this is the host name (or Internet protocol (IP) address) associated with the requester (you as the visitor). In this case, the requester is coming from the xxx.yyy.net address. Depending on the requester's method of network connection, the host name (or IP address) may or may not identify the user’s specific computer. Connections via many Internet Service Providers (ISP) assign different IP addresses for each session, or only connect to the Internet via proxy servers, so the host name may only identify the ISP. The host name (or IP address) may identify a specific computer if that computer has a fixed IP address.</li>
                    <li class="whiteList">[28/Jan/2008:00:00:01 -0500] -- this is the date and time of the request</li>
                    <li class="whiteList">“GET /Defense/news/nr012708.html HTTP/1.0” -- this is the location of the requested file</li>

                  </div>

                  <div class="content-secondLast transparent">
                    <ul class="whiteList">
                      <li class="whiteList">200 -- this is the status code - 200 is OK - the request was filled</li>
                      <li class="whiteList">16704 -- this is the size of the requested file in bytes</li>
                      <li class="whiteList">Mozilla 3.0 -- this identifies the type of browser software used to access the page, which indicates what design parameters to use in constructing the pages</li>
                      <li class="whiteList">www.google.com -- this indicates the last site the person visited, which indicates how people find the requested file.</li>
                      <li class="whiteList">Requests for other types of documents use similar information. Unless otherwise stated, no personally-identifiable information is collected.</li>

                  </div>

                  <br><br>
                  <div class="content-thirdLast transparent">
                    <h1 class="acq two">Other Links</h1>
                    <ul class="whiteList" style="margin-bottom:45px;">
                      <li class="whiteList"><a class="small strong" href="regulatory.php"><u>Regulatory Guidance</u></a></li>
                      <li class="whiteList"><a class="small strong" href="accessibility.php"><u>Accessibility Policy</u></a></li>
                    </ul>

                  <img src="images5/liner.jpg" id="slideUpLiner3">



                  </div>
                  </div>

                </div>
              </div>
            </div>
          </center>
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
