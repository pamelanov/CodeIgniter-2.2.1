<html>

    <h1><?php echo $judul; ?></h1>
    <ul class="nav nav-tabs">
        <li role="presentation" class="active" ><a href="<?php echo base_url(); ?>index.php/dashboard/summary" > Student</a></li>
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" > Refund</a></li>
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/feedbackSummary" > Feedback</a></li>
    </ul>

<br/><br/>
        <?php
        
        echo "<table id='table' class='table'>\n";
            echo "<tr valign='top'>\n";
                echo "<th><center>Tindakan</center></th>
                        <th><center>Jam</center></th>";
                       
            echo "</tr>\n";
            /*
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
            */
            
        echo "</table>";
        /*
        echo "<a href='" . base_url() . "index.php/ops/summary/recurring' >
        <button class='btn btn-success'>
            <span class='glyphicon glyphicon-plus-sign' aria-hidden='true'></span> Recurring Status
        </button>
        </a>";
        */
		?>

</div>
</form>
</html>
