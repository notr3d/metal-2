	</div>
	<footer class="site-footer">
		<div class="footer-nav">
			 <?php wp_nav_menu(array(
				'menu_class' => 'footer-nav__wrapper lcw'
			)); ?>
		</div>
		<div class="site-footer__wrapper lcw">
			<div class="site-footer__item site-footer__item--logo">
				<a href="home" class="site-logo site-logo--footer"></a>
				<div class="footer-note">
					<div class="footer-note__title">Разработка проектной<br>документации</div>
					<div class="footer-note__subtitle">Чертежи КМ, КМД</div>
				</div>
			</div>				
			<div class="site-footer__item site-footer__item--address">
				<div class="footer-address">
					<div class="footer-address__item">Адрес: 105318,<br>г. Москва, ул. Ибрагимова, 31 </div>
					<div class="footer-address__item">Тел.: +7 (495) 789-36-86 </div>
					<div class="footer-address__item">E-mail: info@bigmsk.ru</div>
				</div>
				<div class="copy">© 2016 «BIG Construction»</div>
			</div>
			<div class="site-footer__item">
				<div class="footer-form__header">Написать нам:</div>
				<form class="footer-form">
					<div class="footer-form__item footer-form__item--name">
						<input type="text" placeholder="Ваше имя*" required>
					</div>
					<div class="footer-form__item footer-form__item--email">
						<input type="email" placeholder="Ваш e-mail*" required>
					</div>
					<div class="footer-form__item footer-form__item--textarea">
						<textarea placeholder="Ваше сообщение*" required></textarea>
					</div>
					<div class="footer-form__item footer-form__item--submit">
						<input type="submit" value="Отправить">
					</div>
				</form>
			</div>
		</div>
	</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<?php wp_footer(); ?>
</body>
</html>
