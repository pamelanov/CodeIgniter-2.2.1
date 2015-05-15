<html>

    <h1><?php echo $judul; ?></h1>
    <ul class="nav nav-tabs">
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/summary" > Student</a></li>
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" > Refund</a></li>
        <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/feedbackSummary" > Feedback</a></li>
    </ul>
    
<div id="konten">
    
    <form class="form-inline" align="left" action='<?php echo base_url(); ?>index.php/ops/feedback/searchFeedback' method='post'>
    <div class="form-group">
        <label for="formIdSales">Masukan ID Sales</label>
        <input type="text" class="form-control" name="id_sales" placeholder="ID Sales">
    </div>
        <div class="form-group">
        <label for="formPeriode">Masukan Periode</label>
        <input type="date" class="form-control" name="tanggal" placeholder="Tanggal">
    </div>
    <br>
    <button type="submit" class="btn btn-danger">
			 <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>

</form>
    
<br/><br/>
<?php
	if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
	}

	echo "<table class='table table-bordered'>\n";
	echo "<tr valign='top'>\n";
	echo "<th>Nama Murid</th><th>Nama Guru</th><th>Tanggal Terakhir Diubah</th><th><center>Action</th>\n";
	echo "</tr>\n";
	foreach ($feedback as $list) {
		echo "<tr valign='top'>\n";
		echo "<td align='center'>" . $list->id_murid . "</td>\n";
		echo "<td align='center'>" . $list->id_guru . "</td>\n";
		echo "<td align='center'>" . $list->tanggal . "</td>\n";
	
		echo "<td align='center'>";
		echo anchor('ops/feedbackCtrl/formUpdateFeedback/'.$list->id, 'Ubah');
		echo " | ";
		echo anchor('ops/feedbackCtrl/readFeedback/'.$list->id , 'Lihat');
		echo " | ";
		echo anchor('ops/feedbackCtrl/formCreateFeedback'.$list->id, 'Tambah');
		echo "</td>\n";
		echo "</tr>\n";
	}
	echo "</table>";

?>  <p><?php echo anchor("download/download_feedbacks", "<button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Download </button>"); ?></p>

	<?php
	echo "<table class='table table-bordered'>\n";
	echo "<tr valign='top'>\n";
	echo "<th>ID Sales</th><th>Jumlah Feedback</th>\n";
	echo "</tr>\n";
	foreach ($feedback1 as $list) {
		echo "<tr valign='top'>\n";
		echo "<td align='center'>" . $list->id_sales . "</td>\n";
		echo "<td align='center'>" . $list->where('id_sales', $list->id_sales)->count() . "</td>\n";
		//echo anchor('ops/feedbackCtrl/countFeedback/');
		echo "</tr>\n";
	}
	/*
	foreach ($feedback as $list) {
		//echo "<tr valign='top'>\n";
		//echo "<td align='center'>" . $list->group_by('id_sales') . "</td>\n";
		echo "<td align='center'>" . $list->count_distinct('id_sales') . "</td>\n";
		//echo anchor('ops/feedbackCtrl/countFeedback/');
		echo "</tr>\n";
	}
	*/
	echo "</table>";
?>

</div>
</form>
</html>
