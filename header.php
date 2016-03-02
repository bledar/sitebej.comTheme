<!DOCTYPE html>
<html>
	<head>
		<title>SiTeBej - Every thing you want to know</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class();?>>
		<header>
			<div class="wrapper">
				<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
					<h1>"How<span>To</span>Do"</h1>
				</a>
			</div>
		</header>
		<nav class="cf">
			<div class="wrapper">
				<button id="navBTN" for="checkMenu" class="c-hamburger c-hamburger--htx">
					<span>toggle menu</span>
			   </button>
				<h2>

					<?php bloginfo('description'); ?>

				</h2>
				<?php
					wp_nav_menu(array("theme_location"=>"primary"));
				?>

			</div>
		</nav>
