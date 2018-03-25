<?php
function menupapar($nav)
{?>
	<ul class="nav nav-pills">
	<li><a href="#">
		<i class="fa fa-trash fa-2x" aria-hidden="true"></i>
		Delete</a></li>
	<li><a href="#">
		<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
		Edit</a></li>
	<li><a href="#">
		<i class="fa fa-refresh fa-2x fa-spin" aria-hidden="true"></i>
		Refresh</a></li>
	<li><a href="<?php echo URL ?>pelajar/laporanDaftar">
		<i class="fa fa-print fa-2x" aria-hidden="true"></i>
		Print</a></li>
	<li><a href="<?php echo URL ?>pelajar/laporanDaftar">
		<i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i>
		Pdf</a></li>
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
	<li><a href="<?php echo URL ?>surat/tawaran/email">
		<i class="fa fa-times-circle fa-2x" aria-hidden="true"></i>
		Close</a></li>
	</ul>
	<?php 
}
?>