

<!DOCTYPE html>
<html lang="en"></html>
<h1><?php echo $judul; ?></h1>

<form name='update_status' action='<?php echo base_url(); ?>index.php/dashboard/createAccount' method='post' >
    <div id ="konten">
        <div class="form-group">
            <label for="id_acc">ID</label>
            <input type="text" class="form-control" id="id_acc" placeholder="Masukkan ID">
        </div>
           <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" placeholder="Masukkan Password">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Masukkan Email">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
            <label for="no_telp">No. Telp</label>
            <input type="text" class="form-control" id="no_telp" placeholder="Masukkan No Telp">
        </div>
          <div class="form-group">
            <label for="role">Role</label>
            <input type="text" class="form-control" id="role" placeholder="Role">
        </div>  
     
       

   
    <button type="submit" class="btn btn-danger">Create Account</button>
</form>
 </div>
</div>

</body>
</html>
