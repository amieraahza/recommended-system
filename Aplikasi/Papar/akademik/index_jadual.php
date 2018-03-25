<?php 
$html = new \Aplikasi\Kitab\HTML_Table();
$ulli = new \Aplikasi\Kitab\HTML_Ulli();
//$classTable = 'excel';
$classTable = 'table table-condensed';
$header = null;

//include 'tab_jadual.php';
?>
<div class="tabbable tabs-top">
	<ul class="nav nav-tabs putih">
	<?php $ulli->paparUl($this->senarai); ?>
	</ul>
<div class="tab-content">
<?php
foreach ($this->senarai as $myTable => $row)
{
	if ( count($row)==0 ) echo '';
	elseif ( $myTable=='Graf1' ) $ulli->paparGraf1($myTable);
	//elseif ( $myTable=='Graf2' )  $ulli->paparGraf2($myTable);
	else
	{
?>
<div class="tab-pane" id="<?php echo $myTable ?>">
	<h2><?php echo $myTable ?></h2>
<!-- Jadual <?php echo $myTable ?> ########################################### --><?php
	echo "\n\t\t\t";
	$html->papar_jadual($row, $myTable, 
	$pilih = '4_1', $classTable, null, 'kontena1'); echo "\n";
?><!-- Jadual <?php echo $myTable ?> ########################################### -->
</div>
<?php
	} # if ( count($row)==0 )
} //*/
?>
</div><!-- class="tab-content" -->
</div><!-- /tabbable -->