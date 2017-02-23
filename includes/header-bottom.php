<section class="dd-menu-bottom-wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="dd-menu-left">
					<ul >
						<li class="id_menu">
							<a href="#">Дома из бруса</a>
							<ul class="dd-sub-menu">
								<div class="dd-li-wrap">
									<li><a href="#">Проекты домов</a></li>
									<li class="dd-li-menu2">
										<a class="dd-sum_item" href="#">Фото проектов</a>
										<ul class="dd-sub-menu-2">
											<li><a href="#">Информация для покупателя</a></li>
											<li><a href="#">Форма заказа</a></li>
										</ul>
									</li>
									<li class="dd-li-menu2">
										<a class="dd-sum_item" href="#">Как заказать</a>
										<ul class="dd-sub-menu-2">
											<li><a href="#">Информация для покупателя</a></li>
											<li><a href="#">Форма заказа</a></li>
										</ul>
									</li>
									<li><a href="#">Отзывы</a></li>
								</div>
							</ul>
						</li>
						<li><a href="#">Каркасные дома</a></li>
						<li><a href="#">Деревянные бани</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>

<script>
$(function(){
	$('.dd-sub-menu-2').hide();
	$('.id_menu').hover(function(){		
		$(this).find('.dd-sub-menu').stop().slideDown(500);		
	},function(){
		$('ul', this).stop().slideUp(500);	
	});

	$('.dd-li-menu2').hover(function(){
		$(this).find('ul').stop().slideDown(500);	
	},function(){
		$('ul', this).stop().slideUp(300);	
	});
});	
</script>
