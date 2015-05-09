
    <h1><?php echo $judul; ?></h1>
 <ul class="nav nav-tabs">
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/supervisor/performance" > Create</a></li>
  <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/supervisor/performance/showEdit" > Edit </a></li>
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/supervisor/performance/overall" > Overall Performance</a></li>
 </ul>
 <div id ="konten">
<form name='searchSales' action='<?php echo base_url();?>index.php/supervisor/performance/findTarget' method='post' >
		<div class="form-group">
		<label for="id_sales">ID Sales</label>
                      <select class="form-control" name="id_sales" placeholder="Pilih ID Sales">
			  <?php
			      foreach ($ops as $op) {
			      echo "<option>" . $op->id_acc . "</option>";
			      }
			  ?>
		       </select>
                </div>
		<div class="form-group">
		<label for="periode">	Periode</label>
                        <input type='month' class="form-control" name='periode'>
                </div>  
                        <button type="submit" class="btn btn-danger">Search</button>
</form>
		
</div>

