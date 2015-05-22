

<!DOCTYPE html>
<html lang="en"></html>
<h1><?php echo $judul; ?></h1>

<form action='<?php echo base_url(); ?>index.php/dashboard/createAccount' method='POST' onsubmit='return confirm("Apakah Anda yakin ingin membuat akun?")' >
    <div id ="konten">
        <div class="row">
        <div class="col-md-6">
        <div class="form-group">
            <label for="id_acc">ID (*)</label>
            <input type="text" class="form-control" name="id_acc" placeholder="ID harus terdiri dari 2 huruf" required>
        </div>
           <div class="form-group">
            <label for="password">Password (*)</label>
            <input type="password" class="form-control" name="password" placeholder="Minimum 3 karakter" required>
        </div>
        <div class="form-group">
            <label for="email">Email (*)</label>
            <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="nama">Nama (*)</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
        </div>
        <div class="form-group">
            <label for="no_telp">No. Telp</label>
            <input type="text" class="form-control" name="no_telp" placeholder="Masukkan No Telp">
        </div>
          <div class="form-group">
            <label for="role">Role</label><br>
            <select name="role">
                <option value=1>Admin</option>
                <option value=2>Operational Sales</option>
                <option value=3>Supervisor</option>
            </select>
        </div>  
        </div>
        </div>
       
       <button type="submit" class="btn btn-danger">Create Account</button>
</form>
 </div>
</div>

</body>
</html>
