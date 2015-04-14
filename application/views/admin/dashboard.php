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
        <div id="utama">
            <div id="header">SISTEM INFORMASI CUSTOMER TRACKING</div>


            <div id="menu">		
                <ul>
                    <text id="menulogin">
                        <?php
                        echo "<a href='" . base_url() . "index.php/template/logout'>Logout</a>";
                        ?>
                        <text>
                            </ul>
                            </div>

                            <div id="sidebaradmin">
                                <div id="bg_menukiri"><center>Dashboard</center></div>
                                <div id="isi_menu_kiri">
                                    <a href="<?php echo base_url(); ?>index.php/admin/dashboard/createData" > &raquo; Create</a>
                                    <a href="<?php echo base_url(); ?>index.php/admin/dashboard/summary" > &raquo; Summary</a>
                                    <a href="<?php echo base_url(); ?>index.php/admin/dashboard/users" > &raquo; Overall Summary</a>
                                    <a href="<?php echo base_url(); ?>index.php/admin/dashboard/users" > &raquo; Performance</a>
                                    <a href="<?php echo base_url(); ?>index.php/admin/dashboard/users" > &raquo; User</a>               
                                </div>
                            </div>
                            <div id="konten">
                                <?php $this->load->view($main); ?>
                            </div>

                            <div class="clear"></div> <center>
                                <div id="footer">
                                    <b> KELOMPOK B01</a> </b>
                                    <br>
                                        <b>ruangguru.com</a> </b>        
                                    </center></div>
                                </div>
                                </body>
                                </html>
