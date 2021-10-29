<?php
/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_edit_account_form' ); ?>

<form class="profile__content" action="" method="post" <?php do_action( 'woocommerce_edit_account_form_tag' ); ?> >

	<?php do_action( 'woocommerce_edit_account_form_start' ); ?>

	<p class="profile__content_title">My information</p>

	<div class="profile__info">
	<p class="woocommerce-form-row form-row">
		<!-- <label for="account_first_name"><?php esc_html_e( 'First name', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label> -->
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text profile__input" name="account_first_name" id="account_first_name" autocomplete="given-name" placeholder="Your name" value="<?php echo esc_attr( $user->first_name ); ?>" />
	</p>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<!-- <label for="account_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label> -->
		<input type="email" class="woocommerce-Input woocommerce-Input--email input-text profile__input" name="account_email" id="account_email" autocomplete="email" placeholder="Your email" value="<?php echo esc_attr( $user->user_email ); ?>" />
	</p>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<input type="text" class="woocommerce-Input woocommerce-Input--phone input-text profile__input" name="billing_mobile_phone" placeholder="Phone number" id="billing_mobile_phone" value="<?php echo esc_attr( $user->billing_mobile_phone ); ?>" />
	</p>

	<p class="form-row form-row-wide">
		<label for="date">Important date</label>
		<input type="date" class="input-text" name="date" id="date" value="<?php echo esc_attr( $user->date ); ?>" required />
	</p>

	<p class="form-row form-row-wide">
		<label for="occasion">Occasion Name</label>
		<input type="text" class="input-text" name="occasion" id="occasion" value="<?php echo esc_attr( $user->occasion ); ?>" required />
	</p>

	<p class="form-row form-row-wide">
		<label for="info">Info about the gift receiver: age, gender, hobbies, your relationship (parent, boyfriend, colleague, etc</label>
		<input type="text" class="input-text" name="info" id="info" value="<?php echo esc_attr( $user->info ); ?>" />
	</p>

	<p class="form-row form-row-wide">
		<label for="date1">Important date</label>
		<input type="date" class="input-text" name="date1" id="date1" value="<?php echo esc_attr( $user->date1 ); ?>" required />
	</p>

	<p class="form-row form-row-wide">
		<label for="occasion1">Occasion Name</label>
		<input type="text" class="input-text" name="occasion1" id="occasion1" value="<?php echo esc_attr( $user->occasion1 ); ?>" required />
	</p>

	<p class="form-row form-row-wide">
		<label for="info1">Info about the gift receiver: age, gender, hobbies, your relationship (parent, boyfriend, colleague, etc</label>
		<input type="text" class="input-text" name="info1" id="info1" value="<?php echo esc_attr( $user->info1 ); ?>" />
	</p>

	<p class="form-row form-row-wide">
		<label for="date2">Important date</label>
		<input type="date" class="input-text" name="date2" id="date2" value="<?php echo esc_attr( $user->date2 ); ?>" required />
	</p>

	<p class="form-row form-row-wide">
		<label for="occasion2">Occasion Name</label>
		<input type="text" class="input-text" name="occasion2" id="occasion2" value="<?php echo esc_attr( $user->occasion2 ); ?>" required />
	</p>

	<p class="form-row form-row-wide">
		<label for="info2">Info about the gift receiver: age, gender, hobbies, your relationship (parent, boyfriend, colleague, etc</label>
		<input type="text" class="input-text" name="info2" id="info2" value="<?php echo esc_attr( $user->info2 ); ?>" />
	</p>

</div>

	<fieldset class="profile__password">
		<p class="profile__content_title">Change Your Password</p>

		<!-- <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_current"><?php esc_html_e( 'Current password (leave blank to leave unchanged)', 'woocommerce' ); ?></label> -->
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text profile__input" name="password_current" id="password_current" placeholder="Old password" autocomplete="off" />
		<!-- </p> -->
		<!-- <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_1"><?php esc_html_e( 'New password (leave blank to leave unchanged)', 'woocommerce' ); ?></label> -->
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text profile__input" name="password_1" id="password_1" placeholder="New password" autocomplete="off" />
		<!-- </p> -->
		<!-- <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_2"><?php esc_html_e( 'Confirm new password', 'woocommerce' ); ?></label> -->
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text profile__input" name="password_2" id="password_2" placeholder="New password" autocomplete="off" />
		<!-- </p> -->
	</fieldset>
	<div class="clear"></div>

	<?php do_action( 'woocommerce_edit_account_form' ); ?>

	<!-- <p> -->
		<?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
		<button type="submit" class="btn profile__btn" name="save_account_details" value="<?php esc_attr_e( 'Save changes', 'woocommerce' ); ?>"><?php esc_html_e( 'Save changes', 'woocommerce' ); ?></button>
		<input type="hidden" name="action" value="save_account_details" />
	<!-- </p> -->

	<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
</form>

<?php do_action( 'woocommerce_after_edit_account_form' ); ?>
