<?php
    include "includes/head.php";
    include "includes/header.php";
?>

<section id="newsletter-header">
    <div class="bg w-100">
        <div class="container content">
            <a href="#" class="btn-link"><i class="fas fa-chevron-left mr-2"></i>Back</a>
            <div class="row">
                    <div class="text col-auto col-md-6 d-flex justify-content-center flex-column pb-5 pb-md-0">
                        <h1 class="headline text-uppercase">Our world's <br>appart!</h1>
                        <p class="text">Stay in the loop with what’s happenning <br> on our planet. From A to Z, we send over <br>your way once a week.</p>
                        <div class="row no-gutters">
                            <div class="col-12 col-lg-6">
                                <?php include "includes/nl-form.php"; ?>
                            </div>
                        </div>
                    </div>
                    <div class="image col col-md-6 d-flex align-items-end d-md-block">
                        <img class="img-fluid w-auto" src="./assets/images/pigeon3.png" alt="Pigeon">
                    </div>
                </div>
            </div>
        </div>
</section>

<?php
    include "includes/footer.php";
?>
