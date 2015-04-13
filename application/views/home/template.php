<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $judul; ?></title>
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="utama">
            <div id="header">SISTEM INFORMASI CUSTOMER TRACKING</div>
            <div id="menu">
                <ul>
                    <li><a href="<?php echo base_url(); ?>index.php/template" <?php if ($this->uri->segment(2) == '') echo $aktif; ?>>Home</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/template/about" <?php if ($this->uri->segment(2) == 'about') echo $aktif; ?>>About Us</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/template/contact" <?php if ($this->uri->segment(2) == 'contact') echo $aktif; ?>>Contact</a></li>

                    <text id="menulogin"> <?php echo anchor('template/login', 'Login'); ?></text>

                </ul>
                <ul>
                </ul>
            </div>

            <div id="konten">
                <?php $this->load->view($main); ?>
                <!-- end #mainContent --></div>

            <div id="sidebar">
                <p id="bg_sidebar">SICUT</p>
                <div id="sidebar1">


                    <!-- end #sidebar1 --></div>
            </div>

            <div class="clear"></div>
            <div id="footer"><center>
                    <b> KELOMPOK B01</a> </b>
                    <br>
                        <b>ruangguru.com</a> </b>  
                </center></div>
        </div>
    </body>
</html>
