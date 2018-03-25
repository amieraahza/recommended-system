<?php 
include 'diatas_menu.php';
$html = new \Aplikasi\Kitab\HTML(); 
echo menupapar2($nav, $this->jenisBorang);
foreach ($this->senarai as $myTable => $row)
{
	if ( count($row)==0 ) echo '';
	else
	{	$tajuk1 = tajuk1(); $tajuk2 = tajuk2();
?>
<!-- Jadual <?php echo $myTable ?> ########################################### -->
<h2><?php echo $myTable ?></h2>
<?php include 'papar_jadual_daftar.php'; ?>
<!-- Jadual <?php echo $myTable ?> ########################################### -->
<?php
	} # if ( count($row)==0 )
} //*/
?><?php

function tajuk1()
{
	return $medan = array('ALL SCHOOL','SSB SECONDARY','SSB PRIMARY','TADIKA MANJARIA');
}
function tajuk2()
{
	return $medan = array('MALE','FEMALE','TOTAL',
		'MALE','FEMALE','TOTAL',
		'MALE','FEMALE','TOTAL',
		'MALE','FEMALE','TOTAL');
}
function menupapar2($nav, $jenisBorang)
{?>
	<ul class="nav nav-pills">
	<li><a href="">
		<i class="fa fa-print fa-2x" aria-hidden="true"></i>
		Print</a></li>
	<li><a href="#">
		<i class="fa fa-refresh fa-2x fa-spin" aria-hidden="true"></i>
		Refresh</a></li>
	</ul>
	<?php 
}