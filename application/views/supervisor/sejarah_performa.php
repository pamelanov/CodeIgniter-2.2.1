<h1><?php echo $judul; ?></h1>

    <div id ="konten">
        <h4>Operational Sales:
        <span class="label label-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
        <?php echo $ops->id_acc . ": " . $ops->nama;?></span></h4>
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
                    echo "<th><center>Pencapaian<c/enter></th>\n";
        
                    echo "</tr>\n";
                    $no = 1;

                    echo "<tr valign='top'>\n";
                        foreach($sejarah as $t){
                            if (!empty($t->id_sales)){ 
                                echo "<td> $no";
                                echo "<td>".$t->periode."</td>\n";
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

