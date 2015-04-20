
<h1><?php echo $judul; ?></h1>
<ul class="nav nav-tabs">
    <li role="presentation" ><a href="<?php echo base_url(); ?>index.php/dashboard/summary" > Home</a></li>
    <li role="presentation" "><a href="<?php echo base_url(); ?>index.php/ops/student/searchSummary" > Student</a></li>
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" > Refund</a></li>
    <li role="presentation"class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/feedbacks" > Feedback</a></li>
</ul><p><?php echo anchor("admin/refund/create", "Download"); ?></p>
<?php
if ($this->session->flashdata('message')) {
    echo "<div class='message'>" . $this->session->flashdata('message') . "</div>";
}

if (count($feedback)) {
    echo "<table id='table'>\n";
    echo "<tr valign='top'>\n";
    echo "<th>ID Murid</th><th>ID Guru</th><th>ID Sales</th><th>Tanggal</th><th>Rating</th><th>Isi</th><th>Total Skor</th><th>Status</th><th>Action</th>\n";
    echo "</tr>\n";

    foreach ($feedback as $list) {
        echo "<tr valign='top'>\n";
        echo "<td>" . $list->id_murid . "</td>\n";
        echo "<td align='center'>" . $list->id_guru . "</td>\n";
        echo "<td>" . $list->id_sales . "</td>\n";
        echo "<td>" . $list->tanggal . "</td>\n";
        echo "<td>" . $list->rating . "</td>\n";
        echo "<td align='center'>" . $list->isi . "</td>\n";
        echo "<td align='center'>" . $list->total_skor . "</td>\n";
        echo "<td align='center'>" . $list->status . "</td>\n";
    

        echo "<td align='center'>";
        echo anchor('dashboard/editFeedback/' . $list->id, 'edit');
        echo " | ";
        echo anchor('admin/refund/delete/' . $list->id, 'delete');
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</table>";
}
?>  