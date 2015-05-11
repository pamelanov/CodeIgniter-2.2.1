<!DOCTYPE html>
<html lang="en">

<body>
<ul class="nav nav-tabs">
<li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/createData" > Student</a></li>
<li role="presentation"><a href="<?php echo base_url(); ?>index.php/admin/refund" > Refund</a></li>
<li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/crudFeedback" > Feedback</a></li>
</ul>

<?php

//if (!empty($student)){

 echo "<form name='update_status' action='<?php echo base_url();?>index.php/ops/feedback/updateFeedback' method='post'>";
 echo "<div class='form-group'>";
 
 echo "<label for='id_murid'>ID Murid : </label><br/>";
 //echo "<label for='id_murid'>ID Guru : $feedback->id_murid</label><br/>";
 echo "<br>";
 
/*
 echo "<div class='form-group'>";
 echo "<label for='jam'>ID Guru</label>";
 echo "<input type='text' class='form-control' name='id_guru' placeholder='ID Guru'>";
 echo "</div>";

 echo "<div class='form-group'>";
 echo "<label for='jam'>ID Murid</label>";
 echo "<input type='text' class='form-control' name='id_murid' placeholder='ID Murid'>";
 echo "</div>";
*/

 echo "<div class='form-group'>";
 echo "<label for='tanggal'>Tanggal</label>";
 echo "<input type='date' class='form-control' name='tanggal'>";
 echo "</div>";

 echo "<div class='form-group'>";
 echo "<label for='id_sales'>ID Sales</label>";
 echo "<input type='text'class='form-control' name='id_sales' placeholder='ID Sales'>";
 echo "</div>";

 echo "<div class='form-group'>";
 echo "<label for='jam'>Isi</label>";
 echo "<input type='text' class='form-control' name='isi' placeholder='Isi'>";
 echo "</div>";

 echo "<div class='form-group'>";
 echo "<label for='jam'>Rating</label>";
 echo "<input type='text' class='form-control' name='rating' placeholder='Rating'>";
 echo "</div>";

 echo "<button type='submit' class='btn btn-danger'>Update Feedback</button>";

 echo"</div>";
 echo "</form>";
 
 echo anchor('dashboard/crudFeedback', '<-- halaman sebelumnya');
 //}*/
?> 
