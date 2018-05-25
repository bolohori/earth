<?php
  /* Insert page's title */
  $title = "Animals";

  /* Insert page's menu section ID for custom navigation elements */
  $navId = 'animals-menu';

  /* Logo image url*/
  $logoUrl = "assets/images/logos/logo-white.png";
  include "includes/head.php";
  include "includes/header.php";
?>
<!-- Animals -->
<section id="animal-otd" class="news-section">
    <div class="container">
        <div class="w-100 bg-white">
            <h1 class="headline accent-title text-uppercase m-0">Explore Animals</h1>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <!--featured article-->
                <article class="card featured">
                    <div class="position-relative">
                        <img class="img-fluid h-100" src="./assets/images/placeholder%20images/animal-otd.jpg" alt="Card image">
                        <div class="card-img-overlay pl-0 pt-4">
                            <h4 class="category badge badge-dark text-uppercase rounded-0">Animal of the day</h4>
                        </div>
                        <!--overlay-->
                    </div>
                    <div class="card-body p-0 pt-2 pt-lg-3">
                        <div class="meta d-flex">
                            <span class="tag mr-5">Environment</span>
                            <span class="date">21-12-2020</span>
                        </div>
                        <!--meta-->

                        <h2 class="title mb-2">
                            <a href="#" class="d-block">
                                The happy duck
                            </a>
                        </h2>
                        <p class="text mb-3">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.
                            It’s exciting to think about setting up your own viewing station whether that is on the deck
                            of your home or having a powerful but mobile telescope set up to take to the remove countryside
                            to really get a good shot at some breath taking star gazing.</p>
                        <a href="#" class="btn-link read-more pb-2">Read more...
                        </a>
                    </div>
                    <!--card-body-->
                </article>
                <!--end of featured article-->
            </div>
            <!--sidebar-->
            <section class="col-12 col-md-6 col-lg-4 article-list sidebar">
                <h4 class="category">
                    Top Stories
                </h4>
                <article class="story row no-gutters">
                    <div class="image col-auto col-md-4 pr-2 pr-md-3">
                        <img class="img-fluid h-100" src="./assets/images/placeholder%20images/sidebar-thumb.jpg" alt="Card image">
                    </div>
                    <!--image-->
                    <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 ">
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
                    <div class="image col-auto col-md-4 pr-2 pr-md-3">
                        <img class="img-fluid h-100" src="./assets/images/placeholder%20images/sidebar-thumb.jpg" alt="Card image">
                    </div>
                    <!--image-->
                    <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 ">
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
                    <div class="image col-auto col-md-4 pr-2 pr-md-3">
                        <img class="img-fluid h-100" src="./assets/images/placeholder%20images/sidebar-thumb.jpg" alt="Card image">
                    </div>
                    <!--image-->
                    <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 ">
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
                    <div class="image col-auto col-md-4 pr-2 pr-md-3">
                        <img class="img-fluid h-100" src="./assets/images/placeholder%20images/sidebar-thumb.jpg" alt="Card image">
                    </div>
                    <!--image-->
                    <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 ">
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
                <div class="ad mx-auto">
                    <img class="img-fluid h-100 d-none d-lg-block" src="./assets/images/placeholder%20images/sidebar-ad.png" alt="">
                </div>
            </section>
            <!--sidebar-->
            <!--end of sidebar-->
        </div>
    </div>
</section>
<!-- Animals Listing -->
<section id="animal-listing" class="filter-list mb-md-5">
    <div class="container">
        <div class="d-flex justify-content-between filter-container">
            <div class="filter-buttons">
                <a href="#" class="filter-title active">All Species</a>
                <a href="#" class="filter-title">Mamals</a>
                <a href="#" class="filter-title">Reptiles</a>
                <a href="#" class="filter-title">Amphibians</a>
                <a href="#" class="filter-title">Fish</a>
                <a href="#" class="filter-title">Invertebrates</a>
            </div>
            <div class="filter-search">
                <!-- Search bar -->
                <div class="searchbar-container">
                    <input type="text" placeholder="Search for an animal">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>
        <div class="row animal-grid">
            <div class="col-lg-3">
                <img src="assets/images/top-story.jpg" alt="Image">
                <p class="title">
                    Connot Armstrong
                </p>
                <p>
                    (Macronyx flavicolis)
                </p>
            </div>
            <div class="col-lg-3">
                <img src="assets/images/top-story.jpg" alt="Image" class="mb-1">
                <a href="#"class="title">
                    Connot Armstrong
                    <span class="common-name">(Macronyx flavicolis)</span>
                </a>
            </div>
            <div class="col-lg-3">
                <img src="assets/images/top-story.jpg" alt="Image">
                <p class="title">
                    Connot Armstrong
                </p>
                <p>
                    (Macronyx flavicolis)
                </p>
            </div>
            <div class="col-lg-3">
                <img src="assets/images/top-story.jpg" alt="Image">
                <p class="title">
                    Connot Armstrong
                </p>
                <p>
                    (Macronyx flavicolis)
                </p>
            </div>
            <div class="col-lg-3">
                <img src="assets/images/top-story.jpg" alt="Image">
                <p class="title">
                    Connot Armstrong
                </p>
                <p>
                    (Macronyx flavicolis)
                </p>
            </div>
            <div class="col-lg-3">
                <img src="assets/images/top-story.jpg" alt="Image">
                <p class="title">
                    Connot Armstrong
                </p>
                <p>
                    (Macronyx flavicolis)
                </p>
            </div>
            <div class="col-lg-3">
                <img src="assets/images/top-story.jpg" alt="Image">
                <p class="title">
                    Connot Armstrong
                </p>
                <p>
                    (Macronyx flavicolis)
                </p>
            </div>
            <div class="col-lg-3">
                <img src="assets/images/top-story.jpg" alt="Image">
                <p class="title">
                    Connot Armstrong
                </p>
                <p>
                    (Macronyx flavicolis)
                </p>
            </div>
            <div class="col-lg-3">
                <img src="assets/images/top-story.jpg" alt="Image">
                <p class="title">
                    Connot Armstrong
                </p>
                <p>
                    (Macronyx flavicolis)
                </p>
            </div>
            <div class="col-lg-3">
                <img src="assets/images/top-story.jpg" alt="Image">
                <p class="title">
                    Connot Armstrong
                </p>
                <p>
                    (Macronyx flavicolis)
                </p>
            </div>
            <div class="col-lg-3">
                <img src="assets/images/top-story.jpg" alt="Image">
                <p class="title">
                    Connot Armstrong
                </p>
                <p>
                    (Macronyx flavicolis)
                </p>
            </div>
            <div class="col-lg-3">
                <img src="assets/images/top-story.jpg" alt="Image">
                <p class="title">
                    Connot Armstrong
                </p>
                <p>
                    (Macronyx flavicolis)
                </p>
            </div>
        </div>
        <nav aria-label="row navigation">
            <ul class="pagination">
                <!--<li class="page-item disabled">-->
                <!--<a class="page-link" href="#" aria-label="Previous">-->
                <!--<span aria-hidden="true">&laquo;</span>-->
                <!--<span class="sr-only">Previous</span>-->
                <!--</a>-->
                <!--</li>-->
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">Next ></span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<div class="d-none d-lg-block">
    <?php include "includes/animal-friends.php" ?>
</div>
<!-- Animal Videos -->
<!--Plants and animals videos-->
<section id="animals-videos" class="news-section">
    <div class="container">
        <h3 class="category text-uppercase">Plants videos</h3>
        <div class="row">
            <!--Featured article-->
            <div class="col-md-12 col-lg-8">
                <section class="animals mb-5">
                    <div class="row mb-4">
                        <article class="card featured col-xs-12 col-md-6">
                            <div class="position-relative">
                                <img class="img-fluid h-100" src="./assets/images/placeholder%20images/featured-image-ribbon.jpg" alt="Card image">
                            </div>
                            <div class="card-body p-0 pt-2 pt-lg-3">
                                <div class="meta d-flex">
                                    <span class="date">21-12-2020</span>
                                </div> <!--meta-->
                                <h2 class="title mb-2">
                                    <a href="#" class="d-block">
                                        Stu Unger Rise And Fall Of A Poker Genius
                                    </a>
                                </h2>
                            </div><!--card-body-->
                        </article><!--featured-->
                        <div class="col article-list medium-al m-0">
                            <article class="story row no-gutters">
                                <div class="image col-auto col-md-4 pr-2 pr-md-3">
                                    <img class="img-fluid h-100" src="./assets/images/placeholder%20images/medium-thumb.jpg" alt="Card image">
                                </div><!--image-->
                                <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 ">
                                    <div class="meta mb-1 d-flex flex-wrap justify-content-between">
                                        <span class="tag">Environment</span>
                                        <span class="date">21-12-2020</span>
                                    </div><!--meta-->
                                    <h5 class="title m-0">
                                        <a href="#">Coventry City Guide Including Coventry hotels</a>
                                    </h5>
                                </div><!--article-body-->
                            </article>
                            <article class="story row no-gutters">
                                <div class="image col-auto col-md-4 pr-2 pr-md-3">
                                    <img class="img-fluid h-100" src="./assets/images/placeholder%20images/medium-thumb.jpg" alt="Card image">
                                </div><!--image-->
                                <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 ">
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
                    </div>
                    <div class="row">
                        <article class="card featured col-xs-12 col-md-6">
                            <div class="position-relative">
                                <img class="img-fluid h-100" src="./assets/images/placeholder%20images/featured-image-ribbon.jpg" alt="Card image">
                            </div>
                            <div class="card-body p-0 pt-2 pt-lg-3">
                                <div class="meta d-flex">
                                    <span class="date">21-12-2020</span>
                                </div> <!--meta-->
                                <h2 class="title mb-2">
                                    <a href="#" class="d-block">
                                        Stu Unger Rise And Fall Of A Poker Genius
                                    </a>
                                </h2>
                            </div><!--card-body-->
                        </article><!--featured-->
                        <div class="col article-list medium-al m-0">
                            <article class="story row no-gutters">
                                <div class="image col-auto col-md-4 pr-2 pr-md-3">
                                    <img class="img-fluid h-100" src="./assets/images/placeholder%20images/medium-thumb.jpg" alt="Card image">
                                </div><!--image-->
                                <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 ">
                                    <div class="meta mb-1 d-flex flex-wrap justify-content-between">
                                        <span class="tag">Environment</span>
                                        <span class="date">21-12-2020</span>
                                    </div><!--meta-->
                                    <h5 class="title m-0">
                                        <a href="#">Coventry City Guide Including Coventry hotels</a>
                                    </h5>
                                </div><!--article-body-->
                            </article>
                            <article class="story row no-gutters">
                                <div class="image col-auto col-md-4 pr-2 pr-md-3">
                                    <img class="img-fluid h-100" src="./assets/images/placeholder%20images/medium-thumb.jpg" alt="Card image">
                                </div><!--image-->
                                <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 ">
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
                    </div>
                </section><!--animals-->
            </div>
            <!--Top stories sidebar-->
            <section class="col-12 col-md-6 col-lg-4 d-none d-lg-block article-list sidebar">
                <div class="ad d-flex text-center mb-5">
                    <img class="mr-auto w-auto d-block" src="./assets/images/placeholder%20images/ad-bet.jpg" alt="">
                </div>
            </section><!--sidebar-->
        </div>
    </div>
</section>
<!-- News Coming Your Way -->
<?php include "includes/newsletter.php" ?>

<?php
  include "includes/footer.php";
?>
