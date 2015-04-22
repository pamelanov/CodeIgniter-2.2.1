<<<<<<< HEAD
<h1><?php echo $judul; ?></h1>
<br>
<ul class="nav nav-tabs">
    <li role="presentation" ><a href="<?php echo base_url(); ?>index.php/dashboard/summary" > Home</a></li>
    <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/ops/student/searchSummary" > Student</a></li>
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" > Refund</a></li>
    <li role="presentation"><a href="<?php echo base_url(); ?>" > Feedback</a></li>
</ul>
<p><?php echo anchor("admin/refund/create", "Download"); ?></p>
=======
>>>>>>> punya-pamela
<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

<<<<<<< HEAD
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
=======
if (!empty($student)){
        
        echo "<form name='update_status' action='<?php echo base_url();?>index.php/ops/student/createStatus' method='post'>";
        echo "<div class='form-group'>";
            echo "<label for='id_murid'>ID Murid : $student->id_murid</label><br/>";
            echo "<label for='id_murid'>Nama : $student->nama</label><br/>";
            echo "<label for='id_murid'>Gender: $student->gender</label><br/>";
            echo "<label for='id_murid'>Domisili : $student->domisili</label><br/>";
        echo "<br>";
        echo "<div class='form-group'>";
            echo "<label for='jam'>Jam</label>";
            echo "<input type='text' class='form-control' name='jam' placeholder='Jam'>";
        echo "</div>";
        echo "<div class='form-group'>";
            echo "<label for='tanggal'>Tanggal</label>";
            echo "<input type='date' class='form-control' name='tanggal'>";
        echo "</div>";
        echo "<div class='form-group'>";
            echo "<label for='id_sales'>ID Sales</label>";
            echo "<input type='text'class='form-control' name='id_sales' placeholder='ID Sales'>";
        echo "</div>";
        echo "<div class='form-group'>";
                  echo "<label for='status'>Status</label>";
                    echo "<select class='form-control' name='status'>";
                        echo "<option>1</option>";
                        echo "<option>2</option>";
                        echo "<option>3</option>";
                        echo "<option>4</option>";
                        echo "<option>5</option>";
                        echo "<option>6</option>";
                        echo "<option>7</option>";
                        echo "<option>8</option>";
                    echo "</select>";
        echo "</div>";
        echo "<button type='submit' class='btn btn-danger'>Update Status</button>";

    echo"</div>";
echo "</form>";
>>>>>>> punya-pamela
}
?>