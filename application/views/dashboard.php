<?php
header("Cache-Control: no-store, no-cache, must-revalidate");
?>

<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $judul; ?></title>
        <!--
        <script type="text/javascript" src="../../assets/jquery/jquery-1.11.2.min.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/jquery.min.js"></script>
        
        
        
        <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
        <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/bootbox.min.js"></script>-->
        <!--<script type="text/javascript" src="http://pamelanov.com/bootbox.min.js"></script>-->
         <script src="<?php echo base_url(); ?>assets/jquery/bootbox.min.js"></script>
       
       <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
       <script src="<?php echo base_url(); ?>assets/jquery/bootstrap.min.js"></script>
        
        
        <!--
        <script src="http://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
        -->
        
        
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
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Create
                                    <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu" id="dropdown">
                                <li><a href="<?php echo base_url(); ?>index.php/ops/student/createData" id="a-dropdown">Student</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/ops/refund/crefund" id="a-dropdown">Refund</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/ops/feedbackCtrl/formCreateFeedback" id="a-dropdown">Feedback</a></li>
                            </ul>
                        </li>
                        
                         <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Summary
                                    <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu" id="dropdown">
                                <li><a href="<?php echo base_url(); ?>index.php/dashboard/summary" id="a-dropdown">Student</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" id="a-dropdown">Refund</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/dashboard/feedbackSummary" id="a-dropdown">Feedback</a></li>
                            </ul>
                        </li>   
                          
                    <?php } ?>

                    <?php if ($this->session->userdata('role') == 2) { ?>
                        <li><a href="<?php echo base_url(); ?>index.php/dashboard/performance/" >
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Performance</a></li>
                    <?php } ?>

                    <?php if ($this->session->userdata('role') == 3) { ?>
                         <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Performance
                                    <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu" id="dropdown">
                                <li><a href="<?php echo base_url(); ?>index.php/supervisor/performance" id="a-dropdown">Buat</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/supervisor/performance/showEdit" id="a-dropdown">Ubah</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/supervisor/performance/hapusTarget" id="a-dropdown">Hapus</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/supervisor/performance/overall" id="a-dropdown">Overall Performance</a></li>
                            </ul>
                        </li>   

                        <li><a href="<?php echo base_url(); ?>index.php/supervisor/over/showOverall" >
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Overall Summary</a></li>
                    <?php } ?>

                    <?php if ($this->session->userdata('role') == 1) { ?>
                        <li><a href="<?php echo base_url(); ?>index.php/dashboard" >
                         <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                        
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> User
                                    <span class="caret"></span></a>
                         <ul class="dropdown-menu" role="menu" id="dropdown">
                                <li><a href="<?php echo base_url(); ?>index.php/dashboard/createUser" id="a-dropdown">Create</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/dashboard/users" id="a-dropdown">All Users</a></li>
                            </ul>
                        </li>
                    <?php } ?>
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url(); ?>index.php/template/logout" >
                         <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout (<?php echo $this->session->userdata('id') ?>)</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
              
            </div><!-- /.container-fluid -->
        </nav>
    

        <div id="konten">
        
        <?php $this->load->view($main); ?>


        
        <!--
        <div id="the-basics">
  <input class="typeahead" type="text" placeholder="States of USA">
</div>-->
        <?php
    /*
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m") . "<br>";
    echo "Today is " . date("l");
    */
    ?>
         
    
        



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
