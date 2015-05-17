<h1><?php echo $judul; ?></h1>

     <form name='delete_refund' action='<?php echo base_url(); ?>index.php/dashboard/deleteRefund' method='post' onsubmit='return confirm("Apakah Anda yakin ingin menghapus refund?")' >
         
         <button type="submit" class="btn btn-danger">Delete Refund</button>
        </div>
    </form>