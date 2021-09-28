<?php require_once('admin/config.php'); ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Title site</title>

		<meta property="og:url"                content="<?php echo $URL; ?>" />
		<meta property="og:type"               content="website" />
		<meta property="og:title"              content="Title site" />
		<meta property="og:description"        content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. " />
		<meta property="og:image"              content="<?php echo $URL; ?>/img/sharing/example.png" />
		<meta name="root-url" content="<?php echo RUTA ?>" />
		<?php echo $favicon; ?>
		<?php echo $normalize_css; ?>
		<?php echo $boostrap_v4_css ?>

		<!-- Font awesome -->
		<?php echo $font_awesome_css; ?>
		<!-- CSS own files -->
		<?php echo $own_file_css; ?>
		
		<?php echo $google_analitycs; ?>

		<?php echo $lottie_js;  ?>
	</head>
	<body>

		<?php require("views/navbar.view.php"); ?>

		<div class="cover"></div>

		<section class="intro">
			<div class="container-fluid">
				<div class="float-logo">
					<img src="<?=RUTA?>sprites/Logosobreblanco.svg" alt="" class='img-fluid'>
				</div>
				<div class="row">
					<div class="col-md-8 col-lg-6 col-xl-4 content offset-md-1">
						<h1 class='montserrat-medium txt-green'>Business Coach</h1>

						<div class="form">
							<div class="paragraph body-intro line-height-18">
								<p>Acompaño a las personas y organizaciones a encontrar aquello que detona su máximo potencial.</p>
							</div>

							<h2 class='txt-green cour-bold paragraph line-height-18'>¿Listx para detonar tu energía creadora?</h2>

							<form action="">
								<div class="form-group line-bottom">
									<input type="text" name="name" placeholder="Nombre completo">
								</div>

								<div class="form-group line-bottom">
									<input type="email" name="email" placeholder="Correo electrónico">
								</div>


								<div class="form-bottom mt-5 mt-md-0">
									<button class='button small' type="submit"> Vamos a comunicarnos </button>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="predecimos">
			<div class="container-fluid">
				<div class="row">
					<img src="<?=RUTA?>img/predecimos.jpg" alt="" class='imgbg'>
					
					<div class="col-xl-4 col-md-5 offset-md-1">
						<h1 class='montserrat-semibold text-md-right txt-green'>Predecimos el futuro</h1>
					</div>

					<div class="col-md-5 parrafo">
						<div class="paragraph txt-gray v2">
							<p>
								Actualmente con sede en Mérida, Yucatán, pero gracias a la tecnología su alcance es global. <b>Jael Preciat Leal,</b> administradora de empresas con <b>Másters en Mercadotecnia y Business Coaching</b> por carrera y vocación, transmite la mística de una mujer tan conectada al universo como al mundo de los negocios.
							</p>
							<br>

							<p>
								Es ex colaboradora de Coca Cola Company y Cervecería Cuauhtémoc Moctezuma, <b>Directora General de Grupo Cielo</b> y creadora del Business Coffee: El Orden del Caos. Tras años como colaboradora, empresaria, proveedora y consultora de negocios, desarrolló una metodología propia para compartir esta sabiduría con las empresas y visionarios de una gran diversidad de disciplinas, giros e industrias.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="about">
			<div class="container-fluid">
				<div class="row">
					<div class=" box ml-md-auto">
						<div class="row">
							<div class="lottie-animation jael-anim " autoplay="true" data-animation-name="Jael" data-loop="0" > </div>


							<div class=" content">
								<h1 class='montserrat-medium txt-dark-gray pr-2'>Encontramos futuros potenciales en los que podrías no saber qué hacer <span style="color: #FFFFFF;">y vamos creando rutas para llevarlas a cabo.</span></h1>

								
								<div class="row">
									<div class="col-md-10 block">
										<div class="lottie-animation circulo " autoplay="true" data-animation-name="circulo" data-loop="0" > </div>
										<h2 class="txt-green montserrat-medium"> High Performance Coach </h2>
										<p class='paragraph txt-gray line-height-18'>Dirección para equipos que están ante un reto, dirigiéndolos al alto rendimiento y cumplimiento de objetivos estratégicos.</p>
									</div>

									<div class="col-md-10 block">
										<div class="lottie-animation circulo " autoplay="true" data-animation-name="circulo" data-loop="0" > </div>
										<h2 class="txt-green montserrat-medium"> Leadership Mentoring </h2>
										<p class='paragraph txt-gray line-height-18'>Acompañamiento para líderes de altos cargos, reforzándolos tras bambalinas para sostener equipos y <span style="color:#00AC99">proyectos ambiciosos</span>.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="agendar">
			<div class="lottie-animation linea-anim " autoplay="true" data-animation-name="linea-blanca-dcha" data-loop="0" > </div>
			<div class="container-fluid">
				<div class="row">
					<div class=" box">
						<div class="row">
							<div class="col-xl-5 col-lg-7 col-md-8 offset-md-1 ">
								<h1 class='txt-green montserrat-medium'>¿Estás listo para hacer lo que haga falta?</h1>

								<p class='paragraph txt-gray v2 mb-5'>Conectemos</p>
								<a href="" class="button ">
									Agenda tu cita
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="row media">
					<div class="col-md-12 col-lg-10 col-xl-8 mx-auto">
						<div class="row justify-content-center">
							<div class="col-md-3 col-7 redes">
								<div class="lottie-animation  " autoplay="true" data-animation-name="EODC" data-loop="0" > </div>

								<div class="title-box">
									<h1 class='txt-gray montserrat-medium'><p>Conoce mi <i>Business Coffee</i></p></h1>
								</div>

								<h2 class='txt-green cour'><p>El Orden del Caos</p></h2>
								<a href="">Reserva la sala</a>
								<a href="">Instagram</a>
								<a href="">Menú</a>
							</div>

							<div class="col-md-3 col-7 redes">
								<div class="lottie-animation  " autoplay="true" data-animation-name="unamos-puntos" data-loop="0" > </div>

								<div class="title-box">
									<h1 class='txt-gray montserrat-medium'><p>Unamos puntos</p></h1>
								</div>

								<h2 class='txt-green cour'><p>Suma de Talentos</p></h2>
								<a href="">Comunidad</a>
								<a href="">Instagram</a>
								<a href="">Podcast</a>
							</div>

							<div class="col-md-3 col-7 redes">
								<div class="lottie-animation  " autoplay="true" data-animation-name="Inspiracion" data-loop="0" > </div>

								<div class="title-box">
									<h1 class='txt-gray montserrat-medium'><p>Inspiración holística para volar ideas</p></h1>
								</div>

								<h2 class='txt-green cour'><p>Instagram</p></h2>
								<a href="">@jaelpreciat</a>
							</div>

							<div class="col-md-3 col-7 redes">
								<div class="lottie-animation  " autoplay="true" data-animation-name="Telefono" data-loop="0" > </div>

								<div class="title-box">
									<h1 class='txt-gray montserrat-medium'><p>Conectemos</p></h1>
								</div>

								<h2 class='txt-green cour'><p>Agenda una cita</p></h2>
								<a href="">WhatsApp</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="lottie-animation lineas-bottom " autoplay="true" data-animation-name="linea-verde-izq" data-loop="0" > </div>
		</section>
		


		<?php require("views/footer.view.php"); ?>	
		
		<!-- jQuery first, then Tether, then Bootstrap JS. -->
		<?php echo $jquery_js; ?>
		<?php echo $tether_js; ?>


		<!-- Javascripts own files  -->		
		<?php echo $own_file_js; ?>


		<?php echo $bootstrap_v4_js; ?>

		<?php echo $font_awesome_js; ?>
		
	</body>
</html>