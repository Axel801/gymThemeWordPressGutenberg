<!doctype html>
<html lang='en' >
<head >
	<meta charset="UTF-8" >
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" >
	<meta http-equiv="X-UA-Compatible" content="ie=edge" >
	<?php wp_head(); ?>
</head >
<body class='home page' >


<nav class="navbar-header navbar navbar-expand-lg fixed-top navbar-dark bg-dark" >
	<div class="container-fluid" >
		<a class="navbar-brand" >
			<img src="<?= get_theme_mod( 'gymTheme_header_logo' ) ?>" >
		</a >
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" >
			<span class="navbar-toggler-icon" ></span ></button >
		<div class="collapse navbar-collapse" id="navbarCollapse" >
			<ul class="navbar-nav ml-auto" >
				<li class="nav-item active" ><a class="nav-link" href="#" >Inicio</a ></li >
				<li class="nav-item" ><a class="nav-link" href="#" >Nosotros</a ></li >
				<li class="nav-item" ><a class="nav-link" href="#" >Galería</a ></li >
				<li class="nav-item" ><a class="nav-link" href="#" >Blog</a ></li >
				<li class="nav-item" ><a class="nav-link" href="#" >Contacto</a ></li >
			</ul >
		</div >
	</div >
</nav >