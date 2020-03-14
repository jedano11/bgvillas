<div class="sec-padding --small fc-secondary bg-spgrey bg-norepeat">
    <div class="container">
        <h2 class="ta-center sec-padding --small fc-primary tt-uppercase ff-secondary theme-title fw-normal">Latest News</h2>

        <div class="row news-slider dots-n-arrow --white-dots">
            <?php
                $args = array( 'post_type' => 'news', 'posts_per_page' => 10, 'order'=> 'ASC', 'orderby' => 'post_date' );
                $postslist = get_posts( $args );
                foreach ( $postslist as $post ) :
                setup_postdata( $post ); 
            ?>
                <div class='col-md-4'>
                    <div class="box news-box matchheight">
                        <figure data-img="url(<?php the_post_thumbnail_url('full')?>)"> </figure>
                        <div class="inner-content clearfix">
                            <div class="date tt-uppercase mbpx-10 fc-primary"> <!-- <i class="fa fa-clock-o prpx-6"></i>  --><?php echo get_the_date(); ?></div>
                            <h5 class="title fw-light ff-secondary">  
                                <?php
                                    $char_limit = 40; //character limit
                                    $content = $post->post_title; //contents saved in a variable
                                    echo substr(strip_tags($content), 0, $char_limit);
                                ?>
                            </h5>                
                            <br>
                            <p class="mbpx-16">
                                <?php $char_limit = 160; //character limit
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