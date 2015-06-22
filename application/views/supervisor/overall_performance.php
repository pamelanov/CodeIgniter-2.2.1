   <h1><?php echo $judul; ?></h1>


 
  <div id ="konten">
<?php
$month = date('20y-m');
?>   
    
<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading" id="tabelPerforma">
   <h3><center>Tabel Peringkat</center></h3>
 
	<center><h4>Periode: <span class="label label-danger">

	
	  <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
	   <?php echo " " . date("F Y", strtotime($month)); ;?></span>
	</center>
	</h4>
  
     
    
    <div class="collapse navbar-collapse" id="filterPerforma">
     <ul class="nav navbar-nav navbar-right">
            <form class="form-inline" action='<?php echo base_url();?>index.php/supervisor/performance/filterPerforma' method='post'>
                
                    <label>Filter Periode </label>
		    <input type="month" class="form-control" name="periode" required>
                 
                    <button type="submit" class="btn btn-success" id="buttonToday">Filter</button>
            </form>
        </ul>
    </div><!--tutup bs-example-navbar-collapse-1-->
  
  </div>
<?php

if($targets->exists()) {

if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

;

	echo "<table class='table table-bordered'>\n";
	echo "<tr>\n";
		
        echo "<th ><center>#</th></center>\n";
        echo "<th><center>ID Sales</center></th>\n";
        echo "<th><center>Periode</center></th>\n";
        echo "<th><center>Target<c/enter></th>\n";
        echo "<th><center>Accomplished</center></th>\n";
        
	echo "</tr>\n";
	$rank = 1;

	    echo "<tr valign='top'>\n";
                foreach($targets as $t){
		    if (!empty($t->id_sales)){
		     $bulan = date('20y-m');
                    echo "<td> $rank";
                    echo "<td>".$t->id_sales."</td>\n";
		    echo "<td> ". date("F Y", strtotime($bulan)) .  "</td>\n";
                    echo "<td>".$t->target."</td>\n";
                    echo "<td>".$t->actual."</td>\n";
                    echo "</td>\n";
                    echo "</tr>\n";
                    $rank++;
		    }
                }
	echo "</table>	";
	echo "</div>";
	
}

?>
  
          <p><?php echo anchor("download/downloadPerformaBulanIni", "<button type='button' class='btn btn-primary'>
                             <span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Unduh Performa </button>"); ?></p>
  
  
  <br/>
  <form class="form-inline" align="left" action='<?php echo base_url();?>index.php/supervisor/performance/sejarahPerforma/' method='post'>
      <div class="form-group">
	  <label for="idOps">ID Operational Sales</label>
		<select class="js-example-basic-single" name="id_ops">
		    
                    <?php foreach($ops as $x) {
                        echo "<option value='" . $x->id . "'>" . $x->id_acc . ": " . $x->nama . "</option>";
                        }  
                    ?>
                </select>
      <button type="submit" class="btn btn-primary">
	  <span class="glyphicon glyphicon-file" aria-hidden="true"></span> Lihat Sejarah Performa</button>
  </div>
  </form>
</div>