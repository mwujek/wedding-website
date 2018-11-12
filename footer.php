        
        </section>
        
        <footer id="footer">
        <!-- <h1><?php echo get_template_directory_uri(); ?></h1> -->

            <div class="footer-inner">
                <section class="footer-row">
                    <div class="footer-left-col">
                        <!-- <div class="lottie-footer"></div> -->
                        <ul id="footer-menu-left">
                            <li>Alex & Matt</li>
                            <li>June 22<span class="sup">nd</span>, 2018</li>
                            <li>Yokayo Ranch</li>
                            <li>Ukiah, California</li>
                        </ul>
                    </div>
                    <div class="footer-right-col">
                        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_id' => 'nav_footer' ) ); ?>
                    </div>    
                </section>

                <section class="footer-row bottom">
                    <a href="#">Contact Alex & Matt</a>
                </section>
                
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>

</html>
