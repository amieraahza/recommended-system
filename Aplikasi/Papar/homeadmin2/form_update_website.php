<?php $pautan = URL . 'sumber/rangka-dawai/startbootstrap-shop-item/';
\Aplikasi\Kitab\Sesi::init();
//echo '<pre>'; print_r($_SESSION); echo '</pre>';
include 'include/diatas.php'; 
include 'include/menu_atas.php';
?>

<!-- Page Content -->
<div class="container">
<div class="row">

  <div class="col-lg-3"><?php include 'include/menu_right.php'; ?></div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">
      <br><br>
<!-- ######################################################################################################## -->
<?php //include 'include/list_table.php'; ?>
<!-- ######################################################################################################## -->
    <div class="card card-outline-secondary my-4">
      <div class="card-header">Update Website</div>
    <?php  include 'include/papar_update.php'; ?>
      
    </div>
<!-- ######################################################################################################## -->


    <!-- div class="card card-outline-secondary my-4">
      <div class="card-header">Product Reviews</div>
      
    </div>
!-- /.card -->

  </div>
 <!-- /.col-lg-9 -->

</div>

</div>
<!-- /.container -->
<?php include 'include/dibawah.php'; ?>

    