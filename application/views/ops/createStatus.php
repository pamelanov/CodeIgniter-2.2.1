<!DOCTYPE html>
<html lang="en"></html>
<h1><?php echo $judul; ?></h1>
<ul class="nav nav-tabs">
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/createData" > Home</a></li>
    <li role="presentation"class="active" ><a href="<?php echo base_url(); ?>index.php/ops/student/searchSummary" > Student</a></li>
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/createRefund" > Refund</a></li>
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/createFeedback" > Feedback</a></li>
</ul>
<form name='update_status' action='<?php echo base_url(); ?>index.php/ops/student/createStatus' method='post' >
    <div id ="konten">

        <div class="form-group">
            <label for="idMurid">ID Murid</label>
            <input type="text" class="form-control" id="idMurid" placeholder="Masukkan ID Murid">
        </div>
        <div class="form-group">
            <label for="jam">Jam</label>
            <input type="text" class="form-control" id="jam" placeholder="Jam">
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="text" class="form-control" id="tanggal" placeholder="Tanggal">
        </div>
        <div class="form-group">
            <label for="idSales">ID Sales</label>
            <input type="text" class="form-control" id="idSales" placeholder="ID Sales">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" placeholder="Status">
        </div>

    </div>
    <button type="submit" class="btn btn-danger">Update Status</button>
</form>
</div>

</body>
</html>