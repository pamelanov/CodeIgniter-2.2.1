<html>

    <h1><?php echo $judul; ?></h1>
    <ul class="nav nav-tabs">
        <li role="presentation" class="active" ><a href="<?php echo base_url(); ?>index.php/ops/student/searchSummary" > Student</a></li>
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" > Refund</a></li>
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/feedbacks" > Feedback</a></li>
    </ul>
<div id="konten">
    <form class="form-inline" align="left" action='<?php echo base_url(); ?>index.php/ops/summary/searchStudent' method='post'>
    <div class="form-group">
        <label for="exampleInputName2">Enter Student ID</label>
        <input type="text" class="form-control" name="idMurid" placeholder="Jane Doe">
    </div>
    <button type="submit" class="btn btn-default">Search</button>

</form>
</div>
</form>
</html>