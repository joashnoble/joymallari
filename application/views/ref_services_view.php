
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $_title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php echo $_def_css_files ?> 

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
    <?php echo $_top_navigation; ?>
    <?php echo $_side_navigation; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Services
        <small>Reference</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="Homepage"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Services</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header" style="">
              <button class="btn btn-success right_services_view" id="btn_new"><i class="fa fa-barcode" aria-hidden="true"></i> New Services</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tbl_services" class="table table-bordered table-striped">
                <thead class="tbl-header">
                    <tr>
                        <th >Code</th>
                        <th >Service Description</th>
                        <th >Amount</th>
                        <th >Notes</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                    <th >Code</th>
                    <th >Service Description</th>
                    <th >Amount</th>
                    <th >Notes</th>
                    <th style="text-align:center;">Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

    <!--modal-->
        <div id="modal_Ref_services" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bgm-indigo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">Patient Reference</h4>
                    </div>
                    <div class="modal-body">
                        <form id="frm_Ref_services">
                        <div class="container-fluid">
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Service Desc :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-barcode fa-size" aria-hidden="true"></i></span>
                                                <select name="ref_service_desc_id" class="form-control" placeholder="Service Description" data-error-msg="Service Description is required." required>
                                                    <?php
                                                        foreach($service_desc as $row)
                                                        {
                                                            echo '<option value="'.$row->ref_service_desc_id  .'">'.$row->service_desc.'</option>';
                                                        }
                                                    ?>
                                               </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Amount  :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="amount" class="form-control numeric" placeholder="Amount" data-error-msg="Amount is required." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">Notes :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-sticky-note fa-size"></i></span>
                                                <textarea name="note" name="note" rows="4" placeholder="Notes" class="form-control" data-error-msg="Notes is required."></textarea>
                                        </div>            
                                    </div>
                                </div>
                        </div>
                    </div>
                    </form>
                    <div class="modal-footer" >
                        <button id="btn_create" style="margin-top:5px;" type="button" class="btn bgm-green">Save
                        </button>
                        <button type="button" style="margin-top:5px;" class="btn bgm-red" data-dismiss="modal">Close
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> Modified by JBPV
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

<?php echo $_right_navigation ?> 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php echo $_def_js_files ?> 
<?php echo $_rights; ?>

    <script type="text/javascript">
        var initializeControls=function(){
        dt=$('#tbl_services').DataTable({
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax" : "Ref_services/transaction/list",
            "columns": [
                { targets:[1],data: "code" },
                { targets:[2],data: "service_desc" },
                { targets:[3],data: "amount" },
                { targets:[4],data: "note" },
                {

                    targets:[6],
                    render: function (data, type, full, meta){
                        

                        return '<center>'+btn_services_edit+btn_services_trash+'</center>';
                    }
                }

            ],
            language: {
                         searchPlaceholder: "Search Services"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(10).attr({
                    "align": "right"
                });
            }
        }); 

    }();

    $('#btn_browse').click(function(event){
            event.preventDefault();
            $('input[name="file_upload[]"]').click();
    });

        /*$('input[name="file_upload[]"]').change(function(event){
            var _files=event.target.files;

            //$('#div_img_product').hide();
           // $('#div_img_loader').show();
           showSpinningProgressUpload();

            var data=new FormData();
            $.each(_files,function(key,value){
                data.append(key,value);
            });

            console.log(_files);

            $.ajax({
                url : 'Users/transaction/upload',
                type : "POST",
                data : data,
                cache : false,
                dataType : 'json',
                processData : false,
                contentType : false,
                success : function(response){
                            //console.log(response);
                            //alert(response.path);
                           // $('#div_img_loader').hide();
                           // $('#div_img_user').show();
                            $.unblockUI();
                            $('img[name="img_user"]').attr('src',response.path);

                        }
            });
        });*/


    $('#btn_new').click(function(){
        _txnMode="new";
        $('#modal_Ref_services').modal('show');
        clearFields($('#frm_Ref_services'));
    });

    $('#btn_create').click(function(){
            if(validateRequiredFields($('#frm_Ref_services'))){
                if(_txnMode==="new"){
                    //alert("aw");
                    createServices().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_Ref_services'))
                    }).always(function(){
                        $('#modal_Ref_services').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
                if(_txnMode==="edit"){
                    //alert("update");
                    updateServices().done(function(response){
                        showNotification(response);
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                    }).always(function(){
                        $('#modal_Ref_services').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
            }
            else{}
        });

    $('#tbl_services tbody').on('click','button[name="edit_info"]',function(){
        _txnMode="edit";
        
        _selectRowObj=$(this).closest('tr');
        var data=dt.row(_selectRowObj).data();
        _selectedID=data.ref_services_id;
        //$('#emp_exemptpagibig').val(data.emp_exemptphilhealth);

       // alert($('input[name="tax_exempt"]').length);
        //$('input[name="tax_exempt"]').val(0);
        //$('input[name="inventory"]').val(data.is_inventory);

        $('input,textarea').each(function(){
            var _elem=$(this);
            $.each(data,function(name,value){
                if(_elem.attr('name')==name){
                    _elem.val(value);
                }
            });
        });

        $('#modal_Ref_services').modal('toggle');

    });

    $('#tbl_services tbody').on('click','button[name="remove_info"]',function(){
        _selectRowObj=$(this).closest('tr');
        var data=dt.row(_selectRowObj).data();
        _selectedID=data.ref_services_id;
        delete_notif();

    });

    $('#tbl_services tbody').on( 'click', 'tr td.patient-details', function () {
            var detailRows = [];
            var tr = $(this).closest('tr');
            var row = dt.row( tr );
            var idx = $.inArray( tr.attr('id'), detailRows );

            if ( row.child.isShown() ) {
                tr.removeClass( 'details' );
                row.child.hide();

                detailRows.splice( idx, 1 );
            }
            else {
                tr.addClass( 'details' );

                row.child( format( row.data() ) ).show();

                if ( idx === -1 ) {
                    detailRows.push( tr.attr('id') );
                }
            }
        } );

    var createServices=function(){
        var _data=$('#frm_Ref_services').serializeArray();
        /*_data.push({name : "photo_path" ,value : $('img[name="img_user"]').attr('src')});*/

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Ref_services/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
   
    };     

    var updateServices=function(){
            var _data=$('#frm_Ref_services').serializeArray();
            _data.push({name : "ref_services_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Ref_services/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
        };

    var removeServices=function(){
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Ref_services/transaction/delete",
                "data":{ref_services_id : _selectedID},
                "beforeSend": showSpinningProgress($('#'))
            });
        };
   
    var delete_notif=function(type){
            swal({   
                    title: "Are you sure?",   
                    text: "You will not be able to recover this file!",   
                    type: "warning",   
                    closeOnConfirm: false,
                    closeOnCancel: false,
                    showCancelButton: true,   
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel plx!",   
                },function(isConfirm){
                    if (isConfirm) {     
                        swal("Deleted!", "Service Reference has been deleted.", "success");
                            removeServices().done(function(response){
                            showNotification(response);
                                dt.row(_selectRowObj).remove().draw();
                             //   alert(data.ref_service_id);
                           $.unblockUI();
                            });
                         
                    } else {     
                        swal("Cancelled", "Your file is safe :)", "error");   
                    } 
                });
    };

    var success_notif=function(type){
        swal("Good job!", "Sucessfully "+type, "success");
    };

    var showNotification=function(obj){
        PNotify.removeAll();
        new PNotify({
            title:  obj.title,
            text:  obj.msg,
            type:  obj.stat
        });
    }; 

    var clearFields=function(f){
        $('input,textarea',f).val('');
        $(f).find('input:first').focus();
        $('#card_type').val('');
        $('#points').val('');
        $('#description ').val('');
    };


    function format ( d ) {
        return '<div class="card">'+
                  '<div class="card-header bgm-green">'+
                      '<h2 style="font-weight:bold;font-size:18pt;">Notes'+
                      '</h2>'+
                    '</div>'+
                    '<div class="card-body card-padding">'+
                        d.note+
                    '</div>'+
                '</div>'
        /*'<h3 class="boldlabel">Notes :</h3>'+
        '<hr style="height:1px;background-color:black;"></hr>'+
        '<p class="boldlabel">'+d.ref_note+'</p>'*/
    };

        $('.date-picker').datepicker({
          autoclose: true
        });

   </script>
</body>
</html>
