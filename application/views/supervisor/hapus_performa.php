<h1><?php echo $judul; ?></h1>

<div id ="konten-kecil">
<form name='searchSales' action='<?php echo base_url();?>index.php/supervisor/performance/cariHapus' method='post' >
		<div class="form-group">
		<label for="id_sales">ID Sales</label>
                <?php echo '<select class="js-example-basic-single" name="id_sales" required>';
			 foreach($ops as $x) {
			   echo "<option value='" . $x->id_acc . "'>" . $x->id_acc . ": " . $x->nama . "</option>";
			 }  
		      echo '</select>';
	       ?>
                </div>
		<div class="form-group">
		<label for="periode">	Periode(*)</label>
                        <input type='month' class="form-control" name='periode' value=<?php echo date("20y-m") ?> required>
                </div>
                        <button type="submit" class="btn btn-danger">
			 <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
</form>
		
</div>

