<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>
  <?php $this->load->view('layouts/include_css'); ?>

  
</head>

<body>
<?php $this->load->view('layouts/include_js'); ?>

  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle">
            <a href="admin_panel/admin_login" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle ">Login</a>
            
          </li>
          <li class="dropdown dropdown-list-toggle">
            <a href="admin_panel/admin_register" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle">Register</a>
            
          </li>


          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="public/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Nupur Academy</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li><a class="nav-link" href="#"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>

            <li class="menu-header">Starter</li>
            
            <li><a class="nav-link" href="<?=base_url('admin_sliders');?>"><i class="fas fa-grip-horizontal"></i> <span>Sliders</span></a></li>
            <li><a class="nav-link" href="<?=base_url('admin_gallary');?>"><i class="far fa-file-image"></i> <span>Gallary</span></a></li>
            <li><a class="nav-link" href="<?=base_url('admin_course');?>"><i class="fas fa-book"></i> <span>Course</span></a></li>
          </div>        </aside>
      </div>
    </div>
  </div>
</body>
</html>