<?php
  $title = "Earth.com - Home Page";
  include "./includes/head.php";
  include "./includes/header.php";
?>
<!--News of the day section-->
<section id="notd" class="category-section">
    <div class="container">
        <div class="row">
            <!--Featured article-->
            <section class="col-md-12 col-lg-8">
                <article class="card featured">
                    <div class="position-relative">
                        <img class="img-fluid" src="http://placehold.it/960x640" alt="Card image">
                        <div class="card-img-overlay pl-0 pt-4">
                            <h4 class="category badge badge-dark text-uppercase rounded-0">News of the Day</h4>
                        </div> <!--overlay-->
                    </div>
                    <div class="card-body p-0 pt-2">
                        <div class="meta d-flex mb-2">
                            <span class="tag mr-5">Environment</span>
                            <span class="date">21-12-2020</span>
                        </div> <!--meta-->

                        <h2 class="title mb-2">
                            <a href="#" class="d-block">
                                John Doe
                            </a>
                        </h2>
                        <p class="text mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A cupiditate delectus deserunt ex harum illo iusto libero minus molestiae molestias optio quae, quia quibusdam repellendus reprehenderit rerum veniam vitae voluptate.</p>
                        <a href="#" class="btn-link read-more pb-2">Read more..
                            .</a>
                    </div><!--card-body-->
                </article><!--featured-->
            </section><!--card-->
            <!--Top stories sidebar-->
            <section class="col-xs-12 col-md-6 col-lg-4 sidebar">
                <div class="top-stories">
                    <h4 class="category">
                        Top Stories
                    </h4>
                    <ul class="row list-unstyled m-0">
                        <li class="col-lg-12">
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
                        <li class="col-lg-12">
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
                        <li class="col-lg-12">
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
            <!--Ad space-->
            <div class="col-12 col-md-6">
                <section class="ad">
                    <img src="http://www.placehold.it/640x480" alt="" class="img-fluid" />
                </section>
            </div>
        </div>
    </div>
</section>
<!-- Video and image of the day -->
<section id="best-of-day" class="category-section  mt-5">
    <div class="container-fluid">
        <div class="row row-eq-height">
            <!-- Video of the day -->
            <div class="col-12 col-lg-6 col-xl-8">
                <section class="video">
                    <div class="header">
                        <h4 class="category m-0">Video of the day</h4>
                        <p class="date d-block m-0 pt-1 pb-2 font-weight-normal">11-20-2018</p>
                    </div>
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <article class="carousel-item active">
                                <div class="row align-items-stretch">
                                    <div class="col meta">
                                        <h6 class="title m-0 pb-3">How Earth's oceans and atmosphere impact each other</h6>
                                    </div>
                                    <div class="col-auto contols">
                                        <a class="prev" href="#carousel" role="button" data-slide="prev">
                                            <span class="icon carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="next" href="#carousel" role="button"
                                           data-slide="next">
                                                                                                    <span class="icon carousel-control-next-icon bg-dark"
                                                                                                          aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <img class="img-fluid" src="assets/images/image-of-the-day.jpg"
                                     alt="Image of the Day" />
                            </article>
                        </div>
                    </div>
                </section><!--.video-->
            </div>
            <div class="col-12 col-lg-6 col-xl-4">
                <section class="image">
                    <div class="header">
                        <h4 class="category m-0">Image of the day</h4>
                        <p class="date d-block m-0 pt-1 pb-2 font-weight-normal">
                            11-20-2018</p>
                    </div>
                    <div id="carousel2" class="carousel slide"
                         data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <article class="carousel-item active">
                                <div class="row no-gutters align-items-stretch">
                                    <div class="col meta">
                                        <h6 class="title m-0 pb-3">How Earth's
                                            oceans and atmosphere impact each
                                            other</h6>
                                    </div>
                                    <div class="col-auto contols">
                                        <a class="prev" href="#carousel2"
                                           role="button"
                                           data-slide="prev">
                                            <span class="icon carousel-control-prev-icon bg-dark"
                                                  aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="next" href="#carousel2"
                                           role="button" data-slide="next">
                                            <span class="icon carousel-control-next-icon bg-dark"
                                                  aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <img class="img-fluid"
                                     src="assets/images/image-of-the-day.jpg"
                                     alt="Image of the Day"/>
                            </article>
                        </div>
                    </div>
                </section><!--.image--></div>
        </div><!--row-->
    </div>container
</section><!--#best-of-day-->
<!--Environment section-->
<section id="environment" class="category-section">
    <div class="container">
        <div class="row">
            <section class="col-md-12 col-lg-8 card">
                <h3 class="category text-uppercase">Environment top stories</h3>
                <article class="featured">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <img class="img-fluid d-block d-sm-none" src="http://placehold.it/960x640"
                                 alt="Featured image">
                            <img class="img-fluid d-none d-sm-block" src="http://placehold.it/640x480"
                                 alt="Featured image">

                        </div>
                        <div class="col-xs-12 col-md-6">
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
                </article><!--featured-->
            </section><!--card-->
            <!--Top stories sidebar-->
            <section class="col-md-12 col-lg-4 sidebar">
                <div class="top-stories">
                    <ul class="row list-unstyled m-0">
                        <li class="col-xs-12 col-md-6 col-lg-12 mb-3">
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
                        <li class="col-xs-12 col-md-6 col-lg-12 mb-3">
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
                        <li class="col-xs-12 col-md-6 col-lg-12 mb-3">
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
                        <li class="col-xs-12 col-md-6 col-lg-12 mb-3">
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
            </section><!--sidebar-->
            <!--Ad space-->
            <section class="ad-space col-md-6 d-none d-sm-flex d-md-none">
                <img src="http://www.placehold.it/640x480" alt="" class="ad img-fluid">
            </section>
        </div><!--row-->
    </div>
</section>
<!-- Explore Plants and Animals -->
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
                    <div class="float-right float-sm-none">
                        <h1 class="title">EXPLORE <br> ANIMALS</h1>
                        <button type="button" class="btn btn-outline-primary btn-explore">VIEW OUR ARCHIVE
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Top videos-->
<section id="top-videos">
    <div class="container">
        <h3 class="category text-uppercase d-block">Week's top videos</h3>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 video">
                <div class="w-100 embed-responsive embed-responsive-16by9 d-block d-sm-none">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                            allowfullscreen></iframe>
                </div>
                <div class="w-100 embed-responsive embed-responsive-4by3 d-none d-sm-block">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                            allowfullscreen></iframe>
                </div>
                <div class="meta d-flex mb-2 pt-2">
                    <span class="tag mr-5">Science</span>
                    <span class="date">21-12-2020</span>
                </div> <!--meta-->
                <a href="#" class="d-block mb-2">
                    <h5 class="title m-0">
                        <a href="#">
                            Video title
                        </a>
                    </h5>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 video">
                <div class="w-100 embed-responsive embed-responsive-16by9 d-block d-sm-none">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                            allowfullscreen></iframe>
                </div>
                <div class="w-100 embed-responsive embed-responsive-4by3 d-none d-sm-block">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                            allowfullscreen></iframe>
                </div>
                <div class="meta d-flex mb-2 pt-2">
                    <span class="tag mr-5">Science</span>
                    <span class="date">21-12-2020</span>
                </div> <!--meta-->
                <a href="#" class="d-block mb-2">
                    <h5 class="title m-0">
                        <a href="#">
                            Video title
                        </a>
                    </h5>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 video">
                <div class="w-100 embed-responsive embed-responsive-16by9 d-block d-sm-none">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                            allowfullscreen></iframe>
                </div>
                <div class="w-100 embed-responsive embed-responsive-4by3 d-none d-sm-block">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                            allowfullscreen></iframe>
                </div>
                <div class="meta d-flex mb-2 pt-2">
                    <span class="tag mr-5">Science</span>
                    <span class="date">21-12-2020</span>
                </div> <!--meta-->
                <a href="#" class="d-block mb-2">
                    <h5 class="title m-0">
                        <a href="#">
                            Video title
                        </a>
                    </h5>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 video d-none d-sm-block d-md-none">
                <div class="w-100 embed-responsive embed-responsive-16by9 d-block d-sm-none">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                            allowfullscreen></iframe>
                </div>
                <div class="w-100 embed-responsive embed-responsive-4by3 d-none d-sm-block">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                            allowfullscreen></iframe>
                </div>
                <div class="meta d-flex mb-2 pt-2">
                    <span class="tag mr-5">Science</span>
                    <span class="date">21-12-2020</span>
                </div> <!--meta-->
                <a href="#" class="d-block mb-2">
                    <h5 class="title m-0">
                        <a href="#">
                            Video title
                        </a>
                    </h5>
                </a>
            </div>
        </div>
    </div>
</section>
<!--Lifestyle section-->
<section id="lifestyle" class="category-section">
    <div class="container">
        <div class="row">
            <section class="col-12 card">
                <h3 class="category text-uppercase">Lifestyle top stories</h3>
                <!--Featured article-->
                <article class="featured">
                    <img class="img-fluid" src="http://placehold.it/960x640" alt="Featured image">
                    <div class="card-body p-0 pt-2">
                        <div class="meta d-flex mb-2">
                            <span class="date">21-12-2020</span>
                        </div> <!--meta-->
                        <h2 class="title mb-2">
                            <a href="#" class="d-block">
                                Mysteries of the mountains
                            </a>
                        </h2>
                        <p class="text mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque culpa est exercitationem, ipsum maxime officiis temporibus voluptatum! Eos hic impedit iure laboriosam optio quas ut.
                            odit.</p>
                        <a href="#" class="btn-link read-more">Read more...</a>
                    </div><!--card-body-->
                </article><!--featured-->
            </section><!--card-->
            <section class="col-xs-12 col-md sidebar">
                <div class="top-stories">
                    <ul class="row list-unstyled m-0">
                        <li class="col-xs-12 col-md-6 mb-3">
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
                        <li class="col-xs-12 col-md-6 mb-3">
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
                        <li class="col-xs-12 col-md-6 mb-3">
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
                        <li class="col-xs-12 col-md-6 mb-3">
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
            </section><!--sidebar-->
            <!--Ad space-->
            <section class="ad-space col-md-6 d-flex">
                <img src="http://www.placehold.it/640x480" alt="" class="ad img-fluid">
            </section>
        </div>
    </div>
</section>
<!--Newsletter-->
<?php include "includes/newsletter.php" ?>

<!-- Footer -->
<?php include "includes/footer.php"; ?>
