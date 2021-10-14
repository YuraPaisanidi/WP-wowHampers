<?php
/* Template name: Corporate gifts */
get_header();
?>

<section class="corporate">
	<div class="corporate__container">
		<h4 class="corporate__title">Corporate gifts</h4>
		<div class="corporate__content">
			<div class="corporate__img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.png" alt="">
				<img class="confetti" src="<?php echo get_template_directory_uri(); ?>/assets/img/confetti-corp.png" alt="">
			</div>
			<div class="corporate__wrap">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>