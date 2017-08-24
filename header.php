<!DOCTYPE html>
<html lang="fa-ir" dir="rtl">
	<head>
		<title><?php if (is_home()) {bloginfo('name');}else{wp_title();} ?></title>
		<meta charset="utf-8"/>
		<meta content="آزش کدخدائی, وبلاگ آرش کدخدائی, نوشته‌های آرش کدخدائی, لینوکس, نرم افزار متن باز, فناوری, آزادی" name="keywords"/>
		<meta name="author" content="<?php the_author_meta('display_name', 1);?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=0.9"/>
		<link href="http://feeds.feedburner.com/kadkhodaei" title="نوشته‌های آرش کدخدائی" type="application/rss+xml" rel="alternate"/>
		<link media="screen" type="text/css" href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet"/>
        <link rel="apple-touch-icon-precomposed" href="http://kadkhodaei.ir/icon.png"/>
        <link rel="shortcut icon" href="http://kadkhodaei.ir/favicon.ico"/>
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