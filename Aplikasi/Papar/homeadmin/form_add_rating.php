<?php include 'include/header.php'; ?>
<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Rating</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>



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
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Website Info</h5>
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