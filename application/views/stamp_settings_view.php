
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
  <style type="text/css">
    td.details-control {
        background: url('assets/img/icons/Folder_Closed.png') no-repeat center center;
        cursor: pointer;
    }
    tr.details td.details-control {
        background: url('assets/img/icons/Folder_Opened.png') no-repeat center center;
    }
  </style>
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
        <i class="fa fa-cog"></i> General Information Settings
      </h1>
      <ol class="breadcrumb">
        <li><a href="Homepage"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">General Information Settings</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header" style="border-bottom: 1px solid lightgray;background: #f5f5f5;">
                <div>
                    <button type="button" class="btn btn-success" id="btn_save">
                        <i class="fa fa-check"></i> Apply Changes
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row" style="margin-top: 10px;">
                    <form id="frm_stamp">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <i class="fa fa-credit-card"></i> <b class="uppercase">Stamp Information</b>
                                            <span style="float: right;">
                                                <input type="checkbox" name="is_show_print" id="is_show_print"
                                                <?php if($stamp->is_show_print == 1){ echo 'checked'; } ?>>
                                                <label for="is_show_print" class="normal">Show in Print</label>
                                            </span>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">  
                                                <div class="form-group hidden">
                                                    <label class="col-sm-4" for="inputEmail1">
                                                        Stamp ID :
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group mb">
                                                            <span class="input-group-addon"><i class="fa fa-list fa-size" aria-hidden="true"></i></span>
                                                                <input type="text" name="stamp_id" id="stamp_id" class="form-control" placeholder="Stamp ID" value="<?php echo $stamp->stamp_id; ?>">
                                                        </div>
                                                    </div>
                                                </div>                                    
                                                <div class="form-group">
                                                    <label class="col-sm-4" for="inputEmail1">
                                                        Stamp Title :
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group mb">
                                                            <span class="input-group-addon"><i class="fa fa-list fa-size" aria-hidden="true"></i></span>
                                                                <input type="text" name="stamp_title" class="form-control" placeholder="Stamp Title" data-error-msg="Stamp Title is required." required value="<?php echo $stamp->stamp_title; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4" for="inputEmail1">
                                                        Stamp Info :
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group mb">
                                                            <span class="input-group-addon"><i class="fa fa-list fa-size" aria-hidden="true"></i></span>
                                                                <input type="text" name="stamp_info" class="form-control" placeholder="Stamp Info" value="<?php echo $stamp->stamp_info; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4" for="inputEmail1">
                                                        PRC License # :
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group mb">
                                                            <span class="input-group-addon"><i class="fa fa-credit-card-alt fa-size" aria-hidden="true"></i></span>
                                                                <input type="text" name="prc_lic_no" class="form-control" placeholder="PRC License #" value="<?php echo $stamp->prc_lic_no; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4" for="inputEmail1">
                                                        PHIC Accreditation # :
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group mb">
                                                            <span class="input-group-addon"><i class="fa fa-credit-card-alt fa-size" aria-hidden="true"></i></span>
                                                                <input type="text" name="phic_accre_no" class="form-control" placeholder="PHIC Accreditation #" value="<?php echo $stamp->phic_accre_no; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4" for="inputEmail1">
                                                        PTR # :
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group mb">
                                                            <span class="input-group-addon"><i class="fa fa-credit-card-alt fa-size" aria-hidden="true"></i></span>
                                                                <input type="text" name="ptr_no" class="form-control" placeholder="PTR #" value="<?php echo $stamp->ptr_no; ?>">
                                                        </div>
                                                    </div>
                                                </div>  
                                                <div class="form-group">
                                                    <label class="col-sm-4" for="inputEmail1">
                                                        S2 # :
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group mb">
                                                            <span class="input-group-addon"><i class="fa fa-credit-card-alt fa-size" aria-hidden="true"></i></span>
                                                                <input type="text" name="s2_no" class="form-control" placeholder="S2 #" value="<?php echo $stamp->s2_no; ?>">
                                                        </div>
                                                    </div>
                                                </div>                                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <i class="fa fa-circle"></i> <b class="uppercase">Logo 1</b>
                                            <span style="float: right;">
                                                <input type="checkbox" name="logo_1_is_show" id="logo_1_is_show"
                                                <?php if($header->logo_1_is_show == 1){ echo 'checked'; } ?>>
                                                <label for="logo_1_is_show" class="normal">Show in Print</label>
                                            </span>

                                            <input type="text" name="header_id" id="header_id" class="form-control hidden" placeholder="Stamp ID" value="<?php echo $header->header_id; ?>">
                                        </div>
                                        <div class="panel-body" style="min-height: 239px;">
                                            <div class="row"> 
                                                <center>
                                                    <img src="<?php echo $header->logo_1_path;?>" name="logo_1_path" style="width: 200px;height: 200px;">
                                                    <input type="file" name="file_upload_logo_1[]" class="hidden">
                                                </center>       
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button type="button" class="btn btn-default" id="btn_browse_logo_1" style="width: 100%;">
                                                        <i class="fa fa-upload"></i> Browse
                                                    </button>
                                                </div>
                                                <div class="col-md-6">
                                                    <button type="button" class="btn btn-danger" id="btn_remove_logo_1" style="width: 100%;">
                                                        <i class="fa fa-times-circle"></i> Remove
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                        
                                </div>
                                <div class="col-md-3">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <i class="fa fa-circle"></i> <b class="uppercase">Logo 2</b>
                                            <span style="float: right;">
                                                <input type="checkbox" name="logo_2_is_show" id="logo_2_is_show"
                                                <?php if($header->logo_2_is_show == 1){ echo 'checked'; } ?>>
                                                <label for="logo_2_is_show" class="normal">Show in Print</label>
                                            </span>
                                        </div>
                                        <div class="panel-body" style="min-height: 239px;">
                                            <div class="row">
                                                <center>
                                                    <img src="<?php echo $header->logo_2_path;?>" name="logo_2_path" style="width: 200px;height: 200px;"> 
                                                    <input type="file" name="file_upload_logo_2[]" class="hidden">
                                                </center>          
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button type="button" class="btn btn-default" id="btn_browse_logo_2" style="width: 100%;">
                                                        <i class="fa fa-upload"></i> Browse
                                                    </button>
                                                </div>
                                                <div class="col-md-6">
                                                    <button type="button" class="btn btn-danger" id="btn_remove_logo_2" style="width: 100%;">
                                                        <i class="fa fa-times-circle"></i> Remove
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>                                 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <i class="fa fa-credit-card"></i> <b class="uppercase">Default Header Report</b>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">                                 
                                                <div class="form-group">
                                                    <label class="col-sm-3" for="inputEmail1">
                                                        Header Title :
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group mb">
                                                            <span class="input-group-addon"><i class="fa fa-list fa-size" aria-hidden="true"></i></span>
                                                                <input type="text" name="header_title" class="form-control" placeholder="Stamp Title" data-error-msg="Header Title is required." required value="<?php echo $header->header_title; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" for="inputEmail1">
                                                        Header Sub Info :
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group mb">
                                                            <span class="input-group-addon"><i class="fa fa-list fa-size" aria-hidden="true"></i></span>
                                                                <input type="text" name="header_info" class="form-control" placeholder="Stamp Info" value="<?php echo $header->header_info; ?>">
                                                        </div>
                                                    </div>
                                                </div>                                                          
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.box-body -->
          </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> Modified by JBPV | JJLN
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

        }();

    $('#btn_browse_logo_1').click(function(event){
        event.preventDefault();
        $('input[name="file_upload_logo_1[]"]').click();
    });

    $('#btn_browse_logo_2').click(function(event){
        event.preventDefault();
        $('input[name="file_upload_logo_2[]"]').click();
    });

    $('#btn_remove_logo_1').click(function(event){
        event.preventDefault();
        $('img[name="logo_1_path"]').attr('src','assets/img/logo/psn_logo.png');
    });

    $('#btn_remove_logo_2').click(function(event){
        event.preventDefault();
        $('img[name="logo_2_path"]').attr('src','assets/img/logo/nkti_logo.jpg');
    });    

    $('input[name="file_upload_logo_1[]"]').change(function(event){
        var _files=event.target.files;

        // showSpinningProgressUPLOAD();

        var data=new FormData();
        $.each(_files,function(key,value){
            data.append(key,value);
        });

        $.ajax({
            url : 'StampSettings/transaction/upload',
            type : "POST",
            data : data,
            cache : false,
            dataType : 'json',
            processData : false,
            contentType : false,
            success : function(response){
                        showNotification(response);
                        $.unblockUI();
                        $('img[name="logo_1_path"]').attr('src',response.photo_path);
                    }
        });
    });

    $('input[name="file_upload_logo_2[]"]').change(function(event){
        var _files=event.target.files;

        // showSpinningProgressUPLOAD();

        var data=new FormData();
        $.each(_files,function(key,value){
            data.append(key,value);
        });

        $.ajax({
            url : 'StampSettings/transaction/upload',
            type : "POST",
            data : data,
            cache : false,
            dataType : 'json',
            processData : false,
            contentType : false,
            success : function(response){
                        showNotification(response);
                        $.unblockUI();
                        $('img[name="logo_2_path"]').attr('src',response.photo_path);
                    }
        });
    });    

    $('#btn_save').click(function(){
        if(validateRequiredFields($('#frm_stamp'))){
            updateGeneralSettings().done(function(response){
                showNotification(response);
            }).always(function(){
                $.unblockUI();
            });
            return;
        }
    });

    var updateGeneralSettings=function(){
        var _data=$('#frm_stamp').serializeArray();
        
        _data.push({name : "logo_1_path" ,value : $('img[name="logo_1_path"]').attr('src')});
        _data.push({name : "logo_2_path" ,value : $('img[name="logo_2_path"]').attr('src')});

        _data.push({name : "is_show_print" ,value : $('#is_show_print').is(':checked') ? 1 : 0});
        _data.push({name : "logo_1_is_show" ,value : $('#logo_1_is_show').is(':checked') ? 1 : 0});
        _data.push({name : "logo_2_is_show" ,value : $('#logo_2_is_show').is(':checked') ? 1 : 0});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"StampSettings/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
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
                            removeUserAccount().done(function(response){
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

    var validateRequiredFields=function(f){
    var stat=true;
    var pword=$('#user_pword').val();
    var cpword=$('#user_confirm_pword').val();
    $('div.form-group').removeClass('has-error');

        $('div.form-group').removeClass('has-error');
        $('input[required],textarea[required],select[required]',f).each(function(){

                if($(this).is('select')){
                if($(this).val()==0 || $(this).val()==null){
                    showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                    $(this).closest('.input-group').addClass('has-error');
                    $(this).focus();
                    stat=false;
                    return false;
                }
            
                }else{
                if($(this).val()==""){
                    showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                    $(this).closest('.input-group').addClass('has-error');
                    $(this).focus();
                    stat=false;
                    return false;
                }
                if(pword!=cpword){
                    showNotification({title:"Error!",stat:"error",msg:"Pasword Doesnt Match"});
                    $('#password').addClass('has-error');
                    $('#confpassword').addClass('has-error');
                    $('#user_confirm_pword').focus();
                    stat=false;
                    return false;
                }
            }
            



        });

        return stat;
        };

    function format ( d ) {
        return '<div class="container-fluid" style="margin:10px;">'+
        '<div class="col-md-12">'+ 
        '<h3 class="boldlabel"><span class="glyphicon glyphicon-user fa-lg"></span> ' + d.full_name+ '</h3>'+
        '<p>[ Username : '+d.user_name+' ] [ Account Type : '+d.user_group+' ]</p>'+
        '<hr style="height:1px;background-color:black;"></hr>'+
        '</div>'+ //First Row//
        '<div class="row">'+
        '<div class="col-md-3">'+
        '<center><img class="loadingimg" style="margin-top:4px;width:150px;height:150px;" src="'+d.photo_path+'"></img></center>'+
        '</div>'+
        '<div class="col-md-6"><p class="nomargin"><b>Gender</b> : '+d.user_email+'</p>'+
        '<p class="nomargin"><b>Birthdate</b> : '+d.user_mobile+'</p>'+
        '<p class="nomargin"><b>Civil Status</b> : '+d.user_telephone+'</p>'+
        '<p class="nomargin"><b>Blood Type</b> : '+d.user_bdate+'</p>'+
        '<p class="nomargin"><b>Blood Type</b> : '+d.user_address+'</p>'+

        '</div>'+
        '</div>'+
        '<hr style="height:1px;background-color:black;"></hr>'+
        '</div>';
    };

    $('.date-picker').datepicker({
      autoclose: true
    });

    $(".imagelight").lightGallery(); 

   </script>

</body>
</html>

