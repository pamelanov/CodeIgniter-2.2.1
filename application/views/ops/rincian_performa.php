<h1><?php echo $judul; ?></h1>

<div id="konten">

<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading"><center>Rincian Performa</center></div>
<?php


	
	echo "<table class='table table-bordered'>\n";    
	echo "<tr>\n";
        echo "
	<th><center>#</center></th>\n
        <th><center>Tanggal Pengisian Untuk Status 8</center></th>\n
        <th><center>No Invoice</center></th>\n
	<th><center>ID Murid</center></th>\n
        <th><center>Nama Murid</center></th>\n
        <th><center>Periode</center></th>\n
        <th><center>Jumlah Jam</center></th>\n";
        
	echo "</tr>\n";
        
       
	$rank = 1;
        if (!empty($rincian[0]->id)) {
	    echo "<tr valign='top'>\n";
                foreach($rincian as $r){
				echo "<td>". $rank ."</td>\n";
				echo "<td>".$r->tanggal."</b>\n";
				echo "<td>".$r->id_invoice."</td>\n";
				echo "<td>".$r->id_murid."</td>\n";
				echo "<td>".$r->nama_murid."</td>\n";
                                echo "<td>".$r->periode_awal." - ".$r->periode_akhir."</td>\n";
                                echo "<td>".$r->jumlah_jam."</td>\n";
				echo "</td>\n";
				echo "</tr>\n</strong>";
				$rank++;
			}
        }
    
	echo "</table>	";
        
	?>
</div>

  <a href="<?php echo base_url(); ?>index.php/dashboard/performance" >
    <button type="submit" class="btn btn-danger">
	<span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Kembali</button> </a>
</div>