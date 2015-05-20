
<h1><?php echo $judul; ?></h1>
<div id ="konten-kecil">
    <form name='searchSales' action='<?php echo base_url(); ?>index.php/supervisor/over/findOverall' method='post' >

        <div class="form-group">
            <label for="tanggal">Tanggal Awal</label>
            <input type='date' class="form-control" name='tanggal-awal'>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal Akhir</label>
            <input type='date' class="form-control" name='tanggal-akhir'>
        </div>
        <button type="submit" class="btn btn-danger">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
    </form>

    

</div>

