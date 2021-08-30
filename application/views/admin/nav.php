<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li> <div style="height:10px;"></div><h5> ADMINISTRATOR :  <?php echo $this->session->userdata['logged_in']['name'];?></h5></li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="<?php echo base_url();?>/assets/img/icon.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello <?php echo $this->session->userdata['logged_in']['name'];?></div>
              <div class="dropdown-divider"></div>
              <a href="<?php echo site_url('admin/logout');?>" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#"> <img alt="image" src="<?php echo base_url();?>/assets/images/logo.png" class="header-logo" /> <span
                class="logo-name"></span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header"><center>NAVIGATION MENU</center></li>
			<?php
			$page = $this->uri->segment(2);
			if($page =='index'){ $index = 'active';}
			else if($page =='coviddata'){ $coviddata = 'active';}
			else if($page =='users'){ $users = 'active';}
			
			?>
            <li class="dropdown <?php echo $index;?>">
              <a href="<?php echo site_url('admin/index');?>" class="nav-link"><i data-feather="monitor"></i><span>DASHBOARD</span></a>
            </li>
			<li class="dropdown <?php echo $coviddata;?>">
              <a href="<?php echo site_url('admin/coviddata');?>" class="nav-link"><i data-feather="user-plus"></i><span>COVID INFORMATION  </span></a>
            </li>
			<li class="dropdown <?php echo $users;?>">
              <a href="<?php echo site_url('admin/users');?>" class="nav-link"><i data-feather="users"></i><span>SYSTEM USERS  </span></a>
            </li>
			<li class="dropdown ">
              <a href="<?php echo site_url('admin/logout');?>" class="nav-link"><i data-feather="arrow-right-circle"></i><span>LOGOUT</span></a>
            </li>
          </ul>
        </aside>
      </div>