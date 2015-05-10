<html>

    <h1><?php echo $judul; ?></h1>
    <ul class="nav nav-tabs">
        <li role="presentation" class="active" ><a href="<?php echo base_url(); ?>index.php/dashboard/summary" > Student</a></li>
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" > Refund</a></li>
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/feedbacks" > Feedback</a></li>
    </ul>
    
<div id="konten">
    <form class="form-inline" align="left" action='<?php echo base_url(); ?>index.php/ops/summary/searchStudent' method='post'>
    <div class="form-group">
        <label for="exampleInputName2">Enter Student ID</label>
        <input type="text" class="form-control" name="idMurid" placeholder="Student ID">
    </div>
    <button type="submit" class="btn btn-danger">
			 <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>

</form>
<br/><br/>
 <?php


if ((!empty($students)) && (!empty($students2))) {
        ?>
        <?php
        
        echo "<table class='table table-bordered'>\n";
            echo "<tr valign='top'>\n";
                echo "<th><center>Status</center></th>
                        <th><center>Tanggal Pengisian</center></th>
                        <th><center>No Invoice</center></th>\n";
            echo "</tr>\n";
            foreach ($students as $student){
            echo "<tr valign='top'>\n";
            echo "<td align='center'>" . $student->status . "</td>\n";
            echo "<td align='center'>" . $student->tanggal . "</td>\n";
            echo "<td align='center'> <span class='glyphicon glyphicon-minus' aria-hidden='true'></span> </td>\n";
            echo "</tr>\n";
            }
            foreach ($students2 as $student) {
            echo "<td align='center'>" . $student->no . "</td>\n";    
            echo "<td align='center'>" . $student->tanggal . "</td>\n";
            echo "<td align='center'> <span class='glyphicon glyphicon-minus' aria-hidden='true'></span> </td>\n";
            echo "</tr>\n";
            }
        echo "</table>";
        echo "<a href='" . base_url() . "index.php/ops/summary/recurring' >
        <button class='btn btn-success'>
            <span class='glyphicon glyphicon-plus-sign' aria-hidden='true'></span> Recurring Status
        </button>
        </a>";
} ?>

</div>
</form>
</html>