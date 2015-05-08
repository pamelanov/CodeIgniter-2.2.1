<h1><?php echo $judul; ?></h1>
<ul class="nav nav-tabs">
    
    <li role="presentation" "><a href="<?php echo base_url(); ?>index.php/ops/student/searchSummary" > Student</a></li>
    <li role="presentation"class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" > Refund</a></li>
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/feedbacks" > Feedback</a></li>
</ul>
<p><?php echo anchor("admin/refund/create", "Download"); ?></p>
<?php
if ($this->session->flashdata('message')) {
    echo "<div class='message'>" . $this->session->flashdata('message') . "</div>";
}

if (count($admins)) {
    echo "<table id='table'>\n";
    echo "<tr valign='top'>\n";
    echo "<th>Tanggal Refund</th><th>ID Murid</th><th>Jumlah Jam Hilang</th><th>Harga Per Jam</th><th>Sebab Jam Hilang</th><th>Action</th>\n";
    echo "</tr>\n";
    foreach ($admins as $list) {
        echo "<tr valign='top'>\n";
        echo "<td align='center'>" . $list->tanggal . "</td>\n";
        echo "<td align='center'>" . $list->id_murid . "</td>\n";
        echo "<td align='center'>" . $list->jam_hilang . "</td>\n";
        echo "<td align='center'>" . $list->hargaPerJam . "</td>\n";
        echo "<td align='center'>" . $list->alasan . "</td>\n";

        echo "<td align='center'>";
        echo anchor('dashboard/editRefund/' . $list->id, 'edit');
        echo " | ";
        echo anchor('ops/refund/delete/' . $list->id, 'delete');
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</table>";
}
?>