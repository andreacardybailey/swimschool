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
            $ToEmail = 'andrea.m.cardy@gmail.com';
            $EmailSubject = 'Florida Swim School Contact Form';
            $mailheader = "From: ".$_POST["email"]."\r\n";
            $mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
            $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
            $MESSAGE_BODY = "Name: ".$_POST["name"]."";
            $MESSAGE_BODY .= "Email: ".$_POST["email"]."";
            $MESSAGE_BODY .= "Subject: ".$_POST["subject"]."";
            $MESSAGE_BODY .= "Comment: ".nl2br($_POST["message"])."";
            mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
        ?>
        Thank you for contacting us! We will get back to you in 48-72 hours.
        <?php
        } else {
        ?>
        <h2>Send us a message</h2>
        <form action="contact.php" method="post" id="contact">
          <div>
            <label for="name">Name: *</label>
            <input name="name" type="text" id="name">
          </div>
          <div>
            <label for="email">Email: *</label>
            <input name="email" type="text" id="email">
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