<!DOCTYPE html>
<html lang="en">

<body>
    <h1><?php echo $judul; ?></h1>

<div id="konten-kecil">
 <form name='update_feedback' action='<?php echo base_url();?>index.php/ops/feedbackCtrl/updateFeedback' method='post' onsubmit='return confirm("Apakah Anda yakin ingin mengubah informasi feedback?")'>
 <div class='form-group'>
 
 <div class='form-group'>
 <input type='hidden' class='form-control' name='id' value='<?php echo  $feedback->id;  ?>' placeholder='ID' required>
 </div>
 
 <div class='form-group'>
 <label for='jam'>Isi</label>
 <textarea rows="4" cols="70" class='form-control' name='isi' placeholder='Isi' required><?php echo  $feedback->isi;  ?></textarea>
 </div>

 <div class='form-group'>
 <label for='jam'>Rating</label>
 <input type='text' class='form-control' name='rating' placeholder='Rating' value='<?php echo  $feedback->rating; ?>' required>
 </div>

 <button type='submit' class='btn btn-danger'>Update Feedback</button>
</div>
 </div>
 </form>
 
 
