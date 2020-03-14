<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

<!-- Page Banner Section -->

<div class="sec-padding --small d-table w-100 bg-center bg-cover" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/news-img.jpg)">
	<div class="container">
		<div class="row">
			<h1 class=" inside-h1 ta-center sec-padding --small fc-primary tt-uppercase ff-secondary theme-title fw-normal"> <?php the_field('heading'); ?></h1>  		

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
			                   
			                    <h6 class="title tt-uppercase">  
			                        <?php
			                            $char_limit = 40; //character limit
			                            $content = $post->post_title; //contents saved in a variable
			                            echo substr(strip_tags($content), 0, $char_limit);
			                        ?>
			                    </h6>                
			                    <br>
			                    <p class="mbpx-16">
			                        <?php $char_limit = 500; //character limit
			                            $content = $post->post_content; //contents saved in a variable
			                            echo substr(strip_tags($content), 0, $char_limit);
			                        ?> ..
			                    </p>
			                    <a href="<?php the_field('news'); ?> " target="blank" class="btn --small btn-bar">READ MORE</a>                
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
