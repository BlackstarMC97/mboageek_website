<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_corlate
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php echo esc_url(get_template_directory_uri()); ?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?php echo esc_url(get_template_directory_uri()); ?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?php echo esc_url(get_template_directory_uri()); ?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="<?php echo esc_url(get_template_directory_uri()); ?>/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body <?php body_class('homepage'); ?>>
<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
    <div class="col-sm-2 col-xs-12">
        <div class="top-number">
            <span class="bs-toptext"><i class="fa fa-phone"></i>  +237 653 747 134 </span>
        </div>
    </div>
    
    <div class="col-sm-2 col-xs-12">
        <div class="top-number">
            <span class="bs-toptext"><i class="fa fa-phone"></i>  +237 655 669 952 </span>
        </div>
    </div>
    
    <div class="col-sm-2 col-xs-12">
        <div class="top-number">
            <span class="bs-toptext"><i class="fa fa-envelope"></i>  contact@mboageek.com </span>
        </div>
    </div>

				<div class="col-sm-2 col-xs-12">
    <div class="top-number">
        <span class="bs-toptext"><i class="fa fa-map-marker"></i>  <?php echo "Douala, Cameroun"; ?></span>
    </div>
</div>

    <div class="col-sm-4 col-xs-12">
        <div class="social">
            <ul class="social-share">
                <li><a href="https://facebook.com/ushideshi"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/GeekMboa"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://github.com/BlackstarMC97"><i class="fa fa-github"></i></a></li> 
            </ul>
            <div class="search">
                <form role="search" method="get" id="searchform" class="searchform"
                      action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="text" name="s" id="s" class="search-form" autocomplete="off"
                           placeholder="Rechercher">
                    <i class="fa fa-search"></i>
                </form>
            </div>
        </div>
    </div>
</div>
        </div><!--/.container-->
    </div><!--/.top-bar-->

    <?php require_once("menu.php"); ?>

</header><!--/header-->
