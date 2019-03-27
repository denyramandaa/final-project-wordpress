<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kompasinteraktif
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
    <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/kompas-digital-icon.png">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kompasinteraktif' ); ?></a>
	<header class="site-header" role="banner">
        <div class="navbar-wrapper">
            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="/" class="navbar-brand"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/kompas-white.svg" alt="Kompas"></a>
                    </div>
                    
                    <?php
                    	wp_nav_menu( array(
                    		'theme_location'	=> 'primary',
                    		'container'			=> 'nav',
                    		'container_class'	=> 'navbar-collapse collapse',
                    		'menu_class'		=> 'nav navbar-nav navbar-left'
                    	) );
                    ?>
                </div>
            </div>
        </div>
    </header>
