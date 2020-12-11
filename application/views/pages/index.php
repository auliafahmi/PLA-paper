<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departemen Pendidikan Ilmu Komputer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="shortcut icon" href="<?= base_url(); ?>favicon.png" type="image/x-icon">
</head>
<body> 
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="<?= base_url(); ?>">
    <img src="<?= base_url(); ?>assets/images/logo-upi.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    Departemen Pendidikan Ilmu Komputer
  </a>
  <!-- <?php if(!$this->session->userdata('logged_in')): ?>
    <a href="<?= base_url(); ?>users/login" class="btn btn-primary">Login</a>
  <?php endif; ?>
  <?php if($this->session->userdata('logged_in')): ?>
    <a href="users/logout" class="btn btn-danger">Logout</a>
  <?php endif; ?> -->
</nav>

<h2 class="text-center"><?= $title; ?> </h2>
<p class="text-center"><?= $p; ?></p>

<div class="container">
<div class="row">
    <div class="col-md-6">
        <canvas id="hr-chart" width="500"></canvas>
        <canvas id="bar-chart"></canvas>

    </div>
    <div class="col-md-6">
        <canvas id="doughnut-chart"></canvas>
        <canvas id="line-chart"></canvas>
    </div>
    <!-- <div class="col-md-8">
   </div> -->
</div>
</div>