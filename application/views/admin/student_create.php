<h1><?php echo $judul;?></h1>

<?php
echo form_open('admin/student/create');

echo "<p><label for='uname'>ID Murid</label><br/>";
$data = array('name'=>'id_murid','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Nama</label><br/>";
$data = array('name'=>'nama','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>ID Sales</label><br/>";
$data = array('name'=>'id_sales','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Status</label><br/>";
$data = array('name'=>'status','id'=>'uname','size'=>1);
echo form_input($data) ."</p>";




echo form_submit('submit','create student');
echo form_close();


?>