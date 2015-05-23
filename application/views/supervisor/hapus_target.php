<h1><?php echo $judul; ?></h1>

<div id="konten">
    <div class="panel panel-primary">
        <!-- Default panel contents -->
        <div class="panel-heading"><center>Informasi Target</center></div>
            <?php
                echo "<table class='table table-bordered'>\n";    
                echo "<tr>\n";
                echo "<th><center>ID Sales</center></th>\n
                        <th><center>Periode</center></th>\n
                        <th><center>Besar Target</center></th>\n
                        <th><center>Pencapaian Target Sejauh Ini</center></th>\n";
                echo "</tr>\n";
                
                echo "<tr valign='top'>\n";
			echo "<td>". $target->id_sales ."</td>\n";
			echo "<td>".$target->periode."</td>\n";
			echo "<td>".$target->target."</td>\n";
			echo "<td>".$target->actual."</td>\n";
			echo "</td>\n";
			echo "</tr>\n";	
                echo "</table>	";
            
    echo '</div>';
    echo anchor('supervisor/performance/hapusTarget/'.$target->id, '<button type="submit" class="btn btn-primary">
            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
             Hapus Target</button>',array('onclick' => "return confirm('Apakah Anda yakin ingin menghapus target?')"));
   
	?>
</div>
    
    