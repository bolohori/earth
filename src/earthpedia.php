<?php
  $title = "Earth.com - Earthpedia";
  include "./includes/head.php";
  include "./includes/header.php";
?>

<!-- Header of page -->
<section class="earthpedia-header-form">
  <div class="form-container">
    <h1>REDISCOVER EARTH</h1>
    <form action="/" method="post">
      <input type="text" name="explore" value="" placeholder="Explore the most amazing plants and animals..." />
      <i class="fas fa-search search-button"></i>
    </form>
  </div>
</section>

<!-- Curiosity of the day -->
<section class="curiosity-of-the-day">
<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <div class="row">
        <div class="col-sm-7 curiosity-image">
          <div class="highlight-ribbon background-green">
            Curiosity of the Day
          </div>
           <img src="assets/images/environment-story.jpg" alt="Environment Story">
        </div>
        <div class="col-sm-5 curiosity-text">
          <div class="row article-category-date">
            <div class="col-sm-12 date">
              11-22-2018
            </div>
          </div>
          <h2 class="news-title">Stu Unger Rise and Fall Of A Poker Genius</h2>
          <p class="news-excerpt">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <a href="#">Read more...</a>
        </div>
    </div>
  </div>
</div>
</div>
</section>

<!-- Explore Plants and Animals -->
<section id="explore">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 plants">
                <div class="d-flex">
                    <div class="text col w-60 mx-auto">
                        <h1 class="title">EXPLORE <br> PLANTS</h1>
                        <button type="button" class="btn btn-outline-primary btn-explore">VIEW OUR ARCHIVE</button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 animals">
                <div class="d-flex">
                    <div class="image col">
                        <hr class="sr-only">
                    </div>
                    <div class="text col mx-auto">
                        <h1 class="title">EXPLORE <br> ANIMALS</h1>
                        <button type="button" class="btn btn-outline-primary btn-explore">VIEW OUR ARCHIVE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="plants-animals-news">
  <!-- Card -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-left">
        <h2>PLANTS IN THE NEWS</h2>
        <!-- card -->
        <div class="container card">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-sm-6 curiosity-image">
                   <img src="assets/images/environment-story.jpg" alt="Environment Story">
                </div>
                <div class="col-sm-6 curiosity-text">
                  <div class="row article-category-date">
                    <div class="col-sm-12 date">
                      11-22-2018
                    </div>
                  </div>
                  <h2 class="news-title">Stu Unger Rise and Fall Of A Poker Genius</h2>
                  <p class="news-excerpt">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                  <a href="#">Read more...</a>
                </div>
            </div>
          </div>
        </div>
        </div>

        <!-- card -->
        <div class="container card">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-sm-6 curiosity-image">
                   <img src="assets/images/environment-story.jpg" alt="Environment Story">
                </div>
                <div class="col-sm-6 curiosity-text">
                  <div class="row article-category-date">
                    <div class="col-sm-12 date">
                      11-22-2018
                    </div>
                  </div>
                  <h2 class="news-title">Stu Unger Rise and Fall Of A Poker Genius</h2>
                  <p class="news-excerpt">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                  <a href="#">Read more...</a>
                </div>
            </div>
          </div>
        </div>
        </div>
      </div>

      <div class="col-sm-6 col-right">
        <h2>PLANTS IN THE NEWS</h2>
        <!-- card -->
        <div class="container card">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-sm-6 curiosity-image">
                   <img src="assets/images/environment-story.jpg" alt="Environment Story">
                </div>
                <div class="col-sm-6 curiosity-text">
                  <div class="row article-category-date">
                    <div class="col-sm-12 date">
                      11-22-2018
                    </div>
                  </div>
                  <h2 class="news-title">Stu Unger Rise and Fall Of A Poker Genius</h2>
                  <p class="news-excerpt">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                  <a href="#">Read more...</a>
                </div>
            </div>
          </div>
        </div>
        </div>

        <!-- card -->
        <div class="container card">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-sm-6 curiosity-image">
                   <img src="assets/images/environment-story.jpg" alt="Environment Story">
                </div>
                <div class="col-sm-6 curiosity-text">
                  <div class="row article-category-date">
                    <div class="col-sm-12 date">
                      11-22-2018
                    </div>
                  </div>
                  <h2 class="news-title">Stu Unger Rise and Fall Of A Poker Genius</h2>
                  <p class="news-excerpt">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                  <a href="#">Read more...</a>
                </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Explore Plants and Animals -->
<div class="container-big friends-of-animals">
</div>

<!-- Footer -->
<?php include "includes/footer.php"; ?>
