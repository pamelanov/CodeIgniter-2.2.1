

<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $judul; ?></title>
        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
        <script type="text/javascript" src="http://pamelanov.com/bootbox.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        
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
                        <li><a href="<?php echo base_url(); ?>index.php/ops/student/createData">
                            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Create</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/dashboard/summary">
                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Summary</a></li>    
                    <?php } ?>

                    <?php if ($this->session->userdata('role') == 2) { ?>
                        <li><a href="<?php echo base_url(); ?>index.php/dashboard/performance/" >
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Performance</a></li>
                    <?php } ?>

                    <?php if ($this->session->userdata('role') == 3) { ?>
                        <li><a href="<?php echo base_url(); ?>index.php/supervisor/performance" >
                          <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Performance</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/dashboard/users" >
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Overall Summary</a></li>
                    <?php } ?>

                    <?php if ($this->session->userdata('role') == 1) { ?>
                        <li><a href="<?php echo base_url(); ?>index.php/dashboard" >
                         <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/dashboard/users" >
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span> User</a></li>
                    <?php } ?>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url(); ?>index.php/template/logout" >
                         <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout</a></li>  
                    </ul>

                </div><!-- /.navbar-collapse -->
              
            </div><!-- /.container-fluid -->
        </nav>
    
   
    </script>


        <div id="konten">
        
        <?php $this->load->view($main); ?>
         
    
        



        </div>
        


        <nav class="navbar navbar-inverse navbar-fixed-bottom">
            <div class="container">
                <div class="clear"></div> <center>
                    <div id="footer">
                        <b>Sistem Informasi Customer Tracking Ruangguru</b>
                        <br>
                        KELOMPOK B01
                        <br>
                        <a href="http://ruangguru.com">ruangguru.com</a>      
                    </center></div>
            </div>
            </div>
        </nav>
    </body>
</html>
