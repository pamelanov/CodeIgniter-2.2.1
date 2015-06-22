<h1><?php echo $judul; ?></h1>

<div id="konten">
    
     <h4>Periode: <?php echo  date("j F Y", strtotime($tanggal_awal)) . " s/d " .  date("j F Y", strtotime($tanggal_akhir)); ?></h4>
    <?php
    if (count($feedbacks)) {
       
        
                
        
            echo '<div class="panel panel-primary">
            <div class="panel-heading"><center>Rangkuman Feedback</center>';?>
            <br/>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	
            <ul class="nav navbar-nav navbar-left">
                <li><a href="<?php echo base_url() . "/index.php/ops/feedbackCtrl/tanggalDesc/" . $tanggal_awal . "/" . $tanggal_akhir . "/" . $id_sales;?>"<button type="button" class="btn btn-success" id="buttonToday">Tanggal Desc</button></li></a> 
                <li><a href="<?php echo base_url() . "/index.php/ops/feedbackCtrl/tanggalAsc/" . $tanggal_awal . "/" . $tanggal_akhir . "/" . $id_sales;?>"<button type="button" class="btn btn-success" id="buttonToday">Tanggal Asc</button></li></a>
            </ul>

        </div>
</div><?php
        echo "<table class='table table-bordered'>\n";
        echo "<tr valign='top'>\n";
        echo "<th><center>ID Sales</center></th>
            <th><center>Tanggal</center></th>
        <th><center>ID Kelas</center></th>
        <th><center>Rating</center></th>
        <th><center>Total Skor</center></th>
        <th><center>Isi</center></th>
        <th><center>Action</center></th>";

        echo "</tr>\n";

            foreach ($feedbacks as $list) {
                $tanggal = $list->tanggal;
                echo "<tr valign='top'>\n";
                echo "<td>" . $list->id_sales . "</td>\n";
                echo "<td>" .  date("j F Y", strtotime($tanggal)) . "</td>\n";
                echo "<td>" . $list->id_kelas . "</td>\n";
                echo "<td>" . $list->rating . "</td>\n";
                echo "<td>" . $list->total_skor . "</td>\n";
                echo "<td>" . $list->isi . "</td>\n";
                echo "<td>" . anchor('ops/feedbackCtrl/formUpdateFeedback/'.$list->id, 'Ubah') ."</td>\n";


            echo "</td>\n";
            echo "</tr>\n";
        }

        echo "</table>	";
        echo "</div>";
    }
    ?>
       <p><?php echo anchor("download/download_Sfeedbacks/" . $tanggal_awal . "/" . $tanggal_akhir . "/" . $id_sales, "<button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Download </button>"); ?></p>
<?php
/*    if (!empty($semua_ops)) {
        echo '<div id="konten-kecil">';
             echo '<div class="panel panel-primary">
                        <div class="panel-heading">
                            <center>Rangkuman Seluruh Operasional Sales</center></div>';
        echo "<table class='table table-bordered'>\n";
        echo "<tr valign='top'>\n";
        echo "<th><center>ID Sales</center></th>
            <th><center>Jumlah Feedback</center></th>\n";

        echo "</tr>\n";

            foreach ($semua_ops as $list) {
                echo "<tr valign='top'>\n";
                echo "<td>" . $list->id_acc . "</td>\n";
                echo "<td>" . $list->where('id_sales', $list->id_sales)->count() . "</td>\n";


            echo "</td>\n";
            echo "</tr>\n";
        }
        echo "</table>	";
        echo "</div></div>" ;
    }*/
    ?>
     

</div>	
