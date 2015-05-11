<!DOCTYPE html>
<html lang="en">

<body>
    <h1><?php echo $judul; ?></h1>
    <ul class="nav nav-tabs">
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/summary" > Student</a></li>
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" > Refund</a></li>
        <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/feedbackSummary" > Feedback</a></li>
    </ul>

 <form name='update_feedback' action='<?php echo base_url();?>index.php/ops/feedbackCtrl/updateFeedback' method='post'>
 <div class='form-group'>
 
 <div class='form-group'>
 <label for='jam'>ID Feedback</label>
 <input type='text' class='form-control' name='id' placeholder='ID'>
 </div>
 
 <div class='form-group'>
 <label for='jam'>Isi</label>
 <input type='text' class='form-control' name='isi' placeholder='Isi'>
 </div>

 <div class='form-group'>
 <label for='jam'>Rating</label>
 <input type='text' class='form-control' name='rating' placeholder='Rating'>
 </div>

 <button type='submit' class='btn btn-danger'>Update Feedback</button>

 </div>
 </form>
 
 <a href="<?php echo base_url(); ?>index.php/dashboard/feedbackSummary" > Halaman sebelumnya</a>
 
