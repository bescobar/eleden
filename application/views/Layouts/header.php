<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>El Edén</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.dataTables.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/leaflet.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/leaflet.extra-markers.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fuente.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/timeliner.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/daterangepicker.min.css">
    <!-- FULL CALENDAR -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fullcalendar.css">
    
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fullcalendar/daygrid/main.css">
</head>
<body>
<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light text-center">
    <div class="">
      <a href="<?php echo base_url("index.php/home")?>">
        <img src="<?php echo base_url(); ?>assets/images/user.png" alt="..." width="100" class="">
      </a>
    </div>
      <div class="media-body">
        <p class="font-weight-bold m-0"><?php echo $this->session->userdata('name') ?></p>
        <h4 class="m-0"></h4>
        <p class="font-weight-light text-muted mb-0 "><?php echo $this->session->userdata('user') ?></p>
      </div>
  </div>

  <p class="font-weight-bold text-uppercase px-3 small pb-4 mb-0">Menu</p>
  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="<?php echo base_url("index.php/home")?>" class="nav-link text-dark bg-light">
      	<i class="fa fa-home mr-3 text-primary fa-1x"></i>Home
      </a>
    </li>
    <li class="nav-item">
      <a href="<?php echo base_url("index.php/pedidos")?>" class="nav-link text-dark">
        <i class="fas fa-calendar-week mr-3 text-primary fa-1x"></i>Plan de trabajo
      </a>
    </li>
    <li class="nav-item">
      <a href="<?php echo base_url("index.php/pedidos")?>" class="nav-link text-dark">
      	<i class="fas fa-coins mr-3 text-primary fa-1x"></i>Finanzas
      </a>
    </li>
    <li class="nav-item">
      <a href="<?php echo base_url("index.php/visitas")?>" class="nav-link text-dark">
        <i class="fas fa-users mr-3 text-primary fa-1x"></i>Membrecia
      </a>
    </li>
    <li class="nav-item">
      <a href="<?php echo base_url("index.php/grupos")?>" class="nav-link text-dark">
        <i class="fas fa-network-wired mr-3 text-primary fa-1x"></i>Grupos
      </a>
    </li>
    <li class="nav-item">
      <a href="<?php echo base_url("index.php/visitas")?>" class="nav-link text-dark">
        <i class="fas fa-archive mr-3 text-primary fa-1x"></i>Archivos
      </a>
    </li>
    <li class="nav-item">
      <a href="<?php echo base_url("index.php/out_session")?>" class="nav-link text-dark">
        <i class="fas fa-sign-out-alt mr-3 text-primary fa-1x"></i>Cerrar sesion
      </a>
    </li>
  </ul>
</div>
<!-- End vertical navbar -->
<div class="page-content" id="content">

<nav id="navbar-example2" class="navbar navbar-light shadow-sm bg-white">
<a id="sidebarCollapse"><i class="fa fa-bars mr-2"></i></a>
  <ul class="nav nav-pills">

  </ul>
</nav>
