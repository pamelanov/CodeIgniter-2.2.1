<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}
echo "<div id='tabelP'>";
    echo "<h2><center>Ringkasan Performa Seluruh Operational Sales<center></h2>";
	echo "<table class='table table-striped'>\n";
	echo "<tr>\n";
        echo "<th   ><center>#</th></center>\n
	<th><center>ID Sales</center></th>\n
        <th><center>Periode</center></th>\n
        <th><center>Target<c/enter></th>\n
        <th><center>So far</center></th>\n";
        
	echo "</tr>\n";
	$rank = 1;

	    echo "<tr valign='top'>\n";
                foreach($target as $t){
                    echo "<td> $rank";
                    echo "<td>".$t->id_sales."</td>\n";
                    echo "<td>".$t->periode_awal. " - ". $t->periode_akhir."</td>\n";
                    echo "<td>".$t->target."</td>\n";
                    echo "<td>".$t->actual."</td>\n";
                    echo "</td>\n";
                    echo "</tr>\n";
                    $rank++;
                }
	echo "</table>	";
	echo "<br/></div>"; 
