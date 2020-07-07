  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $this->session->user_photo; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo $this->session->user_fullname; ?> </p>
          <a ><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="Homepage">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="">
            <i class="fa fa-hospital-o"></i>
            <span>Patient Information</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li class="right_patientinfo_view"><a href="Patient_Info"><i class="fa fa-user-md"></i> Patient Information</a></li> -->
            <li class="right_patientref_view"><a href="Ref_patient"><i class="fa fa-wheelchair"></i> Patient</a></li>
            <!-- <li id="process_type"><a href="javascript:void()"><i class="fa fa-file-word-o"></i> Medical Records</a></li> -->
          </ul>
        </li>
        <li class="treeview">
          <a href="#/">
            <i class="fa fa-pie-chart"></i>
            <span>References</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li class="right_patientref_view"><a href="Ref_patient"><i class="fa fa-wheelchair"></i> Patient</a></li> -->
            <li class="right_services_view"><a href="Ref_services"><i class="fa fa-wrench"></i> Services</a></li>
            <li class="right_servicedesc_view"><a href="Ref_service_desc"><i class="fa fa-file-text"></i> Service Description</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#/">
            <i class="fa fa-user"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="right_useraccount_view"><a href="Users"><i class="fa fa-user"></i> User Accounts</a></li>
            <li class="right_usergroup_view"><a href="UserGroups"><i class="fa fa-users"></i> User Groups</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
