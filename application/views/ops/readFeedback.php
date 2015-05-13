<!DOCTYPE html>
<html lang="en">

<body>
<ul class="nav nav-tabs">
<li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/createData" > Student</a></li>
<li role="presentation"><a href="<?php echo base_url(); ?>index.php/admin/refund" > Refund</a></li>
<li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/crudFeedback" > Feedback</a></li>
</ul>

<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

if (!empty($feedback)) {
	echo "<table class='table table-bordered'>\n";
	echo "<tr valign='top'>\n";
	echo "<th>ID Murid</th><th>ID Guru</th><th>Isi</th><th>Rating</th><th>Total Skor</th>\n";
	echo "</tr>\n";
	foreach ($feedback as $list) {
		echo "<tr valign='top'>\n";
		echo "<td align='center'>" . $list->id_murid . "</td>\n";
		echo "<td align='center'>" . $list->id_guru . "</td>\n";
		echo "<td align='center'>" . $list->isi . "</td>\n";
		echo "<td align='center'>" . $list->rating . "</td>\n";
		echo "<td align='center'>" . $list->total_skor . "</td>\n";
	
		/*echo "<td align='center'>";
		echo anchor('dashboard/createFeedback', 'tambah');
		echo " | ";
		echo anchor('dashboard/updateFeedback', 'ubah');
		echo " | ";
		echo anchor('dashboard/createData' , 'lihat');
		*/
		echo "</td>\n";
		echo "</tr>\n";
	}
	echo "</table>";
}
	echo anchor('dashboard/crudFeedback', '       halaman sebelumnya');
?>
  
</body>
</html>