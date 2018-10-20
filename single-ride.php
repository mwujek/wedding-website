<?php
/**
 * The Template for displaying all single posts
*/
?>

 <?php get_header(); ?>

<link rel="stylesheet" href="/map/css/leaflet-0.7.3.css" />
<link href='/map/css/scoot_web_map.css' rel='stylesheet' />
<script src="/map/js/leaflet-0.7.3.js"></script>
<script src='/map/js/scoot_web_map_rides_2.js'></script>


		<style>
		.crumb{margin-top:100px;}
		.leaflet-control-attribution.leaflet-control{display: none}
		#map-toggle {position: absolute; right: 10px; top: 10px; display: block; background-color:#ff0000; color:#fff; line-height: 40px; z-index:10;width: 140px; border-radius: 6px; border: 1px solid white; text-align: center;}
		.coordinates, .prone-a {visibility: hidden;}
		.ride-img {float: left;}
		.ride-img img {border-radius: 8px;}
		.ride-info {overflow: hidden; padding-left: 30px;}
		.ride-info h2 {font-size: 28px !important; margin-bottom: 15px !important;}
		.street-info div {float: left; font-size: 18px; font-weight: bold; margin-bottom: 24px;}
		#district {padding-left: 20px; color:#666;}
		.ride-desc {clear: both; word-wrap: break-word; }
		.ride-desc p {line-height: 28px;}
		.button-info div {float: left; border: 2px solid #e0e0e0; border-radius: 4px; padding: 13px; margin-right: 24px; font-size: 18px;}
		.button-info div img {float: left; margin-right: 8px;}
		.my-ride-link {background-color:#ff0000; color:#fff; text-decoration: none; font-weight: bold; font-size: 16px; display: inline-block; height: 45px; line-height: 45px;  clear: both; border-radius: 6px; width: auto; text-align: center; margin-top: 20px; clear: both; padding-left: 20px; padding-right: 20px;}
.clearer {border: 0px !important; clear: both; font-size: 0px; line-height: 0px;}
.ind-ride-map {margin-top: 20px;}
.ind-ride-map img{border-radius: 8px; width: 100% !important; height: auto;}
.ride-crumb {font-size: 14px; font-weight: bold; }
.ride-crumb a {color:#000;}
.ride-crumb span {font-size: 14px;}
.ride-main-info {margin-top: 43px;}
.ind-map-text {margin-top: 28px;}
.ind-map-text p {line-height: 28px;}
#mobile-img-ride {display: none;}
#m-ride-singular {display: none;}
.my-ride-link-m {display: none;}


@media only screen and (max-width: 940px) { 
.ride-img img {max-width: 375px !important;}
}

@media only screen and (max-width: 860px) { 
.ride-img img {display: none;}
.ride-info {padding-left: 0px;}
#desk-ride-singular {display: none;}
#m-ride-singular {display: block; max-height: 320px; overflow: hidden;}
#m-ride-singular img {width: 100%;}
}


@media only screen and (max-width: 480px) {
.my-ride-link {display: none;}
.my-ride-link-m {background-color:#ff0000; color:#fff; text-decoration: none; font-weight: bold; font-size: 16px; display: inline-block; height: 45px; line-height: 45px;  clear: both; border-radius: 6px; width: auto; text-align: center; margin-top: 20px; clear: both; padding-left: 20px; padding-right: 20px; display: block;}
}
@media only screen and (max-width: 420px) { 
.button-info div {margin-bottom: 15px; margin-right: 11px; border: 1px solid #e0e0e0; font-size: 15px; padding: 7px;}
.button-info div:last-child {margin-bottom: 0px; margin-right: 0px !important;}
.button-info:last-child {margin-right: 0px !important;}
.button-info .clearer {display: none;}
#m-ride-singular {display: block; max-height: 240px; overflow: hidden;}
.ride-desc p {line-height: 23px;}
.button-info div img {margin-right: 4px;}
#dollar-button {margin-right: 0px !important;}
}
		</style>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php if($post_type == 'ride') { ?>
		<style>
body, html{ height:auto !important; background-color:#fff !important;}
</style>
<script type="text/javascript">
$(document).ready(function() {
if (self != top){
$("footer").css("display","none"); 
$("header").css("display","none"); 
$("#video-text").css("display","none"); 
$(".rideWrapper").css("display","none"); 
$("#main_section").css("padding-top","0px");
}


					
});
</script>
		<div id="desk-ride-singular"><?php echo(types_render_field( "top-image", array( 'cost' => false) )); ?></div>
		<div id="m-ride-singular"><?php echo(types_render_field( "featured-image", array( 'cost' => false) )); ?></div>
			<?php } ?>
                    <hr> <?php endwhile; else: ?>
					 <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
        <div id="main" class="content-container">
			
            <div id="content">
				<div class="crumb"><?php if(in_category('12')){ ?><a href="jobs">Jobs</a> ><?php }?></div>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<!--===============conditional logic for the ride type section===============-->
					<?php if($post_type == 'ride') { ?>
					<div class="ride-crumb"><a href="/rides/">Rides</a> &nbsp;<span>></span>&nbsp; <?php $category = get_the_category(); ?> 
<?php 
$caty = $category[0]->cat_name;
if($caty == 'Beginner Rides') { ?>
<a href="/rides/beginner/">
<?php } ?>
<?php 
$caty = $category[0]->cat_name;
if($caty == 'Group Rides') { ?>
<a href="/rides/group/">
<?php } ?>
<?php 
$caty = $category[0]->cat_name;
if($caty == 'Scoot Routes') { ?>
<a href="/rides/routes/">
<?php } ?>
<?php 
$caty = $category[0]->cat_name;
if($caty == 'Valentines Day') { ?>
<a href="/rides/valentines-day/">
<?php } ?>
<?php 
$caty = $category[0]->cat_name;
if($caty == 'Date Rides') { ?>
<a href="/rides/dates/">
<?php } ?>
<?php 
$caty = $category[0]->cat_name;
if($caty == 'test ride') { ?>
<a href="/ride-overview/">
<?php } ?>
<?php echo $category[0]->cat_name;?></a>		<?php 
$caty = $category[0]->cat_name;
if($caty == 'uncategorized' || $caty == '') { ?><?php } else { ?>&nbsp;<span>></span>&nbsp;<?php } ?> <?php the_title(); ?> </div>
				<div class="ride-main-info">
					<div class="ride-img"><?php echo(types_render_field( "featured-image", array( 'cost' => false) )); ?></div>
					<div class="ride-info">
						<h2><?php the_title(); ?></h2>
						<div class="street-info"><div><?php echo(types_render_field( "street-address", array( 'raw' => false) )); ?></div><div id="district"><?php echo(types_render_field( "district", array( 'raw' => false) )); ?></div></div>
						<div class="ride-desc"><?php the_content(__('(more...)')); ?></div>
						<div class="button-info">
							<div><img src="http://scoot.co/wp-content/uploads/2016/01/bolt-sm.jpg" /><?php echo(types_render_field( "distance", array( 'raw' => false) )); ?></div>
							<div><img src="http://scoot.co/wp-content/uploads/2016/01/clock-icon.jpg" /><?php echo(types_render_field( "time", array( 'time' => false) )); ?></div>
							<div id="dollar-button"><img src="http://scoot.co/wp-content/uploads/2016/01/coin-icon.jpg" /><?php echo(types_render_field( "cost", array( 'cost' => false) )); ?></div>
<div style="clear: both; width: 0px; font-size: 0px; float: none;" class="clearer">&nbsp;</div>
						</div>
						<a href="<?php echo(types_render_field( "button-url", array( 'cost' => false) )); ?>" class="my-ride-link"><?php echo(types_render_field( "button-text", array( 'cost' => false) )); ?></a>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>

					
					

					
			
					<div class="ind-ride-map"><?php echo(types_render_field( "map-image", array( 'cost' => false) )); ?></div>
					<a href="<?php echo(types_render_field( "button-url", array( 'cost' => false) )); ?>" class="my-ride-link-m"><?php echo(types_render_field( "button-text", array( 'cost' => false) )); ?></a>
					<div class="ind-map-text"><?php echo(types_render_field( "map-text", array( 'cost' => false) )); ?></div>
					 <div id='map_canvas'><!-- <a href="#" id="map-toggle">Show Scoot locations</a> --></div>
					  <div id="zoom"><?php echo(types_render_field( "zoom-1", array( 'cost' => false) )); ?></div>
			  <div id="startlat"><?php echo(types_render_field( "startlat-1", array( 'cost' => false) )); ?></div>
			  <div id="startlong"><?php echo(types_render_field( "startlong-1", array( 'cost' => false) )); ?></div>
					<div class="prone-a">
					
					
					<?php
$thefields = get_post_meta($post->ID, 'wpcf-longitude-latitude', false);
foreach ($thefields as $onefield)
{ ?>
<div><?php echo $onefield ;?></div>
<?php } ?>
					</div>
<?php
$thefields = get_post_meta($post->ID, 'wpcf-longitude-latitude', false);
foreach ($thefields as $onefield)
{ ?>
<div class="coordinates"><?php echo $onefield ;?></div>
<?php } ?>
<div class="show-route-toggle" style="visibility: collapse;"><?php $showRoute = get_post_meta($post->ID, 'wpcf-do-not-show-route', true); echo $showRoute;?></div>

					<?php } else {?>
					<!--===============end ride type section==========-->
					<?php  $faqtitle = "<h2>{$h2}</h2>";
					echo($faqtitle);
					  ?>
                    <?php the_content(__('(more...)')); ?>
					<?php } ?>
                    <hr> <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
					<!--cta buttons -->
				<!--end cta buttons-->
			 </div>
        </div>
		
        <?php get_footer(); ?>
		<script src="https://scoot.co/iframe-resizer-master/js/iframeResizer.contentWindow.min.js"></script>
		
		
		
		
		
		
