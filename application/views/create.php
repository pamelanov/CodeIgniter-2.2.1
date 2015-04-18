<!DOCTYPE html>
<html lang="en">
    


<body>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/ops/student" > Student</a></li>
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/admin/refund" > Refund</a></li>
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/admin/feedback" > Feedback</a></li>
</ul>

 <form name='update_status' action='<?php echo base_url();?>index.php/ops/student/createStatus' method='post' >
    <div id ="konten">
       
        <div class="form-group">
            <label for="idMurid">ID Murid</label>
            <input type="text" class="form-control" name="idMurid" placeholder="Masukkan ID Murid">
        </div>
        <div class="form-group">
            <label for="jam">Jam</label>
            <input type="text" class="form-control" name="jam" placeholder="Jam">
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="text" class="form-control" name="tanggal" placeholder="Tanggal">
        </div>
        <div class="form-group">
            <label for="idSales">ID Sales</label>
            <input type="text" class="form-control" name="idSales" placeholder="ID Sales">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" name="status" placeholder="Status">
        </div>
        
    
    <button type="submit" class="btn btn-danger">Update Status</button>
    
    <?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

if (count($students)){
	
	
    echo $students->Id_murid;
    echo "<br/>";
    echo $students->Jam;
    echo "<br/>";
    echo $students->Tanggal;
    echo "<br/>";
    echo $students->Id_sales;
    echo "<br/>";
    echo $students->No;
    
	
}

else {echo "blm ada masukan";}
?>
    
    </div>
</form>





</body>
</html>