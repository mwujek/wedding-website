<?php
/*
Template Name: People Template
*/

$url = get_template_directory_uri(); 
?>


<?php get_header(); ?>


<!-- <section class="subpage-hero">
    <div class="pond">
        <h2>Meet our people</h2>
        <h3>The wedding party</h3>
    </div>
</section> -->

<div style="margin-bottom: 60px; width: 100%; height: 20px;"></div>
<?php

include('slides_alex.php');
include('slides_wuj.php');
include('slides_both.php');

?>





        



<script src="<?php echo($url); ?>/js/slides.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.pkgd.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.min.css" rel="stylesheet"/>

<?php get_footer(); ?>