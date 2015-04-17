<h1><?php echo $judul;?></h1>
<p><?php echo anchor("dashboard/create", "Create new user");?></p>
<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

if (count($status)){
	
	foreach ($status as $list){
		echo "<tr valign='top'>\n";
		echo "<td>".$list->No."</td>\n";
		echo "<td>".$list->Tanggal."</td>\n";
		echo "</td>\n";
		echo "</tr>\n";
	}
	echo "</table>";
	
}
?>