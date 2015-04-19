

<!DOCTYPE html>
<html lang="en"></html>
<h1><?php echo $judul; ?></h1>

<form name='update_status' action='<?php echo base_url(); ?>index.php/dashboard/createAccount' method='post' >
    <div id ="konten">
        <div class="form-group">
            <label for="idMurid">ID</label>
            <input type="text" class="form-control" id="id_acc" placeholder="Masukkan ID">
        </div>
        <div class="form-group">
            <label for="jam">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Masukkan Email">
        </div>
        <div class="form-group">
            <label for="tanggal">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
            <label for="tanggal">No. Telp</label>
            <input type="text" class="form-control" id="no_telp" placeholder="Masukkan No Telp">
        </div>
          <div class="form-group">
            <label for="tanggal">Role</label>
            <input type="text" class="form-control" id="role" placeholder="Role">
        </div>  
       
       

   
    <button type="submit" class="btn btn-danger">Create Account</button>
</form>
 </div>
</div>

</body>
</html>
