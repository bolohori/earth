<?php
  /* Insert page's title */
  $title = "Earthpedia";

  /* Insert page's menu section ID for custom navigation elements */
  $navId = 'earthpedia-menu';

  /* Logo image url*/
  $logoUrl = "assets/images/logos/logo-white.png";
  include "includes/head.php";
  include "includes/header.php";
?>
<!-- Header of page -->
<section id="ep-header">
    <div class="overlay w-100"></div>
    <div class="content h-100 d-flex flex-column">
        <h1 class="headline text-uppercase">Rediscover<br> Earth</h1>
        <div class="row no-gutters h-100 align-items-end align-items-lg-start">
            <div class="col-12 col-md-6 search-wrapper">
                <p class="d-lg-none">Explore the most amazing plants<br> and animals.</p>
                <form id="ep-searchform" action="/" method="post">
                    <div class="input-group bg-white">
                        <input class="form-control border-0" placeholder="Search here...">
                        <div class="input-group-addon my-auto bg-white border-0">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>
<!--End of header-->
<!--Curiosity of the day section-->
<section id="cotd" class="news-section">
    <div class="container">
        <div class="row">
            <!--Featured article-->
            <div class="col-12 col-md-6 col-lg-8">
                <article class="card featured featured-side">
                    <div class="row">
                        <div class="col-12 col-lg-8 position-relative">
                            <img class="img-fluid h-100" src="./assets/images/placeholder%20images/news_v1@2x.jpg" alt="Card image">
                            <div class="card-img-overlay pl-0 pt-4">
                                <h4 class="category badge badge-dark text-uppercase rounded-0">Curiosity of the day</h4>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 card-body">
                            <div class="meta d-flex">
                                <span class="date">21-12-2020</span>
                            </div> <!--meta-->
                            <h2 class="title">
                                <a href="#" class="d-block">
                                    Do Your Self Realizations Quickly Fade
                                </a>
                            </h2>
                            <p class="text">Computer users and programmers have become so accustomed to using Windows, even for the …</p>
                            <a href="#" class="btn-link read-more">Read more...</a>
                        </div>
                    </div>
                </article><!--featured side-->
            </div><!--featured-->
            <!--Ad space-->
            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <section class="ad">
                    <img src="./assets/images/placeholder%20images/sidebar-ad.png" alt="ad-desktop-square" class="img-fluid d-none d-lg-block" />
                    <img src="./assets/images/placeholder%20images/ad-space-square-tablet.jpg" alt="ad-tablet-square" class="img-fluid d-block d-lg-none" />
                </section>
            </div>
        </div>
    </div>
</section>
<!--End of curiosity-->
<!--Explore plants and animals section-->
<section id="explore">
    <?php include "includes/explore.php"; ?>
</section>
<!--End of explore-->
<!--News section-->
<section id="ep-news" class="news-section">
    <div class="container">
        <div class="row">
            <section class="plants article-list expanding-al col-md-12 col-lg-6">
                <h3 class="category">
                    Plants in the news
                </h3>
                <article class="story row no-gutters">
                    <div class="image col-auto col-md-4 pr-2 pr-md-3">
                        <img class="img-fluid h-100" src="./assets/images/big-thumb.jpg" alt="Card image">
                    </div><!--image-->
                    <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 ">
                        <div class="meta mb-2 d-flex flex-wrap justify-content-between">
                            <span class="date">21-12-2020</span>
                        </div><!--meta-->
                        <h5 class="title mb-3">
                            <a href="#">Coventry City Guide Including Coventry hotels</a>
                        </h5>
                        <p class="text d-none d-md-block"><span class="excerpt d-none d-md-block d-lg-none">Computer users and programs have become so accustomed to </span></p>
                        <a href="#" class="btn-link read-more">Read more...</a>
                    </div><!--article-body-->
                </article>
                <article class="story row no-gutters">
                    <div class="image col-auto col-md-4 pr-2 pr-md-3">
                        <img class="img-fluid h-100" src="./assets/images/big-thumb.jpg" alt="Card image">
                    </div><!--image-->
                    <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 ">
                        <div class="meta mb-2 d-flex flex-wrap justify-content-between">
                            <span class="date">21-12-2020</span>
                        </div><!--meta-->
                        <h5 class="title mb-3">
                            <a href="#">Coventry City Guide Including Coventry hotels</a>
                        </h5>
                        <p class="text d-none d-md-block"> <span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                        <a href="#" class="btn-link read-more">Read more...</a>
                    </div><!--article-body-->
                </article>
            </section><!--#plants-->
            <section class="animals article-list expanding-al col-md-12 col-lg-6">
                <h3 class="category">
                    Animals in the news
                </h3>
                <article class="story row no-gutters">
                    <div class="image col-auto col-md-4 pr-2 pr-md-3">
                        <img class="img-fluid h-100" src="./assets/images/big-thumb.jpg" alt="Card image">
                    </div><!--image-->
                    <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 ">
                        <div class="meta mb-2 d-flex flex-wrap justify-content-between">
                            <span class="date">21-12-2020</span>
                        </div><!--meta-->
                        <h5 class="title mb-3">
                            <a href="#">Coventry City Guide Including Coventry hotels</a>
                        </h5>
                        <p class="text d-none d-md-block"><span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                        <a href="#" class="btn-link read-more">Read more...</a>
                    </div><!--article-body-->
                </article>
                <article class="story row no-gutters">
                    <div class="image col-auto col-md-4 pr-2 pr-md-3">
                        <img class="img-fluid h-100" src="./assets/images/big-thumb.jpg" alt="Card image">
                    </div><!--image-->
                    <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 ">
                        <div class="meta mb-2 d-flex flex-wrap justify-content-between">
                            <span class="date">21-12-2020</span>
                        </div><!--meta-->
                        <h5 class="title mb-3">
                            <a href="#">Coventry City Guide Including Coventry hotels</a>
                        </h5>
                        <p class="text d-none d-md-block"><span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                        <a href="#" class="btn-link read-more">Read more...</a>
                    </div><!--article-body-->
                </article>
            </section><!--#plants-->
        </div>
    </div>
</section><!--.ep-news-->
<!--End of news-->
<!--Plantsnap section-->
<section id="plantsnap">
    <div class="bg-wrapper d-flex">
        <div class="bg w-100">
            <div class="container content">
                <div class="row">
                    <div class="text col-md-12 col-lg-5">
                        <h2 class="headline text-uppercase">Identify plants <br>on the go</h2>
                        <p class="col-5 col-lg-8 p-0">PlantSnap is a mobile app that helps you identify plants, flowers, trees, cacti and mushrooms. Simply snap a photo of the plant, and PlantSnap tells you what it is! </p>
                    </div>
                    <div class="store-buttons col-md-12 col-lg-2 offset-lg-3 d-flex align-items-start align-items-lg-center justify-content-lg-center flex-column flex-md-row flex-lg-column">
                        <a href="https://play.google.com/store/apps/details?id=com.fws.plantsnap&amp;hl=en" class="gplay-btn store-btn">
                            <img src="./assets/images/google-play-badge@2x.png">
                        </a>
                        <a href="https://itunes.apple.com/us/app/plantsnap-identify-plants-in-a-snap/id1234702272?mt=8" class="appstore-btn store-btn">
                            <img src="./assets/images/app-store-badge@2x.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End of plantsnap-->
<!--Plants and animals videos-->
<section id="plants-animals-videos" class="news-section">
    <div class="container">
        <div class="row">
            <!--Featured article-->
            <div class="col-md-12 col-lg-8">
                <section class="animals">
                    <h3 class="category text-uppercase">Plants videos</h3>
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
                <section class="plants">
                    <h3 class="category text-uppercase">Animals videos</h3>
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
                </section><!--plants-->
            </div>
            <!--Top stories sidebar-->
            <section class="col-12 col-md-6 col-lg-4 d-none d-lg-block article-list sidebar">
                <h4 class="category">
                    Realted stories
                </h4>
                <article class="story row no-gutters">
                    <div class="image col-auto col-md-4 pr-2 pr-md-3">
                        <img class="img-fluid h-100" src="./assets/images/placeholder%20images/sidebar-thumb.jpg" alt="Card image">
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
                        <img class="img-fluid h-100" src="./assets/images/placeholder%20images/sidebar-thumb.jpg" alt="Card image">
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
                        <img class="img-fluid h-100" src="./assets/images/placeholder%20images/sidebar-thumb.jpg" alt="Card image">
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
                        <img class="img-fluid h-100" src="./assets/images/placeholder%20images/sidebar-thumb.jpg" alt="Card image">
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
                        <img class="img-fluid h-100" src="./assets/images/placeholder%20images/sidebar-thumb.jpg" alt="Card image">
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
                        <img class="img-fluid h-100" src="./assets/images/placeholder%20images/sidebar-thumb.jpg" alt="Card image">
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
            </section><!--sidebar-->
        </div>
    </div>
</section>
<!--End of plants and animals videos-->
<div class="d-block d-lg-none">
    <?php include "includes/newsletter.php"; ?>
</div>
<div class="d-none d-lg-block">
    <?php include "includes/animal-friends.php"; ?>
</div>
<?php include "includes/footer.php"; ?>
