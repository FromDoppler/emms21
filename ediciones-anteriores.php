<?php
require_once('./config.php');
?>
<!DOCTYPE html>

<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EMMS21 - Ediciones anteriores</title>
  <!-- //TODO: Modificar noindex en prod -->
  <meta name="robots" content="noindex">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png?version=<?= VERSION ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png?version=<?= VERSION ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png?version=<?= VERSION ?>">
	<link rel="stylesheet" type="text/css" href="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/css/styles.css">
	<script type="text/javascript" src="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/js/app.js"></script>
	<link rel="stylesheet" href="https://use.typekit.net/fbq8dbp.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body class="dp-library">

	<div class="dp-container-fluid" id="header-editions">
		<header class="header" id="navbar">
			<nav class="navbar">
				<a href="#inicio" class="nav-logo"><img src="img/logoEMMS.svg?version=<?= VERSION ?>" alt="Logo EMMS 2021"
						class="logoEMMS"></a>
				<ul class="nav-menu">
						<li class="nav-item">
							<a href="index.php#inicio" class="nav-link">Inicio</a>
						</li>
						<li class="nav-item">
							<a href="index.php#agenda" class="nav-link">Agenda</a>
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
		<div class="dp-container">
			<div class="dp-rowflex">
				<div class="col-sm-12 col-md-6 col-lg-6">
					<h1>Somos Doppler</h1>
					<p>
						El EMMS es un evento de Conferencias online y gratuitas que realizamos desde 2007. Continuamos potenciando
						negocios digitales en Latinoamérica y España. ¿Quieres implementar Email, Automation y Data Marketing en tu
						estrategia?
					</p>
					<button>DESCUBRE MÁS SOBRE DOPPLER</button>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 ">
					<div class="header-img-container">
						<img src="img/video-preview.png" alt="ACA VA EL VIDEO :)">
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
							<img src="img/emms/emms2020.png" alt="EMMS 2020">
							<h4>EMMS 2020</h4>
							<p>Las temáticas más votadas por el público y los especialistas que están cambiando el Marketing Digital
								en
								el mundo. ¡Revive la jornada que se convirtió en el evento online del año!</p>
							<a href="" target="_blank" rel="noopener">Mira las conferencias</a>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<img src="img/emms/emms2019.png" alt="EMMS 2019">
							<h4>EMMS 2019</h4>
							<p>Las temáticas más votadas por el público y los especialistas que están cambiando el Marketing Digital
								en
								el mundo. ¡Revive la jornada que se convirtió en el evento online del año!</p>
							<a href="" target="_blank" rel="noopener">Mira las conferencias</a>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<img src="img/emms/emms2018.png" alt="EMMS 2018">
							<h4>EMMS 2018</h4>
							<p>Las conferencias en inglés con traducción en simultáneo marcaron un antes y un después para los eventos
								de Marketing del mercado hispano. Hubo speakers de primer nivel y miles de asistentes.</p>
							<a href="" target="_blank" rel="noopener">Mira las conferencias</a>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<img src="img/emms/emms2017.png" alt="EMMS 2017">
							<h4>EMMS 2017</h4>
							<p>¡La décima edición tuvo récord de registros! Fueron 8 conferencias organizadas en nivel inicial y
								avanzado para que cada uno pudiera capacitarse en base a su experiencia y necesidades.</p>
							<a href="" target="_blank" rel="noopener">Mira las conferencias</a>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<img src="img/emms/emms2016.png" alt="EMMS 2016">
							<h4>EMMS 2016</h4>
							<p>Se sumaron novedosos formatos como charlas motivacionales, entrevistas a expertos, debates en vivo y
								más.
								Esta vez fue la audiencia quien eligió de qué manera aprender.</p>
							<a href="" target="_blank" rel="noopener">Disfruta cada formato</a>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<img src="img/emms/emms2015.png" alt="EMMS 2015">
							<h4>EMMS 2015</h4>
							<p>Como cada edición, el EMMS se renovó. Las conferencias se convirtieron en un evento de dos días con 10
								oradores destacados dentro de 2 temáticas: motivación y acción.</p>
							<a href="" target="_blank" rel="noopener">Descubre lo que pasó</a>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<img src="img/emms/emms2014.png" alt="EMMS 2014">
							<h4>EMMS 2014</h4>
							<p>El evento se transformó volviéndose 100% online, internacional y gratis. Con una duración de 10 horas
								ininterrumpidas, 10 increíbles speakers y más de 10.000 asistentes.</p>
							<a href="" target="_blank" rel="noopener">Escucha las ponencias</a>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<img src="img/emms/emms2013.png" alt="EMMS 2013">
							<h4>EMMS 2013</h4>
							<p>Por primera vez el evento viajó por 5 países: Ecuador, España, República Dominicana, México y
								Argentina,
								los influencers del sector se lucieron con charlas magníficas.</p>
							<a href="" target="_blank" rel="noopener">Mira los videos</a>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<img src="img/emms/emms2012.png" alt="EMMS 2012">
							<h4>EMMS 2012</h4>
							<p>Inspirado en el “fin del mundo” volvió el EMMS para salvar a aquellos que no pensaban actualizarse con
								las últimas tendencias del Marketing. Más de 2.000 participantes.</p>
							<a href="" target="_blank" rel="noopener">Dale play a las charlas</a>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<img src="img/emms/emms2011.png" alt="EMMS 2011">
							<h4>EMMS 2011</h4>
							<p>El evento más relevante de Marketing Online llegó a México. Se discutieron temas como el Mobile
								Marketing, tendencias del mercado y se inauguró el panel de casos de éxito.</p>
							<a href="" target="_blank" rel="noopener">Mira las conferencias</a>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<img src="img/emms/emms2010.png" alt="EMMS 2010">
							<h4>EMMS 2010</h4>
							<p>Los asistentes aprendieron sobre análisis de Métricas, Social Email Marketing, Diseño y Conversión, en
								el
								reconocido Seminario del Email Marketing Made Simple.</p>
							<a href="" target="_blank" rel="noopener">Disfruta las Capacitaciones</a>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 edition-container">
							<img src="img/emms/emms2009.png" alt="EMMS 2009">
							<h4>EMMS 2009</h4>
							<p>Solo 500 personas tuvieron la posibilidad de vivir este evento en Buenos Aires, Argentina. Tendencias
								en
								Social Media, Content Marketing, SEO y mucho más.</p>
							<a href="" target="_blank" rel="noopener">Revive el evento</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="dp-container-fluid" id="footer-editions">
		<div class="dp-container footer-editions-container">
			<div class="dp-rowflex">
				<div class="col-md-12">
					<h5>#EMMS2021</h5>
					<p>Escucha a los especialistas que están cambiando el mundo digital. <br> ¡Potencia tu negocio con sus
						consejos y experiencia!</p>
					<button type="button" class="dp-button">
						INCRÍBETE GRATIS
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="dp-container-fluid" id="footer">
		<div class="dp-rowflex">

			<div class="col-sm-12 col-md-5">
				<div class="footer-text">
					<p><strong>EMMS 2021</strong> - Un eventro creado por</p> <img
						src="img/LogoDoppler.png?version=<?= VERSION ?>" alt="Doppler">
				</div>
			</div>
			<div class="col-sm-12 col-md-2">
				<div class="footer-social-share">
					<a href="#" target="_blank" rel="noopener"></a><img src="img/instagram.svg?version=<?= VERSION ?>"
						alt="Instagram"></a>
					<a href="#" target="_blank" rel="noopener"></a><img src="img/facebook.svg?version=<?= VERSION ?>"
						alt="Facebook"></a>
					<a href="#" target="_blank" rel="noopener"></a><img src="img/Youtube.svg?version=<?= VERSION ?>"
						alt="Youtube"></a>
					<a href="#" target="_blank" rel="noopener"></a><img src="img/linkedin.svg?version=<?= VERSION ?>"
						alt="Linkeding"></a>
					<a href="#" target="_blank" rel="noopener"></a><img src="img/twitter.svg?version=<?= VERSION ?>"
						alt="Twitter"></a>
				</div>
			</div>
			<div class="col-sm-12 col-md-5">
				<div class="footer-legal">
					<a href="#" target="_blank" rel="noopener"> Políticas de privacidad y legales</a>
				</div>
			</div>

		</div>
	</div>
	<script type="text/javascript" src="js/modules/nav.js?version=<?= VERSION ?>"></script>

</body>

</html>