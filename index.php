<?php
define('WP_USE_THEMES', false);
include 'blog2/wp-load.php';
?>
<!doctype>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel=stylesheet href="css/calendar.css">

  <link rel=stylesheet href="calendar-css/main-core.css">
  <link rel=stylesheet href="calendar-css/main-daygrid.css">
  <link rel=stylesheet href="calendar-css/main-list.css">

  <link rel=stylesheet href="css/videos.css">
  <link rel=stylesheet href="css/navbar.css">
  <link rel="stylesheet" href="css/afcs-new.css">
  <link rel="stylesheet" href="css/homepage-styles.css">
  <link rel="stylesheet" href="tipuesearch/tipuesearch.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

<title><?php echo "AFCS - Air Force Civilian Service"; ?></title>

</head>

<body>
    <a href='#content' class='skipNav'>Skip to main content</a>
  <div class="preloader-wrap">
    <div class="preloader">
      <div class="loader">
      </div>
    </div>
  </div>

  <div style="background: #0f1932 !important;" id="site-wrapper">
    <a href="#veryBottom" id="veryTop"></a>
    <?php include("nav-include/index-navbar.php"); ?>

    <div id="tipModal">
    </div>


<a name='content'></a>
    <div id="bigThing">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-lg-12">
            <div id="hero-slider" class="mMobile">
              <div class="hero-slide" style="background-image: url('./images5/glasses.jpg');">
                <div class="container">
                  <div class="row hero-content first">
                    <div class="col-sm-12">
                      <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="0.8s">
                        <h1 class="slicker">BE THE ONE</h1>
                      </div>
                      <div class="img-responsive slide-message"  data-animation="fadeInUp" data-delay=".9s">
                        <h1 class="slicker three">to change the world</h1>
                      </div>
                      <img src="images5/liner.jpg" id="slideUpLiner" class="img-responsive" data-animation="fadeInUpBig" data-delay="1s" />
                    </div>
                  </div>
                </div>
              </div>

              <div class="hero-slide" style="background-image: url('./images5/bun-girl.png');">
                <div class="container">
                  <div class="row hero-content first">
                    <div class="col-sm-12">
                      <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="0.8s">
                        <h1 class="slicker">BE THE ONE</h1>
                      </div>
                      <div class="img-responsive slide-message"  data-animation="fadeInUp" data-delay=".9s">
                        <h1 class="slicker three">to make a difference</h1>
                      </div>

                      <img src="images5/liner.jpg" id="slideUpLiner" class="img-responsive" data-animation="fadeInUpBig" data-delay="1s" />

                    </div>

                  </div>
                </div>
              </div>
              <div class="hero-slide" style="background-image: url('./images5/beard.jpg');">
                <div class="container">
                  <div class="row hero-content first">
                    <div class="col-sm-12">
                      <div class="img-responsive slide-message" data-animation="fadeInUp" data-delay="0.8s">
                        <h1 class="slicker">BE THE ONE</h1>
                      </div>
                      <div class="img-responsive slide-message"  data-animation="fadeInUp" data-delay=".9s">
                        <h1 class="slicker three">to defy expectations</h1>
                      </div>
                      <img src="images5/liner.jpg" id="slideUpLiner" class="img-responsive" data-animation="fadeInUpBig" data-delay="1s" />

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div style="position:relative;">
        <a name="topHomeAnchor" style="position:absolute;top:-50px;"></a>
      </div>

      <a href="#bottom" id="top"></a>



      <section class="blocksTop">
        <div class="container-fluid">
          <div class="row heros">
            <div class="centerBlocks">
              <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4 shrink padding-0">
                <div class="parent content-top transparent">
                  <img src="images5/4-block.png" class="img-responsive i1 child">
                  <div class="funThing new" id="b30">
                    <h1 id="topLine4" class="overlayText tlt1 openIt2">VIDEOS</h1>
                    <hr id="line" class="trans--grow hr1">
                  </div>
                </div>
              </div>

              <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4 shrink padding-0">
                <div class="parent content-middle transparent">
                  <img src="images5/5-block.png" class="img-responsive i2 child">
                  <div class="funThing" id="b30">
                    <h1 id="topLine4" class="overlayText tlt2 openIt3">NEWS</h1>
                    <hr id="line" class="trans--grow hr1">
                  </div>
                </div>
              </div>

              <div class="col-sm-4 col-lg-4 col-md-4 col-xs-4 shrink padding-0">
                <div class="parent content-bottom transparent">
                  <img src="images5/6-block.png" class="img-responsive i3 child">
                  <div class="funThing" id="b30">
                    <h1 id="topLine4" class="overlayText tlt3 openIt">EVENTS</h1>
                    <hr id="line" class="trans--grow hr1">
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

              <div class="col-lg-1 col-lg-offset-11 col-md-offset-11 col-md-1 col-sm-offset-11 col-sm-1 col-xs-offset-10 col-xs-1">
                <div style="opacity:1 !important;cursor: pointer !important;margin-bottom:1em !important;" class="close"></div>
              </div>

            </div>
            <div class="row">
              <div class="col-xs-12 col-md-11 col-lg-11 col-sm-11">
                <div id='calendar'>
                </div>

              </div>
            </div>
          </div>

        </div>


        <!-- end the mycool div -->

        <div id="hiddenVideos">

          <div class="container">
            <center>
              <div class="row">
                <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                  <section class="videos" id="featured-videos">
                    <div class="video-grid front-page" id="front-page-videos">
                      <ul class="video-list featured">
                        <li style="height:auto !important;" class="video featured">
                          <a data-fancybox href="https://www.youtube.com/embed/PKtxZJ83Nnc" class="featured-video">
                            <figure style="background-image: url(https://img.youtube.com/vi/PKtxZJ83Nnc/hqdefault.jpg);">
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                              <figcaption>Aircraft Maintenance</figcaption>
                            </figure>
                          </a>
                        </li>
                        <li style="height:auto !important;" class="video featured">
                          <a data-fancybox href="https://www.youtube.com/embed/sm9pmSKMNPg" class="featured-video">
                            <figure style="background-image: url(https://img.youtube.com/vi/sm9pmSKMNPg/hqdefault.jpg);">
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                              <figcaption>Audit</figcaption>
                            </figure>
                          </a>
                        </li>
                        <li style="height:auto !important;" class="video featured">
                          <a data-fancybox href="https://www.youtube.com/embed/AZDUf2q3Qp0" class="featured-video">
                            <figure style="background-image: url(https://img.youtube.com/vi/AZDUf2q3Qp0/hqdefault.jpg);">
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                              <figcaption>Civil Engineering</figcaption>
                            </figure>
                          </a>
                        </li>
                        <li style="height:auto !important;" class="video featured">
                          <a data-fancybox href="https://www.youtube.com/embed/YkzXUXWVJ4o" class="featured-video">
                            <figure style="background-image: url(https://img.youtube.com/vi/YkzXUXWVJ4o/hqdefault.jpg);">
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                              <figcaption>Communications & Information</figcaption>
                            </figure>
                          </a>
                        </li>
                        <li style="height:auto !important;" class="video featured">
                          <a data-fancybox href="https://www.youtube.com/embed/z5QwpFXrx_E" class="featured-video">
                            <figure style="background-image: url(https://img.youtube.com/vi/z5QwpFXrx_E/hqdefault.jpg);">
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                              <figcaption>Contracting</figcaption>
                            </figure>
                          </a>
                        </li>
                        <li style="height:auto !important;" class="video featured">
                          <a data-fancybox href="https://www.youtube.com/embed/_ecx6rEj6U0" class="featured-video">
                            <figure style="background-image: url(https://img.youtube.com/vi/_ecx6rEj6U0/hqdefault.jpg);">
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                              <figcaption>Financial Management</figcaption>
                            </figure>
                          </a>
                        </li>
                        <li style="height:auto !important;" class="video featured">
                          <a data-fancybox href="https://www.youtube.com/embed/DrqeFPSt9Yc" class="featured-video">
                            <figure style="background-image: url(https://img.youtube.com/vi/DrqeFPSt9Yc/hqdefault.jpg);">
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                              <figcaption>Force Support</figcaption>
                            </figure>
                          </a>
                        </li>
                        <li style="height:auto !important;" class="video featured">
                          <a data-fancybox href="https://www.youtube.com/embed/Fi23Aektbi0" class="featured-video">
                            <figure style="background-image: url(https://img.youtube.com/vi/Fi23Aektbi0/hqdefault.jpg);">
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                              <figcaption>Logistics</figcaption>
                            </figure>
                          </a>
                        </li>
                        <li style="height:auto !important;" class="video featured">
                          <a data-fancybox href="https://www.youtube.com/embed/jdF9TF1s8Js" class="featured-video">
                            <figure style="background-image: url(https://img.youtube.com/vi/jdF9TF1s8Js/hqdefault.jpg);">
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                              <figcaption>Medical</figcaption>
                            </figure>
                          </a>
                        </li>
                        <li style="height:auto !important;" class="video featured">
                          <a data-fancybox href="https://www.youtube.com/embed/kNqS2WyA5hE" class="featured-video">
                            <figure style="background-image: url(https://img.youtube.com/vi/kNqS2WyA5hE/hqdefault.jpg);">
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                              <figcaption>Nuclear Weapons Center Jobs</figcaption>
                            </figure>
                          </a>
                        </li>
                        <li style="height:auto !important;" class="video featured">
                          <a data-fancybox href="https://www.youtube.com/embed/Bj7jVHAJflg" class="featured-video">
                            <figure style="background-image: url(https://img.youtube.com/vi/Bj7jVHAJflg/hqdefault.jpg);">
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                              <figcaption>Science & Engineering</figcaption>
                            </figure>
                          </a>
                        </li>
                        <li style="height:auto !important;" class="video featured">
                          <a data-fancybox href="https://www.youtube.com/embed/gGMfmUjZBsw" class="featured-video">
                            <figure style="background-image: url(https://img.youtube.com/vi/gGMfmUjZBsw/hqdefault.jpg);">
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                              <figcaption>Security & Law Enforcement</figcaption>
                            </figure>
                          </a>
                        </li>

                        <li style="height:auto !important;" class="video featured">
                          <a data-fancybox href="https://www.youtube.com/embed/lXtiez6ZCbY" class="featured-video">
                            <figure style="background-image: url(https://img.youtube.com/vi/lXtiez6ZCbY/hqdefault.jpg);">
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                              <figcaption>Forces. Joined.</figcaption>
                            </figure>
                          </a>
                        </li>
                        <li style="height:auto !important;" class="video featured">
                          <a data-fancybox href="https://www.youtube.com/embed/soxXOff3bLw" class="featured-video">
                            <figure style="background-image: url(https://img.youtube.com/vi/soxXOff3bLw/hqdefault.jpg);">
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                              <figcaption>Satisfaction</figcaption>
                            </figure>
                          </a>
                        </li>
                        <li style="height:auto !important;" class="video featured">
                          <a data-fancybox href="https://www.youtube.com/embed/eZD80wrSugk" class="featured-video">
                            <figure style="background-image: url(https://img.youtube.com/vi/eZD80wrSugk/hqdefault.jpg);">
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" />
                              <figcaption>USAF Salutes AFCS</figcaption>
                            </figure>
                          </a>
                        </li>

                      </ul>
                    </div>
                  </section>
                </div>
                <div class="col-lg-1 col-sm-1 col-md-1 col-xs-1">
                  <div class="close3"></div>
                </div>
              </div>
            </center>

          </div>

        </div>

        <!-- this is end of hidden videos -->

        <div id="news" class="myNews">
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
                'category_name' => 'AFCS',

              );
              $posts = get_posts( $args );
              foreach ($posts as $post) : setup_postdata( $post ); ?>


              <?php echo "<div class='expand'>"; ?>


                <?php echo "<div class='main-news-box'>"; ?>


                  <h3 style='color:white;text-align:left;margin-bottom:10px;'><?php the_title();  ?></h3>
                  <h4 style='text-align:left;margin-bottom:10px;'><?php the_date();  ?></h4>
                  <div class="hideOnClick"><?php the_excerpt(); ?></div>

                  <h2 class="clickMe"><a href="<?php echo  the_permalink() ?>">LEARN MORE</a></h2>

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

        </div>


        <div id="anchorPoint"></div>


        <section class="blocks02">
          <center>
            <div class="container-fluid w800" style="padding-bottom:0px">

              <div class="row heros">

                <div class="col-xs-12 col-lg-12">
                  <div class="content-top transparent">
                    <img src="images5/liner.jpg" id="slideUpLiner2">

                    <p class="small">The U.S. Air Force is the mightiest the world has ever known. It is admired and respected by friend and foe alike.</p>
                    <p class="small">But did you know it takes thousands of dedicated civilians to keep the Air Force powerful and effective?</p>
                    <p class="small"><span class="time">It&rsquo;s Time You Knew</span></p>
                  </div>


                </div>
              </div>

            </center>
          </section>


          <section class="blocks12">
            <center>
              <div class="container-fluid w800" style="padding-top:0px;padding-bottom:0px">

                <div class="row heros">

                  <div class="col-xs-12 col-lg-12">
                    <div class="content-top transparent">

                      <p class="small">At 170,000 strong we are a force to be reckoned with filling roles from the routine to rocket science and everything in between. Together we work shoulder to shoulder with the men and women in uniform to keep the Air Force ready for action, ready for anything.</p>
                      <p class="small">We’re from all backgrounds and all walks of life investing our energy and skills with passion and dedication.  Our contributions as civilians are vital, supporting and sustaining the Air Force mission in air, space, and cyberspace.</p>
                      <p class="small"><span class="time">It&rsquo;s Time You Knew</span></p>
                    </div>

                  </div>
                </div>

              </center>
            </section>

            <section class="blocks22">
              <center>
                <div class="container-fluid w800" style="padding-top:0px">

                  <div class="row heros">

                    <div class="col-xs-12 col-lg-12">
                      <div class="content-top transparent">
                        <p class="small">We also contribute to the well&ndash;being of every American in remarkable and even life&ndash;changing ways. Our projects explore the cutting edge of innovation and discovery and the results contribute to the safety and well&ndash;being of every American.</p>
                        <p class="small">It&rsquo;s time you knew about our commitment. Time you knew about our contribution. It’s time you knew about the Air Force Civilian Service.</p>
                        <p class="small"><span class="time">It&rsquo;s Time You Knew</span></p>
                        <img src="images5/liner.jpg" id="slideUpLiner3">
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



                        <div class="topBoxShadow">
                          <div class="m-carousel">
                            <div class="m-carousel__item one">
                              <img id="myImg" class="m-carousel__image" data-flickity-lazyload="images5/carousel5.JPG" alt="Communications satellite">
                              <div class="custCaption1"><p class="endDescription">Communications satellite</p></div>
                            </div>
                            <div class="m-carousel__item two">
                              <img id="myImg2" class="m-carousel__image" data-flickity-lazyload="images5/carousel1.JPG" alt="A Pratt and Whitney F135 engine undergoes altitude testing at the Arnold Engineering Development Center. It is one of two engines slated to power the F-35 Lightning II Joint Strike Fighter. (AEDC courtesy photo)">
                              <div class="custCaption2"><p class="endDescription">A Pratt and Whitney F135 engine undergoes altitude testing at the Arnold Engineering Development Center. It is one of two engines slated to power the F-35 Lightning II Joint Strike Fighter. (AEDC courtesy photo)</p></div>
                            </div>
                            <div class="m-carousel__item three">
                              <img id="myImg3" class="m-carousel__image" data-flickity-lazyload="images5/carousel2.JPG" alt="The flexibility of super-thin silicon transistors, such as the one pictured, could lead to electronics attached to unevenly shaped objects like airplane bodies or engines. Air Force Office of Scientific Research officials here recently have provided research funding for fast, bendable electronics to attach to unevenly shaped objects like airplane bodies or engines. (Courtesy photo)">
                              <div class="custCaption3"><p class="endDescription">The flexibility of super-thin silicon transistors, such as the one pictured, could lead to electronics attached to unevenly shaped objects like airplane bodies or engines. Air Force Office of Scientific Research officials here recently have provided research funding for fast, bendable electronics to attach to unevenly shaped objects like airplane bodies or engines. (Courtesy photo)</p></div>
                            </div>
                            <div class="m-carousel__item four">
                              <img id="myImg4" class="m-carousel__image" data-flickity-lazyload="images5/carousel3.JPG" alt="A United Launch Alliance Atlas V rocket carrying the GPS IIF-12 mission lifted off from Space Launch Complex 41 at Cape Canaveral Air Force Station, Fla., Feb. 5, 2016. (Courtesy photo/United Launch Alliance)">
                              <div class="custCaption4"><p class="endDescription">A United Launch Alliance Atlas V rocket carrying the GPS IIF-12 mission lifted off from Space Launch Complex 41 at Cape Canaveral Air Force Station, Fla., Feb. 5, 2016. (Courtesy photo/United Launch Alliance)</p></div>
                            </div>
                            <div class="m-carousel__item five">
                              <img id="myImg5" class="m-carousel__image" data-flickity-lazyload="images5/carousel4.JPG" alt="DownloadThe last GPS IIF satellite is encapsulated inside a payload fairing at a processing facility before it was launched aboard an Atlas V rocket Feb 5, 2016 at Cape Canaveral Air Force Station, FL.">
                              <div class="custCaption5"><p class="endDescription">DownloadThe last GPS IIF satellite is encapsulated inside a payload fairing at a processing facility before it was launched aboard an Atlas V rocket Feb 5, 2016 at Cape Canaveral Air Force Station, FL./p></div>
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

                                <div><span><button type="button" id="getFile">Download</button></span></div>
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

                                <div><button type="button" id="getFile2">Download</button></div>
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

                                <div><button type="button" id="getFile3">Download</button></div>
                              </div>
                            </div>
                          </div>
                        </center>
                      </div>

                    </div>
                  </div>i1


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

                                <div><button type="button" id="getFile4">Download</button></div>
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

                        <!-- <span class="closeThis5">&times;</span> -->
                        <div class="closeThis5"></div>

                        <div class="col-xs-12 col-lg-12 col-md-12 bigClose5">
                          <img class="img-responsive model5-content" id="img05">

                        </div>
                        <center>
                          <div style="max-width:75% !important;" class="row">

                            <div class="col-xs-12 col-lg-12 col-md-12">

                              <div style="display:flex;justify-content:space-between;">
                                <div style="width:80%;" id="caption5"></div>


                                <div><button type="button" id="getFile5">Download</button></div>
                              </div>
                            </div>
                          </div>
                        </center>
                      </div>
                    </div>
                  </div>
                </div>

                <?php include("footer-include/index-footer.php"); ?>
          </div>


          <script
          src="http://code.jquery.com/jquery-3.3.1.min.js"
          integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
          crossorigin="anonymous"></script>

          <script src="js5/bootstrap.min.js"></script>
          <script src="js5/scrollTop.js"></script>

          <script src="js5/slick.min.js"></script>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
          <script src="https://code.jquery.com/pep/0.4.3/pep.js"></script>

          <script src="js5/TweenMax.min.js"></script>

          <script src="js5/lettering.min.js"></script>

          <script src="http://jschr.github.io/textillate/jquery.textillate.js"></script>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

          <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

          <!-- <script src="calendar-js/core-main.js"></script>
          <script src="calendar-js/daygrid-main.js"></script>
          <script src="calendar-js/list-main.js"></script> -->


          <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.js'></script>
          <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.js'></script>
          <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/list/main.min.js'></script>

          <!-- <script src="calendar-js/list-main.js"></script> -->

          <script src="js5/afcs-homepage2.js"></script>


          <script src="tipuesearch/tipuesearch_set.js"></script>
          <script src="tipuesearch/tipuesearch_content.js"></script>
          <script src="tipuesearch/tipuesearch.js"></script>
          <script>


          //render calendar

          // var calendarEl = document.getElementById('calendar');
          //
          // var calendar = new FullCalendar.Calendar(calendarEl, {
          //     plugins: [ 'dayGrid', 'list' ],
          //     header: {
          //     left: 'prev,next today',
          //     center: 'title',
          //     right: 'dayGridMonth,listYear'
          //   },
          //
          //
          //
          // });
          //
          //
          // calendar.render();


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
              left: 'prev,next today',
              right: 'dayGridMonth,listYear'
            },


            <?php include('event-calendar-script.php'); ?>

          });

          calendar.render();


          // if ($(document).innerWidth() >= 768) {
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

            // $(".main-news-box a").attr("target", "_blank");
            // $(".fc-widget-content a").attr("target", "_blank");





        </script>


      </body>
      </html>
