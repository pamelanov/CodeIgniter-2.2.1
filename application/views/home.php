<h1><?php echo $judul; ?></h1>

<p><?php echo anchor("dashboard/todaySummary", "<button type='button' class='btn btn-info'>Today's Summary</button>"); ?></p>


<?php
if ($this->session->flashdata('message')) {
    echo "<div class='message'>" . $this->session->flashdata('message') . "</div>";
}


?>