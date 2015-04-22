 <div id ="konten">
  <h1>Performance</h1>
 <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/supervisor/performance" > Create</a></li>
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/supervisor/performance/showEdit" > Edit </a></li>
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/supervisor/performance/overall" > Overall Performance</a></li>
 </ul>
 <form name='update_status' action='<?php echo base_url();?>index.php/supervisor/performance/create' method='post'>

        <div class="form-group">
            <label for="id_sales">ID Sales</label>
            <input type="text" class="form-control" name="id_sales" placeholder="ID Sales">
        </div>
        <div class="form-group">
            <label for="periode">Periode</label>
            <input type="month" class="form-control" name="periode">
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
  </div>