<?
if(isset($_GET['utm_source'])){$utm_source=$_GET['utm_source'];setcookie("utm_source",$utm_source,time()+3600*24*30, "/");}
if(isset($_GET['utm_medium'])){$utm_medium=$_GET['utm_medium'];setcookie("utm_medium",$utm_medium,time()+3600*24*30, "/");}
if(isset($_GET['utm_term'])){$utm_term=$_GET['utm_term'];setcookie("utm_term",$utm_term,time()+3600*24*30);}
if(isset($_GET['utm_content'])){$utm_content=$_GET['utm_content'];setcookie("utm_content",$utm_content,time()+3600*24*30, "/");}
if(isset($_GET['utm_campaign'])){$utm_campaign=$_GET['utm_campaign'];setcookie("utm_campaign",$utm_campaign,time()+3600*24*30, "/");}
if(isset($_GET['gclid'])){$gclid=$_GET['gclid'];setcookie("gclid",$gclid,time()+3600*24*30, "/");}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title>Coffe Group</title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:image" content=""/>
	-->
	<link rel="icon" href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<meta name="theme-color" content="#006548">

	<link rel="stylesheet" href="css/main.min.css">

	<script type="text/javascript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-K2WZPB4');
	</script>
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K2WZPB4"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<nav class="menu d-block d-md-none">
		<div class="container">
			<div class="row">
				<div class="col">
					<button class="menu-close">
						<img src="img/close.svg" alt="close">
					</button>
				</div>
			</div>
			<div class="row">
				<div class="col offset-xs-1">
					<ul class="menu-list">
						<li class="menu-list__item"><a href="#about" class="h2 anchor">Про нас.</a></li>
						<li class="menu-list__item"><a href="#catalog" class="h2 anchor">Пропозиції.</a></li>
						<li class="menu-list__item"><a href="/calculator.php" class="h2">Кавовий калькулятор.</a></li>
						<li class="menu-list__item"><a href="#reviews" class="h2 anchor">Відгуки.</a></li>
					</ul>
					<p class="menu-txt text">Є питання? Телефонуй!</p>
					<a href="tel:+380673616775" class="menu-phone h2">067 361 67 75</a>
				</div>
			</div>
		</div>
	</nav>

	<header class="head">
		<nav class="nav">
			<div class="container">
				<div class="row align-items-center align-items-md-end">
					<div class="col-md-5 col-6">
						<a href="/" class="nav-link">
							<img src="img/logo.png" alt="logo" class="nav-logo">
						</a>
					</div>
					<div class="col-md-4 d-none d-md-block">
						<ul class="nav-list">
							<li class="nav-list__item text"><a href="#about" class="anchor">Про нас</a></li>
							<li class="nav-list__item text"><a href="#catalog" class="anchor">Пропозиції</a></li>
							<li class="nav-list__item text"><a href="#reviews" class="anchor">Відгуки</a></li>
						</ul>
					</div>
					<div class="col-md-3 d-none d-md-block">
						<a href="tel:+380673616775" class="nav-phone text text_bold">+38 (067) 361 67 75</a>
					</div>
					<div class="col-6 d-block d-md-none">
						<button class="nav-ico">
							<img src="img/menu_btn.svg" alt="menu">
						</button>
					</div>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row container_height align-items-center">
				<div class="col">
					<div class="head-ico d-flex d-xs-none">
						<img src="img/head-ico1.png" alt="ico" class="head-ico__img">
						<img src="img/head-ico2.png" alt="ico" class="head-ico__img">
					</div>
					<div class="head-wrap">
						<h1 class="head-ttl h1">Привіт!<br class="d-block d-sm-none"> Ми — Coffee Group.</h1>
						<h2 class="head-subttl">забезпечимо ваш офіс <br class="d-none d-sm-block">смачною кавою, чаєм, молоком <br class="d-none d-sm-block">і смаколиками за 1 дзвінок.</h2>
					</div>
					<div class="head-ico">
						<img src="img/head-ico1.png" alt="ico" class="head-ico__img d-none d-xs-block">
						<img src="img/head-ico2.png" alt="ico" class="head-ico__img d-none d-xs-block">
						<img src="img/head-ico3.png" alt="ico" class="head-ico__img d-none d-md-block">
						<img src="img/head-ico4.png" alt="ico" class="head-ico__img">
						<img src="img/head-ico5.png" alt="ico" class="head-ico__img">
					</div>
				</div>
			</div>
		</div>
	</header>

	<section id="about" class="about scroll">
		<div class="container">
			<div class="line line_1"></div>
			<div class="line line_2"></div>
			<div class="line line_3"></div>
			<div class="line line_4"></div>
			<div class="line-marker line-marker_1"></div>
			<div class="row">
				<div class="col offset-xs-1">
					<h3 class="about-ttl h2">Про нас.</h3>
					<h4 class="about-txt h4">Якщо коротко, Сoffee Group — це все для офісної кухні + оренда та сервіс кава-машин.<br>Працюємо з 2011 року. Наші прогресивні фішки:</h4>
					<div class="row justify-content-between">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="about-item">
								<img src="img/about-ico1.png" alt="about-ico" class="about-item__ico">
								<h4 class="about-item__ttl h4 h4_bold">Інноваційний відділ турботи.</h4>
								<p class="about-item__txt text">Ми аналізуємо, як швидко ви “справляєтесь” із кавою та смаколиками і за 2-3 дні до “дня ікс” пропонуємо доставити нову порцію.</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 offset-sm-6 offset-md-0">
							<div class="about-item">
								<img src="img/about-ico2.png" alt="about-ico" class="about-item__ico">
								<h4 class="about-item__ttl h4 h4_bold">Власний сервісний центр.</h4>
								<p class="about-item__txt text">У всіх буває поганий настрій, навіть у кава-машин. Наші технарі швидко вирішать проблему та повернуть вам машинку у повній бойовій готовності.</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="about-item">
								<img src="img/about-ico3.png" alt="about-ico" class="about-item__ico">
								<h4 class="about-item__ttl h4 h4_bold">Завжди однаково смачна кава.</h4>
								<p class="about-item__txt text">Ми вже багато років обсмажуємо каву на одному підприємстві. Будьте певні, що кожна нова пачка буде такою ж смачною, як попередні.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="catalog" class="catalog scroll">
		<div class="container">
			<div class="line line_5"></div>
			<div class="line line_6"></div>
			<div class="line-marker line-marker_2"></div>
			<div class="row">
				<div class="col-10 offset-xs-1">
					<h3 class="catalog-ttl h2">Що ми будемо доставляти в ваш офіс.</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-4 col-xs-10 offset-xs-1">
					<div class="catalog-item i1 active">
						<h4 class="catalog-item__ttl h4 h4_bold">Кава Romanesi.</h4>
						<p class="catalog-item__txt text">Кава з історією. Лінійка Romanesi — це 4 авторські бленди та купажі для ласунів, яким цікаво досліджувати тонкі кавові смаки та аромати.</p>
						<div class="catalog-slider catalog-slider_mobile slider1 active">
							<div class="catalog-slider__item">
								<img src="img/catalog/1/1.jpg" alt="img">
								<p class="text">Romanesi Rosso, купаж з ароматом горіхів та хлібу.</p>
							</div>
							<div class="catalog-slider__item">
								<img src="img/catalog/1/2.jpg" alt="img">
								<p class="text">Romanesi Oro, дуже м’який бленд 5 сортів арабіки.</p>
							</div>
							<div class="catalog-slider__item">
								<img src="img/catalog/1/3.jpg" alt="img">
								<p class="text">Romanesi Ciok Cream, чашечка Середземномор’я.</p>
							</div>
							<!-- <div class="catalog-slider__item">
								<img src="img/catalog/1/4.jpg" alt="img">
								<p class="text">Romanesi Bar, “обідня” кава із нотами винограду.</p>
							</div> -->
						</div>
					</div>
					<div class="catalog-item i2">
						<h4 class="catalog-item__ttl h4">Кава TPD+.</h4>
						<p class="catalog-item__txt text">Обирайте, якщо ви — машина, а кава — ваше паливо. Зранку тяжко? TPD+.  Ніч за монітором? TPD+. Голодні, та не до їжі? TPD+. Треба натхнення? TPD+.</p>
						<div class="catalog-slider catalog-slider_mobile slider2">
							<div class="catalog-slider__item">
								<img src="img/catalog/2/1.jpg" alt="img">
								<p class="text">TPD+ Fantasia: пийте перед важливими задачами.</p>
							</div>
							<div class="catalog-slider__item">
								<img src="img/catalog/2/2.jpg" alt="img">
								<p class="text">TPD+ Harmonia: кава-антистрес для лате і капучино.</p>
							</div>
							<div class="catalog-slider__item">
								<img src="img/catalog/2/3.jpg" alt="img">
								<p class="text">TPD+ Shock: прискорює радикально та легально.</p>
							</div>
							<div class="catalog-slider__item">
								<img src="img/catalog/2/4.jpg" alt="img">
								<p class="text">TPD+ Life Style, “база” для продуктивного дня. </p>
							</div>
						</div>
					</div>
					<div class="catalog-item i3">
						<h4 class="catalog-item__ttl h4">До кави.</h4>
						<p class="catalog-item__txt text">Сиропи (8 смаків), цукор, смаколики та молоко. І не лише “класичне”. На ваш вибір 7 видів рослинного: від кокосового до гречаного.</p>
						<div class="catalog-slider catalog-slider_mobile slider3">
							<div class="catalog-slider__item">
								<img src="img/catalog/3/1.jpg" alt="img">
								<p class="text">Коров’яче молоко та 7 видів рослинного.</p>
							</div>
							<div class="catalog-slider__item">
								<img src="img/catalog/3/2.jpg" alt="img">
								<p class="text">Сиропи, 8 смаків.</p>
							</div>
							<div class="catalog-slider__item">
								<img src="img/catalog/3/3.jpg" alt="img">
								<p class="text">Білий цукор у стіках.</p>
							</div>
							<div class="catalog-slider__item">
								<img src="img/catalog/3/4.jpg" alt="img">
								<p class="text">Снеки та смаколики.</p>
							</div>
						</div>
					</div>
					<div class="catalog-item i4">
						<h4 class="catalog-item__ttl h4">Для кухні.</h4>
						<p class="catalog-item__txt text">Еко-стакани, палички-мішалочки, кухонні органайзери. А також чай. Хоч ми Coffee Group, але подбаємо і про тих, хто за Tea.  Вибір із 12 сортів!</p>
						<div class="catalog-slider catalog-slider_mobile slider4">
							<div class="catalog-slider__item">
								<img src="img/catalog/4/1.jpg" alt="img">
								<p class="text">Чай Greenfield, 12 сортів.</p>
							</div>
							<div class="catalog-slider__item">
								<img src="img/catalog/4/2.jpg" alt="img">
								<p class="text">Палички для перемішування.</p>
							</div>
							<div class="catalog-slider__item">
								<img src="img/catalog/4/3.jpg" alt="img">
								<p class="text">Еко-стакани.</p>
							</div>
							<div class="catalog-slider__item">
								<img src="img/catalog/4/4.jpg" alt="img">
								<p class="text">Органайзери.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 offset-lg-1 d-none d-md-block">
					<div class="catalog-slider slider1 active">
						<div class="catalog-slider__item">
							<img src="img/catalog/1/1.jpg" alt="img">
							<p class="text">Romanesi Rosso, купаж з ароматом горіхів та хлібу.</p>
						</div>
						<div class="catalog-slider__item">
							<img src="img/catalog/1/2.jpg" alt="img">
							<p class="text">Romanesi Oro, дуже м’який бленд 5 сортів арабіки.</p>
						</div>
						<div class="catalog-slider__item">
							<img src="img/catalog/1/3.jpg" alt="img">
							<p class="text">Romanesi Ciok Cream, чашечка Середземномор’я.</p>
						</div>
						<div class="catalog-slider__item">
							<img src="img/catalog/1/4.jpg" alt="img">
							<p class="text">Romanesi Bar, “обідня” кава із нотами винограду.</p>
						</div>
					</div>
					<div class="catalog-slider slider2">
						<div class="catalog-slider__item">
							<img src="img/catalog/2/1.jpg" alt="img">
							<p class="text">TPD+ Fantasia: пийте перед важливими задачами.</p>
						</div>
						<div class="catalog-slider__item">
							<img src="img/catalog/2/2.jpg" alt="img">
							<p class="text">TPD+ Harmonia: кава-антистрес для лате і капучино.</p>
						</div>
						<div class="catalog-slider__item">
							<img src="img/catalog/2/3.jpg" alt="img">
							<p class="text">TPD+ Shock: прискорює радикально та легально.</p>
						</div>
						<div class="catalog-slider__item">
							<img src="img/catalog/2/4.jpg" alt="img">
							<p class="text">TPD+ Life Style, “база” для продуктивного дня. </p>
						</div>
					</div>
					<div class="catalog-slider slider3">
						<div class="catalog-slider__item">
							<img src="img/catalog/3/1.jpg" alt="img">
							<p class="text">Коров’яче молоко та 7 видів рослинного.</p>
						</div>
						<div class="catalog-slider__item">
							<img src="img/catalog/3/2.jpg" alt="img">
							<p class="text">Сиропи, 8 смаків.</p>
						</div>
						<div class="catalog-slider__item">
							<img src="img/catalog/3/3.jpg" alt="img">
							<p class="text">Білий цукор у стіках.</p>
						</div>
						<div class="catalog-slider__item">
							<img src="img/catalog/3/4.jpg" alt="img">
							<p class="text">Снеки та смаколики.</p>
						</div>
					</div>
					<div class="catalog-slider slider4">
						<div class="catalog-slider__item">
							<img src="img/catalog/4/1.jpg" alt="img">
							<p class="text">Чай Greenfield, 12 сортів.</p>
						</div>
						<div class="catalog-slider__item">
							<img src="img/catalog/4/2.jpg" alt="img">
							<p class="text">Палички для перемішування.</p>
						</div>
						<div class="catalog-slider__item">
							<img src="img/catalog/4/3.jpg" alt="img">
							<p class="text">Еко-стакани.</p>
						</div>
						<div class="catalog-slider__item">
							<img src="img/catalog/4/4.jpg" alt="img">
							<p class="text">Органайзери.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="offer scroll">
		<div class="container">
			<div class="line line_7"></div>
			<div class="line-marker line-marker_3"></div>
			<div class="row">
				<div class="col offset-md-5 offset-xs-1">
					<h3 class="offer-ttl h2">Наші пропозиції.</h3>
				</div>
			</div>
			<div class="row offer-item align-items-center">
				<div class="col-xs-4 offset-xs-1">
					<h4 class="offer-item__ttl h3 h3_extra">Middle.</h4>
					<p class="offer-item__subttl text">Для офісів до 30 осіб.</p>
				</div>
				<div class="col-xs-7">
					<p class="offer-item__txt text">Ви отримуєте: кава-машину DeLonghi Primadonna (може приготувати до 40 чашок кави на годину); 4-6 кг натуральної зернової кави; 20−25 літрів молока для найсмачніших лате та капучино; 1 кг цукру в стіках; 360-380 еко-стаканів. Ще ми привеземо чай, сиропи та смаколики: кількість розрахуємо на основі вподобань вашого офісу.</p>
					<a href="/calculator.php?rate=middle" class="offer-item__btn button"><i></i><span class="h4 h4_bold">Розрахувати</span></a>
				</div>
			</div>
			<div class="row offer-item align-items-center">
				<div class="col-xs-4 offset-xs-1">
					<h4 class="offer-item__ttl h3 h3_extra">Senior.</h4>
					<p class="offer-item__subttl text">Для офісів від 30 до 60 осіб.</p>
				</div>
				<div class="col-xs-7">
					<p class="offer-item__txt text">Ви отримуєте: більш потужну Saeco Aulika (може приготувати до 60 чашок кави на годину); 8-12 кг натуральної зернової кави; 25-40 літрів молока для найсмачніших лате та капучино; 2 кг цукру в стіках; до 1000 еко-стаканів. Ще ми привеземо чай, сиропи та смаколики: кількість розрахуємо на основі вподобань вашого офісу.</p>
					<a href="/calculator.php?rate=senior" class="offer-item__btn button"><i></i><span class="h4 h4_bold">Розрахувати</span></a>
				</div>
			</div>
			<div class="row offer-item align-items-center">
				<div class="col-xs-4 offset-xs-1">
					<h4 class="offer-item__ttl h3 h3_extra">Team Lead.</h4>
					<p class="offer-item__subttl text">Для офісів від 60 осіб.</p>
				</div>
				<div class="col-xs-7">
					<p class="offer-item__txt text">Для великих офісів у нас ідивідуальні пропозиції. У вас 65 працівників чи 165? Серед них є вегани? Офіс закритого чи відкритого типу? З цілодобовим доступом чи без? Нюансів багато! Що можемо сказати одразу: у вас буде суперавтоматична кава-машина Franke. Її сил та “вмінь” вистачить на повноцінну кав’ярню.</p>
					<a href="/calculator.php?rate=teamlead" class="offer-item__btn button"><i></i><span class="h4 h4_bold">Розрахувати</span></a>
				</div>
			</div>
		</div>
	</section>

	<section class="coop scroll">
		<div class="container">
			<div class="line line_8"></div>
			<div class="line line_9"></div>
			<div class="line line_10"></div>
			<div class="line-marker line-marker_4"></div>
			<div class="row">
				<div class="col offset-xs-1">
					<h3 class="coop-ttl h2">Як починається співпраця.</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-xs-10 offset-xs-1">
					<div class="coop-item">
						<p class="coop-item__numb h3 h3_extra">1.</p>
						<p class="coop-item__txt text"><b>Знайомство.</b> Допомагаємо визначити найкращу пропозицію. Раптом у вас 40 працівників, але буде достатньо пакету Middle? А буває і навпаки.</p>
					</div>
				</div>
				<div class="col-md-3 col-xs-10 offset-xs-1">
					<div class="coop-item">
						<p class="coop-item__numb h3 h3_extra">2.</p>
						<p class="coop-item__txt text"><b>Дегустація.</b> В зручний день до вас приїжджає бариста з кава-машиною та різною кавою. Обираємо, яка вам найбільше смакує. Фіксуємо вибір.</p>
					</div>
				</div>
				<div class="col-md-3 col-xs-10 offset-xs-1">
					<div class="coop-item">
						<p class="coop-item__numb h3 h3_extra">3.</p>
						<p class="coop-item__txt text"><b>Доставка.</b> Інженери налаштовують кава-машину так, аби готувала, як на дегустації. Далі ми привозимо її, каву та смаколики згідно обраного пакету.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="reviews" class="map">
		<div class="map-container">
			<div id="map"></div>
		</div>
		<div class="reviews-wrap">
			<div class="reviews-slider">
				<div class="reviews-slider__item">
					<h4 class="reviews-item__name h4 h4_bold">Яна, <br>ТОВ "Омни Юнит"</h4>
					<p class="reviews-item__txt text">Довольны работой с Вами, оперативно реагируете на запросы. Делаете доставку вовремя и даже раньше оплаты, за что отдельное СПАСИБО! Приятно общаться с менеджером, всегда вовремя отвечаете. Надеюсь еще долго будем сотрудничать!</p>
				</div>
				<div class="reviews-slider__item">
					<h4 class="reviews-item__name h4 h4_bold">Людмила,<br>ПП ЛЕССИ</h4>
					<p class="reviews-item__txt text">С вашей компанией работаем очень давно. Жалоб нет. Только позитивные эмоции. Персонал - доброжелателен, внимателен, вежлив. Качество обслуживание устраивает на 100%. Надеюсь и на дальнейшее долгое сотрудничество.</p>
				</div>
				<div class="reviews-slider__item">
					<h4 class="reviews-item__name h4 h4_bold">Наталия,<br>ONSEO</h4>
					<p class="reviews-item__txt text">Имея в своем распоряжении несколько крупных офисов, наша компания вынуждена постоянно сотрудничать с различными фирмами, доставляющими продукты питания. Из всех Подрядчиков, с которыми мы сотрудничали и сотрудничаем, хотим выделить именно «КофеГрупп».<br>Сотрудники этой компании всегда выполняют работу оперативно и качественно, берутся за срочные и нестандартные заказы, а также внимательно прислушиваются к нашим пожеланиям. Ассортимент товара всегда пополняется, о чем менеджеры сообщают вовремя. Благодаря быстрой доставке кофе в нашем офисе всегда приятный аромат и хорошее настроение.<br>Смело могу рекомендовать сотрудничество всем, кто еще сомневался.</p>
				</div>
				<div class="reviews-slider__item">
					<h4 class="reviews-item__name h4 h4_bold">ФОП Устименко</h4>
					<p class="reviews-item__txt text">Велике дякую співробітникам КофеГруп за таку плідну співпрацю. Кава дуже смачна та якісна, яку привозять швидко та зручно в будь-який для вас час,обладнання працює навідмінно та навіть краще)) надіюсь все і далі так буде чудово, окремо дякую Аліні )</p>
				</div>
				<div class="reviews-slider__item">
					<h4 class="reviews-item__name h4 h4_bold">Виктория Шкуренко,<br>Компания ЕсПиЕм</h4>
					<p class="reviews-item__txt text">Хочу поблагодарить всю команду компании Coffee Group  за качественную работу и поддержку по всем вопросам. За время работы (более чем год) всегда заказы привозили вовремя, при необходимости приезжали и обслуживали кофемашинку. За оперативность, за понимание клиента, за вкусный кофе и просто за приятное общение БОЛЬШОЕ СПАСИБО всей вашей команде!<br>Желаю Вам пррцветния и много новых и хороших клиентов!!!</p>
				</div>
				<div class="reviews-slider__item">
					<h4 class="reviews-item__name h4 h4_bold">Татьяна,<br>ТОВ «Унитехнології ЮЕЙ»</h4>
					<p class="reviews-item__txt text">С компанией Coffee croup  работаем уже давно. Всегда на связи, оперативная доставка, вкусный кофе.<br>Учитывают все пожелания и просьбы. Напоминают и интересуются в конце месяца не нужен ли нам кофе и таким образом не забываешь сделать заказ) Всем рекомендую, все на высшем уровне.</p>
				</div>
				<div class="reviews-slider__item">
					<h4 class="reviews-item__name h4 h4_bold">Анастасия,<br>404 GROUP</h4>
					<p class="reviews-item__txt text">Работаем около года. Довольны: -качеством обслуживания;<br>-оборудованием, которое предоставляется, за достаточно небольшую арендную плату;<br>-самое главное, это кофе, который есть на любой вкус<br>Однозначно рекомендуем.</p>
				</div>
				<div class="reviews-slider__item">
					<h4 class="reviews-item__name h4 h4_bold">Дарья,<br>ITernal Group</h4>
					<p class="reviews-item__txt text">С ребятами из Coffee Group работаем около 3х лет. Безумно радует их клиентоориентированность! Бывает что забудешь за доставку, а у них всё схвачено - позвонят, напомнят💪🏾 <br>Отдельное спасибо за обслуживание кофе-машин!)) Всегда помогут, подскажут, если нужно приедут специалисты и всё исправят. <br>Также огромное спасибо, за возможность оформлять заказы через мессенджеры - очень удобно❤️</p>
				</div>
			</div>
		</div>
	</section>

	<section class="feedback">
		<div class="container">
			<div class="row">
				<div class="col offset-md-1">
					<h3 class="feedback-ttl h2">Зворотній зв’язок.</h3>
					<p class="feedback-txt text">Менеджери з відділу турботи радо дадуть відповідь на всі ваші запитання, навіть якщо вам треба “просто дізнатися”.</p>
				</div>
			</div>
			<form action="mail.php" method="POST" class="feedback-form form_check">
				<input type="hidden" name="title" value="Зворотній зв’язок">
				<div class="row align-items-center">
					<div class="col-md-3 offset-md-1 col-sm-4">
						<div class="rline">
							<input type="text" name="name" class="feedback-form__input text rfield" placeholder="Ім’я">
						</div>
					</div>
					<div class="col-md-3 offset-md-1 col-sm-4">
						<div class="rline">
							<input type="text" name="phone" class="feedback-form__input text rfield phonefield" placeholder="Телефон">
						</div>
					</div>
					<div class="col-md-3 offset-md-1 col-sm-4 d-flex d-sm-block justify-content-center justify-content-sm-start">
						<button class="feedback-form__btn btnsubmit button"><i></i><span class="h4 h4_bold">Надіслати</span></button>
					</div>
				</div>
			</form>
		</div>
	</section>

	<footer class="foot">
		<div class="container">
			<div class="row foot-nav justify-content-between align-items-center">
				<div class="col-md-1 col-xs-2">
					<img src="img/logo.png" alt="logo" class="foot-logo">
				</div>
				<div class="col-md-5 col-xs-10 d-none d-xs-block">
					<ul class="foot-list">
						<li class="foot-list__item text"><a href="#">Про нас</a></li>
						<li class="foot-list__item text"><a href="#">Пропозиції</a></li>
						<li class="foot-list__item text"><a href="#">Відгуки</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 offset-md-1">
					<p class="foot-txt text">Немає часу чекати? Дзвоніть!</p>
					<a href="tel:+380673616775" class="foot-info h3 h3_extra">067 361 67 75</a>
					<a href="tel:+380443626775" class="foot-info foot-info_margin h3 h3_extra">044 362 67 75</a>
				</div>
				<div class="col-md-7">
					<p class="foot-txt text">Бажаєте заїхати? Зустрінемо вас з горнятком кави за адресою:</p>
					<p class="foot-info foot-info_margin h3 h3_extra">Дегтярівська, 51В, Київ</p>
					<p class="foot-txt text">Пишіть:</p>
					<a href="mailto:office@coffeegroup.com.ua" class="foot-info foot-info_margin h3 h3_extra">office@coffeegroup.com.ua</a>
					<p class="foot-txt text">Ми у соціальних мережах:</p>
					<div class="foot-soc">
						<a href="#" class="foot-soc__link"><img src="img/facebook.svg" alt="facebook"></a>
						<a href="#" class="foot-soc__link"><img src="img/instargam.svg" alt="instargam"></a>
						<a href="#" class="foot-soc__link"><img src="img/telegram.svg" alt="telegram"></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<a href="#" class="foot-last text">Політика конфіденційності</a>
				</div>
			</div>
		</div>
	</footer>

	<script src="js/scripts.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3Pz2Hj9ynSklnhPWZC6DyJPLaU29FySU"></script>
	<script>
		google.maps.event.addDomListener(window, 'load', init);
		function init() {
			var mapOptions = {
				zoom: 13,
				scrollwheel: true,
				scaleControl: false,
				draggable: true,
				streetViewControl: false,
				mapTypeControl: false,
				disableDefaultUI: true,
				center: new google.maps.LatLng(50.444508,30.526259),
				styles: [{"featureType":"all","elementType":"geometry","stylers":[{"color":"#09b275"}]},{"featureType":"all","elementType":"labels.text","stylers":[{"weight":"0.01"},{"saturation":"100"},{"lightness":"100"},{"gamma":"5.15"}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"on"},{"weight":"1"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"},{"weight":"0.01"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"visibility":"off"},{"saturation":"-100"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"},{"saturation":"100"},{"lightness":"100"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":"100"},{"color":"#0f8f61"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"},{"weight":"1.49"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"gamma":"5.09"},{"saturation":"30"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"visibility":"simplified"},{"invert_lightness":true}]},{"featureType":"road.highway","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"weight":"6.63"},{"invert_lightness":true}]},{"featureType":"road.highway","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#09b275"},{"visibility":"on"},{"lightness":"-32"}]}]
			};
			var mapElement = document.getElementById('map');
			var map = new google.maps.Map(mapElement, mapOptions);
			var marker1 = new google.maps.Marker({
				position: new google.maps.LatLng(50.4697803,30.5103475),
				map: map,
				icon: '/img/marker.png',
				title: 'ООО eCall',
			});
			var marker2 = new google.maps.Marker({
				position: new google.maps.LatLng(50.4288521,30.5005444),
				map: map,
				icon: '/img/marker.png',
				title: 'ТОВ «Омні Юніт»',
			});
			var marker3 = new google.maps.Marker({
				position: new google.maps.LatLng(50.4253961,30.5316388),
				map: map,
				icon: '/img/marker.png',
				title: 'Адвокатське Об\'єднання «Hillmont Partners»',
			});
			var marker4 = new google.maps.Marker({
				position: new google.maps.LatLng(50.4381323,30.6128431),
				map: map,
				icon: '/img/marker.png',
				title: 'ДП "ДЕРЖАВНИЙ НАУКОВОДОСЛІДНИЙ ТА ПРОЕКТНО-ВИШУКУВАЛЬНИЙ ІНСТИТУТ "НДІПРОЕКТРЕКОНСТРУКЦІЯ""',
			});
			var marker5 = new google.maps.Marker({
				position: new google.maps.LatLng(50.4381378,30.6142178),
				map: map,
				icon: '/img/marker.png',
				title: 'ТОВ "ІК "АВТОМАГІСТРАЛЬ"',
			});
			var marker6 = new google.maps.Marker({
				position: new google.maps.LatLng(50.4265841,30.5361971),
				map: map,
				icon: '/img/marker.png',
				title: 'Компания GoIT',
			});
			var marker7 = new google.maps.Marker({
				position: new google.maps.LatLng(50.4906244,30.4103853),
				map: map,
				icon: '/img/marker.png',
				title: 'ПП ЛЕССИ',
			});
			var marker8 = new google.maps.Marker({
				position: new google.maps.LatLng(50.3941241,30.6111085),
				map: map,
				icon: '/img/marker.png',
				title: 'ТОВ «ОРНЕТІКА»',
			});
			var marker9 = new google.maps.Marker({
				position: new google.maps.LatLng(50.4325148,30.5529838),
				map: map,
				icon: '/img/marker.png',
				title: 'ТОВ "ВАЙН ДІСКАВЕРІ СЕЛЕКШН"',
			});
			var marker10 = new google.maps.Marker({
				position: new google.maps.LatLng(50.4712538,30.5172015),
				map: map,
				icon: '/img/marker.png',
				title: 'ТОВ "СЕРВ\'Є УКРАЇНА"',
			});
		}
	</script>

</body>
</html>