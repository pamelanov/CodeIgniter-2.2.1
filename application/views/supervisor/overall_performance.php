

 <h1><?php echo $judul; ?></h1>
<ul class="nav nav-tabs">
  <li role="presentation" ><a href="<?php echo base_url(); ?>index.php/supervisor/performance" > Create</a></li>
  <li role="presentation"class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/performance_sup ">  Performance</a></li>
 </ul>
 
 
 <p><?php echo anchor("admin/refund/create", "Download"); ?></p>
<?php

if($targets->exists()) {

if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}
	echo "<table id='table'>\n";
	echo "<tr>\n";
        echo "
	<th><center>ID Sales</center></th>\n
        <th><center>Periode</center></th>\n
        <th><center>Target<c/enter></th>\n
        <th><center>So far</center></th>\n";
        
	echo "</tr>\n";
	$rank = 1;

	    echo "<tr valign='top'>\n";
                foreach($targets as $t){
                
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
}
?>
