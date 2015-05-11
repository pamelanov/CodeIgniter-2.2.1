<h1><?php echo $judul; ?></h1>


<ul class="nav nav-tabs">
    
    <li role="presentation" "><a href="<?php echo base_url(); ?>index.php/ops/student/searchSummary" > Student</a></li>
    <li role="presentation"class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" > Refund</a></li>
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/feedbacks" > Feedback</a></li>
</ul>
<p><?php echo anchor("download/download_refunds", "Download"); ?></p>

<?php
if ($this->session->flashdata('message')) {
    echo "<div class='message'>" . $this->session->flashdata('message') . "</div>";
}

if (count($admins)) {
    echo "<table class='table table-bordered'>\n";
    echo "<tr valign='top '>\n";
    echo "<th><center>Tanggal Refund</th><th><center>No Invoice</th><th><center>Jumlah Jam Hilang</th><th><center>Alasan</th><th><center>Aksi</th><th><center>Selisih</th><th><center>ID Sales</th><th><center>Action</th>\n";
    echo "</tr>\n";
    foreach ($admins as $list) {
        echo "<tr valign='top'>\n";
        echo "<td align='center'>" . $list->tanggal . "</td>\n";
        echo "<td align='center'>" . $list->no_invoice . "</td>\n";
        echo "<td align='center'>" . $list->jam_hilang . "</td>\n";
        echo "<td align='center'>" . $list->alasan . "</td>\n";
        echo "<td align='center'>" . $list->action . "</td>\n";
        echo "<td align='center'>" . $list->selisih . "</td>\n";
        echo "<td align='center'>" . $list->id_sales . "</td>\n";
        

        echo "<td align='center'>";
        echo anchor('admin/refund/edit/' . $list->id, 'edit');
        echo " | ";
        echo anchor('admin/refund/delete/' . $list->id, 'delete');
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</table>";
}
?>