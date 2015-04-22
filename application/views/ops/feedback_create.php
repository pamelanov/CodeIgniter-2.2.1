
<<<<<<< HEAD

=======
>>>>>>> punya-pamela
<!DOCTYPE html>
<html lang="en"></html>
<h1><?php echo $judul; ?></h1>
<ul class="nav nav-tabs">
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/createData" > Home</a></li>
    <li role="presentation" ><a href="<?php echo base_url(); ?>index.php/dashboard/createStatus" > Student</a></li>
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/createRefund" > Refund</a></li>
    <li role="presentation"class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/createFeedback" > Feedback</a></li>
</ul>
<form name='update_status' action='<?php echo base_url(); ?>index.php/ops/student/createStatus' method='post' >
    <div id ="konten">

        <div class="form-group">
            <label for="idMurid">ID Murid</label>
            <input type="text" class="form-control" id="idMurid" placeholder="Masukkan ID Murid">
        </div>
        <div class="form-group">
            <label for="jam">ID Guru</label>
            <input type="text" class="form-control" id="jam" placeholder="Masukkan ID Guru">
        </div>
        <div class="form-group">
            <label for="tanggal">ID Sales</label>
            <input type="text" class="form-control" id="tanggal" placeholder="Masukkan ID Sales">
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="text" class="form-control" id="tanggal" placeholder="Masukkan Tanggal">
        </div>
        <div class="form-group">
            <label for="tanggal">Rating</label>
            <input type="text" class="form-control" id="tanggal" placeholder="Masukkan Rating">
        </div>

        <div class="form-group">
            <label for="tanggal">Isi</label>
            <input type="text" class="form-control" id="tanggal" placeholder="Masukkan Isi">
        </div>

        <div class="form-group">
            <label for="tanggal">Total Skor</label>
            <input type="text" class="form-control" id="tanggal" placeholder="Masukkan Total Skor">
        </div>
        <div class="form-group">
            <label for="tanggal">Status</label>
            <input type="text" class="form-control" id="tanggal" placeholder="Masukkan Status">
        </div>





<<<<<<< HEAD
    </div>
    <button type="submit" class="btn btn-danger">Create Feedback</button>
=======
  
    <button type="submit" class="btn btn-danger">Create Feedback</button>
      </div>
>>>>>>> punya-pamela
</form>
</div>

</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> punya-pamela
