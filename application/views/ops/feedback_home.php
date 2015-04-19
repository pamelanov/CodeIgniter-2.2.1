
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

if (count($feedback)) {  echo "<table id='table'>\n";
    echo "<tr valign='top'>\n";
    echo "<th>ID Murid</th><th>ID Guru</th><th>ID Sales</th><th>Tanggal</th><th>Rating</th><th>Isi</th><th>Total Skor</th><th>Status</th><th>Action</th>\n";
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