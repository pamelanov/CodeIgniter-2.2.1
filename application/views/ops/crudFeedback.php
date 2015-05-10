<!DOCTYPE html>
<html lang="en">
<h1><?php echo $judul; ?></h1>
	
<ul class="nav nav-tabs">
<li role="presentation"><a href="<?php echo base_url(); ?>index.php/ops/student/createData" > Student</a></li>
  <li role="presentation" ><a href="<?php echo base_url(); ?>index.php/ops/refund/crefund" > Refund</a></li>
<li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/crudFeedback" > Feedback</a></li>
</ul>

<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

	echo anchor('ops/feedback/formCreateFeedback', 'Tambah Feedback');

	echo "<table class='table'>\n";
	echo "<tr valign='top'>\n";
	echo "<th>ID Murid</th><th>ID Guru</th><th>Tanggal Terakhir Diubah</th>\n";
	echo "</tr>\n";
	foreach ($feedback as $list) {
		echo "<tr valign='top'>\n";
		echo "<td align='center'>" . $list->id_murid . "</td>\n";
		echo "<td align='center'>" . $list->id_guru . "</td>\n";
		echo "<td align='center'>" . $list->tanggal . "</td>\n";
	
		echo "<td align='center'>";
		echo anchor('dashboard/updateFeedback', 'ubah');
		echo " | ";
		echo anchor('ops/feedback/searchFeedback/'.$list->id , 'lihat');
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
  
