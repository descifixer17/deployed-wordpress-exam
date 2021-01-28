<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<html>
<head>
<title>Deployed Exam</title>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css'; ?>">
<script src="https://kit.fontawesome.com/d260f08ad5.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>
<header id="ttr_header">
<nav class="navbar navbar-expand-lg navbar-light">
    <?php
        if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        } 
    ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav" aria-controls="header-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="header-nav">
    <ul class="navbar-nav ml-auto">
        <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu(
                    array(
                        'container'  => '',
                        'items_wrap' => '%3$s',
                        'add_li_class'  => 'nav-item',
                        'theme_location' => 'primary'
                    )
                );
            } elseif ( ! has_nav_menu( 'expanded' ) ) {
                wp_list_pages(
                    array(
                        'match_menu_classes' => true,
                        'show_sub_menu_icons' => true,
                        'title_li' => false,
                        'walker'   => new TwentyTwenty_Walker_Page(),
                    )
                );
            }
        ?>
    </ul>
  </div>
</nav>
    
</header>
    
<main role="main">