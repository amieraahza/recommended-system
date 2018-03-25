<div class="container">
<hr><h1>Ruangtamu - Untuk Pelawat</h1><hr>
<?php include 'menu_teks.php'; ?>
<div class="hero-unit">
<?php jadual($this->senarai); ?>

</div><!-- / class="hero-unit" -->
</div><!-- / class="container" -->

<?php
function jadual($senarai)
{
	foreach ($senarai as $myTable => $row)
	{
		if ( count($row)==0 )	echo '';
		else
		{
	?>
	<!-- Jadual <?php echo $myTable ?> ########################################### -->
	<h2><?php echo $myTable ?></h2>
	<?php include 'papar_jadual_modul.php'; ?>
	<!-- Jadual <?php echo $myTable ?> ########################################### -->
	<?php
		} # if ( count($row)==0 )
	} //*/
}
