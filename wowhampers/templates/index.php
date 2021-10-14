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
									<a href="<?php echo get_home_url(); ?>/shop" class="hero__btns_view btn">View Hampers!</a>
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
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gif.gif" alt="">
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
			<a href="#" class="steps__btn btn">Build WOW box!</a>
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
			<a href="#" class="categories__item">
				<div class="categories__item_img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cat-1.png" alt="">
				</div>
				<span>For Her</span>
			</a>
			<a href="#" class="categories__item">
				<div class="categories__item_img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cat-2.png" alt="">
				</div>
				<span>Party Hampers</span>
			</a>
			<a href="#" class="categories__item">
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
		<?php echo do_shortcode( '[product per_page="8"]' ); ?>
	</div>
	

	<a href="#" class="btn gifts__btn">See all</a>
</section>

<section class="email">
	<div class="email__container container">
		<form action="#" method="POST" class="form email__form">
			<h3 class="h3 email__title">
				<span>Don’t miss your chance</span> to be aware of new products!
			</h3>
			<p class="email__subtitle">
				Commodo, eu tristique sed nulla malesuada porttitor morbi purus eros. 
				Turpis rutrum nunc consequat, elementum, vel molestie volutpat auctor.
			</p>
			<div class="form__item email__item">
				<input id="formMail" type="email" name="mail" placeholder="Your Email" class="form__input email__input _req _email">
				<button type="submit" class="form__btn_button email__btn" name="submit">
					<svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9.35355 4.35355C9.54882 4.15829 9.54882 3.84171 9.35355 3.64645L6.17157 0.464466C5.97631 0.269204 5.65973 0.269204 5.46447 0.464466C5.2692 0.659728 5.2692 0.976311 5.46447 1.17157L8.29289 4L5.46447 6.82843C5.2692 7.02369 5.2692 7.34027 5.46447 7.53553C5.65973 7.7308 5.97631 7.7308 6.17157 7.53553L9.35355 4.35355ZM0 4.5H9V3.5H0V4.5Z" fill="#4A4967"/>
					</svg>
				</button>
			</div>
		</form>
	</div>
</section>



<?php if( have_rows('rev') ): ?>
	<section class="reviews">
		<div class="reviews__wrap">
			<?php while( have_rows('rev') ): the_row(); 
				$img = get_sub_field('img');
				$user = get_sub_field('user');
				$text = get_sub_field('text');
				// $icon = get_sub_field('icon');
				?>

				<div class="reviews__item">
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
				</div>

			<?php endwhile; ?>

		</div>
	</section>
<?php endif; ?>


<?php get_footer();