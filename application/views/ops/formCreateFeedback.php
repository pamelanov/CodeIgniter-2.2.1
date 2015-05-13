<h1><?php echo $judul; ?></h1>
<ul class="nav nav-tabs">


<li role="presentation"><a href="<?php echo base_url(); ?>index.php/ops/student/createData" > Student</a></li>
  <li role="presentation" ><a href="<?php echo base_url(); ?>index.php/ops/refund/crefund" > Refund</a></li>
<li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/ops/feedbackCtrl/formCreateFeedback" > Feedback</a></li>
</ul>

<div id="konten">
<form name='create_feedback' action='<?php echo base_url(); ?>index.php/ops/feedbackCtrl/createFeedback' method='post' >
    <div id ="konten">

        <div class="form-group">
            <label for="id_murid">ID Murid</label>
            <input type="text" class="form-control" name="id_murid" placeholder="Masukkan ID Murid">
        </div>
        <div class="form-group">
            <label for="id_guru">ID Guru</label>
            <input type="text" class="form-control" name="id_guru" placeholder="Masukkan ID Guru">
        </div>
        <div class="form-group">
            <label for="id_sales">ID Sales</label>
            <input type="text" class="form-control" name="id_sales" placeholder="Masukkan ID Sales">
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" placeholder="Masukkan Tanggal">
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="text" class="form-control" name="rating" placeholder="Masukkan Rating">
        </div>

        <div class="form-group">
            <label for="isi">Isi</label>
            <input type="text" class="form-control" name="isi" placeholder="Masukkan Isi">
        </div>
 
    <button type="submit" class="btn btn-danger">Create Feedback</button>
      </div>
</form>
</div>
