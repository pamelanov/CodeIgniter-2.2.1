<h1><?php echo $judul; ?></h1>

 <div class="alert alert-info" role="alert">
 <p><h5>Pencapaian target sejauh ini:  <?php echo $performa->actual; ?> </h5></p>
 <p><h5>Periode:  <?php echo date("Y-m"); ?></h5></p>
  <p><a href="<?php echo base_url(); ?>index.php/dashboard/summary" >
    <button type="submit" class="btn btn-primary">
    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Lihat Rincian</button> </a>
 </p>

</div>
 

  <div class="progress">
  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
    80% Complete
  </div>
</div>

<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading"><center>Tabel Peringkat</center></div>
<?php


	
	echo "<table class='table table-bordered'>\n";    
	echo "<tr>\n";
        echo "
	<th><center>#</center></th>\n
	<th><center>ID Sales</center></th>\n
        <th><center>Periode</center></th>\n
        <th><center>Target<c/enter></th>\n
        <th><center>So far</center></th>\n";
        
	echo "</tr>\n";
	$rank = 1;

	    echo "<tr valign='top'>\n";
                foreach($target as $t){
			if ($performa->id == $t->id) {
				echo "<td><b>". $rank ."</b></td>\n";
				echo "<td><b>".$t->id_sales."</b></td>\n";
				echo "<td><b>".$t->periode."</b></td>\n";
				echo "<td><b>".$t->target."</b></td>\n";
				echo "<td><b>".$t->actual."</b></td>\n";
				echo "</td>\n";
				echo "</tr>\n</strong>";
				$rank++;
			}
		    
		    else {
			echo "<td>". $rank ."</td>\n";
			echo "<td>".$t->id_sales."</td>\n";
			echo "<td>".$t->periode."</td>\n";
			echo "<td>".$t->target."</td>\n";
			echo "<td>".$t->actual."</td>\n";
			echo "</td>\n";
			echo "</tr>\n";
			$rank++;	
		    }
                }
	echo "</table>	";
	?>
</div>