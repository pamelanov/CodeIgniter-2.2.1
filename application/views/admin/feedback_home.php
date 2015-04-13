<h1><?php echo $judul; ?></h1>
<p><?php echo anchor("admin/feedback/create", "Create new feedback"); ?></p>
<?php
if ($this->session->flashdata('message')) {
    echo "<div class='message'>" . $this->session->flashdata('message') . "</div>";
}

if (count($feedback)) {
    echo "<table id='table'>\n";
    echo "<tr valign='top'>\n";
    echo "<th>ID Murid</th><th>ID Guru</th><th>ID Sales</th><th>Tanggal</th><th>Rating</th><th>Kelebihan</th><th>Kekurangan</th><th>Saran</th><th>Keterangan</th><th>Status</th><th>Action</th>\n";
    echo "</tr>\n";
    foreach ($feedback as $list) {
        echo "<tr valign='top'>\n";
        echo "<td>" . $list['id_murid'] . "</td>\n";
        echo "<td align='center'>" . $list['id_guru'] . "</td>\n";
        echo "<td>" . $list['id_sales'] . "</td>\n";
        echo "<td>" . $list['tanggal'] . "</td>\n";
        echo "<td>" . $list['rating'] . "</td>\n";
        echo "<td align='center'>" . $list['kelebihan'] . "</td>\n";
        echo "<td align='center'>" . $list['kekurangan'] . "</td>\n";
        echo "<td align='center'>" . $list['saran'] . "</td>\n";
        echo "<td align='center'>" . $list['keterangan'] . "</td>\n";
        echo "<td align='center'>" . $list['statuss'] . "</td>\n";
        echo "<td align='center'>";
        echo anchor('admin/feedback/edit/' . $list['id'], 'edit');
        echo " | ";
        echo anchor('admin/feedback/delete/' . $list['id'], 'delete');
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</table>";
}
?>