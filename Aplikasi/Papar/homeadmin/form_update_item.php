<?php include 'include/header.php'; ?>
<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Item</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<?php include 'menu_up.php' ?>

<!--sidebar-menu-->

<?php include 'menu_left.php' ?>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
  <a href="#" class="tip-bottom">Form</a> <a href="#" class="current">Item</a> </div>
  <h1>Item Update</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <!-- div class="span6">
      <div class="widget-box">
        <div class="widget-title">
          <h5>Websites List</h5>
        </div><!-- tutup class widget title --
        <div class="widget-content nopadding">
          <?php 
/*echo 'namatable:' . $this->myTable;
echo '<pre>namamedan:'; print_r($this->medan); echo '</pre>';
echo '<pre>$this->senarai:'; print_r($this->senarai); echo '</pre>';*/
$classTable[] = "table table-bordered table-striped";
$classTable[] = "table table-bordered table-striped with-check";
$classTable[] = "table table-bordered data-table";
?>
<!-- mula - baca jadual berulang ///////////////////////////////////////////////////////////////////////// --
<?php 
/*if (isset($this->senarai) )
  include 'papar_jadual0.php'; */
?>
<!-- tamat - baca jadual berulang //////////////////////////////////////////////////////////////////////// --
        </div><!-- tutup class widget-content noppading --
      </div><!-- tutup class widget-box --
    </div><!-- tutup class span6 -->
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Item Update</h5>
        </div>
        <div class="widget-content nopadding">

        <?php include 'papar_update.php' ?>
      <!-- butang action -->

      </div><!-- class="widget-content nopadding" -->
    </div><!-- div class="widget-box -->

    </div><!-- close class="span6" -->
  </div>
  
</div></div>
<?php include 'include/footer2.php'; ?>