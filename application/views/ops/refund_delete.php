<h1><?php echo $judul; ?></h1>

<div id="konten">
   <ul class="nav nav-tabs">
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/summary" > Student</a></li>
        <li role="presentation"class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" > Refund</a></li>
        <li role="presentation" ><a href="<?php echo base_url(); ?>index.php/dashboard/feedbackSummary" > Feedback</a></li>
    </ul>
     <form name='delete_refund' action='<?php echo base_url(); ?>index.php/dashboard/deleteRefund' method='post' ></form>;
    
     echo "<th><center>DELETE REFUND BERHASIL</th>\n;

?>
