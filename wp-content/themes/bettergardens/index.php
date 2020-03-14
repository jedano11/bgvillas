<?php

get_header(); ?>
<!-- Page Banner Section -->
<section class="hero-banner inside-banner d-table w-100" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
    <div class="d-table-cell va-middle">
        <div class="container">
            <div class="banner-content">
                <h1 class="fc-white fw-semi-bold title"> <?php wp_title(''); ?></h1>	
            </div>
        </div>
    </div>
</section>
<!-- // Page Banner Section -->
<section class="sec-padding inside-page pbpx-20">
    <div class="container">
        
        <?php
        while ( have_posts() ) : the_post();
        the_content();
        endwhile;
        ?>
    </div>
</section>

<?php get_footer(); ?>