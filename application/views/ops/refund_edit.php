<h1><?php echo $judul; ?></h1>

<form name='update_refund' action='<?php echo base_url(); ?>index.php/ops/refund_controller/changeRefund' method='post' onsubmit='return confirm("Apakah Anda yakin ingin mengubah informasi refund?")'>
    <div id ="konten">
    <div class="row">
        <div class="col-md-6">
                <input type="hidden" class="form-control" name="no_invoice" value="<?php echo $refunds->no_invoice ?>" >
                <input type="hidden" class="form-control" name="id_sales"value="<?php echo $refunds->id_sales ?>">
            <div class="form-group">
                <label for="jam_hilang">Jam Hilang</label>
                <input type="text" class="form-control" name="jam_hilang" value="<?php echo $refunds->jam_hilang ?>">
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" value="<?php echo $refunds->tanggal ?>">
            </div>
            <div class="form-group">
                <label for="selisih">Selisih</label>
                <input type="text" class="form-control" name="selisih" value="<?php echo $refunds->selisih ?>">
            </div>
        </div><!-- nutup col-md-6 -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="action">Action</label>
                <textarea rows="4" cols="70"  class="form-control" name="action"><?php echo $refunds->action ?></textarea>
            </div>
        
             
            <div class="form-group">
                <label for="alasan">Alasan</label>
                <textarea rows="4" cols="70" class="form-control" name="alasan"><?php echo $refunds->alasan ?></textarea>
            </div>
             <button type="submit" class="btn btn-danger">Edit Refund</button>
        </div><!-- nutup col-md-6 -->
    </div>
   
    </div>
</form>
</div>

</body>
</html>