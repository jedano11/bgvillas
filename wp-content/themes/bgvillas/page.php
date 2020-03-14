<?php

get_header(); ?>
<!-- Page Banner Section -->
<section class="hero-banner inside-banner d-table w-100 bg-center bg-cover" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
    <div class="d-table-cell va-middle">
        <div class="container">
            <div class="banner-content">
                <h3 class="fc-white fw-semi-bold title"> <?php wp_title(''); ?></h3>
            </div>
        </div>
    </div>
</section>
<!-- // Page Banner Section -->

<section class="sec-padding --small inside-page clearfix">
    <div class="container">
        <div class="col-md-12">
            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="res-width">
                <div class="content-area">
                    <?php the_content();  ?>
                </div>     
            </div>
            <?php endwhile; ?>


            <div class="gallery-section clearfix mtpx-20">
                 
            </div>

            
        </div>
    </div>
</section>
<?php get_footer(); ?>