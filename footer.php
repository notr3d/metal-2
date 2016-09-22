	</div>
	<footer class="site-footer">
		 <?php wp_nav_menu(array(
			'theme_location' => 'footer-nav',
			'container_class' => 'footer-nav',	
			'menu_class' => 'footer-nav__wrapper lcw'
		)); ?>
		<div class="site-footer__wrapper lcw">
			<div class="site-footer__item site-footer__item--logo">
				<a href="<?php echo get_permalink(get_page_by_title('главная')->ID)?>" class="site-logo site-logo--footer"></a>
				<div class="footer-note">
					<div class="footer-note__title">Разработка проектной<br>документации</div>
					<div class="footer-note__subtitle">Чертежи КМ, КМД</div>
				</div>
			</div>				
			<div class="site-footer__item site-footer__item--address">
				<div class="footer-address">
					<div class="footer-address__item">Адрес: 105318,<br>г. Москва, ул. Ибрагимова, 31 </div>
					<div class="footer-address__item">Тел.: +7 (495) 726-57-22</div>
					<div class="footer-address__item">E-mail: <a href="mailto:info@bigkd.ru">info@bigkd.ru</a></div>
				</div>
				<div class="copy">© 2016 «BIG Construction»</div>
			</div>
			<div class="site-footer__item">
				<div class="footer-form__header">Написать нам:</div>
				<div class="footer-form">
					<?php echo do_shortcode( '[contact-form-7 title="footer form"]' ); ?>
				</div>
				<!--<form class="footer-form">
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
				</form>-->
			</div>
		</div>
	</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/featherlight.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/featherlight.gallery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<!-- Yandex.Metrika counter --> 
<script type="text/javascript"> 
	(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter39153220 = new Ya.Metrika({ id:39153220, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true, ecommerce:"dataLayer" }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); 
</script> 
<noscript>
	<div><img src="https://mc.yandex.ru/watch/39153220" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript> 
<!-- /Yandex.Metrika counter -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-82843947-1', 'auto');
	ga('send', 'pageview');
</script>

<?php wp_footer(); ?>
</body>
</html>
