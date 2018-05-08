<?php
$title = "Image details";
include "./includes/head.php";
include "includes/header.php";
?>
<section id="image-details" class="details-section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-8">
        <article class="card featured"><!--start of featured article-->
          <h2 class="title">
            <a href="#" class="d-block">
              Stu Unger - Rise and Fall
            </a>
          </h2>
          <div class="meta row justify-content-between">
            <div class="col d-flex">
              <?php include "includes/user-info.php"; ?>
              <a class="download-link" href="#">
                <img src="./assets/images/icons/download_icon@3x.png" class="my-auto" alt="">
              </a>
            </div>
            <div class="col controls d-flex align-items-center justify-content-end">
              <div class="slider-actions">
                <a href="#" data-wpel-link="internal">
                  <i class="fas fa-chevron-left"></i>
                </a>
                <a href="#" data-wpel-link="internal">
                  <i class="fas fa-chevron-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="position-relative">
            <img class="img-fluid" src="./assets/images/placeholder%20images/animal-detail.jpg" alt="Card image">
            <!--overlay-->
          </div><!--article image container-->
          <div class="card-body p-0 pt-2">
            <div class="social d-flex align-items-center w-100 pt-2">
              <h6 class="m-0 d-inline-block anton text-uppercase color-black mr-3">Spread<br>the word</h6>
              <?php include "includes/social-icons.php" ?>
            </div>
            <p class="text mb-3">Of all of the celestial bodies that capture our attention and fascination as astronomers, none has a greater influence on life on planet Earth than it’s own satellite, the moon. When you think about it, we regard the moon with such powerful significance that unlike the moons of other planets which we give names, we only refer to our one and only orbiting orb as THE moon. It is not a moon. To us, it is the one and only moon.</p>
            <hr class="divider invisible my-1">
          </div><!--card body - end of article content-->
        </article>
        <div class="comments">
          <?php include "includes/comment-form.php" ?>
        </div>
        <div class="related-galleries">
            <h4 class="category mr-auto text-uppercase">Image Galleries</h4>
          <div class="row">
            <section class="card gallery filter-item col-12 col-md-6">
              <div class="row no-gutters">
                <div class="col-auto col-md-12 image">
                  <img src="./assets/images/placeholder%20images/organization_preview@3x.jpg" alt="image" />
                </div>
                <!--image-->
                <div class="card-body p-0 pt-2">
                  <h3 class="title">
                    <a href="#" class="d-block">
                      Gallery Title
                    </a>
                  </h3>
                  <a href="#" class="btn-link">View Gallery</a>
                </div>
              </div>
            </section>
            <section class="card gallery filter-item col-12 col-md-6">
                          <div class="row no-gutters">
                            <div class="col-auto col-md-12 image">
                              <img src="./assets/images/placeholder%20images/organization_preview@3x.jpg" alt="image" />
                            </div>
                            <!--image-->
                            <div class="card-body p-0 pt-2">
                              <h3 class="title">
                                <a href="#" class="d-block">
                                  Gallery Title
                                </a>
                              </h3>
                              <a href="#" class="btn-link">View Gallery</a>
                            </div>
                          </div>
                        </section>
            <section class="card gallery filter-item col-12 col-md-6">
                          <div class="row no-gutters">
                            <div class="col-auto col-md-12 image">
                              <img src="./assets/images/placeholder%20images/organization_preview@3x.jpg" alt="image" />
                            </div>
                            <!--image-->
                            <div class="card-body p-0 pt-2">
                              <h3 class="title">
                                <a href="#" class="d-block">
                                  Gallery Title
                                </a>
                              </h3>
                              <a href="#" class="btn-link">View Gallery</a>
                            </div>
                          </div>
                        </section>
            <section class="card gallery filter-item col-12 col-md-6">
                          <div class="row no-gutters">
                            <div class="col-auto col-md-12 image">
                              <img src="./assets/images/placeholder%20images/organization_preview@3x.jpg" alt="image" />
                            </div>
                            <!--image-->
                            <div class="card-body p-0 pt-2">
                              <h3 class="title">
                                <a href="#" class="d-block">
                                  Gallery Title
                                </a>
                              </h3>
                              <a href="#" class="btn-link">View Gallery</a>
                            </div>
                          </div>
                        </section>
            <!--gallery-->
          </div>
        </div>
        <div class="from-the-web">
          <?php include "includes/from-the-web.php" ?>
        </div>
      </div>
      <!--start of sidebar-->
      <aside class="col-12 col-md-6 col-lg-4 sidebar">
        <div class="ad d-flex text-center mb-5">
          <img class="mr-auto w-auto d-block" src="./assets/images/placeholder%20images/ad-bet.jpg" alt="">
        </div><!--first ad-->
        <h4 class="category">Related Videos</h4>
        <section class="article-list">
          <article class="story row no-gutters">
            <div class="image mr-2 col-auto">
              <img class="img-fluid" src="./assets/images/placeholder%20images/medium-thumb.jpg" alt="Card image">
            </div>
            <!--image-->
            <div class="body align-self-stretch d-flex flex-column flex col pr-2">
              <div class="meta mb-1 d-flex flex-wrap justify-content-between">
                <span class="tag">Environment</span>
                <span class="date">21-12-2020</span>
              </div>
              <!--meta-->
              <h5 class="title m-0">
                <a href="#">Coventry City Guide Including Coventry hotels</a>
              </h5>
            </div>
            <!--article-body-->
          </article>
          <article class="story row no-gutters">
            <div class="image mr-2 col-auto">
              <img class="img-fluid" src="./assets/images/placeholder%20images/medium-thumb.jpg" alt="Card image">
            </div>
            <!--image-->
            <div class="body align-self-stretch d-flex flex-column flex col pr-2">
              <div class="meta mb-1 d-flex flex-wrap justify-content-between">
                <span class="tag">Environment</span>
                <span class="date">21-12-2020</span>
              </div>
              <!--meta-->
              <h5 class="title m-0">
                <a href="#">Coventry City Guide Including Coventry hotels</a>
              </h5>
            </div>
            <!--article-body-->
          </article>
          <article class="story row no-gutters">
            <div class="image mr-2 col-auto">
              <img class="img-fluid" src="./assets/images/placeholder%20images/medium-thumb.jpg" alt="Card image">
            </div>
            <!--image-->
            <div class="body align-self-stretch d-flex flex-column flex col pr-2">
              <div class="meta mb-1 d-flex flex-wrap justify-content-between">
                <span class="tag">Environment</span>
                <span class="date">21-12-2020</span>
              </div>
              <!--meta-->
              <h5 class="title m-0">
                <a href="#">Coventry City Guide Including Coventry hotels</a>
              </h5>
            </div>
            <!--article-body-->
          </article>
          <article class="story row no-gutters">
            <div class="image mr-2 col-auto">
              <img class="img-fluid" src="./assets/images/placeholder%20images/medium-thumb.jpg" alt="Card image">
            </div>
            <!--image-->
            <div class="body align-self-stretch d-flex flex-column flex col pr-2">
              <div class="meta mb-1 d-flex flex-wrap justify-content-between">
                <span class="tag">Environment</span>
                <span class="date">21-12-2020</span>
              </div>
              <!--meta-->
              <h5 class="title m-0">
                <a href="#">Coventry City Guide Including Coventry hotels</a>
              </h5>
            </div>
            <!--article-body-->
          </article>
          <article class="story row no-gutters">
            <div class="image mr-2 col-auto">
              <img class="img-fluid" src="./assets/images/placeholder%20images/medium-thumb.jpg" alt="Card image">
            </div>
            <!--image-->
            <div class="body align-self-stretch d-flex flex-column flex col pr-2">
              <div class="meta mb-1 d-flex flex-wrap justify-content-between">
                <span class="tag">Environment</span>
                <span class="date">21-12-2020</span>
              </div>
              <!--meta-->
              <h5 class="title m-0">
                <a href="#">Coventry City Guide Including Coventry hotels</a>
              </h5>
            </div>
            <!--article-body-->
          </article>
        </section><!--articles-->
        <hr class="divider invisible my-3">
        <h4 class="category">Related Stories</h4>
        <section class="article-list link-al">
                  <article class="story row no-gutters">
                    <div class="image mr-2 col-auto">
                      <img class="img-fluid" src="./assets/images/placeholder%20images/medium-thumb.jpg" alt="Card image">
                    </div>
                    <!--image-->
                    <div class="body align-self-stretch d-flex flex-column flex col pr-2">
                      <div class="meta mb-1 d-flex flex-wrap justify-content-between">
                        <span class="tag">Environment</span>
                        <span class="date">21-12-2020</span>
                      </div>
                      <!--meta-->
                      <h5 class="title m-0">
                        <a href="#">Coventry City Guide Including Coventry hotels</a>
                      </h5>
                    </div>
                    <!--article-body-->
                  </article>
                  <article class="story row no-gutters">
                    <div class="image mr-2 col-auto">
                      <img class="img-fluid" src="./assets/images/placeholder%20images/medium-thumb.jpg" alt="Card image">
                    </div>
                    <!--image-->
                    <div class="body align-self-stretch d-flex flex-column flex col pr-2">
                      <div class="meta mb-1 d-flex flex-wrap justify-content-between">
                        <span class="tag">Environment</span>
                        <span class="date">21-12-2020</span>
                      </div>
                      <!--meta-->
                      <h5 class="title m-0">
                        <a href="#">Coventry City Guide Including Coventry hotels</a>
                      </h5>
                    </div>
                    <!--article-body-->
                  </article>
                  <article class="story row no-gutters">
                    <div class="image mr-2 col-auto">
                      <img class="img-fluid" src="./assets/images/placeholder%20images/medium-thumb.jpg" alt="Card image">
                    </div>
                    <!--image-->
                    <div class="body align-self-stretch d-flex flex-column flex col pr-2">
                      <div class="meta mb-1 d-flex flex-wrap justify-content-between">
                        <span class="tag">Environment</span>
                        <span class="date">21-12-2020</span>
                      </div>
                      <!--meta-->
                      <h5 class="title m-0">
                        <a href="#">Coventry City Guide Including Coventry hotels</a>
                      </h5>
                    </div>
                    <!--article-body-->
                  </article>
                  <article class="story row no-gutters">
                    <div class="image mr-2 col-auto">
                      <img class="img-fluid" src="./assets/images/placeholder%20images/medium-thumb.jpg" alt="Card image">
                    </div>
                    <!--image-->
                    <div class="body align-self-stretch d-flex flex-column flex col pr-2">
                      <div class="meta mb-1 d-flex flex-wrap justify-content-between">
                        <span class="tag">Environment</span>
                        <span class="date">21-12-2020</span>
                      </div>
                      <!--meta-->
                      <h5 class="title m-0">
                        <a href="#">Coventry City Guide Including Coventry hotels</a>
                      </h5>
                    </div>
                    <!--article-body-->
                  </article>
                  <article class="story row no-gutters">
                    <div class="image mr-2 col-auto">
                      <img class="img-fluid" src="./assets/images/placeholder%20images/medium-thumb.jpg" alt="Card image">
                    </div>
                    <!--image-->
                    <div class="body align-self-stretch d-flex flex-column flex col pr-2">
                      <div class="meta mb-1 d-flex flex-wrap justify-content-between">
                        <span class="tag">Environment</span>
                        <span class="date">21-12-2020</span>
                      </div>
                      <!--meta-->
                      <h5 class="title m-0">
                        <a href="#">Coventry City Guide Including Coventry hotels</a>
                      </h5>
                    </div>
                    <!--article-body-->
                  </article>
                </section><!--articles-->

      </aside>
      <!--end of sidebar-->
    </div>
  </div>
</section>
<hr class="divider invisible my-5">
<?php
include "includes/animal-friends.php";
include "includes/footer.php";
?>
