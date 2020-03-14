<?php

get_header(); ?>
<!-- Page Banner Section -->
<section class="hero-banner contact-banner inside-banner d-table w-100 bg-center bg-cover" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
    <div class="d-table-cell va-middle">
        <div class="container">
            <div class="banner-content">
                
            </div>
        </div>
    </div>
</section>
<!-- // Page Banner Section -->

<section class="about-tabbing sec-padding --small inside-page clearfix">
    <div class="container">
      <div class="col-md-2"></div>
      <div class="col-md-8">
	<h1 class="inside-h1 sec-padding --xsmall fc-primary tt-uppercase ff-secondary theme-title fw-normal">  
		<?php the_field('heading'); ?></h1>
       <?php while ( have_posts() ) : the_post(); ?>
       <P><?php the_content(); ?></P>
       </div>
       <?php endwhile; ?>
       <div class="col-md-2"></div>

    </div>
</section>


<section class="first-section">


        <div class="inside-banner-">
          <img class="section-fullbg d-table w-100 bg-center bg-cover" 
          src="<?php bloginfo('template_directory'); ?>/images/about-after1.jpg" alt="">


        </div>
        <div class="inner-content ">
           <h3 class="fc-grey fw-semi-bold title">“We are what we repeatedly do. Excellence, then, is not an act, but a habit.”</h3>
        <P>— Will Durant</P>
        </div>
   

</section>

<section class="sec-padding --xsmall inside-page clearfix">
   
    <div class="col-md-5 col-nopadd strength">  
        <img class="w-100" src="<?php bloginfo('template_directory'); ?>/images/abt001.jpg" alt="*">
      </div>  
      <div class="col-md-4 strength-center">
       <h3 class="title">Our biggest strength</h3>
        <P>Our biggest strength? Undoubtedly our team! It consists of designers, architects, engineers, craftsmen, …The various and complementary competences of our team allow us to control all the outdoor work, at a very competitive quality-price ratio.</P>
        <a class="fw-semi-bold" href="">Discover our competences</a>
       </div>
        <div class="col-md-3 col-nopadd">
            <img class="w-100 sec-padding --small" src="<?php bloginfo('template_directory'); ?>/images/abt002.png" alt="*">
        </div>

</section>


<section class="sec-padding --xsmall inside-page clearfix">
      <div class="container clearfix">
        <div class="col-md-12 sec-padding --small ">  
          <h3 class="title ta-center">The assets</h3>
        </div>  


        <div class="col-md-4">
           <img class="m-auto" src="<?php bloginfo('template_directory'); ?>/images/ico1.png" alt="*">
            <h6 class="title ta-center">More than 150 persons</h6>
            <p class="ta-center">At your service</p>
         </div>
       
         <div class="col-md-4">
          <img class="m-auto" src="<?php bloginfo('template_directory'); ?>/images/ico2.png" alt="*">
          <h6 class="title ta-center">Design office</h6>
         </div>

           <div class="col-md-4">
            <img class="m-auto" src="<?php bloginfo('template_directory'); ?>/images/ico3.png" alt="*">
            <h6 class="title ta-center">1 topographer</h6>
           </div>
        </div>

        <div class="container clearfix mtpx-40">

           <div class="col-md-4">
           <img class="m-auto" src="<?php bloginfo('template_directory'); ?>/images/ico4.png" alt="*">
         <h6 class="title ta-center">+3000 m2</h6>
         <p class="ta-center">of BG buildings</p>
         </div>
       

          <div class="col-md-4">
           <img class="m-auto" src="<?php bloginfo('template_directory'); ?>/images/ico5.png" alt="*">
         <h6 class="title ta-center">machines and vehicles</h6>
         </div>
       

          <div class="col-md-4">
           <img class="m-auto" src="<?php bloginfo('template_directory'); ?>/images/ico6.png" alt="*">
         <h6 class="title ta-center">warehouse / workshop</h6>
         </div>
      </div>

</section>



<section class="sec-padding --xsmall inside-page clearfix">
   
   
       <div class="col-md-3 col-nopadd ">
            <img class="w-100 sec-padding --small" src="<?php bloginfo('template_directory'); ?>/images/abt012.jpg" alt="*">
        </div>

      <div class="col-md-4 unique-center">
       <h3 class=" title">Every project is unique</h3>
        <P>Every year hundreds of clients enlist our services. To us, each project is unique and requires specific understanding and follow-up.</P>
        <p>
        Assisting our clients is essential. Every worksite starts with tracing the zones to be achieved: our clients visualise the end result and can adapt it if need be.</P>
        <a class="fw-semi-bold" href="">Discover a few of our achievements</a>
       </div>

       <div class="col-md-5 col-nopadd">  
        <img class="w-100 sec-padding --small" src="<?php bloginfo('template_directory'); ?>/images/house.jpg" alt="*">
        
      </div>  

</section>


<section class="sec-padding --xsmall inside-page clearfix">
   
      <div class="container">
      <div class="col-md-12 sec-padding --small ">  
        <h3 class=" title ta-center">At your service</h3>
      </div>  


      <div class="col-md-2">
      </div>

      <div class="col-md-3">
        <img class="m-auto mbpx-20" src="<?php bloginfo('template_directory'); ?>/images/icon1.png" alt="*">
       <h6 class="ta-center title">+150 000 sq ft</h6>
       <p class="ta-center">of garden + pool built/year</p>
     
       </div>
     
       <div class="col-md-3">
       <img class="m-auto mbpx-20" src="<?php bloginfo('template_directory'); ?>/images/icon2.png" alt="*">

       <h6 class="ta-center title">15 outdoor</h6>
       <p class="ta-center">professions</p>
     
       </div>
         <div class="col-md-3">
        <img class="m-auto mbpx-20" src="<?php bloginfo('template_directory'); ?>/images/icon3.png" alt="*">
       <h6 class="ta-center title">250 years</h6>
      <p class="ta-center">of cumulated experience</p>
       </div>
        

        </div>

</section>


<section class="last-section">


        <div class="inside-banner-">
          <img class="section-fullbg d-table w-100 bg-center bg-cover" src="<?php bloginfo('template_directory'); ?>/images/f24.jpg" alt="*">
        </div>
        <div class="inner-content ">

          <div class="col-md-12">
            <h2>Services in constant evolution</h2>
          </div>
           <div class="col-md-6 ">
                  <P>When we look back 10 years, we notice a constant evolution in the techniques and professions of the landscape and pool design. Every year new trends appear.</P>
           </div>
           <div class="col-md-6 ">
                  <P>It is up to us to follow those innovations, to educate ourselves and to listen to our clients to meet their demands.</P>
           </div>
        </div>

       
   

</section>



<section class="let sec-padding --small inside-page clearfix">
    <div class="container">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <p class="ta-center">Do you have a project in mind?</P>
       <h3 class="ta-center fw-semi-bold title"> Let's talk about it! We'd be happy to hear from you.</h3>
      </div>
        <div class="col-md-2"></div>

    </div>
</section>








<?php get_footer(); ?>