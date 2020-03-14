<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

<!-- Page Banner Section -->
<section class="hero-banner inside-banner d-table w-100 bg-center bg-cover" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
    <div class="d-table-cell va-middle">
        <div class="container">
            <div class="banner-content">
                <h1 class="fc-white fw-semi-bold title"> <?php wp_title(''); ?></h1>
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
                <?php 
                $images = get_field('gallery');
                if( $images ): ?>                   
                        <?php foreach( $images as $image ): ?>
                            <div class="gallery-block">
                                <a data-fancybox="gallery" href="<?php echo $image['url']; ?>">
                                    <figure class="thumb" data-img="url(<?php echo $image['sizes']['medium']; ?>)"> 
                                       <!--  <p class="title"><?php echo $image['title']; ?></p> -->
                                    </figure>
                                </a>
                            </div>
                        <?php endforeach; ?>                    
                <?php endif; ?>
            </div>

            
        </div>
    </div>
</section>

	

<?php get_footer(); ?>
