<?php $template_path = get_template_directory_uri(); ?>

<!-- Blog Section - What's Trending -->

<div class="blog_section">
    <div class="section_panel d-flex flex-row align-items-center justify-content-start">
        <div class="section_title">Trending</div>
        <?php $categories = get_categories(array(
            'orderby'=> 'ID',
        ));?>
        <?php $first_categories = array_slice($categories, 0,5);?>
        <?php $last_categories = array_slice($categories, 5);?>
        <div class="section_tags ml-auto">
            <ul>
                <?php foreach($first_categories as $category) {
                    echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                }?>
            </ul>
        </div>
        <div class="section_panel_more">
            <ul>
                <li>more
                    <ul>
                        <?php foreach($last_categories as $category) {
                            echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                        }?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="section_content">
        <div class="grid clearfix">

            <?php
            $query = new WP_Query( array(
                'orderby' => 'comment_count',
                'posts_per_page' => 7,
            ));
            ?>

            <?php if ( $query->have_posts() ) :?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <?php if (has_post_thumbnail()): ?>
                        <?php if($query->current_post == 0) :?>
                            <!-- Large Card With Background -->
                            <div class="card card_large_with_background grid-item">
                                <div class="card_background" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>"></div>
                                <div class="card-body">
                                    <div class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                    <small class="post_meta"><a href="#"><?php the_author(); ?></a><span><?php echo get_the_date('M j, Y \a\t g:i a', $post->ID); ?></span></small>
                                </div>
                            </div>

                        <?php elseif ($query->current_post == 1): ?>

                            <!-- Large Card With Image -->
                            <div class="card grid-item card_large_with_image">
                                <img class="card-img-top" src="<?php echo the_post_thumbnail_url(); ?>" alt="https://unsplash.com/@cjtagupa">
                                <div class="card-body">
                                    <div class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                    <small class="post_meta"><a href="#"><?php the_author(); ?></a><span><?php echo get_the_date('M j, Y \a\t g:i a', $post->ID); ?></span></small>
                                </div>
                            </div>

                        <?php elseif ($query->current_post == 2): ?>

                            <!-- Default Card With Image -->
                            <div class="card card_small_with_image grid-item">
                                <?php if ( has_post_thumbnail() ): ?>
                                    <img class="card-img-top" src="<?php echo the_post_thumbnail_url(); ?>" alt="https://unsplash.com/@cjtagupa">
                                <?php endif; ?>
                                <div class="card-body">
                                    <div class="card-title card-title-small"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                    <small class="post_meta"><a href="#"><?php the_author(); ?></a><span><?php echo get_the_date('M j, Y \a\t g:i a', $post->ID); ?></span></small>
                                </div>
                            </div>

                        <?php elseif ($query->current_post == 3): ?>

                            <!-- Default Card With Background -->

                            <div class="card card_default card_default_with_background grid-item">
                                <?php if ( has_post_thumbnail() ): ?>
                                    <div class="card_background" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>"></div>
                                <?php endif; ?>
                                <div class="card-body">
                                    <div class="card-title card-title-small"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                </div>
                            </div>

                        <?php elseif ($query->current_post == 6): ?>

                            <!-- Default Card With Background -->

                            <div class="card card_default card_default_with_background grid-item">
                                <?php if ( has_post_thumbnail() ): ?>
                                    <div class="card_background" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>"></div>
                                <?php endif; ?>
                                <div class="card-body">
                                    <div class="card-title card-title-small"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                </div>
                            </div>

                        <?php endif; ?>
                    <?php else:?>

                        <!-- Default Card No Image -->
                        <div class="card card_default card_default_no_image grid-item">
                            <div class="card-body">
                                <div class="card-title card-title-small"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
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