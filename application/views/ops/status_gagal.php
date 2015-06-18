<h1><?php echo $judul; ?></h1>
<div id="konten">
    <p>Status tidak berhasil dimasukkan. Kemungkinan penyebabnya: Anda mencoba memasukkan salah satu dari status 7-9
    dengan nomor invoice yang sudah menyimpan status tersebut sebelumnya. Pastikan lagi isian Anda valid.</p>
    
     <a href="<?php echo base_url(); ?>/index.php/dashboard/createData" >
    <button type="submit" class="btn btn-danger">
	<span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Kembali</button> </a>
</div>