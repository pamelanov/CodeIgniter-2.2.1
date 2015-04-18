<h1><?php echo $judul;?></h1>
<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

if (count($status)){
	echo "haha";
	echo $status->Id_murid;
	
	foreach ($status as $list){
		echo "<tr valign='top'>\n";
		echo "<td>".$list->No."</td>\n";
		echo "<td>".$list->Tanggal."</td>\n";
		echo "</td>\n";
		echo "</tr>\n";
	}
	
	
}
?>