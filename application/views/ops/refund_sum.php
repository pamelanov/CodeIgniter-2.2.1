<h1><?php echo $judul;?></h1>
<div id="konten">
<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

if (count($refund)){
	
	
	echo '<div class="panel panel-primary">
	<div class="panel-heading"><center>Rangkuman Refund</center></div>';
	echo "<table class='table table-bordered'>\n";
	echo "<tr valign='top'>\n";
	echo "<th><center>Tanggal</center></th>
		<th><center>No Invoice</center></th>
		<th><center>ID Sales</center></th>
		<th><center>Jam Hilang</center></th>
		<th><center>Alasan</center></th>
		<th><center>Action</center></th>
		<th><center>Selisih</center></th>\n";
	echo "</tr>\n";
	
	foreach ($refund as $list){
		echo "<tr valign='top'>\n";
		echo "<td>".$list->tanggal."</td>\n";
                echo "<td>".$list->no_invoice."</td>\n";
                echo "<td>".$list->id_sales."</td>\n";
                echo "<td>".$list->jam_hilang."</td>\n";
		echo "<td>".$list->alasan."</td>\n";
		echo "<td>".$list->action."</td>\n";
		echo "<td>".$list->selisih."</td>\n";
		echo "</td>\n";
		echo "</tr>\n";
	}
	echo "</table>";
	echo "</div>";
	
	
}
?>
     <p><?php echo anchor("download/download_Orefunds/" . $tanggal_awal . "/" . $tanggal_akhir, "<button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Download </button>"); ?></p>

</div>