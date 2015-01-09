<?php
$pageTitle = 'Home';
$current = "home";
include 'modules/main/head.php';
include 'modules/main/header.php';
?>

<img src="/assets/images/main-lessons.jpg" alt="Swimming Lessons" class="home-graphic" />
<section class="home-learnToSwim">
  <div class="ss-wrapper">
    <h1>Learning to swim is a necessity, not a luxury!</h1>
    <p class="home-blurb">Florida Swim School offers swim lessons for all ages and abilities in Boca Raton, FL, beginning at the age of 3 months.  Our goal is that the students keep swimming as their skills become stronger to ensure their safety and to develop a love for water.</p>
    <?php include 'modules/link_gallery.php' ?>
</section>

<?php include 'modules/main/footer.php'; ?>