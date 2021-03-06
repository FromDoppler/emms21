<?php
require_once('./config.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EMMS 2021: Conferencias online de Marketing Digital.</title>
	<meta name="robots" content="<?= (PRODUCTION) ? 'index, follow' : 'noindex, nofollow' ?>">
	<meta name="theme-color" content="#3F0453">
	<meta name="title" content="Conferencias exclusivas y online de Marketing Digital | EMMS2021">
	<meta name="description" content="Los l&iacute;deres de la Industria en el evento online de Marketing Digital m&aacute;s impactante del a&ntilde;o. &iexcl;Mira las Conferencias!">
	<meta name="keywords" content="">
	<meta name="language" content="Spanish">
	<meta name="revisit-after" content="15 days">
	<meta name="author" content="Doppler">
	<meta property="og:title" content="Conferencias exclusivas y online de Marketing Digital | EMMS2021">
	<meta property="og:description" content="Los l&iacute;deres de la Industria en el evento online de Marketing Digital m&aacute;s impactante del a&ntilde;o. &iexcl;Mira las Conferencias!">
	<meta property="og:image" content="https://goemms.com/img/share-post.png">
	<meta property="og:url" content="https://goemms.com/">
	<meta property="og:site_name" content="Conferencias exclusivas y online de Marketing Digital | EMMS2021">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:image" content="https://goemms.com/img/share-post.png">
	<meta name="twitter:image:alt" content="Conferencias exclusivas y online de Marketing Digital | EMMS2021">
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<link rel="canonical" href="https://goemms.com/" />

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-M768WZR');
	</script>
	<!-- End Google Tag Manager -->

	<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png?version=<?= VERSION ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png?version=<?= VERSION ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png?version=<?= VERSION ?>">


	<link rel="stylesheet" type="text/css" href="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/css/styles.css?version=<?= VERSION ?>">
	<link href="app/<?= VERSION ?>/css/libs/intl-tel-input/intlTelInput.min.css?version=<?= VERSION ?>" rel="stylesheet" media="all">
	<link href="app/<?= VERSION ?>/css/libs/intl-tel-input/intlTellInput.css?version=<?= VERSION ?>" rel="stylesheet" media="all">
	<link rel="stylesheet" type="text/css" href="app/<?= VERSION ?>/css/styles.css?version=<?= VERSION ?>">
	<link rel="stylesheet" type="text/css" href="app/<?= VERSION ?>/css/post.css?version=<?= VERSION ?>">
	<!-- <link rel="preload" as="font" href="https://use.typekit.net/fbq8dbp.css?version=<?= VERSION ?>"> -->

	<?php if (PRODUCTION) { ?>
		<!-- El aviso de consentimiento de cookies de OneTrust comienza para goemms.com. -->
		<script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" data-document-language="true" type="text/javascript" charset="UTF-8" data-domain-script="02d37671-cb77-4e6a-804f-9955eb1f7c97"></script>
		<script type="text/javascript">
			function OptanonWrapper() {}
		</script>
		<!-- El aviso de consentimiento de cookies de OneTrust finaliza para goemms.com. -->
	<?php } else { ?>
		<!-- El aviso de consentimiento de cookies de OneTrust comienza para goemms.com. -->
		<script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" data-document-language="true" type="text/javascript" charset="UTF-8" data-domain-script="02d37671-cb77-4e6a-804f-9955eb1f7c97-test"></script>
		<script type="text/javascript">
			function OptanonWrapper() {}
		</script>
		<!-- El aviso de consentimiento de cookies de OneTrust finaliza para goemms.com. -->
	<?php  } ?>

</head>

<body class="dp-library" id="body">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M768WZR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php
	include('popUp.php');
	?>
	<main class="main" id="inicio">
		<div class="dp-container-fluid" id="header">
			<div class="video-container" id="video-container">
				<video autoplay muted loop>
					<source src="img/background-home-comprimido.mp4?version=<?= VERSION ?>" type="video/mp4" id="video-back" />
				</video>
				<div class="caption">
					<header class="header" id="navbar">
						<nav class="navbar">
							<a href="#inicio" class="nav-logo"><img src="img/logoEMMS.svg?version=<?= VERSION ?>" alt="Logo EMMS 2021" class="logoEMMS"></a>
							<ul class="nav-menu">
								<li class="nav-item">
									<a href="#inicio" class="nav-link">Inicio</a>
								</li>
								<li class="nav-item">
									<a id="nav-agenda" href="#agenda" class="nav-link">Agenda</a>
								</li>
								<li class="nav-item">
									<a href="ediciones-anteriores.php#inicio" class="nav-link">Ediciones anteriores</a>
								</li>
							</ul>
							<div class="hamburger">
								<span class="bar"></span>
								<span class="bar"></span>
								<span class="bar"></span>
							</div>
						</nav>
					</header>
					<div id="current-state">
					</div>
				</div>
			</div>
		</div>
		<div id="replace-post">
			<div class="dp-container">
				<div id="agenda"></div>
				<div class="dp-rowflex speakers-text-container">
					<div class="col-md-12">
						<h2>AGENDA EMMS 2021</h2>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<p>Conoce los especialistas que est&aacute;n cambiando el Marketing Digital.</p>
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="dp-rowflex schedule" id="schedule-event">

					<div class="col-sm-12 col-md-6 col-lg-4 speaker-col">
						<div class="speaker-shadow">
							<div class="speaker-container">
								<div class="speaker" id="paola-aldaz">
									<div class="dp-flex">
										<div class="speaker-flag-container">
											<img src="img/speakers/flag-arg.png" alt="Bandera Argentina" class="speaker-flag">
										</div>
										<p class="name">Paola Aldaz Biere</p>
									</div>
									<p class="seniority">Co-Presidente</p>
									<img src="img/speakers/logo-doyle-black.png" alt="Logo Doyle Black" class="speaker-logo">
									<p class="speaker-hour">10:15 a.m. <strong>MX</strong> (GMT-6) | 11:15 a.m. <strong>CO / PE </strong>| 1:15 p.m. <strong>AR</strong> | 5:15 p.m. <strong>ES</strong></p>
								</div>
								<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakers/paola-aldaz-biere-hover.png?version=<?= VERSION ?>);">
								</div>
							</div>
							<div class="redes">
								<a href="https://www.linkedin.com/in/paola-aldaz/" target="_blank" rel="nofollow"><img src="img/linkedin.svg?version=<?= VERSION ?>" alt="Linkedin" class="speaker-social-icon linkdin"></a>
							</div>
							<div class="speaker-footer">
								<p class="speaker-footer-info ">Leader Challenge, experiencia y conocimiento para formar generaciones de l&iacute;deres a trav&eacute;s del ejemplo</p>
								<details class="details-animated">
									<summary><a href="paola-aldaz-biere.php">&iexcl;MIRA EL VIDEO!</a><img src="img/arrow.png?version=<?= VERSION ?>" alt="Flecha" class="speaker-arrow"></summary>
									<div class="content">
										<p>
											Top Executive en el campo de la innovaci&oacute;n, el desarrollo empresarial y la transformaci&oacute;n a trav&eacute;s del poder de la tecnolog&iacute;a digital.
											Ha administrado presupuestos millonarios para las principales marcas del mundo y liderado los equipos m&aacute;s eficientes para alcanzar grandes resultados.
											<br>
										</p>
										<p>Conferencia en Espa&ntilde;ol</p>
									</div>
								</details>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-6 col-lg-4 speaker-col">
						<div class="speaker-shadow">
							<div class="speaker-container">
								<div class="speaker">
									<div class="dp-flex">
										<div class="speaker-flag-container">
											<img src="img/speakers/flag-uk.png" alt="Bandera United Kingdom" class="speaker-flag">
										</div>
										<p class="name">Elliot Ross</p>
									</div>
									<p class="seniority">Email Evangelist</p>
									<img src="img/speakers/logo-spark-black.png" alt="Logo Spark Black" class="speaker-logo">
									<p class="speaker-hour">10:45 a.m <strong>MX</strong> (GMT-6) | 11:45 a.m <strong>CO / PE </strong>| 1:45 p.m <strong>AR </strong>| 5:45 p.m. <strong> ES</strong></p>
								</div>
								<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakers/elliot.png?version=<?= VERSION ?>);">
								</div>
							</div>
							<div class="redes">
								<a href="https://twitter.com/iamelliot" target="_blank" rel="nofollow"><img src="img/twitter.svg?version=<?= VERSION ?>" alt="Twitter" class="speaker-social-icon twitter"></a>
								<a href="https://www.linkedin.com/in/iamelliot" target="_blank" rel="nofollow"><img src="img/linkedin.svg?version=<?= VERSION ?>" alt="Linkedin" class="speaker-social-icon linkdin"></a>
								<a href="https://www.instagram.com/emailelliot" target="_blank" rel="nofollow"><img src="img/instagram.svg?version=<?= VERSION ?>" alt="Instagram" class="speaker-social-icon instagram"></a>
							</div>
							<div class="speaker-footer">
								<p class="speaker-footer-info ">5 formas de optimizar tu Estrategia <br> de Email Automation</p>
								<details class="details-animated">
									<summary><a href="elliot-ross.php">&iexcl;MIRA EL VIDEO!</a><img src="img/arrow.png?version=<?= VERSION ?>" alt="Flecha" class="speaker-arrow"></summary>
									<div class="content">
										<p>
											Especializado en dise&ntilde;o y desarrollo de Email y Automation Marketing. Creador de comunidades, evangelista de Marketing Digital y educador.
											Elliot comparte sus a&ntilde;os de experiencia trabajando con marcas l&iacute;deres para ayudar a otros marketers a impulsar sus negocios con Email Marketing.
											<br>
										</p>
										<p>Conferencia en Ingl&eacute;s, subtitulado en Espa&ntilde;ol</p>
									</div>
								</details>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4 speaker-col">
						<div class="speaker-shadow">
							<div class="speaker-container">
								<div class="speaker" id="pablo-castellano">
									<div class="dp-flex">
										<div class="speaker-flag-container">
											<img src="img/speakers/flag-spain.png" alt="Bandera Espa&ntilde;a" class="speaker-flag">
										</div>
										<p class="name">Pablo Castellano Alventosa</p>
									</div>
									<p class="seniority">Chief Forever Whatever</p>
									<img src="img/speakers/social.png" alt="Logo Socialmood" class="speaker-logo">
									<p class="speaker-hour">11:30 a.m <strong>MX</strong> (GMT-6) | 12:30 a.m <strong>CO / PE </strong>| 2:30 p.m <strong>AR </strong>| 6:30 p.m. <strong> ES</strong></p>
								</div>
								<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakers/pablo.png?version=<?= VERSION ?>);">
								</div>
							</div>
							<div class="redes">
								<a href="https://www.linkedin.com/in/pablo-castellano-alventosa-47642610" target="_blank" rel="nofollow"><img src="img/linkedin.svg?version=<?= VERSION ?>" alt="Linkedin" class="speaker-social-icon linkdin"></a>
							</div>
							<div class="speaker-footer">
								<p class="speaker-footer-info ">Por qu&eacute; el 99% de las marcas fallan en Redes Sociales</p>
								<details class="details-animated">
									<summary><a href="pablo-castellano-alventosa.php">&iexcl;MIRA EL VIDEO!</a><img src="img/arrow.png?version=<?= VERSION ?>" alt="Flecha" class="speaker-arrow"></summary>
									<div class="content">
										<p>
											Responsable de la estrategia creativa de la agencia espa&ntilde;ola Socialmood, Pablo es una de las personas m&aacute;s creativas y carism&aacute;ticas de nuestros tiempos.
											Junto a su equipo, revolucionan la manera de comunicar de las marcas que se animan a conectar de forma distinta con sus audiencias.
											<br>
										</p>
										<p>Conferencia en Espa&ntilde;ol</p>
									</div>
								</details>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4 speaker-col">
						<div class="speaker-shadow">
							<div class="speaker-container">
								<div class="speaker" id="ricardo-diez">
									<div class="dp-flex">
										<div class="speaker-flag-container">
											<img src="img/speakers/flag-guatemala.png" alt="Bandera Guatemala" class="speaker-flag">
										</div>
										<p class="name">Ricardo D&iacute;ez</p>
									</div>
									<p class="seniority">Chief Executive Officer</p>
									<img src="img/speakers/logo-analytics-black.png" alt="Logo AnalyticsTown" class="speaker-logo">
									<p class="speaker-hour">12:00 p.m MX (GMT-6) | 1:00 a.m <strong>CO / PE </strong>| 3:00 p.m <strong>AR </strong>| 7:00 p.m. <strong> ES</strong></p>
								</div>
								<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakers/ricardo-diez.png?version=<?= VERSION ?>);">
								</div>
							</div>
							<div class="redes">
								<a href="https://twitter.com/Ricardiez" target="_blank" rel="nofollow"><img src="img/twitter.svg?version=<?= VERSION ?>" alt="Twitter" class="speaker-social-icon twitter"></a>
								<a href="https://www.linkedin.com/in/ricardodiez/" target="_blank" rel="nofollow"><img src="img/linkedin.svg?version=<?= VERSION ?>" alt="Linkedin" class="speaker-social-icon linkdin"></a>
							</div>
							<div class="speaker-footer">
								<p class="speaker-footer-info">Big Data para Managers: Qu&eacute; es Zero Party Data y por qu&eacute; es importante para tu negocio</p>
								<details class="details-animated">
									<summary><a href="ricardo-diez.php">&iexcl;MIRA EL VIDEO!</a><img src="img/arrow.png?version=<?= VERSION ?>" alt="Flecha" class="speaker-arrow"></summary>
									<div class="content">
										<p>
											Fan&aacute;tico del Analytics, Big Data y Machine Learning, Ricardo es graduado de MIT -Massachusetts Institute of Technology-.
											Fundador y Director de Analytics Town ha realizado publicaciones en Forbes y Entrepreneur en espa&ntilde;ol.
											<br>
										</p>
										<p>Conferencia en Espa&ntilde;ol</p>
									</div>
								</details>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-6 col-lg-4 speaker-col">
						<div class="speaker-shadow">
							<div class="speaker-container">
								<div class="speaker" id="tim-ash">
									<div class="dp-flex">
										<div class="speaker-flag-container">
											<img src="img/speakers/flag-usa.png" alt="Bandera United States" class="speaker-flag">
										</div>
										<p class="name">Tim Ash</p>
									</div>
									<p class="seniority">Keynote, Trainer & Advisor</p>
									<img src="img/speakers/logo-timash-black.png" alt="Logo Tim Ash" class="speaker-logo">
									<p class="speaker-hour">12:45 p.m <strong>MX</strong> (GMT-6) | 1:45 a.m <strong>CO / PE </strong>| 3:45 p.m <strong>AR </strong>| 7:45 p.m. <strong> ES</strong></p>
								</div>
								<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakers/TimAsh.png?version=<?= VERSION ?>);">
								</div>
							</div>
							<div class="redes">
								<a href="https://twitter.com/tim_ash" target="_blank" rel="nofollow"><img src="img/twitter.svg?version=<?= VERSION ?>" alt="Twitter" class="speaker-social-icon twitter"></a>
								<a href="https://www.linkedin.com/in/timash" target="_blank" rel="nofollow"><img src="img/linkedin.svg?version=<?= VERSION ?>" alt="Linkedin" class="speaker-social-icon linkdin"></a>
							</div>
							<div class="speaker-footer">
								<p class="speaker-footer-info ">Branding vs. Performance: C&oacute;mo terminar una guerra donde todos ganan</p>
								<details class="details-animated">
									<summary><a href="tim-ash.php">&iexcl;MIRA EL VIDEO!</a><img src="img/arrow.png?version=<?= VERSION ?>" alt="Flecha" class="speaker-arrow"></summary>
									<div class="content">
										<p>
											Speaker internacional sobre psicolog&iacute;a evolutiva y Marketing Digital, consultor y l&iacute;der, formador, emprendedor. Autor de bestsellers. Estos son s&oacute;lo algunos de los t&iacute;tulos que podr&iacute;an describir a uno de los l&iacute;deres de pensamiento de la industria actual.
											<br>
										</p>
										<p>Conferencia en Ingl&eacute;s, subtitulado en Espa&ntilde;ol</p>
									</div>
								</details>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-6 col-lg-4 speaker-col">
						<div class="speaker-bg-asset"></div>
					</div>
				</div>
			</div>

			<div class="dp-container-fluid" id="footer-index">
				<div class="dp-container footer-index-container">
					<div class="dp-rowflex">
						<div class="col-md-12">
							<h3>S&uacute;mate a EMMS 2021</h3>
							<p>Si d&iacute;a a d&iacute;a tomas decisiones de negocios, no te puedes perder el evento del a&ntilde;o.</p>
							<button type="button" class="dp-button" onClick="document.getElementById('firstname').focus();">
								REG&Iacute;STRATE GRATIS
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="dp-container-fluid" id="footer">
			<div class="dp-rowflex">

				<div class="col-sm-12 col-md-12 col-lg-5 footer-text dp-center-md ">
					<div>
						<p><strong>EMMS 2021</strong> - Un evento creado por</p>
						<a href="https://www.fromdoppler.com/" target="_blank" rel="noopener"><img src="img/LogoDoppler.png?version=<?= VERSION ?>" alt="Doppler"></a>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-2">
					<div class="footer-social-share">
						<a href="https://www.instagram.com/fromdoppler/" target="_blank" rel="noopener"><img src="img/instagram.svg?version=<?= VERSION ?>" alt="Instagram" class="img-social"></a>
						<a href="https://www.facebook.com/DopplerEmailMarketing" target="_blank" rel="noopener"><img src="img/facebook.svg?version=<?= VERSION ?>" alt="Facebook" class="img-social"></a>
						<a href="https://www.youtube.com/user/FromDoppler" target="_blank" rel="noopener"><img src="img/Youtube.svg?version=<?= VERSION ?>" alt="Youtube" class="img-social"></a>
						<a href="https://www.linkedin.com/company/doppler" target="_blank" rel="noopener"><img src="img/linkedin.svg?version=<?= VERSION ?>" alt="Linkeding" class="img-social"></a>
						<a href="https://twitter.com/fromDoppler" target="_blank" rel="noopener"><img src="img/twitter.svg?version=<?= VERSION ?>" alt="Twitter" class="img-social"></a>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-5 footer-text-mobile">
					<div>
						<p><strong>EMMS 2021</strong> - Un evento creado por</p>
						<a href="https://www.fromdoppler.com/" target="_blank" rel="noopener"><img src="img/LogoDoppler.png?version=<?= VERSION ?>" alt="Doppler"></a>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-5 dp-center-md">
					<div class="footer-legal">
						<a href="https://www.fromdoppler.com/es/legal/privacidad/" target="_blank" rel="noopener"> Pol&iacute;ticas de privacidad y legales</a>
					</div>
				</div>

			</div>
		</div>
	</main>
	<script type="text/javascript" src="app/<?= VERSION ?>/js/modules/intlTelInput/intlTelInput.min.js"></script>
	<script type="module" src="app/<?= VERSION ?>/js/statesHandler.js"></script>
	<script type="text/javascript" src="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/js/app.js?version=<?= VERSION ?>"></script>
	<script type="text/javascript" src="app/<?= VERSION ?>/js/modules/nav.js?version=<?= VERSION ?>"></script>
	<script src="app/<?= VERSION ?>/js/modules/utm/utm.js?version=<?= VERSION ?>"></script>
	<script type="text/javascript" src="app/<?= VERSION ?>/js/vendor/jquery/jquery-3.6.0.min.js"></script>

</body>

</html>