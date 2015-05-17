

<!DOCTYPE html>
<html lang="en"></html>
<h1><?php echo $judul; ?></h1>

<form name='update_status' action='<?php echo base_url(); ?>index.php/dashboard/editAccount' method='post' >
    <div id ="konten">
        
        
        <div class="form-group">
            <label for="id_acc">ID</label>
            <input type="text" class="form-control" name="id_acc" placeholder="Masukkan ID" value="<?php echo $user->id_acc?>" >
        </div>
        
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Masukkan Email"value="<?php echo $user->email?>" >
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama"value="<?php echo $user->nama?>" >
        </div>
        <div class="form-group">
            <label for="no_telp">No. Telp</label>
            <input type="text" class="form-control" name="no_telp" placeholder="Masukkan No Telp"value="<?php echo $user->no_telp?>"> 
        </div>
          <div class="form-group">
            <label for="role">Role</label>
            <input type="text" class="form-control" name="role" placeholder="Role"value="<?php echo $user->role?>" >
        </div>  
       
       

   
    <button type="submit" class="btn btn-danger">Edit Account</button>
</form>
 </div>
</div>

</body>
</html>
