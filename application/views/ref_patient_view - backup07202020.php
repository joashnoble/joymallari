
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $_title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="assets/plugins/twittertypehead/twitter.typehead.css" rel="stylesheet">
  <?php echo $_def_css_files ?> 

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    td.patient-details {
        background: url('assets/img/icons/Folder_Closed.png') no-repeat center center;
        cursor: pointer;
    }
    tr.details td.patient-details {
        background: url('assets/img/icons/Folder_Opened.png') no-repeat center center;
    }
    .ospace{
        margin:0 !important;
        padding:0 !important;
    }
    .ocheckboxtop{
        margin-top:0 !important;
    }
    .cancel{
        background-color: #2980b9 !important;
    }
    .confirm{
        background-color: #27ae60 !important;
    }
    .mgright{
        text-align:right;
    }
    .areafullname{
        text-transform: uppercase;
    }
    input[type="text"]:disabled, textarea:disabled{
        background: white!important;
    }
    input[type=checkbox]:checked {
      background: white!important;
    } 
    .areafullname{
        font-weight: bold;
    }   

    .normal{
        font-weight: normal!important;
    }
    .txt_right{
        border:0px;border-bottom:1px solid #2c3e50;text-align: right;
    }
    .txt_left{
        border:0px;border-bottom:1px solid #2c3e50;text-align: left;
    }
    .required{
        color: red;
    }
    .padding{
        padding-bottom: 20px!important;
        margin-bottom: 20px!important;
    }
    .numeric, .number{
        text-align: right;
    }
  </style>
</head>
<body class="hold-transition skin-green sidebar-mini fixed">
<div class="wrapper">
    <?php echo $_top_navigation; ?>
    <?php echo $_side_navigation; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Patient General Information
      </h1>
      <ol class="breadcrumb">
        <li><a href="Homepage"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Reference</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div id="div_patient_list" class="table-list">
            <div class="box">
                <div class="box-header" style="">
                    <button class="btn btn-dark right_patientref_create" id="btn_new_refpatient">
                        <i class="fa fa-user" aria-hidden="true"></i> New Patient
                    </button>

                    <a href="Ref_patient/transaction/export-patient-masterlist" class="btn btn-default" style="float: right;" data-toggle="tooltip" data-placement="bottom" title="Export Patient Masterlist">
                        <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                    </a>
                    <hr>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive" >
                  <table id="tbl_ref_patient" width="100%" class="table table-striped table_patient">
                    <thead class="tbl-header">
                        <tr>
                            <th><center>#</center></th>
                            <th>Fullname</th>
                            <th>Birthdate</th>
                            <th>Sex</th>
                            <th>Telephone #</th>
                            <th>Mobile #</th>
                            <th style="text-align:center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
        </div>
        <div id="div_patient_fields" class="table-field" style="display: none;">
            <div class="box">
                <div class="box-header" style="">
                    <h4 class="bh-text-title"><span class="header-text-title"></span> | <small> <span class="header-text-info"></span></small>
                        <div style="float: right;margin-top: -10px;">
                            <button class="btn btn-default close_patient_field" style="border-radius: 50%;">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    </h4>
                    <hr>
                </div>
                <div class="box-body">
                    <div class="row">
                        <form id="frm_ref_patients">
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-user"></i> <b class="uppercase">Patient Information</b>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">  
                                            <div class="form-group">
                                                <label class="col-sm-3" for="inputEmail1">
                                                    <span class="required">*</span> Firstname :
                                                </label>
                                                <div class="col-sm-9">
                                                    <div class="input-group mb">
                                                        <span class="input-group-addon"><i class="fa fa-user fa-size" aria-hidden="true"></i></span>
                                                            <input type="text" name="first_name" class="form-control" placeholder="Firstname" data-error-msg="Firstname is required." required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3" for="inputEmail1">
                                                    Middlename :
                                                </label>
                                                <div class="col-sm-9">
                                                    <div class="input-group mb">
                                                        <span class="input-group-addon"><i class="fa fa-user fa-size" aria-hidden="true"></i></span>
                                                            <input type="text" name="middle_name" class="form-control" placeholder="Middlename" data-error-msg="Middlename is required.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3" for="inputEmail1">
                                                    <span class="required">*</span> Lastname :
                                                </label>
                                                <div class="col-sm-9">
                                                    <div class="input-group mb">
                                                        <span class="input-group-addon"><i class="fa fa-user fa-size" aria-hidden="true"></i></span>
                                                            <input type="text" name="last_name" class="form-control" placeholder="Lastname" data-error-msg="Lastname is required." required>
                                                    </div>
                                                </div>
                                            </div>                                                              
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default" style="min-height: 343px;">
                                    <div class="panel-heading">
                                        <i class="fa fa-list"></i> <b class="uppercase">Personal Information</b>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-3" for="inputEmail1">
                                                    <span class="required">*</span> Birthday :
                                                </label>
                                                <div class="col-sm-9">
                                                    <div class="input-group mb">
                                                        <span class="input-group-addon"><i class="fa fa-birthday-cake fa-size" aria-hidden="true"></i></span>
                                                            <input type="text" name="bdate" class="form-control date-picker" placeholder="Birthdate" data-error-msg="Birthday is required." required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3" for="inputEmail1">
                                                    <span class="required">*</span> Gender :
                                                </label>
                                                <div class="col-sm-9">
                                                    <div class="input-group mb">
                                                        <span class="input-group-addon"><i class="fa fa-transgender fa-size" aria-hidden="true"></i></span>
                                                            <select class="form-control" name="sex" id="sex" data-error-msg="Sex is required." required style="width: 50%;">
                                                               <option value="Male">Male</option>
                                                               <option value="Female">Female</option>
                                                           </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3" for="inputEmail1">
                                                    Civil Status:
                                                </label>
                                                <div class="col-sm-9">
                                                    <div class="input-group mb">
                                                        <span class="input-group-addon"><i class="fa fa-file" aria-hidden="true"></i></span>
                                                            <input type="text" name="civil_status" class="form-control" placeholder="Civil Status" data-error-msg="Civil Status is required." style="width: 50%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3">
                                                    Height:
                                                </label>
                                                <div class="col-sm-9">
                                                    <div class="input-group mb">
                                                        <span class="input-group-addon"><i class="fa fa-file" aria-hidden="true"></i></span>
                                                            <input type="text" name="height" class="form-control" placeholder="Height" data-error-msg="Height is required." style="width: 50%;">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="form-group">
                                                <label class="col-sm-3">
                                                    Weight:
                                                </label>
                                                <div class="col-sm-9">
                                                    <div class="input-group mb">
                                                        <span class="input-group-addon"><i class="fa fa-file" aria-hidden="true"></i></span>
                                                            <input type="text" name="weight" class="form-control" placeholder="Weight" data-error-msg="Weight is required." style="width: 50%;">
                                                    </div>
                                                </div>
                                            </div>                            
                                            <div class="form-group">
                                                <label class="col-sm-3">
                                                    Blood Type :
                                                </label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-file fa-size" aria-hidden="true"></i></span>
                                                            <input type="text" name="blood_type" class="form-control" placeholder="Blood Type" data-error-msg="Blood Type is required." style="width: 50%;">
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-phone"></i> <b class="uppercase">Contact Information</b>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-sm-2">Email:</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb">
                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-size" aria-hidden="true"></i></span>
                                                        <input type="email" name="email" class="form-control" placeholder="Email" data-error-msg="Email is required.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2" for="inputEmail1">Tel #:</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb">
                                                    <span class="input-group-addon"><i class="fa fa-phone fa-size" aria-hidden="true"></i></span>
                                                        <input type="text" name="telephone" class="form-control" placeholder="Telephone" data-error-msg="Telephone is required.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2" for="inputEmail1">Mobile #:</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb">
                                                    <span class="input-group-addon"><i class="fa fa-mobile fa-size" aria-hidden="true"></i></span>
                                                        <input type="text" name="mobile" class="form-control" placeholder="Mobile #">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-home"></i> <b class="uppercase">Address Information</b>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-2">Address :</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group mb">
                                                        <span class="input-group-addon"><i class="fa fa-location-arrow fa-size" aria-hidden="true"></i></span>
                                                            <textarea name="address" rows="1" placeholder="Address" class="form-control" data-error-msg="Address is required." style="min-height: 35px;"></textarea>
                                                    </div>            
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2">Notes :</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group mb">
                                                        <span class="input-group-addon"><i class="fa fa-sticky-note fa-size"></i></span>
                                                            <textarea name="ref_note" name="ref_note" rows="1" placeholder="Notes" class="form-control" data-error-msg="Notes is required." style="min-height: 35px;"></textarea>
                                                    </div>            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-building"></i> <b class="uppercase">Work Information</b>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-3">Occupation:</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group mb">
                                                        <span class="input-group-addon"><i class="fa fa-file fa-size" aria-hidden="true"></i></span>
                                                            <input type="text" name="occupation" class="form-control" placeholder="Occupation" data-error-msg="Occupation is required.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3">Company Name:</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group mb">
                                                        <span class="input-group-addon"><i class="fa fa-file fa-size" aria-hidden="true"></i></span>
                                                            <input type="text" name="company_name" class="form-control" placeholder="Company Name" data-error-msg="Company Name is required.">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-user"></i> <b class="uppercase">Guardian Information</b>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="" for="inputEmail1">Guardian Name :</label>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user fa-size" aria-hidden="true"></i></span>
                                                            <input type="text" name="guardian_name" class="form-control" placeholder="Guardian Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="" for="inputEmail1">Relationship :</label>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-transgender fa-size" aria-hidden="true"></i></span>
                                                            <select class="form-control" name="ref_relationship_id" data-error-msg="Relationship is required." id="ref_relationship_id" required>
                                                               <option value="1">Mother</option>
                                                               <option value="2">Father</option>
                                                           </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="" for="inputEmail1">Mobile # :</label>
                                                <div class="form-group" >
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-mobile fa-size" aria-hidden="true"></i></span>
                                                            <input type="text" name="guardian_mobile" class="form-control" placeholder="Telephone" data-error-msg="Mobile Number is required.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="" for="inputEmail1">Tel # :</label>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-phone fa-size" aria-hidden="true"></i></span>
                                                            <input type="text" name="guardian_telephone" class="form-control" placeholder="Telephone #">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="" for="inputEmail1">Address :</label>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-location-arrow fa-size" aria-hidden="true"></i></span>
                                                            <textarea name="guardian_address" rows="3" placeholder="Address" class="form-control" data-error-msg="Gurdian's Address is required." style="min-height: 35px;"></textarea>
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
                <div class="box-footer" style="background: #f5f5f5;">
                    <div class="col-md-12">
                       <button class="btn btn-danger" id="btn_cancel_refpatient" style="float: right;margin-left: 5px;">
                            <i class="fa fa-times-circle" aria-hidden="true"></i> Cancel
                        </button> 
                       <button class="btn btn-success" id="btn_createrefpatient" style="float: right;">
                            <i class="fa fa-check-circle"></i> Save
                        </button> 
                    </div>
                </div>
            </div> 
        </div>         
        <div id="div_prescription_list" class="table-list">
            <div class="box">
                <div class="box-header" style="">
                    <button class="btn btn-dark right_patientref_create" id="btn_new_refpatient">
                        <i class="fa fa-user" aria-hidden="true"></i> New Prescription
                    </button>

                    <a href="Ref_patient/transaction/export-patient-masterlist" class="btn btn-default" style="float: right;" data-toggle="tooltip" data-placement="bottom" title="Export Patient Masterlist">
                        <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                    </a>
                    <hr>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive" >
                  <table id="tbl_ref_patient" width="100%" class="table table-striped table_patient">
                    <thead class="tbl-header">
                        <tr>
                            <th><center>#</center></th>
                            <th>Fullname</th>
                            <th>Birthdate</th>
                            <th>Sex</th>
                            <th>Telephone #</th>
                            <th>Mobile #</th>
                            <th style="text-align:center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
        </div>
        <!--patient modal-->
<!--         <div id="modal_ref_patient" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bgm-indigo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span>
                        </button>
                        <h3 class="modal-title">Patient General Info <small id="patient_txn" style="color: white;"></small></h3>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer" >
                        <button id="btn_createrefpatient" style="margin-top:5px;" type="button" class="btn btn-success bgm-green">
                            <i class="fa fa-check-circle"></i> Save
                        </button>
                        <button type="button" style="margin-top:5px;" class="btn btn-danger bgm-red" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Close
                        </button>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- patient modal -->

        <!-- modal patient prescription start -->
        <div class="modal fade" id="modal_patient_prescription" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">
                            <span class="fa fa-user-md"></span> Prescription of : <areafullname class="areafullname"></areafullname>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="">
                          <table id="tbl_patient_prescription" class="table table-striped">
                            <thead class="tbl-header">
                                <tr>
                                    <th style="color:white;">PR #</th>
                                    <th style="color:white;">Date Prescribed</th>
                                    <th style="text-align:center;color:white;">Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="new_prescription" class="btn btn-dark bgm-green waves-effect right_prescription_create">
                            <i class="fa fa-plus-circle"></i> New Prescription
                        </button>
                        <button type="button" id="close_prescription" class="btn btn-danger bgm-red waves-effect" data-dismiss="modal">    <i class="fa fa-times-circle"></i> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal patient presription end -->

        <!-- modal new prescription -->
        <div id="modal_new_prescription" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title" style="color: white;">
                            <span id="prescription_icon"></span> Patient Prescription : <areafullname class="areafullname"></areafullname>
                        </h4>   
                    </div>
                    <div class="modal-body" style="padding:10px;">
                        <form id="frm_patient_prescription">
                            <div class="row">
                                <div class="col-md-2 col-xs-offset-7">
                                <label><font style="color: red;font-weight: bold;">*</font> Date Prescribed:</label>
                                    <div class="fg-line">
                                        <input type="text" style="text-align:center;" class="form-control date-picker" id="date_prescribed" name="date_prescribed" placeholder="Date Prescribed" data-error-msg="Date Prescribed Is Required!" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <label>Appointment Date:</label>
                                    <div class="fg-line">
                                        <input type="text" style="text-align:center;" class="form-control date-picker" id="appointment_date" name="appointment_date" placeholder="Appointment Date">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 5px;display: none;">
                                <div class="col-md-12">
                                    <label class="control-label boldlabel" ><strong>Search Item :</strong></label><br/>
                                    <label class="control-label"><strong>Quantity:</strong></label><input type="text" id="tempcode" disabled>
                                    <input class="typeahead" id="txtsearch" type="text" >
                                </div>
                            </div>
                        <div class="table-responsive" style="height: 400px;overflow-x:hidden;overflow-y:scroll;">
                                <table id="tbl_prescription_add" class="table table-striped" style="margin-top:5px;">
                                    <thead class="tbl-header" id="addrow">
                                        <tr>
                                            <th style="color:white;">Medication</th>
                                            <th style="color:white;">Qty</th>
                                            <th style="color:white;">AM</th>
                                            <th style="color:white;">NN</th>
                                            <th style="color:white;">PM</th>
                                            <th style="color:white;">Bedtime</th>
                                            <th style="color:white;">Remarks</th>
                                            <th style="color:white;text-align:center;">Action</th>
                                         </tr>
                                     </thead>
                                     <tbody class="tbody_new_prescription">
                                        
                                     </tbody>
                                </table>
                            </form>
                        </div>
                    </div> 
                    <div class="modal-footer">
                        <button id="btn_create_prescription" type="button" class="btn btn-success bgm-green waves-effect">
                            <i class="fa fa-check-circle"></i> Save
                        </button>
                        <button id="btn_addrow" type="button" class="btn bgm-blue btn-default waves-effect">
                            <i class="fa fa-plus-circle"></i> Add Row
                        </button>
                        <button type="button" class="btn bgm-red waves-effect btn-danger close_new_prescription" data-dismiss="modal">
                            <i class="fa fa-arrow-left"></i> Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end new prescription -->

        <!--  modal patient prescriotion details -->
        <div id="modal_prescription_details" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title" style="color: white;">
                            <span id="prescription_icon_1"></span> 
                            Patient Prescription of: <areafullname class="areafullname"></areafullname>
                        </h4>   
                    </div>
                    <div class="modal-body" style="padding:5px;">
                        <div id="printcontentprescription">
                            <div class="card">
                                <!-- <div class="card-header ch-alt text-center">
                                    <img class="i-logo company_print" class="" src="" alt="">
                                </div> -->

                                <div class="card-body">
                                    <?php echo $header_1; ?>
                                    <div class="text-center">
                                        <h4 style="font-weight: bold;font-family: tahoma;">
                                            Prescription
                                        </h4>
                                    </div>
                                    <div style="font-size:11pt;margin-top: 20px!important;">
                                        <div class="col-xs-5" style="padding:0px;float:left;">Patient Name : <areafullname class="areafullname"></areafullname>
                                        </div>
                                        <div class="col-xs-2" style="float:left;">Age : <areaage class="areaage"></areaage>
                                        </div>
                                        <div class="col-xs-2" style="float:left;">Sex : <areasex class="areasex"></areasex>
                                        </div>
                                        <div class="col-xs-3" style="float:left;">Date : <prescriptiondate class="prescriptiondate"></prescriptiondate>
                                        </div>
                                    </div>
                                    <hr style="margin-top:5px;"></hr>
                                        <div class="table table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="text-uppercase">
                                                    <th>Medication</th>
                                                    <th>Qty</th>
                                                    <th>AM</th>
                                                    <th>NN</th>
                                                    <th>PM</th>
                                                    <th>Bedtime</th>
                                                    <th>Remarks</th>
                                                </thead>
                                                <tbody class="prescription_view">
                                                </tbody>
                                            </table>
                                        </div>
                                </div>

                                <footer class="m-t-15 p-20">
                                    <div class="list-inline text-left list-unstyled" style="font-size:8pt;line-height: 100%;float: left!important;margin-left: 10px;">
                                        <b>Note:</b> Do not change prescribed brand without my consent.<br />
                                        Next Appointment on : <span id="next_app_date"></span>
                                    </div>
                                    <div class="list-inline text-right list-unstyled" style="font-size:8pt;line-height: 100%;float: right;">
                                        <?php echo $stamp; ?>
                                    </div>
                                </footer>
                            </div>
                        </div>

                    </div> 
                    <div class="modal-footer" style="margin-top: 100px;">
                        <button type="button" class="btn btn-default bgm-green waves-effect close_new_prescription" id="print_prescription">
                            <i class="fa fa-print"></i> Print
                        </button>
                        <button type="button" class="btn btn-danger bgm-red waves-effect close_new_prescription" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal patient prescription end -->

        <!-- modal patient laboratory -->
        <div class="modal fade" id="modal_patient_laboratory" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#e67e22;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">
                            <span class="fa fa-stethoscope"></span> Laboratory Report of : <areafullname class="areafullname"></areafullname>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div>
                            <table id="tbl_lab" width="100%" class="table table-striped">
                                <thead class="tbl-header">
                                <tr>
                                    <th style="color:white;">Date</th>
                                    <th style="color:white;">Details</th>
                                    <th style="text-align:center;color:white;">Action</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="new_laboratory" class="btn btn-dark bgm-green waves-effect right_medlab_create">
                            <i class="fa fa-plus-circle"></i> New Laboratory
                        </button>
                        <button type="button" id="close_laboratory" class="btn btn-danger bgm-red waves-effect" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal patient laboratory -->

        <!-- modal newpatient new lab -->
        <div id="modal_new_lab" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#e67e22;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title" style="color: white;">
                                <span id="lab_result_icon"></span> Patient Laboratory Report <small class="patient_txn"></small>
                            </h4>
                    </div>
                    <div class="modal-body">
                            <form id="frm_patient_laboratory">
                                <div class="row">
                                    <div class="col-md-6"><br><br>
                                            <div class="form-group">
                                                <label for="" class="col-sm-4 boldlabel control-label" style="margin-top:6px;"><span class="required">*</span> Date :</label>
                                                <div class="col-sm-8">
                                                    <div class="fg-line">
                                                        <input type="text" class="form-control date-picker" id="date_lab" name="date_lab" placeholder="Date Lab" data-error-msg="Date Is Required!" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" style="margin-top:10px;">
                                                <label for="" class="col-sm-4 boldlabel control-label" style="margin-top:6px;"><span class="required">*</span> Results:</label>
                                                <div class="col-sm-8">
                                                    <div class="fg-line">
                                                        <textarea class="form-control" name="results" id="results" rows="8" placeholder="Results Here" data-error-msg="Results Is required!" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <center>
                                        <div class="row" style="border:2px solid #2c3e50;width:85%;margin-top:15px;padding-bottom:10px;">
                                            <h4 style="padding:0px;margin:0px;font-weight:bold;">Image Attachment</h4>
                                            <hr style="padding:0px;margin:10px;height:2px;background-color:#2c3e50;margin-top:2px;">
                                                <div id="lightgallery" class="imagelight">
                                                    <a name="img_a" href="assets/img/icons/default.png">
                                                        <img name="img_preview" style="width:150px; height:150px;" src="assets/img/icons/default.png" />
                                                    </a>
                                                </div>
                                        </div>
                                         <button type="button" id="btn_browse" class="btn btn-default btn_full" style="width: 87%;">
                                            Browse Photo <i class="fa fa-ellipsis-h"></i>
                                         </button>
                                         <input type="file" id="pix_admin" name="file_upload[]" class="hidden">
                                         </center>
                                    </div>
                                </div>
                            </form>
                    </div> 
                    <div class="modal-footer">
                        <button id="btn_create_lab" type="button" class="btn btn-success bgm-green waves-effect">
                            <i class="fa fa-check-circle"></i> Save
                        </button>
                        <button type="button" class="btn bgm-red waves-effect btn-danger close_new_laboratory" data-dismiss="modal">
                            <i class="fa fa-arrow-left"></i> Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal new patient lab end -->

        <!-- modal patient lab details -->
        <div class="modal fade" id="modal_laboratory_details" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#e67e22;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title">
                                <span id="lab_result_icon_1"></span> Laboratory Report view of : <areafullname class="areafullname"></areafullname>
                            </h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-sm-12">
                            <h4>Date : <labdate id="lab_date"></labdate></h4>
                            <p id="lab_details"></p>
                            <center>
                                <div id="lightgallery" class="imagelight">
                                    <a name="img_a" href="assets/img/icons/default.png">
                                        <img name="img_preview" style="width:100%;border:1px solid gray" src="assets/img/icons/default.png" />
                                    </a>
                                </div>
                                <p>Click the Image to view it in fullscreen mode.</p>
                            </center>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger bgm-red waves-effect close_new_laboratory" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal patient lab details -->

        <!-- modal patient billing start -->
        <div class="modal fade" id="modal_patient_billing" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2980b9;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">
                            <span class="fa fa-money"></span> Patient Billing of : <areafullname class="areafullname"></areafullname>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div>
                        <table id="tbl_billing" width="100%" class="table table-striped">
                            <thead class="tbl-header">
                            <tr>
                                <th style="color:white;">Billing Code</th>
                                <th style="color:white;">Date</th>
                                <th style="text-align:center;color:white;">Action</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="new_billing" class="btn btn-dark bgm-green waves-effect right_billing_create">
                            <i class="fa fa-plus-circle"></i> New Billing
                        </button>
                        <button type="button" id="close_billing" class="btn btn-danger bgm-red waves-effect" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal patient billing end -->

        <!-- modal new billing -->
        <div id="modal_new_billing" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title" style="color: white;">
                                <span id="patient_billing_icon"></span>
                                Patient Billing : <areafullname class="areafullname"></areafullname> <small class="patient_txn"></small>
                            </h4>
                        
                    </div>
                    <div class="modal-body">
                        <form id="frm_patient_billing">
                            <div class="row">
                                <div class="col-md-2">
                                <label>Date:</label>
                                    <div class="fg-line">
                                        <input type="text" style="text-align:center;" class="form-control date-picker" id="billing_Date" name="billing_date" placeholder="Date Prescribed" data-error-msg="Billing Date Is Required!" required>
                                    </div>
                                </div>
                            </div>
                        <div class="table-responsive" style="height: 400px;overflow-x:hidden;overflow-y:scroll;">
                                <table id="tbl_billing_add" class="table table-striped" style="margin-top:5px;">
                                    <thead class="tbl-header" id="addrow">
                                        <tr>
                                            <th style="color:white;">Service Desc</th>
                                            <th style="color:white;text-align: right;">Qty</th>
                                            <th style="color:white;text-align: right;">Amount</th>
                                            <th style="color:white;text-align: right;">Total</th>
                                            <th style="color:white;">Action</th>
                                         </tr>
                                    </thead>
                                    <tbody class="tbody_new_billing">
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div> 
                    <div class="modal-footer">
                        <button id="btn_create_billing" type="button" class="btn btn-success bgm-green waves-effect">
                            <i class="fa fa-check-circle"></i> Save changes
                        </button>
                        <button id="btn_addrow_billing" type="button" class="btn btn-default bgm-blue waves-effect">
                            <i class="fa fa-plus-circle"></i> Add Row
                        </button>
                        <button type="button" class="btn btn-danger bgm-red waves-effect close_new_prescription" data-dismiss="modal">
                            <i class="fa fa-arrow-left"></i> Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal new billing end -->

        <!--  modal patient prescriotion details -->
        <div id="modal_billing_details" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title" style="color: white;">
                                <span id="patient_billing_icon_1"></span> Billing Details <small class="patient_txn"></small>
                            </h4>
                        
                    </div>
                    <div class="modal-body" style="padding:5px;overflow:hidden;">
                        <div id="printcontentbilling">
                            <div class="card">
                                <!-- <div class="card-header ch-alt text-center">
                                    <img class="i-logo company_print" class="" src="" alt="">
                                </div> -->

                                <div class="card-body">
                                    <?php echo $header_1; ?>
                                    <div style="font-size:11pt;margin-top: 20px!important;">
                                        <div class="col-xs-7" style="padding:0px;float:left;">Patient Name : <areafullname class="areafullname"></areafullname>

                                            <span style="float: right;">
                                                Age : <areaage class="areaage"></areaage>
                                            </span>
                                        </div> 
                                        <div class="col-xs-2" style="float:left;">Sex : <areasex class="areasex"></areasex>
                                        </div>
                                        <div class="col-xs-3" style="float:left;">Date : <billingdate class="billingdate"></billingdate>
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-xs-12">
                                            <div style="margin-top: 5px!important; ">
                                                <b>Billing Code :</b> <span class="billing_code"></span>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="table table-responsive" style="margin-top: 5px!important;">
                                            <table class="table table-bordered">
                                                <thead class="text-uppercase">
                                                    <th>Service Desc</th>
                                                    <th style="text-align: right;">Qty</th>
                                                    <th style="text-align: right;">Amount</th>
                                                    <th style="text-align: right;">Total</th>
                                                </thead>
                                                <tbody class="billing_view">
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                                <footer class="m-t-15 p-20">
                                    <div class="list-inline text-right list-unstyled" style="font-size:8pt;line-height: 100%;float: right;margin-top: 0px;">
                                        <?php echo $stamp; ?>
                                    </div>
                                </footer>
                            </div>
                        </div>

                    </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default bgm-green waves-effect" id="print_billing">
                            <i class="fa fa-print"></i> Print
                        </button>
                        <button type="button" class="btn btn-danger bgm-red waves-effect" data-dismiss="modal">
                            <i class="fa fa-arrow-left"></i> Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal patient prescription end -->

        <!-- modal patient visiting -->
        <div class="modal fade" id="modal_vising_record" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2980b9;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">
                            <span class="fa fa-file-text-o"></span> Patient Visiting Record of : <b><areafullname class="areafullname"></areafullname>
                        </h4></b>
                    </div>
                    <div class="modal-body">
                        <div>
                        <table id="tbl_visiting_record" width="100%" class="table table-striped">
                            <thead class="tbl-header">
                            <tr>
                                <th style="color:white;">Date</th>
                                <th style="color:white;">Note</th>
                                <th style="color:white;">Diagnostics</th>
                                <th style="text-align:center;color:white;">Action</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="new_visiting_record" class="btn btn-dark bgm-green waves-effect right_visiting_create">
                            <i class="fa fa-plus-circle"></i> New Visiting Record
                        </button>
                        <button type="button" id="close_visiting" class="btn btn-danger bgm-red waves-effect" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal patient visiting end -->

        <!-- modal new p visiting record start -->
        <div id="modal_new_visit" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2980b9;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title" style="color: white;">
                                <span id="patient_visiting_icon"></span>
                                Patient Visiting Record <small class="patient_txn"></small>
                            </h4>
                    </div>
                    <div class="modal-body">
                            <form id="frm_patient_visiting_record">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group" style="margin-top:10px;">
                                            <label class="" for="inputEmail1"><span class="required">*</span> Date Visited :</label>
                                            <div class="fg-line">
                                               <input type="text" name="visiting_date" id="visiting_date" class="form-control date-picker" placeholder="Date Visited" data-error-msg="Date Visited is required." required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" style="margin-top:10px;">
                                            <label class="" for="inputEmail1"><span class="required">*</span> Next Visit Date :</label>
                                            <div class="fg-line">
                                               <input type="text" name="next_visit_date" class="form-control date-picker" placeholder="Next Visit Date" data-error-msg="Next Visit Date is required." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1"><span class="required">*</span> Note :</label>
                                            <div class="fg-line">
                                               <textarea name="visiting_note" placeholder="Note" class="form-control" data-error-msg="Diagnostics is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1"><span class="required">*</span> Diagnostics :</label>
                                            <div class="fg-line">
                                               <textarea name="visiting_diagnostics" placeholder="Diagnostics" class="form-control" data-error-msg="Diagnostics is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1"><span class="required">*</span> Findings :</label>
                                            <div class="fg-line">
                                               <textarea  name="visiting_findings" placeholder="Findings" class="form-control" data-error-msg="Findings is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1"><span class="required">*</span> Treatment :</label>
                                            <div class="fg-line">
                                               <textarea name="treatment" placeholder="Treatment" class="form-control" data-error-msg="Treatment is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1"><span class="required">*</span> Remarks :</label>
                                            <div class="fg-line">
                                               <textarea  name="visiting_remarks" placeholder="Address" class="form-control" data-error-msg="Remarks is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div> 
                    <div class="modal-footer">
                        <button id="btn_create_visiting_record" type="button" class="btn btn-success bgm-green waves-effect">
                            <i class="fa fa-check-circle"></i> Save
                        </button>
                        <button type="button" class="btn btn-danger bgm-red waves-effect close_new_visit" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal new p visitingrecord end -->

        <!-- modal visiting details -->
        <div class="modal fade" id="modal_visiting_details" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#16a085;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title">
                                <span id="patient_visiting_icon_1"></span>
                                Visiting Details of : <areafullname class="areafullname"></areafullname>
                                <small class="patient_txn"></small>
                            </h4>
                    </div>
                    <div class="modal-body">
                        <form> 
                            <div id="printcontentvisitingdetails">
                                <div class="card">
                                    <div class="card-body card-padding">
                                    <?php echo $header_2; ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 style="float:left;font-weight:400;">Date Visited : <datevisited id="datevisited"></datevisited></h4>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 style="float:right;font-weight:400;">Next Visit Date : <nextvisitdate id="nextvisitdate"></nextvisitdate></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                                <h4 style="float:left;font-weight:400;">Note :</h4>
                                        </div>
                                        <div class="row">
                                                <p style="float:left;"><visitingnote id="visitingnote"></visitingnote></p>
                                        </div>
                                        <div class="row">
                                                <h4 style="float:left;font-weight:400;">Diagnostics :</h4>
                                        </div>
                                        <div class="row">
                                                <p style="float:left;"><visitingdiagnostics id="visitingdiagnostics"></visitingdiagnostics></p>
                                        </div>
                                        <div class="row">
                                                <h4 style="float:left;font-weight:400;">Findings :</h4>
                                        </div>
                                        <div class="row">
                                                <p style="float:left;"><visitingfindings id="visitingfindings"></visitingfindings></p>
                                        </div>
                                        <div class="row">
                                                <h4 style="float:left;font-weight:400;">Treatment :</h4>
                                        </div>
                                        <div class="row">
                                                <p style="float:left;"><visitingtreatment id="visitingtreatment"></visitingtreatment></p>
                                        </div>
                                        <div class="row">
                                                <h4 style="float:left;font-weight:400;">Remarks :</h4>
                                        </div>
                                        <div class="row">
                                                <p style="float:left;"><visitingremarks id="visitingremarks"></visitingremarks></p>
                                        </div>
                                    </div>

                                    <!-- <footer class="m-t-15 p-20">
                                        <ul class="list-inline text-center list-unstyled">
                                            <li class="m-l-5 m-r-5">
                                                <small><?php echo "iamjbpv@outlook.com"; ?></small>
                                            </li>
                                            <li class="m-l-5 m-r-5">
                                                <small><?php echo '099540932xx'; ?></small>
                                            </li>
                                            <li class="m-l-5 m-r-5">
                                                <small><?php echo "www.jbvillamayor.com"; ?></small>
                                            </li>
                                        </ul>
                                    </footer> -->
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default bgm-green waves-effect" id="printvisitdetails">
                            <i class="fa fa-print"></i> Print
                        </button>
                        <button type="button" class="btn btn-danger bgm-red waves-effect close_new_visit" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modalvisiting detailsend -->

        <!-- modal patient clinical -->
        <div class="modal fade" id="modal_clinical" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2980b9;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title">
                                <i class="fa fa-medkit"></i> Clinical Database of: <areafullname class="areafullname"></areafullname>
                            </h4>
                    </div>
                    <div class="modal-body">
                        <div>
                        <table id="tbl_clinical" width="100%" class="table table-striped">
                            <thead class="tbl-header">
                            <tr>
                                <th>Date</th>
                                <th style="color:white;">Diagnostics</th>
                                <th style="color:white;">Treatment</th>
                                <th style="color:white;">Medication</th>
                                <th style="color:white;">Remarks</th>
                                <th style="text-align:center;color:white;">Action</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="new_clinical" class="btn btn-dark bgm-green waves-effect right_clinicaldb_create">
                            <i class="fa fa-plus-circle"></i> New Clinical Database
                        </button>
                        <button type="button" id="close_visiting" class="btn btn-danger bgm-red waves-effect" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal patient clinical end -->

        <!-- modal new clinical start -->
        <div id="modal_new_clinical" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2980b9;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title" style="color: white;">
                                <span id="clinical_database_icon"></span>
                                Clinical Database <small class="patient_txn"></small>
                            </h4>
                    </div>
                    <div class="modal-body">
                            <form id="frm_clinical_db">
                                <div class="col-md-12 container-fluid">
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1"><span class="required">*</span> Date :</label>
                                            <div class="fg-line">
                                               <input type="text" name="date_created" id="cd_date" placeholder="Date" class="form-control date-picker" data-error-msg="Date is required." required>       
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1"><span class="required">*</span> Diagnostics :</label>
                                            <div class="fg-line">
                                               <textarea name="clinical_diagnostics" placeholder="Diagnostics" class="form-control" data-error-msg="Diagnostics is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1"><span class="required">*</span> Treatment :</label>
                                            <div class="fg-line">
                                               <textarea  name="clinical_treatment" placeholder="Findings" class="form-control" data-error-msg="Treatment is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1"><span class="required">*</span> Medications :</label>
                                            <div class="fg-line">
                                               <textarea name="clinical_medication" placeholder="Treatment" class="form-control" data-error-msg="Medications is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1"><span class="required">*</span> Remarks :</label>
                                            <div class="fg-line">
                                               <textarea  name="clinical_remarks" placeholder="Address" class="form-control" data-error-msg="Remarks is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div> 
                    <div class="modal-footer">
                        <button id="btn_create_clinical" type="button" class="btn btn-success bgm-green waves-effect">
                            <i class="fa fa-check-circle"></i> Save
                        </button>
                        <button type="button" class="btn btn-danger bgm-red waves-effect close_new_visit" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal new clinical end -->

        <!-- modal clinical details -->
        <div class="modal fade" id="modal_clinical_details" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#16a085;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title">
                                <span id="clinical_database_icon_1"></span>
                                Clinical Details of : <areafullname class="areafullname"></areafullname>
                                <small class="patient_txn"></small>
                            </h4>
                    </div>
                    <div class="modal-body">
                        <form> 
                            <div id="printcontentclinicaldetails">
                                <div class="row">
                                    <div class="text-center">
                                        <h4 style="font-family:tahoma;font-size:14pt;">JOY D. MALLARI - DE LARA ,MD ,FPCP ,FPSN</h4>
                                        
                                        <span class="text-muted">
                                            <address style="font-family:tahoma;font-size:14pt;">
                                                Internal Medicine - Nephrology<br>
                                                Clinical Database
                                            </address>
                                        </span>
                                    </div>
                                </div>
                                <div class="card">
                                    <!-- <div class="card-header ch-alt text-center">
                                        <img class="i-logo company_print" id="company_print" src="" alt="">
                                    </div> -->

                                    <div class="card-body card-padding">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="text-right">
                                                    <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">Dizon-Mallari Medical Clinic</h4>
                                                    
                                                    <span class="text-muted">
                                                        <address style="font-family:tahoma;font-size:8pt;">
                                                            092 Hi way San Pablo, Mexio, Pampanga<br>
                                                            Clinic hours Mon thru Fridays (except Wed) 9-11am<br>
                                                            Tel # 09156285228 (045) 4353646
                                                        </address>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="text-left">
                                                    <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">V.L MAKABALI MEMORIAL HOSPITAL</h4>
                                                    
                                                    <span class="text-muted">
                                                        <address style="font-family:tahoma;font-size:8pt;">
                                                            Medical Arts Building Rm 2113<br>
                                                            Wednesdays and Fridays 2-4 pm<br>
                                                            Tel # (045) 4361275 / 09267200990
                                                        </address>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="text-right">
                                                    <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">ACCU-RENAL MEDICAL SERVICES</h4>
                                                    
                                                    <span class="text-muted">
                                                        <address style="font-family:tahoma;font-size:8pt;">
                                                            Brgy Mabiga, Mabalacat, Pampanga<br>
                                                            Clinic hours T Th 2-4 pm<br>
                                                            Tel # (045) 6245699
                                                        </address>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="text-left">
                                                    <h4 class="text-uppercase" style="font-family:tahoma;font-size:10pt;">THE MEDICAL CITY CLARK</h4>
                                                    
                                                    <span class="text-muted">
                                                        <address style="font-family:tahoma;font-size:8pt;">
                                                            Global Gateway Logistics City, Clark Free Port Zone<br>
                                                            Wed 10-12nn Room 210<br>
                                                            Tel # 09430100581
                                                        </address>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                                <h4 style="float:left;font-weight:400;">Date :</h4>
                                        </div>
                                        <div class="row">
                                                <p style="float:left;"><clinical id="clinical_dbdate"></clinical></p>
                                        </div>
                                        <div class="row">
                                                <h4 style="float:left;font-weight:400;">Diagnostics :</h4>
                                        </div>
                                        <div class="row">
                                                <p style="float:left;"><clinical id="clinical_diagnostics"></clinical></p>
                                        </div>
                                        <div class="row">
                                                <h4 style="float:left;font-weight:400;">Treatment :</h4>
                                        </div>
                                        <div class="row">
                                                <p style="float:left;"><clinical id="clinical_treatment"></clinical></p>
                                        </div>
                                        <div class="row">
                                                <h4 style="float:left;font-weight:400;">Medication :</h4>
                                        </div>
                                        <div class="row">
                                                <p style="float:left;"><clinical id="clinical_medication"></clinical></p>
                                        </div>
                                        <div class="row">
                                                <h4 style="float:left;font-weight:400;">Remarks :</h4>
                                        </div>
                                        <div class="row">
                                                <p style="float:left;"><clinical id="clinical_remarks"></clinical></p>
                                        </div>
                                    </div>

                                    <!-- <footer class="m-t-15 p-20">
                                        <ul class="list-inline text-center list-unstyled">
                                            <li class="m-l-5 m-r-5">
                                                <small><?php echo "iamjbpv@outlook.com"; ?></small>
                                            </li>
                                            <li class="m-l-5 m-r-5">
                                                <small><?php echo '099540932xx'; ?></small>
                                            </li>
                                            <li class="m-l-5 m-r-5">
                                                <small><?php echo "www.jbvillamayor.com"; ?></small>
                                            </li>
                                        </ul>
                                    </footer> -->
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success bgm-green waves-effect" id="printclinicaldetails">
                            <i class="fa fa-check-circle"></i> Print
                        </button>
                        <button type="button" class="btn btn-danger bgm-red waves-effect close_new_visit" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modalvisiting detailsend -->

        <!-- modal patient medical abstract list start -->
        <div class="modal fade" id="modal_medical_abstract_list" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">
                            <span class="fa fa-stethoscope"></span> Medical Abstract of : <areafullname class="areafullname"></areafullname>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div>
                          <table id="tbl_patient_medical_abstract" class="table table-striped">
                            <thead class="tbl-header">
                                <tr>
                                    <th style="color:white;">Code</th>
                                    <th style="color:white;">Case No</th>
                                    <th style="color:white;">Date Created</th>
                                    <th style="text-align:center;color:white;">Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="new_medical_abstract" class="btn btn-dark bgm-green waves-effect right_medical_abstract_create">
                            <i class="fa fa-plus-circle"></i> New Medical Abstract
                        </button>
                        <button type="button" id="close_medical_abstract" class="btn btn-danger bgm-red waves-effect" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal patient medical abstract list end -->

        <!--  med abstract MODAL -->
        <div id="modal_medical_abstract" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title" style="color: white;">
                                <span id="medical_abstract_icon"></span>
                                Medical Abstract
                                <small class="patient_txn"></small>
                            </h4>
                    </div>
                    <div class="modal-body" style="padding:5px;">
                        <div id="print_medical_abstract_content">
                            <div class="container-fluid">
                                <?php echo $header_1; ?>
                                <form id="frm_medical_abstract">
                                <div class="text-center">
                                    <h4 style="font-family:tahoma;font-size:12pt;font-weight: bold; ">
                                        <u>Medical Abstract</u>
                                    </h4>
                                </div>
                                <div class="row">   
                                    <div class="text-left">
                                        <table style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th style="width:30%;">Name</th>
                                                    <th style="width:10%;">Sex</th>
                                                    <th style="width:10%;">Age</th>
                                                    <th style="width:10%;">CS</th>
                                                    <th style="width:20%;">Date of Birth</th>
                                                    <th style="width:20%;">Case No</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><u><areafullname class="areafullname" style="font-weight: normal!important;"></areafullname></u></td>
                                                    <td><u><areasex class="areasex"></areasex></u></td>
                                                    <td><u><areaage class="areaage"></areaage></u></td>
                                                    <td><input type="text" name="cs" style="border:0px;border-bottom:1px solid black;width:70px"></td>
                                                    <td><u><areabirthdate class="areabirthdate"></areabirthdate></u></td>
                                                    <td><input type="text" name="case_no" style="border:0px;border-bottom:1px solid black;"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        Address : <u><areaaddress class="areaaddress"></areaaddress></u>
                                    </div>
                                    <!-- <div class="text-left">
                                        <div class="col-xs-6" style="float:left;font-size:11pt;">Address : <u><areaaddress class="areaaddress"></areaaddress></u>
                                        </div>
                                    </div> -->
                                        <div class="col-xs-6" style="font-size: 8pt!important;">
                                                <div class="checkbox-left">
                                                   <h5 style="margin:2px;"><b>DIAGNOSIS</b></h5>
                                                   <input class="onemargin" type="checkbox" name="" id="diag_chronic_kidney_disease" style="width:50px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:10pt;">Chronic Kidney Disease<br><addition style="margin-left:54px;">DUE TO : (Check all that apply)</addition></tag> <br>
                                                   <input class="onemargin" type="checkbox" name="" id="diag_chronic_glomeru" style="width:50px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:10pt;">Chronic glomerulonephritis</tag> <br>
                                                   <input class="onemargin" type="checkbox" name="" id="diag_chronic_pyelone" style="width:50px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:10pt;">Chronic pyelonephritis</tag> <br>
                                                   <input class="onemargin" type="checkbox" name="" id="diag_obs_uropathy" style="width:50px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:10pt;">Obstructive Uropathy</tag> <br>
                                                   
                                                </div>
                                        </div>
                                        <div class="col-xs-6"  style="font-size: 8pt!important;">
                                            <div class="checkbox-left">
                                               <br>
                                               <input class="onemargin" type="checkbox" name="" id="diag_end_stage" style="width:50px;border:0px;border-bottom:1px solid black;"><tag style="font-size:10pt;">End Stage Renal Disease</tag><br><br>
                                               <input class="onemargin" type="checkbox" name="" id="diag_hypertension" style="width:50px;border:0px;border-bottom:1px solid black;"><tag style="font-size:10pt;">Hypertension</tag> <br> 
                                               <input class="onemargin" type="checkbox" name="" id="diag_diabetic" style="width:50px;border:0px;border-bottom:1px solid black;"><tag style="font-size:10pt;">Diabetic Nephropathy</tag><br>
                                               <input class="onemargin" type="checkbox" name="" id="diag_uric_acid_nephro" style="width:50px;border:0px;border-bottom:1px solid black;"><tag style="font-size:10pt;">Uric Acid Nephropathy</tag><br>
                                               <others  class="onemargin" style="margin-left:15px;"> <tag style="font-size:10pt;">Others Specify :</tag></others><br><input type="text" name="diag_other_specify" id="" style="margin-left:15px;width:70%;border:0px;border-bottom:1px solid black;margin-left:15px;"><br>
                                            </div>
                                        </div>
                                </div>
                                <h6 style="margin:2px;"><b>TREATMENT</b></h6>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="checkbox-left">
                                           <input class="onemargin" type="checkbox" name="" id="treat_hemo" style="width:40px;border:0px;border-bottom:1px solid black;"> HEMODIALYSIS
                                           <input class="onemargin" type="checkbox" name="" id="treat_once_a_week" style="width:40px;border:0px;border-bottom:1px solid black;margin-left: 20px;"> once a week
                                           <input class="onemargin" type="checkbox" name="" id="treat_two_times_a_week" style="width:40px;border:0px;border-bottom:1px solid black;"> two times a week
                                           <input class="onemargin" type="checkbox" name="" id="treat_three_times_a_week" style="width:40px;border:0px;border-bottom:1px solid black;"> three times a week
                                        </div>
                                    </div>
                                </div>
                                <h6 style="margin:2px;"><b>MEDICINES (Check all prescribed)</b></h6>
                                <div class="row">
                                    <div class="col-xs-12">
                                       <input class="onemargin" type="checkbox" name="" id="med_eryth" style="width:40px;border:0px;border-bottom:1px solid black;"> <b style="font-size:9pt;">ERYTHROPOIETIN</b>
                                       <input class="onemargin" type="checkbox" name="" id="med_eprex" style="width:40px;border:0px;border-bottom:1px solid black;"> <b style="font-size:9pt;">EPREX</b>
                                       <input class="onemargin" type="checkbox" name="" id="med_recormon" style="width:40px;border:0px;border-bottom:1px solid black;"><b style="font-size:9pt;"> RECORMON </b>
                                       <input class="onemargin" type="checkbox" name="" id="med_epotin" style="width:40px;border:0px;border-bottom:1px solid black;"><b style="font-size:9pt;"> EPOTIN </b>
                                       <input class="onemargin" type="checkbox" name="" id="med_eposino" style="width:40px;border:0px;border-bottom:1px solid black;"><b style="font-size:9pt;"> EPOSINO </b>
                                       <input class="onemargin" type="checkbox" name="" id="med_others" style="width:40px;border:0px;border-bottom:1px solid black;"><b style="font-size:9pt;"> OTHERS </b>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="checkbox-left">
                                           <input class="onemargin" type="checkbox" name="" id="med_4000units" style="width:40px;border:0px;border-bottom:1px solid black;"> 4000 units
                                           <input class="onemargin" type="checkbox" name="" id="med_once_a_week" style="width:40px;border:0px;border-bottom:1px solid black;margin-left: 35px;"> <tag style="font-size:9pt;">once a week </tag>
                                           <input class="onemargin" type="checkbox" name="" id="med_two_times_a_week" style="width:40px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:9pt;">two times a week</tag>
                                           <input class="onemargin" type="checkbox" name="" id="med_three_times_a_week" style="width:40px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:9pt;">three times a week </tag>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="checkbox-left">
                                           <input class="onemargin" type="checkbox" name="" id="med_5000_units" style="width:40px;border:0px;border-bottom:1px solid black;"> 5000 units<br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <table style="width:100%;margin:10px;">
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_cal_carbo" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Calcium carbonate 500mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_cal_carbo_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_cal_carbo_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_cal_carbo_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_atenolol" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Atenolol
                                                <input type="text" class="mgright" name="med_atenolol_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_atenolol_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_atenolol_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_atenolol_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_sevelamer" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Sevelamer carbonate 800mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_sevelamer_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_sevelamer_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_sevelamer_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_carvedilol" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Carvedilol
                                                <input type="text" class="mgright" name="med_carvedilol_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_carvedilol_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_carvedilol_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_carvedilol_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_calcitriol" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <tag style="font-size:8pt;">Calcitriol<input type="text" class="mgright" name="med_calcitriol_mcg" id="" style="width:50px;border:0px;border-bottom:1px solid black;"></tag>
                                            </td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_calcitriol_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_calcitriol_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_calcitriol_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_metoprolol" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Metoprolol
                                                <input type="text" class="mgright" name="med_metoprolol_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_metoprolol_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_metoprolol_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_metoprolol_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_clopidogrel" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Clopidogrel 75mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_clopidogrel_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_clopidogrel_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_clopidogrel_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_clonidine" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Clonidine
                                                <input type="text" class="mgright" name="med_clonidine_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_clonidine_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_clonidine_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_clonidine_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_ferrous" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Ferrous sulfate 325mg</tag><input type="text" class="mgright" name="med_ferrous_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;"></tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_ferrous_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_ferrous_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_ferrous_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_atorvastatin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Atorvastatin
                                                <input type="text" class="mgright" name="med_atorvastatin_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_atorvastatin_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_atorvastatin_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_atorvastatin_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_folic_acid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Folic Acid 5mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_folic_acid_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_folic_acid_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_folic_acid_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_fluvastatin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Fluvastatin
                                                <input type="text" class="mgright" name="med_fluvastatin_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_fluvastatin_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_fluvastatin_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_fluvastatin_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_vitamin_c" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Vitamin C 500mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_vitamin_c_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_vitamin_c_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_vitamin_c_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input type="checkbox" name="" id="med_simvastatin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Simvastatin
                                                <input type="text" class="mgright" name="med_simvastatin_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_simvastatin_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_simvastatin_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_simvastatin_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_vitamin_b_complex" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Vitamin b complex 1 tablet</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_vitamin_b_complex_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_vitamin_b_complex_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_vitamin_b_complex_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_lanoxin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Lanoxin
                                                <input type="text" class="mgright" name="med_lanoxin_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_lanoxin_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_lanoxin_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_lanoxin_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_amlodipine" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Amlodipine<input type="text" class="mgright" name="med_amlodipine_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_amlodipine_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_amlodipine_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_amlodipine_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_allopurinol" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Allopurinol
                                                <input type="text" class="mgright" name="med_allopurinol_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_allopurinol_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_allopurinol_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_allopurinol_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_felodipine" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Felodipine<input type="text" class="mgright" name="med_felodipine_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_felodipine_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_felodipine_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_felodipine_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_gliclazide" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Gliclazide
                                                <input type="text" class="mgright" name="med_gliclazide_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_gliclazide_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_gliclazide_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_gliclazide_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_nifedipine" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Nitedipine<input type="text" class="mgright" name="med_nifedipine_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_nifedipine_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_nifedipine_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_nifedipine_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_metformin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Metformin<input type="text" class="mgright" name="med_metformin_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_metformin_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_metformin_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_metformin_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_diltiazcm" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Diltiazem<input type="text" class="mgright" name="med_diltiazcm_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_diltiazcm_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_diltiazcm_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_diltiazcm_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_renvela" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Renvela
                                                <input type="text" class="mgright" name="med_renvela_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_renvela_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_renvela_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_renvela_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_irbesartan" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Irbesartan<input type="text" class="mgright" name="med_irbesartan_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_irbesartan_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_irbesartan_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_irbesartan_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_exforge" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Exforge
                                                <input type="text" class="mgright" name="med_exforge_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_exforge_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_exforge_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_exforge_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_losartan" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Losartan<input type="text" class="mgright" name="med_losartan_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_losartan_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_losartan_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_losartan_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_twynsta" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Twynsta
                                                <input type="text" class="mgright" name="med_twynsta_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_twynsta_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_twynsta_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_twynsta_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_telmisartan" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Telmisartan<input type="text" class="mgright" name="med_telmisartan_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_telmisartan_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_telmisartan_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_telmisartan_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_lacipil" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Lacipil
                                                <input type="text" class="mgright" name="med_lacipil_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_lacipil_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_lacipil_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_lacipil_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_valsartan" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Valsartan<input type="text" class="mgright" name="med_valsartan_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_valsartan_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_valsartan_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_valsartan_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_insulin_glargine" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Insulin glargine
                                                <input type="text" class="mgright" name="med_insulin_glargine_units" id="" style="width:50px;border:0px;border-bottom:1px solid black;">units</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_insulin_glargine_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_insulin_glargine_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_insulin_glargine_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_ketosteril" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Ketosteril 600mg<input type="text" class="mgright" name="med_ketosteril_tab" id="" style="width:50px;border:0px;border-bottom:1px solid black;">tab</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_ketosteril_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_ketosteril_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_ketosteril_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_linagliptin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Linagliptin 5mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_linagliptin_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_linagliptin_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_linagliptin_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_kremezin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Kremezin 2g sachet<input type="text" class="mgright" name="med_perindopril_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;"></tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_kremezin_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_kremezin_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_kremezin_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_vildaglitpin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Vildagliptin 50mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_vildaglitpin_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_vildaglitpin_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_vildaglitpin_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="margin" type="checkbox" name="" id="med_perindopril" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Perindopril<input type="text" class="mgright" name="med_perindopril_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_perindopril_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_perindopril_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_perindopril_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="" id="med_glipizide" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Glipizide 50mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_glipizide_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_glipizide_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="" id="med_glipizide_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                    </table>
                                </div>
                               
                                <div class="row">
                                    <div class="col-xs-7">
                                        <p style="font-size:8pt;" class="ospace">Others:</p>
                                        <input type="text" id="medarea" rows="3" name="med_others_med" class="ospace" style="width:100%;border:0px;border-bottom:1px solid black;margin-top: -10px!important;">
                                        <p class="ospace" style="font-size:8pt;">Indicate how many medications checked:</p>
                                        <input type="text" name="med_medications_no" style="width:100%;border:0px;border-bottom:1px solid black;margin-top: -10px;">
                                        <p class="ospace" style="font-size:8pt;">Recommendations</p>
                                        <input type="text" id="recomarea" rows="3" name="med_recommendations" style="width:100%;border:0px;border-bottom:1px solid black;margin-top: -10px;">
                                    </div>
                                </div>
                                <footer class="m-t-15 p-20" id="ftr_medical_abstract">
                                    <div class="list-inline text-right list-unstyled" style="font-size:8pt;line-height: 100%;float: right;margin-top: -80px;">
                                        <?php echo $stamp; ?>
                                    </div>
                                </footer>
                            </div>
                            </form>
                        </div>

                    </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn bgm-green btn-success waves-effect right_medabstract_create" id="save_medical_abstract">
                            <i class="fa fa-check-circle"></i> Save
                        </button>
                        <button type="button" class="btn bgm-green btn-default waves-effect" id="print_medical_abstract">
                            <i class="fa fa-print"></i> Print
                        </button>
                        <button type="button" class="btn bgm-red btn-danger waves-effect close_new_prescription" data-dismiss="modal">
                            <i class="fa fa-arrow-left"></i> Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
         <!--  medical abstract -->

        <!-- modal nephro order list start -->
        <div class="modal fade" id="modal_nephro_order_list" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title">
                                <span class="fa fa-heart"></span> Nephrologist's Order of : <areafullname class="areafullname"></areafullname>
                            </h4>
                    </div>
                    <div class="modal-body">
                        <div>
                          <table id="tbl_patient_nephro_order" class="table table-striped">
                            <thead class="tbl-header">
                                <tr>
                                    <th style="color:white;">Code #</th>
                                    <th style="color:white;">Date Created</th>
                                    <th style="text-align:center;color:white;">Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="new_nephro_order" class="btn btn-dark bgm-green waves-effect right_nephro_order_create">
                            <i class="fa fa-plus-circle"></i> New Nephro Order
                        </button>
                        <button type="button" id="close_nephro_order" class="btn btn-danger bgm-red waves-effect" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal nephro order list end -->

           <!--  NEPHRO ORDER MODAL -->
        <div id="modal_patient_nephro_order" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title" style="color: white;">
                                <span id="nephro_order_icon"></span>
                                Nephro Order 
                                <small class="patient_txn"></small>
                            </h4>
                    </div>
                    <div class="modal-body" style="padding:5px;">
                        <div id="print_nephro_content">
                            <div class="container-fluid">
                                <?php echo $header_1; ?>
                                <form id="frm_nephro_order">
                                <div class="row" style="margin-top: 10px!important;">   
                                    <div class="text-left">
                                        <div class="col-xs-6" style="float:left;font-size:11pt;">Name : <u><areafullname class="areafullname"></areafullname></u>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="col-xs-6" style="float:right;font-size:11pt;">Age/Sex : <u><areaage class="areaage"></areaage></u> / <u><areasex class="areasex"></areasex></u>
                                        </div>
                                    </div>
                                    <div class="text-left">
                                        <div class="col-xs-6" style="float:left;font-size:11pt;">Diagnosis : <input type="text" name="nephro_diagnosis" style="border:0px;border-bottom:1px solid #2c3e50;width:200px;"> 
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="col-xs-6" style="float:right;font-size:11pt;">
                                            <span style="margin-right: 21px!important;">
                                                Dry Weight : <u><areadryweight class="areadryweight"></areadryweight></u>
                                            </span>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="text-center">
                                        <h4 class="text-uppercase" style="font-family:tahoma;font-size:13pt;font-weight:bold;">
                                            Nephrologist's Orders
                                        </h4>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="text-left">
                                        <input type="text" name="inc_freq_3x" name="nephro_inc_freq" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                        Increase frequency to 3 x a week
                                    </div>
                                    <div class="text-left">
                                        <input type="text" name="upd_medical_sheet" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                        Update Medical Sheet
                                    </div>
                                        <div class="text-left">
                                            <input type="text" name="shift_recormon_500" style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            Shift to Recormon 5000 u sc route at 1x/ 2x/ 3x a week
                                        </div>
                                        <div class="text-left">
                                            <input type="text" name="shift_eprex_4000" style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            Shift to Eprex 4000 u SC at 1x/ 2x/ 3x a week
                                        </div>
                                        <div class="text-left">
                                            <input type="text" name="shift_eposino_4000u" style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            Shift to Eposino 4000u SC at 1x/ 2x/ 3x a week
                                        </div>
                                        <div class="text-left">
                                            <input type="text" name="shift_eposino_6000u" style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            Shift to Eposino 6000u SC at 1x/ 2x/ a week
                                        </div>
                                        <div class="text-left">
                                            <input type="text" name="iv_sc_2weeks" style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            IV Iron sucrose 100 mg q 2 weeks (discontinue oral iron)
                                        </div>
                                        <div class="text-left">
                                            <input type="text" name="iv_sc_10doses" style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            IV Iron sucrose 100 mg q week for 10 doses then every 2 weeks (discontinue oral iron)
                                        </div>
                                        <div class="text-left">
                                            <input type="text" name="upd_medication" style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            update all medications as indicated in new prescription given to patient
                                        </div>
                                    <div class="text-left">
                                        <input type="text" name="sen_nurse_cann_avf" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                        Senior nurse to cannulate AVF at all times
                                    </div>
                                    <div class="text-left">
                                        <input type="text" name="mod_anticoag" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                        Modify anticoagulation as follows:
                                    </div>
                                        <div class="text-left">
                                            <input type="text" name="no_heparin" style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            No heparin for <input name="no_heparin_for" type="text" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            weeks prior
                                            <input type="text" name="weeks_prior" style="border:0px;border-bottom:1px solid #2c3e50;width:300px;font-size:10pt;"> 
                                        </div>
                                        <div class="text-left">
                                            <input type="text" name="no_heparin2" style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            No heparin for <input type="text" name="no_heparin_for2" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            weeks after
                                        <input type="text" name="weeks_after" style="border:0px;border-bottom:1px solid #2c3e50;width:300px;font-size:10pt;"> 
                                        </div>
                                        <div class="text-left">
                                            <input type="text" name="give_uhf"  style="margin-left:70px;border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            Give UHF <input type="text" name="give_uhf_units" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                            units bolus then <input type="text" name="give_uhf_units_bolus" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;">
                                        </div>
                                    <div class="text-left">
                                        <input type="text" name="please_do_monthly" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;"> 
                                        Please do monthly labs on or before <input name="on_or_before" type="text" style="border:0px;border-bottom:1px solid #2c3e50;width:375px;font-size:10pt;"> 
                                    </div>
                                    <div class="text-left">
                                        <input type="text" name="others_orders" style="border:0px;border-bottom:1px solid #2c3e50;width:60px;font-size:10pt;">
                                        others orders
                                    </div>
                                        <div class="text-center">
                                            <input type="text" name="more_details1" style="border:0px;border-bottom:1px solid #2c3e50;width:83%;font-size:10pt;">
                                        </div>
                                        <div class="text-center">
                                            <input type="text" name="more_details2" style="border:0px;border-bottom:1px solid #2c3e50;width:83%;font-size:10pt;">
                                        </div>
                                    <div class="text-left" style="margin-top:50px;font-weight:bold;">
                                        Noted by :  <input type="text" style="border:0px;border-bottom:1px solid #2c3e50;width:250px;font-size:12pt;pointer-events: none!important;">
                                    </div>
                                    <footer class="m-t-15 p-20" id="ftr_nephro_order">
                                        <div class="list-inline text-right list-unstyled" style="font-size:8pt;line-height: 100%;float: left;margin-left: 85px; margin-top: 10px;">
                                            <?php echo $stamp; ?>
                                        </div>
                                    </footer>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success bgm-green waves-effect save_nephro right_nephro_create" id="save_nephro">
                            <i class="fa fa-check-circle"></i> Save
                        </button>
                        <button type="button" class="btn btn-default bgm-green waves-effect" id="print_nephro">
                            <i class="fa fa-print"></i> Print
                        </button>
                        <button type="button" class="btn btn-danger bgm-red waves-effect close_nephro" data-dismiss="modal">
                            <i class="fa fa-arrow-left"></i> Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal nephro order end -->

        <!-- modal diagnostic list start -->
        <div class="modal fade" id="modal_lab_report_list" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">
                            <span class="fa fa-commenting-o"></span> Laboratory Request of : <areafullname class="areafullname"></areafullname>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div>
                          <table id="tbl_patient_lab_report" class="table table-striped">
                            <thead class="tbl-header">
                                <tr>
                                    <th style="color:white;">Code #</th>
                                    <th style="color:white;">Date Created</th>
                                    <th style="text-align:center;color:white;">Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="new_diagnostic" class="btn btn-dark bgm-green waves-effect right_diagnostic_create">
                            <i class="fa fa-plus-circle"></i> New Diagnostic Test
                        </button>
                        <button type="button" id="close_diagnostic" class="btn btn-danger bgm-red waves-effect" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal diagnostic list end -->

        <!--  laboratory request modal -->
        <div id="modal_laboratory_report" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title" style="color: white;">
                                <span id="diagnostic_icon"></span>
                                Laboratory Request <small class="patient_txn"></small>
                            </h4>  
                    </div>
                    <div class="modal-body" style="padding:5px;">
                        <div id="print_labreport_content">
                            <div class="container-fluid">
                                 <?php echo $header_1; ?>
                                 <form id="frm_lab_diagnostic">
                                    <div class="row" style="margin-top: 10px!important;">   
                                        <div class="text-left">
                                            <div class="col-xs-6" style="float:left;font-size:11pt;">Name : <u><areafullname class="areafullname"></areafullname></u>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="col-xs-6" style="float:right;font-size:11pt;">Age/Sex : <u><areaage class="areaage"></areaage></u> / <u><areasex class="areasex"></areasex></u>
                                            </div>
                                        </div>
                                        <div class="text-left">
                                            <div class="col-xs-6" style="float:left;font-size:11pt;">Address : <u><areaaddress class="areaaddress"></areaaddress></u>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="col-xs-6" style="float:right;font-size:11pt;">Date : <arealabreportdate class="arealabreportdate"><input type="text" class="date-picker" id="lab_report_date" name="lab_report_date" style="border:0px;border-bottom:1px solid #2c3e50;width:78px;" value="<?php echo date('m/d/Y'); ?>" data-error-msg="Date is required." required></arealabreportdate>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center">
                                                <h4 style="font-family:tahoma;font-size:12pt;font-weight:bold;">DIAGNOSTIC TESTS</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="font-size: 9pt!important;">
                                        <div class="col-xs-12">
                                            <div class="col-xs-4">
                                                <h6><b>HEMATOLOGY</b></h6>
                                               <input type="checkbox" name="" id="hm_cbc" style="width:50px;border:0px;border-bottom:1px solid black;">CBC with PC <br>
                                               <input type="checkbox" name="" id="hm_ph_bsmear" style="width:50px;border:0px;border-bottom:1px solid black;">Peripheral Blood Smear <br>
                                               <h6><b>CHEMISTRY</b></h6>
                                               <input type="checkbox" name="" id="chem_bun_prepost" style="width:50px;border:0px;border-bottom:1px solid black;">BUN (Pre and Post HD) <br>
                                               <input type="checkbox" name="" id="chem_bun" style="width:50px;border:0px;border-bottom:1px solid black;">BUN <br>
                                               <input type="checkbox" name="" id="chem_creatinine" style="width:50px;border:0px;border-bottom:1px solid black;">Creatinine <br>
                                               <input type="checkbox" name="" id="chem_na" style="width:50px;border:0px;border-bottom:1px solid black;">Na <br>
                                               <input type="checkbox" name="" id="chem_k" style="width:50px;border:0px;border-bottom:1px solid black;">K <br>
                                               <input type="checkbox" name="" id="chem_fbs" style="width:50px;border:0px;border-bottom:1px solid black;">FBS <br>
                                               <input type="checkbox" name="" id="chem_ion_calc" style="width:50px;border:0px;border-bottom:1px solid black;">Ionized Calcium <br>
                                               <input type="checkbox" name="" id="chem_phosporus" style="width:50px;border:0px;border-bottom:1px solid black;">Phosphorus <br>
                                               <input type="checkbox" name="" id="chem_albumin" style="width:50px;border:0px;border-bottom:1px solid black;">Albumin <br>
                                               <input type="checkbox" name="" id="chem_uricacid" style="width:50px;border:0px;border-bottom:1px solid black;">Uric Acid <br>
                                               <input type="checkbox" name="" id="chem_lipidprofile" style="width:50px;border:0px;border-bottom:1px solid black;">Lipid Profile <br>
                                               <input type="checkbox" name="" id="chem_sgpt" style="width:50px;border:0px;border-bottom:1px solid black;">SGPT <br>
                                               <input type="checkbox" name="" id="chem_specify" style="width:50px;border:0px;border-bottom:1px solid black;">Others, please specify <input type="text" name="chem_specify_txt" style="width:65px;border:0px;border-bottom:1px solid black;"><br>
                                            </div>
                                            <div class="col-xs-8">
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <h6><b>IMAGING STUDIES</b></h6>
                                                        <input type="checkbox" id="imag_12lecg" style="width:50px;border:0px;border-bottom:1px solid black;">12 L ECG <br />
                                                        <input type="checkbox" id="imag_kubxray" style="width:50px;border:0px;border-bottom:1px solid black;">KUB XRAY <br />
                                                        <input type="checkbox" id="imag_kubultrasound" style="width:50px;border:0px;border-bottom:1px solid black;">KUB Ultrasound <br />
                                                        <input type="checkbox" id="imag_abdomen" style="width:50px;border:0px;border-bottom:1px solid black;">Ultrasound of WAB <br />
                                                        <input type="checkbox" id="imag_ct_angiography" style="width:50px;border:0px;border-bottom:1px solid black;">CT angiography<br />
                                                        <input type="checkbox" id="imag_renal_duplex" style="width:50px;border:0px;border-bottom:1px solid black;">Renal Duplex Scan <br />
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <br><br>
                                                        <input type="checkbox" id="imag_cxrpa" style="width:50px;border:0px;border-bottom:1px solid black;">CXR PA <br/>
                                                        <input type="checkbox" id="imag_ctstronogram" style="width:50px;border:0px;border-bottom:1px solid black;">CT STONOGRAM<br/>
                                                        <input type="checkbox" id="imag_prosultra" style="width:50px;border:0px;border-bottom:1px solid black;">Prostate Ultrasound<br/>
                                                        <input type="checkbox" id="imag_decho_plain" style="width:50px;border:0px;border-bottom:1px solid black;">2 Dechocardiography (Plain)<br/>
                                                        <input type="checkbox" id="imag_decho_doppler" style="width:50px;border:0px;border-bottom:1px solid black;">2 Dechocardiography (with doppler)<br/>
                                                        <input type="checkbox" id="imag_others" style="width:50px;border:0px;border-bottom:1px solid black;">Others: <input type="text" style="width:160px;border:0px;border-bottom:1px solid black;" name="imag_others_txt"> <br/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <h6><b>RENAL FUNCTION TEST</b></h6>
                                                        <input type="checkbox" id="renal_gfr" style="width:50px;border:0px;border-bottom:1px solid black;"> Nuclear GFR Scan <br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <h6><b>URINE EXAMS</b></h6>
                                                            <input type="checkbox" id="urine_routine_analysis" style="width:50px;border:0px;border-bottom:1px solid black;">Routine Urinalysis <br />
                                                            <input type="checkbox" id="urine_random" style="width:50px;border:0px;border-bottom:1px solid black;">Urine RBC morphology  <br />
                                                            <input type="checkbox" id="urine_calcium" style="width:50px;border:0px;border-bottom:1px solid black;">Random Urine Protein  <br />
                                                            <input type="checkbox" id="urine_afb" style="width:50px;border:0px;border-bottom:1px solid black;">Urine AFB <br />
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <br><br>
                                                        <input type="checkbox" id="urine_rbc_morph" style="width:50px;border:0px;border-bottom:1px solid black;">24 hour urine total protein<br>
                                                       <input type="checkbox" id="urine_sodium" style="width:50px;border:0px;border-bottom:1px solid black;">24 hour creatinine clearance<br>
                                                       <input type="checkbox" id="urine_creatinine_ratio" style="width:50px;border:0px;border-bottom:1px solid black;">Urine Albumin Creatinine Ratio<br>
                                                       <input type="checkbox" id="urine_cytology" style="width:50px;border:0px;border-bottom:1px solid black;">Urine Cytology<br>
                                                    </div>
                                                </div>                                     
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-left">
                                            Please have this test done on <input type="text" name="sentence1" style="width:40%;border:0px;border-bottom:1px solid black;"> at <input type="text" style="width:28%;border:0px;border-bottom:1px solid black;" name="sentence2"><br> 
                                            Instructions : 
                                                <br />
                                                <input type="checkbox" id="non_fasting" style="width:50px;border:0px;border-bottom:1px solid black;margin-left:10px"> Nonfasting 
                                                <br />

                                                <input type="checkbox" id="fasting" style="width:50px;border:0px;border-bottom:1px solid black;margin-left:10px"> Fasting
                                                <input type="checkbox" id="fasting_6hrs" style="width:50px;border:0px;border-bottom:1px solid black;margin-left:10px"> 6 Hours
                                                <input type="checkbox" id="fasting_8hrs" style="width:50px;border:0px;border-bottom:1px solid black;margin-left:10px"> 8 Hours
                                                <input type="checkbox" id="fasting_10hrs" style="width:50px;border:0px;border-bottom:1px solid black;margin-left:10px"> 10 Hours 
                                                <br />

                                                <input type="checkbox" id="instruct_others" style="width:50px;border:0px;border-bottom:1px solid black;margin-left:10px"> Others: <input type="text" style="width:350px;border:0px;border-bottom:1px solid black;" name="instruct_others_txt">

                                                
                                         </div>
                                    </div>
                                </div>
                                <footer class="m-t-15 p-20" id="ftr_lab_report">
                                    <div class="list-inline text-right list-unstyled" style="font-size:8pt;line-height: 100%;float: right;margin-top: -55px;">
                                        <?php echo $stamp; ?>
                                    </div>
                                </footer>
                            </div>
                            </form>
                        </div>

                    </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success bgm-green waves-effect right_labreport_create" id="save_labreport_diagnostics">
                            <i class="fa fa-check-circle"></i> Save
                        </button>
                        <button type="button" class="btn btn-default bgm-green waves-effect" id="print_labreport_diagnostics">
                            <i class="fa fa-print"></i> Print
                        </button>
                        <button type="button" class="btn btn-danger bgm-red waves-effect close_labreport" data-dismiss="modal">
                            <i class="fa fa-arrow-left"></i> Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
         <!--  laboratroy report MODAL -->

        <!-- modal medical certificate list start -->
        <div class="modal fade" id="modal_med_cert_list" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">
                            <span class="fa fa-certificate"></span> Medical Report of : <areafullname class="areafullname"></areafullname>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div>
                          <table id="tbl_med_cert_report" class="table table-striped">
                            <thead class="tbl-header">
                                <tr>
                                    <th style="color:white;">Code #</th>
                                    <th style="color:white;">Date Created</th>
                                    <th style="text-align:center;color:white;">Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="new_medical_cert" class="btn btn-dark bgm-green waves-effect right_medical_cert">
                            <i class="fa fa-plus-circle"></i> New Medical Certificate
                        </button>
                        <button type="button" id="close_medical_cert" class="btn btn-danger bgm-red waves-effect" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal diagnostic list end -->

        <!--  MEDICAL CERTIFICATE MODAL -->
        <div id="modal_patient_medical_certificate" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title" style="color: white;">
                                <span id="medical_certificate_icon"></span>
                                Medical Certificate <small class="patient_txn"></small>
                            </h4>
                        
                    </div>
                    <div class="modal-body" style="padding:5px;">
                        <div id="print_medical_certificate_content">
                            <div class="container-fluid">
                                <?php echo $header_2; ?>
                                <form id="frm_medical_record">
                                <div class="row">   
                                    <div class="text-left">
                                        <div class="col-xs-6" style="float:left;font-size:11pt;">Name : <u><areafullname class="areafullname"></areafullname></u>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="col-xs-6" style="float:right;font-size:11pt;">Age/Sex : <u><areaage class="areaage"></areaage></u> / <u><areasex class="areasex"></areasex></u>
                                        </div>
                                    </div>
                                    <div class="text-left">
                                        <div class="col-xs-6" style="float:left;font-size:11pt;">Address : <u><areaaddress class="areaaddress"></areaaddress></u>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="col-xs-6" style="float:right;font-size:11pt;">Date : <areamedcertdate class="areamedcertdate"><input type="text" class="date-picker" id="medical_date" name="medical_date" style="border:0px;border-bottom:1px solid #2c3e50;width:78px;text-align: center;" required data-error-msg="Date is required"></areamedcertdate>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center"><br>
                                            <h4 style="font-family:tahoma;font-size:14pt;font-weight:bold;">MEDICAL CERTIFICATE</h4>
                                        </div>
                                        <div class="text-left"><br>
                                            <p style="font-family:tahoma;font-size:13pt;">This is to certify that i have seen and examined <u><areafullname class="areafullname"></areafullname></u>, <areaage class="areaage"></areaage>
                                                years old, residing at <u><areaaddress class="areaaddress"></areaaddress></u>. Patient is diagnosed with:
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-left">
                                            <textarea name="medical_diagnostics" id="medical_diagnostics" style="width:100%;border:0px;font-size:13pt;"rows="11"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-left"><br>
                                            <p style="font-family:tahoma;font-size:13pt;">This certification is issued upon the request of <u><areafullname class="areafullname"></u> for whatever purpose it may serve.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <footer class="m-t-15 p-20" id="ftr_med_cert">
                                    <div class="list-inline text-right list-unstyled" style="font-size:8pt;line-height: 100%;float: right;margin-top: 20px;">
                                        <?php echo $stamp; ?>
                                    </div>
                                </footer>
                            </div>
                            </form>
                        </div>
                    </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success bgm-green waves-effect right_medcert_create" id="save_medical_certificate">
                            <i class="fa fa-check-circle"></i> Save
                        </button>
                        <button type="button" class="btn btn-default bgm-green waves-effect" id="print_medical_certificate">
                            <i class="fa fa-print"></i> Print
                        </button>
                        <button type="button" class="btn btn-danger bgm-red waves-effect close_medical_certificate" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal cert -->

        <!-- modal patient clinical -->
        <div class="modal fade" id="modal_nephro_record" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2980b9;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title"> 
                            <span class="fa fa-heartbeat"></span> Nephro Record of : <areafullname class="areafullname"></areafullname>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div>
                        <table id="tbl_nephro_record" class="table table-striped">
                        <thead class="tbl-header">
                            <tr>
                                <th>Date</th>
                                <th>Attending Physician</th>
                                <th>Treatment No.</th>
                                <th style="text-align:center;">Action</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-dark right_patientinfo_create" id="btn_new">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> New Nephro Record</button>
                        <button type="button" class="btn btn-danger bgm-red waves-effect" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal patient clinical end -->

          <!-- modal patient info-->
        <div id="modal_new_nephro_record" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bgm-green">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title">
                                <span id="nephro_record_icon"></span>
                                Nephro Record
                                <small class="patient_txn"></small>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div role="tabpanel" class="container-fluid">
                                <form id="frm_nephro_record" role="form">
                                    <div  id="printcontentpatientdetails">
                                        <titlenephro style="color:#2c3e50;padding:0px;margin:0px;font-size:15pt;font-weight:bold;" class="text-left">Nephro Record</titlenephro><date style="float:right;">Date : <input class="date-picker" name="nephrorecorddate" id="nephrorecorddate" data-error-msg="Date is required." required></date>
                                        <hr style="border:1px solid #2c3e50"></hr>
                                        <div class="col-xs-12 ospace">
                                            <div class="col-xs-4">
                                                    <div class="form-group ospace">
                                                    <label for="exampleInputEmail1" class="ospace"><span class="required">*</span> Attending Physician</label>
                                                        <div class="fg-line fg-toggled">
                                                            <input type="text" data-toggle="" class="form-control" name="attending_physc" placeholder="" data-error-msg="Attending Physician is required!" required>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-xs-4">
                                                    <div class="form-group ospace">
                                                    <label for="exampleInputEmail1" class="ospace"><span class="required">*</span> Treatment No</label>
                                                        <div class="fg-line">
                                                            <input type="text" data-toggle="" class="form-control" name="treatment_no" placeholder="" data-error-msg="Treatment No!" required>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="form-group ospace">
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;" data-toggle="" data-original-title="Cash">
                                                        <input type="checkbox" id="cash">
                                                        <i class="input-helper"></i>
                                                        Cash
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;" data-toggle="" data-original-title="PCSO">
                                                        <input type="checkbox" id="pcso" value="" >
                                                        <i class="input-helper"></i>
                                                        PCSO
                                                    </label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" style="margin-top:5px;" data-toggle="" data-original-title="Philhealth">
                                                        <input type="checkbox" id="philhealth" value="">
                                                        <i class="input-helper"></i>
                                                        Philhealth
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 ospace">
                                            <div class="col-xs-4">
                                                <div class="form-group ospace" data-toggle="" data-original-title="Patient Name">
                                                <label for="exampleInputEmail1" class="ospace"> Patient Name :</label>
                                                <select class="form-control patientsget" name="ref_patient_id" id="ref_patient_id" data-placeholder="" data-error-msg="Patient Name is required" required>
                                                     
                                                    
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1" class="ospace"> Sex</label>
                                                    <div class="fg-line">
                                                        <div class="select">
                                                            <select class="form-control" name="sex" data-toggle="" data-original-title="Sex">
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-xs-4">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Na</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="na" class="form-control" placeholder="Na" data-toggle="" data-original-title="NA">
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="col-xs-4">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1" class="ospace"> Height(foot)</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="height" data-toggle="" data-original-title="Height(foot)" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 ospace">
                                           
                                            <div class="col-xs-3">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1" class="ospace"> Dry Weight(kg)</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="" data-original-title="Dry Weight(kg)" name="dry_weight" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1" class="ospace">Temp(C)</lab el>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="" data-original-title="Temp(C)" name="temp" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1" class="ospace"> Pre-HD Weight</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="" data-original-title="Pre-HD Weight" name="pre_hd_weight" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1" class="ospace"> Previous Post Hd Weight</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="" data-original-title="Previous Post HD Weight" name="pre_post_hd_weight" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 ospace">
                                           
                                            <div class="col-xs-3">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1" class="ospace"> Weight Gain</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="" data-original-title="Weight Gain" name="weight_gain" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1" class="ospace"> Post HD Weight(kg)</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="" data-original-title="Post HD Weight(kg)" name="post_hd_weight" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1" class="ospace"> UF Goal</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="" data-original-title="UF Goal" name="uf_goal" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1" class="ospace"> Duration</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="" data-original-title="Duration" name="duration" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 ospace">
                                           
                                            <div class="col-xs-3">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1" class="ospace"> Dialyzer</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="" data-original-title="Dialyzer" name="dialyzer" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1" class="ospace"> Hepatitis Status</label><br>
                                                    <label class="checkbox checkbox-inline m-r-20 " data-toggle="" data-original-title="Clean" style="margin-top:5px;">
                                                        <input type="checkbox" id="clean" value="clean" class="hepatitis">
                                                        <i class="input-helper"></i>
                                                        Clean
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20 " data-toggle="" data-original-title="Hepatitis B" style="margin-top:5px;">
                                                        <input type="checkbox" id="hepatitis_b" value="hepatitis_b" class="hepatitis">
                                                        <i class="input-helper"></i>
                                                        Hepatitis B
                                                    </label><br>
                                                    <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Hepatitis C" style="margin-top:5px;">
                                                        <input type="checkbox" id="hepatitis_c" value="hepatitis_c" class="hepatitis">
                                                        <i class="input-helper"></i>
                                                        Hepatitis C
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1" class="ospace"> ANTICOAGULANT</label><br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="" data-original-title="Routine Heparin(2-1-1)" style="margin-top:5px;">
                                                        <input type="checkbox" id="routine_heparin" value="option1">
                                                        <i class="input-helper"></i>
                                                        Routine Heparin(2-1-1-1)
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Low Dose Heparin(1-5-5)">
                                                        <input type="checkbox" id="lowdoseheparin"value="option1">
                                                        <i class="input-helper"></i>
                                                        Low Dose Heparin(1-0.5-0.5-0.5)
                                                    </label><br>
                                                    <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="" style="margin-top:5px;">
                                                        <input type="checkbox" id="lowmolecular" value="1">
                                                        <i class="input-helper"></i>
                                                        Low molecular weight heparin(LMWH)
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 ospace">
                                            <label for="exampleInputEmail1" class="container"> Dialysate Composition</label><br>
                                           <div class="col-xs-2">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1"> Na(meq)</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="" data-original-title="" name="na" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-2">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1"> K(meq)</label>
                                                    <div class="fg-line">
                                                        <input type="text" name="kcl" data-toggle="" data-original-title="" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-2">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1"> Glucose(mmol)</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="" data-original-title="" name="glucose" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-2">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1"> Bicarbonate(mmol)</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="" data-original-title="" name="bicarbonate" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-2">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1"> Temperature</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="" data-original-title="" name="temp" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-2">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1"> QB</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="" data-original-title="QB" name="qb" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 ospace">
                                            
                                            <div class="col-xs-2">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1"> QD</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="" data-original-title="QD" name="qd" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-2">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1"> No. of use</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="" data-original-title="Number of Use" name="no_of_use" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1" class="ospace"> Type of Dialysis</label>
                                                <br>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="" data-original-title="lowflux" style="margin-top:5px;">
                                                        <input type="checkbox" id="dialyzer_lowflux" class="dialyzertype">
                                                        <i class="input-helper"></i>
                                                        Low Flux
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20" data-toggle="" data-original-title="High Efficiency" style="margin-top:5px;">
                                                        <input type="checkbox" id="dialyzer_highefficiency" class="dialyzertype">
                                                        <i class="input-helper"></i>
                                                        High Efficiency
                                                    </label><br>
                                                    <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="High Flux" style="margin-top:5px;">
                                                        <input type="checkbox" id="dialyzer_highflux" class="dialyzertype">
                                                        <i class="input-helper"></i>
                                                        High Flux
                                                    </label>
                                                    <!-- <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Renalin Strip Test" style="margin-top:5px;">
                                                        <input type="checkbox" id="dialyzer_renalinstrip" class="dialyzertype">
                                                        <i class="input-helper"></i>
                                                        Renalin Strip Test
                                                    </label> -->
                                                </div>
                                            </div>
                                            <div class="col-xs-2">
                                                <div class="form-group">
                                                <label for="exampleInputEmail1"> Others</label>
                                                    <div class="fg-line">
                                                        <input type="text" data-toggle="" data-original-title="Other Dialyzer" id="other_dialyzer" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-2">
                                                <div class="form-group ospace">
                                                <label for="exampleInputEmail1" class="ospace"> Renalin Strip</label>
                                                <br>
                                                    <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="">
                                                        <input type="checkbox" id="renalinplus" class="">
                                                        <i class="input-helper"></i>
                                                        ( + )
                                                    </label>
                                                    <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="">
                                                        <input type="checkbox" id="renalinminus" class="">
                                                        <i class="input-helper"></i>
                                                        ( - )
                                                    </label>
                                                    <!-- <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Renalin Strip Test" style="margin-top:5px;">
                                                        <input type="checkbox" id="dialyzer_renalinstrip" class="dialyzertype">
                                                        <i class="input-helper"></i>
                                                        Renalin Strip Test
                                                    </label> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6" style="background-color:#4FC3F7 !important;">
                                            <!-- ROW 1 -->
                                            <div class="row">
                                                <center><h4 style="color:#2c3e50;font-weight:bold;" class="ospace">PRE-HD</h4></center>
                                                <hr style="border:1px solid black" class="ospace"></hr>
                                                <center>
                                                    <div class="form-group ospace">
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Ambulatory">
                                                            <input type="checkbox" id="prehd_ambulatory">
                                                            <i class="input-helper"></i>
                                                            Ambulatory
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Wheelchair">
                                                            <input type="checkbox" id="prehd_wheelchair">
                                                            <i class="input-helper"></i>
                                                            WheelChair
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Bed Stretcher">
                                                            <input type="checkbox" id="prehd_bedstretcher">
                                                            <i class="input-helper"></i>
                                                            Bed Stretcher
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Ambulatory W/ Assistance">
                                                            <input type="checkbox" id="prehd_ambulatory_assistance">
                                                            <i class="input-helper"></i>
                                                            Ambulatory w/ Assistance
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace" style="font-weight: bold;"> Date and Time Arrived</label>
                                                            <div class="fg-line">
                                                                <input type="text" data-toggle="" data-original-title="Date and Time Arrrived" name="prehd_date_time_arrived" class="form-control date-time-picker" placeholder="" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </center>
                                            </div>
                                            
                                            <!--ROW-->
                                            <div class="row">
                                                <div class="col-md-12 ospace">
                                                    <hr style="border:1px solid black" class="ospace"></hr>
                                                    <div class="col-xs-3">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" style="font-weight: bold;" class="ospace"> BP</label>
                                                            <div class="fg-line">
                                                                <input type="text" data-toggle="" data-original-title="BP" name="prehd_bp" class="form-control" placeholder="" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1"  style="font-weight: bold;" class="ospace"> HR</label>
                                                            <div class="fg-line">
                                                                <input type="text" data-toggle="" data-original-title="HR" name="prehd_hr" class="form-control" placeholder="" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" style="font-weight: bold;" class="ospace"> RR</label>
                                                            <div class="fg-line">
                                                                <input type="text" data-toggle="" data-original-title="RR" name="prehd_rr" class="form-control" placeholder="" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" style="font-weight: bold;" class="ospace"> TEMP</label>
                                                            <div class="fg-line">
                                                                <input type="text" data-toggle="" data-original-title="TEMP" name="prehd_temp" class="form-control" placeholder="" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid black" class="ospace"></hr>
                                                <div class="col-xs-12 ospace">
                                                    <div class="col-xs-4">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1" class="ospace"> Pulse</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Regular" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_pulse_regular">
                                                                <i class="input-helper"></i>
                                                                Regular
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Irregular" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_pulse_irregular">
                                                                <i class="input-helper"></i>
                                                                Irregular
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-8">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1" class="ospace"> Lungs</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Clear" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_lungs_clear">
                                                                <i class="input-helper"></i>
                                                                Clear
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Crackles" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_lungs_crackles">
                                                                <i class="input-helper"></i>
                                                                Crackles
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="DOB" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_lungs_dob">
                                                                <i class="input-helper"></i>
                                                                DOB
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Wheezing" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_lungs_wheezzing">
                                                                <i class="input-helper"></i>
                                                                Wheezing
                                                            </label>
                                                             <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Hemoptysis" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_lungs_hemoptysis">
                                                                <i class="input-helper"></i>
                                                                Hemoptysis
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid black" class="ospace"></hr>
                                                <div class="col-xs-12">
                                                    <div class="form-group ospace" >
                                                    <label for="exampleInputEmail1" class="ospace"> Neuro</label>
                                                    <br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Comatose" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_neuro_comatose">
                                                            <i class="input-helper"></i>
                                                            Comatose
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Lethargic" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_neuro_lethargic">
                                                            <i class="input-helper"></i>
                                                            Lethargic
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Conscious" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_neuro_conscious">
                                                            <i class="input-helper"></i>
                                                            Conscious
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="GCS" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_neuro_gcs">
                                                            <i class="input-helper"></i>
                                                            GCS
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid black" class="ospace"></hr>
                                                <div class="col-xs-12 ospace">
                                                    <div class="col-xs-6">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1" class="ospace"> EDEMA</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="None" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_edema_none" value="option1">
                                                                <i class="input-helper"></i>
                                                                None
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Facial" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_edema_facial" value="option1">
                                                                <i class="input-helper"></i>
                                                                Facial
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Pedal" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_edema_pedal" value="option1">
                                                                <i class="input-helper"></i>
                                                                Pedal
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Periorbital" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_edema_periorbital" value="option1">
                                                                <i class="input-helper"></i>
                                                                Periorbital
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Ascitis" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_edema_ascitis" value="option1">
                                                                <i class="input-helper"></i>
                                                                Ascitis
                                                            </label><br>
                                                            <label class="ospace">
                                                                <div class="fg-line">
                                                                    <span>Others</span>
                                                                <input type="text" style="height:25px;" data-toggle="" data-original-title="EDEMA( OTHERS )" class="form-control" name="prehd_edema_other">
                                                                </div>
                                                                
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="form-group ospace" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1" class="ospace"> GASTRO</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Good Appetite" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_gastro_good_appetite">
                                                                <i class="input-helper"></i>
                                                                Good Appetite
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="No Appetite" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_gastro_no_appetite">
                                                                <i class="input-helper"></i>
                                                                No Appetite
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Fair Appetite" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_gastro_fair_appetite">
                                                                <i class="input-helper"></i>
                                                                Fair Appetite
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Melena" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_gastro_melena">
                                                                <i class="input-helper"></i>
                                                                Melena
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Hematochezia" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_gastro_hematochezia">
                                                                <i class="input-helper"></i>
                                                                Hematochezia
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Hematemesis" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_gastro_hematemesis">
                                                                <i class="input-helper"></i>
                                                                Hematemesis
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 ospace">
                                                <hr style="border:1px solid black" class="ospace"></hr>
                                                    <div class="col-xs-6">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1" class="ospace"> Skin Color (Single)</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Normal" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_skincolor_normal">
                                                                <i class="input-helper"></i>
                                                                Normal
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Pale" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_skincolor_pale">
                                                                <i class="input-helper"></i>
                                                                Pale
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Cyanotic" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_skincolor_cyanotic">
                                                                <i class="input-helper"></i>
                                                                Cyanotic
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1" class="ospace"> Turgor</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Good" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_turgor_good">
                                                                <i class="input-helper"></i>
                                                                Good
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Poor" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_turgor_poor">
                                                                <i class="input-helper"></i>
                                                                Poor
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid black" class="ospace"></hr>
                                                <div class="col-xs-12">
                                                    <div class="form-group ospace">
                                                    <label for="exampleInputEmail1" class="ospace"> Others</label>
                                                    <br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Ecchymosis" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_others_ecchymosis">
                                                            <i class="input-helper"></i>
                                                            Ecchymosis
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Bruises" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_others_bruises">
                                                            <i class="input-helper"></i>
                                                            Bruises
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid black" class="ospace"></hr>
                                                <div class="col-xs-12">
                                                    <div class="form-group ospace">
                                                    <label for="exampleInputEmail1" class="ospace"> Neck Veins</label>
                                                    <br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Flat" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_neckveins_flat">
                                                            <i class="input-helper"></i>
                                                            Flat
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Slightly Distented" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_neckveins_slightlydistented">
                                                            <i class="input-helper"></i>
                                                            Slightly Distented
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Distented" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_neckveins_distented">
                                                            <i class="input-helper"></i>
                                                            Distented
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid black" class="ospace">
                                                <div class="col-xs-12">
                                                    <div class="form-group ospace">
                                                    <label for="exampleInputEmail1" class="ospace"> Genito-Urinary</label>
                                                    <br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Hematuria" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_genitourinary_hematuria">
                                                            <i class="input-helper"></i>
                                                            Hematuria
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Dysuria"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_genitourinary_dysuria">
                                                            <i class="input-helper"></i>
                                                            Dysuria
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Menstruation"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_genitourinary_menstruation">
                                                            <i class="input-helper"></i>
                                                            Menstruation
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid black" class="ospace">
                                                <div class="col-xs-12">
                                                    <div class="form-group ospace">
                                                    <label for="exampleInputEmail1" class="ospace"> Problems/Complaints</label>
                                                    <br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="None"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_problems_none">
                                                            <i class="input-helper"></i>
                                                            None
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Chest Pain"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_problems_chest_pain">
                                                            <i class="input-helper"></i>
                                                            Chest Pain
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Cough"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_problems_cough">
                                                            <i class="input-helper"></i>
                                                            Cough
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Abdominal Pain"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_problems_abdominal_pain">
                                                            <i class="input-helper"></i>
                                                            Abdominal Pain
                                                        </label><br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="LBM"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_problems_lbm">
                                                            <i class="input-helper"></i>
                                                            LBM
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Orthopnea"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_problems_orthopnea">
                                                            <i class="input-helper"></i>
                                                            Orthopnea
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Fever"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_problems_fever">
                                                            <i class="input-helper"></i>
                                                            Fever
                                                        </label>
                                                        <div class="fg-line">
                                                            <span>Others(specify)</span>
                                                        <input type="text" class="form-control" style="height:25px;" data-toggle="" data-original-title="Specify Other Problems"  name="posthd_problems_others" placeholder="" style="text-align:center;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid black" class="ospace">
                                                <div class="col-xs-12">
                                                    <div class="form-group ospace">
                                                    <label for="exampleInputEmail1" class="ospace"> Vascular Access</label>
                                                    <br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop"  data-toggle="" data-original-title="PC"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_vascularaccess_pc">
                                                            <i class="input-helper"></i>
                                                            PC
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop"  data-toggle="" data-original-title="TLC"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_vascularaccess_tlc">
                                                            <i class="input-helper"></i>
                                                            TLC
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop"  data-toggle="" data-original-title="AVF"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_vascularaccess_avf">
                                                            <i class="input-helper"></i>
                                                            AVF
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop"  data-toggle="" data-original-title="AVG (L/R)"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_vascularaccess_avg">
                                                            <i class="input-helper"></i>
                                                            AVG (L/R)
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> Bruit</label><br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Bruit"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_with_bruit">
                                                            <i class="input-helper"></i>
                                                            With
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Bruit"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_without_bruit">
                                                            <i class="input-helper"></i>
                                                            Without
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form-group ospace">
                                                    <label for="exampleInputEmail1" class="ospace"> Thrill</label>
                                                    <br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop"  data-toggle="" data-original-title="Strong"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_thrill_strong">
                                                            <i class="input-helper"></i>
                                                            Strong
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Weak"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_thrill_weak">
                                                            <i class="input-helper"></i>
                                                            Weak
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Patent"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_thrill_patent">
                                                            <i class="input-helper"></i>
                                                            Patent
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Clotted"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_thrill_clotted">
                                                            <i class="input-helper"></i>
                                                            Clotted
                                                        </label><br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Redness"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_thrill_redness">
                                                            <i class="input-helper"></i>
                                                            Redness
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Swelling"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_thrill_swelling">
                                                            <i class="input-helper"></i>
                                                            Swelling
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Hematoma"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_thrill_hematoma">
                                                            <i class="input-helper"></i>
                                                            Hematoma
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Pus Secretion"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_thrill_pus_secretion">
                                                            <i class="input-helper"></i>
                                                            Pus Secretion
                                                        </label><br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="No Signs and Symptoms"  style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_thrill_no_signs">
                                                            <i class="input-helper"></i>
                                                            No Sign and Symptoms
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50" class="ospace"></hr>
                                                <label for="exampleInputEmail1" class="ospace"> Catherer Assestment</label>
                                                <div class="col-xs-12">
                                                    <div class="form-group ospace">
                                                    <label for="exampleInputEmail1" class="ospace"> Arterial</label><br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="With Difficulty(Aspirate/Push)" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_arterial_w_difficulty">
                                                            <i class="input-helper"></i>
                                                            With Difficulty(aspirate/push)
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Without Difficulty" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_arterial_wo_difficulty">
                                                            <i class="input-helper"></i>
                                                            Without Difficulty
                                                        </label><br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Unable to Aspirate" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_arterial_un_aspirate">
                                                            <i class="input-helper"></i>
                                                            Unable to Aspirate
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                    <label for="exampleInputEmail1" class="ospace"> Venous</label><br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="With Difficulty(Aspirate/Push)" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_venous_w_difficulty">
                                                            <i class="input-helper"></i>
                                                            With Difficulty(aspirate/push)
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Without Difficulty" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_venous_wo_difficulty">
                                                            <i class="input-helper"></i>
                                                            Without Difficulty
                                                        </label><br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Unable to Aspirate" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_venous_un_aspirate">
                                                            <i class="input-helper"></i>
                                                            Unable to Aspirate
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="INTERCHANGED" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_venous_interchanged">
                                                            <i class="input-helper"></i>
                                                            INTERCHANGED
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50" class="ospace"></hr>
                                                <div class="col-md-12">
                                                    <div class="form-group ospace">
                                                    <label for="exampleInputEmail1" class="ospace"><!--  Catherer Dressing --> Exit Site</label>
                                                    <br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="INTACT" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_cath_dressing_intact">
                                                            <i class="input-helper"></i>
                                                            INTACT
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="NOT INTACT" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_cath_dressing_not_intact">
                                                            <i class="input-helper"></i>
                                                            Not Intact
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="SOAKED" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_cath_dressing_soaked">
                                                            <i class="input-helper"></i>
                                                            Soaked
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50" class="ospace"></hr>
                                                <div class="col-md-12">
                                                    <div class="form-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                    <label for="exampleInputEmail1" class="ospace"> AV Fistula Needle Cannulation</label><br>
                                                    <label for="exampleInputEmail1" class="ospace"> IF YES</label><br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Artery" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_av_fistula_artery">
                                                            <i class="input-helper"></i>
                                                            Artery
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Venous" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_av_fistula_venous">
                                                            <i class="input-helper"></i>
                                                            Venous
                                                        </label><br>
                                                            <!-- <div class="fg-line">
                                                                <input type="text" style="height:25px;" data-toggle="" data-original-title="IF NO( Specify )" name="prehd_av_fistula_cannulation_no" class="form-control" placeholder="IF NO SPECIFY" style="text-align:center;">
                                                            </div> -->
                                                            <label for="exampleInputEmail1" class="ospace">Cannulated By</label>
                                                            <div class="fg-line">
                                                                <input type="text" style="height:25px;" name="prehd_cannulated_by" class="form-control" placeholder="" style="text-align:center;">
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group ospace">
                                                    <label for="exampleInputEmail1" class="ospace"> Anesthesia</label>
                                                    <br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="None" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_anesthesia_none">
                                                            <i class="input-helper"></i>
                                                            None
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Lidocalne" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_anesthesia_lidocalne">
                                                            <i class="input-helper"></i>
                                                            Lidocalne
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Topical" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_anesthesia_topical">
                                                            <i class="input-helper"></i>
                                                            Topical
                                                        </label><br>
                                                        <center><label for="exampleInputEmail1" class="ospace"> NEW Fistula Assestment</label></center>
                                                        <label for="exampleInputEmail1" class="ospace"> Date Assessed</label>
                                                        <div class="fg-line">
                                                                <input type="text" style="height:25px;" data-toggle="" data-original-title="Assest Date" name="prehd_new_fistula_assest_date" class="form-control date-picker" placeholder="" style="text-align:center;">
                                                        </div>
                                                        <div class="col-xs-6 ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> Thrill</label><br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Strong" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_fistula_thrill_strong">
                                                            <i class="input-helper"></i>
                                                            Strong
                                                        </label><br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Weak" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_fistula_thrill_weak">
                                                            <i class="input-helper"></i>
                                                            Weak
                                                        </label>
                                                        </div>
                                                        <div class="col-xs-6 ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> Bruit</label><br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Strong" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_fistula_bruit_strong">
                                                            <i class="input-helper"></i>
                                                            Strong
                                                        </label><br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Weak" style="margin-top:5px;">
                                                            <input type="checkbox" id="prehd_fistula_bruit_weak">
                                                            <i class="input-helper"></i>
                                                            Weak
                                                        </label>
                                                        </div>
                                                        <div class="col-xs-6 ospace">
                                                            <label for="exampleInputEmail1" class="ospace"> Sings of Infection</label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Signs of Infection(YES)" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_fistula_signs_yes">
                                                                <i class="input-helper"></i>
                                                                Yes
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Sings of Infection(NO)" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_fistula_signs_no">
                                                                <i class="input-helper"></i>
                                                                No
                                                            </label>
                                                        </div>
                                                        <div class="col-xs-6 ospace">
                                                            <label for="exampleInputEmail1" class="ospace"> Dressing Done Aseptically</label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Dressing is Done Aseptically" style="margin-top:5px;">
                                                                <input type="checkbox" id="prehd_fistula_dressing_aseptically">
                                                                <i class="input-helper"></i>
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50" class="ospace"></hr>
                                                <div class="col-xs-12">
                                                    <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> PRIMED BY</label>
                                                            <div class="fg-line">
                                                                <input type="text" style="height:25px;" data-toggle="" data-original-title="PRIMED BY" name="primed_by" class="form-control" placeholder="">
                                                            </div>
                                                    </div>
                                                    <div class="form-group ospace" >
                                                        <label for="exampleInputEmail1" class="ospace"> HOOKED BY</label>
                                                            <div class="fg-line">
                                                                <input type="text" style="height:25px;" data-toggle="" data-original-title="HOOKED BY" name="hooked_by" class="form-control" placeholder="">
                                                            </div>
                                                    </div><br>
                                                </div>
                                            </div><!--END TAG after 2 rows-->
                                        </div><!--END TAG for col-xs-6-->
                                        <div class="col-xs-6" style="background-color:#B2DFDB !important;"><!--OTHER HALF col-xs-6-->
                                            <div class="row">
                                                <center><h4 style="color:#2c3e50;font-weight:bold;" class="ospace">POST-HD</h4></center>
                                                <hr style="border:1px solid #2c3e50" class="ospace">
                                                <center>
                                                    <div class="form-group ospace">
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Ambulatory">
                                                            <input type="checkbox" id="posthd_ambulatory">
                                                            <i class="input-helper"></i>
                                                            Ambulatory
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Wheelchair">
                                                            <input type="checkbox" id="posthd_wheelchair">
                                                            <i class="input-helper"></i>
                                                            WheelChair
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Bed Stretcher">
                                                            <input type="checkbox" id="posthd_bedstretcher">
                                                            <i class="input-helper"></i>
                                                            Bed Stretcher
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Ambulatory W/ Assistance">
                                                            <input type="checkbox" id="posthd_ambulatory_assistance">
                                                            <i class="input-helper"></i>
                                                            Ambulatory w/ Assistance
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace" style="font-weight: bold;"> Date and Time Discharged</label>
                                                            <div class="fg-line">
                                                                <input type="text" data-toggle="" data-original-title="Date and Time Discharged" name="posthd_date_time_discharged" class="form-control date-time-picker" placeholder="" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </center>
                                            </div>
                                            
                                            <!--ROW-->
                                            <div class="row">
                                                <div class="col-md-12 ospace">
                                                    <hr style="border:1px solid #2c3e50" class="ospace">
                                                    <div class="col-xs-3">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace" style="font-weight: bold;"> BP</label>
                                                            <div class="fg-line">
                                                                <input type="text"  data-toggle="" data-original-title="BP" name="posthd_bp" class="form-control" placeholder="" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace" data-toggle="" data-original-title="HR" style="font-weight: bold;"> HR</label>
                                                            <div class="fg-line">
                                                                <input type="text" name="posthd_hr" class="form-control" placeholder="" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace" data-toggle="" data-original-title="RR" style="font-weight: bold;"> RR</label>
                                                            <div class="fg-line">
                                                                <input type="text" name="posthd_rr" class="form-control" placeholder="" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace" data-toggle="" data-original-title="TEMP" style="font-weight: bold;"> TEMP</label>
                                                            <div class="fg-line">
                                                                <input type="text" name="posthd_temp" class="form-control" placeholder="" style="text-align:center;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50" class="ospace">
                                                <div class="col-xs-12 ospace">
                                                    <div class="col-xs-4">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> Pulse</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Regular" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_pulse_regular">
                                                                <i class="input-helper"></i>
                                                                Regular
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Irregular" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_pulse_irregular">
                                                                <i class="input-helper"></i>
                                                                Irregular
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-8">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> Lungs</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Clear" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_lungs_clear">
                                                                <i class="input-helper"></i>
                                                                Clear
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Crackles" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_lungs_crackles">
                                                                <i class="input-helper"></i>
                                                                Crackles
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="DOB" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_lungs_dob">
                                                                <i class="input-helper"></i>
                                                                DOB
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Wheezing" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_lungs_wheezzing">
                                                                <i class="input-helper"></i>
                                                                Wheezing
                                                            </label>
                                                             <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Hemoptysis" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_lungs_hemoptysis">
                                                                <i class="input-helper"></i>
                                                                Hemoptysis
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50" class="ospace">
                                                <div class="col-xs-12">
                                                    <div class="form-group ospace">
                                                    <label for="exampleInputEmail1" class="ospace"> Neuro</label>
                                                    <br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop"  data-toggle="" data-original-title="Comatose" style="margin-top:5px;">
                                                            <input type="checkbox" id="posthd_neuro_comatose">
                                                            <i class="input-helper"></i>
                                                            Comatose
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Lethargic" style="margin-top:5px;">
                                                            <input type="checkbox" id="posthd_neuro_lethargic">
                                                            <i class="input-helper"></i>
                                                            Lethargic
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop"  data-toggle="" data-original-title="Conscious" style="margin-top:5px;">
                                                            <input type="checkbox" id="posthd_neuro_conscious">
                                                            <i class="input-helper"></i>
                                                            Conscious
                                                        </label>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="GCS" style="margin-top:5px;">
                                                            <input type="checkbox" id="posthd_neuro_gcs">
                                                            <i class="input-helper"></i>
                                                            GCS
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50" class="ospace">
                                                <div class="col-xs-12 ospace">
                                                    <div class="col-xs-6">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> EDEMA</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="None" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_edema_none" value="option1">
                                                                <i class="input-helper"></i>
                                                                None
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Facial" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_edema_facial" value="option1">
                                                                <i class="input-helper"></i>
                                                                Facial
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Pedal" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_edema_pedal" value="option1">
                                                                <i class="input-helper"></i>
                                                                Pedal
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Periorbital" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_edema_periorbital" value="option1">
                                                                <i class="input-helper"></i>
                                                                Periorbital
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Ascitis" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_edema_ascitis" value="option1">
                                                                <i class="input-helper"></i>
                                                                Ascitis
                                                            </label><br>
                                                            <label class="ospace">
                                                                <div class="fg-line">
                                                                    <span>Others</span>
                                                                <input type="text" class="form-control" style="height:25px;" data-toggle="" data-original-title="Edema Others" name="posthd_edema_other" value="option1">
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="form-group ospace" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;">
                                                        <label for="exampleInputEmail1" class="ospace"> GASTRO</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Good Appetite" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_gastro_good_appetite">
                                                                <i class="input-helper"></i>
                                                                Good Appetite
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="No Appetite" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_gastro_no_appetite">
                                                                <i class="input-helper"></i>
                                                                No Appetite
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Fair Appetite" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_gastro_fair_appetite">
                                                                <i class="input-helper"></i>
                                                                Fair Appetite
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Melena" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_gastro_melena">
                                                                <i class="input-helper"></i>
                                                                Melena
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Hematochezia" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_gastro_hematochezia">
                                                                <i class="input-helper"></i>
                                                                Hematochezia
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Hematemesis" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_gastro_hematemesis">
                                                                <i class="input-helper"></i>
                                                                Hematemesis
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50" class="ospace">
                                                <div class="col-xs-12 ospace">
                                                    <div class="col-xs-6">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> Skin Color</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Normal" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_skincolor_normal">
                                                                <i class="input-helper"></i>
                                                                Normal
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Pale" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_skincolor_pale">
                                                                <i class="input-helper"></i>
                                                                Pale
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Cyanotic" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_skincolor_cyanotic">
                                                                <i class="input-helper"></i>
                                                                Cyanotic
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> Turgor</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Good">
                                                                <input type="checkbox" id="posthd_turgor_good">
                                                                <i class="input-helper"></i>
                                                                Good
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Poor">
                                                                <input type="checkbox" id="posthd_turgor_poor">
                                                                <i class="input-helper"></i>
                                                                Poor
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50" class="ospace">
                                                <div class="col-xs-12 ospace">
                                                    <div class="col-xs-12">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> Others </label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Ecchymosis" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_others_ecchymosis">
                                                                <i class="input-helper"></i>
                                                                Ecchymosis
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Bruises" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_others_bruises">
                                                                <i class="input-helper"></i>
                                                                Bruises
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50" class="ospace">
                                                <div class="col-xs-12 ospace">
                                                    <div class="col-xs-12">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> Neck Veins</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Flat" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_neckveins_flat">
                                                                <i class="input-helper"></i>
                                                                Flat
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Slightly Distented" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_neckveins_slightlydistented">
                                                                <i class="input-helper"></i>
                                                                Slightly Distented
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Distented" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_neckveins_distented">
                                                                <i class="input-helper"></i>
                                                                Distented
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50" class="ospace">
                                                <div class="col-xs-12 ospace">
                                                    <div class="col-xs-12">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> Genito-Urinary</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Hematuria" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_genitourinary_hematuria">
                                                                <i class="input-helper"></i>
                                                                Hematuria
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop"  data-toggle="" data-original-title="Dysuria" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_genitourinary_dysuria">
                                                                <i class="input-helper"></i>
                                                                Dysuria
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Menstruation" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_genitourinary_menstruation">
                                                                <i class="input-helper"></i>
                                                                Menstruation
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50" class="ospace">
                                                <div class="col-xs-12 ospace">
                                                    <div class="col-xs-12">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> Problems/Complaints</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="None" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_problems_none">
                                                                <i class="input-helper"></i>
                                                                None
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Chest Pain" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_problems_chest_pain">
                                                                <i class="input-helper"></i>
                                                                Chest Pain
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Cough" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_problems_cough">
                                                                <i class="input-helper"></i>
                                                                Cough
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Abdominal Pain" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_problems_abdominal_pain">
                                                                <i class="input-helper"></i>
                                                                Abdominal Pain
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="LBM" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_problems_lbm">
                                                                <i class="input-helper"></i>
                                                                LBM
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Orthopnea" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_problems_orthopnea">
                                                                <i class="input-helper"></i>
                                                                Orthopnea
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Fever" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_problems_fever">
                                                                <i class="input-helper"></i>
                                                                Fever
                                                            </label>
                                                            <div class="fg-line">
                                                                <label class="ospace">Others(specify)</label>
                                                            <input type="text" class="form-control"  data-toggle="" data-original-title="Specify Other Problems" name="posthd_problems_others" placeholder="" style="text-align:center;height:25px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50" class="ospace">
                                                <div class="col-xs-12 ospace">
                                                    <div class="col-xs-12">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> Vascular Access</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="PC" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_vascularaccess_pc">
                                                                <i class="input-helper"></i>
                                                                PC
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="TLC" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_vascularaccess_tlc">
                                                                <i class="input-helper"></i>
                                                                TLC
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="AVF" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_vascularaccess_avf">
                                                                <i class="input-helper"></i>
                                                                AVF
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="AVG(L/R)" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_vascularaccess_avg">
                                                                <i class="input-helper"></i>
                                                                AVG (L/R)
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 ospace">
                                                    <div class="col-xs-12">
                                                        <div class="form-group ospace">
                                                            <label for="exampleInputEmail1" class="ospace"> Bruit</label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Bruit"  style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_with_bruit">
                                                                <i class="input-helper"></i>
                                                                With
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Bruit"  style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_without_bruit">
                                                                <i class="input-helper"></i>
                                                                Without
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 ospace">
                                                    <div class="col-xs-12">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> Thrill</label>
                                                        <br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Strong" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_thrill_strong">
                                                                <i class="input-helper"></i>
                                                                Strong
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Weak" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_thrill_weak">
                                                                <i class="input-helper"></i>
                                                                Weak
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Patent" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_thrill_patent">
                                                                <i class="input-helper"></i>
                                                                Patent
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Clotted" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_thrill_clotted">
                                                                <i class="input-helper"></i>
                                                                Clotted
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Redness" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_thrill_redness">
                                                                <i class="input-helper"></i>
                                                                Redness
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Swelling" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_thrill_swelling">
                                                                <i class="input-helper"></i>
                                                                Swelling
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Hematoma" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_thrill_hematoma">
                                                                <i class="input-helper"></i>
                                                                Hematoma
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Pus Secretion" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_thrill_pus_secretion">
                                                                <i class="input-helper"></i>
                                                                Pus Secretion
                                                            </label>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="No Sign and Symptoms of Infection" style="margin-top:5px;">
                                                                <input type="checkbox" id="posthd_thrill_no_signs">
                                                                <i class="input-helper"></i>
                                                                No Sign and Symptoms of Infection
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50" class="ospace"></hr>
                                                <div class="col-xs-12">
                                                        <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> Catherer Dressing</label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="No Bleeding">
                                                                <input type="checkbox" id="posthd_no_bleeding">
                                                                <i class="input-helper"></i>
                                                                No Bleeding
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Arterial and Venous Ports Heparenized">
                                                                <input type="checkbox" id="posthd_arterial_venous_ports">
                                                                <i class="input-helper"></i>
                                                                Arterial and Venous Ports Heparenized
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Each Port Capped and Secured Aseptically">
                                                                <input type="checkbox" id="posthd_each_port_capped_secured">
                                                                <i class="input-helper"></i>
                                                                Each Port Capped and Secured Aseptically
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Arterial and Venous Ports Flushed with PNSS">
                                                                <input type="checkbox" id="posthd_arterial_venous_flushed">
                                                                <i class="input-helper"></i>
                                                                Arterial and Venous Ports Flushed with PNSS
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Aseptically Dressed">
                                                                <input type="checkbox" id="posthd_aseptically_dressed">
                                                                <i class="input-helper"></i>
                                                                Aseptically Dressed
                                                            </label><br>
                                                            <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Bactroban ointment applied at exit Site">
                                                                <input type="checkbox" id="posthd_bactroban_ointment">
                                                                <i class="input-helper"></i>
                                                                Bactroban ointment applied at exit site
                                                            </label>
                                                        </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50" class="ospace"></hr>
                                                <div class="col-xs-12">
                                                    <div class="form-group ospace">
                                                    <label for="exampleInputEmail1" class="ospace"> Discharged (Single)</label>
                                                    <br>
                                                        <label class="checkbox checkbox-inline m-r-20 ocheckboxtop" data-toggle="" data-original-title="Home With Health Teching Performed" style="margin-top:5px;">
                                                            <input type="checkbox" id="discharge_home_with_health">
                                                            <i class="input-helper"></i>
                                                            Home with Health Teaching Performed
                                                        </label><br>
                                                        </label>
                                                            <label class="ospace">
                                                                Admitted and Endorsed to:
                                                            </label>
                                                            <div class="fg-line">
                                                                <input type="text" style="height:25px;" id="discharge_admitted" data-toggle="" data-original-title="Admitted and Endorsed To" class="form-control" placeholder="">
                                                            </div>
                                                            <label class="ospace">
                                                                Date
                                                            </label>
                                                            <div class="fg-line">
                                                                <input type="text" style="height:25px;" name="discharge_type_date" data-toggle="" data-original-title="Date Discharged" class="form-control date-picker" placeholder="">
                                                            </div>
                                                    </div>
                                                </div>
                                                <hr style="border:1px solid #2c3e50" class="ospace"></hr>
                                                <div class="col-xs-12" style="padding-bottom:112px;">
                                                    <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> EPREX</label>
                                                            <div class="fg-line">
                                                                <input type="text" style="height:25px;" data-toggle="" data-original-title="EPREX" name="eprex" class="form-control" placeholder="">
                                                            </div>
                                                    </div>
                                                    <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> Epoatin(other brand specify)</label>
                                                            <div class="fg-line">
                                                                <input type="text" style="height:25px;" data-toggle="" data-original-title="Specify" name="epoatin" class="form-control" placeholder="">
                                                            </div>
                                                    </div>
                                                    <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> RECORMON</label>
                                                            <div class="fg-line">
                                                                <input type="text" style="height:25px;" data-toggle="" data-original-title="RECORMON" name="recormon" class="form-control" placeholder="">
                                                            </div>
                                                    </div>
                                                    <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> FERROFER</label>
                                                            <div class="fg-line">
                                                                <input type="text" style="height:25px;" data-toggle="" data-original-title="FERROFER" name="ferrofer" class="form-control" placeholder="">
                                                            </div>
                                                    </div>
                                                    <div class="form-group ospace">
                                                        <label for="exampleInputEmail1" class="ospace"> TERMINATED BY</label>
                                                            <div class="fg-line">
                                                                <input type="text" style="height:25px;" data-toggle="" data-original-title="TERMINATED BY" name="terminated_by" class="form-control" placeholder="">
                                                            </div>
                                                    </div>
                                                </div>
                                            </div><!--END TAG after 2 rows-->
                                        </div><!--END TAG for col-xs-6-->
                                    </div>
                                </div>
                            </div>
                            </form>
                            <br>
                        <div class="modal-footer">
                            <button id="btn_create" type="button" class="btn btn-success bgm-green waves-effect">
                                <i class="fa fa-check-circle"></i> Save
                            </button>
                            <button id="printpatientdetails" type="button" class="btn btn-default bgm-green waves-effect">
                                <i class="fa fa-print"></i> Print
                            </button>
                            <!-- <button id="back_to_top" type="button" class="btn bgm-purple waves-effect">
                                Back to Top
                            </button> -->
                            <button type="button" class="btn btn-danger bgm-red" data-dismiss="modal">
                                <i class="fa fa-times-circle"></i> Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <!-- modal patient info end -->

        <!-- modal patient referral list start -->
        <div class="modal fade" id="modal_referral_list" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">
                            <span class="fa fa-envelope"></span> Patient Referral of : <areafullname class="areafullname"></areafullname>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div>
                          <table id="tbl_patient_referral" class="table table-striped">
                            <thead class="tbl-header">
                                <tr>
                                    <th style="color:white;">Referral Code #</th>
                                    <th style="color:white;">Referral Date</th>
                                    <th style="text-align:center;color:white;">Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="new_referral" class="btn btn-dark bgm-green waves-effect right_medical_cert">
                            <i class="fa fa-plus-circle"></i> New Referral Letter
                        </button>
                        <button type="button" id="close_referral" class="btn btn-danger bgm-red waves-effect" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal diagnostic list end -->

        <!--  Referral Letter Modal -->
        <div id="modal_patient_referral" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title" style="color: white;">
                                <span id="referral_letter_icon"></span> 
                                Referral Letter <small class="patient_txn"></small>
                            </h4>
                        
                    </div>
                    <div class="modal-body" style="padding:5px;">
                        <div id="print_referral_content">

                            <form id="frm_referral">
                            <div class="container-fluid">
                                <?php echo $header_2; ?>
                                <div class="row">   
                                    <div class="text-left">
                                        <div class="col-xs-6" style="float:left;font-size:11pt;">Patient Name : <u><areafullname class="areafullname"></areafullname></u>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="col-xs-6" style="float:right;font-size:11pt;">Age/Sex : <u><areaage class="areaage"></areaage></u> / <u><areasex class="areasex"></areasex></u>
                                        </div>
                                    </div>
                                    <div class="text-left">
                                        <div class="col-xs-6" style="float:left;font-size:11pt;">Address : <u><areaaddress class="areaaddress"></areaaddress></u>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="col-xs-6" style="float:right;font-size:11pt;">Date : <areamedcertdate class="areamedcertdate"><input type="text" class="date-picker" id="referral_date" name="referral_date" style="border:0px;border-bottom:1px solid #2c3e50;width:78px;" required data-error-msg="Referral Date is required."></areamedcertdate>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center">
                                            <h4 style="font-family:tahoma;font-size:14pt;font-weight:bold;text-transform: uppercase;">
                                                <u>Referral Letter</u>
                                            </h4>
                                        </div>

                                        <div class="text-left">
                                            <p style="font-family:tahoma;font-size:13pt;font-weight: bold;">
                                                To : 
                                            </p>
                                            <textarea name="referral_doctors" id="referral_doctors" style="width:100%;border:0px;font-size:13pt;"rows="2" required data-error-msg="Doctors is required."></textarea>
                                        </div>

                                        <div class="text-left">
                                            <p style="font-family:tahoma;font-size:13pt;">Respectfully referring <u><areafullname class="areafullname"></areafullname></u> for evaluation and co-management. <br />

                                            <b>Diagnosis :</b>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-left">
                                            <textarea name="referral_diagnostics" id="referral_diagnostics" style="width:100%;border:0px;font-size:13pt;"rows="8" required data-error-msg="Diagnostics is required."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-left">
                                            <p style="font-family:tahoma;font-size:13pt;font-weight: bold;">Others / Remarks : </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-left">
                                            <textarea name="remarks" style="width:100%;border:0px;font-size:13pt;"rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-left">
                                            <input type="text"  class="date-picker" name="appointment_date" id="referral_appointment_date" style="border:0px;border-bottom:1px solid #2c3e50;width:195px;text-align: center!important;">
                                            <p>Your next appointment will be on</p>
                                        </div>
                                    </div>
                                </div>
                                <footer class="m-t-15 p-20" id="ftr_referral">
                                    <div class="list-inline text-right list-unstyled" style="font-size:8pt;line-height: 100%;float: right;margin-top: -20px;">
                                        <?php echo $stamp; ?>
                                    </div>
                                </footer>
                            </div>
                            </form>
                        </div>
                    </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success bgm-green waves-effect right_referral_create" id="save_referral">
                            <i class="fa fa-check-circle"></i> Save
                        </button>
                        <button type="button" class="btn btn-default bgm-green waves-effect" id="print_referral">
                            <i class="fa fa-print"></i> Print
                        </button>
                        <button type="button" class="btn btn-danger bgm-red waves-effect close_referral" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal cert -->

        <!-- modal patient admitting order start -->
        <div class="modal fade" id="modal_admitting_order_list" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;" class="table table-striped">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">
                            <span class="fa fa-list"></span> Patient Admitting Order of : <areafullname class="areafullname"></areafullname>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="box-body">
                          <table id="tbl_patient_admitting_order" class="table table-striped">
                            <thead class="tbl-header">
                                <tr>
                                    <th style="color:white;">Admitting Code #</th>
                                    <th style="color:white;">Date</th>
                                    <th style="text-align:center;color:white;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="new_admitting_order" class="btn btn-dark bgm-green waves-effect right_admitting_order">
                            <i class="fa fa-plus-circle"></i> New Admitting Order
                        </button>
                        <button type="button" id="close_admitting_order" class="btn btn-danger bgm-red waves-effect" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal patient admitting order end -->
        
        <!--  Admitting Order Modal -->
        <div id="modal_admitting_order" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title" style="color: white;">
                                <span id="admitting_order_icon"></span> 
                                Admitting Order <small class="patient_txn"></small>
                            </h4>
                        
                    </div>
                    <div class="modal-body" style="padding:5px;">
                        <div id="print_admitting_order_content">
                            <form id="frm_admitting_order">
                            <div class="container-fluid">
                                <?php echo $header_2; ?>
                                <div class="row">   
                                    <div class="text-left">
                                        <div class="col-xs-6" style="float:left;font-size:11pt;">Patient Name : <u><areafullname class="areafullname"></areafullname></u>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="col-xs-6" style="float:right;font-size:11pt;">Age/Sex : <u><areaage class="areaage"></areaage></u> / <u><areasex class="areasex"></areasex></u>
                                        </div>
                                    </div>
                                    <div class="text-left">
                                        <div class="col-xs-6" style="float:left;font-size:11pt;">Address : <u><areaaddress class="areaaddress"></areaaddress></u>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="col-xs-6" style="float:right;font-size:11pt;">Date : <areamedcertdate class="areamedcertdate"><input type="text" class="date-picker" id="admitting_order_date" name="admitting_order_date" style="border:0px;border-bottom:1px solid #2c3e50;width:78px;" required data-error-msg="Admitting Order Date is required."></areamedcertdate>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-center">
                                            <h4 style="font-family:tahoma;font-size:14pt;font-weight:bold;text-transform: uppercase;">
                                                <u>Admitting Order</u>
                                            </h4>
                                            <button type="button" class="btn btn-success hidden" id="btn_check_all_checkbox">
                                                Check all checkbox
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                            <div class="text-left">
                                                    <i class="fa fa-angle-right"></i> Please admit to 
                                                        <input type="checkbox" name="cb_icu" id="cb_icu"> <label for="cb_icu" class="normal">ICU</label> <br />
                                                        <input type="checkbox" name="cb_room" id="cb_room" style="margin-left: 100px;"> <label for="cb_room" class="normal">Room of choice under my service.</label> <br />
                                                    <i class="fa fa-angle-right"></i> Secure consent for admission &amp; management <br />
                                                    <i class="fa fa-angle-right"></i> Monitor VS q 
                                                        <input type="text" class="txt_right" name="txt_mon_vsq" id="txt_mon_vsq" style="width: 30px;"> hours <br />
                                                    <i class="fa fa-angle-right"></i> Monitor 1 &amp; 0 q
                                                        <input type="text" class="txt_right" name="txt_mon_10" id="txt_mon_10" style="width: 30px;"> hours <br />
                                                    <i class="fa fa-angle-right"></i> Diet: <br/ >

                                                        <input type="checkbox" name="cb_low_fat_salt_diet" id="cb_low_fat_salt_diet"> 
                                                        <label for="cb_low_fat_salt_diet" class="normal">Low salt, low fat diet</label><br />

                                                        <input type="checkbox" name="cb_daib_renal_diet" id="cb_daib_renal_diet"> 
                                                        <label for="cb_daib_renal_diet" class="normal">Diabetic Renal Diet</label><br />

                                                        <div style="margin-left: 50px;">
                                                            TCR : <input type="text" class="txt_right" name="txt_drdtcr_kcal_day" style="width:105px;" id="txt_drdtcr_kcal_day"> kcal/day divided into 
                                                            <br />
                                                            <input type="checkbox" name="cb_drdtc_na_day" id="cb_drdtc_na_day"> 
                                                            <input type="text" name="txt_drdtc_na_day" id="txt_drdtc_na_day" class="txt_right" style="width: 50px;">
                                                            <label for="cb_drdtc_na_day" class="normal">Na/day</label>

                                                            <input type="checkbox" name="cb_drdtc_g_phosp_day" id="cb_drdtc_g_phosp_day" style="margin-left: 50px;"> 
                                                            <input type="text" name="txt_drdtc_g_phosp_day" id="txt_drdtc_g_phosp_day" class="txt_right" style="width: 50px;">
                                                            <label for="cb_drdtc_g_phosp_day" class="normal">g Phosphorous /day</label>
                                                            <br />

                                                            <input type="checkbox" name="cb_drdtc_gk_day" id="cb_drdtc_gk_day"> 
                                                            <input type="text" name="txt_drdtc_gk_day" id="txt_drdtc_gk_day" class="txt_right" style="width: 50px;">
                                                            <label for="cb_drdtc_gk_day" class="normal">g K/day</label>

                                                            <input type="checkbox" name="cb_drdtc_g_fats" id="cb_drdtc_g_fats" style="margin-left: 48px;"> 
                                                            <input type="text" name="txt_drdtc_g_fats" id="txt_drdtc_g_fats" class="txt_right" style="width: 50px;">
                                                            <label for="cb_drdtc_g_fats" class="normal">g Fats/day</label>
                                                            <br />

                                                            <input type="checkbox" name="cb_drdtc_l_fluids_day" id="cb_drdtc_l_fluids_day"> 
                                                            <input type="text" name="txt_drdtc_l_fluids_day" id="txt_drdtc_l_fluids_day" class="txt_right" style="width: 50px;">
                                                            <label for="cb_drdtc_l_fluids_day" class="normal">L fluids/day</label>

                                                            <input type="checkbox" name="cb_drdtc_g_cho" id="cb_drdtc_g_cho" style="margin-left: 25px;"> 
                                                            <input type="text" name="txt_drdtc_g_cho" id="txt_drdtc_g_cho" class="txt_right" style="width: 50px;">
                                                            <label for="cb_drdtc_g_cho" class="normal">g Carbohydrates/day</label>
                                                            <br />

                                                            <input type="checkbox" name="cb_drdtc_g_protein" id="cb_drdtc_g_protein"> 
                                                            <input type="text" name="txt_drdtc_g_protein" id="txt_drdtc_g_protein" class="txt_right" style="width: 50px;">
                                                            <label for="cb_drdtc_g_protein" class="normal">g Protein/day</label>
                                                            <br />
                                                        </div>

                                                        <!-- renal diet -->

                                                        <input type="checkbox" name="cb_renal_diet" id="cb_renal_diet"> 
                                                        <label for="cb_renal_diet" class="normal">Renal Diet</label><br />

                                                        <div style="margin-left: 50px;">
                                                            TCR : <input type="text" class="txt_right" name="txt_rdtcr_kcal_day" style="width:105px;" id="txt_rdtcr_kcal_day"> kcal/day divided into 
                                                            <br />
                                                            <input type="checkbox" name="cb_rdtc_na_day" id="cb_rdtc_na_day"> 
                                                            <input type="text" name="txt_rdtc_na_day" id="txt_rdtc_na_day" class="txt_right" style="width: 50px;">
                                                            <label for="cb_rdtc_na_day" class="normal">Na/day</label>

                                                            <input type="checkbox" name="cb_rdtc_g_phosp_day" id="cb_rdtc_g_phosp_day" style="margin-left: 50px;"> 
                                                            <input type="text" name="txt_rdtc_g_phosp_day" id="txt_rdtc_g_phosp_day" class="txt_right" style="width: 50px;">
                                                            <label for="cb_rdtc_g_phosp_day" class="normal">g Phosphorous /day</label>
                                                            <br />

                                                            <input type="checkbox" name="cb_rdtc_gk_day" id="cb_rdtc_gk_day"> 
                                                            <input type="text" name="txt_rdtc_gk_day" id="txt_rdtc_gk_day" class="txt_right" style="width: 50px;">
                                                            <label for="cb_rdtc_gk_day" class="normal">g K/day</label>

                                                            <input type="checkbox" name="cb_rdtc_g_fats" id="cb_rdtc_g_fats" style="margin-left: 48px;"> 
                                                            <input type="text" name="txt_rdtc_g_fats" id="txt_rdtc_g_fats" class="txt_right" style="width: 50px;">
                                                            <label for="cb_rdtc_g_fats" class="normal">g Fats/day</label>
                                                            <br />

                                                            <input type="checkbox" name="cb_rdtc_l_fluids_day" id="cb_rdtc_l_fluids_day"> 
                                                            <input type="text" name="txt_rdtc_l_fluids_day" id="txt_rdtc_l_fluids_day" class="txt_right" style="width: 50px;">
                                                            <label for="cb_rdtc_l_fluids_day" class="normal">L fluids/day</label>

                                                            <input type="checkbox" name="cb_rdtc_g_cho" id="cb_rdtc_g_cho" style="margin-left: 25px;"> 
                                                            <input type="text" name="txt_rdtc_g_cho" id="txt_rdtc_g_cho" class="txt_right" style="width: 50px;">
                                                            <label for="cb_rdtc_g_cho" class="normal">g Carbohydrates/day</label>
                                                            <br />

                                                            <input type="checkbox" name="cb_rdtc_g_protein" id="cb_rdtc_g_protein"> 
                                                            <input type="text" name="txt_rdtc_g_protein" id="txt_rdtc_g_protein" class="txt_right" style="width: 50px;">
                                                            <label for="cb_rdtc_g_protein" class="normal">g Protein/day</label>
                                                            <br />
                                                        </div>

                                                        <div style="margin-left: 20px;">
                                                            Diagnosis : <input type="checkbox" name="cb_chronic_kds" id="cb_chronic_kds"> 
                                                            <label for="cb_chronic_kds" class="normal"> Chronic Kidney Disease Stage </label> 
                                                            <input type="text" class="txt_right" name="txt_chronic_kds" id="txt_chronic_kds" style="width: 60px;"> secondary <br>
                                                            <span style="margin-left: 200px;">to</span> 
                                                            <input type="checkbox" name="cb_chronic_kds_dmn" id="cb_chronic_kds_dmn"> 
                                                            <label for="cb_chronic_kds_dmn" class="normal"> DM Nephropathy </label>

                                                            <br/>

                                                            <input type="checkbox" name="cb_chronic_kds_un" id="cb_chronic_kds_un" style="margin-left: 215px;"> 
                                                            <label for="cb_chronic_kds_un" class="normal"> Urate Nephropathy </label>

                                                            <br/>

                                                            <input type="checkbox" name="cb_chronic_kds_hn" id="cb_chronic_kds_hn" style="margin-left: 215px;">
                                                            <label for="cb_chronic_kds_hn" class="normal"> Hypertensive Nephropathy </label>

                                                            <br/>

                                                            <input type="checkbox" name="cb_chronic_kds_others" id="cb_chronic_kds_others" style="margin-left: 215px;">
                                                            <label for="cb_chronic_kds_others" class="normal"> Others: </label>
                                                            <input type="text" name="txt_chronic_kds_others" id="txt_chronic_kds_others" class="txt_left" style="width: 205px;">
                                                            
                                                            <br/>

                                                            <input type="checkbox" name="cb_diag_others" id="cb_diag_others" style="margin-left: 70px;">
                                                            <label for="cb_diag_others" class="normal"> Others: </label>
                                                            <input type="text" name="txt_diag_others" id="txt_diag_others" class="txt_left" style="width: 350px;">
                                                            
                                                            <br/>
                                                        </div>
                                            </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                        <div class="col-xs-12">
                                            <div class="col-xs-12">
                                                <h4><b>Diagnostics:</b></h4>
                                            </div>
                                            <div class="col-xs-4">
                                                <h5><b>HEMATOLOGY</b></h5>
                                               <input type="checkbox" name="cb_diag_hm_cbc" id="cb_diag_hm_cbc" style="width:50px;border:0px;border-bottom:1px solid black;"><label for="cb_diag_hm_cbc" class="normal">CBC with PC</label> <br>
                                               <input type="checkbox" name="cb_diag_hm_ph_bsmear" id="cb_diag_hm_ph_bsmear" style="width:50px;border:0px;border-bottom:1px solid black;"><label for="cb_diag_hm_ph_bsmear" class="normal">Peripheral Blood Smear</label> <br>
                                               <h5><b>CHEMISTRY</b></h5>
                                               <input type="checkbox" name="cb_diag_chem_bun_prepost" id="cb_diag_chem_bun_prepost" style="width:50px;border:0px;border-bottom:1px solid black;">BUN (Pre and Post HD) <br>
                                               <input type="checkbox" name="cb_diag_chem_bun" id="cb_diag_chem_bun" style="width:50px;border:0px;border-bottom:1px solid black;">BUN <br>
                                               <input type="checkbox" name="cb_diag_chem_creatinine" id="cb_diag_chem_creatinine" style="width:50px;border:0px;border-bottom:1px solid black;">Creatinine <br>
                                               <input type="checkbox" name="cb_diag_chem_na" id="cb_diag_chem_na" style="width:50px;border:0px;border-bottom:1px solid black;">Na <br>
                                               <input type="checkbox" name="cb_diag_chem_k" id="cb_diag_chem_k" style="width:50px;border:0px;border-bottom:1px solid black;">K <br>
                                               <input type="checkbox" name="cb_diag_chem_fbs" id="cb_diag_chem_fbs" style="width:50px;border:0px;border-bottom:1px solid black;">FBS <br>
                                               <input type="checkbox" name="cb_diag_chem_ion_calc" id="cb_diag_chem_ion_calc" style="width:50px;border:0px;border-bottom:1px solid black;">Ionized Calcium <br>
                                               <input type="checkbox" name="cb_diag_chem_phosporus" id="cb_diag_chem_phosporus" style="width:50px;border:0px;border-bottom:1px solid black;">Phosphorus <br>
                                               <input type="checkbox" name="cb_diag_chem_albumin" id="cb_diag_chem_albumin" style="width:50px;border:0px;border-bottom:1px solid black;">Albumin <br>
                                               <input type="checkbox" name="cb_diag_chem_uricacid" id="cb_diag_chem_uricacid" style="width:50px;border:0px;border-bottom:1px solid black;">Uric Acid <br>
                                               <input type="checkbox" name="cb_diag_chem_lipidprofile" id="cb_diag_chem_lipidprofile" style="width:50px;border:0px;border-bottom:1px solid black;">Lipid Profile <br>
                                               <input type="checkbox" name="cb_diag_chem_sgpt" id="cb_diag_chem_sgpt" style="width:50px;border:0px;border-bottom:1px solid black;">SGPT <br>
                                               <input type="checkbox" name="cb_diag_chem_specify" id="cb_diag_chem_specify" style="width:50px;border:0px;border-bottom:1px solid black;">Others, please specify <input type="text" name="txt_diag_chem_specify" id="txt_diag_chem_specify" style="width:65px;border:0px;border-bottom:1px solid black;"><br>
                                            </div>
                                            <div class="col-xs-8">
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <h5><b>IMAGING STUDIES</b></h5>
                                                        <input type="checkbox" name="cb_diag_imag_12lecg" id="cb_diag_imag_12lecg" style="width:50px;border:0px;border-bottom:1px solid black;">12 L ECG <br />
                                                        <input type="checkbox" name="cb_diag_imag_kubxray" id="cb_diag_imag_kubxray" style="width:50px;border:0px;border-bottom:1px solid black;">KUB XRAY <br />
                                                        <input type="checkbox" name="cb_diag_imag_kubultrasound" id="cb_diag_imag_kubultrasound" style="width:50px;border:0px;border-bottom:1px solid black;">KUB Ultrasound <br />
                                                        <input type="checkbox" name="cb_diag_imag_abdomen" id="cb_diag_imag_abdomen" style="width:50px;border:0px;border-bottom:1px solid black;">Ultrasound of WAB <br />
                                                        <input type="checkbox" name="cb_diag_imag_ct_angiography" id="cb_diag_imag_ct_angiography" style="width:50px;border:0px;border-bottom:1px solid black;">CT angiography<br />
                                                        <input type="checkbox" name="cb_diag_imag_renal_duplex" id="cb_diag_imag_renal_duplex" style="width:50px;border:0px;border-bottom:1px solid black;">Renal Duplex Scan <br />
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <br><br>
                                                        <input type="checkbox" name="cb_diag_imag_cxrpa" id="cb_diag_imag_cxrpa" style="width:50px;border:0px;border-bottom:1px solid black;">CXR PA <br/>
                                                        <input type="checkbox" name="cb_diag_imag_ctstronogram" id="cb_diag_imag_ctstronogram" style="width:50px;border:0px;border-bottom:1px solid black;">CT STONOGRAM<br/>
                                                        <input type="checkbox" name="cb_diag_imag_prosultra" id="cb_diag_imag_prosultra" style="width:50px;border:0px;border-bottom:1px solid black;">Prostate Ultrasound<br/>
                                                        <input type="checkbox" name="cb_diag_imag_decho_plain" id="cb_diag_imag_decho_plain" style="width:50px;border:0px;border-bottom:1px solid black;">2 Dechocardiography (Plain)<br/>
                                                        <input type="checkbox" name="cb_diag_imag_decho_doppler" id="cb_diag_imag_decho_doppler" style="width:50px;border:0px;border-bottom:1px solid black;">2 Dechocardiography (with doppler)<br/>
                                                        <input type="checkbox" name="cb_diag_imag_others" id="cb_diag_imag_others" style="width:50px;border:0px;border-bottom:1px solid black;">Others: <input type="text" style="width:160px;border:0px;border-bottom:1px solid black;" name="txt_diag_imag_others" id="txt_diag_imag_others"> <br/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <h5><b>RENAL FUNCTION TEST</b></h5>
                                                        <input type="checkbox" name="cb_diag_renal_gfr" id="cb_diag_renal_gfr" style="width:50px;border:0px;border-bottom:1px solid black;"> Nuclear GFR Scan <br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <h5><b>URINE EXAMS</b></h5>
                                                            <input type="checkbox" name="cb_diag_urine_routine_analysis" id="cb_diag_urine_routine_analysis" style="width:50px;border:0px;border-bottom:1px solid black;">Routine Urinalysis <br />
                                                            <input type="checkbox" name="cb_diag_urine_rbc_morph" id="cb_diag_urine_rbc_morph" style="width:50px;border:0px;border-bottom:1px solid black;">Urine RBC morphology  <br />
                                                            <input type="checkbox" name="cb_diag_urine_random" id="cb_diag_urine_random" style="width:50px;border:0px;border-bottom:1px solid black;">Random Urine Protein  <br />
                                                            <input type="checkbox" name="cb_diag_urine_afb" id="cb_diag_urine_afb" style="width:50px;border:0px;border-bottom:1px solid black;">Urine AFB <br />
                                                    </div>
                                                    <div class="col-xs-7">
                                                        <br><br>
                                                        <input type="checkbox" name="cb_diag_urine_total_protein" id="cb_diag_urine_total_protein" style="width:50px;border:0px;border-bottom:1px solid black;">24 hour urine total protein<br>
                                                       <input type="checkbox" name="cb_diag_urine_clearance" id="cb_diag_urine_clearance" style="width:50px;border:0px;border-bottom:1px solid black;">24 hour creatinine clearance<br>
                                                       <input type="checkbox" name="cb_diag_urine_creatinine_ratio" id="cb_diag_urine_creatinine_ratio" style="width:50px;border:0px;border-bottom:1px solid black;">Urine Albumin Creatinine Ratio<br>
                                                       <input type="checkbox" name="cb_diag_urine_cytology" id="cb_diag_urine_cytology" style="width:50px;border:0px;border-bottom:1px solid black;">Urine Cytology<br>
                                                    </div>
                                                </div>                                     
                                            </div>
                                        </div>
                                    </div>
                                    <hr><br/>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            Therapeutics : 
                                            <input type="checkbox" name="cb_thera_oxy_inha" id="cb_thera_oxy_inha"> 
                                            <label class="normal" for="cb_thera_oxy_inha">Oxygen Inhalation via</label> 
                                            <input type="text" name="txt_thera_oxy_inha" id="txt_thera_oxy_inha" class="txt_left"> 

                                            <input type="checkbox" name="cb_thera_nasal_cannula" id="cb_thera_nasal_cannula"> 
                                            <label for="cb_thera_nasal_cannula" class="normal">Nasal Cannula</label>

                                            <input type="checkbox" name="cb_thera_lpm" id="cb_thera_lpm"> 
                                            <input type="text" name="txt_thera_lpm" id="txt_thera_lpm" class="txt_left" style="width: 80px;"> 
                                            <label for="cb_thera_lpm" class="normal">Lpm</label> <br />

                                            <input type="checkbox" name="cb_thera_perc_fi02" id="cb_thera_perc_fi02" style="margin-left: 490px;"> 
                                            <label for="cb_thera_perc_fi02" class="normal">%FiO2</label> <br />

                                            <input type="checkbox" name="cb_thera_venturi_mask" id="cb_thera_venturi_mask" style="margin-left: 390px;">
                                            <label for="cb_thera_venturi_mask" class="normal">Venturi Mask</label> <br />

                                            <input type="checkbox" name="cb_thera_others" id="cb_thera_others" style="margin-left: 390px;"><label for="cb_thera_others" class="normal"> Others</label>
                                            <input type="text" name="txt_thera_others" id="txt_thera_others" style="width: 150px;" class="txt_left">  <br />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12">

                                            <input type="checkbox" name="cb_ivfluid" id="cb_ivfluid"> IV Fluid :
                                            <br/> 

                                            <input type="checkbox" name="cb_ivfluid_nss_1l" id="cb_ivfluid_nss_1l" style="margin-left: 50px;"> PNSS 1L x 
                                            <input type="text" name="txt_ivfluid_nss_1l_rate" id="txt_ivfluid_nss_1l_rate" class="txt_left" style="width: 115px;"> 
                                            <input type="checkbox" name="cb_ivfluid_10_cc_hr" id="cb_ivfluid_10_cc_hr" style="margin-left: 40px;">
                                            <label for="cb_ivfluid_10_cc_hr" class="normal">10 cc/hr</label> <br />

                                            <input type="checkbox" name="cb_ivfluid_ds_0_3_nacl" id="cb_ivfluid_ds_0_3_nacl" style="margin-left: 50px;"> D5 0.3 NaCl x
                                            <input type="text" name="txt_ivfluid_ds_0_3_nacl_rate" id="txt_ivfluid_ds_0_3_nacl_rate" class="txt_left" style="width: 95px;"> 
                                            <input type="checkbox" name="cb_ivfluid_20_cc_hr" id="cb_ivfluid_20_cc_hr" style="margin-left: 42px;">
                                            <label for="cb_ivfluid_20_cc_hr" class="normal">20 cc/hr</label> <br />

                                            <input type="checkbox" name="cb_ivfluid_ds_0_9_nacl" id="cb_ivfluid_ds_0_9_nacl" style="margin-left: 50px;"> D5 0.9 NaCl x 
                                            <input type="text" name="txt_ivfluid_ds_0_9_nacl_rate" id="txt_ivfluid_ds_0_9_nacl_rate" class="txt_left" style="width: 95px;"> 
                                            <input type="checkbox" name="cb_ivfluid_40_cc_hr" id="cb_ivfluid_40_cc_hr" style="margin-left: 42px;">
                                            <label for="cb_ivfluid_40_cc_hr" class="normal">40 cc/hr</label> <br />

                                            <input type="checkbox" name="cb_ivfluid_ds_water_500ml" id="cb_ivfluid_ds_water_500ml" style="margin-left: 50px;"> D5 Water 50ml x 
                                            <input type="text" name="txt_ivfluid_ds_water_500ml_rate" id="txt_ivfluid_ds_water_500ml_rate" class="txt_left" style="width: 75px;"> 
                                            <input type="checkbox" name="cb_ivfluid_60_cc_hr" id="cb_ivfluid_60_cc_hr" style="margin-left: 44px;">
                                            <label for="cb_ivfluid_60_cc_hr" class="normal">60 cc/hr</label> <br />

                                            <input type="checkbox" name="cb_ivfluid_ds_water_1L" id="cb_ivfluid_ds_water_1L" style="margin-left: 50px;"> D5 Water 1L x 
                                            <input type="text" name="txt_ivfluid_ds_water_1L_rate" id="txt_ivfluid_ds_water_1L_rate" class="txt_left" style="width: 90px;"> 
                                            <input type="checkbox" name="cb_ivfluid_80_cc_hr" id="cb_ivfluid_80_cc_hr" style="margin-left: 45px;">
                                            <label for="cb_ivfluid_80_cc_hr" class="normal">80 cc/hr</label> <br />

                                            <input type="checkbox" name="cb_ivfluid_ds_nm_1l" id="cb_ivfluid_ds_nm_1l" style="margin-left: 50px;"> D5 NM 1L x 
                                            <input type="text" name="txt_ivfluid_ds_nm_1l_rate" id="txt_ivfluid_ds_nm_1l_rate" class="txt_left" style="width: 105px;"> 
                                            <input type="checkbox" name="cb_ivfluid_100_cc_hr" id="cb_ivfluid_100_cc_hr" style="margin-left: 44px;">
                                            <label for="cb_ivfluid_100_cc_hr" class="normal">100 cc/hr</label> <br />

                                            <input type="checkbox" name="cb_ivfluid_120_cc_hr" id="cb_ivfluid_120_cc_hr" style="margin-left: 284px;">
                                            <label for="cb_ivfluid_120_cc_hr" class="normal" >120 cc/hr</label> <br />

                                            <input type="checkbox" name="cb_ivfluid_150_cc_hr" id="cb_ivfluid_150_cc_hr" style="margin-left: 284px;">
                                            <label for="cb_ivfluid_150_cc_hr" class="normal">150 cc/hr</label> <br />

                                            <input type="checkbox" name="cb_ivfluid_insert_helplock" id="cb_ivfluid_insert_helplock">
                                            <label for="cb_ivfluid_insert_helplock" class="normal">Insert heplock</label> <br />
                                        </div>
                                    </div>
                                    <hr><br/>
                                    <div class="row">
                                    <div class="col-xs-12">
                                        <h4><b>Oral Medications :</b></h4>
                                    </div>
                                    <div class="col-xs-12">                                    
                                    <table style="width:100%;margin:10px;padding: 10px;">
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_cal_carbo" id="cb_med_cal_carbo" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Calcium carbonate 500mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_cal_carbo_od" id="cb_med_cal_carbo_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_cal_carbo_bid" id="cb_med_cal_carbo_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_cal_carbo_tid" id="cb_med_cal_carbo_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_atenolol" id="cb_med_atenolol" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Atenolol
                                                <input type="text" class="mgright" name="txt_med_atenolol_mg" id="txt_med_atenolol_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_atenolol_od" id="cb_med_atenolol_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_atenolol_bid" id="cb_med_atenolol_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_atenolol_tid" id="cb_med_atenolol_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_sevelamer" id="cb_med_sevelamer" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Sevelamer carbonate 600mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_sevelamer_od" id="cb_med_sevelamer_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_sevelamer_bid" id="cb_med_sevelamer_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_sevelamer_tid" id="cb_med_sevelamer_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_carvedilol" id="cb_med_carvedilol" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Carvedilol
                                                <input type="text" class="mgright" name="txt_med_carvedilol_mg" id="txt_med_carvedilol_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_carvedilol_od" id="cb_med_carvedilol_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_carvedilol_bid" id="cb_med_carvedilol_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_carvedilol_tid" id="cb_med_carvedilol_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_calcitriol" id="cb_med_calcitriol" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <tag style="font-size:8pt;">Calcitriol<input type="text" class="mgright" name="txt_med_calcitriol_mg" id="txt_med_calcitriol_mg" style="width:50px;border:0px;border-bottom:1px solid black;"></tag>
                                            </td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_calcitriol_od" id="cb_med_calcitriol_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_calcitriol_bid" id="cb_med_calcitriol_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_calcitriol_tid" id="cb_med_calcitriol_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_metoprolol" id="cb_med_metoprolol" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Metoprolol
                                                <input type="text" class="mgright" name="txt_med_metoprolol_mg" id="txt_med_metoprolol_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_metoprolol_od" id="cb_med_metoprolol_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_metoprolol_bid" id="cb_med_metoprolol_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_metoprolol_tid" id="cb_med_metoprolol_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_clopidogrel" id="cb_med_clopidogrel" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Clopidogrel 75mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_clopidogrel_od" id="cb_med_clopidogrel_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_clopidogrel_bid" id="cb_med_clopidogrel_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_clopidogrel_tid" id="cb_med_clopidogrel_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_clonidine" id="cb_med_clonidine" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Clonidine
                                                <input type="text" class="mgright" name="txt_med_clonidine_mg" id="txt_med_clonidine_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_clonidine_od" id="cb_med_clonidine_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_clonidine_bid" id="cb_med_clonidine_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_clonidine_tid" id="cb_med_clonidine_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_ferrous" id="cb_med_ferrous" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Ferrous sulfate 75mg</tag><input type="text" class="mgright" name="txt_med_ferrous_mg" id="txt_med_ferrous_mg" style="width:50px;border:0px;border-bottom:1px solid black;"></tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_ferrous_od" id="cb_med_ferrous_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_ferrous_bid" id="cb_med_ferrous_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_ferrous_tid" id="cb_med_ferrous_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_atorvastatin" id="cb_med_atorvastatin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Atorvastatin
                                                <input type="text" class="mgright" name="txt_med_atorvastatin_mg" id="txt_med_atorvastatin_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_atorvastatin_od" id="cb_med_atorvastatin_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_atorvastatin_bid" id="cb_med_atorvastatin_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_atorvastatin_tid" id="cb_med_atorvastatin_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_folic_acid" id="cb_med_folic_acid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Folic Acid 5mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_folic_acid_od" id="cb_med_folic_acid_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_folic_acid_bid" id="cb_med_folic_acid_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_folic_acid_tid" id="cb_med_folic_acid_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_fluvastatin" id="cb_med_fluvastatin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Fluvastatin
                                                <input type="text" class="mgright" name="txt_med_fluvastatin_mg" id="txt_med_fluvastatin_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_fluvastatin_od" id="cb_med_fluvastatin_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_fluvastatin_bid" id="cb_med_fluvastatin_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_fluvastatin_tid" id="cb_med_fluvastatin_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_vitamin_c" id="cb_med_vitamin_c" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Vitamin C 500mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_vitamin_c_od" id="cb_med_vitamin_c_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_vitamin_c_bid" id="cb_med_vitamin_c_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_vitamin_c_tid" id="cb_med_vitamin_c_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input type="checkbox" name="cb_med_simvastatin" id="cb_med_simvastatin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Simvastatin
                                                <input type="text" class="mgright" name="txt_med_simvastatin_mg" id="txt_med_simvastatin_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_simvastatin_od" id="cb_med_simvastatin_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_simvastatin_bid" id="cb_med_simvastatin_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_simvastatin_tid" id="cb_med_simvastatin_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_vitamin_b_complex" id="cb_med_vitamin_b_complex" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Vitamin b complex 1 tablet</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_vitamin_b_complex_od" id="cb_med_vitamin_b_complex_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_vitamin_b_complex_bid" id="cb_med_vitamin_b_complex_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_vitamin_b_complex_tid" id="cb_med_vitamin_b_complex_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_lanoxin" id="cb_med_lanoxin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Lanoxin
                                                <input type="text" class="mgright" name="txt_med_lanoxin_mg" id="txt_med_lanoxin_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_lanoxin_od" id="cb_med_lanoxin_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_lanoxin_bid" id="cb_med_lanoxin_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_lanoxin_tid" id="cb_med_lanoxin_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_amlodipine" id="cb_med_amlodipine" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Amlodipine<input type="text" class="mgright" name="txt_med_amlodipine_mg" id="txt_med_amlodipine_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_amlodipine_od" id="cb_med_amlodipine_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_amlodipine_bid" id="cb_med_amlodipine_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_amlodipine_tid" id="cb_med_amlodipine_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_allopurinol" id="cb_med_allopurinol" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Allopurinol
                                                <input type="text" class="mgright" name="txt_med_allopurinol_mg" id="txt_med_allopurinol_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_allopurinol_od" id="cb_med_allopurinol_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_allopurinol_bid" id="cb_med_allopurinol_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_allopurinol_tid" id="cb_med_allopurinol_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_felodipine" id="cb_med_felodipine" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Felodipine<input type="text" class="mgright" name="txt_med_felodipine_mg" id="txt_med_felodipine_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_felodipine_od" id="cb_med_felodipine_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_felodipine_bid" id="cb_med_felodipine_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_felodipine_tid" id="cb_med_felodipine_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_gliclazide" id="cb_med_gliclazide" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Gliclazide
                                                <input type="text" class="mgright" name="txt_med_gliclazide_mg" id="txt_med_gliclazide_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_gliclazide_od" id="cb_med_gliclazide_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_gliclazide_bid" id="cb_med_gliclazide_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_gliclazide_tid" id="cb_med_gliclazide_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_nifedipine" id="cb_med_nifedipine" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Nitedipine<input type="text" class="mgright" name="txt_med_nifedipine_mg" id="txt_med_nifedipine_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_nifedipine_od" id="cb_med_nifedipine_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_nifedipine_bid" id="cb_med_nifedipine_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_nifedipine_tid" id="cb_med_nifedipine_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_metformin" id="cb_med_metformin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Metformin<input type="text" class="mgright" name="txt_med_metformin_mg" id="txt_med_metformin_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_metformin_od" id="cb_med_metformin_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_metformin_bid" id="cb_med_metformin_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_metformin_tid" id="cb_med_metformin_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_diltiazcm" id="cb_med_diltiazcm" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Diltiazem<input type="text" class="mgright" name="txt_med_diltiazcm_mg" id="txt_med_diltiazcm_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_diltiazcm_od" id="cb_med_diltiazcm_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_diltiazcm_bid" id="cb_med_diltiazcm_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_diltiazcm_tid" id="cb_med_diltiazcm_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_renvela" id="cb_med_renvela" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Renvela
                                                <input type="text" class="mgright" name="txt_med_renvela_mg" id="txt_med_renvela_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_renvela_od" id="cb_med_renvela_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_renvela_bid" id="cb_med_renvela_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_renvela_tid" id="cb_med_renvela_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_irbesartan" id="cb_med_irbesartan" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Irbesartan<input type="text" class="mgright" name="txt_med_irbesartan_mg" id="txt_med_irbesartan_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_irbesartan_od" id="cb_med_irbesartan_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_irbesartan_bid" id="cb_med_irbesartan_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_irbesartan_tid" id="cb_med_irbesartan_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_exforge" id="cb_med_exforge" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Exforge
                                                <input type="text" class="mgright" name="txt_med_exforge_mg" id="txt_med_exforge_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_exforge_od" id="cb_med_exforge_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_exforge_bid" id="cb_med_exforge_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_exforge_tid" id="cb_med_exforge_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_losartan" id="cb_med_losartan" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Losartan<input type="text" class="mgright" name="txt_med_losartan_mg" id="txt_med_losartan_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_losartan_od" id="cb_med_losartan_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_losartan_bid" id="cb_med_losartan_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_losartan_tid" id="cb_med_losartan_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_twynsta" id="cb_med_twynsta" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Twynsta
                                                <input type="text" class="mgright" name="txt_med_twynsta_mg" id="txt_med_twynsta_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_twynsta_od" id="cb_med_twynsta_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_twynsta_bid" id="cb_med_twynsta_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_twynsta_tid" id="cb_med_twynsta_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_telmisartan" id="cb_med_telmisartan" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Telmisartan<input type="text" class="mgright" name="txt_med_telmisartan_mg" id="txt_med_telmisartan_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_telmisartan_od" id="cb_med_telmisartan_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_telmisartan_bid" id="cb_med_telmisartan_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_telmisartan_tid" id="cb_med_telmisartan_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_lacipil" id="cb_med_lacipil" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Lacipil
                                                <input type="text" class="mgright" name="txt_med_lacipil_mg" id="txt_med_lacipil_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_lacipil_od" id="cb_med_lacipil_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_lacipil_bid" id="cb_med_lacipil_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_lacipil_tid" id="cb_med_lacipil_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_valsartan" id="cb_med_valsartan" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Valsartan<input type="text" class="mgright" name="txt_med_valsartan_mg" id="txt_med_valsartan_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_valsartan_od" id="cb_med_valsartan_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_valsartan_bid" id="cb_med_valsartan_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_valsartan_tid" id="cb_med_valsartan_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_insulin_glargine" id="cb_med_insulin_glargine" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Insulin glargine
                                                <input type="text" class="mgright" name="txt_med_insulin_glargine_units" id="txt_med_insulin_glargine_units" style="width:50px;border:0px;border-bottom:1px solid black;">units</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_insulin_glargine_od" id="cb_med_insulin_glargine_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_insulin_glargine_bid" id="cb_med_insulin_glargine_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_insulin_glargine_tid" id="cb_med_insulin_glargine_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_ketosteril" id="cb_med_ketosteril" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Ketosteril 600mg<input type="text" class="mgright" name="txt_med_ketosteril_tab" id="txt_med_ketosteril_tab" style="width:50px;border:0px;border-bottom:1px solid black;">tab</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_ketosteril_od" id="cb_med_ketosteril_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_ketosteril_bid" id="cb_med_ketosteril_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_ketosteril_tid" id="cb_med_ketosteril_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_linagliptin" id="cb_med_linagliptin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Linagliptin 5mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_linagliptin_od" id="cb_med_linagliptin_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_linagliptin_bid" id="cb_med_linagliptin_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_linagliptin_tid" id="cb_med_linagliptin_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_kremezin" id="cb_med_kremezin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Kremezin 2g sachet<input type="text" class="mgright" name="txt_med_perindopril_mg" id="txt_med_perindopril_mg" style="width:50px;border:0px;border-bottom:1px solid black;"></tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_kremezin_od" id="cb_med_kremezin_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_kremezin_bid" id="cb_med_kremezin_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_kremezin_tid" id="cb_med_kremezin_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_vildaglitpin" id="cb_med_vildaglitpin" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Vildagliptin 50mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_vildaglitpin_od" id="cb_med_vildaglitpin_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_vildaglitpin_bid" id="cb_med_vildaglitpin_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_vildaglitpin_tid" id="cb_med_vildaglitpin_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                        <tr>
                                            <td style="width:27.5%;"><input class="margin" type="checkbox" name="cb_med_perindopril" id="cb_med_perindopril" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Perindopril<input type="text" class="mgright" name="txt_med_perindopril_mg" id="txt_med_perindopril_mg" style="width:50px;border:0px;border-bottom:1px solid black;">mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_perindopril_od" id="cb_med_perindopril_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_perindopril_bid" id="cb_med_perindopril_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_perindopril_tid" id="cb_med_perindopril_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                            <td style="width:27.5%;"><input class="onemargin" type="checkbox" name="cb_med_glipizide" id="cb_med_glipizide" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:8pt;">Glipizide 50mg</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_glipizide_od" id="cb_med_glipizide_od" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">OD</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_glipizide_bid" id="cb_med_glipizide_bid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">BID</tag></td>
                                            <td style="width:7.5%;"><input class="margin" type="checkbox" name="cb_med_glipizide_tid" id="cb_med_glipizide_tid" style="width:15px;border:0px;border-bottom:1px solid black;"> <tag style="font-size:7pt;">TID</tag></td>
                                        </tr>
                                    </table>
                                </div>
                                </div>
                                <hr><br/>
                                    <div class="row" style="padding-left: 12px;padding-right: 12px;">
                                        <div class="col-xs-12">
                                            <input type="checkbox" name="cb_emer_hemo" id="cb_emer_hemo"> For Emergency Hemodialysis once with consent <br />
                                            <input type="checkbox" name="cb_emer_refer_to" id="cb_emer_refer_to"> Refer to 
                                            <input type="checkbox" name="cb_emer_dr_1" id="cb_emer_dr_1"> Dr. Steven Charo <br />
                                            <input type="checkbox" name="cb_emer_dr_2" id="cb_emer_dr_2"> Dr. Arnel Ayro <br />
                                            <input type="checkbox" name="cb_emer_dr_3" id="cb_emer_dr_3"> Dr. Patrick Maglaya <br/>

                                            <input type="checkbox" name="cb_emer_dialysis" id="cb_emer_dialysis"> Emergency Dialysis Prescription <br />
                                            Bicarbonate Bath <br />
                                            Duration : <input type="text" class="txt_right" name="txt_emer_dialysis_hrs" id="txt_emer_dialysis_hrs"> Hours <br />
                                            Anticoagulant : <br />
                                            <input type="checkbox" name="cb_no_heparin" id="cb_no_heparin"> No Heparin <br />
                                            <input type="checkbox" name="cb_lmwh" id="cb_lmwh"> LMWH <input type="text" name="txt_lmwh_cc" id="txt_lmwh_cc" class="txt_right"> cc <br />
                                            <input type="checkbox" name="cb_unfractionated" id="cb_unfractionated"> Unfractionated <br />
                                            Heparin Dose <br />
                                            Standard Dose : 2000 'U' then <input type="text" name="txt_standard_u_hr" id="txt_standard_u_hr" class="txt_right"> 'U'/hr <br />
                                            Tight Heparization : 1000 'U' then <input type="text" name="txt_hepa_u_hr" id="txt_hepa_u_hr" class="txt_right"> 'U'/hr<br />

                                            Dialyzer : Low Flux Dialyzer <br />
                                            <input type="checkbox" name="cb_f6_dialyzer" id="cb_f6_dialyzer"> F6 dialyzer<br />
                                            <input type="checkbox" name="cb_f7_dialyzer" id="cb_f7_dialyzer"> F7 dialyzer<br />
                                            <input type="checkbox" name="cb_f8_dialyzer" id="cb_f8_dialyzer"> F8 dialyzer<br />
                                            <input type="checkbox" name="cb_lops_15" id="cb_lops_15"> LOPS 15<br />
                                            <input type="checkbox" name="cb_lops_18" id="cb_lops_18"> LOPS 18<br />
                                            <input type="checkbox" name="cb_lops_20" id="cb_lops_20"> LOPS 20<br />

                                            Hiflux Dialyzer <br />
                                            <input type="checkbox" name="cb_h480s" id="cb_h480s"> HF80s <br />
                                            <input type="checkbox" name="cb_hf120s" id="cb_hf120s"> HF120s<br />
                                            <input type="checkbox" name="cb_h1ps18" id="cb_h1ps18"> HIPS 18<br />
                                            <input type="checkbox" name="cb_h1ps20" id="cb_h1ps20"> HIPS 20<br />

                                            <input type="checkbox" name="cb_refer_to_dr" id="cb_refer_to_dr"> Refer to 
                                            <input type="text" name="txt_refer_to_dr" id="txt_refer_to_dr" class="txt_right"> for evalutaion &amp; comanagement
                                            <br />

                                            <input type="checkbox" name="cb_others" id="cb_others"> Others <input type="text" name="txt_others" id="txt_others" class="txt_right"><br/>
                                            <input type="checkbox" name="cb_inform_admitted" id="cb_inform_admitted"> Inform me once admitted <br />
                                            <input type="checkbox" name="cb_mrod_db" id="cb_mrod_db"> MROD to do database

                                         </div>
                                    </div>

                                    </div>
                                </div>
                                <footer class="m-t-15 p-20" id="ftr_admitting_order">
                                    <div class="list-inline text-right list-unstyled" style="font-size:10pt;line-height: 100%;float: right;margin-top: -10px;">
                                        <?php echo $stamp; ?>
                                    </div>
                                </footer>
                            </div>
                            </form>
                        </div>
                    </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success bgm-green waves-effect right_referral_create" id="save_admitting_order">
                            <i class="fa fa-check-circle"></i> Save
                        </button>
                        <button type="button" class="btn btn-default bgm-green waves-effect" id="print_admitting_order">
                            <i class="fa fa-print"></i> Print
                        </button>
                        <button type="button" class="btn btn-danger bgm-red waves-effect close_admitting_order" data-dismiss="modal">
                            <i class="fa fa-times-circle"></i> Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal cert -->
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
<!-- twitter typehead -->
<script src="assets/plugins/twittertypehead/handlebars.js"></script>
<script src="assets/plugins/twittertypehead/bloodhound.min.js"></script>
<script src="assets/plugins/twittertypehead/typeahead.bundle.min.js"></script>
<script src="assets/plugins/twittertypehead/typeahead.jquery.min.js"></script>
<!-- numeric formatter -->
<script src="assets/plugins/formatter/autoNumeric.js" type="text/javascript"></script>
<script src="assets/plugins/formatter/accounting.js" type="text/javascript"></script>
<?php echo $_rights; ?>

    <script type="text/javascript">
        var dt; var _txnMode; var _selectedID; var _selectRowObj; var _btnNew; var _hepatitis_stat;
        /*var _dialysisbath_bicarbonate=0; var _dialysisacid_hd144a=0;*/
        var _dialyzer_type=0; var dzc=0; dzhe=0; dzhf=0; dzren=0;
        var _prehd_stat; var prehd_am=0; var prehd_wc=0; var prehd_bs=0; var prehd_amwa=0;
        var _posthd_stat; var posthd_am=0; var posthd_wc=0; var posthd_bs=0; var posthd_amwa=0;
        var _prehd_pulse_stat; var ps_reg=0; var ps_irreg=0;
        var _posthd_pulse_stat; var posthd_ps_reg=0; var posthd_ps_irreg=0;
        var _prehd_neuro_stat; var _prehd_neuro_comatose;
        var _posthd_neuro_stat; var _posthd_neuro_comatose;
        var _prehd_skincolor_stat;
        var _posthd_skincolor_stat;
        var _prehd_others_stat;
        var _posthd_others_stat;
        var _prehd_turgor_stat; var _prehd_neckveins_stat;
        var _posthd_turgor_stat; var _posthd_neckveins_stat;
        var _prehd_genitourinary_stat;
        var _posthd_genitourinary_stat;
        var _prehd_arterial_stat; var _prehd_venous_stat; var _prehd_cathererdressing_stat;
        var _posthd_arterial_stat; var _posthd_venous_stat; var _posthd_cathererdressing_stat;
        var _prehd_av_fistula_yes_stat; var _prehd_anesthesia_stat;
        var _posthd_av_fistula_yes_stat; var _posthd_anesthesia_stat;
        var _prehd_fistula_thrill_stat; var _prehd_fistula_bruit_stat; var _prehd_fistula_signs_stat;
        var _posthd_fistula_thrill_stat; var _posthd_fistula_bruit_stat; var _posthd_fistula_signs_stat;
        var _dhh=0; var _discharge_stat;
        var _selectedname; var _isChecked;
        var _selectRowObjprescription; var _selectedIDprescription; var _selectedIDmedicalabstract;
        var _selectedIDmedicalcert;
        var _selectedIDLabDiagnostic;
        var _selectedIDnephroorder;
        var _selectRowObjlab; var _selectedIDlab;
        var _selectRowObjbilling; var _selectedIDbilling;
        var _selectRowObjvisiting; var _selectedIDvisiting;
        var _txnMode1; var _txnMode2; var _txdelete; var _txnMode3;
        var _txnprescription;
        var _nephrotxn; var _patient_nephro_id;
        var d = new Date();
        var today = (d.getMonth()+1) + "/" + d.getDate() + "/" + d.getFullYear();

        var initializeControls=function(){
        dt=$('#tbl_ref_patient').DataTable({
            "aLengthMenu": [[15, 25, 50], [15, 25, 50]],
            "order": [[ 1, "asc" ]],
            "ajax" : "Ref_patient/transaction/list",
            "columns": [
                {
                    "targets": [0],
                    "class":          "patient-details",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": "",
                },
                { targets:[1],data: "fullname" },
                { targets:[2],data: "bdate" },
                { targets:[3],data: "sex" },
                { targets:[4],data: "telephone" },
                { targets:[5],data: "mobile" },
                {

                    targets:[6],
                    render: function (data, type, full, meta){
                        
                        return '<center>'+btn_refpatient_edit+btn_refpatient_trash+'</center>';
                    }
                }

            ],
            language: {
                         searchPlaceholder: "Search Patient"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(10).attr({
                    "align": "right"
                });
            }
        });

        $('.numeric').autoNumeric('init');
    }();

    var reInitializeNumeric=function(){
        $('.numeric').autoNumeric('init',{mDec: 2});
        $('.number').autoNumeric('init', {mDec:0});

    };

    var checkHeader=function(status){
        if (status == 'view'){
            $('.report_header').css('display','block');
        }else{
            $('.report_header').css('display','none');
        }
    };

    //stat ref patient 

    // $('#btn_new_refpatient').click(function(){
    //     _txnMode="new";
    //     $('#patient_txn').text('New');
    //     $('#modal_ref_patient').modal('show');
    //     clearFields($('#frm_ref_patients'));
    // });

    $('#btn_new_refpatient').click(function(){
        _txnMode="new";
        $('.header-text-title').html('New Patient Record');
        $('.header-text-info').html('Add');
        // $('#patient_txn').text('New');
        // $('#modal_ref_patient').modal('show');
        clearFields($('#frm_ref_patients'));
        showList(false);
    });

    $('#btn_cancel_refpatient, .close_patient_field').click(function(){
        showList(true);
    }); 

    $('#btn_createrefpatient').click(function(){
            if(validateRequiredFields($('#frm_ref_patients'))){
                if(_txnMode==="new"){
                    //alert("aw");
                    createPatient().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_ref_patients'))
                    }).always(function(){
                        // $('#modal_ref_patient').modal('hide');
                        showList(true);
                        $.unblockUI();
                    });
                    return;
                }
                if(_txnMode==="edit"){
                    //alert("update");
                    updatePatient().done(function(response){
                        showNotification(response);
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                    }).always(function(){
                        // $('#modal_ref_patient').modal('hide');
                        showList(true);
                        $.unblockUI();
                    });
                    return;
                }
            }
            else{}
        });

    $('#tbl_ref_patient tbody').on('click','button[name="edit_info"]',function(){
        _txnMode="edit";
        
        $('#patient_txn').html('Edit');
        _selectRowObj=$(this).closest('tr');
        var data=dt.row(_selectRowObj).data();
        _selectedID=data.ref_patient_id;

        $('input,textarea').each(function(){
            var _elem=$(this);
            $.each(data,function(name,value){
                if(_elem.attr('name')==name){
                    _elem.val(value);
                }
            });
        });

        $('#ref_relationship_id').val(data.ref_relationship_id);

        $('.header-text-title').html(data.fullname);
        $('.header-text-info').html('Edit');
        showList(false);
        // $('#modal_ref_patient').modal('toggle');

    });

    $('#tbl_ref_patient tbody').on('click','button[name="remove_info"]',function(){
        _txdelete="patientrecord";
        _selectRowObj=$(this).closest('tr');
        var data=dt.row(_selectRowObj).data();
        _selectedID=data.ref_patient_id;
        delete_notif();

    });

    $('#tbl_ref_patient tbody').on( 'click', 'tr td.patient-details', function () {
        var detailRows = [];
        var tr = $(this).closest('tr');
        var row = dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );

        if ( row.child.isShown() ) {
            tr.removeClass( 'details' );
            row.child.hide();

            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
            tr.addClass( 'details' );
            //console.log(row.data());
            var d=row.data();
            // row.child( format( row.data() ) ).show();

            // if ( idx === -1 ) {
            //     detailRows.push( tr.attr('id') );
            // }            
            $.ajax({
                "dataType":"html",
                "type":"POST",
                "url":"Ref_patient/transaction/patient-details/"+ d.ref_patient_id+"?type=fullview",
                "beforeSend" : function(){
                    row.child( '<center><br /><img src="assets/img/loader/ajax-loader-lg.gif" /><br /><br /></center>' ).show();
                }
            }).done(function(response){
                row.child( response ).show();
                // Add to the 'open' array
                if ( idx === -1 ) {
                    detailRows.push( tr.attr('id') );
                }
            });

        }
    });

    var showList=function(b){
        if(b){
            $('#div_patient_list').show();
            $('#div_patient_fields').hide();
        }else{
            $('#div_patient_list').hide();
            $('#div_patient_fields').show();
        }
    };

    var createPatient=function(){
        var _data=$('#frm_ref_patients').serializeArray();
        /*_data.push({name : "photo_path" ,value : $('img[name="img_user"]').attr('src')});*/

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Ref_patient/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
   
    };     

    var updatePatient=function(){
            var _data=$('#frm_ref_patients').serializeArray();
            _data.push({name : "photo_path" ,value : $('img[name="img_user"]').attr('src')});
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Ref_patient/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
        };

    var removePatient=function(){
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Ref_patient/transaction/delete",
                "data":{ref_patient_id : _selectedID},
                "beforeSend": showSpinningProgress($('#'))
            });
        };

    // end ref patient

    //prescription

    $('.patient_prescription').click(function(){
        if(_isChecked==true){
            $('#tbl_patient_prescription').dataTable().fnDestroy();
            showSpinningProgressLOADING();

            setTimeout(function() {
                 getPrescription();
            }, 200);

            $('#modal_patient_prescription').modal('toggle');
        }
        else{
            notice_notif();
        }
        
    });

    var getPrescription=function(){
            patient_prescription_dt=$('#tbl_patient_prescription').DataTable({
                "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "autoWidth":true,
            "scrollY": "400px",
            "scrollCollapse": true,
            "table-layout": "fixed",            
            "paging":true,
            "order": [[ 3, "desc" ]],            
            "ajax": {
            "url": "Patient_prescription/transaction/list",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "ref_patient_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "prescription_code" },
                { targets:[1],data: "date_prescribed" },
                {
                    targets:[2],
                    render: function (data, type, full, meta){
                         var view_prescription_details='<button class="btn btn-default btn-xs" name="view_prescription_details" data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';

                        return '<center>'+view_prescription_details+edit_prescription+delete_prescription+'</center>';
                    }
                },
                { visible:false, targets:[3],data: "patient_prescription_id" }
            ],
            language: {
                 searchPlaceholder: ""
             },
             "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "8px"
                });
            }

        });

    }

    $('#new_prescription').click(function(){
        _txnprescription="new";

        checkHeader(_txnprescription);

        $('#prescription_icon').removeClass();
        $('#prescription_icon').addClass('fa fa-plus-circle');

        $('#date_prescribed').val(today);

        $('.tbody_new_prescription').empty();
        $(".tbody_new_prescription").append(
                       '<tr>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input type="hidden" name="count[]">'+
                                    '<input type="text" class="form-control" id="generic" name="medication[]" placeholder="Medication"  data-error-msg="Generic is required." required>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input type="text" class="form-control" id="dosage" name="qty[]" placeholder="Quantity"  data-error-msg="Dosage is Rquired." required>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control" rows="2" id="note" name="Am[]" placeholder="AM"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control" rows="2" id="note" name="Nn[]" placeholder="NN"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control" rows="2" id="note" name="Pm[]" placeholder="PM"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control" rows="2" id="note" name="Bedtime[]" placeholder="Bedtime"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<textarea class="form-control" rows="2" id="note" name="remarks[]" placeholder="Remarks"></textarea>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<center><button class="btn btn-danger btn-sm" name="btn_delete" data-toggle="tooltip" data-placement="left" title="Delete Row" ><i class="fa fa-trash"></i></button></center>'+
                            '</td>'+
                        '</tr>');
        

        $('#modal_new_prescription').modal('toggle');
    });

    $('#tbl_prescription_add tbody').on('click','button[name="btn_delete"]',function(){
      $(this).closest('tr').remove();
    });

    $("#btn_addrow").click(function(){
                $(".tbody_new_prescription").append(
                       '<tr>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input type="hidden" name="count[]">'+
                                    '<input type="text" class="form-control" id="generic" name="medication[]" placeholder="Medication"  data-error-msg="Generic is required." required>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input type="text" class="form-control" id="dosage" name="qty[]" placeholder="Quantity"  data-error-msg="Dosage is Rquired." required>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control" rows="2" id="note" name="Am[]" placeholder="AM"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control" rows="2" id="note" name="Nn[]" placeholder="NN"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control" rows="2" id="note" name="Pm[]" placeholder="PM"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="form-control" rows="2" id="note" name="Bedtime[]" placeholder="Bedtime"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<textarea class="form-control" rows="2" id="note" name="remarks[]" placeholder="Remarks"></textarea>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<center><button class="btn btn-danger btn-sm" name="btn_delete" title="Delete Row" ><i class="fa fa-trash"></i></button></center>'+
                            '</td>'+
                        '</tr>');
            
    });

    $('#tbl_patient_prescription tbody').on('click','button[name="edit_prescription_details"]',function(){
        _txnprescription="edit";

        checkHeader(_txnprescription);

        $('#prescription_icon').removeClass();
        $('#prescription_icon').addClass('fa fa-edit');

        _selectRowObjprescription=$(this).closest('tr');
        var dataprescription=patient_prescription_dt.row(_selectRowObjprescription).data();
        _selectedIDprescription=dataprescription.patient_prescription_id;
        /*alert(_selectedIDprescription);*/
        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(dataprescription,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        }); 
        Getprescription_items().done(function(response){
                                jsoncount=response.data.length-1;
                                var show2table="";
                                /*alert(jsoncount);*/
                                for(var i=0;parseInt(jsoncount)>=i;i++){
                                    //alert(response.available_leave[i].leave_type);
                                    show2table+='<tr>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input type="hidden" name="count[]">'+
                                                            '<input type="text" class="form-control" value="'+response.data[i].medication+'" id="medication" name="medication[]" placeholder="Medication"  data-error-msg="Generic is required." required>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input type="text" class="form-control" value="'+response.data[i].qty+'" id="qty" name="qty[]" placeholder="Quantity"  data-error-msg="Dosage is Rquired." required>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input class="form-control" rows="2" value="'+response.data[i].Am+'" id="Am" name="Am[]" placeholder="AM"></input>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input class="form-control" rows="2" value="'+response.data[i].Nn+'" id="Nn" name="Nn[]" placeholder="NN"></input>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input class="form-control" rows="2" value="'+response.data[i].Pm+'" id="Pm" name="Pm[]" placeholder="PM"></input>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input class="form-control" rows="2" value="'+response.data[i].Bedtime+'" id="Bedtime" name="Bedtime[]" placeholder="Bedtime"></input>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<textarea class="form-control" rows="2" id="remarks" name="remarks[]" placeholder="Remarks">'+response.data[i].remarks+'</textarea>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<center><button class="btn btn-danger btn-sm" name="btn_delete" Row" ><i class="fa fa-trash"></i></button></center>'+
                                                    '</td>'+
                                                '</tr>';
                                                $('.tbody_new_prescription').empty();
                                                $('.tbody_new_prescription').html(show2table);
                                 }
                                }).always(function(){
                                    $.unblockUI();
                                    $('#modal_new_prescription').modal('toggle');
                                    /*$('#modal_patient_prescription').modal('toggle');*/
                                });
    });

    $('#tbl_patient_prescription tbody').on('click','button[name="remove_prescription"]',function(){
        _txdelete="prescription";
        _selectRowObjprescription=$(this).closest('tr');
        var dataprescription=patient_prescription_dt.row(_selectRowObjprescription).data();
        _selectedIDprescription=dataprescription.patient_prescription_id;

        delete_notif();
    });

    $('#btn_create_prescription').click(function(){
        if(_txnprescription=="new"){
            if(validateRequiredFields($('#frm_patient_prescription'))){
                createPatient_prescription().done(function(response){
                                            showNotification(response);
                                            if(response.stat=="success"){
                                                $('#tbl_patient_prescription').DataTable().ajax.reload();
                                            }
                                        }).always(function(){
                                            $.unblockUI();
                                            $('#modal_new_prescription').modal('toggle');
                                        });
            }
        }
        if(_txnprescription=="edit"){
            swal({
              title: "Confirmation",
              text: "Save as new data or Update current data?",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Save",
              cancelButtonText: "Update",
              closeOnConfirm: false,
              closeOnCancel: false
            },
            function(isConfirm){
              if (isConfirm) {
                if(validateRequiredFields($('#frm_patient_prescription'))){
                    createPatient_prescription().done(function(response){
                                                showNotification(response);
                                                if(response.stat=="success"){
                                                    $('#tbl_patient_prescription').DataTable().ajax.reload();
                                                }
                                            }).always(function(){
                                                $.unblockUI();
                                                $('#modal_new_prescription').modal('toggle');
                                            });
                }
                swal("Success!", "Nephro Record Succesfully Created", "success");
              } 
              else {
                if(validateRequiredFields($('#frm_patient_prescription'))){
                    editPatient_prescription().done(function(response){
                                                showNotification(response);
                                                if(response.stat=="success"){
                                                    $('#tbl_patient_prescription').DataTable().ajax.reload();
                                                }
                                            }).always(function(){
                                                $.unblockUI();
                                                $('#modal_new_prescription').modal('toggle');
                                            });
                }
              }
              swal("Success!", "Nephro Record Succesfully Updated", "success");
            });
            
        }
    });

    $('#tbl_patient_prescription tbody').on('click','button[name="view_prescription_details"]',function(){

        _txnprescription="view";

        checkHeader(_txnprescription);

        _selectRowObjprescription=$(this).closest('tr');

        $('#prescription_icon_1').removeClass();
        $('#prescription_icon_1').addClass('fa fa-print');

        var dataprescription=patient_prescription_dt.row(_selectRowObjprescription).data();
        _selectedIDprescription=dataprescription.patient_prescription_id;
        $('.prescriptiondate').text(dataprescription.date_prescribed);
        $('#next_app_date').html(dataprescription.appointment_date);

        /*alert(_selectedIDprescription);*/
        companyimage();
        Getprescription_items().done(function(response){
                                jsoncount=response.data.length-1;
                                var show2table_pr_view="";
                                /*alert(jsoncount);*/
                                for(var i=0;parseInt(jsoncount)>=i;i++){
                                    //alert(response.available_leave[i].leave_type);
                                    show2table_pr_view+='<tr>'+
                                                    '<td>'+
                                                        response.data[i].medication+
                                                    '</td>'+
                                                    '<td>'+
                                                        response.data[i].qty+
                                                    '</td>'+
                                                    '<td>'+
                                                        response.data[i].Am+
                                                    '</td>'+
                                                    '<td>'+
                                                        response.data[i].Nn+
                                                    '</td>'+
                                                    '<td>'+
                                                        response.data[i].Pm+
                                                    '</td>'+
                                                    '<td>'+
                                                        response.data[i].Bedtime+
                                                    '</td>'+
                                                    '<td>'+
                                                            response.data[i].remarks+
                                                    '</td>'+
                                                '</tr>';
                                                $('.prescription_view').empty();
                                                $('.prescription_view').html(show2table_pr_view);
                                 }
                                }).always(function(){
                                    $.unblockUI();
                                });
        /*$('#modal_patient_prescription').modal('toggle');*/
        $('#modal_prescription_details').modal('toggle');
    });

    var createPatient_prescription=function(){
            var _data=$('#frm_patient_prescription').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_prescription/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    var editPatient_prescription=function(){
            var _data=$('#frm_patient_prescription').serializeArray();
            _data.push({name : "patient_prescription_id" ,value : _selectedIDprescription});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_prescription/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    }; 

    var removePrescription=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_prescription/transaction/delete",
            "data":{patient_prescription_id: _selectedIDprescription},
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };


    var removeMedicalAbstract=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_medical_abstract/transaction/delete",
            "data":{patient_medical_abstract_id: _selectedIDmedicalabstract},
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };     

    var removeAdmittingOrder=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_admitting_order/transaction/delete",
            "data":{patient_admitting_order_id: _selectedIDadmittingorder},
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };             

    var removeNephroOrder=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_nephro_order/transaction/delete",
            "data":{patient_nephro_id: _selectedIDnephroorder},
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };  

    var removeLaboratoryReport=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_lab_diagnostics/transaction/delete",
            "data":{patient_lab_report_id: _selectedIDLabDiagnostic},
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };        


    var removeMedicalCertificate=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_medical_record/transaction/delete",
            "data":{patient_medical_certificate_id: _selectedIDmedicalcert},
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };        

    var Getprescription_items=function(){
        var _data=$('#').serializeArray();
            _data.push({name : "patient_prescription_id" ,value : _selectedIDprescription});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_prescription/transaction/getitems",
                "data":_data,
                "beforeSend": showSpinningProgressLOADING($('#btn_save'))
            });
       
    }; 

    $('#print_prescription').click(function(event){
        printing_notif();
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        /*alert(output);*/
        $("#printcontentprescription").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:true,
            canvas: false 
        });
    });

    //end prescription

    //start laboratory

    $('.patient_laboratory').click(function(){
        if(_isChecked==true){
            $('#tbl_lab').dataTable().fnDestroy();
            showSpinningProgressLOADING();

            setTimeout(function() {
                 getLaboratory();
            }, 200);

            $('#modal_patient_laboratory').modal('toggle');
        }
        else{
            notice_notif();
        }
        
    });

    var getLaboratory=function(){
            patient_lab_dt=$('#tbl_lab').DataTable({
                "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "autoWidth":true,
            "scrollY": "400px",
            "scrollCollapse": true,
            "table-layout": "fixed",
            "paging":true,
            "order": [[ 3, "desc" ]],
            "ajax": {
            "url": "Patient_laboratory/transaction/list",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "ref_patient_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "date_lab" },
                { targets:[1],data: "results" },
                {
                    targets:[2],
                    render: function (data, type, full, meta){
                         var view_lab_details='<button class="btn btn-default btn-xs" name="view_lab_details"   data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';
                        
                        return '<center>'+view_lab_details+edit_lab+remove_lab+'</center>';
                    }
                },
                { visible:false, targets:[3],data: "patient_lab_id" }
            ],
            language: {
                 searchPlaceholder: ""
             },
             "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "8px"
                });
            }

        });

    }

    $('#new_laboratory').click(function(){
        _txnMode1="new";
        $("#frm_patient_laboratory").trigger('reset');
        $('.patient_txn').text('New');
        $('#date_lab').val(today);

        $('#lab_result_icon').removeClass();
        $('#lab_result_icon').addClass('fa fa-plus-circle');

        $('img[name="img_preview"]').attr('src','assets/img/icons/default.png');
        $('#modal_new_lab').modal('toggle');
    });

    $('#btn_create_lab').click(function(){
        /*alert(_txnMode1);*/
        if(validateRequiredFields($('#frm_patient_laboratory'))){
            if(_txnMode1=="new"){
                createPatient_lab().done(function(response){
                showNotification(response);
                if(response.stat=="success"){
                    $('#tbl_lab').DataTable().ajax.reload();
                }
                    }).always(function(){
                    $.unblockUI();
                    $('#modal_new_lab').modal('toggle');
                });
            }
            if(_txnMode1=="edit"){
                updatePatient_lab().done(function(response){
                showNotification(response);
                if(response.stat=="success"){
                    $('#tbl_lab').DataTable().ajax.reload();
                }
                    }).always(function(){
                    $.unblockUI();
                    $('#modal_new_lab').modal('toggle');
                });
            }
        }
        
    });

    $('#tbl_lab tbody').on('click','button[name="edit_lab_details"]',function(){
        _txnMode1="edit";

        $('#lab_result_icon').removeClass();
        $('#lab_result_icon').addClass('fa fa-edit');

        $('.patient_txn').text('Edit');
        _selectRowObjlab=$(this).closest('tr');
        var datalab=patient_lab_dt.row(_selectRowObjlab).data();
        _selectedIDlab=datalab.patient_lab_id;
        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(datalab,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        });
        $('img[name="img_preview"]').attr('src',datalab.photo_path);
        $('#modal_new_lab').modal('toggle');
    });

    $('#tbl_lab tbody').on('click','button[name="remove_lab"]',function(){
            _txdelete="lab";
            _selectRowObjlab=$(this).closest('tr');
            var datalab=patient_lab_dt.row(_selectRowObjlab).data();
            _selectedIDlab=datalab.patient_lab_id;
            delete_notif();
    });

    $('#tbl_lab tbody').on('click','button[name="view_lab_details"]',function(){
        _selectRowObjlab=$(this).closest('tr');
        $('.patient_txn').text('View');

        $('#lab_result_icon_1').removeClass();
        $('#lab_result_icon_1').addClass('fa fa-print');

        var datalab=patient_lab_dt.row(_selectRowObjlab).data();
        $('#lab_date').text(datalab.date_lab);
        $('#lab_details').text(datalab.results);
        if(datalab.photo_path!=null){
            $('img[name="img_preview"]').attr('src',datalab.photo_path);
            $('a[name="img_a"]').attr('href',datalab.photo_path);
        }
        else{
            $('img[name="img_preview"]').attr('src',assets/img/noimage.jpg);
            $('a[name="img_a"]').attr('href','assets/img/noimage.jpg');
        }
        $('#modal_laboratory_details').modal('toggle');
    });

    $('#btn_browse').click(function(event){
                event.preventDefault();
                $('input[name="file_upload[]"]').click();
    });

    $('input[name="file_upload[]"]').change(function(event){
        var _files=event.target.files;

        //$('#div_img_product').hide();
       // $('#div_img_loader').show();
        showSpinningProgressUPLOAD();

        var data=new FormData();
        $.each(_files,function(key,value){
            data.append(key,value);
        });

        console.log(_files);

        $.ajax({
            url : 'Patient_laboratory/transaction/upload',
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
                        showNotification(response);
                        $.unblockUI();
                        $('img[name="img_preview"]').attr('src',response.photo_path);
                        $('a[name="img_a"]').attr('href',response.photo_path);

                    }
        });
    });

    var createPatient_lab=function(){
            var _data=$('#frm_patient_laboratory').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});
            _data.push({name : "photo_path" ,value : $('img[name="img_preview"]').attr('src')});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_laboratory/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    }; 

    var updatePatient_lab=function(){
            var _data=$('#frm_patient_laboratory').serializeArray();
            _data.push({name : "patient_lab_id" ,value : _selectedIDlab});
            _data.push({name : "photo_path" ,value : $('img[name="img_preview"]').attr('src')});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_laboratory/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    }; 

    var removeLab=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_laboratory/transaction/delete",
            "data":{patient_lab_id: _selectedIDlab},
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    $('#print_lab_report').click(function(event){
        printing_notif();
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        /*alert(output);*/
        $("#print_lab_report_content").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:true,
            canvas: false 
        });
    });

    //end laboratory

    //start billing

    var getBilling=function(){
            patient_billing_dt=$('#tbl_billing').DataTable({
                "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "autoWidth":true,
            "scrollY": "400px",
            "scrollCollapse": true,
            "table-layout": "fixed",   
            "order": [[ 3, "desc" ]],         
            "ajax": {
            "url": "Patient_billing/transaction/list",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "ref_patient_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "billing_code" },
                { targets:[1],data: "billing_date" },
                {
                    targets:[2],
                    render: function (data, type, full, meta){
                        var view_billing_details='<button class="btn btn-default btn-xs" name="view_billing_details"   data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';
                        
                        return '<center>'+view_billing_details+edit_billing+remove_billing+'</center>';
                    }
                },
                { visible:false, targets:[3],data: "patient_billing_id" }
            ],
            language: {
                 searchPlaceholder: ""
             },
             "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "8px"
                });
            }

        });

    }

    $('.patient_billing').click(function(){
        if(_isChecked==true){
            $('#tbl_billing').dataTable().fnDestroy();
            showSpinningProgressLOADING();
            setTimeout(function() {
                 getBilling();
            }, 200);
            $('#modal_patient_billing').modal('toggle');
        }
        else{
            notice_notif();
        }
    });

    $('#new_billing').click(function(){
        _txnMode2="new";

        $('#patient_billing_icon').removeClass();
        $('#patient_billing_icon').addClass('fa fa-plus-circle');

        $('#billing_Date').val(today);
        $('.patient_txn').text('New');
        $('.tbody_new_billing').empty();
        $(".tbody_new_billing").append(
                       '<tr>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input type="hidden" name="count[]">'+
                                    '<select class="form-control" name="ref_service_desc_id[]" id="ref_service_desc_id" data-placeholder="Choose a Service..." data-error-msg="Service Desc is required" required>'+
                                    '<?php foreach($service_desc as $row){ echo "<option value=".$row->ref_service_desc_id.">".$row->service_desc."</option>"; } ?>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input type="text" class="number form-control bill_qty" id="qty" name="qty[]" placeholder="Quantity"  data-error-msg="Quantity is Rquired."  required>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="numeric form-control bill_amount" id="amount" name="amount[]" placeholder="Amount"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="numeric form-control bill_total" id="total" name="total[]" placeholder="Total Amount" readonly></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<center><button class="btn btn-danger btn-sm" name="btn_delete" data-toggle="tooltip" data-placement="left" title="Delete Row" ><i class="fa fa-trash"></i></button></center>'+
                            '</td>'+
                        '</tr>');
        
        reInitializeNumeric();
        $('#modal_new_billing').modal('toggle');
    });

    $("#btn_addrow_billing").click(function(){
                $(".tbody_new_billing").append(
                       '<tr>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input type="hidden" name="count[]">'+
                                    '<select class="form-control" name="ref_service_desc_id[]" id="ref_service_desc_id" data-placeholder="Choose a Service..." data-error-msg="Service Desc is required" required>'+
                                    '<?php foreach($service_desc as $row){ echo "<option value=".$row->ref_service_desc_id.">".$row->service_desc."</option>"; } ?>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input type="text" class="number form-control bill_qty" id="qty" name="qty[]" placeholder="Quantity"  data-error-msg="Quantity is Rquired." required>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="numeric form-control bill_amount" id="amount" name="amount[]" placeholder="Amount"></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="fg-line">'+
                                    '<input class="numeric form-control bill_total" id="total" name="total[]" placeholder="Total Amount" readonly></input>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<center><button class="btn btn-danger btn-sm" name="btn_delete" title="Delete Row" ><i class="fa fa-trash"></i></button></center>'+
                            '</td>'+
                        '</tr>');   

                reInitializeNumeric();
    });

    $('#tbl_billing tbody').on('click','button[name="view_billing_details"]',function(){
        _selectRowObjbilling=$(this).closest('tr');

        $('.patient_txn').text('View');

        $('#patient_billing_icon_1').removeClass();
        $('#patient_billing_icon_1').addClass('fa fa-print');

        var databilling=patient_billing_dt.row(_selectRowObjbilling).data();
        _selectedIDbilling=databilling.patient_billing_id;

        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(databilling,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        });
        $('.billingdate').text(databilling.billing_date);
        $('.billing_code').text(databilling.billing_code);
        companyimage();
        Getbilling_items().done(function(response){
                                jsoncount=response.data.length-1;
                                var show2table_pr_view="";
                                /*alert(jsoncount);*/
                                for(var i=0;parseInt(jsoncount)>=i;i++){
                                    //alert(response.available_leave[i].leave_type);
                                    show2table_pr_view+='<tr>'+
                                                    '<td>'+
                                                        response.data[i].service_desc+
                                                    '</td>'+
                                                    '<td align="right">'+
                                                        accounting.formatNumber(parseFloat(response.data[i].qty),0)+
                                                    '</td>'+
                                                    '<td align="right">'+
                                                        accounting.formatNumber(parseFloat(response.data[i].amount),2)+
                                                    '</td>'+
                                                    '<td align="right">'+
                                                        accounting.formatNumber(parseFloat(response.data[i].total),2)+
                                                    '</td>'+
                                                '</tr>';
                                                $('.billing_view').empty();
                                                $('.billing_view').html(show2table_pr_view);
                                 }
                                }).always(function(){
                                    $.unblockUI();
                                });
        /*$('#modal_patient_prescription').modal('toggle');*/
        $('#modal_billing_details').modal('toggle');
    });

    $('#tbl_billing_add tbody').on('click','button[name="btn_delete"]',function(){
      $(this).closest('tr').remove();
    });

    $(document).on('keyup', '.bill_qty', function(){
        var bill_qty = accounting.unformat($(this).closest('tr').find('.bill_qty').val());
        var bill_amount = accounting.unformat($(this).closest('tr').find('.bill_amount').val());
    
        var total = bill_qty*bill_amount;
        $(this).closest('tr').find('.bill_total').val(accounting.formatNumber(total,2));
    });

    $(document).on('keyup', '.bill_amount', function(){
        var bill_qty = accounting.unformat($(this).closest('tr').find('.bill_qty').val());
        var bill_amount = accounting.unformat($(this).closest('tr').find('.bill_amount').val());
    
        var total = bill_qty*bill_amount;
        $(this).closest('tr').find('.bill_total').val(accounting.formatNumber(total,2));
    });

    $('#btn_create_billing').click(function(){
        /*alert(_txnMode1);*/
        if(validateRequiredFields($('#frm_patient_billing'))){
            if(_txnMode2=="new"){
                createPatient_billing().done(function(response){
                showNotification(response);
                if(response.stat=="success"){
                    $('#tbl_billing').DataTable().ajax.reload();
                    }
                    }).always(function(){
                    $.unblockUI();
                    $('#modal_new_billing').modal('toggle');
                });
            }
            if(_txnMode2=="edit"){
                updatePatient_billing().done(function(response){
                showNotification(response);
                if(response.stat=="success"){
                    $('#tbl_billing').DataTable().ajax.reload();
                    }
                    }).always(function(){
                    $.unblockUI();
                    $('#modal_new_billing').modal('toggle');
                });
            }
        }
        
    });

    $('#tbl_billing tbody').on('click','button[name="edit_billing_details"]',function(){
        _txnMode2="edit";

        $('#patient_billing_icon').removeClass();
        $('#patient_billing_icon').addClass('fa fa-edit');

        $('.patient_txn').text('Edit');
        _selectRowObjbilling=$(this).closest('tr');
        var databilling=patient_billing_dt.row(_selectRowObjbilling).data();
        _selectedIDbilling=databilling.patient_billing_id;
        /*alert(_selectedIDprescription);*/
        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(databilling,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        });
        Getbilling_items().done(function(response){
                                jsoncount=response.data.length-1;
                                var show2table="";
                                /*alert(jsoncount);*/
                                for(var i=0;parseInt(jsoncount)>=i;i++){
                                    //alert(response.available_leave[i].leave_type);
                                    show2table+='<tr>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input type="hidden" name="count[]">'+
                                                            '<select class="form-control" name="ref_service_desc_id[]" id="ref_service_desc_id" data-placeholder="Choose a Service..." data-error-msg="Service Desc is required" required>'+
                                                            '<option value='+response.data[i].ref_service_desc_id+'>[ '+response.data[i].service_desc+' ]</option>'+
                                                            '<?php foreach($service_desc as $row){ echo "<option value=".$row->ref_service_desc_id.">".$row->service_desc."</option>"; } ?>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input type="text" class="number form-control bill_qty" value="'+response.data[i].qty+'" id="qty" name="qty[]" placeholder="Quantity"  data-error-msg="Quantity is Rquired." required>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input class="numeric form-control bill_amount" value="'+response.data[i].amount+'"  id="amount" name="amount[]" placeholder="Amount"></input>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<div class="fg-line">'+
                                                            '<input class="numeric form-control bill_total" value="'+response.data[i].total+'"  id="total" name="total[]" placeholder="Total Amount" readonly></input>'+
                                                        '</div>'+
                                                    '</td>'+
                                                    '<td>'+
                                                        '<center><button class="btn btn-danger btn-sm"  name="btn_delete" title="Delete Row" ><i class="fa fa-trash"></i></button></center>'+
                                                    '</td>'+
                                                '</tr>';

                                                
                                 }
                                    $('.tbody_new_billing').empty();
                                    $('.tbody_new_billing').html(show2table);
                                    reInitializeNumeric();
                                }).always(function(){
                                    $.unblockUI();
                                    $('#modal_new_billing').modal('toggle');
                                    /*$('#modal_patient_prescription').modal('toggle');*/
                                });
    });

    $('#tbl_billing tbody').on('click','button[name="remove_billing"]',function(){
            _txdelete="billing";
            _selectRowObjbilling=$(this).closest('tr');
            var databilling=patient_billing_dt.row(_selectRowObjbilling).data();
            _selectedIDbilling=databilling.patient_billing_id;
            delete_notif();
    });

    var createPatient_billing=function(){
            var _data=$('#frm_patient_billing').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_billing/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    }; 

    var updatePatient_billing=function(){
            var _data=$('#frm_patient_billing').serializeArray();
            _data.push({name : "patient_billing_id" ,value : _selectedIDbilling});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_billing/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    }; 

    var removeBilling=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_billing/transaction/delete",
            "data":{patient_billing_id: _selectedIDbilling},
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var Getbilling_items=function(){
        var _data=$('#').serializeArray();
            _data.push({name : "patient_billing_id" ,value : _selectedIDbilling});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_billing/transaction/getitems",
                "data":_data,
                "beforeSend": showSpinningProgressLOADING($('#btn_save'))
            });
       
    };

    $('#print_billing').click(function(event){
        printing_notif();
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        /*alert(output);*/
        $("#printcontentbilling").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:true,
            canvas: false 
        });
    });

    //end patient billing

    //start visiting details

    var getVisitingRecord=function(){
            patient_visiting_record_dt=$('#tbl_visiting_record').DataTable({
                "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "autoWidth":true,
            "scrollY": "400px",
            "scrollCollapse": true,
            "table-layout": "fixed",      
            "order": [[ 4, "desc" ]],      
            "ajax": {
            "url": "Patient_visiting/transaction/list",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "ref_patient_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "visiting_date" },
                { targets:[1],data: "visiting_note" },
                { targets:[2],data: "visiting_diagnostics" },
                {
                    targets:[3],
                    render: function (data, type, full, meta){
                        var view_visiting_details='<button class="btn btn-default btn-xs" name="view_visiting_details_record"   data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';
                        
                        return '<center>'+view_visiting_details+edit_visiting+remove_visiting+'</center>';
                    }
                },
                { visible:false, targets:[4],data: "patient_visiting_record_id" }
            ],
            language: {
                 searchPlaceholder: ""
             },
             "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "8px"
                });
            }

        });

    }


    $('.patient_visiting_record').click(function(){
        if(_isChecked==true){
            $('#tbl_visiting_record').dataTable().fnDestroy();
            showSpinningProgressLOADING();
            setTimeout(function() {
                 getVisitingRecord();
            }, 200);
            $('#modal_vising_record').modal('toggle');
        }
        else{
            notice_notif();
        }
    });

    $('#new_visiting_record').click(function(){
        _txnMode3="new";
        $("#frm_patient_visiting_record").trigger('reset');
        /*alert(_txnMode1);*/
        $('.patient_txn').text('New');
        $('#visiting_date').val(today);

        $('#patient_visiting_icon').removeClass();
        $('#patient_visiting_icon').addClass('fa fa-plus-circle');

        $('#modal_new_visit').modal('toggle');
    });

    $('#btn_create_visiting_record').click(function(){
        /*alert(_txnMode1);*/
        if(validateRequiredFields($('#frm_patient_visiting_record'))){
            if(_txnMode3=="new"){
                createPatientVisitingRecord().done(function(response){
                showNotification(response);
                if(response.stat=="success"){
                    $('#tbl_visiting_record').DataTable().ajax.reload();
                }
                    }).always(function(){
                    $.unblockUI();
                    $('#modal_new_visit').modal('toggle');
                });
            }
            if(_txnMode3=="edit"){
                updatePatientVisitingRecord().done(function(response){
                showNotification(response);
                if(response.stat=="success"){
                    $('#tbl_visiting_record').DataTable().ajax.reload();
                    }
                    }).always(function(){
                    $.unblockUI();
                    $('#modal_new_visit').modal('toggle');
                });
            }
        }
        
    });

    $('#tbl_visiting_record tbody').on('click','button[name="edit_visiting_record"]',function(){
        _txnMode3="edit";

        $('#patient_visiting_icon').removeClass();
        $('#patient_visiting_icon').addClass('fa fa-edit');

        $('.patient_txn').text('Edit');
        _selectRowObjvisiting=$(this).closest('tr');
        var datavisiting=patient_visiting_record_dt.row(_selectRowObjvisiting).data();
        _selectedIDvisiting=datavisiting.patient_visiting_record_id;
        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(datavisiting,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        });
        $('#modal_new_visit').modal('toggle');
    });

    $('#tbl_visiting_record tbody').on('click','button[name="remove_visiting_record"]',function(){
            _txdelete="visitingrecord";
            _selectRowObjvisiting=$(this).closest('tr');
            var datavisiting=patient_visiting_record_dt.row(_selectRowObjvisiting).data();
            _selectedIDvisiting=datavisiting.patient_visiting_record_id;
            delete_notif();
    });

    $('#tbl_visiting_record tbody').on('click','button[name="view_visiting_details_record"]',function(){

        $('.patient_txn').text('View');
        $('#patient_visiting_icon_1').removeClass();
        $('#patient_visiting_icon_1').addClass('fa fa-print');

        _selectRowObjvisiting=$(this).closest('tr');
        var datavisiting=patient_visiting_record_dt.row(_selectRowObjvisiting).data();
        $('#datevisited').text(datavisiting.visiting_date);
        $('#nextvisitdate').text(datavisiting.next_visit_date);
        $('#visitingnote').text(datavisiting.visiting_note);
        $('#visitingdiagnostics').text(datavisiting.visiting_diagnostics);
        $('#visitingfindings').text(datavisiting.visiting_findings);
        $('#visitingtreatment').text(datavisiting.treatment);
        $('#visitingremarks').text(datavisiting.visiting_remarks);
        $('#modal_visiting_details').modal('toggle');
    });

    var createPatientVisitingRecord=function(){
            var _data=$('#frm_patient_visiting_record').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_visiting/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    }; 

    var updatePatientVisitingRecord=function(){
            var _data=$('#frm_patient_visiting_record').serializeArray();
            _data.push({name : "patient_visiting_record_id" ,value : _selectedIDvisiting});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_visiting/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    var removeVisiting=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_visiting/transaction/delete",
            "data":{patient_visiting_record_id: _selectedIDvisiting},
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    $('#printvisitdetails').click(function(event){
        printing_notif();
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        /*alert(output);*/
        $("#printcontentvisitingdetails").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:true
        });
    });

    //end visiting details

    //start clinical
    var getClinical=function(){
            patient_clinical_dt=$('#tbl_clinical').DataTable({
                "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "autoWidth":true,
            "scrollY": "400px",
            "scrollCollapse": true,
            "table-layout": "fixed",  
            "order": [[ 6, "desc" ]],           
            "ajax": {
            "url": "Patient_clinical/transaction/list",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "ref_patient_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "date_created" },
                { targets:[1],data: "clinical_diagnostics" },
                { targets:[2],data: "clinical_treatment" },
                { targets:[3],data: "clinical_medication" },
                { targets:[4],data: "clinical_remarks" },
                {
                    targets:[5],
                    render: function (data, type, full, meta){
                        var view_clinical_details='<button class="btn btn-default btn-xs" name="view_clinical_details"   data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';
                        
                        return '<center>'+view_clinical_details+edit_clinical+remove_clinical+'</center>';
                    }
                },
                { visible:false, targets:[6],data: "patient_clinical_id" }
            ],
            language: {
                 searchPlaceholder: ""
             },
             "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "8px"
                });
            }

        });

    }

    var _txnMode4; var _selectedIDclinical; var _selectRowObjclinical;
    $('.patient_clinical').click(function(){
        if(_isChecked==true){
            $('#tbl_clinical').dataTable().fnDestroy();
            showSpinningProgressLOADING();
            setTimeout(function() {
                 getClinical();
            }, 200);            
            $('#modal_clinical').modal('toggle');
        }
        else{
            notice_notif();
        }
    });

    $('#new_clinical').click(function(){
        _txnMode4="new";
        $("#frm_clinical_db").trigger('reset');
        $('#cd_date').val(today);
        $('.patient_txn').text('New');

        $('#clinical_database_icon').removeClass();
        $('#clinical_database_icon').addClass('fa fa-plus-circle');

        $('#modal_new_clinical').modal('toggle');
    });

    $('#tbl_clinical tbody').on('click','button[name="edit_clinical"]',function(){
        _txnMode4="edit";
        $('.patient_txn').text('Edit');

        $('#clinical_database_icon').removeClass();
        $('#clinical_database_icon').addClass('fa fa-edit');

        _selectRowObjclinical=$(this).closest('tr');
        var dataclinical=patient_clinical_dt.row(_selectRowObjclinical).data();
        _selectedIDclinical=dataclinical.patient_clinical_id;
        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(dataclinical,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        });
        $('#modal_new_clinical').modal('toggle');
    });

    $('#btn_create_clinical').click(function(){
        /*alert(_txnMode1);*/
        if(validateRequiredFields($('#frm_clinical_db'))){
            if(_txnMode4=="new"){
                createClinical().done(function(response){
                showNotification(response);
                if(response.stat=="success"){
                    $('#tbl_clinical').DataTable().ajax.reload();
                }
                    }).always(function(){
                    $.unblockUI();
                    $('#modal_new_clinical').modal('toggle');
                });
            }
            if(_txnMode4=="edit"){
                updateClinical().done(function(response){
                showNotification(response);
                if(response.stat=="success"){
                    $('#tbl_clinical').DataTable().ajax.reload();
                    }
                    }).always(function(){
                    $.unblockUI();
                    $('#modal_new_clinical').modal('toggle');
                });
            }
        }
        
    });

    $('#tbl_clinical tbody').on('click','button[name="view_clinical_details"]',function(){
        _selectRowObjclinical=$(this).closest('tr');
        $('.patient_txn').text('View');
        $('#clinical_database_icon_1').removeClass();
        $('#clinical_database_icon_1').addClass('fa fa-print');

        var dataclinical=patient_clinical_dt.row(_selectRowObjclinical).data();
        $('#clinical_dbdate').text(dataclinical.date_created);
        $('#clinical_diagnostics').text(dataclinical.clinical_diagnostics);
        $('#clinical_treatment').text(dataclinical.clinical_treatment);
        $('#clinical_medication').text(dataclinical.clinical_medication);
        $('#clinical_remarks').text(dataclinical.clinical_remarks);
        $('#modal_clinical_details').modal('toggle');
    });

    $('#tbl_clinical tbody').on('click','button[name="remove_clinical"]',function(){
        _txdelete="clinicaldatabase";
        _selectRowObjclinical=$(this).closest('tr');
        var data=patient_clinical_dt.row(_selectRowObjclinical).data();
        _selectedIDclinical=data.patient_clinical_id;
        delete_notif();

    });

    var createClinical=function(){
            var _data=$('#frm_clinical_db').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_clinical/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    }; 

    var updateClinical=function(){
            var _data=$('#frm_clinical_db').serializeArray();
            _data.push({name : "patient_clinical_id" ,value : _selectedIDclinical});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_clinical/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    $('#printclinicaldetails').click(function(event){
        printing_notif();
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        /*alert(output);*/
        $("#printcontentclinicaldetails").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:true
        });
    });

    //end clinical

    //start med abstract

    var _patient_medical_abstract_id;
    var _txnmedicalabstract;

    $('.patient_medical_abstract').click(function(){
        if(_isChecked==true){
            $('#tbl_patient_medical_abstract').dataTable().fnDestroy();
            showSpinningProgressLOADING();
            setTimeout(function() {
                 getMedicalAbstractList();
            }, 200);
            $('#modal_medical_abstract_list').modal('toggle');
        }
        else{
            notice_notif();
        }
        
    });

    var getMedicalAbstractList=function(){
            patient_medical_abstract_dt=$('#tbl_patient_medical_abstract').DataTable({
                "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "autoWidth":true,
            "scrollY": "400px",
            "scrollCollapse": true,
            "table-layout": "fixed",            
            "paging":true,
            "order": [[ 4, "desc" ]], 
            "ajax": {
            "url": "Patient_medical_abstract/transaction/medical_abstract_list",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "ref_patient_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "medical_abstract_code" },
                { targets:[1],data: "case_no" },
                { targets:[2],data: "date_created" },
                {
                    targets:[3],
                    render: function (data, type, full, meta){
                         var view_medical_abstract_details='<button class="btn btn-default btn-xs" name="view_medical_abstract_details" data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';

                        return '<center>'+view_medical_abstract_details+edit_medical_abstract+delete_medical_abstract+'</center>';
                    }
                },
                { visible:false, targets:[4],data: "patient_medical_abstract_id" }
            ],
            language: {
                 searchPlaceholder: ""
             },
             "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "8px"
                });
            }

        });

    }

    $('#new_medical_abstract').click(function(){
        _txnmedicalabstract="new";
        checkHeader(_txnmedicalabstract);
        $('.patient_txn').text('New');
        clearFields($('#frm_medical_abstract'));

        $('#medical_abstract_icon').removeClass();
        $('#medical_abstract_icon').addClass('fa fa-plus-circle');

        $('#save_medical_abstract').show();
        $('#print_medical_abstract').hide();
        $('#ftr_medical_abstract').hide();

        $("#frm_medical_abstract input:checkbox").prop('checked',false);
        $("#frm_medical_abstract input:text").prop('disabled',false); 

        $("#frm_medical_abstract input:checkbox").css('pointer-events','all'); 
        $("#frm_medical_abstract input:text").css('pointer-events','all'); 

        $('#modal_medical_abstract').modal('toggle');
    });    

    $('#tbl_patient_medical_abstract tbody').on('click','button[name="edit_medical_abstract_details"]',function(){
        _txnmedicalabstract="edit";        
        checkHeader(_txnmedicalabstract);
        $('.patient_txn').text('Edit');
        clearFields($('#frm_medical_abstract'));

        $('#medical_abstract_icon').removeClass();
        $('#medical_abstract_icon').addClass('fa fa-edit');

        $("#frm_medical_abstract input:checkbox").prop('checked',false);
        $("#frm_medical_abstract input:text").prop('disabled',false);

        $("#frm_medical_abstract input:checkbox").css('pointer-events','all'); 
        $("#frm_medical_abstract input:text").css('pointer-events','all'); 

        $('#save_medical_abstract').show();
        $('#print_medical_abstract').hide();
        $('#ftr_medical_abstract').hide();

        _selectRowObjmedicalabstract =$(this).closest('tr');
        var datamedicalabstract=patient_medical_abstract_dt.row(_selectRowObjmedicalabstract).data();
        _selectedIDmedicalabstract=datamedicalabstract.patient_medical_abstract_id;

        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(datamedicalabstract,function(name,value){

                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }

                    if(_elem.attr('id')==name){
                        if(value==1){ _elem.prop('checked', true); }
                        else{ _elem.prop('checked', false); }
                    }

                });
        }); 
        $('#modal_medical_abstract').modal('toggle');
    });


    $('#tbl_patient_medical_abstract tbody').on('click','button[name="view_medical_abstract_details"]',function(){
        _txnmedicalabstract="view";
        checkHeader(_txnmedicalabstract);
        $('.patient_txn').text('View');
        clearFields($('#frm_medical_abstract'));

        $('#medical_abstract_icon').removeClass();
        $('#medical_abstract_icon').addClass('fa fa-print');

        $("#frm_medical_abstract input:checkbox").prop('checked',false);
        $("#frm_medical_abstract input:text").prop('disabled',true);

        $("#frm_medical_abstract input:checkbox").css('pointer-events','none'); 
        $("#frm_medical_abstract input:text").css('pointer-events','none'); 

        $('#save_medical_abstract').hide();
        $('#print_medical_abstract').show();
        $('#ftr_medical_abstract').show();

        _selectRowObjmedicalabstract=$(this).closest('tr');
        var datamedicalabstract=patient_medical_abstract_dt.row(_selectRowObjmedicalabstract).data();
        _selectedIDmedicalabstract=datamedicalabstract.patient_medical_abstract_id;

        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(datamedicalabstract,function(name,value){

                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }

                    if(_elem.attr('id')==name){
                        if(value==1){ _elem.prop('checked', true); }
                        else{ _elem.prop('checked', false); }
                    }

                });
        }); 
        $('#modal_medical_abstract').modal('toggle');
    });

    $('#tbl_patient_medical_abstract tbody').on('click','button[name="remove_medical_abstract"]',function(){
        _txdelete="medicalabstract";
        _selectRowObjmedicalabstract=$(this).closest('tr');
        var datamedicalabstract=patient_medical_abstract_dt.row(_selectRowObjmedicalabstract).data();
        _selectedIDmedicalabstract=datamedicalabstract.patient_medical_abstract_id;

        delete_notif();
    });

    $('#save_medical_abstract').click(function(){
        if(validateRequiredFields($('#frm_medical_abstract'))){
            if(_txnmedicalabstract=="new"){
                Savemedicalabstract().done(function(response){
                    showNotification(response);
                    if(response.stat=="success"){
                        $('#tbl_patient_medical_abstract').DataTable().ajax.reload();
                    }
                }).always(function(){
                    $.unblockUI();
                    $('#modal_medical_abstract').modal('toggle');
                });
            }
            if(_txnmedicalabstract=="edit"){

                Updatemedicalabstract().done(function(response){
                    showNotification(response);
                    if(response.stat=="success"){
                        $('#tbl_patient_medical_abstract').DataTable().ajax.reload();
                    }
                }).always(function(){
                    $.unblockUI();
                    $('#modal_medical_abstract').modal('toggle');
                });
            }
        }   
    });

    var getmedicalabstract=function(){
        var _data=$('#').serializeArray();
            _data.push({name : "patient_medical_abstract_id" ,value : _patient_medical_abstract_id});
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"patient_medical_abstract/transaction/list",
                "data":_data,
                "beforeSend": showSpinningProgressLOADING($('#btn_save'))
            });
       
    };

    var Savemedicalabstract=function(){
        var _data=$('#frm_medical_abstract').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            $('#frm_medical_abstract input:checkbox').each(function()
            {
                var A = ($(this).attr('id'));
                _data.push({name : A ,value : $('#'+A+'').is(':checked') ? 1 : 0});
            });

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_medical_abstract/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    var Updatemedicalabstract=function(){
        var _data=$('#frm_medical_abstract').serializeArray();
            _data.push({name : "patient_medical_abstract_id" ,value : _selectedIDmedicalabstract});
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            $('#frm_medical_abstract input:checkbox').each(function()
            {
                var A = ($(this).attr('id'));
                _data.push({name : A ,value : $('#'+A+'').is(':checked') ? 1 : 0});
            });

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_medical_abstract/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    $('#print_medical_abstract').click(function(event){
        printing_notif();
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        /*alert(output);*/
        /*$('input[type="checkbox"]').each(function() {
               $(this).attr('checked', 'false') 
        });*/

        $('#frm_medical_abstract input:checkbox').each(function() {
            if($(this).is (':checked')) {
               $(this).attr('checked', true);
            }
        });

        /*$('input[type="checkbox"]').each(function() {
            if($(this).is (':checked')) {
               $(this).attr('checked', 'true') 
            }
        });*/

        $('#frm_medical_abstract input:text').each(function() {
               /*var val = $(this).val();
               var id = $(this).attr('id');
               $('#'++'').val(10);*/
                $(this).attr('value', $(this).val());

        });


        

        $("#print_medical_abstract_content").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:false,
            canvas: false 
        });
    });

    //end med abstract

    /*start nephro order*/

    var _patient_nephro_id;
    var _txnnephroorder;

    $('.patient_nephro_order').click(function(){
        if(_isChecked==true){
            $('#tbl_patient_nephro_order').dataTable().fnDestroy();
            showSpinningProgressLOADING();
            setTimeout(function() {
                 getNephroOrderList();
            }, 200);            
            $('#modal_nephro_order_list').modal('toggle');
        }
        else{
            notice_notif();
        }
        
    });

    var getNephroOrderList=function(){
            patient_nephro_order_dt=$('#tbl_patient_nephro_order').DataTable({
                "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "autoWidth":true,
            "scrollY": "400px",
            "scrollCollapse": true,
            "table-layout": "fixed",            
            "paging":true,
            "order": [[ 3, "desc" ]],
            "ajax": {
            "url": "Patient_nephro_order/transaction/list",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "ref_patient_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "nephro_order_code" },
                { targets:[1],data: "date_created" },
                {
                    targets:[2],
                    render: function (data, type, full, meta){
                         var view_nephro_order='<button class="btn btn-default btn-xs" name="view_nephro_order" data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';

                        return '<center>'+view_nephro_order+edit_nephro_order+delete_nephro_order+'</center>';
                    }
                },
                { visible:false, targets:[3],data: "patient_nephro_id" }
            ],
            language: {
                 searchPlaceholder: ""
             },
             "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "8px"
                });
            }

        });

    }

    $('#new_nephro_order').click(function(){
        _txnnephroorder="new";
        checkHeader(_txnnephroorder);
        $('.patient_txn').text('New');
        clearFields($('#frm_nephro_order'));

        $('#nephro_order_icon').removeClass();
        $('#nephro_order_icon').addClass('fa fa-plus-circle');

        $("#frm_nephro_order input:text").prop('disabled',false); 

        $('#save_nephro').show();
        $('#print_nephro').hide();
        $('#ftr_nephro_order').hide();

        $('#modal_patient_nephro_order').modal('toggle');
    });    

    $('#tbl_patient_nephro_order tbody').on('click','button[name="edit_nephro_order"]',function(){
        _txnnephroorder="edit";
        checkHeader(_txnnephroorder);
        $('.patient_txn').text('Edit');
        clearFields($('#frm_nephro_order'));

        $('#nephro_order_icon').removeClass();
        $('#nephro_order_icon').addClass('fa fa-edit');
        
        $("#frm_nephro_order input:text").prop('disabled',false); 

        $('#save_nephro').show();
        $('#print_nephro').hide();
        $('#ftr_nephro_order').hide();

        _selectRowObjNephroOrder =$(this).closest('tr');
        var datanephroorder=patient_nephro_order_dt.row(_selectRowObjNephroOrder).data();
        _selectedIDnephroorder=datanephroorder.patient_nephro_id;

        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(datanephroorder,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        }); 
        $('#modal_patient_nephro_order').modal('toggle');
    });    

    $('#tbl_patient_nephro_order tbody').on('click','button[name="view_nephro_order"]',function(){
        _txnnephroorder="view";
        checkHeader(_txnnephroorder);
        $('.patient_txn').text('View');
        clearFields($('#frm_nephro_order'));

        $('#nephro_order_icon').removeClass();
        $('#nephro_order_icon').addClass('fa fa-print');

        $("#frm_nephro_order input:text").prop('disabled',true); 

        $('#save_nephro').hide();
        $('#print_nephro').show();
        $('#ftr_nephro_order').show();

        _selectRowObjNephroOrder =$(this).closest('tr');
        var datanephroorder=patient_nephro_order_dt.row(_selectRowObjNephroOrder).data();
        _selectedIDnephroorder=datanephroorder.patient_nephro_id;

        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(datanephroorder,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        }); 
        $('#modal_patient_nephro_order').modal('toggle');
    });

    $('#tbl_patient_nephro_order tbody').on('click','button[name="remove_nephro_order"]',function(){
        _txdelete="nephroorder";
        _selectRowObjNephroOrder =$(this).closest('tr');
        var datanephroorder=patient_nephro_order_dt.row(_selectRowObjNephroOrder).data();
        _selectedIDnephroorder=datanephroorder.patient_nephro_id;

        delete_notif();
    });    

    $('#save_nephro').click(function(){
        if(validateRequiredFields($('#frm_nephro_order'))){
            if(_txnnephroorder=="new"){
                Savenephro().done(function(response){
                    showNotification(response);
                    if(response.stat=="success"){
                        $('#tbl_patient_nephro_order').DataTable().ajax.reload();
                    }
                }).always(function(){
                    $.unblockUI();
                    $('#modal_patient_nephro_order').modal('toggle');
                });
            }
            if(_txnnephroorder=="edit"){
                Updatenephro().done(function(response){
                    showNotification(response);
                    if(response.stat=="success"){
                        $('#tbl_patient_nephro_order').DataTable().ajax.reload();
                    }
                }).always(function(){
                    $.unblockUI();
                    $('#modal_patient_nephro_order').modal('toggle');
                });
            }
        }   
    });


    var getnephroorder=function(){
        var _data=$('#').serializeArray();
            _data.push({name : "patient_nephro_id" ,value : _patient_nephro_id});
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_nephro_order/transaction/list",
                "data":_data,
                "beforeSend": showSpinningProgressLOADING($('#btn_save'))
            });
       
    };

    var Savenephro=function(){
        var _data=$('#frm_nephro_order').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_nephro_order/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    var Updatenephro=function(){
        var _data=$('#frm_nephro_order').serializeArray();
            _data.push({name : "patient_nephro_id" ,value : _selectedIDnephroorder});
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_nephro_order/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    $('#print_nephro').click(function(event){
        printing_notif();
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        /*alert(output);*/
        $("#print_nephro_content").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:true,
            canvas: false 
        });
    });

    //end nephro order

    //laboratory report

    var _patient_lab_report_id;
    var _txnlabreport;

    $('.patient_laboratory_report').click(function(){
        if(_isChecked==true){
            $('#tbl_patient_lab_report').dataTable().fnDestroy();
            showSpinningProgressLOADING();
            setTimeout(function() {
                 getLabReportList();
            }, 200);            
            $('#modal_lab_report_list').modal('toggle');
        }
        else{
            notice_notif();
        }
    });

    var getLabReportList=function(){
            patient_lab_report_dt=$('#tbl_patient_lab_report').DataTable({
                "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "autoWidth":true,
            "scrollY": "400px",
            "scrollCollapse": true,
            "table-layout": "fixed",            
            "paging":true,
            "order": [[ 3, "desc" ]],
            "ajax": {
            "url": "Patient_lab_diagnostics/transaction/list",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "ref_patient_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "diagnostic_code" },
                { targets:[1],data: "lab_report_date" },
                {
                    targets:[2],
                    render: function (data, type, full, meta){
                         var view_diagnostic='<button class="btn btn-default btn-xs" name="view_diagnostic" data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';

                        return '<center>'+view_diagnostic+edit_diagnostic+remove_diagnostic+'</center>';
                    }
                },
                { visible:false, targets:[3],data: "patient_lab_report_id" }
            ],
            language: {
                 searchPlaceholder: ""
             },
             "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "8px"
                });
            }

        });

    }

    $('#new_diagnostic').click(function(){
        _txnlabreport="new";
        checkHeader(_txnlabreport);
        $('.patient_txn').text('New');
        clearFields($('#frm_lab_diagnostic'));

        $('#diagnostic_icon').removeClass();
        $('#diagnostic_icon').addClass('fa fa-plus-circle');

        $('#lab_report_date').val(today);

        $('#save_labreport_diagnostics').show();
        $('#print_labreport_diagnostics').hide();
        $('#ftr_lab_report').hide();

        $("#frm_lab_diagnostic input:checkbox").prop('checked',false);
        $("#frm_lab_diagnostic input:text").prop('disabled',false); 

        $("#frm_lab_diagnostic input:checkbox").css('pointer-events','all'); 
        $("#frm_lab_diagnostic input:text").css('pointer-events','all'); 

        $('#modal_laboratory_report').modal('toggle');
    });   

    $('#tbl_patient_lab_report tbody').on('click','button[name="edit_diagnostic"]',function(){
        _txnlabreport="edit";
        checkHeader(_txnlabreport);
        $('.patient_txn').text('Edit');
        clearFields($('#frm_lab_diagnostic'));

        $('#diagnostic_icon').removeClass();
        $('#diagnostic_icon').addClass('fa fa-edit');

        $("#frm_lab_diagnostic input:checkbox").prop('checked',false);
        $("#frm_lab_diagnostic input:text").prop('disabled',false);

        $("#frm_lab_diagnostic input:checkbox").css('pointer-events','all'); 
        $("#frm_lab_diagnostic input:text").css('pointer-events','all'); 

        $('#save_labreport_diagnostics').show();
        $('#print_labreport_diagnostics').hide();
        $('#ftr_lab_report').hide();

        _selectRowObjLabDiagnostic =$(this).closest('tr');
        var datalabdiagnostic=patient_lab_report_dt.row(_selectRowObjLabDiagnostic).data();
        _selectedIDLabDiagnostic=datalabdiagnostic.patient_lab_report_id;

        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(datalabdiagnostic,function(name,value){

                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }

                    if(_elem.attr('id')==name){
                        if(value==1){ _elem.prop('checked', true); }
                        else{ _elem.prop('checked', false); }
                    }

                });
        }); 
        $('#modal_laboratory_report').modal('toggle');
    });

    $('#tbl_patient_lab_report tbody').on('click','button[name="view_diagnostic"]',function(){
        _txnlabreport="view";
        checkHeader(_txnlabreport);
        $('.patient_txn').text('View');
        clearFields($('#frm_lab_diagnostic'));

        $('#diagnostic_icon').removeClass();
        $('#diagnostic_icon').addClass('fa fa-print');

        $("#frm_lab_diagnostic input:checkbox").prop('checked',false);
        $("#frm_lab_diagnostic input:text").prop('disabled',true);

        $("#frm_lab_diagnostic input:checkbox").css('pointer-events','none'); 
        $("#frm_lab_diagnostic input:text").css('pointer-events','none'); 

        $('#save_labreport_diagnostics').hide();
        $('#print_labreport_diagnostics').show();
        $('#ftr_lab_report').show();

        _selectRowObjLabDiagnostic =$(this).closest('tr');
        var datalabdiagnostic=patient_lab_report_dt.row(_selectRowObjLabDiagnostic).data();
        _selectedIDLabDiagnostic=datalabdiagnostic.patient_lab_report_id;

        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(datalabdiagnostic,function(name,value){

                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }

                    if(_elem.attr('id')==name){
                        if(value==1){ _elem.prop('checked', true); }
                        else{ _elem.prop('checked', false); }
                    }

                });
        }); 
        $('#modal_laboratory_report').modal('toggle');
    });

    $('#tbl_patient_lab_report tbody').on('click','button[name="remove_diagnostic"]',function(){
        _txdelete="labreport";
        _selectRowObjLabDiagnostic =$(this).closest('tr');
        var datalabdiagnostic=patient_lab_report_dt.row(_selectRowObjLabDiagnostic).data();
        _selectedIDLabDiagnostic=datalabdiagnostic.patient_lab_report_id;

        delete_notif();
    });

    $('#save_labreport_diagnostics').click(function(){
        if(validateRequiredFields($('#frm_lab_diagnostic'))){
            if(_txnlabreport=="new"){
                Savelabdiagnostics().done(function(response){
                    showNotification(response);
                    if(response.stat=="success"){
                        $('#tbl_patient_lab_report').DataTable().ajax.reload();
                    }
                }).always(function(){
                    $.unblockUI();
                    $('#modal_laboratory_report').modal('toggle');
                });
            }
            if(_txnlabreport=="edit"){

                Updatelabdiagnostics().done(function(response){
                    showNotification(response);
                    if(response.stat=="success"){
                        $('#tbl_patient_lab_report').DataTable().ajax.reload();
                    }
                }).always(function(){
                    $.unblockUI();
                    $('#modal_laboratory_report').modal('toggle');
                });
            }
        }   
    });

    var getlabdiagnostics=function(){
        var _data=$('#').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_lab_diagnostics/transaction/list",
                "data":_data,
                "beforeSend": showSpinningProgressLOADING($('#btn_save'))
            });
       
    };

    var Savelabdiagnostics=function(){
        var _data=$('#frm_lab_diagnostic').serializeArray();
        _data.push({name : "ref_patient_id" ,value : _selectedID});

        $('#frm_lab_diagnostic input:checkbox').each(function()
        {
            var A = ($(this).attr('id'));
            _data.push({name : A ,value : $('#'+A+'').is(':checked') ? 1 : 0});
        });

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_lab_diagnostics/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
   
    };

     var Updatelabdiagnostics=function(){
        var _data=$('#frm_lab_diagnostic').serializeArray();
            _data.push({name : "patient_lab_report_id" ,value : _selectedIDLabDiagnostic});
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            $('#frm_lab_diagnostic input:checkbox').each(function()
            {
                var A = ($(this).attr('id'));
                _data.push({name : A ,value : $('#'+A+'').is(':checked') ? 1 : 0});
            });

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_lab_diagnostics/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    $('#print_labreport_diagnostics').click(function(event){
        printing_notif();
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";

        $('#frm_lab_diagnostic input:checkbox').each(function() {
            if($(this).is (':checked')) {
               $(this).attr('checked', true);
            }
        });

        $('#frm_lab_diagnostic input:text').each(function() {
                $(this).attr('value', $(this).val());
        });

        $("#print_labreport_content").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:false,
            canvas: false 
        });
    });    

    //end laboratory report

    //start med certificate

    var _patient_medical_certificate_id;
    var _txnmedical;

    $('.patient_medical_certificate').click(function(){
        if(_isChecked==true){
            $('#tbl_med_cert_report').dataTable().fnDestroy();
            showSpinningProgressLOADING();
            setTimeout(function() {
                 getMedicalCertList();
            }, 200);            
            $('#modal_med_cert_list').modal('toggle');
        }
        else{
            notice_notif();
        }
        
    });

    var getMedicalCertList=function(){
            patient_medical_certificate_dt=$('#tbl_med_cert_report').DataTable({
                "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "autoWidth":true,
            "scrollY": "400px",
            "scrollCollapse": true,
            "table-layout": "fixed",            
            "paging":true,
            "order": [[ 3, "desc" ]],
            "ajax": {
            "url": "Patient_medical_record/transaction/list",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "ref_patient_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "medical_certificate_code" },
                { targets:[1],data: "medical_date" },
                {
                    targets:[2],
                    render: function (data, type, full, meta){
                         var view_med_cert='<button class="btn btn-default btn-xs" name="view_med_cert" data-toggle="tooltip" data-placement="left" title="View Details"><i class="fa fa-eye"></i> </button>';

                        return '<center>'+view_med_cert+edit_med_cert+remove_med_cert+'</center>';
                    }
                },
                { visible:false, targets:[3],data: "patient_medical_certificate_id" }
            ],
            language: {
                 searchPlaceholder: ""
             },
             "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "8px"
                });
            }

        });

    }

    $('#new_medical_cert').click(function(){
        _txnmedical="new";        
        checkHeader(_txnmedical);
        $('.patient_txn').text('New');
        clearFields($('#frm_medical_record'));

        $('#medical_certificate_icon').removeClass();
        $('#medical_certificate_icon').addClass('fa fa-plus-circle');

        $("#frm_medical_record input").prop('disabled',false);
        $("#frm_medical_record textarea").prop('disabled',false);        

        var d = new Date();
        var today = (d.getMonth()+1) + "/" + d.getDate() + "/" + d.getFullYear();

        $('#medical_date').val(today);   

        $('#save_medical_certificate').show();
        $('#print_medical_certificate').hide();
        $('#ftr_med_cert').hide();

        $('#modal_patient_medical_certificate').modal('toggle');
    });    

    $('#tbl_med_cert_report tbody').on('click','button[name="edit_med_cert"]',function(){
        _txnmedical="edit";
        checkHeader(_txnmedical);
        $('.patient_txn').text('Edit');
        clearFields($('#frm_medical_record'));

        $('#medical_certificate_icon').removeClass();
        $('#medical_certificate_icon').addClass('fa fa-edit');

        $("#frm_medical_record input").prop('disabled',false);
        $("#frm_medical_record textarea").prop('disabled',false);        

        $('#save_medical_certificate').show();
        $('#print_medical_certificate').hide();
        $('#ftr_med_cert').hide();

        _selectRowObjmedicalcert =$(this).closest('tr');
        var datamedicalcert=patient_medical_certificate_dt.row(_selectRowObjmedicalcert).data();
        _selectedIDmedicalcert=datamedicalcert.patient_medical_certificate_id;

        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(datamedicalcert,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        }); 
        $('#modal_patient_medical_certificate').modal('toggle');
    });

    $('#tbl_med_cert_report tbody').on('click','button[name="view_med_cert"]',function(){
        _txnmedical="view";
        checkHeader(_txnmedical);
        $('.patient_txn').text('View');
        clearFields($('#frm_medical_record'));

        $('#medical_certificate_icon').removeClass();
        $('#medical_certificate_icon').addClass('fa fa-print');        

        $("#frm_medical_record input").prop('disabled',true);
        $("#frm_medical_record textarea").prop('disabled',true);

        $('#save_medical_certificate').hide();
        $('#print_medical_certificate').show();
        $('#ftr_med_cert').show();

        _selectRowObjmedicalcert =$(this).closest('tr');
        var datamedicalcert=patient_medical_certificate_dt.row(_selectRowObjmedicalcert).data();
        _selectedIDmedicalcert=datamedicalcert.patient_medical_certificate_id;

        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(datamedicalcert,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        }); 
        $('#modal_patient_medical_certificate').modal('toggle');
    });

    $('#tbl_med_cert_report tbody').on('click','button[name="remove_med_cert"]',function(){
        _txdelete="medicalcert";
        _selectRowObjmedicalcert =$(this).closest('tr');
        var datamedicalcert=patient_medical_certificate_dt.row(_selectRowObjmedicalcert).data();
        _selectedIDmedicalcert=datamedicalcert.patient_medical_certificate_id;

        delete_notif();
    });

   $('#save_medical_certificate').click(function(){
        if(validateRequiredFields($('#frm_medical_record'))){
            if(_txnmedical=="new"){
                Savemedicalcertificate().done(function(response){
                    showNotification(response);
                    if(response.stat=="success"){
                        $('#tbl_med_cert_report').DataTable().ajax.reload();
                    }
                }).always(function(){
                    $.unblockUI();
                    $('#modal_patient_medical_certificate').modal('toggle');
                });
            }
            if(_txnmedical=="edit"){

                Updatemedicalcertificate().done(function(response){
                    showNotification(response);
                    if(response.stat=="success"){
                        $('#tbl_med_cert_report').DataTable().ajax.reload();
                    }
                }).always(function(){
                    $.unblockUI();
                    $('#modal_patient_medical_certificate').modal('toggle');
                });
            }
        }   
    });

    var getmedicalcertificate=function(){
        var _data=$('#').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_medical_record/transaction/list",
                "data":_data,
                "beforeSend": showSpinningProgressLOADING($('#btn_save'))
            });
       
    };

    var Savemedicalcertificate=function(){
        var _data=$('#frm_medical_record').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_medical_record/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    var Updatemedicalcertificate=function(){
        var _data=$('#frm_medical_record').serializeArray();
            _data.push({name : "patient_medical_certificate_id" ,value : _selectedIDmedicalcert});
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_medical_record/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    $('#print_medical_certificate').click(function(event){
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        /*alert(output);*/
        $("#print_medical_certificate_content").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:true,
            canvas: false 
        });
    });

    //end med certificate

    //start nephro record

    var getNephroRecord=function(){
            dt_patient_nephro_record=$('#tbl_nephro_record').DataTable({
                "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "autoWidth":true,
            "scrollY": "400px",
            "scrollCollapse": true,
            "table-layout": "fixed",            
            "paging":true,
            "order": [[ 4, "desc" ]],
            "ajax": {
            "url": "Patient_Info/transaction/list",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "ref_patient_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "nephrorecorddate" },
                { targets:[1],data: "attending_physc" },
                { targets:[2],data: "treatment_no" },
                {
                    targets:[3],
                    render: function (data, type, full, meta){

                        return '<center>'+btn_nephrorecord_edit+btn_nephrorecord_trash+'</center>';
                    }
                },
                { visible:false, targets:[4],data: "patient_info_id" }

                ],
                language: {
                             searchPlaceholder: ""
                         },
                "rowCallback":function( row, data, index ){

                    $(row).find('td').eq(10).attr({
                        "align": "right"
                    });
                }
            });
    }


    var _txnnephrorecord;
    var _patient_nephro_record_id;
    var _selectRowObjNephroOrder;
    $('.patient_nephro_record').click(function(){

        if(_isChecked==true){
            $('#tbl_nephro_record').dataTable().fnDestroy();

            getpatients().done(function(response){
                    var show2select="";
                        if(response.data.length==0){
                            $('#patientsget').html("<option>No Result</option>");
                            return;
                        }
                        var jsoncount=response.data.length-1;
                         for(var i=0;parseInt(jsoncount)>=i;i++){
                            //alert(response.available_leave[i].leave_type);
                            show2select+='<option value='+response.data[i].ref_patient_id+'>'+response.data[i].fullname+'</option>';
                         }
                         $('.patientsget').html(show2select);
                }).always(function(){
                    
                });

            showSpinningProgressLOADING();

            setTimeout(function() {
                 getNephroRecord();
            }, 200);

            $('#modal_nephro_record').modal('toggle');
        }
        else{
            notice_notif();
        }
    });

    var getpatients=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Ref_patient/transaction/list",
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    $('#clean').click(function(){
        $("#hepatitis_b").attr("checked",false);
        $("#hepatitis_c").attr("checked",false);
         if(_hepatitis_stat=="clean"){
            _hepatitis_stat = "";
            $("#clean").attr("checked",false);
            /*alert(_hepatitis_stat);*/
        }
        else{
            _hepatitis_stat = "clean";
            $("#clean").attr("checked",true);
            /*alert(_hepatitis_stat);*/
        }

    });

    $('#hepatitis_b').click(function(){
        $("#clean").attr("checked",false);
        $("#hepatitis_c").attr("checked",false);
        if(_hepatitis_stat=="hepatitis_b"){
            _hepatitis_stat = "";
            $("#hepatitis_b").attr("checked",false);
            /*alert(_hepatitis_stat);*/
        }
        else{
            _hepatitis_stat = "hepatitis_b";
            $("#hepatitis_b").attr("checked",true);
            /*alert(_hepatitis_stat);*/
        }
    });

    $('#hepatitis_c').click(function(){
        $("#clean").attr("checked",false);
        $("#hepatitis_b").attr("checked",false);
        
        if(_hepatitis_stat=="hepatitis_c"){
            _hepatitis_stat = "";
            $("#hepatitis_c").attr("checked",false);
            /*alert(_hepatitis_stat);*/
        }
        else{
            _hepatitis_stat = "hepatitis_c";
            $("#hepatitis_c").attr("checked",true);
            /*alert(_hepatitis_stat);*/
        }
        /*alert(_hepatitis_stat);*/
    });

/*    $('#dialysisbath_bicarbonate').click(function(){
        if(_dialysisbath_bicarbonate==1){
            _dialysisbath_bicarbonate = 0;
        }
        else{
            _dialysisbath_bicarbonate = 1;
        }
    });*/

    /*$('#dialysisacid_hd144a').click(function(){
        if(_dialysisacid_hd144a==1){
            _dialysisacid_hd144a = 0;
        }
        else{
            _dialysisacid_hd144a = 1;
        }
    });*/

    $('#dialyzer_lowflux').click(function(){
        $("#dialyzer_lowflux").attr("checked",false);
        $("#dialyzer_highefficiency").attr("checked",false);
        $("#dialyzer_highflux").attr("checked",false);
        /*$("#dialyzer_renalinstrip").attr("checked",false);*/
        /*dzc=0;*/ dzhe=0; dzhf=0; dzren=0;
        if(dzc==0){
            dzc=1;
            $("#dialyzer_lowflux").prop("checked",true);
            $("#other_dialyzer").val('');
            _dialyzer_type = "lowflux";
            /*alert(_dialyzer_type);*/
        }
        else{
            dzc=0;
            $("#dialyzer_lowflux").prop("checked",false);
            _dialyzer_type = "";
            /*alert(_dialyzer_type);*/
        }
        
    });

    $('#dialyzer_highefficiency').click(function(){
        $("#dialyzer_lowflux").attr("checked",false);
        $("#dialyzer_highefficiency").attr("checked",false);
        $("#dialyzer_highflux").attr("checked",false);
        /*$("#dialyzer_renalinstrip").attr("checked",false);*/
        dzc=0;/* dzhe=0;*/ dzhf=0; dzren=0;
        if(dzhe==0){
            dzhe=1;
            $("#dialyzer_highefficiency").prop("checked",true);
            $("#other_dialyzer").val('');
            _dialyzer_type = "High Efficiency";
            /*alert(_dialyzer_type);*/
        }
        else{
            dzhe=0;
            $("#dialyzer_highefficiency").prop("checked",false);
            _dialyzer_type = "";
            /*alert(_dialyzer_type);*/
        }
    });

    $('#dialyzer_highflux').click(function(){
        $("#dialyzer_lowflux").attr("checked",false);
        $("#dialyzer_highefficiency").attr("checked",false);
        $("#dialyzer_highflux").attr("checked",false);
        /*$("#dialyzer_renalinstrip").attr("checked",false);*/
        dzc=0; dzhe=0;/* dzhf=0;*/ dzren=0;
        if(dzhf==0){
            dzhf=1;
            $("#dialyzer_highflux").prop("checked",true);
            $("#other_dialyzer").val('');
            _dialyzer_type = "High Flux";
            /*alert(_dialyzer_type);*/
        }
        else{
            dzhf=0;
            $("#dialyzer_highflux").prop("checked",false);
            _dialyzer_type = "";
            /*alert(_dialyzer_type);*/
        }
    });

    /*$('#dialyzer_renalinstrip').click(function(){
        $("#dialyzer_lowflux").attr("checked",false);
        $("#dialyzer_highefficiency").attr("checked",false);
        $("#dialyzer_highflux").attr("checked",false);
        $("#dialyzer_renalinstrip").attr("checked",false);
        dzc=0; dzhe=0; dzhf=0;
        if(dzren==0){
            dzren=1;
            $("#dialyzer_renalinstrip").prop("checked",true);
            $("#other_dialyzer").val('');
            _dialyzer_type = "Renalin Strip";
        }
        else{
            dzren=0;
            $("#dialyzer_renalinstrip").prop("checked",false);
            _dialyzer_type = "";
        }
    });*/

    $('#other_dialyzer').keypress(function(){
        _dialyzer_type = $(this).val();
        $(".dialyzertype").attr('checked', false);
        dzc=0; dzhe=0; dzhf=0; dzren=0;
    });

    /*var Un_checkdialyzer=function(){
        $("#dialyzer_lowflux").attr("checked",false);
        $("#dialyzer_highefficiency").attr("checked",false);
        $("#dialyzer_highflux").attr("checked",false);
        $("#dialyzer_renalinstrip").attr("checked",false);
        dzc=0; dzhe=0; dzhf=0; dzren=0;
    };*/  
        //prehd
    $('#prehd_ambulatory').click(function(){
        $("#prehd_ambulatory").attr("checked",false);
        $("#prehd_wheelchair").attr("checked",false);
        $("#prehd_bedstretcher").attr("checked",false);
        $("#prehd_ambulatory_assistance").attr("checked",false);
       /* prehd_am=0;*/ prehd_wc=0; prehd_bs=0; prehd_amwa=0;
        if(prehd_am==0){
            prehd_am=1;
            $("#prehd_ambulatory").prop("checked",true);
            _prehd_stat = "Ambulatory";
            /*alert(_prehd_stat);*/
        }
        else{
            prehd_am=0;
            $("#prehd_ambulatory").prop("checked",false);
            _prehd_stat = "";
            /*alert(_prehd_stat);*/
        }
    });
        //posthd
    $('#posthd_ambulatory').click(function(){
        $("#posthd_ambulatory").attr("checked",false);
        $("#posthd_wheelchair").attr("checked",false);
        $("#posthd_bedstretcher").attr("checked",false);
        $("#posthd_ambulatory_assistance").attr("checked",false);
       /* prehd_am=0;*/ posthd_wc=0; posthd_bs=0; posthd_amwa=0;
        if(posthd_am==0){
            posthd_am=1;
            $("#posthd_ambulatory").prop("checked",true);
            _posthd_stat = "Ambulatory";
            /*alert(_prehd_stat);*/
        }
        else{
            posthd_am=0;
            $("#posthd_ambulatory").prop("checked",false);
            _posthd_stat = "";
            /*alert(_prehd_stat);*/
        }
    });
        //prehd
    $('#prehd_wheelchair').click(function(){
        $("#prehd_ambulatory").attr("checked",false);
        $("#prehd_wheelchair").attr("checked",false);
        $("#prehd_bedstretcher").attr("checked",false);
        $("#prehd_ambulatory_assistance").attr("checked",false);
        prehd_am=0; /*prehd_wc=0;*/ prehd_bs=0; prehd_amwa=0;
        if(prehd_wc==0){
            prehd_wc=1;
            $("#prehd_wheelchair").prop("checked",true);
            _prehd_stat = "WheelChair";
            /*alert(_prehd_stat);*/
        }
        else{
            prehd_wc=0;
            $("#prehd_wheelchair").prop("checked",false);
            _prehd_stat = "";
            /*alert(_prehd_stat);*/
        }
    });

        //posthd
    $('#posthd_wheelchair').click(function(){
        $("#posthd_ambulatory").attr("checked",false);
        $("#posthd_wheelchair").attr("checked",false);
        $("#posthd_bedstretcher").attr("checked",false);
        $("#posthd_ambulatory_assistance").attr("checked",false);
        posthd_am=0; /*prehd_wc=0;*/ posthd_bs=0; posthd_amwa=0;
        if(posthd_wc==0){
            posthd_wc=1;
            $("#posthd_wheelchair").prop("checked",true);
            _posthd_stat = "WheelChair";
            /*alert(_prehd_stat);*/
        }
        else{
            posthd_wc=0;
            $("#posthd_wheelchair").prop("checked",false);
            _posthd_stat = "";
            /*alert(_prehd_stat);*/
        }
    });
        //prehd
    $('#prehd_bedstretcher').click(function(){
        $("#prehd_ambulatory").attr("checked",false);
        $("#prehd_wheelchair").attr("checked",false);
        $("#prehd_bedstretcher").attr("checked",false);
        $("#prehd_ambulatory_assistance").attr("checked",false);
        prehd_am=0; prehd_wc=0; /*prehd_bs=0;*/ prehd_amwa=0;
        if(prehd_bs==0){
            prehd_bs=1;
            $("#prehd_bedstretcher").prop("checked",true);
            _prehd_stat = "Bed Stretcher";
            /*alert(_prehd_stat);*/
        }
        else{
            prehd_bs=0;
            $("#prehd_bedstretcher").prop("checked",false);
            _prehd_stat = "";
            /*alert(_prehd_stat);*/
        }
    });
        //posthd
    $('#posthd_bedstretcher').click(function(){
        $("#posthd_ambulatory").attr("checked",false);
        $("#posthd_wheelchair").attr("checked",false);
        $("#posthd_bedstretcher").attr("checked",false);
        $("#posthd_ambulatory_assistance").attr("checked",false);
        posthd_am=0; posthd_wc=0; /*prehd_bs=0;*/ posthd_amwa=0;
        if(posthd_bs==0){
            posthd_bs=1;
            $("#posthd_bedstretcher").prop("checked",true);
            _posthd_stat = "Bed Stretcher";
            /*alert(_prehd_stat);*/
        }
        else{
            prehd_bs=0;
            $("#prehd_bedstretcher").prop("checked",false);
            _posthd_stat = "";
            /*alert(_prehd_stat);*/
        }
    });
        //prehd
    $('#prehd_ambulatory_assistance').click(function(){
        $("#prehd_ambulatory").attr("checked",false);
        $("#prehd_wheelchair").attr("checked",false);
        $("#prehd_bedstretcher").attr("checked",false);
        $("#prehd_ambulatory_assistance").attr("checked",false);
        prehd_am=0; prehd_wc=0; prehd_bs=0;/* prehd_amwa=0;*/
        if(prehd_amwa==0){
            prehd_amwa=1;
            $("#prehd_ambulatory_assistance").prop("checked",true);
            _prehd_stat = "Ambulatory W/ Assist";
            /*alert(_prehd_stat);*/
        }
        else{
            prehd_amwa=0;
            $("#prehd_ambulatory_assistance").prop("checked",false);
            _prehd_stat = "";
            /*alert(_prehd_stat);*/
        }
    });
        //posthd
    $('#posthd_ambulatory_assistance').click(function(){
        $("#posthd_ambulatory").attr("checked",false);
        $("#posthd_wheelchair").attr("checked",false);
        $("#posthd_bedstretcher").attr("checked",false);
        $("#posthd_ambulatory_assistance").attr("checked",false);
        posthd_am=0; posthd_wc=0; posthd_bs=0;/* prehd_amwa=0;*/
        if(posthd_amwa==0){
            posthd_amwa=1;
            $("#posthd_ambulatory_assistance").prop("checked",true);
            _posthd_stat = "Ambulatory W/ Assist";
            /*alert(_prehd_stat);*/
        }
        else{
            posthd_amwa=0;
            $("#posthd_ambulatory_assistance").prop("checked",false);
            _posthd_stat = "";
            /*alert(_prehd_stat);*/
        }
    });

    /*var Un_checkprehd=function(){
        $("#prehd_ambulatory").attr("checked",false);
        $("#prehd_wheelchair").attr("checked",false);
        $("#prehd_bedstretcher").attr("checked",false);
        $("#prehd_ambulatory_assistance").attr("checked",false);
        prehd_am=0; prehd_wc=0; prehd_bs=0; prehd_amwa=0;
    }; */
        //prehd
    $('#prehd_pulse_regular').click(function(){
        $("#prehd_pulse_regular").prop("checked",false);
        $("#prehd_pulse_irregular").prop("checked",false);
       /* ps_reg=0;*/ ps_irreg=0;
        if(ps_reg==0){
            ps_reg=1;
            $("#prehd_pulse_regular").prop("checked",true);
            _prehd_pulse_stat = "Regular";
            /*alert(_prehd_pulse_stat);*/
        }
        else{
            ps_reg=0;
            $("#prehd_pulse_regular").prop("checked",false);
            _prehd_pulse_stat = "";
            /*alert(_prehd_pulse_stat);*/
        }
    });
        //posthd
    $('#posthd_pulse_regular').click(function(){
        $("#posthd_pulse_regular").prop("checked",false);
        $("#posthd_pulse_irregular").prop("checked",false);
       /* ps_reg=0;*/ posthd_ps_irreg=0;
        if(posthd_ps_reg==0){
            posthd_ps_reg=1;
            $("#posthd_pulse_regular").prop("checked",true);
            _posthd_pulse_stat = "Regular";
            /*alert(_prehd_pulse_stat);*/
        }
        else{
            posthd_ps_reg=0;
            $("#posthd_pulse_regular").prop("checked",false);
            _posthd_pulse_stat = "";
            /*alert(_prehd_pulse_stat);*/
        }
    });
        //prehd
    $('#prehd_pulse_irregular').click(function(){
        $("#prehd_pulse_regular").prop("checked",false);
        $("#prehd_pulse_irregular").prop("checked",false);
        ps_reg=0; /*ps_irreg=0;*/
        if(ps_irreg==0){
            ps_irreg=1;
            $("#prehd_pulse_irregular").prop("checked",true);
            _prehd_pulse_stat = "Irregular";
            /*alert(_prehd_pulse_stat);*/
        }
        else{
            ps_irreg=0;
            $("#prehd_pulse_irregular").prop("checked",false);
            _prehd_pulse_stat = "";
            /*alert(_prehd_pulse_stat);*/
        }
    });
        //posthd
    $('#posthd_pulse_irregular').click(function(){
        $("#posthd_pulse_regular").prop("checked",false);
        $("#posthd_pulse_irregular").prop("checked",false);
        posthd_ps_reg=0; /*ps_irreg=0;*/
        if(posthd_ps_irreg==0){
            posthd_ps_irreg=1;
            $("#posthd_pulse_irregular").prop("checked",true);
            _posthd_pulse_stat = "Irregular";
            /*alert(_prehd_pulse_stat);*/
        }
        else{
            posthd_ps_irreg=0;
            $("#posthd_pulse_irregular").prop("checked",false);
            _posthd_pulse_stat = "";
            /*alert(_prehd_pulse_stat);*/
        }
    });

        //prehd
    $('#prehd_neuro_comatose').click(function(){
        $("#prehd_neuro_lethargic").attr("checked",false);
        $("#prehd_neuro_conscious").attr("checked",false);
        $("#prehd_neuro_gcs").attr("checked",false);
         if(_prehd_neuro_stat=="comatose"){
            _prehd_neuro_stat = "";
            $("#prehd_neuro_comatose").attr("checked",false);
            /*alert(_prehd_neuro_stat);*/
        }
        else{
            _prehd_neuro_stat = "comatose";
            $("#prehd_neuro_comatose").attr("checked",true);
            /*alert(_prehd_neuro_stat);*/
        }

    });
        //posthd
    $('#posthd_neuro_comatose').click(function(){
        $("#posthd_neuro_lethargic").attr("checked",false);
        $("#posthd_neuro_conscious").attr("checked",false);
        $("#posthd_neuro_gcs").attr("checked",false);
         if(_posthd_neuro_stat=="comatose"){
            _posthd_neuro_stat = "";
            $("#posthd_neuro_comatose").attr("checked",false);
            /*alert(_posthd_neuro_stat);*/
        }
        else{
            _posthd_neuro_stat = "comatose";
            $("#posthd_neuro_comatose").attr("checked",true);
            /*alert(_posthd_neuro_stat);*/
        }

    });
        //prehd
    $('#prehd_neuro_lethargic').click(function(){
        $("#prehd_neuro_comatose").attr("checked",false);
        $("#prehd_neuro_conscious").attr("checked",false);
        $("#prehd_neuro_gcs").attr("checked",false);
         if(_prehd_neuro_stat=="lethargic"){
            _prehd_neuro_stat = "";
            $("#prehd_neuro_lethargic").attr("checked",false);
            /*alert(_prehd_neuro_stat);*/
        }
        else{
            _prehd_neuro_stat = "lethargic";
            $("#prehd_neuro_lethargic").attr("checked",true);
            /*alert(_prehd_neuro_stat);*/
        }

    });
        //posthd
    $('#posthd_neuro_lethargic').click(function(){
        $("#posthd_neuro_comatose").attr("checked",false);
        $("#posthd_neuro_conscious").attr("checked",false);
        $("#posthd_neuro_gcs").attr("checked",false);
         if(_posthd_neuro_stat=="lethargic"){
            _posthd_neuro_stat = "";
            $("#posthd_neuro_lethargic").attr("checked",false);
            /*alert(_posthd_neuro_stat);*/
        }
        else{
            _posthd_neuro_stat = "lethargic";
            $("#posthd_neuro_lethargic").attr("checked",true);
            /*alert(_posthd_neuro_stat);*/
        }

    });
        //prehd
    $('#prehd_neuro_conscious').click(function(){
        $("#prehd_neuro_comatose").attr("checked",false);
        $("#prehd_neuro_lethargic").attr("checked",false);
        $("#prehd_neuro_gcs").attr("checked",false);
         if(_prehd_neuro_stat=="conscious"){
            _prehd_neuro_stat = "";
            $("#prehd_neuro_conscious").attr("checked",false);
            /*alert(_prehd_neuro_stat);*/
        }
        else{
            _prehd_neuro_stat = "conscious";
            $("#prehd_neuro_conscious").attr("checked",true);
            /*alert(_prehd_neuro_stat);*/
        }

    });
        //posthd
    $('#posthd_neuro_conscious').click(function(){
        $("#posthd_neuro_comatose").attr("checked",false);
        $("#posthd_neuro_lethargic").attr("checked",false);
        $("#posthd_neuro_gcs").attr("checked",false);
         if(_posthd_neuro_stat=="conscious"){
            _posthd_neuro_stat = "";
            $("#posthd_neuro_conscious").attr("checked",false);
            /*alert(_posthd_neuro_stat);*/
        }
        else{
            _posthd_neuro_stat = "conscious";
            $("#posthd_neuro_conscious").attr("checked",true);
            /*alert(_posthd_neuro_stat);*/
        }

    });
        //prehd
    $('#prehd_neuro_gcs').click(function(){
        $("#prehd_neuro_comatose").attr("checked",false);
        $("#prehd_neuro_lethargic").attr("checked",false);
        $("#prehd_neuro_conscious").attr("checked",false);
         if(_prehd_neuro_stat=="gcs"){
            _prehd_neuro_stat = "";
            $("#prehd_neuro_gcs").attr("checked",false);
            /*alert(_prehd_neuro_stat);*/
        }
        else{
            _prehd_neuro_stat = "gcs";
            $("#prehd_neuro_gcs").attr("checked",true);
            /*alert(_prehd_neuro_stat);*/
        }

    });
        //posthd
    $('#posthd_neuro_gcs').click(function(){
        $("#posthd_neuro_comatose").attr("checked",false);
        $("#posthd_neuro_lethargic").attr("checked",false);
        $("#posthd_neuro_conscious").attr("checked",false);
         if(_posthd_neuro_stat=="gcs"){
            _posthd_neuro_stat = "";
            $("#posthd_neuro_gcs").attr("checked",false);
            /*alert(_posthd_neuro_stat);*/
        }
        else{
            _posthd_neuro_stat = "gcs";
            $("#posthd_neuro_gcs").attr("checked",true);
            /*alert(_posthd_neuro_stat);*/
        }

    });
        //prehd
    $('#prehd_skincolor_normal').click(function(){
        $("#prehd_skincolor_pale").attr("checked",false);
        $("#prehd_skincolor_cyanotic").attr("checked",false);
         if(_prehd_skincolor_stat=="normal"){
            _prehd_skincolor_stat = "";
            $("#prehd_skincolor_normal").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_skincolor_stat = "normal";
            $("#prehd_skincolor_normal").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_skincolor_normal').click(function(){
        $("#posthd_skincolor_pale").attr("checked",false);
        $("#posthd_skincolor_cyanotic").attr("checked",false);
         if(_posthd_skincolor_stat=="normal"){
            _posthd_skincolor_stat = "";
            $("#posthd_skincolor_normal").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_skincolor_stat = "normal";
            $("#posthd_skincolor_normal").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_skincolor_pale').click(function(){
        $("#prehd_skincolor_normal").attr("checked",false);
        $("#prehd_skincolor_cyanotic").attr("checked",false);
         if(_prehd_skincolor_stat=="pale"){
            _prehd_skincolor_stat = "";
            $("#prehd_skincolor_pale").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_skincolor_stat = "pale";
            $("#prehd_skincolor_pale").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_skincolor_pale').click(function(){
        $("#posthd_skincolor_normal").attr("checked",false);
        $("#posthd_skincolor_cyanotic").attr("checked",false);
         if(_posthd_skincolor_stat=="pale"){
            _posthd_skincolor_stat = "";
            $("#posthd_skincolor_pale").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_skincolor_stat = "pale";
            $("#posthd_skincolor_pale").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_skincolor_cyanotic').click(function(){
        $("#prehd_skincolor_normal").attr("checked",false);
        $("#prehd_skincolor_pale").attr("checked",false);
         if(_prehd_skincolor_stat=="cyanotic"){
            _prehd_skincolor_stat = "";
            $("#prehd_skincolor_cyanotic").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_skincolor_stat = "cyanotic";
            $("#prehd_skincolor_cyanotic").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_skincolor_cyanotic').click(function(){
        $("#posthd_skincolor_normal").attr("checked",false);
        $("#posthd_skincolor_pale").attr("checked",false);
         if(_posthd_skincolor_stat=="cyanotic"){
            _posthd_skincolor_stat = "";
            $("#posthd_skincolor_cyanotic").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_skincolor_stat = "cyanotic";
            $("#posthd_skincolor_cyanotic").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_others_ecchymosis').click(function(){
        $("#prehd_others_bruises").attr("checked",false);
         if(_prehd_others_stat=="ecchymosis"){
            _prehd_others_stat = "";
            $("#prehd_others_ecchymosis").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_others_stat = "ecchymosis";
            $("#prehd_others_ecchymosis").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_others_ecchymosis').click(function(){
        $("#posthd_others_bruises").attr("checked",false);
         if(_posthd_others_stat=="ecchymosis"){
            _posthd_others_stat = "";
            $("#posthd_others_ecchymosis").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_others_stat = "ecchymosis";
            $("#posthd_others_ecchymosis").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_others_bruises').click(function(){
        $("#prehd_others_ecchymosis").attr("checked",false);
         if(_prehd_others_stat=="bruises"){
            _prehd_others_stat = "";
            $("#prehd_others_bruises").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_others_stat = "bruises";
            $("#prehd_others_bruises").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_others_bruises').click(function(){
        $("#posthd_others_ecchymosis").attr("checked",false);
         if(_posthd_others_stat=="bruises"){
            _posthd_others_stat = "";
            $("#posthd_others_bruises").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_others_stat = "bruises";
            $("#posthd_others_bruises").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_turgor_good').click(function(){
        $("#prehd_turgor_poor").attr("checked",false);
         if(_prehd_turgor_stat=="good"){
            _prehd_turgor_stat = "";
            $("#prehd_turgor_good").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_turgor_stat = "good";
            $("#prehd_turgor_good").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_turgor_good').click(function(){
        $("#posthd_turgor_poor").attr("checked",false);
         if(_posthd_turgor_stat=="good"){
            _posthd_turgor_stat = "";
            $("#posthd_turgor_good").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_turgor_stat = "good";
            $("#posthd_turgor_good").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_turgor_poor').click(function(){
        $("#prehd_turgor_good").attr("checked",false);
         if(_prehd_turgor_stat=="poor"){
            _prehd_turgor_stat = "";
            $("#prehd_turgor_poor").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_turgor_stat = "poor";
            $("#prehd_turgor_poor").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //psothd
    $('#posthd_turgor_poor').click(function(){
        $("#posthd_turgor_good").attr("checked",false);
         if(_posthd_turgor_stat=="poor"){
            _posthd_turgor_stat = "";
            $("#posthd_turgor_poor").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_turgor_stat = "poor";
            $("#posthd_turgor_poor").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_neckveins_flat').click(function(){
        $("#prehd_neckveins_slightlydistented").attr("checked",false);
        $("#prehd_neckveins_distented").attr("checked",false);
         if(_prehd_neckveins_stat=="flat"){
            _prehd_neckveins_stat = "";
            $("#prehd_neckveins_flat").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_neckveins_stat = "flat";
            $("#prehd_neckveins_flat").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_neckveins_flat').click(function(){
        $("#posthd_neckveins_slightlydistented").attr("checked",false);
        $("#posthd_neckveins_distented").attr("checked",false);
         if(_prehd_neckveins_stat=="flat"){
            _posthd_neckveins_stat = "";
            $("#posthd_neckveins_flat").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_neckveins_stat = "flat";
            $("#posthd_neckveins_flat").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_neckveins_slightlydistented').click(function(){
        $("#prehd_neckveins_flat").attr("checked",false);
        $("#prehd_neckveins_distented").attr("checked",false);
         if(_prehd_neckveins_stat=="slightly distented"){
            _prehd_neckveins_stat = "";
            $("#prehd_neckveins_slightlydistented").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_neckveins_stat = "slightly distented";
            $("#prehd_neckveins_slightlydistented").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_neckveins_slightlydistented').click(function(){
        $("#posthd_neckveins_flat").attr("checked",false);
        $("#posthd_neckveins_distented").attr("checked",false);
         if(_posthd_neckveins_stat=="slightly distented"){
            _posthd_neckveins_stat = "";
            $("#posthd_neckveins_slightlydistented").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_neckveins_stat = "slightly distented";
            $("#posthd_neckveins_slightlydistented").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_neckveins_distented').click(function(){
        $("#prehd_neckveins_flat").attr("checked",false);
        $("#prehd_neckveins_slightlydistented").attr("checked",false);
         if(_prehd_neckveins_stat=="distented"){
            _prehd_neckveins_stat = "";
            $("#prehd_neckveins_distented").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_neckveins_stat = "distented";
            $("#prehd_neckveins_distented").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_neckveins_distented').click(function(){
        $("#posthd_neckveins_flat").attr("checked",false);
        $("#posthd_neckveins_slightlydistented").attr("checked",false);
         if(_posthd_neckveins_stat=="distented"){
            _posthd_neckveins_stat = "";
            $("#prehd_neckveins_distented").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_neckveins_stat = "distented";
            $("#posthd_neckveins_distented").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_genitourinary_hematuria').click(function(){
        $("#prehd_genitourinary_dysuria").attr("checked",false);
        $("#prehd_genitourinary_menstruation").attr("checked",false);
         if(_prehd_genitourinary_stat=="hematuria"){
            _prehd_genitourinary_stat = "";
            $("#prehd_genitourinary_hematuria").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_genitourinary_stat = "hematuria";
            $("#prehd_genitourinary_hematuria").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_genitourinary_hematuria').click(function(){
        $("#posthd_genitourinary_dysuria").attr("checked",false);
        $("#posthd_genitourinary_menstruation").attr("checked",false);
         if(_posthd_genitourinary_stat=="hematuria"){
            _posthd_genitourinary_stat = "";
            $("#posthd_genitourinary_hematuria").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _posthd_genitourinary_stat = "hematuria";
            $("#posthd_genitourinary_hematuria").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_genitourinary_dysuria').click(function(){
        $("#prehd_genitourinary_hematuria").attr("checked",false);
        $("#prehd_genitourinary_menstruation").attr("checked",false);
         if(_prehd_genitourinary_stat=="dysuria"){
            _prehd_genitourinary_stat = "";
            $("#prehd_genitourinary_dysuria").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_genitourinary_stat = "dysuria";
            $("#prehd_genitourinary_dysuria").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_genitourinary_dysuria').click(function(){
        $("#posthd_genitourinary_hematuria").attr("checked",false);
        $("#posthd_genitourinary_menstruation").attr("checked",false);
         if(_posthd_genitourinary_stat=="dysuria"){
            _posthd_genitourinary_stat = "";
            $("#posthd_genitourinary_dysuria").attr("checked",false);
            /*alert(_posthd_skincolor_stat);*/
        }
        else{
            _posthd_genitourinary_stat = "dysuria";
            $("#posthd_genitourinary_dysuria").attr("checked",true);
            /*alert(_posthd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_genitourinary_menstruation').click(function(){
        $("#prehd_genitourinary_hematuria").attr("checked",false);
        $("#prehd_genitourinary_dysuria").attr("checked",false);
         if(_prehd_genitourinary_stat=="menstruation"){
            _prehd_genitourinary_stat = "";
            $("#prehd_genitourinary_menstruation").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_genitourinary_stat = "menstruation";
            $("#prehd_genitourinary_menstruation").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //posthd
    $('#posthd_genitourinary_menstruation').click(function(){
        $("#posthd_genitourinary_hematuria").attr("checked",false);
        $("#posthd_genitourinary_dysuria").attr("checked",false);
         if(_posthd_genitourinary_stat=="menstruation"){
            _posthd_genitourinary_stat = "";
            $("#posthd_genitourinary_menstruation").attr("checked",false);
            /*alert(_posthd_skincolor_stat);*/
        }
        else{
            _posthd_genitourinary_stat = "menstruation";
            $("#posthd_genitourinary_menstruation").attr("checked",true);
            /*alert(_posthd_skincolor_stat);*/
        }

    });

    $('#prehd_arterial_w_difficulty').click(function(){
        $("#prehd_arterial_wo_difficulty").attr("checked",false);
        $("#prehd_arterial_un_aspirate").attr("checked",false);
         if(_prehd_arterial_stat=="with difficulty"){
            _prehd_arterial_stat = "";
            $("#prehd_arterial_w_difficulty").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_arterial_stat = "with difficulty";
            $("#prehd_arterial_w_difficulty").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_arterial_wo_difficulty').click(function(){
        $("#prehd_arterial_w_difficulty").attr("checked",false);
        $("#prehd_arterial_un_aspirate").attr("checked",false);
         if(_prehd_arterial_stat=="without difficulty"){
            _prehd_arterial_stat = "";
            $("#prehd_arterial_wo_difficulty").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_arterial_stat = "without difficulty";
            $("#prehd_arterial_wo_difficulty").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_arterial_un_aspirate').click(function(){
        $("#prehd_arterial_w_difficulty").attr("checked",false);
        $("#prehd_arterial_wo_difficulty").attr("checked",false);
         if(_prehd_arterial_stat=="Unable to Aspirate"){
            _prehd_arterial_stat = "";
            $("#prehd_arterial_un_aspirate").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_arterial_stat = "Unable to Aspirate";
            $("#prehd_arterial_un_aspirate").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_venous_w_difficulty').click(function(){
        $("#prehd_venous_wo_difficulty").attr("checked",false);
        $("#prehd_venous_un_aspirate").attr("checked",false);
        $("#prehd_venous_interchanged").attr("checked",false);
         if(_prehd_venous_stat=="With Difficulty"){
            _prehd_venous_stat = "";
            $("#prehd_venous_w_difficulty").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_venous_stat = "With Difficulty";
            $("#prehd_venous_w_difficulty").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_venous_wo_difficulty').click(function(){
        $("#prehd_venous_w_difficulty").attr("checked",false);
        $("#prehd_venous_un_aspirate").attr("checked",false);
        $("#prehd_venous_interchanged").attr("checked",false);
         if(_prehd_venous_stat=="Without Difficulty"){
            _prehd_venous_stat = "";
            $("#prehd_venous_wo_difficulty").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_venous_stat = "Without Difficulty";
            $("#prehd_venous_wo_difficulty").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_venous_un_aspirate').click(function(){
        $("#prehd_venous_w_difficulty").attr("checked",false);
        $("#prehd_venous_wo_difficulty").attr("checked",false);
        $("#prehd_venous_interchanged").attr("checked",false);
         if(_prehd_venous_stat=="Unable to Aspirate"){
            _prehd_venous_stat = "";
            $("#prehd_venous_un_aspirate").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_venous_stat = "Unable to Aspirate";
            $("#prehd_venous_un_aspirate").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_venous_interchanged').click(function(){
        $("#prehd_venous_w_difficulty").attr("checked",false);
        $("#prehd_venous_wo_difficulty").attr("checked",false);
        $("#prehd_venous_un_aspirate").attr("checked",false);
         if(_prehd_venous_stat=="Interchanged"){
            _prehd_venous_stat = "";
            $("#prehd_venous_interchanged").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_venous_stat = "Interchanged";
            $("#prehd_venous_interchanged").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_cath_dressing_intact').click(function(){
        $("#prehd_cath_dressing_not_intact").attr("checked",false);
        $("#prehd_cath_dressing_soaked").attr("checked",false);
         if(_prehd_cathererdressing_stat=="Intact"){
            _prehd_cathererdressing_stat = "";
            $("#prehd_cath_dressing_intact").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_cathererdressing_stat = "Intact";
            $("#prehd_cath_dressing_intact").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

        //posthd
    $('#posthd_cath_dressing_intact').click(function(){
        $("#posthd_cath_dressing_not_intact").attr("checked",false);
        $("#posthd_cath_dressing_soaked").attr("checked",false);
         if(_posthd_cathererdressing_stat=="Intact"){
            _posthd_cathererdressing_stat = "";
            $("#posthd_cath_dressing_intact").attr("checked",false);
            /*alert(_posthd_skincolor_stat);*/
        }
        else{
            _posthd_cathererdressing_stat = "Intact";
            $("#posthd_cath_dressing_intact").attr("checked",true);
            /*alert(_posthd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_cath_dressing_not_intact').click(function(){
        $("#prehd_cath_dressing_intact").attr("checked",false);
        $("#prehd_cath_dressing_soaked").attr("checked",false);
         if(_prehd_cathererdressing_stat=="Not Intact"){
            _prehd_cathererdressing_stat = "";
            $("#prehd_cath_dressing_not_intact").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_cathererdressing_stat = "Not Intact";
            $("#prehd_cath_dressing_not_intact").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    //posthd
    $('#posthd_cath_dressing_not_intact').click(function(){
        $("#posthd_cath_dressing_intact").attr("checked",false);
        $("#posthd_cath_dressing_soaked").attr("checked",false);
         if(_posthd_cathererdressing_stat=="Not Intact"){
            _posthd_cathererdressing_stat = "";
            $("#posthd_cath_dressing_not_intact").attr("checked",false);
            /*alert(_posthd_skincolor_stat);*/
        }
        else{
            _posthd_cathererdressing_stat = "Not Intact";
            $("#posthd_cath_dressing_not_intact").attr("checked",true);
            /*alert(_posthd_skincolor_stat);*/
        }

    });
        //prehd
    $('#prehd_cath_dressing_soaked').click(function(){
        $("#prehd_cath_dressing_intact").attr("checked",false);
        $("#prehd_cath_dressing_not_intact").attr("checked",false);
         if(_prehd_cathererdressing_stat=="Soaked"){
            _prehd_cathererdressing_stat = "";
            $("#prehd_cath_dressing_soaked").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_cathererdressing_stat = "Soaked";
            $("#prehd_cath_dressing_soaked").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    //posthd
    $('#posthd_cath_dressing_soaked').click(function(){
        $("#posthd_cath_dressing_intact").attr("checked",false);
        $("#posthd_cath_dressing_not_intact").attr("checked",false);
         if(_posthd_cathererdressing_stat=="Soaked"){
            _posthd_cathererdressing_stat = "";
            $("#posthd_cath_dressing_soaked").attr("checked",false);
            /*alert(_posthd_skincolor_stat);*/
        }
        else{
            _posthd_cathererdressing_stat = "Soaked";
            $("#posthd_cath_dressing_soaked").attr("checked",true);
            /*alert(_posthd_skincolor_stat);*/
        }

    });

    $('#prehd_av_fistula_artery').click(function(){
        $("#prehd_av_fistula_venous").attr("checked",false);
         if(_prehd_av_fistula_yes_stat=="Artery"){
            _prehd_av_fistula_yes_stat = "";
            $("#prehd_av_fistula_artery").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_av_fistula_yes_stat = "Artery";
            $("#prehd_av_fistula_artery").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_av_fistula_venous').click(function(){
        $("#prehd_av_fistula_artery").attr("checked",false);
         if(_prehd_av_fistula_yes_stat=="Venous"){
            _prehd_av_fistula_yes_stat = "";
            $("#prehd_av_fistula_artery").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_av_fistula_yes_stat = "Venous";
            $("#prehd_av_fistula_artery").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_anesthesia_none').click(function(){
        $("#prehd_anesthesia_lidocalne").attr("checked",false);
        $("#prehd_anesthesia_topical").attr("checked",false);
         if(_prehd_anesthesia_stat=="None"){
            _prehd_anesthesia_stat = "";
            $("#prehd_anesthesia_none").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_anesthesia_stat = "None";
            $("#prehd_anesthesia_none").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_anesthesia_lidocalne').click(function(){
        $("#prehd_anesthesia_none").attr("checked",false);
        $("#prehd_anesthesia_topical").attr("checked",false);
         if(_prehd_anesthesia_stat=="Lidocalne"){
            _prehd_anesthesia_stat = "";
            $("#prehd_anesthesia_lidocalne").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_anesthesia_stat = "Lidocalne";
            $("#prehd_anesthesia_lidocalne").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_anesthesia_topical').click(function(){
        $("#prehd_anesthesia_none").attr("checked",false);
        $("#prehd_anesthesia_lidocalne").attr("checked",false);
         if(_prehd_anesthesia_stat=="Topical"){
            _prehd_anesthesia_stat = "";
            $("#prehd_anesthesia_topical").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_anesthesia_stat = "Topical";
            $("#prehd_anesthesia_topical").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_fistula_thrill_strong').click(function(){
        $("#prehd_fistula_thrill_weak").attr("checked",false);
         if(_prehd_fistula_thrill_stat=="Strong"){
            _prehd_fistula_thrill_stat = "";
            $("#prehd_fistula_thrill_strong").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_fistula_thrill_stat = "Strong";
            $("#prehd_fistula_thrill_strong").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_fistula_thrill_weak').click(function(){
        $("#prehd_fistula_thrill_strong").attr("checked",false);
         if(_prehd_fistula_thrill_stat=="Weak"){
            _prehd_fistula_thrill_stat = "";
            $("#prehd_fistula_thrill_weak").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_fistula_thrill_stat = "Weak";
            $("#prehd_fistula_thrill_weak").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_fistula_bruit_strong').click(function(){
        $("#prehd_fistula_bruit_weak").attr("checked",false);
         if(_prehd_fistula_bruit_stat=="Strong"){
            _prehd_fistula_bruit_stat = "";
            $("#prehd_fistula_bruit_strong").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_fistula_bruit_stat = "Strong";
            $("#prehd_fistula_bruit_strong").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_fistula_bruit_weak').click(function(){
        $("#prehd_fistula_bruit_strong").attr("checked",false);
         if(_prehd_fistula_bruit_stat=="Weak"){
            _prehd_fistula_bruit_stat = "";
            $("#prehd_fistula_bruit_weak").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_fistula_bruit_stat = "Weak";
            $("#prehd_fistula_bruit_weak").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_fistula_signs_yes').click(function(){
        $("#prehd_fistula_signs_no").attr("checked",false);
         if(_prehd_fistula_signs_stat=="Yes"){
            _prehd_fistula_signs_stat = "";
            $("#prehd_fistula_signs_yes").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_fistula_signs_stat = "Yes";
            $("#prehd_fistula_signs_yes").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#prehd_fistula_signs_no').click(function(){
        $("#prehd_fistula_signs_yes").attr("checked",false);
         if(_prehd_fistula_signs_stat=="No"){
            _prehd_fistula_signs_stat = "";
            $("#prehd_fistula_signs_no").attr("checked",false);
            /*alert(_prehd_skincolor_stat);*/
        }
        else{
            _prehd_fistula_signs_stat = "No";
            $("#prehd_fistula_signs_no").attr("checked",true);
            /*alert(_prehd_skincolor_stat);*/
        }

    });

    $('#discharge_home_with_health').click(function(){
        if(dhh==0){
            dhh=1;
            $("#discharge_home_with_health").prop("checked",true);
            _discharge_stat = "Home with Health Teaching Performed";
            $('#discharge_admitted').val('');
            /*alert(_dialyzer_type);*/
        }
        else{
            dhh=0;
            $("#discharge_home_with_health").prop("checked",false);
            _discharge_stat = "";
            /*alert(_dialyzer_type);*/
        }
    });

    $('#discharge_admitted').keypress(function(){
        _discharge_stat = $(this).val();
        $("#discharge_home_with_health").prop('checked', false);
        dhh=0;
    });

    $('#btn_new').click(function(){
        _txnnephrorecord="new";
        $('#modal_new_nephro_record').modal('show');
        clearFields($('#frm_nephro_record'));

        $('#nephro_record_icon').removeClass();
        $('#nephro_record_icon').addClass('fa fa-plus-circle');

        $('.patient_txn').text('New');        

        clearcheckboxes();
        $('#ref_patient_id').val(_selectedID).trigger('change');
        $('#ref_patient_id').select2("enable",false);

        $('#nephrorecorddate').val(today);
    });

    $('#btn_create').click(function(){
        if(validateRequiredFieldsinemployee($('#frm_nephro_record'))){
           if(_txnnephrorecord=="new"){
                var type="Nephro Record Succesfully Created";
                createPatientNephroRecord().done(function(response){
                    showNotification(response);
                    dt_patient_nephro_record.row.add(response.row_added[0]).draw();
                    clearFields($('#frm_nephro_record'))
                    clearcheckboxes()
                }).always(function(){
                    $.unblockUI();
                     success_notif(type);
                    $('#modal_new_nephro_record').modal('toggle');
                });
                return;
            }
            if(_txnnephrorecord=="edit"){
                var type="Nephro Record Succesfully Updated";
                updatePatientNephroOrder().done(function(response){
                    showNotification(response);
                    dt_patient_nephro_record.row(_selectRowObjNephroOrder).data(response.row_updated[0]).draw();
                    
                }).always(function(){
                    $.unblockUI();
                     success_notif(type);
                    $('#modal_new_nephro_record').modal('toggle');
                });
                return;

            }

        }
    });

    $('#tbl_nephro_record tbody').on('click','button[name="edit_info"]',function(){
            _txnnephrorecord="edit";
            clearcheckboxes();

            $('#nephro_record_icon').removeClass();
            $('#nephro_record_icon').addClass('fa fa-edit');

            $('.patient_txn').text('Edit');

            //$('.transaction_type').text('Edit');
            $('#modal_new_nephro_record ').modal('show');
            _selectRowObjNephroOrder=$(this).closest('tr');
            var data=dt_patient_nephro_record.row(_selectRowObjNephroOrder).data();
            _patient_nephro_record_id=data.patient_info_id;
           /* alert(data.ref_patient_id);*/
            /*$('#ref_patient_id').val(data.ref_patient_id).trigger('chosen:updated');*/
            /*$("#ref_patient_id").select2("val",data.ref_patient_id);*/
            $("#ref_patient_id").val(data.ref_patient_id).trigger('change');
            /*$('#ref_patient_id').select2("enable",false)*/
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

                //multiple

            if(data.cash==1){ $("#cash").prop("checked",true); }
            if(data.pcso==1){ $("#pcso").prop("checked",true); }
            if(data.philhealth==1){ $("#philhealth").prop("checked",true); }

            _hepatitis_stat=data.hepatitis_status;
            if(_hepatitis_stat=="clean"){
                _hepatitis_stat = "clean";
                $("#clean").prop("checked",true);
                
            }
            if(_hepatitis_stat=="hepatitis_b"){
                _hepatitis_stat = "hepatitis_b";
                $("#hepatitis_b").prop("checked",true);
                
            }
            if(_hepatitis_stat=="hepatitis_c"){
                _hepatitis_stat = "hepatitis_c";
                $("#hepatitis_c").prop("checked",true);
                
            }
            else{
                _hepatitis_stat="";
            }


            if(data.other_lowmolecular==1){ $("#lowmolecular").prop("checked",true); }
            if(data.other_routineheparin==1){ $("#routine_heparin").prop("checked",true); }
            if(data.other_lowdoseheparin==1){ $("#lowdoseheparin").prop("checked",true); }

            /*if(data.dialysisbath_bicarbonate==1){ _dialysisbath_bicarbonate = 1; $("#dialysisbath_bicarbonate").prop("checked",true); }
            if(data.dialysisacid_hd144a==1){ _dialysisacid_hd144a = 1; $("#dialysisacid_hd144a").prop("checked",true); }*/

            if(data.dialyzer_type=="lowflux"){ _dialyzer_type = "lowflux"; $("#dialyzer_lowflux").prop("checked",true); }
            if(data.dialyzer_type=="High Efficiency"){ _dialyzer_type = "High Efficiency"; $("#dialyzer_highefficiency").prop("checked",true); }
            if(data.dialyzer_type=="High Flux"){ _dialyzer_type = "High Flux"; $("#dialyzer_highflux").prop("checked",true); }
            /*if(data.dialyzer_type=="Renalin Strip"){ _dialyzer_type = "Renalin Strip"; $("#dialyzer_renalinstrip").prop("checked",true); }*/
            else{ _dialyzer_type = data.dialyzer_type; $("#other_dialyzer").val(data.dialyzer_type); }

            if(data.renalinplus==1){ $("#renalinplus").prop("checked",true); }
             if(data.renalinminus==1){ $("#renalinminus").prop("checked",true); }

            if(data.prehd_stat=="Ambulatory"){ _prehd_stat = "Ambulatory"; $("#prehd_ambulatory").prop("checked",true); }
            if(data.prehd_stat=="WheelChair"){ _prehd_stat = "WheelChair"; $("#prehd_wheelchair").prop("checked",true); }
            if(data.prehd_stat=="Bed Stretcher"){ _prehd_stat = "Bed Stretcher"; $("#prehd_bedstretcher").prop("checked",true); }
            if(data.prehd_stat=="Ambulatory W/ Assist"){ _prehd_stat = "Ambulatory W/ Assist"; $("#prehd_ambulatory_assistance").prop("checked",true); }
            else{ _prehd_stat = ""; }
                //multiple
            if(data.prehd_lungs_clear==1){ $("#prehd_lungs_clear").prop("checked",true); }
            if(data.prehd_lungs_crackles==1){ $("#prehd_lungs_crackles").prop("checked",true); }
            if(data.prehd_lungs_hemoptysis==1){ $("#prehd_lungs_hemoptysis").prop("checked",true); }
            if(data.prehd_lungs_dob==1){ $("#prehd_lungs_dob").prop("checked",true); }
            if(data.prehd_lungs_wheezzing==1){ $("#prehd_lungs_wheezzing").prop("checked",true); }

            if(data.prehd_pulse_stat=="Regular"){ _prehd_pulse_stat = "Regular"; ps_reg=1; $("#prehd_pulse_regular").prop("checked",true); }
            if(data.prehd_pulse_stat=="Irregular"){ _prehd_pulse_stat = "Irregular"; ps_irreg=1; $("#prehd_pulse_irregular").prop("checked",true); }
            else{ _prehd_pulse_stat = ""; }

            if(data.prehd_neuro_type=="comatose"){ _prehd_neuro_stat = "comatose"; $("#prehd_neuro_comatose").prop("checked",true); }
            if(data.prehd_neuro_type=="lethargic"){ _prehd_neuro_stat = "lethargic"; $("#prehd_neuro_lethargic").prop("checked",true); }
            if(data.prehd_neuro_type=="conscious"){ _prehd_neuro_stat = "conscious"; $("#prehd_neuro_conscious").prop("checked",true); }
            if(data.prehd_neuro_type=="gcs"){ _prehd_neuro_stat = "gcs"; $("#prehd_neuro_gcs").prop("checked",true); }
            else{ prehd_neuro_type = ""; }

                //multiple
            if(data.prehd_edema_none==1){ $("#prehd_edema_none").prop("checked",true); }
            if(data.prehd_edema_facial==1){ $("#prehd_edema_facial").prop("checked",true); }
            if(data.prehd_edema_pedal==1){ $("#prehd_edema_pedal").prop("checked",true); }
            if(data.prehd_edema_periorbital==1){ $("#prehd_edema_periorbital").prop("checked",true); }
            if(data.prehd_edema_ascitis==1){ $("#prehd_edema_ascitis").prop("checked",true); }

                //multiple
            if(data.prehd_gastro_good_appetite==1){ $("#prehd_gastro_good_appetite").prop("checked",true); }
            if(data.prehd_gastro_no_appetite==1){ $("#prehd_gastro_no_appetite").prop("checked",true); }
            if(data.prehd_gastro_fair_appetite==1){ $("#prehd_gastro_fair_appetite").prop("checked",true); }
            if(data.prehd_gastro_melena==1){ $("#prehd_gastro_melena").prop("checked",true); }
            if(data.prehd_gastro_hematochezia==1){ $("#prehd_gastro_hematochezia").prop("checked",true); }
            if(data.prehd_gastro_hematemesis==1){ $("#prehd_gastro_hematemesis").prop("checked",true); }
                //single
            if(data.prehd_skin_color=="normal"){ _prehd_skincolor_stat = "normal"; $("#prehd_skincolor_normal").prop("checked",true); }
            if(data.prehd_skin_color=="pale"){ _prehd_skincolor_stat = "normal"; $("#prehd_skincolor_pale").prop("checked",true); }
            if(data.prehd_skin_color=="cyanotic"){ _prehd_skincolor_stat = "cyanotic"; $("#prehd_skincolor_cyanotic").prop("checked",true); }
            else{ _prehd_skincolor_stat = ""; }
                //single
            if(data.prehd_others=="ecchymosis"){ _prehd_others_stat = "ecchymosis"; $("#prehd_others_ecchymosis").prop("checked",true); }
            if(data.prehd_others=="bruises"){ _prehd_others_stat = "bruises"; $("#prehd_others_bruises").prop("checked",true); }
            else{ _prehd_others_stat = ""; }
                //single
            if(data.prehd_turgor=="good"){ _prehd_turgor_stat = "good"; $("#prehd_turgor_good").prop("checked",true); }
            if(data.prehd_turgor=="slightly distented"){ _prehd_turgor_stat = "slightly distented"; $("#prehd_turgor_poor").prop("checked",true); }
            else{ _prehd_turgor_stat = ""; }
                //single
            if(data.prehd_neckveins=="flat"){ _prehd_neckveins_stat = "flat"; $("#prehd_neckveins_flat").prop("checked",true); }
            if(data.prehd_neckveins=="slightly distented"){ _prehd_neckveins_stat = "slightly distented"; $("#prehd_neckveins_slightlydistented").prop("checked",true); }
            if(data.prehd_neckveins=="distented"){ _prehd_neckveins_stat = "distented"; $("#prehd_neckveins_distented").prop("checked",true); }
            else{ _prehd_neckveins_stat = ""; }
                //single
            if(data.prehd_genito_urinary=="hematuria"){ _prehd_genitourinary_stat = "hematuria"; $("#prehd_genitourinary_hematuria").prop("checked",true); }
            if(data.prehd_genito_urinary=="dysuria"){ _prehd_genitourinary_stat = "dysuria"; $("#prehd_genitourinary_dysuria").prop("checked",true); }
            if(data.prehd_genito_urinary=="menstruation"){ _prehd_genitourinary_stat = "menstruation"; $("#prehd_genitourinary_menstruation").prop("checked",true); }
            else{ _prehd_genitourinary_stat = ""; }
                //multiple
            if(data.prehd_problems_none==1){ $("#prehd_problems_none").prop("checked",true); }
            if(data.prehd_problems_chest_pain==1){ $("#prehd_problems_chest_pain").prop("checked",true); }
            if(data.prehd_problems_cough==1){ $("#prehd_problems_cough").prop("checked",true); }
            if(data.prehd_problems_abdominal_pain==1){ $("#prehd_problems_abdominal_pain").prop("checked",true); }
            if(data.prehd_problems_lbm==1){ $("#prehd_problems_lbm").prop("checked",true); }
            if(data.prehd_problems_orthopnea==1){ $("#prehd_problems_orthopnea").prop("checked",true); }
            if(data.prehd_problems_fever==1){ $("#prehd_problems_fever").prop("checked",true); }
                //multiple
            if(data.prehd_vascularaccess_pc==1){ $("#prehd_vascularaccess_pc").prop("checked",true); }
            if(data.prehd_vascularaccess_tlc==1){ $("#prehd_vascularaccess_tlc").prop("checked",true); }
            if(data.prehd_vascularaccess_avf==1){ $("#prehd_vascularaccess_avf").prop("checked",true); }
            if(data.prehd_vascularaccess_avg==1){ $("#prehd_vascularaccess_avg").prop("checked",true); }
                //single single
            if(data.prehd_with_bruit==1){ $("#prehd_with_bruit").prop("checked",true); }
            if(data.prehd_without_bruit==1){ $("#prehd_without_bruit").prop("checked",true); }
                //multiple
            if(data.prehd_thrill_strong==1){ $("#prehd_thrill_strong").prop("checked",true); }
            if(data.prehd_thrill_weak==1){ $("#prehd_thrill_weak").prop("checked",true); }
            if(data.prehd_thrill_patent==1){ $("#prehd_thrill_patent").prop("checked",true); }
            if(data.prehd_thrill_clotted==1){ $("#prehd_thrill_clotted").prop("checked",true); }
            if(data.prehd_thrill_redness==1){ $("#prehd_thrill_redness").prop("checked",true); }
            if(data.prehd_thrill_swelling==1){ $("#prehd_thrill_swelling").prop("checked",true); }
            if(data.prehd_thrill_hematoma==1){ $("#prehd_thrill_hematoma").prop("checked",true); }
            if(data.prehd_thrill_pus_secretion==1){ $("#prehd_thrill_pus_secretion").prop("checked",true); }
            if(data.prehd_thrill_no_signs==1){ $("#prehd_thrill_no_signs").prop("checked",true); }
                //single
            if(data.prehd_arterial=="with difficulty"){ _prehd_arterial_stat = "with difficulty"; $("#prehd_arterial_w_difficulty").prop("checked",true); }
            if(data.prehd_arterial=="without difficulty"){ _prehd_arterial_stat = "without difficulty"; $("#prehd_arterial_wo_difficulty").prop("checked",true); }
            if(data.prehd_arterial=="Unable to Aspirate"){ _prehd_arterial_stat = "Unable to Aspirate"; $("#prehd_arterial_un_aspirate").prop("checked",true); }
            else{ _prehd_arterial_stat = ""; }
                //single
            if(data.prehd_venous=="With Difficulty"){ _prehd_venous_stat = "With Difficulty"; $("#prehd_venous_w_difficulty").prop("checked",true); }
            if(data.prehd_venous=="Without Difficulty"){ _prehd_venous_stat = "Without Difficulty"; $("#prehd_venous_wo_difficulty").prop("checked",true); }
            if(data.prehd_venous=="Unable to Aspirate"){ _prehd_venous_stat = "Unable to Aspirate"; $("#prehd_venous_un_aspirate").prop("checked",true); }
            if(data.prehd_venous=="Interchanged"){ _prehd_venous_stat = "Interchanged"; $("#prehd_venous_interchanged").prop("checked",true); }
            else{ _prehd_venous_stat = ""; }
                //single
            if(data.prehd_catherer_dressing=="Intact"){ _prehd_cathererdressing_stat = "Intact"; $("#prehd_cath_dressing_intact").prop("checked",true); }
            if(data.prehd_catherer_dressing=="Not Intact"){ _prehd_cathererdressing_stat = "Not Intact"; $("#posthd_cath_dressing_not_intact").prop("checked",true); }
            if(data.prehd_catherer_dressing=="Soaked"){ _prehd_cathererdressing_stat = "Soaked"; $("#prehd_cath_dressing_soaked").prop("checked",true); }
            else{ _prehd_cathererdressing_stat = ""; }
                //single
            if(data.prehd_av_fistula_cannulation_yes=="Artery"){ _prehd_av_fistula_yes_stat = "Artery"; $("#prehd_av_fistula_artery").prop("checked",true); }
            if(data.prehd_av_fistula_cannulation_yes=="Venous"){ _prehd_av_fistula_yes_stat = "Venous"; $("#prehd_av_fistula_venous").prop("checked",true); }
            else{ _prehd_av_fistula_yes_stat = ""; }
                //single
            if(data.prehd_anesthesia=="None"){ _prehd_anesthesia_stat = "None"; $("#prehd_anesthesia_none").prop("checked",true); }
            if(data.prehd_anesthesia=="Lidocalne"){ _prehd_anesthesia_stat = "Lidocalne"; $("#prehd_anesthesia_lidocalne").prop("checked",true); }
            if(data.prehd_anesthesia=="Topical"){ _prehd_anesthesia_stat = "Topical"; $("#prehd_anesthesia_topical").prop("checked",true); }
            else{ _prehd_anesthesia_stat = ""; }
                //single
            if(data.prehd_fistula_thrill=="Strong"){ _prehd_fistula_thrill_stat = "Strong"; $("#prehd_fistula_thrill_strong").prop("checked",true); }
            if(data.prehd_fistula_thrill=="Weak"){ _prehd_fistula_thrill_stat = "Weak"; $("#prehd_fistula_thrill_weak").prop("checked",true); }
            else{ _prehd_fistula_thrill_stat = ""; }
                //single
            if(data.prehd_fistula_bruit=="Strong"){ _prehd_fistula_bruit_stat = "Strong"; $("#prehd_fistula_bruit_strong").prop("checked",true); }
            if(data.prehd_fistula_bruit=="Weak"){ _prehd_fistula_bruit_stat = "Weak"; $("#prehd_fistula_bruit_weak").prop("checked",true); }
            else{ _prehd_fistula_bruit_stat = ""; }
                //single
            if(data.prehd_fistula_signs_of_infection=="Yes"){ _prehd_fistula_signs_stat = "Yes"; $("#prehd_fistula_signs_yes").prop("checked",true); }
            if(data.prehd_fistula_signs_of_infection=="No"){ _prehd_fistula_signs_stat = "No"; $("#prehd_fistula_signs_no").prop("checked",true); }
            else{ _prehd_fistula_signs_stat = ""; }
                //single but multiple style
            if(data.prehd_fistula_dressing_aseptically==1){ $("#prehd_fistula_dressing_aseptically").prop("checked",true); }
            /*alert(_hepatitis_stat);*/

            //post hd.

            if(data.posthd_stat=="Ambulatory"){ _posthd_stat = "Ambulatory"; $("#posthd_ambulatory").prop("checked",true); }
            if(data.posthd_stat=="WheelChair"){ _posthd_stat = "WheelChair"; $("#posthd_wheelchair").prop("checked",true); }
            if(data.posthd_stat=="Bed Stretcher"){ _posthd_stat = "Bed Stretcher"; $("#posthd_bedstretcher").prop("checked",true); }
            if(data.posthd_stat=="Ambulatory W/ Assist"){ _posthd_stat = "Ambulatory W/ Assist"; $("#posthd_ambulatory_assistance").prop("checked",true); }
            else{ _posthd_stat = ""; }
                //multiple
            if(data.posthd_lungs_clear==1){ $("#posthd_lungs_clear").prop("checked",true); }
            if(data.posthd_lungs_crackles==1){ $("#posthd_lungs_crackles").prop("checked",true); }
            if(data.posthd_lungs_hemoptysis==1){ $("#posthd_lungs_hemoptysis").prop("checked",true); }
            if(data.posthd_lungs_dob==1){ $("#posthd_lungs_dob").prop("checked",true); }
            if(data.posthd_lungs_wheezzing==1){ $("#posthd_lungs_wheezzing").prop("checked",true); }

            if(data.posthd_pulse_stat=="Regular"){ _posthd_pulse_stat = "Regular"; ps_reg=1; $("#posthd_pulse_regular").prop("checked",true); }
            if(data.posthd_pulse_stat=="Irregular"){ _posthd_pulse_stat = "Irregular"; ps_irreg=1; $("#posthd_pulse_irregular").prop("checked",true); }
            else{ _posthd_pulse_stat = ""; }

            if(data.posthd_neuro_type=="comatose"){ _posthd_neuro_stat = "comatose"; $("#posthd_neuro_comatose").prop("checked",true); }
            if(data.posthd_neuro_type=="lethargic"){ _posthd_neuro_stat = "lethargic"; $("#posthd_neuro_lethargic").prop("checked",true); }
            if(data.posthd_neuro_type=="conscious"){ _posthd_neuro_stat = "conscious"; $("#posthd_neuro_conscious").prop("checked",true); }
            if(data.posthd_neuro_type=="gcs"){ _posthd_neuro_stat = "gcs"; $("#posthd_neuro_gcs").prop("checked",true); }
            else{ posthd_neuro_type = ""; }

                //multiple
            if(data.posthd_edema_none==1){ $("#posthd_edema_none").prop("checked",true); }
            if(data.posthd_edema_facial==1){ $("#posthd_edema_facial").prop("checked",true); }
            if(data.posthd_edema_pedal==1){ $("#posthd_edema_pedal").prop("checked",true); }
            if(data.posthd_edema_periorbital==1){ $("#posthd_edema_periorbital").prop("checked",true); }
            if(data.posthd_edema_ascitis==1){ $("#posthd_edema_ascitis").prop("checked",true); }

                //multiple
            if(data.posthd_gastro_good_appetite==1){ $("#posthd_gastro_good_appetite").prop("checked",true); }
            if(data.posthd_gastro_no_appetite==1){ $("#posthd_gastro_no_appetite").prop("checked",true); }
            if(data.posthd_gastro_fair_appetite==1){ $("#posthd_gastro_fair_appetite").prop("checked",true); }
            if(data.posthd_gastro_melena==1){ $("#posthd_gastro_melena").prop("checked",true); }
            if(data.posthd_gastro_hematochezia==1){ $("#posthd_gastro_hematochezia").prop("checked",true); }
            if(data.posthd_gastro_hematemesis==1){ $("#posthd_gastro_hematemesis").prop("checked",true); }
                //single
            if(data.posthd_skin_color=="normal"){ _posthd_skincolor_stat = "normal"; $("#posthd_skincolor_normal").prop("checked",true); }
            if(data.posthd_skin_color=="pale"){ _posthd_skincolor_stat = "normal"; $("#posthd_skincolor_pale").prop("checked",true); }
            if(data.posthd_skin_color=="cyanotic"){ _posthd_skincolor_stat = "cyanotic"; $("#posthd_skincolor_cyanotic").prop("checked",true); }
            else{ _posthd_skincolor_stat = ""; }
                //single
            if(data.posthd_others=="ecchymosis"){ _posthd_others_stat = "ecchymosis"; $("#posthd_others_ecchymosis").prop("checked",true); }
            if(data.posthd_others=="bruises"){ _posthd_others_stat = "bruises"; $("#posthd_others_bruises").prop("checked",true); }
            else{ _posthd_others_stat = ""; }
                //single
            if(data.posthd_turgor=="good"){ _posthd_turgor_stat = "good"; $("#posthd_turgor_good").prop("checked",true); }
            if(data.posthd_turgor=="slightly distented"){ _posthd_turgor_stat = "slightly distented"; $("#posthd_turgor_poor").prop("checked",true); }
            else{ _posthd_turgor_stat = ""; }
                //single
            if(data.posthd_neckveins=="flat"){ _posthd_neckveins_stat = "flat"; $("#posthd_neckveins_flat").prop("checked",true); }
            if(data.posthd_neckveins=="slightly distented"){ _posthd_neckveins_stat = "slightly distented"; $("#posthd_neckveins_slightlydistented").prop("checked",true); }
            if(data.posthd_neckveins=="distented"){ _posthd_neckveins_stat = "distented"; $("#posthd_neckveins_distented").prop("checked",true); }
            else{ _posthd_neckveins_stat = ""; }
                //single
            if(data.posthd_genito_urinary=="hematuria"){ _posthd_genitourinary_stat = "hematuria"; $("#posthd_genitourinary_hematuria").prop("checked",true); }
            if(data.posthd_genito_urinary=="dysuria"){ _posthd_genitourinary_stat = "dysuria"; $("#posthd_genitourinary_dysuria").prop("checked",true); }
            if(data.posthd_genito_urinary=="menstruation"){ _posthd_genitourinary_stat = "menstruation"; $("#posthd_genitourinary_menstruation").prop("checked",true); }
            else{ _posthd_genitourinary_stat = ""; }
                //multiple
            if(data.posthd_problems_none==1){ $("#posthd_problems_none").prop("checked",true); }
            if(data.posthd_problems_chest_pain==1){ $("#posthd_problems_chest_pain").prop("checked",true); }
            if(data.posthd_problems_cough==1){ $("#posthd_problems_cough").prop("checked",true); }
            if(data.posthd_problems_abdominal_pain==1){ $("#posthd_problems_abdominal_pain").prop("checked",true); }
            if(data.posthd_problems_lbm==1){ $("#posthd_problems_lbm").prop("checked",true); }
            if(data.posthd_problems_orthopnea==1){ $("#posthd_problems_orthopnea").prop("checked",true); }
            if(data.posthd_problems_fever==1){ $("#posthd_problems_fever").prop("checked",true); }
                //multiple
            if(data.posthd_vascularaccess_pc==1){ $("#posthd_vascularaccess_pc").prop("checked",true); }
            if(data.posthd_vascularaccess_tlc==1){ $("#posthd_vascularaccess_tlc").prop("checked",true); }
            if(data.posthd_vascularaccess_avf==1){ $("#posthd_vascularaccess_avf").prop("checked",true); }
            if(data.posthd_vascularaccess_avg==1){ $("#posthd_vascularaccess_avg").prop("checked",true); }
                //single single
            if(data.posthd_with_bruit==1){ $("#posthd_with_bruit").prop("checked",true); }
            if(data.posthd_without_bruit==1){ $("#posthd_without_bruit").prop("checked",true); }
                //multiple
            if(data.posthd_thrill_strong==1){ $("#posthd_thrill_strong").prop("checked",true); }
            if(data.posthd_thrill_weak==1){ $("#posthd_thrill_weak").prop("checked",true); }
            if(data.posthd_thrill_patent==1){ $("#posthd_thrill_patent").prop("checked",true); }
            if(data.posthd_thrill_clotted==1){ $("#posthd_thrill_clotted").prop("checked",true); }
            if(data.posthd_thrill_redness==1){ $("#posthd_thrill_redness").prop("checked",true); }
            if(data.posthd_thrill_swelling==1){ $("#posthd_thrill_swelling").prop("checked",true); }
            if(data.posthd_thrill_hematoma==1){ $("#posthd_thrill_hematoma").prop("checked",true); }
            if(data.posthd_thrill_pus_secretion==1){ $("#posthd_thrill_pus_secretion").prop("checked",true); }
            if(data.posthd_thrill_no_signs==1){ $("#posthd_thrill_no_signs").prop("checked",true); }
                //multiple
            if(data.posthd_no_bleeding==1){ $("#posthd_no_bleeding").prop("checked",true); }
            if(data.posthd_arterial_venous_ports==1){ $("#posthd_arterial_venous_ports").prop("checked",true); }
            if(data.posthd_each_port_capped_secured==1){ $("#posthd_each_port_capped_secured").prop("checked",true); }
            if(data.posthd_arterial_venous_flushed==1){ $("#posthd_arterial_venous_flushed").prop("checked",true); }
            if(data.posthd_aseptically_dressed==1){ $("#posthd_aseptically_dressed").prop("checked",true); }
            if(data.posthd_bactroban_ointment==1){ $("#posthd_bactroban_ointment").prop("checked",true); }
                //single
            if(data.discharge_type=="Home with Health Teaching Performed"){ _discharge_stat = "Home with Health Teaching Performed"; $("#discharge_home_with_health").prop("checked",true); }
            else{ _discharge_stat = data.discharge_type; $("#discharge_admitted").val(data.discharge_type); }

    });

    $('#tbl_nephro_record tbody').on('click','button[name="remove_info"]',function(){
        _txdelete="nephrorecord";
        _selectRowObjNephroOrder=$(this).closest('tr');
        var data=dt_patient_nephro_record.row(_selectRowObjNephroOrder).data();
        _patient_nephro_record_id=data.patient_info_id;
        /*alert(_patient_nephro_record_id);*/
        delete_notif();
    });

    $('#printpatientdetails').click(function(event){
       /* if(_isChecked==true){*/
            printing_notif();
            /*passvalues(_selectRowObjNephroOrder);*/
            $('input[type="checkbox"]').each(function() {
                if($(this).is (':checked')) {
                   $(this).attr('checked', 'true') 
                }
            });
            var currentURL = window.location.href;
            var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
            output = output+"/assets/css/css_special_files.css";

            $('#frm_nephro_record input:text').each(function() {
                $(this).attr('value', $(this).val());
            });
            $("#printcontentpatientdetails").printThis({
                debug: false,         
                importCSS: true,       
                importStyle: true,       
                printContainer: true,
                loadCSS: output,
                formValues:true
            });
        /*}
        else{
            notice_notif();
        }*/
            
    });

    var clearcheckboxes=function(){
        $("input:checkbox").prop('checked',false);
         dt;  _txnMode;  _selectedID;  _selectRowObj;  _btnNew;  _hepatitis_stat="";
         /*_dialysisbath_bicarbonate=0;  _dialysisacid_hd144a=0;*/
         _dialyzer_type=0;  dzc=0; dzhe=0; dzhf=0; dzren=0;
         _prehd_stat="";  prehd_am=0;  prehd_wc=0;  prehd_bs=0;  prehd_amwa=0;
         _posthd_stat="";  posthd_am=0;  posthd_wc=0;  posthd_bs=0;  posthd_amwa=0;
         _prehd_pulse_stat="";  ps_reg=0;  ps_irreg=0;
         _posthd_pulse_stat="";  posthd_ps_reg=0;  posthd_ps_irreg=0;
         _prehd_neuro_stat="";  _prehd_neuro_comatose="";
         _posthd_neuro_stat="";  _posthd_neuro_comatose="";
         _prehd_skincolor_stat="";
         _posthd_skincolor_stat="";
         _prehd_others_stat="";
         _posthd_others_stat="";
         _prehd_turgor_stat="";  _prehd_neckveins_stat="";
         _posthd_turgor_stat="";  _posthd_neckveins_stat="";
         _prehd_genitourinary_stat="";
         _posthd_genitourinary_stat="";
         _prehd_arterial_stat="";  _prehd_venous_stat="";  _prehd_cathererdressing_stat="";
         _posthd_arterial_stat="";  _posthd_venous_stat="";  _posthd_cathererdressing_stat="";
         _prehd_av_fistula_yes_stat="";  _prehd_anesthesia_stat="";
         _posthd_av_fistula_yes_stat="";  _posthd_anesthesia_stat="";
         _prehd_fistula_thrill_stat="";  _prehd_fistula_bruit_stat="";  _prehd_fistula_signs_stat="";
         _posthd_fistula_thrill_stat="";  _posthd_fistula_bruit_stat="";  _posthd_fistula_signs_stat="";
         _dhh=0;  _discharge_stat="";

    }

    var createPatientNephroRecord=function(){
        /*alert("aw");*/
        var _data=$('#frm_nephro_record').serializeArray();

        //id
        _data.push({name : "ref_patient_id" ,value : _selectedID});
        //HEPA
        _data.push({name : "hepatitis_status" ,value : _hepatitis_stat});

        //cash pcso philhealth
        _data.push({name : "cash" ,value : $('#cash').is(':checked') ? 1 : 0});
        _data.push({name : "pcso" ,value : $('#pcso').is(':checked') ? 1 : 0});
        _data.push({name : "philhealth" ,value : $('#philhealth').is(':checked') ? 1 : 0});

        //others_specify
        _data.push({name : "other_lowmolecular" ,value : $('#lowmolecular').is(':checked') ? 1 : 0});
        _data.push({name : "other_routineheparin" ,value : $('#routine_heparin').is(':checked') ? 1 : 0});
        _data.push({name : "other_lowdoseheparin" ,value : $('#lowdoseheparin').is(':checked') ? 1 : 0});
        /*_data.push({name : "dialysisbath_bicarbonate" ,value : _dialysisbath_bicarbonate});
        _data.push({name : "dialysisacid_hd144a" ,value : _dialysisacid_hd144a});*/
        //DIALYZER TYPE
        _data.push({name : "dialyzer_type" ,value : _dialyzer_type});
        //renalin strip
        _data.push({name : "renalinplus" ,value : $('#renalinplus').is(':checked') ? 1 : 0});
        _data.push({name : "renalinminus" ,value : $('#renalinminus').is(':checked') ? 1 : 0});
        //PREHD TYPE
        _data.push({name : "prehd_stat" ,value : _prehd_stat});
        //PULSE
        _data.push({name : "prehd_pulse_stat" ,value : _prehd_pulse_stat});
        //prehd neuro
        _data.push({name : "prehd_neuro_type" ,value : _prehd_neuro_stat});
        //pre_hd lungs
        _data.push({name : "prehd_lungs_clear" ,value : $('#prehd_lungs_clear').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_lungs_crackles" ,value : $('#prehd_lungs_crackles').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_lungs_hemoptysis" ,value : $('#prehd_lungs_hemoptysis').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_lungs_dob" ,value : $('#prehd_lungs_dob').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_lungs_wheezzing" ,value : $('#prehd_lungs_wheezzing').is(':checked') ? 1 : 0});
        //prehd edema
        _data.push({name : "prehd_edema_none" ,value : $('#prehd_edema_none').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_edema_facial" ,value : $('#prehd_edema_facial').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_edema_pedal" ,value : $('#prehd_edema_pedal').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_edema_periorbital" ,value : $('#prehd_edema_periorbital').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_edema_ascitis" ,value : $('#prehd_edema_ascitis').is(':checked') ? 1 : 0});
       /* _data.push({name : "prehd_edema_other" ,value : $('#prehd_edema_other').val()});*/
       //PRE HD GASTRO
        _data.push({name : "prehd_gastro_good_appetite" ,value : $('#prehd_gastro_good_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_no_appetite" ,value : $('#prehd_gastro_no_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_fair_appetite" ,value : $('#prehd_gastro_fair_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_melena" ,value : $('#prehd_gastro_melena').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_hematochezia" ,value : $('#prehd_gastro_hematochezia').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_hematemesis" ,value : $('#prehd_gastro_hematemesis').is(':checked') ? 1 : 0});
        //skin color
        _data.push({name : "prehd_skin_color" ,value : _prehd_skincolor_stat});
        //PREHD OTHERS
        _data.push({name : "prehd_others" ,value : _prehd_others_stat});
        //PREHD turgor
        _data.push({name : "prehd_turgor" ,value : _prehd_turgor_stat});
        //PREHD turgor
        _data.push({name : "prehd_neckveins" ,value : _prehd_neckveins_stat});
        //PREHD GENITO URINARY
        _data.push({name : "prehd_genito_urinary" ,value : _prehd_genitourinary_stat});
        //PREHD PROBLEMS/COMPLAINTS
        _data.push({name : "prehd_problems_none" ,value : $('#prehd_problems_none').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_chest_pain" ,value : $('#prehd_problems_chest_pain').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_cough" ,value : $('#prehd_problems_cough').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_abdominal_pain" ,value : $('#prehd_problems_abdominal_pain').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_lbm" ,value : $('#prehd_problems_lbm').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_orthopnea" ,value : $('#prehd_problems_orthopnea').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_fever" ,value : $('#prehd_problems_fever').is(':checked') ? 1 : 0});
        //PREHD VASCULAR ACCESS
        _data.push({name : "prehd_vascularaccess_pc" ,value : $('#prehd_vascularaccess_pc').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_vascularaccess_tlc" ,value : $('#prehd_vascularaccess_tlc').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_vascularaccess_avf" ,value : $('#prehd_vascularaccess_avf').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_vascularaccess_avg" ,value : $('#prehd_vascularaccess_avg').is(':checked') ? 1 : 0});
        //PREHD Bruit
        _data.push({name : "prehd_with_bruit" ,value : $('#prehd_with_bruit').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_without_bruit" ,value : $('#prehd_without_bruit').is(':checked') ? 1 : 0});
        //PREHD THRILL
        _data.push({name : "prehd_thrill_strong" ,value : $('#prehd_thrill_strong').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_weak" ,value : $('#prehd_thrill_weak').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_patent" ,value : $('#prehd_thrill_patent').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_clotted" ,value : $('#prehd_thrill_clotted').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_redness" ,value : $('#prehd_thrill_redness').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_swelling" ,value : $('#prehd_thrill_swelling').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_hematoma" ,value : $('#prehd_thrill_hematoma').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_pus_secretion" ,value : $('#prehd_thrill_pus_secretion').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_no_signs" ,value : $('#prehd_thrill_no_signs').is(':checked') ? 1 : 0});

        _data.push({name : "prehd_arterial" ,value : _prehd_arterial_stat});
        _data.push({name : "prehd_venous" ,value : _prehd_venous_stat});
        _data.push({name : "prehd_catherer_dressing" ,value : _prehd_cathererdressing_stat});
        _data.push({name : "prehd_av_fistula_cannulation_yes" ,value : _prehd_av_fistula_yes_stat});
        _data.push({name : "prehd_anesthesia" ,value : _prehd_anesthesia_stat});
        _data.push({name : "prehd_fistula_thrill" ,value : _prehd_fistula_thrill_stat});
        _data.push({name : "prehd_fistula_bruit" ,value : _prehd_fistula_bruit_stat});
        _data.push({name : "prehd_fistula_signs_of_infection" ,value : _prehd_fistula_signs_stat});
        _data.push({name : "prehd_fistula_dressing_aseptically" ,value : $('#prehd_fistula_dressing_aseptically').is(':checked') ? 1 : 0});

        //POSTHD
        _data.push({name : "posthd_stat" ,value : _posthd_stat});
        //PULSE
        _data.push({name : "posthd_pulse_stat" ,value : _posthd_pulse_stat});
        //posthd neuro
        _data.push({name : "posthd_neuro_type" ,value : _posthd_neuro_stat});
        //pre_hd lungs
        _data.push({name : "posthd_lungs_clear" ,value : $('#posthd_lungs_clear').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_lungs_crackles" ,value : $('#posthd_lungs_crackles').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_lungs_hemoptysis" ,value : $('#posthd_lungs_hemoptysis').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_lungs_dob" ,value : $('#posthd_lungs_dob').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_lungs_wheezzing" ,value : $('#posthd_lungs_wheezzing').is(':checked') ? 1 : 0});
        //posthd edema
        _data.push({name : "posthd_edema_none" ,value : $('#posthd_edema_none').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_edema_facial" ,value : $('#posthd_edema_facial').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_edema_pedal" ,value : $('#posthd_edema_pedal').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_edema_periorbital" ,value : $('#posthd_edema_periorbital').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_edema_ascitis" ,value : $('#posthd_edema_ascitis').is(':checked') ? 1 : 0});
       /* _data.push({name : "posthd_edema_other" ,value : $('#posthd_edema_other').val()});*/
       //PRE HD GASTRO
        _data.push({name : "posthd_gastro_good_appetite" ,value : $('#posthd_gastro_good_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_no_appetite" ,value : $('#posthd_gastro_no_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_fair_appetite" ,value : $('#posthd_gastro_fair_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_melena" ,value : $('#posthd_gastro_melena').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_hematochezia" ,value : $('#posthd_gastro_hematochezia').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_hematemesis" ,value : $('#posthd_gastro_hematemesis').is(':checked') ? 1 : 0});
        //skin color
        _data.push({name : "posthd_skin_color" ,value : _posthd_skincolor_stat});
        //posthd OTHERS
        _data.push({name : "posthd_others" ,value : _posthd_others_stat});
        //posthd turgor
        _data.push({name : "posthd_turgor" ,value : _posthd_turgor_stat});
        //posthd turgor
        _data.push({name : "posthd_neckveins" ,value : _posthd_neckveins_stat});
        //posthd GENITO URINARY
        _data.push({name : "posthd_genito_urinary" ,value : _posthd_genitourinary_stat});
        //posthd PROBLEMS/COMPLAINTS
        _data.push({name : "posthd_problems_none" ,value : $('#posthd_problems_none').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_chest_pain" ,value : $('#posthd_problems_chest_pain').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_cough" ,value : $('#posthd_problems_cough').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_abdominal_pain" ,value : $('#posthd_problems_abdominal_pain').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_lbm" ,value : $('#posthd_problems_lbm').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_orthopnea" ,value : $('#posthd_problems_orthopnea').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_fever" ,value : $('#posthd_problems_fever').is(':checked') ? 1 : 0});
        //posthd VASCULAR ACCESS
        _data.push({name : "posthd_vascularaccess_pc" ,value : $('#posthd_vascularaccess_pc').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_vascularaccess_tlc" ,value : $('#posthd_vascularaccess_tlc').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_vascularaccess_avf" ,value : $('#posthd_vascularaccess_avf').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_vascularaccess_avg" ,value : $('#posthd_vascularaccess_avg').is(':checked') ? 1 : 0});
        //posthd Bruit
        _data.push({name : "posthd_with_bruit" ,value : $('#posthd_with_bruit').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_without_bruit" ,value : $('#posthd_without_bruit').is(':checked') ? 1 : 0});
        //posthd THRILL
        _data.push({name : "posthd_thrill_strong" ,value : $('#posthd_thrill_strong').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_weak" ,value : $('#posthd_thrill_weak').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_patent" ,value : $('#posthd_thrill_patent').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_clotted" ,value : $('#posthd_thrill_clotted').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_redness" ,value : $('#posthd_thrill_redness').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_swelling" ,value : $('#posthd_thrill_swelling').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_hematoma" ,value : $('#posthd_thrill_hematoma').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_pus_secretion" ,value : $('#posthd_thrill_pus_secretion').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_no_signs" ,value : $('#posthd_thrill_no_signs').is(':checked') ? 1 : 0});

        _data.push({name : "posthd_no_bleeding" ,value : $('#posthd_no_bleeding').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_arterial_venous_ports" ,value : $('#posthd_arterial_venous_ports').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_each_port_capped_secured" ,value : $('#posthd_each_port_capped_secured').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_arterial_venous_flushed" ,value : $('#posthd_arterial_venous_flushed').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_aseptically_dressed" ,value : $('#posthd_aseptically_dressed').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_bactroban_ointment" ,value : $('#posthd_bactroban_ointment').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_catherer_dressing" ,value : _posthd_cathererdressing_stat});
        _data.push({name : "discharge_type" ,value : _discharge_stat});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_Info/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var updatePatientNephroOrder=function(){
        var _data=$('#frm_nephro_record').serializeArray();
        //HEPA
        _data.push({name : "hepatitis_status" ,value : _hepatitis_stat});
        //cash pcso philhealth
        _data.push({name : "cash" ,value : $('#cash').is(':checked') ? 1 : 0});
        _data.push({name : "pcso" ,value : $('#pcso').is(':checked') ? 1 : 0});
        _data.push({name : "philhealth" ,value : $('#philhealth').is(':checked') ? 1 : 0});
        //others_specify
        _data.push({name : "other_lowmolecular" ,value : $('#lowmolecular').is(':checked') ? 1 : 0});
        _data.push({name : "other_routineheparin" ,value : $('#routine_heparin').is(':checked') ? 1 : 0});
        _data.push({name : "other_lowdoseheparin" ,value : $('#lowdoseheparin').is(':checked') ? 1 : 0});
        /*_data.push({name : "dialysisbath_bicarbonate" ,value : _dialysisbath_bicarbonate});
        _data.push({name : "dialysisacid_hd144a" ,value : _dialysisacid_hd144a});*/
        //DIALYZER TYPE
        _data.push({name : "dialyzer_type" ,value : _dialyzer_type});
        //renalinstrip
        _data.push({name : "renalinplus" ,value : $('#renalinplus').is(':checked') ? 1 : 0});
        _data.push({name : "renalinminus" ,value : $('#renalinminus').is(':checked') ? 1 : 0});
        //PREHD TYPE
        _data.push({name : "prehd_stat" ,value : _prehd_stat});
        //PULSE
        _data.push({name : "prehd_pulse_stat" ,value : _prehd_pulse_stat});
        //prehd neuro
        _data.push({name : "prehd_neuro_type" ,value : _prehd_neuro_stat});
        //pre_hd lungs
        _data.push({name : "prehd_lungs_clear" ,value : $('#prehd_lungs_clear').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_lungs_crackles" ,value : $('#prehd_lungs_crackles').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_lungs_hemoptysis" ,value : $('#prehd_lungs_hemoptysis').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_lungs_dob" ,value : $('#prehd_lungs_dob').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_lungs_wheezzing" ,value : $('#prehd_lungs_wheezzing').is(':checked') ? 1 : 0});
        //prehd edema
        _data.push({name : "prehd_edema_none" ,value : $('#prehd_edema_none').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_edema_facial" ,value : $('#prehd_edema_facial').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_edema_pedal" ,value : $('#prehd_edema_pedal').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_edema_periorbital" ,value : $('#prehd_edema_periorbital').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_edema_ascitis" ,value : $('#prehd_edema_ascitis').is(':checked') ? 1 : 0});
       /* _data.push({name : "prehd_edema_other" ,value : $('#prehd_edema_other').val()});*/
       //PRE HD GASTRO
        _data.push({name : "prehd_gastro_good_appetite" ,value : $('#prehd_gastro_good_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_no_appetite" ,value : $('#prehd_gastro_no_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_fair_appetite" ,value : $('#prehd_gastro_fair_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_melena" ,value : $('#prehd_gastro_melena').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_hematochezia" ,value : $('#prehd_gastro_hematochezia').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_gastro_hematemesis" ,value : $('#prehd_gastro_hematemesis').is(':checked') ? 1 : 0});
        //skin color
        _data.push({name : "prehd_skin_color" ,value : _prehd_skincolor_stat});
        //PREHD OTHERS
        _data.push({name : "prehd_others" ,value : _prehd_others_stat});
        //PREHD turgor
        _data.push({name : "prehd_turgor" ,value : _prehd_turgor_stat});
        //PREHD turgor
        _data.push({name : "prehd_neckveins" ,value : _prehd_neckveins_stat});
        //PREHD GENITO URINARY
        _data.push({name : "prehd_genito_urinary" ,value : _prehd_genitourinary_stat});
        //PREHD PROBLEMS/COMPLAINTS
        _data.push({name : "prehd_problems_none" ,value : $('#prehd_problems_none').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_chest_pain" ,value : $('#prehd_problems_chest_pain').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_cough" ,value : $('#prehd_problems_cough').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_abdominal_pain" ,value : $('#prehd_problems_abdominal_pain').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_lbm" ,value : $('#prehd_problems_lbm').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_orthopnea" ,value : $('#prehd_problems_orthopnea').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_problems_fever" ,value : $('#prehd_problems_fever').is(':checked') ? 1 : 0});
        //PREHD VASCULAR ACCESS
        _data.push({name : "prehd_vascularaccess_pc" ,value : $('#prehd_vascularaccess_pc').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_vascularaccess_tlc" ,value : $('#prehd_vascularaccess_tlc').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_vascularaccess_avf" ,value : $('#prehd_vascularaccess_avf').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_vascularaccess_avg" ,value : $('#prehd_vascularaccess_avg').is(':checked') ? 1 : 0});
        //PREHD Bruit
        _data.push({name : "prehd_with_bruit" ,value : $('#prehd_with_bruit').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_without_bruit" ,value : $('#prehd_without_bruit').is(':checked') ? 1 : 0});
        //PREHD THRILL
        _data.push({name : "prehd_thrill_strong" ,value : $('#prehd_thrill_strong').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_weak" ,value : $('#prehd_thrill_weak').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_patent" ,value : $('#prehd_thrill_patent').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_clotted" ,value : $('#prehd_thrill_clotted').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_redness" ,value : $('#prehd_thrill_redness').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_swelling" ,value : $('#prehd_thrill_swelling').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_hematoma" ,value : $('#prehd_thrill_hematoma').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_pus_secretion" ,value : $('#prehd_thrill_pus_secretion').is(':checked') ? 1 : 0});
        _data.push({name : "prehd_thrill_no_signs" ,value : $('#prehd_thrill_no_signs').is(':checked') ? 1 : 0});

        _data.push({name : "prehd_arterial" ,value : _prehd_arterial_stat});
        _data.push({name : "prehd_venous" ,value : _prehd_venous_stat});
        _data.push({name : "prehd_catherer_dressing" ,value : _prehd_cathererdressing_stat});
        _data.push({name : "prehd_av_fistula_cannulation_yes" ,value : _prehd_av_fistula_yes_stat});
        _data.push({name : "prehd_anesthesia" ,value : _prehd_anesthesia_stat});
        _data.push({name : "prehd_fistula_thrill" ,value : _prehd_fistula_thrill_stat});
        _data.push({name : "prehd_fistula_bruit" ,value : _prehd_fistula_bruit_stat});
        _data.push({name : "prehd_fistula_signs_of_infection" ,value : _prehd_fistula_signs_stat});
        _data.push({name : "prehd_fistula_dressing_aseptically" ,value : $('#prehd_fistula_dressing_aseptically').is(':checked') ? 1 : 0});

        //POSTHD
        _data.push({name : "posthd_stat" ,value : _posthd_stat});
        //PULSE
        _data.push({name : "posthd_pulse_stat" ,value : _posthd_pulse_stat});
        //posthd neuro
        _data.push({name : "posthd_neuro_type" ,value : _posthd_neuro_stat});
        //pre_hd lungs
        _data.push({name : "posthd_lungs_clear" ,value : $('#posthd_lungs_clear').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_lungs_crackles" ,value : $('#posthd_lungs_crackles').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_lungs_hemoptysis" ,value : $('#posthd_lungs_hemoptysis').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_lungs_dob" ,value : $('#posthd_lungs_dob').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_lungs_wheezzing" ,value : $('#posthd_lungs_wheezzing').is(':checked') ? 1 : 0});
        //posthd edema
        _data.push({name : "posthd_edema_none" ,value : $('#posthd_edema_none').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_edema_facial" ,value : $('#posthd_edema_facial').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_edema_pedal" ,value : $('#posthd_edema_pedal').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_edema_periorbital" ,value : $('#posthd_edema_periorbital').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_edema_ascitis" ,value : $('#posthd_edema_ascitis').is(':checked') ? 1 : 0});
       /* _data.push({name : "posthd_edema_other" ,value : $('#posthd_edema_other').val()});*/
       //PRE HD GASTRO
        _data.push({name : "posthd_gastro_good_appetite" ,value : $('#posthd_gastro_good_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_no_appetite" ,value : $('#posthd_gastro_no_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_fair_appetite" ,value : $('#posthd_gastro_fair_appetite').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_melena" ,value : $('#posthd_gastro_melena').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_hematochezia" ,value : $('#posthd_gastro_hematochezia').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_gastro_hematemesis" ,value : $('#posthd_gastro_hematemesis').is(':checked') ? 1 : 0});
        //skin color
        _data.push({name : "posthd_skin_color" ,value : _posthd_skincolor_stat});
        //posthd OTHERS
        _data.push({name : "posthd_others" ,value : _posthd_others_stat});
        //posthd turgor
        _data.push({name : "posthd_turgor" ,value : _posthd_turgor_stat});
        //posthd turgor
        _data.push({name : "posthd_neckveins" ,value : _posthd_neckveins_stat});
        //posthd GENITO URINARY
        _data.push({name : "posthd_genito_urinary" ,value : _posthd_genitourinary_stat});
        //posthd PROBLEMS/COMPLAINTS
        _data.push({name : "posthd_problems_none" ,value : $('#posthd_problems_none').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_chest_pain" ,value : $('#posthd_problems_chest_pain').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_cough" ,value : $('#posthd_problems_cough').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_abdominal_pain" ,value : $('#posthd_problems_abdominal_pain').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_lbm" ,value : $('#posthd_problems_lbm').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_orthopnea" ,value : $('#posthd_problems_orthopnea').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_problems_fever" ,value : $('#posthd_problems_fever').is(':checked') ? 1 : 0});
        //posthd VASCULAR ACCESS
        _data.push({name : "posthd_vascularaccess_pc" ,value : $('#posthd_vascularaccess_pc').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_vascularaccess_tlc" ,value : $('#posthd_vascularaccess_tlc').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_vascularaccess_avf" ,value : $('#posthd_vascularaccess_avf').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_vascularaccess_avg" ,value : $('#posthd_vascularaccess_avg').is(':checked') ? 1 : 0});
        //posthd Bruit
        _data.push({name : "posthd_with_bruit" ,value : $('#posthd_with_bruit').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_without_bruit" ,value : $('#posthd_without_bruit').is(':checked') ? 1 : 0});
        //posthd THRILL
        _data.push({name : "posthd_thrill_strong" ,value : $('#posthd_thrill_strong').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_weak" ,value : $('#posthd_thrill_weak').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_patent" ,value : $('#posthd_thrill_patent').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_clotted" ,value : $('#posthd_thrill_clotted').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_redness" ,value : $('#posthd_thrill_redness').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_swelling" ,value : $('#posthd_thrill_swelling').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_hematoma" ,value : $('#posthd_thrill_hematoma').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_pus_secretion" ,value : $('#posthd_thrill_pus_secretion').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_thrill_no_signs" ,value : $('#posthd_thrill_no_signs').is(':checked') ? 1 : 0});

        _data.push({name : "posthd_no_bleeding" ,value : $('#posthd_no_bleeding').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_arterial_venous_ports" ,value : $('#posthd_arterial_venous_ports').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_each_port_capped_secured" ,value : $('#posthd_each_port_capped_secured').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_arterial_venous_flushed" ,value : $('#posthd_arterial_venous_flushed').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_aseptically_dressed" ,value : $('#posthd_aseptically_dressed').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_bactroban_ointment" ,value : $('#posthd_bactroban_ointment').is(':checked') ? 1 : 0});
        _data.push({name : "posthd_catherer_dressing" ,value : _posthd_cathererdressing_stat});
        _data.push({name : "discharge_type" ,value : _discharge_stat});

        /*console.log(_data);*/
        _data.push({name : "patient_info_id" ,value : _patient_nephro_record_id});
        //_data.push({name:"is_inventory",value: $('input[name="is_inventory"]').val()});

        //alert($('input[name="is_inventory"]').val());
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_Info/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
            
        });
    };

    var removeNephroRecord=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_Info/transaction/delete",
            "data":{patient_info_id: _patient_nephro_record_id},
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    //end nephro record

    var _patient_referral_id;
    var _txnreferral;

    $('.patient_referral_letter').click(function(){
        if(_isChecked==true){
            $('#tbl_patient_referral').dataTable().fnDestroy();
            showSpinningProgressLOADING();
            setTimeout(function() {
                 getReferralList();
            }, 200);            
            $('#modal_referral_list').modal('toggle');
        }
        else{
            notice_notif();
        }
        
    });

    //Start Referral Entry
    var getReferralList=function(){
            patient_referral_dt=$('#tbl_patient_referral').DataTable({
                "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "autoWidth":true,
            "scrollY": "400px",
            "scrollCollapse": true,
            "table-layout": "fixed",            
            "paging":true,
            "order": [[ 3, "desc" ]],  
            "ajax": {
            "url": "Patient_referral/transaction/list",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "ref_patient_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "referral_code" },
                { targets:[1],data: "referral_date" },
                {
                    targets:[2],
                    render: function (data, type, full, meta){
                         var view_referral='<button class="btn btn-default btn-xs" name="view_referral" data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';

                        return '<center>'+view_referral+edit_referral+remove_referral+'</center>';
                    }
                },
                { visible:false, targets:[3],data: "patient_referral_id" }
            ],
            language: {
                 searchPlaceholder: ""
             },
             "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "8px"
                });
            }

        });

    }

    $('#new_referral').click(function(){
        _txnreferral="new";
        checkHeader(_txnreferral);
        $('.patient_txn').text('New');
        clearFields($('#frm_referral'));

        $('#referral_letter_icon').removeClass();
        $('#referral_letter_icon').addClass('fa fa-plus-circle');

        $("#frm_referral input").prop('disabled',false);
        $("#frm_referral textarea").prop('disabled',false);        

        $('#referral_date').val(today);   

        $('#save_referral').show();
        $('#print_referral').hide();
        $('#ftr_referral').hide();

        $('#modal_patient_referral').modal('toggle');
    });    

    $('#tbl_patient_referral tbody').on('click','button[name="edit_info"]',function(){
        _txnreferral="edit";
        checkHeader(_txnreferral);
        $('.patient_txn').text('Edit');

        $('#referral_letter_icon').removeClass();
        $('#referral_letter_icon').addClass('fa fa-edit');

        clearFields($('#frm_referral'));
        $("#frm_referral input").prop('disabled',false);
        $("#frm_referral textarea").prop('disabled',false);        

        $('#save_referral').show();
        $('#print_referral').hide();
        $('#ftr_referral').hide();

        _selectRowObjreferral =$(this).closest('tr');
        var datareferral=patient_referral_dt.row(_selectRowObjreferral).data();
        _selectedIDreferral=datareferral.patient_referral_id;

        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(datareferral,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        }); 
        $('#modal_patient_referral').modal('toggle');
    });

    $('#tbl_patient_referral tbody').on('click','button[name="view_referral"]',function(){
        _txnreferral="view";
        checkHeader(_txnreferral);
        $('.patient_txn').text('View');
        clearFields($('#frm_referral'));

        $('#referral_letter_icon').removeClass();
        $('#referral_letter_icon').addClass('fa fa-print');

        $("#frm_referral input").prop('disabled',true);
        $("#frm_referral textarea").prop('disabled',true);

        $('#save_referral').hide();
        $('#print_referral').show();
        $('#ftr_referral').show();

        _selectRowObjreferral =$(this).closest('tr');
        var datareferral=patient_referral_dt.row(_selectRowObjreferral).data();
        _selectedIDreferral=datareferral.patient_referral_id;

        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(datareferral,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        }); 
        $('#modal_patient_referral').modal('toggle');
    });    

    $('#tbl_patient_referral tbody').on('click','button[name="remove_referral"]',function(){
        _txdelete="referral";

        _selectRowObjreferral =$(this).closest('tr');
        var datareferral=patient_referral_dt.row(_selectRowObjreferral).data();
        _selectedIDreferral=datareferral.patient_referral_id;

        delete_notif();
    });

   $('#save_referral').click(function(){
        if(validateRequiredFields($('#frm_referral'))){
            if(_txnreferral=="new"){
                SaveReferral().done(function(response){
                    showNotification(response);
                    if(response.stat=="success"){
                        $('#tbl_patient_referral').DataTable().ajax.reload();
                    }
                }).always(function(){
                    $.unblockUI();
                    $('#modal_patient_referral').modal('toggle');
                });
            }
            if(_txnreferral=="edit"){

                UpdateReferral().done(function(response){
                    showNotification(response);
                    if(response.stat=="success"){
                        $('#tbl_patient_referral').DataTable().ajax.reload();
                    }
                }).always(function(){
                    $.unblockUI();
                    $('#modal_patient_referral').modal('toggle');
                });
            }
        }   
    });

   var SaveReferral=function(){
        var _data=$('#frm_referral').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_referral/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    var UpdateReferral=function(){
        var _data=$('#frm_referral').serializeArray();
            _data.push({name : "patient_referral_id" ,value : _selectedIDreferral});
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_referral/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    var removeReferral=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_referral/transaction/delete",
            "data":{patient_referral_id: _selectedIDreferral},
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };    

    var removeClinicalDatabase=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_clinical/transaction/delete",
            "data":{patient_clinical_id: _selectedIDclinical},
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };        

    $('#print_referral').click(function(event){
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        /*alert(output);*/
        $("#print_referral_content").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:true,
            canvas: false 
        });
    });

    //End Referral Entry

    // Start of Admitting Order Entry

    var _patient_admitting_order_id;
    var _txnadmittingorder;

    $('.patient_admitting_order').click(function(){
        if(_isChecked==true){
            $('#tbl_patient_admitting_order').dataTable().fnDestroy();
            showSpinningProgressLOADING();
            setTimeout(function() {
                 getAmittingOrderList();
            }, 200);
            $('#modal_admitting_order_list').modal('toggle');
        }
        else{
            notice_notif();
        }
        
    });

    //ash
    var getAmittingOrderList=function(){
            patient_admitting_order_dt=$('#tbl_patient_admitting_order').DataTable({
                "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "autoWidth":true,
            "scrollY": "400px",
            "scrollCollapse": true,
            "table-layout": "fixed",            
            "paging":true,
            "order": [[ 3, "desc" ]],
            "ajax": {
            "url": "Patient_admitting_order/transaction/list",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "ref_patient_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "admitting_order_code" },
                { targets:[1],data: "admitting_order_date" },
                {
                    targets:[2],
                    render: function (data, type, full, meta){
                         var view_admitting_order='<button class="btn btn-default btn-xs" name="view_admitting_order" data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';

                        return '<center>'+view_admitting_order+edit_admitting_order+remove_admitting_order+'</center>';
                    }
                },
                { visible:false, targets:[3],data: "patient_admitting_order_id" }
            ],
            language: {
                 searchPlaceholder: ""
             },
             "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "8px"
                });
            }

        });

    }

    $('#new_admitting_order').click(function(){
        _txnadmittingorder="new";
        checkHeader(_txnadmittingorder);
        $('.patient_txn').text('New');
        clearFields($('#frm_admitting_order'));

        $('#admitting_order_icon').removeClass();
        $('#admitting_order_icon').addClass('fa fa-plus-circle');

        $("#frm_admitting_order input:checkbox").prop('checked',false);
        $("#frm_admitting_order input").prop('disabled',false);
        $("#frm_admitting_order textarea").prop('disabled',false);        

        $('#admitting_order_date').val(today);   

        $('#save_admitting_order').show();
        $('#print_admitting_order').hide();
        $('#ftr_admitting_order').hide();

        $('#modal_admitting_order').modal('toggle');
    });    

    $('#btn_check_all_checkbox').click(function(){
        $("#frm_admitting_order input:checkbox").prop('checked',true);
        $("#frm_admitting_order input:text").val('12'); 
    });

    $('#tbl_patient_admitting_order tbody').on('click','button[name="edit_info"]',function(){
        _txnadmittingorder="edit";        
        checkHeader(_txnadmittingorder);
        $('.patient_txn').text('Edit');
        clearFields($('#frm_admitting_order'));

        $('#admitting_order_icon').removeClass();
        $('#admitting_order_icon').addClass('fa fa-edit');

        $("#frm_admitting_order input:checkbox").prop('checked',false);
        $("#frm_admitting_order input:text").prop('disabled',false);

        $("#frm_admitting_order input:checkbox").css('pointer-events','all'); 
        $("#frm_admitting_order input:text").css('pointer-events','all'); 

        $('#save_admitting_order').show();
        $('#print_admitting_order').hide();
        $('#ftr_admitting_order').hide();

        _selectRowObjadmittingorder =$(this).closest('tr');
        var dataadmittingorder=patient_admitting_order_dt.row(_selectRowObjadmittingorder).data();
        _selectedIDadmittingorder=dataadmittingorder.patient_admitting_order_id;

        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(dataadmittingorder,function(name,value){

                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }

                    if(_elem.attr('id')==name){
                        if(value==1){ _elem.prop('checked', true); }
                        else{ _elem.prop('checked', false); }
                    }

                });
        }); 
        $('#modal_admitting_order').modal('toggle');
    });


    $('#tbl_patient_admitting_order tbody').on('click','button[name="view_admitting_order"]',function(){
        _txnadmittingorder="view";
        checkHeader(_txnadmittingorder);
        $('.patient_txn').text('View');
        clearFields($('#frm_admitting_order'));

        $('#admitting_order_icon').removeClass();
        $('#admitting_order_icon').addClass('fa fa-print');

        $("#frm_admitting_order input:checkbox").prop('checked',false);
        $("#frm_admitting_order input:text").prop('disabled',true);

        $("#frm_admitting_order input:checkbox").css('pointer-events','none'); 
        $("#frm_admitting_order input:text").css('pointer-events','none'); 

        $('#save_admitting_order').hide();
        $('#print_admitting_order').show();
        $('#ftr_admitting_order').show();        

        _selectRowObjadmittingorder =$(this).closest('tr');
        var dataadmittingorder=patient_admitting_order_dt.row(_selectRowObjadmittingorder).data();
        _selectedIDadmittingorder=dataadmittingorder.patient_admitting_order_id;

        $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(dataadmittingorder,function(name,value){

                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }

                    if(_elem.attr('id')==name){
                        if(value==1){ _elem.prop('checked', true); }
                        else{ _elem.prop('checked', false); }
                    }

                });
        }); 
        $('#modal_admitting_order').modal('toggle');        
    });

    $('#tbl_patient_admitting_order tbody').on('click','button[name="remove_info"]',function(){
        _txdelete="admittingorder";
        _selectRowObjadmittingorder =$(this).closest('tr');
        var dataadmittingorder=patient_admitting_order_dt.row(_selectRowObjadmittingorder).data();
        _selectedIDadmittingorder=dataadmittingorder.patient_admitting_order_id;

        delete_notif();
    });


    $('#save_admitting_order').click(function(){
        if(validateRequiredFields($('#frm_admitting_order'))){
            if(_txnadmittingorder=="new"){
                Saveadmittingorder().done(function(response){
                    showNotification(response);
                    if(response.stat=="success"){
                        $('#tbl_patient_admitting_order').DataTable().ajax.reload();
                    }
                }).always(function(){
                    $.unblockUI();
                    $('#modal_admitting_order').modal('toggle');
                });
            }
            if(_txnadmittingorder=="edit"){

                Updateadmittingorder().done(function(response){
                    showNotification(response);
                    if(response.stat=="success"){
                        $('#tbl_patient_admitting_order').DataTable().ajax.reload();
                    }
                }).always(function(){
                    $.unblockUI();
                    $('#modal_admitting_order').modal('toggle');
                });
            }
        }   
    });

    var Saveadmittingorder=function(){
        var _data=$('#frm_admitting_order').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            $('#frm_admitting_order input:checkbox').each(function()
            {
                var A = ($(this).attr('id'));
                _data.push({name : A ,value : $('#'+A+'').is(':checked') ? 1 : 0});
            });

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_admitting_order/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    var Updateadmittingorder=function(){
        var _data=$('#frm_admitting_order').serializeArray();
            _data.push({name : "patient_admitting_order_id" ,value : _selectedIDadmittingorder});
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            $('#frm_admitting_order input:checkbox').each(function()
            {
                var A = ($(this).attr('id'));
                _data.push({name : A ,value : $('#'+A+'').is(':checked') ? 1 : 0});
            });

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_admitting_order/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    $('#print_admitting_order').click(function(event){
        printing_notif();
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        /*alert(output);*/
        /*$('input[type="checkbox"]').each(function() {
               $(this).attr('checked', 'false') 
        });*/

        $('#frm_admitting_order input:checkbox').each(function() {
            if($(this).is (':checked')) {
               $(this).attr('checked', true);
            }
        });

        /*$('input[type="checkbox"]').each(function() {
            if($(this).is (':checked')) {
               $(this).attr('checked', 'true') 
            }
        });*/

        $('#frm_admitting_order input:text').each(function() {
               /*var val = $(this).val();
               var id = $(this).attr('id');
               $('#'++'').val(10);*/
                $(this).attr('value', $(this).val());

        });


        

        $("#print_admitting_order_content").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:false,
            canvas: false 
        });
    });

    // End of Admitting Order Entry

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
                if(_txdelete=="patientrecord"){
                    swal("Deleted!", "Patient Information has been deleted.", "success");
                    removePatient().done(function(response){
                    showNotification(response);
                    dt.row(_selectRowObj).remove().draw();
                   $.unblockUI();
                    });
                }
                
                if(_txdelete=="nephro_record"){
                    swal("Deleted!", "Nephro Record has been deleted.", "success");
                    removePatient_Info().done(function(response){
                    showNotification(response);
                        dt.row(_selectRowObj).remove().draw();
                     //   alert(data.ref_service_id);
                        $.unblockUI();
                    });
                }
                // 1
                if(_txdelete=="prescription"){
                    swal("Deleted!", "Patient Prescription has been deleted.", "success");
                    removePrescription().done(function(response){
                    showNotification(response);
                        patient_prescription_dt.row(_selectRowObjprescription).remove().draw();
                     //   alert(data.ref_service_id);
                        $.unblockUI();
                    });
                }
                if(_txdelete=="medicalabstract"){
                    swal("Deleted!", "Patient Medical Abstract has been deleted.", "success");
                    removeMedicalAbstract().done(function(response){
                    showNotification(response);
                        patient_medical_abstract_dt.row(_selectRowObjmedicalabstract).remove().draw();
                        $.unblockUI();
                    });
                }
                if(_txdelete=="nephroorder"){
                    swal("Deleted!", "Nephro Order has been deleted.", "success");
                    removeNephroOrder().done(function(response){
                    showNotification(response);
                        patient_nephro_order_dt.row(_selectRowObjNephroOrder).remove().draw();
                        $.unblockUI();
                    });
                }
                // 8
                if(_txdelete=="labreport"){
                    swal("Deleted!", "Laboratory Report has been deleted.", "success");
                    removeLaboratoryReport().done(function(response){
                    showNotification(response);
                        patient_lab_report_dt.row(_selectRowObjLabDiagnostic).remove().draw();
                        $.unblockUI();
                    });
                }
                if(_txdelete=="medicalcert"){
                    swal("Deleted!", "Medical Certificate has been deleted.", "success");
                    removeMedicalCertificate().done(function(response){
                    showNotification(response);
                        patient_medical_certificate_dt.row(_selectRowObjmedicalcert).remove().draw();
                        $.unblockUI();
                    });
                }
                // 2
                if(_txdelete=="lab"){
                     swal("Deleted!", "Patient Lab has been deleted.", "success");
                    removeLab().done(function(response){
                    showNotification(response);
                        patient_lab_dt.row(_selectRowObjlab).remove().draw();
                     //   alert(data.ref_service_id);
                        $.unblockUI();
                    });
                }
                // 3
                if(_txdelete=="billing"){
                     swal("Deleted!", "Patient Billing has been deleted.", "success");
                    removeBilling().done(function(response){
                    showNotification(response);
                        patient_billing_dt.row(_selectRowObjbilling).remove().draw();
                     //   alert(data.ref_service_id);
                        $.unblockUI();
                    });
                }
                // 4
                if(_txdelete=="visitingrecord"){
                     swal("Deleted!", "Patient Visiting Record has been deleted.", "success");
                    removeVisiting().done(function(response){
                    showNotification(response);
                        patient_visiting_record_dt.row(_selectRowObjvisiting).remove().draw();
                     //   alert(data.ref_service_id);
                        $.unblockUI();
                    });
                }
                if(_txdelete=="nephrorecord"){
                     swal("Deleted!", "Nephro Record has been deleted.", "success");
                    removeNephroRecord().done(function(response){
                    showNotification(response);
                        dt_patient_nephro_record.row(_selectRowObjNephroOrder).remove().draw();
                     //   alert(data.ref_service_id);
                        $.unblockUI();
                    });
                }
                if(_txdelete=="referral"){
                    swal("Deleted!", "Patient Referral has been deleted.", "success");
                    removeReferral().done(function(response){
                    showNotification(response);
                        patient_referral_dt.row(_selectRowObjreferral).remove().draw();
                        $.unblockUI();
                    });
                }
                // 5
                if(_txdelete=="clinicaldatabase"){
                    swal("Deleted!", "Clinical Database has been deleted.", "success");
                    removeClinicalDatabase().done(function(response){
                    showNotification(response);
                        patient_clinical_dt.row(_selectRowObjclinical).remove().draw();
                        $.unblockUI();
                    });
                }   
                if(_txdelete=="admittingorder"){
                    swal("Deleted!", "Admitting Order has been deleted.", "success");
                    removeAdmittingOrder().done(function(response){
                    showNotification(response);
                        patient_admitting_order_dt.row(_selectRowObjadmittingorder).remove().draw();
                        $.unblockUI();
                    });
                }                                
                 
            } else {     
                swal("Cancelled", "Your file is safe :)", "error");   
            } 
        });
    };

    var success_notif=function(type){
        swal("Good job!", "Sucessfully "+type, "success");
    };

    var notice_notif=function(type){
        swal("Select Data First!", type, "warning");

    };

    var printing_notif=function(){
        swal({   
            title: 'Initializing Printing..',    
            timer: 2000,
            imageUrl: "assets/loader.svg"
        });
    };



    var companyimage=function(){
        var currentURL = window.location.href;
        var outputimage = currentURL.match(/^(.*)\/[^/]*$/)[1];
        var company_image = outputimage+"/assets/invoice-logo.png";
        $('.company_print').attr('src',company_image);
    };

    var showNotification=function(obj){
        PNotify.removeAll();
        new PNotify({
            title:  obj.title,
            text:  obj.msg,
            type:  obj.stat
        });
    }; 

    var validateRequiredFieldsinemployee=function(f){
    var stat=true;

    $('div.form-group').removeClass('has-error');
    $('div.fg-line').removeClass('has-error');
    $('input[required],textarea[required],select[required]',f).each(function(){

            if($(this).is('select')){
            if($(this).val()==0 || $(this).val()==null){
                showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                $(this).closest('div.form-group').addClass('has-error');
                $(this).focus();
                stat=false;
                return false;
            }
        
            }else{
            if($(this).val()==""){
                showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                $(this).closest('div.form-group').addClass('has-error');
                $(this).focus();
                stat=false;
                return false;
            }
        }
        



    });

    return stat;
    };

    var clearFields=function(f){
        $('input,textarea',f).val('');
        // $(f).find('input:first').focus();
        $('#card_type').val('');
        $('#points').val('');
        $('#description ').val('');
        $('div.form-group').removeClass('has-error');
    };

    

    function format ( d ) {
        return '<div class="card">'+
                  '<div class="card-header bgm-green">'+
                      '<h2 style="font-weight:bold;font-size:18pt;">Notes'+
                      '</h2>'+
                    '</div>'+
                    '<div class="card-body card-padding">'+
                        d.ref_note+
                    '</div>'+
                '</div>'
        /*'<h3 class="boldlabel">Notes :</h3>'+
        '<hr style="height:1px;background-color:black;"></hr>'+
        '<p class="boldlabel">'+d.ref_note+'</p>'*/
    };

    var validateRequiredFields=function(f){
    var stat=true;
    var pword=$('#user_pword').val();
    var cpword=$('#user_confirm_pword').val();

        $('div.form-group').removeClass('has-error');
        $('div.fg-line').removeClass('has-error');
        $('input[required],textarea[required],select[required]',f).each(function(){

                if($(this).is('select')){
                if($(this).val()==0 || $(this).val()==null){
                    showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                    $(this).closest('.fg-line').addClass('has-error');
                    $(this).focus();
                    stat=false;
                    return false;
                }
            
                }else{
                if($(this).val()==""){
                    showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                    $(this).closest('.fg-line').addClass('has-error');
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

        $('.date-picker').datepicker({
          autoclose: true
        });

        $(".select2").select2();

        $(".imagelight").lightGallery(); 
        $('.date-time-picker').daterangepicker({
        timePicker: true,
        timePickerIncrement: 1,
        singleDatePicker: true,
        timePicker24Hour: true,
        locale: {
            format: 'MM/DD/YYYY H:MM'
        }
    });

        (function (){

            var _swal = window.swal;

            window.swal = function(){

                var previousWindowKeyDown = window.onkeydown;

                _swal.apply(this, Array.prototype.slice.call(arguments, 0));

                window.onkeydown = previousWindowKeyDown;

            };

        })();
   </script>
</body>
</html>
