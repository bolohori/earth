<?php
  /* Insert page's title */
  $title = "News";

  /* Insert page's menu section ID for custom navigation elements */
  $navId = 'news-menu';

  /* Logo image url*/
  $logoUrl = "assets/images/logos/logo-white.png";
  include "includes/head.php";
  include "includes/header.php";
?>
<section id="story-otd" class="news-section">
    <div class="container">
        <div class="row mb-4">
            <section class="col-12 col-lg-8 card pt-3">
                <article class="featured featured-side">
                    <div class="row">
                        <div class="col-12 col-md-6 position-relative">
                            <img class="img-fluid h-100 d-block d-sm-none" src="./assets/images/placeholder%20images/env-ts-featured.jpg"
                                 alt="Featured image">
                            <img class="img-fluid h-100 d-none d-sm-block" src="./assets/images/placeholder%20images/env-ts-featured.jpg"
                                 alt="Featured image">
                            <div class="card-img-overlay pl-0 pt-4">
                                <h4 class="category badge badge-dark text-uppercase rounded-0">Story of the Day</h4>
                            </div> <!--overlay-->
                        </div>
                        <div class="col-12 col-md-6 card">
                            <div class="card-body p-0 pt-2 pt-lg-3">
                                <div class="meta d-flex">
                                    <span class="date">21-12-2020</span>
                                </div> <!--meta-->
                                <h2 class="title mb-2">
                                    <a href="#" class="d-block">
                                        Stu Unger Rise And Fall Of A Poker Genius
                                    </a>
                                </h2>
                                <p class="text mb-3">Computer users and programmers have become so accustomed to using Windows, even for the …</p>
                                <a href="#" class="btn-link read-more">Read more...</a>
                            </div><!--card-body-->
                        </div>
                    </div>
                </article><!--featured-->
            </section><!--card-->
            <!--Sidebar-->
            <section class="col-12 col-lg-4 article-list sidebar">
                <h4 class="category">
                    Breaking News
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
            </section><!--sidebar-->
        </div><!--row-->
        <div class="row">
            <section class="col-md-12 col-lg-8 article-list expanding-al">
                <article class="story row no-gutters">
                    <div class="image col-auto col-md-4 pr-2 pr-md-3">
                        <img class="img-fluid h-100" src="./assets/images/big-thumb.jpg" alt="Card image">
                    </div><!--image-->
                    <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 ">
                        <w-div class="meta mb-2 d-flex flex-wrap justify-content-between">
                            <span class="date">21-12-2020</span>
                        </w-div><!--meta-->
                        <h5 class="title mb-3">
                            <a href="#">Coventry City Guide Including <br> Coventry hotels</a>
                        </h5>
                        <p class="text d-none d-md-block">Computer users and programmers have become so accustomed to using Windows, even for the changing<span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                        <a href="#" class="btn-link read-more mt-auto pb-2">Read more...</a>
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
                            <a href="#">Coventry City Guide Including <br> Coventry hotels</a>
                        </h5>
                        <p class="text d-none d-md-block">Computer users and programmers have become so accustomed to using Windows, even for the changing<span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                        <a href="#" class="btn-link read-more mt-auto pb-2">Read more...</a>
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
                            <a href="#">Coventry City Guide Including <br> Coventry hotels</a>
                        </h5>
                        <p class="text d-none d-md-block">Computer users and programmers have become so accustomed to using Windows, even for the changing<span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                        <a href="#" class="btn-link read-more mt-auto pb-2">Read more...</a>
                    </div><!--article-body-->
                </article>
            </section><!--article-list expanding-->
            <section class="col-md-12 col-lg-4 sidebar">
                <div class="ad">
                    <img class="img-fluid h-100 mx-auto d-none d-lg-block" src="./assets/images/placeholder%20images/sidebar-ad.png" alt="">
                </div>
                <?php include "includes/newsletter-small.php" ?>
            </section><!--sidebar-->
        </div><!--row-->
    </div>
</section>
<section id="environment" class="news-section">
    <div class="container">
        <h3 class="category text-uppercase">Environment top stories</h3>
        <div class="row mb-md-4">
            <article class="col-12 col-md-6 col-lg-4">
                <img src="./assets/images/placeholder%20images/news_v2@2x.jpg" alt="" class="img-fluid">
                <div class="meta d-flex pt-2">
                    <span class="tag mr-5">Science</span>
                    <span class="date">21-12-2020</span>
                </div> <!--meta-->
                <a href="#" class="d-block mb-2">
                    <h5 class="title m-0">
                        <a href="#">
                            Story title
                        </a>
                    </h5>
                </a>
            </article>
            <article class="col-12 col-md-6 col-lg-4">
                <img src="./assets/images/placeholder%20images/news_v2@2x.jpg" alt="" class="img-fluid">
                <div class="meta d-flex pt-2">
                    <span class="tag mr-5">Science</span>
                    <span class="date">21-12-2020</span>
                </div> <!--meta-->
                <a href="#" class="d-block mb-2">
                    <h5 class="title m-0">
                        <a href="#">
                            Story title
                        </a>
                    </h5>
                </a>
            </article>
            <article class="col-12 col-md-6 col-lg-4">
                <img src="./assets/images/placeholder%20images/news_v2@2x.jpg" alt="" class="img-fluid">
                <div class="meta d-flex pt-2">
                    <span class="tag mr-5">Science</span>
                    <span class="date">21-12-2020</span>
                </div> <!--meta-->
                <a href="#" class="d-block mb-2">
                    <h5 class="title m-0">
                        <a href="#">
                            Story title
                        </a>
                    </h5>
                </a>
            </article>
            <article class="col-12 col-md-6 col-lg-4 d-none d-sm-block d-md-none">
                <img src="./assets/images/placeholder%20images/news_v2@2x.jpg" alt="" class="img-fluid">
                <div class="meta d-flex pt-2">
                    <span class="tag mr-5">Science</span>
                    <span class="date">21-12-2020</span>
                </div> <!--meta-->
                <a href="#" class="d-block mb-2">
                    <h5 class="title m-0">
                        <a href="#">
                            Story title
                        </a>
                    </h5>
                </a>
            </article>
        </div>
        <div class="row">
            <section class="col-md-12 col-lg-8 article-list expanding-al">
                <article class="story row no-gutters">
                    <div class="image col-auto col-md-4 pr-2 pr-md-3">
                        <img class="img-fluid h-100" src="./assets/images/big-thumb.jpg" alt="Card image">
                    </div><!--image-->
                    <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 ">
                        <div class="meta mb-2 d-flex flex-wrap justify-content-between">
                            <span class="date">21-12-2020</span>
                        </div><!--meta-->
                        <h5 class="title mb-3">
                            <a href="#">Coventry City Guide Including <br> Coventry hotels</a>
                        </h5>
                        <p class="text d-none d-md-block">Computer users and programmers have become so accustomed to using Windows, even for the changing<span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                        <a href="#" class="btn-link read-more mt-auto pb-2">Read more...</a>
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
                            <a href="#">Coventry City Guide Including <br> Coventry hotels</a>
                        </h5>
                        <p class="text d-none d-md-block">Computer users and programmers have become so accustomed to using Windows, even for the changing<span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                        <a href="#" class="btn-link read-more mt-auto pb-2">Read more...</a>
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
                            <a href="#">Coventry City Guide Including <br> Coventry hotels</a>
                        </h5>
                        <p class="text d-none d-md-block">Computer users and programmers have become so accustomed to using Windows, even for the changing<span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                        <a href="#" class="btn-link read-more mt-auto pb-2">Read more...</a>
                    </div><!--article-body-->
                </article>
            </section><!--article-list expanding-->
            <!--Top stories sidebar-->
            <section class="col-md-12 col-lg-4 article-list link-al sidebar">
                <h4 class="category">
                    Top environment stories
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
            </section><!--sidebar-->
            <!--Ad space-->
            <section class="ad-space col-md-6 d-none d-sm-flex d-md-none">
                <img src="http://www.placehold.it/640x480" alt="" class="ad img-fluid">
            </section>
        </div><!--row-->
    </div>
</section>
<section id="science" class="news-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <h3 class="category text-uppercase">Science top stories</h3>
                <div class="row">
                    <div class="col-md-6">
                        <article class="card featured">
                            <img class="img-fluid h-100" src="./assets/images/placeholder%20images/featured-image-ribbon.jpg" alt="Card image">
                            <div class="card-body p-0 pt-2 pt-lg-3">
                                <div class="meta d-flex">
                                    <span class="tag mr-5">Environment</span>
                                    <span class="date">21-12-2020</span>
                                </div> <!--meta-->

                                <h2 class="title mb-2">
                                    <a href="#" class="d-block">
                                        Stu Unger Rise And Fall Of A Poker Genius
                                    </a>
                                </h2>
                                <p class="text mb-3">Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical interface of the versions, therefore it has remained Microsoft’s product. of the graphical interface of the versions, therAlthough, Lycoris, Red Hat, Mandrake, Suse, Knoppix, Slackof the graphical interface of the versions, ther ware and Lindows make ….</p>
                                <a href="#" class="btn-link read-more pb-2">Read more..
                                    .</a>
                            </div><!--card-body-->
                        </article>
                    </div>
                    <div class="col-md-6">
                        <section class="article-list">
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
                            </article><article class="story row no-gutters">
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
                        </section>
                    </div>
                </div>
                <!--featured article-->

                <!--end of featured article-->
            </div>
            <!--sidebar-->
            <section class="col-12 col-md-6 col-lg-4 article-list sidebar">
                <h3 class="category">
                    Animal stories
                </h3>
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
                </article>                <article class="story row no-gutters">
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
            </section><!--sidebar-->
            <!--end of sidebar-->
            <!--ad space-->
            <!--<div class="col-12 col-md-6 d-lg-none">-->
            <!--<section class="ad">-->
            <!--<img src="http://www.placehold.it/640x480" alt="" class="img-fluid" />-->
            <!--</section>-->
            <!--</div>-->
            <!--&lt;!&ndash;end of ad space&ndash;&gt;-->
        </div>
    </div>
</section>
<section id="lifestyle" class="news-section">
    <div class="container">
        <h3 class="category">Lifestyle top stories</h3>
        <div class="row">
            <section class="col-md-12 col-lg-8 article-list expanding-al">
                <article class="story row no-gutters">
                    <div class="image col-auto col-md-4 pr-2 pr-md-3">
                        <img class="img-fluid h-100" src="./assets/images/big-thumb.jpg" alt="Card image">
                    </div><!--image-->
                    <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 ">
                        <div class="meta mb-2 d-flex flex-wrap justify-content-between">
                            <span class="date">21-12-2020</span>
                        </div><!--meta-->
                        <h5 class="title mb-3">
                            <a href="#">Coventry City Guide Including <br> Coventry hotels</a>
                        </h5>
                        <p class="text d-none d-md-block">Computer users and programmers have become so accustomed to using Windows, even for the changing<span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                        <a href="#" class="btn-link read-more mt-auto pb-2">Read more...</a>
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
                            <a href="#">Coventry City Guide Including <br> Coventry hotels</a>
                        </h5>
                        <p class="text d-none d-md-block">Computer users and programmers have become so accustomed to using Windows, even for the changing<span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                        <a href="#" class="btn-link read-more mt-auto pb-2">Read more...</a>
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
                            <a href="#">Coventry City Guide Including <br> Coventry hotels</a>
                        </h5>
                        <p class="text d-none d-md-block">Computer users and programmers have become so accustomed to using Windows, even for the changing<span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                        <a href="#" class="btn-link read-more mt-auto pb-2">Read more...</a>
                    </div><!--article-body-->
                </article>
            </section><!--article-list expanding-->
            <section class="col-md-12 col-lg-4 sidebar">
                <div class="ad mx-auto">
                    <img class="img-fluid h-100 mx-auto d-none d-lg-block" src="./assets/images/placeholder%20images/sidebar-ad.png" alt="">
                </div>
                <div class="article-list link-al">
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
                </div>
            </section><!--sidebar-->
        </div>
    </div>
</section>
<section id="voices" class="news-section">
    <div class="container">
        <div class="row">
            <h3 class="title category">Voices top stories</h3>
        </div>
        <div class="row mb-4">
            <section class="col-md-12 col-lg-8 card pt-3">
                <article class="featured featured-side">
                    <div class="row m-0">
                        <div class="col-12 col-md-6 position-relative pl-0">
                            <img class="img-fluid h-100 d-block d-sm-none" src="./assets/images/placeholder%20images/env-ts-featured.jpg"
                                 alt="Featured image">
                            <img class="img-fluid h-100 d-none d-sm-block" src="./assets/images/placeholder%20images/env-ts-featured.jpg"
                                 alt="Featured image">
                        </div>
                        <div class="col-12 col-md-6 card">
                            <div class="card-body p-0 pt-2 pt-lg-3">
                                <div class="meta d-flex">
                                    <span class="date">21-12-2020</span>
                                </div> <!--meta-->
                                <h2 class="title mb-2">
                                    <a href="#" class="d-block">
                                        Stu Unger Rise And Fall Of A Poker Genius
                                    </a>
                                </h2>
                                <p class="text mb-3">Computer users and programmers have become so accustomed to using Windows, even for the …</p>
                                <a href="#" class="btn-link read-more">Read more...</a>
                            </div><!--card-body-->
                        </div>
                    </div>
                </article><!--featured-->
            </section><!--card-->
            <!--Sidebar-->
            <section class="col-md-12 col-lg-4 article-list link-al sidebar">
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
        </div><!--row-->
        <div class="row">
            <section class="col-md-12 col-lg-8 article-list expanding-al">
                <article class="story row no-gutters">
                    <div class="image col-auto col-md-4 pr-2 pr-md-3">
                        <img class="img-fluid h-100" src="./assets/images/big-thumb.jpg" alt="Card image">
                    </div><!--image-->
                    <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 ">
                        <div class="meta mb-2 d-flex flex-wrap justify-content-between">
                            <span class="date">21-12-2020</span>
                        </div><!--meta-->
                        <h5 class="title mb-3">
                            <a href="#">Coventry City Guide Including <br> Coventry hotels</a>
                        </h5>
                        <p class="text d-none d-md-block">Computer users and programmers have become so accustomed to using Windows, even for the changing<span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                        <a href="#" class="btn-link read-more mt-auto pb-2">Read more...</a>
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
                            <a href="#">Coventry City Guide Including <br> Coventry hotels</a>
                        </h5>
                        <p class="text d-none d-md-block">Computer users and programmers have become so accustomed to using Windows, even for the changing<span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                        <a href="#" class="btn-link read-more mt-auto pb-2">Read more...</a>
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
                            <a href="#">Coventry City Guide Including <br> Coventry hotels</a>
                        </h5>
                        <p class="text d-none d-md-block">Computer users and programmers have become so accustomed to using Windows, even for the changing<span class="excerpt d-none d-md-block d-lg-none">Beatae debitis distinctio dolore dolorem excepturi expedita facilis id iure.</span></p>
                        <a href="#" class="btn-link read-more mt-auto pb-2">Read more...</a>
                    </div><!--article-body-->
                </article>
            </section><!--article-list expanding-->
        </div><!--row-->
    </div>
</section>

<?php
    include "includes/newsletter.php";
    include "includes/footer.php";
?>