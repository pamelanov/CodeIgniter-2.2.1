<! DOCTYPE html>
<h1><?php echo $judul; ?></h1>
<ul class="nav nav-tabs">
      <li role="presentation" ><a href="<?php echo base_url(); ?>index.php/dashboard/summary" > Home</a></li>
    <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/ops/student/searchSummary" > Student</a></li>
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" > Refund</a></li>
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/feedbacks" > Feedback</a></li>
</ul>

<br>

<form class="form-inline" align="left" action='<?php echo base_url();?>index.php/ops/summary/searchStudent' method='post'>
  <div class="form-group">
    <label for="exampleInputName2">Enter Student ID</label>
    <input type="text" class="form-control" name="idMurid" placeholder="ID Murid">
  </div>
  <button type="submit" class="btn btn-default">Search</button>

<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}
echo "<div id='konten'>";
if (!empty($student)){
	echo "<table id='table'>\n";
	echo "<tr valign='top'>\n";
	echo "<th>ID Murid</th>
        <th>Nama</th>
        <th>ID Sales</th>
        <th>Gender</th>
        <th>No Tlp</th>
        <th>Domisili</th>
        <th>Email</th>\n";
        
	echo "</tr>\n";
	

		echo "<tr valign='top'>\n";
		echo "<td>".$student->id_murid."</td>\n";
		
                echo "<td align='center'>".$student->nama."</td>\n";
                echo "<td>".$student->id_sales."</td>\n";
                echo "<td>".$student->gender."</td>\n";
                echo "<td>".$student->no_telepon."</td>\n";
                echo "<td>".$student->domisili."</td>\n";
                echo "<td>".$student->email."</td>\n";
        
		
		echo "</td>\n";
		echo "</tr>\n";
    
	echo "</table>	";
	echo "<br/></div>"; 
}


else { echo "<em><b>Error!</b></em> Maaf, ID murid yang Anda masukkan tidak terdapat di dalam sistem. Pastikan
		Anda memasukkan ID murid dengan benar. </div>";}




	
?>	

	
	

	

</html>

