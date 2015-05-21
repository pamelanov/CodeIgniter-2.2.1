<h1><?php echo $judul; ?></h1>


<<<<<<< HEAD
<div id="konten">
    <?php
    if (count($feedbacks)) {
        echo '<div class="panel panel-primary">
=======
    <div id="konten">
        <h4>Periode: <?php echo $tanggal_awal . " s/d " . $tanggal_akhir; ?></h4>
        <?php
        echo '<div class="row">
                <div class="col-md-8">';
        if (count($feedbacks)) {
            echo '<div class="panel panel-primary">
>>>>>>> punya-pamela
  <div class="panel-heading"><center>Rangkuman Feedback</center></div>';
        echo "<table class='table table-bordered'>\n";
        echo "<tr valign='top'>\n";
        echo "<th><center>ID Sales</center></th>
            <th><center>Tanggal</center></th>
        <th><center>ID Murid</center></th>
        <th><center>ID Guru</center></th>
        <th><center>Action</center></th>";

        echo "</tr>\n";

<<<<<<< HEAD
        foreach ($feedbacks as $list) {
            echo "<tr valign='top'>\n";
            echo "<td>" . $list->id_sales . "</td>\n";
            echo "<td>" . $list->tanggal . "</td>\n";
            echo "<td>" . $list->id_murid . "</td>\n";
            echo "<td>" . $list->id_guru . "</td>\n";
            echo "<td>" . $list->isi . "</td>\n";
            echo "<td>" . $list->rating . "</td>\n";
            echo "<td>" . $list->total_skor . "</td>\n";
=======
            foreach ($feedbacks as $list) {
                echo "<tr valign='top'>\n";
                echo "<td>" . $list->id_sales . "</td>\n";
                echo "<td>" . $list->tanggal . "</td>\n";
                echo "<td>" . $list->id_murid . "</td>\n";
                echo "<td>" . $list->id_guru . "</td>\n";
                echo "<td>" . anchor('ops/feedbackCtrl/readFeedback/'.$list->id , 'Lihat') .
                        " | " . anchor('ops/feedbackCtrl/formUpdateFeedback/'.$list->id, 'Ubah') ."</td>\n";

>>>>>>> punya-pamela


            echo "</td>\n";
            echo "</tr>\n";
        }
<<<<<<< HEAD
        echo "</table>	";
        echo "</div>";
    }

    if (count($semua_ops)) {
        echo '<div class="panel panel-primary">
=======
        echo "</div>";
        echo '<div class="col-md-4">';
        if (count($semua_ops)) {
             echo '<div class="panel panel-primary">
>>>>>>> punya-pamela
                        <div class="panel-heading">
                            <center>Rangkuman Seluruh Operasional Sales</center></div>';
        echo "<table class='table table-bordered'>\n";
        echo "<tr valign='top'>\n";
        echo "<th><center>ID Sales</center></th>
            <th><center>Jumlah Feedback</center></th>\n";

        echo "</tr>\n";

<<<<<<< HEAD
        foreach ($semua_ops as $list) {
            echo "<tr valign='top'>\n";
            echo "<td>" . $list->id_sales . "</td>\n";
            echo "<td>" . $list->count_distinct('id_sales') . "</td>\n";
=======
            foreach ($semua_ops as $list) {
                echo "<tr valign='top'>\n";
                echo "<td>" . $list->id_acc . "</td>\n";
                echo "<td>" . $list->where('id_sales', $list->id_sales)->count() . "</td>\n";
>>>>>>> punya-pamela


            echo "</td>\n";
            echo "</tr>\n";
        }
<<<<<<< HEAD
        echo "</table>	";
        echo "</div>";
    }
    ?>
    <p><?php  echo anchor("download/download_Ofeedbacks/" . $tanggal_awal . "/" . $tanggal_akhir, "<button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Download </button>"); ?></p>
=======
        echo '</div></div>';
        ?>
        <p><?php // echo anchor("download/download_Ofeedbacks/" . $tanggal_awal . "/" . $tanggal_akhir, "<button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-download-alt' aria-hidden='true'></span> Download </button>"); ?></p>
>>>>>>> punya-pamela

</div>	
