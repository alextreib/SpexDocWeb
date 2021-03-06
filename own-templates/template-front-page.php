<?php

/**
 * Template Name: Front Page
 * Template Post Type: post, page
 *
 * @package WordPress 
 * @subpackage Twenty_Twenty
 * @since 1.0
 */


// Skip the front page
get_header();
?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-
  scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">


	<!-- Bootstrap core CSS -->
	<link href="<?php echo get_template_directory_uri() ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="<?php echo get_template_directory_uri() ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri() ?>/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- Custom styles for this template -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/landing-page.min.css" />


</head>


<!-- Navigation -->
<nav class="navbar navbar-light bg-light static-top">
	<div class="container">
		<a class="navbar-brand" href="#">SpexDoc</a>
	</div>
</nav>

<!-- Masthead -->
<header style="padding-bottom:8rem" class="masthead text-white text-center">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-xl-12 mx-auto">
				<h1 class="mb-3">Die digitale Patientenakte für Ärzte und Patienten </h1>
			</div>
			<div style="margin-top:8rem" class="col-md-10 col-lg-8 col-xl-7 mx-auto">
				<form onsubmit="window.location.href = 'https://app.spexdoc.net'; return false;">
					<div class="form-row">
						<div class="col-12 col-md-2">
						</div>
						<div class="col-12 col-md-8">
							<button type="submit" class="btn btn-block btn-lg btn-primary">Patientenakte anlegen</button>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>
</header>

<!-- Icons Grid -->
<section class="features-icons bg-light text-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
					<div class="features-icons-icon d-flex">
						<i class="fa fa-heart m-auto text-primary"></i>
					</div>
					<h3>Mit Herz</h3>
					<p class="lead mb-0">Durch unsere Kundenorientierung können wir gemeinsam alles schaffen</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
					<div class="features-icons-icon d-flex">
						<i class="m-auto text-primary fas fa-shield-alt"></i>
					</div>
					<h3>Sicher</h3>
					<p class="lead mb-0">Unser Quellcode ist Open Source und wir ständig getestet</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="features-icons-item mx-auto mb-0 mb-lg-3">
					<div class="features-icons-icon d-flex">
						<i class="fa fa-user-md m-auto text-primary"></i>
					</div>
					<h3>Kompetenz</h3>
					<p class="lead mb-0">Die Inhalte werden in Zusammenarbeit mit Ärzten erstellt</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Image Showcases -->
<section class="showcase">

	<div class="container-fluid p-0">
		<div class="row no-gutters">


			<div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/digital-doctor.jpg');"></div>

			<div class="col-lg-6 order-lg-1 my-auto showcase-text">
				<svg style="float:left; margin: 10px" viewBox="0 0 5.36 92" class="bpa-icon bpa-icon-bpa-flag" width="10" version=".1" role="img" preserveAspectRatio="none" aria-labelledby="aria-5-6mj87rm7x9aqlv8gmv5ng84em" focusable="false">
					<title id="aria-5-6mj87rm7x9aqlv8gmv5ng84em">Die Flagge</title>
					<use xlink:href="#icon-bpa-flag">

						<svg viewBox="0 0 5.36 92" id="icon-bpa-flag" xmlns="http://www.w3.org/2000/svg">
							<!-- title removed by grunt task -->
							<g id="ah5d39d168-7a21-4937-946c-46f830e222d4" data-name="bpa-flag">
								<path d="M5.68,31H.32V.33H5.68Z"></path>
								<path d="M5.68,61.68H.32V31H5.68Z" style="fill:red"></path>
								<path d="M5.68,92.35H.32V61.68H5.68Z" style="fill:#fc0"></path>
							</g>
						</svg>
					</use>
				</svg>
				<h2>Willkommen im digitalen Zeitalter</h2>
				<p class="lead mb-0">Verwalten Sie alle Patientendaten an einem Ort. Ganz gleich ob diese von Ihrer Smart Watch, Ihrem Handy oder vom Facharzt kommen. Hier sind sie sicher.</p>
			</div>
		</div>
		<div class="row no-gutters">
			<div class="col-lg-6 text-white showcase-img" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/teddy.jpg');"></div>
			<div class="col-lg-6 my-auto showcase-text">
				<h2>Manchmal ist online angenehmer</h2>
				<p class="lead mb-0">Vereinbaren Sie einen Online Termin mit Ihrem Arzt und schonen Sie sich lieber zuhause. Nicht jede Erkrankung erfordert eine persönliche Anwesenheit.</p>
			</div>
		</div>
		<div class="row no-gutters">
			<div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bg-showcase-3.jpg');"></div>
			<div class="col-lg-6 order-lg-1 my-auto showcase-text">
				<h2>Für Groß &amp; Klein</h2>
				<p class="lead mb-0">Unser Service steht jedem rund um die Uhr zur Verfügung. Über die Smart Doc Funktionalität können auch Online Diagnosen gestellt werden.</p>
			</div>
		</div>
	</div>
</section>

<!-- Testimonials -->
<section class="features-icons text-center bg-light">
	<div class="container">
		<h2 class="mb-5">Unsere Rezensionen</h2>
		<div class="row">
			<div class="col-lg-4">
				<div class="testimonial-item mx-auto mb-5 mb-lg-0">
					<img class="img-fluid rounded-circle mb-3" src="<?php echo get_template_directory_uri() ?>/img/testimonials-1.jpg" alt="">
					<h5>Leonie E.</h5>
					<p class="font-weight-light mb-0">"Die App funktioniert wirklich super! Bin sehr dankbar, dass ich meine Patientendaten endlich geordnet auf meinem PC habe!"</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="testimonial-item mx-auto mb-5 mb-lg-0">
					<img class="img-fluid rounded-circle mb-3" src="<?php echo get_template_directory_uri() ?>/img/testimonials-2.jpg" alt="">
					<h5>Nico S.</h5>
					<p class="font-weight-light mb-0">"Ich konnte meinem Arzt über einen Link meine Daten zeigen. Er war begeistert - ich auch :)"</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="testimonial-item mx-auto mb-5 mb-lg-0">
					<img class="img-fluid rounded-circle mb-3" src="<?php echo get_template_directory_uri() ?>/img/testimonials-3.jpg" alt="">
					<h5>Sarah W.</h5>
					<p class="font-weight-light mb-0">"Egal ob über mein Tablet, Handy oder PC es funktioniert immer gleich."</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Call to Action -->
<section class="call-to-action text-white text-center">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-xl-9 mx-auto">
				<h2 class="mb-4">Abonnieren Sie unseren Newsletter</h2>
			</div>
			<div class="tnp tnp-subscription col-md-10 col-lg-8 col-xl-7">
				<form class="form-row" id="sib-form" method="POST" action="https://3a26c2ed.sibforms.com/serve/MUIEAKuRdaLXH9vu4Gj-P33y0rzT14-LPZAPTTxR_fScDbZ3GxJtpHcEuf_b4QGu6tm_ZGok5WmajEl_4MbcIZMlc867254P1yzTG59GD0b0u3mpHQ8AT9rk_TMWajWDYTDMdcESPXxr3GFCR8y332xThGAuJi9RIbrnI_nvk1UJYuGwAgTP3RBsXirmDaCiVG6efo-1UqHSwSo3">
					<div class="col-12 col-md-9 mb-2 mb-md-0">
						<input class="form-control form-control-lg" type="text" id="EMAIL" name="EMAIL" autocomplete="off" placeholder="Ihre Email..." data-required="true" required />
					</div>
					<div class="tnp-field tnp-field-button col-12 col-md-3">
						<button class="btn btn-block btn-lg btn-primary sib-form-block__button sib-form-block__button-with-loader" form="sib-form" type="submit">
							Abonnieren
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- Footer -->
<footer class="footer bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 h-100 text-center text-lg-left my-auto">
				<ul class="list-inline mb-2">
					<li class="list-inline-item">
						<a href="https://spexdoc.net/about-us">Über uns</a>
					</li>
					<li class="list-inline-item">&sdot;</li>
					<li class="list-inline-item">
						<a href="https://spexdoc.net/contact">Kontakt</a>
					</li>
					<li class="list-inline-item">&sdot;</li>
					<li class="list-inline-item">
						<a href="https://spexdoc.net/datenschutzerklaerung">Datenschutzerklärung</a>
					</li>
					<li class="list-inline-item">&sdot;</li>
					<li class="list-inline-item">
						<a href="https://spexdoc.net/legal-disclosure">Impressum</a>
					</li>
				</ul>
				<p class="text-muted small mb-4 mb-lg-0">&copy; SpexDoc 2020. All Rights Reserved.</p>
			</div>
			<div class="col-lg-6 h-100 text-center text-lg-right my-auto">
				<ul class="list-inline mb-0">
					<li class="list-inline-item mr-3">
						<a href="#">
							<i class="fab fa-twitter-square fa-2x fa-fw"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#">
							<i class="fab fa-instagram fa-2x fa-fw"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<!-- Bootstrap core JavaScript -->


</body>

</html>