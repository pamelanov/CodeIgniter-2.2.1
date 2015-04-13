<h1>Overall Summary</h1>

<?php
echo form_open('admin/posts/edit');

echo "<p><label for='ptitle'>Title</label><br/>";
$data = array('name'=>'title','id'=>'ptitle','size'=>25, 'value' =>$post['title']);
echo form_input($data) ."</p>";

echo "<p><label for='ptags'>Tags</label><br/>";
$data = array('name'=>'tags','id'=>'ptags','size'=>25, 'value' =>$post['tags']);
echo form_input($data) ."</p>";

echo "<p><label for='category_id'>Category </label><br/>";
echo form_dropdown('category_id',$cats,$post['category_id']) ."</p>";


echo "<p><label for='long'>Content</label><br/>";
$data = array('name'=>'isi','id'=>'long','rows'=>5, 'cols'=>'40', 'value' =>$post['isi']);
echo form_textarea($data) ."</p>";


echo "<p><label for='status'>Status</label><br/>";
$options = array('draft' => 'draft', 'published' => 'published');
echo form_dropdown('status',$options,$post['status']) ."</p>";


echo form_hidden('id',$post['id']);
echo form_submit('submit','update page');
echo form_close();


?>