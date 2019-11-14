<?php 

require_once '../../_config/config.php' ;
require_once '../../_assets/libs/vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title; ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('_assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('_assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
 
 <!-- Custom styles for this page -->
  <script src="<?= base_url('_assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('_assets/libs/vendor/ckeditor/ckeditor/ckeditor.js') ?>"></script>
  <link rel="stylesheet" type="text/css" href="<?= base_url('_assets/vendor/DataTables/Bootstrap-4-4.1.1/css/bootstrap.min.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<?= base_url('_assets/vendor/DataTables/DataTables-1.10.20/css/dataTables.bootstrap4.min.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<?= base_url('_assets/vendor/DataTables/Buttons-1.6.1/css/buttons.bootstrap4.min.css') ?>"/>
 


</head>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

<?php   
require_once 'sidebar.php';
require_once 'topbar.php'; 
?>