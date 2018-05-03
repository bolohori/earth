<?php
  $title = "Earth.com - Image Details";
  include "./includes/head.php";
  include "./includes/header.php";

  $title = "Earth.com - Home Page";
?>

<!-- Main Image Details -->
<section class="image-details-container">
  <div class="container">
    <div class="row earth-breadcrumb">
      <div class="col-xs-12">
        <a href="/">Home</a> / <a href="#">Images</a> / <a href="#">Radio Astronomy</a>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 user-container">
        <h2 class="title">Radio Astronomy</h2>
        <div class="left-user">
          <span>
            <img class="user-profile" src="assets/images/icons/user-profile.jpg" alt="user_profile">
          </span>
          <span>
            by <strong>user_name</strong> |
          </span>
          <span>
            01.02.2018
          </span>
          <span class="download-hires">
            <i class="fas fa-download"></i> Download High Resolution
          </span>
        </div>
        <div class="right-user">
          <button type="button" class="btn btn-default btn-prev-image">
            <i class="far fa-arrow-alt-circle-left"></i> Previous Image
          </button>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 image-big-container">
        <img class="full-screen" src="assets/images/icons/full-screen.png" alt="Full Screen" />
        <img src="assets/images/big-image.jpg" alt="Image Details">
      </div>
    </div>

    <div class="row social-icons-container">
      <div class="col-xs-12">
        <div class="social-icons">
        <span class="spread-word">SPREAD THE WORD</span>
        <a href="#">
          <img src="assets/images/icons/fb-icon.png" alt="Facebook">
        </a>
        <a href="#">
          <img src="assets/images/icons/ig-icon.png" alt="Instagram">
        </a>
        <a href="#">
          <img src="assets/images/icons/twitter-icon.png" alt="Twitter">
        </a>
        <a href="#">
          <img src="assets/images/icons/rss-icon.png" alt="RSS">
        </a>
      </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>

    <div class="row leave-comment-container">
      <div class="col-xs-12">
          <h2>Leave a comment</h2>
      </div>
    </div>
    <div class="row leave-comment-container">
      <div class="col-xs-12">
        <form class="leave-comment" action="/" method="post">
          <textarea class="leave-comment-textarea" name="name" rows="8" cols="150"></textarea>
          <button type="button" class="btn btn-primary btn-send-comment">Post</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Related Images and Videos -->
<section class="related-images-videos">
  <div class="container">
    <div class="row">
      <!-- News of the Day Image -->
      <div class="col-lg-8 news-of-the-day-image">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="image-details-title-yellow">RELATED IMAGES</h2>
          </div>
          <div class="col-lg-6">
            <img src="assets/images/top-story.jpg" alt="Image">
            <p>
              11-22-2018
            </p>
            <p>
              Selecting the right hotel
            </p>
          </div>

          <div class="col-lg-6">
            <img src="assets/images/top-story.jpg" alt="Image">
            <p>
              11-22-2018
            </p>
            <p>
              Selecting the right hotel
            </p>
          </div>

          <div class="col-lg-6">
            <img src="assets/images/top-story.jpg" alt="Image">
            <p>
              11-22-2018
            </p>
            <p>
              Selecting the right hotel
            </p>
          </div>

          <div class="col-lg-6">
            <img src="assets/images/top-story.jpg" alt="Image">
            <p>
              11-22-2018
            </p>
            <p>
              Selecting the right hotel
            </p>
          </div>

          <div class="col-lg-6">
            <img src="assets/images/top-story.jpg" alt="Image">
            <p>
              11-22-2018
            </p>
            <p>
              Selecting the right hotel
            </p>
          </div>

          <div class="col-lg-6">
            <img src="assets/images/top-story.jpg" alt="Image">
            <p>
              11-22-2018
            </p>
            <p>
              Selecting the right hotel
            </p>
          </div>

          <div class="col-lg-6">
            <img src="assets/images/top-story.jpg" alt="Image">
            <p>
              11-22-2018
            </p>
            <p>
              Selecting the right hotel
            </p>
          </div>

          <div class="col-lg-6">
            <img src="assets/images/top-story.jpg" alt="Image">
            <p>
              11-22-2018
            </p>
            <p>
              Selecting the right hotel
            </p>
          </div>

        </div>
      </div>

      <!-- Right sidebar with Top Stories -->
      <div class="col-lg-4">
        <h2 class="image-details-title-purple">RELATED VIDEOS</h2>

        <!-- Top Story Article -->
        <article class="top-story">
          <div class="row">
            <div class="col-lg-6">
              <video width="170" controls>
                <source src="assets/videos/sample.mp4" type=video/mp4 />
              </video>
            </div>
            <div class="col-lg-6">
              <div class="row article-category-date">
                <div class="col-md-6 category">
                  ENVIRONMENT
                </div>
                <div class="col-md-6 date">
                  11-22-2018
                </div>
              </div>
              <div class="row article-title">
                <div class="col-xs-12">
                  Coventry City Guide Including Coventry Hotels
                </div>
              </div>
            </div>
          </div>
        </article>

        <!-- Top Story Article -->
        <article class="top-story">
          <div class="row">
            <div class="col-lg-6">
              <video width="170" controls>
                <source src="assets/videos/sample.mp4" type=video/mp4 />
              </video>
            </div>
            <div class="col-lg-6">
              <div class="row article-category-date">
                <div class="col-md-6 category">
                  ENVIRONMENT
                </div>
                <div class="col-md-6 date">
                  11-22-2018
                </div>
              </div>
              <div class="row article-title">
                <div class="col-xs-12">
                  Coventry City Guide Including Coventry Hotels
                </div>
              </div>
            </div>
          </div>
        </article>

        <!-- Top Story Article -->
        <article class="top-story">
          <div class="row">
            <div class="col-lg-6">
              <video width="170" controls>
                <source src="assets/videos/sample.mp4" type=video/mp4 />
              </video>
            </div>
            <div class="col-lg-6">
              <div class="row article-category-date">
                <div class="col-md-6 category">
                  ENVIRONMENT
                </div>
                <div class="col-md-6 date">
                  11-22-2018
                </div>
              </div>
              <div class="row article-title">
                <div class="col-xs-12">
                  Coventry City Guide Including Coventry Hotels
                </div>
              </div>
            </div>
          </div>
        </article>
        <!-- Top Story Article -->
        <article class="top-story">
          <div class="row">
            <div class="col-lg-6">
              <video width="170" controls>
                <source src="assets/videos/sample.mp4" type=video/mp4 />
              </video>
            </div>
            <div class="col-lg-6">
              <div class="row article-category-date">
                <div class="col-md-6 category">
                  ENVIRONMENT
                </div>
                <div class="col-md-6 date">
                  11-22-2018
                </div>
              </div>
              <div class="row article-title">
                <div class="col-xs-12">
                  Coventry City Guide Including Coventry Hotels
                </div>
              </div>
            </div>
          </div>
        </article>
        <!-- Top Story Article -->
        <article class="top-story">
          <div class="row">
            <div class="col-lg-6">
              <video width="170" controls>
                <source src="assets/videos/sample.mp4" type=video/mp4 />
              </video>
            </div>
            <div class="col-lg-6">
              <div class="row article-category-date">
                <div class="col-md-6 category">
                  ENVIRONMENT
                </div>
                <div class="col-md-6 date">
                  11-22-2018
                </div>
              </div>
              <div class="row article-title">
                <div class="col-xs-12">
                  Coventry City Guide Including Coventry Hotels
                </div>
              </div>
            </div>
          </div>
        </article>
    </div>
    </div>
  </div>
</section>

<!-- Explore Plants and Animals -->
<div class="container-fluid pt-5 friends-of-animals">
</div>

<!-- Footer -->
<?php include "includes/footer.php"; ?>
