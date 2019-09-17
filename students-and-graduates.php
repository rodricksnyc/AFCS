<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
  <!-- <link rel="stylesheet" href="css5/animate-edited.css"> -->

  <link rel="stylesheet" href="css5/bootstrap-edited.css">

  <link rel="stylesheet" href="css5/bootstrap-theme.min.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">



  <link rel="stylesheet" href="css/afcs-new.css">
  <link rel="stylesheet" href="css/about.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">

  <link rel="stylesheet" href="css5/normalize.css">

  <link type="image/png" href="images5/afcs-favicon.png" rel="icon">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel=stylesheet href="css/videos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/swiper.css">
  <!-- <link rel="stylesheet" href="http://moransh4.github.io/Luca/css/swiper.min.css"> -->

  <link rel=stylesheet href="css/calendar.css">
  <link rel=stylesheet href="css/navbar.css">
  <link rel="stylesheet" href="tipuesearch/tipuesearch.css">


  <title><?php echo "Air Force Civilian Service 4.0"; ?></title>
</head>
<style>

@-webkit-keyframes mainviewmove {
	0% {
		-webkit-transform:rotate(0deg) scale(1);
			-moz-transform:rotate(0deg) scale(1);
				-ms-transform:rotate(0deg) scale(1);
					transform:rotate(0deg) scale(1);
	}
	50% {
		-webkit-transform:rotate(1.5deg) scale(1.2);
			-moz-transform:rotate(1.5deg) scale(1.2);
				-ms-transform:rotate(1.5deg) scale(1.2);
					transform:rotate(1.5deg) scale(1.2);
	}
	100% {
		-webkit-transform:rotate(0deg) scale(1);
			-moz-transform:rotate(0deg) scale(1);
				-ms-transform:rotate(0deg) scale(1);
					transform:rotate(0deg) scale(1);
	}
}

@keyframes mainviewmove {
	0% {
		-webkit-transform:rotate(0deg) scale(1);
			-moz-transform:rotate(0deg) scale(1);
				-ms-transform:rotate(0deg) scale(1);
					transform:rotate(0deg) scale(1);
	}
	50% {
		-webkit-transform:rotate(1.5deg) scale(1.2);
			-moz-transform:rotate(1.5deg) scale(1.2);
				-ms-transform:rotate(1.5deg) scale(1.2);
					transform:rotate(1.5deg) scale(1.2);
	}
	100% {
		-webkit-transform:rotate(0deg) scale(1);
			-moz-transform:rotate(0deg) scale(1);
				-ms-transform:rotate(0deg) scale(1);
					transform:rotate(0deg) scale(1);
	}
}

.kenburns-top {
	-webkit-animation: kenburns-top 1.5s ease-in reverse both;
	        animation: kenburns-top 1.5s ease-in reverse both;
}

/* ----------------------------------------------
 * Generated by Animista on 2019-9-17 9:36:58
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info.
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

/**
 * ----------------------------------------
 * animation kenburns-top
 * ----------------------------------------
 */
@-webkit-keyframes kenburns-top {
  0% {
    -webkit-transform: scale(1) translateY(0);
            transform: scale(1) translateY(0);
    -webkit-transform-origin: 50% 16%;
            transform-origin: 50% 16%;
  }
  100% {
    -webkit-transform: scale(1.25) translateY(-15px);
            transform: scale(1.25) translateY(-15px);
    -webkit-transform-origin: top;
            transform-origin: top;
  }
}
@keyframes kenburns-top {
  0% {
    -webkit-transform: scale(1) translateY(0);
            transform: scale(1) translateY(0);
    -webkit-transform-origin: 50% 16%;
            transform-origin: 50% 16%;
  }
  100% {
    -webkit-transform: scale(1.25) translateY(-15px);
            transform: scale(1.25) translateY(-15px);
    -webkit-transform-origin: top;
            transform-origin: top;
  }
}


.wrapper {
  width: 100%;
  height: 500px;
  transform: translateY(-50%);
  position: relative;
  overflow: hidden;
  margin: 0 auto;
  margin-top:500px;
}
.wrapper ul {
  width: calc(20000px);
  float: left;
  height: 50%;
  position: relative;
  top: 50%;
  transform: translateY(-50%);
}
.wrapper ul li {
  width: 400px;
  height: 400px;
  margin: 0 40px;
  /* background: #ccc; */
  float: left;
  cursor: pointer;
  padding:2em;
}
.wrapper ul li:first-of-type {
  margin-left: 300px;
}

h1.bigBlocks {
  color:white;
  font-family: "Roboto Condensed", Arial, sans-serif;
  font-size:30px !important;
  margin-top: 5px;
  margin-bottom:10px;
}

p.bigBlocks {
  color:white;
  font-family: "Roboto Condensed", Arial, sans-serif;
  font-size:16px !important;
  /* border-bottom: 2px solid white; */
  padding-bottom: 1em;

}

li.red {
  background:red !important;
}

span.number {
  color:white;
  margin-bottom:0em;
}

.background {
  background: url(/../images5/buff.jpg);
  background-size: cover;
  background-position: center center!important;
  background-repeat: no-repeat;
  background-attachment: fixed;
  /* display: table; */
  width: 100%;
  height: 100%;
  position: absolute;
  z-index: 0;

}


.zoomOption {
  -webkit-animation: mainviewmove 7s ease-in-out;
  -moz-animation: mainviewmove 7s ease-in-out;
  animation: mainviewmove 7s ease-in-out;
}

.case_border, .title_bar {
    width: 100%;
    background-color: white;
    opacity: 1;
    width: 100%;
    height: 4px;
}


.trans--grow{
  -webkit-transition: width 1.8s ease-out;
  transition: width 1.8s  ease-out;

}


/* @media (max-width:1024px) and (min-width:768px) {
  .wrapper {
    width: 100%;
    height: auto;
    transform:none;
    position:unset;
    overflow: hidden;
    margin: 0 auto;
    margin-top:200px;
  }

  .wrapper ul li {
    width: 400px;
    height: 400px;
    margin: 0;

    float: left;
    cursor: pointer;
    padding:2em;
  }

  .wrapper ul {
    width: 100%;
    float: none;
    height: auto;
    position: relative;

    transform:none;
    display:flex;
    flex-direction: column;
  }
  .wrapper ul li:first-of-type {
    margin-left: 0px;
}
.wrapper ul li {
    width: 400px;
    height: 200px;
    margin: 0;

    float: left;
    cursor: pointer;
    padding: 0em;
    margin-bottom: 3em;
}

} */


@media (max-width: 1024px) {
    .wrapper ul {
      width: 100%;
      float: none;
      height: auto;
      position: relative;
      top: 75%;
      transform: translateY(-50%);
      display: flex;

      justify-content: center;
      overflow: scroll;
      overflow-y: hidden;
  }
  .wrapper ul li:first-of-type {
    margin-left: 1400px;
}

::-webkit-scrollbar {
    -webkit-appearance: none;
    width: 0px;
    background: none;
    border-left: none;
}
::-webkit-scrollbar {
    -webkit-appearance: none;
    width: 10px;
    background: none;
    border-left: none;
}
::-webkit-scrollbar-thumb {
    background: none;
}

.wrapper ul li {
  width: 400px;
  height: 800px;
  margin: 0;

  float: left;
  cursor: pointer;
  padding:2em;
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

  <a href="#bottom" id="top"></a>

  <div style="background: #1f1e27 !important;" id="site-wrapper">
    <a href="#veryBottom" id="veryTop"></a>
    <?php include("nav-include/about-navbar.php"); ?>

    <div id="tipModal">
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-lg-12">
<div class="background">
</div>
    <div class="wrapper">
      <ul>
        <li>
          <span class="number transparent content-top">01</span>
          <h1 class="bigBlocks transparent content-middle">BE AMAZING</h1>
          <p class="bigBlocks transparent content-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <hr id="line" class="trans--grow hr1">
        </li>
        <li>
          <span class="number transparent content-top">02</span>
          <h1 class="bigBlocks transparent content-middle">BE AMAZING</h1>
          <p class="bigBlocks transparent content-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <hr id="line" class="trans--grow hr1">
        </li>
        <li>
          <span class="number transparent content-top">03</span>
          <h1 class="bigBlocks transparent content-middle">BE AMAZING</h1>
          <p class="bigBlocks transparent content-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <hr id="line" class="trans--grow hr1">
        </li>
        <li>
          <span class="number transparent content-top">04</span>
          <h1 class="bigBlocks transparent content-middle">BE AMAZING</h1>
          <p class="bigBlocks transparent content-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <hr id="line" class="trans--grow hr1">
        </li>
        <li>
          <span class="number transparent content-top">05</span>
          <h1 class="bigBlocks transparent content-middle">BE AMAZING</h1>
          <p class="bigBlocks transparent content-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <hr id="line" class="trans--grow hr1">
        </li>
        <li>
          <span class="number transparent content-top">06</span>
          <h1 class="bigBlocks transparent content-middle">BE AMAZING</h1>
          <p class="bigBlocks transparent content-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <hr id="line" class="trans--grow hr1">
        </li>
        <li>
          <span class="number transparent content-top">07</span>
          <h1 class="bigBlocks transparent content-middle">BE AMAZING</h1>
          <p class="bigBlocks transparent content-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <hr id="line" class="trans--grow hr1">
        </li>
        <li>
          <span class="number transparent content-top">08</span>
          <h1 class="bigBlocks transparent content-middle">BE AMAZING</h1>
          <p class="bigBlocks transparent content-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <hr id="line" class="trans--grow hr1">
        </li>

      </ul>
    </div>

</div>
</div>
</div>

    <?php include("footer-include/about-footer.php"); ?>

  </div>


      <script
      src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

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
    jQuery(".wrapper ul").on( 'mousemove', function( event ) {{


		var mouse = {
			x: 0, // Current x-axis position of mouse
		};

		var containerItems = jQuery('.wrapper ul').width();
		var docWidth = jQuery(".wrapper ul").width();

		var docMinWidth = jQuery(".wrapper ul").width();

		mouse.x = event.clientX || event.pageX;

		mouse = mouse.x - 0;
		var Translate = mouse * 200 / docWidth;
		//console.log(Translate);

		jQuery('.wrapper ul').css({
             '-webkit-transform':'translateX(-'+Translate+'%) translateY(-50%)'
            ,'-moz-transform':'translateX(-'+Translate+'%) translateY(-50%)'
            ,'transform':'translateX(-'+Translate+'%) translateY(-50%)'
        });

	}
	});






  var currentBackground = 0;

  var backgrounds = [];

  backgrounds[0] = 'images5/buff.jpg';

  backgrounds[1] = 'images5/gg-blanks.png';

  backgrounds[2] = 'images5/lmale.png';

  backgrounds[3] = 'images5/buff.jpg';

  backgrounds[4] = 'images5/gg-blanks.png';

  function changeBackground() {

      currentBackground++;

      if(currentBackground > 4) currentBackground = 0;

      $('.background').fadeOut(1500,function() {
          $('.background').css({
              'background-image' : "url('" + backgrounds[currentBackground] + "')"
          });
          $('.background').fadeIn(1500);
      });


      setTimeout(changeBackground, 5000);
  }

  $(document).ready(function() {

      setTimeout(changeBackground, 5000);

  });



  $('.background').addClass('kenburns-top');

setTimeout(function() {
  $('.background').removeClass('kenburns-top');
},3000)

  setTimeout(function() {
  $('.content-top').removeClass('transparent').addClass('animated fadeInUp slow')

}, 1000)


  setTimeout(function() {
  $('.content-middle').removeClass('transparent').addClass('animated fadeInUp slow')

}, 1100)

setTimeout(function() {
$('.content-bottom').removeClass('transparent').addClass('animated fadeInUp slow')

}, 1100)


setTimeout(function() {
$('.content-last').removeClass('transparent').addClass('animated fadeInLeft')

})




  </script>

      </body>
      </html>
