<?php
  $title = "Earth.com - Earthpedia";
  include "./includes/head.php";
  include "./includes/header.php";
?>
<section id="earthpedia">
    <!-- Header of page -->
    <section id="ep-header">
        <div class="overlay w-100"></div>
        <div class="content h-100 d-flex flex-column">
            <h1 class="headline text-uppercase">Rediscover<br
                    class="d-block d-lg-none"> Earth</h1>
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
    <!--Curiosity of the day section-->
    <div id="cotd" class="category-section">
        <div class="container">
            <div class="row">
                <!--Featured article-->
                <div class="col-12 col-md-6 col-lg-8">
                    <article class="card featured side-article">
                        <div class="row">
                            <div class="col-xs-12 col-lg-6">
                                <div class="position-relative">
                                    <img class="img-fluid"
                                         src="./assets/images/placeholder%20images/news_v1@2x.jpg" alt="Card image">
                                    <div class="card-img-overlay pl-0 pt-4">
                                        <h4 class="category badge badge-dark text-uppercase rounded-0">Curiosity of the day</h4>
                                    </div> <!--overlay-->
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-6">
                                <div class="card-body p-0 pt-2">
                                    <div class="meta d-flex mb-2">
                                        <span class="date">21-12-2020</span>
                                    </div> <!--meta-->
                                    <h2 class="title mb-2">
                                        <a href="#" class="d-block">
                                            John Doe
                                        </a>
                                    </h2>
                                    <p class="text mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure, magni, molestias quisquam, suscipit ullam vitae. Ab consequatur et eveniet minus odio!</p>
                                    <a href="#" class="btn-link read-more">Read more...</a>
                                </div><!--card-body-->
                            </div>
                        </div>
                    </article><!--featured side-->
                </div><!--card-->
                <!--Top stories sidebar-->
                <!--Ad space-->
                <div class="col-12 col-md-6 col-lg-4">
                    <section class="ad">
                        <img src="./assets/images/placeholder%20images/AD%20SPACE.jpg" alt="" class="img-fluid" />
                    </section>
                </div>
            </div>
        </div>
</section>
<section id="explore">
    <div class="row no-gutters">
        <div class="col-xs-12 col-md-6 plants">
            <div class="d-flex bg">
                <div class="text col mx-auto">
                    <h1 class="title">EXPLORE <br> PLANTS</h1>
                    <button type="button" class="btn btn-outline-primary btn-explore">VIEW OUR ARCHIVE</button>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 animals">
            <div class="d-flex col bg">
                <div class="text col mx-auto">
                    <div class="float-right float-md-none">
                        <h1 class="title">EXPLORE <br> ANIMALS</h1>
                        <button type="button" class="btn btn-outline-primary btn-explore">VIEW OUR ARCHIVE
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="ep-news">
    <div class="container">
        <div class="row">
            <section class="plants article-list expanding-al col-md-12 col-lg-6 mb-3">
                <h4 class="category">
                    Plants in the news
                </h4>
                <ul class="row list-unstyled m-0">
                    <li class="col-lg-12">
                        <div class="row">
                            <article class="story row no-gutters">
                                <div class="image mr-2 col-auto">
                                    <img class="img-fluid" src="./assets/images/big-thumb.jpg" alt="Card image">
                                </div><!--image-->
                                <div class="body align-self-stretch d-flex flex-column flex col pr-2">
                                    <div class="meta mb-2 d-flex flex-wrap justify-content-between">
                                        <span class="date">21-12-2020</span>
                                    </div><!--meta-->
                                    <h5 class="title mb-3">
                                        <a href="#">Coventry City Guide Including Coventry hotels</a>
                                    </h5>
                                    <p class="text mb-4 d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                                    <a href="#" class="btn-link read-more">Read more...</a>
                                </div><!--article-body-->
                            </article>
                        </div>

                    </li>
                    <li class="col-lg-12">
                        <div class="row">
                            <article class="story row no-gutters">
                                <div class="image mr-2 col-auto">
                                    <img class="img-fluid" src="./assets/images/big-thumb.jpg" alt="Card image">
                                </div><!--image-->
                                <div class="body align-self-stretch d-flex flex-column flex col pr-2">
                                    <div class="meta mb-2 d-flex flex-wrap justify-content-between">
                                        <span class="date">21-12-2020</span>
                                    </div><!--meta-->
                                    <h5 class="title mb-3">
                                        <a href="#">Coventry City Guide Including Coventry hotels</a>
                                    </h5>
                                    <p class="text mb-4 d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                                    <a href="#" class="btn-link read-more">Read more...</a>
                                </div><!--article-body-->
                            </article>
                        </div>
                    </li>
                    <li class="col-lg-12">
                        <div class="row">
                            <article class="story row no-gutters">
                                <div class="image mr-2 col-auto">
                                    <img class="img-fluid" src="./assets/images/big-thumb.jpg" alt="Card image">
                                </div><!--image-->
                                <div class="body align-self-stretch d-flex flex-column flex col pr-2">
                                    <div class="meta mb-2 d-flex flex-wrap justify-content-between">
                                        <span class="date">21-12-2020</span>
                                    </div><!--meta-->
                                    <h5 class="title mb-3">
                                        <a href="#">Coventry City Guide Including Coventry hotels</a>
                                    </h5>
                                    <p class="text mb-4 d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                                    <a href="#" class="btn-link read-more">Read more...</a>
                                </div><!--article-body-->
                            </article>
                        </div>
                    </li>
                </ul>
            </section><!--#plants-->
            <section class="animals article-list expanding-al col-md-12 col-lg-6 mb-4">
                <h4 class="category">
                    Animals in the news
                </h4>
                <ul class="row list-unstyled m-0">
                    <li class="col-lg-12">
                        <div class="row">
                            <article class="story row no-gutters">
                                <div class="image mr-2 col-auto">
                                    <img class="img-fluid" src="./assets/images/big-thumb.jpg" alt="Card image">
                                </div><!--image-->
                                <div class="body align-self-stretch d-flex flex-column flex col pr-2">
                                    <div class="meta mb-2 d-flex flex-wrap justify-content-between">
                                        <span class="date">21-12-2020</span>
                                    </div><!--meta-->
                                    <h5 class="title mb-3">
                                        <a href="#">Coventry City Guide Including Coventry hotels</a>
                                    </h5>
                                    <p class="text mb-4 d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                                    <a href="#" class="btn-link read-more">Read more...</a>
                                </div><!--article-body-->
                            </article>
                        </div>
                    </li>
                    <li class="col-lg-12">
                        <div class="row">
                            <article class="story row no-gutters">
                                <div class="image mr-2 col-auto">
                                    <img class="img-fluid" src="./assets/images/big-thumb.jpg" alt="Card image">
                                </div><!--image-->
                                <div class="body align-self-stretch d-flex flex-column flex col pr-2">
                                    <div class="meta mb-2 d-flex flex-wrap justify-content-between">
                                        <span class="date">21-12-2020</span>
                                    </div><!--meta-->
                                    <h5 class="title mb-3">
                                        <a href="#">Coventry City Guide Including Coventry hotels</a>
                                    </h5>
                                    <p class="text mb-4 d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                                    <a href="#" class="btn-link read-more">Read more...</a>
                                </div><!--article-body-->
                            </article>
                        </div>
                    </li>
                    <li class="col-lg-12">
                        <div class="row">
                            <article class="story row no-gutters">
                                <div class="image mr-2 col-auto">
                                    <img class="img-fluid" src="./assets/images/big-thumb.jpg" alt="Card image">
                                </div><!--image-->
                                <div class="body align-self-stretch d-flex flex-column flex col pr-2">
                                    <div class="meta mb-2 d-flex flex-wrap justify-content-between">
                                        <span class="date">21-12-2020</span>
                                    </div><!--meta-->
                                    <h5 class="title mb-3">
                                        <a href="#">Coventry City Guide Including Coventry hotels</a>
                                    </h5>
                                    <p class="text mb-4 d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                                    <a href="#" class="btn-link read-more">Read more...</a>
                                </div><!--article-body-->
                            </article>
                        </div>
                    </li>
                </ul>
            </section><!--#animals-->
        </div>
    </div>
</section><!--.ep-news-->
</section>


<!-- PlantSnap section -->
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

<!-- Animal videos -->
<section class="animal-videos">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 left">
                <h2>ANIMAL VIDEOS</h2>
                <div class="row video-section">
                    <div class="col-sm-6">
                        <video width="350" controls>
                            <source src="assets/videos/sample.mp4" type=video/mp4 />
                        </video>
                        <div class="date">
                            11-22-2018
                        </div>
                        <h3>Coventry City Guide Including Coventry Hotels</h3>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <video width="170" controls="">
                                    <source src="assets/videos/sample.mp4" type="video/mp4">
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

                        <div class="row">
                            <div class="col-lg-6">
                                <video width="170" controls="">
                                    <source src="assets/videos/sample.mp4" type="video/mp4">
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
                    </div>
                </div>

                <h2>PLANTS VIDEOS</h2>
                <div class="row video-section">
                    <div class="col-sm-6">
                        <video width="350" controls>
                            <source src="assets/videos/sample.mp4" type=video/mp4 />
                        </video>
                        <div class="date">
                            11-22-2018
                        </div>
                        <h3>Coventry City Guide Including Coventry Hotels</h3>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <video width="170" controls="">
                                    <source src="assets/videos/sample.mp4" type="video/mp4">
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

                        <div class="row">
                            <div class="col-lg-6">
                                <video width="170" controls="">
                                    <source src="assets/videos/sample.mp4" type="video/mp4">
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
                    </div>
                </div>

            </div>
            <div class="col-lg-4 right">
                <h2 class="section-title">RELATED STORIES</h2>

                <!-- Top Story Article -->
                <article class="top-story">
                    <div class="row">
                        <div class="col-lg-6">
                            <video width="170" controls="">
                                <source src="assets/videos/sample.mp4" type="video/mp4">
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
                            <video width="170" controls="">
                                <source src="assets/videos/sample.mp4" type="video/mp4">
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
                            <video width="170" controls="">
                                <source src="assets/videos/sample.mp4" type="video/mp4">
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
                            <video width="170" controls="">
                                <source src="assets/videos/sample.mp4" type="video/mp4">
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
                            <video width="170" controls="">
                                <source src="assets/videos/sample.mp4" type="video/mp4">
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
    </div>
</section>

<!-- Footer -->
<?php include "includes/footer.php"; ?>
