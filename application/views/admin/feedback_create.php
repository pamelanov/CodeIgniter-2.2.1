<h1><?php echo $judul;?></h1>

<?php
echo form_open('admin/feedback/create');


echo "<p><label for='uname'>ID Murid</label><br/>";
$data = array('name'=>'id_murid','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>ID Guru</label><br/>";
$data = array('name'=>'id_guru','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>ID Sales</label><br/>";
$data = array('name'=>'id_sales','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Tanggal</label><br/>";
$data = array('name'=>'tanggal','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Rating</label><br/>";
$data = array('name'=>'rating','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Kelebihan</label><br/>";
$data = array('name'=>'kelebihan','id'=>'uname','size'=>100);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Kekurangan</label><br/>";
$data = array('name'=>'jam_hilang','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Saran</label><br/>";
$data = array('name'=>'saran','id'=>'uname','size'=>100);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Keterangan</label><br/>";
$data = array('name'=>'keterangan','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Status</label><br/>";
$data = array('name'=>'statuss','id'=>'uname','size'=>1);
echo form_input($data) ."</p>";

echo "<p><label for='status'>StatusF</label><br/>";
$options = array('active' => 'active', 'inactive' => 'inactive');
echo form_dropdown('status',$options) ."</p>";

echo form_input($data) ."</p>";



echo form_submit('submit','create admin');
echo form_close();


?>