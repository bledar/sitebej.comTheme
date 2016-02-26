<?php
	get_header();
/**

Template Name: Home template

*/
	$headerNews = new WP_Query("post_type=post&posts_per_page=5");
?>
<div class="sliderNews wrapper">
 <div id="headerSlider">
 		<?php while($headerNews->have_posts() ):$headerNews->the_post();?>
			<?php the_post_thumbnail("thumbnail"); the_title();?>
	<?php endwhile;?>

 </div>
 </div>

<article class="content wrapper">
	<?php while( have_posts() ):the_post();?>
			<h1>have som data here</h1>
			<h1><?php the_title();?></h1>
			<p><?php the_content();?></p>

	<?php endwhile;?>
</article>
<?php
	get_footer();
?>
