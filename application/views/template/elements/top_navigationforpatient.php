  <header class="main-header">
    <!-- Logo -->
    <a class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="hidden-xs right_prescription_view patient_prescription top-icon">
            <a href="javascript:void();" data-toggle="tooltip" data-placement="bottom" title="Prescription"><i class="fa fa-user-md"></i></a>
          </li>
          <li class="hidden-xs right_medlab_view patient_laboratory top-icon">
            <a href="javascript:void();" data-toggle="tooltip" data-placement="bottom" title="Laboratory Report"><i class="fa fa-stethoscope"></i></a>
          </li>
          <li class="hidden-xs right_billing_view patient_billing top-icon" >
            <a href="javascript:void();" data-toggle="tooltip" data-placement="bottom" title="Billing"><i class="fa fa-money"></i></a>
          </li>
          <li class="hidden-xs right_visiting_view patient_visiting_record top-icon" >
            <a href="javascript:void();" data-toggle="tooltip" data-placement="bottom" title="Visiting Record"><i class="fa fa-file-text-o"></i></a>
          </li>
          <li class="hidden-xs right_clinicaldb_view patient_clinical top-icon">
            <a href="javascript:void();" data-toggle="tooltip" data-placement="bottom" title="Clinical Database"><i class="fa fa-medkit"></i></a>
          </li>
          <li class="hidden-xs right_medabstract_view patient_medical_abstract top-icon" >
            <a href="javascript:void();" data-toggle="tooltip" data-placement="bottom" title="Medical Abstract"><i class="fa fa-stethoscope"></i></a>
          </li>
          <li class="hidden-xs right_nephro_view patient_nephro_order top-icon">
            <a href="javascript:void();" data-toggle="tooltip" data-placement="bottom" title="Nephro Order"><i class="fa fa-heart"></i></a>
          </li>
          <li class="hidden-xs right_labreport_view patient_laboratory_report top-icon">
            <a href="javascript:void();" data-toggle="tooltip" data-placement="bottom" title="Laboratory Request"><i class="fa fa-commenting-o"></i></a>
          </li>
          <li class="hidden-xs right_medcert_view patient_medical_certificate top-icon">
            <a href="javascript:void();" data-toggle="tooltip" data-placement="bottom" title="Medical Certificate"><i class="fa fa-certificate"></i></a>
          </li>
          <li class="hidden-xs right_nephro_clearance_view patient_nephro_clearance top-icon">
            <a href="javascript:void();" data-toggle="tooltip" data-placement="bottom" title="Nephrology Clearance"><i class="fa fa-file"></i></a>
          </li>
          <li class="hidden-xs right_nephrorecord_view patient_nephro_record top-icon">
            <a href="javascript:void();" data-toggle="tooltip" data-placement="bottom" title="Nephro Record"><i class="fa fa-heartbeat"></i></a>
          </li>
          <li class="hidden-xs right_referralletter_view patient_referral_letter top-icon">
            <a href="javascript:void();" data-toggle="tooltip" data-placement="bottom" title="Referral"><i class="fa fa-envelope"></i></a>
          </li>
          <li class="hidden-xs right_admitting_order_view patient_admitting_order top-icon">
            <a href="javascript:void();" data-toggle="tooltip" data-placement="bottom" title="Admitting Order"><i class="fa fa-list-ul"></i></a>
          </li>
          <li class="dropdown hidden-md hidden-lg hidden-sm top-icon">
            <a href="javascript:void();" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></a>
            <ul class="dropdown-menu text-center">
                <li class="user-header right_prescription_view patient_prescription">
                  <a href="javascript:void();"><i class="fa fa-user-md"></i>Prescription</a>
                </li>
                <li class="user-header right_medlab_view patient_laboratory">
                  <a href="javascript:void();"><i class="fa fa-stethoscope"></i>Laboratory</a>
                </li>
                <li class="user-header right_billing_view patient_billing">
                  <a href="javascript:void();"><i class="fa fa-money"></i>Billing</a>
                </li>
                <li class="user-header right_visiting_view patient_visiting_record">
                  <a href="javascript:void();"><i class="fa fa-file-text-o"></i>Visiting Record</a>
                </li>
                <li class="user-header right_clinicaldb_view patient_clinical">
                  <a href="javascript:void();"><i class="fa fa-medkit"></i>Clinical Database</a>
                </li>
                <li class="user-header right_medabstract_view patient_medical_abstract">
                  <a href="javascript:void();"><i class="fa fa-stethoscope"></i>Medical Abstract</a>
                </li>
                <li class="user-header right_nephro_view patient_nephro_order">
                  <a href="javascript:void();"><i class="fa fa-heart"></i>Nephro Order</a>
                </li>
                <li class="user-header right_labreport_view patient_laboratory_report">
                  <a href="javascript:void();"><i class="fa fa-commenting-o"></i>Laboratory Report</a>
                </li>
                <li class="user-header right_medcert_view patient_medical_certificate">
                  <a href="javascript:void();"><i class="fa fa-certificate"></i>Medical Certificate</a>
                </li>
                <li class="user-header right_nephro_clearance_view patient_nephro_clearance">
                  <a href="javascript:void();"><i class="fa fa-file"></i>Nephrology Clearance</a>
                </li>                
                <li class="user-header right_nephrorecord_view patient_nephro_record">
                  <a href="javascript:void();"><i class="fa fa-heartbeat"></i>Nephro Record</a>
                </li>
                <li class="user-header right_referralletter_view patient_referral_letter">
                  <a href="javascript:void();"><i class="fa fa-envelope"></i>Referral</a>
                </li>
                <li class="user-header right_admitting_order_view patient_admitting_order">
                  <a href="javascript:void();"><i class="fa fa-envelope"></i>Admitting Order</a>
                </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $this->session->user_photo; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->user_fullname; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $this->session->user_photo; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->user_fullname; ?> - <?php echo $this->session->user_group; ?>
                  <small>Member since Nov. <?php echo $this->session->date_created; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer" style="background-color:#c0392b">
                <!-- <div class="pull-left"> -->
                  <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                <!-- </div>
                <div class="pull-right">
                  <a href="Login/transaction/logout" class="btn btn-default btn-flat">Sign out</a>
                </div> -->
                <center><a style="color:white;background-color:#c0392b;font-size:15px;border:0px;width:100%;" href="Login/transaction/logout" class="btn btn-default btn-flat">Logout</a></center>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- for loader -->
  <div class="loader">
  </div>