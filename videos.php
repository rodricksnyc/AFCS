<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">

  <link rel="stylesheet" href="css5/bootstrap-edited.css">

  <link rel="stylesheet" href="css5/bootstrap-theme.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">

  <link rel="stylesheet" href="css/afcs-new.css">
  <link rel="stylesheet" href="css/about.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  <link rel="stylesheet" href="css5/normalize.css">

  <link type="image/png" href="images5/afcs-favicon.png" rel="icon">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel=stylesheet href="css/calendar.css">
  <link rel=stylesheet href="css/navbar.css">
  <link rel="stylesheet" href="tipuesearch/tipuesearch.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

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


<title><?php echo "AFCS - Air Force Civilian Service"; ?></title>

</head>
<style>

#featured-videos {
  margin: 8em 0em;
}

li {
  list-style-type: none;
}

.fancybox-button, .fancybox-button:link, .fancybox-button:visited {
    color: white !important;
}

 .video-grid.front-page {
	 margin: 0 auto;
	 padding: 0em;
   /* width:100%; */
}
 ul.video-list {
	 display: flex;
	 display: flex;
	 justify-content: center;
	 flex-wrap: wrap;
   width: auto;
   margin: 0em;
   padding: 0em;
}
 li.video {
	 flex-grow: 1;
	 position: relative;
	 overflow: hidden;
	 width: -webkit-calc(100% / 3);
	 width: calc(100% / 3);
}


.pb2 {
  margin-bottom:2em;
}

 li.video a {
	 outline: none;
}
 li.video:before {
	 content: '';
	 display: block;
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 background-color: rgba(0, 0, 0, 0);
	 transition: background-color 0.15s;
}
 li.video figure {
	 display: block;
	 position: relative;
	 overflow: hidden;
	 background-repeat: no-repeat;
	 background-position: center center;
	 background-size: cover;
   margin:5px;
}
 li.video figure img {
	 display: block;
	 max-width: 100%;
	 height: auto;
	 opacity: 0;
	 transform: scale(0.5);
	 transition: all 0.2s;
}
li.video figure figcaption {
    position: absolute;
    bottom: 0;
    width: 100%;
    background: #0f1932;
    color: #fff;
    font-size: 14px;
    font-weight: 300;
    transform: translateY(0);
    opacity: .8;
    transition: all 0.2s;
    padding-top: 1em;
    padding-bottom: 1em;
    padding-left: .5em;
    text-align: left;
}
 li.video:hover figure img {
	 opacity: 1;
	 transform: scale(1);
}
 li.video:hover figure figcaption {
	 opacity: 0;
	 transform: translateY(50%);
}
 li.video:hover:before {
	 /* background-color: rgba(0, 0, 0, 0.3); */
}
 @media screen and (max-width: 800px) {
	 li.video {
		 width: 50%;
		 width: -webkit-calc(100% / 2);
		 width: calc(100% / 2);
	}
}
 @media screen and (max-width: 640px) {
	 li.video {
		 width: 100%;
	}
}

body {
  font-family: 'Roboto Condensed', sans-serif;
    width: 100%;
    font-weight: 100 !important;
    cursor: grab;
    pointer-events: auto !important;
}

html {
    cursor: grab;
}
.icon {
max-height:50px;
}
.carousel-control {
opacity: 1 !important;
}
.transparent {
opacity:0;
}


</style>



<body>
  <a href="#bottom" id="top"></a>
  <div style="background:#0c0f1c" id="site-wrapper">

    <?php include("nav-include/about-navbar.php"); ?>

    <div id="tipModal">
    </div>



  <a href='#content' class='skipNav'>Skip to main content</a>

  <a name='content'></a>

            <div class="container">

                <div class="row">
                  <div class="col-xs-12 col-lg-12">
                    <section class="videos" id="featured-videos">
                      <div class="video-grid front-page" id="front-page-videos">
                        <ul class="video-list featured">
                          <li style="height:auto !important;" class="video featured">
                            <a data-fancybox href="https://www.youtube.com/embed/PKtxZJ83Nnc" class="featured-video" alt="Aircraft Maintenance Video">
                              <figure style="background-image: url(https://img.youtube.com/vi/PKtxZJ83Nnc/hqdefault.jpg);" role="img" aria-label="Aircraft Maintenance Video">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" alt="Aircraft Maintenance Video">
                                <figcaption>Aircraft Maintenance</figcaption>
                              </figure>
                            </a>
                          </li>
                          <li style="height:auto !important;" class="video featured">
                            <a data-fancybox href="https://www.youtube.com/embed/sm9pmSKMNPg" class="featured-video" alt="Auditing Video">
                              <figure style="background-image: url(https://img.youtube.com/vi/sm9pmSKMNPg/hqdefault.jpg);" role="img" aria-label="Auditing Video">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" alt="Auditing Video">
                                <figcaption>Audit</figcaption>
                              </figure>
                            </a>
                          </li>
                          <li style="height:auto !important;" class="video featured">
                            <a data-fancybox href="https://www.youtube.com/embed/AZDUf2q3Qp0" class="featured-video" alt="Civil Engineering Video">
                              <figure style="background-image: url(https://img.youtube.com/vi/AZDUf2q3Qp0/hqdefault.jpg);" role="img" aria-label="Civil Engineering Video">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" alt="Civil Engineering Video">
                                <figcaption>Civil Engineering</figcaption>
                              </figure>
                            </a>
                          </li>
                          <li style="height:auto !important;" class="video featured">
                            <a data-fancybox href="https://www.youtube.com/embed/YkzXUXWVJ4o" class="featured-video" alt="Communications and Information Video">
                              <figure style="background-image: url(https://img.youtube.com/vi/YkzXUXWVJ4o/hqdefault.jpg);" role="img" aria-label="Communications and Information Video">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" alt="Communications and Information Video">
                                <figcaption>Communications & Information</figcaption>
                              </figure>
                            </a>
                          </li>
                          <li style="height:auto !important;" class="video featured">
                            <a data-fancybox href="https://www.youtube.com/embed/z5QwpFXrx_E" class="featured-video" alt="Contracting Video">
                              <figure style="background-image: url(https://img.youtube.com/vi/z5QwpFXrx_E/hqdefault.jpg);" role="img" aria-label="Contracting Video">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" alt="Contracting Video">
                                <figcaption>Contracting</figcaption>
                              </figure>
                            </a>
                          </li>
                          <li style="height:auto !important;" class="video featured">
                            <a data-fancybox href="https://www.youtube.com/embed/_ecx6rEj6U0" class="featured-video" alt="Financial Management Video">
                              <figure style="background-image: url(https://img.youtube.com/vi/_ecx6rEj6U0/hqdefault.jpg);" role="img" aria-label="Financial Management Video">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" alt="Financial Management Video">
                                <figcaption>Financial Management</figcaption>
                              </figure>
                            </a>
                          </li>
                          <li style="height:auto !important;" class="video featured">
                            <a data-fancybox href="https://www.youtube.com/embed/DrqeFPSt9Yc" class="featured-video" alt="Force Support Video">
                              <figure style="background-image: url(https://img.youtube.com/vi/DrqeFPSt9Yc/hqdefault.jpg);" role="img" aria-label="Force Support Video">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" alt="Force Support Video">
                                <figcaption>Force Support</figcaption>
                              </figure>
                            </a>
                          </li>
                          <li style="height:auto !important;" class="video featured">
                            <a data-fancybox href="https://www.youtube.com/embed/Fi23Aektbi0" class="featured-video" alt="Logistics Video">
                              <figure style="background-image: url(https://img.youtube.com/vi/Fi23Aektbi0/hqdefault.jpg);" role="img" aria-label="Logistics Video">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" alt="Logistics Video">
                                <figcaption>Logistics</figcaption>
                              </figure>
                            </a>
                          </li>
                          <li style="height:auto !important;" class="video featured">
                            <a data-fancybox href="https://www.youtube.com/embed/jdF9TF1s8Js" class="featured-video" alt="Medical Video">
                              <figure style="background-image: url(https://img.youtube.com/vi/jdF9TF1s8Js/hqdefault.jpg);" role="img" aria-label="Medical Video">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" alt="Medical Video">
                                <figcaption>Medical</figcaption>
                              </figure>
                            </a>
                          </li>
                          <li style="height:auto !important;" class="video featured">
                            <a data-fancybox href="https://www.youtube.com/embed/kNqS2WyA5hE" class="featured-video" alt="Nuclear Weapons Center Jobs Video">
                              <figure style="background-image: url(https://img.youtube.com/vi/kNqS2WyA5hE/hqdefault.jpg);" role="img" aria-label="Nuclear Weapons Center Jobs Video">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" alt="Nuclear Weapons Center Jobs Video">
                                <figcaption>Nuclear Weapons Center Jobs</figcaption>
                              </figure>
                            </a>
                          </li>
                          <li style="height:auto !important;" class="video featured">
                            <a data-fancybox href="https://www.youtube.com/embed/Bj7jVHAJflg" class="featured-video" alt="Science and Engineering Video">
                              <figure style="background-image: url(https://img.youtube.com/vi/Bj7jVHAJflg/hqdefault.jpg);" role="img" aria-label="Science and Engineering Video">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" alt="Science and Engineering Video">
                                <figcaption>Science & Engineering</figcaption>
                              </figure>
                            </a>
                          </li>
                          <li style="height:auto !important;" class="video featured">
                            <a data-fancybox href="https://www.youtube.com/embed/gGMfmUjZBsw" class="featured-video" alt="Security and Law Enforcement Video">
                              <figure style="background-image: url(https://img.youtube.com/vi/gGMfmUjZBsw/hqdefault.jpg);" role="img" aria-label="Security and Law Enforcement Video">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" alt="Security and Law Enforcement Video">
                                <figcaption>Security & Law Enforcement</figcaption>
                              </figure>
                            </a>
                          </li>

                          <li style="height:auto !important;" class="video featured">
                            <a data-fancybox href="https://www.youtube.com/embed/lXtiez6ZCbY" class="featured-video" alt="Forces Joined Video">
                              <figure style="background-image: url(https://img.youtube.com/vi/lXtiez6ZCbY/hqdefault.jpg);" role="img" aria-label="Forces Joined Video">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" alt="Forces Joined Video">
                                <figcaption>Forces. Joined.</figcaption>
                              </figure>
                            </a>
                          </li>
                          <li style="height:auto !important;" class="video featured">
                            <a data-fancybox href="https://www.youtube.com/embed/soxXOff3bLw" class="featured-video" alt="Satisfaction Video">
                              <figure style="background-image: url(https://img.youtube.com/vi/soxXOff3bLw/hqdefault.jpg);" role="img" aria-label="Satisfaction Video">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" alt="Satisfaction Video">
                                <figcaption>Satisfaction</figcaption>
                              </figure>
                            </a>
                          </li>
                          <li style="height:auto !important;" class="video featured" alt="USAF Salutes AFCS Video">
                            <a data-fancybox href="https://www.youtube.com/embed/eZD80wrSugk" class="featured-video" role="img" aria-label="USAF Salutes AFCS Video">
                              <figure style="background-image: url(https://img.youtube.com/vi/eZD80wrSugk/hqdefault.jpg);">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/50598/video-thumb-placeholder-16-9.png" alt="USAF Salutes AFCS Video">
                                <figcaption>USAF Salutes AFCS</figcaption>
                              </figure>
                            </a>
                          </li>

                        </ul>
                      </div>
                    </section>
                  </div>

                </div>


            </div>

</div>

  <?php include("footer-include/site-footer.php"); ?>
<script
src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>

<script src="js5/bootstrap.min.js"></script>

<script src="js5/slick.min.js"></script>


<script src="js5/TweenMax.min.js"></script>



<script src="js5/lettering.min.js"></script>

<script src="http://jschr.github.io/textillate/jquery.textillate.js"></script>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<script src="tipuesearch/tipuesearch_set.js"></script>
<script src="tipuesearch/tipuesearch_content.js"></script>
<script src="tipuesearch/tipuesearch.js"></script>

<script src="js5/about.js"></script>
<script src="js5/scrollTop.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>



</body>
</html>
<html>
