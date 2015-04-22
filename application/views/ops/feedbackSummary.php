
	<ul class="nav nav-tabs">
	  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/ops/student/searchSummary" > Student</a></li>
	  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" > Refund</a></li>
	  <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/ops/feedback/searchFeedback" > Feedback</a></li>
	</ul>
	
	<br/>
	
	<form class="form-inline" align="left" action='<?php echo base_url();?>index.php/ops/summary/searchStudent' method='post'>
	  <div class="form-group">
	    <label for="exampleInputName2">Ops ID</label>
	    <input type="text" class="form-control" name="id_sales" placeholder="Ops ID">
	  </div>
	  
	  <div class="form-group">
	    <label for="exampleInputName2">Periode Awal</label>
	    <input type="date" class="form-control" name="tanggal_awal">
	  </div>
	  
	  <div class="form-group">
	    <label for="exampleInputName2">Periode Akhir</label>
	    <input type="date" class="form-control" name="tanggal_akhir">
	  </div>
	  
	  <button type="submit" class="btn btn-default">Search</button>
	</form>


  