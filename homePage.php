<?php
	get_header();
/**
Template Name: Home template
*/
global $more;
$more = 1;
	$headerNews = new WP_Query("post_type=post&posts_per_page=10");
?>
<div class="slider wrapper">
	<div class="owl-carousel">
		<?php while($headerNews->have_posts() ):$headerNews->the_post();?>
			<div class="sliderItem">
				<a href="<?php the_permalink();?>"><?php the_post_thumbnail("thumbnail");?>
				<span class="date"><?php the_date();?></span>
				<h2><?php the_title();?></h2></a>
			</div>
		<?php endwhile;?>
	</div>
 </div>
<div class="wrapper content">
	<article>
		<?php while($headerNews->have_posts() ):$headerNews->the_post();?>
				<a href="<?php the_permalink();?>">
					<h2><?php the_title();?></h2>
				</a>
				<span class="date"><?php the_date();?></span>
				<?php the_post_thumbnail();?>
				<p>
					<?php the_excerpt("Read more.."); ?>
				</p>
		<?php endwhile;?>
	</article>
</div>
<?php
	get_footer();
?>
