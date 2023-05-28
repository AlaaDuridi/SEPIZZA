<!doctype html>
<html lang="en" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>About Us</title>
    <link rel = "icon" href ="img/logo.jpg" type = "image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    

  </head>
  <body >
  <?php include 'partials/_dbconnect.php';?>
  <?php include 'partials/_nav.php';?>
  
      <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/slide/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>SEPIZZA</span></h2>
                <a href="index.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/slide/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown mb-0">Our Mission</h2>
                <p class="animate__animated animate__fadeInUp">To be number one</p>
                <a href="index.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>
          <!-- Slide 3 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/slide/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown mb-0">SE Project: Alaa Duridi & Tasbeeh Naser</h2><p><a href="https://github.com/AlaaDuridi" target="_blank">@alaaduridi</a></p>
                <a href="index.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-thin-double-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-thin-double-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2 style = "color: #dfae77">About Us</h2>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 style = "color: #dfae77">Welcome to <strong>SEPIZZA</strong></h3>
            <h3 style = "color: #dfae77"><strong>The Worldwide Leader in Pizza Delivery</strong></h3>
            <p class="font-italic">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <div class="skills-content">
              <p style = "color: #dfae77"><b>Rating: </b></p>
              <div class="progress" style = "color: #dfae77">
                <span class="skill" style = "color: #dfae77">5 star <i class="val">93%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill" style = "color: #dfae77">4 star <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill" style = "color: #dfae77">3 star <i class="val">30%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill" style = "color: #dfae77">2 star <i class="val">5%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill" style = "color: #dfae77">1 star <i class="val">0%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up" style = "color: #dfae77">232</span>
              <p><strong>Happy Customers</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up" style = "color: #dfae77">121</span>
              <p><strong>Items</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up" style = "color: #dfae77">1,463</span>
              <p><strong>Hours Of Support</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up"style = "color: #dfae77">15</span>
              <p><strong>Hard Workers</strong></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team ">
      <div class="container">

        <div class="section-title">
          <h2 style = "color: #dfae77">Our Team</h2>
        </div>

        <div class="row" style="padding-left: 228px;">

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
            <div class="member">
              <img src="assets/img/team/7.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Alaa Duridi</h4>
                </div>
                <div class="social">
                  <a href="https://twitter.com/morpho_and" target="_blank"><i class="icofont-twitter"></i></a>
                  <a href="https://github.com/AlaaDuridi" target="_blank"><i class="fab fa-github"></i></a>
                  <a href="https://www.linkedin.com/in/alaa-duridi-91743a203/" target="_blank"><i class="icofont-linkedin" target="_blank"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="member">
              <img src="assets/img/team/9.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Tasbeeh Naser</h4>
                </div>
                <div class="social">
                  <a href="https://twitter.com/morpho_and"><i class="icofont-twitter" target="_blank"></i></a>
                  <a href="https://github.com/TasbeehNaser0" target="_blank"><i class="fab fa-github"></i></a>
                  <a href="https://www.linkedin.com/in/alaa-duridi-91743a203/"><i class="icofont-linkedin" target="_blank"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="member">
              <img src="assets/img/team/7.jpg" class="img-fluid" alt="" >
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Noor Duridi</h4>
                </div>
                <div class="social">
                  <a href="https://twitter.com/morpho_and"><i class="icofont-twitter" target="_blank"></i></a>
                  <a href="https://github.com/AlaaDuridi" target="_blank"><i class="fab fa-github"></i></a>
                  <a href="https://www.linkedin.com/in/alaa-duridi-91743a203/"><i class="icofont-linkedin" target="_blank"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Our Team Section -->
  </main>

  <?php include 'partials/_footer.php';?> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


  </body>
</html>
