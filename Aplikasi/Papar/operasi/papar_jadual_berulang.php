<div class="tabbable tabs-top">
	<ul class="nav nav-tabs putih">
<?php 
foreach ($this->cariApa as $jadual => $baris)
{
	if ( count($baris)==0 ) echo '';
	else
	{	//$mula = ($jadual=='rangka') ? ' class="active"' : ''; ?>
	<li><a href="#<?php echo $jadual ?>" data-toggle="tab">
		<span class="badge badge-success"><?php echo $jadual ?></span>
		<span class="badge"><?php echo count($baris) ?></span>
		</a></li>
<?php
	}
}
?>	</ul>
<div class="tab-content">
<?php 
foreach ($this->cariApa as $myTable => $row)
{
	if ( count($row)==0 ) echo '';
	else
	{
		$mula2 = ($jadual=='rangka13') ? ' active' : ''; ?>
	<div class="tab-pane<?php echo $mula2?>" id="<?php echo $myTable ?>">
<!-- Jadual <?php echo $myTable ?> ########################################### -->
<?php include 'papar_jadual_operasi.php'; ?>
<!-- Jadual <?php echo $myTable ?> ########################################### -->
	</div>
<?php
	} // if ( count($row)==0 )
}
?>
</div><!-- class="tab-content" -->
</div><!-- /tabbable -->