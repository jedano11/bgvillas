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
      <div class="col-md-12">
        <?php while ( have_posts() ) : the_post(); ?>
       <P><?php the_content(); ?></P>
       </div>
       <?php endwhile; ?>
       
    </div>
</section>

<?php get_footer(); ?>