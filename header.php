<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif; ?>
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="mw7 ph2 ph4-ns center">
			<header class="bb b--black-20 pt5 pb4">
				<nav class="flex items-center">
    				    <a class="flex items-center flex-auto link " href="<?php echo get_bloginfo('wpurl'); ?>">
    				        <img class="w100 mh3" src="<?php echo get_template_directory_uri() . '/images/SlashArash.svg'; ?>" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>">
                            <h1 class="f7 normal black-60">آرش کدخدائی</h1>
                        </a>
    				<?php wp_nav_menu (array( 'theme_location' => 'primary', 'container' => false, 'before'=>'<span>/</span>'));?>
				</nav>
			</header>