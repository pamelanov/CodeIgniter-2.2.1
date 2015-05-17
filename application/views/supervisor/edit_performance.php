
    <h1><?php echo $judul; ?></h1>
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
                        <button type="submit" class="btn btn-danger">
			 <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
</form>
		
</div>

