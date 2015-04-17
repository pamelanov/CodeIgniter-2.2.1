<!DOCTYPE html>
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

<form>
    <div id ="konten">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="checkbox">
            <label>
            <input type="checkbox"> Check me out
        </label>
    </div>
    <button type="submit" class="btn btn-default">Update Status</button>
</form>
</div>
	
	

	

</html>

