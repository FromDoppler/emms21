<!DOCTYPE html>

<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SARASA</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/css/styles.css">
	<script type="text/javascript" src="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/js/app.js"></script>
	<link rel="stylesheet" href="https://use.typekit.net/fbq8dbp.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript" src="js/registrarEmms.js"></script>
</head>

<body class="dp-library">
	<div class="dp-container-fluid" id="header">
		<div class="dp-container">
			<div class="dp-rowflex">
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

</body>

</html>