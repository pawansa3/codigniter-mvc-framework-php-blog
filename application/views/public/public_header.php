<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Blog</title>
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
.navbar-default .navbar-nav>li>a {
    color: #777;
    font-weight: bold;
}
#para1 {
  font-size: 25px; 
  font-family: cursive;
}
</style>

</head>
<body style="background:#d8cece;">

<nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="font-weight: bold;">My Blog</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href="<?= base_url() ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li class=""><a href="<?= base_url().'users/about' ?>"><span class="glyphicon glyphicon-user"></span> About</a></li>
        <li class=""><a href="<?= base_url().'users/contact' ?>"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
        <li>
        <?= form_open('users/search_article',['class'=>'navbar-form navbar-left']) ?>
  				<div class="input-group">
            <?= form_input(['name'=>'search_query','class'=>'form-control','placeholder'=>'Search...']) ?>
  					<div class="input-group-btn">
              <?= form_button(['name'=>'s_submit','type'=>'submit','value'=>'true','class'=>'btn btn-default','content'=>'
              <i class="glyphicon glyphicon-search"></i>']) ?>
  					</div>
  				</div>
        <?= form_close() ?>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= base_url('login') ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
