<?php
/**
 * The template for displaying all single posts
 */

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


<section class="sec-padding --small inside-page clearfix">
    <div class="container">
	    <div class="col-md-12">
	        <?php /* The loop */ ?>
	        <?php while ( have_posts() ) : the_post(); ?>
	        <div class="res-width">
	        	<div class="tt-uppercase mbpx-20"> <i class="fa fa-clock-o prpx-6"></i> <?php echo get_the_date(); ?></div>
	            <div class="content-area">
	                <?php the_content();  ?>
	            </div>     
	        </div>
	        <?php endwhile; ?>
        </div>
    </div>    
</section>

<div class="sec-padding --small bg-spgrey">
	<div class="container">
		<div class="row">
			
			<!-- <h3 class="fc-white ta-center tt-uppercase mbpx-20"> Related News </h3> -->
			<h3 class="ta-center sec-padding --small fc-primary tt-uppercase ff-secondary theme-title fw-normal"> Related News </h3>  		

    		<div class="blogs-slider dots-n-arrow --white-dots clearfix">

	    		<?php
			        $args = array( 'post_type' => 'news', 'posts_per_page' => -1, 'order'=> 'ASC', 'orderby' => 'post_date', 'post__not_in' => array($post->ID), );
			        $postslist = get_posts( $args );
			        foreach ( $postslist as $post ) :
			        setup_postdata( $post ); 
			    ?>
			        <div class='col-md-4'>
			            <div class="box blogs-box matchheight">
			                <figure data-img="url(<?php the_post_thumbnail_url('full')?>)"> </figure>
			                <div class="inner-content clearfix">
			                    <div class="date tt-uppercase mbpx-10"> <i class="fa fa-clock-o prpx-6"></i> <?php echo get_the_date(); ?></div>
			                    <h6 class="title tt-uppercase">  
			                        <?php
			                            $char_limit = 40; //character limit
			                            $content = $post->post_title; //contents saved in a variable
			                            echo substr(strip_tags($content), 0, $char_limit);
			                        ?>
			                    </h6>                
			                    <br>
			                    <p class="mbpx-16">
			                        <?php $char_limit = 120; //character limit
			                            $content = $post->post_content; //contents saved in a variable
			                            echo substr(strip_tags($content), 0, $char_limit);
			                        ?> ..
			                    </p>
			                    <a href="<?php the_permalink();?>" class="btn --small btn-bar">READ MORE</a>                
			                </div>
			            </div>
			        </div>               
			    <?php
			        endforeach; 
			        wp_reset_postdata();
			    ?>
		    </div>
	    </div>
	</div>	
</div>

	

<?php get_footer(); ?>
