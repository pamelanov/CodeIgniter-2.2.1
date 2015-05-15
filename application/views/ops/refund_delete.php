<h1><?php echo $judul; ?></h1>


    <h1><?php echo $judul; ?></h1>
<ul class="nav nav-tabs">
    <li role="presentation" "><a href="<?php echo base_url(); ?>index.php/ops/student/searchSummary" > Student</a></li>
    <li role="presentation"class="active"><a href="<?php echo base_url(); ?>index.php/ops/refund/cRefund" > Refund</a></li>
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/feedbacks" > Feedback</a></li>
</ul>
    
     <form name='delete_refund' action='<?php echo base_url(); ?>index.php/dashboard/deleteRefund' method='post' >
         
         <button type="submit" class="btn btn-danger">Delete Refund</button>
        </div>
    </form>