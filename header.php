<?php $template_path = get_template_directory_uri(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Avision</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo $template_path; ?>/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css">
<link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo $template_path; ?>/styles/responsive.css">
</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo"><a href="#">avision</a></div>
                        <nav class="main_nav">
                            <?php wp_nav_menu(array(
                                'container' => false,
                                'items_wrap' => '<ul>%3$s</ul>',
                                'theme_location' => 'menu'
                            ));?>
                        </nav>
                        <div class="search_container ml-auto">
                            <div class="weather">
                                <div class="temperature">+10°</div>
                                <img class="weather_icon" src="<?php echo $template_path; ?>/images/cloud.png" alt="">
                            </div>
                            <form action="#">
                                <input type="search" class="header_search_input" required="required" placeholder="Type to Search...">
                                <img class="header_search_icon" src="<?php echo $template_path; ?>/images/search.png" alt="">
                            </form>

                        </div>
                        <div class="hamburger ml-auto menu_mm">
                            <i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu -->

    <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
        <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
        <div class="logo menu_mm"><a href="#">Avision</a></div>
        <div class="search">
            <form action="#">
                <input type="search" class="header_search_input menu_mm" required="required" placeholder="Type to Search...">
                <img class="header_search_icon menu_mm" src="<?php echo $template_path; ?>/images/search_2.png" alt="">
            </form>
        </div>
        <nav class="menu_nav">
            <?php wp_nav_menu(array(
                'container' => false,
                'items_wrap' => '<ul class="menu_mm">%3$s</ul>',
                'theme_location' => 'menu'
            ));?>
        </nav>
    </div>
