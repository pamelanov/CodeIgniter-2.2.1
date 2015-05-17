<h1><?php echo $judul; ?></h1>

<br>

<form class="form-inline" align="left" action='<?php echo base_url(); ?>index.php/ops/summary/searchStudent' method='post'>
    <div class="form-group">
        <label for="exampleInputName2">Enter Student ID</label>
        <input type="text" class="form-control" name="idMurid" placeholder="Jane Doe">
    </div>
    <button type="submit" class="btn btn-default">Search</button>

</form>