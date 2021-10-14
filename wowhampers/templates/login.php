<?php
/* Template name: Login */
?>

<?php get_header(); ?>

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

<?php get_footer(); ?>