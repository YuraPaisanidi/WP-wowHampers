<?php
/* Template name: Main page */
get_header();
?>

<section class="hero">
	<div class="hero__container container">
		<div class="parallax parallax--1">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/confetti.png" alt="">
		</div>
		
		<?php if( have_rows('hero') ): ?>
			<div class="swiper hero__slider">
				<div class="swiper-wrapper hero__wrapper">
					<?php while( have_rows('hero') ): the_row(); 
						$title = get_sub_field('title');
						$subtitle = get_sub_field('subtitle');
						$img = get_sub_field('img');
						$span = get_sub_field('span');
						$color = get_sub_field('color');
						?>

						<div class="swiper-slide hero__slide hero__slide--<?php echo $color; ?>">
							<div class="hero__text">
								<p class="hero__text_subtitle">
									<?php echo $subtitle; ?>
								</p>
								<div class="hero__text_price">
									<h2 class="h2 hero__text_title">
										<?php echo $title; ?>
									</h2>
									<span class="hero__text_num"><?php echo $span; ?></span>
								</div>
								<div class="hero__btns">
									<a href="<?php echo get_home_url(); ?>/gifts" class="hero__btns_view btn">View Hampers!</a>
									<a href="<?php echo get_home_url(); ?>/product/build-wow-box/" class="hero__btns_view btn">Build WOW Box!</a>
								</div>
							</div>

							<div class="hero__img">
								<img src="<?php echo $img; ?>" alt="">
							</div>
						</div>

						

					<?php endwhile; ?>
				</div>
				<div class="swiper-pagination hero__slider_pagination"></div>
			</div>
		<?php endif; ?>



				<!--<div class="swiper-slide hero__slide hero__slide--color2">
					<div class="hero__text">
						<p class="hero__text_subtitle">
							No time for gift shopping? No stress!
						</p>
						<div class="hero__text_price">
							<h2 class="h2 hero__text_title">
								Wow Hampers here to save hours of your time with our unique hampers
							</h2>
						</div>
						<div class="hero__btns">
							<a href="#" class="hero__btns_view btn">View Hampers!</a>
							<a href="#" class="hero__btns_view btn">Build WOW Box!</a>
						</div>
					</div>

					<div class="hero__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/girl.png" alt="">
					</div>
				</div>

				<div class="swiper-slide hero__slide hero__slide--color3">
					<div class="hero__text">
						<p class="hero__text_subtitle">
							Runout of inspiration for cool gifts?
						</p>
						<div class="hero__text_price">
							<h2 class="h2 hero__text_title">
								Wow Hampers make you a gifting hero right on your comfy couch!
							</h2>
						</div>
						<div class="hero__btns">
							<a href="#" class="hero__btns_view btn">View Hampers!</a>
							<a href="#" class="hero__btns_view btn">Build WOW Box!</a>
						</div>
					</div>

					<div class="hero__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/man.png" alt="">
					</div>
				</div> -->


	</div>
</section>

<section class="steps">
	<div class="steps__container container">
		<div class="steps__img">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gif-4.gif" alt="">
		</div>
		<div class="steps__text">
			<h3 class="h3 steps__title">
				Build a custom hamper <br>in <span>3 simple steps:</span>
			</h3>
			<p class="steps__subtitle">
				Make someone smile with our range of beautiful personalised gift 
				boxes and bespoke gift hampers for all occasions. 
			</p>
			<ul class="steps__list">
				<li>
					<span>1</span>
					<p>Pick a box design</p>
				</li>
				<li>
					<span>2</span>
					<p>Fill with gifts</p>
				</li>
				<li>
					<span>3</span>
					<p>Add a message & we ship WOW right to the door!</p>
				</li>
			</ul>
			<a href="<?php echo get_home_url(); ?>/product/build-wow-box/" class="steps__btn btn">Build WOW box!</a>
		</div>
	</div>
</section>

<section class="categories">
	<div class="parallax parallax--2">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/confetti-2.png" alt="">
	</div>
	<div class="parallax parallax--3">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/confetti-3.png" alt="">
	</div>
	<div class="categories__container container">
		<h3 class="h3 categories__title">Make someone’s <span>day special!</span></h3>
		<p class="categories__subtitle">
			Explore our range of beautiful gifts for her and 
			modern gifts , all designed to inspire happiness. 
		</p>
		<div class="categories__wrap">
			<a href="<?php echo get_home_url(); ?>/gifts/?filter_cat_0=24" class="categories__item">
				<div class="categories__item_img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cat-1.png" alt="">
				</div>
				<span>For Her</span>
			</a>
			<a href="<?php echo get_home_url(); ?>/gifts/?filter_cat_0=25" class="categories__item">
				<div class="categories__item_img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cat-2.png" alt="">
				</div>
				<span>Party Hampers</span>
			</a>
			<a href="<?php echo get_home_url(); ?>/corporate-gifts" class="categories__item">
				<div class="categories__item_img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cat-3.png" alt="">
				</div>
				<span>Corporate gifts</span>
			</a>
		</div>
	</div>
</section>

<section class="gifts">

	<h3 class="h3 gifts__title">
		Looking for last minute <span>birthday gift ideas?</span>
	</h3>
	<p class="gifts__subtitle">
		We have a selection of thoughtful unique gift hampers that will make your loved 
		ones say WOW!<br>
		A meaningful gift will easily go a long way to show someone how much you care.

	</p>

	<div class="swiper gifts__slider">
		<div class="gifts__nav">
			<div class="swiper-button-prev gifts__prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/prev.svg" alt=""></div>
			<div class="swiper-button-next gifts__next"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/next.svg" alt=""></div>
		</div>
		<?php echo do_shortcode( '[product per_page="8" featured_products]' ); ?>
	</div>
	

	<a href="<?php echo get_home_url(); ?>/gifts" class="btn gifts__btn">See all</a>
</section>

<section class="email">
	<div class="email__container container">
		<div class="form email__form">
			<h3 class="h3 email__title">
				<span>Don't miss your chance</span> to get an individual free gifting consultation!
			</h3>
			<p class="email__subtitle">
				Subscribe for our newsletter and we will individually help your to choose a perfect gift hamper for any person and any occasion &#128157;
			</p>
			<div class="form__item email__item">
				<?php echo do_shortcode( '[caldera_form id="CF6169561f5e74b"]' ); ?>
			</div>
			
		</div>
	</div>
</section>



<?php if( have_rows('rev') ): ?>
	<section class="reviews">
		<div class="reviews__wrap">
			<?php while( have_rows('rev') ): the_row(); 
				$img = get_sub_field('img');
				$user = get_sub_field('user');
				$text = get_sub_field('text');
				$url = get_sub_field('url');
				?>

				<a href="<?php echo $url ?>" class="reviews__item" target="_blank">
					<div class="reviews__item_img">
						<img src="<?php echo $img ?>" alt="">
					</div>
					<div class="reviews__item_info">
						<div class="reviews__item_link">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.svg" alt="">
							<span><?php echo $user ?></span>
						</div>
						<p class="reviews__item_text">
							<?php echo $text ?>
						</p>
					</div>
				</a>

			<?php endwhile; ?>

		</div>
	</section>
<?php endif; ?>


<?php get_footer();