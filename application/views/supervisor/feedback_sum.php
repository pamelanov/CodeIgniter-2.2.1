<h1><?php echo $judul; ?></h1>


<div id="konten">
    <?php
    if (count($feedbacks)) {
        echo '<div class="panel panel-primary">
  <div class="panel-heading"><center>Rangkuman Feedback</center></div>';
        echo "<table class='table table-bordered'>\n";
        echo "<tr valign='top'>\n";
        echo "<th><center>ID Sales</center></th>
            <th><center>Tanggal</center></th>
        <th><center>ID Murid</center></th>
        <th><center>ID Guru</center></th>
        <th><center>Isi</center></th>
        <th><center>Rating</center></th>
        <th><center>Total Skor</center></th>\n";

        echo "</tr>\n";

        foreach ($feedbacks as $list) {
            echo "<tr valign='top'>\n";
            echo "<td>" . $list->id_sales . "</td>\n";
            echo "<td>" . $list->tanggal . "</td>\n";
            echo "<td>" . $list->id_murid . "</td>\n";
            echo "<td>" . $list->id_guru . "</td>\n";
            echo "<td>" . $list->isi . "</td>\n";
            echo "<td>" . $list->rating . "</td>\n";
            echo "<td>" . $list->total_skor . "</td>\n";


            echo "</td>\n";
            echo "</tr>\n";
        }
        echo "</table>	";
        echo "</div>";
    }

    if (count($semua_ops)) {
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
            echo "<td>" . $list->id_sales . "</td>\n";
            echo "<td>" . $list->count_distinct('id_sales') . "</td>\n";


            echo "</td>\n";
            echo "</tr>\n";
        }
        echo "</table>	";
        echo "</div>";
    }
    ?>
    <p><?php  echo anchor("download/download_Ofeedbacks/" . $tanggal_awal . "/" . $tanggal_akhir, "<button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Download </button>"); ?></p>

</div>	
