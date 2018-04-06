<?php 
foreach ($this->senarai as $myTable => $row)
{
	if ( count($row)==0 )
		echo '';
	else
	{
?>
<!-- Jadual <?php echo $myTable ?> ########################################### -->
<?php include 'papar_jadual2.1.php'; ?>
<!-- Jadual <?php echo $myTable ?> ########################################### -->
<?php
	} // if ( count($row)==0 )
}
?>