<h1><?php echo $judul; ?></h1>

<div id="konten">
    <h3>Hasil Pencarian</h3>
  <?php
    echo "<table class='table table-bordered'>\n";
	echo "<tr valign='top'>\n";
	echo "<th>ID Sales</th>
        <th>Periode</th>
        <th>Target</th>
        <th>ID Supervisor</th>\n";
        
	echo "</tr>\n";
	

		echo "<tr valign='top'>\n";
		echo "<td>".$target->id_sales."</td>\n";
                echo "<td>".$target->periode."</td>\n";
                echo "<td>".$target->target."</td>\n";
                echo "<td>".$target->id_supervisor."</td>\n";
                
		echo "</td>\n";
		echo "</tr>\n";
    
	echo "</table>	";
	echo "<br/>";
        ?>
    
    <form name='editPerformance' action='<?php echo base_url();?>index.php/supervisor/performance/edit' method='post' >
		<div class="form-group">
		<label for="id_sales">	Enter Sales ID</label>
                        <input type='text' class="form-control" name='id_sales' placeholder="ID Sales">
                </div>
		<div class="form-group">
		<label for="periode">	Periode</label>
                        <input type='month' class="form-control" name='periode'>
                </div>
                <div class="form-group">
                	<label for="target">	Target</label>
                        <input type='text' class="form-control" name='target' placeholder="target">
                </div>
                <div class="form-group">
                	<label for="id_sv">	ID Supervisor</label>
                        <input type='text' class="form-control" name='id_supervisor' placeholder="ID supervisor">
                </div>
                        <div class="form-group"><button type="submit" class="btn btn-danger">Update</button></div>
</form>
</div>
    </html>