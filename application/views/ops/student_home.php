<h1><?php echo $judul; ?></h1>
<p><?php echo anchor("ops/student/create", "Create new student"); ?></p>
<?php
if ($this->session->flashdata('message')) {
    echo "<div class='message'>" . $this->session->flashdata('message') . "</div>";
}

if (count($student)) {
    echo "<table class='table table-bordered'>\n";
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