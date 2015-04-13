<h1><?php echo $judul;?></h1>

<?php
echo form_open('admin/dashboard/create');
echo "<p><label for='uname'>Nama</label><br/>";
$data = array('name'=>'username','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='email'>Email</label><br/>";
$data = array('name'=>'email','id'=>'email','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Telp</label><br/>";
$data = array('name'=>'telp','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Alamat</label><br/>";
$data = array('name'=>'alamat','id'=>'uname','size'=>50);
echo form_input($data) ."</p>";

echo "<p><label for='pw'>Password</label><br/>";
$data = array('name'=>'password','id'=>'pw','size'=>30);
echo form_password($data) ."</p>";

echo "<p><label for='uname'>Role</label><br/>";
$data = array('name'=>'role','id'=>'uname','size'=>1    );
echo form_input($data) ."</p>";

echo "<p><label for='status'>Status</label><br/>";
$options = array('active' => 'active', 'inactive' => 'inactive');
echo form_dropdown('status',$options) ."</p>";

echo form_submit('submit','create admin');
echo form_close();


?>