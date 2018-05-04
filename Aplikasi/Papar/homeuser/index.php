<?php $pautan = URL . 'sumber/rangka-dawai/homeuser/';
\Aplikasi\Kitab\Sesi::init();
//echo '<pre>'; print_r($_SESSION); echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maundy | Comming Soon Page</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <link href='https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,400italic,300italic,300|Raleway:300,400,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo FONTAWESOME ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo BOOTSTRAPCSS ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $pautan ?>css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $pautan?>css/style.css">
  <!-- =======================================================
    Theme Name: Maundy
    Theme URL: https://bootstrapmade.com/maundy-free-coming-soon-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

<!-- mula - nav atas sekali ---------------------------------------------------------------------------------------------- -->
<nav class="navbar navbar-inverse" role="navigation">
<!-- div class="navbar navbar-custom" role="navigation" -->
  <div class="container-fluid">
    <!-- menu kiri mula -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#anjung">Home</a>
      <a class="navbar-brand" href="<?php echo URL ?>homeuser/recommendWeb">Recommend</a>
      <a class="navbar-brand" href="<?php echo URL ?>homeuser/logout">
        <span class="glyphicon glyphicon-off"></span>Logout</a>
    </div>
    <!-- menu kiri tamat -->
    <!-- menu kanan mula -->
    <div class="navbar-collapse collapse">
    </div>
    <!-- menu kanan tamat -->
  </div>
</nav>
<!-- tamat - nav atas sekali ---------------------------------------------------------------------------------------------- -->

  <div class="content">
    <div class="container wow fadeInUp delay-03s">
      <div class="row">
        <h2 class="subs-title text-center">Search your favourite item here !</h2>
        <div class="subcription-info text-center">
          <form class="subscribe_form" action="<?php echo URL ?>homeuser/search" method="post">
            <input placeholder="Enter your email..." class="email" id="email" name="search" type="text">
            <input class="subscribe" value="Search" type="submit">
          </form>
          <p class="sub-p">We Promise to never span you.</p>
        </div>
      </div><!-- end row -->
    </div>
    <section>
      <div class="container">
        <div class="row bort text-center">
          <div class="social">
            <ul>
              <li><a href=""><i class="fa fa-facebook"></i></a></li>
              <li><a href=""><i class="fa fa-twitter"></i></a></li>
              <li><a href=""><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 text-center">
            <div class="about-title">
              <h2>About Us</h2>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </br>voluptatum deleniti atque corrupti quos dolores e</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-02s">
              <div class="img">
                <i class="fa fa-refresh"></i>
              </div>
              <h3 class="abt-hd">Our process</h3>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
              <div class="img">
                <i class="fa fa-eye"></i>
              </div>
              <h3 class="abt-hd">Our Vision</h3>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-06s">
              <div class="img">
                <i class="fa fa-cogs"></i>
              </div>
              <h3 class="abt-hd">Our Approach</h3>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-08s">
              <div class="img">
                <i class="fa fa-dot-circle-o"></i>
              </div>
              <h3 class="abt-hd">Our Objective</h3>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


  <footer class="footer">
    <div class="container">
      <div class="row bort">

        <div class="copyright">
          © Copyright Maundy Theme. All rights reserved.
          <div class="credits">
            <!--
              All the links in the footer should remain intact. 
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Maundy
            -->
            Bootstrap theme designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
