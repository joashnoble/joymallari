
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
    .label-disable {
       pointer-events: none;
       cursor: default;
    }  
    .medicine_table{
        width: 49%;display: inline-block;
    }
    .hidden{
        display: none;
    }
    .med_title{
        font-size:8pt; width: 180px;display: inline-block;
    }
    td.patient-details {
        background: url('assets/img/icons/Folder_Closed.png') no-repeat center center;
        cursor: pointer;
    }
    tr.details td.patient-details {
        background: url('assets/img/icons/Folder_Opened.png') no-repeat center center;
    }
    td.details-control {
        background: url('assets/img/icons/Folder_Closed.png') no-repeat center center;
        cursor: pointer;
    }
    td.details-control-print {
        background: url('assets/img/icons/print.png') no-repeat center center;
        cursor: pointer;
    }
    tr.details td.details-control {
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
        margin-bottom: 0px;
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
        <span class="module-icon"><span class="fa fa-users"></span></span>
        <span class="module-title">Patient General Information</span>
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
                    <div>
                        <button class="btn btn-dark right_patientref_create" id="btn_new_refpatient">
                            <i class="fa fa-user" aria-hidden="true"></i> New Patient
                        </button>

                        <a href="Ref_patient/transaction/export-patient-masterlist" class="btn btn-default" style="float: right;" data-toggle="tooltip" data-placement="bottom" title="Export Patient Masterlist">
                            <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                        </a>
                        <hr>                        
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="tbl_ref_patient" class="table table-striped table_patient" width="100%">
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
                </div>
                <!-- /.box-body -->
              </div>
        </div>
        <div id="div_patient_field" class="table-field" style="display: none;">
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
        <div id="div_prescription_list" class="table-list" style="display: none;">
            <div class="box">
                <div class="box-header" style="border-bottom: 1px solid lightgray;">
                    <button id="new_prescription" class="btn btn-dark bgm-green waves-effect right_prescription_create" style="float: left;">
                            <i class="fa fa-plus-circle"></i> New Prescription
                    </button>  
                    <div style="float: right;">
                        <button class="btn btn-default close_list" data-id="tbl_patient_prescription" style="border-radius: 50%;">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-9" style="padding-top: 10px;">
                            <h4 class="bh-text-title">
                                <label class="label patient-info-label">
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;">
                                        PATIENT
                                    </span> : <span class="header-text-title"></span>
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;margin-left: 10px;">AGE</span> : <span class="header-text-age"></span> yrs old
                                </label>
                            </h4>   
                        </div>
                        <div class="col-lg-3 padding-top">
                            Search :<br />
                            <input type="text" class="form-control" id="searchbox_tbl_patient_prescription">
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">
                        <div class="table-responsive">   
                            <table id="tbl_patient_prescription" class="table table-striped table-list-border" width="100%">
                                <thead class="tbl-header">
                                    <tr>
                                        <th width="5%"></th>
                                        <th width="5%"></th>
                                        <th>PR #</th>
                                        <th>Date Prescribed</th>
                                        <th style="text-align:center;color:white;">Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>        
                        </div> 
                    </div>               
                </div>
                <!-- /.box-body -->
              </div>
        </div>
        <div id="div_laboratory_report_list" class="table-list" style="display: none;">
            <div class="box">
                <div class="box-header" style="border-bottom: 1px solid lightgray;">
                    <button id="new_laboratory" class="btn btn-dark bgm-green waves-effect right_medlab_create">
                        <i class="fa fa-plus-circle"></i> New Laboratory
                    </button>     
                    <div style="float: right;">
                        <button class="btn btn-default close_list" data-id="tbl_lab" style="border-radius: 50%;">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-9" style="padding-top: 10px;">
                            <h4 class="bh-text-title">
                                <label class="label patient-info-label">
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;">
                                        PATIENT
                                    </span> : <span class="header-text-title"></span>
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;margin-left: 10px;">AGE</span> : <span class="header-text-age"></span> yrs old
                                </label>
                            </h4>   
                        </div>
                        <div class="col-lg-3 padding-top">
                            Search :<br />
                            <input type="text" class="form-control" id="searchbox_tbl_lab">
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">
                        <div class="table-responsive">   
                            <table id="tbl_lab" class="table table-striped table-hover table-list-border" width="100%">
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
                </div>
                <!-- /.box-body -->
              </div>
        </div>
        <div id="div_billing_list" class="table-list" style="display: none;">
            <div class="box">
                <div class="box-header" style="border-bottom: 1px solid lightgray;">
                    <button id="new_billing" class="btn btn-dark bgm-green waves-effect right_billing_create">
                        <i class="fa fa-plus-circle"></i> New Billing
                    </button>  
                    <div style="float: right;">
                        <button class="btn btn-default close_list" data-id="tbl_billing" style="border-radius: 50%;">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-9" style="padding-top: 10px;">
                            <h4 class="bh-text-title">
                                <label class="label patient-info-label">
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;">
                                        PATIENT
                                    </span> : <span class="header-text-title"></span>
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;margin-left: 10px;">AGE</span> : <span class="header-text-age"></span> yrs old
                                </label>
                            </h4>   
                        </div>
                        <div class="col-lg-3 padding-top">
                            Search :<br />
                            <input type="text" class="form-control" id="searchbox_tbl_billing">
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">
                        <div class="table-responsive">   
                            <table id="tbl_billing" class="table table-striped table-list-border" width="100%">
                                <thead class="tbl-header">
                                    <tr>
                                        <th width="5%"></th>
                                        <th width="5%"></th>
                                        <th>Billing Code</th>
                                        <th>Date</th>
                                        <th style="text-align:center;">Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>        
                        </div> 
                    </div>               
                </div>
                <!-- /.box-body -->
              </div>
        </div>        
        <div id="div_visiting_record_list" class="table-list" style="display: none;">
            <div class="box">
                <div class="box-header" style="border-bottom: 1px solid lightgray;">
                    <button id="new_visiting_record" class="btn btn-dark bgm-green waves-effect right_visiting_create">
                        <i class="fa fa-plus-circle"></i> New Visiting Record
                    </button> 
                    <div style="float: right;">
                        <button class="btn btn-default close_list" data-id="tbl_visiting_record" style="border-radius: 50%;">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-9" style="padding-top: 10px;">
                            <h4 class="bh-text-title">
                                <label class="label patient-info-label">
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;">
                                        PATIENT
                                    </span> : <span class="header-text-title"></span>
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;margin-left: 10px;">AGE</span> : <span class="header-text-age"></span> yrs old
                                </label>
                            </h4>   
                        </div>
                        <div class="col-lg-3 padding-top">
                            Search :<br />
                            <input type="text" class="form-control" id="searchbox_tbl_visiting_record">
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">
                        <div class="table-responsive">   
                            <table id="tbl_visiting_record" class="table table-striped table-list-border" width="100%">
                                <thead class="tbl-header">
                                    <tr>
                                        <th width="5%"></th>
                                        <th width="5%"></th>
                                        <th>Date</th>
                                        <th>Note</th>
                                        <th>Diagnostics</th>
                                        <th style="text-align:center;">Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>        
                        </div> 
                    </div>               
                </div>
                <!-- /.box-body -->
              </div>
        </div>          
        <div id="div_clinical_database_list" class="table-list" style="display: none;">
            <div class="box">
                <div class="box-header" style="border-bottom: 1px solid lightgray;">
                    <button id="new_clinical" class="btn btn-dark bgm-green waves-effect right_clinicaldb_create">
                        <i class="fa fa-plus-circle"></i> New Clinical Database
                    </button> 
                    <div style="float: right;">
                        <button class="btn btn-default close_list" data-id="tbl_clinical" style="border-radius: 50%;">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-9" style="padding-top: 10px;">
                            <h4 class="bh-text-title">
                                <label class="label patient-info-label">
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;">
                                        PATIENT
                                    </span> : <span class="header-text-title"></span>
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;margin-left: 10px;">AGE</span> : <span class="header-text-age"></span> yrs old
                                </label>
                            </h4>   
                        </div>
                        <div class="col-lg-3 padding-top">
                            Search :<br />
                            <input type="text" class="form-control" id="searchbox_tbl_clinical">
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">
                        <div class="table-responsive">   
                            <table id="tbl_clinical" class="table table-striped table-list-border" width="100%">
                                <thead class="tbl-header">
                                    <tr>
                                        <th width="5%"></th>
                                        <th width="5%"></th>
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
                </div>
                <!-- /.box-body -->
              </div>
        </div>    
        <div id="div_medical_abstract_list" class="table-list" style="display: none;">
            <div class="box">
                <div class="box-header" style="border-bottom: 1px solid lightgray;">
                    <button id="new_medical_abstract" class="btn btn-dark bgm-green waves-effect right_medical_abstract_create">
                        <i class="fa fa-plus-circle"></i> New Medical Abstract
                    </button>
                    <div style="float: right;">
                        <button class="btn btn-default close_list" data-id="tbl_patient_medical_abstract" style="border-radius: 50%;">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-9" style="padding-top: 10px;">
                            <h4 class="bh-text-title">
                                <label class="label patient-info-label">
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;">
                                        PATIENT
                                    </span> : <span class="header-text-title"></span>
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;margin-left: 10px;">AGE</span> : <span class="header-text-age"></span> yrs old
                                </label>
                            </h4>   
                        </div>
                        <div class="col-lg-3 padding-top">
                            Search :<br />
                            <input type="text" class="form-control" id="searchbox_tbl_patient_medical_abstract">
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">
                        <div class="table-responsive">   
                            <table id="tbl_patient_medical_abstract" class="table table-striped table-hover table-list-border" width="100%">
                                <thead class="tbl-header">
                                    <tr>
                                        <th style="color:white;">Code</th>
                                        <th style="color:white;">Medical Date</th>
                                        <th style="text-align:center;color:white;">Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>        
                        </div> 
                    </div>               
                </div>
                <!-- /.box-body -->
              </div>
        </div>       
        <div id="div_nephro_order_list" class="table-list" style="display: none;">
            <div class="box">
                <div class="box-header" style="border-bottom: 1px solid lightgray;">
                    <button id="new_nephro_order" class="btn btn-dark bgm-green waves-effect right_nephro_order_create">
                        <i class="fa fa-plus-circle"></i> New Nephro Order
                    </button>  
                    <div style="float: right;">
                        <button class="btn btn-default close_list" data-id="tbl_patient_nephro_order" style="border-radius: 50%;">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-9" style="padding-top: 10px;">
                            <h4 class="bh-text-title">
                                <label class="label patient-info-label">
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;">
                                        PATIENT
                                    </span> : <span class="header-text-title"></span>
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;margin-left: 10px;">AGE</span> : <span class="header-text-age"></span> yrs old
                                </label>
                            </h4>   
                        </div>
                        <div class="col-lg-3 padding-top">
                            Search :<br />
                            <input type="text" class="form-control" id="searchbox_tbl_patient_nephro_order">
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">
                        <div class="table-responsive">   
                            <table id="tbl_patient_nephro_order" class="table table-striped table-hover table-list-border" width="100%">
                                <thead class="tbl-header">
                                    <tr>
                                        <th style="color:white;">Code #</th>
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
                </div>
                <!-- /.box-body -->
              </div>
        </div>         
        <div id="div_patient_lab_report_list" class="table-list" style="display: none;">
            <div class="box">
                <div class="box-header" style="border-bottom: 1px solid lightgray;">
                    <button id="new_diagnostic" class="btn btn-dark bgm-green waves-effect right_diagnostic_create">
                        <i class="fa fa-plus-circle"></i> New Diagnostic Test
                    </button>
                    <div style="float: right;">
                        <button class="btn btn-default close_list" data-id="tbl_patient_lab_report" style="border-radius: 50%;">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-9" style="padding-top: 10px;">
                            <h4 class="bh-text-title">
                                <label class="label patient-info-label">
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;">
                                        PATIENT
                                    </span> : <span class="header-text-title"></span>
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;margin-left: 10px;">AGE</span> : <span class="header-text-age"></span> yrs old
                                </label>
                            </h4>   
                        </div>
                        <div class="col-lg-3 padding-top">
                            Search :<br />
                            <input type="text" class="form-control" id="searchbox_tbl_patient_lab_report">
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">
                        <div class="table-responsive">   
                            <table id="tbl_patient_lab_report" class="table table-striped table-hover table-list-border" width="100%">
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
                </div>
                <!-- /.box-body -->
              </div>
        </div>  
        <div id="div_med_cert_list" class="table-list" style="display: none;">
            <div class="box">
                <div class="box-header" style="border-bottom: 1px solid lightgray;">
                    <button id="new_medical_cert" class="btn btn-dark bgm-green waves-effect right_medical_cert">
                        <i class="fa fa-plus-circle"></i> New Medical Certificate
                    </button>  
                    <div style="float: right;">
                        <button class="btn btn-default close_list" data-id="tbl_med_cert_report" style="border-radius: 50%;">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                         <div class="col-lg-9" style="padding-top: 10px;">
                            <h4 class="bh-text-title">
                                <label class="label patient-info-label">
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;">
                                        PATIENT
                                    </span> : <span class="header-text-title"></span>
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;margin-left: 10px;">AGE</span> : <span class="header-text-age"></span> yrs old
                                </label>
                            </h4>   
                        </div>
                        <div class="col-lg-3 padding-top">
                            Search :<br />
                            <input type="text" class="form-control" id="searchbox_tbl_med_cert_report">
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">
                        <div class="table-responsive">   
                            <table id="tbl_med_cert_report" class="table table-striped table-list-border" width="100%">
                                <thead class="tbl-header">
                                    <tr>
                                        <th width="5%"></th>
                                        <th width="5%"></th>
                                        <th>Code #</th>
                                        <th>Date Created</th>
                                        <th style="text-align:center;">Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>        
                        </div> 
                    </div>               
                </div>
                <!-- /.box-body -->
              </div>
        </div>
        <div id="div_nephro_clearance_list" class="table-list" style="display: none;">
            <div class="box">
                <div class="box-header" style="border-bottom: 1px solid lightgray;">
                    <button id="new_nephrology_clearance" class="btn btn-dark bgm-green waves-effect right_nephro_clearance_create">
                        <i class="fa fa-plus-circle"></i> New Nephrology Clearance
                    </button>  
                    <div style="float: right;">
                        <button class="btn btn-default close_list" data-id="tbl_nephro_clearance" style="border-radius: 50%;">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                         <div class="col-lg-9" style="padding-top: 10px;">
                            <h4 class="bh-text-title">
                                <label class="label patient-info-label">
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;">
                                        PATIENT
                                    </span> : <span class="header-text-title"></span>
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;margin-left: 10px;">AGE</span> : <span class="header-text-age"></span> yrs old
                                </label>
                            </h4>   
                        </div>
                        <div class="col-lg-3 padding-top">
                            Search :<br />
                            <input type="text" class="form-control" id="searchbox_tbl_nephro_clearance">
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">
                        <div class="table-responsive">   
                            <table id="tbl_nephro_clearance" class="table table-striped table-list-border" width="100%">
                                <thead class="tbl-header">
                                    <tr>
                                        <th width="5%"></th>
                                        <th>Code #</th>
                                        <th>Date Created</th>
                                        <th style="text-align:center;">Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>        
                        </div> 
                    </div>               
                </div>
                <!-- /.box-body -->
              </div>
        </div>        

        <div id="div_nephro_record_list" class="table-list" style="display: none;">
            <div class="box">
                <div class="box-header" style="border-bottom: 1px solid lightgray;">
                    <button class="btn btn-dark right_patientinfo_create" id="btn_new">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i> 
                        New Nephro Record
                    </button>
                    <div style="float: right;">
                        <button class="btn btn-default close_list" data-id="tbl_nephro_record" style="border-radius: 50%;">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-9" style="padding-top: 10px;">
                            <h4 class="bh-text-title">
                                <label class="label patient-info-label">
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;">
                                        PATIENT
                                    </span> : <span class="header-text-title"></span>
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;margin-left: 10px;">AGE</span> : <span class="header-text-age"></span> yrs old
                                </label>
                            </h4>   
                        </div>
                        <div class="col-lg-3 padding-top">
                            Search :<br />
                            <input type="text" class="form-control" id="searchbox_tbl_nephro_record">
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">
                        <div class="table-responsive">   
                            <table id="tbl_nephro_record" class="table table-striped table-hover table-list-border" width="100%">
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
                </div>
                <!-- /.box-body -->
              </div>
        </div>
        <div id="div_patient_referral_list" class="table-list" style="display: none;">
            <div class="box">
                <div class="box-header" style="border-bottom: 1px solid lightgray;">
                    <button id="new_referral" class="btn btn-dark bgm-green waves-effect right_medical_cert">
                        <i class="fa fa-plus-circle"></i> New Referral Letter
                    </button>
                    <div style="float: right;">
                        <button class="btn btn-default close_list" data-id="tbl_patient_referral" style="border-radius: 50%;">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-9" style="padding-top: 10px;">
                            <h4 class="bh-text-title">
                                <label class="label patient-info-label">
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;">
                                        PATIENT
                                    </span> : <span class="header-text-title"></span>
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;margin-left: 10px;">AGE</span> : <span class="header-text-age"></span> yrs old
                                </label>
                            </h4>   
                        </div>
                        <div class="col-lg-3 padding-top">
                            Search :<br />
                            <input type="text" class="form-control" id="searchbox_tbl_patient_referral">
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">
                        <div class="table-responsive">   
                            <table id="tbl_patient_referral" class="table table-striped table-list-border" width="100%">
                                <thead class="tbl-header">
                                    <tr>
                                        <th width="5%"></th>
                                        <th width="5%"></th>
                                        <th>Referral Code #</th>
                                        <th>Referral Date</th>
                                        <th style="text-align:center;">Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>        
                        </div> 
                    </div>               
                </div>
                <!-- /.box-body -->
              </div>
        </div>                                    
        <div id="div_patient_admitting_order_list" class="table-list" style="display: none;">
            <div class="box">
                <div class="box-header" style="border-bottom: 1px solid lightgray;">
                    <button id="new_admitting_order" class="btn btn-dark bgm-green waves-effect right_admitting_order">
                        <i class="fa fa-plus-circle"></i> New Admitting Order
                    </button>
                    <div style="float: right;">
                        <button class="btn btn-default close_list" data-id="tbl_patient_admitting_order" style="border-radius: 50%;">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-9" style="padding-top: 10px;">
                            <h4 class="bh-text-title">
                                <label class="label patient-info-label">
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;">
                                        PATIENT
                                    </span> : <span class="header-text-title"></span>
                                    <span style="color: white;background: #2F4F4F;padding: 3px 4px 4px;margin-left: 10px;">AGE</span> : <span class="header-text-age"></span> yrs old
                                </label>
                            </h4>   
                        </div>
                        <div class="col-lg-3 padding-top">
                            Search :<br />
                            <input type="text" class="form-control" id="searchbox_tbl_patient_admitting_order">
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">
                        <div class="table-responsive">   
                            <table id="tbl_patient_admitting_order" class="table table-striped table-hover table-list-border" width="100%">
                                <thead class="tbl-header">
                                    <tr>
                                        <th style="color:white;">Admitting Code #</th>
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
                </div>
                <!-- /.box-body -->
              </div>
        </div>                               
        <!--patient modal-->
<!--    <div id="modal_ref_patient" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
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
<!--         <div class="modal fade" id="modal_patient_prescription" tabindex="-1" role="dialog" aria-hidden="true">
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
        </div> -->
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
                                    <?php echo $header_2; ?>
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
<!--         <div class="modal fade" id="modal_patient_laboratory" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#e67e22;" class="table table-striped">
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div> -->
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
<!--         <div class="modal fade" id="modal_patient_billing" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2980b9;" class="table table-striped">
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div> -->
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
<!--         <div class="modal fade" id="modal_visiting_record" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2980b9;" class="table table-striped">
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div> -->
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
                                            <label class="" for="inputEmail1"><span class="required">*</span> Vital Signs :</label>
                                            <div class="fg-line">
                                               <textarea name="visiting_note" placeholder="Vital Signs" class="form-control" data-error-msg="Vital Signs is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1"><span class="required">*</span> Clinical Assessment:</label>
                                            <div class="fg-line">
                                               <textarea name="visiting_diagnostics" placeholder="Clinical Assessment" class="form-control" data-error-msg="Clinical Assessment is required." required></textarea>            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="" for="inputEmail1"><span class="required">*</span> Ultrasound Findings :</label>
                                            <div class="fg-line">
                                               <textarea  name="visiting_findings" placeholder="Ultrasound Findings" class="form-control" data-error-msg="Ultrasound Findings is required." required></textarea>            
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
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                               <center><h3>Visiting Record</h3></center> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table width="100%">
                                                    <tr>
                                                        <td width="50%">
                                                            <h4>Date Visited : <datevisited id="datevisited"></datevisited></h4>
                                                        </td>
                                                        <td width="50%">
                                                            <h4>Next Visit Date : <nextvisitdate id="nextvisitdate"></nextvisitdate></h4>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table width="100%">
                                                    <tr>
                                                        <td>
                                                            <h4>Vital Signs : </h4>
                                                            <visitingnote id="visitingnote"></visitingnote>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>Clinical Assessment : </h4>
                                                            <visitingdiagnostics id="visitingdiagnostics"></visitingdiagnostics>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>Ultrasound Findings :</h4>
                                                            <visitingfindings id="visitingfindings"></visitingfindings>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>Treatment : </h4>
                                                            <visitingtreatment id="visitingtreatment"></visitingtreatment>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h4>Remarks : </h4>
                                                            <visitingremarks id="visitingremarks"></visitingremarks>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
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
<!--         <div class="modal fade" id="modal_clinical" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2980b9;" class="table table-striped">
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div> -->
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
                                <?php echo $header_2; ?>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                       <center><h3>Clinical Database</h3></center> 
                                    </div>
                                </div>                                
                                <div class="card">
                                    <div class="card-body card-padding">
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
<!--         <div class="modal fade" id="modal_medical_abstract_list" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;" class="table table-striped">
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div> -->
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
                                                    <th style="width:20%;">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><u><areafullname class="areafullname" style="font-weight: normal!important;"></areafullname></u></td>
                                                    <td><u><areasex class="areasex"></areasex></u></td>
                                                    <td><u><areaage class="areaage"></areaage></u></td>
                                                    <td><input type="text" name="cs" style="border:0px;border-bottom:1px solid black;width:70px"></td>
                                                    <td><u><areabirthdate class="areabirthdate"></areabirthdate></u></td>
                                                    <td>
                                                        <input type="text" class="date-picker" id="medical_abstract_date" name="medical_abstract_date" style="border:0px;border-bottom:1px solid #2c3e50;width:100%;text-align: center;" required data-error-msg="Date is required" value="<?php echo date('m/d/Y'); ?>">

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        Address : <u><areaaddress class="areaaddress"></areaaddress></u>
                                    </div>
                                    <div class="col-md-12" style="font-size: 8pt!important;">
                                        <div style="margin-bottom: 10px;">
                                        <h5 style="margin:2px;"><b>DIAGNOSIS</b></h5>
                                        <div class="medicine_table diag_chronic_kidney_disease">
                                            <input class="onemargin diag_chronic_kidney_disease" type="checkbox" name="" id="diag_chronic_kidney_disease" style="width:50px;border:0px;border-bottom:1px solid black;"> 
                                        
                                            <tag style="font-size:10pt;" class="diag_chronic_kidney_disease">
                                                    Chronic Kidney Disease<br><addition style="margin-left:54px;">DUE TO : (Check all that apply)</addition></tag> 
                                        </div>
                                        <div class="medicine_table diag_end_stage">
                                            <input class="onemargin diag_end_stage" type="checkbox" name="" id="diag_end_stage" style="width:50px;border:0px;border-bottom:1px solid black;">
                                               <tag style="font-size:10pt;" class="diag_end_stage">End Stage Renal Disease <br/></tag>
                                        </div>
                                        <div class="medicine_table diag_chronic_glomeru">
                                            <input class="onemargin diag_chronic_glomeru" type="checkbox" name="" id="diag_chronic_glomeru" style="width:50px;border:0px;border-bottom:1px solid black;"> 
                                                   <tag style="font-size:10pt;" class="diag_chronic_glomeru">Chronic glomerulonephritis</tag> 
                                        </div>
                                        <div class="medicine_table diag_hypertension">
                                            <input class="onemargin diag_hypertension" type="checkbox" name="" id="diag_hypertension" style="width:50px;border:0px;border-bottom:1px solid black;">
                                               <tag style="font-size:10pt;" class="diag_hypertension">Hypertension</tag> 
                                        </div>
                                        <div class="medicine_table diag_chronic_pyelone">
                                            <input class="onemargin diag_chronic_pyelone" type="checkbox" name="" id="diag_chronic_pyelone" style="width:50px;border:0px;border-bottom:1px solid black;"> 
                                                   <tag style="font-size:10pt;" class="diag_chronic_pyelone">Chronic pyelonephritis</tag> 
                                        </div>
                                        <div class="medicine_table diag_diabetic">
                                            <input class="onemargin diag_diabetic" type="checkbox" name="" id="diag_diabetic" style="width:50px;border:0px;border-bottom:1px solid black;">
                                               <tag style="font-size:10pt;" class="diag_diabetic">Diabetic Nephropathy</tag>
                                        </div>
                                        <div class="medicine_table diag_obs_uropathy">
                                            <input class="onemargin diag_obs_uropathy" type="checkbox" name="" id="diag_obs_uropathy" style="width:50px;border:0px;border-bottom:1px solid black;"> 
                                                   <tag style="font-size:10pt;" class="diag_obs_uropathy">Obstructive Uropathy</tag>
                                        </div>
                                        <div class="medicine_table diag_uric_acid_nephro">
                                            <input class="onemargin diag_uric_acid_nephro" type="checkbox" name="" id="diag_uric_acid_nephro" style="width:50px;border:0px;border-bottom:1px solid black;">
                                               <tag style="font-size:10pt;" class="diag_uric_acid_nephro">Uric Acid Nephropathy </tag>
                                        </div>
                                        <div class="medicine_table diag_other_specify">
                                            <others class="onemargin" style="margin-left:15px;"> 
                                                    <tag style="font-size:10pt;" class="diag_other_specify">Others Specify :</tag>
                                               </others>
                                               <br><input type="text" class="diag_other_specify" name="diag_other_specify" id="" style="margin-left:15px;width:70%;border:0px;border-bottom:1px solid black;margin-left:15px;">
                                                                                         
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 style="margin:2px;"><b>TREATMENT</b></h6>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="checkbox-left">

                                           <input class="onemargin treat_hemo" type="checkbox" name="" id="treat_hemo" style="width:40px;border:0px;border-bottom:1px solid black;"> 
                                           <tag for="treat_hemo" class="normal treat_hemo">HEMODIALYSIS</tag>

                                           <input class="onemargin treat_once_a_week" type="checkbox" name="" id="treat_once_a_week" style="width:40px;border:0px;border-bottom:1px solid black;margin-left: 20px;"> 
                                           <tag for="treat_once_a_week" class="normal treat_once_a_week">once a week</tag>
                                                
                                           <input class="onemargin treat_two_times_a_week" type="checkbox" name="" id="treat_two_times_a_week" style="width:40px;border:0px;border-bottom:1px solid black;"> 
                                           <tag for="treat_two_times_a_week" class="normal treat_two_times_a_week">two times a week</tag>
                                           
                                           <input class="onemargin treat_three_times_a_week" type="checkbox" name="" id="treat_three_times_a_week" style="width:40px;border:0px;border-bottom:1px solid black;"> 
                                           <tag for="treat_three_times_a_week" class="normal treat_three_times_a_week">three times a week</tag>
                                        </div>
                                    </div>
                                </div>
                                <h6 style="margin:2px;"><b>MEDICINES (Check all prescribed)</b></h6>
                                <div class="row">
                                    <div class="col-xs-12">
                                       <input class="onemargin med_eryth" type="checkbox" name="" id="med_eryth" style="width:40px;border:0px;border-bottom:1px solid black;"> 
                                       <b for="med_eryth" class="med_eryth" style="font-size:9pt;">ERYTHROPOIETIN</b>

                                       <input class="onemargin med_eprex" type="checkbox" name="" id="med_eprex" style="width:40px;border:0px;border-bottom:1px solid black;"> 
                                       <b for="med_eprex" class="med_eprex" style="font-size:9pt;">EPREX</b>

                                       <input class="onemargin med_recormon" type="checkbox" name="" id="med_recormon" style="width:40px;border:0px;border-bottom:1px solid black;">
                                       <b for="med_recormon" class="med_recormon" style="font-size:9pt;">RECORMON</b>

                                       <input class="onemargin med_epotin" type="checkbox" name="" id="med_epotin" style="width:40px;border:0px;border-bottom:1px solid black;">
                                       <b for="med_epotin" class="med_epotin" style="font-size:9pt;">EPOTIN</b>

                                       <input class="onemargin med_eposino" type="checkbox" name="" id="med_eposino" style="width:40px;border:0px;border-bottom:1px solid black;">
                                       <b for="med_eposino" class="med_eposino" style="font-size:9pt;">EPOSINO</b>

                                       <input class="onemargin med_others" type="checkbox" name="" id="med_others" style="width:40px;border:0px;border-bottom:1px solid black;">
                                       <b for="med_others" class="med_others" style="font-size:9pt;">OTHERS</b>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="checkbox-left">
                                           <input class="onemargin med_4000units" type="checkbox" name="" id="med_4000units" style="width:40px;border:0px;border-bottom:1px solid black;">
                                            <tag for="med_4000units" class="med_4000units" style="font-size:9pt;">4000 units</tag>

                                            <input class="onemargin med_once_a_week" type="checkbox" name="" id="med_once_a_week" style="width:40px;border:0px;border-bottom:1px solid black;margin-left: 35px;"> 
                                            <tag style="font-size:9pt;" class="med_once_a_week">once a week </tag>
                                           
                                            <input class="onemargin med_two_times_a_week" type="checkbox" name="" id="med_two_times_a_week" style="width:40px;border:0px;border-bottom:1px solid black;"> 
                                            <tag style="font-size:9pt;" class="med_two_times_a_week">two times a week</tag>
                                            
                                            <input class="onemargin med_three_times_a_week" type="checkbox" name="" id="med_three_times_a_week" style="width:40px;border:0px;border-bottom:1px solid black;"> 
                                            <tag style="font-size:9pt;" class="med_three_times_a_week">three times a week </tag>

                                           <br/>

                                           <input class="onemargin med_5000_units" type="checkbox" name="" id="med_5000_units" style="width:40px;border:0px;border-bottom:1px solid black;"> 
                                            <tag for="med_5000_units" class="med_5000_units" style="font-size:9pt;">5000 units</tag>
                                           <br>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                            <div class="medicine_table med_cal_carbo">
                                                <input class="onemargin med_cal_carbo" type="checkbox" name="" id="med_cal_carbo" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                    <div class="med_title med_cal_carbo">Calcium carbonate 500mg</div>
                                                <input class="margin med_cal_carbo_od" type="checkbox" name="" id="med_cal_carbo_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                        <tag style="font-size:7pt;" class="med_cal_carbo_od">OD</tag>
                                                <input class="margin med_cal_carbo_bid" type="checkbox" name="" id="med_cal_carbo_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                        <tag style="font-size:7pt;" class="med_cal_carbo_bid">BID</tag>
                                                <input class="margin med_cal_carbo_tid" type="checkbox" name="" id="med_cal_carbo_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                        <tag style="font-size:7pt;" class="med_cal_carbo_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_atenolol">
                                                <input class="onemargin med_atenolol" type="checkbox" name="" id="med_atenolol" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                    <div class="med_title med_atenolol">
                                                        Atenolol
                                                        <input type="text" class="mgright" name="med_atenolol_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg
                                                    </div>
                                                <input class="margin med_atenolol_od" type="checkbox" name="" id="med_atenolol_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                        <tag style="font-size:7pt;" class="med_atenolol_od">OD</tag>
                                                <input class="margin med_atenolol_bid" type="checkbox" name="" id="med_atenolol_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                        <tag style="font-size:7pt;" class="med_atenolol_bid">BID</tag>
                                                <input class="margin med_atenolol_tid" type="checkbox" name="" id="med_atenolol_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                        <tag style="font-size:7pt;" class="med_atenolol_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_sevelamer">
                                                <input class="onemargin med_sevelamer" type="checkbox" name="" id="med_sevelamer" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_sevelamer">Sevelamer carbonate 800mg</div>
                                                <input class="margin med_sevelamer_od" type="checkbox" name="" id="med_sevelamer_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_sevelamer_od">OD</tag>

                                                <input class="margin med_sevelamer_bid" type="checkbox" name="" id="med_sevelamer_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                    <tag style="font-size:7pt;" class="med_sevelamer_bid">BID</tag>

                                                <input class="margin med_sevelamer_tid" type="checkbox" name="" id="med_sevelamer_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                    <tag style="font-size:7pt;" class="med_sevelamer_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_carvedilol">
                                                <input class="onemargin med_carvedilol" type="checkbox" name="" id="med_carvedilol" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_carvedilol">Carvedilol
                                                    <input type="text" class="mgright" name="med_carvedilol_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg
                                                </div>
                                                <input class="margin med_carvedilol_od" type="checkbox" name="" id="med_carvedilol_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_carvedilol_od">OD</tag>

                                                <input class="margin med_carvedilol_bid" type="checkbox" name="" id="med_carvedilol_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_carvedilol_bid">BID</tag>

                                                <input class="margin med_carvedilol_tid" type="checkbox" name="" id="med_carvedilol_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_carvedilol_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_calcitriol">
                                                <input class="onemargin med_calcitriol" type="checkbox" name="" id="med_calcitriol" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                    <div class="med_title med_calcitriol">
                                                        Calcitriol<input type="text" class="mgright" name="med_calcitriol_mcg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                    </div>
                                                    <input class="margin med_calcitriol_od" type="checkbox" name="" id="med_calcitriol_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                    <tag style="font-size:7pt;" class="med_calcitriol_od">OD</tag>

                                                    <input class="margin med_calcitriol_bid" type="checkbox" name="" id="med_calcitriol_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                    <tag style="font-size:7pt;" class="med_calcitriol_bid">BID</tag>

                                                    <input class="margin med_calcitriol_tid" type="checkbox" name="" id="med_calcitriol_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                    <tag style="font-size:7pt;" class="med_calcitriol_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_metoprolol">
                                                <input class="onemargin med_metoprolol" type="checkbox" name="" id="med_metoprolol" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_metoprolol">Metoprolol
                                                    <input type="text" class="mgright" name="med_metoprolol_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg
                                                </div>
                                                <input class="margin med_metoprolol_od" type="checkbox" name="" id="med_metoprolol_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_metoprolol_od">OD</tag>
                                                <input class="margin med_metoprolol_bid" type="checkbox" name="" id="med_metoprolol_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_metoprolol_bid">BID</tag>
                                                <input class="margin med_metoprolol_tid" type="checkbox" name="" id="med_metoprolol_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_metoprolol_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_clopidogrel">
                                                <input class="onemargin med_clopidogrel" type="checkbox" name="" id="med_clopidogrel" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_clopidogrel">Clopidogrel 75mg</div>
                                                <input class="margin med_clopidogrel_od" type="checkbox" name="" id="med_clopidogrel_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_clopidogrel_od">OD</tag>
                                                <input class="margin med_clopidogrel_bid" type="checkbox" name="" id="med_clopidogrel_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_clopidogrel_bid">BID</tag>
                                                <input class="margin med_clopidogrel_tid" type="checkbox" name="" id="med_clopidogrel_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_clopidogrel_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_clonidine">
                                                <input class="onemargin med_clonidine" type="checkbox" name="" id="med_clonidine" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_clonidine">Clonidine
                                                    <input type="text" class="mgright" name="med_clonidine_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg
                                                </div>
                                                <input class="margin med_clonidine_od" type="checkbox" name="" id="med_clonidine_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_clonidine_od">OD</tag>
                                                <input class="margin med_clonidine_bid" type="checkbox" name="" id="med_clonidine_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_clonidine_bid">BID</tag>
                                                <input class="margin med_clonidine_tid" type="checkbox" name="" id="med_clonidine_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_clonidine_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_ferrous">
                                                <input class="onemargin med_ferrous" type="checkbox" name="" id="med_ferrous" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_ferrous">Ferrous sulfate 325mg
                                                    <input type="text" class="mgright" name="med_ferrous_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                </div>
                                                <input class="margin med_ferrous_od" type="checkbox" name="" id="med_ferrous_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_ferrous_od">OD</tag>
                                                <input class="margin med_ferrous_bid" type="checkbox" name="" id="med_ferrous_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_ferrous_bid">BID</tag>
                                                <input class="margin med_ferrous_tid" type="checkbox" name="" id="med_ferrous_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_ferrous_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_atorvastatin">
                                                <input class="onemargin med_atorvastatin" type="checkbox" name="" id="med_atorvastatin" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_atorvastatin">Atorvastatin
                                                    <input type="text" class="mgright" name="med_atorvastatin_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg
                                                </div>
                                                <input class="margin med_atorvastatin_od" type="checkbox" name="" id="med_atorvastatin_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_atorvastatin_od">OD</tag>
                                                <input class="margin med_atorvastatin_bid" type="checkbox" name="" id="med_atorvastatin_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;">
                                                <tag style="font-size:7pt;" class="med_atorvastatin_bid">BID</tag>
                                                <input class="margin med_atorvastatin_tid" type="checkbox" name="" id="med_atorvastatin_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_atorvastatin_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_folic_acid">
                                                <input class="onemargin med_folic_acid" type="checkbox" name="" id="med_folic_acid" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_folic_acid">Folic Acid 5mg</div>
                                                <input class="margin med_folic_acid_od" type="checkbox" name="" id="med_folic_acid_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_folic_acid_od">OD</tag>
                                                <input class="margin med_folic_acid_bid" type="checkbox" name="" id="med_folic_acid_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_folic_acid_bid">BID</tag>
                                                <input class="margin med_folic_acid_tid" type="checkbox" name="" id="med_folic_acid_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_folic_acid_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_fluvastatin">
                                                <input class="onemargin med_fluvastatin" type="checkbox" name="" id="med_fluvastatin" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_fluvastatin">
                                                    Fluvastatin
                                                    <input type="text" class="mgright" name="med_fluvastatin_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg
                                                </div>
                                                <input class="margin med_fluvastatin_od" type="checkbox" name="" id="med_fluvastatin_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_fluvastatin_od">OD</tag>
                                                <input class="margin med_fluvastatin_bid" type="checkbox" name="" id="med_fluvastatin_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_fluvastatin_bid">BID</tag>
                                                <input class="margin med_fluvastatin_tid" type="checkbox" name="" id="med_fluvastatin_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_fluvastatin_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_vitamin_c">
                                                <input class="onemargin med_vitamin_c" type="checkbox" name="" id="med_vitamin_c" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_vitamin_c">Vitamin C 500mg</div>
                                                <input class="margin med_vitamin_c_od" type="checkbox" name="" id="med_vitamin_c_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_vitamin_c_od">OD</tag>
                                                <input class="margin med_vitamin_c_bid" type="checkbox" name="" id="med_vitamin_c_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_vitamin_c_bid">BID</tag>
                                                <input class="margin med_vitamin_c_tid" type="checkbox" name="" id="med_vitamin_c_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_vitamin_c_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_simvastatin">
                                                <input class="onemargin med_simvastatin" type="checkbox" name="" id="med_simvastatin" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_simvastatin">Simvastatin
                                                    <input type="text" class="mgright" name="med_simvastatin_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg
                                                </div>
                                                <input class="margin med_simvastatin_od" type="checkbox" name="" id="med_simvastatin_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_simvastatin_od">OD</tag>
                                                <input class="margin med_simvastatin_bid" type="checkbox" name="" id="med_simvastatin_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_simvastatin_bid">BID</tag>
                                                <input class="margin med_simvastatin_tid" type="checkbox" name="" id="med_simvastatin_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_simvastatin_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_vitamin_b_complex">
                                                <input class="onemargin med_vitamin_b_complex" type="checkbox" name="" id="med_vitamin_b_complex" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_vitamin_b_complex">Vitamin b complex 1 tablet</div>
                                                <input class="margin med_vitamin_b_complex_od" type="checkbox" name="" id="med_vitamin_b_complex_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_vitamin_b_complex_od">OD</tag>
                                                <input class="margin med_vitamin_b_complex_bid" type="checkbox" name="" id="med_vitamin_b_complex_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_vitamin_b_complex_bid">BID</tag>
                                                <input class="margin med_vitamin_b_complex_tid" type="checkbox" name="" id="med_vitamin_b_complex_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_vitamin_b_complex_tid">TID</tag> 
                                            </div>
                                            <div class="medicine_table med_lanoxin">
                                                <input class="onemargin med_lanoxin" type="checkbox" name="" id="med_lanoxin" style="width:15px;border:0px;border-bottom:1px solid black;">
                                                <div class="med_title med_lanoxin">Lanoxin
                                                    <input type="text" class="mgright" name="med_lanoxin_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg
                                                </div>
                                                <input class="margin med_lanoxin_od" type="checkbox" name="" id="med_lanoxin_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_lanoxin_od">OD</tag>
                                                <input class="margin med_lanoxin_bid" type="checkbox" name="" id="med_lanoxin_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_lanoxin_bid">BID</tag>
                                                <input class="margin med_lanoxin_tid" type="checkbox" name="" id="med_lanoxin_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_lanoxin_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_amlodipine">
                                                <input class="onemargin med_amlodipine" type="checkbox" name="" id="med_amlodipine" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_amlodipine">Amlodipine<input type="text" class="mgright" name="med_amlodipine_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg
                                                </div>
                                                <input class="margin med_amlodipine_od" type="checkbox" name="" id="med_amlodipine_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_amlodipine_od">OD</tag>
                                                <input class="margin med_amlodipine_bid" type="checkbox" name="" id="med_amlodipine_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_amlodipine_bid">BID</tag>
                                                <input class="margin med_amlodipine_tid" type="checkbox" name="" id="med_amlodipine_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_amlodipine_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_allopurinol">
                                                <input class="onemargin med_allopurinol" type="checkbox" name="" id="med_allopurinol" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_allopurinol">Allopurinol
                                                    <input type="text" class="mgright" name="med_allopurinol_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg
                                                </div>
                                                <input class="margin med_allopurinol_od" type="checkbox" name="" id="med_allopurinol_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_allopurinol_od">OD</tag>
                                                <input class="margin med_allopurinol_bid" type="checkbox" name="" id="med_allopurinol_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_allopurinol_bid">BID</tag>
                                                <input class="margin med_allopurinol_tid" type="checkbox" name="" id="med_allopurinol_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_allopurinol_tid">TID</tag> 
                                            </div>
                                            <div class="medicine_table med_felodipine">
                                                <input class="onemargin med_felodipine" type="checkbox" name="" id="med_felodipine" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_felodipine">Felodipine<input type="text" class="mgright" name="med_felodipine_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</div>
                                                <input class="margin med_felodipine_od" type="checkbox" name="" id="med_felodipine_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_felodipine_od">OD</tag>
                                                <input class="margin med_felodipine_bid" type="checkbox" name="" id="med_felodipine_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_felodipine_bid">BID</tag>
                                                <input class="margin med_felodipine_tid" type="checkbox" name="" id="med_felodipine_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_felodipine_tid">TID</tag> 
                                            </div>
                                            <div class="medicine_table med_gliclazide">
                                                <input class="onemargin med_gliclazide" type="checkbox" name="" id="med_gliclazide" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_gliclazide">Gliclazide
                                                    <input type="text" class="mgright" name="med_gliclazide_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg
                                                </div>
                                                <input class="margin med_gliclazide_od" type="checkbox" name="" id="med_gliclazide_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_gliclazide_od">OD</tag>
                                                <input class="margin med_gliclazide_bid" type="checkbox" name="" id="med_gliclazide_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_gliclazide_bid">BID</tag>
                                                <input class="margin med_gliclazide_tid" type="checkbox" name="" id="med_gliclazide_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_gliclazide_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_nifedipine">
                                                <input class="onemargin med_nifedipine" type="checkbox" name="" id="med_nifedipine" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_nifedipine">Nitedipine<input type="text" class="mgright" name="med_nifedipine_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg
                                                </div>
                                                <input class="margin med_nifedipine_od" type="checkbox" name="" id="med_nifedipine_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_nifedipine_od">OD</tag>
                                                <input class="margin med_nifedipine_bid" type="checkbox" name="" id="med_nifedipine_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_nifedipine_bid">BID</tag>
                                                <input class="margin med_nifedipine_tid" type="checkbox" name="" id="med_nifedipine_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_nifedipine_tid">TID</tag> 
                                            </div>
                                            <div class="medicine_table med_metformin">
                                                <input class="onemargin med_metformin" type="checkbox" name="" id="med_metformin" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_metformin">Metformin<input type="text" class="mgright" name="med_metformin_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</div>
                                                <input class="margin med_metformin_od" type="checkbox" name="" id="med_metformin_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_metformin_od">OD</tag>
                                                <input class="margin med_metformin_bid" type="checkbox" name="" id="med_metformin_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_metformin_bid">BID</tag>
                                                <input class="margin med_metformin_tid" type="checkbox" name="" id="med_metformin_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_metformin_tid">TID</tag> 
                                            </div>
                                            <div class="medicine_table med_diltiazcm">
                                                <input class="onemargin med_diltiazcm" type="checkbox" name="" id="med_diltiazcm" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_diltiazcm">Diltiazem<input type="text" class="mgright" name="med_diltiazcm_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg
                                                </div>
                                                <input class="margin med_diltiazcm_od" type="checkbox" name="" id="med_diltiazcm_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_diltiazcm_od">OD</tag>
                                                <input class="margin med_diltiazcm_bid" type="checkbox" name="" id="med_diltiazcm_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_diltiazcm_bid">BID</tag>
                                                <input class="margin med_diltiazcm_tid" type="checkbox" name="" id="med_diltiazcm_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_diltiazcm_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_renvela">
                                                <input class="onemargin med_renvela" type="checkbox" name="" id="med_renvela" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_renvela">Renvela
                                                    <input type="text" class="mgright" name="med_renvela_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</div>
                                                <input class="margin med_renvela_od" type="checkbox" name="" id="med_renvela_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_renvela_od">OD</tag>
                                                <input class="margin med_renvela_bid" type="checkbox" name="" id="med_renvela_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_renvela_bid">BID</tag>
                                                <input class="margin med_renvela_tid" type="checkbox" name="" id="med_renvela_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_renvela_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_irbesartan">
                                                <input class="onemargin med_irbesartan" type="checkbox" name="" id="med_irbesartan" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_irbesartan">Irbesartan<input type="text" class="mgright" name="med_irbesartan_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg
                                                </div>
                                                <input class="margin med_irbesartan_od" type="checkbox" name="" id="med_irbesartan_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_irbesartan_od">OD</tag>
                                                <input class="margin med_irbesartan_bid" type="checkbox" name="" id="med_irbesartan_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_irbesartan_bid">BID</tag>
                                                <input class="margin med_irbesartan_tid" type="checkbox" name="" id="med_irbesartan_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_irbesartan_tid">TID</tag> 
                                            </div>
                                            <div class="medicine_table med_exforge">
                                                <input class="onemargin med_exforge" type="checkbox" name="" id="med_exforge" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_exforge">Exforge
                                                    <input type="text" class="mgright" name="med_exforge_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg
                                                </div>
                                                <input class="margin med_exforge_od" type="checkbox" name="" id="med_exforge_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_exforge_od">OD</tag>
                                                <input class="margin med_exforge_bid" type="checkbox" name="" id="med_exforge_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_exforge_bid">BID</tag>
                                                <input class="margin med_exforge_tid" type="checkbox" name="" id="med_exforge_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_exforge_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_losartan">
                                                <input class="onemargin med_losartan" type="checkbox" name="" id="med_losartan" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_losartan">Losartan<input type="text" class="mgright" name="med_losartan_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</div>
                                                <input class="margin med_losartan_od" type="checkbox" name="" id="med_losartan_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_losartan_od">OD</tag>
                                                <input class="margin med_losartan_bid" type="checkbox" name="" id="med_losartan_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_losartan_bid">BID</tag>
                                                <input class="margin med_losartan_tid" type="checkbox" name="" id="med_losartan_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_losartan_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_twynsta">
                                                <input class="onemargin med_twynsta" type="checkbox" name="" id="med_twynsta" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_twynsta">Twynsta
                                                    <input type="text" class="mgright" name="med_twynsta_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg
                                                </div>
                                                <input class="margin med_twynsta_od" type="checkbox" name="" id="med_twynsta_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_twynsta_od">OD</tag>
                                                <input class="margin med_twynsta_bid" type="checkbox" name="" id="med_twynsta_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_twynsta_bid">BID</tag>
                                                <input class="margin med_twynsta_tid" type="checkbox" name="" id="med_twynsta_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_twynsta_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_telmisartan">
                                                <input class="onemargin med_telmisartan" type="checkbox" name="" id="med_telmisartan" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_telmisartan">Telmisartan<input type="text" class="mgright" name="med_telmisartan_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg
                                                </div>
                                                <input class="margin med_telmisartan_od" type="checkbox" name="" id="med_telmisartan_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_telmisartan_od">OD</tag>
                                                <input class="margin med_telmisartan_bid" type="checkbox" name="" id="med_telmisartan_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_telmisartan_bid">BID</tag>
                                                <input class="margin med_telmisartan_tid" type="checkbox" name="" id="med_telmisartan_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_telmisartan_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_lacipil">
                                                <input class="onemargin med_lacipil" type="checkbox" name="" id="med_lacipil" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_lacipil">Lacipil
                                                    <input type="text" class="mgright" name="med_lacipil_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</div>
                                                <input class="margin med_lacipil_od" type="checkbox" name="" id="med_lacipil_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_lacipil_od">OD</tag>
                                                <input class="margin med_lacipil_bid" type="checkbox" name="" id="med_lacipil_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_lacipil_bid">BID</tag>
                                                <input class="margin med_lacipil_tid" type="checkbox" name="" id="med_lacipil_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_lacipil_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_valsartan">
                                                <input class="onemargin med_valsartan" type="checkbox" name="" id="med_valsartan" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_valsartan">Valsartan<input type="text" class="mgright" name="med_valsartan_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</div>
                                                <input class="margin med_valsartan_od" type="checkbox" name="" id="med_valsartan_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_valsartan_od">OD</tag>
                                                <input class="margin med_valsartan_bid" type="checkbox" name="" id="med_valsartan_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_valsartan_bid">BID</tag>
                                                <input class="margin med_valsartan_tid" type="checkbox" name="" id="med_valsartan_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_valsartan_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_insulin_glargine">
                                                <input class="onemargin med_insulin_glargine" type="checkbox" name="" id="med_insulin_glargine" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_insulin_glargine">Insulin glargine
                                                    <input type="text" class="mgright" name="med_insulin_glargine_units" id="" style="width:50px;border:0px;border-bottom:1px solid black;">units</div>
                                                <input class="margin med_insulin_glargine_od" type="checkbox" name="" id="med_insulin_glargine_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_insulin_glargine_od">OD</tag>
                                                <input class="margin med_insulin_glargine_bid" type="checkbox" name="" id="med_insulin_glargine_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_insulin_glargine_bid">BID</tag>
                                                <input class="margin med_insulin_glargine_tid" type="checkbox" name="" id="med_insulin_glargine_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_insulin_glargine_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_ketosteril">
                                                <input class="onemargin med_ketosteril" type="checkbox" name="" id="med_ketosteril" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_ketosteril">Ketosteril 600mg<input type="text" class="mgright" name="med_ketosteril_tab" id="" style="width:50px;border:0px;border-bottom:1px solid black;">tab</div>
                                                <input class="margin med_ketosteril_od" type="checkbox" name="" id="med_ketosteril_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_ketosteril_od">OD</tag>
                                                <input class="margin med_ketosteril_bid" type="checkbox" name="" id="med_ketosteril_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_ketosteril_bid">BID</tag>
                                                <input class="margin med_ketosteril_tid" type="checkbox" name="" id="med_ketosteril_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_ketosteril_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_linagliptin">
                                                <input class="onemargin med_linagliptin" type="checkbox" name="" id="med_linagliptin" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_linagliptin">Linagliptin 5mg</div>
                                                <input class="margin med_linagliptin_od" type="checkbox" name="" id="med_linagliptin_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_linagliptin_od">OD</tag>
                                                <input class="margin med_linagliptin_bid" type="checkbox" name="" id="med_linagliptin_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_linagliptin_bid">BID</tag>
                                                <input class="margin med_linagliptin_tid" type="checkbox" name="" id="med_linagliptin_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_linagliptin_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_kremezin">
                                                <input class="onemargin med_kremezin" type="checkbox" name="" id="med_kremezin" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_kremezin">Kremezin 2g sachet<input type="text" class="mgright" name="med_perindopril_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;"></div>
                                                <input class="margin med_kremezin_od" type="checkbox" name="" id="med_kremezin_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_kremezin_od">OD</tag>
                                                <input class="margin med_kremezin_bid" type="checkbox" name="" id="med_kremezin_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_kremezin_bid">BID</tag>
                                                <input class="margin med_kremezin_tid" type="checkbox" name="" id="med_kremezin_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_kremezin_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_vildaglitpin">
                                                <input class="onemargin med_vildaglitpin" type="checkbox" name="" id="med_vildaglitpin" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_vildaglitpin">Vildagliptin 50mg</div>
                                                <input class="margin med_vildaglitpin_od" type="checkbox" name="" id="med_vildaglitpin_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;">
                                                <tag style="font-size:7pt;" class="med_vildaglitpin_od">OD</tag>
                                                <input class="margin med_vildaglitpin_bid" type="checkbox" name="" id="med_vildaglitpin_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_vildaglitpin_bid">BID</tag>
                                                <input class="margin med_vildaglitpin_tid" type="checkbox" name="" id="med_vildaglitpin_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_vildaglitpin_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_perindopril">
                                               <input class="margin med_perindopril" type="checkbox" name="" id="med_perindopril" style="width:15px;border:0px;border-bottom:1px solid black;"> 
                                                <div class="med_title med_perindopril">Perindopril<input type="text" class="mgright" name="med_perindopril_mg" id="" style="width:50px;border:0px;border-bottom:1px solid black;">mg</div>
                                                <input class="margin med_perindopril_od" type="checkbox" name="" id="med_perindopril_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_perindopril_od">OD</tag>
                                                <input class="margin med_perindopril_bid" type="checkbox" name="" id="med_perindopril_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_perindopril_bid">BID</tag>
                                                <input class="margin med_perindopril_tid" type="checkbox" name="" id="med_perindopril_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_perindopril_tid">TID</tag>
                                            </div>
                                            <div class="medicine_table med_glipizide">
                                                <input class="onemargin med_glipizide" type="checkbox" name="" id="med_glipizide" style="width:15px;border:0px;border-bottom:1px solid black;">
                                                <div class="med_title med_glipizide">Glipizide 50mg</div>
                                                <input class="margin med_glipizide_od" type="checkbox" name="" id="med_glipizide_od" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_glipizide_od">OD</tag>
                                                <input class="margin med_glipizide_bid" type="checkbox" name="" id="med_glipizide_bid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_glipizide_bid">BID</tag>
                                                <input class="margin med_glipizide_tid" type="checkbox" name="" id="med_glipizide_tid" style="width:15px;border:0px;border-bottom:1px solid black;margin-left: 30px;"> 
                                                <tag style="font-size:7pt;" class="med_glipizide_tid">TID</tag>
                                            </div>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 15px;">
                                    <div class="col-xs-7">
                                        <div class="med_others_med">
                                            <p style="font-size:8pt;" class="ospace">Others:</p>
                                            <input type="text" id="medarea" rows="3" name="med_others_med" class="ospace" style="width:100%;border:0px;border-bottom:1px solid black;margin-top: -10px!important;">
                                        </div>
                                        <div class="med_medications_no">
                                            <p class="ospace" style="font-size:8pt;">Indicate how many medications checked:</p>
                                            <input type="text" name="med_medications_no" style="width:100%;border:0px;border-bottom:1px solid black;margin-top: -10px;">
                                        </div>
                                        <div class="med_recommendations">
                                            <p class="ospace" style="font-size:8pt;">Recommendations</p>
                                            <input type="text" id="recomarea" rows="3" name="med_recommendations" style="width:100%;border:0px;border-bottom:1px solid black;margin-top: -10px;">
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        <div id="ftr_medical_abstract">
                                            <div class="list-inline text-right list-unstyled" style="font-size:8pt;line-height: 100%;float: right;margin-top: 10px;">
                                                <?php echo $stamp; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!--                                 <footer class="m-t-15 p-20" id="ftr_medical_abstract">
                                    
                                </footer> -->
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
<!--         <div class="modal fade" id="modal_nephro_order_list" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;" class="table table-striped">
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div> -->
        <!-- modal nephro order list end -->

        <div id="modal_patient_nephro_order_view" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title" style="color: white;">
                                <i class="fa fa-eye"></i> Nephro Order <small style="color: white;">View</small>
                            </h4>
                    </div>
                    <div class="modal-body">
                        <div style="padding: 10px!important;">
                            <div id="patient_nephro_order_response"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bgm-green btn-default waves-effect" id="print_nephro">
                            <i class="fa fa-print"></i> Print
                        </button>
                        <button type="button" class="btn bgm-red btn-danger waves-effect close_new_prescription" data-dismiss="modal">
                            <i class="fa fa-arrow-left"></i> Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
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

                                    <div class="col-md-6">
                                       <div style="float:left;font-size:11pt;">
                                           Name : <u><areafullname class="areafullname"></areafullname></u>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div style="float:right;font-size:11pt;margin-right: 13px;">
                                            Age/Sex : <u><areaage class="areaage"></areaage></u> / <u><areasex class="areasex"></areasex></u>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div style="float:left;font-size:11pt;">
                                           Diagnosis : <input type="text" name="nephro_diagnosis" style="border:0px;border-bottom:1px solid #2c3e50;width:300px;"> 
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div style="float:right;font-size:11pt;">
                                            Dry Weight : 
                                            <input type="text" name="dry_weight" class="inputareadryweight" style="border:0px;border-bottom:1px solid #2c3e50;width:50px;">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div style="float:left;font-size:11pt;">
                                           Date : <input type="text" class="date-picker" id="nephro_order_date" name="nephro_order_date" style="border:0px;border-bottom:1px solid #2c3e50;width:120px;text-align: center;" required data-error-msg="Date is required" value="<?php echo date('m/d/Y'); ?>">
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
                                        <div class="text-left inc_freq_3x">
                                            <input type="checkbox" name="inc_freq_3x" id="inc_freq_3x">
                                            <label class="normal" for="inc_freq_3x">Increase frequency to 3 x a week</label>
                                        </div>
                                        <div class="text-left upd_medical_sheet">
                                            <input type="checkbox" name="upd_medical_sheet" id="upd_medical_sheet">
                                            <label class="normal" for="upd_medical_sheet">Update Medical Sheet</label>
                                        </div>
                                        <div class="text-left shift_recormon_500">
                                            <input type="checkbox" name="shift_recormon_500" id="shift_recormon_500" style="margin-left:70px;">
                                            <label class="normal" for="shift_recormon_500">Shift to Recormon 5000 u sc route at</label>
                                            <input type="checkbox" name="shift_recormon_500_1x" id="shift_recormon_500_1x" style="margin-left:30px;"> 
                                            <label class="normal" for="shift_recormon_500_1x">1x a week</label> 

                                            <input type="checkbox" name="shift_recormon_500_2x" id="shift_recormon_500_2x"> 
                                            <label class="normal" for="shift_recormon_500_2x">2x a week</label> 

                                            <input type="checkbox" name="shift_recormon_500_3x" id="shift_recormon_500_3x"> 
                                            <label class="normal" for="shift_recormon_500_3x">3x a week</label> 
                                        </div>
                                        <div class="text-left shift_eprex_4000">
                                            <input type="checkbox" name="shift_eprex_4000" id="shift_eprex_4000" style="margin-left:70px;">
                                            <label class="normal" for="shift_eprex_4000">Shift to Eprex 4000 u SC at</label>

                                            <input type="checkbox" name="shift_eprex_4000_1x" id="shift_eprex_4000_1x" style="margin-left:88px;"> 
                                            <label class="normal" for="shift_eprex_4000_1x">1x a week</label> 

                                            <input type="checkbox" name="shift_eprex_4000_2x" id="shift_eprex_4000_2x"> 
                                            <label class="normal" for="shift_eprex_4000_2x">2x a week</label> 

                                            <input type="checkbox" name="shift_eprex_4000_3x" id="shift_eprex_4000_3x"> 
                                            <label class="normal" for="shift_eprex_4000_3x">3x a week</label> 

                                        </div>
                                        <div class="text-left shift_eposino_4000u">
                                            <input type="checkbox" name="shift_eposino_4000u" id="shift_eposino_4000u" style="margin-left:70px;">
                                            <label class="normal" for="shift_eposino_4000u">Shift to Eposino 4000u SC at</label>

                                            <input type="checkbox" name="shift_eposino_4000u_1x" id="shift_eposino_4000u_1x" style="margin-left:77px;"> 
                                            <label class="normal" for="shift_eposino_4000u_1x">1x a week</label> 

                                            <input type="checkbox" name="shift_eposino_4000u_2x" id="shift_eposino_4000u_2x"> 
                                            <label class="normal" for="shift_eposino_4000u_2x">2x a week</label> 

                                            <input type="checkbox" name="shift_eposino_4000u_3x" id="shift_eposino_4000u_3x"> 
                                            <label class="normal" for="shift_eposino_4000u_3x">3x a week</label> 
                                        </div>
                                        <div class="text-left shift_eposino_6000u">
                                            <input type="checkbox" name="shift_eposino_6000u" id="shift_eposino_6000u" style="margin-left:70px;"> 
                                            <label class="normal" for="shift_eposino_6000u">Shift to Eposino 6000u SC at</label>

                                            <input type="checkbox" name="shift_eposino_6000u_1x" id="shift_eposino_6000u_1x" style="margin-left:77px;"> 
                                            <label class="normal" for="shift_eposino_6000u_1x">1x a week</label> 

                                            <input type="checkbox" name="shift_eposino_6000u_2x" id="shift_eposino_6000u_2x"> 
                                            <label class="normal" for="shift_eposino_6000u_2x">2x a week</label> 
                                        </div>
                                        <div class="text-left iv_sc_1month">
                                            <input type="checkbox" name="iv_sc_1month" id="iv_sc_1month" style="margin-left:70px;"> 
                                            <label class="normal" for="iv_sc_1month">IV Iron sucrose 100 mg once a month</label>
                                        </div>
                                        <div class="text-left iv_sc_2weeks">
                                            <input type="checkbox" name="iv_sc_2weeks" id="iv_sc_2weeks" style="margin-left:70px;"> 
                                            <label class="normal" for="iv_sc_2weeks">IV Iron sucrose 100 mg q 2 weeks (discontinue oral iron)</label>
                                        </div>
                                        <div class="text-left iv_sc_10doses">
                                            <input type="checkbox" name="iv_sc_10doses" id="iv_sc_10doses" style="margin-left:70px;"> 
                                            <label class="normal" for="iv_sc_10doses">IV Iron sucrose 100 mg q week for 10 doses then every 2 weeks (discontinue oral iron)</label>
                                        </div>
                                        <div class="text-left upd_medication">
                                            <input type="checkbox" name="upd_medication" id="upd_medication" style="margin-left:70px;"> 
                                            <label class="normal" for="upd_medication">update all medications as indicated in new prescription given to patient</label>
                                        </div>
                                    <div class="text-left sen_nurse_cann_avf">
                                            <input type="checkbox" name="sen_nurse_cann_avf" id="sen_nurse_cann_avf"> 
                                            <label class="normal" for="sen_nurse_cann_avf">Senior nurse to cannulate AVF at all times</label>
                                    </div>
                                    <div class="text-left rem_int_jug_catheter">
                                            <input type="checkbox" name="rem_int_jug_catheter" id="rem_int_jug_catheter"> 
                                            <label class="normal" for="rem_int_jug_catheter">May remove internal jugular catheter after 4 successful 2 needle cannulation using gauge 16 AV Fistula needle</label>
                                    </div>
                                    <div class="text-left rest_avf_2weeks">
                                            <input type="checkbox" name="rest_avf_2weeks" id="rest_avf_2weeks"> 
                                            <label class="normal" for="rest_avf_2weeks">Rest AVF for 2 weeks before recannulation</label>
                                    </div>

                                    <div class="text-left mod_anticoag">
                                            <input type="checkbox" name="mod_anticoag" id="mod_anticoag"> 
                                            <label class="normal" for="mod_anticoag">Modify anticoagulation as follows:</label>
                                    </div>
                                    <div class="text-left no_heparin">
                                        <input type="checkbox" name="no_heparin" id="no_heparin" style="margin-left: 70px;"> 
                                        <label class="normal" for="no_heparin">No heparin for</label> 

                                        <input name="no_heparin_for" type="text" style="border:0px;border-bottom:1px solid #2c3e50;width:100px;font-size:10pt;"> 
                                        weeks prior
                                        <input type="text" name="weeks_prior" style="border:0px;border-bottom:1px solid #2c3e50;width:400px;font-size:10pt;"> 
                                    </div>
                                    <div class="text-left no_heparin2">
                                        <input type="checkbox" name="no_heparin2" id="no_heparin2" style="margin-left: 70px;"> 
                                        <label class="normal" for="no_heparin2">No heparin for</label> 

                                        <input type="text" name="no_heparin_for2" style="border:0px;border-bottom:1px solid #2c3e50;width:100px;font-size:10pt;"> 
                                        weeks after
                                        <input type="text" name="weeks_after" style="border:0px;border-bottom:1px solid #2c3e50;width:400px;font-size:10pt;"> 
                                    </div>
                                    <div class="text-left give_uhf">
                                            <input type="checkbox" name="give_uhf" id="give_uhf" style="margin-left: 70px;"> 
                                            <label class="normal" for="give_uhf">Give UHF</label>

                                            <input type="text" name="give_uhf_units" style="border:0px;border-bottom:1px solid #2c3e50;width:100px;font-size:10pt;"> 
                                        units bolus then <input type="text" name="give_uhf_units_bolus" style="border:0px;border-bottom:1px solid #2c3e50;width:300px;font-size:10pt;">
                                    </div>
                                    <div class="text-left heparin_free_dialysis">
                                            <input type="checkbox" name="heparin_free_dialysis" id="heparin_free_dialysis" style="margin-left: 70px;"> 
                                            <label class="normal" for="heparin_free_dialysis">Heparin Free Dialysis</label>
                                    </div>
                                    <div class="text-left no_heparin_last_hr">
                                            <input type="checkbox" name="no_heparin_last_hr" id="no_heparin_last_hr" style="margin-left: 70px;"> 
                                            <label class="normal" for="no_heparin_last_hr">No Heparin on last hour of dialysis</label>
                                    </div>
                                    <div class="text-left hold_oral_anticoagulant_1wk_prior">
                                            <input type="checkbox" name="hold_oral_anticoagulant_1wk_prior" id="hold_oral_anticoagulant_1wk_prior" style="margin-left: 70px;"> 
                                            <label class="normal" for="hold_oral_anticoagulant_1wk_prior">Hold oral anticoagulant (aspirin, clopidogrel, warfarin, etc) 1 week prior to operation</label>
                                    </div>
                                    <div class="text-left hold_oral_anticoagulant_1wk_post">
                                            <input type="checkbox" name="hold_oral_anticoagulant_1wk_post" id="hold_oral_anticoagulant_1wk_post" style="margin-left: 70px;"> 
                                            <label class="normal" for="hold_oral_anticoagulant_1wk_post">Hold oral anticoagulant (aspirin, clopidogrel, warfarin, etc) 1 week post operation</label>
                                    </div>
                                    <div class="text-left qb_post_dilution">
                                        <input type="checkbox" name="qb_post_dilution" id="qb_post_dilution"> 
                                        <label class="normal" for="qb_post_dilution">QB 350-450 mL/min QD 800 mL/min post dilution HDF with 40 L Substitution Fluid</label>
                                    </div>
                                    <div class="text-left qb_pre_dilution">
                                        <input type="checkbox" name="qb_pre_dilution" id="qb_pre_dilution"> 
                                        <label class="normal" for="qb_pre_dilution">QB 350-450 mL/min QD 800 mL/min pre dilution HDF with 40 L Substitution Fluid</label>
                                    </div>
                                    <div class="text-left qb_low_flux_dialyzer">
                                        <input type="checkbox" name="qb_low_flux_dialyzer" id="qb_low_flux_dialyzer"> 
                                        <label class="normal" for="qb_low_flux_dialyzer">QB 350 mL/min QD 500 mL/min Low Flux Dialyzer</label>
                                    </div>
                                    <div class="text-left qb_hi_flux_dialyzer">
                                        <input type="checkbox" name="qb_hi_flux_dialyzer" id="qb_hi_flux_dialyzer"> 
                                        <label class="normal" for="qb_hi_flux_dialyzer">QB 350 mL/min QD 800 mL/min Hi Flux Dialyzer</label>
                                    </div>

                                    <div class="text-left gentamycin_lock">
                                        <input type="checkbox" name="gentamycin_lock" id="gentamycin_lock"> 
                                        <label class="normal" for="gentamycin_lock">Gentamycin lock 20 mg/port (antibiotic lock) after each dialysis</label>
                                    </div>
                                    <div class="text-left ampicillin_lock">
                                        <input type="checkbox" name="ampicillin_lock" id="ampicillin_lock"> 
                                        <label class="normal" for="ampicillin_lock">Ampicillin lock 250 mg/port (antibiotic lock) after each dialysis</label>
                                    </div>
                                    <div class="text-left citrate_lock_4">
                                        <input type="checkbox" name="citrate_lock_4" id="citrate_lock_4"> 
                                        <label class="normal" for="citrate_lock_4">Citrate lock 4% as antibiotic lock</label>
                                    </div>
                                    <div class="text-left citrate_lock_30">
                                        <input type="checkbox" name="citrate_lock_30" id="citrate_lock_30"> 
                                        <label class="normal" for="citrate_lock_30">Citrate lock 30% as antibiotic lock</label>
                                    </div>

                                    <div class="text-left monthly_body_comp_analysis">
                                        <input type="checkbox" name="monthly_body_comp_analysis" id="monthly_body_comp_analysis"> 
                                        <label class="normal" for="monthly_body_comp_analysis">Monthly in Body Composition Analysis (In Body Scan/ Maltron BIA, etc)</label>
                                    </div>

                                    <div class="text-left please_do_monthly">
                                            <input type="checkbox" name="please_do_monthly" id="please_do_monthly">
                                            <label class="normal" for="please_do_monthly">Please do monthly labs on or before</label>
                                            <input name="on_or_before" type="text" style="border:0px;border-bottom:1px solid #2c3e50;width:414px;font-size:10pt;"> 
                                    </div>
                                    <div class="text-left others_orders">
                                            <input type="checkbox" name="others_orders" id="others_orders">
                                            <label class="normal" for="others_orders">Other orders</label>
                                    </div>
                                    <div class="text-center more_details1">
                                        <textarea class="form-control" name="more_details1" style="font-size:10pt;"></textarea>
                                    </div>
                                    <br/>
                                    <div class="text-center more_details2">
                                        <textarea class="form-control" name="more_details2" style="font-size:10pt;"></textarea>
                                    </div>
                                    <br/>
                                    <div class="cartoon_lungs">
                                        <div class="col-md-6">
                                            <img src="assets/img/cartoon-lungs.png" style="border: 1px solid lightgray;">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" name="cartoon_lungs" id="cartoon_lungs"> 
                                            <label class="normal" for="cartoon_lungs">Cartoon Lungs</label><br/>
                                            Remarks : <br/>
                                            <textarea class="form-control" rows="8" name="cartoon_lungs_remarks"></textarea> <br/>
                                            <input type="checkbox" name="plural_effusion_both_lungs" id="plural_effusion_both_lungs">
                                            <label class="normal" for="plural_effusion_both_lungs">
                                                Pleural Effusion both lungs
                                            </label> <br/>

                                            <input type="checkbox" name="plural_effusion_left_lung" id="plural_effusion_left_lung">
                                            <label class="normal" for="plural_effusion_left_lung">
                                                Pleural Effusion left lung
                                            </label> <br/>

                                            <input type="checkbox" name="plural_effusion_right_lung" id="plural_effusion_right_lung">
                                            <label class="normal" for="plural_effusion_right_lung">
                                                Pleural Effusion right lung
                                            </label>
                                        </div>
                                    </div>

<!--                                     <div class="row">
                                        <div class="text-left" style="font-weight:bold;">
                                        Noted by :  <input type="text" style="border:0px;border-bottom:1px solid #2c3e50;width:250px;font-size:12pt;pointer-events: none!important;">
                                        </div>
                                    </div> -->

                                    
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
                        <button type="button" class="btn btn-danger bgm-red waves-effect close_nephro" data-dismiss="modal">
                            <i class="fa fa-arrow-left"></i> Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal nephro order end -->

        <!--  Nephro Clearance Modal -->
        <div id="modal_patient_nephro_clearance" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title" style="color: white;">
                                <span id="nephrology_clearance_icon"></span>
                                Nephrology Clearance 
                                <small class="patient_txn"></small>
                            </h4>
                    </div>
                    <div class="modal-body" style="padding:5px;">
                        <div id="print_nephro_content">
                            <div class="container-fluid">
                                <form id="frm_nephrology_clearance">
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
                                        <div class="col-xs-6" style="float:right;font-size:11pt;">Date : <areamedcertdate class="areamedcertdate"><input type="text" class="date-picker" id="nephro_clearance_date" name="nephro_clearance_date" style="border:0px;border-bottom:1px solid #2c3e50;width:78px;text-align: center;" required data-error-msg="Date is required"></areamedcertdate>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="text-center">
                                        <h4 class="text-uppercase" style="font-family:tahoma;font-size:13pt;font-weight:bold;">
                                            Nephrology Clearance
                                        </h4>
                                    </div>
                                </div><br>
                                <div class="row">
                                        <div class="text-left">
                                            <input type="checkbox" name="contemplated_surgery_renal" id="contemplated_surgery_renal">
                                            <label class="normal" for="contemplated_surgery_renal">May go ahead with contemplated surgery renal wise</label>
                                        </div>
                                        <div class="text-left">
                                            <input type="checkbox" name="no_nsaids_cox2" id="no_nsaids_cox2" style="margin-left:70px;">
                                            <label class="normal" for="no_nsaids_cox2">No NSAIDs and COX 2 inhibitors as plain reliever</label>
                                        </div>
                                        <div class="text-left">
                                            <input type="checkbox" name="avoid_fluid_overload" id="avoid_fluid_overload" style="margin-left:70px;">
                                            <label class="normal" for="avoid_fluid_overload">Avoid fluid overload</label>
                                        </div>
                                        <div class="text-left">
                                            <input type="checkbox" name="no_ace_inhi_arb" id="no_ace_inhi_arb" style="margin-left:70px;">
                                            <label class="normal" for="no_ace_inhi_arb">No ACE Inhibitors or ARB as antihypertensive</label>
                                        </div>
                                        <div class="text-left">
                                            <input type="checkbox" name="np_potassium_iv_fluid" id="np_potassium_iv_fluid" style="margin-left:70px;">
                                            <label class="normal" for="np_potassium_iv_fluid">No potassium containing IV fluid</label>
                                        </div>
                                        <br/>

                                        <div class="text-left">
                                            <input type="checkbox" name="contemplates_ct_scan" id="contemplates_ct_scan">
                                            <label class="normal" for="contemplates_ct_scan">May go ahead with contemplated CT Scan with contrast</label>
                                        </div>
                                        <div class="text-left">
                                            <input type="checkbox" name="use_non_ionic_isoosmolar" id="use_non_ionic_isoosmolar" style="margin-left:70px;">
                                            <label class="normal" for="use_non_ionic_isoosmolar">Please use non ionic isoosmolar contrast (GE Visipaque) less than 100 mL</label>
                                        </div>
                                        <div class="text-left">
                                            <input type="checkbox" name="give_n_acetylcysteine" id="give_n_acetylcysteine" style="margin-left:70px;">
                                            <label class="normal" for="give_n_acetylcysteine">Give N Acetylcysteine 600 mg 2x a day 2 days before and after CT Scan</label>
                                        </div>
                                        <div class="text-left">
                                            <input type="checkbox" name="give_trimetazidine" id="give_trimetazidine" style="margin-left:70px;">
                                            <label class="normal" for="give_trimetazidine">Give Trimetazidine 35 mg 2x a day 2 days before and after CT Scan</label>
                                        </div>
                                        <div class="text-left">
                                            <input type="checkbox" name="oral_hydration_2l_day" id="oral_hydration_2l_day" style="margin-left:70px;">
                                            <label class="normal" for="oral_hydration_2l_day">Oral hydration at least 2 liters per day</label>
                                        </div>
                                        <div class="text-left">
                                            <input type="checkbox" name="repeate_creatinine_2d_ctscan" id="repeate_creatinine_2d_ctscan" style="margin-left:70px;">
                                            <label class="normal" for="repeate_creatinine_2d_ctscan">Repeat Creatinine 2 days after CT Scan</label>
                                        </div>
                                        <div class="text-left">
                                            <input type="checkbox" name="for_cystatin_c_ctscan" id="for_cystatin_c_ctscan" style="margin-left:70px;">
                                            <label class="normal" for="for_cystatin_c_ctscan">For Cystatin C immediately after CT Scan</label>
                                        </div>
                                        <div class="text-left">
                                            <input type="checkbox" name="urine_ngal_ctscan" id="urine_ngal_ctscan" style="margin-left:70px;">
                                            <label class="normal" for="urine_ngal_ctscan">Urine NGAL immediately after CT Scan</label>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success bgm-green waves-effect save_nephro_clearance right_nephro_clearance_create" id="save_nephro_clearance">
                            <i class="fa fa-check-circle"></i> Save
                        </button>
                        <button type="button" class="btn btn-danger bgm-red waves-effect close_nephro_clearance" data-dismiss="modal">
                            <i class="fa fa-arrow-left"></i> Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal nephro order end -->

        <div id="modal_patient_nephro_clearance_view" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title" style="color: white;">
                                <i class="fa fa-eye"></i> Nephro Clearance <small style="color: white;">View</small>
                            </h4>
                    </div>
                    <div class="modal-body">
                        <div style="padding: 10px!important;">
                            <div id="patient_nephro_clearance_response"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bgm-green btn-default waves-effect" id="print_nephro_clearance">
                            <i class="fa fa-print"></i> Print
                        </button>
                        <button type="button" class="btn bgm-red btn-danger waves-effect close_nephro_clearance" data-dismiss="modal">
                            <i class="fa fa-arrow-left"></i> Back
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <!-- modal diagnostic list start -->
<!--         <div class="modal fade" id="modal_lab_report_list" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;" class="table table-striped">
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div> -->
        <!-- modal diagnostic list end -->

        <div id="modal_laboratory_report_view" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title" style="color: white;">
                                <i class="fa fa-eye"></i> Laboratory Request <small style="color: white;">View</small>
                            </h4>
                    </div>
                    <div class="modal-body">
                        <div style="padding: 10px!important;">
                            <div id="patient_laboratory_request_response"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bgm-green btn-default waves-effect" id="print_labreport_diagnostics">
                            <i class="fa fa-print"></i> Print
                        </button>
                        <button type="button" class="btn bgm-red btn-danger waves-effect" data-dismiss="modal">
                            <i class="fa fa-arrow-left"></i> Back
                        </button>
                    </div>
                </div>
            </div>
        </div>

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
                                               
                                               <div class="hm_cbc">
                                                    <input type="checkbox" class="hm_cbc" name="" id="hm_cbc" style="width:50px;border:0px;border-bottom:1px solid black;"> 
                                                    <label for="hm_cbc" class="normal">CBC with PC</label>   
                                               </div>
                                               <div class="hm_ph_bsmear">
                                                   <input type="checkbox" name="" id="hm_ph_bsmear" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                    <label for="hm_ph_bsmear" class="normal">Peripheral Blood Smear</label>  
                                               </div>

                                               <h6><b>CHEMISTRY</b></h6>

                                               <div class="chem_bun_prepost">
                                                    <input type="checkbox" name="" id="chem_bun_prepost" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                    <label for="chem_bun_prepost" class="normal">BUN (Pre and Post HD)</label>  
                                               </div>
                                               <div class="chem_bun">
                                                   <input type="checkbox" name="" id="chem_bun" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                    <label for="chem_bun" class="normal">BUN</label>  
                                               </div>
                                               <div class="chem_creatinine">
                                                   <input type="checkbox" name="" id="chem_creatinine" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                    <label for="chem_creatinine" class="normal">Creatinine</label>  
                                               </div>
                                               <div class="chem_na">
                                                   <input type="checkbox" name="" id="chem_na" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                    <label for="chem_na" class="normal">Na</label> 
                                               </div>
                                               <div class="chem_k">
                                                   <input type="checkbox" name="" id="chem_k" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                    <label for="chem_k" class="normal">K</label> 
                                               </div>
                                               <div class="chem_fbs">
                                                   <input type="checkbox" name="" id="chem_fbs" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                    <label for="chem_fbs" class="normal">FBS</label> 
                                               </div>
                                               <div class="chem_ion_calc">
                                                   <input type="checkbox" name="" id="chem_ion_calc" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                    <label for="chem_ion_calc" class="normal">Ionized Calcium</label> 
                                               </div>
                                               <div class="chem_phosporus">
                                                   <input type="checkbox" name="" id="chem_phosporus" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                    <label for="chem_phosporus" class="normal">Phosphorus</label> 
                                               </div>
                                               <div class="chem_albumin">
                                                   <input type="checkbox" name="" id="chem_albumin" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                    <label for="chem_albumin" class="normal">Albumin</label>
                                               </div>
                                               <div class="chem_uricacid">
                                                   <input type="checkbox" name="" id="chem_uricacid" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                    <label for="chem_uricacid" class="normal">Uric Acid</label>
                                               </div>
                                               <div class="chem_lipidprofile">
                                                   <input type="checkbox" name="" id="chem_lipidprofile" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                    <label for="chem_lipidprofile" class="normal">Lipid Profile</label>
                                               </div>
                                               <div class="chem_sgpt">
                                                   <input type="checkbox" name="" id="chem_sgpt" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                    <label for="chem_sgpt" class="normal">SGPT</label>
                                               </div>
                                               <div class="chem_specify">
                                                   <input type="checkbox" name="" id="chem_specify" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                    <label for="chem_specify" class="normal">Others, please specify </label> <br/>
                                                    <textarea class="form-control" rows="3" name="chem_specify_txt"></textarea>
                                               </div>
                                            </div>
                                            <div class="col-xs-8">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <h6><b>IMAGING STUDIES</b></h6>

                                                        <div class="medicine_table imag_12lecg">
                                                            <input type="checkbox" id="imag_12lecg" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            <label for="imag_12lecg" class="normal med_title">12 L ECG</label>
                                                        </div>
                                                        <div class="medicine_table imag_cxrpa">
                                                            <input type="checkbox" id="imag_cxrpa" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            <label for="imag_cxrpa" class="normal">CXR PA</label>
                                                        </div>
                                                        <div class="medicine_table imag_kubxray">
                                                            <input type="checkbox" id="imag_kubxray" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            <label for="imag_kubxray" class="normal">KUB XRAY</label>
                                                        </div>
                                                        <div class="medicine_table imag_ctstronogram">
                                                            <input type="checkbox" id="imag_ctstronogram" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            <label for="imag_ctstronogram" class="normal">CT STONOGRAM</label>
                                                        </div>
                                                        <div class="medicine_table imag_kubultrasound">
                                                            <input type="checkbox" id="imag_kubultrasound" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            <label for="imag_kubultrasound" class="normal">KUB Ultrasound</label>
                                                        </div>
                                                        <div class="medicine_table imag_prosultra">
                                                            <input type="checkbox" id="imag_prosultra" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            <label for="imag_prosultra" class="normal">Prostate Ultrasound</label>
                                                        </div>
                                                        <div class="medicine_table imag_abdomen">
                                                            <input type="checkbox" id="imag_abdomen" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            <label for="imag_abdomen" class="normal">Ultrasound of WAB</label>
                                                        </div>
                                                        <div class="medicine_table imag_decho_plain">
                                                            <input type="checkbox" id="imag_decho_plain" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            <label for="imag_decho_plain" class="normal">2 Dechocardiography (Plain)</label>
                                                        </div>
                                                        <div class="medicine_table imag_ct_angiography">
                                                            <input type="checkbox" id="imag_ct_angiography" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            <label for="imag_ct_angiography" class="normal">CT angiography</label>
                                                        </div>
                                                        <div class="medicine_table imag_decho_doppler">
                                                            <input type="checkbox" id="imag_decho_doppler" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            <label for="imag_decho_doppler" class="normal">2 Dechocardiography (with doppler)</label>
                                                        </div>
                                                        <div class="medicine_table imag_renal_duplex">
                                                            <input type="checkbox" id="imag_renal_duplex" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            <label for="imag_renal_duplex" class="normal">Renal Duplex Scan</label>
                                                        </div> 
                                                        <div class="medicine_table imag_others">
                                                           <input type="checkbox" id="imag_others" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            Others:
                                                           <input type="text" style="width:120px;border:0px;border-bottom:1px solid black;" name="imag_others_txt"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row renal_gfr">
                                                    <div class="col-xs-5">
                                                        <h6><b>RENAL FUNCTION TEST</b></h6>
                                                        <input type="checkbox" id="renal_gfr" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                        <label for="renal_gfr" class="normal">Nuclear GFR Scan</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <h6><b>URINE EXAMS</b></h6>

                                                        <div class="medicine_table urine_routine_analysis">
                                                            <input type="checkbox" id="urine_routine_analysis" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            <label for="urine_routine_analysis" class="normal">Routine Urinalysis</label>
                                                        </div>
                                                        <div class="medicine_table urine_rbc_morph">
                                                            <input type="checkbox" id="urine_rbc_morph" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            <label for="urine_rbc_morph" class="normal">24 hour urine total protein</label>
                                                        </div>
                                                        <div class="medicine_table urine_random">
                                                            <input type="checkbox" id="urine_random" style="width:50px;border:0px;border-bottom:1px solid black;"> 
                                                            <label for="urine_random" class="normal">Urine RBC morphology</label>
                                                        </div>
                                                        <div class="medicine_table urine_sodium">
                                                            <input type="checkbox" id="urine_sodium" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            <label for="urine_sodium" class="normal">24 hour creatinine clearance</label>
                                                        </div>
                                                        <div class="medicine_table urine_calcium">
                                                            <input type="checkbox" id="urine_calcium" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            <label for="urine_calcium" class="normal">Random Urine Protein </label>
                                                        </div>
                                                        <div class="medicine_table urine_creatinine_ratio">
                                                            <input type="checkbox" id="urine_creatinine_ratio" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            <label for="urine_creatinine_ratio" class="normal">Urine Albumin Creatinine Ratio</label>
                                                        </div>
                                                        <div class="medicine_table urine_afb">
                                                            <input type="checkbox" id="urine_afb" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            <label for="urine_afb" class="normal">Urine AFB</label>
                                                        </div>
                                                        <div class="medicine_table urine_cytology">
                                                            <input type="checkbox" id="urine_cytology" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            <label for="urine_cytology" class="normal">Urine Cytology</label>
                                                        </div>  
                                                    </div>
                                                </div>                                     
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="text-left">
                                            <div class="sentence1">
                                                Please have this test done on/or before <input type="text" name="sentence1" style="width:40%;border:0px;border-bottom:1px solid black;"> at <input type="text" style="width:28%;border:0px;border-bottom:1px solid black;" name="sentence2">
                                            </div>
                                            Instructions : 
                                            <div class="non_fasting">
                                                <input type="checkbox" id="non_fasting" style="width:50px;border:0px;border-bottom:1px solid black;margin-left:10px"> 
                                                <label for="non_fasting" class="normal">Nonfasting</label>
                                            </div>
                                            <div class="fasting" style="display: inline-block;">
                                                <input type="checkbox" id="fasting" style="width:50px;border:0px;border-bottom:1px solid black;margin-left:10px"> 
                                                <label for="fasting" class="normal">Fasting</label>
                                            </div>
                                            <div class="fasting_6hrs" style="display: inline-block;">
                                                <input type="checkbox" id="fasting_6hrs" style="width:50px;border:0px;border-bottom:1px solid black;margin-left:10px">
                                                <label for="fasting_6hrs" class="normal">6 Hours</label>
                                            </div>
                                            <div class="fasting_8hrs" style="display: inline-block;">
                                                <input type="checkbox" id="fasting_8hrs" style="width:50px;border:0px;border-bottom:1px solid black;margin-left:10px">
                                                <label for="fasting_8hrs" class="normal">8 Hours</label>
                                            </div>
                                            <div class="fasting_10hrs" style="display: inline-block;">
                                                <input type="checkbox" id="fasting_10hrs" style="width:50px;border:0px;border-bottom:1px solid black;margin-left:10px">
                                                <label for="fasting_10hrs" class="normal">10 Hours</label>
                                            </div>
                                            <div class="instruct_others">
                                                <input type="checkbox" id="instruct_others" style="width:50px;border:0px;border-bottom:1px solid black;margin-left:10px"> Others: <input type="text" style="width:350px;border:0px;border-bottom:1px solid black;" name="instruct_others_txt">
                                            </div>
                                         </div>
                                    </div>
                                </div>
                                <footer class="m-t-15 p-20" id="ftr_lab_report">
                                    <div class="list-inline text-right list-unstyled" style="font-size:8pt;line-height: 100%;float: right;">
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
                        <button type="button" class="btn btn-danger bgm-red waves-effect close_labreport" data-dismiss="modal">
                            <i class="fa fa-arrow-left"></i> Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
         <!--  laboratroy report MODAL -->

        <!-- modal medical certificate list start -->
<!--         <div class="modal fade" id="modal_med_cert_list" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;" class="table table-striped">
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div> -->
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
<!--         <div class="modal fade" id="modal_nephro_record" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#2980b9;" class="table table-striped">
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div> -->
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
<!--         <div class="modal fade" id="modal_referral_list" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;" class="table table-striped">
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div> -->
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
                               <!--          <div class="text-left">
                                            <input type="text"  class="date-picker" name="appointment_date" id="referral_appointment_date" style="border:0px;border-bottom:1px solid #2c3e50;width:195px;text-align: center!important;">
                                            <p>Your next appointment will be on</p>
                                        </div> -->
                                    </div>
                                </div>
                                <footer class="m-t-15 p-20" id="ftr_referral">
                                    <div class="list-inline text-right list-unstyled" style="font-size:8pt;line-height: 100%;float: right;">
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
<!--         <div class="modal fade" id="modal_admitting_order_list" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;" class="table table-striped">
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div> -->
        <!-- modal patient admitting order end -->
        

        <div id="modal_admitting_order_view" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#27ae60;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                            <h4 class="modal-title" style="color: white;">
                                <i class="fa fa-eye"></i> Admitting Order <small style="color: white;">View</small>
                            </h4>
                    </div>
                    <div class="modal-body">
                        <div style="padding: 10px!important;">
                            <div id="patient_admitting_order_response"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bgm-green btn-default waves-effect" id="print_admitting_order">
                            <i class="fa fa-print"></i> Print
                        </button>
                        <button type="button" class="btn bgm-red btn-danger waves-effect close_admitting_order" data-dismiss="modal">
                            <i class="fa fa-arrow-left"></i> Back
                        </button>
                    </div>
                </div>
            </div>
        </div>

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
            <!--                                 <button type="button" class="btn btn-success hidden" id="btn_check_all_checkbox">
                                                Check all checkbox
                                            </button> -->
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                            <div class="text-left">
                                                    <i class="fa fa-angle-right"></i> Please admit to <br/>
                                                        <div class="cb_icu">
                                                            <input type="checkbox" name="cb_icu" id="cb_icu" style="margin-left: 100px;"> 
                                                            <label for="cb_icu" class="normal">ICU</label> <br />
                                                        </div>
                                                        <div class="cb_room">
                                                            <input type="checkbox" name="cb_room" id="cb_room" style="margin-left: 100px;"> <label for="cb_room" class="normal">Room of choice under my service.</label> <br />
                                                        </div>
                                                    <i class="fa fa-angle-right"></i> Secure consent for admission &amp; management <br />
                                                        
                                                    <div class="txt_mon_vsq">
                                                        <i class="fa fa-angle-right"></i> Monitor VS q 
                                                        <input type="text" class="txt_right" name="txt_mon_vsq" id="txt_mon_vsq" style="width: 30px;"> hours <br /> 
                                                    </div>
                                                    <div class="txt_mon_10">
                                                        <i class="fa fa-angle-right"></i> Monitor 1 &amp; 0 q
                                                        <input type="text" class="txt_right" name="txt_mon_10" id="txt_mon_10" style="width: 30px;"> hours <br />
                                                    </div>
                                                    <i class="fa fa-angle-right"></i> Diet: <br/ >
                                                    <div class="cb_low_fat_salt_diet">
                                                        <input type="checkbox" name="cb_low_fat_salt_diet" id="cb_low_fat_salt_diet"> 
                                                        <label for="cb_low_fat_salt_diet" class="normal">Low salt, low fat diet</label><br />
                                                    </div>
                                                    <div class="cb_daib_renal_diet">
                                                        <input type="checkbox" name="cb_daib_renal_diet" id="cb_daib_renal_diet"> 
                                                        <label for="cb_daib_renal_diet" class="normal">Diabetic Renal Diet</label><br />
                                                    </div>
                                                        <div style="margin-left: 50px; width: 50%;">
                                                            <div class="txt_drdtcr_kcal_day">
                                                                TCR : <input type="text" class="txt_right" name="txt_drdtcr_kcal_day" style="width:105px;" id="txt_drdtcr_kcal_day"> kcal/day divided into 
                                                                <br />
                                                            </div>
                                                            <div class="medicine_table cb_drdtc_na_day">
                                                                <input type="checkbox" name="cb_drdtc_na_day" id="cb_drdtc_na_day"> 
                                                                <input type="text" name="txt_drdtc_na_day" id="txt_drdtc_na_day" class="txt_right" style="width: 50px;">
                                                                <label for="cb_drdtc_na_day" class="normal">Na/day</label>    
                                                            </div>
                                                            <div class="medicine_table cb_drdtc_g_phosp_day">
                                                                <input type="checkbox" name="cb_drdtc_g_phosp_day" id="cb_drdtc_g_phosp_day"> 
                                                                <input type="text" name="txt_drdtc_g_phosp_day" id="txt_drdtc_g_phosp_day" class="txt_right" style="width: 50px;">
                                                                <label for="cb_drdtc_g_phosp_day" class="normal">g Phosphorous /day</label>
                                                            </div>
                                                            <div class="medicine_table cb_drdtc_gk_day">
                                                                <input type="checkbox" name="cb_drdtc_gk_day" id="cb_drdtc_gk_day"> 
                                                                <input type="text" name="txt_drdtc_gk_day" id="txt_drdtc_gk_day" class="txt_right" style="width: 50px;">
                                                                <label for="cb_drdtc_gk_day" class="normal">g K/day</label>
                                                            </div>
                                                            <div class="medicine_table cb_drdtc_g_fats">
                                                                <input type="checkbox" name="cb_drdtc_g_fats" id="cb_drdtc_g_fats"> 
                                                                <input type="text" name="txt_drdtc_g_fats" id="txt_drdtc_g_fats" class="txt_right" style="width: 50px;">
                                                                <label for="cb_drdtc_g_fats" class="normal">g Fats/day</label>
                                                            </div>
                                                            <div class="medicine_table cb_drdtc_l_fluids_day">    
                                                                <input type="checkbox" name="cb_drdtc_l_fluids_day" id="cb_drdtc_l_fluids_day"> 
                                                                <input type="text" name="txt_drdtc_l_fluids_day" id="txt_drdtc_l_fluids_day" class="txt_right" style="width: 50px;">
                                                                <label for="cb_drdtc_l_fluids_day" class="normal">L fluids/day</label>
                                                            </div>
                                                            <div class="medicine_table cb_drdtc_g_cho">
                                                                <input type="checkbox" name="cb_drdtc_g_cho" id="cb_drdtc_g_cho"> 
                                                                <input type="text" name="txt_drdtc_g_cho" id="txt_drdtc_g_cho" class="txt_right" style="width: 50px;">
                                                                <label for="cb_drdtc_g_cho" class="normal">g Carbohydrates/day</label>
                                                            </div>
                                                            <div class="medicine_table cb_drdtc_g_protein">
                                                                <input type="checkbox" name="cb_drdtc_g_protein" id="cb_drdtc_g_protein"> 
                                                                <input type="text" name="txt_drdtc_g_protein" id="txt_drdtc_g_protein" class="txt_right" style="width: 50px;">
                                                                <label for="cb_drdtc_g_protein" class="normal">g Protein/day</label>
                                                            </div>
                                                        </div>

                                                        <!-- renal diet -->
                                                        <div class="cb_renal_diet">
                                                            <input type="checkbox" name="cb_renal_diet" id="cb_renal_diet"> 
                                                            <label for="cb_renal_diet" class="normal">Renal Diet</label><br />
                                                        </div>
                                                        <div style="margin-left: 50px;width: 50%;">
                                                            <div class="txt_rdtcr_kcal_day">
                                                                TCR : <input type="text" class="txt_right" name="txt_rdtcr_kcal_day" style="width:105px;" id="txt_rdtcr_kcal_day"> kcal/day divided into 
                                                                <br />
                                                            </div>    
                                                            <div class="medicine_table cb_rdtc_na_day">
                                                                <input type="checkbox" name="cb_rdtc_na_day" id="cb_rdtc_na_day"> 
                                                                <input type="text" name="txt_rdtc_na_day" id="txt_rdtc_na_day" class="txt_right" style="width: 50px;">
                                                                <label for="cb_rdtc_na_day" class="normal">Na/day</label>
                                                            </div>
                                                            <div class="medicine_table cb_rdtc_g_phosp_day">
                                                                <input type="checkbox" name="cb_rdtc_g_phosp_day" id="cb_rdtc_g_phosp_day">
                                                                <input type="text" name="txt_rdtc_g_phosp_day" id="txt_rdtc_g_phosp_day" class="txt_right" style="width: 50px;">
                                                                <label for="cb_rdtc_g_phosp_day" class="normal">g Phosphorous /day</label>
                                                            </div>
                                                            <div class="medicine_table cb_rdtc_gk_day">
                                                                <input type="checkbox" name="cb_rdtc_gk_day" id="cb_rdtc_gk_day"> 
                                                                <input type="text" name="txt_rdtc_gk_day" id="txt_rdtc_gk_day" class="txt_right" style="width: 50px;">
                                                                <label for="cb_rdtc_gk_day" class="normal">g K/day</label>
                                                            </div>
                                                            <div class="medicine_table cb_rdtc_g_fats">
                                                                <input type="checkbox" name="cb_rdtc_g_fats" id="cb_rdtc_g_fats"> 
                                                                <input type="text" name="txt_rdtc_g_fats" id="txt_rdtc_g_fats" class="txt_right" style="width: 50px;">
                                                                <label for="cb_rdtc_g_fats" class="normal">g Fats/day</label>
                                                            </div>
                                                            <div class="medicine_table cb_rdtc_l_fluids_day">
                                                                <input type="checkbox" name="cb_rdtc_l_fluids_day" id="cb_rdtc_l_fluids_day"> 
                                                                <input type="text" name="txt_rdtc_l_fluids_day" id="txt_rdtc_l_fluids_day" class="txt_right" style="width: 50px;">
                                                                <label for="cb_rdtc_l_fluids_day" class="normal">L fluids/day</label>
                                                            </div>
                                                            <div class="medicine_table cb_rdtc_g_cho">
                                                                <input type="checkbox" name="cb_rdtc_g_cho" id="cb_rdtc_g_cho"> 
                                                                <input type="text" name="txt_rdtc_g_cho" id="txt_rdtc_g_cho" class="txt_right" style="width: 50px;">
                                                                <label for="cb_rdtc_g_cho" class="normal">g Carbohydrates/day</label>
                                                            </div>
                                                            <div class="medicine_table cb_rdtc_g_protein">
                                                                <input type="checkbox" name="cb_rdtc_g_protein" id="cb_rdtc_g_protein"> 
                                                                <input type="text" name="txt_rdtc_g_protein" id="txt_rdtc_g_protein" class="txt_right" style="width: 50px;">
                                                                <label for="cb_rdtc_g_protein" class="normal">g Protein/day</label>
                                                            </div>
                                                        </div>

                                                        <div style="margin-left: 20px;">

                                                            Diagnosis : 
                                                            <div class="cb_chronic_kds">
                                                                <input type="checkbox" name="cb_chronic_kds" id="cb_chronic_kds"> 
                                                                <label for="cb_chronic_kds" class="normal"> Chronic Kidney Disease Stage </label> 
                                                                <input type="text" class="txt_right" name="txt_chronic_kds" id="txt_chronic_kds" style="width: 60px;"> secondary to <br>
                                                            </div>
                                                            <div class="cb_chronic_kds_dmn">
                                                                <input type="checkbox" name="cb_chronic_kds_dmn" id="cb_chronic_kds_dmn" style="margin-left: 215px;"> 
                                                                <label for="cb_chronic_kds_dmn" class="normal"> DM Nephropathy </label>
                                                                <br/>
                                                            </div>
                                                            <div class="cb_chronic_kds_un">
                                                                <input type="checkbox" name="cb_chronic_kds_un" id="cb_chronic_kds_un" style="margin-left: 215px;"> 
                                                                <label for="cb_chronic_kds_un" class="normal"> Urate Nephropathy </label>
                                                                <br/>
                                                            </div>
                                                            <div class="cb_chronic_kds_hn">
                                                                <input type="checkbox" name="cb_chronic_kds_hn" id="cb_chronic_kds_hn" style="margin-left: 215px;">
                                                                <label for="cb_chronic_kds_hn" class="normal"> Hypertensive Nephropathy </label>
                                                                <br/>
                                                            </div>
                                                            <div class="cb_chronic_kds_others">
                                                                <input type="checkbox" name="cb_chronic_kds_others" id="cb_chronic_kds_others" style="margin-left: 215px;">
                                                                <label for="cb_chronic_kds_others" class="normal"> Others: </label>
                                                                <input type="text" name="txt_chronic_kds_others" id="txt_chronic_kds_others" class="txt_left" style="width: 205px;">
                                                                <br/>    
                                                            </div>
                                                            <div class="cb_diag_others">
                                                                <input type="checkbox" name="cb_diag_others" id="cb_diag_others" style="margin-left: 70px;">
                                                                <label for="cb_diag_others" class="normal"> Others: </label>
                                                                <input type="text" name="txt_diag_others" id="txt_diag_others" class="txt_left" style="width: 350px;">
                                                                <br/>
                                                            </div>
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
                                               
                                                <div class="cb_diag_hm_cbc">
                                                    <input type="checkbox" name="cb_diag_hm_cbc" id="cb_diag_hm_cbc" style="width:50px;border:0px;border-bottom:1px solid black;"><label for="cb_diag_hm_cbc" class="normal">CBC with PC</label> <br>
                                                </div>
                                                <div class="cb_diag_hm_ph_bsmear">
                                                    <input type="checkbox" name="cb_diag_hm_ph_bsmear" id="cb_diag_hm_ph_bsmear" style="width:50px;border:0px;border-bottom:1px solid black;"><label for="cb_diag_hm_ph_bsmear" class="normal">Peripheral Blood Smear</label> <br>
                                                </div>
                                            
                                               <h5><b>CHEMISTRY</b></h5>

                                               <div class="cb_diag_chem_bun_prepost">
                                                   <input type="checkbox" name="cb_diag_chem_bun_prepost" id="cb_diag_chem_bun_prepost" style="width:50px;border:0px;border-bottom:1px solid black;">BUN (Pre and Post HD) 
                                               </div>
                                               <div class="cb_diag_chem_bun">
                                                   <input type="checkbox" name="cb_diag_chem_bun" id="cb_diag_chem_bun" style="width:50px;border:0px;border-bottom:1px solid black;">BUN
                                               </div>
                                               <div class="cb_diag_chem_creatinine">
                                                    <input type="checkbox" name="cb_diag_chem_creatinine" id="cb_diag_chem_creatinine" style="width:50px;border:0px;border-bottom:1px solid black;">Creatinine
                                               </div>
                                               <div class="cb_diag_chem_na">
                                                   <input type="checkbox" name="cb_diag_chem_na" id="cb_diag_chem_na" style="width:50px;border:0px;border-bottom:1px solid black;">Na
                                               </div>
                                               <div class="cb_diag_chem_k">
                                                   <input type="checkbox" name="cb_diag_chem_k" id="cb_diag_chem_k" style="width:50px;border:0px;border-bottom:1px solid black;">K
                                               </div>
                                               <div class="cb_diag_chem_fbs">
                                                   <input type="checkbox" name="cb_diag_chem_fbs" id="cb_diag_chem_fbs" style="width:50px;border:0px;border-bottom:1px solid black;">FBS
                                               </div>
                                               <div class="cb_diag_chem_ion_calc">
                                                    <input type="checkbox" name="cb_diag_chem_ion_calc" id="cb_diag_chem_ion_calc" style="width:50px;border:0px;border-bottom:1px solid black;">Ionized Calcium
                                               </div>
                                               <div class="cb_diag_chem_phosporus">
                                                   <input type="checkbox" name="cb_diag_chem_phosporus" id="cb_diag_chem_phosporus" style="width:50px;border:0px;border-bottom:1px solid black;">Phosphorus                                                   
                                               </div>
                                               <div class="cb_diag_chem_albumin">
                                                   <input type="checkbox" name="cb_diag_chem_albumin" id="cb_diag_chem_albumin" style="width:50px;border:0px;border-bottom:1px solid black;">Albumin
                                               </div>
                                               <div class="cb_diag_chem_uricacid">
                                                   <input type="checkbox" name="cb_diag_chem_uricacid" id="cb_diag_chem_uricacid" style="width:50px;border:0px;border-bottom:1px solid black;">Uric Acid
                                               </div>
                                               <div class="cb_diag_chem_lipidprofile">
                                                   <input type="checkbox" name="cb_diag_chem_lipidprofile" id="cb_diag_chem_lipidprofile" style="width:50px;border:0px;border-bottom:1px solid black;">Lipid Profile
                                               </div>
                                               <div class="cb_diag_chem_sgpt">  
                                                   <input type="checkbox" name="cb_diag_chem_sgpt" id="cb_diag_chem_sgpt" style="width:50px;border:0px;border-bottom:1px solid black;">SGPT
                                               </div>
                                               <div class="cb_diag_chem_specify">
                                                    <input type="checkbox" name="cb_diag_chem_specify" id="cb_diag_chem_specify" style="width:50px;border:0px;border-bottom:1px solid black;">Others, please specify <input type="text" name="txt_diag_chem_specify" id="txt_diag_chem_specify" style="width:100px;border:0px;border-bottom:1px solid black;">
                                               </div>
                                            </div>
                                            <div class="col-xs-8">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <h5><b>IMAGING STUDIES</b></h5>
                                                        <div class="medicine_table cb_diag_imag_12lecg">
                                                            <input type="checkbox" name="cb_diag_imag_12lecg" id="cb_diag_imag_12lecg" style="width:50px;border:0px;border-bottom:1px solid black;"><label for="cb_diag_imag_12lecg" class="normal med_title">12 L ECG</label>
                                                        </div>

                                                        <div class="medicine_table cb_diag_imag_cxrpa">
                                                            <input type="checkbox" name="cb_diag_imag_cxrpa" id="cb_diag_imag_cxrpa" style="width:50px;border:0px;border-bottom:1px solid black;">CXR PA
                                                        </div>
                                                        <div class="medicine_table cb_diag_imag_kubxray">
                                                            <input type="checkbox" name="cb_diag_imag_kubxray" id="cb_diag_imag_kubxray" style="width:50px;border:0px;border-bottom:1px solid black;">KUB XRAY
                                                        </div>
                                                        <div class="medicine_table cb_diag_imag_ctstronogram">
                                                            <input type="checkbox" name="cb_diag_imag_ctstronogram" id="cb_diag_imag_ctstronogram" style="width:50px;border:0px;border-bottom:1px solid black;">CT STONOGRAM
                                                        </div>
                                                        <div class="medicine_table cb_diag_imag_kubultrasound">
                                                            <input type="checkbox" name="cb_diag_imag_kubultrasound" id="cb_diag_imag_kubultrasound" style="width:50px;border:0px;border-bottom:1px solid black;">KUB Ultrasound
                                                        </div>
                                                        <div class="medicine_table cb_diag_imag_prosultra">
                                                            <input type="checkbox" name="cb_diag_imag_prosultra" id="cb_diag_imag_prosultra" style="width:50px;border:0px;border-bottom:1px solid black;">Prostate Ultrasound
                                                        </div>
                                                        <div class="medicine_table cb_diag_imag_abdomen">
                                                            <input type="checkbox" name="cb_diag_imag_abdomen" id="cb_diag_imag_abdomen" style="width:50px;border:0px;border-bottom:1px solid black;">Ultrasound of WAB
                                                        </div>
                                                        <div class="medicine_table cb_diag_imag_decho_plain">
                                                            <input type="checkbox" name="cb_diag_imag_decho_plain" id="cb_diag_imag_decho_plain" style="width:50px;border:0px;border-bottom:1px solid black;">2 Dechocardiography (Plain)
                                                        </div>
                                                        <div class="medicine_table cb_diag_imag_ct_angiography">
                                                            <input type="checkbox" name="cb_diag_imag_ct_angiography" id="cb_diag_imag_ct_angiography" style="width:50px;border:0px;border-bottom:1px solid black;">CT angiography
                                                        </div>
                                                        <div class="medicine_table cb_diag_imag_decho_doppler">
                                                            <input type="checkbox" name="cb_diag_imag_decho_doppler" id="cb_diag_imag_decho_doppler" style="width:50px;border:0px;border-bottom:1px solid black;">
                                                            <label for="cb_diag_imag_decho_doppler" class="normal med_title">
                                                                2 Dechocardiography (with doppler)
                                                            </label>
                                                        </div>
                                                        <div class="medicine_table cb_diag_imag_renal_duplex">
                                                            <input type="checkbox" name="cb_diag_imag_renal_duplex" id="cb_diag_imag_renal_duplex" style="width:50px;border:0px;border-bottom:1px solid black;">Renal Duplex Scan
                                                        </div>
                                                        <div class="medicine_table cb_diag_imag_others">
                                                            <input type="checkbox" name="cb_diag_imag_others" id="cb_diag_imag_others" style="width:50px;border:0px;border-bottom:1px solid black;">Others: <input type="text" style="width:160px;border:0px;border-bottom:1px solid black;" name="txt_diag_imag_others" id="txt_diag_imag_others">
                                                        </div>
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
                                            <input type="checkbox" name="cb_emer_refer_to" id="cb_emer_refer_to"> Refer to  <br/>
                                            <input type="checkbox" name="cb_emer_dr_1" id="cb_emer_dr_1"> Dr. Steven Charo <br />
                                            <input type="checkbox" name="cb_emer_dr_2" id="cb_emer_dr_2"> Dr. Arnel Ayro <br />
                                            <input type="checkbox" name="cb_emer_dr_3" id="cb_emer_dr_3"> Dr. Patrick Maglaya <br/>

                                            <input type="checkbox" name="cb_emer_dialysis" id="cb_emer_dialysis"> Emergency Dialysis Prescription <br />
                                            Bicarbonate Bath <br />
                                            Duration : <input type="text" class="txt_right" name="txt_emer_dialysis_hrs" id="txt_emer_dialysis_hrs"> Hours <br />
                                            Anticoagulant : <br />
                                            <input type="checkbox" name="cb_no_heparin" id="cb_no_heparin"> No Heparin <br />
                                            <input type="checkbox" name="cb_lmwh" id="cb_lmwh"> LMWH <input type="text" name="txt_lmwh_cc" id="txt_lmwh_cc" class="txt_right"> cc <br />
                                            <input type="checkbox" name="cb_unfractionated" id="cb_unfractionated"> Unfractionated Heparin Dose <br />
                                            <input type="checkbox" name="cb_standard_u_hr" id="cb_standard_u_hr"> Standard Dose : 2000 'U' then <input type="text" name="txt_standard_u_hr" id="txt_standard_u_hr" class="txt_right"> 'U'/hr <br />

                                            <input type="checkbox" name="cb_hepa_u_hr" id="cb_hepa_u_hr"> Tight Heparization : 1000 'U' then <input type="text" name="txt_hepa_u_hr" id="txt_hepa_u_hr" class="txt_right"> 'U'/hr<br />

                                            Dialyzer : Low Flux Dialyzer <br />
                                            <input type="checkbox" name="cb_f6_dialyzer" id="cb_f6_dialyzer"> F6 dialyzer<br />
                                            <input type="checkbox" name="cb_f7_dialyzer" id="cb_f7_dialyzer"> F7 dialyzer<br />
                                            <input type="checkbox" name="cb_f8_dialyzer" id="cb_f8_dialyzer"> F8 dialyzer<br />
                                            <input type="checkbox" name="cb_lops_15" id="cb_lops_15"> LOPS 15<br />
                                            <input type="checkbox" name="cb_lops_18" id="cb_lops_18"> LOPS 18<br />
                                            <input type="checkbox" name="cb_lops_20" id="cb_lops_20"> LOPS 20<br />
                                            <input type="checkbox" name="cb_others_dialyzer" id="cb_others_dialyzer"> Others <input type="text" name="txt_others_dialyzer" id="txt_others_dialyzer" class="txt_left" style="width: 300px;"><br/>

                                            Hiflux Dialyzer <br />
                                            <input type="checkbox" name="cb_h480s" id="cb_h480s"> HF80s <br />
                                            <input type="checkbox" name="cb_hf120s" id="cb_hf120s"> HF120s<br />
                                            <input type="checkbox" name="cb_h1ps18" id="cb_h1ps18"> HIPS 18<br />
                                            <input type="checkbox" name="cb_h1ps20" id="cb_h1ps20"> HIPS 20<br />

                                            <input type="checkbox" name="cb_refer_to_dr" id="cb_refer_to_dr"> Refer to 
                                            <input type="text" name="txt_refer_to_dr" id="txt_refer_to_dr" class="txt_right"> for evalutaion &amp; comanagement
                                            <br />

                                            <input type="checkbox" name="cb_others" id="cb_others"> Others <input type="text" name="txt_others" id="txt_others" class="txt_left" style="width: 300px;"><br/>
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
        var _selectedIDmedicalcert; var _selectedIDnephroclearance;
        var _selectedIDLabDiagnostic;
        var _selectedIDnephroorder;
        var _selectRowObjlab; var _selectedIDlab;
        var _selectRowObjbilling; var _selectedIDbilling;
        var _selectRowObjvisiting; var _selectedIDvisiting;
        var _txnMode1; var _txnMode2; var _txdelete; var _txnMode3;
        var _txnprescription;
        var _nephrotxn; var _patient_nephro_id; var _selectedDryWeight;
        var d = new Date();
        var today = (d.getMonth()+1) + "/" + d.getDate() + "/" + d.getFullYear();
        var checkbox_report;

        var getCheckboxReport=function(){
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"StampSettings/transaction/list"
            });
        }; 

        var initializeControls=function(){
        dt=$('#tbl_ref_patient').DataTable({
            "responsive": true,
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

        getCheckboxReport().done(function(response){
            checkbox_report = response.data.checkbox_report;
        });

        $('.numeric').autoNumeric('init');

        patient_prescription_dt=$('#tbl_patient_prescription').DataTable({            
            "dom": '<"toolbar">frtip',
            "bLengthChange":false,
            "pageLength":15,
            "order": [[ 5, "desc" ]],         
            oLanguage: {
                    sProcessing: '<center><br /><img src="assets/img/loader/ajax-loader-sm.gif" /><br /><br /></center>'
            },
            processing : true,               
            "ajax": {
                "url": "Patient_prescription/transaction/list",
                "bDestroy": true,  
                "type": "POST",
                "data": function ( d ) {
                    return $.extend( {}, d, {
                        "ref_patient_id": _selectedID //id of the user
                        } );
                    }
            },         
            "columns": [
                {
                    "targets": [0],
                    "class":          "details-control",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },
                {
                    "targets": [1],
                    "class":          "details-control-print",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },                    
                { targets:[2],data: "prescription_code" },
                { targets:[3],data: "date_prescribed" },
                {
                    targets:[4],
                    render: function (data, type, full, meta){

                        var view_prescription = '<button class="btn btn-default btn-xs" name="view_prescription_details" data-toggle="tooltip" data-placement="left" title="View Details" style="margin-left: 5px;"><i class="fa fa-eye"></i> </button>';

                        return '<center>'+view_prescription+edit_prescription+delete_prescription+'</center>';
                    }
                },
                { visible:false, targets:[5],data: "patient_prescription_id" }
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

        patient_lab_dt=$('#tbl_lab').DataTable({
            "dom": '<"toolbar">frtip',
            "bLengthChange":false,
            "pageLength":15,
            "order": [[ 3, "desc" ]],         
            oLanguage: {
                    sProcessing: '<center><br /><img src="assets/img/loader/ajax-loader-sm.gif" /><br /><br /></center>'
            },
            processing : true,  
            "ajax": {
                "url": "Patient_laboratory/transaction/list",
                "bDestroy": true,  
                "type": "POST",
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

        patient_billing_dt=$('#tbl_billing').DataTable({
            "dom": '<"toolbar">frtip',
            "bLengthChange":false,
            "pageLength":15,
            "order": [[ 5, "desc" ]],         
            oLanguage: {
                    sProcessing: '<center><br /><img src="assets/img/loader/ajax-loader-sm.gif" /><br /><br /></center>'
            },
            processing : true,       
            "ajax": {
                "url": "Patient_billing/transaction/list",
                "bDestroy": true,  
                "type": "POST",
                "data": function ( d ) {
                    return $.extend( {}, d, {
                        "ref_patient_id": _selectedID //id of the user
                        } );
                    }
            },
            "columns": [
                {
                    "targets": [0],
                    "class":          "details-control",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },
                {
                    "targets": [1],
                    "class":          "details-control-print",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },             
                { targets:[2],data: "billing_code" },
                { targets:[3],data: "billing_date" },
                {
                    targets:[4],
                    render: function (data, type, full, meta){
                        var view_billing_details='<button class="btn btn-default btn-xs" name="view_billing_details"   data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';
                        
                        return '<center>'+view_billing_details+edit_billing+remove_billing+'</center>';
                    }
                },
                { visible:false, targets:[5],data: "patient_billing_id" }
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

        patient_visiting_record_dt=$('#tbl_visiting_record').DataTable({
            "dom": '<"toolbar">frtip',
            "bLengthChange":false,
            "pageLength":15,
            "order": [[ 6, "desc" ]],         
            oLanguage: {
                    sProcessing: '<center><br /><img src="assets/img/loader/ajax-loader-sm.gif" /><br /><br /></center>'
            },
            processing : true,      
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
                {
                    "targets": [0],
                    "class":          "details-control",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },
                {
                    "targets": [1],
                    "class":          "details-control-print",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },                
                { targets:[2],data: "visiting_date" },
                { targets:[3],data: "visiting_note" },
                { targets:[4],data: "visiting_diagnostics" },
                {
                    targets:[5],
                    render: function (data, type, full, meta){
                        var view_visiting_details='<button class="btn btn-default btn-xs" name="view_visiting_details_record"   data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';
                        
                        return '<center>'+view_visiting_details+edit_visiting+remove_visiting+'</center>';
                    }
                },
                { visible:false, targets:[6],data: "patient_visiting_record_id" }
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

        patient_clinical_dt=$('#tbl_clinical').DataTable({
            "dom": '<"toolbar">frtip',
            "bLengthChange":false,
            "pageLength":15,
            "order": [[ 8, "desc" ]],         
            oLanguage: {
                    sProcessing: '<center><br /><img src="assets/img/loader/ajax-loader-sm.gif" /><br /><br /></center>'
            },
            processing : true,          
            "ajax": {
                "url": "Patient_clinical/transaction/list",
                "bDestroy": true,
                "type": "POST",
                "data": function ( d ) {
                    return $.extend( {}, d, {
                        "ref_patient_id": _selectedID //id of the user
                        } );
                    }
            },
            "columns": [
                {
                    "targets": [0],
                    "class":          "details-control",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },
                {
                    "targets": [1],
                    "class":          "details-control-print",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },                  
                { targets:[2],data: "date_created" },
                { targets:[3],data: "clinical_diagnostics" },
                { targets:[4],data: "clinical_treatment" },
                { targets:[5],data: "clinical_medication" },
                { targets:[6],data: "clinical_remarks" },
                {
                    targets:[7],
                    render: function (data, type, full, meta){
                        var view_clinical_details='<button class="btn btn-default btn-xs" name="view_clinical_details"   data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';
                        
                        return '<center>'+view_clinical_details+edit_clinical+remove_clinical+'</center>';
                    }
                },
                { visible:false, targets:[8],data: "patient_clinical_id" }
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

        patient_medical_abstract_dt=$('#tbl_patient_medical_abstract').DataTable({
            "dom": '<"toolbar">frtip',
            "bLengthChange":false,
            "pageLength":15,
            "order": [[ 3, "desc" ]],         
            oLanguage: {
                    sProcessing: '<center><br /><img src="assets/img/loader/ajax-loader-sm.gif" /><br /><br /></center>'
            },
            processing : true,  
            "ajax": {
            "url": "Patient_medical_abstract/transaction/medical_abstract_list",
            "type": "POST",
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "ref_patient_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "medical_abstract_code" },
                { targets:[1],data: "medical_abstract_date" },
                {
                    targets:[2],
                    render: function (data, type, full, meta){
                         var view_medical_abstract_details='<button class="btn btn-default btn-xs" name="view_medical_abstract_details" data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';

                        return '<center>'+view_medical_abstract_details+edit_medical_abstract+delete_medical_abstract+'</center>';
                    }
                },
                { visible:false, targets:[3],data: "patient_medical_abstract_id" }
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

        patient_nephro_order_dt=$('#tbl_patient_nephro_order').DataTable({
            "dom": '<"toolbar">frtip',
            "bLengthChange":false,
            "pageLength":15,
            "order": [[ 3, "desc" ]],         
            oLanguage: {
                    sProcessing: '<center><br /><img src="assets/img/loader/ajax-loader-sm.gif" /><br /><br /></center>'
            },
            processing : true, 
            "ajax": {
            "url": "Patient_nephro_order/transaction/list",
            "type": "POST",
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "ref_patient_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "nephro_order_code" },
                { targets:[1],data: "nephro_order_date" },
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

        patient_lab_report_dt=$('#tbl_patient_lab_report').DataTable({
            "dom": '<"toolbar">frtip',
            "bLengthChange":false,
            "pageLength":15,
            "order": [[ 3, "desc" ]],         
            oLanguage: {
                    sProcessing: '<center><br /><img src="assets/img/loader/ajax-loader-sm.gif" /><br /><br /></center>'
            },
            processing : true, 
            "ajax": {
            "url": "Patient_lab_diagnostics/transaction/list",
            "type": "POST",
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

        patient_medical_certificate_dt=$('#tbl_med_cert_report').DataTable({
            "dom": '<"toolbar">frtip',
            "bLengthChange":false,
            "pageLength":15,
            "order": [[ 5, "desc" ]],         
            oLanguage: {
                    sProcessing: '<center><br /><img src="assets/img/loader/ajax-loader-sm.gif" /><br /><br /></center>'
            },
            processing : true, 
            "ajax": {
                "url": "Patient_medical_record/transaction/list",
                "bDestroy": true,
                "type": "POST",
                "data": function ( d ) {
                    return $.extend( {}, d, {
                        "ref_patient_id": _selectedID //id of the user
                        } );
                    }
                },
            "columns": [
                {
                    "targets": [0],
                    "class":          "details-control",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },
                {
                    "targets": [1],
                    "class":          "details-control-print",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },               
                { targets:[2],data: "medical_certificate_code" },
                { targets:[3],data: "medical_date" },
                {
                    targets:[4],
                    render: function (data, type, full, meta){
                         var view_med_cert='<button class="btn btn-default btn-xs" name="view_med_cert" data-toggle="tooltip" data-placement="left" title="View Details"><i class="fa fa-eye"></i> </button>';

                        return '<center>'+view_med_cert+edit_med_cert+remove_med_cert+'</center>';
                    }
                },
                { visible:false, targets:[5],data: "patient_medical_certificate_id" }
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

        patient_nephro_clearance_dt=$('#tbl_nephro_clearance').DataTable({
            "dom": '<"toolbar">frtip',
            "bLengthChange":false,
            "pageLength":15,
            "order": [[ 4, "desc" ]],         
            oLanguage: {
                    sProcessing: '<center><br /><img src="assets/img/loader/ajax-loader-sm.gif" /><br /><br /></center>'
            },
            processing : true, 
            "ajax": {
                "url": "Patient_nephrology_clearance/transaction/list",
                "bDestroy": true,
                "type": "POST",
                "data": function ( d ) {
                    return $.extend( {}, d, {
                        "ref_patient_id": _selectedID //id of the user
                        } );
                    }
                },
            "columns": [
                {
                    "targets": [0],
                    "class":          "details-control-print",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },               
                { targets:[1],data: "nephro_clearance_code" },
                { targets:[2],data: "nephro_clearance_date" },
                {
                    targets:[3],
                    render: function (data, type, full, meta){
                         var view_nephro_clearance='<button class="btn btn-default btn-xs" name="view_nephro_clearance" data-toggle="tooltip" data-placement="left" title="View Details"><i class="fa fa-eye"></i> </button>';

                        return '<center>'+view_nephro_clearance+btn_edit_nephro_clearance+btn_remove_nephro_clearance+'</center>';
                    }
                },
                { visible:false, targets:[4],data: "nephro_clearance_id" }
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


        dt_patient_nephro_record=$('#tbl_nephro_record').DataTable({
            "dom": '<"toolbar">frtip',
            "bLengthChange":false,
            "pageLength":15,
            "order": [[ 4, "desc" ]],         
            oLanguage: {
                    sProcessing: '<center><br /><img src="assets/img/loader/ajax-loader-sm.gif" /><br /><br /></center>'
            },
            processing : true, 
            "ajax": {
            "url": "Patient_Info/transaction/list",
            "type": "POST",
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

        patient_referral_dt=$('#tbl_patient_referral').DataTable({
            "dom": '<"toolbar">frtip',
            "bLengthChange":false,
            "pageLength":15,
            "order": [[ 5, "desc" ]],         
            oLanguage: {
                    sProcessing: '<center><br /><img src="assets/img/loader/ajax-loader-sm.gif" /><br /><br /></center>'
            },
            processing : true,  
            "ajax": {
                "url": "Patient_referral/transaction/list",
                "bDestroy": true,
                "type": "POST",
                "data": function ( d ) {
                    return $.extend( {}, d, {
                        "ref_patient_id": _selectedID //id of the user
                        } );
                    }
            },
            "columns": [
                {
                    "targets": [0],
                    "class":          "details-control",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },
                {
                    "targets": [1],
                    "class":          "details-control-print",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },             
                { targets:[2],data: "referral_code" },
                { targets:[3],data: "referral_date" },
                {
                    targets:[4],
                    render: function (data, type, full, meta){
                         var view_referral='<button class="btn btn-default btn-xs" name="view_referral" data-toggle="tooltip" data-placement="left" title="View Details" ><i class="fa fa-eye"></i> </button>';

                        return '<center>'+view_referral+edit_referral+remove_referral+'</center>';
                    }
                },
                { visible:false, targets:[5],data: "patient_referral_id" }
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

        patient_admitting_order_dt=$('#tbl_patient_admitting_order').DataTable({
            "dom": '<"toolbar">frtip',
            "bLengthChange":false,
            "pageLength":15,
            "order": [[ 3, "desc" ]],         
            oLanguage: {
                    sProcessing: '<center><br /><img src="assets/img/loader/ajax-loader-sm.gif" /><br /><br /></center>'
            },
            processing : true,
            "ajax": {
            "url": "Patient_admitting_order/transaction/list",
            "type": "POST",
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
        showList('patient_field',false,'Patient General Information','fa-users');
    });

    $('#btn_cancel_refpatient, .close_patient_field').click(function(){
        showList('patient_list',true,'Patient General Information','fa-users');
    }); 

    $('.close_list').click(function(){
        // var tbl = $(this).data("id");
        $('.top-icon').removeClass('active');
        showList('patient_list',true,'Patient General Information','fa-users');
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
                        showList('patient_list',true,'Patient General Information','fa-users');
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
                        showList('patient_list',true,'Patient General Information','fa-users');
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
        showList('patient_field',false,'Patient General Information','fa-users');
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

    var showList=function(list,icon,header,module_icon){
        $('.table-list').hide();
        $('.table-field').hide();
        if(icon){
            $('.top-icon').show();
        }else{
            $('.top-icon').hide();
        }
        $('.module-icon').html('<span class="fa '+module_icon+'"></span>');
        $('.module-title').html(header);
        $('#div_'+list).show();     
    };

    $('.top-icon').click(function(){
        $('.top-icon').removeClass('active');
        $(this).addClass('active');
    });

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
                
            $('.header-text-title').html(_selectedname);

            showSpinningProgressLOADING();
            setTimeout(function() {
                patient_prescription_dt.ajax.reload($.unblockUI());
            }, 200);

            showList('prescription_list',true,'Prescriptions','fa-user-md');
        }
        else{
            notice_notif();
        }
        
    });

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
                    swal("Success!", "Nephro Record Succesfully Created", "success");
                }
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
                    swal("Success!", "Nephro Record Succesfully Updated", "success");
                }
              }
            });
            
        }
    });

    $('#tbl_patient_prescription tbody').on( 'click', 'tr td.details-control-print', function () {
        var detailRows = [];
        var tr = $(this).closest('tr');
        var row = patient_prescription_dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );                
            var d=row.data();
            window.open("Templates/transaction/prescription-details/"+ d.patient_prescription_id+"?type=pdf");
    });

    $('#tbl_patient_prescription tbody').on( 'click', 'tr td.details-control', function () {
        var detailRows = [];
        var tr = $(this).closest('tr');
        var row = patient_prescription_dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );

        if ( row.child.isShown() ) {
            tr.removeClass( 'details' );
            row.child.hide();

            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
            tr.addClass( 'details' );
            var d=row.data();

            $.ajax({
                "dataType":"html",
                "type":"POST",
                "url":"Templates/transaction/prescription-details/"+ d.patient_prescription_id+"?type=fullview",
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
            "data":{patient_prescription_id: _selectedIDprescription}
        });
    };


    var removeMedicalAbstract=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_medical_abstract/transaction/delete",
            "data":{patient_medical_abstract_id: _selectedIDmedicalabstract}
        });
    };     

    var removeAdmittingOrder=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_admitting_order/transaction/delete",
            "data":{patient_admitting_order_id: _selectedIDadmittingorder}
        });
    };             

    var removeNephroOrder=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_nephro_order/transaction/delete",
            "data":{patient_nephro_id: _selectedIDnephroorder}
        });
    };  

    var removeLaboratoryReport=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_lab_diagnostics/transaction/delete",
            "data":{patient_lab_report_id: _selectedIDLabDiagnostic}
        });
    };        

    var removeMedicalCertificate=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_medical_record/transaction/delete",
            "data":{patient_medical_certificate_id: _selectedIDmedicalcert}
        });
    };        

    var removeNephroClearance=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Patient_nephrology_clearance/transaction/delete",
            "data":{nephro_clearance_id: _selectedIDnephroclearance}
        });
    };        

    var Getprescription_items=function(){
        var _data=$('#').serializeArray();
            _data.push({name : "patient_prescription_id" ,value : _selectedIDprescription});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_prescription/transaction/getitems",
                "data":_data
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
            $('.header-text-title').html(_selectedname);
            showSpinningProgressLOADING()
            setTimeout(function() {
                patient_lab_dt.ajax.reload($.unblockUI());
            }, 200);

            showList('laboratory_report_list',true,'Laboratory Report','fa-stethoscope');
        }
        else{
            notice_notif();
        }
        
    });

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

    $('.patient_billing').click(function(){
        if(_isChecked==true){
            $('.header-text-title').html(_selectedname);
            showSpinningProgressLOADING();
            setTimeout(function() {
                patient_billing_dt.ajax.reload($.unblockUI());
            }, 200);
            showList('billing_list',true,'Patient Billing','fa-money');
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

    $('#tbl_billing tbody').on( 'click', 'tr td.details-control-print', function () {
        var detailRows = [];
        var tr = $(this).closest('tr');
        var row = patient_billing_dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );                
            var d=row.data();
            window.open("Templates/transaction/billing-details/"+ d.patient_billing_id+"?type=pdf");
    });

    $('#tbl_billing tbody').on( 'click', 'tr td.details-control', function () {
        var detailRows = [];
        var tr = $(this).closest('tr');
        var row = patient_billing_dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );

        if ( row.child.isShown() ) {
            tr.removeClass( 'details' );
            row.child.hide();

            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
            tr.addClass( 'details' );
            var d=row.data();

            $.ajax({
                "dataType":"html",
                "type":"POST",
                "url":"Templates/transaction/billing-details/"+ d.patient_billing_id+"?type=fullview",
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
                    if(validateRequiredFields($('#frm_patient_billing'))){
                        createPatient_billing().done(function(response){
                        if(response.stat=="success"){
                            $('#tbl_billing').DataTable().ajax.reload();
                            }
                            }).always(function(){
                            $.unblockUI();
                            $('#modal_new_billing').modal('toggle');
                        });
                        swal("Success!", "Billing Info Succesfully Created", "success");
                    }
                  } 
                  else {
                    if(validateRequiredFields($('#frm_patient_billing'))){
                        updatePatient_billing().done(function(response){
                        if(response.stat=="success"){
                            $('#tbl_billing').DataTable().ajax.reload();
                            }
                            }).always(function(){
                            $.unblockUI();
                            $('#modal_new_billing').modal('toggle');
                        });    
                        swal("Success!", "Billing Info Succesfully Updated", "success");                    
                    }
                  }
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
    $('.patient_visiting_record').click(function(){
        if(_isChecked==true){
            showSpinningProgressLOADING();
            $('.header-text-title').html(_selectedname);

            setTimeout(function() {
                patient_visiting_record_dt.ajax.reload($.unblockUI());
            }, 200);

            showList('visiting_record_list',true,'Patient Visiting Record','fa-file-text-o');
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
                    if(validateRequiredFields($('#frm_patient_visiting_record'))){
                        createPatientVisitingRecord().done(function(response){
                            showNotification(response);
                            if(response.stat=="success"){
                                $('#tbl_visiting_record').DataTable().ajax.reload();
                            }
                                }).always(function(){
                                $.unblockUI();
                                $('#modal_new_visit').modal('toggle');
                        });
                        swal("Success!", "Visiting Record Succesfully Created", "success");
                    }
                  } 
                  else {
                    if(validateRequiredFields($('#frm_patient_visiting_record'))){
                        updatePatientVisitingRecord().done(function(response){
                        showNotification(response);
                        if(response.stat=="success"){
                            $('#tbl_visiting_record').DataTable().ajax.reload();
                            }
                            }).always(function(){
                            $.unblockUI();
                            $('#modal_new_visit').modal('toggle');
                        });
                        swal("Success!", "Visiting Record Succesfully Updated", "success");
                    }
                  }
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

    $('#tbl_visiting_record tbody').on( 'click', 'tr td.details-control-print', function () {
        var detailRows = [];
        var tr = $(this).closest('tr');
        var row = patient_visiting_record_dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );                
            var d=row.data();
            window.open("Templates/transaction/visiting-details/"+ d.patient_visiting_record_id+"?type=pdf");
    });

    $('#tbl_visiting_record tbody').on( 'click', 'tr td.details-control', function () {
        var detailRows = [];
        var tr = $(this).closest('tr');
        var row = patient_visiting_record_dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );

        if ( row.child.isShown() ) {
            tr.removeClass( 'details' );
            row.child.hide();

            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
            tr.addClass( 'details' );
            var d=row.data();

            $.ajax({
                "dataType":"html",
                "type":"POST",
                "url":"Templates/transaction/visiting-details/"+ d.patient_visiting_record_id+"?type=fullview",
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

    var _txnMode4; var _selectedIDclinical; var _selectRowObjclinical;

    $('.patient_clinical').click(function(){
        if(_isChecked==true){
            showSpinningProgressLOADING();
            $('.header-text-title').html(_selectedname);

            setTimeout(function() {
                patient_clinical_dt.ajax.reload($.unblockUI());
            }, 200);

            showList('clinical_database_list',true,'Clinical Database','fa-medkit');
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
                    if(validateRequiredFields($('#frm_clinical_db'))){
                        createClinical().done(function(response){
                        showNotification(response);
                        if(response.stat=="success"){
                            $('#tbl_clinical').DataTable().ajax.reload();
                        }
                            }).always(function(){
                            $.unblockUI();
                            $('#modal_new_clinical').modal('toggle');
                        });
                        swal("Success!", "Clinical Database Succesfully Created", "success");
                    }
                  } 
                  else {
                    if(validateRequiredFields($('#frm_clinical_db'))){
                        updateClinical().done(function(response){
                        showNotification(response);
                        if(response.stat=="success"){
                            $('#tbl_clinical').DataTable().ajax.reload();
                            }
                            }).always(function(){
                            $.unblockUI();
                            $('#modal_new_clinical').modal('toggle');
                        });
                        swal("Success!", "Clinical Database Succesfully Updated", "success");
                    }
                  }
                });
            }
        }
    });

    $('#tbl_clinical tbody').on( 'click', 'tr td.details-control-print', function () {
        var detailRows = [];
        var tr = $(this).closest('tr');
        var row = patient_clinical_dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );                
            var d=row.data();
            window.open("Templates/transaction/clinical-details/"+ d.patient_clinical_id+"?type=pdf");
    });

    $('#tbl_clinical tbody').on( 'click', 'tr td.details-control', function () {
        var detailRows = [];
        var tr = $(this).closest('tr');
        var row = patient_clinical_dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );

        if ( row.child.isShown() ) {
            tr.removeClass( 'details' );
            row.child.hide();

            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
            tr.addClass( 'details' );
            var d=row.data();

            $.ajax({
                "dataType":"html",
                "type":"POST",
                "url":"Templates/transaction/clinical-details/"+ d.patient_clinical_id+"?type=fullview",
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
            showSpinningProgressLOADING();
            $('.header-text-title').html(_selectedname);
            setTimeout(function() {
                patient_medical_abstract_dt.ajax.reload($.unblockUI());
            }, 200);
            showList('medical_abstract_list',true,'Medical Abstract','fa-stethoscope');
        }
        else{
            notice_notif();
        }
        
    }); 

    $('#new_medical_abstract').click(function(){
        _txnmedicalabstract="new";
        checkHeader(_txnmedicalabstract);
        $('.patient_txn').text('New');
        clearFields($('#frm_medical_abstract'));

        $('#frm_medical_abstract').find('.hidden').removeClass('hidden');

        $('#medical_abstract_date').val(today);

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

        $('#frm_medical_abstract').find('.hidden').removeClass('hidden');

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

                        if(checkbox_report==1){
                            if(value== "" || value==null){
                                $('.'+name).addClass('hidden');
                            }else{
                                $('.'+name).removeClass('hidden');
                            }
                        }
                    }

                    if(_elem.attr('id')==name){

                        if(checkbox_report==1){
                            if(value!=1){
                                $('.'+name).addClass('hidden');
                            }else{
                                $('.'+name).removeClass('hidden');
                            }
                        }

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
                    if(validateRequiredFields($('#frm_medical_abstract'))){
                        Savemedicalabstract().done(function(response){
                            showNotification(response);
                            if(response.stat=="success"){
                                $('#tbl_patient_medical_abstract').DataTable().ajax.reload();
                            }
                        }).always(function(){
                            $.unblockUI();
                            $('#modal_medical_abstract').modal('toggle');
                        });
                        swal("Success!", "Medical Abstract Succesfully Created", "success");
                    }
                  } 
                  else {
                    if(validateRequiredFields($('#frm_medical_abstract'))){
                        Updatemedicalabstract().done(function(response){
                            showNotification(response);
                            if(response.stat=="success"){
                                $('#tbl_patient_medical_abstract').DataTable().ajax.reload();
                            }
                        }).always(function(){
                            $.unblockUI();
                            $('#modal_medical_abstract').modal('toggle');
                        });
                        swal("Success!", "Medical Abstract Succesfully Updated", "success");
                    }
                  }
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
            showSpinningProgressLOADING();
            $('.header-text-title').html(_selectedname);

            setTimeout(function() {
                patient_nephro_order_dt.ajax.reload($.unblockUI());
            }, 200);

            showList('nephro_order_list',true,"Nephrologist's Order",'fa-heart');
        }
        else{
            notice_notif();
        }
        
    });

    $('#new_nephro_order').click(function(){
        _txnnephroorder="new";
        checkHeader(_txnnephroorder);
        $('.patient_txn').text('New');
        clearFields($('#frm_nephro_order'));

        $('#frm_nephro_order').find('.hidden').removeClass('hidden');

        $( "#frm_nephro_order" ).find('input[type="checkbox"]').each(function() {
            $(this).prop('checked', false); // Unchecks it
        });

        $('#nephro_order_date').val(today);
        $('.inputareadryweight').val(_selectedDryWeight);

        $('#nephro_order_icon').removeClass();
        $('#nephro_order_icon').addClass('fa fa-plus-circle');

        $("#frm_nephro_order input:text").prop('disabled',false); 

        $('#save_nephro').show();
        $('#ftr_nephro_order').hide();

        $('#modal_patient_nephro_order').modal('toggle');
    });    

    $('#tbl_patient_nephro_order tbody').on('click','button[name="edit_nephro_order"]',function(){
        _txnnephroorder="edit";
        checkHeader(_txnnephroorder);
        $('.patient_txn').text('Edit');
        clearFields($('#frm_nephro_order'));

        $('#frm_nephro_order').find('.hidden').removeClass('hidden');

        $('#nephro_order_icon').removeClass();
        $('#nephro_order_icon').addClass('fa fa-edit');
        
        $("#frm_nephro_order input:text").prop('disabled',false); 

        $('#save_nephro').show();
        $('#ftr_nephro_order').hide();

        _selectRowObjNephroOrder =$(this).closest('tr');
        var datanephroorder=patient_nephro_order_dt.row(_selectRowObjNephroOrder).data();
        _selectedIDnephroorder=datanephroorder.patient_nephro_id;

        $('input[type="text"],textarea').each(function(){
                var _elem=$(this);
                $.each(datanephroorder,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        }); 

        $('input[type="checkbox"]').each(function(){
                var _elem_checkbox=$(this);
                $.each(datanephroorder,function(name,value){
                    if(_elem_checkbox.attr('name')==name){
                        if(value >= 1){
                            _elem_checkbox.prop('checked', true); // checks it
                        }else{
                            _elem_checkbox.prop('checked', false); // Unchecks it
                        }
                    }
                });
        });         

        $('#modal_patient_nephro_order').modal('toggle');
    });    

    $('#tbl_patient_nephro_order tbody').on('click','button[name="view_nephro_order"]',function(){
        _selectRowObjNephroOrder =$(this).closest('tr');
        var datanephroorder=patient_nephro_order_dt.row(_selectRowObjNephroOrder).data();
        _selectedIDnephroorder=datanephroorder.patient_nephro_id;

        $.ajax({
            "dataType":"html",
            "type":"POST",
            "url":"Templates/transaction/nephro-order/"+_selectedIDnephroorder
        }).done(function(response){
            $('#patient_nephro_order_response').html('');
            $('#patient_nephro_order_response').html(response);
            $('#modal_patient_nephro_order_view').modal('toggle');
        });
        
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
                    if(validateRequiredFields($('#frm_nephro_order'))){
                        Savenephro().done(function(response){
                            showNotification(response);
                            if(response.stat=="success"){
                                $('#tbl_patient_nephro_order').DataTable().ajax.reload();
                            }
                        }).always(function(){
                            $.unblockUI();
                            $('#modal_patient_nephro_order').modal('toggle');
                        });
                        swal("Success!", "Nephro Order Succesfully Created", "success");
                    }
                  } 
                  else {
                    if(validateRequiredFields($('#frm_nephro_order'))){
                        Updatenephro().done(function(response){
                            showNotification(response);
                            if(response.stat=="success"){
                                $('#tbl_patient_nephro_order').DataTable().ajax.reload();
                            }
                        }).always(function(){
                            $.unblockUI();
                            $('#modal_patient_nephro_order').modal('toggle');
                        });
                        swal("Success!", "Nephro Order Succesfully Updated", "success");
                    }
                  }
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

            $( "#frm_nephro_order" ).find('input[type="checkbox"]').each(function() {
                _data.push({name : $(this).attr('name') ,value : $(this).is(':checked') ? 1 : 0 });
            });

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

            $( "#frm_nephro_order" ).find('input[type="checkbox"]').each(function() {
                _data.push({name : $(this).attr('name') ,value : $(this).is(':checked') ? 1 : 0 });
            });

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
        $("#patient_nephro_order_response").printThis({
            debug: false,         
            importCSS: true,       
            importStyle: true,       
            printContainer: true,
            loadCSS: output,
            formValues:true,
            canvas: false 
        });
        // window.open("Templates/transaction/nephro-order/"+ _selectedIDnephroorder+"?type=pdf");    
    });

    //end nephro order

    //laboratory report

    var _patient_lab_report_id;
    var _txnlabreport;

    $('.patient_laboratory_report').click(function(){
        if(_isChecked==true){
            showSpinningProgressLOADING();
            $('.header-text-title').html(_selectedname);

            setTimeout(function() {
                patient_lab_report_dt.ajax.reload($.unblockUI());
            }, 200);

            showList('patient_lab_report_list',true,'Laboratory Request','fa-commenting-o');
        }
        else{
            notice_notif();
        }
        
    });

    $('#new_diagnostic').click(function(){
        _txnlabreport="new";
        checkHeader(_txnlabreport);
        $('.patient_txn').text('New');
        clearFields($('#frm_lab_diagnostic'));

        $('#frm_lab_diagnostic').find('.hidden').removeClass('hidden');

        $('#diagnostic_icon').removeClass();
        $('#diagnostic_icon').addClass('fa fa-plus-circle');

        $('#lab_report_date').val(today);

        $('#save_labreport_diagnostics').show();
        $('#ftr_lab_report').hide();

        $("#frm_lab_diagnostic input:checkbox").prop('checked',false);
        $("#frm_lab_diagnostic input:text").prop('disabled',false); 

        $("#frm_lab_diagnostic label").removeClass('label-disable');

        $("#frm_lab_diagnostic input:checkbox").css('pointer-events','all'); 
        $("#frm_lab_diagnostic input:text").css('pointer-events','all'); 

        $('#modal_laboratory_report').modal('toggle');
    });   

    $('#tbl_patient_lab_report tbody').on('click','button[name="edit_diagnostic"]',function(){
        _txnlabreport="edit";
        checkHeader(_txnlabreport);
        $('.patient_txn').text('Edit');
        clearFields($('#frm_lab_diagnostic'));

        $('#frm_lab_diagnostic').find('.hidden').removeClass('hidden');

        $('#diagnostic_icon').removeClass();
        $('#diagnostic_icon').addClass('fa fa-edit');

        $("#frm_lab_diagnostic input:checkbox").prop('checked',false);
        $("#frm_lab_diagnostic input:text").prop('disabled',false);

        $("#frm_lab_diagnostic label").removeClass('label-disable');

        $("#frm_lab_diagnostic input:checkbox").css('pointer-events','all'); 
        $("#frm_lab_diagnostic input:text").css('pointer-events','all'); 

        $('#save_labreport_diagnostics').show();
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
        _selectRowObjLabDiagnostic =$(this).closest('tr');
        var datalabdiagnostic=patient_lab_report_dt.row(_selectRowObjLabDiagnostic).data();
        _selectedIDLabDiagnostic=datalabdiagnostic.patient_lab_report_id;

        $.ajax({
            "dataType":"html",
            "type":"POST",
            "url":"Templates/transaction/laboratory-request/"+_selectedIDLabDiagnostic
        }).done(function(response){
            $('#patient_laboratory_request_response').html('');
            $('#patient_laboratory_request_response').html(response);
            $('#modal_laboratory_report_view').modal('toggle');
        });
        
    });

    // $('#tbl_patient_lab_report tbody').on('click','button[name="view_diagnostic"]',function(){
    //     _txnlabreport="view";
    //     checkHeader(_txnlabreport);
    //     $('.patient_txn').text('View');
    //     clearFields($('#frm_lab_diagnostic'));

    //     $('#diagnostic_icon').removeClass();
    //     $('#diagnostic_icon').addClass('fa fa-print');

    //     $("#frm_lab_diagnostic input:checkbox").prop('checked',false);
    //     $("#frm_lab_diagnostic input:text").prop('disabled',true);

    //     $("#frm_lab_diagnostic label").addClass('label-disable');

    //     $("#frm_lab_diagnostic input:checkbox").css('pointer-events','none'); 
    //     $("#frm_lab_diagnostic input:text").css('pointer-events','none'); 

    //     $('#save_labreport_diagnostics').hide();
    //     $('#print_labreport_diagnostics').show();
    //     $('#ftr_lab_report').show();

    //     _selectRowObjLabDiagnostic =$(this).closest('tr');
    //     var datalabdiagnostic=patient_lab_report_dt.row(_selectRowObjLabDiagnostic).data();
    //     _selectedIDLabDiagnostic=datalabdiagnostic.patient_lab_report_id;

    //     $('input,textarea').each(function(){
    //             var _elem=$(this);
    //             $.each(datalabdiagnostic,function(name,value){

    //                 if(_elem.attr('name')==name){
    //                     if(checkbox_report==1){
    //                         if(value=="" || value==null){
    //                             $('.'+name).addClass('hidden');
    //                         }else{
    //                             $('.'+name).removeClass('hidden');
    //                         }
    //                     }
    //                     _elem.val(value);
    //                 }

    //                 if(_elem.attr('id')==name){
                        
    //                     if(checkbox_report==1){
    //                         if(value!=1){
    //                             $('.'+name).addClass('hidden');
    //                         }else{
    //                             $('.'+name).removeClass('hidden');
    //                         }
    //                     }

    //                     if(value==1){ _elem.prop('checked', true); }
    //                     else{ _elem.prop('checked', false); }
    //                 }

    //             });
    //     }); 
    //     $('#modal_laboratory_report').modal('toggle');
    // });

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
                    if(validateRequiredFields($('#frm_lab_diagnostic'))){
                        Savelabdiagnostics().done(function(response){
                            showNotification(response);
                            if(response.stat=="success"){
                                $('#tbl_patient_lab_report').DataTable().ajax.reload();
                            }
                        }).always(function(){
                            $.unblockUI();
                            $('#modal_laboratory_report').modal('toggle');
                        });
                        swal("Success!", "Laboratory Request Succesfully Created", "success");
                    }
                  } 
                  else {
                    if(validateRequiredFields($('#frm_lab_diagnostic'))){
                        Updatelabdiagnostics().done(function(response){
                            showNotification(response);
                            if(response.stat=="success"){
                                $('#tbl_patient_lab_report').DataTable().ajax.reload();
                            }
                        }).always(function(){
                            $.unblockUI();
                            $('#modal_laboratory_report').modal('toggle');
                        });
                        swal("Success!", "Laboratory Request Succesfully Updated", "success");
                    }
                  }
                });
            }
        }   
    });

    $("#searchbox_tbl_patient_prescription").keyup(function(){ 
        patient_prescription_dt
            .search(this.value)
            .draw();
    });    

    $("#searchbox_tbl_lab").keyup(function(){ 
        patient_lab_dt
            .search(this.value)
            .draw();
    });   

    $("#searchbox_tbl_billing").keyup(function(){ 
        patient_billing_dt
            .search(this.value)
            .draw();
    });   

    $("#searchbox_tbl_visiting_record").keyup(function(){ 
        patient_visiting_record_dt
            .search(this.value)
            .draw();
    });   

    $("#searchbox_tbl_clinical").keyup(function(){ 
        patient_clinical_dt
            .search(this.value)
            .draw();
    });  

    $("#searchbox_tbl_patient_medical_abstract").keyup(function(){ 
        patient_medical_abstract_dt
            .search(this.value)
            .draw();
    });              

    $("#searchbox_tbl_patient_nephro_order").keyup(function(){ 
        patient_nephro_order_dt
            .search(this.value)
            .draw();
    });             

    $("#searchbox_tbl_patient_lab_report").keyup(function(){ 
        patient_lab_report_dt
            .search(this.value)
            .draw();
    });     

    $("#searchbox_tbl_med_cert_report").keyup(function(){ 
        patient_medical_certificate_dt
            .search(this.value)
            .draw();
    });            

    $("#searchbox_tbl_nephro_clearance").keyup(function(){ 
        patient_nephro_clearance_dt
            .search(this.value)
            .draw();
    });

    $("#searchbox_tbl_nephro_record").keyup(function(){ 
        dt_patient_nephro_record
            .search(this.value)
            .draw();
    });       

    $("#searchbox_tbl_patient_referral").keyup(function(){ 
        patient_referral_dt
            .search(this.value)
            .draw();
    });       

    $("#searchbox_tbl_patient_admitting_order").keyup(function(){ 
        patient_admitting_order_dt
            .search(this.value)
            .draw();
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

        // $('#frm_lab_diagnostic input:checkbox').each(function() {
        //     if($(this).is (':checked')) {
        //        $(this).attr('checked', true);
        //     }
        // });

        // $('#frm_lab_diagnostic input:text').each(function() {
        //         $(this).attr('value', $(this).val());
        // });

        $("#patient_laboratory_request_response").printThis({
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
            showSpinningProgressLOADING();
            $('.header-text-title').html(_selectedname);

            setTimeout(function() {
                patient_medical_certificate_dt.ajax.reload($.unblockUI());
            }, 200);

            showList('med_cert_list',true,'Medical Certificate','fa-certificate');
        }
        else{
            notice_notif();
        }
        
    });

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


    $('#tbl_med_cert_report tbody').on( 'click', 'tr td.details-control-print', function () {
        var detailRows = [];
        var tr = $(this).closest('tr');
        var row = patient_medical_certificate_dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );                
            var d=row.data();
            window.open("Templates/transaction/certificate-details/"+ d.patient_medical_certificate_id+"?type=pdf");
    });

    $('#tbl_med_cert_report tbody').on( 'click', 'tr td.details-control', function () {
        var detailRows = [];
        var tr = $(this).closest('tr');
        var row = patient_medical_certificate_dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );

        if ( row.child.isShown() ) {
            tr.removeClass( 'details' );
            row.child.hide();

            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
            tr.addClass( 'details' );
            var d=row.data();

            $.ajax({
                "dataType":"html",
                "type":"POST",
                "url":"Templates/transaction/certificate-details/"+ d.patient_medical_certificate_id+"?type=fullview",
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
                    if(validateRequiredFields($('#frm_medical_record'))){
                        Savemedicalcertificate().done(function(response){
                            showNotification(response);
                            if(response.stat=="success"){
                                $('#tbl_med_cert_report').DataTable().ajax.reload();
                            }
                        }).always(function(){
                            $.unblockUI();
                            $('#modal_patient_medical_certificate').modal('toggle');
                        });
                        swal("Success!", "Medical Certificate Succesfully Created", "success");
                    }
                  } 
                  else {
                    if(validateRequiredFields($('#frm_medical_record'))){
                        Updatemedicalcertificate().done(function(response){
                            showNotification(response);
                            if(response.stat=="success"){
                                $('#tbl_med_cert_report').DataTable().ajax.reload();
                            }
                        }).always(function(){
                            $.unblockUI();
                            $('#modal_patient_medical_certificate').modal('toggle');
                        });
                        swal("Success!", "Medical Certificate Succesfully Updated", "success");
                    }
                  }
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





    //start nephrology clearance

    var _patient_nephro_clearance_id;
    var _txnmnephroclearance;
    var _selectRowObjnephroclearance;

    $('.patient_nephro_clearance').click(function(){
        if(_isChecked==true){
            showSpinningProgressLOADING();
            $('.header-text-title').html(_selectedname);

            setTimeout(function() {
                patient_nephro_clearance_dt.ajax.reload($.unblockUI());
            }, 200);

            showList('nephro_clearance_list',true,'Nephrology Clearance','fa-file');
        }
        else{
            notice_notif();
        }
        
    });

    $('#new_nephrology_clearance').click(function(){
        _txnmnephroclearance="new";        
        checkHeader(_txnmnephroclearance);
        $('.patient_txn').text('New');
        clearFields($('#frm_nephrology_clearance'));

        $('#nephrology_clearance_icon').removeClass();
        $('#nephrology_clearance_icon').addClass('fa fa-plus-circle');

        $( "#frm_nephrology_clearance" ).find('input[type="checkbox"]').each(function() {
            $(this).prop('checked', false); // Unchecks it
        });

        var d = new Date();
        var today = (d.getMonth()+1) + "/" + d.getDate() + "/" + d.getFullYear();

        $('#nephro_clearance_date').val(today);   
        $('#modal_patient_nephro_clearance').modal('toggle');
    });    

    $('#tbl_nephro_clearance tbody').on('click','button[name="edit_nephro_clearance"]',function(){
        _txnmnephroclearance="edit";
        checkHeader(_txnmnephroclearance);
        $('.patient_txn').text('Edit');
        clearFields($('#frm_nephrology_clearance'));

        $('#nephrology_clearance_icon').removeClass();
        $('#nephrology_clearance_icon').addClass('fa fa-edit');       

        _selectRowObjnephroclearance =$(this).closest('tr');
        var datanephroclearance=patient_nephro_clearance_dt.row(_selectRowObjnephroclearance).data();
        _selectedIDnephroclearance=datanephroclearance.nephro_clearance_id;

        $('input[type="text"],textarea').each(function(){
                var _elem=$(this);
                $.each(datanephroclearance,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
        }); 

        $('input[type="checkbox"]').each(function(){
                var _elem_checkbox=$(this);
                $.each(datanephroclearance,function(name,value){
                    if(_elem_checkbox.attr('name')==name){
                        if(value >= 1){
                            _elem_checkbox.prop('checked', true); // checks it
                        }else{
                            _elem_checkbox.prop('checked', false); // Unchecks it
                        }
                    }
                });
        });         


        $('#modal_patient_nephro_clearance').modal('toggle');
    });


    $('#tbl_nephro_clearance tbody').on( 'click', 'tr td.details-control-print', function () {
        var detailRows = [];
        var tr = $(this).closest('tr');
        var row = patient_nephro_clearance_dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );                
            var d=row.data();
            window.open("Templates/transaction/nephro-clearance/"+ d.nephro_clearance_id+"?type=pdf");
    });

    $('#tbl_nephro_clearance tbody').on('click','button[name="view_nephro_clearance"]',function(){
        _selectRowObjnephroclearance =$(this).closest('tr');
        var datanephroclearance=patient_nephro_clearance_dt.row(_selectRowObjnephroclearance).data();
        _selectedIDnephroclearance=datanephroclearance.nephro_clearance_id;

        $.ajax({
            "dataType":"html",
            "type":"POST",
            "url":"Templates/transaction/nephro-clearance/"+_selectedIDnephroclearance
        }).done(function(response){
            $('#patient_nephro_clearance_response').html('');
            $('#patient_nephro_clearance_response').html(response);
            $('#modal_patient_nephro_clearance_view').modal('toggle');
        });
        
    });

    $('#tbl_nephro_clearance tbody').on('click','button[name="remove_nephro_clearance"]',function(){
        _txdelete="nephroclearance";
        _selectRowObjnephroclearance =$(this).closest('tr');
        var datanephroclearance=patient_nephro_clearance_dt.row(_selectRowObjnephroclearance).data();
        _selectedIDnephroclearance=datanephroclearance.nephro_clearance_id;

        delete_notif();
    });

   $('#save_nephro_clearance').click(function(){
        if(validateRequiredFields($('#frm_nephrology_clearance'))){
            if(_txnmnephroclearance=="new"){
                SaveNephroClearance().done(function(response){
                    showNotification(response);
                    if(response.stat=="success"){
                        $('#tbl_nephro_clearance').DataTable().ajax.reload();
                    }
                }).always(function(){
                    $.unblockUI();
                    $('#modal_patient_nephro_clearance').modal('toggle');
                });
            }
            if(_txnmnephroclearance=="edit"){
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
                    if(validateRequiredFields($('#frm_nephrology_clearance'))){
                        SaveNephroClearance().done(function(response){
                            showNotification(response);
                            if(response.stat=="success"){
                                $('#tbl_nephro_clearance').DataTable().ajax.reload();
                            }
                        }).always(function(){
                            $.unblockUI();
                            $('#modal_patient_nephro_clearance').modal('toggle');
                        });
                        swal("Success!", "Nephrology Clearance Succesfully Created", "success");
                    }
                  } 
                  else {
                    if(validateRequiredFields($('#frm_nephrology_clearance'))){
                        UpdateNephroClearance().done(function(response){
                            showNotification(response);
                            if(response.stat=="success"){
                                $('#tbl_nephro_clearance').DataTable().ajax.reload();
                            }
                        }).always(function(){
                            $.unblockUI();
                            $('#modal_patient_nephro_clearance').modal('toggle');
                        });
                        swal("Success!", "Nephrology Clearance Succesfully Updated", "success");
                    }
                  }
                });
            }
        }   
    });

    var SaveNephroClearance=function(){
        var _data=$('#frm_nephrology_clearance').serializeArray();
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            $( "#frm_nephrology_clearance" ).find('input[type="checkbox"]').each(function() {
                _data.push({name : $(this).attr('name') ,value : $(this).is(':checked') ? 1 : 0 });
            });

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_nephrology_clearance/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
    };

    var UpdateNephroClearance=function(){
        var _data=$('#frm_nephrology_clearance').serializeArray();
            _data.push({name : "nephro_clearance_id" ,value : _selectedIDnephroclearance});
            _data.push({name : "ref_patient_id" ,value : _selectedID});

            $( "#frm_nephrology_clearance" ).find('input[type="checkbox"]').each(function() {
                _data.push({name : $(this).attr('name') ,value : $(this).is(':checked') ? 1 : 0 });
            });

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Patient_nephrology_clearance/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
       
    };

    $('#print_nephro_clearance').click(function(event){
        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/css/css_special_files.css";
        /*alert(output);*/
        $("#patient_nephro_clearance_response").printThis({
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
    var _txnnephrorecord;
    var _patient_nephro_record_id;
    var _selectRowObjNephroOrder;

    $('.patient_nephro_record').click(function(){
        if(_isChecked==true){

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
            });

            showSpinningProgressLOADING();
            $('.header-text-title').html(_selectedname);

            setTimeout(function() {
                dt_patient_nephro_record.ajax.reload($.unblockUI());
            }, 200);

            showList('nephro_record_list',true,'Nephro Record','fa-heartbeat');
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
            showSpinningProgressLOADING();
            $('.header-text-title').html(_selectedname);

            setTimeout(function() {
                patient_referral_dt.ajax.reload($.unblockUI());
            }, 200);

            showList('patient_referral_list',true,'Patient Referral','fa-envelope');
        }
        else{
            notice_notif();
        }
        
    });

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

    $('#tbl_patient_referral tbody').on( 'click', 'tr td.details-control-print', function () {
        var detailRows = [];
        var tr = $(this).closest('tr');
        var row = patient_referral_dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );                
            var d=row.data();
            window.open("Templates/transaction/referral-details/"+ d.patient_referral_id+"?type=pdf");
    });

    $('#tbl_patient_referral tbody').on( 'click', 'tr td.details-control', function () {
        var detailRows = [];
        var tr = $(this).closest('tr');
        var row = patient_referral_dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );

        if ( row.child.isShown() ) {
            tr.removeClass( 'details' );
            row.child.hide();

            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
            tr.addClass( 'details' );
            var d=row.data();

            $.ajax({
                "dataType":"html",
                "type":"POST",
                "url":"Templates/transaction/referral-details/"+ d.patient_referral_id+"?type=fullview",
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
                    if(validateRequiredFields($('#frm_referral'))){
                        SaveReferral().done(function(response){
                            showNotification(response);
                            if(response.stat=="success"){
                                $('#tbl_patient_referral').DataTable().ajax.reload();
                            }
                        }).always(function(){
                            $.unblockUI();
                            $('#modal_patient_referral').modal('toggle');
                        });
                        swal("Success!", "Referral Letter Succesfully Created", "success");
                    }
                  } 
                  else {
                    if(validateRequiredFields($('#frm_referral'))){
                        UpdateReferral().done(function(response){
                            showNotification(response);
                            if(response.stat=="success"){
                                $('#tbl_patient_referral').DataTable().ajax.reload();
                            }
                        }).always(function(){
                            $.unblockUI();
                            $('#modal_patient_referral').modal('toggle');
                        });
                        swal("Success!", "Referral Letter Succesfully Updated", "success");
                    }
                  }
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
            showSpinningProgressLOADING();
            $('.header-text-title').html(_selectedname);

            setTimeout(function() {
                patient_admitting_order_dt.ajax.reload($.unblockUI());
            }, 200);

            showList('patient_admitting_order_list',true,' Patient Admitting Order','fa-list-ul');
        }
        else{
            notice_notif();
        }
        
    });

    $('#new_admitting_order').click(function(){
        _txnadmittingorder="new";
        checkHeader(_txnadmittingorder);
        $('.patient_txn').text('New');
        clearFields($('#frm_admitting_order'));

        $('#frm_admitting_order').find('.hidden').removeClass('hidden');

        $('#admitting_order_icon').removeClass();
        $('#admitting_order_icon').addClass('fa fa-plus-circle');

        $("#frm_admitting_order input:checkbox").prop('checked',false);
        $("#frm_admitting_order input").prop('disabled',false);
        $("#frm_admitting_order textarea").prop('disabled',false);        

        $('#admitting_order_date').val(today);   

        $('#save_admitting_order').show();
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

        $('#frm_admitting_order').find('.hidden').removeClass('hidden');

        $('#admitting_order_icon').removeClass();
        $('#admitting_order_icon').addClass('fa fa-edit');

        $("#frm_admitting_order input:checkbox").prop('checked',false);
        $("#frm_admitting_order input:text").prop('disabled',false);

        $("#frm_admitting_order input:checkbox").css('pointer-events','all'); 
        $("#frm_admitting_order input:text").css('pointer-events','all'); 

        $('#save_admitting_order').show();
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
        _selectRowObjadmittingorder =$(this).closest('tr');
        var dataadmittingorder=patient_admitting_order_dt.row(_selectRowObjadmittingorder).data();
        _selectedIDadmittingorder=dataadmittingorder.patient_admitting_order_id;

        $.ajax({
            "dataType":"html",
            "type":"POST",
            "url":"Templates/transaction/admitting-order/"+_selectedIDadmittingorder
        }).done(function(response){
            $('#patient_admitting_order_response').html('');
            $('#patient_admitting_order_response').html(response);
            $('#modal_admitting_order_view').modal('toggle');
        });
        
    });

    // $('#tbl_patient_admitting_order tbody').on('click','button[name="view_admitting_order"]',function(){
    //     _txnadmittingorder="view";
    //     checkHeader(_txnadmittingorder);
    //     $('.patient_txn').text('View');
    //     clearFields($('#frm_admitting_order'));

    //     $('#admitting_order_icon').removeClass();
    //     $('#admitting_order_icon').addClass('fa fa-print');

    //     $("#frm_admitting_order input:checkbox").prop('checked',false);
    //     $("#frm_admitting_order input:text").prop('disabled',true);

    //     $("#frm_admitting_order input:checkbox").css('pointer-events','none'); 
    //     $("#frm_admitting_order input:text").css('pointer-events','none'); 

    //     $('#save_admitting_order').hide();
    //     $('#print_admitting_order').show();
    //     $('#ftr_admitting_order').show();        

    //     _selectRowObjadmittingorder =$(this).closest('tr');
    //     var dataadmittingorder=patient_admitting_order_dt.row(_selectRowObjadmittingorder).data();
    //     _selectedIDadmittingorder=dataadmittingorder.patient_admitting_order_id;

    //     $('input,textarea').each(function(){
    //             var _elem=$(this);
    //             $.each(dataadmittingorder,function(name,value){

    //                 if(_elem.attr('name')==name){
    //                     _elem.val(value);

    //                     if(checkbox_report==1){
    //                         if(value== "" || value==null){
    //                             $('.'+name).addClass('hidden');
    //                         }else{
    //                             $('.'+name).removeClass('hidden');
    //                         }
    //                     }
    //                 }

    //                 if(_elem.attr('id')==name){

    //                     if(checkbox_report==1){
    //                         if(value!=1){
    //                             $('.'+name).addClass('hidden');
    //                         }else{
    //                             $('.'+name).removeClass('hidden');
    //                         }
    //                     }

    //                     if(value==1){ _elem.prop('checked', true); }
    //                     else{ _elem.prop('checked', false); }
    //                 }

    //             });
    //     }); 
    //     $('#modal_admitting_order').modal('toggle');        
    // });

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
                    if(validateRequiredFields($('#frm_admitting_order'))){
                        Saveadmittingorder().done(function(response){
                            showNotification(response);
                            if(response.stat=="success"){
                                $('#tbl_patient_admitting_order').DataTable().ajax.reload();
                            }
                        }).always(function(){
                            $.unblockUI();
                            $('#modal_admitting_order').modal('toggle');
                        });
                        swal("Success!", "Admitting Order Succesfully Created", "success");
                    }
                  } 
                  else {
                    if(validateRequiredFields($('#frm_admitting_order'))){
                        Updateadmittingorder().done(function(response){
                            showNotification(response);
                            if(response.stat=="success"){
                                $('#tbl_patient_admitting_order').DataTable().ajax.reload();
                            }
                        }).always(function(){
                            $.unblockUI();
                            $('#modal_admitting_order').modal('toggle');
                        });
                        swal("Success!", "Admitting Order Succesfully Updated", "success");
                    }
                  }
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

        // $('#frm_admitting_order input:checkbox').each(function() {
        //     if($(this).is (':checked')) {
        //        $(this).attr('checked', true);
        //     }
        // });

        /*$('input[type="checkbox"]').each(function() {
            if($(this).is (':checked')) {
               $(this).attr('checked', 'true') 
            }
        });*/

        // $('#frm_admitting_order input:text').each(function() {
        //        var val = $(this).val();
        //        var id = $(this).attr('id');
        //        $('#'++'').val(10);
        //         $(this).attr('value', $(this).val());

        // });


        

        $("#patient_admitting_order_response").printThis({
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

                if(_txdelete=="nephroclearance"){
                    swal("Deleted!", "Nephrology Clearance has been deleted.", "success");
                    removeNephroClearance().done(function(response){
                    showNotification(response);
                        patient_nephro_clearance_dt.row(_selectRowObjnephroclearance).remove().draw();
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
