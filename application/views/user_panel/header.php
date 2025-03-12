<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Nupur Nritya</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('public/frontend/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?=base_url('public/frontend/css/fontawesome.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/frontend/css/templatemo-edu-meeting.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/frontend/css/owl.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/frontend/css/lightbox.css')?>">

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <style>
        /* Prevent header overlap */
        body {
            padding-top: 100px; /* Adjust based on header height */
        }

        .header-area ,nav li a {
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: #fff;
            padding: 15px 0;
            margin-bottom: 20px; /* Adds spacing below header */
            color: #6b2b06 !important; /* Change to a visible color */
            font-weight: bold;
        }

        .header-area .nav li a:hover,
        .header-area .nav li a.actice{
            color: #a64d1e !important; /* A darker shade for hover effect */
        }

        .header-area .nav li .sub-menu li a {
            color: #6b2b06 !important; /* Ensure dropdown text is visible */
        }

        /* On hover for dropdown */
        .header-area .nav li .sub-menu li a:hover {
            color: #a64d1e !important;
        }

        .main-content {
            margin-top: 30px; /* Ensures content is not hidden behind the header */
        }
    </style>

</head>

<body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Sub Header -->
<div class="sub-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-8">
        <div class="left-content">
          <!-- <p>This is an educational <em>HTML CSS</em> template by TemplateMo website.</p> -->
        </div>
      </div>
      <div class="col-lg-4 col-sm-4">
        <div class="right-icons">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav"> 
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo text-custom text-dark">
                        Nupur Nritya
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="<?=base_url('Home')?>" class="active">Home</a></li>
                        <!-- <li><a href="meetings.html">Events</a></li> -->
                        <li class="dropdown dropdown-list-toggle">
                             <a href="<?=base_url('Registration')?>" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle">Register</a>
            
                        </li>
                          <!-- <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="meetings.html">Upcoming Meetings</a></li>
                                  <li><a href="meeting-details.html">Meeting Details</a></li>
                              </ul>
                          </li> -->
                          <li class="scroll-to-section"><a href="#meetings">Courses</a></li> 
                          <li class="scroll-to-section"><a href="#contact">Contact Us</a></li> 
                      </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- Main Content Wrapper -->
<div class="container main-content">
    <!-- The rest of the page content will go here -->
</div>

</body>
</html>