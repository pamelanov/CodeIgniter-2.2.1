<!DOCTYPE html>
<html lang="en">

<body>
<ul class="nav nav-tabs">
<li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/createData" > Student</a></li>
<li role="presentation"><a href="<?php echo base_url(); ?>index.php/admin/refund" > Refund</a></li>
<li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/crudFeedback" > Feedback</a></li>
</ul>


<!-- if (!empty($student)){  -->

 <form name='update_status' action='<?php echo base_url();?>index.php/dashboard/createFeedback' method='post'>
 <div class='form-group'>
 
 <!--  
 <label for='id_murid'>ID Murid : </label><br/>
 <label for='id_murid'>ID Guru : $feedback->id_murid</label><br/>
 <br>
 -->
 
 <div class='form-group'>
 <label for='id_guru'>ID Guru</label>
 <input type='text' class='form-control' name='id_guru' placeholder='ID Guru'>
 </div>

 <div class='form-group'>
 <label for='id_murid'>ID Murid</label>
 <input type='text' class='form-control' name='id_murid' placeholder='ID Murid'>
 </div>


 <div class='form-group'>
 <label for='tanggal'>Tanggal</label>
 <input type='date' class='form-control' name='tanggal'>
 </div>

 <div class='form-group'>
 <label for='id_sales'>ID Sales</label>
 <input type='text'class='form-control' name='id_sales' placeholder='ID Sales'>
 </div>

 <div class='form-group'>
 <label for='isi'>Isi</label>
 <input type='text' class='form-control' name='isi' placeholder='Isi'>
 </div>

 <div class='form-group'>
 <label for='rating'>Rating</label>
 <input type='text' class='form-control' name='rating' placeholder='Rating'>
 </div>
 

 <button type='submit' class='btn btn-danger'>Tambah Feedback</button>

 <?php echo anchor('dashboard/readFeedback', '       halaman sebelumnya');?>
 </div>
 </form>
 
 
=======
 </div>
 </form>

