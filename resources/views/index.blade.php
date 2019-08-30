<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<title>rocket-test</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
		integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/toggle.js"></script>
</head>

<body>

	<header>
		<nav class="menu">
			<div class="container">
				<a href="#">О компании</a>
				<a href="#">Доставка</a>
				<a href="#">Оплата</a>
				<a href="#">Сервис</a>
				<a href="#">Возврат</a>
				<a href="#">Статьи</a>
				<a href="#">Контакты</a>
			</div>
		</nav>

		<span class="menu-mobile__toggle">
			<img class="menu-mobile__icon" src="img\menu-mob.png">
		</span>

		<nav class="menu-mobile">
			<div class="container">
				<ul class="menu-mobile__list">
					<li class="menu-mobile__item"><a class="menu-mobile__link" href="#">О компании</a></li>
					<li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Доставка</a></li>
					<li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Оплата</a></li>
					<li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Сервис</a></li>
					<li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Возврат</a></li>
					<li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Статьи</a></li>
					<li class="menu-mobile__item"><a class="menu-mobile__link" href="#">Контакты</a></li>
				</ul>
			</div>
		</nav>

		<div class="container">
			<div class="row --adapt-pos">
				<div class="logo">
					<a href="#">
						<img src="img\logo.png">
					</a>
				</div>

				<div class="search_position">
					<div class="search-container">
						<form action="search" method="get" class="form">
							<div class="search-icons">
								<img src="img\articles.png">
							</div>
							<input type="text" name="search" class="form__search" placeholder="Поиск по товарам">
							<button type="sumbit" class="search_btn --disable">
								<img class="search__arrow --i" src="img\arrow.png">
							</button>
						</form>
					</div>
				</div>

				<div class="contacts">
					<span class="contacts__article">8(800)707-99-24</span>
					<span class="contacts__work-time">9.00 - 20.00 ежедневно</span>
				</div>

				<div class="leftside-icons">
					<div class="leftside-icons__graphic --i">
						<img src="img\graph.png"><span class="leftside-icons__text--disable">0</span>
					</div>
					<div class="leftside-icons__heart --i">
						<img src="img\heart.png"><span class="leftside-icons__text">6</span>
					</div>
					<div class="leftside-icons__cart --i">
						<img class="cart-pos" src="img\cart.png"><span class="leftside-icons__text">17</span>
					</div>
				</div>
			</div>

		</div>
		</div>

		<div class="free-place"></div>

		<div class="main-nav --nav-large">
			<ul class="main-nav__list --nav-large">
				<li><a class="main-nav__item --main" href="#">Продукция <img class="" src="img\logo2.png"></a></li>
				<li><a class="main-nav__item --default " href="#">Стабилизаторы 220В</a></li>
				<li><a class="main-nav__item --default" href="#">Стабилизаторы 380В</a></li>
				<li><a class="main-nav__item --default --pos-gen" href="#">Генераторы 220В</a></li>
				<li><a class="main-nav__item --default --pos-gen" href="#">Генераторы 380В</a></li>
				<li><a class="main-nav__item --default --pos-bat" href="#">ИБП и батареи</a></li>
				<li><a class="main-nav__item --default --pos-tech" href="#">Прочая техника</a></li>
				<li><a class="main-nav__item --default --pos-serv" href="#">Услуги</a></li>
				<li><a class="main-nav__item --default --pos-sale" href="#">Акции</a></li>
			</ul>
		</div>


		<div class="main-nav --nav-medium">

			<ul class="main-nav__list --nav-medium">
				<li><a class="main-nav__item --main" href="#">Продукция <img class="" src="img\logo2.png"></a></li>
				<li><a class="main-nav__item --default" href="#">Стабилизаторы 220В</a></li>
				<li><a class="main-nav__item --default" href="#">Стабилизаторы 380В</a></li>
				<li><a class="main-nav__item --default --pos-gen" href="#">Генераторы 220В</a></li>
				<li><a class="main-nav__item --default --pos-gen" href="#">Генераторы 380В</a></li>
				<li><a class="main-nav__item --default --pos-bat" href="#">ИБП и батареи</a></li>
				<li><a class="main-nav__item --default --pos-tech" href="#">Прочая техника</a></li>
			</ul>

			<ul class="main-nav__list --nav-medium">
				<li><a class="main-nav__item --default --pos-serv" href="#">Услуги</a></li>
				<li><a class="main-nav__item --default --pos-sale" href="#">Акции</a></li>
			</ul>
		</div>



		<div class="main-nav --nav-medium-2">

			<ul class="main-nav__list --nav-medium-2">
				<li><a class="main-nav__item --main" href="#">Продукция <img class="" src="img\logo2.png"></a></li>
				<li><a class="main-nav__item --default" href="#">Стабилизаторы 220В</a></li>
				<li><a class="main-nav__item --default" href="#">Стабилизаторы 380В</a></li>
				<li><a class="main-nav__item --default --pos-gen" href="#">Генераторы 220В</a></li>
				<li><a class="main-nav__item --default --pos-gen" href="#">Генераторы 380В</a></li>

			</ul>

			<ul class="main-nav__list --nav-medium-2">
				<li><a class="main-nav__item --default --pos-bat" href="#">ИБП и батареи</a></li>
				<li><a class="main-nav__item --default --pos-tech" href="#">Прочая техника</a></li>
				<li><a class="main-nav__item --default --pos-serv" href="#">Услуги</a></li>
				<li><a class="main-nav__item --default --pos-sale" href="#">Акции</a></li>
			</ul>
		</div>


		<div class="main-nav --nav-small">
			<ul class="main-nav__list --nav-small">
				<li><a class="main-nav__item --main" href="#">Продукция <img class="" src="img\logo2.png"></a></li>
				<li><a class="main-nav__item --default" href="#">Стабилизаторы 220В</a></li>
				<li><a class="main-nav__item --default" href="#">Стабилизаторы 380В</a></li>
			</ul>

			<ul class="main-nav__list --nav-small">
				<li><a class="main-nav__item --default --pos-gen" href="#">Генераторы 220В</a></li>
				<li><a class="main-nav__item --default --pos-gen" href="#">Генераторы 380В</a></li>
				<li><a class="main-nav__item --default --pos-bat" href="#">ИБП и батареи</a></li>

			</ul>

			<ul class="main-nav__list --nav-small">

				<li><a class="main-nav__item --default --pos-tech" href="#">Прочая техника</a></li>
				<li><a class="main-nav__item --default --pos-serv" href="#">Услуги</a></li>
				<li><a class="main-nav__item --default --pos-sale" href="#">Акции</a></li>
			</ul>
		</div>



		<div class="main-nav --nav-extra-small">

			<ul class="main-nav__list --nav-extra-small">
				<li><a class="main-nav__item --main" href="#">Продукция <img class="" src="img\logo2.png"></a></li>
				<li><a class="main-nav__item --default" href="#">Стабилизаторы 220В</a></li>
			</ul>

			<ul class="main-nav__list  --nav-extra-small">
				<li><a class="main-nav__item --default" href="#">Стабилизаторы 380В</a></li>
				<li><a class="main-nav__item --default --pos-gen" href="#">Генераторы 220В</a></li>
			</ul>

			<ul class="main-nav__list --nav-extra-small">
				<li><a class="main-nav__item --default --pos-gen" href="#">Генераторы 380В</a></li>
				<li><a class="main-nav__item --default --pos-bat" href="#">ИБП и батареи</a></li>
			</ul>

			<ul class="main-nav__list --nav-extra-small">
				<li><a class="main-nav__item --default --pos-tech" href="#">Прочая техника</a></li>
				<li><a class="main-nav__item --default --pos-serv" href="#">Услуги</a></li>
			</ul>

			<ul class="main-nav__list --nav-extra-small">
				<li><a class="main-nav__item --default --pos-sale" href="#">Акции</a></li>
			</ul>

		</div>



		<div class="main-nav --nav-super-small">

			<ul class="main-nav__list --nav-super-small">
				<li><a class="main-nav__item --main" href="#">Продукция <img class="" src="img\logo2.png"></a></li>
			</ul>

			<ul class="main-nav__list --nav-super-small">
				<li><a class="main-nav__item --default" href="#">Стабилизаторы 220В</a></li>
			</ul>

			<ul class="main-nav__list  --nav-super-small">
				<li><a class="main-nav__item --default" href="#">Стабилизаторы 380В</a></li>
			</ul>
			<ul class="main-nav__list --nav-super-small">
				<li><a class="main-nav__item --default --pos-gen" href="#">Генераторы 220В</a></li>
			</ul>

			<ul class="main-nav__list --nav-super-small">
				<li><a class="main-nav__item --default --pos-gen" href="#">Генераторы 380В</a></li>
			</ul>
			<ul class="main-nav__list --nav-super-small">
				<li><a class="main-nav__item --default --pos-bat" href="#">ИБП и батареи</a></li>
			</ul>

			<ul class="main-nav__list --nav-super-small">
				<li><a class="main-nav__item --default --pos-tech" href="#">Прочая техника</a></li>
				<li><a class="main-nav__item --default --pos-serv" href="#">Услуги</a></li>
			</ul>

			<ul class="main-nav__list ---nav-super-small">
				<li><a class="main-nav__item --default --pos-sale" href="#">Акции</a></li>
			</ul>

		</div>

		<div class="crumbs">
			<ul class="crumbs__list">
				<li class="crumbs__li"><a class="crumbs__item" href="#">Главная</a></li>
				<li class="crumbs__li"><a class="crumbs__item --pad"> → </a></li>
				<li class="crumbs__li"><a class="crumbs__item" href="#"> Статьи</a></li>
			</ul>
		</div>
	</header>

	<article>
		<div class="container">
			<div class="row --ma-margin">
				<div class="col">
					<span class="main-article">
						Полезная информация
					</span>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="pagination">
					<span class="pagination__list">{{$articles->links('paginate')}}</span>
				</div>
			</div>
		</div>



		<div class="container">
			<div class="row  article-container">
				@foreach ($articles as $article)
				<div class="col --article-item">
					<div class="content-main">
						<img src="{{ $article->preview }}" class="article-img">
						<div class="content-main__article-bold">
							{{ $article->title }}
							<span class="content-main__text">{{ $article->description }}</span>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>


		<div class="container --toppadding">
			<div class="row">
				<div class="pagination">
					<span class="pagination__list">{{$articles->links('paginate')}}</span>
				</div>
			</div>
		</div>

	</article>

	<footer>


		<div class="footer">
			<div class="container --footer-container">

				<div class="row">
					<div class="--footer-padding --first-col-pad">
						<span class="footer__text"> 121471, г. Москва ул. Рябиновая 55 стр. 28</span>
						<br>
						<span class="footer__text">prestizh06@mail.ru</span>
						<br>
						<span class="footer__text --footer-bold"> 8 (800) 707-99-24</span>
						<br>
						<a class="footer__text --footer-link" href="#">контакты</a>
					</div>

					<div class="--footer-padding --mw25">
						<span class="footer__text">Режим работы:</span>
						<br>
						<span class="footer__text">Пн-чт с 8.00 до 19.00</span>
						<br>
						<span class="footer__text">Пт с 8.00 до 17.00</span>
						<br>
						<span class="footer__text" href="#">Сб с 10.00 до 15.00</span>
						<br>
						<span class="footer__text" href="#">Вс (по предварительной договоренности).</span>
					</div>



					<div class="row --collumn --pol-pad">

						<div class="footer__container">
							<div class="--footer-padding">
								<a class="footer__text --about-link" href="#">О компании</a>
								<br>
								<a class="footer__text --about-link" href="#">Акции</a>
								<br>
								<a class="footer__text --about-link" href="#">Доставка</a>



							</div>

							<div class="--footer-padding">
								<a class="footer__text --about-link" href="#">Оплата</a>
								<br>
								<a class="footer__text --about-link" href="#">Сервис</a>
								<br>
								<a class="footer__text --about-link" href="#">Возврат</a>
							</div>
						</div>


						<div>
							<div class="footer__pol">
								<a class="footer__text --about-link" href="#">Политика обработки персональных данных</a>
							</div>
						</div>
					</div>

					<div class="--footer-rightside-padding">
						<a class="footer__text  --img-align"><img src="img\rb_logo.png"></a>
						<br>
						<span class="footer__text --text-align" href="#">Разработка</span>
						<br>
						<span class="footer__text" href="#">и продвижение сайта</span>
					</div>

				</div>

			</div>
		</div>



		<div class="row">
			<div class="footer_adaptive">

				<div class="preFooter_Adaptive"></div>
				<div class="col --mob-foot">
					<span class="footer_list_toggle">
						О КОМПАНИИ:<span class="footer_list_icon"> <i class="fas fa-angle-down" style="color:grey"></i>
						</span>
					</span>
				</div>
				<div class="col">

					<div class="footer_list_spacing">

						<ul class="footer_list">
							<li><a class="footerCategLink" href=""> 121471, г. Москва ул. Рябиновая 55 стр. 28 </a></li>
						</ul>

						<ul class="footer_list">
							<li><a class="footerCategLink" href=""> prestizh06@mail.ru</a></li>
						</ul>

						<ul class="footer_list">
							<li><a class="footerCategLink" href=""> 8 (800) 707-99-24 </a></li>
						</ul>

						<ul class="footer_list">
							<li><a class="footerCategLink" href=""> контакты</a></li>
						</ul>

					</div>

				</div>
			</div>
		</div>


		<div class="row">
			<div class="footer_adaptive">

				<div class="preFooter_Adaptive"></div>
				<div class="col --mob-foot">
					<span class="footer_list_toggle-2">
						Режим работы: <span class="footer_list_icon"> <i class="fas fa-angle-down"
								style="color:grey"></i> </span>
					</span>
				</div>
				<div class="col">

					<div class="footer_list_spacing-2">

						<ul class="footer_list">
							<li><a class="footerCategLink" href=""> Пн-чт с 8.00 до 19.00</a></li>
						</ul>

						<ul class="footer_list">
							<li><a class="footerCategLink" href=""> Пт с 8.00 до 17.00</a></li>
						</ul>

						<ul class="footer_list">
							<li><a class="footerCategLink" href=""> Сб с 10.00 до 15.00 </a></li>
						</ul>

						<ul class="footer_list">
							<li><a class="footerCategLink" href=""> Вс (по предварительной договоренности).</a></li>
						</ul>

					</div>

				</div>
			</div>
		</div>

		<div class="row">
			<div class="footer_adaptive">

				<div class="preFooter_Adaptive"></div>
				<div class="col --mob-foot">
					<span class="footer_list_toggle-3">
						Прочее: <span class="footer_list_icon"> <i class="fas fa-angle-down" style="color:grey"></i>
						</span>
					</span>
				</div>
				<div class="col ">

					<div class="footer_list_spacing-3">

						<ul class="footer_list">
							<li><a class="footerCategLink" href=""> О компании</a></li>
						</ul>

						<ul class="footer_list">
							<li><a class="footerCategLink" href=""> Акции</a></li>
						</ul>

						<ul class="footer_list">
							<li><a class="footerCategLink" href=""> Доставка </a></li>
						</ul>

						<ul class="footer_list">
							<li><a class="footerCategLink" href=""> Оплата</a></li>
						</ul>

						<ul class="footer_list">
							<li><a class="footerCategLink" href=""> Сервис</a></li>
						</ul>

						<ul class="footer_list">
							<li><a class="footerCategLink" href=""> Возврат</a></li>
						</ul>

						<ul class="footer_list">
							<li><a class="footerCategLink" href=""> Политика обработки персональных данных</a></li>
						</ul>

					</div>

				</div>
			</div>
		</div>

		<div class="row">
			<div class="footer_adaptive">

				<div class="preFooter_Adaptive"></div>
				<div class="col --mob-foot">
					<span class="footer_list_toggle-4">
						Разработка: <span class="footer_list_icon"> <i class="fas fa-angle-down" style="color:grey"></i>
						</span>
					</span>
				</div>
				<div class="col">

					<div class="footer_list_spacing-4">

						<ul class="footer_list">
							<li><a class="footerCategLink" href=""> <img src="img\rb_logo.png"></a></li>
						</ul>

					</div>

				</div>
			</div>
		</div>

	</footer>
</body>

</html>