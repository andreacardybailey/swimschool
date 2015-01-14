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
    <p class="home-blurb">Florida Swim School in Boca Raton, Florida offers swim lessons for all ages and abilities, beginning at 3 months.  Our goal is that the students keep swimming as their skills become stronger to ensure their safety and to develop a love for water. This is my changes.</p>
    <?php include 'modules/link_gallery.php' ?>
</section>

<?php include 'modules/main/footer.php'; ?>