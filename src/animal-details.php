<?php
  /* Insert page's title */
  $title = "Animal details";

  /* Insert page's menu section ID for custom navigation elements */
  $navId = 'animal-details-menu';

  /* Logo image url*/
  $logoUrl = "assets/images/logos/logo-white.png";
  include "includes/head.php";
  include "includes/header.php";
?>

<section id="animal-details" class="details-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8">
                <article class="card featured"><!--start of featured article-->
                    <div class="position-relative">
                        <img class="img-fluid h-100" src="./assets/images/placeholder%20images/animal-detail.jpg" alt="Card image">
                        <div class="card-img-overlay pl-0 pt-4">
                            <h4 class="category badge badge-dark text-uppercase rounded-0">Endangered</h4>
                        </div>
                        <!--overlay-->
                    </div><!--article image container-->
                    <div class="card-body p-0 pt-2 pt-lg-3">
                        <div class="meta d-flex">
                            <span class="date">21-12-2020</span>
                        </div>
                        <!--meta-->

                        <h2 class="title mb-4">
                            <a href="#" class="d-block">
                                Owl (Orycteropus afer)
                            </a>
                        </h2>
                        <p class="text mb-3">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.
                            It’s exciting to think about setting up your own viewing station whether that is on the deck
                            of your home or having a powerful but mobile telescope set up to take to the remove countryside
                            to really get a good shot at some breath taking star gazing. The last thing we would want
                            to do is to take away any of the “fun” of your hobby of astronomy because the joy of what
                            we do as star gazers is a big part of the appeal. But unlike many other hobbies, ours is
                            a passion of science, of learning and of discovery. And don’t kid yourself, even a hobbyist
                            with a limited telescopic set up can see some amazing things in the stars. So let’s be sure
                            you invest in a solid piece of equipment that you can continue to grow with as your knowledge
                            and ability as an astronomer grows. But how do we do that?</p>
                        <h3 class="category subtitle mt-4 mb-3">
                            DETAILED INFORMATION
                        </h3>
                        <div id="animal-info-table"class="info-table w-100">
                            <div class="row no-gutters tr">
                                <div class="col-auto th">
                                    <span>Kingdom</span>
                                </div>
                                <div class="col td">
                                    <span>Animalia</span>
                                </div>
                            </div><!--table row-->
                            <div class="row no-gutters tr">
                                <div class="col-auto th">
                                    <span>Kingdom</span>
                                </div>
                                <div class="col td">
                                    <span>Animalia</span>
                                </div>
                            </div><!--table row-->
                            <div class="row no-gutters tr">
                                <div class="col-auto th">
                                    <span>Kingdom</span>
                                </div>
                                <div class="col td">
                                    <span>Animalia</span>
                                </div>
                            </div><!--table row-->
                            <div class="row no-gutters tr">
                                <div class="col-auto th">
                                    <span>Kingdom</span>
                                </div>
                                <div class="col td">
                                    <span>Animalia</span>
                                </div>
                            </div><!--table row-->
                            <div class="row no-gutters tr">
                                <div class="col-auto th">
                                    <span>Kingdom</span>
                                </div>
                                <div class="col td">
                                    <span>Animalia</span>
                                </div>
                            </div><!--table row-->
                            <div class="row no-gutters tr">
                                <div class="col-auto th">
                                    <span>Kingdom</span>
                                </div>
                                <div class="col td">
                                    <span>Animalia</span>
                                </div>
                            </div><!--table row-->
                        </div><!--animal info table-->
                        <div class="gallery-section mb-4">
                            <h3 class="category subtitle text-uppercase">Photo Gallery</h3>
                            <div class="row">
                                <div class="col-12 col-md-4 col-lg-3 mb-4 gallery-image">
                                    <a href="#">
                                        <img src="./assets/images/placeholder images/animal-detail.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3 mb-4 gallery-image">
                                    <a href="#">
                                        <img src="./assets/images/placeholder images/animal-detail.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3 mb-4 gallery-image">
                                    <a href="#">
                                        <img src="./assets/images/placeholder images/animal-detail.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3 mb-4 gallery-image">
                                    <a href="#">
                                        <img src="./assets/images/placeholder images/animal-detail.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3 mb-4 gallery-image">
                                    <a href="#">
                                        <img src="./assets/images/placeholder images/animal-detail.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3 mb-4 gallery-image">
                                    <a href="#">
                                        <img src="./assets/images/placeholder images/animal-detail.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3 mb-4 gallery-image">
                                    <a href="#">
                                        <img src="./assets/images/placeholder images/animal-detail.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3 mb-4 gallery-image">
                                    <a href="#">
                                        <img src="./assets/images/placeholder images/animal-detail.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div><!--gallery section-->
                        <div class="w-100 d-flex justify-content-between">
                            <a href="animals.php" class="btn-link prev-link pb-2">
                                <i class="fas fa-angle-left"></i> Back to full archive</a>
                            <a href="#" class="btn-link next-link pb-2">View next animal in list
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div><!--Next and previous buttons container-->
                    </div><!--card body - end of article content-->
                </article>
            </div>
            <section class="col-12 col-md-6 col-lg-4 sidebar">
                <div class="ad d-flex text-center mb-5">
                    <img class="mr-auto w-auto d-block" src="./assets/images/placeholder%20images/ad-bet.jpg" alt="">
                </div>
                <h4 class="category">Related Videos</h4>
                <section class="article-list">
                    <article class="story row no-gutters">
                        <div class="image col-auto col-md-4 pr-2 pr-md-3">
                            <img class="img-fluid h-100 d-none d-md-block" src="./assets/images/placeholder%20images/medium-thumb.jpg" alt="Card image">
                            <img class="img-fluid h-100 d-block d-md-none" src="./assets/images/placeholder%20images/sidebar-thumb.jpg" alt="Card image">
                        </div>
                        <!--image-->
                        <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 align-self-stretch d-flex flex-column col pr-2 ">
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
                            <img class="img-fluid h-100 d-none d-md-block" src="./assets/images/placeholder%20images/medium-thumb.jpg" alt="Card image">
                            <img class="img-fluid h-100 d-block d-md-none" src="./assets/images/placeholder%20images/sidebar-thumb.jpg" alt="Card image">
                        </div>
                        <!--image-->
                        <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 align-self-stretch d-flex flex-column col pr-2 ">
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
                            <img class="img-fluid h-100 d-none d-md-block" src="./assets/images/placeholder%20images/medium-thumb.jpg" alt="Card image">
                            <img class="img-fluid h-100 d-block d-md-none" src="./assets/images/placeholder%20images/sidebar-thumb.jpg" alt="Card image">
                        </div>
                        <!--image-->
                        <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 align-self-stretch d-flex flex-column col pr-2 ">
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
                            <img class="img-fluid h-100 d-none d-md-block" src="./assets/images/placeholder%20images/medium-thumb.jpg" alt="Card image">
                            <img class="img-fluid h-100 d-block d-md-none" src="./assets/images/placeholder%20images/sidebar-thumb.jpg" alt="Card image">
                        </div>
                        <!--image-->
                        <div class="body align-self-stretch d-flex flex-column col col-md-8 pr-2 align-self-stretch d-flex flex-column col pr-2 ">
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
                </section>
                <!--Sidebar-->
            </section>
        </div>
    </div>
</section>
<div class="d-none d-md-block">
    <?php include "includes/animal-friends.php"; ?>
</div>
<section class="animal-videos mt-5">
    <div class="container">
        <h3 class="category text-uppercase">Animal Videos</h3>
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="row">
                    <div class="col">
                        <article class="card featured">
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
                        </article><!--featured article-->
                        <article class="card featured">
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
                        </article><!--featured article-->
                    </div><!--col-->
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
            </div>
            <div class="col-12 col-md-6 col-lg-4 article-list sidebar">
                <div class="ad d-flex text-center mb-5">
                    <img class="mr-auto w-auto d-block" src="./assets/images/placeholder%20images/ad-bet.jpg" alt="">
                </div>
            </div>

        </div>
    </div>
</section><!--animals-->
<?php
include "includes/newsletter.php";
include "includes/footer.php";
?>
