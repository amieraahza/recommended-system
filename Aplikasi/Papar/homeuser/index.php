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
      <h2 class="subs-title text-center"> Find item</h2>
      <div class="subcription-info text-center">
        <form class="subscribe_form" action="<?php echo URL ?>homeuser/search" method="post">
        <input placeholder="Find item" class="email" id="email" name="search" type="text">
        <input class="subscribe" value="Search" type="submit">
        </form>
      </div><!-- class="subcription-info text-center" -->
    </div><!-- end row -->
  </div>
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -
  <div class="container wow fadeInUp delay-03s">
    <div class="row">
      <h2 class="subs-title text-center">Recommended</h2>
      <div class="subcription-info text-center">
        <form class="subscribe_form" action="<?php echo URL ?>homeuser/search" method="post">
        <input placeholder="Find item" class="email" id="email" name="search" type="text">
        <input class="subscribe" value="Search" type="submit">
        </form>
      </div><!-- class="subcription-info text-center" --
    </div><!-- end row -->
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->


<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
<section id="about" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 text-center">
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
        <div class="about-title">
        <h2>About The Website</h2>
        <p> We provide recommendation of online shopping website<p>
        <p> Item are rate based on users interest.<p>
        <p> Recommendation given based on user's rating<p>

<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->        






<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->




<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->




<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
</div>
</div>
</div>
</section>
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
</div>

<?php include 'search_item/file_footer.php'; ?>