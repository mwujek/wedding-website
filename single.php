<?php
/**
 * The Template for displaying all single posts
*/
?>

<?php get_header(); ?>
<?php 
$h1 = get_post()->post_title;
$crumb = get_post()->post_title;
$date = get_post()->post_date;

?>
<div id="main" class="content-container">

    <div id="content">
    <div class="stories-blog-container">

        <div class="crumb"><a href="/stories">Stories</a> > <?php echo($crumb); ?></div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php  $faqtitle = "<h1 class='story-title'>{$h1}</h1>";
            echo($faqtitle);
            echo('<h2>'. date('F jS, Y', strtotime($date)).'</h2>');
            ?>
            <?php the_content(__('(more...)')); ?>
            <hr> <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>


                </div> <!-- end of blog container (max size) -->
            </div>
            
    </div>
    <div class="cta">
        <div class="cta-inner">
            <a href="/stories" class="stories-blog-btn">Return to Blog</a>
        </div>
    </div>
    <?php get_footer(); ?>
		
		
		
		
		
		
