<!DOCTYPE html>
<html lang="en">
<h1><?php echo $judul; ?></h1>
	
<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

	echo anchor('ops/feedbackCtrl/formCreateFeedback', 'Tambah Feedback');

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
		echo anchor('ops/feedbackCtrl/formUpdateFeedback', 'ubah');
		echo " | ";
		echo anchor('ops/feedbackCtrl/readFeedback/'.$list->id , 'lihat');
		/*
		echo anchor('dashboard/createFeedback', 'tambah');
		echo " | ";
		echo anchor('dashboard/updateFeedback', 'ubah');
		echo " | ";
		echo anchor('dashboard/readFeedback1' , 'lihat');
		*/
		echo "</td>\n";
		echo "</tr>\n";
	}
	echo "</table>";


?>
  
