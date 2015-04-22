<h1><?php echo $judul; ?></h1>

<p><?php echo anchor("admin/refund/create", "Today's Summary"); ?></p>
<?php
if ($this->session->flashdata('message')) {
    echo "<div class='message'>" . $this->session->flashdata('message') . "</div>";
}


?>