
<h1><?php echo $judul; ?></h1>
<div id="konten">
    <p><?php echo anchor("download/download_feedbacks", "<button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Download </button>"); ?></p>
    <?php
    if ($this->session->flashdata('message')) {
        echo "<div class='message'>" . $this->session->flashdata('message') . "</div>";
    }

    if (!empty($feedback)) {
        echo "<table class='table table-bordered'>\n";
        echo "<tr valign='top'>\n";
        echo "<th><center>ID Murid</th><th><center>ID Guru</th><th><center>Isi</th><th><center>Rating</th><th><center>Total Skor</th><th><center>Tanggal</th><th><center>Action</th>\n";
        echo "</tr>\n";
        foreach ($feedback as $list) {
            echo "<tr valign='top'>\n";
            echo "<td align='center'>" . $list->id_murid . "</td>\n";
            echo "<td align='center'>" . $list->id_guru . "</td>\n";
            echo "<td align='center'>" . $list->isi . "</td>\n";
            echo "<td align='center'>" . $list->rating . "</td>\n";
            echo "<td align='center'>" . $list->total_skor . "</td>\n";
            echo "<td align='center'>" . $list->tanggal . "</td>\n";
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

    echo anchor('dashboard/readFeedback', '<-- halaman sebelumnya');
    ?>
</div>