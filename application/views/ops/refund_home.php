<h1><?php echo $judul; ?></h1>


    
    
<div id="konten">
   <ul class="nav nav-tabs">
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/summary" > Student</a></li>
        <li role="presentation"class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" > Refund</a></li>
        <li role="presentation" ><a href="<?php echo base_url(); ?>index.php/dashboard/feedbackSummary" > Feedback</a></li>
    </ul>
    



<?php
if ($this->session->flashdata('message')) {
    echo "<div class='message'>" . $this->session->flashdata('message') . "</div>";
}

if (count($admins)) {
    echo "<table class='table table-bordered'>\n";
    echo "<tr valign='top '>\n";
    echo "<th><center>Tanggal Refund</th><th><center>No Invoice</th><th><center>Jumlah Jam Hilang</th><th><center>Alasan</th><th><center>Aksi</th><th><center>Selisih</th><th><center>ID Sales</th><th><center>Action</th>\n";
    echo "</tr>\n";
    foreach ($admins as $list) {
        echo "<tr valign='top'>\n";
        echo "<td align='center'>" . $list->tanggal . "</td>\n";
        echo "<td align='center'>" . $list->no_invoice . "</td>\n";
        echo "<td align='center'>" . $list->jam_hilang . "</td>\n";
        echo "<td align='center'>" . $list->alasan . "</td>\n";
        echo "<td align='center'>" . $list->action . "</td>\n";
        echo "<td align='center'>" . $list->selisih . "</td>\n";
        echo "<td align='center'>" . $list->id_sales . "</td>\n";
        

        echo "<td align='center'>";
        echo anchor('dashboard/showEditRefund/' , 'edit');
        echo " | ";
        echo anchor('ops/refund/delete/' , 'delete');
        echo "</td>\n";
        echo "</tr>\n";
    }
    echo "</table>";
}
?>
    <p><?php echo anchor("download/download_refunds", "<button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Download </button>"); ?></p>
