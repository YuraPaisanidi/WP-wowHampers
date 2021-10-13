<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


	if(isset($_GET["action"]) && $_GET["action"] == "register") {

?>
<section class="sign-up">

	<form method="post" class="login-page__item" id="reg-form" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

		<h2 class="favorites__title">Sign Up</h2>

		<?php do_action( 'woocommerce_register_form_start' ); ?>

		<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>


				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text profile__input" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>


		<?php endif; ?>

			<input type="email" class="woocommerce-Input woocommerce-Input--text input-text profile__input" name="email" id="reg_email" placeholder="Email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>


		<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

			<input type="password" class="woocommerce-Input woocommerce-Input--text input-text profile__input" name="password" id="reg_password" placeholder="Password" autocomplete="new-password" />


		<?php else : ?>

			<p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

		<?php endif; ?>

		<!-- <?php do_action( 'woocommerce_register_form' ); ?> -->

		<p class="woocommerce-form-row form-row">
			<button type="submit" class="btn" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Sign Up', 'woocommerce' ); ?></button>
		</p>

		<span>I’ve already have a profile<a href="<?php echo get_home_url(); ?>/my-account">Log in</a></span>

		<?php do_action( 'woocommerce_register_form_end' ); ?>

	</form>

</section>

<?php

	} else {

?>

<section class="sign-up">

	<form class="login-page__item" method="post" id="login-form">

		<h2 class="favorites__title">Log in</h2>

		<?php do_action( 'woocommerce_login_form_start' ); ?>

			<input type="text" class="woocommerce-Input woocommerce-Input--text input-text profile__input" name="username" id="username" placeholder="Email" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>


			<input class="woocommerce-Input woocommerce-Input--text input-text profile__input" type="password" name="password" id="password" placeholder="Password" autocomplete="current-password" />


		<?php do_action( 'woocommerce_login_form' ); ?>

		<p class="form-row">
			<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
			<button type="submit" class="btn" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
		</p>
		<p class="woocommerce-LostPassword lost_password">
			<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
		</p>

		<?php do_action( 'woocommerce_login_form_end' ); ?>

		<span>Don't have an account yet?<a href="<?php echo get_home_url(); ?>/my-account/?action=register">Sign Up</a></span>

	</form>
</section>

<?php

	}

?>

<!-- <script>
		//--------------------------------------TABS-------------------------------------
		const tabs = (headerSelector, tabSelector, contentSelector, activeClass) => {
		const header = document.querySelector(headerSelector),
					tab = document.querySelectorAll(tabSelector),
					content = document.querySelectorAll(contentSelector);
	
		function hideTabContent() {
			content.forEach(item => {
				item.style.display = "none";
			});
	
			tab.forEach(item => {
				item.classList.remove(activeClass);
			});
		}
	
		function showTabContent(i = 0) {
			content[i].style.display = "block";
			tab[i].classList.add(activeClass);
		}
	
		hideTabContent();
		showTabContent();
	
		header.addEventListener('click', (e) => {
			const target = e.target;
			if (target && 
				(target.classList.contains(tabSelector.replace(/\./, '')) || 
				target.parentNode.classList.contains(tabSelector.replace(/\./, '')))) {
				tab.forEach((item, i) => {
					if (target == item || target.parentNode == item) {
						hideTabContent();
						showTabContent(i);
					}
				});
			}
		});
	};
	tabs('.tabs', '.tabs__item', '.tabs__wrap', 'active');
</script> -->
