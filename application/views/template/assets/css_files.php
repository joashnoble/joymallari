

      
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="assets/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link href="assets/plugins/notify/pnotify.css" rel="stylesheet"> <!-- notification -->
  <link href="assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet"> <!-- sweet alert -->
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- Select2 -->
  <link rel="stylesheet" href="assets/plugins/select2/select2.min.css">
    <!-- Lightbox -->
  <link rel="stylesheet" href="assets/plugins/lightgallery/dist/css/lightgallery.css">
  <!-- pace -->
  <!-- <link rel="stylesheet" href="assets/plugins/pace/pace.css"> -->
  <!-- custom style -->
  <link rel="stylesheet" href="assets/css/styles.css">

<!--   <link rel="stylesheet" href="assets/plugins/datetimepicker/bootstrap-datetimepicker.min.css"> -->
  

  <style>

    textarea{
      resize: vertical;
    }

/*    input{
        font-size:8pt !important;
    }*/
    .fa-size{
      width:15px;
    }
    .tbl-header{
      background-color: #222d32;
      color:white;
    } 
    .select2{
      width:100% !important;
    }

    /* Input Focus */
    input:focus { 
      background-color: #fff9b1;
      color:black;
    }

   /* input:focus::-webkit-input-placeholder {
        color: #dddddd;
    }

    input:focus:-moz-placeholder {
        color: #dddddd;
    }

    input:focus::-moz-placeholder {
        color: #dddddd;
    }

    input:focus:-ms-input-placeholder {
        color: #dddddd;
    }*/


    /* Textarea Focus */
    textarea:focus { 
      background-color: #fff9b1;
      color:black;
    }

    /*textarea:focus::-webkit-input-placeholder {
        color: #dddddd;
    }

    textarea:focus:-moz-placeholder {
        color: #dddddd;
    }

    textarea:focus::-moz-placeholder {
        color: #dddddd;
    }

    textarea:focus:-ms-input-placeholder {
        color: #dddddd;
    }    */
    
     /* Select Focus */
    select:focus { 
      background-color: #fff9b1;
      color:black;
    }

   /* select:focus::-webkit-input-placeholder {
        color: #dddddd;
    }

    select:focus:-moz-placeholder {
        color: #dddddd;
    }

    select:focus::-moz-placeholder {
        color: #dddddd;
    }

    select:focus:-ms-input-placeholder {
        color: #dddddd;
    }    */

    input[type="checkbox"]:focus {
      outline:1px solid #2980b9 !important;

    }
    .ui-pnotify{
      top:50px;
    }
    /*.loader {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #16a085;  
      background: url('assets/loader.svg') 50px 50px no-repeat rgb(249,249,249);
    }*/
    .loader {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url(assets/ripple.svg) center no-repeat #fff;
    }
    .odd{
      height:20px !important;
    }
    .even{
      height:20px !important;
    }
    .box {
        border-radius: 0;
        border-top:3px solid;
        -webkit-box-shadow: 0px 0px 13px 1px rgba(153,153,153,1)!important;
        -moz-box-shadow: 0px 0px 13px 1px rgba(153,153,153,1)!important;
        box-shadow: 0px 0px 13px 1px rgba(153,153,153,1)!important;
    }

    table tbody{
      cursor: pointer;
    }

    hr{
      margin: 0;
      padding: 0;
      margin-top: 10px;
    }

    table.table_patient, .table-list-border{
      width: 100%;border: 1px solid lightgray;
    }

    table.dataTable td.dataTables_empty {
        text-align: center;    
    }    

    .btn-dark{
      background: #222d32;
      color: white;
    }

    .btn-dark:hover{
      background: #515556;
      color: white;
    }

    .btn-dark:focus{
      background: #00a65a;
      color: white;
    }

    .pagination>.active>a{
      background-color: gray!important;
      border-color: gray!important;
    }

    .mb{
      margin-bottom: 10px;
    }

    textarea{
      resize: vertical;
    }
    .patient-panel-content{
      background-color: #F0F0F0;
      color: black;
      padding-top: 20px;
    }
    div.p-header{
      text-transform: uppercase; 
      background: lightgray;
      padding: 10px;
      width: 100%;
      font-weight: bold;
      border: 1px solid lightgray;
    }
    .uppercase{
      text-transform: uppercase;
    }
    .close_patient_field:focus, .close_list:focus{
      outline: none!important;
    }
    .header-text-title{
      text-transform: 
    }
    .normal{
      font-weight: normal;
    }
   .row {
        margin-right: 0px;
        margin-left: 0px;
    } 
    .box-body{
      padding: 0;
    }

    .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
      background-color: #FFFACD;
    }  

    #tbl_patient_prescription_filter, #tbl_lab_filter, #tbl_billing_filter, #tbl_visiting_record_filter, #tbl_clinical_filter,#tbl_patient_medical_abstract_filter,#tbl_patient_nephro_order_filter,#tbl_patient_lab_report_filter,#tbl_med_cert_report_filter,#tbl_nephro_record_filter,#tbl_patient_referral_filter,#tbl_patient_admitting_order_filter{
      display: none;
    }

    .padding-top{
      padding-top: 5px;
    }
    .header-icon{
      color: #222d32;
    }
  </style>