<!DOCTYPE html>
<html lang="en">

  <head>
<?php



include_once APPPATH . "views/layouts/include_css.php";
include_once APPPATH . "views/layouts/include_js.php";

?>
  </head>

<body>

  <!-- Sub Header -->
  <div class="sub-header">
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav"> 
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          Nupur Nritya
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section active"><a href="#" class="active">Home</a></li>
                          <li class="scroll-to-section active"><a href="<?=base_url('Registration');?>" class="active">Registration</a></li>

                          <li><a href="meetings.html">Events</a></li>
                          <li class="scroll-to-section"><a href="#apply">Apply Now</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="meetings.html">Upcoming Meetings</a></li>
                                  <li><a href="meeting-details.html">Meeting Details</a></li>
                              </ul>
                          </li>
                          <li class="scroll-to-section"><a href="#courses">Courses</a></li> 
                          <li class="scroll-to-section"><a href="#contact">Contact Us</a></li> 
                      </ul>        
                      <a class="menu-trigger">
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay="" muted="" loop="" id="bg-video">
          <source src="<?= base_url('public/images/course-video.mp4'); ?>" type="video/mp4">
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <!-- <h6>Hello Students</h6> -->
              <!-- <h2>Welcome to Education</h2> -->
              <!-- <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div> -->
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
    
  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="icon">
              <img src="public/assets/img/NDALOGO.png">
              </div>
              <div class="down-content">
                <h4>Best Education</h4>
                <p>........</p>
              </div>
            </div>

            </div>
         </div>
        </div>
    </div>
    </section>


</body>
</html>