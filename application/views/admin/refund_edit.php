<h1><?php echo $judul;?></h1>

<?php
echo form_open('admin/refund/edit');


echo "<p><label for='uname'>Jam Hilang</label><br/>";
$data = array('name'=>'jam_hilang','id'=>'uname','size'=>25,'value'=>$refund['jam_hilang']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>ID Guru</label><br/>";
$data = array('name'=>'id_guru','id'=>'uname','size'=>25,'value'=>$refund['id_guru']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>ID Murid</label><br/>";
$data = array('name'=>'id_murid','id'=>'uname','size'=>25,'value'=>$refund['id_murid']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>ID Sales</label><br/>";
$data = array('name'=>'id_sales','id'=>'uname','size'=>25,'value'=>$refund['id_sales']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Alasan</label><br/>";
$data = array('name'=>'alasan','id'=>'uname','size'=>25,'value'=>$refund['alasan']);
echo form_input($data) ."</p>";

echo "<p><label for='status'>Status</label><br/>";
$options = array('active' => 'active', 'inactive' => 'inactive');
echo form_dropdown('status',$options, $refund['status']) ."</p>";

echo form_hidden('id',$refund['id']);
echo form_submit('submit','Update Refund');
echo form_close();


?>