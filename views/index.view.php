<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title> <?php echo $page['titulo'] ?> </title>

		<meta property="og:url"                content="<?php echo $URL; ?>" />
		<meta property="og:type"               content="website" />
		<meta property="og:title"              content="<?php echo $page['titulo'] ?> " />
		<meta property="og:description"        content="<?php echo $page['cuerpo'] ?>  " />
		<meta property="og:image"              content="<?php echo $page['imagen']['data']['full_url'] ?>" />
		<meta name="root-url" content="<?php echo RUTA ?>" />
		<?php echo $favicon; ?>
		<?php echo $normalize_css; ?>
		<?php echo $boostrap_v4_css ?>

		<!-- Font awesome -->
		<?php echo $font_awesome_css; ?>
		<!-- CSS own files -->
		<?php echo $own_file_css; ?>
		
		<?php echo $google_analitycs; ?>
	</head>
	<body>

		<div class="container-fluid px-0 scrolling-slider">
			<div class="page-slide first-slide" id="first-slide">
				<div class="background-round">
					<div class="content">
						<div class="row name-container">
							<div class="col-12 col-md-6 offset-md-3 text-center text-md-left animation-title">
								<h1 class="main-name">
									<?php echo $page['nombre'] ?>
								</h1>
							</div>
						</div>
						<div class="row">
							<figure class="col-12 col-md-7">
								<img src="<?php echo RUTA; ?>img/jael_pic.png" alt="" class="img-fluid w-100" width="10" height="10">
							</figure>
							<main class="col-12 col-md-4 main-text">
								<h3 class="h3">
									<?php echo $page['titulo_sec1'] ?>
								</h3>
								<div class="mt-4 mt-md-0 font-base">
									<?php echo $page['cuerpo_sec1'] ?>
								</div>
								<a href="#" class="anchor">
									<?php echo $page['texto_del_ancla'] ?>
								</a>

								<img src="<?php echo RUTA; ?>img/dots-star.svg" alt="" width="10" height="10" class="star-img">
							</main>
						</div>
					</div>
				</div>
				<div class="background-square"></div>
			</div>
			<div class="page-slide second-slide" id="second-slide">
				<div class="background-round">
					<div class="content">
						<div class="row">
							<div class="col-7 col-md-3 mx-auto mb-5 lottie-animation" data-animation-name="jaelcara" data-loop="0" speed="1" > </div>
							<!-- <figure class="col-7 col-md-3 mx-auto mb-5">
								<img src="<?php echo RUTA; ?>img/jael-cartoon.svg" alt="" class="img-fluid w-100">
							</figure> -->
						</div>
						<div class="row mb-4">
							<div class="col-12 col-md-6 px-5 px-md-4 mx-auto">
								<h2 class="h2">
										<?php echo $page['titulo_sec2'] ?>
								</h2>
							</div>
						</div>
						<div class="row align-items-center">
							<div class="col-12 col-md-4 ml-md-auto px-5 px-md-4">
								<div class="font-base">
									<?php echo $page['cuerpo_sec2'] ?>
								</div>
							</div>
							<div class="col-10 col-md-3 mx-auto mr-md-auto offset-md-1 people-connected-animation animation-mouse" id="people-connected-animation">
								<img src=" <?php echo $page['imagen_sec2']['data']['full_url'] ?> " alt="" class="img-fluid first-layer">
								<img src=" <?php echo $page['imagen2_sec2']['data']['full_url'] ?> " alt="" class="img-fluid second-layer">
							</div>
						</div>
					</div>
				</div>
				<div class="background-square"></div>
			</div>
			<div class="page-slide third-slide" id="third-slide">
				<div class="background-round">
					<div class="content">
						<div class="row">
							<div class="col-12 col-md-4 mx-auto mb-5 d-none d-md-block">
								<img src="<?php echo RUTA; ?>img/sol.svg" alt="" class="img-fluid w-100">
							</div>
						</div>
						<div class="row">
							<div class="col-9 col-md-5 mx-auto mt-3">
								<h2 class="h2 white">
									<?php echo $page['titulo_sec3'] ?>
								</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-10 col-md-6 mx-auto font-base text-center white mt-5">
								<?php echo $page['cuerpo_sec3'] ?>
							</div>
							<div class="col-5 col-md-2 mx-auto lines-and-stars my-4 fadeInRight animation-mouse">
								<img src=" <?php echo $page['imagen_sec3']['data']['full_url'] ?> " alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="background-square"></div>
			</div>
			<div class="page-slide fourth-slide" id="fourth-slide">
				<div class="background-round"></div>
				<div class="background-square"></div>
				<div class="content">
					<div class="row">
						<div class="col-11 col-md-6 mx-auto mb-5">
							<h2 class="h2">
								<?php echo $page['titulo_sec4'] ?>
							</h2>
						</div>
					</div>
					<div class="row align-items-end">
						<div class="col-11 col-md-4 mx-auto ml-md-auto mr-md-0 mb-5 px-md-5">
							<div class="font-base">
								<?php echo $page['cuerpo_sec4'] ?>
							</div>
						</div>
						<div class="col-11 col-md-3 mx-auto ml-md-0 mr-md-auto lottie-animation" data-animation-name="jaels-cup" data-loop="-1" speed="1">
						</div>
					</div>
					<div class="row list-content">
						<div class="col-11 col-lg-10 mx-auto">
							<div class="row">

								<?php foreach ($page['iconos'] as $key => $icono): ?>
									<div class="col-12 col-md-3 icon-card">
										<div class="row">
											<div class="col-6 mx-auto mb-4 lottie-animation" data-animation-name="<?php echo $icono['iconos_id']['animation'] ?>" data-loop="0" speed="1"></div>
										</div>
										<div class="row">
											<p class="col-12 text">
												<?php echo $icono['iconos_id']['titulo'] ?>
											</p>
										</div>
										<div class="row">
											<h6 class="col-12 h6">
												<?php echo $icono['iconos_id']['subtitulo'] ?>
											</h6>
										</div>
										<div class="row">
											<ul class="col-12 list-data">
												<?php foreach ($icono['iconos_id']['anclas'] as $key => $ancla): ?>
													<li>
														<a target="_blank" href=" <?php echo $ancla['anclas_id']['url'] ?> ">
															<?php echo $ancla['anclas_id']['titulo'] ?>
														</a>
													</li>
												<?php endforeach ?>												
											</ul>
										</div>
									</div>
								<?php endforeach ?>								
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
				<span>Jael Preciat</span>
			</footer>
		</div>

		


		

		
		
		<!-- jQuery first, then Tether, then Bootstrap JS. -->
		<?php echo $jquery_js; ?>
		<?php echo $tether_js; ?>


		<!-- Javascripts own files  -->		
		<?php echo $own_file_js; ?>


		<?php echo $bootstrap_v4_js; ?>

		<?php echo $lottie_js; ?>
		
	</body>
</html>