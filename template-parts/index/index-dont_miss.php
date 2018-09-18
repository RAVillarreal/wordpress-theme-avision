<?php $template_path = get_template_directory_uri(); ?>

<!-- Blog Section - Don't Miss -->

<div class="blog_section">
    <div class="section_panel d-flex flex-row align-items-center justify-content-start">
        <div class="section_title">Don't Miss</div>
        <div class="section_tags ml-auto">
            <ul>
                <li class="active"><a href="category.html">all</a></li>
                <li><a href="category.html">style hunter</a></li>
                <li><a href="category.html">vogue</a></li>
                <li><a href="category.html">health & fitness</a></li>
                <li><a href="category.html">travel</a></li>
            </ul>
        </div>
        <div class="section_panel_more">
            <ul>
                <li>more
                    <ul>
                        <li><a href="category.html">new look 2018</a></li>
                        <li><a href="category.html">street fashion</a></li>
                        <li><a href="category.html">business</a></li>
                        <li><a href="category.html">recipes</a></li>
                        <li><a href="category.html">sport</a></li>
                        <li><a href="category.html">celebrities</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="section_content">
        <div class="grid clearfix">

            <?php
            $query = new WP_Query( array(
                'orderby' => 'date',
                'posts_per_page' => 8,
            ));
            ?>

            <?php if ( $query->have_posts() ) :?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <?php if($query->current_post == 0) :?>
                        <!-- Largest Card With Image -->
                        <div class="card card_largest_with_image grid-item">
                            <?php if ( has_post_thumbnail() ): ?>
                                <img class="card-img-top" src="<?php echo the_post_thumbnail_url(); ?>" alt="https://unsplash.com/@cjtagupa">
                            <?php endif; ?>
                            <div class="card-body">
                                <div class="card-title"><a href="post.html"><?php the_title(); ?></a></div>
                                <p class="card-text"><?php the_excerpt()?></p>
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

                    <?php elseif ($query->current_post == 2): ?>

                        <!-- Small Card With Background -->
                        <div class="card card_default card_small_with_background grid-item">
                            <div class="card_background" style="background-image:url(<?php echo $template_path; ?>/images/post_4.jpg)"></div>
                            <div class="card-body">
                                <div class="card-title card-title-small"><a href="post.html"><?php the_title(); ?></a></div>
                                <small class="post_meta"><a href="#"><?php the_author(); ?></a><span><?php echo get_the_date('M j, Y \a\t g:i a', $post->ID); ?></span></small>
                            </div>
                        </div>

                    <?php elseif ($query->current_post == 3 or $query->current_post == 4): ?>

                        <!-- Small Card With Image -->
                        <div class="card card_small_with_image grid-item">
                            <img class="card-img-top" src="<?php echo $template_path; ?>/images/post_2.jpg" alt="https://unsplash.com/@jakobowens1">
                            <div class="card-body">
                                <div class="card-title card-title-small"><a href="post.html"><?php the_title(); ?></a></div>
                                <small class="post_meta"><a href="#"><?php the_author(); ?></a><span><?php echo get_the_date('M j, Y \a\t g:i a', $post->ID); ?></span></small>
                            </div>
                        </div>

                    <?php else :?>

                        <!-- Default Card No Image -->

                        <div class="card card_default card_default_no_image grid-item">
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
