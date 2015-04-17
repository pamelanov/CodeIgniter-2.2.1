<! DOCTYPE html>
<html>

    <h2 align="left">Status Summary</h2>	
    <h1><?php echo $judul; ?></h1>
    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/ops/student/searchSummary" > Student</a></li>
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" > Refund</a></li>
        <li role="presentation"><a href="<?php echo base_url(); ?>" > Feedback</a></li>
    </ul>
    <form class="form-inline" align="left" action='<?php echo base_url(); ?>index.php/ops/summary/searchStudent' method='post'>
        <div class="form-group">
            <label for="exampleInputName2">Enter Student ID</label>
            <input type="text" class="form-control" name="idMurid" placeholder="Jane Doe">
        </div>
        <button type="submit" class="btn btn-default">Search</button>

    </form>

    <?php
    if ($this->session->flashdata('message')) {
        echo "<div class='message'>" . $this->session->flashdata('message') . "</div>";
    }

    echo "<div id='konten'><table class='table table-bordered' >\n";
    echo "<tr valign='top'>\n";
    echo "<th>ID Murid</th>
        <th>Nama</th>
        <th>ID Sales</th>
        <th>Gender</th>
        <th>No Tlp</th>
        <th>Domisili</th>
        <th>Email</th>\n";

    echo "</tr>\n";


    echo "<tr valign='top'>\n";
    echo "<td>" . $student->Id_murid . "</td>\n";

    echo "<td align='center'>" . $student->Nama . "</td>\n";
    echo "<td>" . $student->Id_sales . "</td>\n";
    echo "<td>" . $student->Gender . "</td>\n";
    echo "<td>" . $student->No_telepon . "</td>\n";
    echo "<td>" . $student->Domisil . "</td>\n";
    echo "<td>" . $student->Email . "</td>\n";


    echo "</td>\n";
    echo "</tr>\n";

    echo "</table></div>	";
    ?>	<br/>
    <a href="<?php echo base_url(); ?>index.php/ops/summary/riwayatStatus" > Lihat</a>





</html>

