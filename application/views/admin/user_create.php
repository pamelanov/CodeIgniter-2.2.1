

<!DOCTYPE html>
<html lang="en"></html>
<h1><?php echo $judul; ?></h1>

<form name='update_status' action='<?php echo base_url(); ?>index.php/ops/student/createStatus' method='post' >
    <div id ="konten">

        <div class="form-group">
            <label for="idMurid">Nama</label>
            <input type="text" class="form-control" id="idMurid" placeholder="Masukkan ID">
        </div>
        <div class="form-group">
            <label for="jam">Email</label>
            <input type="text" class="form-control" id="jam" placeholder="Masukkan Email">
        </div>
        <div class="form-group">
            <label for="tanggal">Nama</label>
            <input type="text" class="form-control" id="tanggal" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
            <label for="tanggal">No. Telp</label>
            <input type="text" class="form-control" id="tanggal" placeholder="Masukkan No Telp">
        </div>
        
       
       

    </div>
    <button type="submit" class="btn btn-danger">Create Refund</button>
</form>
</div>

</body>
</html>
