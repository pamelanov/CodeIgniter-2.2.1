<!DOCTYPE html>
<html lang="en">
    
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	
    </div>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
	
         <form name='login' class="navbar-form navbar-right" role="search"
	       action='<?php echo base_url();?>index.php/template/ceklogin' method='post'>
        <div class="form-group">
			<label for="exampleInputEmail1">ID</label><br/>	
			<input type='text' class="form-control" name='id' placeholder="Enter ID">
			</div>
	<div class="form-group">
			<label for="exampleInputPassword1">Password </label><br/>
			<input type="password" class="form-control" name='password' placeholder="Password">
			</div>
	
        <button type="submit" class="btn btn-warning">
			<span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>  Log in
	</button>
	
      </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div id="loginbody">
	Selamat datang di SICuT Ruangguru.
</div>
   
<!-- <nav class="navbar navbar-default">
  <div class="container-fluid">

    <!-- Collect the nav links, forms, and other content for toggling -->
    <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <form name='login' "navbar-form navbar-right" role="login"
	      action='<?php echo base_url();?>index.php/template/ceklogin' method='post' >
			<div class="form-group">
			<label for="exampleInputEmail1">ID</label>
			<input type='text' class="form-control" name='id' placeholder="Enter ID">
			</div>
			<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" name='password' placeholder="Password">
			</div>
		<button type="submit" class="btn btn-warning">
			<span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>  Submit
		</button>
	</form>
       
      </ul>
    </div><!-- /.navbar-collapse -->
  <!-- </div><!-- /.container-fluid 
</nav>   -->
<!--
    
<div id="text">
	<h2>Please sign-in.</h2>
	<form name='login' action='<?php echo base_url();?>index.php/template/ceklogin' method='post' >
		<div class="form-group">
			<label for="exampleInputEmail1">ID</label>
			<input type='text' class="form-control" name='id' placeholder="Enter ID">
		</div>
		 <div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" name='password' placeholder="Password">
		</div>
		<button type="submit" class="btn btn-warning">
			<span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>  Submit
		</button>
	</form>
</div>
-->
</html>
