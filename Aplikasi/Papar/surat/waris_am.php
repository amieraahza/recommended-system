<?php 
//include 'diatas_menu.php';
$html = new \Aplikasi\Kitab\HTML_Table(); 
# tajuk Utama
$tajuk = gaya_tajuk_jadual($this->tajukUtama);
# isi kandungan
foreach ($this->senarai as $myTable => $row)
{
	if ( count($row)==0 )	echo '';
	else
	{
?>
<h2><?php echo $myTable ?></h2>
<!-- Jadual <?php echo $myTable ?> ########################################### -->
<?php 
	$classTable = 'table'; //$classTable = 'excel';
	$html->papar_jadual($row, $myTable, 
	$pilih = '1_header', $classTable, $tajuk)?>
<!-- Jadual <?php echo $myTable ?> ########################################### -->
<?php
	} # if ( count($row)==0 )
} //*/
?><?php

function gaya_tajuk_jadual($tajukUtama)
{//////////////////////////////////////////////////////////////////////////////////////////////////////////
		$t  = '';
		$t .= '<thead><tr><th>#</th>';
		foreach ($tajukUtama as $kunci => $tajuk):
			$t	.= "\n" . '<th colspan="' . $tajuk['colspan']
				. '">' . $tajuk['label'] . '</th>';
		endforeach;
		$t .= "\n</tr>" . '</thead>';
		
		return $t;
}//////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
			$t	.= '<th colspan="' . $tajuk['colspan']
				. '">' . $tajuk['label'] . '</th>';

*/