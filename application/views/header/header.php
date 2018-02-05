<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SLTransaction</title>
    <!--Import Google Icon Font-->    
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
    <!--Import materialize.css-->    
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.css"  media="screen,projection"/>
    <!--CHOSEN CONTROLS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.css">
	<!--DATATABLES-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/dataTables.foundation.css" >
    <!--Mis estilos css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/_styles.css"  media="screen,projection"/>
    <!--DATEPICKERS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/daterangepicker.css" >
</head>
<body>
	<header class="demo-header mdl-layout__header">
		<nav class="nav-extended">
			<div class="menu-center">
				<div class="nav-wrapper">
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul id="nav-mobile" class="center hide-on-med-and-down">
					<?php if ($menu_usuario) { echo $menu_usuario; } ?>
				</ul>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="#">Cerrar sesión</a></li>
				</ul>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="#"><i class="material-icons">settings</i></a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<?php if ($menu_usuario) { echo $menu_usuario; } ?>
					<li><a href="#"><i class="material-icons left">settings</i>Cerrar sesión</a></li>
				</ul>
				</div>		
			</div>
		</nav>
	</header>