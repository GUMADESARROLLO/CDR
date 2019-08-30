<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Llamadas</title>
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

    <style>
        .modal { width: 70% !important ; height: 80% !important ;}
    </style>
</head>
<body>
	<header class="demo-header mdl-layout__header">
		<nav class="nav-extended">
			<div class="menu-center">
				<div class="nav-wrapper">
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="center hide-on-med-and-down">
                        <li><a id="resumen" href="#">Home</a></li>
                        <li><a id="ProMes" href="#">Promedio del Mes</a></li>

                    </ul>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="salir">Cerrar sesión</a></li>
                    </ul>

                </div>
			</div>
		</nav>
	</header>