<?php
get_header();
?>

<section class="blog">
	<div class="blog__container">
		<h4 class="blog__title">Our Blog</h4>
		<div class="blog__content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<a href="<?php the_permalink(); ?>" class="blog__item">
					<div class="blog__item_top">
						<div class="blog__date">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pencil.svg" alt="">
							<p><?php the_time('d/m/Y'); ?></p>
						</div>
						<div class="blog__img">
							<?php the_post_thumbnail(); ?>
						</div>
					</div>
					<div class="blog__bottom">
						<p class="blog__name">
							<?php the_title(); ?>
						</p>
						<div class="blog__text">
							<?php the_excerpt(); ?>
						</div>
					</div>
				</a>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

		<?php wptuts_pagination(); ?>

	</div>
</section>

<?php get_footer(); ?>
