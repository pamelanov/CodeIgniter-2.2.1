<!DOCTYPE html>
<html lang="en">
<h1><?php echo $judul; ?></h1>
<body>
<ul class="nav nav-tabs">
<li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/summary" > Student</a></li>
<li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" > Refund</a></li>
<li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/feedbacks" > Feedback</a></li>
</ul>
<p><?php echo anchor("download/download_feedbacks", "Download"); ?></p>
<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

if (!empty($feedback)) {
	echo "<table class='table table-bordered'>\n";
	echo "<tr valign='top'>\n";
	echo "<th><center>ID Murid</th><th><center>ID Guru</th><th><center>Isi</th><th><center>Rating</th><th><center>Total Skor</th>\n";
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

echo anchor('dashboard/readFeedback', '<-- halaman sebelumnya');
?>
  
</body>
</html>
