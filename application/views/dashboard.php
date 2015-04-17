<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $judul; ?></title>
        <link href="<?php echo base_url(); ?>assets/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />
        <!-- TinyMCE -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/TINYMCE/JSCRIPTS/TINY_MCE/tiny_mce_src.js"></script>
        <link href="<?php echo base_url(); ?>assets/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
            tinyMCE.init({
                // General options
                mode: "textareas",
                theme: "advanced",
                plugins: "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
                // Theme options
                theme_advanced_buttons1: "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,cut,copy,paste,pastetext,pasteword,|,search,replace,|",
                theme_advanced_buttons2:
                        "styleselect,formatselect,fontselect,fontsizeselect,forecolor,backcolor",
                theme_advanced_buttons3: "bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|",
                theme_advanced_toolbar_location: "top",
                theme_advanced_toolbar_align: "left",
                theme_advanced_statusbar_location: "bottom",
                theme_advanced_resizing: true,
                // Example content CSS (should be your site CSS)
                content_css: "css/content.css",
                // Drop lists for link/image/media/template dialogs
                template_external_list_url: "lists/template_list.js",
                external_link_list_url: "lists/link_list.js",
                external_image_list_url: "lists/image_list.js",
                media_external_list_url: "lists/media_list.js",
                // Replace values for the template plugin
                template_replace_values: {
                    username: "Some User",
                    staffid: "991234"
                }
            });

            function convLinkVC(strUrl, node, on_save) {
                strUrl = strUrl.replace("../", "");
                return strUrl;
            }

            function ajaxLoad() {
                var ed = tinyMCE.get('elm');

                // Do you ajax call here, window.setTimeout fakes ajax call
                ed.setProgressState(1); // Show progress
                window.setTimeout(function () {
                    ed.setProgressState(0); // Hide progress
                    ed.setContent('HTML content that got passed from server.');
                }, 3000);
            }

            function ajaxSave() {
                var ed = tinyMCE.get('elm');

                // Do you ajax call here, window.setTimeout fakes ajax call
                ed.setProgressState(1); // Show progress
                window.setTimeout(function () {
                    ed.setProgressState(0); // Hide progress				
                }, 3000);
            }

        </script>
        <!-- /TinyMCE -->
    </head>
    <body>

        <!--
        <div id="utama">

            <div id="menu">		
                <ul>
                    <text id="menulogin">
                        
                        
                        
                        
                        
                        <text>
                            </ul>
                            </div>

                            <div id="sidebaradmin">
                                <div id="bg_menukiri"><center>Dashboard</center></div>
                                <div id="isi_menu_kiri">
        <?php if ($this->session->userdata('role') == 2 || $this->session->userdata('role') == 3) { ?>
                                              <a href="<?php echo base_url(); ?>index.php/admin/dashboard/users" > &raquo; Home</a>
                                            <a href="<?php echo base_url(); ?>index.php/admin/dashboard/createData" > &raquo; Create</a>
                                            <a href="<?php echo base_url(); ?>index.php/admin/dashboard/summary" > &raquo; Summary</a>


        <?php } ?>

        <?php if ($this->session->userdata('role') == 2) { ?>
                                            <a href="<?php echo base_url(); ?>index.php/admin/dashboard/users" > &raquo; Performance</a>
        <?php } ?>
                                        
                                

        <?php if ($this->session->userdata('role') == 3) { ?>
                                            <a href="<?php echo base_url(); ?>index.php/admin/dashboard/users" > &raquo; Performance</a>
                                            <a href="<?php echo base_url(); ?>index.php/admin/dashboard/users" > &raquo; Overall Summary</a>
                                           
        <?php } ?>

        <?php if ($this->session->userdata('role') == 1) { ?>
                                              <a href="<?php echo base_url(); ?>index.php/admin/dashboard/users" > &raquo; Home</a>
                                            <a href="<?php echo base_url(); ?>index.php/admin/dashboard/users" > &raquo; User</a>
        <?php } ?>              
                                </div>
                            </div>
        -->

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <?php if ($this->session->userdata('role') == 2 || $this->session->userdata('role') == 3) { ?>      
                 
                        <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/dashboard">Home</a>
                        <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/dashboard/createData">Create</a>
                        <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/dashboard/summary">Summary</a>
                        
                    <?php } ?>

                    <?php if ($this->session->userdata('role') == 2) { ?>
                        <a class = "navbar-brand" href="<?php echo base_url(); ?>index.php/dashboard/users" >Performance</a>
                    <?php } ?>

                    <?php if ($this->session->userdata('role') == 3) { ?>
                        <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/dashboard/users" >Performance</a>
                        <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/dashboard/users" >Overall Summary</a>

                    <?php } ?>

                    <?php if ($this->session->userdata('role') == 1) { ?>
                        <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/dashboard" > Home</a>
                        <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/dashboard/users" > User</a>
                    <?php } ?>              
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a class="navbar-brand" href="<?php echo base_url(); ?>index.php/template/logout" > Logout</a>
                        </li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>


        <div id="konten">
            <?php $this->load->view($main); ?>
        </div>

        <nav class="navbar navbar-inverse navbar-fixed-bottom">
            <div class="container">
                <div class="clear"></div> <center>
                    <div id="footer">
                        KELOMPOK B01
                        <br>
                            <a href="http://ruangguru.com">ruangguru.com</a></b>        
                        </center></div>
            </div>
            </div>
        </nav>
    </body>
</html>
