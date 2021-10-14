<?php
/* Template name: Registration */
?>

<?php get_header(); ?>

<?php
do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

</div>

<section class="sign-up">
	<form method="post" class="login-page__item" <?php do_action( 'woocommerce_register_form_tag' ); ?> >
		
		<h2 class="favorites__title">Sign Up</h2>

		<?php do_action( 'woocommerce_register_form_start' ); ?>

		<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<!-- <label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label> -->
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>

		<?php endif; ?>

		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<!-- <labe for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></labe	l> -->
			<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" placeholder="Email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
		</p>

		<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<!-- <label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label> -->
				<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" placeholder="Password" id="reg_password" autocomplete="new-password" />
			</p>

		<?php else : ?>

			<p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

		<?php endif; ?>

		<?php do_action( 'woocommerce_register_form' ); ?>

		<p class="woocommerce-form-row form-row">
			<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
			<button type="submit" class="btn sign-up__btn" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Sign up', 'woocommerce' ); ?></button>
		</p>

		<span>I’ve already have a profile<a href="<?php echo get_home_url(); ?>/login">Log in</a></span>

		<?php do_action( 'woocommerce_register_form_end' ); ?>

	</form>

</section>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>

<?php get_footer(); ?>