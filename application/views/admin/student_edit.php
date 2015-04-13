<h1><?php echo $judul;?></h1>

<?php
echo form_open('admin/student/edit');


echo "<p><label for='uname'>ID Murid</label><br/>";
$data = array('name'=>'id_murid','id'=>'uname','size'=>25,'value'=>$student['id_murid']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Nama</label><br/>";
$data = array('name'=>'nama','id'=>'uname','size'=>25,'value'=>$student['nama']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>ID Sales</label><br/>";
$data = array('name'=>'id_sales','id'=>'uname','size'=>25,'value'=>$student['id_sales']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Status</label><br/>";
$data = array('name'=>'status','id'=>'uname','size'=>1,'value'=>$student['status']);
echo form_input($data) ."</p>";

echo "<p><label for='status'>Status</label><br/>";
$options = array('active' => 'active', 'inactive' => 'inactive');
echo form_dropdown('status',$options, $student['status']) ."</p>";


echo form_hidden('id_murid',$student['id_murid']);
echo form_submit('submit','Update Student');
echo form_close();


?>