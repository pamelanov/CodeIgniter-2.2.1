<script>$(document).on("click", ".recurring", function(e) {
            bootbox.dialog({
                title: "Menambahkan Recurring Status",
                message:
                '<form class="form-horizontal" id="form-recurring"> ' +
                    '<div class="row">  ' +
                    '<div class="col-md-12"> ' +
                        
                            '<div class="form-group"> ' +
                                '<label class="col-md-4 control-label" for="name">ID Kelas</label> ' +
                                    '<div class="col-md-4"> ' +
                                        '<select class="form-control" name="id_kelas" placeholder="ID Kelas">' +
                                        '<?php foreach ($courses as $c) { ?>' +
                                         '<option>' +
                                         '<?php  echo $c->id_kelas; ?>' +
                                         '</option>' +
                                        '<?php } ?>' +
                                    '</select>' +
                                    '</div> ' +
                            '</div> ' +
                            '<div class="form-group"> ' +
                                '<label class="col-md-4 control-label" for="ID Sales">ID Sales </label>' +
                                    '<div class="col-md-4"> ' +
                                        "<input type='text' class='form-control' name='id_sales' value='<?php echo $this->session->userdata('id') ?>'>" +
                                    '</div>' +
                            '</div>' +
                            '<div class="form-group"> ' +
                                '<label class="col-md-4 control-label" for="tanggal">Tanggal Pengisian </label>' +
                                    '<div class="col-md-4"> ' +
                                        '<input type="date" name="tanggal" value=<?php echo date("Y-m-d") ?>> ' +
                                    '</div>' +
                            '</div>' +
                            '<div class="form-group"> ' +
                                '<label class="col-md-4 control-label" for="recurring">Melanjutkan Kelas?</label> ' +
                                    '<div class="col-md-4"> ' +
                                            '<a class="recurring-ya" href=#>' +
                                                '<span class="label label-success" id="label-recurring">' +
                                                    '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Ya</span></a> \n' +
                                            '<a class="recurring-tidak" href=#>' +
                                                '<span class="label label-danger" id="label-recurring">' +
                                                 '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Tidak</span></a> \n' +
                                    '</div>' +
                            '</div>' +
                        //'</form>' +
                    '</div>' +
                '</div>',
                buttons: {

                }
                
            }
        );
        });
            
        $(document).on("click", ".recurring-ya", function(a) {
            bootbox.dialog({
                title: "Melanjutkan Kelas",
                message:
                '<div class="row">  ' +
                    '<div class="col-md-12"> ' +
                        //'<form class="form-horizontal"> ' +
                            '<div class="form-group"> ' +
                                 '<label class="col-md-4 control-label" for="periode">Periode</label> ' +
                                        '<div class="col-md-4"> ' +
                                            '<input type="date" name="periode-awal" class="form-control input-md">' +
                                            '<center>s/d</center>' +
                                            '<input type="date" name="periode-akhir" class="form-control input-md">'  +
                                        '</div>' +
                            '</div>' +
                    '</div>' +
                    '<div class="col-md-12"> ' +
                            '<div class="form-group"><br/>' +
                                '<label class="col-md-4 control-label" for="jumlah-jam">Jumlah Jam</label> ' +
                                    '<div class="col-md-4"> ' +
                                        '<input name="jumlah-jam" type="text" placeholder="jumlah jam" class="form-control input-md"> ' +
                                    '</div>' +
                            '</div>' +
                    
                        //'</form>' +
                    '</div>' +
                '</div>' +
                '</form>'
                
                ,
                buttons: {
                    success: {
                        label: "Simpan",
                        className: "btn-success",
                        callback: function () {
                            window.location.href = "<?php echo base_url(); ?>index.php/ops/summary/tambahRecurringYa";
                        }
                    }
                }
            }
        );
        });
        
        $(document).on("click", ".recurring-tidak", function(b) {
            bootbox.dialog({
                title: "Tidak Melanjutkan Kelas",
                message:
                    '<div class="col-md-12"> ' +
                            '<div class="form-group"> ' +
                                 '<label class="col-md-4 control-label" for="periode">Alasan</label> ' +
                                        '<div class="col-md-4"> ' +
                                            '<textarea rows="4" cols="200" name="alasan" form="form-recurring" class="form-control input-md"></textarea>'  +
                                        '</div>' +
                            '</div>' +
                    '</div>' +
                '</form>'
                
                ,
                buttons: {
                    success: {
                        label: "Simpan",
                        className: "btn-success",
                        callback: function () {
                            window.location.href = "<?php echo base_url(); ?>index.php/ops/summary/tambahRecurringTidak";
                        }
                    }
                }
            }
        );
        });
</script>

    <h1><?php echo $judul; ?></h1>

<div id="konten">
    <?php if ((empty($students)) && (empty($students2))) { ?> 
    <div id="lebihKecil">
    <form class="form-inline" align="left" action='<?php echo base_url(); ?>index.php/ops/summary/searchStudent' method='post'>
    <div class="form-group">
        <label for="exampleInputName2">Enter Student ID</label>
                        
                        <select class="js-example-basic-single" name="idMurid" required>
                            <option value=""></option>
                    <?php foreach($s as $x) {
                        echo "<option value='" . $x->id_murid . "'>" . $x->id_murid . ": " . $x->nama . "</option>";
                        }  
                    ?>
                </select>
  
    <button type="submit" class="btn btn-danger">
			 <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
</div>
</form>
    </div><?php } ?>

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
 <?php


if ((!empty($students)) && (!empty($students2))) {
        echo '<div class="panel panel-primary">
            <div class="panel-heading"><center>History Status</center></div>';
        echo "<table class='table table-bordered'>\n";
            echo "<tr valign='top'>\n";
                echo "<th><center>Status</center></th>
                        <th><center>Tanggal Pengisian</center></th>
                        <th><center>Jam Pengisian</center></th>
                        <th><center>ID Kelas</center></th>";
                        
                        
            echo "</tr>\n";
            foreach ($semua as $student){    
            echo "<tr valign='top'>\n";
            echo "<td align='center'>" . $student->status . "</td>\n";
            echo "<td align='center'>" . $student->tanggal . "</td>\n";
            echo "<td align='center'>" . $student->jam . "</td>\n";
            echo "<td align='center'> - </td>\n";
            echo "</tr>\n";
            }/*
            foreach ($students2 as $student) {
            echo "<td align='center'>" . $student->no . "</td>\n";    
            echo "<td align='center'>" . $student->tanggal . "</td>\n";
            echo "<td align='center'>" . $student->jam . "</td>\n";
            echo "<td align='center'> - </td>\n";
            echo "</tr>\n";
            }*/
        echo "</table>";
        echo "</div>";
        // echo "<a href='" . base_url() . "index.php/ops/summary/recurring(" . $student->id .  ")' >
        echo "<a href='" . base_url() . "index.php/ops/summary/showRecurring/" . $murid->id .  "' >
        <button class='btn btn-primary'>
            <span class='glyphicon glyphicon-plus-sign' aria-hidden='true'></span> Recurring Status
        </button>
        </a>";
        
        
}

?>

</div>

  <!--
  <div class="col-xs-6">

<div id="konten">
<form id='form-recurring' action='<?php echo base_url();?>index.php/ops/summary/recurring' method='post'>
    <div class="form-group">
        <label>ID Kelas</label>
            <input name="idKelas" type="text" placeholder="ID kelas" class="form-control input-md">
    </div>
    <div class="form-group">
        <label>Tanggal Pengisian </label>
            <input type="date" name="tanggal" class="form-control input-md">
    </div>
    <div class="form-group">
        <label>ID Sales</label>
            <input name="idSales" type="text" placeholder="ID sales" class="form-control input-md">
    </div>
    <center><span class="label label-success">jika melanjutkan:</span></center>
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
    
    
    <center><span class="label label-success">jika tidak melanjutkan:</span></center>
    <div class="form-group">
        <label>Alasan</label>
            <textarea rows="4" cols="200" name="alasan" form="form-recurring" class="form-control input-md"></textarea>
    </div>
    
    <button type="submit" class='btn btn-success'>
        <span class='glyphicon glyphicon-plus-sign' aria-hidden='true'></span> Tambah
    </button>
</form>
</div>

</div> -->
</div>

