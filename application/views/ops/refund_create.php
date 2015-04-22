

<!DOCTYPE html>
<html lang="en"></html>
<h1><?php echo $judul; ?></h1>
<ul class="nav nav-tabs">
       <li role="presentation" ><a href="<?php echo base_url(); ?>index.php/dashboard/createData" > Home</a></li>
        <li role="presentation" ><a href="<?php echo base_url(); ?>index.php/dashboard/createStatus" > Student</a></li>
       <li role="presentation"class="active" ><a href="<?php echo base_url(); ?>index.php/dashboard/createRefund" > Refund</a></li>
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/cFeedback" > Feedback</a></li>
    </ul>
<form name='update_status' action='<?php echo base_url(); ?>index.php/dashboard/createRefund' method='post' >
    <div id ="konten">

        <div class="form-group">
            <label for="tanggal">Tanggal Refund</label>
            <input type="date" class="form-control" name="tanggal" placeholder="Masukkan ID Murid">
        </div>
        <div class="form-group">
            <label for="id_murid">ID Murid</label>
            <input type="text" class="form-control" name="id_murid" placeholder="Masukkan Jam">
        </div>
        <div class="form-group">
            <label for="jam_hilang">Jumlah Jam Hilang</label>
            <input type="text" class="form-control" name="jam_hilang" placeholder="Masukkan Jam Hilang">
        </div>
        <div class="form-group">
            <label for="hargaPerJam">Harga Per Jam</label>
            <input type="text" class="form-control" name="hargaPerJam" placeholder="Masukkan Harga Per Jam">
        </div>
        <div class="form-group">
            <label for="idGuru">ID Guru</label>
            <input type="text" class="form-control" name="id_guru" placeholder="Masukkan Harga Per Jam">
        </div>
        <div class="form-group">
            <label for="id_kelas">ID Kelas</label>
            <input type="text" class="form-control" name="id_kelas" placeholder="Masukkan Harga Per Jam">
        </div>
        <div class="form-group">
            <label for="action">Action</label>
            <input type="text" class="form-control" name="action" placeholder="Masukkan Harga Per Jam">
        </div>
         <div class="form-group">
            <label for="selisih">Selisih</label>
            <input type="text" class="form-control" name="selisih" placeholder="Masukkan Harga Per Jam">
        </div>
         <div class="form-group">
            <label for="no_invoice">No Invoice</label>
            <input type="text" class="form-control" name="no_invoice" placeholder="Masukkan Harga Per Jam">
        </div>
        <div class="form-group">
            <label for="alasan">Sebab Jam Hilang</label>
            <input type="text" class="form-control" name="alasan" placeholder="Masukkan Sebab Jam Hilang">
        
       
       

    </div>
          <div class="form-group">
            <label for="id_sales">ID Sales</label>
            <input type="text" class="form-control" name="id_sales" placeholder="Masukkan Sebab Jam Hilang">
        
       
       

    </div>
    <button type="submit" class="btn btn-danger">Create Refund</button>
    </div>
</form>
</div>

</body>
</html>