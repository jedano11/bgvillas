<!-- Slider Section -->
<div class="hero-slider grey-dots --xsmall-dot">
    <?php query_posts('post_type=main-slider');
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    remove_filter( 'the_content', 'wpautop' );
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');?>
    <!-- Loop Section Start -->
    <div class="slide">
        <div class="hero-banner main-slider d-table w-100">
            <div class="d-table-cell va-middle w-100 bg-cover" style="background-image:url(<?php echo $src[0];?>);">
                <div class="container">
                    <div class="clearfix">
                        <div class="banner-content">
                            <h1 class="ta-center fc-white lh-medium fw-semi-bold title mbpx-10 ff-secondary">  <?php the_content(''); ?> </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; else: ?>
    <?php endif; wp_reset_query(); ?>
</div>
<!-- // Slider Section -->