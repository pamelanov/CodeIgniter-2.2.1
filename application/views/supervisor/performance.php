
  <h1><?php echo $judul; ?></h1>

 <div id="konten">
  
 <form name='update_status' action='<?php echo base_url();?>index.php/supervisor/performance/create' method='post'>
 <?php $id_sales = $this->session->userdata('id');
        echo '<div class="form-group">
            <label for="id_sales">ID Sales</label>
            <select class="form-control" name="id_sales" placeholder="Pilih ID Sales">';
             foreach ($ops as $op) {
              echo "<option>" . $op->id_acc . "</option>";
             }
             
            echo '</select>';
        echo '</div>';
        echo '<div class="form-group">';
            echo '<label for="periode">Periode</label>';
            echo '<input type="month" class="form-control" name="periode">';
        echo '</div>';
        echo '<div class="form-group">';
            echo '<label for="id_supervisor">ID Supervisor</label>';
            echo "<input type='text' class='form-control' name='id_supervisor' value=$id_sales>";
        echo '</div>';
        echo '<div class="form-group">';
            echo '<label for="target">Besar target</label>';
            echo '<input type="text" class="form-control" name="target" placeholder="Status">';
        echo '</div>';
     echo '<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Buat target</button>';
     ?>
 </form>
  </div>