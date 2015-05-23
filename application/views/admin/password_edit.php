<h1><?php echo $judul; ?></h1>

<form name='update_password' action='<?php echo base_url(); ?>index.php/dashboard/editPassword' method='post' onsubmit='return confirm("Apakah Anda yakin ingin mengubah password?")'>
    <div id ="konten">
         <div class="form-group">
            <input type="hidden" class="form-control" name="id_acc" placeholder="Masukkan ID" value="<?php echo $user->id_acc?>" >
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Masukkan Password Baru" >
        </div>







        <button type="submit" class="btn btn-danger">Edit Password</button>
</form>
</div>
</div>

