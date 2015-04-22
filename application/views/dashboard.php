<!DOCTYPE html>
<html lang ="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $judul; ?></title>
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="header"></div>
            
                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">   
                    
                    <ul class="nav navbar-nav">
                        <li><a class="navbar-brand" href="<?php echo base_url(); ?>index.php/dashboard">| SICuT Ruangguru |</a></li>
                        
                    <?php if ($this->session->userdata('role') == 2 || $this->session->userdata('role') == 3) { ?>      
                        <li><a href="<?php echo base_url(); ?>index.php/dashboard/createData">Create</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/dashboard/summary">Summary</a></li>    
                    <?php } ?>

                    <?php if ($this->session->userdata('role') == 2) { ?>
                        <li><a href="<?php echo base_url(); ?>index.php/dashboard/performance/" >Performance</a></li>
                    <?php } ?>

                    <?php if ($this->session->userdata('role') == 3) { ?>
                        <li><a href="<?php echo base_url(); ?>index.php/supervisor/performance" >Performance</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/dashboard/users" >Overall Summary</a></li>
                    <?php } ?>

                    <?php if ($this->session->userdata('role') == 1) { ?>
                        <li><a href="<?php echo base_url(); ?>index.php/dashboard" > Home</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/dashboard/users" > User</a></li>
                    <?php } ?>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url(); ?>index.php/template/logout" > Logout</a></li>  
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
                        Sistem Informasi Customer Tracking Ruangguru
                        <br>
                        KELOMPOK B01
                        <br>
                        <a href="http://ruangguru.com">ruangguru.com</a></b>        
                    </center></div>
            </div>
            </div>
        </nav>
    </body>
</html>
