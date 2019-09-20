<!doctype html>

<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

<link rel="stylesheet" href="https://raw.githubusercontent.com/kathykato/12columns/master/12columns.scss">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>



<style>


.container2 {
  margin: auto;
  padding: 0 1rem;
  max-width: 71.25rem;
  width: 100%;
  font-family: 'Roboto Condensed', sans-serif;
}

.grid {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
}
.grid > [class*="column-"] {
  display: block;
}

.first {
  -webkit-box-ordinal-group: 0;
  -ms-flex-order: -1;
  order: -1;
}

.last {
  -webkit-box-ordinal-group: 13;
  -ms-flex-order: 12;
  order: 12;
}

.align-top {
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: start;
}

.align-center {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.align-bottom {
  -webkit-box-align: end;
  -ms-flex-align: end;
  align-items: end;
}

.column-xs-1 {
  -ms-flex-preferred-size: 8.3333333333%;
  flex-basis: 8.3333333333%;
  max-width: 8.3333333333%;
}

.column-xs-2 {
  -ms-flex-preferred-size: 16.6666666667%;
  flex-basis: 16.6666666667%;
  max-width: 16.6666666667%;
}

.column-xs-3 {
  -ms-flex-preferred-size: 25%;
  flex-basis: 25%;
  max-width: 25%;
}

.column-xs-4 {
  -ms-flex-preferred-size: 33.3333333333%;
  flex-basis: 33.3333333333%;
  max-width: 33.3333333333%;
}

.column-xs-5 {
  -ms-flex-preferred-size: 41.6666666667%;
  flex-basis: 41.6666666667%;
  max-width: 41.6666666667%;
}

.column-xs-6 {
  -ms-flex-preferred-size: 50%;
  flex-basis: 50%;
  max-width: 50%;
}

.column-xs-7 {
  -ms-flex-preferred-size: 58.3333333333%;
  flex-basis: 58.3333333333%;
  max-width: 58.3333333333%;
}

.column-xs-8 {
  -ms-flex-preferred-size: 66.6666666667%;
  flex-basis: 66.6666666667%;
  max-width: 66.6666666667%;
}

.column-xs-9 {
  -ms-flex-preferred-size: 75%;
  flex-basis: 75%;
  max-width: 75%;
}

.column-xs-10 {
  -ms-flex-preferred-size: 83.3333333333%;
  flex-basis: 83.3333333333%;
  max-width: 83.3333333333%;
}

.column-xs-11 {
  -ms-flex-preferred-size: 91.6666666667%;
  flex-basis: 91.6666666667%;
  max-width: 91.6666666667%;
}

.column-xs-12 {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  max-width: 100%;
}

@media (min-width: 48rem) {
  .column-sm-1 {
    -ms-flex-preferred-size: 8.3333333333%;
    flex-basis: 8.3333333333%;
    max-width: 8.3333333333%;
  }

  .column-sm-2 {
    -ms-flex-preferred-size: 16.6666666667%;
    flex-basis: 16.6666666667%;
    max-width: 16.6666666667%;
  }

  .column-sm-3 {
    -ms-flex-preferred-size: 25%;
    flex-basis: 25%;
    max-width: 25%;
  }

  .column-sm-4 {
    -ms-flex-preferred-size: 33.3333333333%;
    flex-basis: 33.3333333333%;
    max-width: 33.3333333333%;
  }

  .column-sm-5 {
    -ms-flex-preferred-size: 41.6666666667%;
    flex-basis: 41.6666666667%;
    max-width: 41.6666666667%;
  }

  .column-sm-6 {
    -ms-flex-preferred-size: 50%;
    flex-basis: 50%;
    max-width: 50%;
  }

  .column-sm-7 {
    -ms-flex-preferred-size: 58.3333333333%;
    flex-basis: 58.3333333333%;
    max-width: 58.3333333333%;
  }

  .column-sm-8 {
    -ms-flex-preferred-size: 66.6666666667%;
    flex-basis: 66.6666666667%;
    max-width: 66.6666666667%;
  }

  .column-sm-9 {
    -ms-flex-preferred-size: 75%;
    flex-basis: 75%;
    max-width: 75%;
  }

  .column-sm-10 {
    -ms-flex-preferred-size: 83.3333333333%;
    flex-basis: 83.3333333333%;
    max-width: 83.3333333333%;
  }

  .column-sm-11 {
    -ms-flex-preferred-size: 91.6666666667%;
    flex-basis: 91.6666666667%;
    max-width: 91.6666666667%;
  }

  .column-sm-12 {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    max-width: 100%;
  }
}
@media (min-width: 62rem) {
  .column-md-1 {
    -ms-flex-preferred-size: 8.3333333333%;
    flex-basis: 8.3333333333%;
    max-width: 8.3333333333%;
  }

  .column-md-2 {
    -ms-flex-preferred-size: 16.6666666667%;
    flex-basis: 16.6666666667%;
    max-width: 16.6666666667%;
  }

  .column-md-3 {
    -ms-flex-preferred-size: 25%;
    flex-basis: 25%;
    max-width: 25%;
  }

  .column-md-4 {
    -ms-flex-preferred-size: 33.3333333333%;
    flex-basis: 33.3333333333%;
    max-width: 33.3333333333%;
  }

  .column-md-5 {
    -ms-flex-preferred-size: 41.6666666667%;
    flex-basis: 41.6666666667%;
    max-width: 41.6666666667%;
  }

  .column-md-6 {
    -ms-flex-preferred-size: 50%;
    flex-basis: 50%;
    max-width: 50%;
  }

  .column-md-7 {
    -ms-flex-preferred-size: 58.3333333333%;
    flex-basis: 58.3333333333%;
    max-width: 58.3333333333%;
  }

  .column-md-8 {
    -ms-flex-preferred-size: 66.6666666667%;
    flex-basis: 66.6666666667%;
    max-width: 66.6666666667%;
  }

  .column-md-9 {
    -ms-flex-preferred-size: 75%;
    flex-basis: 75%;
    max-width: 75%;
  }

  .column-md-10 {
    -ms-flex-preferred-size: 83.3333333333%;
    flex-basis: 83.3333333333%;
    max-width: 83.3333333333%;
  }

  .column-md-11 {
    -ms-flex-preferred-size: 91.6666666667%;
    flex-basis: 91.6666666667%;
    max-width: 91.6666666667%;
  }

  .column-md-12 {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    max-width: 100%;
  }
}
@media (min-width: 75rem) {
  .column-lg-1 {
    -ms-flex-preferred-size: 8.3333333333%;
    flex-basis: 8.3333333333%;
    max-width: 8.3333333333%;
  }

  .column-lg-2 {
    -ms-flex-preferred-size: 16.6666666667%;
    flex-basis: 16.6666666667%;
    max-width: 16.6666666667%;
  }

  .column-lg-3 {
    -ms-flex-preferred-size: 25%;
    flex-basis: 25%;
    max-width: 25%;
  }

  .column-lg-4 {
    -ms-flex-preferred-size: 33.3333333333%;
    flex-basis: 33.3333333333%;
    max-width: 33.3333333333%;
  }

  .column-lg-5 {
    -ms-flex-preferred-size: 41.6666666667%;
    flex-basis: 41.6666666667%;
    max-width: 41.6666666667%;
  }

  .column-lg-6 {
    -ms-flex-preferred-size: 50%;
    flex-basis: 50%;
    max-width: 50%;
  }

  .column-lg-7 {
    -ms-flex-preferred-size: 58.3333333333%;
    flex-basis: 58.3333333333%;
    max-width: 58.3333333333%;
  }

  .column-lg-8 {
    -ms-flex-preferred-size: 66.6666666667%;
    flex-basis: 66.6666666667%;
    max-width: 66.6666666667%;
  }

  .column-lg-9 {
    -ms-flex-preferred-size: 75%;
    flex-basis: 75%;
    max-width: 75%;
  }

  .column-lg-10 {
    -ms-flex-preferred-size: 83.3333333333%;
    flex-basis: 83.3333333333%;
    max-width: 83.3333333333%;
  }

  .column-lg-11 {
    -ms-flex-preferred-size: 91.6666666667%;
    flex-basis: 91.6666666667%;
    max-width: 91.6666666667%;
  }

  .column-lg-12 {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    max-width: 100%;
  }
}
@supports (display: grid) {
  .grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-template-rows: auto;
  }
  .grid > [class*="column-"] {
    margin: 0;
    max-width: 100%;
  }

  .column-xs-1 {
    grid-column-start: span 1;
    grid-column-end: span 1;
  }

  .column-xs-2 {
    grid-column-start: span 2;
    grid-column-end: span 2;
  }

  .column-xs-3 {
    grid-column-start: span 3;
    grid-column-end: span 3;
  }

  .column-xs-4 {
    grid-column-start: span 4;
    grid-column-end: span 4;
  }

  .column-xs-5 {
    grid-column-start: span 5;
    grid-column-end: span 5;
  }

  .column-xs-6 {
    grid-column-start: span 6;
    grid-column-end: span 6;
  }

  .column-xs-7 {
    grid-column-start: span 7;
    grid-column-end: span 7;
  }

  .column-xs-8 {
    grid-column-start: span 8;
    grid-column-end: span 8;
  }

  .column-xs-9 {
    grid-column-start: span 9;
    grid-column-end: span 9;
  }

  .column-xs-10 {
    grid-column-start: span 10;
    grid-column-end: span 10;
  }

  .column-xs-11 {
    grid-column-start: span 11;
    grid-column-end: span 11;
  }

  .column-xs-12 {
    grid-column-start: span 12;
    grid-column-end: span 12;
  }

  @media (min-width: 48rem) {
    .column-sm-1 {
      grid-column-start: span 1;
      grid-column-end: span 1;
    }

    .column-sm-2 {
      grid-column-start: span 2;
      grid-column-end: span 2;
    }

    .column-sm-3 {
      grid-column-start: span 3;
      grid-column-end: span 3;
    }

    .column-sm-4 {
      grid-column-start: span 4;
      grid-column-end: span 4;
    }

    .column-sm-5 {
      grid-column-start: span 5;
      grid-column-end: span 5;
    }

    .column-sm-6 {
      grid-column-start: span 6;
      grid-column-end: span 6;
    }

    .column-sm-7 {
      grid-column-start: span 7;
      grid-column-end: span 7;
    }

    .column-sm-8 {
      grid-column-start: span 8;
      grid-column-end: span 8;
    }

    .column-sm-9 {
      grid-column-start: span 9;
      grid-column-end: span 9;
    }

    .column-sm-10 {
      grid-column-start: span 10;
      grid-column-end: span 10;
    }

    .column-sm-11 {
      grid-column-start: span 11;
      grid-column-end: span 11;
    }

    .column-sm-12 {
      grid-column-start: span 12;
      grid-column-end: span 12;
    }
  }
  @media (min-width: 62rem) {
    .column-md-1 {
      grid-column-start: span 1;
      grid-column-end: span 1;
    }

    .column-md-2 {
      grid-column-start: span 2;
      grid-column-end: span 2;
    }

    .column-md-3 {
      grid-column-start: span 3;
      grid-column-end: span 3;
    }

    .column-md-4 {
      grid-column-start: span 4;
      grid-column-end: span 4;
    }

    .column-md-5 {
      grid-column-start: span 5;
      grid-column-end: span 5;
    }

    .column-md-6 {
      grid-column-start: span 6;
      grid-column-end: span 6;
    }

    .column-md-7 {
      grid-column-start: span 7;
      grid-column-end: span 7;
    }

    .column-md-8 {
      grid-column-start: span 8;
      grid-column-end: span 8;
    }

    .column-md-9 {
      grid-column-start: span 9;
      grid-column-end: span 9;
    }

    .column-md-10 {
      grid-column-start: span 10;
      grid-column-end: span 10;
    }

    .column-md-11 {
      grid-column-start: span 11;
      grid-column-end: span 11;
    }

    .column-md-12 {
      grid-column-start: span 12;
      grid-column-end: span 12;
    }
  }
  @media (min-width: 75rem) {
    .column-lg-1 {
      grid-column-start: span 1;
      grid-column-end: span 1;
    }

    .column-lg-2 {
      grid-column-start: span 2;
      grid-column-end: span 2;
    }

    .column-lg-3 {
      grid-column-start: span 3;
      grid-column-end: span 3;
    }

    .column-lg-4 {
      grid-column-start: span 4;
      grid-column-end: span 4;
    }

    .column-lg-5 {
      grid-column-start: span 5;
      grid-column-end: span 5;
    }

    .column-lg-6 {
      grid-column-start: span 6;
      grid-column-end: span 6;
    }

    .column-lg-7 {
      grid-column-start: span 7;
      grid-column-end: span 7;
    }

    .column-lg-8 {
      grid-column-start: span 8;
      grid-column-end: span 8;
    }

    .column-lg-9 {
      grid-column-start: span 9;
      grid-column-end: span 9;
    }

    .column-lg-10 {
      grid-column-start: span 10;
      grid-column-end: span 10;
    }

    .column-lg-11 {
      grid-column-start: span 11;
      grid-column-end: span 11;
    }

    .column-lg-12 {
      grid-column-start: span 12;
      grid-column-end: span 12;
    }
  }
}


body {

  font-size: 1.125rem;
  font-weight: 400;
  line-height: 1.6;
  color: #8d8d8d;
  background: #fff;
  text-rendering: optimizeLegibility;
  overflow-x: hidden;
}

a {
  color: #8d8d8d;
  text-decoration: none;
}
a:hover {
  color: #232323;
}



#logo {
  color: #232323;
  font-weight: 700;
  font-size: 1.125rem;
}

#highlight {
  color: #e83f43;
}

img.pix {
  width: 100%;
  height: 43vh;
  object-fit: cover;
}

.vertical {
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.intro {
  position: relative;
  z-index: 2;
  opacity: 0;
  animation: fadeIn 0.8s 0.4s ease forwards;
}
.intro .title {
  display: inline-block;
  font-size: 2rem;
  font-weight: 500;
  line-height: 1.1;
  text-decoration: underline;
  color: #e83f43;
}
.intro .title .underline {
  color: #232323;
}

.description {
  position: relative;
  z-index: 1;
  margin: 1rem 0 1.5rem 0;
  font-size: 1rem;
  opacity: 0;
  animation: fadeIn 0.8s 0.6s ease forwards;
}

.slider-item {
  display: none;
}
.slider-item.active2 {
  display: block;
}
.slider-item.active2 .hide-mobile {
  display: none;
}
.slider-item.active2 .show-mobile {
  display: block;
  margin: 1rem 0;
}

button {
  position: relative;
  display: inline-block;
  cursor: pointer;
  outline: none;
  border: 0;
  vertical-align: middle;
  text-decoration: none;
  background: transparent;
  margin: 0;
  padding: 0;
  font-size: 100%;
  font: inherit;
  font-size: inherit;
}

.controls {
  position: relative;
  z-index: 1;
  display: flex;
  justify-content: flex-end;
  padding: 0.25rem 0 0.25rem 0;
}
.controls .previous {
  border: 1px solid #232323;
}
.controls .previous:hover i {
  transform: scale(1.5);
}
.controls .next {
  border-top: 1px solid #232323;
  border-right: 1px solid #232323;
  border-bottom: 1px solid #232323;
}
.controls .next:hover i {
  transform: scale(1.5);
}

.previous, .next {
  display: flex;
  align-content: center;
  justify-content: center;
  flex-basis: 15%;
  font-size: 2rem;
  color: #232323;
}
.previous i, .next i {
  transition: all 0.1s ease;
}

.active2 .image-holder::before {
  position: absolute;
  content: '';
  z-index: 1;
  display: block;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #fff;
  transform-origin: 100% 50%;
  animation: revealRight 1s cubic-bezier(0.23, 1, 0.75, 1) forwards;
}

@keyframes revealRight {
  0% {
    transform: scaleX(1);
  }
  100% {
    transform: scaleX(0);
  }
}
@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@keyframes fadeInLeft {
  0% {
    opacity: 0;
    transform: translateX(20%);
  }
  100% {
    opacity: 1;
    transform: translate(0);
  }
}
.toggle-nav {
  display: flex;
  justify-content: flex-end;
  font-size: 1rem;
  line-height: 1.9;
}
.toggle-nav i {
  font-size: 1.5rem;
  line-height: 1.3;
  margin: 0 0 0 0.5rem;
}

.flex-nav ul {
  position: absolute;
  z-index: 1;
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  display: none;
  width: 100%;
  left: 0;
  padding: 1rem;
  background: #fff;
  text-align: center;
}
.flex-nav ul.active2 {
  display: flex;
}

@media (min-width: 62rem) {

  #logo {
    font-size: 1.25rem;
  }

  .controls {
    padding: 1.75rem 0 1.75rem 0;
  }

  .intro {
    animation: fadeInLeft 0.8s 0.4s ease forwards;
  }
  .intro .title {
    font-size: 4.25rem;
    padding: 2.5rem 2.5rem 3rem 2.5rem;
    background: #fff;
  }

  /* img.pix {
    height: 60vh;
  } */

  .description {
    font-size: 1.25rem;
    margin: 1rem 0 0 0;
  }

  .previous, .next {
    flex-basis: 8.33%;
  }

  .slider-item.active2 .hide-mobile {
    display: block;
  }

  .slider-item.active2 .show-mobile {
    display: none;
  }

  .toggle-nav {
    display: none;
  }

  .flex-nav ul {
    display: flex;
    flex-direction: row;
    position: relative;
    padding: 0;
    justify-content: flex-end;
  }


}




</style>


<body>



<main class="intro-section">
  <div class="container2">
    <div class="grid">
      <div class="column-xs-12">
        <ul class="slider">
          <li class="slider-item active2">
            <div class="grid vertical">
              <div class="column-xs-12 column-md-2 hide-mobile">
                <div class="intro">
                  <a href="#">
                    <h1 class="title"><span class="underline">Explore Tokyo</span></h1>
                  </a>
                </div>
              </div>
              <div class="column-xs-12 column-md-10">
                <div class="image-holder">
                  <img class="pix" src="https://source.unsplash.com/cddaZDt6uRw">
                </div>
                <div class="grid">
                  <div class="column-xs-12 column-md-9">
                    <div class="intro show-mobile">
                      <a href="#">
                        <h1 class="title"><span class="underline">Explore Tokyo</span></h1>
                      </a>
                    </div>
                    <p class="description">Tokyo, Japan’s busy capital, mixes the ultramodern and the traditional, from neon-lit skyscrapers to historic temples.</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="slider-item">
            <div class="grid vertical">
              <div class="column-xs-12 column-md-2 hide-mobile">
                <div class="intro">
                  <a href="#">
                    <h1 class="title"><span class="underline">Explore Kyoto</span></h1>
                  </a>
                </div>
              </div>
              <div class="column-xs-12 column-md-10">
                <div class="image-holder">
                  <img class="pix" src="https://source.unsplash.com/Pz3EHf-KJfc">
                </div>
                <div class="grid">
                  <div class="column-xs-12 column-md-9">
                    <div class="intro show-mobile">
                      <a href="#">
                        <h1 class="title"><span class="underline">Explore Kyoto</span></h1>
                      </a>
                    </div>
                    <p class="description">Kyoto is famous for its numerous classical Buddhist temples, gardens, imperial palaces, Shinto shrines and traditional wooden houses.</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="slider-item">
            <div class="grid vertical">
              <div class="column-xs-12 column-md-2 hide-mobile">
                <div class="intro">
                  <a href="#">
                     <h1 class="title"><span class="underline">Explore Osaka</span></h1>
                  </a>
                </div>
              </div>
              <div class="column-xs-12 column-md-10">
                <div class="image-holder">
                  <img class="pix" src="https://source.unsplash.com/peYW3VwICpE">
                </div>
                <div class="grid">
                  <div class="column-xs-12 column-md-9">
                    <div class="intro show-mobile">
                      <a href="#">
                        <h1 class="title"><span class="underline">Explore Osaka</span></h1>
                      </a>
                    </div>
                    <p class="description">Osaka is a large port city and commercial center known for its modern architecture, nightlife and hearty street food.</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="slider-item">
            <div class="grid vertical">
              <div class="column-xs-12 column-md-2 hide-mobile">
                <div class="intro">
                  <a href="#">
                    <h1 class="title"><span class="underline">Explore Hokkaido</span></h1>
                  </a>
                </div>
              </div>
              <div class="column-xs-12 column-md-10">
                <div class="image-holder">
                  <img class="pix" src="https://source.unsplash.com/VmeOZQjTVGE">
                </div>
                <div class="grid">
                  <div class="column-xs-12 column-md-9">
                    <div class="intro show-mobile">
                      <a href="#">
                        <h1 class="title"><span class="underline">Explore Hokkaido</span></h1>
                      </a>
                    </div>
                    <p class="description">Hokkaido, the northernmost of Japan’s main islands, is known for its volcanoes, natural hot springs ("onsen") and ski areas.</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      <div class="grid">
        <div class="column-xs-12">
          <div class="controls">
              <button class="previous">
                <i class="ion-ios-arrow-thin-left"></i>
              </a>
              <button class="next">
                <i class="ion-ios-arrow-thin-right"></i>
              </a>
            </div>
          </div>
      </div>
    </div>
  </div>
</main>



</div>


  <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <script src="js5/bootstrap.min.js"></script>
  <script src="js5/scrollTop.js"></script>
  <script src="tipuesearch/tipuesearch_set.js"></script>
  <script src="tipuesearch/tipuesearch_content.js"></script>
  <script src="tipuesearch/tipuesearch.js"></script>


  <script src="js5/about.js"></script>



<script>


const items = document.querySelectorAll('.slider-item');
const itemCount = items.length;
const nextItem = document.querySelector('.next');
const previousItem = document.querySelector('.previous');
const navItem = document.querySelector('a.toggle-nav');
let count = 0;

function showNextItem() {
  items[count].classList.remove('active2');

  if(count < itemCount - 1) {
    count++;
  } else {
    count = 0;
  }

  items[count].classList.add('active2');
  console.log(count);
}

function showPreviousItem() {
  items[count].classList.remove('active2');

  if(count > 0) {
    count--;
  } else {
    count = itemCount - 1;
  }

  items[count].classList.add('active2');
  // Check if working...
  console.log(count);
}

function toggleNavigation(){
  this.nextElementSibling.classList.toggle('active2');
}

function keyPress(e) {
  e = e || window.event;

  if (e.keyCode == '37') {
    showPreviousItem();
  } else if (e.keyCode == '39') {
    showNextItem();
  }
}

nextItem.addEventListener('click', showNextItem);
previousItem.addEventListener('click', showPreviousItem);
document.addEventListener('keydown', keyPress);
navItem.addEventListener('click', toggleNavigation);


</script>


</body>
</html>
