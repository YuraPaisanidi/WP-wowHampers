<?php
/* Template name: Main page */
get_header();
?>

<section class="hero">
	<div class="hero__container container">
		<div class="parallax parallax--1">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/confetti.png" alt="">
		</div>
		<div class="swiper hero__slider">
			<div class="swiper-wrapper hero__wrapper">

				<div class="swiper-slide hero__slide hero__slide--color1">
					<div class="hero__text">
						<p class="hero__text_subtitle">
							Awesome gifts are pricey? Not anymore!
						</p>
						<div class="hero__text_price">
							<h2 class="h2 hero__text_title">
								Wow Hampers<br> starting just at
							</h2>
							<span class="hero__text_num"><span>$</span>50</span>
						</div>
						<div class="hero__btns">
							<a href="#" class="hero__btns_view btn">View Hampers!</a>
							<a href="#" class="hero__btns_view btn">Build WOW Box!</a>
						</div>
					</div>

					<div class="hero__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/box.png" alt="">
					</div>
				</div>

				<div class="swiper-slide hero__slide hero__slide--color2">
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
				</div>

			</div>
			<div class="swiper-pagination hero__slider_pagination"></div>
		</div>
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
		<div class="swiper-wrapper gifts__wrapper">
			<a href="#" class="swiper-slide gifts__slide">
				<div class="gifts__slide_top">
					<span class="gifts__slide_label">New</span>
					<div class="gifts__slide_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gift.jpg" alt="">
					</div>
				</div>
				<div class="gifts__slide_bottom">
					<p class="gifts__slide_price"><s>$55</s>$36</p>
					<p class="gifts__slide_name">Dreambox</p>
					<div class="gifts__slide_btns">
						<button class="wishlist">
							<svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.2913 2.61183C19.7805 2.10083 19.1741 1.69547 18.5066 1.41891C17.8392 1.14235 17.1238 1 16.4013 1C15.6788 1 14.9634 1.14235 14.2959 1.41891C13.6285 1.69547 13.022 2.10083 12.5113 2.61183L11.4513 3.67183L10.3913 2.61183C9.3596 1.58013 7.96032 1.00053 6.50129 1.00053C5.04226 1.00053 3.64298 1.58013 2.61129 2.61183C1.5796 3.64352 1 5.04279 1 6.50183C1 7.96086 1.5796 9.36013 2.61129 10.3918L3.67129 11.4518L11.4513 19.2318L19.2313 11.4518L20.2913 10.3918C20.8023 9.88107 21.2076 9.27464 21.4842 8.60718C21.7608 7.93972 21.9031 7.22431 21.9031 6.50183C21.9031 5.77934 21.7608 5.06393 21.4842 4.39647C21.2076 3.72901 20.8023 3.12258 20.2913 2.61183V2.61183Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
						<button class="cart">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
					</div>
				</div>
			</a>
			<a href="#" class="swiper-slide gifts__slide">
				<div class="gifts__slide_top">
					<span class="gifts__slide_label">New</span>
					<div class="gifts__slide_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gift.jpg" alt="">
					</div>
				</div>
				<div class="gifts__slide_bottom">
					<p class="gifts__slide_price"><s>$55</s>$36</p>
					<p class="gifts__slide_name">Dreambox</p>
					<div class="gifts__slide_btns">
						<button class="wishlist">
							<svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.2913 2.61183C19.7805 2.10083 19.1741 1.69547 18.5066 1.41891C17.8392 1.14235 17.1238 1 16.4013 1C15.6788 1 14.9634 1.14235 14.2959 1.41891C13.6285 1.69547 13.022 2.10083 12.5113 2.61183L11.4513 3.67183L10.3913 2.61183C9.3596 1.58013 7.96032 1.00053 6.50129 1.00053C5.04226 1.00053 3.64298 1.58013 2.61129 2.61183C1.5796 3.64352 1 5.04279 1 6.50183C1 7.96086 1.5796 9.36013 2.61129 10.3918L3.67129 11.4518L11.4513 19.2318L19.2313 11.4518L20.2913 10.3918C20.8023 9.88107 21.2076 9.27464 21.4842 8.60718C21.7608 7.93972 21.9031 7.22431 21.9031 6.50183C21.9031 5.77934 21.7608 5.06393 21.4842 4.39647C21.2076 3.72901 20.8023 3.12258 20.2913 2.61183V2.61183Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
						<button class="cart">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
					</div>
				</div>
			</a>
			<a href="#" class="swiper-slide gifts__slide">
				<div class="gifts__slide_top">
					<span class="gifts__slide_label">New</span>
					<div class="gifts__slide_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gift.jpg" alt="">
					</div>
				</div>
				<div class="gifts__slide_bottom">
					<p class="gifts__slide_price"><s>$55</s>$36</p>
					<p class="gifts__slide_name">Dreambox</p>
					<div class="gifts__slide_btns">
						<button class="wishlist">
							<svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.2913 2.61183C19.7805 2.10083 19.1741 1.69547 18.5066 1.41891C17.8392 1.14235 17.1238 1 16.4013 1C15.6788 1 14.9634 1.14235 14.2959 1.41891C13.6285 1.69547 13.022 2.10083 12.5113 2.61183L11.4513 3.67183L10.3913 2.61183C9.3596 1.58013 7.96032 1.00053 6.50129 1.00053C5.04226 1.00053 3.64298 1.58013 2.61129 2.61183C1.5796 3.64352 1 5.04279 1 6.50183C1 7.96086 1.5796 9.36013 2.61129 10.3918L3.67129 11.4518L11.4513 19.2318L19.2313 11.4518L20.2913 10.3918C20.8023 9.88107 21.2076 9.27464 21.4842 8.60718C21.7608 7.93972 21.9031 7.22431 21.9031 6.50183C21.9031 5.77934 21.7608 5.06393 21.4842 4.39647C21.2076 3.72901 20.8023 3.12258 20.2913 2.61183V2.61183Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
						<button class="cart">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
					</div>
				</div>
			</a>
			<a href="#" class="swiper-slide gifts__slide">
				<div class="gifts__slide_top">
					<span class="gifts__slide_label">New</span>
					<div class="gifts__slide_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gift.jpg" alt="">
					</div>
				</div>
				<div class="gifts__slide_bottom">
					<p class="gifts__slide_price"><s>$55</s>$36</p>
					<p class="gifts__slide_name">Dreambox</p>
					<div class="gifts__slide_btns">
						<button class="wishlist">
							<svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.2913 2.61183C19.7805 2.10083 19.1741 1.69547 18.5066 1.41891C17.8392 1.14235 17.1238 1 16.4013 1C15.6788 1 14.9634 1.14235 14.2959 1.41891C13.6285 1.69547 13.022 2.10083 12.5113 2.61183L11.4513 3.67183L10.3913 2.61183C9.3596 1.58013 7.96032 1.00053 6.50129 1.00053C5.04226 1.00053 3.64298 1.58013 2.61129 2.61183C1.5796 3.64352 1 5.04279 1 6.50183C1 7.96086 1.5796 9.36013 2.61129 10.3918L3.67129 11.4518L11.4513 19.2318L19.2313 11.4518L20.2913 10.3918C20.8023 9.88107 21.2076 9.27464 21.4842 8.60718C21.7608 7.93972 21.9031 7.22431 21.9031 6.50183C21.9031 5.77934 21.7608 5.06393 21.4842 4.39647C21.2076 3.72901 20.8023 3.12258 20.2913 2.61183V2.61183Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
						<button class="cart">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
					</div>
				</div>
			</a>
			<a href="#" class="swiper-slide gifts__slide">
				<div class="gifts__slide_top">
					<span class="gifts__slide_label">New</span>
					<div class="gifts__slide_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gift.jpg" alt="">
					</div>
				</div>
				<div class="gifts__slide_bottom">
					<p class="gifts__slide_price"><s>$55</s>$36</p>
					<p class="gifts__slide_name">Dreambox</p>
					<div class="gifts__slide_btns">
						<button class="wishlist">
							<svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.2913 2.61183C19.7805 2.10083 19.1741 1.69547 18.5066 1.41891C17.8392 1.14235 17.1238 1 16.4013 1C15.6788 1 14.9634 1.14235 14.2959 1.41891C13.6285 1.69547 13.022 2.10083 12.5113 2.61183L11.4513 3.67183L10.3913 2.61183C9.3596 1.58013 7.96032 1.00053 6.50129 1.00053C5.04226 1.00053 3.64298 1.58013 2.61129 2.61183C1.5796 3.64352 1 5.04279 1 6.50183C1 7.96086 1.5796 9.36013 2.61129 10.3918L3.67129 11.4518L11.4513 19.2318L19.2313 11.4518L20.2913 10.3918C20.8023 9.88107 21.2076 9.27464 21.4842 8.60718C21.7608 7.93972 21.9031 7.22431 21.9031 6.50183C21.9031 5.77934 21.7608 5.06393 21.4842 4.39647C21.2076 3.72901 20.8023 3.12258 20.2913 2.61183V2.61183Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
						<button class="cart">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
					</div>
				</div>
			</a>
			<a href="#" class="swiper-slide gifts__slide">
				<div class="gifts__slide_top">
					<span class="gifts__slide_label">New</span>
					<div class="gifts__slide_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gift.jpg" alt="">
					</div>
				</div>
				<div class="gifts__slide_bottom">
					<p class="gifts__slide_price"><s>$55</s>$36</p>
					<p class="gifts__slide_name">Dreambox</p>
					<div class="gifts__slide_btns">
						<button class="wishlist">
							<svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.2913 2.61183C19.7805 2.10083 19.1741 1.69547 18.5066 1.41891C17.8392 1.14235 17.1238 1 16.4013 1C15.6788 1 14.9634 1.14235 14.2959 1.41891C13.6285 1.69547 13.022 2.10083 12.5113 2.61183L11.4513 3.67183L10.3913 2.61183C9.3596 1.58013 7.96032 1.00053 6.50129 1.00053C5.04226 1.00053 3.64298 1.58013 2.61129 2.61183C1.5796 3.64352 1 5.04279 1 6.50183C1 7.96086 1.5796 9.36013 2.61129 10.3918L3.67129 11.4518L11.4513 19.2318L19.2313 11.4518L20.2913 10.3918C20.8023 9.88107 21.2076 9.27464 21.4842 8.60718C21.7608 7.93972 21.9031 7.22431 21.9031 6.50183C21.9031 5.77934 21.7608 5.06393 21.4842 4.39647C21.2076 3.72901 20.8023 3.12258 20.2913 2.61183V2.61183Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
						<button class="cart">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
					</div>
				</div>
			</a>
			<a href="#" class="swiper-slide gifts__slide">
				<div class="gifts__slide_top">
					<span class="gifts__slide_label">New</span>
					<div class="gifts__slide_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gift.jpg" alt="">
					</div>
				</div>
				<div class="gifts__slide_bottom">
					<p class="gifts__slide_price"><s>$55</s>$36</p>
					<p class="gifts__slide_name">Dreambox</p>
					<div class="gifts__slide_btns">
						<button class="wishlist">
							<svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.2913 2.61183C19.7805 2.10083 19.1741 1.69547 18.5066 1.41891C17.8392 1.14235 17.1238 1 16.4013 1C15.6788 1 14.9634 1.14235 14.2959 1.41891C13.6285 1.69547 13.022 2.10083 12.5113 2.61183L11.4513 3.67183L10.3913 2.61183C9.3596 1.58013 7.96032 1.00053 6.50129 1.00053C5.04226 1.00053 3.64298 1.58013 2.61129 2.61183C1.5796 3.64352 1 5.04279 1 6.50183C1 7.96086 1.5796 9.36013 2.61129 10.3918L3.67129 11.4518L11.4513 19.2318L19.2313 11.4518L20.2913 10.3918C20.8023 9.88107 21.2076 9.27464 21.4842 8.60718C21.7608 7.93972 21.9031 7.22431 21.9031 6.50183C21.9031 5.77934 21.7608 5.06393 21.4842 4.39647C21.2076 3.72901 20.8023 3.12258 20.2913 2.61183V2.61183Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
						<button class="cart">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
					</div>
				</div>
			</a>
			<a href="#" class="swiper-slide gifts__slide">
				<div class="gifts__slide_top">
					<span class="gifts__slide_label">New</span>
					<div class="gifts__slide_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gift.jpg" alt="">
					</div>
				</div>
				<div class="gifts__slide_bottom">
					<p class="gifts__slide_price"><s>$55</s>$36</p>
					<p class="gifts__slide_name">Dreambox</p>
					<div class="gifts__slide_btns">
						<button class="wishlist">
							<svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.2913 2.61183C19.7805 2.10083 19.1741 1.69547 18.5066 1.41891C17.8392 1.14235 17.1238 1 16.4013 1C15.6788 1 14.9634 1.14235 14.2959 1.41891C13.6285 1.69547 13.022 2.10083 12.5113 2.61183L11.4513 3.67183L10.3913 2.61183C9.3596 1.58013 7.96032 1.00053 6.50129 1.00053C5.04226 1.00053 3.64298 1.58013 2.61129 2.61183C1.5796 3.64352 1 5.04279 1 6.50183C1 7.96086 1.5796 9.36013 2.61129 10.3918L3.67129 11.4518L11.4513 19.2318L19.2313 11.4518L20.2913 10.3918C20.8023 9.88107 21.2076 9.27464 21.4842 8.60718C21.7608 7.93972 21.9031 7.22431 21.9031 6.50183C21.9031 5.77934 21.7608 5.06393 21.4842 4.39647C21.2076 3.72901 20.8023 3.12258 20.2913 2.61183V2.61183Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
						<button class="cart">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
					</div>
				</div>
			</a>
			<a href="#" class="swiper-slide gifts__slide">
				<div class="gifts__slide_top">
					<span class="gifts__slide_label">New</span>
					<div class="gifts__slide_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gift.jpg" alt="">
					</div>
				</div>
				<div class="gifts__slide_bottom">
					<p class="gifts__slide_price"><s>$55</s>$36</p>
					<p class="gifts__slide_name">Dreambox</p>
					<div class="gifts__slide_btns">
						<button class="wishlist">
							<svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.2913 2.61183C19.7805 2.10083 19.1741 1.69547 18.5066 1.41891C17.8392 1.14235 17.1238 1 16.4013 1C15.6788 1 14.9634 1.14235 14.2959 1.41891C13.6285 1.69547 13.022 2.10083 12.5113 2.61183L11.4513 3.67183L10.3913 2.61183C9.3596 1.58013 7.96032 1.00053 6.50129 1.00053C5.04226 1.00053 3.64298 1.58013 2.61129 2.61183C1.5796 3.64352 1 5.04279 1 6.50183C1 7.96086 1.5796 9.36013 2.61129 10.3918L3.67129 11.4518L11.4513 19.2318L19.2313 11.4518L20.2913 10.3918C20.8023 9.88107 21.2076 9.27464 21.4842 8.60718C21.7608 7.93972 21.9031 7.22431 21.9031 6.50183C21.9031 5.77934 21.7608 5.06393 21.4842 4.39647C21.2076 3.72901 20.8023 3.12258 20.2913 2.61183V2.61183Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
						<button class="cart">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
					</div>
				</div>
			</a>
			<a href="#" class="swiper-slide gifts__slide">
				<div class="gifts__slide_top">
					<span class="gifts__slide_label">New</span>
					<div class="gifts__slide_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/gift.jpg" alt="">
					</div>
				</div>
				<div class="gifts__slide_bottom">
					<p class="gifts__slide_price"><s>$55</s>$36</p>
					<p class="gifts__slide_name">Dreambox</p>
					<div class="gifts__slide_btns">
						<button class="wishlist">
							<svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.2913 2.61183C19.7805 2.10083 19.1741 1.69547 18.5066 1.41891C17.8392 1.14235 17.1238 1 16.4013 1C15.6788 1 14.9634 1.14235 14.2959 1.41891C13.6285 1.69547 13.022 2.10083 12.5113 2.61183L11.4513 3.67183L10.3913 2.61183C9.3596 1.58013 7.96032 1.00053 6.50129 1.00053C5.04226 1.00053 3.64298 1.58013 2.61129 2.61183C1.5796 3.64352 1 5.04279 1 6.50183C1 7.96086 1.5796 9.36013 2.61129 10.3918L3.67129 11.4518L11.4513 19.2318L19.2313 11.4518L20.2913 10.3918C20.8023 9.88107 21.2076 9.27464 21.4842 8.60718C21.7608 7.93972 21.9031 7.22431 21.9031 6.50183C21.9031 5.77934 21.7608 5.06393 21.4842 4.39647C21.2076 3.72901 20.8023 3.12258 20.2913 2.61183V2.61183Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
						<button class="cart">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="#4A4967" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
					</div>
				</div>
			</a>
		</div>
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

<section class="reviews">
	<div class="reviews__wrap">
		<div class="reviews__item">
			<div class="reviews__item_img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/review.jpg" alt="">
			</div>
			<div class="reviews__item_info">
				<div class="reviews__item_link">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.svg" alt="">
					<span>@username1234</span>
				</div>
				<p class="reviews__item_text">
					Tristique tellus volutpat praesent tristique aliquam id. Molestie 
					adipiscing accumsan, arcu tortor etiam tristique.
				</p>
			</div>
		</div>
		<div class="reviews__item">
			<div class="reviews__item_img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/review.jpg" alt="">
			</div>
			<div class="reviews__item_info">
				<div class="reviews__item_link">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.svg" alt="">
					<span>@username1234</span>
				</div>
				<p class="reviews__item_text">
					Tristique tellus volutpat praesent tristique aliquam id. Molestie 
					adipiscing accumsan, arcu tortor etiam tristique.
				</p>
			</div>
		</div>
		<div class="reviews__item">
			<div class="reviews__item_img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/review.jpg" alt="">
			</div>
			<div class="reviews__item_info">
				<div class="reviews__item_link">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.svg" alt="">
					<span>@username1234</span>
				</div>
				<p class="reviews__item_text">
					Tristique tellus volutpat praesent tristique aliquam id. Molestie 
					adipiscing accumsan, arcu tortor etiam tristique.
				</p>
			</div>
		</div>
		<div class="reviews__item">
			<div class="reviews__item_img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/review.jpg" alt="">
			</div>
			<div class="reviews__item_info">
				<div class="reviews__item_link">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.svg" alt="">
					<span>@username1234</span>
				</div>
				<p class="reviews__item_text">
					Tristique tellus volutpat praesent tristique aliquam id. Molestie 
					adipiscing accumsan, arcu tortor etiam tristique.
				</p>
			</div>
		</div>
		<div class="reviews__item">
			<div class="reviews__item_img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/review.jpg" alt="">
			</div>
			<div class="reviews__item_info">
				<div class="reviews__item_link">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.svg" alt="">
					<span>@username1234</span>
				</div>
				<p class="reviews__item_text">
					Tristique tellus volutpat praesent tristique aliquam id. Molestie 
					adipiscing accumsan, arcu tortor etiam tristique.
				</p>
			</div>
		</div>
		<div class="reviews__item">
			<div class="reviews__item_img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/review.jpg" alt="">
			</div>
			<div class="reviews__item_info">
				<div class="reviews__item_link">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.svg" alt="">
					<span>@username1234</span>
				</div>
				<p class="reviews__item_text">
					Tristique tellus volutpat praesent tristique aliquam id. Molestie 
					adipiscing accumsan, arcu tortor etiam tristique.
				</p>
			</div>
		</div>
		<div class="reviews__item">
			<div class="reviews__item_img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/review.jpg" alt="">
			</div>
			<div class="reviews__item_info">
				<div class="reviews__item_link">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.svg" alt="">
					<span>@username1234</span>
				</div>
				<p class="reviews__item_text">
					Tristique tellus volutpat praesent tristique aliquam id. Molestie 
					adipiscing accumsan, arcu tortor etiam tristique.
				</p>
			</div>
		</div>
		<div class="reviews__item">
			<div class="reviews__item_img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/review.jpg" alt="">
			</div>
			<div class="reviews__item_info">
				<div class="reviews__item_link">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.svg" alt="">
					<span>@username1234</span>
				</div>
				<p class="reviews__item_text">
					Tristique tellus volutpat praesent tristique aliquam id. Molestie 
					adipiscing accumsan, arcu tortor etiam tristique.
				</p>
			</div>
		</div>
		<div class="reviews__item">
			<div class="reviews__item_img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/review.jpg" alt="">
			</div>
			<div class="reviews__item_info">
				<div class="reviews__item_link">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.svg" alt="">
					<span>@username1234</span>
				</div>
				<p class="reviews__item_text">
					Tristique tellus volutpat praesent tristique aliquam id. Molestie 
					adipiscing accumsan, arcu tortor etiam tristique.
				</p>
			</div>
		</div>
		<div class="reviews__item">
			<div class="reviews__item_img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/review.jpg" alt="">
			</div>
			<div class="reviews__item_info">
				<div class="reviews__item_link">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.svg" alt="">
					<span>@username1234</span>
				</div>
				<p class="reviews__item_text">
					Tristique tellus volutpat praesent tristique aliquam id. Molestie 
					adipiscing accumsan, arcu tortor etiam tristique.
				</p>
			</div>
		</div>
	</div>
</section>

<?php get_footer();