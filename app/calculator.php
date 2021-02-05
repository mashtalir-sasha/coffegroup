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
						<li class="menu-list__item"><a href="/#about" class="h2">Про нас.</a></li>
						<li class="menu-list__item"><a href="/#catalog" class="h2">Пропозиції.</a></li>
						<li class="menu-list__item"><a href="/" class="h2">Кавовий калькулятор.</a></li>
						<li class="menu-list__item"><a href="/#reviews" class="h2">Відгуки.</a></li>
					</ul>
					<p class="menu-txt text">Є питання? Телефонуй!</p>
					<a href="tel:+380673616775" class="menu-phone h2">067 361 67 75</a>
				</div>
			</div>
		</div>
	</nav>
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
						<li class="nav-list__item text"><a href="/#about">Про нас</a></li>
						<li class="nav-list__item text"><a href="/#catalog">Пропозиції</a></li>
						<li class="nav-list__item text"><a href="/#reviews">Відгуки</a></li>
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
<form action="mail.php" method="POST" class="calc-form form_check">
	<input type="hidden" name="title" value="Кавовий калькулятор">
	<input type="hidden" name="paket">
	<section class="calc">
		<div class="container">
			<div class="row">
				<div class="col offset-xs-1">
					<h1 class="calc-ttl h2">Кавовий калькулятор.</h1>
					<h2 class="calc-subttl text">Зараз ви зможете не тільки визначити найкращий пакет, а й перевірити свою спостережливість!</h2>
				</div>
			</div>
			<section class="calc-item">
				<div class="row">
					<div class="col offset-md-1">
						<h3 class="calc-item__ttl h3 h3_bold">Ви обираєте для:</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 offset-md-1">
						<label class="radio">
							<input type="radio" name="step1" data-rate="1" value="Офісу">
							<div class="radio-text">Офісу</div>
						</label>
					</div>
					<div class="col-md-4 col-sm-4">
						<label class="radio">
							<input type="radio" name="step1" data-rate="2" value="Коворкінгу">
							<div class="radio-text">Коворкінгу</div>
						</label>
					</div>
					<div class="col-md-3 col-sm-4">
						<label class="radio">
							<input type="radio" name="step1" data-rate="1" value="Інше">
							<div class="radio-text">Інше</div>
						</label>
					</div>
				</div>
			</section>
			<section class="calc-item">
				<div class="row">
					<div class="col offset-md-1">
						<h3 class="calc-item__ttl h3 h3_bold">Ви відкриті:</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 offset-md-1">
						<label class="radio">
							<input type="radio" name="step2" data-rate="1" value="З 9 до 18">
							<div class="radio-text">З 9 до 18</div>
						</label>
					</div>
					<div class="col-md-4 col-sm-4">
						<label class="radio">
							<input type="radio" name="step2" data-rate="2" value="Цілодобово">
							<div class="radio-text">Цілодобово</div>
						</label>
					</div>
					<div class="col-md-3 col-sm-4">
						<label class="radio">
							<input type="radio" name="step2" data-rate="0" value="Інше">
							<div class="radio-text">Інше</div>
						</label>
					</div>
				</div>
			</section>
			<section class="calc-item">
				<div class="row">
					<div class="col offset-md-1">
						<h3 class="calc-item__ttl h3 h3_bold">Чим наразі пригощаєте працівників:</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 offset-md-1">
						<label class="radio radio_sm">
							<input type="radio" name="step3" data-rate="1" value="Особливо нічим, ще шукаємо варіанти ">
							<div class="radio-text">Особливо нічим, ще шукаємо варіанти </div>
						</label>
					</div>
					<div class="col-md-4">
						<label class="radio radio_sm">
							<input type="radio" name="step3" data-rate="2" value="Кавою, чаєм, печивом">
							<div class="radio-text">Кавою, чаєм, печивом</div>
						</label>
					</div>
					<div class="col-md-3">
						<label class="radio radio_sm">
							<input type="radio" name="step3" data-rate="3" value="У нас практично All Inclusive">
							<div class="radio-text">У нас практично All Inclusive</div>
						</label>
					</div>
				</div>
			</section>
			<section class="calc-item">
				<div class="row">
					<div class="col offset-md-1">
						<h3 class="calc-item__ttl h3 h3_bold">Основні “споживачі” кави:</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 offset-md-1">
						<label class="radio radio_sm">
							<input type="radio" name="step4" data-rate="1" value="Тільки працівники офісу">
							<div class="radio-text">Тільки працівники офісу</div>
						</label>
					</div>
					<div class="col-md-4">
						<label class="radio radio_sm">
							<input type="radio" name="step4" data-rate="2" value="Іноді ще приходять гості">
							<div class="radio-text">Іноді ще приходять гості</div>
						</label>
					</div>
					<div class="col-md-3">
						<label class="radio radio_sm">
							<input type="radio" name="step4" data-rate="3" value="Працівники + багато гостей">
							<div class="radio-text">Працівники + багато гостей</div>
						</label>
					</div>
				</div>
			</section>
			<section class="calc-item">
				<div class="row">
					<div class="col offset-md-1">
						<h3 class="calc-item__ttl h3 h3_bold">Смакові вподобання:</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 offset-md-1">
						<label class="radio radio_sm">
							<input type="radio" name="step5" data-rate="1" value="Американо, еспресо">
							<div class="radio-text">Американо, еспресо</div>
						</label>
					</div>
					<div class="col-md-4">
						<label class="radio radio_sm">
							<input type="radio" name="step5" data-rate="1" value="Більше за лате і капучино">
							<div class="radio-text">Більше за лате і капучино</div>
						</label>
					</div>
					<div class="col-md-3">
						<label class="radio radio_sm">
							<input type="radio" name="step5" data-rate="2" value="“Зробіть допіо і флет-вайт”">
							<div class="radio-text">“Зробіть допіо і флет-вайт”</div>
						</label>
					</div>
				</div>
			</section>
			<section class="calc-item">
				<div class="row">
					<div class="col offset-md-1">
						<h3 class="calc-item__ttl h3 h3_bold">Додатково:</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 offset-md-1">
						<label class="radio radio_sm radio_checkbox">
							<input type="checkbox" name="step6[1]" data-rate="2" value="Одночасне приготування 2х чашок кави">
							<div class="radio-text">Одночасне приготування 2х чашок кави</div>
						</label>
						<label class="radio radio_sm radio_checkbox">
							<input type="checkbox" name="step6[2]" data-rate="2" value="Лічильник чашок">
							<div class="radio-text">Лічильник чашок <i class="radio-text__note" data-tippy-content="Кавоварка фіксує кожну приготовану порцію напою. Зручна опція для обліку кави."></i></div>
						</label>
					</div>
					<div class="col-md-5">
						<label class="radio radio_sm radio_checkbox">
							<input type="checkbox" name="step6[3]" data-rate="2" value="Запрограмована закладка кави">
							<div class="radio-text">Запрограмована закладка кави<i class="radio-text__note" data-tippy-content="Можливість вибирати кількість грам кави на порцію (від 7,5 до 10,5 г). Чим більше закладка, тим міцніше кави (більше кофеїну і більш насичений смак)."></i></div>
						</label>
						<label class="radio radio_checkbox">
							<input type="checkbox" name="step6[4]" data-rate="1" value="Програма промивання кавового апарату">
							<div class="radio-text">Програма промивання кавового апарату<i class="radio-text__note" data-tippy-content="Ця функція гарантує максимальну свіжість кожної чашки кави: кавоварка автоматично виконує очистку робочого блоку і диспенсера кави перед включенням і вимиканням режиму очікування."></i></div>
						</label>
					</div>
				</div>
			</section>
		</div>
	</section>

	<section class="form">
		<div class="container">
			<div class="row">
				<div class="col offset-md-1">
					<h3 class="form-ttl h2">Вам підходить <span>Senior.</span></h3>
					<p class="form-txt text">Ми майже впевнені, але краще уточнити. Залиште свої контакти, і ми зателефонуємо протягом 10 хвилин.</p>
				</div>
			</div>
			<div class="form-form">
				<div class="row align-items-center">
					<div class="col-md-3 offset-md-1 col-sm-4">
						<div class="rline">
							<input type="text" name="name" class="form-form__input text rfield" placeholder="Ім’я">
						</div>
					</div>
					<div class="col-md-3 offset-md-1 col-sm-4">
						<div class="rline">
							<input type="text" name="phone" class="form-form__input text rfield phonefield" placeholder="Телефон">
						</div>
					</div>
					<div class="col-md-3 offset-md-1 col-sm-4 d-flex d-sm-block justify-content-center justify-content-sm-start">
						<button class="form-form__btn btnsubmit button"><i></i><span class="h4 h4_bold">Надіслати</span></button>
					</div>
				</div>
			</div>
		</div>
	</section>
</form>

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

</body>
</html>