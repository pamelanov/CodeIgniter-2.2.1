<html>

    <h1><?php echo $judul; ?></h1>


    <div id="konten">
        <?php
        if (count($feedback)) {
            echo '<div class="panel panel-primary">
  <div class="panel-heading"><center>Feedback</center></div>';
            echo "<table class='table table-bordered'>\n";
            echo "<tr valign='top'>\n";
            echo "<th><center>Tanggal</center></th>
        <th><center>ID Murid</center></th>
        <th><center>ID Guru</center></th>
        <th><center>Isi</center></th>
        <th><center>Rating</center></th>
        <th><center>Total Skor</center></th>\n";

            echo "</tr>\n";

            foreach ($feedback as $list) {
                echo "<tr valign='top'>\n";
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
        ?>
        <p><?php echo anchor("download/download_Ofeedbacks/" . $tanggal_awal . "/" . $tanggal_akhir, "<button type='button' class='btn btn-primary'>
                             <span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Unduh Rangkuman Feedback </button>"); ?></p>

    <br>
        <?php
        if (count($refund)) {
            echo '<div class="panel panel-primary">
  <div class="panel-heading"><center>Refund</center></div>';
            echo "<table class='table table-bordered'>\n";
            echo "<th><center>Tanggal</center></th>
        <th><center>ID Sales</center></th>
        <th><center>No Invoice</center></th>
        <th><center>Jam Hilang</center></th>
        <th><center>Alasan</center></th>
        <th><center>Action</center></th>
        <th><center>Selisih</center></th>\n";

            echo "</tr>\n";

            foreach ($refund as $list) {
                echo "<tr valign='top'>\n";
                echo "<td>" . $list->tanggal . "</td>\n";
                echo "<td>" . $list->id_sales . "</td>\n";
                echo "<td>" . $list->no_invoice . "</td>\n";
                echo "<td>" . $list->jam_hilang . "</td>\n";
                echo "<td>" . $list->alasan . "</td>\n";
                echo "<td>" . $list->action . "</td>\n";
                echo "<td>" . $list->selisih . "</td>\n";


                echo "</td>\n";
                echo "</tr>\n";
            }
            echo "</table>	";
            echo "</div>";
        }
        ?>
        <p><?php echo anchor("download/download_Orefunds/" . $tanggal_awal . "/" . $tanggal_akhir, "<button type='button' class='btn btn-primary'>
                             <span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Unduh Rangkuman Refund </button>"); ?></p>
<br>
        
       <?php
        if (count($recurrings)) {
            echo '<div class="panel panel-primary">
  <div class="panel-heading"><center>Recurring</center></div>';
            echo "<table class='table table-bordered'>\n";
            echo "<th><center>ID Kelas</center></th>
        <th><center>Tanggal</center></th>
        <th><center>ID Sales</center></th>
        <th><center>Melanjutkan</center></th>
        <th><center>Alasan</center></th>
        <th><center>Periode Selanjutnya</center></th>
        <th><center>Jumlah Jam</center></th>\n";

            echo "</tr>\n";

            foreach ($recurrings as $list) {
                echo "<tr valign='top'>\n";
                echo "<td>" . $list->id_kelas . "</td>\n";
                echo "<td>" . $list->tanggal . "</td>\n";
                echo "<td>" . $list->id_sales . "</td>\n";
                if ($list->recur == 1) {
                    echo "<td> Ya </td>\n";
                    echo "<td> - </td>\n";
                    echo "<td>" . $list->periode_awal . " s/d " . $list->periode_akhir . "</td>\n";
                    echo "<td>" . $list->jumlah_jam . "</td>\n";
                }
                else {
                    echo "<td> Tidak </td>\n";
                    echo "<td>" . $list->alasan . "</td>\n";
                    echo "<td> - </td>\n";
                    echo "<td> - </td>\n";
                }
                /*echo "<td>" . $list->jam_hilang . "</td>\n";
                echo "<td>" . $list->alasan . "</td>\n";
                echo "<td>" . $list->action . "</td>\n";
                echo "<td>" . $list->selisih . "</td>\n";
    */

                echo "</td>\n";
                echo "</tr>\n";
            }
            echo "</table>	";
            echo "</div>";
        }
        ?> 
        
         <p><?php echo anchor("download/download_Orecurring/" . $tanggal_awal . "/" . $tanggal_akhir, "<button type='button' class='btn btn-primary'>
                             <span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Unduh Rangkuman Recurring </button>"); ?></p>
        
    </div>	

    
