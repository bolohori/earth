<?php
  include "./includes/head.php";
  include "./includes/header.php";

  $title = "Earth.com - Home Page";
?>
<!--News of the day section-->
<section id="notd" class="category-section">
    <div class="container">
        <div class="row">
            <!--Featured article-->
            <section class="col-sm-12">
                <article class="card featured">
                    <img class="card-img" src="http://placehold.it/768x432" alt="Card image">
                    <div class="card-img-overlay pl-0 pt-4">
                        <h4 class="category badge badge-dark text-uppercase rounded-0">News of the Day</h4>
                    </div> <!--overlay-->
                    <div class="card-body p-0 pt-2 pb-4">
                        <div class="meta d-flex mb-2">
                            <span class="tag mr-5">Environment</span>
                            <span class="date">21-12-2020</span>
                        </div> <!--meta-->

                        <h2 class="title mb-2">
                            <a href="#" class="d-block">
                                John Doe
                            </a>
                        </h2>
                        <p class="text mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem,
                            odit.</p>
                        <a href="#" class="btn-link read-more">Read more...</a>
                    </div><!--card-body-->
                </article><!--featured-->
            </section><!--card-->
            <!--Top stories sidebar-->
            <section class="col-xs-12 col-sm sidebar">
                <div class="top-stories">
                    <h4 class="category mb-4">
                        Top Stories
                    </h4>
                    <ul class="list-unstyled m-0">
                        <li class="mb-3">
                            <article class="story row no-gutters">
                                <div class="image mr-2 col-auto">
                                    <img class="img-fluid" src="http://placehold.it/100x75" alt="Card image">
                                </div><!--image-->
                                <div class="body align-self-stretch d-flex flex-column flex col">
                                    <div class="meta mb-1 d-flex flex-wrap">
                                        <span class="tag mr-5">Environment</span>
                                        <span class="date">21-12-2020</span>
                                    </div><!--meta-->
                                    <h5 class="title m-0">
                                        <a href="#">Coventry City Guide Including Coventry hotels</a>
                                    </h5>
                                </div><!--article-body-->
                            </article>
                        </li>
                        <li class="mb-3">
                            <article class="story row no-gutters">
                                <div class="image mr-2 col-auto">
                                    <img class="img-fluid" src="http://placehold.it/100x75" alt="Card image">
                                </div><!--image-->
                                <div class="body align-self-stretch d-flex flex-column flex col">
                                    <div class="meta mb-1 d-flex flex-wrap">
                                        <span class="tag mr-5">Environment</span>
                                        <span class="date">21-12-2020</span>
                                    </div><!--meta-->
                                    <h5 class="title m-0">
                                        <a href="#">Coventry City Guide Including Coventry hotels</a>
                                    </h5>
                                </div><!--article-body-->
                            </article>
                        </li>
                        <li class="mb-3">
                            <article class="story row no-gutters">
                                <div class="image mr-2 col-auto">
                                    <img class="img-fluid" src="http://placehold.it/100x75" alt="Card image">
                                </div><!--image-->
                                <div class="body align-self-stretch d-flex flex-column flex col">
                                    <div class="meta mb-1 d-flex flex-wrap">
                                        <span class="tag mr-5">Environment</span>
                                        <span class="date">21-12-2020</span>
                                    </div><!--meta-->
                                    <h5 class="title m-0">
                                        <a href="#">Coventry City Guide Including Coventry hotels</a>
                                    </h5>
                                </div><!--article-body-->
                            </article>
                        </li>
                    </ul>
                </div><!--top-stories-->
            </section><!--sidebar-->
            <!--Ad space-->
            <section class="ad col-xs-12 col-sm d-flex">
                <img src="http://www.placehold.it/640x480" class="img-fluid align-self-center" alt="">
            </section>
        </div>
    </div>
</section>
<!-- Video and image of the day -->
<section id="best-of-day" class="category-section">
    <div class="container-fluid">
        <div class="row no-gutters">
            <!-- Video of the day -->
            <section class="col-12 video mt-5">
                <div class="header">
                    <h4 class="category m-0">Video of the day</h4>
                    <p class="date d-block m-0 pt-1 pb-2 font-weight-normal">11-20-2018</p>
                </div>
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <article class="carousel-item active">
                            <div class="row no-gutters align-items-stretch">
                                <div class="col meta">
                                    <h6 class="title m-0 pb-3">How Earth's oceans and atmosphere impact each other</h6>
                                </div>
                                <div class="col-auto contols">
                                    <a class="prev" href="#carousel" role="button"
                                       data-slide="prev">
                                                                                                <span class="icon carousel-control-prev-icon bg-dark"
                                                                                                      aria-hidden="true"></span>
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
            </section><!--.image-->
            <section class="col-12 image mt-2">
                <div class="header">
                    <h4 class="category m-0">Image of the day</h4>
                    <p class="date d-block m-0 pt-1 pb-2 font-weight-normal">11-20-2018</p>
                </div>
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <article class="carousel-item active">
                            <div class="row no-gutters align-items-stretch">
                                <div class="col meta">
                                    <h6 class="title m-0 pb-3">How Earth's oceans and atmosphere impact each other</h6>
                                </div>
                                <div class="col-auto contols">
                                    <a class="prev" href="#carousel" role="button"
                                       data-slide="prev">
                                                                                <span class="icon carousel-control-prev-icon bg-dark"
                                                                                      aria-hidden="true"></span>
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
            </section><!--.image-->
        </div><!--row-->
    </div>container
</section><!--#best-of-day-->
<!--Environment section-->
<section id="environment" class="category-section">
    <div class="container">
        <div class="row">
            <section class="col-12 card">
                <h3 class="category text-uppercase">Environment top stories</h3>
                <article class="featured">
                    <img class="img-fluid" src="http://placehold.it/768x432" alt="Featured image">
                    <div class="card-body p-0 pt-2 pb-4">
                        <div class="meta d-flex mb-2">
                            <span class="date">21-12-2020</span>
                        </div> <!--meta-->
                        <h2 class="title mb-2">
                            <a href="#" class="d-block">
                                John Doe
                            </a>
                        </h2>
                        <p class="text mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem,
                            odit.</p>
                        <a href="#" class="btn-link read-more">Read more...</a>
                    </div><!--card-body-->
                </article><!--featured-->
            </section><!--card-->
            <!--Top stories sidebar-->
            <section class="col-xs-12 col-sm sidebar">
                <div class="top-stories">
                    <ul class="list-unstyled m-0">
                        <li class="mb-3">
                            <article class="story row no-gutters">
                                <div class="image mr-2 col-auto">
                                    <img class="img-fluid" src="http://placehold.it/100x75" alt="Card image">
                                </div><!--image-->
                                <div class="body align-self-stretch d-flex flex-column flex col">
                                    <div class="meta mb-1 d-flex flex-wrap">
                                        <span class="tag mr-5">Environment</span>
                                        <span class="date">21-12-2020</span>
                                    </div><!--meta-->
                                    <h5 class="title m-0">
                                        <a href="#">Coventry City Guide Including Coventry hotels</a>
                                    </h5>
                                </div><!--article-body-->
                            </article>
                        </li>
                        <li class="mb-3">
                            <article class="story row no-gutters">
                                <div class="image mr-2 col-auto">
                                    <img class="img-fluid" src="http://placehold.it/100x75" alt="Card image">
                                </div><!--image-->
                                <div class="body align-self-stretch d-flex flex-column flex col">
                                    <div class="meta mb-1 d-flex flex-wrap">
                                        <span class="tag mr-5">Environment</span>
                                        <span class="date">21-12-2020</span>
                                    </div><!--meta-->
                                    <h5 class="title m-0">
                                        <a href="#">Coventry City Guide Including Coventry hotels</a>
                                    </h5>
                                </div><!--article-body-->
                            </article>
                        </li>
                        <li class="mb-3">
                            <article class="story row no-gutters">
                                <div class="image mr-2 col-auto">
                                    <img class="img-fluid" src="http://placehold.it/100x75" alt="Card image">
                                </div><!--image-->
                                <div class="body align-self-stretch d-flex flex-column flex col">
                                    <div class="meta mb-1 d-flex flex-wrap">
                                        <span class="tag mr-5">Environment</span>
                                        <span class="date">21-12-2020</span>
                                    </div><!--meta-->
                                    <h5 class="title m-0">
                                        <a href="#">Coventry City Guide Including Coventry hotels</a>
                                    </h5>
                                </div><!--article-body-->
                            </article>
                        </li>
                    </ul>
                </div><!--top-stories-->
            </section><!--sidebar-->
            <!--Ad space-->
            <section class="ad-space col-sm-6 d-flex">
                <img src="http://www.placehold.it/640x480" alt="" class="ad img-fluid">
            </section>
        </div><!--row-->
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
<!--Top videos-->
<section id="top-videos">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="category text-uppercase mb-3">Week's top videos</h3>
                <div class="w-100 embed-responsive embed-responsive-16by9">
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
                    <img class="img-fluid" src="http://placehold.it/768x432" alt="Featured image">
                    <div class="card-body p-0 pt-2 pb-4">
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
            <section class="col-xs-12 col-sm sidebar">
                            <div class="top-stories">
                                <h4 class="category mb-4">
                                    Top Stories
                                </h4>
                                <ul class="list-unstyled m-0">
                                    <li class="mb-3">
                                        <article class="story row no-gutters">
                                            <div class="image mr-2 col-auto">
                                                <img class="img-fluid" src="http://placehold.it/100x75" alt="Card image">
                                            </div><!--image-->
                                            <div class="body align-self-stretch d-flex flex-column flex col">
                                                <div class="meta mb-1 d-flex flex-wrap">
                                                    <span class="tag mr-5">Environment</span>
                                                    <span class="date">21-12-2020</span>
                                                </div><!--meta-->
                                                <h5 class="title m-0">
                                                    <a href="#">Coventry City Guide Including Coventry hotels</a>
                                                </h5>
                                            </div><!--article-body-->
                                        </article>
                                    </li>
                                    <li class="mb-3">
                                        <article class="story row no-gutters">
                                            <div class="image mr-2 col-auto">
                                                <img class="img-fluid" src="http://placehold.it/100x75" alt="Card image">
                                            </div><!--image-->
                                            <div class="body align-self-stretch d-flex flex-column flex col">
                                                <div class="meta mb-1 d-flex flex-wrap">
                                                    <span class="tag mr-5">Environment</span>
                                                    <span class="date">21-12-2020</span>
                                                </div><!--meta-->
                                                <h5 class="title m-0">
                                                    <a href="#">Coventry City Guide Including Coventry hotels</a>
                                                </h5>
                                            </div><!--article-body-->
                                        </article>
                                    </li>
                                    <li class="mb-3">
                                        <article class="story row no-gutters">
                                            <div class="image mr-2 col-auto">
                                                <img class="img-fluid" src="http://placehold.it/100x75" alt="Card image">
                                            </div><!--image-->
                                            <div class="body align-self-stretch d-flex flex-column flex col">
                                                <div class="meta mb-1 d-flex flex-wrap">
                                                    <span class="tag mr-5">Environment</span>
                                                    <span class="date">21-12-2020</span>
                                                </div><!--meta-->
                                                <h5 class="title m-0">
                                                    <a href="#">Coventry City Guide Including Coventry hotels</a>
                                                </h5>
                                            </div><!--article-body-->
                                        </article>
                                    </li>
                                </ul>
                            </div><!--top-stories-->
                        </section><!--sidebar-->
        </div>
    </div>
</section>
<!--Newsletter-->
<?php include "includes/newsletter.php" ?>

<!-- Footer -->
<?php include "includes/footer.php"; ?>