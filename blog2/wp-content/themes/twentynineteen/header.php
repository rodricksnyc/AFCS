<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link type="image/png" href="http://v4.afciviliancareers.com/images5/afcs-favicon.png" rel="icon">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script
src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<title><?php echo "Air Force Civilian Service 4.0"; ?></title>
	<?php wp_head(); ?>
</head>

<style>
body {
  font-family: 'Roboto Condensed', sans-serif;
  width: 100%;
  font-weight: 100 !important;
 	background-image: linear-gradient(to right, #030304, #060506, #0c0b0f, #121116, #201f28, #292834, #2b2a35, #2c2b37);

}

.site-branding-container {
  display:none;
}

p {

 text-align:left;
}

.entry .entry-meta, .entry .entry-footer {
    color: white;
    font-weight: 500;
    display: none;
}

.entry .entry-title:before {

  display:none
}

.entry .entry-content a {
    text-decoration: underline;
		color:white !important;
}

.entry .entry-footer {

    display: none;
}

.entry .entry-content, .entry .entry-summary {
    max-width: 100%;
    padding: 0 60px;
    display: inline-block;
    color: white;
		padding-bottom:6em;
		padding-top:3em;
}

.entry .entry-title {
    margin: 0;
    font-size: 18px;
    font-size: 32px !important;
    padding-top: 2em;
}

.navbar {
      max-height: 69px;
}

li {
  font-family: 'Roboto Condensed', sans-serif;
}

h1.tribe-events-page-title {
  color:white !important;
  font-family: 'Roboto Condensed', sans-serif;
  padding-right:20px;
  padding-left:20px;
}
.single-tribe_events .tribe-events-single-event-title {
  color:white !important;
  font-family: 'Roboto Condensed', sans-serif;
}

.tribe-events-schedule h2 {
	color:white !important;
  font-family: 'Roboto Condensed', sans-serif;

}


 h2 {
	color:white !important;
  font-family: 'Roboto Condensed', sans-serif;

}

.navLogo {
  max-height:36px;
}

.tribe-events-sub-nav li a {
    background: none;
}


p {
	color:white !important;
  font-family: 'Roboto Condensed', sans-serif;
  font-size:14px;

}


.single-tribe_events #tribe-events-content .tribe-events-event-meta dt {
    clear: left;
    font-weight: 700;
    line-height: 1;
    list-style: none;
    color: white;
  font-family: 'Roboto Condensed', sans-serif;
}

.tribe-event-date-start {
 color:white !important;
  font-family: 'Roboto Condensed', sans-serif;
}

#colophon .site-info {
    color: #767676;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    -ms-hyphens: auto;
    hyphens: auto;
    word-wrap: break-word;
    display: none;
}


#tribe-events .tribe-events-button, #tribe-events .tribe-events-button:hover, #tribe_events_filters_wrapper input[type=submit], .tribe-events-button, .tribe-events-button.tribe-active:hover, .tribe-events-button.tribe-inactive, .tribe-events-button:hover, .tribe-events-calendar td.tribe-events-present div[id*=tribe-events-daynum-], .tribe-events-calendar td.tribe-events-present div[id*=tribe-events-daynum-]>a

{

  background-color: #61aceb;
    color: white !important;

}

::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 10px;
  background: #f1f3f5;
  border-left: 1px solid #d3dae0;
}
::-webkit-scrollbar-thumb {
  background: #b6c0cb;
}

.navbar-default {
    background-image: -webkit-linear-gradient(top,#fff 0,#f8f8f8 100%);
    background-image: -o-linear-gradient(top,#fff 0,#f8f8f8 100%);
    background-image: -webkit-gradient(linear,left top,left bottom,from(#fff),to(#f8f8f8));
    background-image: linear-gradient(to bottom,#fff 0,#f8f8f8 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#fff8f8f8', GradientType=0);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
    background-repeat: repeat-x;
    border-radius: 0px !important;
    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.15), 0 1px 5px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 0 rgba(255,255,255,.15), 0 1px 5px rgba(0,0,0,.075);
    padding-bottom: 17px;
    border: none !important;
}



.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
    color: #555;
    background: none !important;
  font-family: 'Roboto Condensed', sans-serif;
}

.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.open>a {
    background-image: none !important;

    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}


.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {

    background: none !important;
    font-family: 'Roboto Condensed', sans-serif;
    color: #0f1932 !important;
    font-size: 18px;
    font-weight: 500;
}

.single-tribe_events .tribe-events-schedule {
  background: none;
   border: none;
   margin: 18px 0 8px;

}



.navbar-right.two {
  padding-top:.4em !important;
}
.fas.fa-search {
 padding-top:.3em !important;
 color:#0f1932;
}

.fas.fa-search:focus {
  outline:none !important;
}

.searchButton {
    padding-top: 0px;
    background:none;
    border: none;
}

.horizontalDiv {
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
}

.navbar-toggle {
    margin-top: 15px !important;
}

/* acquisitions navbar */

#testDrop{
  display:none;
}

#nucDrop{
  display:none;
}

#maintDrop{
  display:none;
}

#rdDrop{
  display:none;
}

#smDrop {
  display:none;
}

#mt67 {
  margin-top:67px;
}

.nope {
  padding-bottom:15px;
}

.ml15 {
  margin-left:15px;
}

.navigation {
  height: 70px;
  background: #0f1932 !important;
  position:fixed;
  z-index:999;
  top:66px;
  width:100%;

}
.brand {
  position: absolute;
  padding-left: 20px;
  float: left;
  line-height: 70px;
  text-transform: uppercase;
  font-size: 1.4em;
}
.brand a, .brand a:visited {
  color: #fff;
  text-decoration: none;
}
.nav-container {
  /* max-width: 1000px; */
  margin: 0 auto;
}
nav.secondNav {
  float: right;
}
nav.secondNav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
nav.secondNav ul li {
  float: left;
  position: relative;
}
nav.secondNav ul li a, nav ul li a:visited {
  display: block;
  padding: 0 20px;
  line-height: 70px;
  background: #0f1932 !important;
  color: #fff;
  text-decoration: none;
}
nav.secondNav ul li a:hover, nav ul li a:visited:hover {
  background: #2581dc;
  color: #fff;
}
nav.secondNav ul li a:not(:only-child):after, nav ul li a:visited:not(:only-child):after {
  padding-left: 4px;
  content: ' ▾';
}
nav.secondNav ul li ul li {
  min-width: 190px;
}
nav.secondNav ul li ul li a {
  padding: 15px;
  line-height: 20px;
}
.nav-dropdown {
  position: absolute;
  display: none;
  z-index: 1;
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
}
/* Mobile navigation */
.nav-mobile {
    display: none;
    position: absolute;
    top: 0;
    right: 3px;
    background: transparent;
    height: 70px;
    width: 70px;
}


@media only screen and (max-width: 991px) {
  .nav-mobile {
    display: block;
  }
  nav.secondNav {
    width: 100%;
    padding: 70px 0 15px;
  }
  nav.secondNav ul {
    display: none;
  }
  nav.secondNav ul li {
    float: none;
  }
  nav.secondNav ul li a {
    padding: 15px;
    line-height: 20px;
  }
  nav.secondNav ul li ul li a {
    padding-left: 30px;
  }
  .nav-dropdown {
    position: relative;
  }
}
@media screen and (min-width: 992px) {

  .navbar-toggle {

    margin-top: 15px !important;

}

.navbar-default .navbar-toggle {

    margin-top: 15px !important;
}


  .nav-list {
    display: block !important;
  }
}
#nav-toggle {
  position: absolute;
  left: 26px;
  top: 22px;
  cursor: pointer;
  padding: 10px 35px 16px 0px;
}
#nav-toggle span, #nav-toggle span:before, #nav-toggle span:after {
  cursor: pointer;
  border-radius: 1px;
  height: 1.45px;
  width: 20px;
  background: #fff;
  position: absolute;
  display: block;
  content: '';
  transition: all 300ms ease-in-out;
}
#nav-toggle span:before {
  top: -6px;
}
#nav-toggle span:after {
  bottom: -6px;
}
#nav-toggle.active span {
  background-color: transparent;
}
#nav-toggle.active span:before, #nav-toggle.active span:after {
  top: 0;
}
#nav-toggle.active span:before {
  transform: rotate(45deg);
}
#nav-toggle.active span:after {
  transform: rotate(-45deg);
}




#secondSearch {
  font-size:16px;
  padding-top: .5em !important;
}


#barTop {
  font-size:20px !important;
  color:#0f1932 !important;
  margin-left:-6.5em !important;
  margin-right:5em !important;
  margin-top:.1em !important;
}
.form-control {
  border-radius:0 !important;
  /* min-width:260px !important; */
}

.searchIt{
  width:52px;

}

@media (min-width:992px) {
.navbar {
  height:71px !important;
}

.navbar-collapse.collapse.two {
  height:69px !important;
}
.navbar {
  border-top:1px solid #0f1932;
  border-bottom:1px solid #0f1932;
}
}


.navLogo {
  max-height:36px;
}

a.navyBlock {
  font-weight:100 !important;
}

#list1 {
  width:70px !important;
  color:#767677;
}

#list2 {
  width:70px !important;
  color:#767677;
}

#list3 {
  width:78px !important;
  color:#767677;
}
#list4 {
  width:99px !important;
  color:#767677;
}

#list5 {
  width:80px !important;
  color:#767677;
}

.fab.fa-facebook {
  color:#3B5998;
  font-size:20px;
}

.fa.fa-linkedin-square {
  color:#4875B4;
  font-size:20px;
}

.fab.fa-instagram {
  color:#de3d70;
  font-size:20px;
}

.fa.fa-twitter-square {
  color:#33CCFF;
  font-size:20px;
}

.fa.fa-youtube-square {
  color:#FF3333;
  font-size:20px;
}

#liSearch {
  width:78px !important;
  color:#767677;
}

#liRegister {
  width:78px !important;
  color:#767677;
}

#liSocial {
  width:68px !important;
  color:#767677;
}

#navRight1 {
  padding-top:.4em;
}

/* styles for internet explorer */


.nav {
    list-style-type: none !important
}

li {
  list-style-type: none !important;
}


@media (max-width: 480px){
.navbar-toggle {
    margin-top: 15px !important;
}

}




body {
  font-family: 'Roboto Condensed', sans-serif;
  width: 100%;
  font-weight: 100 !important;
  cursor: pointer;
  pointer-events: auto !important;
}
#site-wrapper {
  overflow-x:hidden !important;
}
h1 {
  color:white;
  font-size:30px;
}

#menu2 li.slide-line {
  display: none;
}

.navbar-fixed-top {
  z-index: 99991 !important;
}

a.social-head {
  padding:15px 10px 10px 10px !important;
}
.zero {
  opacity:0;
}
.transparent {
  opacity:0;
}

.searchWhite {
  color:white !important;
}
.searchGray {
  color:#0f1932 !important;
}

.form-control:focus {
  border-color: none !important;
  outline: 0 !important;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}

/* hero slider */

.slick-prev {
  left: 5px;
  z-index:9999;
}
.slick-next {
  right: 5px;
}
.slick-dots {
  bottom: -10px;
}
.hero-slide {
  background-position: center;
  background-size: cover;
  width:100%;
  background-repeat: no-repeat;
  background-position: 0px 5%;
  margin: 0 auto;
}
.hero-content {
  height: 400px;
  display: table-cell;
  vertical-align: middle;
}
.slide-message {
  margin-bottom: 20px;
}

/*
this is the class for the line animations on the a tags */

.aLine {
  top: 20px;
  left: 15px;
  width: 37px;
  padding: 0;
  margin: 0;
  background: none #0f1932;
  position: absolute;
  height: 3px;
  z-index: 0;
  margin-top: 1.2em !important;
}

.custCaption1, .custCaption2, .custCaption3, .custCaption4, .custCaption5, .custCaption6, .custCaption7, .custCaption8, .custCaption9, .custCaption10, .custCaption11, .custCaption12, .custCaption13, .custCaption14 {
  position: absolute;
  background-color:#0f1932;
  padding: 10px;
  color: white;
  margin: 5px;
  bottom: 0;
  left: 0;
  right: 0;
  height: auto;
  margin: 0;
  display: none;
  opacity:.8;
}

.custCaption1:hover, .custCaption2:hover, .custCaption3:hover, .custCaption4:hover, .custCaption5:hover, .custCaption6:hover, .custCaption7:hover, .custCaption8:hover, .custCaption9:hover, .custCaption10:hover, .custCaption11:hover, .custCaption12:hover, .custCaption13:hover, .custCaption14:hover {
  display:block;
}

.endDescription {
  color:white;
  font-family: 'Roboto Condensed', sans-serif;
  font-size:16px;
  font-weight:400;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-justify-content: flex-start;
  -moz-justify-content: flex-start;
  -ms-justify-content: flex-start;
  justify-content: flex-start;
  margin-left:1em;
  margin-right:1em;
  padding-bottom:2em;
  padding-top: 2em;

}
.flickity-page-dots {
  display: none;
}

.searchHover {
  background: #2f5399 !important;
  -webkit-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out
  color:white !important;
}

.grayHover {
  background: #d7d9dc !important;
  -webkit-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out
}

/* this is for the static words on left of slick slider */

h1 {
  font-family: 'Roboto Condensed', sans-serif;
  color:white;
  font-size:3.5em !important;
  font-weight:700;
  text-shadow: -4px 5px 7px rgba(30, 30, 30, 0.49);
}

p.register {
  padding-top: 0em;
  font-size: 1.4em !important;
}
.overlay {
  position:absolute;
  z-index:999;
  left: 6.8%;
  bottom: 43%;
  text-shadow: -4px 5px 7px rgba(30, 30, 30, 0.49);
}
.funThing {
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-flex-direction: column;
  -moz-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  position:absolute;
  z-index:999;
  left: 9%;
  bottom: 24%;
}

.verticalStuff{
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-flex-direction: column;
  -moz-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  position:absolute;
  z-index:999;
  left: 9%;
  bottom: 57%;
}
.whiteLine {
  background: white;
  width: 77px;
  height: 5px;
  position: absolute;
  z-index: 999;
  left: 7.2%;
  bottom: 35%;
}
#topLine1 {
  font-weight:500;
  font-size:1.8em !important;
  margin-bottom:0em;
}

#topLine2 {
  font-weight:500;
  font-size:1.5em !important;
  margin-top:0em;
  margin-bottom:.7em;
}
#topLine3 {
  font-weight:500;
  font-size:2.8em !important;
  margin-bottom:0em;
  margin-top:0em;
}
#topLine6 {
  font-weight:500;
  font-size:2em !important;
  margin-bottom:0em;
  margin-top:0em;
}
#topLine4 {
  font-weight:500;
  font-size:2.8em !important;
  margin-top:0em;
  margin-bottom:.5em;
  text-align: left;
}
#topLine7 {
  font-weight:500;
  font-size:2em !important;
  margin-top:0em;
  margin-bottom:.5em;
}
#topLine5 {
  font-weight:500;
  font-size:1.5em !important;
  margin-top:0em;
  margin-bottom:.1em;
}

.topBoxShadow {
  -webkit-box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);
  -moz-box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);
  box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);
}

.outer {
  margin-bottom:-2em;
  width:532px;
  height:72px;
  overflow:hidden;
  transition:height 500ms;
}
.outer2 {
  margin-bottom:-2em;
  width:532px;
  height:72px;
  overflow:hidden;
  transition:height 500ms;
}
.outer3 {
  margin-bottom:-2em;
  width:532px;
  height:72px;
  overflow:hidden;
  transition:height 500ms;
}

.inner {
  font-size:100px;
  transition:padding 1000ms;
  padding-top:200px;
  font-size: 2.6em;
  line-height:100px;
  font-family: 'Roboto Condensed', sans-serif;
  color: white;
  letter-spacing: 0.0em;
  font-weight: 100;
  color:white;
}
.inner2 {
  font-size:100px;
  transition:padding 1000ms;
  padding-top:201px;
  font-size: 2.6em;
  line-height:100px;
  font-family: "Roboto Condensed", sans-serif;
  color: white;
  letter-spacing: 0.0em;
  font-weight: 100;
  color:white;
}

.inner3 {
  font-size:100px;
  transition:padding 1000ms;
  padding-top:201px;
  font-size: 2.6em;
  line-height:100px;
  font-family: "Roboto Condensed", sans-serif;
  color: white;
  letter-spacing: 0.0em;
  font-weight: 100;
  color:white;
}

.innerOne{
  margin-top:-.5em;
  padding-top:0;
  transition:padding 1000ms;
  cursor:pointer;
  text-shadow: -1px 3px 7px rgba(30, 30, 30, 0.49);

}

.innerTwo{
  margin-top:-.5em;
  padding-top:0;
  transition:padding 1000ms;
  cursor:pointer;
  text-shadow: -1px 3px 7px rgba(30, 30, 30, 0.49);
}

.innerThree{
  margin-top:-.5em;
  padding-top:0;
  transition:padding 1000ms;
  cursor:pointer;
  text-shadow: -1px 3px 7px rgba(30, 30, 30, 0.49);
}
.innerOneDot   {
  margin-top:-.5em;
  padding-top:0;
  transition:padding 1000ms;
  cursor:pointer;
  text-shadow: -1px 3px 7px rgba(30, 30, 30, 0.49);
}
.innerTwoDot      {
  margin-top:-.5em;
  padding-top:0;
  transition:padding 1000ms;
  cursor:pointer;
  text-shadow: -1px 3px 7px rgba(30, 30, 30, 0.49);
}

.innerThreeDot    {
  margin-top:-.5em;
  padding-top:0;
  transition:padding 1000ms;
  cursor:pointer;
  text-shadow: -1px 3px 7px rgba(30, 30, 30, 0.49);
}
.newInner {
  transform: translate3d(0px, -180%, 0px);
  transition-timing-function: ease-out;
  transition: 1s;
}
.newInner2 {
  transform: translate3d(0px, -180%, 0px);
  transition-timing-function: ease-out;
  transition: 1s;
}
.newInner3 {
  transform: translate3d(0px, -180%, 0px);
  transition-timing-function: ease-out;
  transition: 1s;
}

.newInnerDot {
  transform: translate3d(0px, -180%, 0px);
  transition-timing-function: ease-out;
  transition: 1s;
}
.newInner2Dot {
  transform: translate3d(0px, -180%, 0px);
  transition-timing-function: ease-out;
  transition: 1s;
}
.newInner3Dot {
  transform: translate3d(0px, -180%, 0px);
  transition-timing-function: ease-out;
  transition: 1s;
}
.bottomBoxShadow {
  -webkit-box-shadow: 0px 33px 51px -19px rgba(0,0,0,0.75);
  -moz-box-shadow: 0px 33px 51px -19px rgba(0,0,0,0.75);
  box-shadow: 0px 33px 51px -19px rgba(0,0,0,0.75);
}

#firstBlock {
  position:absolute;
  z-index:999;
  left: 6.1%;
  bottom: 38%;
  padding-bottom:4.5em;
}
#secondBlock {
  position:absolute;
  z-index:999;
  left: 6.1%;
  bottom: 38%;
  padding-bottom:4.5em;
}
#thirdBlock {
  position:absolute;
  z-index:999;
  left: 6.1%;
  bottom: 38%;
  padding-bottom:4.5em;
}
.slideButton.one {
  position:absolute;
  z-index:300000;
  left:4%;
  bottom:2%
}

.slideButton.two {
  position:absolute;
  z-index:300000;
  left:5.5%;
  bottom:2%
}

.slideButton.three {
  position:absolute;
  z-index:300000;
  left:7%;
  bottom:2%
}

.slide__caption {
  z-index: -20;
  position: absolute;
}

.slide__caption2 {
  z-index: -20;
  position: absolute;
}
.mobileHidden {
  display:none;
}

.slide__caption3 {
  z-index: -20;
  position: absolute;
}
.set {
  position:relative;
}
.unset {
  position:unset;
}
.unset2 {
  position:unset;
}

.unset3 {
  position:unset;
}
.scrollMagic {
  position:absolute;
  width:100%;
  height:250px;
  margin-top:82em;
  z-index:9999999999;
}
.moveThis2 {
  height: 190px;
  width: 100% !important;
  position: absolute;
  z-index: 5;
  top: 109%;
}

.moveThis3 {
  height: 400px;
  width: 100% !important;
  position: absolute;
  z-index: 1000;
  top: 300%;
}




.strip1 {
  width:100%;
  height:auto;
}

.blockAcross1 {
  position: relative;
}
.blockAcross2 {
  position: relative;
}

.blockAcross3 {
  position: relative;
}

.blockAcross1:before {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-image: linear-gradient(to right, #252831, #373C49, #51545D, #717276, #ABABAB, #DFDFDF);
  opacity: 0.7;
}

.blockAcross2:before {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-image: linear-gradient(to right, #1b2134, #2D3344, #404658, #61646C, #8B8B8C, #AAAAAA );
  opacity: 0.7;
}

.blockAcross3:before {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-image: linear-gradient(to right, #2c2b37, #454352, #5A5864, #67666B, #7E7E7E, #D7D7DA );
  opacity: 0.7;
}

#hiddenVideos2 {
  display:none;
}

.square1 {
  height:200px;
  width:200px
}

.blockAcross1 {
  display: flex;
  justify-content: flex-end;
  align-items: flex-end;
}

.blockAcross2 {
  display: flex;
  justify-content: flex-end;
  align-items: flex-end;
}

.blockAcross3 {
  display: flex;
  justify-content: flex-end;
  align-items: flex-end;
}
.overlayText.two {
  font-family: "Roboto Condensed", sans-serif !important;
  color: white;
  font-size: 2em !important;
  font-weight: 500;
  margin-bottom: 0;
  position: absolute;
  z-index: 3;
  top: 33%;
  left: 12%;
  text-shadow: -1px 4px 6px rgba(0, 0, 0, 1) !important;
}

.w870 {
  max-width:870px;
}

.firstP {
  opacity:0;
}

.firstPThing {
  opacity:1;
}
.secondP {
  opacity:0;
}
.secondPThing {
  opacity:1;
}

::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 10px;
  background: #f1f3f5;
  border-left: 1px solid #d3dae0;
}
::-webkit-scrollbar-thumb {
  background: #b6c0cb;
}

/* flickity */

.flickity-prev-next-button.next {
  right: 10px;
  position: absolute;
  z-index: 3000;
}

.flickity-prev-next-button.previous {
  left: 10px;
  position: absolute;
  z-index: 3000;
}

/* images sliding up */

.moveThis {
  height: 440px;
  width: 100% !important;
  position: absolute;
  z-index: 200;
  top: 32%;
}

.tabletHidden {
  display:none;
}

.afcsHidden {
  width:75px !important;
  height:121px !important;
  margin-top:-4em;
}

.btn-link:hover, .btn-link:focus {
  color: white !important;
  text-decoration: none !important;
  background-color: transparent;
}

.card {
  text-align: left !important;
}

.btn-link {
  color: white !important;
  font-family: "Roboto Condensed", sans-serif;
  font-size:1em;
  font-weight:400;
}

.mobileFooter {
  display:none;
}

h4.panel-title {
  text-align:left !important;
}

.panel-body {
  text-align:left !important;
  padding-bottom:0em !important;
}

.panel-title > a:before {
  float: right !important;
  font-family: FontAwesome;
  content:"\f068";
  padding-right: 5px;
  font-weight: 100 !important;
  font-size: 13px;
  padding-top: 3px;
}
.panel-title > a.collapsed:before {
  float: right !important;
  content:"\f067";
  font-weight: 100 !important;
}
.panel-title > a:hover,
.panel-title > a:active,
.panel-title > a:focus  {
  text-decoration:none;
}

#footerA {
  color: #292a2e !important;
}

#footerA:hover {
  color: #292a2e !important;
}

#footerA:focus {
  color: #292a2e !important;
}

#footerB {
  color: white !important;
}

#footerB:hover {
  color: white !important;
}

#footerB:focus {
  color: white !important;
}

.card {
  margin-bottom:2em !important;
}

/* new classes for fonts on non-homepage */

h1.acq {
  font-size:2.6em !important;
  font-weight:700 !important;
  margin-bottom:1em;
  margin-top:0em;
}
h1.acq.two {
  font-size:1.8em !important;
  font-weight:400 !important;
  margin-bottom:1.4em;
}

#slideUpLiner {
  height:4px;
  width:100px;
  margin-top: 3em;
}

#slideUpLiner2 {
  height: 3px;
  width: 90px;
  margin-bottom: 55px;
}

#slideUpLiner3 {
  height: 3px;
  width: 90px;
  margin-bottom: 45px;
}

.slideDown1, .slideDown2, .slideDown3 {
  display:none;
  padding:10px;
}

.middleTablet {
  max-width:1200px;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-justify-content: flex-start;
  -moz-justify-content: flex-start;
  -ms-justify-content: flex-start;
  justify-content: flex-start;
  padding-bottom:2em;
}

.middleTablet.two {
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  padding-bottom:2em;
  text-align: left;
  padding-left: 1em;
  padding-right: 4em;
}

.flexStart {
  display: -webkit-flex;
  display:-moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-justify-content:flex-start !important;
  -moz-justify-content:flex-start !important;
  -ms-justify-content:flex-start !important;
  justify-content:flex-start !important;
  padding-left: 1em;
  padding-bottom: 1em;
}

.padding-0{
  padding-right:0;
  padding-left:0;
}

/* classes for the slide up blocks on each page  */


.block1Thing, .block2Thing, .block3Thing, .block14Thing, .block15Thing, .block44Thing  {
  -webkit-box-shadow: 0px 33px 51px -19px rgba(0,0,0,0.75);
  -moz-box-shadow: 0px 33px 51px -19px rgba(0,0,0,0.75);
  box-shadow: 0px 33px 51px -19px rgba(0,0,0,0.75);
  opacity:1;
}

.i1 {
  background-color: #262932;
  position:relative;
  opacity: 0.50;
  z-index: 2;
}

.i2 {
  background-color: #1b2134;
  position:relative;
  opacity: 0.60;
  z-index: 2;
}
.i3 {
  background-color: #2c2b37;
  position:relative;
  opacity: 0.50;
  z-index: 2;
}

.i4 {
  background-color: #262932;
  position:relative;
  opacity: 0.75;
  z-index: 2;
}
.i5 {
  background-color: #1b2134;
  position:relative;
  opacity: 0.75;
  z-index: 2;
}

.i6 {
  background-color: #262932;
  position:relative;
  opacity: 0.75;
  z-index: 2;
}
.i7 {
  background-color: #1b2134;
  position:relative;
  opacity: 0.75;
  z-index: 2;
}

.i8 {
  background-color: #2c2b37;
  position:relative;
  opacity: 0.75;
  z-index: 2;
}

.i88 {
  background-color: #2c2b37;
  position:relative;
  opacity: 0.75;
  z-index: 2;
}

.i1:hover, .i2:hover, .i3:hover {
  opacity:1;
}

.i6:hover, .i64:hover {
  opacity:1;
  background: #353945;
}

.i7:hover, .i5:hover {
  opacity:1;
  background: #272f4a;
}

.i8:hover {
  opacity:1;
  background: #343241;
}

.i88:hover {
  opacity:1;
  background: #343241;
}

.mb7 {
  margin-bottom:7em;
}
.mb12 {
  margin-bottom:12em;
}

.overlayText{
  font-family: "Roboto Condensed", sans-serif !important;
  color: white;
  font-size: 3.2em !important;
  font-weight: 300;
  margin-bottom:5px;
}

.whiteLine2 {
  background: white;
  width: 300px;
  height: 3px;
  position: absolute;
  z-index: 1000;
  top: 60%;
  left: 8%;
}
.hideThis {
  display:none;
}
.blackLine {
  width: 2px;
  background: #d7d9dc;
  margin-top: -.4em;
  height: 69px;
  margin-right: 2em;
  margin-right: 1em;
  margin-left: .6em;
}
.navyBlock {
  font-family: "Roboto Condensed", sans-serif ;
  font-weight: 100 !important;
  background: #0f1932 !important;
  padding: 23px 42px 25px 30px !important;
  position: relative;
  right: 0px;
  top: 14px;
  color: white !important;
  margin-top: -20px;
  margin-left: 1em;
  height: 70px;
  -webkit-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}

.navyBlock:hover {
  background: #2f5399 !important;
  -webkit-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
  font-weight:100 !important;
  -webkit-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}

.hero-content.acq {
  display:none;
}

.hero-content.first {
  display:none;
}

.bluish3 {
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  margin-bottom:7em;
}

.spreadAcross {
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-justify-content:space-around;
  -moz-justify-content:space-around;
  -ms-justify-content:space-around;
  justify-content:space-around;
  padding-left: 6px;
  padding-top: 15px;
  padding-bottom: 0em;
}

.allAcross {
  width:100%;
}

/* full with youtube on acq page */

.videoWrapperACQ {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 */
  padding-top: 25px;
  height: 0;
}
.videoWrapperACQ iframe {
  position: absolute !important;
  top: 0 !important;
  left: 0 !important;
  width: 100% !important;
  height: 100% !important;
  opacity:1 !important;
}

.center2.bluish2 {
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  margin-bottom:8em;
  margin-top: 2em;
}

.center.bluish2 {
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  margin-bottom:9em;
  margin-top: 2em;
}
.bluishButton {
  margin-top:40px;
  font-size: 14px;
  color:white !important;
  background-color: #2f5399;
  border: 2px solid transparent;
  font-weight: 300;
  padding: 12px 40px;
  letter-spacing: 1px;
  -webkit-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
  margin-right: 1em;
  margin-left:1em;
  width: 160px;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
}

.bluishButton.two {
  margin-top:40px;
  font-size: 14px;
  color:white !important;
  background-color: #2f5399;
  border: 2px solid transparent;
  font-weight: 300;
  padding: 14px 0px;
  letter-spacing: 1px;
  margin: 0;
  -webkit-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
  margin-right: 2em;
  width: 157px;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
}
.bluishButton:hover {
  background-color: transparent;
  border: 2px solid #2f5399;
  color: white;
  -webkit-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out
}

.bluishButton.two:hover {
  background-color: transparent;
  border: 2px solid #2f5399;
  color: white;
  -webkit-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out
}

.diversity {
  background-image: url(../images5/diversity.png);
  background-position: center;
  background-repeat: no-repeat;
  padding-left:0;
  padding-right:0;
  padding-bottom:0;
  padding-top:0;
  margin-top:0;
  margin-bottom:0;
  margin-left:0;
  margin-right:0;
  width: 100%;
  height: 900px;
  background-size: cover;
}

#map {
  height:700px !important;
}
#map-canvas {
  height:700px !important;
}
.blacker2 {
  padding-top:0em;
  background: #151a1f;
}

.away {
  visibility:hidden;
}

.back {
  font-size:20px !important;
}

li, a, p {
  font-family: "Roboto Condensed", sans-serif !important;
  font-weight: 100 !important;
}

a {
  font-family: "Roboto Condensed", sans-serif !important;

  font-weight: 100 !important;
  font-size:16px;
}

a.highlight {
  color:#767677;
  font-weight: 400 !important;
}
a.blacker {
  color:#767677;
  font-weight: 400 !important;
}

a.highlight:hover       {
  font-family: "Roboto Condensed", sans-serif !important;
  font-weight: 400 !important;
  font-size:16px !important;
  width:70px !important;
  height:50px !important;
  color: #0f1932 !important;
}

a.highlight.two:hover       {
  font-family: "Roboto Condensed", sans-serif !important;
  font-weight: 400 !important;
  font-size:16px !important;
  width:70px !important;
  height:50px !important;
  color: #0f1932 !important;
}

a.highlight.three:hover       {
  font-family: "Roboto Condensed", sans-serif !important;
  font-weight: 400 !important;
  font-size:16px !important;
  width:78px !important;
  height:50px !important;
  color: #0f1932 !important;
}

a.highlight.four:hover       {
  font-family: "Roboto Condensed", sans-serif !important;
  font-weight: 400 !important;
  font-size:16px !important;
  width:99px !important;
  height:50px !important;
  color: #0f1932 !important;
}
a.highlight.five:hover       {
  font-family: "Roboto Condensed", sans-serif !important;
  font-weight: 400 !important;
  font-size:16px !important;
  width:80px !important;
  height:50px !important;
  color: #0f1932 !important;
}

.blacker:hover {
  font-family: "Roboto Condensed", sans-serif !important;
  font-weight: 400 !important;
  font-size:16px !important;
  width:68px !important;
  height:50px !important;
  color: #0f1932 !important;
}

a.highlight.eight:hover       {
  font-family: "Roboto Condensed", sans-serif !important;
  font-weight: 400 !important;
  font-size:16px !important;
  width:66.58px !important;
  height:50px !important;
  color: #0f1932 !important;
}

a.highlight.nine:hover       {
  font-family: "Roboto Condensed", sans-serif !important;
  font-weight: 400 !important;
  font-size:16px !important;
  width:67px !important;
  height:50px !important;
  color: #0f1932 !important;
}

a.highlight.ten:hover       {
  font-family: "Roboto Condensed", sans-serif !important;
  font-weight: 400 !important;
  font-size:16px !important;
  width:78px !important;
  height:50px !important;
  color: #0f1932 !important;
}

a.highlight.eleven:hover       {
  font-family: "Roboto Condensed", sans-serif !important;
  font-weight: 400 !important;
  font-size:16px !important;
  width:98px !important;
  height:50px !important;
  color: #0f1932 !important;
}

a.highlight.twelve:hover       {
  font-family: "Roboto Condensed", sans-serif !important;
  font-weight: 400 !important;
  font-size:16px !important;
  width:80px !important;
  height:50px !important;
  color: #0f1932 !important;
}

.blacker.thirteen:hover       {
  font-family: "Roboto Condensed", sans-serif !important;
  width:68px !important;
  font-weight:400!important;
  color: #0f1932 !important;
}

a.highlight.twelve {
  color:#767677 !important;
  font-weight:400!important;
}

a.highlight.eight {
  color:#767677!important;
  font-weight:400!important;
}
a.highlight.nine {
  color:#767677!important;
  font-weight:400!important;
}
a.highlight.ten {
  color:#767677!important;
  font-weight:400!important;
}

a.highlight.eleven {
  color:#767677!important;
  font-weight:400!important;
}

a.blacker.thirteen {
  color:#767677!important;
  font-weight:400!important;
}

.listOne {
  width:66.58px!important
}
.listOne:hover {
  width:66.58px!important
}
.listTwo {
  width:67px!important;
}
.listTwo:hover {
  width:67px!important;
}
.listThree {
  width:78px!important;
}
.listThree:hover {
  width:78px!important;
}
.listFour {
  width:98px!important;
}
.listFour:hover {
  width:98px!important;
}
.listFive {
  width:80px!important;
}
.listFive:hover {
  width:80px!important;
}

a.highlight.twelve:hover       {
  font-family: "Roboto Condensed", sans-serif !important;
  font-weight: 400 !important;
  font-size:16px !important;
  width:80px;
  height:50px;
  color: #0f1932 !important;
}

/* the bars that turn into an X */

.con,
.special-con {
  cursor: pointer;
  display: inline-block;
}

.bar {
  display: block;
  height: 3px;
  width: 22px;
  background: #0f1932;
  margin: 4px auto;
}

.con {
  width: auto;
  margin: 0 auto;
  -webkit-transition: all .5s ease;
  -moz-transition: all .5s ease;
  -ms-transition: all .5s ease;
  -o-transition: all .5s ease;
  transition: all .5s ease;
  margin-top:-.1em;
}

.con:hover .bar,.special-con:hover .bar {
  background-color: black;
}

.middle {
  margin: 0 auto;
}

.bar {
  -webkit-transition: all .5s ease;
  -moz-transition: all .5s ease;
  -ms-transition: all .5s ease;
  -o-transition: all .5s ease;
  transition: all .5s ease;
}

.con:hover .top {
  -webkit-transform: translateY(7px) rotateZ(45deg);
  -moz-transform: translateY(7px) rotateZ(45deg);
  -ms-transform: translateY(7px) rotateZ(45deg);
  -o-transform: translateY(7px) rotateZ(45deg);
  transform: translateY(7px) rotateZ(45deg);
}

.con:hover .bottom {
  -webkit-transform: translateY(-7px) rotateZ(-45deg);
  -moz-transform: translateY(-7px) rotateZ(-45deg);
  -ms-transform: translateY(-7px) rotateZ(-45deg);
  -o-transform: translateY(-7px) rotateZ(-45deg);
  transform: translateY(-7px) rotateZ(-45deg);
}

.con:hover .middle {
  width: 0;
}

/* end of X effect */

.gray:hover {
  font-weight: bold !important;
}
.noshow {
  display:none;
}
.noshow2 {
  display:none;
}

.showIt {
  display: block !important;
}

.icon {
  opacity:.3
}
.navbar-nav {
  float: left;
  margin: 0;
  margin-right: 1em;
}


/* slick slider  */
.slick-slider {
  margin-bottom: 0px !important;
}

.slick-slider, .slick-list, .slick-track {
  height: 100%;
}
.slick-slider {
  overflow: hidden;
  margin-top: 4.5em !important;
}
.slick-slider button {
  cursor: pointer !important;
}
.slick-slider .slick-track .slick-slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.slick-arrow, .slick-dots {
  position: absolute;
  z-index: 15;
}
.slick-arrow {
  top: 50%;
}
.slick-arrow.slick-prev {
  left: 0;
}
.slick-arrow.slick-next {
  right: 0;
}
.slick-dots {
  width: 100% !important;
  bottom: 2%;
  left: -42%;
  text-align: center;
}
.slick-dots li {
  display: inline-block;
}

.slick-arrow.slick-next {
  right: 0;
  display: none !important;
}
.slick-arrow.slick-prev {
  right: 0;
  display: none !important;
}

.slick-dots {
  position: absolute;
  display: block;
  width: 100%;
  padding: 0;
  margin: 0;
  list-style: none;
  text-align: center;
}
.slick-dots li button {
  position: relative;
  display: inline-block;
  width: 12px;
  height: 12px;
  margin: 25px 5px 20px 5px;
  padding: 0;
  cursor: pointer;
}
.slick-dots li button {
  font-size: 0;
  line-height: 0;
  display: inline-block;
  width: 14px;
  height: 14px;
  padding: 4px;
  border-radius: 50%;
  cursor: pointer;
  color: white;
  border: 0;
  outline: none;
  background: white;
  margin-top: 0px;
}

li.slick-active button {
  background: #0098da;
}

.slick-dots {
  position: absolute;
  z-index: 3000;
}
.slick-dots {
  bottom: 10px !important;
}
.w800 {
  max-width:800px;
  padding-top:80px;
  padding-left: 2em;
  padding-right: 2em;
  padding-bottom: 35px;
}
.whiteLine3 {
  width:90px;
  height:3px;
  background:white;
  margin-bottom:45px;
}
.whiteLine3.two {
  width:90px;
  height:3px;
  background:white;
  margin-bottom:45px;
}
.navbar {
  border-radius: 0px !important;
}

p.small {
  font-size:1.4em;
  font-weight:100 !important;
  text-align:left;
  line-height:33px;
  font-family: "Roboto Condensed", sans-serif;
  font-weight: 100 !important;
  color:white;
  margin-bottom:45px;
  letter-spacing: .04em;
}

p.small:last-of-type {
  margin-bottom: 55px;
}

.easeIt {
  transition-timing-function: ease-in-out;
}
.easeIt2 {
  -webkit-transition: all 800ms cubic-bezier(0.550, 0.055, 0.675, 0.190);
  -moz-transition: all 800ms cubic-bezier(0.550, 0.055, 0.675, 0.190);
  -o-transition: all 800ms cubic-bezier(0.550, 0.055, 0.675, 0.190);
  transition: all 800ms cubic-bezier(0.550, 0.055, 0.675, 0.190); /* easeInCubic */
}
.addIt {
  opacity:1;
}

/* flickity */

.m-carousel {
  opacity: 0;
  transition: all 0.3s ease;
  -webkit-box-shadow: 0px 33px 51px -19px rgba(0,0,0,0.75);
  -moz-box-shadow: 0px 33px 51px -19px rgba(0,0,0,0.75);
  box-shadow: 0px 33px 51px -19px rgba(0,0,0,0.75);
}
.m-carousel.flickity-enabled {
  opacity: 1 !important;
}
.m-carousel{
  opacity: 1 !important;

}
.m-carousel__item {
  opacity: 0.8;
  transition: opacity 0.3s ease;
  width: 50%;
  border-right: none;
}
.m-carousel__item.is-selected {
  opacity: 1;
}
.m-carousel__image {
  display: block;
  width: 100%;
  height: auto;
  opacity: 0;
  transition: opacity 0.3s ease;
}
.m-carousel__image.flickity-lazyloaded {
  opacity: 1;
}
.m-carousel .flickity-prev-next-button {
  border: none;
  background: none;
}
.m-carousel .flickity-prev-next-button path {
  fill: #fff;
}
.m-carousel .flickity-prev-next-button:hover {
  background: none;
}

.m-carousel__item {
  opacity: .3 !important;
  z-index: 9999999999999999;
}

.m-carousel__item.is-selected {
  opacity: 1 !important;
  z-index: 9999999999999999;
}

.darker {
  color:#0f1932  !important;
  font-weight:900 !important;
}

h1.acq {
    font-size: 2.6em !important;
    font-weight: 700 !important;
    margin-bottom: 45px;
    line-height: 53px;
}


  /* footer stuff */

	.smallAF {
    width:40px;
    height:35px;
    margin-right:1em;
  }

  footer {
    padding-top:40px;
    width: 100%;

    min-height: 260px;
    background-color: #292a2e;
    -webkit-box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);
    box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);
  }
  .whiteLink {
    font-family: 'Roboto Condensed', sans-serif;
    color:white !important;
    font-weight:100 !important;
    font-size: 14.4px;
    text-decoration: none;
  }

  .whiteLink.bottom {
    margin-left:10px;
    margin-right:10px;
    font-size: 13px;
    width:70px;
  }

  .whiteLink.bottom:first-of-type {
    margin-left: 60px;
    margin-right: 30px;
    font-size: 13px;
    width:70px;
  }

  .whiteLink.bottom:first-of-type:hover {
    margin-left: 60px;
    margin-right: 30px;
    font-size: 13px;
    width:70px;
  }

  .bottomFoot {
    padding-bottom:1em;
    padding-top:1em;
    margin-top:6em;
    padding-left:0em;
    background-color:#292a2e;
  }

  #bottomFoot {
    color:white;
    font-size:30px;
    margin-bottom:12px;
  }

  .whiteLink.dark {
    font-family: 'Roboto Condensed', sans-serif;
    color:#292a2e !important;
    font-weight:100 !important;
    font-size: 14.4px;
    text-decoration: none;
  }

  .whiteLink.two {
    font-family: 'Roboto Condensed', sans-serif;
    color:white !important;
    font-weight:500 !important;
    font-size: 14.4px;
    text-decoration: none;

  }
  .whiteLink:hover {
    font-size: 14.4px !important;
    text-decoration: none;
  }


    .whiteLink.bottom {
      margin-left:10px;
      margin-right:10px;
      font-size: 13px !important;
      width:70px;
    }

  .whiteLink.bottom:hover {
    margin-left:10px;
    margin-right:10px;
    font-size: 13px !important;
    width:70px;
  }

  #same {
    margin-left: 45px;
    margin-right: 20px;
    font-size: 13px;
    width:70px;
  }

  #same:hover {
    margin-left: 45px;
    margin-right: 20px;
    font-size: 13px;
    width:70px;
  }


  a.whiteLink.two:hover {
    font-size: 14.4px !important;
    text-decoration: none;
  }
  .horizontal6 {
    display: -webkit-flex;
    display:-moz-flex;
    display: -ms-flexbox;
    display:flex;
    -webkit-justify-content:flex-start !important;
    -moz-justify-content:flex-start !important;
    -ms-justify-content:flex-start !important;
    justify-content:flex-start !important;
    -webkit-align-items: center;
    -moz-align-items: center;
    -ms-align-items: center;
    align-items: center;
    background:#e6e6e6 !important;
  }
  .grayThing {
    background:#e6e6e6 !important;
  }

  .smaller {
    list-style-type: none;
    margin-bottom:.5em;
    text-align:left;
  }

  .mt4 {
    margin-top:-4em;
  }

  .smaller2 {
    list-style-type: none;
    margin-bottom:.5em;
    text-align:left;
  }
  .smaller3 {
    list-style-type: none;
  }

  .mbt-40 {
    padding-top:10px;
    padding-bottom:30px;
  }

  .afcsWhite {
    max-width:79px !important;
    /* margin-top:12em; */
    margin-top:9em;
  }

  p {
    font-family: 'Roboto Condensed', sans-serif;
    color:white !important;
  }
  .em2 {
    margin-left:2em;
  }

  .center {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flexbox;
    display:flex;
    -webkit-justify-content: center;
    -moz-justify-content: center;
    -ms-justify-content: center;
    justify-content: center
  }

  .center2 {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flexbox;
    display:flex;

    -webkit-justify-content: center;
    -moz-justify-content: center;
    -ms-justify-content: center;
    justify-content: center;
    margin-top:6em
  }

  li a.active {
    color:#0f1932;

  }

  #menu2 li.slide-line {
    padding:0;
    margin:0;
    background: black;
    position: absolute;
    left: 14px;
    top: 20px;
    height: 3px;
    z-index: 0;
    margin-top:1.2em !important;
    width:40px;
  }
  .lessThan {
    width:200px;
  }

  #box2 {
    position:relative;

  }
  .horizontal {
    display: -webkit-flex;
    display:-moz-flex;
    display: -ms-flexbox;
    display:flex;
    -webkit-justify-content:space-between;
    -moz-justify-content:space-between;
    -ms-justify-content:space-between;
    justify-content:space-between;
    -webkit-align-items: center;
    -moz-align-items: center;
    -ms-align-items: center;
    align-items: center;
  }


  /* images on hover expand */
  .parent {
    overflow: hidden;
    position: relative;

    display: inline-block;
    cursor: pointer;
  }

  .child {
    -webkit-transition: all .5s;
    -moz-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s;
  }
  .parent:hover .child, .parent:focus .child {
    -ms-transform: scale(1.09);
    -moz-transform: scale(1.09);
    -webkit-transform: scale(1.09);
    -o-transform: scale(1.09);
    transform: scale(1.09);
  }

  .child:before {
    content: "";
    display: none;
    position: absolute;
  }

  .flexCol {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flexbox;
    display:flex;
    -webkit-flex-direction: column;
    -moz-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
  }

  .spaceAround {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flexbox;
    display:flex;
    -webkit-justify-content:space-around;
    -moz-justify-content:space-around;
    -ms-justify-content:space-around;
    justify-content:space-around;
  }

  .spaceBetween {
    display: -webkit-flex;
    display:-moz-flex;
    display: -ms-flexbox;
    display:flex;
    -webkit-justify-content:space-between;
    -moz-justify-content:space-between;
    -ms-justify-content:space-between;
    justify-content:space-between;
  }

  .trans--grow{
    -webkit-transition: width 1s ease-out;
    transition: width 1s  ease-out;
    width : 0%;
  }

  .trans--grow10{
    -webkit-transition: width 1s ease-out;
    transition: width 1s  ease-out;
    width : 0%;
  }

  .trans--grow3{
    -webkit-transition: width 1s ease-out;
    transition: width 1s  ease-out;
    width : 0%;
  }
  .grow{
    width:105%;
  }

  .grow10{
    width:70%;
  }
  .hr{
    margin-left:0;
  }

  .hr1{
    margin-left:0;
  }

  .hr10{
    margin-left:0;
  }

  #b30, #b31 {
    bottom:30% !important;
  }

  #b33 {
    bottom:26% !important;
  }

  #topLine4 {
    font-weight: 500;
    font-size: 2.2em !important;
    margin-top: 0em;
    margin-bottom: .5em;
    text-align: left;
}

#topLine3 {
  font-weight: 500;
  font-size: 2.2em !important;
  margin-top: 0em;
  margin-bottom: 0em;
  text-align: left;
}

  #topLine5, #topLine2 {
    font-size:1.8em !important
  }

  .hr2{
    margin-right:0;
  }

  hr{
    margin-top: 0px;
    padding: 1px 0;
    border: none;
    background-color: white;
    letter-spacing: 5px;
  }
  button {
    outline: none !important;
  }

  .centerBlocks {
    display:block !important;
  }

  .slideDown1, .slideDown2, .slideDown3 {
      display: none;
      padding-left: 2em;
      padding-right: 2em;
  }


  /* search bar media query */

  @media (min-width: 768px) {
    .navbar-collapse.collapse.two {
      display: block!important;
      height: 73px;
      padding-bottom: 0;
      overflow: visible!important;
      padding-left: 1.6em;
      padding-bottom: 1em;
      background: #d7d9dc;
      margin-bottom: 0em;
    }

    .fas-fa-search:hover {
      color:white !important
    }

  }

  @media (min-width: 992px) {
    .hero-content {
      position: absolute;
      top: 30%;
      left: 6%;
    }
    .hero-content.acq {
      position: absolute;
      top: 22%;
      left: 6%;
    }
  }

  /* media queries */

  @media (min-width:1025px) {
    .slicker {
      text-shadow: 5px 2px 6px #3A3A3A;
      font-size: 7em;
      line-height:100px;
      color:white !important;
      margin-bottom:0em !important;
      font-weight:700;
      font-family: "Roboto Condensed", Arial, sans-serif;
    }

    .slicker.two {
      text-shadow: 5px 2px 6px #3A3A3A;

      font-size: 7em;
      line-height:100px;
      color:white !important;
      margin-bottom:0em;
      margin-top:-.2em;
      font-weight:700;
      font-family: "Roboto Condensed", Arial, sans-serif;
    }

    .slicker.three {
      text-shadow: 5px 2px 6px #000000;
      font-weight:lighter !important;
      font-size: 3em !important;
      line-height:80px;
      color: white;
      letter-spacing: 0.0em;
      margin-top: -.6em;
      margin-bottom: 1.2em;
      color:white !important;
      font-family:"Roboto Condensed", Arial, sans-serif
    }

    .hiddenSlider2 {
      display: none;
    }
  }

  /* more media queries */

  @media (max-width:1024px) {

    .overlayText {
      font-family: "Roboto Condensed", sans-serif !important;
      color: white;
      font-size: 2em !important;
      font-weight: 300;
      margin-bottom: 5px;
    }

    .hero-slide {
      background-position: center;
    }

  }

  @media (max-width:580px) {
    .closeThis, .closeThis2, .closeThis3, .closeThis4, .closeThis5, .closeThis6, .closeThis7, .closeThis8, .closeThis9, .closeThis10 {
      position: absolute;
      top: -4% !important;
      right: -9% !important;
      color: #f1f1f1;
      font-size: 40px;
      font-weight: lighter;
      transition: 0.3s;
      cursor: pointer;
    }
  }

  @media (max-width:1024px) and (min-width:768px) {
    .slick-slider, .slick-list, .slick-track {
      height: 100%;
      max-height: 500px;
    }

  }

  @media (max-width:767px) and (min-width:481px) {
    .slick-slider, .slick-list, .slick-track {
      height: 100%;
      max-height: 370px;
    }
  }

  @media (max-width:480px) {
    .slick-slider, .slick-list, .slick-track {
      height: 100%;
      max-height: 290px;
    }
  }

  @media (max-width:1024px) {

    #topLine4 {
      font-weight: 500;
      font-size: 2em !important;
      margin-top: 0em;
      margin-bottom: .2em;
    }
    .center.bluish2 {
      -webkit-align-items: center;
      -moz-align-items: center;
      -ms-align-items: center;
      align-items: center;
    }
    .bluishButton {
      margin-right:0em;
      margin-bottom:1em;
    }
    .block1, .block2, .block3, .block44, {
      display:none !important;
    }

    .block4, .block6, .block17, .block10, .block5, .block18, {
      opacity:1 !important;
    }

    .w800 {
      padding-top:40px !important;
    }

    .slicker {
      margin-top:0em !important;
      font-size:4em !important;
    }
    .slicker.two {
      font-size:4em !important;
      margin-top:-.6em !important;
    }

    .center2 {
      margin-top:4em !important;
    }

    .center2.bluish2 {
      margin-bottom:6em !important;
    }

    .hiddenSlider2 {
      display: flex;
    }
  }

  @media (max-width: 1024px) and (min-width: 992px){

    .slick-dots {
      width: 100% !important;
      bottom: 2%;
      left: -41.5%;
    }
    .slicker.three {
      font-size:1.8em !important;
      font-weight:lighter !important;
      margin-bottom:0em !important;
      margin-top:-1em !important;
    }
    #hiddenVideos {
      padding-top: 2em !important;
    }
    .close3 {
      padding-top:1em !important;
    }


  }

  @media (max-width: 991px) and (min-width: 768px){
    .slicker {
      margin-top: 2em !important;
    }
    .slick-dots {
      width: 100% !important;
      bottom: 2%;
      left: -42.5% !important;
      text-align: center;
    }
    .slicker.three {
      font-size:1.8em !important;
      font-weight:lighter !important;
      margin-bottom:0em;
      margin-top:-1em !important;
    }
    #hiddenVideos {
      padding-top: 2em !important;
    }
    .close3 {
      padding-top:1em !important;
    }

    .smaller, .smaller2 {
      margin-bottom:0em;
    }


  }

  @media (max-width:1024px) and (min-width:768px) {
    .funThing {
      left:12%;
    }

    #b31 {
    bottom: 14% !important;
}

    hr {
    margin-top: 0px;
    padding: 1px 0;
    border: none;
    background-color: white;
    letter-spacing: 5px;
}

    #topLine5, #topLine2, #topLine4, #topLine3 {
      font-size:1.4em !important;
    }


    h1.acq {
      font-size: 2.6em !important;
    }

    p.register {
      padding-top: 1em;
      font-size: 1.4em !important;
    }

    .m-carousel.flickity-enabled {
      opacity: 1 !important;
      display:block !important;

    }
    .m-carousel{
      opacity: 1 !important;
      display:block !important;
    }
    #wide {
      min-width:1078px;
      max-height:840px;
    }

    .center.bluish2 {
      -webkit-justify-content:space-around !important;
      -moz-justify-content:space-around !important;
      -ms-justify-content:space-around !important;
      justify-content:space-around!important;
    }

  }

  @media (max-width:991px) {
    .hideOnTablet {
      display:none !important;
    }

    .tabletHidden {
      display:block;
    }
    .whiteLine3.two {
      margin-top: 17.5em !important;
    }

  }

  @media (min-width: 768px){
    .navbar-form .form-group {
      display: inline-block;
      margin-bottom: 0;
      vertical-align: middle;
      padding-right: 3em;
      outline:none !important;
    }
    input {
      outline:none !important;
    }

  }

  @media (max-width:767px) {

    #mobileSmall {
      max-height:340px !important;
      width:100% !important;
    }

    .funThing {
      left:12%;
    }
    #topLine5, #topLine2 {
      font-size:1.2em !important;
    }

     #topLine4, #topLine3 {
       font-size:1.6em !important;
     }

    hr {
    margin-top: 0px;
    padding: 1px 0;
    border: none;
    background-color: white;
    letter-spacing: 5px;
}

    #slideUpLiner {
      height: 3px;
      width: 70px;
    }
    .m-carousel__item  {
      width: 100% !important; /* full width */
      min-height: 250px !important; /* height of carousel */
      margin-right: 0px;
    }
    .smallerOverlay {
      font-weight:500 !important;
      font-size:2.5em !important;
      margin-bottom: 0em;
      margin-top: 0em;
    }
    .slick-dots li button {
      position: relative;
      display: inline-block;
      width: 12px;
      height: 12px;
      margin: 25px 3px 20px 3px;
      padding: 0;
      cursor: pointer;
    }
    .hideSome {
      margin-top: 0em !important;
    }

    #slideUpLiner {
      height:2px;
      width:60px;
    }
    .hideOnMobile {
      display:none !important;
    }
    .mobileHidden {
      display: block;
      margin-top: 0em;
    }
    .bluish3 {
      -webkit-align-items: center;
      -moz-align-items: center;
      -ms-align-items: center;
      align-items: center;
      display: -webkit-flex;
      display: -moz-flex;
      display: -ms-flexbox;
      display:flex;
      -webkit-flex-direction: column;
      -moz-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
    }
    .mobileFooter {
      display:block;
    }

    .card-body {
      margin-top:1em;
    }
    p.register {
      padding-top: 0em;
      font-size: 16px !important;
      text-align: center;
      padding-left: 1em;
      padding-right: 1em;
    }

    p.register.two {
      margin-top:2em !important;
      margin-bottom:1em !important;
    }

    p.small {
      font-size: 16px !important;
      text-align:center !important;
    }

    .largeFooter {
      display:none;
    }

    .slicker.three {
      font-size:1.4em !important;
      margin-top: -1em !important;
      font-weight:100;
    }
    .slick-dots {
      width: 100% !important;
      bottom: 2%;
      left: -39% !important;
      text-align: center;
    }

    .slick-dots li button {
      height:11px !important;
      width:11px !important;
    }

    .slicker {
      font-size: 2em !important;
      margin-top: 3em !important;
    }
    .slicker.two {
      font-size: 2em !important;
      margin-top: -3em !important;
    }
    .slide-message {
      margin-bottom: 15px;
    }
    .center2.bluish2 {
      -webkit-justify-content: space-around !important;
      -moz-justify-content: space-around !important;
      -ms-justify-content: space-around !important;
      justify-content: space-around !important;
      padding-right: 2em;
      padding-left: 2em;
    }

    .bluishButton.two {
      margin-right:0em !important;
    }

    .bluishButton {
      margin-right:0em !important;
      margin-bottom:1em !important;
      margin-left:0em !important;
      margin-top:1em !important
    }
    h1.acq {
      font-size: 2em !important;
    }

    .mt4 {
      margin-top: -2em !important;
    }
    .diversity {
      height: 400px !important;
    }
		.smaller3 {
		list-style-type: none;
		margin-bottom: .5em;
}

.smaller, .smaller2 {
	margin-bottom:0em;
}

  }

  @media (min-width:992px) {
    .nope {
      display:none;
    }
    #bs-example-navbar-collapse-1 {
      padding-top:.4em
    }
  }

  @media (max-width:991px) {

    li {
      height:40px !important;
    }

    li:hover {
      height:40px !important;
    }
    .hideNav {
      display:none;
    }

    .slide-line {
      display:none !important;
    }

    .noShow2 {
      display:none;
    }
    .social {
      display:none !important;
    }
    .nope {
      display:block;
    }

  }
  .slick-slider {
    visibility: hidden;
  }
  .slick-slider.slick-initialized {
    visibility: visible;
  }

  /* styles for internet explorer */
  li {
    list-style-type: none !important;
  }
  .nav {
    list-style-type: none !important;
  }
  @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
    .con {
      margin-top:-.2em;
    }
    .bar {
      margin:5px auto;
    }
  }

  @media (min-width:1025px) {

    .hero-slide {
      background-size: center;
      width: 100%;
      background-repeat: no-repeat;
      background-position: center;
      padding: 3em;
      max-height:700px !important;
    }

    #hero-slider2 {
      max-height:700px !important;
    }

    #hero-slider {
      max-height:700px !important;
    }

  }


  @media (max-width: 768px) and (min-width:576px) {
  .col-xs-12.shrink {
    width: 33.33333333333333% !important;
  }

  }

  @media (max-width:767px) {
    #topLine4 {
      font-weight: 500;
      font-size: 1.4em !important;
      margin-top: 0em;
      margin-bottom: .2em;
  }

  #topLine3 {
    font-weight: 500;
    font-size: 1.4em !important;
    margin-top: 0em;
    margin-bottom: .2em;
}

.bottomFoot {
    display: none;
}

  hr {
    padding: 1px 0;
  }

  .funThing {
    bottom: 25%;
  }

  .funThing:hover hr#line.trans--grow.hr1.grow {
      width: 110%;
  }

  hr.trans--grow.hr1.grow:active {
      width: 110% !important;
  }

  .slideDown1, .slideDown2, .slideDown3 {
    padding-top:1em !important;
    vertical-align: middle !important;
    position:relative;
    overflow:hidden;
  }

  hr.trans--grow.hr1.grow {
      width: 110%;
  }

  .slick-dots {
  width: 100% !important;
  bottom: 2%;
  left: -40.5% !important;
  text-align: center;
  }

  }

  body {
  font-family: 'Roboto Condensed', sans-serif;
}

#anchorPoint {
  margin-top:-26em;
  height:100px;
  background:transparent;
  position: absolute;
}
#anchorPoint2 {
  margin-top:-26em;
  height:100px;
  background:transparent;
  position: absolute;
}

.bottomShadow {
  -webkit-box-shadow: 0px 33px 51px -19px rgba(0,0,0,0.75);
  box-shadow: 0px 33px 51px -19px rgba(0,0,0,0.75);
  pointer-events:

}
.center.flexing-scroll{
  position: absolute;
  z-index: 2000;
  height: auto;
}

.block-div {
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display:flex;
  -moz-flex-direction: column;
  -ms-flex-direction: column;
  -webkit-flex-direction: column;
  flex-direction: column;
}

.block-div h1{
  font-weight:400;
}

.block-div hr{
  margin-top:1em;
}

.special-container img{
  max-height: 800px
}

.topShadow {
  -webkit-box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);
  -moz-box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);
  box-shadow: 0px -14px 40px -9px rgba(0,0,0,0.75);
}

body{
  overflow-x: hidden;
}

}
#hiddenVideos2{
  display:none;
}

#videosActive {
  display:none;
}

#videos {
  display:none;
}

#newsThing {
  display:none;
}

#newsThing2 {
  display:none;
}

#newsNon {
  display:none;
}

#events {
  display:none;
}

#eventsNon {
  display:none;
}

.changeIt {
  display: block;
  position: absolute;
  z-index: 2000;
  left: 100%;

}
.changeItRight {
  display: block;
  position: absolute;
  z-index: 2000;
  right: 100%;

}
.changeItAgain {
  display: block;
  position: absolute;
  z-index: 2000;
  left: 0;
  height:auto !important;
}
.changeIt2 {
  display: block;
  position: absolute;
  z-index: 2000;
  left:0;

  height:auto;
}
.changeIt3 {
  display: block;

}

.no {
  display:none;
}

.around {
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
}

.start {
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-justify-content:flex-start !important;
  -moz-justify-content:flex-start !important;
  -ms-justify-content:flex-start !important;
  justify-content:flex-start !important;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
}

.fixed {
  position: fixed !important;
  top:0;
  z-index: 200;
  width: 100%;
}

.cool {
  width: 100%;
  display: none;
  padding-top:2em;
}

.cool2 {
  width: 100%;
  display: none;
  padding-top:2em;
}

.grow2 {
  width:100%;
}

.grow3 {
  width:80%;
}

.stick {
  position:absolute !important;
}

.form-control:focus {
    border-color: none !important;
    outline: 0 !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}

.myNews {
  width: 100%;
  display: none;
  padding-bottom:3em;
  padding-top:2em;
}

.myNews p {
  text-align:left !important;
}

.myNews2 {
  width: 100%;
  display: none;
  padding-bottom:3em;
  padding-top:2em;

}

.fc button {
  color: white;
}

.cal {
  font-size:1.8em !important;
  font-weight:400 !important;
}

hr.trans--grow.hr1.grow:hover
{
  width:175%;
}

hr.trans--grow.hr.grow10:hover
{
  width:112%;
}

hr.trans--grow.last.hr1.grow:hover {
  width: 115%;
}

hr.trans--grow.last.hr.grow10:hover {
  width: 115%;
}

hr.trans--grow.last.hr.grow10:active {
  width: 115%;
}

/* hr.trans--grow.hr1.grow:active {
  width:175%;
}


hr.trans--grow.hr.grow10:active {
  width:112%;
}

hr.trans--grow.hr10.grow:active {
  width:110%;
} */

hr.trans--grow.hr.grow10:hover {
    width: 112%;
}

hr.trans--grow10.hr.grow:hover {
    width: 112%;
}



.parent:hover hr#line.trans--grow.hr1.grow {
  width:175%;
}

.parent:hover hr#line.trans--grow.hr1.grow10 {
    width: 112%;
}




.pt10 {
  padding-top: 10em;
  margin-top:-1.6em;
}

.m5 {
  margin-top:5em;

}

hr {
  border-top: none !important;
}

span {
  display: inline-block;
  transition: transform 0.1s linear;
  pointer-events: visible !important;
}

.hideDate {

  display:none;
}

.hideAtFirst {
  display:none;
}

.dayEvent {
  font-size: 26px;
  color: #737276 !important;
  left:3.8em;

}

.ending {
  display: -webkit-flex;

  display: -moz-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-justify-content: flex-end;
  -moz-justify-content: flex-end;
  -ms-justify-content: flex-end;
  justify-content: flex-end;
  padding-right:8em;
}

.ending.second {
  padding-right:0em;
}
.ending.first {
  padding-right:8.3em;
}

.cursor {
  position: absolute;
  top: 0;
  left: 0;
  padding: .2em;
  background-color: transparent;
  border-radius: 50%;
  display: inline-block;
  transform: translate(-50%, -50%);
  transition: transform 0.3s ease, filter 0.3s ease;

}

.fc-content {
  background: white !important;
  border:none !important;
  color: black;
  font-size:1em;
  font-family: 'Roboto Condensed', sans-serif !important;
}

.flexing {
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center
}

.horizontal2 {
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-justify-content: space-around;
  -moz-justify-content: space-around;
  -ms-justify-content: space-around;
  justify-content: space-around;
  margin-right:3em;
}

.horizontal3 {
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-justify-content:flex-start;
  -moz-justify-content:flex-start;
  -ms-justify-content:flex-start ;
  justify-content:flex-start;
  margin-right:0em;
  margin-top:2em;
}


.horizontal5 {
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-justify-content:flex-start;
  -moz-justify-content:flex-start;
  -ms-justify-content:flex-start ;
  justify-content:flex-start;
  margin-right:0em;
  margin-top:0em;
}

.cool-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.between {
  display:flex;
  justify-content: space-between;
}


@-moz-keyframes spin {
  100% {
    -moz-transform: rotate(90deg);
  }
}
@-webkit-keyframes spin {
  100% {
    -webkit-transform: rotate(90deg);
  }
}
@keyframes spin {
  100% {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
  }
}

.closeThis, .closeThis2, .closeThis3, .closeThis4, .closeThis5, .closeThis6, .closeThis7, .closeThis8, .closeThis9, .closeThis10, .close20, .closeThis11, .closeThis12   {
  filter: alpha(opacity=20);
  opacity: 1 !important;
}

.mt20 {
  margin-top:20px;
}

.close, .close3, .close4, .close4.two, .close10, .close11, .close12 {
  padding:.8em 1em 1em 1em !important;
  opacity: 1 !important;
}

a.youtube {
  cursor:grab;
}

.close:hover:before,  .close:hover:after {
  transform: rotate(180deg);
}
.close3:hover:before,  .close3:hover:after {
  transform: rotate(180deg);
}
.close4:hover:before,  .close4:hover:after {
  transform: rotate(180deg);
}

.close10:hover:before,  .close10:hover:after {
  transform: rotate(180deg);
}

.close11:hover:before,  .close11:hover:after {
  transform: rotate(180deg);
}

.close12:hover:before,  .close12:hover:after {
  transform: rotate(180deg);
}

.close20:hover:before,  .close20:hover:after {
  transform: rotate(180deg);
}

.closeThis:hover:before,  .closeThis:hover:after {
  transform: rotate(180deg);
}
.closeThis2:hover:before,  .closeThis2:hover:after {
  transform: rotate(180deg);
}
.closeThis3:hover:before,  .closeThis3:hover:after {
  transform: rotate(180deg);
}
.closeThis4:hover:before,  .closeThis4:hover:after {
  transform: rotate(180deg);
}
.closeThis5:hover:before,  .closeThis5:hover:after {
  transform: rotate(180deg);
}
.closeThis6:hover:before,  .closeThis6:hover:after {
  transform: rotate(180deg);
}
.closeThis7:hover:before,  .closeThis7:hover:after {
  transform: rotate(180deg);
}
.closeThis8:hover:before,  .closeThis8:hover:after {
  transform: rotate(180deg);
}
.closeThis9:hover:before,  .closeThis9:hover:after {
  transform: rotate(180deg);
}
.closeThis10:hover:before,  .closeThis10:hover:after {
  transform: rotate(180deg);
}


.close:before, .x2:before, .x2:after, .close:after {
  content: '';
  position: absolute;
  height: 2px;
  width: 30px;
  background: white;
  transition: 1s;
  padding:1.6px;
}

.close3:before, .x2:before, .x2:after, .close3:after {
  content: '';
  position: absolute;
  /
  height: 2px;
  width: 30px;
  background: white;
  transition: 1s;
  padding:1.6px;
}
.close4:before, .x2:before, .x2:after, .close4:after {
  content: '';
  position: absolute;

  height: 2px;
  width: 30px;
  background: white;
  transition: 1s;
  padding:1.6px;
}

.close10:before, .x2:before, .x2:after, .close10:after {
  content: '';
  position: absolute;

  height: 2px;
  width: 30px;
  background: white;
  transition: 1s;
  padding:1.6px;
}
.close11:before, .x2:before, .x2:after, .close11:after {
  content: '';
  position: absolute;

  height: 2px;
  width: 30px;
  background: white;
  transition: 1s;
  padding:1.6px;
}

.close12:before, .x2:before, .x2:after, .close12:after {
  content: '';
  position: absolute;

  height: 2px;
  width: 30px;
  background: white;
  transition: 1s;
  padding:1.6px;
}

.close20:before, .x2:before, .x2:after, .close20:after {
  content: '';
  position: absolute;

  height: 2px;
  width: 30px;
  background: white;
  transition: 1s;
  padding:1.6px;
}

.closeThis:before, .x2:before, .x2:after, .closeThis:after {
  content: '';
  position: absolute;

  height: 2px;
  width: 30px;
  background: white;
  transition: 1s;
  padding:1.6px;
}
.closeThis2:before, .x2:before, .x2:after, .closeThis2:after {
  content: '';
  position: absolute;
  height: 2px;
  width: 30px;
  background: white;
  transition: 1s;
  padding:1.6px;
}
.closeThis3:before, .x2:before, .x2:after, .closeThis3:after {
  content: '';
  position: absolute;
  height: 2px;
  width: 30px;
  background: white;
  transition: 1s;
  padding:1.6px;
}
.closeThis4:before, .x2:before, .x2:after, .closeThis4:after {
  content: '';
  position: absolute;

  height: 2px;
  width: 30px;
  background: white;
  transition: 1s;
  padding:1.6px;
}
.closeThis5:before, .x2:before, .x2:after, .closeThis5:after {
  content: '';
  position: absolute;

  height: 2px;
  width: 30px;
  background: white;
  transition: 1s;
  padding:1.6px;
}

.closeThis6:before, .x2:before, .x2:after, .closeThis6:after {
  content: '';
  position: absolute;

  height: 2px;
  width: 30px;
  background: white;
  transition: 1s;
  padding:1.6px;
}
.closeThis7:before, .x2:before, .x2:after, .closeThis7:after {
  content: '';
  position: absolute;

  height: 2px;
  width: 30px;
  background: white;
  transition: 1s;
  padding:1.6px;
}
.closeThis8:before, .x2:before, .x2:after, .closeThis8:after {
  content: '';
  position: absolute;

  height: 2px;
  width: 30px;
  background: white;
  transition: 1s;
  padding:1.6px;
}
.closeThis9:before, .x2:before, .x2:after, .closeThis9:after {
  content: '';
  position: absolute;

  height: 2px;
  width: 30px;
  background: white;
  transition: 1s;
  padding:1.6px;
}
.closeThis10:before, .x2:before, .x2:after, .closeThis10:after {
  content: '';
  position: absolute;

  height: 2px;
  width: 30px;
  background: white;
  transition: 1s;
  padding:1.6px;
}


.close:before, .x2:before, .x2:after {
  transform: rotate(45deg);
}
.close:after, .x2:after {
  transform: rotate(-45deg);
}
.close3:before, .x2:before, .x2:after {
  transform: rotate(45deg);
}
.close3:after, .x2:after {
  transform: rotate(-45deg);
}
.close4:before, .x2:before, .x2:after {
  transform: rotate(45deg);
}
.close4:after, .x2:after {
  transform: rotate(-45deg);
}

.close10:before, .x2:before, .x2:after {
  transform: rotate(45deg);
}
.close10:after, .x2:after {
  transform: rotate(-45deg);
}
.close11:before, .x2:before, .x2:after {
  transform: rotate(45deg);
}
.close11:after, .x2:after {
  transform: rotate(-45deg);
}

.close12:before, .x2:before, .x2:after {
  transform: rotate(45deg);
}
.close12:after, .x2:after {
  transform: rotate(-45deg);
}

.close20:before, .x2:before, .x2:after {
  transform: rotate(45deg);
}
.close20:after, .x2:after {
  transform: rotate(-45deg);
}


.closeThis:before, .x2:before, .x2:after {
  transform: rotate(45deg);
}
.closeThis:after, .x2:after {
  transform: rotate(-45deg);
}

.closeThis2:before, .x2:before, .x2:after {
  transform: rotate(45deg);
}
.closeThis2:after, .x2:after {
  transform: rotate(-45deg);
}

.closeThis3:before, .x2:before, .x2:after {
  transform: rotate(45deg);
}
.closeThis3:after, .x2:after {
  transform: rotate(-45deg);
}

.closeThis4:before, .x2:before, .x2:after {
  transform: rotate(45deg);
}
.closeThis4:after, .x2:after {
  transform: rotate(-45deg);
}

.closeThis5:before, .x2:before, .x2:after {
  transform: rotate(45deg);
}
.closeThis5:after, .x2:after {
  transform: rotate(-45deg);
}


.closeThis6:before, .x2:before, .x2:after {
  transform: rotate(45deg);
}
.closeThis6:after, .x2:after {
  transform: rotate(-45deg);
}


.closeThis7:before, .x2:before, .x2:after {
  transform: rotate(45deg);
}
.closeThis7:after, .x2:after {
  transform: rotate(-45deg);
}

.closeThis8:before, .x2:before, .x2:after {
  transform: rotate(45deg);
}
.closeThis8:after, .x2:after {
  transform: rotate(-45deg);
}

.closeThis9:before, .x2:before, .x2:after {
  transform: rotate(45deg);
}
.closeThis9:after, .x2:after {
  transform: rotate(-45deg);
}

.closeThis10:before, .x2:before, .x2:after {
  transform: rotate(45deg);
}
.closeThis10:after, .x2:after {
  transform: rotate(-45deg);
}

.modal-backdrop.in {
  filter: alpha(opacity=50);
  opacity: 0;
}

#calendar {
  padding-bottom: 8em;
}

.eventTable {
  width:auto;
  height:auto;
  padding:2em 2em 2em 2em;
  color:white;
  background:transparent;

}

.straight {
  border: 3px solid white;
  border-bottom: none;
  padding-bottom:1em;
  padding-left:2em;
  padding-right:2em;
}

.straight.two {
  border: 3px solid white;
  padding-bottom:1em;
}

.mr20 {
  margin-right:45em;
}

.mb-2 {
  padding-bottom:3em;
}

.m870 {
  max-width:870px;
}

.dateLine {
  display:flex;
  align-items:center;
  min-width:800px;
}

.horizontal10 {
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-justify-content:space-around;
  -moz-justify-content:space-around;
  -ms-justify-content:space-around;
  justify-content:space-around;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  max-width:140px;
}

.werk {
  color:black !important;
}

.titles {
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-justify-content:flex-start;
  -moz-justify-content:flex-start;
  -ms-justify-content:flex-start;
  justify-content:flex-start;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  min-width:800px;
}

.faint {
  font-weight: lighter;
  font-size: 16px !important;
  opacity: .7;
  border-bottom: none !important;
  margin-left: 1em;
  padding-top: 1em;
}


.eventTable.one {
  width:auto;
  height:auto;
  padding:0em 7em 0em 2em;
  border-bottom: none !important;
  color:white;
  background:transparent;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-flex-direction: column;
  -moz-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction:column;
  -webkit-align-items:flex-start;
  -moz-align-items:flex-start;
  -ms-align-items:flex-start;
  align-items:flex-start;

}
.eventTable.two {
  width:auto;
  height:auto;
  padding:0em 7em 0em 2em;
  color:white;
  background:transparent;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-flex-direction: column;
  -moz-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction:column;
  -webkit-align-items:flex-start;
  -moz-align-items:flex-start;
  -ms-align-items:flex-start;
  align-items:flex-start;

}
::placeholder {
  color: black !important;
}

input {
  color: black !important;
}

a.light:hover {
  text-decoration:none;
}

.micro {
  font-size: 2.7em !important;
  font-weight: 500 !important;
  text-decoration:underline;
  min-width:191px;
}

.microless {
  font-size: 2em !important;
  font-weight: 100 !important;
  padding-top:.4em;

}

.micro.two {
  font-size: 1.3em !important;
  font-weight: 100 !important;
  padding-left: 4.5em;
}

.micro.blue {
  font-size: 2em !important;
  font-weight: 500 !important;
  color:#61aceb !important;
  border-bottom:none;
  min-width:225px;
  margin-top: 0em;
}
.fc-time-grid .fc-slats td {
  height: 1.5em;
  border-bottom: 0;
  color: white !important;
}

th.fc-axis.fc-widget-header {
  border:none !important;
}

.fc-ltr .fc-axis {
  text-align: right;
  color: white !important;
}

.mt3 {
  margin-top:3em;
}
a.light {
  color:white !important;
  border-bottom: 1px solid white;
}

.fc-ltr .fc-basic-view .fc-day-top .fc-day-number {
  float: right;
  color: white !important;
  font-size: 2em;
  font-family: 'Roboto Condensed', sans-serif;
}

.upDown {

  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-flex-direction: column;
  -moz-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left:2em;
  margin-right:5%;
  margin-top:-3em;
}


.upDown2 {
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-flex-direction: column;
  -moz-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-align-items:flex-start;
  -moz-align-items:flex-start;
  -ms-align-items:flex-start;
  align-items:flex-start;
  margin-top:7em;
  max-width:150px;
}


@media (max-width:1310px) {
  .view {
    position: absolute;
    top: -6%;
    left: 2%;
    font-size: 16px;
  }
}

@media (max-width:1445px) and (min-width:1310px) {

  .view {
    margin-top: -3em;
    margin-left: 4em;
  }

}

@media (min-width:1446px) {

  .view {
    position: absolute;
    top: -6%;
    left: 2%;
    font-size: 16px;
  }

}

@media (max-width:1200px) {

  .view {
    position: absolute;
    top: -6%;
    left: 2%;
    font-size: 16px;
  }
}

#save-event {
  background: #61aceb !important;
}
.youtube {
  font-size:1.4em !important;
  font-weight:100 !important;
  color:white !important;
  text-decoration:none !important;
}


a.youtube {
  text-decoration: none;
  display: inline-block;
  position: relative;
  font-family: Arial;
  font-weight: bold;
  padding: 0;
  margin:0;
  color: #61aceb;
  padding-bottom:5px;
  cursor:grab;
}

hr.lineSmall {
  padding: .2em !important;
  margin-top: .4em !important;
  padding-top: 0em !important;
}

a#events.youtube {
  text-decoration: none;
  display: inline-block;
  position: relative;
  font-family: Arial;
  font-weight: bold;
  padding: 0 0 5px 0;
  color: #61aceb;
}

a#events.youtube:after {
  content: '';
  position: absolute;
  height: 2px;
  width: 100%;
  left: 0;
  bottom: 0;
  visibility: hidden;
  background-color: #61aceb;
  -webkit-transition: all .1s ease;
  transition: all 0.3s ease;
  -webkit-transform: scaleX(0);
  -ms-transform: scaleX(0);
  transform: scaleX(0);
}

a#events.youtube:hover:after {
  visibility: visible;
  -webkit-transform: scaleX(1);
  -ms-transform: scaleX(1);
  transform: scaleX(1);
}

.h2, h2 {
  font-size: 2.4em;
  text-transform: uppercase;
  color: white;
  font-family: 'Roboto Condensed', sans-serif;
}


.hr2 {
  margin-top: 0em;
}


.fc-day-header {
  border-top: none !important;
  border-top-style: none !important;
  text-transform: uppercase !important;
}

th.fc-day-header.fc-widget-header.fc-sun {
  color:white !important;
  font-size:1.5em !important;

  font-weight:100 !important;
}
th.fc-day-header.fc-widget-header.fc-mon {
  color:white !important;
  font-size:1.5em !important;

  font-weight:100 !important;
}
th.fc-day-header.fc-widget-header.fc-tue {
  color:white !important;
  font-size:1.5em !important;

  font-weight:100 !important;
}
th.fc-day-header.fc-widget-header.fc-wed {
  color:white !important;
  font-size:1.5em !important;

  font-weight:100 !important;
}

th.fc-day-header.fc-widget-header.fc-thu {
  color:white !important;
  font-size:1.5em !important;

  font-weight:100 !important;
}
th.fc-day-header.fc-widget-header.fc-fri {
  color:white !important;
  font-size:1.5em !important;

  font-weight:100 !important;
}
th.fc-day-header.fc-sat {
  color:white !important;
  font-size:1.5em !important;

  font-weight:100 !important;
}

.fc-sun a  {
  color:white !important;
}

.fc-sat a  {
  color:white !important;
}

.fc-mon a  {
  color:white !important;
}
.fc-tue a  {
  color:white !important;
}
.fc-wed a  {
  color:white !important;
}
.fc-thu a  {
  color:white !important;
}
.fc-fri a  {
  color:white !important;
}

/*
we are on the videos part here */

.across {
  display:flex;
  flex-direction:column;
  align-items: center;
  width: 100%;
  padding-left: 2em;
  padding-right:2em;
}

.slideThisPlease {
  background-image: linear-gradient(to right, #030304, #060506, #0c0b0f, #121116, #201f28, #292834, #2b2a35, #2c2b37);
}


.slideThisAftac {
  background-image: linear-gradient(to right, #0A1120, #0C1426, #0F1930, #111C37, #131F3D);
}



#hiddenVideos {
  width: 100%;
  height: auto;
  padding-bottom: 3em;
  display:none;
  padding-top:2em;
}

#hiddenVideos2 {
  width: 100%;
  height: auto;
  padding-bottom: 3em;
  display:none;
  padding-top:2em;
}

.hiddenVideosNew {
  width: 100%;
  height:1150px;
  background-image: linear-gradient(to right, #030304, #060506, #0c0b0f, #121116, #201f28, #292834, #2b2a35, #2c2b37);
  padding-top:4em;
  position:absolute;
  left:100%;
  display:block !important;

}

#hiddenVideosNew {
  width: 100%;
  height:1150px;
  background-image: linear-gradient(to right, #030304, #060506, #0c0b0f, #121116, #201f28, #292834, #2b2a35, #2c2b37);
  padding-top:4em;
  position:absolute;
  left:100%;
}

.slideThis1 {
  position:absolute;
  left:100%;
}

.slideThisRight {
  position:absolute;
  right:0%;
}

.slideThisLeft {
  position:absolute;
  right:100%;
}

.firstThing {
  display: block;
  position: absolute;
  z-index: 2000;
  left: 0%;
}

/* classes for the JS slider */

#eventsTwo {
  display:none;
}

#myCool.flexing-scroll{
  position: relative;
  z-index: 10000000;
  height:auto;
  left:0;
}

#myCool2.flexing-scroll{
  position: relative;
  z-index: 10000000;
  height:auto;
  left:0;
}

#myCool.flexing-scroll2{
  position: relative;
  z-index: 10000000;
  height:auto;
  right:0;
}

#news.flexing-scroll{
  position: relative;
  z-index: 10000000;
  height:auto;
  right:0;
}

#news2.flexing-scroll{
  position: relative;
  z-index: 10000000;
  height:auto;
  right:0;
}


#news.flexing-scroll2{
  position: relative;
  z-index: 10000000;
  height:auto;
  left:0;
}


#hiddenVideos.flexing-scroll{
  position: relative;
  z-index: 10000000;
  height:auto;
  right:0;
}

#hiddenVideos2.flexing-scroll{
  position: relative;
  z-index: 10000000;
  height:auto;
  right:0;
}


#hiddenVideos.flexing-scroll2{
  position: relative;
  z-index: 10000000;
  height:auto;
  left:0;
}

.unsetter {
  position: relative;
  z-index: 10000000;
  height:auto;
  right:0;
  left:0
}


.slideThis2 {
  position:unset !important;
  left:0 !important;
}

.slideThis3 {
  position:absolute !important;
  left:100% !important;
  z-index:400000;
}

.showDiv {
  display: flex !important;
  justify-content: center;
}


.hideDiv {
  display:none;
}

/* media queries */

@media (max-width:1078px) {
  .flexing {
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display:flex !important;
    -moz-flex-direction: column;
    -ms-flex-direction: column;
    -webkit-flex-direction: column;
    flex-direction: column;
  }

}

.carousel-inner.vertical > .item {
  -webkit-transition: .6s ease-in-out top;
  -o-transition: .6s ease-in-out top;
  transition: .6s ease-in-out top;
}

@media all and (transform-3d),
(-webkit-transform-3d) {
  .carousel-inner.vertical > .item {
    -webkit-transition: -webkit-transform .6s ease-in-out;
    -o-transition: -o-transform .6s ease-in-out;
    transition: transform .6s ease-in-out;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000;
    perspective: 1000;
  }
  .carousel-inner.vertical > .item.next,
  .carousel-inner.vertical > .item.active.right {
    -webkit-transform: translate3d(0, 33.33%, 0);
    transform: translate3d(0, 33.33%, 0);
    top: 0;
  }
  .carousel-inner.vertical > .item.prev,
  .carousel-inner.vertical > .item.active.left {
    -webkit-transform: translate3d(0, -33.33%, 0);
    transform: translate3d(0, -33.33%, 0);
    top: 0;
  }
  .carousel-inner.vertical > .item.next.left,
  .carousel-inner.vertical > .item.prev.right,
  .carousel-inner.vertical > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    top: 0;
  }
}

.carousel-inner.vertical > .active {
  top: 0;
}
.carousel-inner.vertical > .next,
.carousel-inner.vertical > .prev {
  top: 0;
  height: 100%;
  width: auto;
}
.carousel-inner.vertical > .next {
  left: 0;
  top: 33.33%;
  right:0;
}
.carousel-inner.vertical > .prev {
  left: 0;
  top: -33.33%;
  right:0;
}
.carousel-inner.vertical > .next.left,
.carousel-inner.vertical > .prev.right {
  top: 0;
}
.carousel-inner.vertical > .active.left {
  left: 0;
  top: -33.33%;
  right:0;
}
.carousel-inner.vertical > .active.right {
  left: 0;
  top: 33.33%;
  right:0;
}


.carousel-inner.vertical > .item.active {
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  top: 0;

}

.carousel-inner.vertical > .item {
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  top: 0;

}

.carousel-inner.vertical {
  margin-top: -8em;
  width:800px !important;
}



@media  (max-width:767px) {
  #carousel-pager .carousel-control.left {
    bottom: initial;
    width:100%;
    width: 300px !important;
  }
  #carousel-pager .carousel-control.right {
    top: initial;
    left:0;
    width: 300px !important;
  }

  #carousel-pager2 .carousel-control.left {
    bottom: initial;
    width:100%;
    width: 300px !important;
  }
  #carousel-pager2 .carousel-control.right {
    top: initial;
    left:0;
    width: 300px !important;
  }

  .carousel-inner.vertical {

    width:300px !important;
  }

  #hiddenVideos {
    padding-top:0em;
    height:1600px;
  }

  .upDown2 {
    display: flex;
    flex-direction: column;
    padding-left: 0em;
    margin-right: 0%;
    margin-top: 0em;
  }

  #carousel-pager, #carousel-pager2 {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
}



@media  (max-width:767px) and (min-width:567px) {
  #carousel-pager .carousel-control.left {
    bottom: initial;
    width:100%;
    width: 600px !important;
  }
  #carousel-pager .carousel-control.right {
    top: initial;
    left:0;
    width: 600px !important;
  }
  #carousel-pager2 .carousel-control.left {
    bottom: initial;
    width:100%;
    width: 600px !important;
  }
  #carousel-pager2 .carousel-control.right {
    top: initial;
    left:0;
    width: 600px !important;
  }


  .carousel-inner.vertical {

    width:600px !important;
  }

  #hiddenVideos {
    padding-top:21em;
  }

  .upDown2 {
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display:flex;
    -moz-flex-direction: column;
    -ms-flex-direction: column;
    -webkit-flex-direction: column;
    flex-direction: column;
    padding-left: 0em;
    margin-right: 0%;
    margin-top: 0em;
  }
  #carousel-pager {
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display:flex;
    -moz-flex-direction: column;
    -ms-flex-direction: column;
    -webkit-flex-direction: column;
    flex-direction: column;
    -moz-align-items: center;
    -ms-align-items: center;
    -webkit-align-items: center;
    align-items: center;
  }


}

@media (max-width:1024px) and (min-width:768px) {
  #carousel-pager .carousel-control.left {
    bottom: initial;
    width:100%;
    width: 500px !important;
  }
  #carousel-pager .carousel-control.right {
    top: initial;
    left:0;
    width: 500px !important;
  }


  .carousel-inner.vertical {

    width:500px !important;
  }

  .close3 {
    margin-left:0em;
  }
  .upDown2 {
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display:flex;
    -moz-flex-direction: column;
    -ms-flex-direction: column;
    -webkit-flex-direction: column;
    flex-direction: column;
    padding-left: 0em;
    margin-right: 0%;
    margin-top: 3em;
  }

  .close3 {
    filter: alpha(opacity=20);
    opacity: 1 !important;
    cursor:hand !important;
    position: relative;
    margin:0px !important;
    padding:0em;
    opacity:1 !important;
    cursor: pointer !important;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display:flex;
    -moz-justify-content:flex-start;
    -ms-justify-content:flex-start;
    -webkit-justify-content:flex-start;
    justify-content:flex-start;
  }

}

@media (min-width:992px) and (max-width:1024px) {
  .close4 {
    filter: alpha(opacity=20);
    opacity: 1 !important;
    cursor: hand !important;
    position: relative;
    margin: 0px !important;
    padding-left: 0em;
    padding-top: 2em;
    padding-bottom: 2em;
  }
  .form-group {
    margin-bottom:0px;
  }
  .close {
    filter: alpha(opacity=20);
    opacity: 1 !important;
    cursor: hand !important;
    position: relative;

    padding-top: 1em;
    padding-bottom: 1em;
    padding-right: 1em;
  }
  .close4.two {
    filter: alpha(opacity=20);
    opacity: 1 !important;
    cursor: hand !important;
    position: relative;
    margin: 0px !important;
    padding-left: 2em;
    padding-top: 2em;
    padding-bottom: 2em;
  }
  .close {
    filter: alpha(opacity=20);
    opacity: 1 !important;
    cursor: hand !important;
    position: relative;

    padding-top: 1em;
    padding-bottom: 1em;
    padding-right: 1.05em;
  }

    .form-group {
      min-width:215px;
    }
    #carousel-pager .carousel-control.left {
      bottom: initial;
      width:100%;
      width: 600px !important;
    }
    #carousel-pager .carousel-control.right {
      top: initial;
      left:0;
      width: 600px !important;
    }

    .form-group {
      min-width:215px;
    }

    .carousel-inner.vertical {
      width:600px !important;
    }

    .upDown2 {
      display: -moz-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display:flex;
      -moz-flex-direction: column;
      -ms-flex-direction: column;
      -webkit-flex-direction: column;
      flex-direction: column;
      padding-left: 0em;
      margin-right: 0%;
      margin-top: 0em;
    }

}

@media (min-width:768px) and (max-width:991px) {
  .close4 {
    filter: alpha(opacity=20);
    opacity: 1 !important;
    cursor: hand !important;
    position: relative;
    margin: 0px !important;
    padding-left: 0em;
    padding-top: 1em;
    padding-bottom: 1em;
  }
  .form-group {
    margin-bottom:0px;
    min-width:220px;
  }
  .close {
    filter: alpha(opacity=20);
    opacity: 1 !important;
    cursor: hand !important;
    position: relative;

    padding-top: 0em;
    padding-bottom: 1em;
    padding-right: 1.05em;
  }
  #calendar {
      padding-bottom: 4em;
  }

  .close4.two {
    filter: alpha(opacity=20);
    opacity: 1 !important;
    cursor: hand !important;
    position: relative;
    margin: 5px !important;
    padding-left: 0em;
    padding-top: 0em;
    padding-bottom: 1.5em;
  }


}

@media (max-width:767px) {

  .eventTable {
    width: auto;
    height: auto;
    padding: 0em;
    color: white;
    background: transparent;
    text-align:center;
  }
  .micro.two {
    font-size: 1.3em !important;
    font-weight: 100 !important;
    padding-left: 0em;
  }
  .mt3 {
    margin-top: 1em;
    margin-bottom: 1em;
  }
  .close4 {
    filter: alpha(opacity=20);
    opacity: 1 !important;
    cursor: hand !important;
    position: relative;
    margin: 0px !important;
    padding: 0em;
    padding-left: 0em;
  }
  .form-group {
      margin-bottom: 0px;
      min-width: 183px;
  }
  .close4 {
    padding-bottom:1em;
  }

}



@media (min-width:1025px) {

  .form-group {
    min-width:268px;
  }

  #carousel-pager .carousel-control.left {
    bottom: initial;
    width:100%;
    width: 800px !important;
  }
  #carousel-pager .carousel-control.right {
    top: initial;
    left:0;
    width: 800px !important;
  }
  #carousel-pager2 .carousel-control.left {
    bottom: initial;
    width:100%;
    width: 800px !important;
    left: 15px;
    top: -65px;
  }
  #carousel-pager2 .carousel-control.right {
    top: initial;
    left:15px;
    width: 800px !important;
  }

  .carousel-inner.vertical {
    margin-top: -30em;
    width:800px !important;
  }

}

.hideSome {
  position:relative;
  overflow:hidden;
  max-height:812px;
  margin-top:-4.6em;
}


/* flickity modal popup pics */

#myImg, #myImg2, #myImg3, #myImg4, #myImg5, #myImg6, #myImg7, #myImg8, #myImg9, #myImg10, #myImg11, #myImg12, #myImg13, #myTimg14 {
  min-height: 240px;
  cursor: pointer;
  transition: 0.3s;
}


.model, .model2, .model3, .model4, .model5, .model6, .model7, .model8, .model9, .model10, .model11, .model12, .model13, .model14 {
  display: none;
  position: fixed;
  z-index: 999999999999999999;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.9);
}


.model1-content, .model2-content, .model3-content, .model4-content, .model5-content, .model6-content, .model7-content, .model8-content, .model9-content, .model10-content, .model11-content, .model12-content, .model13-content, .model14-content {
  margin: auto;
  display: block;
  width: 75%;

}

#caption, #caption2, #caption3, #caption4, #caption5, #caption6, #caption7, #caption8, #caption9, #caption10, #caption11, #caption12, #caption13, #caption14  {

  font-family: 'Roboto Condensed', sans-serif;
  text-align: center;
  color: white !important;
  padding: 10px 0;
  height: 150px;
  padding-left: 0em;
  text-align:left !important;
  margin-top:.6em;
  font-size:18px;

}

.model1-content, #caption {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

.model2-content, #caption2 {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}
.model3-content, #caption3 {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}
.model4-content, #caption4 {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}
.model5-content, #caption5 {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

.model6-content, #caption6 {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}
.model7-content, #caption7 {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

.model8-content, #caption8 {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

.model9-content, #caption9 {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

.model10-content, #caption10 {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

.model11-content, #caption11 {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

.model12-content, #caption12 {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

.model13-content, #caption13 {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

.model14-content, #caption14 {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)}
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

.closeThis, .closeThis2, .closeThis3, .closeThis4, .closeThis5, .closeThis6, .closeThis7, .closeThis8, .closeThis9, .closeThis10, .closeThis11, .closeThis12 {
      position: absolute;
      top: 5%;
      right: 5%;
      color: #f1f1f1;
      font-size: 40px;
      font-weight: lighter;
      transition: 0.3s;
      cursor: pointer;
      padding:1em;
      z-index: 9999999999999999999999999999999;
}

#getFile, #getFile2, #getFile3, #getFile4, #getFile5, #getFile6, #getFile7, #getFile8, #getFile9, #getFile10, #getFile11, #getFile12, #getFile13{

  text-align: center;
  background: white !important;
  color: black;
  height: 30px;
  padding-left: 10px;
  padding-right: 10px;
  border-radius: 5px;
  font-family: 'Roboto Condensed', sans-serif;
  margin-top: 1.5em;
}

#getFile14, #getFile15, #getFile16, #getFile17, #getFile18, #getFile19, #getFile20, #getFile21, #getFile22, #getFile23, #getFile24, #getFile25  {
  text-align: center;
  background: white !important;
  color: black;
  height: 30px;
  padding-left: 10px;
  padding-right: 10px;
  border-radius: 5px;
  font-family: 'Roboto Condensed', sans-serif;
  margin-top: 1.5em;
}

@media only screen and (max-width: 700px){
  .model-content, .model-content2, .model-content3, .model-content4, .model-content5, .model-content6, .model-content7, .model-content8, .model-content9, .model-content10, .model-content11, .model-content12, .model-content13, .model-content14 {
    width: 100%;
  }
}


@media (max-width:480px) {
  .closeThis, .closeThis2, .closeThis3, .closeThis4, .closeThis5, .closeThis6, .closeThis7, .closeThis8, .closeThis9, .closeThis10, .closeThis11, .closeThis12 {
        padding:2em;
}
}

.fc-ltr .fc-dayGrid-view .fc-day-top .fc-day-number {
    float: right;
    color: white !important;
    font-size: 20px;
}

@media (min-width:1025px) {
.fc-dayGrid-view .fc-body .fc-row {
    min-height: 9em !important;
}

}


@media (min-width: 768px) and (max-width: 991px) {
    .navbar-nav .open .dropdown-menu {
        position: static;
        float: none;
        width: auto;
        margin-top: 0;
        background-color: transparent;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    .navbar-nav .open .dropdown-menu > li > a {
        line-height: 20px;
    }
    .navbar-nav .open .dropdown-menu > li > a,
    .navbar-nav .open .dropdown-menu .dropdown-header {
        padding: 5px 15px 5px 25px;
    }
    .dropdown-menu > li > a {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: normal;
        line-height: 1.42857143;
        color: #333;
        white-space: nowrap;
    }
    .navbar-header {
        float: none;
    }
    .navbar-toggle {
        display: block;
        margin-top:15px;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
        width:100%;
    }
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav {
        float: none!important;
        /*margin: 7.5px -15px;*/
        margin: 0px
    }
    .navbar-nav>li {
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .navbar-text {
        float: none;
        margin: 15px 0;
    }
    /* since 3.1.0 */
    .navbar-collapse.collapse.in {
        display: block!important;
        width:100%;
    }
    .collapsing {
        overflow: hidden!important;
    }
    .navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border-color: #e7e7e7;
    background: #e7e7e7;
}
}

.noShow {
  display:none;
}

.noShow2 {
  display:none;
}


#newThing {
  position: fixed;
  z-index: 999999999999999999;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  opacity: .97 ;
  background: #2c2b37;
  padding-bottom:4em;
}

@media (max-width:991px) {
  #newThing {
    padding-top: 50px;
}
}

.tipue_search_result, #tipue_search_error {
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-flex-direction: column;
  -moz-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
}


.hidden {
  display:none;
}


#tipue_search_input
{

    float: left;
    font-family: 'Roboto Condensed', sans-serif;
    color: #333;
    height: 31px;
    margin-top: 4px;
    width: 200px;

}
#tipue_search_input:-webkit-autofill,
#tipue_search_input:-webkit-autofill:hover,
#tipue_search_input:-webkit-autofill:focus
{
     -webkit-box-shadow: 0 0 0px 1000px #f3f3f3 inset;
}

#tipue_search_content {
  display:flex;
  flex-direction: column;
  align-items:flex-start;
}

/* search results */


#tipue_search_content
{
  max-width: 100%;
	margin: 0;
  overflow: auto;
  box-sizing: content-box;
}
.tipue_search_content_title
{
     font: 300 32px/1.4 Merriweather, serif;
     font-family: 'Roboto Condensed', sans-serif;
     color: white;
}
.tipue_search_content_title a
{
  font-family: 'Roboto Condensed', sans-serif;
  color: white;
     text-decoration: none;
}
.tipue_search_content_title a:hover
{
     border-bottom: 1px solid #333;
}
.tipue_search_result
{
     padding-top: 27px;
}
#tipue_search_results_count, .tipue_search_content_debug
{
     font: 13px/1.5 'Source Code Pro', monospace;
	text-transform: uppercase;
  font-family: 'Roboto Condensed', sans-serif;
  color: white;
     -webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
#tipue_search_results_count
{
     padding-top: 9px;
}
.tipue_search_content_url, .tipue_search_note, .tipue_search_related, #tipue_search_error, #tipue_search_replace
{
     font-family: 'Roboto Condensed', sans-serif;
     color: white;
     padding-top: 7px;
     word-wrap: break-word;
     hyphens: auto;
}
.tipue_search_content_url a, .tipue_search_note a, .tipue_search_related a, #tipue_search_replace a, #tipue_search_replace a:hover
{
  font-family: 'Roboto Condensed', sans-serif;
  color: white;
     text-decoration: none;
}
.tipue_search_content_url a:hover, .tipue_search_note a:hover, .tipue_search_related a:hover
{
  font-family: 'Roboto Condensed', sans-serif;
  color: white;
}
#tipue_search_replace, .tipue_search_related
{
     margin-top: 7px;
}
#tipue_search_error
{
  font-family: 'Roboto Condensed', sans-serif;
  color: white;
     margin-top: 17px;
}
.tipue_search_content_text
{

     font-family: 'Roboto Condensed', sans-serif;
     color: white;
     word-wrap: break-word;
     hyphens: auto;
     margin-top: 9px;
}
.tipue_search_content_bold
{
     font-weight: 400;
     font-family: 'Roboto Condensed', sans-serif;
     color: white;
}
.tipue_search_content_debug
{
     margin: 7px 0 2px 0;
}


/* images */


.tipue_search_image
{
     padding: 17px 0 6px 0;
}
.tipue_search_img
{
     width: 100%;
     max-width: 330px;
     height: auto;
     transition: 0.5s;
     border-radius: 2px;
}
.tipue_search_img:hover
{
     opacity: 0.9;
}
#tipue_search_zoom_text
{
  font-family: 'Roboto Condensed', sans-serif;
  color: white;
	text-transform: uppercase;
	letter-spacing: 1px;
	padding-top: 9px;
}
#tipue_search_zoom_text a
{
  font-family: 'Roboto Condensed', sans-serif;
  color: white;
     text-decoration: none;
     border-bottom: 2px solid #f7f7f7;
}
#tipue_search_zoom_text a:hover
{
     border: 0;
}
.tipue_search_image_zoom
{
     cursor: pointer;
}
#tipue_search_image_modal
{
     display: none;
     position: fixed;
     z-index: 1000;
     left: 0;
     top: 0;
     width: 100%;
     height: 100%;
     overflow: auto;
     background-color: rgba(0, 0, 0, 0.9);
}
.tipue_search_image_close
{
     position: absolute;
     top: 0;
     right: 0;
     font-family: 'Roboto Condensed', sans-serif;
     color: white;
     padding: 25px 30px;
     cursor: pointer;
}
.tipue_search_image_block
{
     margin: 0 auto;
     max-width: 900px;
     padding: 73px 30px 30px 30px;
     box-sizing: border-box;
     color: #fff;
}
#tipue_search_zoom_img
{
     max-width: 100%;
     height: auto;
}

#tipue_search_zoom_text, .tipue_search_zoom_options
{
     padding-top: 9px;
}


/* footer */


#tipue_search_foot
{
     margin: 51px 0 21px 0;
}
#tipue_search_foot_boxes
{

  font-family: 'Roboto Condensed', sans-serif;
  color: white;
	text-transform: uppercase;
	color: #333;
	padding: 0;
	margin: 0;
	cursor: pointer;
}
#tipue_search_foot_boxes li
{
     display: inline;
	list-style: none;
	margin: 0;
	padding: 0;
}
#tipue_search_foot_boxes li a {
    background-color: none;
    color: white;
    padding: 10px 17px 11px 17px;
    border-radius: 3px;
    margin-right: 7px;
    text-decoration: none;
    text-align: center;
    transition: 0.3s;
    background-color: transparent;
}


#tipue_search_foot_boxes li.current
{
     background: #252525;
	color: #ccc;
	padding: 10px 17px 11px 17px;
     border-radius: 3px;
	margin-right: 7px;
	text-align: center;
}
#tipue_search_foot_boxes li a:hover
{
     background: #252525;
     color: #ccc;
}

body {
	background-image: linear-gradient(to right, #030304, #060506, #0c0b0f, #121116, #201f28, #292834, #2b2a35, #2c2b37) !important;
}

main {
	background-image: linear-gradient(to right, #030304, #060506, #0c0b0f, #121116, #201f28, #292834, #2b2a35, #2c2b37) !important;
}


::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 10px;
  background: #f1f3f5;
  border-left: 1px solid #d3dae0;
}
::-webkit-scrollbar-thumb {
  background: #b6c0cb;
}

.navbar-default {
    background-image: -webkit-linear-gradient(top,#fff 0,#f8f8f8 100%);
    background-image: -o-linear-gradient(top,#fff 0,#f8f8f8 100%);
    background-image: -webkit-gradient(linear,left top,left bottom,from(#fff),to(#f8f8f8));
    background-image: linear-gradient(to bottom,#fff 0,#f8f8f8 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#fff8f8f8', GradientType=0);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
    background-repeat: repeat-x;
    border-radius: 0px !important;
    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.15), 0 1px 5px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 0 rgba(255,255,255,.15), 0 1px 5px rgba(0,0,0,.075);
    padding-bottom: 17px;
    border: none !important;
}



.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
    color: #555;
    background: none !important;
  font-family: 'Roboto Condensed', sans-serif;
}

.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.open>a {
    background-image: none !important;

    -webkit-box-shadow: none !important;
    box-shadow: none !important;
}


.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {

    background: none !important;
    font-family: 'Roboto Condensed', sans-serif;
    color: #0f1932 !important;
    font-size: 18px;
    font-weight: 500;
}

.single-tribe_events .tribe-events-schedule {
  background: none;
   border: none;
   margin: 18px 0 8px;

}

.tribe-events-event-url a {
  color: #61aceb !important;


}



.navbar-right.two {
  padding-top:.4em !important;
}
.fas.fa-search {
 padding-top:.3em !important;
 color:#0f1932;
}

.fas.fa-search:focus {
  outline:none !important;
}

.searchButton {
    padding-top: 0px;
    background:none;
    border: none;
}

.horizontalDiv {
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display:flex;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
}

.navbar-toggle {
    margin-top: 15px !important;
}

/* acquisitions navbar */

#testDrop{
  display:none;
}

#nucDrop{
  display:none;
}

#maintDrop{
  display:none;
}

#rdDrop{
  display:none;
}

#smDrop {
  display:none;
}

#mt67 {
  margin-top:67px;
}

.nope {
  padding-bottom:15px;
}

.ml15 {
  margin-left:15px;
}

.navigation {
  height: 70px;
  background: #0f1932 !important;
  position:fixed;
  z-index:999;
  top:66px;
  width:100%;

}
.brand {
  position: absolute;
  padding-left: 20px;
  float: left;
  line-height: 70px;
  text-transform: uppercase;
  font-size: 1.4em;
}
.brand a, .brand a:visited {
  color: #fff;
  text-decoration: none;
}
.nav-container {
  /* max-width: 1000px; */
  margin: 0 auto;
}
nav.secondNav {
  float: right;
}
nav.secondNav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
nav.secondNav ul li {
  float: left;
  position: relative;
}
nav.secondNav ul li a, nav ul li a:visited {
  display: block;
  padding: 0 20px;
  line-height: 70px;
  background: #0f1932 !important;
  color: #fff;
  text-decoration: none;
}
nav.secondNav ul li a:hover, nav ul li a:visited:hover {
  background: #2581dc;
  color: #fff;
}
nav.secondNav ul li a:not(:only-child):after, nav ul li a:visited:not(:only-child):after {
  padding-left: 4px;
  content: ' ▾';
}
nav.secondNav ul li ul li {
  min-width: 190px;
}
nav.secondNav ul li ul li a {
  padding: 15px;
  line-height: 20px;
}
.nav-dropdown {
  position: absolute;
  display: none;
  z-index: 1;
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
}
/* Mobile navigation */
.nav-mobile {
    display: none;
    position: absolute;
    top: 0;
    right: 3px;
    background: transparent;
    height: 70px;
    width: 70px;
}


@media only screen and (max-width: 991px) {
  .nav-mobile {
    display: block;
  }
  nav.secondNav {
    width: 100%;
    padding: 70px 0 15px;
  }
  nav.secondNav ul {
    display: none;
  }
  nav.secondNav ul li {
    float: none;
  }
  nav.secondNav ul li a {
    padding: 15px;
    line-height: 20px;
  }
  nav.secondNav ul li ul li a {
    padding-left: 30px;
  }
  .nav-dropdown {
    position: relative;
  }
}
@media screen and (min-width: 992px) {

  .navbar-toggle {

    margin-top: 15px !important;

}

.navbar-default .navbar-toggle {

    margin-top: 15px !important;
}


  .nav-list {
    display: block !important;
  }
}
#nav-toggle {
  position: absolute;
  left: 26px;
  top: 22px;
  cursor: pointer;
  padding: 10px 35px 16px 0px;
}
#nav-toggle span, #nav-toggle span:before, #nav-toggle span:after {
  cursor: pointer;
  border-radius: 1px;
  height: 1.45px;
  width: 20px;
  background: #fff;
  position: absolute;
  display: block;
  content: '';
  transition: all 300ms ease-in-out;
}
#nav-toggle span:before {
  top: -6px;
}
#nav-toggle span:after {
  bottom: -6px;
}
#nav-toggle.active span {
  background-color: transparent;
}
#nav-toggle.active span:before, #nav-toggle.active span:after {
  top: 0;
}
#nav-toggle.active span:before {
  transform: rotate(45deg);
}
#nav-toggle.active span:after {
  transform: rotate(-45deg);
}




#secondSearch {
  font-size:16px;
  padding-top: .5em !important;
}


#barTop {
  font-size:20px !important;
  color:#0f1932 !important;
  margin-left:-6.5em !important;
  margin-right:5em !important;
  margin-top:.1em !important;
}
.form-control {
  border-radius:0 !important;
  /* min-width:260px !important; */
}

.searchIt{
  width:52px;

}

@media (min-width:992px) {
.navbar {
  height:71px !important;
}

.navbar-collapse.collapse.two {
  height:69px !important;
}
.navbar {
  border-top:1px solid #0f1932;
  border-bottom:1px solid #0f1932;
}
}

@media (min-width: 768px) and (max-width: 991px) {
    .navbar-nav .open .dropdown-menu {
        position: static;
        float: none;
        width: auto;
        margin-top: 0;
        background-color: transparent;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    .navbar-nav .open .dropdown-menu > li > a {
        line-height: 20px;
    }
    .navbar-nav .open .dropdown-menu > li > a,
    .navbar-nav .open .dropdown-menu .dropdown-header {
        padding: 5px 15px 5px 25px;
    }
    .dropdown-menu > li > a {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: normal;
        line-height: 1.42857143;
        color: #333;
        white-space: nowrap;
    }
    .navbar-header {
        float: none;
    }
    .navbar-toggle {
        display: block;
        margin-top:15px;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
        width:100%;
    }
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav {
        float: none!important;
        /*margin: 7.5px -15px;*/
        margin: 7.5px 50px 7.5px -15px
    }
    .navbar-nav>li {
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .navbar-text {
        float: none;
        margin: 15px 0;
    }
    /* since 3.1.0 */
    .navbar-collapse.collapse.in {
        display: block!important;
        width:100%;
    }
    .collapsing {
        overflow: hidden!important;
    }
    .navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border-color: #e7e7e7;
    background: #e7e7e7;
}
}


.navLogo {
  max-height:36px;
}

a.navyBlock {
  font-weight:100 !important;
}

#list1 {
  width:70px !important;
  color:#767677;
}

#list2 {
  width:70px !important;
  color:#767677;
}

#list3 {
  width:78px !important;
  color:#767677;
}
#list4 {
  width:99px !important;
  color:#767677;
}

#list5 {
  width:80px !important;
  color:#767677;
}

.fab.fa-facebook {
  color:#3B5998;
  font-size:20px;
}

.fa.fa-linkedin-square {
  color:#4875B4;
  font-size:20px;
}

.fab.fa-instagram {
  color:#de3d70;
  font-size:20px;
}

.fa.fa-twitter-square {
  color:#33CCFF;
  font-size:20px;
}

.fa.fa-youtube-square {
  color:#FF3333;
  font-size:20px;
}

#liSearch {
  width:78px !important;
  color:#767677;
}

#liRegister {
  width:78px !important;
  color:#767677;
}

#liSocial {
  width:68px !important;
  color:#767677;
}

#navRight1 {
  padding-top:.4em;
}

/* styles for internet explorer */


.nav {
    list-style-type: none !important
}

li {
  list-style-type: none !important;
}


@media (max-width: 480px){
.navbar-toggle {
    margin-top: 15px !important;
}

}

@media (max-width: 991px) and (min-width: 768px) {
.navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border-color: #e7e7e7;
    background: #e7e7e7;
}

}

/* elizabeth, you might have to change this back */

.tribe-events-back {
    margin: 0 0 20px;
    display: none;
}

.navbar-default {
    background-color: #f8f8f8;
    border-color: #e7e7e7;
}

.navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border-color: #e7e7e7;
    background-color: #f8f8f8;
}

dd {
	color:White;
}

.events-list #tribe-events-footer, .single-tribe_events #tribe-events-footer, .tribe-events-day #tribe-events-footer, .tribe-events-map #tribe-events-footer, .tribe-events-photo #tribe-events-footer {
    border-top: none;
    padding-top: 2em;
}

.nav {
    list-style-type: none !important;
    height: 56px;
}

.navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border-color: #e7e7e7;

}

input[type="text"] {
    -webkit-backface-visibility: hidden;
    background: none !important;
    border: none !important;
    box-sizing: border-box;
    outline: none;
    padding: 0.36rem 0.66rem;
    -webkit-appearance: none;
    outline-offset: 0;
    border-radius: 0;
}

.tribe-events-event-meta .column, .tribe-events-event-meta .tribe-events-meta-group {
    box-sizing: border-box;
    display: inline-block;
    float: left;
    margin: 0 0 20px;
    padding: 0 4%;
    text-align: left;
    vertical-align: top;
    width: 46%;
    zoom: 1;
}

@media (min-width: 878px){
.navbar-form.navbar-right:last-child {
    margin-right: 1em;
}
}


@media (max-width:767px) {
	.entry .entry-title {
    margin: 0;
    font-size: 18px;
    font-size: 28px !important;
    padding-top: 2em;
    padding-left: 2em;
    padding-right: 2em;
}

.tribe-events-event-url {
	padding-right:2em !important;
}

.tribe-events-event-meta .column, .tribe-events-event-meta .tribe-events-meta-group {
    box-sizing: border-box;
    display: inline-block;
    float: left;
    margin: 0 0 20px;
    padding: 0 4%;
    text-align: left;
    vertical-align: top;
    width: 100%;
    zoom: 1;
}
}

.tribe-events-notices {
    background: none;
    border-radius: 4px;
    border: none;
    color: red;
    margin: 10px 0 18px;
    padding: 8px 35px 8px 14px;
    text-shadow: none;
}


</style>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


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
									<form onClick="window.location.reload();">
                  <div class="tipue_search_group">
                    <div class="horizontalDiv">
                  	<input type="text" name="q" id="tipue_search_input" pattern=".{3,}" placeholder="Search" title="At least 3 characters" required>
                    </input>
                  </div>
								</form>
                  </div>
                </div>
              </div>
            </form>
          </span>
        </li>
        <li>
          <a class="navyBlock" href="http://v4.afciviliancareers.com/https://www.afciviliancareers.com/afciviliancareers">Register</a>
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
      <a class="navbar-brand" href="http://v4.afciviliancareers.com/index.php">
        <img class="img-responsive navLogo" src="http://v4.afciviliancareers.com/images5/afcs-navbar.png">
      </a>
    </div>
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

      <span id="box2">
        <ul class="nav navbar-nav makeToggle tabs" id="menu2">
          <li>
            <a id="list1" class="active highlight fun darker" href="http://v4.afciviliancareers.com/index.php">Home</a>
          </li>
          <li>
            <a id="list2" class="highlight two thing" href="http://v4.afciviliancareers.com/about.php">About</a>
          </li>
          <li>
            <a id="list3" class="highlight three thing" href="http://v4.afciviliancareers.com/careers.php">Careers</a>
          </li>
          <li id="list4">
            <a class="highlight four thing" href="http://v4.afciviliancareers.com/find-a-job.php">Find A Job</a>
          </li>
          <li>
            <a id="list5" class="highlight five thing" href="http://v4.afciviliancareers.com/contact.php">Contact</a>
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
            <form class="ml15">
              <div class="tipue_search_group">
                <input type="search" name="q" id="tipue_search_input" pattern=".{3,}" title="At least 3 characters" required="" placeholder="Search">
              </div>
            </form>
            <br><br>
            <li class="allAcross">
              <a id="liRegister" class="highlight three thing" href="https://www.afciviliancareers.com/afciviliancareers">Register</a>
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


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

		<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">

			<div class="site-branding-container">
				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
			</div><!-- .site-branding-container -->

			<?php if ( is_singular() && twentynineteen_can_show_post_thumbnail() ) : ?>
				<div class="site-featured-image">
					<?php
						twentynineteen_post_thumbnail();
						the_post();
						$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null;

						$classes = 'entry-header';
					if ( ! empty( $discussion ) && absint( $discussion->responses ) > 0 ) {
						$classes = 'entry-header has-discussion';
					}
					?>
					<div class="<?php echo $classes; ?>">
						<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
					</div><!-- .entry-header -->
					<?php rewind_posts(); ?>
				</div>
			<?php endif; ?>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
