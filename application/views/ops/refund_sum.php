<h1><?php echo $judul;?></h1>
<div id="konten">
<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

if (count($refund)){
	
	
	echo '<div class="panel panel-primary">
	<div class="panel-heading"><center>Rangkuman Refund</center>';?>
	<br/>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	
	<ul class="nav navbar-nav navbar-left">
	<li><button type="button" class="btn btn-success" id="buttonToday">Tanggal Desc</button></li> 
	<li><button type="button" class="btn btn-success" id="buttonToday">Tanggal Asc</button></li>
	</ul>

	<ul class="nav navbar-nav navbar-right">
		
                    
		    <form class="form-inline"
			  action='<?php echo base_url();?>index.php/dashboard/filterTodaySum' method='post'>
			  Filter berdasarkan:
                    <select class="js-example-basic-single" name="id_ops" id="selectToday">
                    <?php foreach($ops as $x) {
                        echo "<option value='" . $x->id . "'>" . $x->id_acc . ": " . $x->nama . "</option>";
                        }  
                    ?>
                    </select>
		      <button type="submit" class="btn btn-success" id="buttonToday">Filter</button>
		    </form>
                
	</ul>
	</div>
	</div>
	<?php
	echo "<table class='table table-bordered'>\n";
	echo "<tr valign='top'>\n";
	echo "<th><center>Tanggal</center></th>
		<th><center>No Invoice</center></th>
		<th><center>ID Sales</center></th>
		<th><center>Jam Hilang</center></th>
		<th><center>Alasan</center></th>
		<th><center>Action</center></th>
		<th><center>Selisih</center></th>
		<th><center>Ubah/Hapus</center></th>\n";
	echo "</tr>\n";
	
	foreach ($refund as $list){
		$tanggal = $list->tanggal;
		echo "<tr valign='top'>\n";
		echo "<td>" . date("j F Y", strtotime($tanggal)) . "</td>\n";
                echo "<td>".$list->no_invoice."</td>\n";
                echo "<td>".$list->id_sales."</td>\n";
                echo "<td>".$list->jam_hilang."</td>\n";
		echo "<td>".$list->alasan."</td>\n";
		echo "<td>".$list->action."</td>\n";
		echo "<td>".$list->selisih."</td>\n";
		echo "<td>" . anchor('ops/refund_controller/showChangeRefund/'.$list->id , 'Ubah') .
                        " | " . anchor('ops/refund_controller/deleteRefund/'.$list->id, 'Hapus',
				       array('onclick' => "return confirm('Apakah Anda yakin ingin menghapus data refund?')")) ."</td>\n";
		echo "</td>\n";
		echo "</tr>\n";
	}
	echo "</table>";
	echo "</div>";
	
	
}
?>
     <p><?php echo anchor("download/download_Orefunds/" . $tanggal_awal . "/" . $tanggal_akhir, "<button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Download </button>"); ?></p>

</div>