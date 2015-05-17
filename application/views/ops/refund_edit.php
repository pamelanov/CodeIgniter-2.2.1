<h1><?php echo $judul; ?></h1>

<form name='update_refund' action='<?php echo base_url(); ?>index.php/dashboard/editRefund' method='post' >
    <div id ="konten">

         <div class="form-group">
                <label for="no_invoice">No. Invoice</label>
                <input type="text" class="form-control" name="no_invoice" value="<?php echo $refunds->no_invoice ?>" >
            </div>
            <div class="form-group">
                <label for="id_sales">Id Sales</label>
                <input type="text" class="form-control" name="id_sales"value="<?php echo $refunds->id_sales ?>">
            </div>
            <div class="form-group">
                <label for="jam_hilang">Jam Hilang</label>
                <input type="text" class="form-control" name="jam_hilang" value="<?php echo $refunds->jam_hilang ?>">
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" value="<?php echo $refunds->tanggal ?>">
            </div>
            <div class="form-group">
                <label for="action">Action</label>
                <input type="text" class="form-control" name="action" value="<?php echo $refunds->action ?>">
            </div>

             <div class="form-group">
                <label for="selisih">Selisih</label>
                <input type="text" class="form-control" name="selisih" value="<?php echo $refunds->selisih ?>">
            </div>
            <div class="form-group">
                <label for="alasan">Alasan</label>
                <input type="text" class="form-control" name="alasan" value="<?php echo $refunds->alasan ?>">
            </div>

    <button type="submit" class="btn btn-danger">Edit Refund</button>
    </div>
</form>
</div>

</body>
</html>