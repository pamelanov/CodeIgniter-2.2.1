

<!DOCTYPE html>
<html lang="en"></html>
<h1><?php echo $judul; ?></h1>
<ul class="nav nav-tabs">
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/createData" > Home</a></li>
    <li role="presentation" ><a href="<?php echo base_url(); ?>index.php/dashboard/createStatus" > Student</a></li>
   <li role="presentation"class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/createRefund" > Refund</a></li>
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/createFeedback" > Feedback</a></li>
</ul>
<form name='update_status' action='<?php echo base_url(); ?>index.php/ops/student/createStatus' method='post' >
    <div id ="konten">

        <div class="form-group">
            <label for="idMurid">Tanggal Refund</label>
            <input type="text" class="form-control" id="idMurid" placeholder="Masukkan ID Murid">
        </div>
        <div class="form-group">
            <label for="jam">ID Murid</label>
            <input type="text" class="form-control" id="jam" placeholder="Jam">
        </div>
        <div class="form-group">
            <label for="tanggal">Jumlah Jam Hilang</label>
            <input type="text" class="form-control" id="tanggal" placeholder="Tanggal">
        </div>
        <div class="form-group">
            <label for="tanggal">Harga Per Jam</label>
            <input type="text" class="form-control" id="tanggal" placeholder="Tanggal">
        </div>
        <div class="form-group">
            <label for="tanggal">Sebab Jam Hilang</label>
            <input type="text" class="form-control" id="tanggal" placeholder="Tanggal">
        </div>
       
       

    </div>
    <button type="submit" class="btn btn-danger">Update Status</button>
</form>
</div>

</body>
</html>
