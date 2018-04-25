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