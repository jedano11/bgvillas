<?php

get_header(); ?>
<!-- Page Banner Section -->
<section class="hero-banner d-table w-100" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
    <div class="d-table-cell va-middle">
        <div class="container">
            <div class="banner-content">
                <h2 class="fc-white lh-medium fw-semi-bold title mbpx-10"> <?php wp_title(''); ?></h2>
            </div>
        </div>
    </div>
</section>
<!-- // Page Banner Section -->
<section class="sec-padding inside-page clearfix">
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <h6 class="fw-normal ta-center mbpx-20"><?php echo category_description(''); ?> </h6>
            <div class="hidden-md-down mbpx-20 clearfix"></div>
        </div>
        <div class="col-md-12">
            <div class="box category-page-box ">
                <?php
                // Check if there are any posts to display
                if ( have_posts() ) : ?>
                
                <?php
                
                // The Loop
                while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4 matchheight">
                    <figure class="" data-img="url(<?php the_post_thumbnail_url(); ?>)">
                    </figure>
                    
                    <a class="title fs-medium mbpx-8 d-block fw-semi-bold" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: to <?php the_title_attribute(); ?>">
                        <?php if (strlen($post->post_title) > 38) {
                        echo substr(the_title($before = '', $after = '', FALSE), 0, 38) . '...'; } else {
                        the_title();
                        } ?>
                    </a>
                    
                    <p class="desc fc-grey">
                        <?php $char_limit = 140; //character limit
                        $content = $post->post_content; //contents saved in a variable
                        echo substr(strip_tags($content), 0, $char_limit);
                        ?> ..
                    </p>
                    <a href="<?php the_permalink() ?>" class="link-btn"> Read More</a>
                </div>
                
                <?php endwhile;
                
                else: ?>
                <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php include get_template_directory() . '/inc/primary-cta.php'; ?>
<?php get_footer(); ?>