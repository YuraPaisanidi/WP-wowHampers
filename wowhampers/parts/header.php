<header class="header">
	<div class="header__container container">

		<nav class="header__nav">
			<ul>
				<li class="header__nav_submenu">
					<a href="#about" class="header__nav_item header__nav_item--shop">Shop</a>
					<ul>
						<li><a href="#">Shop 1</a></li>
						<li><a href="#">Shop 1</a></li>
						<li><a href="#">Shop 1</a></li>
					</ul>
				</li>
				<li><a href="#about" class="header__nav_item">About</a></li>
				<li><a href="#about" class="header__nav_item">FAQ</a></li>
				<li><a href="#about" class="header__nav_item">Blog</a></li>
				<li><a href="#about" class="header__nav_item">Contacts</a></li>
			</ul>
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
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/wishlist.svg" alt=""></a>
			</div>

			<div class="header__btns_item">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart.svg" alt=""></a>
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