<h1><?php echo $judul; ?></h1>

<div id="konten">
    
    <?php if (!empty($murid)) { ?>
<div class="panel panel-primary">
    <div class="panel-heading"><center>Informasi Murid</center></div>
        <table class='table table-bordered'>
            <tr valign='top'>
                <th><center>ID Murid</center></th>
                <th><center>Nama</center></th>
                <th><center>Gender</center></th>
                <th><center>No Tlp</center></th>
                <th><center>Domisili</center></th>
                <th><center>Email</center></th>
                <th><center>Alamat</center></th>
            </tr>
            
            <tr valign='top'>
                <td align><?php echo $murid->id_murid; ?></td>
                <td align><?php echo $murid->nama; ?></td>
                <td align><?php echo $murid->gender; ?></td>
                <td align><?php echo $murid->no_telepon; ?></td>
                <td align><?php echo $murid->domisili; ?></td>
                <td align><?php echo $murid->email; ?></td>
                <td align><?php echo $murid->alamat; ?></td>
            </tr>
        </table>
</div><!-- nutup panel panel-success -->
<?php } ?>
<div class="row">
<div class="col-md-6">
<form id='form-recurring' action='<?php echo base_url();?>index.php/ops/summary/recurring'
                                        method='post' onsubmit='return confirm("Apakah Anda yakin ingin menambahkan recurring status?")'>
    <div class="form-group">
        <label>ID Kelas</label>
            <select class="js-example-basic-single" name="idKelas" required>
                <?php foreach($courses as $x) {
                    echo "<option value='" . $x->id . "'>" . $x->id_kelas . "</option>";
                }  
                ?>
            </select>
    </div>
    <div class="form-group">
        <label>Tanggal Pengisian </label>
            <input type="date" name="tanggal" class="form-control input-md"  value="<?php echo date("Y-m-d");?>">
    </div>
    <div class="form-group">
        <label>ID Sales</label>
            <input name="idSales" type="text" placeholder="ID sales" class="form-control input-md" value="<?php echo $this->session->userdata('id');?>">
    </div>
    <div class="form-group">
        <label>Melanjutkan Kelas?</label><br>
        <a href=#><span id="show" class="label label-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Ya</span></a>
        <a href=#><span id="showNo" class="label label-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Tidak</span></a>
            
    </div>
</div> <!-- menutup col-md-6 -->
<div class="col-md-6">
    

            <div id="recurringNo" style="display:none">
    <div class="form-group">
        <label>Alasan</label>
            <textarea rows="4" cols="200" name="alasan" form="form-recurring" class="form-control input-md"></textarea>
    </div>
        <button type="submit" class='btn btn-success'>
        <span class='glyphicon glyphicon-plus-sign' aria-hidden='true'></span> Tambah
    </button>
        </div><!-- nutup di id:recurring -->
        
    
    <div id="recurring" style="display:none">
    <div class="form-group">
        <label>Periode</label>
                <input type="date" name="periode-awal" class="form-control input-md">
                s/d
                <input type="date" name="periode-akhir" class="form-control input-md">        
    </div>
    <div class="form-group">
        <label>Jumlah Jam</label>
            <input name="jumlah-jam" type="text" placeholder="jumlah jam" class="form-control input-md">
    </div>
        <button type="submit" class='btn btn-success'>
        <span class='glyphicon glyphicon-plus-sign' aria-hidden='true'></span> Tambah
    </button>
    </div><!-- nutup div id:recurring -->
    
    



</div> <!-- nutup col-md-6 -->
</form>
</div>
</div>