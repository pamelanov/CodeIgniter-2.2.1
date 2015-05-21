<h1><?php echo $judul; ?></h1>

<div id ="konten-kecil">
        <form name='searchFeedback' action='<?php echo base_url(); ?>index.php/ops/feedbackCtrl/searchPeriode' method='post' >
        
        <div class="form-group">
            <label for="enterStudentID">ID Operational Sales</label>
                <select class="js-example-basic-single" name="id_ops" required>
                    <option value='semua'>Seluruh Operational Sales</option>
                    <?php foreach($ops as $x) {
                        echo "<option value='" . $x->id . "'>" . $x->id_acc . ": " . $x->nama . "</option>";
                        }  
                    ?>
                </select>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal Awal (*)</label>
            <input type='date' class="form-control" name='tanggal-awal' required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal Akhir (*)</label>
            <input type='date' class="form-control" name='tanggal-akhir' required>
        </div>

        <button type="submit" class="btn btn-danger">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
        </form>
        

    

</div>