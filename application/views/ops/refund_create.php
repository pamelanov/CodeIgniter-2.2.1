<h1><?php echo $judul; ?></h1>


<body>
    <ul class="nav nav-tabs">
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/ops/student/createData" > Student</a></li>
        <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/ops/refund/cRefund" > Refund</a></li>
        <li role="presentation" ><a href="<?php echo base_url(); ?>index.php/ops/feedbackCtrl/formCreateFeedback" > Feedback</a></li>
    </ul>



    <form name='create_refund' action='<?php echo base_url(); ?>index.php/dashboard/createRefund' method='post' >
        <div id ="konten">

            <div class="form-group">
                <label for="no_invoice">No. Invoice</label>
                <input type="text" class="form-control" name="no_invoice" placeholder="Masukkan No Invoice">
            </div>
            <div class="form-group">
                <label for="id_sales">Id Sales</label>
                <input type="text" class="form-control" name="id_sales" placeholder="Masukkan ID Sales">
            </div>
            <div class="form-group">
                <label for="jam_hilang">Jam Hilang</label>
                <input type="text" class="form-control" name="jam_hilang" placeholder="Masukkan Jam Hilang">
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" placeholder="Masukkan Tanggal">
            </div>
            <div class="form-group">
                <label for="action">Action</label>
                <input type="text" class="form-control" name="action" placeholder="Masukkan Action">
            </div>

            <div class="form-group">
                <label for="selisih">Selisih</label>
                <input type="text" class="form-control" name="selisih" placeholder="Masukkan Selisih">
            </div>
            <div class="form-group">
                <label for="alasan">Alasan</label>
                <input type="text" class="form-control" name="alasan" placeholder="Masukkan Alasan">
            </div>

            <button type="submit" class="btn btn-danger">Create Refund</button>
        </div>
    </form>


</body>