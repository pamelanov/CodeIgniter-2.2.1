<h1><?php echo $judul; ?></h1>

<div id="konten">
    
    <?php
    if (count($feedback)) {
       
        echo '<div class="row">
                <div class="col-md-8">';
        
            echo '<div class="panel panel-primary">
  <div class="panel-heading"><center>Rangkuman Feedback</center></div>';
        echo "<table class='table table-bordered'>\n";
        echo "<tr valign='top'>\n";
        echo "<th><center>ID Sales</center></th>
            <th><center>Tanggal</center></th>
        <th><center>ID Murid</center></th>
        <th><center>ID Guru</center></th>
        <th><center>Action</center></th>";

        echo "</tr>\n";

            foreach ($feedback as $list) {
                echo "<tr valign='top'>\n";
                echo "<td>" . $list->id_sales . "</td>\n";
                echo "<td>" . $list->tanggal . "</td>\n";
                echo "<td>" . $list->id_murid . "</td>\n";
                echo "<td>" . $list->id_guru . "</td>\n";
                echo "<td>" . anchor('ops/feedbackCtrl/readFeedback/'.$list->id , 'Lihat') .
                        " | " . anchor('ops/feedbackCtrl/formUpdateFeedback/'.$list->id, 'Ubah') ."</td>\n";


            echo "</td>\n";
            echo "</tr>\n";
        }

        echo "</table>	";
        echo "</div></div></div>";
    }

    ?>
        <p><?php echo anchor("download/download_OPfeedbacks/", "<button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Download </button>"); ?></p>


</div>	
