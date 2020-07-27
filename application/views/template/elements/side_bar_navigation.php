  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $this->session->user_photo; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info" style="left: 47px;">
          <p> <?php echo $this->session->user_fullname; ?> <br/>
          <small style="color: #888888;margin-top: 5px;"><?php echo $this->session->user_email; ?></small></p>
          
          <a style="font-size: 8pt;"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if($active==1){ echo 'active'; } ?> treeview">
          <a href="Homepage">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="<?php if($active==2){ echo 'active'; } ?> treeview right_patientref_view">
          <a href="Ref_patient">
            <i class="fa fa-wheelchair"></i>
            <span>Patient Information</span>
          </a>
        </li>
        <li class="<?php if($active==3 || $active==4){ echo 'active'; } ?> treeview">
          <a href="#/">
            <i class="fa fa-pie-chart"></i>
            <span>References</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($active==3){ echo 'active'; } ?> right_services_view"><a href="Ref_services"><i class="fa fa-wrench"></i> Services</a></li>
            <li class="<?php if($active==4){ echo 'active'; } ?> right_servicedesc_view"><a href="Ref_service_desc"><i class="fa fa-file-text"></i> Service Description</a></li>
          </ul>
        </li>
        <li class="<?php if($active==5 || $active==6){ echo 'active'; } ?> treeview">
          <a href="#/">
            <i class="fa fa-user"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($active==5){ echo 'active'; } ?> right_useraccount_view"><a href="Users"><i class="fa fa-user"></i> User Accounts</a></li>
            <li class="<?php if($active==6){ echo 'active'; } ?> right_usergroup_view"><a href="UserGroups"><i class="fa fa-users"></i> User Groups</a></li>
          </ul>
        </li>
        <li class="<?php if($active==8){ echo 'active'; } ?> treeview right_stampsettings_view">
          <a href="StampSettings">
            <i class="fa fa-cogs"></i>
            <span>Settings</span>
          </a>
        </li>        
<!--         <li class="<?php if($active==7 || $active==8){ echo 'active'; } ?> treeview">
          <a href="#/">
            <i class="fa fa-cogs"></i>
            <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($active==7){ echo 'active'; } ?> right_companysettings_view"><a href="CompanySettings"><i class="fa fa-building"></i> Company Settings</a></li>
            <li class="<?php if($active==8){ echo 'active'; } ?> right_stampsettings_view"><a href="StampSettings"><i class="fa fa-credit-card"></i> General Information</a></li>
          </ul>
        </li> -->        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
