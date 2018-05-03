<?php
  $title = "Earth.com - News Details";
  include "./includes/head.php";
  include "includes/header.php";
?>

<!-- News of the Day and Top Stories Row -->
<div class="container news-details-container">

  <div class="row">
    <!-- News of the Day Image -->
<div class="col-lg-8">
      <div class="">
        <img class="news-img" src="assets/images/news/news-of-the-day.jpg" alt="News of the Day">
        <div class="article-category-date">
          <div class="col-xs-12">
            <strong>ENVIRONMENT</strong> 11-22-2018
          </div>
        </div>

        <div class="news-description-container">
          <h2 class="news-title">Green Peace - Land of the Dreamer</h2>
          <div class="social-icons">
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
          <p class="news-excerpt">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>

        <div class="">
          <div class="user-container">
            <div class="left-user">
              <div class="row">
                <div class="col-lg-1 user-img">
                  <span>
                    <img class="user-profile" src="assets/images/icons/user-profile.jpg" alt="user_profile">
                  </span>
                </div>

                <div class="col-lg-8 user-details">
                  <span>
                    by <strong>user_name</strong><br>
                    Earth.com Staff Writer
                  </span>
                </div>
              </div>

              <div class="col-lg-12 see-also">
                <p>See also: <strong><a href="#">Coventry City Guide Including Coventry Hotels</a></strong></p>
              </div>

              <hr>

              <div class="col-lg-12 social-icons-container">
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

              <div class="col-lg-12 leave-comment-container">
                <h2>Leave a comment</h2>
              </div>

              <div class="col-lg-12 leave-comment-container">
                <form class="leave-comment" action="/" method="post">
                  <textarea class="leave-comment-textarea form-control" name="name" rows="10" cols="105"></textarea>
                  <button type="button" class="btn btn-primary btn-send-comment">Post</button>
                </form> 
              </div>

            </div>
          </div>
        </div>

      </div>

    </div>

    <!-- Right sidebar with Top Stories -->
    <div class="col-lg-4 news-right">
      <h2 class="section-title">Related Stories</h2>
      <!-- Top Story Article -->
      <article class="top-story">
        <div class="row">
          <div class="col-lg-4">
            <img src="./assets/images/news/top-story-thumb.jpg" alt="Top Story"/>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col">
                <div class="row">
                  <p class="meta d-flex mb-2 justify-content-between w-100">
                    <span class="category">ENVIRONMENT</span>
                    <span class="date">11-22-2018</span>
                  </p>
                </div>  
              </div>
            </div>

            <div class="col-xs-12">
              <div class="row">
                <h4 class="article-title">
                Coventry City Guide Including Coventry Hotels
                </h4>
              </div>
            </div>
          </div>
        </div>
      </article>


      <div class="container-big newsletter-container take-action-newsletter">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-left">
              <h2 class="newsletter-title">Fresh news coming your way, weekly</h2>
            </div>
            <div class="col-md-12 pigeon col-image">
              <img src="assets/images/pigeon.png" alt="Pigeon"/>
            </div>
            <div class="col-md-12 col-right">
              <input type="email" name="email" value="" placeholder="Your Email ..."/>
              <button type="button" class="btn btn-outline-primary btn-subscribe-send">SUBSCRIBE</button>
            </div>
          </div>
        </div>
      </div><!-- End newsletter -->

    </div><!--End right sidebar -->

  </div>
</div>

<!-- Explore Plants and Animals -->
<div class="container-fluid mt-5 friends-of-animals">
</div>
<?php
  include "includes/footer.php";
?>
