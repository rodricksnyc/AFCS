

$(document).ready(function () {

//aos animations
  AOS.init();


//my vertical carousel for videos
  $('.carousel .vertical .item').each(function(){


    var next = $(this).next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i=1;i<2;i++) {
      next=next.next();
      if (!next.length) {
      	next = $(this).siblings(':first');
    	}

      next.children(':first-child').clone().appendTo($(this));
    }

  });



  let pageModule = {
        config: {
        classes: {
        container: '.container',
        wrapper: '.wrapper',
        flex: '.flexing',
        flexrelatve: '.flex-relative',
        close: '.close',
        nav: '.navbar'
      },
      ids: {
        calendar: '#myCool'
      },
        timeout: {
        basic: 800,
        normal: 2000,
        long: 3500
      }
    },
    showContent: function(div){
      // show contents for divs if you want to here.
    },
    hideContent: function(div){
      // hide contents for divs if you want to here.
    },
    animateContent: function(div){
      // animate contents for divs if you want to here.
    },
    getNavFixedHeight: function(){
      var nav = pageModule.config.classes.nav
      // Calculate where to put the height for the nav when a scroll happens
      let fixedHeight = $(nav).height() // div.innerHeight -
      console.log(`fixed height is ${fixedHeight}`);
      return fixedHeight;
    },
    init: function() {
      // This is where we carry out our project
      let self = this;
      // Start the stuff. This could be your init file.
      console.log('this is started');

      //Initialize Aos animations. I think
      AOS.init();

      // initialize the carousel
      self.carousel();
    },
    carousel: function(){
      // Handle the carousel stuff
      $('.carousel .vertical .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i=1;i<2;i++) {
          next=next.next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));
        }
      });
    },
  }


    pageModule.init();
    // Handle the calendar clicking
    $("#openIt").click(function(){
      // Get the position of the nav and set it to the hiddenVideos // IDEA:
      $("#hiddenVideos").css({"top": pageModule.getNavFixedHeight()})
      $("#news").css({"top": pageModule.getNavFixedHeight()})
      console.log('I am clickarooooooo');
      // hide the hiddenVideos
      // Improve on this.
      //sliding the calendar div down
      $(".moveThis").hide();
      $(".moveThis2").hide();
      $(".moveThis3").hide();
      $('.slick-dots').hide();


      $('.center').slideUp(pageModule.config.timeout.normal);
      $('.trans--grow').fadeOut(pageModule.config.timeout.normal).addClass('zero');
      $("html, body").animate({scrollTop: pageModule.getNavFixedHeight()}, 950);
      $('#myCool').addClass('flexing flexing-scroll')
                  .animate(
                    {
                      "height" : "auto",
                      "top": pageModule.getNavFixedHeight(),
                    }, 1000)
                  .delay('1000').fadeIn();
      $("#myCool").slideDown(pageModule.config.timeout.normal);
    });

    //Closing the calendar div
    $("#myCool .close").click(function(){

      $(".moveThis").show();
      $(".moveThis2").show();
      $(".moveThis3").show();
      $('.slick-dots').show();


      $('#myCool').removeClass('changeIt2');
      $('#myCool').removeClass('changeIt3');
      $('#myCool').removeClass('changeItAgain');
      $('#myCool').removeClass('animated slideInRight');
      $('#myCool').removeClass('animated slideInLeft');

      $("#myCool").slideUp(pageModule.config.timeout.normal);

      setTimeout(function(){
        $('#myCool').removeClass('flexing flexing-scroll').removeAttr('style');
      },pageModule.config.timeout.basic);

      setTimeout(function(){
        $('#hiddenVideos').removeAttr('style');
      },pageModule.config.timeout.basic);

      setTimeout(function(){
        $('#news').removeAttr('style');
      },pageModule.config.timeout.basic);




      $('.center').slideDown(pageModule.config.timeout.normal);
      $('.trans--grow').delay('1000').fadeIn(pageModule.config.timeout.normal).removeClass('zero');

      // $('#hiddenVideos').removeClass('changeIt')
    });



    $("#openIt2").click(function(){
      // Get the position of the nav and set it to the hiddenVideos // IDEA:
      $("#myCool").css({"top": pageModule.getNavFixedHeight()})
      $("#news").css({"top": pageModule.getNavFixedHeight()})
      console.log('I am clickarooooooo');
      // hide the hiddenVideos
      // Improve on this.
      //sliding the calendar div down
      $(".moveThis").hide();
      $(".moveThis2").hide();
      $(".moveThis3").hide();
      $('.slick-dots').hide();
      // $('nav').addClass('fixed');
      $('.center').slideUp(pageModule.config.timeout.normal);
      $('.trans--grow').fadeOut(pageModule.config.timeout.normal).addClass('zero');
      $("html, body").animate({scrollTop: pageModule.getNavFixedHeight()}, 950);

      $('#hiddenVideos').addClass('flexing flexing-scroll')
                  .animate(
                    {
                      "height" : "auto",
                      "top": pageModule.getNavFixedHeight(),
                    }, 1000)
                  .delay('1000').fadeIn();
      $("#hiddenVideos").slideDown(pageModule.config.timeout.normal);
    });

    //Closing the calendar div
    $("#hiddenVideos .close3").click(function(){


      $(".moveThis").show();
      $(".moveThis2").show();
      $(".moveThis3").show();
      $('.slick-dots').show();
      $('#myCool').removeClass('changeIt2');
      $('#myCool').removeClass('changeIt3');
      $('#myCool').removeClass('changeItAgain');
      $('#myCool').removeClass('animated slideInRight');
      $('#myCool').removeClass('animated slideInLeft');


      $("#hiddenVideos").slideUp(pageModule.config.timeout.normal);
      // $('#myCool').css({'display': 'none'});

      setTimeout(function(){
        $('#hiddenVideos').removeClass('flexing flexing-scroll').removeAttr('style');
        $('#myCool').removeClass('flexing flexing-scroll').removeAttr('style');

      },pageModule.config.timeout.basic);

      setTimeout(function(){
        $('#myCool').removeAttr('style');
      },pageModule.config.timeout.basic);

      setTimeout(function(){
        $('#news').removeAttr('style');
      },pageModule.config.timeout.basic);




      $('.center').slideDown(pageModule.config.timeout.normal);
      $('.trans--grow').delay('1000').fadeIn(pageModule.config.timeout.normal).removeClass('zero');


    });

//sliding news div down


$("#openIt3").click(function(){
  // Get the position of the nav and set it to the hiddenVideos // IDEA:
  $("#myCool").css({"top": pageModule.getNavFixedHeight()})
  $("#hiddenVideos").css({"top": pageModule.getNavFixedHeight()})

  $(".moveThis").hide();
  $(".moveThis2").hide();
  $(".moveThis3").hide();
  $('.slick-dots').hide();



  $('.center').slideUp(pageModule.config.timeout.normal);
  $('.trans--grow').fadeOut(pageModule.config.timeout.normal).addClass('zero');
  $("html, body").animate({scrollTop: pageModule.getNavFixedHeight()}, 950);

  $('#news').addClass('flexing flexing-scroll')
              .animate(
                {
                  "height" : "auto",
                  "top": pageModule.getNavFixedHeight(),
                }, 1000)
              .delay('1000').fadeIn();
  $("#news").slideDown(pageModule.config.timeout.normal);
});

//Closing the news div
$("#news .close4").click(function(){


  $(".moveThis").show();
  $(".moveThis2").show();
  $(".moveThis3").show();
  $('.slick-dots').show();
  $('#myCool').removeClass('changeIt2');
  $('#myCool').removeClass('changeIt3');
  $('#myCool').removeClass('changeItAgain');
  $('#myCool').removeClass('animated slideInRight');
  $('#myCool').removeClass('animated slideInLeft');

  $("#news").slideUp(pageModule.config.timeout.normal);


  setTimeout(function(){
    $('#news').removeClass('flexing flexing-scroll').removeAttr('style');
  },pageModule.config.timeout.basic);

  setTimeout(function(){
    $('#myCool').removeAttr('style');
  },pageModule.config.timeout.basic);

  setTimeout(function(){
    $('#hiddenVideos').removeAttr('style');
  },pageModule.config.timeout.basic);



  $('.center').slideDown(pageModule.config.timeout.normal);
  $('.trans--grow').delay('1000').fadeIn(pageModule.config.timeout.normal).removeClass('zero');


});



    //videos click

    $('#videos').click(function(){
    if ( $('#myCool').hasClass('flexing flexing-scroll')) {
      $("#hiddenVideos").show().addClass('changeIt');

      console.log('This is innerWidth ', $("#myCool").width());
      $(".flexing-scroll").animate(
        {
          "left": -$("#myCool").width()
        }
      , 990);
      $("#hiddenVideos").animate(
        {
          "top": pageModule.getNavFixedHeight(),
          "left": 0
        }
      , 1000);

    } else if ( $('#hiddenVideos').hasClass('flexing flexing-scroll')){

    //   $("#hiddenVideos").show().addClass('changeItRight');
    //
    $("#myCool").animate(
      {
        "top": pageModule.getNavFixedHeight(),
        "right": "100%"
      }
    , 900);

    $("#hiddenVideos").animate(
      {
        "right": 0
      }
    , 1500);


    setTimeout(function(){

      $('#myCool').removeClass('changeIt2');


   }, 100);


  setTimeout(function(){
      $('#myCool').addClass('changeIt3 animated slideInRight');

  }, 200);

}

  });


  //events click


  $("#events").click(function(){
    if ( $('#myCool').hasClass('flexing flexing-scroll')) {
    $("#hiddenVideos").animate(
      {
        "top": pageModule.getNavFixedHeight(),
        "left": "100%"
      }
    , 990);
    $(".flexing-scroll").animate(
      {
        "left": 0
      }
    , 1000);

    } else if ( $('#hiddenVideos').hasClass('flexing flexing-scroll')) {


      $(".flexing-scroll").animate(
        {
          "right": -$("#hiddenVideos").width()
        }
      , 1000);

    $("#myCool").show().animate({"top": pageModule.getNavFixedHeight(),"right": 100});

      setTimeout(function(){

       $('#myCool').addClass('changeIt2 animated slideInLeft');

     }, 100);

      $("#myCool").animate({"top": pageModule.getNavFixedHeight(),"right": 1000}, 1000).delay(990).addClass('changeItAgain');


  }

    });








//slick slider


  $('.homeSlider').slick({
  dots: true,
  autoplay: true,
  autoplaySpeed: 5000,
  infinite: true,
  fade: true,
  cssEase: 'linear',
  initialSlide:0,
});



//flickity carousel
var elem = document.querySelector('.m-carousel')
if(elem) {
var flkty = new Flickity( elem, {
  wrapAround: true,
  pageDots: false,
  adaptiveHeight: false,
  lazyLoad: 2,
  arrowShape:'M27.1,46.45a5.07,5.07,0,0,0,0,7.12L55.74,82.21a5.08,5.08,0,0,0,7.14,0h0a5,5,0,0,0,0-7.14l-25-25,25-25a5.07,5.07,0,0,0,0-7.14h0a5,5,0,0,0-7.14,0Z'
  });
}


//navigation bar animations aka the top header menu animations

  $('.social').click(function() {
    $('.makeToggle').hide();
    $('.icon').addClass('easeIt').animate({ width: 'show' }, 600);
    setTimeout(function(){
        $(".icon").addClass("addIt");
    }, 400);
      if ($('#fuck').hasClass('icon noShow2 easeIt addIt')) {
        console.log('fuck')
      $('.hideAgain2').addClass('away');
    } else if (!$('#fuck').hasClass('icon noShow2 easeIt addIt')) {
        console.log('fuck it')
        $('.hideAgain2').removeClass('away');
        // $('.hideAgain2').addClass('back');
      }
  });

  $('.searchIt').click(function() {
    if ($('#fuck').hasClass('icon noShow2 easeIt addIt')) {
      console.log('fuck')
    $('.hideAgain2').addClass('away');
  } else if (!$('#fuck').hasClass('icon noShow2 easeIt addIt')) {
      console.log('fuck it')
      $('.hideAgain2').removeClass('away');
      // $('.hideAgain2').addClass('back');
}
});

  $('.hideAgain').click(function(){
    setTimeout(function(){
        $(".icon").removeClass("addIt");
    }, 400);
    $('.icon').animate({ width: 'hide' }, {"height" : "0px"}, 1000);
    $('.bubble').animate({ width: 'hide' }, {"height" : "0px"}, 800);
    $(".makeToggle").delay('600').fadeIn();
  })
  $('.searchIt').click(function() {
    $('.makeToggle').hide();
    $('.bubble').animate({ width: 'show' }, 800);
  });
  $('.hideAgain2').click(function(){
    $('.bubble').animate({ width: 'hide' }, {"height" : "0px"}, 800);
      $(".makeToggle").delay('600').fadeIn();
  })


  $('.moveThis').mouseover(function(){
       setTimeout(function() {
       $('.block1').addClass('block1Thing');
         $('.block1').addClass('animated fadeInUp');
       }, 100);
  setTimeout(function() {
      $('.block2').addClass('block2Thing');
        $('.block2').addClass('animated fadeInUp');
      }, 200);
    setTimeout(function() {
      $('.block3').addClass('block3Thing');
        $('.block3').addClass('animated fadeInUp');
      }, 700);
    setTimeout(function() {
      $('.trans--grow').addClass('grow');
    }, 1800);
  });


//make the p tags float up

$('.center').mouseover(function(){
     setTimeout( function() {
     // $('.firstP').addClass('firstPThing');
     // $('.firstP').addClass('easeIt2');
     //   $('.firstP').addClass('animated slideInUp');
    $('.block4').addClass('animated fadeInUp');

  }, 0);
});


$('.m-carousel').mouseover(function(){
     setTimeout( function() {
       $('.block5').addClass('animated fadeInUp');
     // $('.secondP').addClass('secondPThing');
     // $('.secondP').addClass('easeIt2');
     //   $('.secondP').addClass('animated slideInUp');
   }, 0);
});




//text aka letter animations
  var startIt = $('.moveThis');
  var $tlt1 = $('.tlt1').textillate({
      autoStart: false,
      selector: '.tlt1',
      loop: false,
      minDisplayTime: 1000,
      initialDelay: 500,
      in: {
        effect: 'fadeInLeft',
        delayScale: 5,
        delay: 15,
        sync: false,
        shuffle: true,
        reverse: false,
        callback: function () {}
      },
      type: 'char'
  });
  startIt.one('mouseenter', function () { $tlt1.textillate('start'); });
  startIt.one('mouseout', function () { $tlt1.textillate('stop'); });
  var startIt2 = $('.moveThis');
  var $tlt2 = $('.tlt2').textillate({
      autoStart: false,
      selector: '.tlt2',
      loop: false,
      minDisplayTime: 1000,
      initialDelay: 1000,
      in: {
        effect: 'fadeInLeft',
        delayScale: 5,
        delay: 15,
        sync: false,
        shuffle: true,
        reverse: false,
        callback: function () {}
      },
      type: 'char'
  });
  startIt2.one('mouseenter', function () { $tlt2.textillate('start'); });
  startIt2.one('mouseout', function () { $tlt2.textillate('stop'); });
  var startIt3 = $('.moveThis');
  var $tlt3 = $('.tlt3').textillate({
      autoStart: false,
      selector: '.tlt3',
      loop: false,
      minDisplayTime: 1000,
      initialDelay: 1500,
      in: {
        effect: 'fadeInLeft',
        delayScale: 5,
        delay: 15,
        sync: false,
        shuffle: true,
        reverse: false,
        callback: function () {}
      },
      type: 'char'
  });
  startIt3.one('mouseenter', function () { $tlt3.textillate('start'); });
  startIt3.one('mouseout', function () { $tlt3.textillate('stop'); });
//   if ($('.block1').hasClass('animated' && 'fadeInUp')) {
//     console.log('please')
//   $('.trans--grow').addClass('grow');
//
// } else if (!$('.block1').hasClass('animated' && 'fadeInUp')) {
//     console.log('hello')
//
//
//   }



//slick slider text animations
$(".homeSlider").on("beforeChange", function(event, slick, currentSlide, nextSlide){
$(".homeSlider .slick-dots li").removeClass("slick-active");
$(".homeSlider .slick-dots li button").attr("aria-pressed","false").focus(function() {
       this.blur();
   });
});



//clicking on buttons
$('#slick-slide-control01').on('click', function () {
      $("#slick-slide01", "slick-slide00", "slick-slide02").removeClass("active");
      $('.slide__caption2').removeClass('unset');
      console.log("fuck")
  // $('.homeSlider').on("beforeChange", function (event, slick, currentSlide, nextSlide) {
  //   console.log('eliz')
  //
  //
  //      if ($('div#slick-slide02').hasClass('slick-current' && 'slick-active')) {
  //            console.log('assbutt')
  //          $("#slick-slide01", "slick-slide00", "slick-slide02").removeClass("active");
  //        }
  //
    function circle1 () {
      $('.inner2').removeClass('newInner2')
      $('.slide__caption2').addClass('unset');
    };
    setTimeout(circle1, 1200);
  function circle2() {
      $('.inner2').addClass('innerTwo');
      }
setTimeout(circle2, 1300);
  function circle3() {
          $('.inner2').addClass('newInner2')
        }
 setTimeout(circle3, 3000);
 function circle4() {
  $('.inner2').removeClass('innerTwo');
     $('.slide__caption2').removeClass('unset');
     $('.inner2').removeClass('newInner2')
 }
  setTimeout(circle4, 3500);
// });
});
$('#slick-slide-control00').on('click', function () {
console.log("fucdiucbik")
   $("#slick-slide01", "slick-slide00", "slick-slide02").removeClass("active");
  $('.slide__caption').removeClass('unset');
  // $('.homeSlider').on("beforeChange", function (event, slick, currentSlide, nextSlide) {
  //   console.log('anne')
  //
  //
  //
  // 	 if ($('div#slick-slide01').hasClass('slick-current' && 'slick-active')) {
  //        console.log('butt')
  //      $("#slick-slide01", "slick-slide00", "slick-slide02").removeClass("active");
  //    }
//
function circle5 () {
      $('.inner').removeClass('newInner')
      $('.slide__caption').addClass('unset');
    };
    setTimeout(circle5, 1200);
  function circle6() {
      $('.inner').addClass('innerOne');
      }
setTimeout(circle6, 1300);
  function circle7() {
          $('.inner').addClass('newInner')
        }
 setTimeout(circle7, 3000);
 function circle8() {
  $('.inner').removeClass('innerOne');
     $('.slide__caption').removeClass('unset');
     $('.inner').removeClass('newInner')
 }
 setTimeout(circle8, 3500);
// });
});
$('#slick-slide-control02').on('click', function () {
console.log("fujshdvsdvvdviivck")
  $("#slick-slide01", "slick-slide00", "slick-slide02").removeClass("active");
$('.slide__caption3').removeClass('unset');
  // $('.homeSlider').on("beforeChange", function (event, slick, currentSlide, nextSlide) {
  //   console.log('rod')
  //
  //
  //     	 if ($('div#slick-slide00').hasClass('slick-current' && 'slick-active')) {
  //            console.log('butthole')
  //          $("#slick-slide01", "slick-slide00", "slick-slide02").removeClass("active");
  //        }
    function circle9 () {
      $('.inner3').removeClass('newInner3')
      $('.slide__caption3').addClass('unset');
    };
    setTimeout(circle9, 1200);
  function circle10() {
      $('.inner3').addClass('innerThree');
      }
setTimeout(circle10, 1300);
  function circle11() {
          $('.inner3').addClass('newInner3')
        }
 setTimeout(circle11, 3000);
 function circle12() {
  $('.inner3').removeClass('innerThree');
     $('.slide__caption3').removeClass('unset');
     $('.inner3').removeClass('newInner3')
 }
 setTimeout(circle12, 3500);
// });
});
//automatic sliders functions
   if ($('div#slick-slide00').hasClass('slick-current' && 'slick-active')) {
  function myFunction(){
     console.log('fuck')
     function zero() {
         $('.slide__caption').addClass('unset');
     };
    setTimeout(zero, 1200);
     function first() {
      $('.inner').addClass('innerOne');
      }
      setTimeout(first, 1300);
      function second() {
        $('.inner').addClass('newInner')
      }
    setTimeout(second, 4999);
      function third() {
          $('.slide__caption').removeClass('unset');
           $('.inner').removeClass('innerOne');
          $('.inner').removeClass('newInner')
      }
      setTimeout(third, 5300);
      };
      myFunction();
      setInterval(myFunction, 16400);
 }
 $('.homeSlider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
   console.log('y')
 	// $("#slick-slide00").removeClass("active");
  // 	var mySlideNumber = nextSlide;
 	$("#slick-slide01").addClass("active");
  function myFunction2(){
      function fourth() {
          $('.inner2').removeClass('newInner2')
        $('.slide__caption2').addClass('unset');
      };
  setTimeout(fourth, 1200);
    function fifth() {
        $('.inner2').addClass('innerTwo');
        }
  setTimeout(fifth, 1300);
    function sixth() {
            $('.inner2').addClass('newInner2')
          }
   setTimeout(sixth, 4999);
   function seventh() {
    $('.inner2').removeClass('innerTwo');
       $('.slide__caption2').removeClass('unset');
       $('.inner2').removeClass('newInner2')
   }
   setTimeout(seventh, 5300);
  };
      myFunction2();
      setInterval(myFunction2, 16400);
 });
 $('.homeSlider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    console.log('yzzz')
	// $("#slick-slide01").removeClass("active");
 	// var mySlideNumber = nextSlide;
	$("#slick-slide02").addClass("active");
  function myFunction3(){
    function eighth() {
        $('.inner3').removeClass('newInner3')
      $('.slide__caption3').addClass('unset');
    };
  setTimeout(eighth, 1200);
    function ninth() {
     $('.inner3').addClass('innerThree');
     }
  setTimeout(ninth, 1300);
     function tenth() {
       $('.inner3').addClass('newInner3')
     }
  setTimeout(tenth, 4999);
  function eleventh() {
      $('.slide__caption3').removeClass('unset');
       $('.inner3').removeClass('innerThree');
      $('.inner3').removeClass('newInner3')
  }
  setTimeout(eleventh, 5300);
  };
      myFunction3();
      setInterval(myFunction3, 16400);
});
// $('.homeSlider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
//    console.log('yzzz')
//  $("#slick-slide02").removeClass("active");
//  var mySlideNumber = nextSlide;
//  $("#slick-slide02:eq("+mySlideNumber+")").addClass("active");
//
//
//  function myFunction(){
//     console.log('fuck')
//     function zero() {
//         $('.slide__caption').addClass('unset');
//     };
//    setTimeout(zero, 1400);
//
//     function first() {
//      $('.inner').addClass('innerOne');
//
//      }
//      setTimeout(first, 1500);
//
//      function second() {
//        $('.inner').addClass('newInner')
//      }
//
//    setTimeout(second, 3600);
//
//      function third() {
//
//          $('.slide__caption').removeClass('unset');
//           $('.inner').removeClass('innerOne');
//          $('.inner').removeClass('newInner')
//      }
//
//      setTimeout(third, 4300);
//
//
//      };
//
//      myFunction();
//
//      setInterval(myFunction, 16400);
//
// });
//loops
// function myFunction(){
//
// function zero() {
//     $('.slide__caption').addClass('unset');
// };
// setTimeout(zero, 1400);
//
// function first() {
//  $('.inner').addClass('innerOne');
//
//  }
//  setTimeout(first, 1500);
//
// function second() {
//   $('.inner').addClass('newInner')
// }
//
// setTimeout(second, 3600);
//
// function third() {
//
//     $('.slide__caption').removeClass('unset');
//      $('.inner').removeClass('innerOne');
//     $('.inner').removeClass('newInner')
// }
//
// setTimeout(third, 4300);
//
// };
//
// myFunction();
//
// setInterval(myFunction, 16400);
//
//
//
//
//
// function myFunction2(){
//
//     function fourth() {
//         $('.inner2').removeClass('newInner2')
//       $('.slide__caption2').addClass('unset');
//     };
// setTimeout(fourth, 5900);
//
//   function fifth() {
//       $('.inner2').addClass('innerTwo');
//       }
// setTimeout(fifth, 6100);
//
//   function sixth() {
//           $('.inner2').addClass('newInner2')
//         }
//  setTimeout(sixth, 8300);
//
//  function seventh() {
//   $('.inner2').removeClass('innerTwo');
//      $('.slide__caption2').removeClass('unset');
//
//      $('.inner2').removeClass('newInner2')
//  }
//
//  setTimeout(seventh, 9100);
//
// };
//     myFunction2();
//
//     setInterval(myFunction2, 16500);
//
//
//
//
//
//
// function myFunction3(){
//
//   function eighth() {
//       $('.inner3').removeClass('newInner3')
//     $('.slide__caption3').addClass('unset');
//   };
// setTimeout(eighth, 11200);
//
//   function ninth() {
//    $('.inner3').addClass('innerThree');
//    }
// setTimeout(ninth, 11300);
//    function tenth() {
//      $('.inner3').addClass('newInner3')
//    }
//
// setTimeout(tenth, 13400);
//
// function eleventh() {
//
//     $('.slide__caption3').removeClass('unset');
//      $('.inner3').removeClass('innerThree');
//     $('.inner3').removeClass('newInner3')
// }
//
// setTimeout(eleventh, 14100);
//
//
// };
//     myFunction3();
//
//     setInterval(myFunction3, 16800);
//end the loops
// function zero() {
//     $('.slide__caption').addClass('unset');
//
// };
// setTimeout(zero, 1400);
// function first() {
//  $('.inner').addClass('innerOne');
//
//  }
//  setTimeout(first, 1500);
//
//  function second() {
//    $('.inner').addClass('newInner')
//
//  }
// setTimeout(second, 3000)
//
//  function third() {
//    $('.slide__caption2').addClass('unset');
//  };
//  function fourth() {
//   $('.inner2').addClass('innerTwo');
//   }
//
// console.log('bbbbbb')
//
//
//   function fifth() {
//     $('.inner2').addClass('newInner2')
//   }
//
//   function sixth() {
//     $('.slide__caption3').addClass('unset');
//   };
//   function seventh() {
//    $('.inner3').addClass('innerThree');
//    }
//
//
//    console.log('cccccccc')
//
//    function eighth() {
//      $('.inner3').addClass('newInner3')
//    }
//
//  setTimeout(zero, 1400);
//  setTimeout(first, 1500);
//  setTimeout(second, 4000);
//  setTimeout(third, 5900);
//  setTimeout(fourth, 6000);
//  setTimeout(fifth, 8800);
//  setTimeout(sixth, 11200);
//  setTimeout(seventh, 11300);
//  setTimeout(eighth, 14300);




//the line animations under the a tags in navbar
 jQuery('#menu2').append('<li class="slide-line"></li>');
 jQuery(document).on('click', '#menu2 li a', function () {
         var $this = jQuery(this),
             offset = $this.offset(),
             offsetBody = jQuery('#box2').offset();
         TweenMax.to(jQuery('#menu2 .slide-line'), 0.45, {
           css:{
             width: $this.innerWidth() - 30 +'px',
             left: (offset.left-offsetBody.left) + 15 +'px',
             top: (offset.top-offsetBody.top+jQuery(this).height())+'px'
           },
           ease:Power2.easeInOut
         });
         return false;
 });
 jQuery('#menu2 > li a.highlight').first().trigger("click");
    $("a.highlight").on("click", function(e) {
       $("a.highlight").removeClass("darker");
         console.log("yo again");
         $(this).addClass("darker");
       });
    $( 'ul.nav li' ).on( 'click', function() {
         console.log("wtf");
                $( this ).parent().find( 'darker' ).removeClass( 'darker' );
                $( this ).addClass( 'darker' );
      });
});




//flickity modal 1

var model = document.getElementById('mymodel');


var img = document.getElementById('myImg');
var modelImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){


  model.style.display = "block";
  modelImg.src = this.src;
  captionText.innerHTML = this.alt;

$('.flickity-button-icon').hide();
$(".moveThis").hide();
$(".moveThis2").hide();
$(".moveThis3").hide();

}


var span = document.getElementsByClassName("closeThis")[0];


span.onclick = function() {
  model.style.display = "none";

  $('.flickity-button-icon').show();
  $(".moveThis").show();
  $(".moveThis2").show();
  $(".moveThis3").show();

}

//flickity modal 2

var model2 = document.getElementById('mymodel2');


var img2 = document.getElementById('myImg2');
var model2Img = document.getElementById("img02");
var caption2Text = document.getElementById("caption2");
img2.onclick = function(){


  model2.style.display = "block";
  model2Img.src = this.src;
  caption2Text.innerHTML = this.alt;

  $('.flickity-button-icon').hide();

  $(".moveThis").hide();
  $(".moveThis2").hide();
  $(".moveThis3").hide();
}

var span2 = document.getElementsByClassName("closeThis2")[0];


span2.onclick = function() {
  model2.style.display = "none";

  $('.flickity-button-icon').show();

  $(".moveThis").show();
  $(".moveThis2").show();
  $(".moveThis3").show();

}

//flickity modal 3

var model3 = document.getElementById('mymodel3');


var img3 = document.getElementById('myImg3');
var model3Img = document.getElementById("img03");
var caption3Text = document.getElementById("caption3");
img3.onclick = function(){


  model3.style.display = "block";
  model3Img.src = this.src;
  caption3Text.innerHTML = this.alt;

  $('.flickity-button-icon').hide();
  $(".moveThis").hide();
  $(".moveThis2").hide();
  $(".moveThis3").hide();
}

var span3 = document.getElementsByClassName("closeThis3")[0];


span3.onclick = function() {
  model3.style.display = "none";

  $('.flickity-button-icon').show();

  $(".moveThis").show();
  $(".moveThis2").show();
  $(".moveThis3").show();
}

//flickity modal 4

var model4 = document.getElementById('mymodel4');


var img4 = document.getElementById('myImg4');
var model4Img = document.getElementById("img04");
var caption4Text = document.getElementById("caption4");
img4.onclick = function(){


  model4.style.display = "block";
  model4Img.src = this.src;
  caption4Text.innerHTML = this.alt;

  $('.flickity-button-icon').hide();
}

var span4 = document.getElementsByClassName("closeThis4")[0];


span4.onclick = function() {
  model4.style.display = "none";
  $('.flickity-button-icon').show();
}

//flickity modal 5

var model5 = document.getElementById('mymodel5');


var img5 = document.getElementById('myImg5');
var model5Img = document.getElementById("img05");
var caption5Text = document.getElementById("caption5");
img5.onclick = function(){


  model5.style.display = "block";
  model5Img.src = this.src;
  caption5Text.innerHTML = this.alt;
  $('.flickity-button-icon').hide();
}

var span5 = document.getElementsByClassName("closeThis5")[0];


span5.onclick = function() {
  model5.style.display = "none";
  $('.flickity-button-icon').show();
}

//flickity modal 6

// var model6 = document.getElementById('mymodel6');
//
//
// var img6 = document.getElementById('myImg6');
// var model6Img = document.getElementById("img06");
// var caption6Text = document.getElementById("caption6");
// img6.onclick = function(){
//
//   console.log("fuck you again bitch")
//   model6.style.display = "block";
//   model6Img.src = this.src;
//   caption6Text.innerHTML = this.alt;
// }
//
// var span6 = document.getElementsByClassName("closeThis6")[0];
//
//
// span6.onclick = function() {
//   model6.style.display = "none";
//
// }

//ajax calls for the image downloads

$('#getFile').on('click', function () {
    $.ajax({
        url: 'http://www.elizabethrodricks.com/images5/carousel5.JPG',
        method: 'GET',
        xhrFields: {
            responseType: 'blob'
        },
        success: function (data) {
            var a = document.createElement('a');
            var url = window.URL.createObjectURL(data);
            a.href = url;
            a.download = 'images5/carousel5.JPG';
            a.click();
            window.URL.revokeObjectURL(url);
        }
    });
});

$('#getFile2').on('click', function () {
    $.ajax({
        url: 'http://www.elizabethrodricks.com/images5/carousel1.JPG',
        method: 'GET',
        xhrFields: {
            responseType: 'blob'
        },
        success: function (data) {
            var a = document.createElement('a');
            var url = window.URL.createObjectURL(data);
            a.href = url;
            a.download = 'images5/carousel1.JPG';
            a.click();
            window.URL.revokeObjectURL(url);
        }
    });
});
$('#getFile3').on('click', function () {
    $.ajax({
        url: 'http://www.elizabethrodricks.com/images5/carousel2.JPG',
        method: 'GET',
        xhrFields: {
            responseType: 'blob'
        },
        success: function (data) {
            var a = document.createElement('a');
            var url = window.URL.createObjectURL(data);
            a.href = url;
            a.download = 'images5/carousel2.JPG';
            a.click();
            window.URL.revokeObjectURL(url);
        }
    });
});

$('#getFile4').on('click', function () {
    $.ajax({
        url: 'http://www.elizabethrodricks.com/images5/carousel3.JPG',
        method: 'GET',
        xhrFields: {
            responseType: 'blob'
        },
        success: function (data) {
            var a = document.createElement('a');
            var url = window.URL.createObjectURL(data);
            a.href = url;
            a.download = 'images5/carousel3.JPG';
            a.click();
            window.URL.revokeObjectURL(url);
        }
    });
});
$('#getFile5').on('click', function () {
    $.ajax({
        url: 'http://www.elizabethrodricks.com/images5/carousel4.JPG',
        method: 'GET',
        xhrFields: {
            responseType: 'blob'
        },
        success: function (data) {
            var a = document.createElement('a');
            var url = window.URL.createObjectURL(data);
            a.href = url;
            a.download = 'images5/carousel4.JPG';
            a.click();
            window.URL.revokeObjectURL(url);
        }
    });
});


//magnet circle hover effects for a tags


(function() {
	const btn = document.querySelectorAll('.overlayText');
	const cursor = document.querySelector('.cursor');

	const update = function(e) {
		const span = this.querySelector('span');
		const { offsetX: x, offsetY: y } = e,
				{ offsetWidth: width, offsetHeight: height } = this,
				walk = 10,
				xWalk = (x / width) * (walk * 2) - walk,
				yWalk = (y / height) * (walk * 2) - walk;

		span.style.transform = `translate(${xWalk}px, ${yWalk}px) scale(1.1)`;

		if(e.type === 'mouseleave') span.style.transform = '';
	}

	const handleCurosr = (e) => {
		const { clientX: x, clientY: y } = e;
		cursor.style.left = x + 'px';
		cursor.style.top = y + 'px';

		if(e.target.tagName.toLowerCase() === 'a') {
			cursor.style.transform = `translate(-50%, -50%) scale(2)`;
		} else if(cursor.style.transform === `translate(-50%, -50%) scale(2)`) {
			cursor.style.transform = `translate(-50%, -50%) scale(1)`;
		}
	}


	btn.forEach(b => b.addEventListener('mousemove', update));
	btn.forEach(b => b.addEventListener('mouseleave', update));
	window.addEventListener('mousemove', handleCurosr);
})();
