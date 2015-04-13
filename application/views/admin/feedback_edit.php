<h1><?php echo $judul;?></h1>

<?php
echo form_open('admin/feedback/edit');


echo "<p><label for='uname'>ID</label><br/>";
$data = array('name'=>'id','id'=>'uname','size'=>25,'value'=>$feedback['id']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>ID Murid</label><br/>";
$data = array('name'=>'id_murid','id'=>'uname','size'=>25,'value'=>$feedback['id_murid']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>ID Guru</label><br/>";
$data = array('name'=>'id_guru','id'=>'uname','size'=>25,'value'=>$feedback['id_guru']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>ID Sales</label><br/>";
$data = array('name'=>'id_sales','id'=>'uname','size'=>25,'value'=>$feedback['id_sales']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Tanggal</label><br/>";
$data = array('name'=>'tanggal','id'=>'uname','size'=>25,'value'=>$feedback['tanggal']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Rating</label><br/>";
$data = array('name'=>'rating','id'=>'uname','size'=>25,'value'=>$feedback['rating']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Kelebihan</label><br/>";
$data = array('name'=>'kelebihan','id'=>'uname','size'=>100,'value'=>$feedback['kelebihan']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Kekurangan</label><br/>";
$data = array('name'=>'jam_hilang','id'=>'uname','size'=>25,'value'=>$feedback['kekurangan']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Saran</label><br/>";
$data = array('name'=>'saran','id'=>'uname','size'=>100,'value'=>$feedback['saran']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Keterangan</label><br/>";
$data = array('name'=>'keterangan','id'=>'uname','size'=>25,'value'=>$feedback['keterangan']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Status</label><br/>";
$data = array('name'=>'statuss','id'=>'uname','size'=>1,'value'=>$feedback['statuss']);
echo form_input($data) ."</p>";

echo "<p><label for='status'>StatusF</label><br/>";
$options = array('active' => 'active', 'inactive' => 'inactive');
echo form_dropdown('status',$options) ."</p>";


echo form_hidden('id',$feedback['id']);
echo form_submit('submit','update student');
echo form_close();


?>