
<!DOCTYPE html>
<html>

<head>
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

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script type="text/javascript" 
src="https://code.jquery.com/jquery-1.12.0.min.js">
    </script>

    <!-- Compiled and minified JavaScript -->
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
    </script>
    
    <script>
        $(document).ready(function () {
            $('.carousel').carousel();
        });
    </script>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: coral;
        }

        a {
            height: 900px;
            width: 650px;
        }

        .carousel {
            height: 800px;
            perspective: 950px;
            transform: translateY(-100px);
        }

        .carousel carousel-item {
            width: 7050px;
        }

        img {
            width: 100%;
            height: 200px;
        }

        h4 {
            margin: 0;
            padding: 0;
            background: #fff;
            color: #000;
            box-sizing: border-box;
            padding: 10px 5px;
            font-weight: bold;
            font-size: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav"> 
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo  text-custom text-warning">
                         Nupur Nritya
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li><a href="meetings.html">Events</a></li>
                        <li class="dropdown dropdown-list-toggle">
                             <a href="<?=base_url('Registration')?>" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle">Register</a>
            
                        </li>
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
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  
  
<h1><?= $event['title'] ?></h1>


     <div class="carousel">
        <div class="carousel-item">
           
                <img src=
"public/assets/img/natraja.jpg">
            </a>
            <h4>xxxxxxxxxxxx</h4>
        </div>
        
        <div class="carousel-item">
            <a href="">              
                <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20191205124138/5510.png">
            </a>
            <h4>Tab image gallery</h4>
        </div>

        <div class="carousel-item">
            <a href="">
                <img src=
"https://media.geeksforgeeks.org/wp-content/cdn-uploads/Screenshot-25-1024x453.png">
            </a>
            <h4>Building header of a website</h4>
        </div>

        <div class="carousel-item">
            <a href="">
                <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20200214124104/imageslider1.png">
            </a>
            <h4>image slider</h4>
        </div>

        <div class="carousel-item">
            <a href="">
                <img src=
"https://media.geeksforgeeks.org/wp-content/cdn-uploads/20200320161020/Screenshot-from-2020-03-20-16-06-36.png">
            </a>
            <h4>image lightbox gallery</h4>
        </div>
    </div>

<!-- Bootstrap core JavaScript -->
<script src="<?=base_url('public/frontend/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?=base_url('public/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <script src="<?=base_url('public/frontend/js/isotope.min.js')?>"></script>
    <script src="<?=base_url('public/frontend/js/owl-carousel.js')?>"></script>
    <script src="<?=base_url('public/frontend/js/lightbox.js')?>"></script>
    <script src="<?=base_url('public/frontend/js/tabs.js')?>"></script>
    <script src="<?=base_url('public/frontend/js/video.js')?>"></script>
    <script src="<?=base_url('public/frontend/js/slick-slider.js')?>"></script>
    <script src="<?=base_url('public/frontend/js/custom.js')?>"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
</script>
</body>

</html>