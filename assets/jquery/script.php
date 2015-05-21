<script>$(document).on("click", ".recurring", function(e) {
            bootbox.dialog({
                title: "Menambahkan Recurring Status",
                message:
                '<form class="form-horizontal" id="form-recurring"> ' +
                    '<div class="row">  ' +
                    '<div class="col-md-12"> ' +
                        
                            '<div class="form-group"> ' +
                                '<label class="col-md-4 control-label" for="name">ID Kelas</label> ' +
                                    '<div class="col-md-4"> ' +
                                        '<select class="form-control" name="id_sales" placeholder="ID Kelas">' +
                                        '<?php foreach ($courses as $c) { ?>' +
                                         '<option>' +
                                         '<?php  echo $c->id_kelas; ?>' +
                                         '</option>' +
                                        '<?php } ?>' +
                                    '</select>' +
                                    '</div> ' +
                            '</div> ' +
                            '<div class="form-group"> ' +
                                '<label class="col-md-4 control-label" for="tanggal">Tanggal Pengisian </label>' +
                                    '<div class="col-md-4"> ' +
                                        '<input type="date" name="tanggal" value=<?php echo date("Y-m-d") ?>> ' +
                                    '</div>' +
                            '</div>' +
                            '<div class="form-group"> ' +
                                '<label class="col-md-4 control-label" for="recurring">Melanjutkan Kelas?</label> ' +
                                    '<div class="col-md-4"> ' +
                                            '<a class="recurring-ya" href=#>' +
                                                '<span class="glyphicon glyphicon-ok" aria-hidden="true">Ya</span></a> \n' +
                                            '<a class="recurring-tidak" href=#>' +
                                                 '<span class="glyphicon glyphicon-remove" aria-hidden="true">Tidak</span></a> \n' +
                                    '</div>' +
                            '</div>' +
                        //'</form>' +
                    '</div>' +
                '</div>',
                buttons: {
                    success: {
                        label: "Bikin dulu dah huhuhu",
                        className: "btn-success",
                        callback: function () {
                            window.location.href = "<?php echo base_url(); ?>index.php/ops/summary/";
                        }
                    }
                }
                
            }
        );
        });
            
        $(document).on("click", ".recurring-ya", function(a) {
            bootbox.dialog({
                title: "Melanjutkan Kelas",
                message:
                '<div class="row">  ' +
                    '<div class="col-md-12"> ' +
                        //'<form class="form-horizontal"> ' +
                            '<div class="form-group"> ' +
                                 '<label class="col-md-4 control-label" for="periode">Periode</label> ' +
                                        '<div class="col-md-4"> ' +
                                            '<input type="date" name="periode-awal" class="form-control input-md">' +
                                            '<center>s/d</center>' +
                                            '<input type="date" name="periode-akhir" class="form-control input-md">'  +
                                        '</div>' +
                            '</div>' +
                    '</div>' +
                    '<div class="col-md-12"> ' +
                            '<div class="form-group"><br/>' +
                                '<label class="col-md-4 control-label" for="jumlah-jam">Jumlah Jam</label> ' +
                                    '<div class="col-md-4"> ' +
                                        '<input name="jumlah-jam" type="text" placeholder="jumlah jam" class="form-control input-md"> ' +
                                    '</div>' +
                            '</div>' +
                    
                        //'</form>' +
                    '</div>' +
                '</div>' +
                '</form>'
                
                ,
                buttons: {
                    success: {
                        label: "Simpan",
                        className: "btn-success",
                        callback: function () {
                            var name = $('#name').val();
                            var answer = $("input[name='awesomeness']:checked").val()
                            Example.show("Hello " + name + ". You've chosen <b>" + answer + "</b>");
                        }
                    }
                }
            }
        );
        });
        
        $(document).on("click", ".recurring-tidak", function(b) {
            bootbox.dialog({
                title: "Tidak Melanjutkan Kelas",
                message:
                    '<div class="col-md-12"> ' +
                            '<div class="form-group"> ' +
                                 '<label class="col-md-4 control-label" for="periode">Alasan</label> ' +
                                        '<div class="col-md-4"> ' +
                                            '<textarea rows="4" cols="200" name="alasan" form="form-recurring" class="form-control input-md"></textarea>'  +
                                        '</div>' +
                            '</div>' +
                    '</div>' +
                '</form>'
                
                ,
                buttons: {
                    success: {
                        label: "Simpan",
                        className: "btn-success",
                        callback: function () {
                            var name = $('#name').val();
                            var answer = $("input[name='awesomeness']:checked").val()
                            Example.show("Hello " + name + ". You've chosen <b>" + answer + "</b>");
                        }
                    }
                }
            }
        );
        });
</script>