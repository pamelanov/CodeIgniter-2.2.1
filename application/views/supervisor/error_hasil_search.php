 <h1><?php echo $judul; ?></h1>
 <ul class="nav nav-tabs">
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/supervisor/performance" > Create</a></li>
  <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/supervisor/performance/showEdit" > Edit </a></li>
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/supervisor/performance/overall" > Overall Performance</a></li>
 </ul>
<div id="konten">
    Tidak terdapat target dengan ID sales yang dimasukkan.<br/><br/>
    <a href="<?php echo base_url(); ?>index.php/supervisor/performance/showEdit" >
    <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Kembali</button> </a>
</div>