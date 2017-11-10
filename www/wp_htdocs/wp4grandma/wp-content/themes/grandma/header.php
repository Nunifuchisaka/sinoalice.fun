<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=320">
<meta name="format-detection" content="telephone=no">
<link rel="apple-touch-icon" href="http://sinoalice.fun/apple-touch-icon.png">
<meta name="apple-mobile-web-app-title" content="オバアチャン">
<!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->

<?php wp_head(); ?>

<title><?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">

<!-- ogp -->
<meta property="og:title" content="<?php bloginfo('name'); ?>">
<meta property="og:description" content="<?php bloginfo('description'); ?>">
<meta property="og:url" content="http://sinoalice.fun/">
<meta property="og:type" content="website">
<meta property="og:image" content="http://sinoalice.fun/<?php echo get_template_directory_uri(); ?>/assets/img/og_image.jpg">

<!-- twitter cards -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
<meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
<meta name="twitter:url" content="http://sinoalice.fun/" />
<meta name="twitter:image" content="http://sinoalice.fun/assets/img/og_image.jpg" />

<!-- stylesheet -->
<link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css?ver=2">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/utility.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/patch.css">

</head>

<body id="top" <?php body_class(); ?>>

<div class="l_wrapper_1">


<header class="g_header_1">
  <div class="g_header_1__1">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/g_header_1__bg.jpg" alt="" width="930" height="680" />
    <h1>SINoALICEギルド《オバアチャン》</h1>
    <!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a> -->
  </div>
</header>


<!--
<div class="g_nav_1__toggle"><a class="menu-trigger active" href="#gnav"><span></span><span></span><span></span></a></div>

<nav id="gnav" class="g_nav_1">
  <div class="g_nav_1__1">
    <?php
    wp_nav_menu( array(
      'theme_location'=>'gnav', 
      'container'     =>'', 
      'menu_class'    =>'',
      'items_wrap'    =>'<ul class="g_nav_1__items">%3$s</ul>')
    );
    ?>
  </div>
</nav>
-->
<!-- /#gnav -->


<div class="l_container_1">
