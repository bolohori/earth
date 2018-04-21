<?php
  $title = "Earth.com - Home Page";
  include "./includes/head.php";
  include "./includes/header.php";
?>

<!-- News of the Day and Top Stories Row -->
<div class="container">
  <div class="row">
    <!-- News of the Day Image -->
    <div class="col-lg-8 news-of-the-day-image">
      <div class="row">
        <div class="col-lg-6">
          <div class="position-relative">
              <img class="img-fluid" src="http://placehold.it/960x640" alt="Card image">
              <div class="card-img-overlay pl-0 pt-4">
                  <h4 class="category badge badge-dark text-uppercase rounded-0">Story of the day</h4>
              </div> <!--overlay-->
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row article-category-date">
            <div class="col-lg-6">
              ENVIRONMENT
            </div>
            <div class="col-lg-6">
              11-22-2018
            </div>
          </div>
          <h2 class="news-title">Stu Unger Rise and Fall Of A Poker Genius</h2>
          <p class="news-excerpt">
            Computer users and programmers have become so accustomed to using
            Windows, even for the ...
          </p>
          <a href="#">Read more...</a>
        </div>
      </div>
    </div>

    <!--Top stories sidebar-->
    <section class="col-xs-12 col-sm-6 col-md-4 sidebar">
        <div class="top-stories">
            <h4 class="category mb-4">
                Top Stories
            </h4>
            <ul class="row list-unstyled m-0">
                <li class="mb-3 col-md-12">
                    <div class="row">
                        <article class="story row no-gutters">
                            <div class="image mr-2 col-auto">
                                <img class="img-fluid" src="http://placehold.it/100x75" alt="Card image">
                            </div><!--image-->
                            <div class="body align-self-stretch d-flex flex-column flex col pr-2">
                                <div class="meta mb-1 d-flex flex-wrap justify-content-between">
                                    <span class="tag">Environment</span>
                                    <span class="date">21-12-2020</span>
                                </div><!--meta-->
                                <h5 class="title m-0">
                                    <a href="#">Coventry City Guide Including Coventry hotels</a>
                                </h5>
                            </div><!--article-body-->
                        </article>
                    </div>
                </li>
                <li class="mb-3 col-md-12">
                    <div class="row">
                        <article class="story row no-gutters">
                            <div class="image mr-2 col-auto">
                                <img class="img-fluid" src="http://placehold.it/100x75" alt="Card image">
                            </div><!--image-->
                            <div class="body align-self-stretch d-flex flex-column flex col pr-2">
                                <div class="meta mb-1 d-flex flex-wrap justify-content-between">
                                    <span class="tag">Environment</span>
                                    <span class="date">21-12-2020</span>
                                </div><!--meta-->
                                <h5 class="title m-0">
                                    <a href="#">Coventry City Guide Including Coventry hotels</a>
                                </h5>
                            </div><!--article-body-->
                        </article>
                    </div>
                </li>
                <li class="mb-3 col-md-12">
                    <div class="row">
                        <article class="story row no-gutters">
                            <div class="image mr-2 col-auto">
                                <img class="img-fluid" src="http://placehold.it/100x75" alt="Card image">
                            </div><!--image-->
                            <div class="body align-self-stretch d-flex flex-column flex col pr-2">
                                <div class="meta mb-1 d-flex flex-wrap justify-content-between">
                                    <span class="tag">Environment</span>
                                    <span class="date">21-12-2020</span>
                                </div><!--meta-->
                                <h5 class="title m-0">
                                    <a href="#">Coventry City Guide Including Coventry hotels</a>
                                </h5>
                            </div><!--article-body-->
                        </article>
                    </div>
                </li>
            </ul>
        </div><!--top-stories-->
        <!--<img src="http://www.placehold.it/640x480" alt="" class="ad img-fluid">-->
    </section><!--sidebar-->
</div>
</div>

<!-- SECTION 2 STARTS-->
<section id="section-2-news">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="row">
          <div class="col-md-4">
            <img src="http://www.placehold.it/640x480" alt="">
          </div>
          <div class="col-md-8">
            <span class="date">21-12-2020</span>
            <h2>Coventry City Guide including </<br>
                Coventry Hotels
            </h2>
            <p>Computer users and programmers have become so accustomed
               to using Windows, even for the changing
            </p>
            <a href="#">Read more...</a>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-4">
            <img src="http://www.placehold.it/640x480" alt="">
          </div>
          <div class="col-md-8">
            <span class="date">21-12-2020</span>
            <h2>Online games How to Play To Win

            </h2>
            <p>Stu Unger is one of the biggest superstars to have immerged from
              the professional poker world. Besides
            </p>
            <a href="#">Read more...</a>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-4">
            <img src="http://www.placehold.it/640x480" alt="">
          </div>
          <div class="col-md-8">
            <span class="date">21-12-2020</span>
            <h2> The Surprising Popularity Of Cigar Smoking
            </h2>
            <p>There are advances being made in science and technology everyday,
              and a good example of this is the LCD monitor.
            </p>
            <a href="#">Read more...</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="container-big newsletter-container take-action-newsletter">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-left">
                <h2 class="newsletter-title">Fresh news coming your way, weekly</h2>
              </div>
              <div class="col-md-12 pigeon col-image">
                <img src="assets/images/pigeon.png" alt="Pigeon">
              </div>
              <div class="col-md-12 col-right">
                <input type="email" name="email" value="" placeholder="Your Email ...">
                <button type="button" class="btn btn-outline-primary btn-subscribe-send">SUBSCRIBE</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- SECTION 2 ENDS -->

<!-- SECTION 3 STARTS-->
<section id="section-3-news">
  <div class="container">
  <h2 class="text-uppercase pl-0">environment top stories</h2>
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-md-4">
            <img class="mb-2" src="http://www.placehold.it/320x240" alt="">
            <span class="date">21-12-2020</span>
            <h4 class="mt-2">Coventry City Guide Including Coventry Hotels</h4>
          </div>

          <div class="col-md-4">
            <img class="mb-2" src="http://www.placehold.it/320x240" alt="">
            <span class="date">21-12-2020</span>
            <h4 class="mt-2">Selecting The Right Hotel</h4>
          </div>

          <div class="col-md-4">
            <img class="mb-2" src="http://www.placehold.it/320x240" alt="">
            <span class="date">21-12-2020</span>
            <h4 class="mt-2">Life Advice Looking Through A Window</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- SECTION 3 ENDS -->

<!-- SECTION 4 STARTS -->
<section id="section-4-news">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mt-5">
        <div class="row">
          <div class="col-md-4">
            <img src="http://www.placehold.it/640x480" alt="">
          </div>
          <div class="col-md-8">
            <span class="date">21-12-2020</span>
            <h2>Coventry City Guide including </<br>
                Coventry Hotels
            </h2>
            <p>Computer users and programmers have become so accustomed
               to using Windows, even for the changing
            </p>
            <a href="#">Read more...</a>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-4">
            <img src="http://www.placehold.it/640x480" alt="">
          </div>
          <div class="col-md-8">
            <span class="date">21-12-2020</span>
            <h2>Online games How to Play To Win

            </h2>
            <p>Stu Unger is one of the biggest superstars to have immerged from
              the professional poker world. Besides
            </p>
            <a href="#">Read more...</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <h4 class="category mt-5 mb-4 text-uppercase">
            Top environmental titles
        </h4>
      </div>
    </div>
  </div>
</section>
<!-- SECTION 4 ENDS -->

<div class="container-big newsletter-container">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-left">
        <h2 class="newsletter-title">News Coming Your Way</h2>
        <h3 class="newsletter-text">The biggest news about our planet delivered to you once a week.</h3>
      </div>
      <div class="col-md-2 pigeon col-image">
        <img src="assets/images/pigeon.png" alt="Pigeon">
      </div>
      <div class="col-md-5 col-right">
        <input type="email" name="email" value="" placeholder="Your Email ...">
        <button type="button" class="btn btn-outline-primary btn-subscribe-send">SUBSCRIBE</button>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include "includes/footer.php"; ?>
