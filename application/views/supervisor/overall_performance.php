   <h1><?php echo $judul; ?></h1>

 
  <div id ="konten">
<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading"><center>Tabel Peringkat</center></div>
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
        echo "<th><center>So far</center></th>\n";
        
	echo "</tr>\n";
	$rank = 1;

	    echo "<tr valign='top'>\n";
                foreach($targets as $t){

                    echo "<td> $rank";
                    echo "<td>".$t->id_sales."</td>\n";
                    echo "<td>".$t->periode."</td>\n";
                    echo "<td>".$t->target."</td>\n";
                    echo "<td>".$t->actual."</td>\n";
                    echo "</td>\n";
                    echo "</tr>\n";
                    $rank++;
                }
	echo "</table>	";
	echo "</div>";
}
?>

</div>