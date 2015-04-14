<h1><?php echo $judul;?></h1>
<p><?php echo anchor("admin/dashboard/create", "Create new user");?></p>
<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

if (count($admins)){
	echo "<table id='table'>\n";
	echo "<tr valign='top'>\n";
	echo "<th>Nama</th><th>Status</th><th>Telp</th><th>Alamat</th><th>Role</th><th>Actions</th>\n";
	echo "</tr>\n";
	foreach ($admins as $list){
		echo "<tr valign='top'>\n";
		echo "<td>".$list['Id']."</td>\n";
		/*
                echo "<td align='center'>".$list['status']."</td>\n";
                echo "<td>".$list['telp']."</td>\n";
                echo "<td>".$list['alamat']."</td>\n";
		                echo "<td align='center'>".$list['role']."</td>\n";
		echo "<td align='center'>";
		echo anchor('admin/dashboard/edit/'.$list['id'],'edit');
		echo " | ";
		echo anchor('admin/dashboard/delete/'.$list['id'],'delete');
		*/
		echo "</td>\n";
		echo "</tr>\n";
	}
	echo "</table>";
}
?>