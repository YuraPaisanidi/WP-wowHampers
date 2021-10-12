<header class="header">
	<div class="header__container container">

		<nav class="header__nav">
			<?php 
				wp_nav_menu( array(
					'menu'=>'menu-header',
					'menu_class'=>'header__nav_menu',
					'theme_location'=>'menu',
					) );
				?>
		</nav>

		<a href="/" class="header__logo">
			<img src="<?php the_field('logo', 'option'); ?>" alt="">
		</a>

		<div class="header__btns">

			<div class="header__btns_item header__btns_item--search">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/search.svg" alt="">
					<ul>
						<li>
							<!-- <input type="search"> -->
						</li>
					</ul>
				</a>
			</div>

			<div class="header__btns_item">
			<?php echo do_shortcode( '[ti_wishlist_products_counter]' ); ?>
			</div>

			<div class="header__btns_item">
				<a href="<?php echo get_home_url(); ?>/cart"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart.svg" alt=""></a>
			</div>

			<div class="header__btns_item header__btns_item--profile">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/user.svg" alt=""><span>adress@gmail.com</span></a>
				<ul>
					<li><a href="#">adress@gmail.com</a></li>
					<li><a href="#">adress@gmail.com</a></li>
					<li><a href="#">adress@gmail.com</a></li>
				</ul>
			</div>

		</div>

		<button class="hamburger" type="button">
			<span class="hamburger__item"></span>
		</button>

	</div>
</header>