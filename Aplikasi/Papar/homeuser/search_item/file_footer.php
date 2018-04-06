<?php echo "\n" ?>
<div class="container">
<?php 
$listData = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach($listData as $key => $val):
?>
<!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#my<?php echo $val ?>">
  my<?php echo $val ?>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="my<?php echo $val ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">My<?php echo $val ?></h4>
        </div>
        <div class="modal-body">
        ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
<?php 
endforeach;
?>
<!-- -------------------------------------------------------------------------------------------------------------------- -->
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
  
<?php include 'file_jquery.php' ?>

</body>

</html>