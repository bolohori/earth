<?php
  $title = "Animals";
  include "./includes/head.php";
  include "includes/header.php";
?>
    <!-- Animals -->
    <section id="animal-otd">
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
    <div class="container animal-listing">
        <div class="row filter-container">
            <div class="col-lg-8 filter-all">
                <span class="filter-title active">All Species</span>
                <span class="filter-title">Mamals</span>
                <span class="filter-title">Reptiles</span>
                <span class="filter-title">Amphibians</span>
                <span class="filter-title">Fish</span>
                <span class="filter-title">Invertebrates</span>
            </div>
            <div class="col-lg-4 searchbar-super-container">
                <!-- Search bar -->
                <div class="searchbar-container">
                    <input type="text" placeholder="Search for an animal">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>
        <div class="row animals-images">
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
        <div class="row pagination-container">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">...</a>
                    </li>
                    <li>
                        <a href="#">120</a>
                    </li>
                    <li>
                        <a href="#">next &gt;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End of Animals Listing -->

    <!-- Explore Plants and Animals -->
    <div class="container-big friends-of-animals">
    </div>

    <!-- Animal Videos -->
    <div class="container animal-videos-container">
        <h2 class="section-title">Animal Videos</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="animal-video-big">
                    <div class="w-100 embed-responsive embed-responsive-16by9 d-block d-sm-none d-lg-block">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Ybh11kcDhfM" frameborder="0" allow="autoplay; encrypted-media"
                            allowfullscreen></iframe>
                    </div>
                    <p class="date">11-22-2018</p>
                    <p class="article-title">Coventry City Guide Including Coventry Hotels</p>
                </div>
                <div class="animal-video-big">
                    <div class="w-100 embed-responsive embed-responsive-16by9 d-block d-sm-none d-lg-block">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Ybh11kcDhfM" frameborder="0" allow="autoplay; encrypted-media"
                            allowfullscreen></iframe>
                    </div>
                    <p class="date">11-22-2018</p>
                    <p class="article-title">Coventry City Guide Including Coventry Hotels</p>
                </div>
            </div>
            <!-- Right sidebar with Animal Videos -->
            <div class="col-lg-4">
                <!-- Top Story Article -->
                <article class="top-story">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="w-100 embed-responsive embed-responsive-16by9 d-block d-sm-none d-lg-block">
                                <iframe width="170" height="122" src="https://www.youtube.com/embed/Ybh11kcDhfM" frameborder="0" allow="autoplay; encrypted-media"
                                    allowfullscreen></iframe>
                            </div>
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
                                <div class="col-12">
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
                            <div class="w-100 embed-responsive embed-responsive-16by9 d-block d-sm-none d-lg-block">
                                <iframe width="170" height="122" src="https://www.youtube.com/embed/Ybh11kcDhfM" frameborder="0" allow="autoplay; encrypted-media"
                                    allowfullscreen></iframe>
                            </div>
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
                                <div class="col-12">
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
                            <div class="w-100 embed-responsive embed-responsive-16by9 d-block d-sm-none d-lg-block">
                                <iframe width="170" height="122" src="https://www.youtube.com/embed/Ybh11kcDhfM" frameborder="0" allow="autoplay; encrypted-media"
                                    allowfullscreen></iframe>
                            </div>
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
                                <div class="col-12">
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
                            <div class="w-100 embed-responsive embed-responsive-16by9 d-block d-sm-none d-lg-block">
                                <iframe width="170" height="122" src="https://www.youtube.com/embed/Ybh11kcDhfM" frameborder="0" allow="autoplay; encrypted-media"
                                    allowfullscreen></iframe>
                            </div>
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
                                <div class="col-12">
                                    Coventry City Guide Including Coventry Hotels
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <!--Ad space-->
            <section class="col-md-12 col-lg-4 sidebar">
                <div class="ad d-flex text-center mb-5">
                    <img class="mr-auto w-auto d-block" src="./assets/images/placeholder%20images/ad-bet.jpg" alt="">
                </div>
            </section>
            <!--sidebar-->
        </div>
    </div>
    <!-- News Coming Your Way -->
    <?php include "includes/newsletter.php" ?>

    <?php
  include "includes/footer.php";
?>
