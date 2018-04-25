<form class="form-horizontal" method="POST" action="<?php 
        echo URL ?>homeadmin2/addform/<?php echo $this->myTable ?>">
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