<footer class="footer">
	<div class="footer__container container">
		<div class="footer__main">
			<div class="footer__menu">
				<p class="footer__menu_title">Menu</p>
				<!-- <ul class="footer__menu_item">
					<li><a href="#">Shop</a></li>
					<li><a href="#">Corporate</a></li>
					<li><a href="#">Shipping</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Reviews</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Terms of Service</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul> -->

				<?php 
				wp_nav_menu( array(
					'menu'=>'menu-footer',
					'menu_class'=>'footer__menu_item',
					'theme_location'=>'menu',
					) );
				?>
			</div>

			<div class="footer__center">

				<div class="footer__logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo--white.svg" alt="">
				</div>

				<div class="footer__links">
					<a href="<?php the_field('social_link_1', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fb.svg" alt="">
					</a>
					<a href="<?php the_field('social_link_2', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/inst.svg" alt="">
					</a>
				</div>

				<div class="form footer__subscribe">
					<p>Subscribe!</p>
					<?php echo do_shortcode( '[caldera_form id="CF6169561f5e74b"]' ); ?>
				</div>

			</div>

			<div class="footer__contacts">
				<p class="footer__contacts_title">Contacts</p>
				<a href="tel:<?php the_field('tel_1_url', 'option'); ?>" class="footer__contacts_tel"><?php the_field('tel_1', 'option'); ?></a>
				<a href="tel:<?php the_field('tel_2_url', 'option'); ?>" class="footer__contacts_tel"><?php the_field('tel_2', 'option'); ?></a>
				<a href="mailto:info@gmail.com" class="footer__contacts_email"><?php the_field('email', 'option'); ?></a>
				<a class="footer__contacts_email" href="https://www.google.com/maps/place/420+Pitt+St,+Sydney+NSW+2000,+%D0%90%D0%B2%D1%81%D1%82%D1%80%D0%B0%D0%BB%D0%B8%D1%8F/@-33.8790197,151.2053451,17z/data=!3m1!4b1!4m5!3m4!1s0x6b12ae22d6e224f7:0xb6506a26a71906ed!8m2!3d-33.8790197!4d151.2075338" target="_blank">
					420 Pitt Street, Haymarket, NSW, 2000
				</a>
			</div>
		</div>

		<div class="footer__bottom">
			<p>2021, All rights reserved</p>
			<span>Created by <a href="http://flex-design.net/" target="_blank">FlexDesign</a></span>
		</div>
	</div>
</footer>

	<!-- MODAL -->

<div class="modal" id="modal__edits">
	<form action="#" class="modal__form form" method="POST">

		<button class="close modal__close" type="button">
			<span></span>
			<span></span>
		</button>

		<h3 class="form__title">Заказать звонок</h3>

		<input type="hidden" name="subject" value="Заказать звонок">

		<div class="form__item">
			<label for="formName" class="form__label">Имя*</label>
			<input id="formName" type="text" name="name" placeholder="Имя" class="form__input _req">
		</div>

		<div class="form__item">
			<label for="formPhone" class="form__label">Телефон*</label>
			<input id="formPhone" type="tel" name="phone" placeholder="Телефон" class="form__input _req">
		</div>

		<div class="form__item">
			<label for="formMail">Почта*</label>
			<input id="formMail" type="email" name="mail" placeholder="Почта" class="form__input _req _email">
		</div>

		<div class="form__item">
			<div class="form__label">Левша или правша?</div>
			<div class="form__options">
				<div class="form__options_item">
					<input id="formRigth" type="radio" value="raight" name="hand" class="form__options_input" checked>
					<label for="formRigth" class="form__options_label"><span>Правша</span></label>
				</div>
				<div class="form__options_item">
					<input id="formLeft" type="radio" value="left" name="hand" class="form__options_input">
					<label for="formLeft" class="form__options_label"><span>Левша</span></label>
				</div>
			</div>
		</div>

		<div class="form__item">
			<label for="formMessage" class="form__label">Сообщение</label>
			<textarea id="formMessage" name="message" class="form__textarea"></textarea>
		</div>

		<div class="form__item">
			<label for="formAge" class="form__label">Возраст:</label>
			<select id="formAge" name="age"  class="form__select">
				<option value="18" selected="selected">18</option>
				<option value="25">25</option>
				<option value="30">30</option>
				<option value="50">50</option>
			</select>
		</div>

		<div class="form__item">
			<div class="form__label">Прикрепить фото:</div>
			<div class="form__file formImgFile">
				<div class="form__file_item">
					<input accept=".jpg, .png, .gif, .ico" type="file" name="image" class="formImage form__file_input">
					<label class="formLebel form__file_button btn">Выбрать</label>
				</div>
				<div class="formPreview form__file_preview"></div>
			</div>
		</div>

		<div class="form__item">
			<div class="form__checkbox">
				<input id="formAgreement" checked type="checkbox" name="agreement" class="form__checkbox_input _req">
				<label for="formAgreement" class="form__checkbox_label"><span>Персональные данные <a href="#">Файл</a></span></label>
			</div>
		</div>

		<div class="form__btn">
			<button type="submit" class="btn form__btn_button" name="submit">Отправить</button>
		</div>

	</form>
</div>

<div class="modal" id="modal__add">
	<form action="#" class="modal__form form" method="POST">

		<button class="close modal__close" type="button">
			<span></span>
			<span></span>
		</button>

		<h3 class="form__title">Добавить елемент в слайдер</h3>

		<input type="hidden" name="subject" value="Добавить елемент в слайдер">

		<div class="form__item">
			<label for="formName2" class="form__label">Имя*</label>
			<input id="formName2" type="text" name="name" placeholder="Имя" class="form__input _req">
		</div>

		<div class="form__item">
			<label for="formPhone2" class="form__label">Телефон*</label>
			<input id="formPhone2" type="tel" name="phone" placeholder="Телефон" class="form__input _req">
		</div>

		<div class="form__item">
			<label for="formMail2">Почта*</label>
			<input id="formMail2" type="email" name="mail" placeholder="Почта" class="form__input _req">
		</div>

		<div class="form__item">
			<div class="form__label">Левша или правша?</div>
			<div class="form__options">
				<div class="form__options_item">
					<input id="formRigth2" type="radio" value="raight" name="hand" class="form__options_input" checked>
					<label for="formRigth2" class="form__options_label"><span>Правша</span></label>
				</div>
				<div class="form__options_item">
					<input id="formLeft2" type="radio" value="left" name="hand" class="form__options_input">
					<label for="formLeft2" class="form__options_label"><span>Левша</span></label>
				</div>
			</div>
		</div>

		<div class="form__item">
			<label for="formMessage2" class="form__label">Сообщение</label>
			<textarea id="formMessage2" name="message" class="form__textarea"></textarea>
		</div>

		<div class="form__item">
			<label for="formAge2" class="form__label">Возраст:</label>
			<select id="formAge2" name="age" class="form__select">
				<option value="18" selected="selected">18</option>
				<option value="25">25</option>
				<option value="30">30</option>
				<option value="50">50</option>
			</select>
		</div>

		<div class="form__item">
			<div class="form__label">Прикрепить фото:</div>
			<div class="form__file formImgFile">
				<div class="form__file_item">
					<input accept=".jpg, .png, .gif, .ico" type="file" name="image" class="formImage form__file_input">
					<label class="formLebel form__file_button btn">Выбрать</label>
				</div>
				<div class="formPreview form__file_preview"></div>
			</div>
		</div>

		<div class="form__item">
			<div class="form__checkbox">
				<input id="formAgreement1" checked type="checkbox" name="agreement" class="form__checkbox_input _req">
				<label for="formAgreement1" class="form__checkbox_label"><span>Персональные данные <a href="#">Файл</a></span></label>
			</div>
		</div>

		<div class="form__btn">
			<button type="submit" class="btn form__btn_button" name="submit">Отправить</button>
		</div>

	</form>
</div>

<!-- <div class="modal" id="modal__thanks">
	<div class="modal__form">
		<button class="close modal__close" type="button">
			<span></span>
			<span></span>
		</button>

		<h3>Спасибо за доверие!</h3>
		<p>Мы обязательно с вами свяжемся!</p>
	</div>
</div> -->

<script
	src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	crossorigin="anonymous">
</script>

<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '307332190796381');
		fbq('track', 'PageView');
	</script>

	<noscript>
		<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=307332190796381&ev=PageView&noscript=1"/>
	</noscript>
<!-- End Facebook Pixel Code -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-P1QVZX06V0"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-P1QVZX06V0');
	</script>