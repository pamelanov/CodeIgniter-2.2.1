<h1><?php echo $judul; ?></h1>

    <div id ="konten">
	 <a href="<?php echo base_url(); ?>index.php/supervisor/performance/overall" >
		<button type="submit" class="btn btn-danger">
		    <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Kembali</button> </a>	
        
	
	<h4>Operational Sales:
	    <span class="label label-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
		<?php echo $ops->id_acc . ": " . $ops->nama;?></span>
	</h4>
	<h4>Total Pemberian Target Selama Ini:
	    <span class="label label-danger"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
		<?php echo $totalTarget; ?></span>
	</h4>
	<h4>Total Accomplished Selama Ini:
	    <span class="label label-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
		<?php echo $totalAccomplished; ?></span>
	</h4>
        
	
	<div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading"><center>Sejarah Performa</center></div>
            
            <?php
                if($sejarah->exists()) {

                    echo "<table class='table table-bordered'>\n";
                    echo "<tr>\n";
		
                    echo "<th ><center>#</th></center>\n";
                    echo "<th><center>Periode</center></th>\n";
                    echo "<th><center>Target</center></th>\n";
                    echo "<th><center>Accomplished<c/enter></th>\n";
        
                    echo "</tr>\n";
                    $no = 1;

                    echo "<tr valign='top'>\n";
                        foreach($sejarah as $t){
                            if (!empty($t->id_sales)){
				$month = $t->periode;
                                echo "<td> $no";
                                echo "<td> " . date("F Y", strtotime($month)) .  "</td>\n";
                                echo "<td>".$t->target."</td>\n";
                                echo "<td>".$t->actual."</td>\n";
                                echo "</td>\n";
                                echo "</tr>\n";
                                $no++;
                            }
                        }
                    
                    echo "</table>";
                    echo "</div>";
                }
            ?>
            </div><!--menutup panel panel-->
	   
    </div><!--menutup konten-->

