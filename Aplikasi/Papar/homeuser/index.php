<?php $pautan = URL . 'sumber/rangka-dawai/homeuser/';
\Aplikasi\Kitab\Sesi::init();
//echo '<pre>'; print_r($_SESSION); echo '</pre>';
?>
<?php include 'search_item/file_header.php'; ?>
<?php include 'search_item/file_menubar.php'; ?>
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
<div class="content">
  <!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
  <div class="container wow fadeInUp delay-03s">
    <div class="row">
      <h2 class="subs-title text-center">Filter item</h2>
      <div class="subcription-info text-center">
        <form class="subscribe_form" action="<?php echo URL ?>homeuser/search" method="post">
        <input placeholder="Find item" class="email" id="email" name="search" type="text">
        <input class="subscribe" value="Search" type="submit">
        </form>
      </div><!-- class="subcription-info text-center" -->
    </div><!-- end row -->
  </div>
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
  <div class="container wow fadeInUp delay-03s">
    <div class="row">
      <h2 class="subs-title text-center">Recommended</h2>
      <div class="subcription-info text-center">
        <form class="subscribe_form" action="<?php echo URL ?>homeuser/search" method="post">
        <input placeholder="Find item" class="email" id="email" name="search" type="text">
        <input class="subscribe" value="Search" type="submit">
        </form>
      </div><!-- class="subcription-info text-center" -->
    </div><!-- end row -->
  </div>
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
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

<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
<section id="about" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 text-center">
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
        <div class="about-title">
        <h2>About Us</h2>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium 
        </br>voluptatum deleniti atque corrupti quos dolores e</p>
        </div>
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->        
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-02s">
        <div class="img"><i class="fa fa-refresh"></i></div>
        <h3 class="abt-hd">Our process</h3>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti 
          atque corrupti quos dolores</p>
        </div>
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
        <div class="img"><i class="fa fa-eye"></i></div>
        <h3 class="abt-hd">Our Vision</h3>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
          atque corrupti quos dolores</p>
        </div>
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-06s">
        <div class="img"><i class="fa fa-cogs"></i></div>
        <h3 class="abt-hd">Our Approach</h3>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
         atque corrupti quos dolores</p>
        </div>
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-08s">
        <div class="img"><i class="fa fa-dot-circle-o"></i></div>
        <h3 class="abt-hd">Our Objective</h3>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
          atque corrupti quos dolores</p>
        </div>
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
</div>
</div>
</div>
</section>
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
</div>

<?php include 'search_item/file_footer.php'; ?>