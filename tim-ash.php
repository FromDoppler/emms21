<?php
require_once('./config.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EMMS21- Tim Ash</title>
	<meta name="robots" content="<?= (PRODUCTION) ? 'index, follow' : 'noindex, nofollow' ?>">
	<meta name="theme-color" content="#3F0453">
	<meta name="title" content="EMMS21- Tim Ash">
	<meta name="description" content="Los líderes de la Industria en el evento online de Marketing Digital más impactante del año. ¿Tienes tu invitación?">
	<meta name="keywords" content="">
	<meta name="language" content="Spanish">
	<meta name="revisit-after" content="15 days">
	<meta name="author" content="Doppler">
	<meta property="og:title" content="EMMS21- Tim Ash">
	<meta property="og:description" content="Los líderes de la Industria en el evento online de Marketing Digital más impactante del año. ¿Tienes tu invitación?">
	<meta property="og:image" content="https://i.imgur.com/GrG726A.png">
	<meta property="og:url" content="https://goemms.com/">
	<meta property="og:site_name" content="EMMS21- Tim Ash">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:image" content="https://i.imgur.com/GrG726A.png">
	<meta name="twitter:image:alt" content="EMMS21- Tim Ash">
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
	<link rel="preload" as="font" href="https://use.typekit.net/fbq8dbp.css?version=<?= VERSION ?>">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
	<link rel="stylesheet" href="app/<?= VERSION ?>/css/libs/cookies/cookies.css">

</head>

<body class="dp-library speakers-post">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M768WZR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<main class="main">
		<div class="dp-container-fluid" id="header">
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
			<div class="dp-container speaker-post-container timash">
				<h1>Branding Vs Performance: Cómo terminar una guerra donde todos ganan.</h1>
				<div class="dp-rowflex">
					<div class="col-sm-1 dp-none-desktop"></div>
					<div class="col-sm-10 col-md-12 col-lg-9 dp--center">
						<div class="video-speaker-container">
							<iframe class="" width="100%" height="100%" src="https://www.youtube.com/embed/uTaG_KK8sEc?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<div class="form-post-container dp-none">
								<div class="dp-rowflex">
									<div class="col-md-12">
										<form class="dp-forms-plans" id="form" action="success-reservation.php" method="post">
											<legend>Completa el siguiente formulario de EMMS</legend>
											<div class="dp-rowflex">
												<ul class="field-group col-sm-12 col-md-5 inputs-container">
													<li class="field-item" id="first-form-item">
														<div class="holder">
															<label class="required-label" for="name">Nombre</label>
															<input type="text" name="firstname" id="firstname" placeholder="Tu nombre" class="required error-name">
														</div>
													</li>
													<li class="field-item ">
														<div class="holder">
															<label class="required-label" for="lastname">Apellido</label>
															<input type="text" name="lastname" id="lastname" placeholder="Tu apellido" class="required">
														</div>
													</li>
													<li class="field-item">
														<div class="holder">
															<label class="required-label" for="email">Email</label>
															<input type="email" name="email" id="email" placeholder="¡No olvides usar @!" class="email required">
														</div>
													</li>
													<li class="field-item">
														<div class="holder" id="holder-phone">
															<label class="required-label" for="phone-input required-label">Teléfono</label>
															<input id="phone-input" name="phone" type="tel" class="required phone phone-number">
															<input id="full-phone-input" name="full-phone-input" type="hidden" value="">
														</div>
													</li>
													<li class="field-item">
														<div class="holder">
															<label class="required-label" for="country">País</label>
															<span class="dropdown-arrow"></span>
															<select id="country" name="country" class="required" autocomplete="off">
																<option disabled selected value>Elige un país</option>
																<option value="Afghanistan">Afghanistan</option>
																<option value="Albania">Albania</option>
																<option value="Algeria">Algeria</option>
																<option value="Andorra">Andorra</option>
																<option value="Angola">Angola</option>
																<option value="Antarctica">Antarctica</option>
																<option value="Antigua and Barbuda">Antigua and Barbuda</option>
																<option value="Argentina">Argentina</option>
																<option value="Armenia">Armenia</option>
																<option value="Australia">Australia</option>
																<option value="Austria">Austria</option>
																<option value="Azerbaijan">Azerbaijan</option>
																<option value="Bahamas">Bahamas</option>
																<option value="Bahrain">Bahrain</option>
																<option value="Bangladesh">Bangladesh</option>
																<option value="Barbados">Barbados</option>
																<option value="Belarus">Belarus</option>
																<option value="Belgium">Belgium</option>
																<option value="Belize">Belize</option>
																<option value="Benin">Benin</option>
																<option value="Bermuda">Bermuda</option>
																<option value="Bhutan">Bhutan</option>
																<option value="Bolivia">Bolivia</option>
																<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
																<option value="Botswana">Botswana</option>
																<option value="Brazil">Brazil</option>
																<option value="Brunei">Brunei</option>
																<option value="Bulgaria">Bulgaria</option>
																<option value="Burkina Faso">Burkina Faso</option>
																<option value="Burma">Burma</option>
																<option value="Burundi">Burundi</option>
																<option value="Cambodia">Cambodia</option>
																<option value="Cameroon">Cameroon</option>
																<option value="Canada">Canada</option>
																<option value="Cape Verde">Cape Verde</option>
																<option value="Central African Republic">Central African Republic</option>
																<option value="Chad">Chad</option>
																<option value="Chile">Chile</option>
																<option value="China">China</option>
																<option value="Colombia">Colombia</option>
																<option value="Comoros">Comoros</option>
																<option value="Congo, Democratic Republic">Congo, Democratic Republic</option>
																<option value="Congo, Republic of the">Congo, Republic of the</option>
																<option value="Costa Rica">Costa Rica</option>
																<option value="Cote d'Ivoire">Cote d'Ivoire</option>
																<option value="Croatia">Croatia</option>
																<option value="Cuba">Cuba</option>
																<option value="Cyprus">Cyprus</option>
																<option value="Czech Republic">Czech Republic</option>
																<option value="Denmark">Denmark</option>
																<option value="Djibouti">Djibouti</option>
																<option value="Dominica">Dominica</option>
																<option value="Dominican Republic">Dominican Republic</option>
																<option value="East Timor">East Timor</option>
																<option value="Ecuador">Ecuador</option>
																<option value="Egypt">Egypt</option>
																<option value="El Salvador">El Salvador</option>
																<option value="Equatorial Guinea">Equatorial Guinea</option>
																<option value="Eritrea">Eritrea</option>
																<option value="Estonia">Estonia</option>
																<option value="Ethiopia">Ethiopia</option>
																<option value="Fiji">Fiji</option>
																<option value="Finland">Finland</option>
																<option value="France">France</option>
																<option value="Gabon">Gabon</option>
																<option value="Gambia">Gambia</option>
																<option value="Georgia">Georgia</option>
																<option value="Germany">Germany</option>
																<option value="Ghana">Ghana</option>
																<option value="Greece">Greece</option>
																<option value="Greenland">Greenland</option>
																<option value="Grenada">Grenada</option>
																<option value="Guatemala">Guatemala</option>
																<option value="Guinea">Guinea</option>
																<option value="Guinea-Bissau">Guinea-Bissau</option>
																<option value="Guyana">Guyana</option>
																<option value="Haiti">Haiti</option>
																<option value="Honduras">Honduras</option>
																<option value="Hong Kong">Hong Kong</option>
																<option value="Hungary">Hungary</option>
																<option value="Iceland">Iceland</option>
																<option value="India">India</option>
																<option value="Indonesia">Indonesia</option>
																<option value="Iran">Iran</option>
																<option value="Iraq">Iraq</option>
																<option value="Ireland">Ireland</option>
																<option value="Israel">Israel</option>
																<option value="Italy">Italy</option>
																<option value="Jamaica">Jamaica</option>
																<option value="Japan">Japan</option>
																<option value="Jordan">Jordan</option>
																<option value="Kazakhstan">Kazakhstan</option>
																<option value="Kenya">Kenya</option>
																<option value="Kiribati">Kiribati</option>
																<option value="Korea, North">Korea, North</option>
																<option value="Korea, South">Korea, South</option>
																<option value="Kuwait">Kuwait</option>
																<option value="Kyrgyzstan">Kyrgyzstan</option>
																<option value="Laos">Laos</option>
																<option value="Latvia">Latvia</option>
																<option value="Lebanon">Lebanon</option>
																<option value="Lesotho">Lesotho</option>
																<option value="Liberia">Liberia</option>
																<option value="Libya">Libya</option>
																<option value="Liechtenstein">Liechtenstein</option>
																<option value="Lithuania">Lithuania</option>
																<option value="Luxembourg">Luxembourg</option>
																<option value="Macedonia">Macedonia</option>
																<option value="Madagascar">Madagascar</option>
																<option value="Malawi">Malawi</option>
																<option value="Malaysia">Malaysia</option>
																<option value="Maldives">Maldives</option>
																<option value="Mali">Mali</option>
																<option value="Malta">Malta</option>
																<option value="Marshall Islands">Marshall Islands</option>
																<option value="Mauritania">Mauritania</option>
																<option value="Mauritius">Mauritius</option>
																<option value="Mexico">Mexico</option>
																<option value="Micronesia">Micronesia</option>
																<option value="Moldova">Moldova</option>
																<option value="Mongolia">Mongolia</option>
																<option value="Montenegro">Montenegro</option>
																<option value="Morocco">Morocco</option>
																<option value="Monaco">Monaco</option>
																<option value="Mozambique">Mozambique</option>
																<option value="Namibia">Namibia</option>
																<option value="Nauru">Nauru</option>
																<option value="Nepal">Nepal</option>
																<option value="Netherlands">Netherlands</option>
																<option value="New Zealand">New Zealand</option>
																<option value="Nicaragua">Nicaragua</option>
																<option value="Niger">Niger</option>
																<option value="Nigeria">Nigeria</option>
																<option value="Norway">Norway</option>
																<option value="Oman">Oman</option>
																<option value="Pakistan">Pakistan</option>
																<option value="Panama">Panama</option>
																<option value="Papua New Guinea">Papua New Guinea</option>
																<option value="Paraguay">Paraguay</option>
																<option value="Peru">Peru</option>
																<option value="Philippines">Philippines</option>
																<option value="Poland">Poland</option>
																<option value="Portugal">Portugal</option>
																<option value="Qatar">Qatar</option>
																<option value="Romania">Romania</option>
																<option value="Russia">Russia</option>
																<option value="Rwanda">Rwanda</option>
																<option value="Samoa">Samoa</option>
																<option value="San Marino">San Marino</option>
																<option value="Sao Tome">Sao Tome</option>
																<option value="Saudi Arabia">Saudi Arabia</option>
																<option value="Senegal">Senegal</option>
																<option value="Serbia">Serbia</option>
																<option value="Seychelles">Seychelles</option>
																<option value="Sierra Leone">Sierra Leone</option>
																<option value="Singapore">Singapore</option>
																<option value="Slovakia">Slovakia</option>
																<option value="Slovenia">Slovenia</option>
																<option value="Solomon Islands">Solomon Islands</option>
																<option value="Somalia">Somalia</option>
																<option value="South Africa">South Africa</option>
																<option value="Spain">Spain</option>
																<option value="Sri Lanka">Sri Lanka</option>
																<option value="Sudan">Sudan</option>
																<option value="Suriname">Suriname</option>
																<option value="Swaziland">Swaziland</option>
																<option value="Sweden">Sweden</option>
																<option value="Switzerland">Switzerland</option>
																<option value="Syria">Syria</option>
																<option value="Taiwan">Taiwan</option>
																<option value="Tajikistan">Tajikistan</option>
																<option value="Tanzania">Tanzania</option>
																<option value="Thailand">Thailand</option>
																<option value="Togo">Togo</option>
																<option value="Tonga">Tonga</option>
																<option value="Trinidad and Tobago">Trinidad and Tobago</option>
																<option value="Tunisia">Tunisia</option>
																<option value="Turkey">Turkey</option>
																<option value="Turkmenistan">Turkmenistan</option>
																<option value="Uganda">Uganda</option>
																<option value="Ukraine">Ukraine</option>
																<option value="United Arab Emirates">United Arab Emirates</option>
																<option value="United Kingdom">United Kingdom</option>
																<option value="United States">United States</option>
																<option value="Uruguay">Uruguay</option>
																<option value="Uzbekistan">Uzbekistan</option>
																<option value="Vanuatu">Vanuatu</option>
																<option value="Venezuela">Venezuela</option>
																<option value="Vietnam">Vietnam</option>
																<option value="Yemen">Yemen</option>
																<option value="Zambia">Zambia</option>
																<option value="Zimbabwe">Zimbabwe</option>
															</select>
														</div>
													</li>
													<li class="field-item">
														<div class="holder" id="holder-company">
															<label for="company-input" class="required-label">Empresa</label>
															<input id="company-input" name="company" type="text" placeholder="Tu empresa" class="company company-number required">
														</div>
													</li>
												</ul>
												<div class="col-sm-12 col-md-7 legal-post-container">
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
													<div>
														<button type="button" class="dp-button button-big" id="register-button">
															<span class="button-text"> ACCEDE AL VIDEO </span>
														</button>
													</div>

													<div class="legal-form-container">
														<p> <span>Doppler te informa que los datos de carácter personal que nos proporciones al rellenar el presente formulario serán tratados por Doppler LLC como responsable de esta Web.</span><br><br>
															<strong>Finalidad: </strong>Dar de alta esta suscripción para enviar newsletters con información y promociones de productos o servicios propios o de nuestros aliados.<br>
															<strong>Legitimación: </strong>Consentimiento del interesado. <br>
															<strong>Destinatarios: </strong>Tus datos serán guardados por Doppler como organizador del evento y DigitalOcean como empresa de hosting.<br>
															<strong>Información adicional: </strong>En la <a href="https://www.fromdoppler.com/es/legal/privacidad/?utm_source=goemms&utm_medium=footer&utm_campaign=politicasdeprivacidad" target="_blank" rel="noopener">Política de Privacidad</a> de Doppler encontrarás información adicional
															sobre la recopilación y el uso de su información personal por parte de Doppler, incluida
															información sobre acceso, conservación, rectificación, eliminación, seguridad,
															transferencias
															transfronterizas y otros temas. <br>
														</p>
													</div>
												</div>
											</div>



										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-1 dp-none-desktop"></div>

					<div class="col-sm-12 col-md-12 col-lg-3 dp--center">
						<div class="speaker-info-post">
							<h5>Tim Ash</h5>
							<p>Speaker internacional sobre psicología evolutiva y Marketing Digital, consultor, formador y emprendedor. Autor de bestsellers. Estos son sólo algunos de los títulos que podrían describir a uno de los líderes de pensamiento de la industria actual.</p>
							<div class="speaker-redes-post">
								<a href="" target="_blank" rel="nofollow"><img src="img/speakers-post/linkedin.svg" alt="Linkedin"></a>
								<a href="" target="_blank" rel="nofollow"><img src="img/speakers-post/twitter.svg" alt="Twitter"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="dp-rowflex">
					<div class="col-12">
						<div class="speaker-post-share">
							<p>¡Compártelo con tus colegas!</p>
							<div class="share-social-container">
								<a href=""> <img src="img/speakers-post/share-twitter.svg" alt=""></a>
								<a href=""> <img src="img/speakers-post/share-facebook.svg" alt=""></a>
								<a href=""> <img src="img/speakers-post/share-linkdein.svg" alt=""></a>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-container">
					<h2>Revive el resto de las Conferencias</h2>
					<div class="inner-carousel">
						<div class="track">
							<div class="card-container">
								<div class="card">
									<div class="speaker-col">
										<div class="speaker-shadow">
											<div class="speaker-container speaker--border">
												<div class="speaker" id="paola-aldaz">
													<div class="dp-flex">
														<div class="speaker-flag-container">
															<img src="img/speakers/flag-arg.png" alt="Bandera Argentina" class="speaker-flag">
														</div>
														<p class="name">Paola Aldaz Biere</p>
													</div>
													<p class="seniority">Co-Presidente</p>
													<img src="img/speakers/logo-doyle-black.png" alt="Logo Doyle Black" class="speaker-logo">
												</div>
												<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakers/paola-aldaz-biere-hover.png);">
												</div>
											</div>
											<div class="redes">
												<a href="https://www.linkedin.com/in/paola-aldaz/" target="_blank" rel="nofollow"><img src="img/linkedin.svg" alt="Linkedin" class="speaker-social-icon linkdin"></a>
											</div>
											<div class="speaker-footer">
												<p class="speaker-footer-info ">Leader Challenge, experiencia y conocimiento para formar generaciones de líderes a través del ejemplo</p>
												<div class="div-animated">
													<span><a href="">¡MIRA EL VIDEO!</a></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-container">
								<div class="card">
									<div class="speaker-col">
										<div class="speaker-shadow">
											<div class="speaker-container speaker--border">
												<div class="speaker">
													<div class="dp-flex">
														<div class="speaker-flag-container">
															<img src="img/speakers/flag-uk.png" alt="Bandera United Kingdom" class="speaker-flag">
														</div>
														<p class="name">Elliot Ross</p>
													</div>
													<p class="seniority">Email Evangelist</p>
													<img src="img/speakers/logo-spark-black.png" alt="Logo Spark Black" class="speaker-logo">
												</div>
												<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakers/elliot.png);">
												</div>
											</div>
											<div class="redes">
												<a href="https://twitter.com/iamelliot" target="_blank" rel="nofollow"><img src="img/twitter.svg" alt="Twitter" class="speaker-social-icon twitter"></a>
												<a href="https://www.linkedin.com/in/iamelliot" target="_blank" rel="nofollow"><img src="img/linkedin.svg" alt="Linkedin" class="speaker-social-icon linkdin"></a>
												<a href="https://www.instagram.com/emailelliot" target="_blank" rel="nofollow"><img src="img/instagram.svg" alt="Instagram" class="speaker-social-icon instagram"></a>
											</div>
											<div class="speaker-footer">
												<p class="speaker-footer-info ">5 formas de optimizar tu Estrategia <br> de Email Automation</p>
												<div class="div-animated">
													<span><a href="">¡MIRA EL VIDEO!</a></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-container">
								<div class="card">
									<div class="speaker-col">
										<div class="speaker-shadow">
											<div class="speaker-container speaker--border">
												<div class="speaker" id="pablo-castellano">
													<div class="dp-flex">
														<div class="speaker-flag-container">
															<img src="img/speakers/flag-spain.png" alt="Bandera España" class="speaker-flag">
														</div>
														<p class="name">Pablo Castellano Alventosa</p>
													</div>
													<p class="seniority">Chief Forever Whatever</p>
													<img src="img/speakers/social.png" alt="Logo Socialmood" class="speaker-logo">
												</div>
												<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakers/pablo.png);">
												</div>
											</div>
											<div class="redes">
												<a href="https://www.linkedin.com/in/pablo-castellano-alventosa-47642610" target="_blank" rel="nofollow"><img src="img/linkedin.svg" alt="Linkedin" class="speaker-social-icon linkdin"></a>
											</div>
											<div class="speaker-footer">
												<p class="speaker-footer-info ">Por qué el 99% de las marcas fallan en Redes Sociales</p>
												<div class="div-animated">
													<span><a href="">¡MIRA EL VIDEO!</a></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-container">
								<div class="card">
									<div class="speaker-col">
										<div class="speaker-shadow">
											<div class="speaker-shadow">
												<div class="speaker-container speaker--border">
													<div class="speaker" id="ricardo-diez">
														<div class="dp-flex">
															<div class="speaker-flag-container">
																<img src="img/speakers/flag-guatemala.png" alt="Bandera Guatemala" class="speaker-flag">
															</div>
															<p class="name">Ricardo Díez</p>
														</div>
														<p class="seniority">Chief Executive Officer</p>
														<img src="img/speakers/logo-analytics-black.png" alt="Logo AnalyticsTown" class="speaker-logo">
													</div>
													<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakers/ricardo-diez.png);">
													</div>
												</div>
												<div class="redes">
													<a href="https://twitter.com/Ricardiez" target="_blank" rel="nofollow"><img src="img/twitter.svg" alt="Twitter" class="speaker-social-icon twitter"></a>
													<a href="https://www.linkedin.com/in/ricardodiez/" target="_blank" rel="nofollow"><img src="img/linkedin.svg" alt="Linkedin" class="speaker-social-icon linkdin"></a>
												</div>
												<div class="speaker-footer">
													<p class="speaker-footer-info">Big Data para Managers: Qué es Zero Party Data y por qué es importante para tu negocio</p>
													<div class="div-animated">
														<span><a href="">¡MIRA EL VIDEO!</a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="nav">
							<button class="prev"><img src="img/back.png" alt="Flecha a la izquierda" class="carousel-arrow"></button>
							<button class="next"><img src="img/next.png" alt="Flecha a la derecha" class="carousel-arrow"></button>
						</div>
						<div class="buttons-container">
							<button>1</button>
							<button>2</button>

						</div>
					</div>
				</div>
				<div class="speakers-display">
					<div class="dp-rowflex">
						<div class="col-sm-12 col-md-12 speaker-col">
							<div class="speaker-shadow">
								<div class="speaker-container speaker--border">
									<div class="speaker" id="paola-aldaz">
										<div class="dp-flex">
											<div class="speaker-flag-container">
												<img src="img/speakers/flag-arg.png" alt="Bandera Argentina" class="speaker-flag">
											</div>
											<p class="name">Paola Aldaz Biere</p>
										</div>
										<p class="seniority">Co-Presidente</p>
										<img src="img/speakers/logo-doyle-black.png" alt="Logo Doyle Black" class="speaker-logo">
									</div>
									<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakers/paola-aldaz-biere-hover.png);">
									</div>
								</div>
								<div class="redes">
									<a href="https://www.linkedin.com/in/paola-aldaz/" target="_blank" rel="nofollow"><img src="img/linkedin.svg" alt="Linkedin" class="speaker-social-icon linkdin"></a>
								</div>
								<div class="speaker-footer">
									<p class="speaker-footer-info ">Leader Challenge, experiencia y conocimiento para formar generaciones de líderes a través del ejemplo</p>
									<div class="div-animated">
										<span><a href="">¡MIRA EL VIDEO!</a></span>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-12 speaker-col">
							<div class="speaker-shadow">
								<div class="speaker-container speaker--border">
									<div class="speaker">
										<div class="dp-flex">
											<div class="speaker-flag-container">
												<img src="img/speakers/flag-uk.png" alt="Bandera United Kingdom" class="speaker-flag">
											</div>
											<p class="name">Elliot Ross</p>
										</div>
										<p class="seniority">Email Evangelist</p>
										<img src="img/speakers/logo-spark-black.png" alt="Logo Spark Black" class="speaker-logo">
									</div>
									<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakers/elliot.png);">
									</div>
								</div>
								<div class="redes">
									<a href="https://twitter.com/iamelliot" target="_blank" rel="nofollow"><img src="img/twitter.svg" alt="Twitter" class="speaker-social-icon twitter"></a>
									<a href="https://www.linkedin.com/in/iamelliot" target="_blank" rel="nofollow"><img src="img/linkedin.svg" alt="Linkedin" class="speaker-social-icon linkdin"></a>
									<a href="https://www.instagram.com/emailelliot" target="_blank" rel="nofollow"><img src="img/instagram.svg" alt="Instagram" class="speaker-social-icon instagram"></a>
								</div>
								<div class="speaker-footer">
									<p class="speaker-footer-info ">5 formas de optimizar tu Estrategia <br> de Email Automation</p>
									<div class="div-animated">
										<span><a href="">¡MIRA EL VIDEO!</a></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 speaker-col">
							<div class="speaker-shadow">
								<div class="speaker-container speaker--border">
									<div class="speaker" id="pablo-castellano">
										<div class="dp-flex">
											<div class="speaker-flag-container">
												<img src="img/speakers/flag-spain.png" alt="Bandera España" class="speaker-flag">
											</div>
											<p class="name">Pablo Castellano Alventosa</p>
										</div>
										<p class="seniority">Chief Forever Whatever</p>
										<img src="img/speakers/social.png" alt="Logo Socialmood" class="speaker-logo">
									</div>
									<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakers/pablo.png);">
									</div>
								</div>
								<div class="redes">
									<a href="https://www.linkedin.com/in/pablo-castellano-alventosa-47642610" target="_blank" rel="nofollow"><img src="img/linkedin.svg" alt="Linkedin" class="speaker-social-icon linkdin"></a>
								</div>
								<div class="speaker-footer">
									<p class="speaker-footer-info ">Por qué el 99% de las marcas fallan en Redes Sociales</p>
									<div class="div-animated">
										<span><a href="">¡MIRA EL VIDEO!</a></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 speaker-col">
							<div class="speaker-shadow">
								<div class="speaker-container speaker--border">
									<div class="speaker" id="ricardo-diez">
										<div class="dp-flex">
											<div class="speaker-flag-container">
												<img src="img/speakers/flag-guatemala.png" alt="Bandera Guatemala" class="speaker-flag">
											</div>
											<p class="name">Ricardo Díez</p>
										</div>
										<p class="seniority">Chief Executive Officer</p>
										<img src="img/speakers/logo-analytics-black.png" alt="Logo AnalyticsTown" class="speaker-logo">
									</div>
									<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakers/ricardo-diez.png);">
									</div>
								</div>
								<div class="redes">
									<a href="https://twitter.com/Ricardiez" target="_blank" rel="nofollow"><img src="img/twitter.svg" alt="Twitter" class="speaker-social-icon twitter"></a>
									<a href="https://www.linkedin.com/in/ricardodiez/" target="_blank" rel="nofollow"><img src="img/linkedin.svg" alt="Linkedin" class="speaker-social-icon linkdin"></a>
								</div>
								<div class="speaker-footer">
									<p class="speaker-footer-info">Big Data para Managers: Qué es Zero Party Data y por qué es importante para tu negocio</p>
									<div class="div-animated">
										<span><a href="">¡MIRA EL VIDEO!</a></span>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-12 speaker-col">
							<div class="speaker-shadow">
								<div class="speaker-container speaker--border">
									<div class="speaker" id="tim-ash">
										<div class="dp-flex">
											<div class="speaker-flag-container">
												<img src="img/speakers/flag-usa.png" alt="Bandera United States" class="speaker-flag">
											</div>
											<p class="name">Tim Ash</p>
										</div>
										<p class="seniority">Keynote, Trainer & Advisor</p>
										<img src="img/speakers/logo-timash-black.png" alt="Logo Tim Ash" class="speaker-logo">
									</div>
									<div class="picture" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(83, 83, 83, 0) 31.67%, rgba(255, 255, 255, 0) 100%), url(/img/speakers/TimAsh.png);">
									</div>
								</div>
								<div class="redes">
									<a href="https://twitter.com/tim_ash" target="_blank" rel="nofollow"><img src="img/twitter.svg" alt="Twitter" class="speaker-social-icon twitter"></a>
									<a href="https://www.linkedin.com/in/timash" target="_blank" rel="nofollow"><img src="img/linkedin.svg" alt="Linkedin" class="speaker-social-icon linkdin"></a>
								</div>
								<div class="speaker-footer">
									<p class="speaker-footer-info ">Branding vs. Performance: Cómo terminar una guerra donde todos ganan</p>
									<div class="div-animated">
										<span><a href="">¡MIRA EL VIDEO!</a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="buttons-container">
						<button id="button-prev"></button>
						<button id="button-next"></button>
					</div>
				</div>
			</div>

		</div>


		<div class="dp-container-fluid footer-post-container-fluid">
			<div class="dp-container">
				<div class="dp-rowflex">
					<div class="col-12">
						<div class="footer-post-container">
							<h2>EVENTO CREADO POR <img src="img/logoDopplerPost.png" alt="Logo Doppler"></h2>
							<p><i>¿Aún no tienes cuenta?</i> Conoce los beneficios del Email, Automation & Data Marketing</p>
							<button>CREA TU CUENTA</button>
						</div>
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
	<!-- <script type="module" src="app/<?= VERSION ?>/js/statesHandler.js"></script> -->
	<script type="text/javascript" src="https://cdn.fromdoppler.com/doppler-ui-library/v3.102.0/js/app.js?version=<?= VERSION ?>"></script>
	<script type="text/javascript" src="app/<?= VERSION ?>/js/modules/nav.js?version=<?= VERSION ?>"></script>
	<script src="app/<?= VERSION ?>/js/modules/utm/utm.js?version=<?= VERSION ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
	<script type="text/javascript" src="app/<?= VERSION ?>/js/vendor/jquery/jquery-3.6.0.min.js"></script>
	<script type="module">
		import {
			carousel
		} from './app/<?= VERSION ?>/js/modules/carousel.js'

		document.addEventListener('DOMContentLoaded', () => {
			carousel();
		})
	</script>
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