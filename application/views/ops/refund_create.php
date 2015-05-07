<h1><?php echo $judul;?></h1>


<body>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/dashboard/createRefund" > Student</a></li>
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/ops/refund/createData" > Refund</a></li>
  <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/readFeedback" > Feedback</a></li>
</ul>
    
<?php
//echo form_open('admin/refund/create');
echo form_open('ops/refund/create');

echo "<p><label for='uname'>No. Invoice</label><br/>";
$data = array('name'=>'no_invoice','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Id Kelas</label><br/>";
$data = array('name'=>'id_kelas','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>ID Murid</label><br/>";
$data = array('name'=>'idmurid','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>ID Guru</label><br/>";
$data = array('name'=>'idguru','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Harga Per Jam</label><br/>";
$data = array('name'=>'harga','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='uname'>Jam Hilang</label><br/>";
$data = array('name'=>'jam_hilang','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='email'>Alasan</label><br/>";
$data = array('name'=>'alasan','id'=>'uname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='status'>Status</label><br/>";
$options = array('active' => 'active', 'inactive' => 'inactive');
echo form_dropdown('status',$options) ."</p>";


echo form_submit('submit','create refund');
echo form_close();
echo anchor('dashboard/refunds', '<-- halaman sebelumnya');?>