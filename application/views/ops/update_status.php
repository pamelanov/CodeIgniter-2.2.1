<!DOCTYPE html>
<html>
<h1><?php echo $judul;?></h1>

<body>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/ops/student" > Student</a></li>
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/admin/refund" > Refund</a></li>
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/readFeedback" > Feedback</a></li>
</ul>
 <form name='update_status' action='<?php echo base_url();?>index.php/ops/student/createstatus' method='post' >
    <div id ="konten">
       
        <div class="form-group">
            <label for="idMurid">ID Murid</label>
            <input type="text" class="form-control" id="idMurid" placeholder="Masukkan ID Murid">
        </div>
        <div class="form-group">
            <label for="jam">Jam</label>
            <input type="text" class="form-control" id="jam" placeholder="Jam">
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="text" class="form-control" id="tanggal" placeholder="Tanggal">
        </div>
        <div class="form-group">
            <label for="idSales">ID Sales</label>
            <input type="text" class="form-control" id="idSales" placeholder="ID Sales">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" placeholder="Status">
        </div>
        
    </div>
    <button type="submit" class="btn btn-danger">Update Status</button>
</form>

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
    

</body>
</html>