<h1><?php echo $judul; ?></h1>
<body>
    <ul class="nav nav-tabs">
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/summary" > Student</a></li>
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" > Refund</a></li>
        <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/feedbackSummary" > Feedback</a></li>
    </ul>
<br><br>
<div><a href="<?php echo base_url(); ?>index.php/dashboard/feedbackSummary" > <--- Kembali ke halaman sebelumnya</a></div>

</body>