<h1><?php echo $judul; ?></h1>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/createData" > Student</a></li>
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/admin/refund" > Refund</a></li>
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/crudFeedback" > Feedback</a></li>
</ul>

<script>
function myFunction() {
    if (confirm("Apakah Anda yakin ingin memperbaharui status?") == true) {
        
    } else {
        document.getElementById("konten").innerHTML;
    }
    
}
</script>
<div id="konten">
    
<form class="form-inline" align="left" action='<?php echo base_url();?>index.php/ops/create/searchStudentStatus' method='post'>
  <div class="form-group">
    <label for="exampleInputName2">Enter Student ID</label>
    <input type="text" class="form-control" name="idMurid" placeholder="ID Student">
  </div>
  <button type="submit" class="btn btn-danger">
			 <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
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
        
        echo "<table id='table' class='table'>\n";
            echo "<tr valign='top'>\n";
                echo "<th><center>ID Murid</center></th>
                        <th><center>Nama</center></th>
                        <th><center>Gender</center></th>
                        <th><center>Domisili</center></th>\n";
            echo "</tr>\n";
            echo "<tr valign='top'>\n";
            echo "<td align='center'>" . $student->id_murid . "</td>\n";
            echo "<td align='center'>" . $student->nama . "</td>\n";
            echo "<td align='center'>" . $student->gender . "</td>\n";
            echo "<td align='center'>" . $student->domisili . "</td>\n";
            echo "</tr>\n";
        echo "</table>";

         echo "<div class='form-group'>";
            echo "<label for='id_murid'>ID Murid</label>";
            echo "<input type='text' class='form-control' name='id_murid' placeholder='ID Murid' value=$student->id_murid>";
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
        echo "<button id='demo' class='btn btn-danger'>Update Status</button>";

    echo"</div>";
echo "</form>";

}


?>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title" id ="toggle">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>

   </div>




