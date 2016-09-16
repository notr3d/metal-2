<?php get_header(); ?>
<div class="content-area">
	<main class="site-main contacts">
		<section class="con-panel">
			<div class="con-panel__wrapper lcw">
				<div class="con-panel__container">
					<div class="con-address">
						<div class="con-address__item">
							<div class="con-address__title">Наш адрес:</div>
							<div class="con-address__text">105318, г.Москва, ул.Ибрагимова, д.31к50</div>	
						</div>
						<div class="con-address__item">
							<div class="con-address__title">Телефон:</div>
							<div class="con-address__text">+7 (495) 789-36-86</div>	
						</div>
						<div class="con-address__item">
							<div class="con-address__title">Почта:</div>
							<div class="con-address__text"><a href="mailto:info@bigkd.ru">info@bigkd.ru</a></div>	
						</div>
						<div class="con-address__item">
							<div class="con-address__title">Режим работы:</div>
							<div class="con-address__text">Пн-пт, с 9.00 до 18.00</div>	
						</div>
						<div class="con-address__item">
							<div class="con-address__title">ЗАО «БиГ» оказывает услуги по проектированию и разработке проектной документации по всей России и странам СНГ.</div>	
						</div>
					</div>
					<div class="contacts-callback">
						<div class="contacts-callback__form">
							<h2 class="contacts-callback__header">Обратная связь</h2>
							<div class="contacts-callback__item">
								<input type="text" placeholder="Ваше имя:*" required>
							</div>
							<div class="contacts-callback__item">
								<input type="tel" placeholder="Ваш телефон:*" required>
							</div>
							<div class="contacts-callback__item">
								<input type="email" placeholder="Ваш e-mail:*" required>
							</div>
							<div class="contacts-callback__item">
								<textarea placeholder="Описание проекта:"></textarea>
							</div>
							<div class="contacts-callback__item contacts-callback__item--file">
								<label>
									<span class="contacts-callback__file">Прикрепить файл</span>
									<input type="file" placeholder="">
								</label>							
							</div>
							<div class="contacts-callback__item  contacts-callback__item--submit">
								<input type="submit" value="Отправить">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="contacts-map" id="contacts-map">
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-vOBdjVqwgHav99Lw79O25RL04z5pq2c" type="text/javascript"></script>
			<script>								
				var center = new google.maps.LatLng(55.788911, 37.729356);
				var init = function(){
					var prop = {
						center: center,
						scrollwheel: false,
						zoom: 14,						
						mapTypeId: google.maps.MapTypeId.ROADMAP
					};
					var map = new google.maps.Map(document.getElementById('contacts-map'), prop);
					var marker = new google.maps.Marker({
						position: center,
						icon: '<?php echo get_template_directory_uri(); ?>/img/map-icon.png',
						size: new google.maps.Size(20, 32)
					});
					marker.setMap(map);	
					google.maps.Map.prototype.setCenterWithOffset= function(latlng, offsetX, offsetY) {
						var map = this;
						var ov = new google.maps.OverlayView();
						ov.onAdd = function() {
							var proj = this.getProjection();
							var aPoint = proj.fromLatLngToContainerPixel(latlng);
							aPoint.x = aPoint.x+offsetX;
							aPoint.y = aPoint.y+offsetY;
							map.setCenter(proj.fromContainerPixelToLatLng(aPoint));
						}; 
						ov.draw = function() {}; 
						ov.setMap(this); 
					};
					if (window.matchMedia('(min-width: 1100px)').matches) {
    					map.setCenterWithOffset(center, -200, 0);
    				}					
				};
				google.maps.event.addDomListener(window, 'load', init);
			</script>
		</section>		
	</main>
</div>
<?php get_footer(); ?>
