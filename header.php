<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Boss - Multipurpose Premium Html5 Template</title>
        <meta name="description" content="Multipurpose, premium, bootstrap based bussiness, corporate, portfolio, blog, onepage, creative, magazine, personal, landing, coming soon html5 css3 template">

        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/mediaelementplayer.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
        <link rel="stylesheet" id="color-scheme" href="<?php bloginfo('template_url'); ?>/css/colors/blue.css">
        
        <!-- Favicon and Apple Icons -->
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/icons/favicon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/images/icons/faviconx57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/icons/faviconx72.png">
        
        <!-- Modernizr -->
        <script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>

        <!--- jQuery -->
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>

        <?php wp_head(); ?>
    </head>
    <body>
   
    <div id="wrapper">
        <header id="header" role="banner">
            <div class="collapse navbar-white" id="header-search-form">
                <div class="container">
                    <form class="navbar-form animated fadeInDown"  role="search">
                        <input type="search" id="s" name="s" class="form-control" placeholder="Search in here...">
                        <button type="submit" class="btn-circle" title="Search"><i class="fa fa-search"></i></button>
                    </form>
                </div><!-- End .container -->
            </div><!-- End #header-search-form -->
            <?php include (TEMPLATEPATH .'/partials/nav.php') ?>
        </header><!-- End #header -->