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
							<?php echo do_shortcode( '[aws_search_form]' );?>
						</li>
					</ul>
				</a>
			</div>

			<div class="header__btns_item">
			<?php echo do_shortcode( '[ti_wishlist_products_counter]' ); ?>
			</div>

			<div class="header__btns_item">
				<?php cart_link(); ?><?php the_widget('WC_Widget_Cart', 'title='); ?>
			</div>

			<div class="header__btns_item header__btns_item--profile">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/user.svg" alt=""><span></span></a>
				<?php 
					wp_nav_menu( array(
						'menu'=>'profile',
						'menu_class'=>'header__btns_menu',
						'theme_location'=>'menu',
						) );
					?>
			</div>

		</div>

		<button class="hamburger" type="button">
			<span class="hamburger__item"></span>
		</button>

	</div>
</header>