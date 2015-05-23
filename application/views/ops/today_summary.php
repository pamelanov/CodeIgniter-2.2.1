<h1><?php echo $judul; ?></h1>
 <div id="konten">
    <div class="nempel">
            <h4>Tanggal hari ini: <span class="label label-primary">
	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
	<?php echo " " . date('d-m-20y') ;?></span></h4>

    </div>
	<div class="panel panel-primary">
	    <!-- Default panel contents -->
	    <div class="panel-heading">
<nav class="navbar navbar-primary" >
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" id="tulisanTodaySum" class="btn btn-primary">Today's Summary</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li><?php echo "Operational Sales: " . $ops->id_acc . " (" . $ops->nama . ")"; ?></li>
        </ul>
    </div>
  </div>
</nav>
            </div>
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
		    echo "<td align='center'>" .
		    anchor('ops/create/searchStudentStatusSumB/'.$status->id, '<span class="label label-primary" id="labelToday">
					    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Perbaharui Status</span>');
			    echo "</td>\n";
	            echo "</tr>\n";
            }
	    
            foreach ($statusAkhir as $status) {
			    echo "<td align='center'>" . $status->id_murid . ": " . $status->nama_murid . "</td>\n";
		        echo "<td align='center'>" . $status->no . "</td>\n";    
		        echo "<td align='center'>" . $status->jam . "</td>\n";
			echo "<td align='center'>" .
			anchor('ops/create/searchStudentStatusSumE/'.$status->id, '<span class="label label-primary" id="labelToday">
					    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Perbaharui Status</span>');
			    echo "</td>\n";
                        echo "</td>\n";
		        echo "</tr>\n";
            }
            
            
            
        echo "</table>";?>
        </div> <!--tutup panel primary-->
        
 </div><!--tutup konten-->