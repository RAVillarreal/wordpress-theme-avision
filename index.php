<?php $template_path = get_template_directory_uri(); ?>

<?php get_header(); ?>

<!-- Home -->

<div class="home">
    <?php get_template_part('template-parts/header/header', 'slider' ); ?>
</div>

<!-- Page Content -->

<div class="page_content">
    <div class="container">
        <div class="row row-lg-eq-height">

            <!-- Main Content -->

            <div class="col-lg-9">
                <div class="main_content">

                    <?php get_template_part('template-parts/index/index', 'dont_miss'); ?>

                    <?php get_template_part('template-parts/index/index', 'trending'); ?>

                    <?php get_template_part('template-parts/index/index', 'videos'); ?>

                    <?php get_template_part('template-parts/index/index', 'latest'); ?>

                </div>

            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>


