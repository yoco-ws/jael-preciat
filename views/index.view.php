<?php require_once('admin/config.php'); ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Title site</title>

		<meta property="og:url"                content="<?php echo $URL; ?>" />
		<meta property="og:type"               content="website" />
		<meta property="og:title"              content="Jael Preciat, Dot-Connetor" />
		<meta property="og:description"        content="Creadora del #BusinessCoffee El Orden del Caos, líder de un equipo multidisciplinario, Master Business Coach con decenas de casos de éxito y dot-connector por vocación en @sumadetalentos." />
		<meta property="og:image"              content="<?php echo $URL; ?>/img/jael-sharing.png" />

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

		<div class="container-fluid">
			<div class="row">
				<main class="col-12 col-md-7 col-lg-5 mx-auto order-2 order-md-1 text-card">
					<div class="row">
						<div class="col-12">
							<h1 class="quote">
								"Vale más administrar el Caos que forzar el Orden".
							</h1>
						</div>
					</div>
					<div class="row">
						<div class="sign col-4 col-md-3 ml-auto">
							<img src="<?php echo RUTA ?>/img/jael-sign.svg" alt="Jael" class="img-fluid">
						</div>
					</div>
					<div class="row">
						<div class="col-12 rich-text">
							Creadora del #BusinessCoffee <a href="https://elorderdelcaos.com" target="_blank"><u>El Orden del Caos</u></a>, líder de un equipo multidisciplinario, Master Business Coach con decenas de casos de éxito y dot-connector por vocación en @<a href="https://www.instagram.com/sumadetalentos/" target="_blank"><u>sumadetalentos</u></a>.
						</div>
					</div>
					<div class="row">
						<ul class="col-12 contatc-list-items">
							<li>
								<a href="https://api.whatsapp.com/send?phone=+529992690014" target="_blank">WhatsApp</a>
							</li>
							<li>
								<a href="https://www.instagram.com/jaelpreciat/" target="_blank">Instagram</a>
							</li>
							<li>
								<a href="https://open.spotify.com/show/651AhFYaO4T2IBAqeXoxQC?si=MC26hzQLQB6NejGKcnwHQw" target="_blank">Spotify</a>
							</li>
						</ul>
					</div>
					
				</main>
				<div class="col-12 col-md-5 order-1 order-md-2 animation-container">
					<div class="shape"></div>
					<div class="shape-border"></div>
				</div>
			</div>
		</div>

		
		
		<!-- jQuery first, then Tether, then Bootstrap JS. -->
		<?php echo $jquery_js; ?>
		<?php echo $tether_js; ?>


		<!-- Javascripts own files  -->		
		<?php echo $own_file_js; ?>


		<?php echo $bootstrap_v4_js; ?>

		<?php echo $font_awesome_js; ?>
		
	</body>
</html>