<!-- //php $this->load->view('css/basic_css'); > -->

<!DOCTYPE html>
<html>
  <head>
    <title>����̼�</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">   
    <style>
     body
     {
        padding-top:60px;
     }
    </style>     
    <link href="/static/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">    
    
  </head>
  <body>
<!-- ������ ����� Start -->
<div class="navbar" class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
 
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
 
      <!-- Be sure to leave the brand out there if you want it shown -->
      <a class="brand" href="#">
      
      GOGO Racer
      <font color="red" size="3pt">
      <?php
      $flas_msg = $this->session->flashdata('message');
      
      if ($flas_msg) 
          echo $flas_msg."^^;;;";
      else
          echo $this->session->userdata('is_login');
      ?>
      </font>
      </a>
      <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse">
        <!-- .nav, .navbar-search, .navbar-form, etc -->
				      <div class="nav-collapse collapse">
				        <ul class="nav pull-right">
				            
				            <?php if($this->config->item('is_dev')){?>
				            	<li><a><font color="blue">(DEV Server)</font></a></li>
				            <?php
				        	}
				        	?>				         
				        	<?php
				        	if($this->session->userdata('is_login')){
				        	?>
				        		<li><a href="/auth/logout">�α׾ƿ�</a></li>
				        	<?php
				        	} else {
				        	?>
				        		<li><a href="/auth/login">�α���</a></li>
				        		<li><a href="/auth/register">ȸ������</a></li>
				        	<?php
				        	}
				        	?>
				        </ul>				        
				      </div>        
      </div>
 
    </div>
  </div>
</div>
<!-- ������ ����� End --> 
<!-- Bootstrap Start -->
<div class="container-fluid">
  <div class="row-fluid">


     