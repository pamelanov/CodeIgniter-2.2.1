<!DOCTYPE html>
    <html lang="en"></html>
    <h1><?php echo $judul; ?></h1>
<ul class="nav nav-tabs">
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/createData" > Home</a></li>
    <li role="presentation"class="active" ><a href="<?php echo base_url(); ?>index.php/ops/student/searchSummary" > Student</a></li>
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/createRefund" > Refund</a></li>
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/createFeedback" > Feedback</a></li>
</ul>
    <body>
    
<div id ="konten">
<form class="form-inline" align="left" action='<?php echo base_url();?>index.php/ops/summary/searchStudentStatus' method='post'>
  <div class="form-group">
    <label for="exampleInputName2">Enter Student ID</label>
    <input type="text" class="form-control" name="idMurid" placeholder="ID Student">
  </div>
  <button type="submit" class="btn btn-default">Search</button>
  <br/><br/>

  <?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

if (!empty($student)){
        
        echo "<form name='update_status' action='<?php echo base_url();?>index.php/ops/student/createStatus' method='post'>";
        echo "<div class='form-group'>";
            echo "<label for='id_murid'>ID Murid : $student->id_murid</label><br/>";
            echo "<label for='id_murid'>Nama : $student->nama</label><br/>";
            echo "<label for='id_murid'>Gender: $student->gender</label><br/>";
            echo "<label for='id_murid'>Domisili : $student->domisili</label><br/>";
        echo "Rubah Status";
        echo '<br>';
        echo "<div class='form-group'>";
            echo "<label for='jam'>Jam</label>";
            echo "<input type='text' class='form-control' name='jam' placeholder='Jam'>";
        echo "</div>";
        echo '<br>';
        echo "<div class='form-group'>";
            echo "<label for='tanggal'>Tanggal</label>";
            echo "<input type='date' class='form-control' name='tanggal'>";
        echo "</div>";
        echo '<br>';
        echo "<div class='form-group'>";
            echo "<label for='id_sales'>ID Sales</label>";
            echo "<input type='text'class='form-control' name='id_sales' placeholder='ID Sales'>";
        echo "</div>";
        echo '<br>';
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
        echo '<br>';
        echo "<button type='submit' class='btn btn-danger'>Update Status</button>";

    echo"</div>";
echo "</form>";
}
?>
  
</body>
</html>