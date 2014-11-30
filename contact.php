<?php
$pageTitle = 'Contact Us';
$current = "contact";
include 'modules/main/head.php';
include 'modules/main/header.php';
?>
<section class="main">
  <div class="ss-wrapper">
    <section class="contact">
      <h1>Contact Us</h1>
      <section class="contact-form">
        <?php
        if ($_POST["email"]<>'') {
            $ToEmail = 'kara@flswimschool.com';
            $EmailSubject = 'Florida Swim School Contact Form';
            $mailheader = "From: ".$_POST["email"]."\r\n";
            $mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
            $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
            $MESSAGE_BODY = "<strong>First Name:</strong> ".$_POST["fname"]."<br>";
            $MESSAGE_BODY .= "<strong>Last Name:</strong> ".$_POST["lname"]."<br>";
            $MESSAGE_BODY .= "<strong>Email:</strong> ".$_POST["email"]."<br>";
            $MESSAGE_BODY .= "<strong>Subject:</strong> ".$_POST["subject"]."<br>";
            $MESSAGE_BODY .= "<strong>Message:</strong> ".nl2br($_POST["message"])."<br>";
            mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader);
        ?>
        <h2>Thank you for contacting us!</h2>
        <p>We will get back to you in 48-72 hours.</p>
        <?php
        } else {
        ?>
        <h2>Send us a message</h2>

        <form action="contact.php" method="post" id="contact" autocomplete="on">
          <div>
            <label for="name">First Name: *</label>
            <input autocomplete="on" name="fname" type="text" autocomplete="fname" id="fname">
          </div>
          <div>
            <label for="name">Last Name: *</label>
            <input autocomplete="on" name="lname" type="text" autocomplete="lname" id="lname">
          </div>
          <div>
            <label for="email">Email: *</label>
            <input autocomplete="on" name="email" type="text" autocomplete="email" id="email">
          </div>
          <div>
            <label for="subject">Subject: *</label>
            <input name="subject" type="text" id="subject">
          </div>
          <div>
            <label for="message">Message: *</label>
            <textarea name="message" id="message" class="bodytext"></textarea>
          </div>
          <div>
            <input type="submit" name="Submit" value="Submit">
          </div>
        </form>
        <?php
        };
        ?>
      </section>

      <section class="contact-location">
        <div class="contact-googleMap">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1787.1154526084565!2d-80.14549363448566!3d26.38372674679845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d91e8ab87e9c29%3A0x9d176ae5b1c87874!2sSaint+Andrew&#39;s+School!5e0!3m2!1sen!2sus!4v1416692821549" width="600" height="450" frameborder="0" style="border:0"></iframe>
        </div>
        <ul>
          <li>Florida Swim School at Saint Andrew's School</li>
          <li>3900 Jog Road</li>
          <li>Boca Raton, FL 33434</li>
          <li>Phone: 561-210-2129</li>
          <li>Email Kara: <a href="mailto:kara@flswimschool.com" target="_blank">kara@flswimschool.com</a></li>
          <li>Email Cate: <a href="mailto:cate@flswimschool.com" target="_blank">cate@flswimschool.com</a></li>
        </ul>
      </section>
    </section>
  </div>
</section>



<?php include 'modules/main/footer.php'; ?>