<html>

    <h1><?php echo $judul; ?></h1>


    <div id="konten">
        <?php
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


        echo "<tr valign='top'>\n";
        echo "<td>" . $feedback->tanggal . "</td>\n";
        echo "<td>" . $feedback->id_murid . "</td>\n";
        echo "<td>" . $feedback->id_guru . "</td>\n";
        echo "<td>" . $feedback->isi . "</td>\n";
        echo "<td>" . $feedback->rating . "</td>\n";
        echo "<td>" . $feedback->total_skor . "</td>\n";


        echo "</td>\n";
        echo "</tr>\n";

        echo "</table>	";
        echo "</div>";
        ?>
         <p><?php echo anchor("download/download_feedbacks", "<button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Download </button>"); ?></p>

    </div>	

   
      <div id="konten">
        <?php
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


        echo "<tr valign='top'>\n";
        echo "<td>" . $refund->tanggal . "</td>\n";
        echo "<td>" . $refund->id_sales . "</td>\n";
        echo "<td>" . $refund->no_invoice . "</td>\n";
        echo "<td>" . $refund->jam_hilang . "</td>\n";
        echo "<td>" . $refund->alasan . "</td>\n";
        echo "<td>" . $refund->action . "</td>\n";
        echo "<td>" . $refund->selisih . "</td>\n";


        echo "</td>\n";
        echo "</tr>\n";

        echo "</table>	";
        echo "</div>";
        ?>
          <p><?php echo anchor("download/download_refunds", "<button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Download </button>"); ?></p>

    </div>	

    