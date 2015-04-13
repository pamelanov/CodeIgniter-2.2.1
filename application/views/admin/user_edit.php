<h1><?php echo $judul;?></h1>

<?php
echo form_open('admin/dashboard/edit');
echo "<p><label for='uname'>Username</label><br/>";
$data = array('name'=>'username','id'=>'uname','size'=>25, 'value'=>$admin['username']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Role</label><br/>";
$data = array('name'=>'role','id'=>'uname','size'=>25, 'value'=>$admin['role']);
echo form_input($data) ."</p>";


echo "<p><label for='email'>Email</label><br/>";
$data = array('name'=>'email','id'=>'email','size'=>50, 'value'=>$admin['email']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Telp</label><br/>";
$data = array('name'=>'telp','id'=>'uname','size'=>25, 'value'=>$admin['telp']);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Alamat</label><br/>";
$data = array('name'=>'alamat','id'=>'uname','size'=>50, 'value'=>$admin['alamat']);
echo form_input($data) ."</p>";

echo "<p><label for='pw'>Password</label><br/>";
$data = array('name'=>'password','id'=>'pw','size'=>25, 'value'=>$admin['password']);
echo form_password($data) ."</p>";

echo "<p><label for='status'>Status</label><br/>";
$options = array('active' => 'active', 'inactive' => 'inactive');
echo form_dropdown('status',$options, $admin['status']) ."</p>";

echo form_hidden('id',$admin['id']);
echo form_submit('submit','Update User');
echo form_close();


?>