<h1><?php echo $judul; ?></h1>
<body>

<form name='create_feedback' action='<?php echo base_url(); ?>index.php/ops/feedbackCtrl/createFeedback' method='post' onsubmit='return confirm("Apakah Anda yakin ingin menambahkan feedback?")' >
    <div id ="konten">
        <div class="row">
            <div class="col-md-6">
        <div class="form-group">
            <label for="id_murid">ID Murid</label>
            <select class="js-example-basic-single" name="id_murid" required>
                    <?php foreach($students as $x) {
                        echo "<option value='" . $x->id . "'>" . $x->id_murid . ": " . $x->nama . "</option>";
                        }  
                    ?>
                </select>
        </div>
        <div class="form-group">
            <label for="id_guru">ID Guru</label>
            <select class="js-example-basic-single" name="id_guru" required>
                    <?php foreach($teachers as $x) {
                        echo "<option value='" . $x->id . "'>" . $x->id_guru . ": " . $x->nama . "</option>";
                        }  
                    ?>
                </select>
        </div>
        <div class="form-group">
            <label for="id_sales">ID Sales</label>
            <input type="text" class="form-control" name="id_sales" placeholder="Masukkan ID Sales" value="<?php echo $this->session->userdata('id');?>" required>
        </div>
        
            </div><!-- nutup col-md-6 -->
            
            <div class="col-md-6">
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" placeholder="Masukkan Tanggal" value="<?php echo date('Y-m-d');?>" required>
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
                <select class='form-control' name='rating' required>";
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

        <div class="form-group">
            <label for="isi">Feedback</label>
            <textarea rows="4" cols="80" name="isi" placeholder="Masukkan Isi" required></textarea>
        </div>
          <button type="submit" class="btn btn-danger"><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Create Feedback</button>
        </div><!-- nutup col-md-6 -->
        </div><!--nutup row -->
  
      </div>
</form>

</body>