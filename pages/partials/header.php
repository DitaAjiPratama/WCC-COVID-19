<?php
  include "config/db.php";
  ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>WCC | COVID-19</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!-- sweetalert2 -->
  <link href="vendor/sweetalert2/sweetalert2.css" rel="stylesheet" type="text/css">
  <script src="vendor/sweetalert2/sweetalert2.all.js"></script>

  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="https://www.chartjs.org/samples/latest/utils.js"></script>


</head>

<body id="page-top" class="sidebar-toggled">

 <!-- Page Wrapper -->
 <div id="wrapper">

<?php include "pages/partials/sidebar.php"; ?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<?php include "pages/partials/topbar.php"; ?>
