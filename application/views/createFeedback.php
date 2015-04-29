<!DOCTYPE html>
<html lang="en">

<body>
<ul class="nav nav-tabs">
<li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/createData" > Student</a></li>
<li role="presentation"><a href="<?php echo base_url(); ?>index.php/admin/refund" > Refund</a></li>
<li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/readFeedback" > Feedback</a></li>
</ul>

<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

if (!empty($feedback)) {
<<<<<<< HEAD
	echo anchor('dashboard/createFeedback', 'Tambah Feedback');
=======
>>>>>>> origin/punya-pinky
	echo "<table class='table table-bordered'>\n";
	echo "<tr valign='top'>\n";
	echo "<th>ID Murid</th><th>ID Guru</th><th>Tanggal Terakhir Diubah</th>\n";
	echo "</tr>\n";
	foreach ($feedback as $list) {
		echo "<tr valign='top'>\n";
		echo "<td align='center'>" . $list->id_murid . "</td>\n";
		echo "<td align='center'>" . $list->id_guru . "</td>\n";
		echo "<td align='center'>" . $list->tanggal . "</td>\n";
	
		echo "<td align='center'>";
<<<<<<< HEAD
		echo anchor('dashboard/updateFeedback', 'ubah');
		echo " | ";
		echo anchor('dashboard/searchFeedback/'.$list->id_murid , 'lihat');
=======
		echo anchor('dashboard/createFeedback', 'tambah');
		echo " | ";
		echo anchor('dashboard/updateFeedback', 'ubah');
		echo " | ";
		echo anchor('dashboard/readFeedback1' , 'lihat');
>>>>>>> origin/punya-pinky
		echo "</td>\n";
		echo "</tr>\n";
	}
	echo "</table>";
}

?>
  
</body>
</html>