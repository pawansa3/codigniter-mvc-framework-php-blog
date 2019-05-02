<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
  <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>  
  <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>



<style type="text/css">
 
 .tooltiptext {
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: relative;
    z-index: 1;
    margin-top:5px; 
}
 .tooltiptext::after {
    content: "";
    position: absolute;
    bottom: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: transparent transparent black transparent;
}
hr{
    border-top: 1px solid #000;
}

</style>

</head>
<body style="background:url(<?= base_url('assets/images/1.jpg1') ?>)">

<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">My Blog Admin Panel</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?= base_url('admin/dashboard') ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= base_url('login/admin_logout'); ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        <!-- <li><?= anchor('login/admin_logout','  Logout','><span class="glyphicon glyphicon-log-in"></span'); ?></li> -->
      </ul>
    </div>
  </div>
</nav>
