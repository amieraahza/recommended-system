<?php 
if(!isset($this->senarai[$this->myTable][0]['website_id']))
  echo 'data kosong juga<br>';
else # $this->carian=='ada' - mula 
{   $mencari2 = URL . 'homeadmin/updateSave/' . $this->myTable . '/' . $this->cariID; ?>
  <form method="POST" action="<?php echo $mencari2 ?>"
  class="form-horizontal"><?php
  $html = new Aplikasi\Kitab\Html_Input;
  foreach ($this->senarai as $myTable => $row)
  {# mula ulang $row
    for ($kira=0; $kira < count($row); $kira++)
    {# print the data row // <button type="button" class="btn btn-info">Info</button>
    #----------------------------------------------------------------------------
foreach ($row[$kira] as $key=>$data): echo "\n\t\t";
      ?><div class="form-group">
      <label for="input<?php echo $key 
      ?>" class="col-sm-2 control-label"><?php echo $key ?></label>
      <div class="col-sm-8">
      <?php echo $html->updateInput($this->myTable,$kira, $key, $data);
      echo "\n\t\t\t"; ?></div>
    </div><?php 
    endforeach;
    }# final print the data row
    #----------------------------------------------------------------------------
  }# tamat ulang $row
  echo "\n\t\t";
  if(isset($this->senarai[$this->myTable][0]['website_id'])):
  ?><div class="form-group">
      <label for="inputSubmit" class="col-sm-3 control-label"><?=$this->myTable?></label>
      <div class="col-sm-6">
        <input type="hidden" name="jadual" value="<?=$this->myTable?>">
        <input type="submit" name="Simpan" value="Simpan" class="btn btn-primary btn-large">
        <?php //echo $mencari2 ?>
      </div>
    </div>  
  </form>
  <hr><?php 
  endif;
} # $this->carian=='ada' - tamat 
//*/
?>