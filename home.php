        <?php get_header(); ?>
		<link rel="stylesheet" type="text/css" href="//www.scoot.co/wp-content/themes/scoot2015/new-home.css">
        <div id="hero_home" class="hero">
        
            <div id="video-wrap">
			<div id="vid-screen">&nbsp;</div>
			<video autoplay loop poster="//www.scoot.co/wp-content/themes/scoot2015/images/trans.png" id="bg-video" >
    		<source src="//www.scoot.co/wp-content/themes/scoot2015/images/quad-homepage.mp4" type="video/mp4">
			</video>
			<img src="//www.scoot.co/wp-content/themes/scoot2015/images/scoot-quad.gif" id="anim-gif" />
			</div>
            
            <div class="hero-copy">
            
                <div class="hero-copy-wrapper">
        
                    <h2>Getting there is easy, fast, and fun.<br/>$4/ride, your phone is the key.</h2>
                    
                    <a href="https://app.scootnetworks.com/registrations/new" id="sign_up_button" class="btn">Sign up today!</a>
                    
                </div>

            </div>
			<!--Scoot news here-->
            <div id="scoot-news-module" class="only-on-desktop-2"><h3>Scoot News</h3>
				
				<?php query_posts('p=5614'); ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile;?>
				
			</div>
			<!--end Scoot news-->
            <div class="only-on-desktop phone-entry-widget">
                Download the Scoot app & start riding
	        <form action="//app.scootnetworks.com/registrations/textAppLinkToPhone" method="POST"
	    	    onsubmit="return shouldSubmit;">
                    <div style="height: 7px;"></div>
		    <input type="tel" id="phone_number" name="phone_number" placeholder="415-555-5555" maxlength="16" style="margin-right: 10px">
		    </input>
		    <input type="submit" value="Send SMS" onclick="cleanAndValidatePhoneNumber();" class="btn-white-sml">
		    </input>
	        </form>
            </div>
            
        </div>
        
          <script>
            var shouldSubmit = false;
  
            function cleanAndValidatePhoneNumber()
            {
              shouldSubmit = false;
              var val = document.getElementById('phone_number').value;
              //strip non-numerics
              val = val.replace(/[^0-9]+/g,'');
              //strip leading ones
              while (val[0] == '1')
              {
                val = val.substring(1);
              }
              shouldSubmit = validatePhone(val, 'Please enter a valid 10-digit phone number');
            }
  
            function validatePhone(field, alerttext) {
                //strip non-numeric characters
                if (field.match(/^\d{10}/)) {
                     return true;
                }
                if (alerttext)
                  alert(alerttext);
                return false;
            }
          </script>
		
		<!--mobile CTA-->
		  <div id="cta_home" class="cta">
        
            <ul>
                <li class="download-our-app"><a href="http://onelink.to/j2fsun">Download our app</a></li>
                <li class="ios"><a href="https://itunes.apple.com/us/app/scoot/id578451864?mt=8">iOS</a></li>
                <li class="android"><a href="https://play.google.com/store/apps/details?id=com.scootnetworks.scoot.scootandroidapp">Android</a></li>
            </ul>

        </div>
		<!--mobile CTA-->
		
		<!--mobile scoot news and quad news-->
		<div id="scoot-news-m">
			<h3>Scoot News</h3>
				<?php query_posts('p=5614'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile;?>
		</div>
		
		<div id="quad-news">
		<div style="line-height: 25px;">&nbsp;</div>
			<?php query_posts('p=5614'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile;?>
			<div style="text-align: center; padding: 25px 0px;"><a href="https://app.scootnetworks.com/registrations/new" id="sign_up_button" class="btn white-sm">Sign up!</a></div>
		</div>
		<!--end mobile scoot news and quad news-->
      

		
		
		
		<!--scoot map home-->
<div id="home-map">
<div id="latitute"></div>
<div id="longitude"></div>
<div id="latitute2"></div>
<div id="longitude2"></div>
<div style="clear: both; line-height: 1px; height: 1px;">&nbsp;</div>


<div id="elements-wrap">
<div id="form-wrap">

<form id="address_form"><div id="planaride">Plan a ride</div><div class="dot-array"><span></span><span></span><span></span><span></span><span></span></div><input type="text" value="Start" name="address" id="add_1"/>

<input type="text" value="End" name="address_end" id="add_2"/>
<input type="submit" value="Let's scoot!" /></form><div id="mobile-results"><div id="route-border-2"><img src="//scoot.co/map/assets/route-border.jpg" /></div><div id="arrow-back"><img src="//scoot.co/map/assets/arrow-back.jpg" /></div><div id="yourscootride">Your scoot ride</div><div class="cost-wrap"><div class="cost-bubble"></div></div>
		<div class="taxi-ride"></div><div class="results-form"></div></div>	</div>


	<div id='map_canvas'>
	<h2 id="map-headline">Over 400 electric mopeds & mini-cars live all over SF In 50+ garages & 40 neighborhoods with street parking</h2>
		<div id="form-validation"><div id="close-icon"><img src="//scoot.co/map/assets/close-marker.png" /></div>Please enter valid addresses to find your <span>scoot!</span></div>
		<div id="ride-today"><a href="https://app.scootnetworks.com/registrations/new">Start riding today</a></div>
		<div id="scoot-box">
		<div id="route-border"><img src="//scoot.co/map/assets/route-border.jpg" /></div>
		<div id="scoot-box-header">Your scoot trip</div>
		<div class="results-form"></div>
		<div class="cost-wrap"><div class="cost-bubble"></div></div>
		<div class="taxi-ride"></div>
	</div>
	</div>
	
	
</div>
<div style="clear: both; line-height: 1px; height: 20px;">&nbsp;</div>
</div>
<!--end scoot map home-->

<!--static map mobile-->
        <div id="hero_home_map" class="hero">

            <img src="//scoot.co/wp-content/themes/scoot2015/images/screengrab-route.jpg" alt="Interactive Scoot Location Map - San Francisco" id="route-desktop" />
			 <img src="//www.scoot.co/wp-content/themes/scoot2015/images/screengrab-route-m.jpg" alt="Interactive Scoot Location Map - San Francisco" id="route-mobile" />
            <div class="hero-copy">
        
                <div class="hero-copy-wrapper">

                    <h2 class="desk">Over 400 electric mopeds & mini-cars live all over SF<br/> In 50+ garages & 40 neighborhoods with street parking</h2>
        			<h2 class="mobile">What's your Scoot route?</h2>
                    <a href="/locations" class="btn btn-desk">Ride one-way anywhere</a>
                     <a href="/locations" class="btn btn-mobile">Find scoots near you</a>
                </div>
            
            </div>

            <?php wp_nav_menu( array( 'theme_location' => 'locations-menu', 'menu_id' => 'nav_locations_menu', 'container' => false ) ); ?>
        </div>
        <!--end static map mobile-->
		
		
        <div id="home_bottom">
        
            <h2>New to Scoot? Everyone's got a few questions:</h2>
                
            <div id="home-video-right">
            
                <h3>What's Scoot all about?</h3>
            
                  <span class='embed-container'><iframe src="https://player.vimeo.com/video/129728314?color=ff0000&title=0&byline=0&portrait=0" width="320" height="180" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></span>
                                
                <p>More questions? <a href="/faq/">Check out our FAQs &raquo;</a></p>
                
            </div>
        
            <div>
                
                <ul>
                    <li class="q">Do I need a special license?</li>
                    <li class="a">Nope! Just a US driver’s license — we’ll teach you how to scoot.</li>
                    <li class="q">How much gas does a Scoot use?</li>
                    <li class="a">None! It’s electric and we've got charging locations all over the city. </li>
                    <li class="q">How far does a scoot go?</li>
                    <li class="a">About 25 miles on a full charge! SF is 7x7, so that easily gets you to even the farthest corners of San Francisco.</li>
                    <li class="q">Alright, the jig is up, how much does it cost?</li>
                    <li class="a">Depending on your plan, a day of scooting is $20, or just $2-4 per half-hour.</li>
                </ul>
                
                <a href="https://app.scoot.co/registrations/new" class="btn">Sign me up!</a>
                
            </div>

        </div>
        
				<div id="zoom">13</div>
			  <div id="startlat">37.774732</div>
			  <div id="startlong">-122.433357</div>

        <?php get_footer(); ?>