<h1><?php echo $judul; ?></h1>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/ops/student" > Create</a></li>
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/overallPerformance" > Overall Performance</a></li>
 </ul>
 <form name='update_status' action='<?php echo base_url();?>index.php/ops/student/createStatus' method='post' >
    <div id ="konten">
       
        <div class="form-group">
            <label for="id_sales">ID Sales</label>
            <input type="text" class="form-control" name="id_sales" placeholder="ID Sales">
        </div>
        <div class="form-group">
            <label for="periode_awal">Periode awal</label>
            <input type="text" class="form-control" name="periode_awal" placeholder="Jam">
        </div>
        <div class="form-group">
            <label for="periode_akhir">Periode akhir</label>
            <input type="text" class="form-control" name="periode_akhir" placeholder="Tanggal">
        </div>
        <div class="form-group">
            <label for="id_supervisor">ID Supervisor</label>
            <input type="text" class="form-control" name="id_supervisor" placeholder="ID Sales">
        </div>
        <div class="form-group">
            <label for="target">Besar target</label>
            <input type="text" class="form-control" name="target" placeholder="Status">
        </div>
        
    
    <button type="submit" class="btn btn-danger">Buat target</button>
    </form>