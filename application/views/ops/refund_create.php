<h1><?php echo $judul; ?></h1>


<body>
    <ul class="nav nav-tabs">
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/ops/student/createData" > Student</a></li>
        <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/ops/refund/crefund" > Refund</a></li>
        <li role="presentation" ><a href="<?php echo base_url(); ?>index.php/dashboard/crudFeedback" > Feedback</a></li>
    </ul>

   

    <form name='create_feedback' action='<?php echo base_url(); ?>index.php/ops/feedback/createFeedback' method='post' >
        <div id ="konten">

            <div class="form-group">
                <label for="id_murid">No. Invoice</label>
                <input type="text" class="form-control" name="no_invoice" placeholder="Masukkan No Invoice">
            </div>
            <div class="form-group">
                <label for="id_guru">Id Sales</label>
                <input type="text" class="form-control" name="id_sales" placeholder="Masukkan ID Sales">
            </div>
            <div class="form-group">
                <label for="id_sales">Jam Hilang</label>
                <input type="text" class="form-control" name="jam_hilang" placeholder="Masukkan Jam Hilang">
            </div>
            <div class="form-group">
                <label for="tanggal">Alasan</label>
                <input type="date" class="form-control" name="alasan" placeholder="Masukkan Alasan">
            </div>
            <div class="form-group">
                <label for="rating">Action</label>
                <input type="text" class="form-control" name="action" placeholder="Masukkan Action">
            </div>

            <div class="form-group">
                <label for="isi">Tanggal</label>
                <input type="text" class="form-control" id="tanggal" placeholder="Masukkan Tanggal">
            </div>

            <button type="submit" class="btn btn-danger">Create Refund</button>
        </div>
    </form>
</div>

</body>