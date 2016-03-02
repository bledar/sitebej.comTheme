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
<div class="wrapper content cf">
	<article>
		<?php while($headerNews->have_posts() ):$headerNews->the_post();?>
			<div class="postItems">
				<a href="<?php the_permalink();?>">
					<h2><?php the_title();?></h2>
				</a>
				<span class="date"><?php the_date();?></span>
				<?php the_post_thumbnail();?>
				<p>
					<?php the_excerpt("Read more.."); ?>
				</p>
			</div>
		<?php endwhile;?>
	</article>
	<div class="PinedPost sideBar">
		<div class="title"><h2>Follow us!</h2></div>
		<ul class="socialBTN cf">
			<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/facebook_btn.png" alt="facebook" /></a></li>
			<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/instagram_btn.png" alt="facebook" /></a></li>
			<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/g+_btn.png" alt="facebook" /></a></li>
			<li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/youtube_btn.png" alt="facebook" /></a></li>
		</ul>
		<div class="title"><h2>Pined Post!</h2></div>
		<?php
		 	$PinedPost=new WP_Query("post_type=post&posts_per_page=5&category_name=PinedPost");
			while($PinedPost->have_posts() ):$PinedPost->the_post();?>
			<div class="PinedPostItems cf">
				<a href="<?php the_permalink();?>">
					<?php the_post_thumbnail();?>
					<p><?php the_title();?></p>
				</a>
			</div>
		<?php endwhile;?>
		</div>
	</div>
</div>
<?php
	get_footer();
?>
