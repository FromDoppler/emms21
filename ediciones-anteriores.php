<?php
require_once('./config.php');
?>
<!DOCTYPE html>

<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EMMS 2021: Ediciones anteriores</title>

	<meta name="robots" content="noindex">
	<meta name="theme-color" content="#3F0453">
	<meta name="title" content=":EMMS 2021: Conferencias online de Marketing Digital.">
	<meta name="description" content="Los líderes de la Industria en el evento online de Marketing Digital más impactante del año. ¿Tienes tu invitación?">
	<meta name="keywords" content="">
	<meta name="language" content="Spanish">
	<meta name="revisit-after" content="15 days">
	<meta name="author" content="Doppler">
	<meta property="og:title" content=":EMMS 2021: Conferencias online de Marketing Digital.">
	<meta property="og:description" content="Los líderes de la Industria en el evento online de Marketing Digital más impactante del año. ¿Tienes tu invitación?">
	<meta property="og:image" content="https://i.imgur.com/GrG726A.png">
	<meta property="og:url" content="https://goemms.com/">
	<meta property="og:site_name" content=":EMMS 2021: Conferencias online de Marketing Digital.">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:image" content="https://i.imgur.com/GrG726A.png">
	<meta name="twitter:image:alt" content=":EMMS 2021: Conferencias online de Marketing Digital.">
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />

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

	<link rel="stylesheet" type="text/css" href="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/css/styles.css">
	<script type="text/javascript" src="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/js/app.js"></script>
	<link rel="stylesheet" href="https://use.typekit.net/fbq8dbp.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css?version=<?= VERSION ?>">
</head>

<body class="dp-library">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M768WZR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="dp-container-fluid" id="header-editions">
		<header class="header" id="navbar">
			<nav class="navbar">
				<a href="index.php#inicio" class="nav-logo"><img src="img/logoEMMS.svg?version=<?= VERSION ?>" alt="Logo EMMS 2021" class="logoEMMS"></a>
				<ul class="nav-menu">
					<li class="nav-item">
						<a href="index.php#inicio" class="nav-link">Inicio</a>
					</li>
					<li class="nav-item">
						<a href="index.php#agenda" class="nav-link">Agenda</a>
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
		<div class="dp-container">
			<div class="dp-rowflex">
				<div class="col-sm-12 col-md-12 col-lg-6">
					<h1>Somos Doppler</h1>
					<p>
						Desde 2007 organizamos EMMS, el evento online y gratuito del que se han nutrido para hacer crecer sus negocios +300 mil profesionales del Marketing, con conferencias que se superan año a año.
					</p>
					<p>Somos la herramienta líder del mercado hispanohablante. Multiplica tus conversiones y fideliza a tu audiencia a través de Campañas de Email Marketing y Marketing Automation, SMS, y Emails Transaccionales.</p>
					<button onclick="window.open('https://www.fromdoppler.com/?utm_source=goemms&utm_medium=edicionesanteriores&utm_campaign=descubredoppler')">DESCUBRE MÁS SOBRE DOPPLER</button>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 ">
					<div class="header-video-container">
						<video autoplay muted loop>
							<source src="img/video-somosdoppler-compress.mp4?version=<?= VERSION ?>" type="video/mp4" alt="Video de ediciones anteriores" />
						</video>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="dp-container">
		<div class="dp-rowflex">
			<div class="editions-container">
				<div class="editions-container-header">
					<h2>Revive las ediciones anteriores</h2>
					<p>¿Te has perdido alguno de nuestros eventos o quieres revivirlo? Disfruta gratis todas las conferencias y
						potencia tu negocio junto a los líderes del Marketing Digital.</p>
				</div>
				<div class="editions-container-footer">
					<div class="editions-container-content">
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<div class="edition-container-content">
								<img src="img/emms/emms2020.png" alt="EMMS 2020">
								<h4>EMMS 2020</h4>
								<p>A lo largo de 5 días, 18 oradores de primer nivel compartieron su conocimiento sobre Marketing Digital enfocado en 5 industrias clave. ¡Las sesiones virtuales de Networking fueron el complemento perfecto!</p>
								<a href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8pcO6n-OHDedWgmicdFuj_p" target="_blank" rel="noopener">Revive el evento</a>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<div class="edition-container-content">
								<img src="img/emms/emms2019.png" alt="EMMS 2019">
								<h4>EMMS 2019</h4>
								<p>Las temáticas más votadas por el público y los especialistas que están cambiando el Marketing Digital
									en
									el mundo. ¡Revive la jornada que se convirtió en el evento online del año!</p>
								<a href="https://www.youtube.com/watch?v=Fxn-toxKKIQ&list=PLHE_SVtQOB8qoW8HGYDWUF1V6c0taJGJk&index=11&t=0s" target="_blank" rel="noopener">Mira las conferencias</a>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<div class="edition-container-content">
								<img src="img/emms/emms2018.png" alt="EMMS 2018">
								<h4>EMMS 2018</h4>
								<p>Las conferencias en inglés con traducción en simultáneo marcaron un antes y un después para los eventos
									de Marketing del mercado hispano. Hubo speakers de primer nivel y miles de asistentes.</p>
								<a href="https://www.youtube.com/watch?v=kmV1HFlSce4&list=PLHE_SVtQOB8qJGZdZ8UiUZA9N0BqQ_ePf" target="_blank" rel="noopener">Mira las conferencias</a>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<div class="edition-container-content">
								<img src="img/emms/emms2017.png" alt="EMMS 2017">
								<h4>EMMS 2017</h4>
								<p>¡La décima edición tuvo récord de registros! Fueron 8 conferencias organizadas en nivel inicial y
									avanzado para que cada uno pudiera capacitarse en base a su experiencia y necesidades.</p>
								<a href="https://www.youtube.com/watch?v=9Y_Y7ODRz2g&list=PLHE_SVtQOB8rVbcM84J2HdtU9Ko1N2wOW" target="_blank" rel="noopener">Mira las conferencias</a>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<div class="edition-container-content">
								<img src="img/emms/emms2016.png" alt="EMMS 2016">
								<h4>EMMS 2016</h4>
								<p>Se sumaron novedosos formatos como charlas motivacionales, entrevistas a expertos, debates en vivo y
									más.
									Esta vez fue la audiencia quien eligió de qué manera aprender.</p>
								<a href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8olvfTQWIY-K12xmfh-083T" target="_blank" rel="noopener">Disfruta cada formato</a>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<div class="edition-container-content">
								<img src="img/emms/emms2015.png" alt="EMMS 2015">
								<h4>EMMS 2015</h4>
								<p>Como cada edición, el EMMS se renovó. Las conferencias se convirtieron en un evento de dos días con 10
									oradores destacados dentro de 2 temáticas: motivación y acción.</p>
								<a href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8rSRLFPeeXwpbFwXglMAjw6" target="_blank" rel="noopener">Descubre lo que pasó</a>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<div class="edition-container-content">
								<img src="img/emms/emms2014.png" alt="EMMS 2014">
								<h4>EMMS 2014</h4>
								<p>El evento se transformó volviéndose 100% online, internacional y gratis. Con una duración de 10 horas
									ininterrumpidas, 10 increíbles speakers y más de 10.000 asistentes.</p>
								<a href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8rfXIJu1cFWY8LjPe6wQQ4b" target="_blank" rel="noopener">Escucha las ponencias</a>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<div class="edition-container-content">
								<img src="img/emms/emms2013.png" alt="EMMS 2013">
								<h4>EMMS 2013</h4>
								<p>Por primera vez el evento viajó por 5 países: Ecuador, España, República Dominicana, México y
									Argentina,
									los influencers del sector se lucieron con charlas magníficas.</p>
								<a href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8qr7C4nts3AwCXRP3fPi1y1" target="_blank" rel="noopener">Mira los videos</a>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<div class="edition-container-content">
								<img src="img/emms/emms2012.png" alt="EMMS 2012">
								<h4>EMMS 2012</h4>
								<p>Inspirado en el “fin del mundo” volvió el EMMS para salvar a aquellos que no pensaban actualizarse con
									las últimas tendencias del Marketing. Más de 2.000 participantes.</p>
								<a href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8pFFK1-Tg8o1uDOWKUGBaoM" target="_blank" rel="noopener">Dale play a las charlas</a>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<div class="edition-container-content">
								<img src="img/emms/emms2011.png" alt="EMMS 2011">
								<h4>EMMS 2011</h4>
								<p>El evento más relevante de Marketing Online llegó a México. Se discutieron temas como el Mobile
									Marketing, tendencias del mercado y se inauguró el panel de casos de éxito.</p>
								<a href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8pCjMuMVOwrataaoQUyaFvo" target="_blank" rel="noopener">Mira las conferencias</a>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<div class="edition-container-content">
								<img src="img/emms/emms2010.png" alt="EMMS 2010">
								<h4>EMMS 2010</h4>
								<p>Los asistentes aprendieron sobre análisis de Métricas, Social Email Marketing, Diseño y Conversión, en
									el
									reconocido Seminario del Email Marketing Made Simple.</p>
								<a href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8oQe0h6OLhb1QOwMHSfoI3P" target="_blank" rel="noopener">Disfruta las Capacitaciones</a>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<div class="edition-container-content">
								<img src="img/emms/emms2009.png" alt="EMMS 2009">
								<h4>EMMS 2009</h4>
								<p>Solo 500 personas tuvieron la posibilidad de vivir este evento en Buenos Aires, Argentina. Tendencias
									en
									Social Media, Content Marketing, SEO y mucho más.</p>
								<a href="https://www.youtube.com/playlist?list=PLHE_SVtQOB8qZykZGtv66ITP3zxHPUhfV" target="_blank" rel="noopener">Revive el evento</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="dp-container-fluid" id="footer">
		<div class="dp-rowflex">

			<div class="col-sm-12 col-md-5">
				<div class="footer-text">
					<p><strong>EMMS 2021</strong> - Un evento creado por</p>
					<a href="https://www.fromdoppler.com/?utm_source=goemms&utm_medium=footer&utm_campaign=logodoppler" target="_blank" rel="noopener"><img src="img/LogoDoppler.png?version=<?= VERSION ?>" alt="Doppler"></a>
				</div>
			</div>
			<div class="col-sm-12 col-md-2">
				<div class="footer-social-share">
					<a href="https://www.instagram.com/fromdoppler/" target="_blank" rel="noopener"><img src="img/instagram.svg?version=<?= VERSION ?>" alt="Instagram"></a>
					<a href="https://www.facebook.com/DopplerEmailMarketing" target="_blank" rel="noopener"><img src="img/facebook.svg?version=<?= VERSION ?>" alt="Facebook"></a>
					<a href="https://www.youtube.com/user/FromDoppler" target="_blank" rel="noopener"><img src="img/Youtube.svg?version=<?= VERSION ?>" alt="Youtube"></a>
					<a href="https://www.linkedin.com/company/doppler" target="_blank" rel="noopener"><img src="img/linkedin.svg?version=<?= VERSION ?>" alt="Linkeding"></a>
					<a href="https://twitter.com/fromDoppler" target="_blank" rel="noopener"><img src="img/twitter.svg?version=<?= VERSION ?>" alt="Twitter"></a>
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
					<a href="https://www.fromdoppler.com/es/legal/privacidad/?utm_source=EMMS2021&utm_medium=goemms&utm_campaign=privacidad" target="_blank" rel="noopener"> Políticas de privacidad y legales</a>
				</div>
			</div>

		</div>
	</div>
	<script type="text/javascript" src="js/modules/nav.js?version=<?= VERSION ?>"></script>
	<script src="js/modules/utm/utm.js?version=<?= VERSION ?>"></script>
</body>

</html>