<?php


get_header(); ?>


<!-- Page Banner Section -->
<section class="hero-banner contact-banner d-table w-100" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">

</section>
<!-- // Page Banner Section -->


<section class=" clearfix bg-lgrey">
    <div class="col-md-6 col-nopadd">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2148.3914827847043!2d55.18004913582663!3d25.096803790612736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6bd524194645%3A0xe3fdbc70a0110e88!2sBetter+Gardens!5e0!3m2!1sen!2s!4v1524392347273" width="100%" height="820" frameborder="0" style="border:0" allowfullscreen></iframe>     
    </div>

    <div class="col-md-6 bg-silver bor-l">
        <div class="sec-padding -- small clearfix">
			<h1 class="inside-h1 sec-padding --xsmall  ta-center fc-primary  ff-secondary theme-title fw-normal">   
			Let's Meet</h1>
            <p class="ta-center mbpx-30"> <i> Help us get to know you better </i> </p>

			  <div class="col-md-1">
			</div>
			  <div class="col-md-10">
				   <?php echo do_shortcode('[contact-form-7 id="80" title="Contact form"]'); ?>

              </div> 

        </div>

                   <div class="contact-section">
    
    <div class="container">
	<div class="col-md-1">
		</div>        
<div class="col-md-11">
            <div class="col-md-6">
                
                 <div class="box contact">
                    <div class="icon-area"><i class="icon fa fa-phone"> </i></div>
                    <div class="content">
                        <p class="fs-xmedium">
                            <span class="fc-primary">Phone Number: </span>
                            <br><a href="tel:+97145516760">Tel: + 971 4 551 6760</a>
                            
                        </p>
                    </div>
                </div>
                 <div class="box contact">
                    <div class="icon-area"><i class="icon fa fa-clock-o"> </i></div>
                    <div class="content">
                        <p class="fs-xmedium"> 
                            <span class="fc-primary">Opening Times:</span>
                        <br>
                        8am – 6pm
                        </p>
                    </div>
                </div>
               
            </div>
            <div class="col-md-6">
                <div class="box contact">
                    <div class="icon-area"><i class="icon fa fa-envelope-o"> </i></div>
                    <div class="content">
                        <p class="fs-xmedium">
                            <span class="fc-primary"> Email:</span> 
                            <br>
                            <a href="mailto:info@bgllc.ae" >info@bgllc.ae</a>
                        </p>
                    </div>
                </div>
                  <div class="box contact">
                    <div class="icon-area"><i class="icon fa fa-map-marker"> </i></div>
                    <div class="content">
                        <p class="fs-xmedium"> IRise Tower, 31st Floor, <br>Suite 31C-2 Barsha Heights, Dubai, UAE.</p>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
    
</div>

    </div>

</section>







<?php get_footer(); ?>
