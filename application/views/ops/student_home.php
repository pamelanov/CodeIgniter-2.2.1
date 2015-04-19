<h1><?php echo $judul; ?></h1>
<br>
<ul class="nav nav-tabs">
    <li role="presentation" ><a href="<?php echo base_url(); ?>index.php/dashboard/summary" > Home</a></li>
    <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/ops/student/searchSummary" > Student</a></li>
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" > Refund</a></li>
    <li role="presentation"><a href="<?php echo base_url(); ?>" > Feedback</a></li>
</ul>
<p></p>
<?php
if ($this->session->flashdata('message')) {
    echo "<div class='message'>" . $this->session->flashdata('message') . "</div>";
}

if (count($student)) {
   echo "<table id='table'>\n";
    echo "<tr valign='top'>\n";
    echo "<th>ID Murid</th>\n<th>Nama</th><th>ID Sales</th><th>Status</th><th>Actions</th>\n";
    echo "</tr>\n";
    foreach ($student as $list) {
        echo "<tr valign='top'>\n";
        echo "<td>" . $list['id_murid'] . "</td>\n";
        echo "<td>" . $list['nama'] . "</td>\n";
        echo "<td align='center'>" . $list['id_sales'] . "</td>\n";
        echo "<td>" . $list['status'] . "</td>\n";
        echo "<td align='center'>";
        echo anchor('admin/student/edit/' . $list['id_murid'], 'edit');
        echo " | ";
        echo anchor('admin/student/delete/' . $list['id_murid'], 'delete');
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</table>";
}
?>