<h1>Overall Summary</h1>
<p><?php echo anchor("admin/posts/create", "Create new post");?></p>
<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

if (count($posts)){
	echo "<table  id='table'>\n";
	echo "<tr valign='top'>\n";
	echo "<th>ID Post</th>\n<th>Title</th><th>Status</th><th>Actions</th>\n";
	echo "</tr>\n";
	foreach ($posts as $list){
		echo "<tr valign='top'>\n";
		echo "<td>".$list['id']."</td>\n";
		echo "<td>".$list['title']."&nbsp;</td>\n";
		echo "<td align='center'>".$list['status']."</td>\n";
		echo "<td align='center' nowrap>";
		echo anchor('admin/posts/edit/'.$list['id'],'edit');
		echo " | ";
		echo anchor('admin/posts/delete/'.$list['id'],'delete');
		echo "</td>\n";
		echo "</tr>\n";
	}
	echo "</table>";
}
?>
<a href="<?php echo base_url(); ?>index.php/admin/dashboard" >Download Overall Summary</a>
