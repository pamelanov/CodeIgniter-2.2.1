 <h1><?php echo $judul; ?></h1>
 <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/supervisor/performance" > Create</a></li>
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/supervisor/performance/showEdit" > Edit </a></li>
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/supervisor/performance/overall" > Overall Performance</a></li>
 </ul>
 
 <div id="konten">
    <p>Mohon maaf, target tidak berhasil disimpan.</p>
    <p>Mohon cek kembali apakah isian yang dimasukkan sudah valid atau belum.</p>
      <button onclick="<?php echo base_url();?>index.php/supervisor/performance" class="btn btn-danger">Kembali</button>
 </div>