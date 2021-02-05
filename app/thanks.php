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
						<li class="menu-list__item"><a href="/calculator.php" class="h2">Кавовий калькулятор.</a></li>
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

	<header class="page">
		<div class="container">
			<div class="row container_height align-items-center">
				<div class="col">
					<div class="page-wrap">
						<h1 class="page-ttl h1">Дякуємо!</h1>
						<h2 class="page-subttl">Ваша заявка прийнята.<br>Ми зателефонуємо вам протягом 10 хвилин для уточнення деталей.</h2>
						<a href="#" class="page-btn button"><i></i><span class="h4 h4_bold">На Головну</span></a>
					</div>
				</div>
			</div>
		</div>
	</header>


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