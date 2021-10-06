<?php
/* Template name: Contact us */
get_header();
?>

<section class="contacts">
	<div class="contacts__container">
		<h4 class="h4 contacts__title">Contact Us</h4>
		<div class="contacts__info">
			<div class="contacts__info_left">
				<h3 class="h3 contacts__subtitle"><?php the_field('title'); ?></h3>
				<p class="contacts__desc">
					<?php the_field('desc'); ?>
				</p>
			</div>
			<div class="contacts__info_right">
				<span class="contacts__link">Got a question that isn't answered in our <a href="<?php echo get_home_url(); ?>/faq.html">FAQ's</a>?</span>
				<a href="#" class="contacts__btn modal__write-us">
					<p>Write Us</p>
					<span class="contacts__icon">
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11 2.00004C11.1751 1.82494 11.383 1.68605 11.6117 1.59129C11.8405 1.49653 12.0857 1.44775 12.3333 1.44775C12.581 1.44775 12.8262 1.49653 13.0549 1.59129C13.2837 1.68605 13.4916 1.82494 13.6667 2.00004C13.8418 2.17513 13.9807 2.383 14.0754 2.61178C14.1702 2.84055 14.219 3.08575 14.219 3.33337C14.219 3.58099 14.1702 3.82619 14.0754 4.05497C13.9807 4.28374 13.8418 4.49161 13.6667 4.66671L4.66667 13.6667L1 14.6667L2 11L11 2.00004Z" stroke="#F367B3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</span>

				</a>
			</div>
		</div>

		<div class="contacts__wrap">
			<a href="mailto:<?php the_field('email'); ?>" class="contacts__item">
				<span class="contacts__icon">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="#989AAD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M22 6L12 13L2 6" stroke="#989AAD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</span>
				<p><?php the_field('email'); ?></p>
			</a>
			<a href="<?php the_field('inst_link'); ?>" class="contacts__item" target="_blank">
				<span class="contacts__icon">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M17 2H7C4.23858 2 2 4.23858 2 7V17C2 19.7614 4.23858 22 7 22H17C19.7614 22 22 19.7614 22 17V7C22 4.23858 19.7614 2 17 2Z" stroke="#989AAD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M15.9997 11.3701C16.1231 12.2023 15.981 13.0523 15.5935 13.7991C15.206 14.5459 14.5929 15.1515 13.8413 15.5297C13.0898 15.908 12.2382 16.0397 11.4075 15.906C10.5768 15.7723 9.80947 15.3801 9.21455 14.7852C8.61962 14.1903 8.22744 13.4229 8.09377 12.5923C7.96011 11.7616 8.09177 10.91 8.47003 10.1584C8.84829 9.40691 9.45389 8.7938 10.2007 8.4063C10.9475 8.0188 11.7975 7.87665 12.6297 8.00006C13.4786 8.12594 14.2646 8.52152 14.8714 9.12836C15.4782 9.73521 15.8738 10.5211 15.9997 11.3701Z" stroke="#989AAD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M17.5 6.5H17.51" stroke="#989AAD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</span>
				<p><?php the_field('inst_txt'); ?></p>
			</a>
			<a class="contacts__item" href="<?php the_field('address_link'); ?>" target="_blank">
				<span class="contacts__icon">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="#989AAD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#989AAD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</span>
				<p>
					<?php the_field('address_txt'); ?>
				</p>
			</a>
		</div>

	</div>
</section>

<?php get_footer(); ?>