<h1><?php echo $judul; ?></h1>

 
 

<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

	echo "<p><h4> Pencapaian target sejauh ini: " . $performa->actual . "</h4></p>";    
	echo "<table class='table table-bordered'>\n";    
	echo "<tr>\n";
        echo "
	<th><center>ID Sales</center></th>\n
        <th><center>Periode</center></th>\n
        <th><center>Target<c/enter></th>\n
        <th><center>So far</center></th>\n";
        
	echo "</tr>\n";
	$rank = 1;

	    echo "<tr valign='top'>\n";
                foreach($target as $t){
                
                    echo "<td>".$t->id_sales."</td>\n";
                    echo "<td>".$t->periode."</td>\n";
                    echo "<td>".$t->target."</td>\n";
                    echo "<td>".$t->actual."</td>\n";
                    echo "</td>\n";
                    echo "</tr>\n";
                    $rank++;
                }
	echo "</table>	";
	echo "<br/></div>"; 
