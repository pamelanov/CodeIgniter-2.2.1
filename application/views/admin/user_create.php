

<!DOCTYPE html>
<html lang="en"></html>
<h1><?php echo $judul; ?></h1>

<form action='<?php echo base_url(); ?>index.php/dashboard/createAccount' method='POST' >
    <div id ="konten">
        <div class="form-group">
            <label for="id_acc">ID</label>
            <input type="text" class="form-control" name="id_acc" placeholder="Masukkan ID">
        </div>
           <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Masukkan Email">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
            <label for="no_telp">No. Telp</label>
            <input type="text" class="form-control" name="no_telp" placeholder="Masukkan No Telp">
        </div>
          <div class="form-group">
            <label for="role">Role</label>
            <input type="text" class="form-control" name="role" placeholder="Role">
        </div>  
     
       

   
    <button type="submit" class="btn btn-danger">Create Account</button>
</form>
 </div>
</div>

</body>
</html>
