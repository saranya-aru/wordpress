<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/slick.css"/>
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header">	
	<div class="container">
		<div class="menu-container">
			<div class="logo-sec">
			<img src="<?php bloginfo('template_url') ?>/images/logo.png">
			</div>
			<?php
			wp_nav_menu( array( 
			'theme_location' => 'my-custom-menu', 
					'container_class' => 'custom-menu-class' ) ); 
			?>
		</div>
	</div>
</div>
