<h1><?php echo $judul; ?></h1>


    
    
<div id="konten">



<?php
if ($this->session->flashdata('message')) {
    echo "<div class='message'>" . $this->session->flashdata('message') . "</div>";
}

if (count($admins)) {
    echo '<div class="panel panel-primary">
    <div class="panel-heading"><center>Tabel Peringkat</center></div>';
    echo "<table class='table table-bordered'>\n";
    echo "<tr valign='top '>\n";
    echo "<th><center>Tanggal Refund</th><th><center>No Invoice</th><th><center>
    Jam Hilang</th><th><center>Alasan</th><th><center>Aksi</th><th>
    <center>Selisih</th><th><center>ID Sales</th><th><center>Action</th>\n";
    echo "</tr>\n";
    foreach ($admins as $list) {
        echo "<tr valign='top'>\n";
        
        //echo anchor('dashboard/ePassword/' . $list->id, 'edit ');
        echo "<td align='center'>" . $list->tanggal . "</td>\n";
        echo "<td align='center'>" . $list->no_invoice . "</td>\n";
        echo "<td align='center'>" . $list->jam_hilang . "</td>\n";
        echo "<td align='center'>" . $list->alasan . "</td>\n";
        echo "<td align='center'>" . $list->action . "</td>\n";
        echo "<td align='center'>" . $list->selisih . "</td>\n";
        echo "<td align='center'>" . $list->id_sales . "</td>\n";
        

        echo "<td align='center'>";
        echo '<a href="' . base_url() . 'index.php/dashboard/showEditRefund/' . $list->id . '"><button type="submit" class="btn btn-danger" id="button-kecil">Edit</button></a>';
      //  echo anchor('dashboard/showEditRefund/' . $list->id , 'edit');
        echo " | "; ?>
           <form name='delete_refund' action='<?php echo base_url(); ?>index.php/dashboard/deleteRefund'
            method='post' onsubmit='return confirm("Apakah Anda yakin ingin menghapus refund?")' >
         
         <a href="<?php echo base_url(); ?>index.php/dashboard/deleteRefund"><button type="submit"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a>
        
    </form>
           <?php
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</table>";
    echo "</div>";
}
?>
    <p><?php echo anchor("download/download_Orefunds", "<button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Download </button>"); ?></p>
