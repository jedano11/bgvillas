<?php
/**
* Template Name: SideBar Page
*/
get_header(); ?>
<!-- Page Banner Section -->
<section class="hero-banner inside-banner d-table w-100" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
    <div class="d-table-cell va-middle">
        <div class="container">
            <div class="banner-content">
                <h2 class="fc-white fw-semi-bold title"> <?php wp_title(''); ?></h2>
            </div>
        </div>
    </div>
</section>
<!-- // Page Banner Section -->
<section class="sec-padding inside-page pbpx-20">
    <div class="container">
        <div class="col-md-8">
            <?php
            while ( have_posts() ) : the_post();
            the_content();
            endwhile;
            ?>
        </div>
        <div class="col-md-4">
            <div id="widgetized-sidebar" class="widgetized-sidebar">
                <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar')) : else : ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php include get_template_directory() . '/inc/client-section.php'; ?>
<?php get_footer(); ?>