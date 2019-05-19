<!DOCTYPE html>
<!--[if lt IE 8 ]>
<html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Sparrow - Free Responsive HTML5/CSS3 Template</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/default.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/layout.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/media-queries.css">

    <!-- Script
    ================================================== -->
    <script src="<?php get_template_directory_uri(); ?>/assets/js/modernizr.js"></script>

    <!-- Favicons
     ================================================== -->
    <link rel="shortcut icon" href="favicon.ico">

    <?php wp_head() ?>

</head>

<body>

<!-- Header
================================================== -->
<header>

    <div class="row">

        <div class="twelve columns">

            <div class="logo">
                <a href="<?php bloginfo('url'); ?>">
                    <div class
                    ""><?php bloginfo('name'); ?></div>
            <!--                    <img alt="" src="-->
            <?php //echo get_template_directory_uri(); ?><!--/assets/images/logo.png">-->
            </a>
        </div>


        <nav id="nav-wrap">
            <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
            <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

            <?php wp_nav_menu(array(
                'theme_location' => 'Up Menu',
                'container' => null,
                'menu_class' => 'nav',
                'menu_id' => 'nav',
            )); ?>


<!--                        <ul id="nav" class="nav">-->
<!---->
<!--                            <li class="current"><a href="index.php">Home</a></li>-->
<!--                            <li><span><a href="index.php">Blog</a></span>-->
<!--                                <ul>-->
<!--                                    <li><a href="index.php">Blog Index</a></li>-->
<!--                                    <li><a href="index.php">Post</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li><span><a href="portfolio-index.html">Portfolio</a></span>-->
<!--                                <ul>-->
<!--                                    <li><a href="portfolio-index.html">Portfolio Index</a></li>-->
<!--                                    <li><a href="portfolio.html">Portfolio Entry</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li><a href="about.html">About</a></li>-->
<!--                            <li><a href="contact.html">Contact</a></li>-->
<!--                            <li><a href="styles.html">Features</a></li>-->
<!---->
<!--                        </ul>-->

        </nav>

    </div>

    </div>

</header> <!-- Header End -->