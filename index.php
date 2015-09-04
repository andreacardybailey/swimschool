<?php
$pageTitle = 'Home';
$current = "home";
include 'modules/main/head.php';
include 'modules/main/header.php';
?>
<div id="slider" class="flexslider">
	<ul class="slides">
		<li>
			<img src="/assets/images/rotator/3.jpg" srcset="/assets/images/rotator/small/3.jpg 810w, /assets/images/rotator/3.jpg 1964w", alt="Florida Swim School Gallery">
		</li>
		<li>
			<img src="/assets/images/rotator/1.jpg" srcset="/assets/images/rotator/small/1.jpg 810w, /assets/images/rotator/1.jpg 1964w" alt="Florida Swim School Gallery">
		</li>
		<li>
			<img src="/assets/images/rotator/2.jpg" srcset="/assets/images/rotator/small/2.jpg 810w, /assets/images/rotator/2.jpg 1964w", alt="Florida Swim School Gallery">
		</li>
	</ul>
</div>

<!-- <img src="/assets/images/main-lessons.jpg" alt="Swimming Lessons" class="home-graphic" /> -->
<section class="home-learnToSwim">
  <div class="ss-wrapper">
    <h1>Learning to swim is a necessity, not a luxury!</h1>
    <p class="home-blurb">Florida Swim School in Boca Raton, Florida offers swim lessons for all ages and abilities, beginning at 3 months.  Our goal is that the students keep swimming as their skills become stronger to ensure their safety and to develop a love for water.</p>
    <p class="home-blurb"><em>School’s Out Aqua-Kids Day Camp</em> registration is now open. New camp dates have been added for September 14, 23, 28, and 29! The day camp is $75 and will take place from 9am - 3pm at our new indoor location. <a href="https://floridaswimschoolregistration.com:8102/Loginuser.aspx?lo=1" target="_blank">Click here</a> to register!</p>
	

    <?php include 'modules/link_gallery.php' ?>
</section>

<?php include 'modules/main/footer.php'; ?>