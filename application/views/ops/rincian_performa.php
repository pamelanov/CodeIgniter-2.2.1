<h1><?php echo $judul; ?></h1>

<div id="konten">
<h3>Periode: <span class="label label-primary">
<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>

<?php echo " " . date("F Y", strtotime(date('20y-m'))); ?>
                                            
                                            </span></h3>


<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading"><center>Rincian Performa Untuk Status 8 dan 9</center></div>
<?php


	
	echo "<table class='table table-bordered'>\n";    
	echo "<tr>\n";
        echo "
	<th><center>#</center></th>\n
        <th><center>Tanggal Pengisian</center></th>\n
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
                    $tanggal = $r->tanggal;
                    $awal = $r->periode_awal;
                    $akhir = $r->periode_akhir;
				echo "<td>". $rank ."</td>\n";
				echo "<td>".date("j F Y", strtotime($tanggal))."</b>\n";
				echo "<td>".$r->id_invoice."</td>\n";
				echo "<td>".$r->id_murid."</td>\n";
				echo "<td>".$r->nama_murid."</td>\n";
                                echo "<td>".date("j F Y", strtotime($awal))." - ".date("j F Y", strtotime($akhir))."</td>\n";
                                echo "<td>".$r->jumlah_jam."</td>\n";
				echo "</td>\n";
				echo "</tr>\n</strong>";
				$rank++;
			}
        }
    
	echo "</table>	";
        
	?>
</div>
<!--
<div class="panel panel-primary">
    <div class="panel-heading"><center>Rincian Performa Untuk Recurrings</center></div>
-->
    <?php
/*

	
	echo "<table class='table table-bordered'>\n";    
	echo "<tr>\n";
        echo "
	<th><center>#</center></th>\n
        <th><center>Tanggal Pengisian</center></th>\n
        <th><center>ID Kelas</center></th>\n
	<th><center>Masa Belajar</center></th>\n
        <th><center>Jumlah Jam</center></th>\n";
        
	echo "</tr>\n";
        
        $rank = 1;
        if (!empty($recurrings)) {
	    echo "<tr valign='top'>\n";
                foreach($recurrings as $r){
                    $tanggal = $r->tanggal;
                    $awal = $r->periode_awal;
                    $akhir = $r->periode_akhir;
				echo "<td>". $rank ."</td>\n";
				echo "<td>".date("j F Y", strtotime($tanggal))."</b>\n";
				echo "<td>".$r->id_kelas."</td>\n";
                                echo "<td>".date("j F Y", strtotime($awal))." - ".date("j F Y", strtotime($akhir))."</td>\n";
                                echo "<td>".$r->jumlah_jam."</td>\n";
				echo "</td>\n";
				echo "</tr>\n</strong>";
				$rank++;
			}
        }
    
	echo "</table>	";
	*/
    ?>    
<!-- </div> -->

  <a href="<?php echo base_url(); ?>index.php/dashboard/performance" >
    <button type="submit" class="btn btn-danger">
	<span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Kembali</button> </a>
</div>