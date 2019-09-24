
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css5/animate.css">
<link rel="stylesheet" href="css5/bootstrap-edited.css">
<link rel="stylesheet" href="css5/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
<link rel="stylesheet" href="css5/normalize.css">
<link type="image/png" href="images5/afcs-favicon.png" rel="icon">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
<link rel=stylesheet href="css/calendar.css">

<link rel=stylesheet href="css/acquisition.css">
<link rel=stylesheet href="css/videos.css">
<link rel=stylesheet href="css/navbar.css">
<link rel="stylesheet" href="css/afcs-new.css">
<link rel="stylesheet" href="tipuesearch/tipuesearch.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

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

#strong {
  font-weight:600 !important;
  margin:0;
  padding:0;
}

.mb20 {
  margin-bottom:20px !important;
}

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
.w800 {
  padding-top:0px;
  padding-bottom: 0px;
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
    <a href='#content' class='skipNav'>Skip to main content</a>
  <div class="preloader-wrap">
    <div class="preloader">
      <div class="loader">

      </div>
    </div>
  </div>

  <a name='content'></a>
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

      <div id="anchorPoint"></div>

        <section class="blocksTop4" style="margin-top:10em;">
          <center>

            <div class="container-fluid w800">

              <div class="row heros">

                <div class="col-xs-12 col-lg-12">
                  <div class="content-top transparent">
                    <img src="images5/liner.jpg" id="slideUpLiner2">
                    <h1 class="acq mb20">LEGAL POLICIES</h1>
                    <h1 class="acq two mb20">About the Air Force Personnel Center (AFPC)</h1>
                  </div>
                  <div class="content-middle transparent">
                    <ul class="whiteList">
                      <li class="whiteList">The Air Force Personnel Center is an Equal Opportunity Employer. Qualified applicants are considered for employment without regard to age, race, color, religion, sex, national origin, sexual orientation, or disability. If you need assistance or an accommodation during the application process because of a disability, it is available upon request. The company is pleased to provide such assistance, and no applicant will be penalized as a result of such a request.</li>

                      <li class="whiteList">In accordance with U.S. codes, Federal agencies are required to have an affirmative program for the recruitment, employment and advancement of disabled veterans. Please visit the <a class="small strong" href="careers.php#careerLastAnchor">Veterans</a> page to learn more.</li>

                    </ul>
                  </div>
                  <br>

                  <div class="content-bottom transparent">
                    <h1 class="acq two mb20">About this Website</h1>
                  </div>

                    <br>
                    <div class="content-last transparent">
                    <ul class="whiteList">
                      <li class="whiteList">This website is provided as a public service by AFPC.</li>
                      <li class="whiteList">The use of hyperlinks does not constitute official or unofficial endorsement (by the Air Force Personnel Center, United States Air Force, Department of Defense, or anyone else) of the external website or the information, products, goods, or services contained or referenced therein. The Air Force Personnel Center does not necessarily exercise any responsibility, oversight, or editorial control over the information you may find at these locations. Such links are provided consistent with the stated purpose of this website. Any hyperlinks provided are not necessarily an all-inclusive list of sources.</li>
                      <li class="whiteList">Information presented on this site is considered public information and may be distributed or copied.</li>
                      <li class="whiteList">For site security purposes and to ensure that this service remains available to all users, this computer system employs software programs to monitor network traffic to identify unauthorized attempts to upload or change information, or otherwise cause damage.</li>
                      <li class="whiteList">Some statistical information is collected for analytical and statistical purposes. This government-sponsored computer system uses software programs to create summary statistics, which are used for such purposes as assessing what information is of most and least interest to visitors of the site, determining technical design specifications, and identifying system performance or problem areas. User-specific information is not collected without the active submission of the user.</li>
                      <li class="whiteList">Please <a class="small strong" href="mailto:techsupport@afciviliancareers.com" alt="let us know about additional link">let us know</a> about existing external links which you believe are inappropriate and about specific additional external links which you believe ought to be included.</li>

                    </ul>
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
                    <h1 class="acq two mb20">About You</h1>
                    <ul class="whiteList">
                      <li class="whiteList">Privacy Act Statement. If you choose to provide us with personal information — like filling out a Contact Us form with e-mail and/or postal addresses — we only use that information to respond to your message or request. We will only share the information you give us with another government agency if your inquiry relates to that agency, or as otherwise required by law. We never create individual profiles or give it to any private organizations. We never collect information for commercial marketing. While you must provide an e-mail address or postal address for a response other than those generated automatically in response to questions or comments that you may submit, we recommend that you NOT include any other personal information, especially Social Security numbers. The Social Security Administration offers additional guidance on sharing your Social Security number.</li>

                      <li class="whiteList">The site may use session cookies or variables, i.e., tokens that remain active only until you close your browser, for site management. When you close your browser, the cookie is deleted from your computer. You can choose not to accept these cookies and still use the site, though some functionality may be limited or fail to perform properly. The help information in your browser software should provide you with instruction on how to disable session cookies.</li>
                      <li class="whiteList">Your interaction with this system is not anonymous. By using this system you are consenting to the monitoring of your activity. Raw data logs will only be used to identify individual users and their usage habits for authorized law enforcement investigations or national security purposes. These logs are used for no other purposes and are scheduled for regular destruction in accordance with National Archives and Records Administration General Schedule 20.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </center>
        </section>



          <a href="#bottom" id="top"></a>
        <br><br>
        <section class="blocks">
          <center>

            <div class="container-fluid w800">

              <div class="row heros">

                <div class="col-xs-12 col-lg-12">

                  <div class="content-top transparent">

                    <h1 class="acq two">Other Policies</h1>


                    <p class="whiteList">Unauthorized attempts to deny service, upload information, change information, or to attempt to access a non-public site from this service are strictly prohibited and may be punishable under Title 18 of the U.S. Code to include the Computer Fraud and Abuse Act of 1986 and the National Information Infrastructure Protection Act.</p>
                  </div>

                  <div class="content-middle transparent">
                    <p class="whiteList">Interested in knowing the Web policies of the Department of Defense? You can read the <a class="small strong" href="https://dodcio.defense.gov/DoD-Web-Policy/" target="_blank">policies here</a>.</p>

                    <p class="small whiteList">If you have any questions or comments about the information presented here, please <a class="small strong" href="contact.php">Contact Us</a>.</p>
                    <img src="images5/liner.jpg" id="slideUpLiner3">
                  </div>

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

      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>





      <script src="calendar-js/list-main.js"></script>

      <script src="js5/afcs-homepage2.js"></script>
      <script src="js5/scrollTop.js"></script>

      <script src="tipuesearch/tipuesearch_set.js"></script>
      <script src="tipuesearch/tipuesearch_content.js"></script>
      <script src="tipuesearch/tipuesearch.js"></script>


    </body>
    </html>
