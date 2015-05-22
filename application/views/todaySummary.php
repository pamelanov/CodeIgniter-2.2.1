<h1><?php echo $judul; ?></h1>

<p><?php echo anchor("dashboard/todaySummary", "<button type='button' class='btn btn-info'>Today's Summary</button>"); ?></p>
    <div id="konten">
	<?php echo $statusAkhir; ?>
        <h4>Tanggal hari ini: <span class="label label-primary">
	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
	<?php echo " " . date('d-m-20y') ;?></span></h4>
	
	
	<div class="panel panel-primary">
	    <!-- Default panel contents -->
	    <div class="panel-heading"><center>Today's Summary</center></div>
        <?php
	
        echo "<table id='tableSum' class='table table-bordered'>\n";
            echo "<tr valign='top'>\n";
                echo "
			<th><center>ID dan Nama Murid</center></th>
			<th><center>Status</center></th>
            <th><center>Jam</center></th>
			<th><center>Action</center></th>";
                       
            echo "</tr>\n";
            
            foreach ($statusAwal as $status){
	            echo "<tr valign='top'>\n";
		    	echo "<td align='center'>" . $status->id_murid . ": " . $status->nama_murid . "</td>\n";
	            echo "<td align='center'>" . $status->status . "</td>\n";
	            echo "<td align='center'>" . $status->jam . "</td>\n";
	            echo "<td align='center'>";
		   		echo anchor('ops/create/searchStudentStatusSumB/'.$status->id, '<span class="label label-primary" id="labelToday">
					    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Perbaharui Status</span>');
		   		echo "</td>\n";
	            echo "</tr>\n";
            }
	    
            foreach ($statusAkhir as $status) {
			    echo "<td align='center'>" . $status->id_murid . ": " . $status->nama_murid . "</td>\n";
		        echo "<td align='center'>" . $status->no . "</td>\n";    
		        echo "<td align='center'>" . $status->jam . "</td>\n";
		        echo "<td align='center'>";
			    echo anchor('ops/create/searchStudentStatusSumE/'.$status->id, '<span class="label label-primary" id="labelToday">
					    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Perbaharui Status</span>');
			    echo "</td>\n";
		        echo "</tr>\n";
            }
            
            
        echo "</table>";
	echo "</div>";
        /*
        echo "<a href='" . base_url() . "index.php/ops/summary/recurring' >
        <button class='btn btn-success'>
            <span class='glyphicon glyphicon-plus-sign' aria-hidden='true'></span> Recurring Status
        </button>
        </a>";
        */
		?>
</div>
</div>
</form>
</html>
