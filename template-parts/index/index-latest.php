<?php $template_path = get_template_directory_uri(); ?>

<!-- Blog Section - Latest -->

<div class="blog_section">
    <div class="section_panel d-flex flex-row align-items-center justify-content-start">
        <div class="section_title">Latest Articles</div>
    </div>
    <div class="section_content">
        <div class="grid clearfix">

            <?php
            $query = new WP_Query( array(
                'orderby' => 'date',
            ));
            ?>

            <?php if ( $query->have_posts() ) :?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <?php if($query->current_post == 0) :?>

                        <!-- Small Card With Image -->
                        <div class="card card_small_with_image grid-item">
                            <img class="card-img-top" src="<?php echo $template_path; ?>/images/post_10.jpg" alt="">
                            <div class="card-body">
                                <div class="card-title card-title-small"><a href="post.html"><?php the_title(); ?></a></div>
                                <small class="post_meta"><a href="#"><?php the_author(); ?></a><span><?php echo get_the_date('M j, Y \a\t g:i a', $post->ID); ?></span></small>
                            </div>
                        </div>

                    <?php elseif ($query->current_post == 1): ?>

                        <!-- Small Card Without Image -->
                        <div class="card card_default card_small_no_image grid-item">
                            <div class="card-body">
                                <div class="card-title card-title-small"><a href="post.html"><?php the_title(); ?></a></div>
                                <small class="post_meta"><a href="#"><?php the_author(); ?></a><span><?php echo get_the_date('M j, Y \a\t g:i a', $post->ID); ?></span></small>
                            </div>
                        </div>

                    <?php elseif ($query->current_post == 2 or $query->current_post == 3): ?>

                        <!-- Small Card With Image -->
                        <div class="card card_small_with_image grid-item">
                            <img class="card-img-top" src="<?php echo $template_path; ?>/images/post_15.jpg" alt="">
                            <div class="card-body">
                                <div class="card-title card-title-small"><a href="post.html"><?php the_title(); ?></a></div>
                                <small class="post_meta"><a href="#"><?php the_author(); ?></a><span><?php echo get_the_date('M j, Y \a\t g:i a', $post->ID); ?></span></small>
                            </div>
                        </div>

                    <?php elseif ($query->current_post == 4 or $query->current_post == 5): ?>

                        <!-- Small Card With Background -->
                        <div class="card card_default card_small_with_background grid-item">
                            <div class="card_background" style="background-image:url(<?php echo $template_path; ?>/images/post_11.jpg)"></div>
                            <div class="card-body">
                                <div class="card-title card-title-small"><a href="post.html"><?php the_title(); ?></a></div>
                                <small class="post_meta"><a href="#"><?php the_author(); ?></a><span><?php echo get_the_date('M j, Y \a\t g:i a', $post->ID); ?></span></small>
                            </div>
                        </div>

                    <?php elseif ($query->current_post == 4 or $query->current_post == 5): ?>

                        <!-- Default Card No Image -->
                        <div class="card card_default card_default_no_image grid-item">
                            <div class="card-body">
                                <div class="card-title card-title-small"><a href="post.html"><?php the_title(); ?></a></div>
                            </div>
                        </div>

                    <?php elseif ($query->current_post == 6): ?>

                        <!-- Small Card With Image -->
                        <div class="card card_small_with_image grid-item">
                            <img class="card-img-top" src="<?php echo $template_path; ?>/images/post_14.jpg" alt="">
                            <div class="card-body">
                                <div class="card-title card-title-small"><a href="post.html"><?php the_title(); ?></a></div>
                                <small class="post_meta"><a href="#"><?php the_author(); ?></a><span><?php echo get_the_date('M j, Y \a\t g:i a', $post->ID); ?></span></small>
                            </div>
                        </div>

                    <?php elseif ($query->current_post == 7 or $query->current_post == 8): ?>

                        <!-- Small Card Without Image -->
                        <div class="card card_default card_small_no_image grid-item">
                            <div class="card-body">
                                <div class="card-title card-title-small"><a href="post.html"><?php the_title(); ?></a></div>
                                <small class="post_meta"><a href="#"><?php the_author(); ?></a><span><?php echo get_the_date('M j, Y \a\t g:i a', $post->ID); ?></span></small>
                            </div>
                        </div>

                    <?php elseif ($query->current_post == 9 or 10): ?>

                        <!-- Default Card With Background -->
                        <div class="card card_default card_default_with_background grid-item">
                            <div class="card_background" style="background-image:url(<?php echo $template_path; ?>/images/post_12.jpg)"></div>
                            <div class="card-body">
                                <div class="card-title card-title-small"><a href="post.html"><?php the_title(); ?></a></div>
                            </div>
                        </div>

                    <?php endif; ?>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php echo __('No News'); ?></p>
            <?php endif; ?>

        </div>

    </div>
</div>

<div class="load_more">
    <div id="load_more" class="load_more_button text-center trans_200">Load More</div>
</div>