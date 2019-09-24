<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css5/animate.css">

  <link rel="stylesheet" href="css5/bootstrap-edited.css">

  <link rel="stylesheet" href="css5/bootstrap-theme.min.css">
  <!-- <link rel="stylesheet" href="css5/bootstrap.min.css"> -->

  <link rel="stylesheet" href="css/afcs.css">
  <link rel=stylesheet href="css/about.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
  <link href="css5/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css5/normalize.css">
  <link type="image/png" href="images5/afcs-favicon.png" rel="icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

  <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <link rel=stylesheet href="css/calendar.css">
  <link rel=stylesheet href="css/navbar.css">
  <link rel=stylesheet href="css/acquisition.css">
  <link rel=stylesheet href="css/find-a-job.css">
  <link rel="stylesheet" href="tipuesearch/tipuesearch.css">
<title><?php echo "AFCS - Air Force Civilian Service"; ?></title>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148601720-1"></script> 
 <script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-148601720-1');
</script>

<script>
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
   })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
   ga('create', 'UA-148601720-1', 'auto');
   ga('send', 'pageview');
 </script>
</head>

<style>

.panel-title > a.collapsed:before {
  float: right !important;
  content: "\f067";
  font-weight: 100 !important;
}

.panel-title > a:before {
  float: right !important;
  font-family: FontAwesome;
  content: "\f068";
  padding-right: 5px;
  font-weight: 100 !important;
  font-size: 13px;
  padding-top: 3px;
}

#result {
  position: absolute;
  background: #0c0f1c;
  z-index: 999;
  opacity: .9;
  width: 600px;
  color: white !important;
}

@media (max-width: 1024px) {
.center2 {
    margin-top: .5em !important;
}

.center2 a {
  font-size:18px;
}

.topList {
  font-size:20px;
}
}

</style>
<body>

<a href='#content' class='skipNav'>Skip to main content</a>
  <a href="#bottom" id="top"></a>

  <div style="background: #1f1e27 !important;" id="site-wrapper">
    <?php include("nav-include/job-navbar.php"); ?>

  <div id="tipModal">
  </div>


<a name='content'></a>
  <div class="container-fluid">
    <div class="row mt3">
      <center>
        <div class="col-xs-12 col-lg-12">
          <form class="form-inline">
            <input class="form-control two mr-sm-2" id="searchName" type="search" placeholder="Search by job name" aria-label="Search">

          </input>
          <div id="result">

          </div>
        </form>
      </div>
    </center>
  </div>
</div>


<div class="bottomBoxShadow" id="map-canvas"></div>

<div id="fsModal100" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-body">
        <div class="modal-footer">
          <div data-dismiss="modal">
            <div class="closeThis"></div>
          </div>

        </div>
        <section id="modalBlock" class="modalBlock">
          <center>
            <div class="container">
              <div class="row w800 heros">
                <div class="col-xs-12 col-lg-12">


                  <div class="content-top transparent">
                    <img src="images5/liner.jpg" id="slideUpLiner2">
                  </div>
                  <div class="content-middle transparent">

                    <img src="images5/liner.jpg" id="slideUpLiner3" style="margin-top:5em">
                  </div>

                </div>
              </div>
            </div>
          </center>
        </section>
      </div>

    </div>

  </div>
</div>


<section class="blocks2">
  <center>
    <div class="container-fluid w800">

      <div class="row heros">

        <div class="col-xs-12 col-lg-12">

          <img src="images5/liner.jpg" id="slideUpLiner2">

          <h1 class="acq content-top transparent">Find A Job</h1>
          <p class="small content-middle transparent">There are numerous AFCS jobs available around the country and around the world.There are numerous AFCS jobs available around the country and around the world.</p>
          <p class="small content-bottom transparent">Zoom in or out to see more or less detail, on the map above. Click on any marker to see current job openings.</p>
          <div class="content-last transparent">
            <img src="images5/liner.jpg" id="slideUpLiner3">
          </div>

        </div>
      </div>
    </div>

  </center>
</section>

<a href="#lastBottom" id="lastTop"></a>

<div style="position:relative;">
  <a name="applyAnchor" style="position:absolute;top:-100px;"></a>
</div>



<section class="blocks12">
  <center>

    <div class="container-fluid w800 second">
      <div class="row heros">

        <div class="col-xs-12 col-lg-12">

          <h1 class="acq content-top transparent">How to Apply</h1>
          <p class="small content-middle transparent">All AFCS job opportunities are also listed on the Federal Government’s official one-stop source for Federal jobs and employment information, USAJOBS. Access AFCS job opportunities at <a class="whiteStrong" href="https://airforce.usajobs.gov" target="_blank" onclick="ga('send', 'event', 'Go to USAJobs Page', 'click', 'Find A Job Page');">airforce.usajobs.gov.</a></p>

          <p class="small content-bottom transparent">Follow the steps below to determine if you are qualified and eligible, and apply for a position with AFCS.</p>


          <ul class="whiteList content-last transparent">
            <li class="whiteList"><u>Step One</u> – Find the Right Job for You</li>
            <li class="whiteList"><u>Step Two</u> – Read the Job Announcement</li>
            <li class="whiteList"><u>Step Three</u> – Apply for the Job</li>
          </ul>

          <div class="content-secondLast transparent">
            <h1 class="acq two">Qualification vs Eligibility</h1>
            <p class="small">Like any employer, AFCS expects you to be “qualified” when you apply for a position, but unlike some employers, you must also be “eligible.” What’s the difference? It’s actually pretty simple.</p>
          </div>

          <p class="small content-thirdLast transparent">“Qualification” is based on education and/or experience. As with any other employer, you will need to have certain educational and/or work experience in order to be qualified for a given position. For example, if you want a job as a doctor, you need to have completed medical school and fulfilled the related requirements. The kinds of background needed are always clearly detailed in the Job Opportunity Announcement listed at <a class="whiteStrong" href="https://airforce.usajobs.gov" target="_blank" onclick="ga('send', 'event', 'Go to USAJobs Page', 'click', 'Find A Job Page');">airforce.usajobs.gov.</a> Be sure you meet those expectations before you decide to apply.</p>
          <p class="small content-fourthLast transparent">However, even if you are completely “qualified” for a job, you may not actually be “eligible.” In the Federal jobs environment, “eligibility” refers to Federal regulatory requirements that determine who can apply for specific jobs.</p>

          <div class="content-fifthLast transparent">
            <p class="small">Each AFCS Job Opportunity Announcement will carefully spell out who is eligible to apply in the “Who May Apply” section. Further details on who may apply can be found in the “Other Information” and “How to Apply” sections. It is very important to review these requirements carefully. If you do not meet the requirements listed, you may not apply for the job.</p>

            <p class="small2">For additional information on this subject please review the "<a class="whiteStrong" href="https://www.afciviliancareers.com/pdf/AF_Civilian_Employment_Eligibility_Guide.pdf" target="_blank" onclick="ga('send', 'event', 'AF Civilian Employment Eligibility Guide PDF', 'click', 'Find A Job Page');">Air Force Civilian Employment Eligibility Guide.</a>""</p>
          </div>

        </div>
      </div>
    </div>
  </center>
</section>

<section class="blocks22">
  <center>
    <div class="container-fluid w800 second">

      <div class="row heros">

        <div class="col-xs-12 col-lg-12">


          <h1 class="acq two content-top transparent">Step 1: Find the Right Job for You</h1>
          <p class="small content-middle transparent">AFCS jobs are categorized as entry, mid, and senior levels, and are associated with different qualifications and pay grade levels. And, there are special categories of job opportunities, including jobs for students and recent graduates, veterans, military spouses, and individuals with disabilities.</p>
          <p class="small content-bottom transparent">This site provides several ways to help you find the right AFCS job. Use one of our helpful search tools:<p>

            <ul class="whiteList content-last transparent">
              <li class="whiteList">Our Jobs Discovery App will line up your education, skills, and experience with positions that need people with your background. You might be surprised at the variety of options you discover.</li>
              <li class="whiteList">Our Jobs Map lets you find positions that are available at every base and installation in the United States and around the world. </li>
              <li class="whiteList">Use text searches for AFCS job announcements on <a class="whiteStrong" target="_blank" href="https://airforce.usajobs.gov/" onclick="ga('send', 'event', 'Second USAJOBS link', 'click', 'Find A Job Page');">airforce.usajobs.gov</a></li>
            </ul>

            <h1 class="acq two content-secondLast transparent">Step 2: Read the Job Announcement</h1>
            <div class="content-thirdLast transparent">
              <p class="small">Each AFCS position (Job Opportunity Announcement) will provide detailed information about job qualifications, duties, salary, location, benefits, and security requirements. These will help you determine if your interests, education, and professional background make you a candidate who qualifies for the job.</p>
            </div>
            <div class="content-fourthLast transparent">
              <h1 class="acq two">Step 3: Apply for the Job</h1>
              <p class="small">Follow the instructions in the “How to Apply” section of each Job Opportunity Announcement. Instructions will guide you through the application process, providing you detailed information on the questions that must be addressed, and forms and format that must be used to present your resume and qualifications for the job. Help can be found at <a class="whiteStrong" target="_blank" href="https://www.usajobs.gov/Help/faq/application/documents/resume/what-to-include/" onclick="ga('send', 'event', 'Third USAJOBs link', 'click', 'Find A Job Page');">USAJOBS.gov</a>.</p>


              <img src="images5/liner.jpg" id="slideUpLiner3">

            </div>
          </div>
        </div>
      </div>
    </center>
  </section>

<?php include("footer-include/job-footer.php"); ?>
</div>


<script src="js5/jquery-3.3.1.min.js"></script>

<script
src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>

<!-- <script src="js5/bootstrap.js"></script> -->
<script src="js5/bootstrap.min.js"></script>

<script src="js5/slick.js"></script>
<script src="js5/slick.min.js"></script>


<script src="js5/TweenMax.min.js"></script>
<script src="js5/Draggable.min.js"></script>

<script src="js5/lettering.min.js"></script>


<script src="http://jschr.github.io/textillate/jquery.textillate.js"></script>



<script src="js5/about.js"></script>
<script src="js5/scrollTop.js"></script>

<script src="tipuesearch/tipuesearch_set.js"></script>
<script src="tipuesearch/tipuesearch_content.js"></script>
<script src="tipuesearch/tipuesearch.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBY810Ql4ysaCFgHNFF2olzw3RpuNK1HbE&callback=initMap" async defer></script>


<script>


var resultContainer = document.querySelector('#result');

var host = 'data.usajobs.gov';
var userAgent = 'rodricksnyc@gmail.com';
var authKey = 'ZVRFnMsfJGJ+6jvGyznqQPRyhF9n5h9jSS259lekdgU=';

var queryTerm = '';

var newURL = '';

var queryURLBase = "https://data.usajobs.gov/api/Search?Organization=AF"

// queryTerm = ($(this).find("option:selected").val());
// console.log( queryTerm)

$("#searchName").keydown(function(e) {



  if (e.keyCode === 13) { // If Enter key pressed

    e.preventDefault();
    $(this).trigger('submit');

    queryTerm = $('#searchName').val().trim();


    console.log( queryTerm)
    var newURL = queryURLBase + "&PositionTitle=" + queryTerm;
    console.log(newURL)

    $.ajax({
      url: newURL,
      method: 'GET',
      headers: {
        "Host": host,
        "User-Agent": userAgent,
        "Authorization-Key": authKey
      },
    }).done(function(response) {
      console.log('I am done ', response);
      $('#result').empty();




      //  for (let result in response.SearchResult.SearchResultItems) {
      //  let job = response.SearchResult.SearchResultItems[result].MatchedObjectDescriptor;
      //  console.log('This is result ', job);
      //  let title = job.PositionTitle;
      //  let company = job.OrganizationName;
      //  let location = job.PositionLocationDisplay;
      //  // let link = job.PositionURI;
      //  // $('#result').append(`<h6 class="jobFont">${company}</h6>`);
      //  // $('#result').append(`<h5 class="jobFont">${location}</h5>`);
      //  $("#result").append("<li class='mb7'><h2 class='jobFont'>" + title + "</h2><h6 class='jobFont'>" + company + "</h6><h5 class='jobFont'>" + location + "</h5><button id='showApi' class='btn btn-modal' data-toggle='modal' data-target='#fsModal100'>Learn More</button></li>");
      // }

      //elizabeth, add the dontShow class back on to the div above.... dont forget

      var outsideTitle, outsideDescription, outsideSummary, outsideLink;
      for (let result in response.SearchResult.SearchResultItems) {
        let job = response.SearchResult.SearchResultItems[result].MatchedObjectDescriptor;
        console.log('This is result ', job);
        let title = job.PositionTitle
        outsideTitle = job.PositionTitle;
        let company = job.OrganizationName;
        outsideCompany = job
        let location = job.PositionLocationDisplay;
        let description = job.UserArea.Details.JobSummary;
        outsideDescription = job.UserArea.Details.JobSummary;
        let summary = job.QualificationSummary;
        outsideSummary = job.QualificationSummary;
        let link = job.PositionURI;
        outsideLink = job.PositionURI;
        // $('#result').append(`<h6 class="jobFont">${company}</h6>`);
        // $('#result').append(`<h5 class="jobFont">${location}</h5>`);
        $("#result").append(`<div class="slideDown"><h5 class="jobFont">${company}</h5><h5 class="jobFont">${location}</h5><a class="jobFont" href="${link}" target="_blank">Apply</a></div>`);


        $('#result').addClass('morePadding');
      }




      console.log(outsideTitle)
      console.log(outsideDescription)
      console.log(outsideLink)
      console.log(outsideCompany)


      console.log(response);
    })
    .fail(function(error) {
      console.log(error);
    });

  }

});



$('#map-canvas').on('click', function() {
  $('#result').remove();
  $('#searchName').val('');
})


var host = 'data.usajobs.gov';
var userAgent = 'rodricksnyc@gmail.com';
var authKey = 'ZVRFnMsfJGJ+6jvGyznqQPRyhF9n5h9jSS259lekdgU=';
var apiUrl = "https://data.usajobs.gov/api/Search?ResultsPerPage=500&Organization=AF"
var content = "";
$.ajax({
  type: 'GET',
  url: apiUrl,
  headers: {
    "Host": host,
    "User-Agent": userAgent,
    "Authorization-Key": authKey
  },
  success: function (response) {

    var results = response.SearchResult.SearchResultItems;

    var locations = [];

    results.forEach(function (result) {
      var jobInfo = result.MatchedObjectDescriptor;
      var jobLocations = jobInfo.PositionLocation;

      jobLocations.forEach(function (location) {
        var key = location.LocationName;

        if (locations[key] == undefined) {
          var position = new google.maps.LatLng(location.Latitude, location.Longitude);

          locations[key] = {
            position: position,
            title: location.LocationName,
            jobs: [],
          };
        }

        var job = {
          PositionURI: jobInfo.PositionURI,
          PositionTitle: jobInfo.PositionTitle,
        };

        locations[key].jobs.push(job);
      });

    });

    function initialize(locations) {

      var icon = {
        url: "images5/blue-marker.png",
        scaledSize: new google.maps.Size(30, 46)
      };

      var coordinates = [{lat: 40.8005877, lng: -96.7609396}, {lat: 40.8005877, lng: -96.7609396}];

      var map = new google.maps.Map(document.getElementById('map-canvas'), {
        center: coordinates[0],
        zoom: 5,
        styles: [
          {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
          {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
          {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
          {
            featureType: 'administrative.locality',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'geometry',
            stylers: [{color: '#263c3f'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{color: '#6b9a76'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{color: '#38414e'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry.stroke',
            stylers: [{color: '#212a37'}]
          },
          {
            featureType: 'road',
            elementType: 'labels.text.fill',
            stylers: [{color: '#9ca5b3'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{color: '#746855'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [{color: '#1f2835'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'labels.text.fill',
            stylers: [{color: '#f3d19c'}]
          },
          {
            featureType: 'transit',
            elementType: 'geometry',
            stylers: [{color: '#2f3948'}]
          },
          {
            featureType: 'transit.station',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [{color: '#17263c'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{color: '#515c6d'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.stroke',
            stylers: [{color: '#17263c'}]
          }
        ]
      });

      var infowindow = new google.maps.InfoWindow();

      for (var key in locations) {
        var location = locations[key];
        var marker = new google.maps.Marker({
          position: location.position,
          map: map,
          icon: icon,
          title: location.title,
          animation: google.maps.Animation.DROP,
          jobs: location.jobs,
        });

        google.maps.event.addListener(marker, 'click', (function (marker, content, infowindow) {
          return function () {
            var content = `<div class="topList">Jobs In ${marker.title}</div>`;
            marker.jobs.forEach(function (job) {
              content = `${content} <div class="center2"><a href="${job.PositionURI}" target="_blank">${job.PositionTitle}</a>`

            });

            infowindow.setContent(content);
            infowindow.open(map, marker);
          };
        })(marker, content, infowindow));
      }
    }

    initialize(locations);
  }


});



</script>
</body>


</html>
