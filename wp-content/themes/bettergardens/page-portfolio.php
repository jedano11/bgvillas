<?php

get_header(); ?>




<!-- Start Our Services section -->
<section class="home-services ptpx-80 ">
    <div class="clearfix">
        <div class="container-fluid">

             <?php while ( have_posts() ) : the_post(); ?>
            <div class="res-width">
                <div class="content-area">
                    <?php the_content();  ?>
                </div>     
            </div>
            <?php endwhile; ?>



            <!-- 1. Add latest jQuery and fancyBox files -->

			<!-- <script src="//code.jquery.com/jquery-3.3.1.min.js"></script> -->

			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
			<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

            <?php
            $args = array( 
                'post_type' => 'portfolio',
                'posts_per_page' => -1,
                'orderby'   => 'ASC'
            );
            $loop = new WP_Query( $args );
			$i = 0;
            while ( $loop->have_posts() ) : $loop->the_post();
			$i++;
			?>
                <div class="col-md-3">
                    <div class="box portfolio-box">
                        <figure class="sec-padding bg-cover bg-norepeat" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
                        </figure>

                        <div class="gallery-section clearfix">
                            <?php 
                            $portfolio = get_field('portfolio');
                            if( $portfolio ): ?>				    
                                    <?php 
										foreach( $portfolio as $image ): ?>
                                        <div class="gallery-block">
                                           <a data-fancybox="gallery<?php echo $i;?>" class="view-btn" 
					                           href="<?php echo $image['url']; ?>"> 
											&nbsp; </a>

                                        </div>
                                    <?php endforeach; ?>				    
                            <?php endif; ?>
                        </div>

                        <div class="inner-content ta-center">
                            <h6 class="title ptpx-10 pbpx-20 fw-normal ff-secondary"><?php the_title(''); ?></h6>
                            <p class="ptpx-10 fs-medium"> <?php the_content(); ?> </p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            
        </div>
    </div>
</section>
<!-- End Our Services section -->


<?php get_footer(); ?>