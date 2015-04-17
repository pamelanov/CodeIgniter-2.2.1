<h1><?php echo $judul; ?></h1>
<p><?php echo anchor("admin/feedback/create", "Create new feedback"); ?></p>
<?php
if ($this->session->flashdata('message')) {
    echo "<div class='message'>" . $this->session->flashdata('message') . "</div>";
}

if (count($feedback)) {
  echo "<table class='table table-bordered'>\n";
    echo "<tr valign='top'>\n";
    echo "<th>ID Murid</th><th>ID Guru</th><th>ID Sales</th><th>Tanggal</th><th>Rating</th><th>Isi</th><th>Total Skor</th><th>Status</th>\n";
    echo "</tr>\n";
    
    foreach ($feedback as $list) {
        echo "<tr valign='top'>\n";
        echo "<td>" . $list->Id_murid . "</td>\n";
        echo "<td align='center'>" . $list->Id_guru . "</td>\n";
        echo "<td>" . $list->Id_sales . "</td>\n";
        echo "<td>" . $list->Tanggal . "</td>\n";
        echo "<td>" . $list->Rating . "</td>\n";
        echo "<td align='center'>" . $list->Isi . "</td>\n";
        echo "<td align='center'>" . $list->Total_skor . "</td>\n";
        echo "<td align='center'>" . $list->Status . "</td>\n";
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</table>";
}
?>