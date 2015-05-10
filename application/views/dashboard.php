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
    
   
    </script>


        <div id="konten">
        

        <?php $this->load->view($main); ?>
        <!--
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title" id ="toggle">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>-->
        



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
