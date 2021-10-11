<?php
require_once('./config.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EMMS21</title>

	<meta name="robots" content="noindex">
	<meta name="theme-color" content="#3F0453">
	<meta name="title" content="EMMS 2021: Conferencias online de Marketing Digital.">
	<meta name="description" content="Los líderes de la Industria en el evento online de Marketing Digital más impactante del año. ¿Tienes tu invitación?">
	<meta name="keywords" content="">
	<meta name="language" content="Spanish">
	<meta name="revisit-after" content="15 days">
	<meta name="author" content="Doppler">
	<meta property="og:title" content="EMMS 2021: Conferencias online de Marketing Digital.">
	<meta property="og:description" content="Los líderes de la Industria en el evento online de Marketing Digital más impactante del año. ¿Tienes tu invitación?">
	<meta property="og:image" content="https://i.imgur.com/GrG726A.png">
	<meta property="og:url" content="https://goemms.com/">
	<meta property="og:site_name" content="EMMS 2021: Conferencias online de Marketing Digital.">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:image" content="https://i.imgur.com/GrG726A.png">
	<meta name="twitter:image:alt" content="EMMS 2021: Conferencias online de Marketing Digital.">
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />

	<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png?version=<?= VERSION ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png?version=<?= VERSION ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png?version=<?= VERSION ?>">


	<link rel="stylesheet" type="text/css" href="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/css/styles.css?version=<?= VERSION ?>">
	<link href="css/libs/intl-tel-input/intlTelInput.min.css?version=<?= VERSION ?>" rel="stylesheet" media="all">
	<link href="css/libs/intl-tel-input/intlTellInput.css?version=<?= VERSION ?>" rel="stylesheet" media="all">
	<link rel="stylesheet" type="text/css" href="css/styles.css?version=<?= VERSION ?>">
	<link rel="stylesheet" href="https://use.typekit.net/fbq8dbp.css?version=<?= VERSION ?>">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
	<link rel="stylesheet" href="css/libs/cookies/cookies.css">
</head>

<body class="dp-library">
	<main class="main">
		<div class="dp-container-fluid" id="header">
			<div class="video-container">
				<video autoplay muted loop>
					<source src="img/background-home-comprimido.mp4?version=<?= VERSION ?>" type="video/mp4" />
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
									<a href="ediciones-anteriores.php" class="nav-link">Ediciones anteriores</a>
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
					<h2>AGENDA #EMMS2021</h2>
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
							<div class="speaker">
								<p class="name">Álvaro Gutiérrez de Cabiedes</p>
								<p class="seniority">Sr. Manager de Transformación Digital</p>
								<div class="redes">
									<a href="" target="_blank" rel="nofollow"><img src="img/twitter.svg?version=<?= VERSION ?>" alt="Twitter" class="speaker-social-icon"></a>
									<a href="" target="_blank" rel="nofollow"><img src="img/linkedin.svg?version=<?= VERSION ?>" alt="Linkedin" class="speaker-social-icon"></a>
									<a href="" target="_blank" rel="nofollow"><img src="img/instagram.svg?version=<?= VERSION ?>" alt="Instagram" class="speaker-social-icon"></a>
									<a href="" target="_blank" rel="nofollow"><img src="img/facebook.svg?version=<?= VERSION ?>" alt="Facebook" class="speaker-social-icon"></a>
								</div>
							</div>
							<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakerPic.png?version=<?= VERSION ?>);">
							</div>
						</div>
						<div class="speaker-footer">
							<p class="speaker-footer-info ">El impacto de la Transformación <br> Digital en la Banca</p>
							<details class="details-animated">
								<summary><img src="img/arrow.png?version=<?= VERSION ?>" alt="Flecha" class="speaker-arrow"></summary>
								<div class="content">
									<p>
										El turismo tiene un fuerte componente intangible y emocional que puede ser un disparador de nuevos
										modelos de negocio. Descubre las principales líneas de acción que llevarán tu idea al éxito.
										Descubre las principales líneas de acción
									</p>
								</div>
							</details>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 speaker-col">
					<div class="speaker-shadow">
						<div class="speaker-container">
							<div class="speaker">
								<p class="name">Álvaro Gutiérrez de Cabiedes</p>
								<p class="seniority">Sr. Manager de Transformación Digital</p>
								<div class="redes">
									<a href="" target="_blank" rel="nofollow"><img src="img/twitter.svg?version=<?= VERSION ?>" alt="Twitter" class="speaker-social-icon"></a>
									<a href="" target="_blank" rel="nofollow"><img src="img/linkedin.svg?version=<?= VERSION ?>" alt="Linkedin" class="speaker-social-icon"></a>
									<a href="" target="_blank" rel="nofollow"><img src="img/instagram.svg?version=<?= VERSION ?>" alt="Instagram" class="speaker-social-icon"></a>
									<a href="" target="_blank" rel="nofollow"><img src="img/facebook.svg?version=<?= VERSION ?>" alt="Facebook" class="speaker-social-icon"></a>
								</div>
							</div>
							<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakerPic.png?version=<?= VERSION ?>);">
							</div>
						</div>
						<div class="speaker-footer">
							<p class="speaker-footer-info ">El impacto de la Transformación <br> Digital en la Banca</p>
							<details class="details-animated">
								<summary><img src="img/arrow.png?version=<?= VERSION ?>" alt="Flecha" class="speaker-arrow"></summary>
								<div class="content">
									<p>
										El turismo tiene un fuerte componente intangible y emocional que puede ser un disparador de nuevos
										modelos de negocio. Descubre las principales líneas de acción que llevarán tu idea al éxito.
										Descubre las principales líneas de acción
									</p>
								</div>
							</details>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 speaker-col">
					<div class="speaker-shadow">
						<div class="speaker-container">
							<div class="speaker">
								<p class="name">Álvaro Gutiérrez de Cabiedes</p>
								<p class="seniority">Sr. Manager de Transformación Digital</p>
								<div class="redes">
									<a href="" target="_blank" rel="nofollow"><img src="img/twitter.svg?version=<?= VERSION ?>" alt="Twitter" class="speaker-social-icon"></a>
									<a href="" target="_blank" rel="nofollow"><img src="img/linkedin.svg?version=<?= VERSION ?>" alt="Linkedin" class="speaker-social-icon"></a>
									<a href="" target="_blank" rel="nofollow"><img src="img/instagram.svg?version=<?= VERSION ?>" alt="Instagram" class="speaker-social-icon"></a>
									<a href="" target="_blank" rel="nofollow"><img src="img/facebook.svg?version=<?= VERSION ?>" alt="Facebook" class="speaker-social-icon"></a>
								</div>
							</div>
							<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakerPic.png?version=<?= VERSION ?>);">
							</div>
						</div>
						<div class="speaker-footer">
							<p class="speaker-footer-info ">El impacto de la Transformación <br> Digital en la Banca</p>
							<details class="details-animated">
								<summary><img src="img/arrow.png?version=<?= VERSION ?>" alt="Flecha" class="speaker-arrow"></summary>
								<div class="content">
									<p>
										El turismo tiene un fuerte componente intangible y emocional que puede ser un disparador de nuevos
										modelos de negocio. Descubre las principales líneas de acción que llevarán tu idea al éxito.
										Descubre las principales líneas de acción
									</p>
								</div>
							</details>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 speaker-col">
					<div class="speaker-shadow">
						<div class="speaker-container">
							<div class="speaker">
								<p class="name">Álvaro Gutiérrez de Cabiedes</p>
								<p class="seniority">Sr. Manager de Transformación Digital</p>
								<div class="redes">
									<a href="" target="_blank" rel="nofollow"><img src="img/twitter.svg?version=<?= VERSION ?>" alt="Twitter" class="speaker-social-icon"></a>
									<a href="" target="_blank" rel="nofollow"><img src="img/linkedin.svg?version=<?= VERSION ?>" alt="Linkedin" class="speaker-social-icon"></a>
									<a href="" target="_blank" rel="nofollow"><img src="img/instagram.svg?version=<?= VERSION ?>" alt="Instagram" class="speaker-social-icon"></a>
									<a href="" target="_blank" rel="nofollow"><img src="img/facebook.svg?version=<?= VERSION ?>" alt="Facebook" class="speaker-social-icon"></a>
								</div>
							</div>
							<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakerPic.png?version=<?= VERSION ?>);">
							</div>
						</div>
						<div class="speaker-footer">
							<p class="speaker-footer-info ">El impacto de la Transformación <br> Digital en la Banca</p>
							<details class="details-animated">
								<summary><img src="img/arrow.png?version=<?= VERSION ?>" alt="Flecha" class="speaker-arrow"></summary>
								<div class="content">
									<p>
										El turismo tiene un fuerte componente intangible y emocional que puede ser un disparador de nuevos
										modelos de negocio. Descubre las principales líneas de acción que llevarán tu idea al éxito.
										Descubre las principales líneas de acción
									</p>
								</div>
							</details>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 speaker-col">
					<div class="speaker-shadow">
						<div class="speaker-container">
							<div class="speaker">
								<p class="name">Álvaro Gutiérrez de Cabiedes</p>
								<p class="seniority">Sr. Manager de Transformación Digital</p>
								<div class="redes">
									<a href="" target="_blank" rel="nofollow"><img src="img/twitter.svg?version=<?= VERSION ?>" alt="Twitter" class="speaker-social-icon"></a>
									<a href="" target="_blank" rel="nofollow"><img src="img/linkedin.svg?version=<?= VERSION ?>" alt="Linkedin" class="speaker-social-icon"></a>
									<a href="" target="_blank" rel="nofollow"><img src="img/instagram.svg?version=<?= VERSION ?>" alt="Instagram" class="speaker-social-icon"></a>
									<a href="" target="_blank" rel="nofollow"><img src="img/facebook.svg?version=<?= VERSION ?>" alt="Facebook" class="speaker-social-icon"></a>
								</div>
							</div>
							<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakerPic.png?version=<?= VERSION ?>);">
							</div>
						</div>
						<div class="speaker-footer">
							<p class="speaker-footer-info ">El impacto de la Transformación <br> Digital en la Banca</p>
							<details class="details-animated">
								<summary><img src="img/arrow.png?version=<?= VERSION ?>" alt="Flecha" class="speaker-arrow"></summary>
								<div class="content">
									<p>
										El turismo tiene un fuerte componente intangible y emocional que puede ser un disparador de nuevos
										modelos de negocio. Descubre las principales líneas de acción que llevarán tu idea al éxito.
										Descubre las principales líneas de acción
									</p>
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
						<h3>Súmate al #EMMS2021</h3>
						<p>Si día a día tomas decisiones en equipos de Marketing, no te puedes perder #EMMS2021</p>
						<button type="button" class="dp-button" onClick="document.getElementById('current-state').scrollIntoView();">
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
	<script type="text/javascript" src="js/modules/intlTelInput/intlTelInput.min.js?version=<?= VERSION ?>"></script>
	<script type="module" src="js/statesHandler.js?version=<?= VERSION ?>"></script>
	<script type="text/javascript" src="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/js/app.js?version=<?= VERSION ?>"></script>
	<script type="text/javascript" src="js/modules/nav.js?version=<?= VERSION ?>"></script>
	<script src="js/modules/utm/utm.js?version=<?= VERSION ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
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