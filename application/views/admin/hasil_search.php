<html>
<h1><?php echo $judul;?></h1>
<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}
                
	echo "<table class='table table-bordered'>\n";
	echo "<tr valign='top'>\n";
	echo "<th><center>ID Murid</center></th>
        <th><center>Nama</center></th>
        <th><center>ID Sales</center></th>
        <th><center>Gender</center></th>
        <th><center>No Tlp</center></th>
        <th><center>Domisili</center></th>
        <th><center>Email</center></th>\n";
        
	echo "</tr>\n";
	

		echo "<tr valign='top'>\n";
		echo "<td align='center'>".$student->Id_murid."</td>\n";
		
                echo "<td align='center'>".$student->Nama."</td>\n";
                echo "<td align='center'>".$student->Id_sales."</td>\n";
                echo "<td align='center'>".$student->Gender."</td>\n";
                echo "<td align='center'>".$student->No_telepon."</td>\n";
                echo "<td align='center'>".$student->Domisil."</td>\n";
                echo "<td align='center'>".$student->Email."</td>\n";
        
		
		echo "</td>\n";
		echo "</tr>\n";
    
	echo "</table>";
?>	<br/>
<a href="<?php echo base_url(); ?>index.php/admin/summary/riwayatStatus" > Lihat</a>
	
	

	

</html>

