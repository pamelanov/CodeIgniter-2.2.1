 <h1><?php echo $judul; ?></h1>
<div id="konten">

<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

if (!empty($feedback)) {
	echo '<div class="panel panel-primary">
  <div class="panel-heading"><center>Rangkuman Feedback</center></div>';
	echo "<table class='table table-bordered'>\n";
	echo "<tr valign='top'>\n";
	echo "<th><center>ID Murid</center></th>
		<th><center>ID Guru</center></th>
		<th><center>Isi</center></th>
		<th><center>Rating</center></th>";
		
	echo "</tr>\n";
		echo "<tr valign='top'>\n";
		echo "<td align='center'>" . $feedback->id_murid . "</td>\n";
		echo "<td align='center'>" . $feedback->id_guru . "</td>\n";
		echo "<td align='center'>" . $feedback->isi . "</td>\n";
		echo "<td align='center'>" . $feedback->rating . "</td>\n";
	
		/*echo "<td align='center'>";
		echo anchor('dashboard/createFeedback', 'tambah');
		echo " | ";
		echo anchor('dashboard/updateFeedback', 'ubah');
		echo " | ";
		echo anchor('dashboard/createData' , 'lihat');
		*/
		echo "</td>\n";
		echo "</tr>\n";
	echo "</table>";
	echo "</div>";
}
	
?>
  <a href="<?php echo base_url(); ?>/index.php/ops/feedbackCtrl/feedbackSummary" >
    <button type="submit" class="btn btn-danger">
	<span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Kembali</button> </a>
</div>