<h1><?php echo $judul;?></h1>
<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

if (count($admins)){
	
	
	
	echo "<table id='table'>\n";
	echo "<tr valign='top'>\n";
	echo "<th>Nama</th><th>Email</th><th>Nama</th><th>No Tlp</th><th>Action</th>\n";
	echo "</tr>\n";
	
	foreach ($admins as $list){
		echo "<tr valign='top'>\n";
		echo "<td>".$list->Id_guru."</td>\n";
		
                echo "<td align='center'>".$list->Id_murid."</td>\n";
                echo "<td>".$list->No_invoice."</td>\n";
                echo "<td>".$list->Id_kelas."</td>\n";

		echo "</td>\n";
		echo "</tr>\n";
	}
	echo "</table>";
	
	
}
?>