
    <h1><?php echo $judul; ?></h1>

    
<div id="konten">
    <div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading"><center>Seluruh Feedback</center></div>

<?php
	if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
	}

	echo "<table class='table table-bordered'>\n";
	echo "<tr valign='top' align='center'>\n";
	echo "<th><center>Nama Murid</center></th><th><center>Nama Guru</center></th>
                    <th><center>Tanggal Pengisian Feedback</center></th><th><center>Action</center></th>\n";
	echo "</tr>\n";
	foreach ($feedbacks as $f) {
		echo "<tr valign='top'>\n";
		echo "<td align='center'>" . $f->id_murid . "</td>\n";
		echo "<td align='center'>" . $f->id_guru . "</td>\n";
		echo "<td align='center'>" . $f->tanggal . "</td>\n";
	
		echo "<td align='center'>";
		echo anchor('ops/feedbackCtrl/formUpdateFeedback/'.$f->id, 'Ubah');
		echo " | ";
		echo anchor('ops/feedbackCtrl/readFeedback/'.$f->id , 'Lihat');
		echo " | ";
		echo anchor('ops/feedbackCtrl/formCreateFeedback'.$f->id, 'Tambah');
		echo "</td>\n";
		echo "</tr>\n";
	}
	echo "</table>";
        echo "</div>";
        echo "</div>";
?>
    
    
    <!--
    <p><?php /* echo anchor("download/download_feedbacks", "<button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Download </button>"); */?></p>

	<?php
        /*
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
	
	echo "</table>";
	</div>
</form>
</html>*/
?>
        


