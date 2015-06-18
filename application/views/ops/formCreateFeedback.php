<h1><?php echo $judul; ?></h1>
<body>

<form name='create_feedback' action='<?php echo base_url(); ?>index.php/ops/feedbackCtrl/createFeedback' method='post' onsubmit='return confirm("Apakah Anda yakin ingin menambahkan feedback?")' >
    <div id ="konten">
        <div class="row">
            <div class="col-md-6">
        <div class="form-group">
            <label for="id_kelas">ID Kelas (*)</label>
            <select class="js-example-basic-single" name="id_kelas" required>
                    <option value=""></option>
                    <?php foreach($courses as $x) {
                        echo "<option value='" . $x->id . "'>" . $x->id_kelas .  "</option>";
                        }  
                    ?>
                </select>
        </div>
          <div class="form-group">
            <label for="rating">Rating (*)</label>
                <select class='form-control' name='rating' required>";
                <option></option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                </select>
        </div>
            <div class="form-group" style="display:none">
            <input type="date" class="form-control" name="tanggal" placeholder="Masukkan Tanggal" value="<?php echo date('Y-m-d');?>" required>
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" name="id_sales" placeholder="Masukkan ID Sales" value="<?php echo $this->session->userdata('id');?>" required>
        </div>
        
        <button type="submit" class="btn btn-danger"><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Create Feedback</button>
        
            </div><!-- nutup col-md-6 -->
            
            <div class="col-md-6">

        <div class="form-group">
            <label for="isi">Feedback  (*)</label>
            <textarea rows="5" cols="80" name="isi" placeholder="maksimal 500 karakter" maxlength="500" required></textarea>
        </div>
          
        </div><!-- nutup col-md-6 -->
        </div><!--nutup row -->
  
      </div>
</form>

</body>