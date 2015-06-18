   <h1><?php echo $judul; ?></h1>

  <div id ="konten">
<?php
$month = $periode;
?>   
 
 <?php

if($targets->exists()) {
    
    ?>
<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading" id="tabelPerforma">
   <h3><center>Tabel Peringkat</center></h3>
 
	<center><h4>Periode: <span class="label label-danger">

	
	  <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
	   <?php echo " " . date("F Y", strtotime($month)); ?></span>
	</center>
	</h4>
  
     
    
    <div class="collapse navbar-collapse" id="filterPerforma">
     <ul class="nav navbar-nav navbar-right">
            <form class="form-inline" action='<?php echo base_url();?>index.php/supervisor/performance/filterPerforma' method='post'>
                
                    <label>Periode </label>
		    <input type="month" class="form-control" name="periode" required>
                 
                    <button type="submit" class="btn btn-success" id="buttonToday">Filter</button>
            </form>
        </ul>
    </div><!--tutup bs-example-navbar-collapse-1-->
  
  </div>


<?php 
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
        $bulan = $periode;
	    echo "<tr valign='top'>\n";
                foreach($targets as $t){
                    $bulan = $t->periode;
		    if (!empty($t->id_sales)){ 
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
  
    <a href="<?php echo base_url(); ?>index.php/supervisor/performance/overall" >
    <button type="submit" class="btn btn-danger">
        <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Kembali</button> </a>

</div>