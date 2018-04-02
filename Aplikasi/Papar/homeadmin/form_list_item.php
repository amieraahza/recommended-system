<?php include 'include/header.php'; ?>
<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Website</a></h1>
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
  <a href="#" class="tip-bottom">Form</a> <a href="#" class="current">Website</a> </div>
  <h1>Website</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title">
          <h5>Websites List</h5>
        </div><!-- tutup class widget title -->
        <div class="widget-content nopadding">
          <?php 
/*echo 'namatable:' . $this->myTable;
echo '<pre>namamedan:'; print_r($this->medan); echo '</pre>';
echo '<pre>$this->senarai:'; print_r($this->senarai); echo '</pre>';*/
$classTable[] = "table table-bordered table-striped";
$classTable[] = "table table-bordered table-striped with-check";
$classTable[] = "table table-bordered data-table";
?>
<!-- mula - baca jadual berulang ///////////////////////////////////////////////////////////////////////// -->
<?php 
if (isset($this->senarai) )
  include 'papar_jadual0.php'; 
?>
<!-- tamat - baca jadual berulang //////////////////////////////////////////////////////////////////////// -->
        </div><!-- tutup class widget-content noppading -->
      </div><!-- tutup class widget-box -->
    </div><!-- tutup class span6 -->
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Website</h5>
        </div>
        <div class="widget-content nopadding">
        <form class="form-horizontal" method="POST" action="<?php 
        echo URL ?>homeadmin/addform/<?php echo $this->myTable ?>">
      <?php
      //echo 'namatable:' . $this->myTable;
      //echo '<pre>namamedan:'; print_r($this->medan);
      //echo '</pre>';

      foreach ($this->medan as $kunci =>$nilai) 
      {
?>
        <div class="control-group">
        <label class="control-label"><?php echo $nilai ?></label>
        <div class="controls">
          <input type="text" name="<?php echo $this->myTable 
          . '[0][' . $nilai . ']' ?>" class="input-big span11">
        </div>
        </div>
<?php 
      }
      ?>

      <!-- butang action -->
      <br><br>
        <div class="form-actions">
          <button type="submit" class="btn btn-success">Save</button>
          <!-- button type="submit" class="btn btn-primary">Reset</button>
          <button type="submit" class="btn btn-info">Edit</button>
          <button type="submit" class="btn btn-danger">Cancel</button -->
        </div>
      </form>
      </div><!-- class="widget-content nopadding" -->
    </div><!-- div class="widget-box -->

    </div><!-- close class="span6" -->
  </div>
  
</div></div>
<?php include 'include/footer2.php'; ?>