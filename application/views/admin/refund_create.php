<h1><?php echo $judul;?></h1>

<?php
echo form_open('admin/refund/create');
echo "<p><label for='uname'>Jam Hilang</label><br/>";
$data = array('name'=>'jam_hilang','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='email'>Alasan</label><br/>";
$data = array('name'=>'email','id'=>'email','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='status'>Status</label><br/>";
$options = array('active' => 'active', 'inactive' => 'inactive');
echo form_dropdown('status',$options) ."</p>";


echo form_submit('submit','create refund');
echo form_close();


?>