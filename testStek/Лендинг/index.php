<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title></title>
  <link rel="stylesheet" href="sources/css/reset.css" />
  <link rel="stylesheet" href="sources/css/fonts/stylesheet.css" />
  <link rel="stylesheet" href="sources/css/style.css" />
  <title>Flower Shop</title>
</head>
<body>
	<!--***********HEADER_START***********-->
	<header class="flower-header">
		<div class="wrapper">
			<nav class="header-nav">
				<ul class="menu-top">
					<li class="header-nav-item">
						<a class="header-nav-item__link" href="#catalog">Каталог</a>
					</li>
					<li class="header-nav-item">
						<a class="header-nav-item__link" href="#delivery">Доставка</a>
					</li>
					<li class="header-nav-item">
						<a class="header-nav-item__link" href="#feedback">Контакты</a>
					</li>
				</ul>
				<a class="header__link-phone" href="tel:+74952546896">+7 (495) 254 68 96</a>
			</nav>

			<div class="header-banner">
				<div class="banner-discription">
					<img class="banner-discription__logo" src="sources/images/logo.jpg" alt="Логотип">
					<p class="banner-discription__slogan">Тот самый цветочный, который все советуют</p>
					<a class="banner-discription__button button" href="#catalog">В каталог</a>
				</div>
				<div class="banner-image">
					<img class="banner-image__img" src="sources/images/banner.jpg" alt="Баннер">
				</div>
			</div>
		</div>
    </header>
	<!--***********HEADER_END***********-->
	
	<!--***********MAIN_START***********-->
    <main class="flower-content">
	
		<!--***********CATALOG_START***********-->
        <section id="catalog" class="flower-section catalog">
            <div class="wrapper">
				<h2>Каталог</h2>
				<div class="catalog-container">
					<div class="catalog-items-description item-description-current">
						<h3>Розы</h3>
						<ul class="item-description-propertis">
							<li class="item-description-propertis__prcie">
								1 шт. - 40 рублей
							</li>
							<li class="item-description-propertis__prcie">
								от 10 шт. - 35 рублей за штуку
							</li>
							<li class="item-description-propertis__prcie">
								от 50 шт. - 30 рублей за штуку
							</li>
						</ul>
						<div class="item-description-img">
							<img class="item-description-img__image" src="sources/images/catalog-current.png">
							<a class="item-description-img__button button" href="#feedback">Оформить заказ</a>
						</div>
					</div>
					
					<div class="catalog-items-description">
						<ul class="catalog-ites items-list">
							<li class="item">
								<div class="item-image">
									<img class="item-image__img" src="sources/images/1.jpg" alt="">
								</div>
								<div class="item-description">
									<h3>Тюльпаны</h3>
									<ul class="item-description-propertis">
										<li class="item-description-propertis__prcie">
											1 шт. - 40 рублей
										</li>
										<li class="item-description-propertis__prcie">
											от 10 шт. - 35 рублей за штуку
										</li>
										<li class="item-description-propertis__prcie">
											от 50 шт. - 30 рублей за штуку
										</li>
									</ul>
								</div>
							</li>
							<li class="item">
								<div class="item-image">
									<img class="item-image__img" src="sources/images/1.jpg" alt="">
								</div>
								<div class="item-description">
									<h3>Тюльпаны</h3>
									<ul class="item-description-propertis">
										<li class="item-description-propertis__prcie">
											1 шт. - 40 рублей
										</li>
										<li class="item-description-propertis__prcie">
											от 10 шт. - 35 рублей за штуку
										</li>
										<li class="item-description-propertis__prcie">
											от 50 шт. - 30 рублей за штуку
										</li>
									</ul>
								</div>
							</li>
							<li class="item">
								<div class="item-image">
									<img class="item-image__img" src="sources/images/1.jpg" alt="">
								</div>
								<div class="item-description">
									<h3>Тюльпаны</h3>
									<ul class="item-description-propertis">
										<li class="item-description-propertis__prcie">
											1 шт. - 40 рублей
										</li>
										<li class="item-description-propertis__prcie">
											от 10 шт. - 35 рублей за штуку
										</li>
										<li class="item-description-propertis__prcie">
											от 50 шт. - 30 рублей за штуку
										</li>
									</ul>
								</div>
							</li>
							<li class="item">
								<div class="item-image">
									<img class="item-image__img" src="sources/images/1.jpg" alt="">
								</div>
								<div class="item-description">
									<h3>Тюльпаны</h3>
									<ul class="item-description-propertis">
										<li class="item-description-propertis__prcie">
											1 шт. - 40 рублей
										</li>
										<li class="item-description-propertis__prcie">
											от 10 шт. - 35 рублей за штуку
										</li>
										<li class="item-description-propertis__prcie">
											от 50 шт. - 30 рублей за штуку
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
        </section>
		<!--***********CATALOG_END***********-->
		
		<!--***********DELIVERY_START***********-->
        <section id="delivery" class="flower-section delivery">
			<div class="wrapper">
				<h2>Доставка</h2>	
				<div class="deliviry-container">
					<div class="deliviry-container-img">
						<img class="deliviry-container-img__img" src="sources/images/delivety-item.png">
					</div>
					<dl class="delivery-properties-list">
						<dt class="delivery-property-item__name"><h3>Быстро</h3></dt>
						<dd class="delivery-property-item__disc">Привозим цветы через два часа после оплаты заказа</dd>

						<dt class="delivery-property-item__name"><h3>Бесплатно</h3></dt>
						<dd class="delivery-property-item__disc">При заказе от 500 рублей доставка бесплатно</dd>
						
						<dt class="delivery-property-item__name"><h3>Скидки</h3></dt>
						<dd class="delivery-property-item__disc">Забирайте сами и получайте скидку 5%</dd>
						
					</dl>
				</div>
			</div>
        </section>
		<!--***********DELIVERY_END***********-->
    </main>
	<!--***********MAIN_END***********-->
	
	<!--***********FOOTER_START***********-->
    <footer id="feedback" class="flower-footer">
        <div class="wrapper">
			<h2>Оставьте заявку прямо сейчас, и наши флористы подберут для вас <span>идеальный букет!</span></h2>
		
			<div class="flower-acquisition">
				<div class="banner-image">
					<img class="banner-image__img" src="sources/images/bottom-logo.png">
				</div>
				<form class="acquisition-form feedback" action="#" method="POST">
					<label class="feedback__name" for="name">Имя
						<input type="text" name="name" id="name">
					</label>
					
					<label class="feedback__phone" for="phone">Телефон <span>*</span>
						<input type="tel" name="phone" id="phone">
						<p class="input-discription">должен начинаться на +7</p>
					</label>
					
					<label class="feedback__comment" for="comment">Комментарий
						<textarea name="comment" id="comment"></textarea>
					</label>
					
					<button class="feedback__button" type="submit">Отправить</button>
					<p class="feedback__agreement">Нажимая на кнопку, вы принимаете <a href="#">Положение</a> и <a href="#">Согласие</a> на обработку персональных данных.</p>
				</form>
			</div>
		</div>
    </footer>
	<!--***********FOOTER_END***********-->
</body>
</html>