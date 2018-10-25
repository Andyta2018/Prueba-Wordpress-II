<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
<body>
	<header>
		<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id, 'full');
		?>
		<!-- Sección 01: Navbar -->
		<div class="container containernavbar">
			<nav class="navbar_header">
				<a class="navbar-brand" href="#">
		    		<img src="<?php echo $logo[0]; ?>" alt="">
		  		</a>
		  		<ul class="nav_menu">
		  			<li><a href="#seccionfooter">RESERVAS</a></li>
		  			<li><a href="#seccion06">CARTA</a></li>
		  			<li><a href="#seccion03">ESPECIALIDADES</a></li>
		  			<li><a href="#seccion02">RESTAURANTE</a></li>
		  		</ul>
				
				<div class="nav_header">
					<div class="row nav_titulo">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" >
							<h1>Il Fonti di Modena</h1>	
						</div>		
					</div>
					
				</div>
			</nav>
		</div>
	</header>