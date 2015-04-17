<html>
    <h1><?php echo $judul; ?></h1>
    <ul class="nav nav-tabs">
       <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/summary" > Home</a></li>
        <li role="presentation" ><a href="<?php echo base_url(); ?>index.php/ops/student/searchSummary" > Student</a></li>
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" > Refund</a></li>
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/feedbacks" > Feedback</a></li>
    </ul>
    <br>
    <p> Untuk melihat summary pilih salah satu menu</p>
</form>
</html>