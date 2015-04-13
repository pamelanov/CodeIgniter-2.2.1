<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Author: Reality Software
Website: http://www.realitysoftware.ca
Note: This is a free template released under the Creative Commons Attribution 3.0 license, 
which means you can use it in any way you want provided you keep the link to the author intact.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $judul; ?></title>
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />
<!-- TinyMCE -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/TINYMCE/JSCRIPTS/TINY_MCE/tiny_mce_src.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
		// Theme options
theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,cut,copy,paste,pastetext,pasteword,|,search,replace,|",
theme_advanced_buttons2 :
"styleselect,formatselect,fontselect,fontsizeselect,forecolor,backcolor",
theme_advanced_buttons3 : "bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",
		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",
		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
	
	function convLinkVC(strUrl, node, on_save) {
            strUrl=strUrl.replace("../","");
            return strUrl;
       } 
	
	function ajaxLoad() {
	var ed = tinyMCE.get('elm');

	// Do you ajax call here, window.setTimeout fakes ajax call
	ed.setProgressState(1); // Show progress
	window.setTimeout(function() {
		ed.setProgressState(0); // Hide progress
		ed.setContent('HTML content that got passed from server.');
	}, 3000);
}

function ajaxSave() {
	var ed = tinyMCE.get('elm');

	// Do you ajax call here, window.setTimeout fakes ajax call
	ed.setProgressState(1); // Show progress
	window.setTimeout(function() {
		ed.setProgressState(0); // Hide progress				
	}, 3000);
}

</script>
<!-- /TinyMCE -->
</head>
<body>
<div id="container">
	<!-- header -->
    <div id="header">
    	<div id="logo"><a href="#"><span class="orange">Website</span> name</a></div>
        <div id="menu">
        	<ul>
            <li><a href="<?php echo base_url(); ?>index.php/template" 
			<?php if($this->uri->segment(2)=='') echo $aktif; ?>">Home</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/template/user"
			<?php if($this->uri->segment(2)=='user') echo $aktif; ?>>User</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/template/product"
			<?php if($this->uri->segment(2)=='product') echo $aktif; ?>>product</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/template/post"
			<?php if($this->uri->segment(2)=='post') echo $aktif; ?>>post</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/template/user"
			<?php if($this->uri->segment(2)=='user') echo $aktif; ?>>User</a></li>
            </ul>
        </div>
    </div>
    <!--end header -->
    <!-- main -->
    <div id="main">
        <div id="content">
        <div id="head_image">
        	<div id="slogan"><strong>YOUR</strong> company <br />
       	    slogan text goes here</div>
            <div id="under_slogan_text">Lorem ipsum dolor sit amet, consectetuer 
              <br />
              adipiscing elit. Aliquam nec neque vel<br />
tortor sodales sodales. 
<br />
Maecenas consequat cursus mi.</div>
        </div>
         <!-- ini bagian isi web -->
		 <?php $this->load->view($konten); ?>
		 <!-- ini bagian isi web -->
       <div id="sidebar">
       <h2>Lore ipsum</h2>
       <p>Lorem ipsum dolor sit amet, 
         consectetuer adipiscing elit. 
         
         Phasellus ornare condimentum sem. 
         Nullam a eros. Vivamus vestibulum 
         hendrerit arcu. Integer a orci. Morbi 
         nonummy semper est. 
         
         Donec at risus sed velit porta dictu
         m. Maecenas condimentum orci 
         aliquam nunc. 
         Morbi nonummy tellus in nibh. 
         
         Suspendisse orci eros, dapibus 
         at, ultrices at, egestas ac, tortor. 
         Suspendisse fringilla est id erat. 
         Praesent et libero.</p>
       </div>
       </div>
    </div>
    <!-- end main -->
    <!-- footer -->
    <div id="footer">
    <div id="left_footer">&copy; Copyright 2008 Clicker design
    </div>
    <div id="right_footer">

<!-- Please do not change or delete this link. Read the license! Thanks. :-) -->
Design by <a href="http://www.realitysoftware.ca" title="Website Design">Reality Software</a>

    </div>
    </div>
    <!-- end footer -->
</div>
</body>
</html>
