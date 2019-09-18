<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css5/animate.css">

  <link rel="stylesheet" href="css5/bootstrap-edited.css">

  <link rel="stylesheet" href="css5/bootstrap-theme.min.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">


  <!-- <link rel="stylesheet" href="css5/slick.css">
  <link rel="stylesheet" href="css5/slick-theme.css"> -->
  <link rel="stylesheet" href="css/afcs.css">
  <link rel=stylesheet href="css/acquisition.css">

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
  <link rel="stylesheet" href="css/roa.css">
    <link rel="stylesheet" href="tipuesearch/tipuesearch.css">
	  <title><?php echo "AFCS - Air Force Civilian Service"; ?></title>


</head>
<style>

.panel-default>.panel-heading {
    background-image: transparent !important;
    background-image: transparent !important;
    background-repeat: repeat-x;
    background:#181e2a;
    color:white
}


#listResults .one label,
#listResults .two label,
#listResults .three label,
#listResults .four label,
#listResults .five label {
  display: inline-block;
  vertical-align: middle;
  position: relative;
  padding-left: 5px;
}

#listResults .one label::before,
#listResults .two label::before,
#listResults .three label::before,
#listResults .four label::before,
#listResults .five label::before {
  content: "";
  display: inline-block;
  position: absolute;
  width: 16px;
  height: 16px;
  left: 0;
  margin-left: -20px;
  border: 1px solid #555;
  border-radius: 3px;
  background-color: #fff;
  -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
  -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
  transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
  top:3px;
}

#listResults .one label::after,
#listResults .two label::after,
#listResults .three label::after,
#listResults .four label::after,
#listResults .five label::after {
      display: inline-block;
      position: absolute;
      width: 20px;
      height: 20px;
      left: -16px;
      top: 0px;
      /* margin-left: -17px; */
      padding-left: 0px;
      padding-top: 1px;
      font-size: 8px;
      color: #555555;
      font-weight: 100 !important;
      padding: 1px;
}

#listResults .one input[type="checkbox"],
#listResults .two input[type="checkbox"],
#listResults .three input[type="checkbox"],
#listResults .four input[type="checkbox"],
#listResults .five input[type="checkbox"]   {
  opacity: 0;
  z-index: 1;
  width: 20px;
  height: 20px;
}


#listResults .one input[type="checkbox"]:checked + label::after,
#listResults .two input[type="checkbox"]:checked + label::after,
#listResults .three input[type="checkbox"]:checked + label::after,
#listResults .four input[type="checkbox"]:checked + label::after,
#listResults .five input[type="checkbox"]:checked + label::after{
  font-family: "FontAwesome";
  content: "\f111";
}

#listResults .one label::before,
#listResults .two label::before,
#listResults .three label::before,
#listResults .four label::before,
#listResults .five label::before     {
  border-radius: 50%;
}

#listResults .one {
  margin-top: 0;
}

#listResults .one    input[type="checkbox"]:checked + label::after,
#listResults .one input[type="checkbox"]:checked + label::after,
#listResults .two    input[type="checkbox"]:checked + label::after,
#listResults .two input[type="checkbox"]:checked + label::after,
#listResults .three    input[type="checkbox"]:checked + label::after,
#listResults .three input[type="checkbox"]:checked + label::after,
#listResults .four    input[type="checkbox"]:checked + label::after,
#listResults .four input[type="checkbox"]:checked + label::after,
#listResults .five    input[type="checkbox"]:checked + label::after,
#listResults .five input[type="checkbox"]:checked + label::after

{color: #fff;}

#listResults .one input[type="checkbox"] + label::before,
#listResults .two input[type="checkbox"] + label::before,
#listResults .three input[type="checkbox"] + label::before,
#listResults .four input[type="checkbox"] + label::before,
#listResults .five input[type="checkbox"] + label::before {
  border-color: white;
  background: #181e2a;
}


input[type="checkbox"].styled:checked + label:after {
  font-family: 'FontAwesome';
  content: "\f111";
}


</style>

<body>
<a href='#content' class='skipNav'>Skip to main content</a>

  <div style="background: #1f1e27 !important;" id="site-wrapper">
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
                      <input style="color: #333 !important;" type="text" name="q" id="tipue_search_input" placeholder="Search" pattern=".{3,}" title="At least 3 characters" required>
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

<a name='content'></a>
      <div class="container-fluid">
        <div class="row bottomBoxShadow">
          <div class="col-xs-12 col-lg-12">
            <div id="hero-slider2">
              <div class="hero-slide" style="background-image: url('./images5/roaslider.jpg');">
                <div class="container">
                  <div class="row hero-content acq">
                    <div class="col-sm-12">
                      <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="0.8s">
                        <h1 class="slicker">JOIN THE TEAM</h1>
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

                  <h1 class="acq two">Use your expertise to help protect our nation</h1>
                </div>
                <p class="small content-middle transparent">Air Force Civilian Service (AFCS) employs nearly 170,000 professionals to support and sustain the global mission of the U.S. Air Force.  We employ people in over 600 different occupations that include vital positions around the country and around the globe.</p>

                <p class="small content-bottom transparent">At any given time we have hundreds of job openings—one might be right for you.<p>

                  <p class="small content-last transparent">Please tell us a little about yourself.  Select items that apply to you as well as the jobs or occupations that interest you. Enter your email and get registered to receive news and information about the latest job openings and hiring events.</p>

                <div class="content-secondLast transparent">
                  <img src="images5/liner.jpg" id="slideUpLiner2">
                </div>

                </div>
              </div>
            </div>
          </center>
        </section>







    <div class="container mainContent">
          <div class="row">
            <div class="col-xs-12 col-lg-12">
              <p class="small mb0">Who Are You?</p>

          <div class="accordion last">
              <div class="fields1"></div>
            <dl>
              <dt>
                  <a id="accord" href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger"></a>
                </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">

                <form class="was-validated" id="listResults">
                  <div class="one">
                    <input class="form-check-input" type="checkbox" id="customControlValidation1" value="Professional">
                    <label class="form-check-label" for="customControlValidation1">Professional</label>
                  </div>
                  <div class="one">
                    <input class="form-check-input" type="checkbox" id="customControlValidation2" value="Recent Graduate of a 4 Year College or University">
                    <label class="form-check-label" for="customControlValidation2">Recent Graduate of a 4 Year College or University</label>
                  </div>
                  <div class="one">
                    <input class="form-check-input" type="checkbox" id="customControlValidation3" value="Person with Disabilities">
                    <label class="form-check-label" for="customControlValidation3">Person with Disabilities</label>
                  </div>

                  <div class="one">
                    <input class="form-check-input" name="radio" type="checkbox" id="customControlValidation4" value="Status Applicant (current or former Federal Government Employee)">
                    <label class="form-check-label" for="customControlValidation4">Status Applicant (current or former Federal Government Employee)</label>
                  </div>

                  <div class="one">
                    <input class="form-check-input" name="radio" type="checkbox" id="customControlValidation5" value="Veteran">
                    <label class="form-check-label" for="customControlValidation5">Veteran</label>
                  </div>

                  <div class="one">
                    <input class="form-check-input" name="radio" type="checkbox" id="customControlValidation6" value="Eligible for Military Spouse Preference">
                    <label class="form-check-label" for="customControlValidation6">Eligible for Military Spouse Preference</label>
                  </div>

                  <div class="one">
                    <input class="form-check-input" name="radio" type="checkbox" id="customControlValidation7" value="Internal Applicant (Air Force Civilian Service employee)">
                    <label class="form-check-label" for="customControlValidation7">Internal Applicant (Air Force Civilian Service employee)</label>
                  </div>



                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                        <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Current Student
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body" id="listResults">
                      <div class="one">
                        <input class="form-check-input" type="checkbox" id="customControlValidation8" value="Elementary or Middle School">
                        <label class="form-check-label" for="customControlValidation8">Elementary or Middle School</label>
                      </div>

                      <div class="one">
                        <input class="form-check-input" type="checkbox" id="customControlValidation9" value="High School">
                        <label class="form-check-label" for="customControlValidation9">High School</label>
                      </div>

                      <div class="one">
                        <input class="form-check-input" type="checkbox" id="customControlValidation10" value="High School Senior">
                        <label class="form-check-label" for="customControlValidation10">High School Senior</label>
                      </div>

                      <div class="one">
                        <input class="form-check-input" type="checkbox" id="customControlValidation11" value="College">
                        <label class="form-check-label" for="customControlValidation11">College</label>
                      </div>

                      <div class="one">
                        <input class="form-check-input" type="checkbox" id="customControlValidation12" value="College Senior">
                        <label class="form-check-label" for="customControlValidation12">College Senior</label>
                      </div>

                      <div class="one last">
                        <input class="form-check-input" type="checkbox" id="customControlValidation13" value="Post Graduate">
                        <label class="form-check-label" for="customControlValidation13">Post Graduate</label>
                      </div>

                      </div>
                    </div>
                  </div>

                </div>
              </form>

            <!-- <div class="flexEnd"><button is="addIt" class="btn btn-light">Submit</button></div> -->
              </dd>

            </dl>

          </div>
        </div>
      </div>



      <div class="row">
        <div class="col-xs-12 col-lg-12">
          <p class="small mb0">Your Interests</p>
          <div class="accordion last">
            <div class="fields2"></div>
            <dl>
              <dt>

                  <a id="accord" href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger"></a>


                </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
                <form class="was-validated" id="listResults">

                  <div class="two">
                    <input class="form-check-input" type="checkbox" id="customControlValidation14" value="Civilian Positions at AFCS">
                    <label class="form-check-label" for="customControlValidation14">Civilian Positions at AFCS</label>
                  </div>

                  <div class="two">
                    <input class="form-check-input" type="checkbox" id="customControlValidation15" value="Internships at AFCS">
                    <label class="form-check-label" for="customControlValidation15">Internships at AFCS</label>
                  </div>

                  <div class="two">
                    <input class="form-check-input" type="checkbox" id="customControlValidation16" value="Student Scholarships">
                    <label class="form-check-label" for="customControlValidation16">Student Scholarships</label>
                  </div>

                  <div class="two">
                    <input class="form-check-input" type="checkbox" id="customControlValidation17" value="ROTC">
                    <label class="form-check-label" for="customControlValidation17">AFROTC</label>
                  </div>
<!--
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="customControlValidation18" value="option18">
                    <label class="form-check-label" for="customControlValidation18">ROTC</label>
                  </div> -->

                  <!-- <div class="two">
                    <input class="form-check-input" type="checkbox" id="customControlValidation19" value="Attending USAF Academy">
                    <label class="form-check-label" for="customControlValidation19">Attending USAF Academy</label>
                  </div> -->

                  <div class="two last">
                    <input class="form-check-input" type="checkbox" id="customControlValidation20" value="Military Service with USAF">
                    <label class="form-check-label" for="customControlValidation20">Military Service with USAF</label>
                  </div>

                </form>
              </dd>

            </dl>

          </div>
      </div>
      </div>



      <div class="row">
        <div class="col-xs-12 col-lg-12">
          <p class="small mb0">Career Areas Which You May Be Interested In</p>
          <div class="accordion last">
            <div class="fields3"></div>
            <dl>
              <dt>
                <a id="accord" href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger"></a>
                </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                <form class="was-validated" id="listResults">

                <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                        <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Acquisition
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation21" value="Accountant">
                          <label class="form-check-label" for="customControlValidation21">Accountant</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation22" value="Aerospace Engineer">
                          <label class="form-check-label" for="customControlValidation22">Aerospace Engineer</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation23" value="Bioengineer/Biomedical Engineer">
                          <label class="form-check-label" for="customControlValidation23">Bioengineer/Biomedical Engineer</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation24" value="Budget Analyst">
                          <label class="form-check-label" for="customControlValidation24">Budget Analyst</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation25" value="Business Management Specialist">
                          <label class="form-check-label" for="customControlValidation25">Business Management Specialist</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation26" value="Chemical Engineer">
                          <label class="form-check-label" for="customControlValidation26">Chemical Engineer</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation27" value="Civil Engineer">
                          <label class="form-check-label" for="customControlValidation27">Civil Engineer</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation28" value="Computer Engineer">
                          <label class="form-check-label" for="customControlValidation28">Computer Engineer</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation29" value="Electrical Engineer">
                          <label class="form-check-label" for="customControlValidation29">Electrical Engineer</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation30" value="Engineer">
                          <label class="form-check-label" for="customControlValidation30">Engineer</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation31" value="Engineering Technician">
                          <label class="form-check-label" for="customControlValidation31">Engineering Technician</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation32" value="Environmental Engineer">
                          <label class="form-check-label" for="customControlValidation32">Environmental Engineer</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation33" value="Financial Management Specialist">
                          <label class="form-check-label" for="customControlValidation33">Financial Management Specialist</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation34" value="Financial Manager">
                          <label class="form-check-label" for="customControlValidation34">Financial Manager</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation35" value="General Engineer">
                          <label class="form-check-label" for="customControlValidation35">General Engineer</label>
                        </div>

                        <!-- elizabeth, go back this and fix it when you have time -->


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation36" value="Logistician">
                          <label class="form-check-label" for="customControlValidation36">Logistician</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation37" value="Management Analyst">
                          <label class="form-check-label" for="customControlValidation37">Management Analyst</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation38" value="Mechanical Engineer">
                          <label class="form-check-label" for="customControlValidation38">Mechanical Engineer</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation39" value="Mechanical Engineer">
                          <label class="form-check-label" for="customControlValidation39">Nuclear Engineer</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation40" value="Quality Assurance Specialist">
                          <label class="form-check-label" for="customControlValidation40">Quality Assurance Specialist</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation41" value="Supply Technician">
                          <label class="form-check-label" for="customControlValidation41">Supply Technician</label>
                        </div>

                        <div class="three last">
                          <input class="form-check-input" type="checkbox" id="customControlValidation42" value="Telecommunications Specialist">
                          <label class="form-check-label" for="customControlValidation42">Telecommunications Specialist</label>
                        </div>

                      </div>
                    </div>
                  </div>

                </div>

                <div class="panel-group" id="accordion4" role="tablist" aria-multiselectable="true">

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                      <h4 class="panel-title">
                        <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Administrative/Management
                        </a>
                      </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                      <div class="panel-body">

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation43" value="Administrative Officer">
                          <label class="form-check-label" for="customControlValidation43">Administrative Officer</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation44" value="Administrative Specialist">
                          <label class="form-check-label" for="customControlValidation44">Administrative Specialist</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation45" value="Child Development Specialist">
                          <label class="form-check-label" for="customControlValidation45">Child Development Specialist</label>
                        </div>
                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation46" value="Community Programs Specialist">
                          <label class="form-check-label" for="customControlValidation46">Community Programs Specialist</label>
                        </div>
                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation47" value="Emergency Management Specialist">
                          <label class="form-check-label" for="customControlValidation47">Emergency Management Specialist</label>
                        </div>
                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation48" value="Environmental Protection Specialist">
                          <label class="form-check-label" for="customControlValidation48">Environmental Protection Specialist</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation49" value="Equal Employment Specialist">
                          <label class="form-check-label" for="customControlValidation49">Equal Employment Specialist</label>
                        </div>
                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation50" value="Executive Assistant">
                          <label class="form-check-label" for="customControlValidation50">Executive Assistant</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation51" value="Family Support Specialist">
                          <label class="form-check-label" for="customControlValidation51">Family Support Specialist</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation52" value="Housing Management Assistant">
                          <label class="form-check-label" for="customControlValidation52">Housing Management Assistant</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation53" value="Human Resources Assistant">
                          <label class="form-check-label" for="customControlValidation53">Human Resources Assistant</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation54" value="Human Resources Manager">
                          <label class="form-check-label" for="customControlValidation54">Human Resources Manager</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation55" value="Management Analyst">
                          <label class="form-check-label" for="customControlValidation55">Management Analyst</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation56" value="Management Assistant">
                          <label class="form-check-label" for="customControlValidation56">Management Assistant</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation57" value="Office Assistant">
                          <label class="form-check-label" for="customControlValidation57">Office Assistant</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation58" value="Program Analyst">
                          <label class="form-check-label" for="customControlValidation58">Program Analyst</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation59" value="Program Assistant">
                          <label class="form-check-label" for="customControlValidation59">Program Assistant</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation60" value="Program Manager">
                          <label class="form-check-label" for="customControlValidation60">Program Manager</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation61" value="Program Specialist">
                          <label class="form-check-label" for="customControlValidation61">Program Specialist</label>
                        </div>

                        <div class="three last">
                          <input class="form-check-input" type="checkbox" id="customControlValidation62" value="Secretary">
                          <label class="form-check-label" for="customControlValidation62">Secretary</label>
                        </div>

                      </div>
                    </div>
                  </div>

                </div>

                <div class="panel-group" id="accordion5" role="tablist" aria-multiselectable="true">

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFive">
                      <h4 class="panel-title">
                        <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                          Aircraft Maintenance
                        </a>
                      </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                      <div class="panel-body">

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation63" value="Aircraft Attendant">
                          <label class="form-check-label" for="customControlValidation63">Aircraft Attendant</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation64" value="Aircraft Electrician">
                          <label class="form-check-label" for="customControlValidation64">Aircraft Electrician</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation65" value="Aircraft Engine Mechanic">
                          <label class="form-check-label" for="customControlValidation65">Aircraft Engine Mechanic</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation66" value="Aircraft Engine Mechanic Supervisor">
                          <label class="form-check-label" for="customControlValidation66">Aircraft Engine Mechanic Supervisor</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation67" value="Aircraft Engine Work Inspector">
                          <label class="form-check-label" for="customControlValidation67">Aircraft Engine Work Inspector</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation68" value="Aircraft Maintenance Clerk">
                          <label class="form-check-label" for="customControlValidation68">Aircraft Maintenance Clerk</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation69" value="Aircraft Maintenance Worker">
                          <label class="form-check-label" for="customControlValidation69">Aircraft Maintenance Worker</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation70" value="Aircraft Mechanic">
                          <label class="form-check-label" for="customControlValidation70">Aircraft Mechanic</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation71" value="Aircraft Mechanic Supervisor">
                          <label class="form-check-label" for="customControlValidation71">Aircraft Mechanic Supervisor</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation72" value="Aircraft Ordnance, Systems Mechanic">
                          <label class="form-check-label" for="customControlValidation72">Aircraft Ordnance, Systems Mechanic</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation73" value="Aircraft Overhaul Supervisor">
                          <label class="form-check-label" for="customControlValidation73">Aircraft Overhaul Supervisor</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation74" value="Aircraft Pneudraulic Systems Mechanic">
                          <label class="form-check-label" for="customControlValidation74">Aircraft Pneudraulic Systems Mechanic</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation75" value="Aircraft Support Section Supervisor">
                          <label class="form-check-label" for="customControlValidation75">Aircraft Support Section Supervisor</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation76" value="Aircraft Support and Maintenance Worker">
                          <label class="form-check-label" for="customControlValidation76">Aircraft Support and Maintenance Worker</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation77" value="Aircraft Work Inspector">
                          <label class="form-check-label" for="customControlValidation77">Aircraft Work Inspector</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation78" value="Composites/Plastic Fabricator">
                          <label class="form-check-label" for="customControlValidation78">Composites/Plastic Fabricator</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation79" value="Electrical Equipment Repairer 2854">
                          <label class="form-check-label" for="customControlValidation79">Electrical Equipment Repairer 2854</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation80" value="Electronic Measurement Equipment Mechanic">
                          <label class="form-check-label" for="customControlValidation80">Electronic Measurement Equipment Mechanic</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation81" value="Equipment Cleaner">
                          <label class="form-check-label" for="customControlValidation81">Equipment Cleaner</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation82" value="Fuels Mechanic">
                          <label class="form-check-label" for="customControlValidation82">Fuels Mechanic</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation82" value="Heavy Mobile Equipment Mechanic">
                          <label class="form-check-label" for="customControlValidation82">Heavy Mobile Equipment Mechanic</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation83" value="Instructional Systems Specialist">
                          <label class="form-check-label" for="customControlValidation83">Instructional Systems Specialist</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation84" value="Integrated Avionics Mechanic">
                          <label class="form-check-label" for="customControlValidation84">Integrated Avionics Mechanic</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation85" value="Machinist">
                          <label class="form-check-label" for="customControlValidation85">Machinist</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation86" value="Maintenance Manager">
                          <label class="form-check-label" for="customControlValidation86">Maintenance Manager</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation87" value="Metal Work Group Inspector">
                          <label class="form-check-label" for="customControlValidation87">Metal Work Group Inspector</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation88" value="Metals Technician">
                          <label class="form-check-label" for="customControlValidation88">Metals Technician</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation89" value="Non-Destructive Inspector (NDI)">
                          <label class="form-check-label" for="customControlValidation89">Non-Destructive Inspector (NDI)</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation90" value="Non-Destructive Tester">
                          <label class="form-check-label" for="customControlValidation90">Non-Destructive Tester</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation91" value="Painter">
                          <label class="form-check-label" for="customControlValidation91">Painter</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation92" value="Plans & Scheduling, Production Controller">
                          <label class="form-check-label" for="customControlValidation92">Plans & Scheduling, Production Controller</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation93" value="Pneudraulic Systems Mechanic, Pneumatic Hydraulic Mechanic">
                          <label class="form-check-label" for="customControlValidation93">Pneudraulic Systems Mechanic, Pneumatic Hydraulic Mechanic</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation94" value="Powered Support Systems Mechanic 5378">
                          <label class="form-check-label" for="customControlValidation94">Powered Support Systems Mechanic 5378</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation95" value="Precision Measurement Equipment Calibrator">
                          <label class="form-check-label" for="customControlValidation95">Precision Measurement Equipment Calibrator</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation96" value="Propulsion Mechanic">
                          <label class="form-check-label" for="customControlValidation96">Propulsion Mechanic</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation97" value="Quality Assurance Specialist">
                          <label class="form-check-label" for="customControlValidation97">Quality Assurance Specialist</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation98" value="Sheet Metal Mechanic">
                          <label class="form-check-label" for="customControlValidation98">Sheet Metal Mechanic</label>
                        </div>


                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation99" value="Sheet Metal Mechanic Supervisor">
                          <label class="form-check-label" for="customControlValidation99">Sheet Metal Mechanic Supervisor</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation100" value="Special Weapons System Mechanic">
                          <label class="form-check-label" for="customControlValidation100">Special Weapons System Mechanic</label>
                        </div>

                        <div class="three">
                          <input class="form-check-input" type="checkbox" id="customControlValidation101" value="Tool & Parts Attendants">
                          <label class="form-check-label" for="customControlValidation101">Tool & Parts Attendants</label>
                        </div>

                        <div class="three last">
                          <input class="form-check-input" type="checkbox" id="customControlValidation102" value="Welder">
                          <label class="form-check-label" for="customControlValidation102">Welder</label>
                        </div>


                      </div>
                    </div>
                  </div>

                </div>

          <div class="panel-group" id="accordion6" role="tablist" aria-multiselectable="true">

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingSix">
                <h4 class="panel-title">
                  <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Animal Services
                  </a>
                </h4>
              </div>
              <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                <div class="panel-body">


                  <div class="three">
                    <input class="form-check-input" type="checkbox" id="customControlValidation103" value="Animal Caretaker">
                    <label class="form-check-label" for="customControlValidation103">Animal Caretaker</label>
                  </div>


                  <div class="three">
                    <input class="form-check-input" type="checkbox" id="customControlValidation104" value="Veterinarian">
                    <label class="form-check-label" for="customControlValidation104">Military Working Dog Trainer</label>
                  </div>

                  <div class="three">
                    <input class="form-check-input" type="checkbox" id="customControlValidation105" value="Veterinarian">
                    <label class="form-check-label" for="customControlValidation105">Veterinarian</label>
                  </div>


                  <div class="three last">
                    <input class="form-check-input" type="checkbox" id="customControlValidation106" value="Veterinarian">
                    <label class="form-check-label" for="customControlValidation106">Veterinarian Technician</label>
                  </div>

                </div>
              </div>
            </div>

          </div>

          <div class="panel-group" id="accordion7" role="tablist" aria-multiselectable="true">

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingSeven">
                <h4 class="panel-title">
                  <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion7" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Child and Youth Programs
                  </a>
                </h4>
              </div>
              <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                <div class="panel-body">


                  <div class="three">
                    <input class="form-check-input" type="checkbox" id="customControlValidation107" value="Child Development Assistant Director">
                    <label class="form-check-label" for="customControlValidation107">Child Development Assistant Director</label>
                  </div>

                  <div class="three">
                    <input class="form-check-input" type="checkbox" id="customControlValidation108" value="Child Development Director">
                    <label class="form-check-label" for="customControlValidation108">Child Development Director</label>
                  </div>

                  <div class="three">
                    <input class="form-check-input" type="checkbox" id="customControlValidation109" value="Child Development Program Technicianr">
                    <label class="form-check-label" for="customControlValidation109">Child Development Program Technician</label>
                  </div>




                  <div class="three">
                    <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation140" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">School Age Care Coordinator</label>

                  </div>
                  <div class="three">
                    <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation141" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Training and Curriculum Specialist</label>

                  </div>
                  <div class="three last">
                    <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation142" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Youth Program Director</label>

                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="panel-group" id="accordion8" role="tablist" aria-multiselectable="true">

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingEight">
                <h4 class="panel-title">
                  <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion8" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    Cyber/Information Technology
                  </a>
                </h4>
              </div>
              <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                <div class="panel-body">
                  <div class="three">
                    <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation143" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Computer Engineer</label>

                  </div>

                  <div class="three">
                    <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation144" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Computer Scientist</label>

                  </div>
                  <div class="three">
                    <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation145" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Criminal Investigator</label>

                  </div>

                  <div class="three">
                    <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation146" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Cybersecurity Specialist</label>

                  </div>
                  <div class="three">
                    <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation147" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Data Management Analyst</label>

                  </div>
                  <div class="three">
                    <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation148" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Data Manager</label>

                  </div>
                  <div class="three">
                    <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation149" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">IT Specialist</label>

                  </div>

                  <div class="three">
                    <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation150" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Information Technologist</label>

                  </div>

                  <div class="three">
                    <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation151" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Intelligence Specialist</label>

                  </div>
                  <div class="three">
                    <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation152" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Network Specialist</label>

                  </div>
                  <div class="three">
                    <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation153" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Operations Research Analyst</label>

                  </div>
                  <div class="three">
                    <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation154" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Security Specialist</label>

                  </div>
                  <div class="three">
                    <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation155" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Systems Administrator</label>

                  </div>

                  <div class="three">
                    <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation156" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Systems Analyst</label>

                  </div>
                  <div class="three last">
                    <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation157" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Telecommunications Specialist</label>

                  </div>

                </div>
              </div>
            </div>

          </div>


  <div class="panel-group" id="accordion9" role="tablist" aria-multiselectable="true">

    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingNine">
        <h4 class="panel-title">
          <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion9" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
            Education/Air Force Academy College Faculty
          </a>
        </h4>
      </div>
      <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
        <div class="panel-body">
          <div class="three">
            <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation158" name="radio-stacked" required>
            <label class="custom-control-label" for="customControlValidation3">Aeronautical Engineering</label>

          </div>

          <div class="three">
            <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation159" name="radio-stacked" required>
            <label class="custom-control-label" for="customControlValidation3">Behavioral Sciences and Leadership</label>

          </div>
          <div class="three">
            <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation160" name="radio-stacked" required>
            <label class="custom-control-label" for="customControlValidation3">Biology</label>

          </div>

          <div class="three">
            <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation161" name="radio-stacked" required>
            <label class="custom-control-label" for="customControlValidation3">Chemistry</label>

          </div>
          <div class="three">
            <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation162" name="radio-stacked" required>
            <label class="custom-control-label" for="customControlValidation3">Computer Science</label>

          </div>
          <div class="three">
            <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation163" name="radio-stacked" required>
            <label class="custom-control-label" for="customControlValidation3">Economics and Geosciences</label>

          </div>
          <div class="three">
            <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation164" name="radio-stacked" required>
            <label class="custom-control-label" for="customControlValidation3">Electrical and Computer Engineering</label>

          </div>

          <div class="three">
            <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation165" name="radio-stacked" required>
            <label class="custom-control-label" for="customControlValidation3">Engineering Mechanics</label>

          </div>

          <div class="three">
            <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation166" name="radio-stacked" required>
            <label class="custom-control-label" for="customControlValidation3">English and Fine Arts</label>

          </div>
          <div class="three">
            <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation167" name="radio-stacked" required>
            <label class="custom-control-label" for="customControlValidation3">Foreign Languages</label>

          </div>
          <div class="three">
            <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation168" name="radio-stacked" required>
            <label class="custom-control-label" for="customControlValidation3">History</label>

          </div>
          <div class="three">
            <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation169" name="radio-stacked" required>
            <label class="custom-control-label" for="customControlValidation3">Law</label>

          </div>
          <div class="three">
            <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation170" name="radio-stacked" required>
            <label class="custom-control-label" for="customControlValidation3">Management</label>

          </div>

          <div class="three">
            <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation171" name="radio-stacked" required>
            <label class="custom-control-label" for="customControlValidation3">Philosophy</label>

          </div>
          <div class="three last">
            <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation172" name="radio-stacked" required>
            <label class="custom-control-label" for="customControlValidation3">Political Science</label>

          </div>

        </div>
      </div>
    </div>

  </div>


  <div class="panel-group" id="accordion10" role="tablist" aria-multiselectable="true">

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTen">
                  <h4 class="panel-title">
                    <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion10" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                      Engineering
                    </a>
                  </h4>
                </div>

                <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                  <div class="panel-body">
                    <div class="three">
                      <input class="form-check-input" type="checkbox" class="custom-control-input" id="customControlValidation173" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Aerospace Engineer</label>

                    </div>

                    <div class="three">
                      <input acquisition class="custom-control-input" id="customControlValidation174" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Bioengineer/Biomedical Engineer</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation175" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Chemical Engineer</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation176" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Civil Engineer</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation177" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Computer Engineer</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation178" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Electrical Engineer</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation179" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Electronics Engineer</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation180" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Engineer</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation181" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Engineering Technician</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation182" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Environmental Engineer</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation183" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">General Engineer</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation184" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Mechanical Engineer</label>

                    </div>
                    <div class="three last">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation185" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Nuclear Engineer</label>

                    </div>


                  </div>
                </div>
              </div>

            </div>

            <div class="panel-group" id="accordion11" role="tablist" aria-multiselectable="true">

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingEleven">
                  <h4 class="panel-title">
                    <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion11" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                      Finance / Accounting / Budgeting
                    </a>
                  </h4>
                </div>

                <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                  <div class="panel-body">
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation186" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Accountant</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation187" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Auditor</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation188" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Budget Analyst</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation189" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Business & Industry (General)</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation190" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Business Management Specialist</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation191" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Contracting Specialist</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation192" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Economist</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation193" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Financial Management Specialist</label>

                    </div>

                    <div class="three last">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation194" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Financial Manager</label>

                    </div>

                  </div>
                </div>
              </div>

            </div>

            <div class="panel-group" id="accordion12" role="tablist" aria-multiselectable="true">

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwelve">
                  <h4 class="panel-title">
                    <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion12" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                      Fire Protection & Safety
                    </a>
                  </h4>
                </div>

                <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
                  <div class="panel-body">
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation195" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Fire Protection Engineer</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation196" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Fire Service Technician</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation197" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Fire Suppression Technician</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation198" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Firefighter</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation199" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Plumber</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation200" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Safety & Occupational Health</label>

                    </div>
                    <div class="three last">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation201" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Safety (General)</label>

                    </div>


                  </div>
                </div>
              </div>

            </div>

            <div class="panel-group" id="accordion13" role="tablist" aria-multiselectable="true">

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThirteen">
                  <h4 class="panel-title">
                    <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion13" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                      Instructor Pilot / Simulator Instructor Pilot
                    </a>
                  </h4>
                </div>

                <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
                  <div class="panel-body">
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation202" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Air Operations Specialist</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation203" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Air Traffic Control Specialist</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation204" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Aircraft Survival and Flight Equipment Repairer</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation205" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Airplane Pilot</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation206" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Airplane Pilot (Simulator Instructor)</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation207" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Electronics Technician (ATCALS)</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation208" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Flight Management Specialist</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation209" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Non-rated Civilian Aviators</label>

                    </div>

                    <div class="three last">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation210" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Operations Flight Clerk/Technician</label>

                    </div>

                  </div>
                </div>
              </div>

            </div>


            <div class="panel-group" id="accordion14" role="tablist" aria-multiselectable="true">

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFourteen">
                  <h4 class="panel-title">
                    <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion14" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                      Law Enforcement / Security
                    </a>
                  </h4>
                </div>

                <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
                  <div class="panel-body">
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation211" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Criminal Investigator</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation212" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Detective</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation213" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Information Security</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation214" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Police Officer</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation215" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Security Assistant</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation216" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Security Guard</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation217" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Security Specialist</label>

                    </div>

                    <div class="three last">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation218" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Supervisory Police Officer</label>

                    </div>


                  </div>
                </div>
              </div>

            </div>


            <div class="panel-group" id="accordion15" role="tablist" aria-multiselectable="true">

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFifteen">
                  <h4 class="panel-title">
                    <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion15" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                      Legal & Social Services
                    </a>
                  </h4>
                </div>

                <div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFifteen">
                  <div class="panel-body">
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation219" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Attorney</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation220" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Family Support Specialist</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation221" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Legal (General)</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation222" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Social Services Assistant</label>

                    </div>
                    <div class="three last">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation223" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Social Worker</label>

                    </div>


                  </div>
                </div>
              </div>

            </div>

            <div class="panel-group" id="accordion16" role="tablist" aria-multiselectable="true">

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSixteen">
                  <h4 class="panel-title">
                    <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion16" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                      Logistics
                    </a>
                  </h4>
                </div>

                <div id="collapseSixteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSixteen">
                  <div class="panel-body">
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation224" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Equipment Services Technician</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation225" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Inventory Management Specialist</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation226" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Logistician</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation227" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Logistics Manager</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation228" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Operations Manager</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation229" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Quality Assurance Specialist</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation230" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Supply Chain Management Specialist</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation231" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Supply Technician</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation232" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Traffic Management Specialist</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation233" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Transportation Operations Specialist</label>

                    </div>
                    <div class="three last">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation234" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Transportation Specialist</label>

                    </div>


                  </div>
                </div>
              </div>

            </div>

            <div class="panel-group" id="accordion17" role="tablist" aria-multiselectable="true">

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSeventeen">
                  <h4 class="panel-title">
                    <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion17" href="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                      Mathematical Science
                    </a>
                  </h4>
                </div>

                <div id="collapseSeventeen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeventeen">
                  <div class="panel-body">
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation235" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Actuarial Analyst</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation236" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Actuary</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation237" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Computer Scientist</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation238" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Cryptanalyst</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation239" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Cryptographer</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation240" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Mathematical Statistician</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation241" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Mathematics Technician</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation242" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Operations Research Analyst</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation243" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Statistical Assistant</label>

                    </div>
                    <div class="three last">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation244" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Statistician</label>

                    </div>


                  </div>
                </div>
              </div>

            </div>

            <div class="panel-group" id="accordion18" role="tablist" aria-multiselectable="true">

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingEighteen">
                  <h4 class="panel-title">
                    <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion18" href="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                      Medical Officer / Physician / Doctor
                    </a>
                  </h4>
                </div>

                <div id="collapseEighteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEighteen">
                  <div class="panel-body">
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation245" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Dentist</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation246" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Emergency Medicine Physician</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation247" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Endocrinologist</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation248" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Family Practice Physician</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation249" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Internal Medicine Physician</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation250" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Medical Officer</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation251" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Occupational Medicine Specialist</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation252" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Ophthalmologist</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation253" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Pediatrician</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation254" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Physician's Assistant</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation255" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Physician-Surgeon</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation256" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Podiatrist</label>

                    </div>
                    <div class="three last">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation257" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Psychiatrist</label>

                    </div>

                  </div>
                </div>
              </div>

            </div>

            <div class="panel-group" id="accordion19" role="tablist" aria-multiselectable="true">

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingNineteen">
                  <h4 class="panel-title">
                    <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion19" href="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                      Medical Services
                    </a>
                  </h4>
                </div>

                <div id="collapseNineteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNineteen">
                  <div class="panel-body">
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation258" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Audiologist/Speech Pathologist</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation259" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Bioengineer/Biomedical Engineer</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation260" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Dental Assistant</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation261" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Dental Hygienist</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation262" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Dental Laboratory Technician</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation263" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Dietician</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation264" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Emergency Management Specialist</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation265" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Health System Specialist</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation266" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Health Technician</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation267" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Health Technician (Audiology)</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation268" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Health Technologist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation269" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Industrial Hygienist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation270" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Infection Control Specialist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation271" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Kinesiotherapist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation272" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Medical Instrument Technician</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation273" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Medical Records Administrator</label>
                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation274" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Medical Records Technician</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation275" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Nursing Assistant</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation276" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Occupational Therapist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation277" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Optometrist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation278" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Orthotist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation279" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Pharmacist</label>
                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation280" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Pharmacy Technician</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation281" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Prosthetist</label>
                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation282" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Psychologist</label>
                    </div>

                    <div class="three last">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation283" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Respiratory Therapist</label>
                    </div>


                  </div>
                </div>
              </div>

            </div>

            <div class="panel-group" id="accordion20" role="tablist" aria-multiselectable="true">

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwenty">
                  <h4 class="panel-title">
                    <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion20" href="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                      Medical Technology
                    </a>
                  </h4>
                </div>

                <div id="collapseTwenty" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwenty">
                  <div class="panel-body">
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation284" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Bioengineer/Biomedical Engineer</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation285" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Cytology Technician</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation286" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Dental Laboratory Technician</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation287" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Diagnostic Radiologic Technologist</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation288" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Health Technician</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation289" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Health Technologist</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation290" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Medical Technologist</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation291" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Nuclear Medical Technician</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation292" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Psychology Technician</label>
                    </div>

                    <div class="three last">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation293" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Therapeutic Radiologic Technologist</label>
                    </div>


                  </div>
                </div>
              </div>

            </div>

            <div class="panel-group" id="accordion21" role="tablist" aria-multiselectable="true">

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwentyOne">
                  <h4 class="panel-title">
                    <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion21" href="#collapseTwentyOne" aria-expanded="false" aria-controls="collapseTwentyOne">
                      Mental Health
                    </a>
                  </h4>
                </div>

                <div id="collapseTwentyOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyOne">
                  <div class="panel-body">
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation294" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Audiologist/Speech Pathologist</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation295" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Clinical Social Worker</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation296" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Occupational Therapist</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation297" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Psychiatrist</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation298" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Psychologist</label>

                    </div>
                    <div class="three last">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation299" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Psychology Technician</label>

                    </div>


                  </div>
                </div>
              </div>

            </div>

            <div class="panel-group" id="accordion22" role="tablist" aria-multiselectable="true">

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwentyTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion22" href="#collapseTwentyTwo" aria-expanded="false" aria-controls="collapseTwentyTwo">
                      Miscellaneous
                    </a>
                  </h4>
                </div>

                <div id="collapseTwentyTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyTwo">
                  <div class="panel-body">
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation300" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Chaplain</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation301" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Education & Training</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation302" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Historian</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation303" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">International Affairs</label>

                    </div>
                    <div class="three last">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation304" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Public Affairs</label>

                    </div>


                  </div>
                </div>
              </div>

            </div>

            <div class="panel-group" id="accordion23" role="tablist" aria-multiselectable="true">

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwentyThree">
                  <h4 class="panel-title">
                    <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion23" href="#collapseTwentyThree" aria-expanded="false" aria-controls="collapseTwentyThree">
                      Nurse
                    </a>
                  </h4>
                </div>

                <div id="collapseTwentyThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyThree">
                  <div class="panel-body">
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation305" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Clinical Nurse</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation306" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Endocrinology Nurse</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation307" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Family Practice Nurse</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation308" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Hematology Nurse</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation309" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">LP (Vocational) Nurse</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation310" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Labor, Delivery, Recovery, Postpartum Nurse</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation311" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Medical/Surgical Nurse</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation312" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Neurology Nurse</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation313" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Nurse</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation314" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Nurse Practitioner</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation315" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Nursing Assistant</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation316" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Nursing Professional and Technical Training Specialist</label>
                    </div>


                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation317" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Obstetrics Nurse</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation318" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Oncology Nurse</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation319" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Pediatrics Nurse</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation320" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Practical Nurse</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation321" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Rheumatology Nurse</label>
                    </div>

                    <div class="three last">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation322" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Women's Health Nurse Practitioner (WHNP)</label>
                    </div>

                  </div>
                </div>
              </div>

            </div>


            <div class="panel-group" id="accordion24" role="tablist" aria-multiselectable="true">

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwentyFour">
                  <h4 class="panel-title">
                    <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion24" href="#collapseTwentyFour" aria-expanded="false" aria-controls="collapseTwentyFour">
                      Physical Science
                    </a>
                  </h4>
                </div>

                <div id="collapseTwentyFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyFour">
                  <div class="panel-body">
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation323" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Astronomer</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation324" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Cartographer</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation325" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Cartographic Technician</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation326" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Chemist</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation327" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Document Analyst</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation328" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Food Technologist</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation329" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Forest Products Technologist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation330" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">General Physical Scientist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation331" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Geodesist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation332" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Geodetic Technician</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation333" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Geologist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation334" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Geophysicist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation335" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Health Physicist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation336" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Hydrologist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation337" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Hydrology Technician</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation338" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Land Surveyor</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation339" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Metallurgist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation340" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Meteorological Technician</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation341" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Meteorologist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation342" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Navigational Information Specialist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation343" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Oceanographer</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation344" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Photographic Technologist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation345" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Physical Science Technician</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation346" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Physicist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation347" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Seismologist</label>
                    </div>

                    <div class="three last">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation348" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Textile Technologist</label>
                    </div>


                  </div>
                </div>
              </div>

            </div>

            <div class="panel-group" id="accordion25" role="tablist" aria-multiselectable="true">

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwentyFive">
                  <h4 class="panel-title">
                    <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion25" href="#collapseTwentyFive" aria-expanded="false" aria-controls="collapseTwentyFive">
                      Skilled Trades
                    </a>
                  </h4>
                </div>

                <div id="collapseTwentyFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyFive">
                  <div class="panel-body">
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation349" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Air Conditioning Equipment Mechanic</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation350" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Air Conditioning Equipment Operator</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation351" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Boiler Plant Equipment Operator/Worker</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation352" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Carpenter</label>

                    </div>
                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation353" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Cement Finisher</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation354" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Composites/Plastic Fabricator</label>

                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation355" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Electrical Equipment Repairer 2854</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation356" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Electrical Worker</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation357" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Electrician</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation358" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Fire Service Technician</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation359" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Food Service Worker</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation360" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Fork Lift Operator</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation361" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Fuel Distribution Worker</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation362" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">HVAC Specialist</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation363" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Heating and Boiler Plant Equipment Mechanic</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation364" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Heavy Mobile Equipment Mechanic</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation365" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">High Voltage Electrician</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation366" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Industrial Equipment Mechanic</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation367" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Insulation Worker</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation368" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Maintenance Mechanic</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation369" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Mason</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation370" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Materials Expediter</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation371" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Materials Handler</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation372" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Motor Vehicle Operator</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation373" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Non-Destructive Tester</label>
                    </div>

                    <div class="three">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation374" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Painter</label>
                    </div>

                    <div class="three last">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation375" name="radio-stacked" required>
                      <label class="custom-control-label" for="customControlValidation3">Pest Controller</label>
                    </div>


                  </div>
                </div>
              </div>

            </div>


            </form>
              </dd>

            </dl>

          </div>



      </div>
      </div>


      <div class="row">
        <div class="col-xs-12 col-lg-12">
          <p class="small mb0">Education</p>
          <div class="accordion last">
              <div class="fields4"></div>
            <dl>
              <dt>
                  <a id="accord" href="#accordion26" aria-expanded="false" aria-controls="accordion26" class="accordion-title accordionTitle js-accordionTrigger"></a>
                </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion26" aria-hidden="true">
                <form class="was-validated" id="listResults">



                  <div class="four">
                    <input class="form-check-input" type="checkbox" id="customControlValidation400" value="Professional">
                    <label class="form-check-label" for="customControlValidation400">Professional</label>
                  </div>

                  <div class="four">
                    <input class="form-check-input" type="checkbox" id="customControlValidation401" value="Recent Graduate of a 4 Year College or University">
                    <label class="form-check-label" for="customControlValidation401">Recent Graduate of a 4 Year College or University</label>
                  </div>




                <div class="four">
                  <input type="checkbox" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                  <label class="custom-control-label" for="customControlValidation3">Person with Disabilities</label>

                </div>
                <div class="four">
                  <input type="checkbox" class="custom-control-input" id="customControlValidation4" name="radio-stacked" required>
                  <label class="custom-control-label" for="customControlValidation3">Status Applicant (current or former Federal Government Employee)</label>

                </div>
                <div class="four">
                  <input type="checkbox" class="custom-control-input" id="customControlValidation5" name="radio-stacked" required>
                  <label class="custom-control-label" for="customControlValidation3">Veteran</label>

                </div>

                <div class="four">
                  <input type="checkbox" class="custom-control-input" id="customControlValidation6" name="radio-stacked" required>
                  <label class="custom-control-label" for="customControlValidation3">Eligible for Military Spouse Preference</label>

                </div>

                <div class="four">
                  <input type="checkbox" class="custom-control-input" id="customControlValidation7" name="radio-stacked" required>
                  <label class="custom-control-label" for="customControlValidation3">Internal Applicant (Air Force Civilian Service employee)</label>

                </div>


                <div class="panel-group" id="accordion27" role="tablist" aria-multiselectable="true">

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwentyseven">
                      <h4 class="panel-title">
                        <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion27" href="#collapseTwentyseven" aria-expanded="false" aria-controls="collapseTwentyseven">
                          Current Student
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwentyseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyseven">
                      <div class="panel-body">
                        <div class="four">
                          <input type="checkbox" class="custom-control-input" id="customControlValidation8" name="radio-stacked" required>
                          <label class="custom-control-label" for="customControlValidation3">Elementary or Middle School</label>

                        </div>

                        <div class="four">
                          <input type="checkbox" class="custom-control-input" id="customControlValidation9" name="radio-stacked" required>
                          <label class="custom-control-label" for="customControlValidation3">High School</label>

                        </div>
                        <div class="four">
                          <input type="checkbox" class="custom-control-input" id="customControlValidation10" name="radio-stacked" required>
                          <label class="custom-control-label" for="customControlValidation3">High School Senior</label>

                        </div>

                        <div class="four">
                          <input type="checkbox" class="custom-control-input" id="customControlValidation11" name="radio-stacked" required>
                          <label class="custom-control-label" for="customControlValidation3">College</label>

                        </div>
                        <div class="four">
                          <input type="checkbox" class="custom-control-input" id="customControlValidation11" name="radio-stacked" required>
                          <label class="custom-control-label" for="customControlValidation3">College Senior</label>

                        </div>
                        <div class="four last">
                          <input type="checkbox" class="custom-control-input" id="customControlValidation12" name="radio-stacked" required>
                          <label class="custom-control-label" for="customControlValidation3">Post Graduate</label>

                        </div>


                      </div>
                    </div>
                  </div>

                </div>


            </form>
              </dd>

            </dl>

          </div>
      </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-lg-12">
            <p class="small mb0">Locations</p>
          <div class="accordion last">
            <dl>
              <dt>
                  <a id="accord" href="#accordion28" aria-expanded="false" aria-controls="accordion28" class="accordion-title accordionTitle js-accordionTrigger"></a>
                </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion28" aria-hidden="true">
                <form class="was-validated" id="listResults">



                <div class="panel-group" id="accordion29" role="tablist" aria-multiselectable="true">

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwentynine">
                      <h4 class="panel-title">
                        <a class="collapsed" id="black" role="button" data-toggle="collapse" data-parent="#accordion29" href="#collapseTwentynine" aria-expanded="false" aria-controls="collapseTwentynine">
                          Current Student
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwentynine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentynine">
                      <div class="panel-body">
                        <div class="custom-control custom-radio">
                          <input type="checkbox" class="custom-control-input" id="customControlValidation8" name="radio-stacked" required>
                          <label class="custom-control-label" for="customControlValidation3">Elementary or Middle School</label>

                        </div>

                        <div class="custom-control custom-radio">
                          <input type="checkbox" class="custom-control-input" id="customControlValidation9" name="radio-stacked" required>
                          <label class="custom-control-label" for="customControlValidation3">High School</label>

                        </div>
                        <div class="custom-control custom-radio">
                          <input type="checkbox" class="custom-control-input" id="customControlValidation10" name="radio-stacked" required>
                          <label class="custom-control-label" for="customControlValidation3">High School Senior</label>

                        </div>

                        <div class="custom-control custom-radio">
                          <input type="checkbox" class="custom-control-input" id="customControlValidation11" name="radio-stacked" required>
                          <label class="custom-control-label" for="customControlValidation3">College</label>

                        </div>
                        <div class="custom-control custom-radio">
                          <input type="checkbox" class="custom-control-input" id="customControlValidation11" name="radio-stacked" required>
                          <label class="custom-control-label" for="customControlValidation3">College Senior</label>

                        </div>
                        <div class="custom-control custom-radio">
                          <input type="checkbox" class="custom-control-input" id="customControlValidation12" name="radio-stacked" required>
                          <label class="custom-control-label" for="customControlValidation3">Post Graduate</label>

                        </div>



                      </div>
                    </div>
                  </div>

                </div>


            </form>
              </dd>

            </dl>

          </div>
      </div>
      </div>


      <div class="row mb4">
          <div class="col-lg-12 col-xs-12">
            <p class="small mb0">What is your email address?</p>
            <form class="pt0">
              <div id='jobForm' class='form-group'>
                <input type='email' class='form-control two' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='*Please Enter Email'></div>
            </form>
            <center>
              <div class='jobButton mt2'>
                <a class='jobWhite' href="">Register</a>
              </div>
            </center>
        </div>
      </div>
        <!-- <div class="flexCenter">

          <form>
            <div id='jobForm' class='form-group'>
              <input type='email' class='form-control two' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='*Please Enter Email'></div>
          </form>


          <div class='jobButton'>
            <a class='jobWhite' href="">Submit</a>
          </div>

      </div> -->
      <div class="flexCenter">
          <div class="col-lg-12 col-xs-12">
            <p><em>You must be a U.S. Citizen to be considered for civilian employment. I understand that by selecting SUBMIT I am giving my permission to be informed about future opportunities.</em></p>
          </div>
      </div>
      </div>


    </div>

<?php include("footer-include/site-footer.php"); ?>
      </div>

      <script src="js5/jquery-3.3.1.min.js"></script>

      <script
      src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>

      <!-- <script src="js5/bootstrap.js"></script> -->
      <script src="js5/bootstrap.min.js"></script>




      <script src="js5/TweenMax.min.js"></script>
      <script src="js5/Draggable.min.js"></script>

      <script src="js5/lettering.min.js"></script>


      <script src="http://jschr.github.io/textillate/jquery.textillate.js"></script>



      <script src="js5/scrollTop.js"></script>
      <script src="js5/roa.js"></script>
      <script src="js5/jquery-3.3.1.min.js"></script>
      <!-- <script src="js5/slick.js"></script> -->
      <script src="js5/slick.min.js"></script>

      <script src="tipuesearch/tipuesearch_set.js"></script>
      <script src="tipuesearch/tipuesearch_content.js"></script>
      <script src="tipuesearch/tipuesearch.js"></script>

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




      <script>

      //
      // $(':radio').change(function (e) {
      //        //clear the div
      //        $('.fields').html('');
      //        //update the div
      //        $(':radio:checked').each(function (ind, ele) {
      //           var value = $(ele).val();
      //            $('.fields').append(`<div class="bubblesAcross"><span class="remove">&#x2715;&nbsp;&nbsp;</span>${value}</div>`);
      //
      //            $('.fields').addClass('selects')
      //
      //            $('.remove').on('click', function() {
      //
      //              $(this).closest(".bubblesAcross").remove();
      //
      //              if(!$('.bubblesAcross').length) {
      //                $('.fields').removeClass('selects')
      //              }
      //
      //            })
      //
      //        });
      //
      //    });


         $(':checkbox').change(function (e) {

                $('.fields1').html('');

                $('.one :checkbox:checked').each(function (ind, ele) {


                   var value = $(ele).val();
                    $('.fields1').append(`<div class="bubblesAcross">${value}</div>`);





                    if (this.checked == true)  {

                      $('.fields1').addClass('selects');
                      console.log('b')

                    }



                });

                $('.fields2').html('');

                $('.two :checkbox:checked').each(function (ind, ele) {
                   var value = $(ele).val();
                    $('.fields2').append(`<div class="bubblesAcross">${value}</div>`);



                    if (this.checked == true)  {
                      $('.fields2').addClass('selects');
                      console.log('b2')

                    }



                });

                $('.fields3').html('');

                $('.three :checkbox:checked').each(function (ind, ele) {
                   var value = $(ele).val();
                    $('.fields3').append(`<div class="bubblesAcross">${value}</div>`);


                    if (this.checked == true)  {
                      $('.fields3').addClass('selects');
                      console.log('b3')

                    }


                });

                $('.fields4').html('');

                $('.four :checkbox:checked').each(function (ind, ele) {
                   var value = $(ele).val();
                    $('.fields4').append(`<div class="bubblesAcross">${value}</div>`);


                    if (this.checked == true)  {
                      $('.fields4').addClass('selects');
                      console.log('b4')

                    }


                });

                $('.fields5').html('');

                $('.five :checkbox:checked').each(function (ind, ele) {
                   var value = $(ele).val();
                    $('.fields5').append(`<div class="bubblesAcross">${value}</div>`);


                    if (this.checked == true)  {
                      $('.fields5').addClass('selects');
                      console.log('b5')

                    }

                });




                // $('#removeThis').on('click', function() {
                //
                //   $(this).closest(".bubblesAcross").remove();
                //
                //
                //
                //
                //
                //   $('.fields1').each(function() {
                //     if ($(this).html()=="") {
                //
                //     $('.fields1').removeClass('selects');
                //     }
                //   });
                //
                //   $('.fields2').each(function() {
                //     if ($(this).html()=="") {
                //     $('.fields2').removeClass('selects');
                //     }
                //   });
                //   $('.fields3').each(function() {
                //     if ($(this).html()=="") {
                //     $('.fields3').removeClass('selects');
                //     }
                //   });
                //   $('.fields4').each(function() {
                //     if ($(this).html()=="") {
                //     $('.fields4').removeClass('selects');
                //     }
                //   });
                //   $('.fields5').each(function() {
                //     if ($(this).html()=="") {
                //     $('.fields5').removeClass('selects');
                //     }
                //   });
                //
                //
                //   })




                $('.fields1').each(function() {
                  if ($(this).html()=="") {

                  $('.fields1').removeClass('selects');
                  }
                });

                $('.fields2').each(function() {
                  if ($(this).html()=="") {
                  $('.fields2').removeClass('selects');
                  }
                });
                $('.fields3').each(function() {
                  if ($(this).html()=="") {
                  $('.fields3').removeClass('selects');
                  }
                });
                $('.fields4').each(function() {
                  if ($(this).html()=="") {
                  $('.fields4').removeClass('selects');
                  }
                });
                $('.fields5').each(function() {
                  if ($(this).html()=="") {
                  $('.fields5').removeClass('selects');
                  }
                });



            });





      (function() {
        var d = document,
          accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
          setAria,
          setAccordionAria,
          switchAccordion,
          touchSupported = ('ontouchstart' in window),
          pointerSupported = ('pointerdown' in window);

        skipClickDelay = function(e) {
          e.preventDefault();
          e.target.click();
        }

        setAriaAttr = function(el, ariaType, newProperty) {
          el.setAttribute(ariaType, newProperty);
        };
        setAccordionAria = function(el1, el2, expanded) {

          switch (expanded) {
            case "true":
              setAriaAttr(el1, 'aria-expanded', 'true');
              setAriaAttr(el2, 'aria-hidden', 'false');
              break;
            case "false":
              setAriaAttr(el1, 'aria-expanded', 'false');
              setAriaAttr(el2, 'aria-hidden', 'true');
              break;
            default:
              break;
          }
        };
        //function
        switchAccordion = function(e) {
          e.preventDefault();
          var thisAnswer = e.target.parentNode.nextElementSibling;
          var thisQuestion = e.target;
          if (thisAnswer.classList.contains('is-collapsed')) {
            setAccordionAria(thisQuestion, thisAnswer, 'true');
          } else {
            setAccordionAria(thisQuestion, thisAnswer, 'false');
          }
          thisQuestion.classList.toggle('is-collapsed');
          thisQuestion.classList.toggle('is-expanded');
          thisAnswer.classList.toggle('is-collapsed');
          thisAnswer.classList.toggle('is-expanded');

          thisAnswer.classList.toggle('animateIn');
        };
        for (var i = 0, len = accordionToggles.length; i < len; i++) {
          if (touchSupported) {
            accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
          }
          if (pointerSupported) {
            accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
          }
          accordionToggles[i].addEventListener('click', switchAccordion, false);
        }
      })();






      </script>
    </body>
    </html>
