<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title> <?php echo $page['titulo']  ?> </title>

		<meta property="og:url"                content="<?php echo $URL; ?>" />
		<meta property="og:type"               content="website" />
		<meta property="og:title"              content="<?php echo $page['titulo']  ?>" />
		<meta property="og:description"        content="<?php echo $page['descripcion']  ?>" />
		<meta property="og:image"              content="<?php echo $page['imagen']['data']['full_url']  ?>" />
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
					<img src="<?=RUTA?>sprites/Logosobreblanco.svg" alt="" class=' scrollTop img-fluid'>
				</div>
				<div class="row">
					<div class="col-md-8 col-lg-6 col-xl-4 content offset-md-1">
						<h1 class='montserrat-medium txt-green animation-text'> <?php echo $page['titulo_intro']  ?> </h1>

						<div class="form">
							<div class="paragraph body-intro line-height-18 animation-text">
								<?php echo $page['cuerpo_intro']  ?> 
							</div>

							<h2 class='txt-green cour-bold paragraph line-height-18 animation-text'><?php echo $page['titulo_formulario']  ?> </h2>

							<form action="<?=RUTA?>helpers/Contact.helper.php" method="POST" id="form-contact" >
								<div class="form-group line-bottom">
									<input type="text" name="name" placeholder="Nombre completo">
								</div>

								<div class="form-group line-bottom">
									<input type="email" name="email" placeholder="Correo electrónico">
								</div>

								<div class="alert alert-danger paragraph txt-green  cour-bold" style="display:none;"></div>
								<div class="form-bottom mt-5 mt-md-0">
									<button class='button small' type="submit"> <?php echo $page['boton_formulario']  ?> </button>
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
						<h1 class='montserrat-semibold text-md-right txt-green animation-text ' offset="200"><?php echo $page['titulo_ss']  ?></h1>
					</div>

					<div class="col-md-5 parrafo">
						<div class="paragraph txt-gray v2 animation-text " offset="200">
							<?php echo $page['cuerpo_ss']  ?>
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
							<div class="lottie-animation jael-anim " autoplay="false" data-animation-name="Jael" offset="-300" data-loop="0" > </div>

							<div class=" content">
								<h1 class='montserrat-medium txt-dark-gray pr-2 animation-text' >	<?php echo $page['titulo_ts']  ?></h1>
								<div class="row">
									<?php foreach ( $page['bloques'] as $key => $bloque ): ?> 
										<div class="col-md-10 block">
											<div class="lottie-animation circulo " autoplay="false" data-animation-name="circulo" data-loop="0" > </div>
											<h2 class="txt-green montserrat-medium animation-text"> <?php echo $bloque['bloques_id']['titulo']  ?> </h2>
											<div class='paragraph txt-gray line-height-18 animation-text'><?php echo $bloque['bloques_id']['cuerpo']  ?></div>
										</div>
									<?php endforeach ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="agendar">
			<div class="lottie-animation linea-anim " autoplay="false" data-animation-name="linea-blanca-dcha" data-loop="0" > </div>
			<div class="container-fluid">
				<div class="row">
					<div class=" box">
						<div class="row">
							<div class="col-xl-5 col-lg-7 col-md-8 offset-md-1 ">
								<h1 class='txt-green montserrat-medium animation-text' offset="0"><?php echo $page['titulo_cs']  ?></h1>

								<p class='paragraph txt-gray v2 mb-5 animation-text'><?php echo $page['subtitulo']  ?></p>
								<a href="" class="button ">
									<?php echo $page['boton_cs']  ?>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="row media">
					<div class="col-md-12 col-lg-10 col-xl-8 mx-auto">
						<div class="row justify-content-center">

							<?php foreach ( $redes as $key => $red ): ?> 
								<div class="col-md-3 col-7 redes">
									<div class="lottie-animation  " autoplay="true" offset="0" data-animation-name="<?php echo $red['animacion'] ?>" data-loop="0" > </div>

									<div class="title-box">
										<h1 class='txt-gray montserrat-medium animation-text'><?php echo $red['titulo'] ?></h1>
									</div>

									<h2 class='txt-green cour animation-text'><p><?php echo $red['subtitulo'] ?></p></h2>

									<?php foreach ( $red['anclas'] as $key => $ancla ): ?> 
										<a href="<?php echo $ancla['url']?>" class='ancla animation-text'><?php echo $ancla['titulo']  ?></a>
									<?php endforeach ?>
								</div>
							<?php endforeach ?>

						</div>
					</div>
				</div>
			</div>
			<div class="lottie-animation lineas-bottom " autoplay="false" data-animation-name="linea-verde-izq" data-loop="0" > </div>
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