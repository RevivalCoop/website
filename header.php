<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://use.typekit.net/agx7drm.css">
		<script defer src="https://pro.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-GBwm0s/0wYcqnK/JmrCoRqWYIWzFiGEucsfFqkB76Ouii5+d4R31vWHPQtfhv55b" crossorigin="anonymous"></script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="header-main">
			<nav class="navbar navbar-light">
			  <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>/src/images/revival-logo.svg" alt="Revival Coop Logo"></a>
			</nav>
		</header>