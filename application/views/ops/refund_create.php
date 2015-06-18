<h1><?php echo $judul; ?></h1>

    <form name='create_refund' action='<?php echo base_url(); ?>index.php/dashboard/createRefund' method='post' onsubmit='return confirm("Apakah Anda yakin ingin menambahkan informasi refund?")' >
        <div id ="konten">
            <div class="row">
                <div class="col-md-6">
            <div class="form-group">
                <label for="no_invoice">No. Invoice (*)</label>
                    <select class="js-example-basic-single" name="no_invoice" required>
                    <?php foreach($invoices as $x) {
                        echo "<option value='" . $x->id . "'>" . $x->no_invoice . "</option>";
                        }  
                    ?>
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" name="id_sales" placeholder="Masukkan ID Sales" value="<?php echo $this->session->userdata('id');?>" required>
            </div>
            <div class="form-group" style="display:none">
                <input type="date" class="form-control" name="tanggal" placeholder="Masukkan Tanggal" value="<?php echo date('Y-m-d'); ?>" required>
            </div>
            <div class="form-group">
                <label for="jam_hilang">Jam Hilang (*)</label>
                <input type="text" class="form-control" name="jam_hilang" placeholder="Masukkan Jam Hilang" required>
            </div>
              <div class="form-group">
                <label for="selisih">Selisih (Rp)</label>
                <input type="text" class="form-control" name="selisih" placeholder="Masukkan Selisih">
            </div>
            </div><!-- tutup col-md-6 -->
            <div class="col-md-6">
            <div class="form-group">
                <label for="action">Action (*)</label><br>
                <textarea rows="3" cols="80" name="action" placeholder="Masukkan Action (maksimal 300 karakter)" maxlength="300" required></textarea>
            </div>

          
            <div class="form-group">
                <label for="alasan">Alasan (*)</label><br>
                <textarea rows="3" cols="80" name="alasan" placeholder="Masukkan Alasan (maksimal 300 karakter)" maxlength="300" required></textarea>
            </div>

            
            </div><!--nutup col-md-6 -->
            </div><!-- tutup row -->
            <button type="submit" class='btn btn-danger'>
            <span class='glyphicon glyphicon-plus' aria-hidden='true'></span>
             Buat Refund</button>
        </div><!-- tutup konten -->
        
    </form>


</body>