<!DOCTYPE html>
<html lang="en">
    
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

</html>
