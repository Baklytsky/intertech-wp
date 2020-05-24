
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= __('Intertech Wordpress site'); ?>">
    <title>Intertech WP</title>
	<?php wp_head(); ?>
</head>

<body>
<div id="page">

	<!-- ******************* The Navbar Area ******************* -->
    <header id="header" class="container-fluid indent">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark indent d-flex justify-content-between">
	            <?php if ( is_front_page() || is_home() ) : ?>
		            <h1>
			            <?php my_logo(); ?>
		            </h1>
	            <?php else : ?>
		            <?php my_logo(); ?>
	            <?php endif; ?>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-three-bars icon-hamburger"></span>
                </button>
				<?php $args = array(
					'theme_location'  => '',
					'menu'            => 'main',
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarCollapse',
					'menu_class'      => 'navbar-nav text-center text-uppercase',
					'menu_id'         => 'main-nav-menu',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => new Walker_Nav_Menu(),
				);
				wp_nav_menu($args); ?>
            </nav><!-- .site-navigation -->
        </div>
    </header><!-- header end -->
