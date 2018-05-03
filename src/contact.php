<?php
  $title = "Earth.com - Contact Us";
  include "./includes/head.php";
  include "includes/header.php";
?>
<section id="contact">
    <div class="container-fluid bg-white">
        <div class="col-12">
            <h1 class="title text-uppercase m-0">Contact Us</h1>
        </div>
    </div>
    <div class="container">
        <div class="row wrapper">
            <div class="col-lg-8">
                <form id="contact-form" action="" method="post">
                    <div class="row">
                        <div class="col-md-6 contact-col">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message"
                                          rows="8"></textarea>
                            </div>
                        </div>
                        <div class="col-12 btn-col">
                            <button type="submit"
                                    class="btn btn-primary btn-contact">SEND
                                MESSAGE</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 address-col d-flex">
                <address>
                    <h2 class="subtitle">Office</h2>
                    Darwinberg <br />
                    95 Brennan Junction Suite <br />
                    <a href="tel:4413308325">441-330-8325</a> <br />
                    <a href="mailto:hello@earth.com">hello@earth.com</a>
                </address>
                <address>
                    <h2 class="subtitle">Organizations</h2>
                    <a href="mailto:partnerships@earth.com">partnerships@earth.com</a>
                </address>
            </div>
        </div>
    </div>
</section>
<!-- News Coming Your Way -->
<?php include "includes/newsletter.php" ?>

<?php
  include "includes/footer.php";
?>
