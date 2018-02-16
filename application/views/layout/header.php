<!DOCTYPE html>
<html>
<head>
	<title>Seminar Nasional AMCC 2018</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard Semnas</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>">
   <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css'); ?>">
  <!-- custom css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/css/custom.css')  ?>">

</head>
<body>

    <nav class="atas navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="index.html"><i class="fa fa-snowflake-o" aria-hidden="true"></i> Weddingku</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="booking.html">How To Order</a></li>
            <li><a href="#">Honeymoon</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?= site_url('admin/login')  ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

  <header class="site-header">
    <div class="container-fluid">
      <a href="/"><img src="<?= base_url('assets/dist/img/amcc-logo.png') ?>" alt=""></a>
      <h2>Seminar Nasional <span class="amp">&amp;</span> Data Mining Bootcamp</h2>
      <h1>Introduction Basic Research<br>on Statistical & Machine Learning<br>at Scale</h1>
      <h3><span class="date">20 Mei 2017</span><span class="venue">Universitas Amikom</span></h3>
      <div class="cta">
        <a href="faqs.php" class="btn btn-success btn-lg first">F.A.Q</a>
        <a href="register.php" class="btn btn-success btn-lg second">Daftar Sekarang <i class="ion-ios-arrow-thin-right"></i></a>
      </div>
  </header>