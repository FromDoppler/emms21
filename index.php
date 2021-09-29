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
														<div class="holder">
															<label for="country">País</label>
															<span class="dropdown-arrow"></span>
															<select id="country" name="country" class="" autocomplete="off">
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
															<label for="company-input">Empresa</label>
															<input id="company-input" name="company" type="text" class="company company-number">
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