<?php
	get_header();
?>
<article class="content wrapper">
	<?php while( have_posts() ):the_post();?>
			<div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div>
			<h1><?php the_title();?></h1>
			<p><?php the_content();?></p>

	<?php endwhile;?>
</article>
<?php
	get_footer();
?>