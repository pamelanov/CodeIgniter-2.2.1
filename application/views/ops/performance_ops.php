<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}
echo "<div id='konten'>";
	echo "<table class='table table-bordered'>\n";
	echo "<tr valign='top'>\n";
        echo "<th>Rank</th>
	<th>ID Sales</th>
        <th>Periode</th>
        <th>Target</th>
        <th>So far</th>\n";
        
	echo "</tr>\n";
	$rank = 1;

		echo "<tr valign='top'>\n";
            foreach($target as $t){
                echo "<td> $rank";
		echo "<td>".$t->id_sales."</td>\n";
                echo "<td align='center'>".$t->periode_awal. " - ". $t->periode_akhir."</td>\n";
                echo "<td>".$t->target."</td>\n";
                echo "<td>".$t->actual."</td>\n";
		echo "</td>\n";
		echo "</tr>\n";
                $rank++;
    }
	echo "</table>	";
	echo "<br/></div>"; 
