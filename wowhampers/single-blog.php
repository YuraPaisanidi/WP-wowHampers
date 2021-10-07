<?php 
get_header(); ?>


<section class="article">
	<div class="article__container">
		<div class="article__breadcrumbs">
			<a href="<?php echo get_home_url(); ?>/blog">Our Blog</a>
		</div>
		<article class="article__item">
			<?php the_field('article'); ?>
	</div>
</section>

<?php get_footer(); ?>
