<!DOCTYPE html>
<html lang="en">
    
 <h1><?php echo $judul; ?></h1>





<body>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/createData" > Student</a></li>
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/admin/refund" > Refund</a></li>
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/readFeedback" > Feedback</a></li>
</ul>

<div id ="konten">
<form class="form-inline" align="left" action='<?php echo base_url();?>index.php/ops/create/searchStudentStatus' method='post'>
  <div class="form-group">
    <label for="exampleInputName2">Enter Student ID</label>
    <input type="text" class="form-control" name="idMurid" placeholder="ID Student">
  </div>
  <button type="submit" class="btn btn-default">Search</button>
  <br/><br/>
</form>
  <?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

if (!empty($student)){
        ?>
        <form name='update_status' action='<?php echo base_url();?>index.php/ops/create/createStatus' method='post'>
        <?php
        echo "<div class='form-group'>";
            echo "<label for='id_murid'>ID Murid: $student->id_murid</label><br/>";
            echo "<label for='id_murid'>Nama : $student->nama</label><br/>";
            echo "<label for='id_murid'>Gender: $student->gender</label><br/>";
            echo "<label for='id_murid'>Domisili : $student->domisili</label><br/>";
        echo "<br>";
         echo "<div class='form-group'>";
            echo "<label for='id_murid'>ID Murid</label>";
            echo "<input type='text' class='form-control' name='id_murid' placeholder='ID Murid'>";
        echo "</div>";
        echo "<div class='form-group'>";
            echo "<label for='noInvoice'>No Invoice (Opsional)</label>";
            echo "<input type='text' class='form-control' name='no_invoice' placeholder='Nomor Invoice'>";
        echo "</div>";
        echo "<div class='form-group'>";
            echo "<label for='jam'>Jam</label>";
            echo "<input type='time' class='form-control' name='jam' placeholder='Jam'>";
        echo "</div>";
        echo "<div class='form-group'>";
            echo "<label for='tanggal'>Tanggal</label>";
            echo "<input type='date' class='form-control' name='tanggal'>";
        echo "</div>";
        echo "<div class='form-group'>";
            echo "<label for='id_sales'>ID Sales</label>";
            echo "<input type='text'class='form-control' name='id_sales' placeholder='ID Sales'>";
        echo "</div>";
        echo "<div class='form-group'>";
                  echo "<label for='status'>Status</label>";
                    echo "<select class='form-control' name='status'>";
                        echo "<option>1</option>";
                        echo "<option>2</option>";
                        echo "<option>3</option>";
                        echo "<option>4</option>";
                        echo "<option>5</option>";
                        echo "<option>6</option>";
                        echo "<option>7</option>";
                        echo "<option>8</option>";
                    echo "</select>";
        echo "</div>";
        echo "<button type='submit' class='btn btn-danger'>Update Status</button>";

    echo"</div>";
echo "</form>";
}
?>
  
  

        
    </div>
   




</body>
</html>