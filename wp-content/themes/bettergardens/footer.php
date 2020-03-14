<footer id="footer">

    <div class="bg-white">
        <div class="container-fluid">        
            <div class="col-md-8 clearfix">
                <div class="copyright text-sm-center">

                	<p class="fc-grey fs-small">
                		<span class="base-font-size">BG. BETTER GARDENS CONTRACTING LLC </span>
                		iRise Tower, 31st Floor, Suite 31C-2 Barsha Heights, Dubai, UAE.
						<span class="fspace">|</span>
						<a href="tel:+9714551676">Tel: +97145516760</a>
                	</p>

                	<p class="fc-grey fs--xsmall fcopy">&copy; 2018 All Rights Reserved</p>
                  
                </div>
            </div>
            
            <div class="col-md-4 ta-right fc-grey">
                    

            	 <nav class="foot-nav">
            		<?php 
				    	$args = array(
				    		'theme_location' => 'footer-menu',
				    		'container' => 'ul',
						    'menu_class'=> 'unstyled inline'
			    		);
					?>
		    		<?php wp_nav_menu( $args ); ?>
		    	</nav>
				 
		    	     <div class="social-links">
                    <ul class="unstyled inline pd-r-l">
                        <li class="first">
                        	<a href="https://www.facebook.com/bettergardensdubai" target="blank" rel="nofollow">
                        		<i class="fa fa-facebook h5 fw-light fc-grey"></i>
                        	</a>
                        </li>
                        <li>
                        	<a href="https://www.linkedin.com/company/better-gardens-llc" target="blank" rel="nofollow">
                        		<i class="fa fa-linkedin h5 fw-light fc-grey"></i>
                        	</a>
                        </li>
                        <li class="last">
                        	<a href="https://www.houzz.com/pro/better-gardens/better-gardens" target="blank" rel="nofollow">
                        		<i class="fa fa-houzz h5 fw-light fc-grey"></i>
                        	</a>
                        </li>
                          <li class="last">
                        	<a href="https://www.instagram.com/bettergardens/" target="blank" rel="nofollow">
                        		<i class="fa fa-instagram h5 fw-light fc-grey"></i>
                        	</a>
                        </li>
                          <li class="last">
                        	<a href="https://www.pinterest.com/bettergardens/" target="blank" rel="nofollow">
                        		<i class="fa fa-pinterest h5 fw-light fc-grey"></i>
                        	</a>
                        </li>
                    </ul>               
                </div>
                
            </div>

        </div>
    </div>    
    
    
</div>
</footer>
</main>

</body>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/theme-lib.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/theme-fun.js"></script>

<div class="box icon-box">
    <div id="phoneEmailPopup">
        <div class="boxPhone" data-type="phone">
            <div class="phone-ico"><i class="fa fa-phone" aria-hidden="true"></i></div>
            <h3 class="float-left fc-primary mtpx-3"> <a class="fc-primary fs-default d-block ptpx-10" href="tel: + 971 4 551 6760 "> + 971 4 551 6760 </a></h3>
        </div>

        <div class="boxEmails mtpx-50" data-type="email">
            <div class="email-ico"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            <h3 class="float-left fc-primary mtpx-3"> <a class="fc-primary fs-default d-block ptpx-10" href="mailto:info@bgllc.ae">info@bgllc.ae</a></h3>
        </div>
    </div>
</div>


<?php wp_footer(); ?>
</html>