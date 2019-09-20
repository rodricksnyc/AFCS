<!doctype>

<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css5/bootstrap-edited.css">
  <link rel="stylesheet" href="css5/bootstrap-theme.min.css">



  <link rel="stylesheet" href="css/afcs-new.css">
  <link rel="stylesheet" href="css/about.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">

  <link rel="stylesheet" href="css5/normalize.css">

  <link type="image/png" href="images5/afcs-favicon.png" rel="icon">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel=stylesheet href="css/calendar.css">
  <link rel=stylesheet href="css/navbar.css">

  <link rel="stylesheet" href="tipuesearch/tipuesearch.css">

  <title><?php echo "AFCS - Air Force Civilian Service"; ?></title>

</head>

<style>

.hide {
  display: none;
}

*, *::after, *::before {
  box-sizing: border-box;
}

body, html {
  background: #E4E0E0;
  font-size: 6px;
  padding: 4rem 2rem;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;

}
@media (min-width: 860px) {
  body, html {
    font-size: 8px;
    padding: 3rem 5rem;
  }
}
@media (min-width: 1200px) {
  body, html {
    font-size: 10px;
    padding: 2rem 3rem;
  }
}

#icons {
  display: none;
}

.header-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  padding: 2rem 4rem;
  z-index: 20;
}
.header-wrapper .header {
  position: relative;
  display: block;
  width: 100%;
  height: 6rem;
}
.header-wrapper .menu-hamburger {
  position: relative;
  width: 1.3rem;
  display: inline-block;
  vertical-align: middle;
  background: black;
  height: 0.2rem;
  cursor: pointer;
}
.header-wrapper .menu-hamburger::before {
  content: "";
  width: 1.3rem;
  height: 0.2rem;
  background: black;
  position: absolute;
  top: -0.4rem;
}
.header-wrapper .menu-hamburger::after {
  content: "";
  width: 1.3rem;
  height: 0.2rem;
  background: black;
  position: absolute;
  top: 0.4rem;
}
.header-wrapper .menu-txt {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  margin-left: 0.5rem;
  text-transform: uppercase;
  cursor: pointer;
}
.header-wrapper .logo-wrapper {
  position: absolute;
  top: 0;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.header-wrapper .logo {
  display: block;
  font-size: 2rem;
  font-weight: bold;
  margin-top: 3rem;
  line-height: 1;
  font-weight: 600;
}
.header-wrapper .logo span {
  display: block;
}

.number-wrapper {
  position: absolute;
  height: 100%;
  width: 12rem;
  z-index: 10;
}
.number-wrapper .number-count {
  position: relative;
  display: inline-block;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}
.number-wrapper .number {
  position: relative;
  font-family: 'Montserrat', sans-serif;
  font-size: 12rem;
  color: #efefef;
  margin-left: -5rem;
  font-weight: 700;
}

.nav-wrapper {
  position: absolute;
  height: 100%;
  width: 12rem;
  padding: 0 4rem;
  top: 0;
  right: 0;
  text-align: center;
  z-index: 10;
}
.nav-wrapper .nav-arrows {
  position: relative;
  display: inline-block;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}
.nav-wrapper .nav-up {
  opacity: 0;
}
.nav-wrapper .nav-up, .nav-wrapper .nav-down {
  width: 2rem;
  height: 3rem;
  cursor: pointer;
}
.nav-wrapper .nav-up svg, .nav-wrapper .nav-down svg {
  fill: #666666;
  width: 100%;
  max-height: 100%;
}
.nav-wrapper .nav-up svg:hover, .nav-wrapper .nav-down svg:hover {
  fill: black;
}
.nav-wrapper .nav-up {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}
.nav-wrapper .nav-line {
  width: 100%;
  height: 0.1rem;
  background: black;
  margin: 1rem 0;
  background: #666666;
}

.slider-content {
  position: relative;
  max-width: 112rem;
  min-width: 480px;
  background: #fff;
  margin: 0 auto;
  overflow: hidden;
  box-shadow: 0 0 35px 20px rgba(79, 69, 66, 0.2);
}
.slider-content .slide {
  position: absolute;
  width: 100%;
  height: 100%;
}
.slider-content .slide:after {
  content: "";
  display: table;
  clear: both;
}
.slider-content .slide:first-child .txt-wrapper span.copy {
  opacity: 1;
}
.slider-content .slide:nth-child(odd) .img {
  margin-left: 50%;
  -webkit-transform: translateY(-100%);
          transform: translateY(-100%);
}
.slider-content .slide:nth-child(odd) .txt {
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
}
.slider-content .slide:nth-child(even) .img {
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
}
.slider-content .slide:nth-child(even) .txt {
  margin-left: 50%;
  -webkit-transform: translateY(-100%);
          transform: translateY(-100%);
}
.slider-content .slide.active {
  position: absolute;
  z-index: 5;
}
.slider-content .slide.active .img, .slider-content .slide.active .txt {
  -webkit-transform: translateY(0);
          transform: translateY(0);
}

.slider-container {
  position: relative;
  height: 65rem;
  overflow: hidden;
}
.slider-container:after {
  content: "";
  display: table;
  clear: both;
}
.slider-container .slide-content {
  position: absolute;
  display: block;
  width: 50%;
  height: 100%;
  transition: -webkit-transform 0.3s ease;
  transition: transform 0.3s ease;
  transition: transform 0.3s ease, -webkit-transform 0.3s ease;
  transition-delay: 0.15s;
}
.slider-container .slide-content.txt {
  display: table;
  padding: 8rem 14rem;
  background: white;
}
.slider-container .slide-content .txt-wrapper {
  position: relative;
  display: table-cell;
  vertical-align: middle;
}
.slider-container .slide-content .txt-wrapper span.copy {
  position: relative;
  text-transform: uppercase;
  width: 2rem;
  display: block;
  font-size: 1rem;
  line-height: 1;
  margin-bottom: 4rem;
  font-weight: 500;
  opacity: 0;
}
.slider-container .slide-content .txt-wrapper h2 {
  margin: 0;
  color:black;
  font-size: 4.3rem;
  margin-bottom: 4rem;
  line-height: 1;
  font-weight: 600;
}
.slider-container .slide-content .txt-wrapper h2 span {
  display: block;
    color:black;
}
.slider-container .slide-content .txt-wrapper h3 {
  margin: 0;
  font-size: 2rem;
  margin-bottom: 2rem;
  line-height: 1;
  font-weight: 400;
}
.slider-container .slide-content .txt-wrapper h3 span {
  color: #ccc;
}
.slider-container .slide-content .txt-wrapper a {
  text-decoration: none;
  color: #AEACAB;
}
.slider-container .slide-content .txt-wrapper button {
  position: relative;
  padding: 1rem 3.5rem;
  color: white;
  text-align: center;
  display: block;
  border-radius: 3rem;
  background: #d02e2e;
  text-transform: uppercase;
  border: none;
  font-size: 1rem;
  margin-top: 3rem;
  font-weight: bold;
  outline: none;
  box-shadow: 0 0 1rem 0 rgba(0, 0, 0, 0.3);
}
.slider-container .slide-content .txt-wrapper .phone {
  display: block;
  color: black;
  font-size: 1.9rem;
}
.slider-container .slide-content .txt-wrapper .subtitle {
  display: block;
  text-transform: uppercase;
  color: #AEACAB;
  font-weight: bold;
  letter-spacing: 0.3rem;
  font-size: 1.2rem;
  margin-bottom: 1rem;
}
.slider-container .slide-content .txt-wrapper p.excerpt {
  margin: 0;
  color: #AEACAB;
  font-size: 1.2rem;
  line-height: 1.5;\color: black !important;
}
.slider-container .slide-content .txt-wrapper span.view-all {
  color: #AEACAB;
}
.slider-container .slide-content .txt-wrapper ul {
  margin: 0;
  padding: 0;
  list-style: none;
  margin-bottom: 1.5rem;
}
.slider-container .slide-content .txt-wrapper ul li {
  position: relative;
  margin: 1.5rem 0;
  padding: 0;
}
.slider-container .slide-content .txt-wrapper ul li:after {
  content: "";
  display: table;
  clear: both;
}
.slider-container .slide-content .txt-wrapper .date-wrapper {
  width: 20%;
  float: left;
  color: #AEACAB;
  text-align: left;
}
.slider-container .slide-content .txt-wrapper .date-wrapper .date {
  font-size: 1.7rem;
}
.slider-container .slide-content .txt-wrapper .date-wrapper .month {
  font-size: 1rem;
}
.slider-container .slide-content .txt-wrapper .post-wrapper {
  width: 80%;
  float: left;
}
.slider-container .slide-content .txt-wrapper .post-wrapper .post-title {
  display: block;
  font-size: 1.4rem;
  line-height: 1.3;
}
.slider-container .slide-content .txt-wrapper .post-wrapper .post-title a {
  display: block;
  color: black;
  cursor: pointer;
}
.slider-container .slide-content .txt-wrapper .post-wrapper .post-title a:hover {
  text-decoration: underline;
}
.slider-container .slide-content .txt-wrapper .post-wrapper .post-info {
  display: block;
  color: #AEACAB;
  font-size: 1rem;
}
.slider-container .slide-content .txt-wrapper .post-wrapper .post-info:after {
  content: "";
  display: table;
  clear: both;
}
.slider-container .slide-content .txt-wrapper .post-wrapper .post-info ul {
  margin: 0;
}
.slider-container .slide-content .txt-wrapper .post-wrapper .post-info li {
  float: left;
  margin: 0 0.5rem;
}
.slider-container .slide-content .txt-wrapper .post-wrapper .post-info li:first-child {
  margin-left: 0;
}
.slider-container .slide-content img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

.footer {
  position: absolute;
  display: block;
  width: 100%;
  height: 6rem;
  bottom: 0;
  left: 0;
  padding: 2rem 4rem;
  z-index: 10;
}
.footer:after {
  content: "";
  display: table;
  clear: both;
}

.social-wrapper, .language-wrapper {
  position: relative;
}
.social-wrapper ul, .language-wrapper ul {
  position: relative;
  list-style: none;
  margin: 0;
  padding: 0;
}
.social-wrapper li, .language-wrapper li {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  margin: 0 0.5rem;
}
.social-wrapper a, .language-wrapper a {
  text-decoration: none;
  color: black;
}

.social-wrapper {
  float: left;
}

.language-wrapper {
  float: right;
}

p {
  color:black !important;
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

  <div id="site-wrapper">
    <a href="#veryBottom" id="veryTop"></a>
    <?php include("nav-include/about-navbar.php"); ?>

    <div id="tipModal">
    </div>




<svg id="icons" xmlns="http://www.w3.org/2000/svg">
<symbol id="icon-arrow" viewBox="0 0 476.213 476.213" >
<polygon fill="inherit" points="347.5,324.393 253.353,418.541 253.353,0 223.353,0 223.353,419.033 128.713,324.393 107.5,345.607
	238.107,476.213 368.713,345.606 "/>
</symbol>
</svg>

<a name='content'></a>
<div class="slider-content" style="margin-top:10em;">

  <div class="header-wrapper">
    <div class="header">
      <div class="menu-wrapper">
        <!-- <div class="menu-hamburger"></div>
        <div class="menu-txt">Menu</div> -->
      </div>
      <div class="logo-wrapper">
        <div class="logo"><span>INNOVATIONS</div>
      </div>
      <div class="shop-wrapper"></div>
    </div>
  </div>

  <!-- <div class="number-wrapper">
    <div class="number-count">
      <div class="number"></div>
    </div>
  </div> -->

  <div class="nav-wrapper">
    <div class="nav-arrows">
      <div class="nav-up">
           <svg id="arrow-up">
            <use xlink:href="#icon-arrow"></use>
          </svg>
       </div>
      <div class="nav-line"></div>
      <div class="nav-down">
         <svg id="arrow-down">
            <use xlink:href="#icon-arrow"></use>
          </svg>
      </div>
    </div>
  </div>

  <div class="slider-wrapper">
    <div class="slider-container">
      <div class="slide active" data-order="1">
          <div class="slide-content txt">
            <div class="txt-wrapper">
              <span class="copy">Intro about me</span>
              <h2><span>Hello!</span> I’m Mr.Bara</h2>
              <span class="subtitle">Fashion designer</span>
              <p class="excerpt">I combine the best of our skills and ideas to present you products really worth your attention that will change the way you think about design, structure, color and website itself. </p>
            </div>
          </div>
          <div class="slide-content img">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/42764/slider1.jpg" alt="" />
          </div>
        </div>
      <div class="slide" data-order="2">
          <div class="slide-content txt">
            <div class="txt-wrapper">
              <span class="copy">Show with me</span>
              <h2><span>Love Simple</span> Fashion</h2>
               <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
               <button>Shop now</button>
            </div>
          </div>
          <div class="slide-content img">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/42764/slide2.jpg" alt="" />
          </div>
        </div>
      <div class="slide " data-order="3">
          <div class="slide-content txt">
            <div class="txt-wrapper">
              <span class="copy">Fashion around me</span>
              <ul>
                <li>
                  <div class="date-wrapper">
                    <div class="date">25</div>
                    <div class="month">April</div>
                  </div>
                  <div class="post-wrapper">
                    <div class="post-title"><a href="">Top colour pantone for fashion 2016</a></div>
                    <div class="post-info">
                      <ul>
                        <li>Admin /</li>
                        <li>Discovery /</li>
                        <li>15 comments</li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="date-wrapper">
                    <div class="date">18</div>
                    <div class="month">April</div>
                  </div>
                  <div class="post-wrapper">
                    <div class="post-title"><a href="">Inspiration for fashion for Logan's designer</a></div>
                    <div class="post-info">
                      <ul>
                        <li>Admin /</li>
                        <li>Inspirations /</li>
                        <li>08 comments</li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="date-wrapper">
                    <div class="date">06</div>
                    <div class="month">April</div>
                  </div>
                  <div class="post-wrapper">
                    <div class="post-title"><a href="">Hipster -Fashion trand this summer</a></div>
                    <div class="post-info">
                      <ul>
                        <li>Admin /</li>
                        <li>Discovery /</li>
                        <li>22 comments</li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
              <span class="view-all">View all articles</span>

            </div>
          </div>
          <div class="slide-content img">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/42764/slide3.jpg" alt="" />
          </div>
        </div>
      <div class="slide " data-order="4">
          <div class="slide-content txt">
            <div class="txt-wrapper">
              <span class="copy">What clients say</span>
              <h2><span>Mr.Bara</span> Best Choice </h2>
              <p class="excerpt">I combine the best of our skills and ideas to present you products really worth your attention that will change the way you think about design, structure, color and website itself. </p>
            </div>
          </div>
          <div class="slide-content img">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/42764/slide4.jpg" alt="" />
          </div>
        </div>
      <div class="slide " data-order="5">
          <div class="slide-content txt">
            <div class="txt-wrapper">
              <span class="copy">Keep in touch</span>
              <h3>Melbourne, <span>Australia</span></h3>
              <p class="excerpt">269 King Str, 05th Floor, Utral House Building. Melbourne. VIC 3000. Australia</p>
              <p><strong>Email:</strong> <a href="mailto:mariosm18@gmail.com">mariosm18@gmail.com</a></p>
              <p>Call directly: <span class="phone">+99 (0) 344 956 4050</span></p>
            </div>
          </div>
          <div class="slide-content img">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/42764/slide5.jpg" alt="" />
          </div>
        </div>
    </div>
  </div>

</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>

                  <script src="js5/bootstrap.min.js"></script>
                  <script src="js5/scrollTop.js"></script>
                  <script src="tipuesearch/tipuesearch_set.js"></script>
                  <script src="tipuesearch/tipuesearch_content.js"></script>
                  <script src="tipuesearch/tipuesearch.js"></script>

                  <script src="js5/slick.min.js"></script>


                  <script src="js5/TweenMax.min.js"></script>


                  <script src="js5/lettering.min.js"></script>

                  <script src="http://jschr.github.io/textillate/jquery.textillate.js"></script>

                  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


                  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
                  <script src="js5/about.js"></script>



<script>
const up = $('.nav-up');
const down = $('.nav-down');
let counter = 1;
let number = $('.number');

function moveDown(currentSlide) {

  var nextSlide = currentSlide.next();
  var currentSlideUp = currentSlide.find('.txt');
  var currentSlideDown = currentSlide.find('.img');
  var nextSlideUp = nextSlide.find('.img');
  var nextSlideDown = nextSlide.find('.txt');
  let currentCopy = currentSlide.find('.copy');
  let nextCopy = nextSlide.find('.copy');

  if( nextSlide.length !== 0 ) {

    counter = counter + 1;

    if( counter % 2 === 0 ) {

      TweenMax.to(number, 0.3, {x: '-100%'})
      TweenMax.to( currentSlideUp, 0.4, { y: '-100%', delay:0.15 });
      TweenMax.to( currentSlideDown, 0.4, { y: '100%', delay:0.15 });
      setTimeout(function() {number.html('')},300);

    } else {

      number.html('0'+counter);
      TweenMax.to(number, 0.3, {x: '0%', delay:1})
      TweenMax.to( currentSlideUp, 0.4, { y: '100%', delay:0.15 });
      TweenMax.to( currentSlideDown, 0.4, { y: '-100%', delay:0.15 });
    }

    TweenMax.to( currentCopy, 0.3, {autoAlpha: 0, delay:0.15});
    TweenMax.to( nextCopy, 0.3, {autoAlpha: 1, delay:1});
    TweenMax.to( nextSlideUp, 0.4, { y: '0%', delay:0.15 });
    TweenMax.to( nextSlideDown, 0.4, { y: '0%', delay:0.15 });

    $(currentSlide).removeClass('active');
    $(nextSlide).addClass('active');

  }
}

function moveUp(currentSlide) {

  var prevSlide = currentSlide.prev();
  var currentSlideUp = currentSlide.find('.img');
  var currentSlideDown = currentSlide.find('.txt');
  var prevSlideUp = prevSlide.find('.txt');
  var prevSlideDown = prevSlide.find('.img');
  let currentCopy = currentSlide.find('.copy');
  let prevCopy = prevSlide.find('.copy');

  if( prevSlide.length !== 0 ) {

    counter = counter - 1;

    if( counter % 2 === 0 ) {


      TweenMax.to(number, 0.3, {x: '-100%'});
      TweenMax.to( currentSlideUp, 0.4, { y: '-100%', delay:0.15 });
      TweenMax.to( currentSlideDown, 0.4, { y: '100%', delay:0.15 });
      setTimeout(function() {number.html('')},300);


    }else {

      number.html('0'+counter);
      TweenMax.to(number, 0.3, {x: '0%', delay:1})
      TweenMax.to( currentSlideUp, 0.4, { y: '100%', delay:0.15 });
      TweenMax.to( currentSlideDown, 0.4, { y: '-100%', delay:0.15 });
    }

    TweenMax.to( currentCopy, 0.3, {autoAlpha: 0, delay:0.15});
    TweenMax.to( prevCopy, 0.3, {autoAlpha: 1, delay:1});
    TweenMax.to( prevSlideUp, 0.4, { y: '0%', delay:0.15 });
    TweenMax.to( prevSlideDown, 0.4, { y: '0%', delay:0.15 });

    $(currentSlide).removeClass('active');
    $(prevSlide).addClass('active');

  }

}

function hideNav() {

  if( counter == $('.slide').length) {
    TweenMax.to($('.nav-down'),0.5, {autoAlpha: 0, delay:0.5} );
  }else {
     TweenMax.to($('.nav-down'),0.5, {autoAlpha: 1, delay:0.5} );
  }
  if( counter === 1) {
    TweenMax.to($('.nav-up'),0.5, {autoAlpha: 0, delay:0.5} );
  }else {
     TweenMax.to($('.nav-up'),0.5, {autoAlpha: 1, delay:0.5} );
  }

}


down.on('click', function() {

  var currentSlide = $('.active');
  moveDown(currentSlide);
  hideNav();

});

up.on('click', function() {

  var currentSlide = $('.active');
  moveUp(currentSlide);
  hideNav();

});




</script>
</body>
</html>
