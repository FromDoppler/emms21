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
	<!-- //TODO: Modificar noindex en prod -->
	<meta name="robots" content="noindex">
	<link rel="stylesheet" type="text/css" href="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/css/styles.css?version=<?= VERSION ?>">
	<link href="css/libs/intl-tel-input/intlTelInput.min.css?version=<?= VERSION ?>" rel="stylesheet" media="all">
	<link href="css/libs/intl-tel-input/intlTellInput.css?version=<?= VERSION ?>" rel="stylesheet" media="all">
	<link rel="stylesheet" type="text/css" href="css/styles.css?version=<?= VERSION ?>">
	<link rel="stylesheet" href="https://use.typekit.net/fbq8dbp.css?version=<?= VERSION ?>">
</head>

<body class="dp-library">
	<main class="main">
		<div class="dp-container-fluid" id="header">

			<header class="header" id="navbar">
				<nav class="navbar">
					<a href="#" class="nav-logo"><img src="img/logoEMMS.svg?version=<?= VERSION ?>" alt="Logo EMMS 2021" class="logoEMMS"></a>
					<ul class="nav-menu">
						<li class="nav-item">
							<a href="#head-container" class="nav-link">Inicio</a>
						</li>
						<li class="nav-item">
							<a href="#schedule" class="nav-link">Agenda</a>
						</li>
						<li class="nav-item">
							<a href="previous-editions.html" class="nav-link">Ediciones anteriores</a>
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
				<div class="dp-rowflex" id="head-container">
					<div class="col-sm-12 col-md-6 col-lg-6">
						<div class="col-sm-12 head-content-container">
							<span>EVENTO EXCLUSIVO</span>
							<h1>Un evento online de Marketing Digital exclusivo para ti </h1>
							<div class="head-content-text">
								<p>Escucha a los especialistas que están cambiando el mundo digital. ¡Potencia tu negocio con sus consejos
									y
									experiencia!Escucha a los especialistas que están cambiando el mundo digital. ¡Potencia tu negocio con
									sus consejos y
									experiencia!</p>
								<p>11 de Noviembre</p>
								<p>11:00 a.m. CO / MX / PE - 1:00 p.m. AR - 6:00 p.m. ES </p>
							</div>
							<a href="#" target="_blank" rel="noopener">CONOCE A LOS NOTABLES SPEAKERS</a>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 register-form-container">
						<div class="dp-rowflex">
							<div class="col-md-2"></div>
							<div class="col-sm-12 col-md-8 register-form">
								<div class="dp-rowflex">
									<div class="col-sm-0 col-md-1"></div>
									<div class="col-sm-12 col-md-10">
										<div class="dp-wrapper-form-plans">
											<form class="dp-forms-plans" id="form" action="success-reservation.php" method="post">
												<legend>Completa el siguiente formulario de EMMS</legend>
												<ul class="field-group">
													<li class="field-item" id="first-form-item">
														<div class="holder">
															<label for="name">Nombre *</label>

															<input type="text" name="firstname" id="firstname" placeholder="Tu nombre" class="required error-name">
														</div>
													</li>
													<li class="field-item ">
														<div class="holder">
															<label for="lastname">Apellido *</label>
															<input type="text" name="lastname" id="lastname" placeholder="Tu apellido" class="required">
														</div>
													</li>
													<li class="field-item">
														<div class="holder">
															<label for="email">Email *</label>
															<input type="email" name="email" id="email" placeholder="¡No olvides usar @!" class="email required">
														</div>
													</li>
													<li class="field-item">
														<div class="holder" id="holder-phone">
															<label for="phone-input">Teléfono *</label>
															<input id="phone-input" name="phone" type="tel" class="required phone phone-number">
															<input id="full-phone-input" name="full-phone-input" type="hidden" value="">
														</div>
													</li>

													<li class="field-item">
														<div class="holder" id="holder-company">
															<label for="company-input">Empresa *</label>
															<input id="company-input" name="company" type="text" class="required company company-number">
															<input id="full-company-input" name="full-company-input" type="hidden" value="">
														</div>
													</li>
												</ul>
												<ul class="dp-exclusive-features-list field-group">
													<li class="field-item field-item__checkbox">
														<div class="holder">
															<input name="privacy" type="checkbox" id="acepto-politicas" value="true" class="required check"><span class="checkmark"></span><label for="acepto-politicas">
																Acepto la Política de Privacidad de Doppler *
															</label>
														</div>
													</li>
													<li class="field-item field-item__checkbox">
														<input name="promotions" type="checkbox" id="acepto-promociones" value="true"><span class="checkmark"></span><label for="acepto-promociones">
															Acepto recibir promociones de Doppler y sus aliados</label>
													</li>
												</ul>

												<div class="">
													<div>
														<!-- <input type="hidden" id="utm_source" name="utm_source" value='<?= $_GET['utm_source'] ?>' />
														<input type="hidden" id="utm_campaign" name="utm_campaign" value='<?= $_GET['utm_campaign'] ?>' />
														<input type="hidden" id="utm_content" name="utm_content" value='<?= $_GET['utm_content'] ?>' />
														<input type="hidden" id="utm_term" name="utm_term" value='<?= $_GET['utm_term'] ?>' />
														<input type="hidden" id="utm_medium" name="utm_medium" value='<?= $_GET['utm_medium'] ?>' />
														<input type="hidden" id="origin" name="origin" value='<?= $_GET['origin'] ?>' /> -->
														<button type="button" class="dp-button button-big" id="register-button">
															REGÍSTRATE
														</button>
													</div>
													<div class="legal-form-container">
														<p> Doppler te informa que los datos de carácter personal que nos proporciones al rellenar el
															presente formulario serán tratados por Making Sense LLC (Doppler) como responsable de esta
															web. <br>
															<strong>Finalidad: </strong>Gestionar el alta de registro a la capacitación, enviarte
															material
															vinculado a la misma e información sobre Doppler y nuestros futuros eventos o
															capacitaciones.
															<br>
															<strong>Legitimación: </strong>Consentimiento del interesado. <br>
															<strong>Destinatarios: </strong>Tus datos serán guardados por Doppler, GoToWebinar como
															plataforma de conferencias online y Digital Ocean como empresa de hosting. <br>
															<strong>Información adicional: </strong>En la <a href="https://www.fromdoppler.com/es/legal/privacidad/" target="_blank" rel="noopener">Política de Privacidad</a> de Doppler encontrarás información adicional
															sobre la recopilación y el uso de su información personal por parte de Doppler, incluida
															información sobre acceso, conservación, rectificación, eliminación, seguridad,
															transferencias
															transfronterizas y otros temas. <br>
														</p>
													</div>
												</div>


											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>


		<div class="dp-container">
			<div class="dp-rowflex speakers-text-container">
				<div class="col-md-12" id="schedule">
					<h2>AGENDA DEL EMMS 2021</h2>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<p>Asiste al día y a la actividad que quieras. El Networking será exclusivo para usuarios de Doppler. ¿Aún no
						tienes cuenta? <a href="#" target="_blank" rel="noopener">Crea una gratis.</a></p>
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="dp-rowflex schedule">
				<div class="col-sm-12 col-md-6 col-lg-4 speaker-col-center">
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
				<div class="col-sm-12 col-md-6 col-lg-4 speaker-col-center">
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
				<div class="col-sm-12 col-md-6 col-lg-4 speaker-col-center">
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
				<div class="col-sm-12 col-md-6 col-lg-4 speaker-col-center">
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
				<div class="col-sm-12 col-md-6 col-lg-4 speaker-col-center">
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
				<div class="col-sm-12 col-md-6 col-lg-4 speaker-col-center">
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
			</div>
		</div>

		<div class="dp-container-fluid" id="footer-index">
			<div class="footer-bg-asset"></div>
			<div class="dp-container footer-index-container">
				<div class="dp-rowflex">
					<div class="col-md-12">
						<h3>Súmate al #EMMS2021</h3>
						<p>Escucha a los especialistas que están cambiando el mundo digital. <br> ¡Potencia tu negocio con sus
							consejos y experiencia!</p>
						<button type="button" class="dp-button">
							Iniciar campaña
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="dp-container-fluid" id="footer">
			<div class="dp-rowflex">

				<div class="col-sm-12 col-md-5">
					<div class="footer-text">
						<p><strong>EMMS 2020</strong> - Un eventro creado por</p> <img src="img/LogoDoppler.png?version=<?= VERSION ?>" alt="Doppler">
					</div>
				</div>
				<div class="col-sm-12 col-md-2">
					<div class="footer-social-share">
						<a href="#" target="_blank" rel="noopener"></a><img src="img/instagram.svg?version=<?= VERSION ?>" alt="Instagram"></a>
						<a href="#" target="_blank" rel="noopener"></a><img src="img/facebook.svg?version=<?= VERSION ?>" alt="Facebook"></a>
						<a href="#" target="_blank" rel="noopener"></a><img src="img/Youtube.svg?version=<?= VERSION ?>" alt="Youtube"></a>
						<a href="#" target="_blank" rel="noopener"></a><img src="img/linkedin.svg?version=<?= VERSION ?>" alt="Linkeding"></a>
						<a href="#" target="_blank" rel="noopener"></a><img src="img/twitter.svg?version=<?= VERSION ?>" alt="Twitter"></a>
					</div>
				</div>
				<div class="col-sm-12 col-md-5">
					<div class="footer-legal">
						<a href="#" target="_blank" rel="noopener"> Políticas de privacidad y legales</a>
					</div>
				</div>

			</div>
		</div>
	</main>
	<script type="text/javascript" src="js/modules/intlTelInput/intlTelInput.min.js?version=<?= VERSION ?>"></script>
	<script type="module" src="js/registrarEmms.js?version=<?= VERSION ?>"></script>
	<script type="text/javascript" src="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/js/app.js?version=<?= VERSION ?>"></script>
	<script type="text/javascript" src="nav.js?version=<?= VERSION ?>"></script>
</body>

</html>