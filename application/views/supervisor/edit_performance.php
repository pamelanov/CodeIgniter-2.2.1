 <ul class="nav nav-tabs">
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/supervisor/performance" > Create</a></li>
  <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/supervisor/performance/showEdit" > Edit </a></li>
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/supervisor/performance/overall" > Overall Performance</a></li>
 </ul>
<div id="konten">
<form name='searchSales' action='<?php echo base_url();?>index.php/admin/summary/searchStatusStudent' method='post' >
		<div class="form-group">
		<label for="id_sales">	Enter Sales ID</label>
                        <input type='text' class="form-control" name='id_sales' placeholder="ID Sales">
                </div>        
                        <button type="submit" class="btn btn-danger">Search</button>
		
</div>