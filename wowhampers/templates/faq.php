<?php
/* Template name: FAQ page */
get_header();
?>

<section class="faq">
	<div class="faq__container">
		<h4 class="h4 faq__title">Help & info</h4>
		<?php if( have_rows('faq') ): ?>
			<div class="faq__wrap">
				<?php while( have_rows('faq') ): the_row(); 
					$title = get_sub_field('title');
					$content = get_sub_field('content');
					?>
					<div class="accordion">
						<div class="accordion__header">
							<p><?php echo $title; ?></p>
							<span></span>
						</div>
						<div class="accordion__content">
							<p>
								<?php echo $content; ?>
							</p>
						</div>
					</div>

				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div>
</section>

<?php get_footer(); ?>