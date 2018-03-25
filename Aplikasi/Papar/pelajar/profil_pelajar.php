<?php 
$html = new \Aplikasi\Kitab\HTML(); 
include 'profil_pelajar_menu.php';
echo menupapar($nav, $this->jenisBorang);
foreach ($this->senarai as $myTable => $row)
{
	if ( count($row)==0 )	echo '';
	else
	{
?>
<!-- Jadual <?php echo $myTable ?> ########################################### -->
<h2><?php echo $myTable ?></h2>
<?php include 'papar_jadual_link.php'; ?>
<!-- Jadual <?php echo $myTable ?> ########################################### -->
<?php
	} # if ( count($row)==0 )
} //*/
?>