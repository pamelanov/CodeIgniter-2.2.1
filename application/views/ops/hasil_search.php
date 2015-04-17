<html>
<h1><?php echo $judul;?></h1>
<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}
                
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
		echo "<td>".$student->Id_murid."</td>\n";
		
                echo "<td align='center'>".$student->Nama."</td>\n";
                echo "<td>".$student->Id_sales."</td>\n";
                echo "<td>".$student->Gender."</td>\n";
                echo "<td>".$student->No_telepon."</td>\n";
                echo "<td>".$student->Domisili."</td>\n";
                echo "<td>".$student->Email."</td>\n";
        
		
		echo "</td>\n";
		echo "</tr>\n";
    
	echo "</table>";
?>	<br/>
<a href="<?php echo base_url(); ?>index.php/ops/summary/riwayatStatus" > Lihat</a>
	
	

	

</html>

