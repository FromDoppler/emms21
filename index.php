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
	<meta name="description" content="Los líderes de la Industria en el evento online de Marketing Digital más impactante del año. ¿Tienes tu invitación?">
	<meta name="keywords" content="">
	<meta name="language" content="Spanish">
	<meta name="revisit-after" content="15 days">
	<meta name="author" content="Doppler">
	<meta property="og:title" content="Conferencias exclusivas y online de Marketing Digital | EMMS2021">
	<meta property="og:description" content="Los líderes de la Industria en el evento online de Marketing Digital más impactante del año. ¿Tienes tu invitación?">
	<meta property="og:image" content="https://i.imgur.com/GrG726A.png">
	<meta property="og:url" content="https://goemms.com/">
	<meta property="og:site_name" content="Conferencias exclusivas y online de Marketing Digital | EMMS2021">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:image" content="https://i.imgur.com/GrG726A.png">
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
	<link rel="preload" as="font" href="https://use.typekit.net/fbq8dbp.css?version=<?= VERSION ?>">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
	<link rel="stylesheet" href="app/<?= VERSION ?>/css/libs/cookies/cookies.css">

</head>

<body class="dp-library">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M768WZR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<main class="main" id="inicio">
		<div class="dp-container-fluid" id="header">
			<div class="video-container">
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
									<a href="#agenda" class="nav-link">Agenda</a>
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
		<div class="dp-container">
			<div class="dp-rowflex speakers-text-container">
				<div class="col-md-12" id="agenda">
					<h2>AGENDA EMMS 2021</h2>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<p>Conoce los especialistas que están cambiando el Marketing Digital.</p>
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="dp-rowflex schedule">

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
								<p class="speaker-hour">10:15 a.m. <strong>MX</strong> (GMT-6) | 11:15 a.m. <strong>CO / PE </strong>| 1:15 p.m. <strong>AR</strong> | 6:15 p.m. <strong>ES</strong></p>
							</div>
							<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakers/paola-aldaz-biere-hover.png?version=<?= VERSION ?>);">
							</div>
						</div>
						<div class="redes">
							<a href="https://www.linkedin.com/in/paola-aldaz/" target="_blank" rel="nofollow"><img src="img/linkedin.svg?version=<?= VERSION ?>" alt="Linkedin" class="speaker-social-icon linkdin"></a>
						</div>
						<div class="speaker-footer">
							<p class="speaker-footer-info ">Leader Challenge, experiencia y conocimiento para formar generaciones de líderes a través del ejemplo</p>
							<details class="details-animated">
								<summary><img src="img/arrow.png?version=<?= VERSION ?>" alt="Flecha" class="speaker-arrow"></summary>
								<div class="content">
									<p>
										Top Executive en el campo de la innovación, el desarrollo empresarial y la transformación a través del poder de la tecnología digital.
										Ha administrado presupuestos millonarios para las principales marcas del mundo y liderado los equipos más eficientes para alcanzar grandes resultados.
										<br>
									</p>
									<p>Conferencia en Español</p>
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
								<p class="speaker-hour">10:45 a.m <strong>MX</strong> (GMT-6) | 11:45 a.m <strong>CO / PE </strong>| 1:45 p.m <strong>AR </strong>| 6:45 p.m. <strong> ES</strong></p>
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
								<summary><img src="img/arrow.png?version=<?= VERSION ?>" alt="Flecha" class="speaker-arrow"></summary>
								<div class="content">
									<p>
										Especializado en diseño y desarrollo de Email y Automation Marketing. Creador de comunidades, evangelista de Marketing Digital y educador.
										Elliot comparte sus años de experiencia trabajando con marcas líderes para ayudar a otros marketers a impulsar sus negocios con Email Marketing.
										<br>
									</p>
									<p>Conferencia en Inglés, subtitulado en Español</p>
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
										<img src="img/speakers/flag-spain.png" alt="Bandera España" class="speaker-flag">
									</div>
									<p class="name">Pablo Castellano Alventosa</p>
								</div>
								<p class="seniority">Chief Forever Whatever</p>
								<img src="img/speakers/social.png" alt="Logo Socialmood" class="speaker-logo">
								<p class="speaker-hour">11:30 a.m <strong>MX</strong> (GMT-6) | 12:30 a.m <strong>CO / PE </strong>| 2:30 p.m <strong>AR </strong>| 7:30 p.m. <strong> ES</strong></p>
							</div>
							<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakers/pablo.png?version=<?= VERSION ?>);">
							</div>
						</div>
						<div class="redes">
							<a href="https://www.linkedin.com/in/pablo-castellano-alventosa-47642610" target="_blank" rel="nofollow"><img src="img/linkedin.svg?version=<?= VERSION ?>" alt="Linkedin" class="speaker-social-icon linkdin"></a>
						</div>
						<div class="speaker-footer">
							<p class="speaker-footer-info ">Por qué el 99% de las marcas fallan en Redes Sociales</p>
							<details class="details-animated">
								<summary><img src="img/arrow.png?version=<?= VERSION ?>" alt="Flecha" class="speaker-arrow"></summary>
								<div class="content">
									<p>
										Responsable de la estrategia creativa de la agencia española Socialmood, Pablo es una de las personas más creativas y carismáticas de nuestros tiempos.
										Junto a su equipo, revolucionan la manera de comunicar de las marcas que se animan a conectar de forma distinta con sus audiencias.
										<br>
									</p>
									<p>Conferencia en Español</p>
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
									<p class="name">Ricardo Díez</p>
								</div>
								<p class="seniority">Chief Executive Officer</p>
								<img src="img/speakers/logo-analytics-black.png" alt="Logo AnalyticsTown" class="speaker-logo">
								<p class="speaker-hour">12:00 p.m MX (GMT-6) | 1:00 a.m <strong>CO / PE </strong>| 3:00 p.m <strong>AR </strong>|  8:00 p.m. <strong> ES</strong></p>
							</div>
							<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakers/ricardo-diez.png?version=<?= VERSION ?>);">
							</div>
						</div>
						<div class="redes">
							<a href="https://twitter.com/Ricardiez" target="_blank" rel="nofollow"><img src="img/twitter.svg?version=<?= VERSION ?>" alt="Twitter" class="speaker-social-icon twitter"></a>
							<a href="https://www.linkedin.com/in/ricardodiez/" target="_blank" rel="nofollow"><img src="img/linkedin.svg?version=<?= VERSION ?>" alt="Linkedin" class="speaker-social-icon linkdin"></a>
						</div>
						<div class="speaker-footer">
							<p class="speaker-footer-info">Big Data para Managers: Qué es Zero Party Data y por qué es importante para tu negocio</p>
							<details class="details-animated">
								<summary><img src="img/arrow.png?version=<?= VERSION ?>" alt="Flecha" class="speaker-arrow"></summary>
								<div class="content">
									<p>
										Fanático del Analytics, Big Data y Machine Learning, Ricardo es graduado de MIT -Massachusetts Institute of Technology-.
										Fundador y Director de Analytics Town ha realizado publicaciones en Forbes y Entrepreneur en español.
										<br>
									</p>
									<p>Conferencia en Español</p>
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
								<p class="speaker-hour">12:45 p.m <strong>MX</strong> (GMT-6) | 1:45 a.m <strong>CO / PE </strong>| 3:45 p.m <strong>AR </strong>| 8:45 p.m. <strong> ES</strong></p>
							</div>
							<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakers/TimAsh.png?version=<?= VERSION ?>);">
							</div>
						</div>
						<div class="redes">
							<a href="https://twitter.com/tim_ash" target="_blank" rel="nofollow"><img src="img/twitter.svg?version=<?= VERSION ?>" alt="Twitter" class="speaker-social-icon twitter"></a>
							<a href="https://www.linkedin.com/in/timash" target="_blank" rel="nofollow"><img src="img/linkedin.svg?version=<?= VERSION ?>" alt="Linkedin" class="speaker-social-icon linkdin"></a>
						</div>
						<div class="speaker-footer">
							<p class="speaker-footer-info ">Branding vs. Performance: Cómo terminar una guerra donde todos ganan</p>
							<details class="details-animated">
								<summary><img src="img/arrow.png?version=<?= VERSION ?>" alt="Flecha" class="speaker-arrow"></summary>
								<div class="content">
									<p>
										Speaker internacional sobre psicología evolutiva y Marketing Digital, consultor y líder, formador, emprendedor. Autor de bestsellers. Estos son sólo algunos de los títulos que podrían describir a uno de los líderes de pensamiento de la industria actual.
										<br>
									</p>
									<p>Conferencia en Inglés, subtitulado en Español</p>
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
						<h3>Súmate a EMMS 2021</h3>
						<p>Si día a día tomas decisiones de negocios, no te puedes perder el evento del año.</p>
						<button type="button" class="dp-button" onClick="document.getElementById('firstname').focus();">
							REGÍSTRATE GRATIS
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="dp-container-fluid" id="footer">
			<div class="dp-rowflex">

				<div class="col-sm-12 col-md-5 footer-text">
					<div>
						<p><strong>EMMS 2021</strong> - Un evento creado por</p>
						<a href="https://www.fromdoppler.com/?utm_source=goemms&utm_medium=footer&utm_campaign=logodoppler" target="_blank" rel="noopener"><img src="img/LogoDoppler.png?version=<?= VERSION ?>" alt="Doppler"></a>
					</div>
				</div>
				<div class="col-sm-12 col-md-2">
					<div class="footer-social-share">
						<a href="https://www.instagram.com/fromdoppler/" target="_blank" rel="noopener"><img src="img/instagram.svg?version=<?= VERSION ?>" alt="Instagram" class="img-social"></a>
						<a href="https://www.facebook.com/DopplerEmailMarketing" target="_blank" rel="noopener"><img src="img/facebook.svg?version=<?= VERSION ?>" alt="Facebook" class="img-social"></a>
						<a href="https://www.youtube.com/user/FromDoppler" target="_blank" rel="noopener"><img src="img/Youtube.svg?version=<?= VERSION ?>" alt="Youtube" class="img-social"></a>
						<a href="https://www.linkedin.com/company/doppler" target="_blank" rel="noopener"><img src="img/linkedin.svg?version=<?= VERSION ?>" alt="Linkeding" class="img-social"></a>
						<a href="https://twitter.com/fromDoppler" target="_blank" rel="noopener"><img src="img/twitter.svg?version=<?= VERSION ?>" alt="Twitter" class="img-social"></a>
					</div>
				</div>
				<div class="col-sm-12 col-md-5 footer-text-mobile">
					<div>
						<p><strong>EMMS 2021</strong> - Un evento creado por</p>
						<a href="https://www.fromdoppler.com/?utm_source=goemms&utm_medium=footer&utm_campaign=logodoppler" target="_blank" rel="noopener"><img src="img/LogoDoppler.png?version=<?= VERSION ?>" alt="Doppler"></a>
					</div>
				</div>
				<div class="col-sm-12 col-md-5">
					<div class="footer-legal">
						<a href="https://www.fromdoppler.com/es/legal/privacidad/?utm_source=goemms&utm_medium=footer&utm_campaign=politicasdeprivacidad" target="_blank" rel="noopener"> Políticas de privacidad y legales</a>
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
	<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
	<script type="text/javascript" src="app/<?= VERSION ?>/js/vendor/jquery/jquery-3.6.0.min.js"></script>
	<script>
		window.cookieconsent.initialise({
			"palette": {
				"popup": {
					"background": "#6D40B8;"
				},
				"button": {
					"background": "#fab221"
				}
			},
			"theme": "edgeless",
			"content": {
				"message": "Utilizamos cookies propias y de terceros para <strong>mejorar la experiencia del usuario a través de la navegación</strong>. Si continúas navegando sin aceptarlas, solo se habilitarán las estrictamente necesarias y tendrás una experiencia limitada. Ver",
				"dismiss": "ENTENDIDO",
				"link": "Declaración de Cookies.",
				"href": "https://www.fromdoppler.com/es/legal/cookies/?utm_source=goemms&utm_medium=cookieconsent&utm_campaign=declaracion"
			}
		});
	</script>
</body>

</html>