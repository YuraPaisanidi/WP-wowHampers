<?php
/* Template name: Corporate gifts */
get_header();
?>

<section class="corporate">
	<div class="corporate__container">
		<h4 class="corporate__title">Corporate gifts</h4>
		<div class="corporate__content">
			<div class="corporate__img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/corporate1.png" alt="">
				<img class="confetti" src="<?php echo get_template_directory_uri(); ?>/assets/img/confetti-corp.png" alt="">
			</div>
			<div class="corporate__wrap">
				<p>
					If You’re looking for Company Gifts Ideas, we have a robust solution for different occasions!<br>
					Modern and stylish personalised gift hampers with all required assistance and involvement
						of our design team. Your box will contain a one-of-a-kind assortment of thoughtful 
						gifts with a “wow” effect presented in fully-customised branded (if desired) packaging. 
						We can help you to select and design:
				</p>
				<p class="bold">
					Boxes & Packaging / Gifts / Products / Cards or Tags / Card Messages / Stickers
				</p>
				<p>
					The final result will be a unique gift that is both elegant and fun. It’s a distinctive 
					way to show employee appreciation,  impress corporate clients and surprise someone in a 
					special way.<br>
					We’re happy to assist you with projects of all sizes, from individual gifts 
					to large volume corporate orders. Simply fill out the form below to get started!
				</p>
				<p>Simply fill out the form below to get started!</p>

				<form action="#" class="form corporate__form" method="POST">

					<div class="form__item corporate__form_item">
						<input id="formName" type="text" name="name" placeholder="Your name *" class="form__input _req" required>
					</div>

					<div class="form__item corporate__form_item">
						<input id="formCompany" type="text" name="company" placeholder="Company *" class="form__input _req" required>
					</div>

					<div class="form__item corporate__form_item">
						<input id="formMail" type="email" name="mail" placeholder="Your email *" class="form__input _req _email" required>
					</div>

					<div class="form__item corporate__form_item">
						<input id="formPhone" type="tel" name="phone" placeholder="Phone number *" class="form__input _req" required>
					</div>

					<div class="corporate__wrap_quest">

						<div class="form__item corporate__form_item">
							<div class="form__label corporate__form_label"><span>*</span> I am enquiring about:</div>
							<div class="form__options">
								<div class="form__options_item">
									<input id="formEnq1" type="radio" value="A one-off bulk order" name="enquiring" class="form__options_input" checked>
									<label for="formEnq1" class="form__options_label"><span>A one-off bulk order</span></label>
								</div>
								<div class="form__options_item">
									<input id="formEnq2" type="radio" value=" Setting up corporate branding so that I can place ongoing orders" name="enquiring" class="form__options_input">
									<label for="formEnq2" class="form__options_label"><span>Setting up corporate branding so that I can place ongoing orders</span></label>
								</div>
								<div class="form__options_item">
									<input id="formEnq3" type="radio" value="Settlement Gifts" name="enquiring" class="form__options_input">
									<label for="formEnq3" class="form__options_label"><span>Settlement Gifts</span></label>
								</div>
								<div class="form__options_item">
									<input id="formEnq4" type="radio" value="A Christmas Order" name="enquiring" class="form__options_input">
									<label for="formEnq4" class="form__options_label"><span>A Christmas Order</span></label>
								</div>
							</div>
						</div>

						<div class="form__item corporate__form_item">
							<label for="formHampers" class="form__label corporate__form_label"><span>* </span> Estimated number of hampers required:</label>
							<input id="formHampers" type="number" name="hampers" placeholder="XX" class="form__input _req" min="1" max="99" required>
						</div>

						<div class="form__item corporate__form_item">
							<div class="form__label corporate__form_label"><span>*</span> Budget per gift:</div>
							<div class="form__options">
								<div class="form__options_item">
									<input id="formBudget1" type="radio" value="$50 - $100" name="budget" class="form__options_input" checked>
									<label for="formBudget1" class="form__options_label"><span>$50 - $100</span></label>
								</div>
								<div class="form__options_item">
									<input id="formBudget2" type="radio" value="$100 - $200" name="budget" class="form__options_input">
									<label for="formBudget2" class="form__options_label"><span>$100 - $200</span></label>
								</div>
								<div class="form__options_item">
									<input id="formBudget3" type="radio" value="$200+" name="budget" class="form__options_input">
									<label for="formBudget3" class="form__options_label"><span>$200+</span></label>
								</div>
							</div>
						</div>

						<div class="form__item corporate__form_item">
							<div class="form__label">* I would like the hampers/gifts to be delivered to:</div>
							<div class="form__options">
								<div class="form__options_item">
									<input id="formDelivery1" type="radio" value="One address" name="delivery" class="form__options_input" checked>
									<label for="formDelivery1" class="form__options_label"><span>One address</span></label>
								</div>
								<div class="form__options_item">
									<input id="formDelivery2" type="radio" value="Different offices in different states" name="delivery" class="form__options_input">
									<label for="formDelivery2" class="form__options_label"><span>Different offices in different states</span></label>
								</div>
								<div class="form__options_item">
									<input id="formDelivery3" type="radio" value="Multiple individual addresses" name="delivery" class="form__options_input">
									<label for="formDelivery3" class="form__options_label"><span>Multiple individual addresses</span></label>
								</div>
							</div>
						</div>

						<div class="form__item corporate__form_item">
							<label for="formDate" class="form__label corporate__form_label"><span>*</span> Please select the date you order needs to be delivered:</label>
							<input id="formDate" type="date" name="date" placeholder="XX" class="form__input _req" required>
						</div>

						<div class="form__item corporate__form_item">
							<label for="formMessage" class="form__label corporate__form_label">Additional Comments or Requests</label>
							<textarea id="formMessage" name="message" class="form__textarea"></textarea>
						</div>

					</div>

					<div class="form__btn corporate__form_btn">
						<button type="submit" class="btn form__btn_button" name="submit">Send!</button>
					</div>
		
				</form>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>