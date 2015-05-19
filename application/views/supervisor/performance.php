
  <h1><?php echo $judul; ?></h1>

 <div id="konten-kecil">
  
 <form name='update_status' action='<?php echo base_url();?>index.php/supervisor/performance/create' method='post' onsubmit='return confirm("Apakah Anda yakin ingin menambahkan target?")'>
 <?php $id_sales = $this->session->userdata('id');
        echo '<div class="form-group">
            <label for="id_sales">ID Sales (*)</label><br/>';
               echo '<select class="js-example-basic-single" name="id_sales" required>';
                  foreach($ops as $x) {
                    echo "<option value='" . $x->id_acc . "'>" . $x->id_acc . ": " . $x->nama . "</option>";
                  }  
               echo '</select>';
        echo '</div>';
        echo '<div class="form-group">';
            echo '<label for="periode">Periode (*)</label>';
            echo '<input type="month" class="form-control" name="periode" required>';
        echo '</div>';
        echo '<div class="form-group">';
            echo '<label for="id_supervisor">ID Supervisor (*)</label>';
            echo "<input type='text' class='form-control' disabled='disabled' name='id_supervisor' value=$id_sales required>";
        echo '</div>';
        echo '<div class="form-group">';
            echo '<label for="target">Besar target (*)</label>';
            echo '<input type="text" class="form-control" name="target" placeholder="Status" required>';
        echo '</div>';
     echo '<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Buat target</button>';
     ?>
 </form>
  </div>