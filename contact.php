<?php
  $title = "Earth.com - Contact Us";
  include "includes/header.php";
?>

<div class="container contact-page-title-container">
  <h1 class="contact-page-title">Contact Us</h1>
</div>

<div class="container-big contact-us-container">
  <div class="row">
    <div class="col-md-8">
      <form class="contact-form" action="" method="post">
        <div class="row">
          <div class="col-md-6 contact-form-column">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="">
            </div>
            <div class="form-group">
              <label for="email">Name</label>
              <input type="email" class="form-control" id="email" placeholder="">
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" id="subject" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary contact-btn">SEND MESSAGE</button>
          </div>
          <div class="col-md-6">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="8"></textarea>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-4 address-column">
      <h2 class="contact-subtitle">Office</h2>
      <address>
        Darwinberg <br />
        95 Brennan Junction Suite <br />
        441-330-8325 <br />
        hello@earth.com
      </address>
      <h2 class="contact-subtitle">Organizations</h2>
      <address>
        partnerships@earth.com
      </address>
    </div>
  </div>
</div>

<!-- News Coming Your Way -->
<?php include "includes/newsletter.php" ?>

<?php
  include "includes/footer.php";
?>
