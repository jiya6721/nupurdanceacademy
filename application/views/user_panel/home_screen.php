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
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->

<!-- Slick CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

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
            <!-- <h1>Hello</h1> -->
            <p>This is an educational <em>HTML CSS</em> template by TemplateMo website.</p>
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
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
  <div class="slider">
    <?php foreach($sliders as $slider): ?>
      <div>
        <img src="<?=base_url('public/uploads/sliders/'.$slider->file)?>" alt="" srcset="">
      </div>
    <?php endforeach; ?>
  </div>

  <div class="video-overlay header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="caption">
              <h2 class="text-custom text-warning">Nupur Nritya</h2>
                <h4 class="text-custom text-warning"><i>
              Arts makes man better human being
                </i></h4>
            <div class="main-button-red">
              <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="icon">
                <img src="<?=base_url('public/frontend/images/service-icon-01.png')?>" alt="">
              </div>
              <div class="down-content">
                <h4></h4>
                <p>We educate people to learn about our ancient tradition and culture mentiond in our vedas.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="<?=base_url('public/frontend/images/service-icon-02.png')?>" alt="">
              </div>
              <div class="down-content">
                <h4></h4>
                <p>We train kids and provide them the new opportunity to perform on National and International stage.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="<?=base_url('public/frontend/images/service-icon-03.png')?>" alt="">
              </div>
              <div class="down-content">
                <h4></h4>
                <p>We encourage the students to learn new things & grow while staying connected to the roots.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="<?=base_url('public/frontend/images/service-icon-02.png')?>" alt="">
              </div>
              <div class="down-content">
                <h4></h4>
                <p>We educate people to learn about our ancient tradition and culture mentiond in our vedas.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="<?=base_url('public/frontend/images/service-icon-03.png')?>" alt="">
              </div>
              <div class="down-content">
                <h4></h4>
                <p>We train kids and provide them the new opportunity to perform on National and International stage.</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Upcoming Meetings</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="categories">
            <h4>9 Year Course</h4>
            <ul>
            <div class="thumb">

            <?php
            foreach ($courses as $key => $course) { ?>
            <li><a href="<?= base_url('course_page/'.$course->id) ?>"><?=$course->name?></a></li><br>
          

            <?php 
              } 
            ?>
              

              

            </ul>
            <div class="main-button-red">
              <a href="meetings.html">Details of Course</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
    <div class="row">
        <?php 
        // Limit to first 4 records
        $events = array_slice($events, 0, 4);
        foreach ($events as $event) { 
            // Format the created_at date
            $month = date('M', strtotime($event['created_at']));  // Month (e.g., Nov)
            $day = date('d', strtotime($event['created_at']));    // Day (e.g., 10)
        ?>
            <div class="col-lg-6">
                <div class="meeting-item">
                    <div class="thumb">
                    <a href="<?= base_url('event_page/'.$event['id']) ?>">
                         
                        <img src="<?= base_url('public/uploads/events/' . $event['images'][0]) ?>" alt="Event Image">
                        </a>
                    </div>
                    <div class="down-content">
                        <div class="date">
                            <h6><?= $month ?> <span><?= $day ?></span></h6>
                        </div>
                          <h4><?= $event['title'] ?></h4></a>
                        <p><?= $event['discription'] ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

</div>
</div>
  </div>
        </div>
  </section>

  <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h3>APPLY FOR BACHELOR DEGREE</h3>
                <p>You are allowed to use this edu meeting CSS template for your school or university or business. You can feel free to modify or edit this layout.</p>
                <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h3>APPLY FOR BACHELOR DEGREE</h3>
                <p>You are not allowed to redistribute the template ZIP file on any other template website. Please contact us for more information.</p>
                <div class="main-button-yellow">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <article class="accordion">
                <div class="accordion-head">
                    <span>About NUPUR NRITYA</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Welcome to <b>Nupur Nritya</b>, a premier institute dedicated to the rich tradition of <b>Bharatanatyam</b> for the past <b>25 years</b>. Our mission is to nurture passionate dancers and promote the timeless beauty of Indian classical dance on both national and international platforms.</p>
                        <p>At <b>Nupur Nritya</b>, we believe that dance is not just an art form but a way of life—a blend of discipline, devotion, and expression. Our structured training program <b>covers theory, technique, expressions (Abhinaya), and stage performance skills,</b> ensuring students develop a deep connection with the art.</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>What we offer</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>✅ <b>Expert Training in Bharatanatyam – </b>Learn from experienced gurus dedicated to preserving and evolving the classical tradition.</p>
                        <p>✅ <b>Performance Opportunities – </b> Students get the chance to showcase their talent at corporate shows, national & international competitions, and local cultural events.</p>
                        <p>✅ <b>Arangetram & Stage Exposure – </b>We guide students through their Arangetram (solo debut performance) and provide opportunities to perform at prestigious festivals and concerts.</p>
                        <p>✅ <b>Holistic Development – </b>Beyond dance, we focus on discipline, confidence building, and cultural enrichment.</p>
                        <p>Over the years, <b>Nupur Nritya</b> has trained numerous dancers who have gone on to win accolades, perform globally, and continue the legacy of Bharatanatyam. Whether you are a beginner or an advanced learner, we invite you to join our <b>Nritya Parivaar</b> (dance family) and experience the magic of movement and expression.</p>
                      </div>
                </div>
            </article>
        </div>
        </div>
      </div>
    </div>
  
  </section>

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>ACHIVEMENTS</h2>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">

          
            <?php foreach ($galleries as $gallary): ?>

              <div class="item">
              <img src="<?=base_url('public/uploads/gallary/'.$gallary->file)?>" alt="no image">
              <div class="down-content">
                <h4></h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                     
                    </div>
                    <div class="col-4">
                       <span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <?php endforeach; ?>
          </div>

            
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>A Few Facts About Our University</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content percentage">
                    <div class="count-digit">94</div>
                    <div class="count-title">Succesed Students</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">126</div>
                    <div class="count-title">Current Teachers</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit">2345</div>
                    <div class="count-title">New Students</div>
                  </div>
                </div> 
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">32</div>
                    <div class="count-title">Awards</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-lg-6 align-self-center">
          <div class="video">
            <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="<?=base_url('public/frontend/images/play-icon.png')?>" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Let's get in touch</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>Vaishali  Solanki
                  +91 94269 85204</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>jiyagorasiya67
                  21@gmail.com</span>
              </li>
              <li>
                <h6>Address</h6>
                <span>78,Aiya Space, 370001, Gujarat</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span>www.meeting.edu</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
    </div>
  </section>

  <!-- Scripts -->
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

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>

<script>
  $(document).ready(function() {
    $('.slider').slick({
      autoplay: true,        // Enable auto-scroll
      autoplaySpeed:2000,   // Time between slides (in ms)
      arrows: false,         // Hide navigation arrows
      dots: true,            // Show navigation dots
      infinite: true,        // Loop through slides
      speed: 500,            // Transition speed
      fade: true,            // Optional: Enable fade effect
      cssEase: 'linear'      // Smooth transition
    });
  });
</script>

</body>

</body>
</html>