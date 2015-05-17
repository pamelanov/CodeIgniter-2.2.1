

<!DOCTYPE html>
<html lang="en"></html>
<h1><?php echo $judul; ?></h1>

<form name='update_status' action='<?php echo base_url(); ?>index.php/dashboard/editPassword' method='post' onsubmit='return confirm("Apakah Anda yakin ingin mengubah password?")'>
    <div id ="konten">
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Masukkan Password Baru" >
        </div>







        <button type="submit" class="btn btn-danger">Edit Password</button>
</form>
</div>
</div>

</body>
</html>
