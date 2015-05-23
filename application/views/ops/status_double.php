<h1><?php echo $judul; ?></h1>
<div id="konten">
    <p>Status berhasil dimasukkan. Namun, status dengan ID murid yang baru saja Anda masukkan telah ada
    sebelumnya pada database.</p>
    

     <a href="<?php echo base_url(); ?>/index.php/dashboard/createData" >
    <button type="submit" class="btn btn-danger">
	<span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Kembali</button> </a>
</div>