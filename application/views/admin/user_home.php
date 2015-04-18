<h1><?php echo $judul;?></h1>
<p><?php echo anchor("admin/dashboard/create", "Create new user");?></p>
<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

if (count($admins)){
	
	
	echo "<table class='table table-bordered'>\n";
	echo "<tr valign='top'>\n";
	echo "<th><center>ID</center></th>
	<th><center>Email</center></th>
	<th><center>Nama</center></th>
	<th><center>No Tlp</center></th>
	<th><center>Action</center></th>\n";
	echo "</tr>\n";
	
	foreach ($admins as $list){
		echo "<tr valign='top'>\n";
		echo "<td align='center'>".$list->id_acc."</td>\n";
		
                echo "<td align='center'>".$list->email."</td>\n";
                echo "<td align='center'>".$list->nama."</td>\n";
                echo "<td align='center'>".$list->no_telp."</td>\n";
		                
		echo "<td align='center'>";
		
		echo anchor('admin/dashboard/edit/'.$list->id,'edit ');
		echo "<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>";
		echo " | ";
		echo anchor('admin/dashboard/delete/'.$list->id,'delete ');
		echo "<span class='glyphicon glyphicon-trash' aria-hidden='true'></span>";
		
		echo "</td>\n";
		echo "</tr>\n";
	}
	echo "</table>";
	
}
?>