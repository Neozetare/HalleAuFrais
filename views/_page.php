<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<base href="<?php echo BASE_URI ?>">

		<title><?php echo $title; ?></title>
		<link rel="apple-touch-icon" sizes="180x180" href="public/img/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="public/img/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="public/img/favicons/favicon-16x16.png">
		<link rel="manifest" href="public/img/favicons/manifest.json">
		<link rel="mask-icon" href="public/img/favicons/safari-pinned-tab.svg" color="#385b76">
		<link rel="shortcut icon" href="public/img/favicons/favicon.ico">
		<meta name="msapplication-config" content="public/img/favicons/browserconfig.xml">
		<meta name="theme-color" content="#385b76">

		<link rel="stylesheet" type="text/css" href="public/css/reset.css">
		<link rel="stylesheet" type="text/css" href="public/css/simplegrid.css">
		<link href="https://fonts.googleapis.com/css?family=Fira+Sans:200,400,600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:200,400,600" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="public/css/main.css">

		<script type="text/javascript" src="public/js/jquery.min.js"></script>
		<script type="text/javascript" src="public/js/jquery.mobile.min.js"></script>
		<script type="text/javascript" src="public/js/main.js"></script>
		<script>BASE_URI = "<?php echo BASE_URI ?>"</script>
	</head>

	<body>
		<section id="slider">
			<nav id="menu">
				<div class="grid">
					<div class="col-1-1 mobile-col-1-1">
						<a href="">
							<div class="container">
								<img src="public/img/icons/icon-home.svg">
								<p>La Halle</p>
							</div>
						</a>
					</div>
					<div class="col-1-1 mobile-col-1-1">
						<a href="commercants">
							<div class="container">
								<img src="public/img/icons/icon-bag.svg">
								<p>Commerçants</p>
							</div>
						</a>
					</div>
					<div class="col-1-1 mobile-col-1-1">
						<a href="contact">
							<div class="container">
								<img src="public/img/icons/icon-mail.svg">
								<p>Contact</p>
							</div>
						</a>
					</div>
					<div class="col-1-1 mobile-col-1-1">
						<a href="actualites">
							<div class="container">
								<img src="public/img/icons/icon-news.svg">
								<p>Actualités</p>
							</div>
						</a>
					</div>
					<div class="col-1-1 mobile-col-1-1">
						<a href="evenements">
							<div class="container">
								<img src="public/img/icons/icon-bell.svg">
								<p>Événements</p>
							</div>
						</a>
					</div>
				</div>
			</nav>

			<footer id="infos">
				<div id="adresse" class="infos">
					<h4>Adresse</h4>
					<p>Centre Commercial Les Halles</p>
					<p>22 B, rue du Général Leclerc</p>
					<p>80000 Amiens</p>
				</div>
				<div id="horaires" class="infos">
					<h4>Horaires</h4>
					<p>Du mardi au samedi de 9h à 13h et de 15h à 19h</p>
					<p>Le dimanche de 9h à 12h30</p>
				</div>
				<nav id="liens" class="infos">
					<a href="mentions-legales"><span>Mentions légales</span></a>
					<a href="plan-du-site"><span>Plan du site</span></a>
					<a href="contact"><span>Contact</span></a>
				</nav>
				<div id="reseaux-sociaux" class="infos">
					<a href="#"><img src="public/img/icons/icon-mail.svg"></a>
					<a href="#"><img src="public/img/icons/icon-facebook.svg"></a>
					<a href="#"><img src="public/img/icons/icon-twitter.svg"></a>
				</div>
			</footer>
		</section>

		<main>
			<div id="overlay" onclick="closeMenu()"></div>

				<?php if ($home == true): ?>
				<header id="fullpage">
					<div></div>
				</header>
				<?php endif ?>

			<section id="bar">
				<div id="logo">
					<a href="">
						<img src="public/img/logo-halle-transparent.png">
					</a>
				</div>

				<div id="menu-icon" onclick="openMenu()">
					<div class="icon">
						<div class="menu-icon-line menu-icon-line-1"></div>
						<div class="menu-icon-line menu-icon-line-2"></div>
						<div class="menu-icon-line menu-icon-line-3"></div>
					</div>
				</div>

				<div id="search-icon">
					<div class="icon">
						<div class="search-icon"></div>
					</div>
				</div>
			</section>

			<section id="main-content">
				<?php echo $main_content; ?>
			</section>

			<footer></footer>
		</main>
	</body>
</html>