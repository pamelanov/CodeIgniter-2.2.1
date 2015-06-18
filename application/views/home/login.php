<?php
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.
?>
<!DOCTYPE html>
<html lang="en">
    
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	
    </div>
	<a href="<?php echo base_url(); ?>">
	<ul class="nav navbar-nav navbar-left">
		<div class="page-header" id="page-header">
			<!-- <h1><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> Sistem Informasi Customer Tracking Ruangguru</h1>-->
			<img src="<?php echo base_url(); ?>assets/images/header-logo.png" height="40px">
			<a href="<?php echo base_url(); ?>">
			<label id="juduldepan">Sistem Informasi Customer Tracking Ruangguru</label>
			</a>
		</div>
	</ul>
	</a>
	
      <ul class="nav navbar-nav navbar-right" id="login">
	
         <form name='login' class="navbar-form navbar-right" role="search"
	       action='<?php echo base_url();?>index.php/template/ceklogin' method='post'>
        <div id="label-login">
	<div class="form-group">
			<label for="exampleInputEmail1">ID</label><br/>	
			<input type='text' class="form-control" name='id' placeholder="Enter ID">
			</div>
	<div class="form-group">
			<label for="exampleInputPassword1">Password </label><br/>
			<input type="password" class="form-control" name='password' placeholder="Password">
			</div>
	
        <button type="submit" class="btn btn-info">
			<span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>  Log in
	</button></div>
	
      </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--
<div class="container">
<div class="jumbotron">
  <div class="page-header">
  <h1>Selamat Datang di <small>SICuT Ruangguru</small></h1>
</div>

</div>
</div>
-->


<nav class="navbar navbar-inverse navbar-fixed-bottom">
            <div id="footer-login">
		<center>Developed by Propensi B01</center>
	    </div>
</nav>
   
</html>
