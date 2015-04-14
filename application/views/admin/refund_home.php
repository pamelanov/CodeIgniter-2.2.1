<h1><?php echo $judul; ?></h1>
<p><?php echo anchor("admin/refund/create", "Create new refund"); ?></p>
<?php
if ($this->session->flashdata('message')) {
    echo "<div class='message'>" . $this->session->flashdata('message') . "</div>";
}

if (count($refund)) {
    echo "<table id='table'>\n";
    echo "<tr valign='top'>\n";
    echo "<th>Tanggal Refund</th><th>ID Murid</th><th>Jumlah Jam Hilang</th><th>Harga Per Jam</th><th>Sebab Jam Hilang</th><th>Action</th>\n";
    echo "</tr>\n";
    foreach ($refund as $list) {
        echo "<tr valign='top'>\n";
        echo "<td align='center'>" . $list['tanggalRefund'] . "</td>\n";
        echo "<td align='center'>" . $list['Id_murid'] . "</td>\n";
        echo "<td align='center'>" . $list['Jam_hilang'] . "</td>\n";
        echo "<td align='center'>" . $list['hargaPerJam'] . "</td>\n";
        echo "<td align='center'>" . $list['Alasan'] . "</td>\n";
        
        echo "<td align='center'>";
        echo anchor('admin/refund/edit/' . $list['id'], 'edit');
        echo " | ";
        echo anchor('admin/refund/delete/' . $list['id'], 'delete');
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</table>";
}
?>