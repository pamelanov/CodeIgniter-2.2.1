<!DOCTYPE html>
    <html lang="en"></html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $judul; ?></title>
    </head>
    <body></body>
    <h2 align="center">Search Student</h2>					
	<form name='searchStudent' action='<?php echo base_url();?>index.php/admin/summary/searchStatusStudent' method='post' >
		<table align="center">
			<tr><td>Enter Student ID</td><td>
                        <input type='text' name='idMurid'>
                            
		 	<tr><td></td><td><input type='submit' value='search'></td></tr>
		</table>
<!-- <form>
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
                -->
</body>
</html>