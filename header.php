<!DOCTYPE html>
<html>
	<head>
		<title>SiTeBej - Every thing you want to know</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class();?>>
		<header>
			<div class="wrapper">
				<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
					<div class="headerTitle">
						<h1>"How<span>To</span>Do"</h1>
						<h2><?php bloginfo('description'); ?></h2>
					</div>
				</a>
						<?php
							wp_nav_menu(array("theme_location"=>"primary"));
						?>
			</div>
			<div class="headerline"></div>
		</header>
