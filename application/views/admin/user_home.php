<h1><?php echo $judul;?></h1>
<p><?php echo anchor("admin/dashboard/create", "Create new user");?></p>
<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

if (count($admins)){
	
	
	echo "<table id='table'>\n";
	echo "<tr valign='top'>\n";
	echo "<th>Nama</th><th>Email</th><th>Nama</th><th>No Tlp</th><th>Action</th>\n";
	echo "</tr>\n";
	/*
	foreach ($admins as $acc) {
		echo $acc->Email;
	}
	*/
	
	foreach ($admins as $list){
		echo "<tr valign='top'>\n";
		echo "<td>".$list->Id."</td>\n";
		
                echo "<td align='center'>".$list->Email."</td>\n";
                echo "<td>".$list->Nama."</td>\n";
                echo "<td>".$list->No_telp."</td>\n";
		                
		echo "<td align='center'>";
		echo anchor('admin/dashboard/edit/'.$list->Id,'edit');
		echo " | ";
		echo anchor('admin/dashboard/delete/'.$list->Id,'delete');
		
		echo "</td>\n";
		echo "</tr>\n";
	}
	echo "</table>";
	
}
?>