<?php 
include 'diatas_menu.php';
$html = new \Aplikasi\Kitab\HTML(); 
echo menupapar($nav, $this->jenisBorang);
foreach ($this->senarai as $myTable => $row)
{
	if ( count($row)==0 )	echo '';
	else
	{
?>
<!-- Jadual <?php echo $myTable ?> ########################################### -->
<h2><?php echo $myTable ?></h2>
<?php include 'papar_jadual_tambah.php'; ?>
<!-- Jadual <?php echo $myTable ?> ########################################### -->
<?php
	} # if ( count($row)==0 )
} //*/
?><?php

function menupapar($nav, $jenisBorang)
{?>
	<ul class="nav nav-pills">
	<li><a href="#">
		<i class="fa fa-file-o fa-2x" aria-hidden="true"></i>
		New</a></li>
	<li><a href="#">
		<i class="fa fa-trash fa-2x" aria-hidden="true"></i>
		Delete</a></li>
	<li><a href="<?php echo URL ?>pelajar/laporanDaftar">
		<i class="fa fa-print fa-2x" aria-hidden="true"></i>
		Print</a></li>
	<li><a href="<?php echo URL ?>pelajar/laporanDaftar">
		<i class="fa fa-table fa-2x" aria-hidden="true"></i>
		Table</a></li>
	<li><a href="<?php echo URL ?>pelajar/paparBiodata">
		<i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i>
		Excel</a></li>
	<li><a href="<?php echo URL ?>surat/buatsurat">
		<i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>
		Letter</a></li>
	<li><a href="<?php echo URL ?>surat/tawaran/sms">
		<i class="fa fa-comments fa-2x" aria-hidden="true"></i>
		Sms</a></li>
	<li><a href="<?php echo URL ?>surat/tawaran/email">
		<i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
		Email</a></li>
	<li><a href="#">
		<i class="fa fa-refresh fa-2x fa-spin" aria-hidden="true"></i>
		Refresh</a></li>
	</ul>
	<?php 
	if (isset($jenisBorang) && $jenisBorang=='papar'):
		include 'drop_menu.php';
	endif;
}
?>
