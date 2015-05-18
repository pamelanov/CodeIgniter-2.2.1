<html>

    <h1><?php echo $judul3; ?></h1>

    <?php
    if ($this->session->flashdata('message')) {
        echo "<div class='message'>" . $this->session->flashdata('message') . "</div>";
    }

    if (!empty($feedback)) {
        echo "<table class='table table-bordered'>\n";
        echo "<tr valign='top'>\n";
        echo "<th><center>Tanggal</th><th><center>ID Murid</th><th><center>ID Guru</th><th><center>Isi</th><th><center>Rating</th><th><center>Total Skor</th>\n";
        echo "</tr>\n";
        foreach ($feedback as $list) {
            echo "<tr valign='top'>\n";
             echo "<td align='center'>" . $list->tanggal . "</td>\n";
            echo "<td align='center'>" . $list->id_murid . "</td>\n";
            echo "<td align='center'>" . $list->id_guru . "</td>\n";
            echo "<td align='center'>" . $list->isi . "</td>\n";
            echo "<td align='center'>" . $list->rating . "</td>\n";
            echo "<td align='center'>" . $list->total_skor . "</td>\n";
           
            /* echo "<td align='center'>";
              echo anchor('dashboard/createFeedback', 'tambah');
              echo " | ";
              echo anchor('dashboard/updateFeedback', 'ubah');
              echo " | ";
              echo anchor('dashboard/createData' , 'lihat');
             */
            echo "</td>\n";
            echo "</tr>\n";
        }
        echo "</table>";
    }
    ?>

    <p><?php echo anchor("download/download_feedbacks", "<button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Download </button>"); ?></p>


    <h1><?php echo $judul2; ?></h1>
<?php
if ($this->session->flashdata('message')) {
    echo "<div class='message'>" . $this->session->flashdata('message') . "</div>";
}

if (count($refund)) {
    echo "<table class='table table-bordered'>\n";
    echo "<tr valign='top '>\n";
    echo "<th><center>Tanggal Refund</th><th><center>No Invoice</th><th><center>Jumlah Jam Hilang</th><th><center>Alasan</th><th><center>Aksi</th><th><center>Selisih</th><th><center>ID Sales</th>\n";
    echo "</tr>\n";
    foreach ($refund as $list) {
        echo "<tr valign='top'>\n";
        echo "<td align='center'>" . $list->tanggal . "</td>\n";
        echo "<td align='center'>" . $list->no_invoice . "</td>\n";
        echo "<td align='center'>" . $list->jam_hilang . "</td>\n";
        echo "<td align='center'>" . $list->alasan . "</td>\n";
        echo "<td align='center'>" . $list->action . "</td>\n";
        echo "<td align='center'>" . $list->selisih . "</td>\n";
        echo "<td align='center'>" . $list->id_sales . "</td>\n";


        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</table>";
}
?>

    <p><?php echo anchor("download/download_refunds", "<button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Download </button>"); ?></p>
</div>