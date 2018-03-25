<?php //include 'diatas.php'; ?>
<div class="container">

<h3 align="center"><strong><?php echo $this->senarai['sekolah']['nama'] ?></strong>
<br><?php echo $this->senarai['sekolah']['syarikat'] ?>
<br><?php echo $this->senarai['sekolah']['alamat1_syarikat'] ?>
<br><?php echo $this->senarai['sekolah']['alamat2_syarikat'] ?>
<br>Tel: <?php echo $this->senarai['sekolah']['notel_syarikat'] 
?> Fax : <?php echo $this->senarai['sekolah']['nofax_syarikat'] ?>
<br><?php echo $this->senarai['sekolah']['website_syarikat'] ?></h3>

<br><em>Receive From:</em>
<br><strong><?php echo $this->senarai['pelajar']['nama'] ?></strong>,
<br>Class &amp; Matric: <br> <strong><?php echo $this->senarai['pelajar']['darjah']
	. ' - ' . $this->senarai['pelajar']['noMatrik'] ?></strong> 
<br>Address: <br><?php echo $this->senarai['pelajar']['alamat']
	. '<br>' . $this->senarai['pelajar']['poskod']
	. '&nbsp;' . $this->senarai['pelajar']['bandar'] ?><br><br>

<div><?php
	$html = new \Aplikasi\Kitab\HTML_Table();
	$header = $idTable = '';
	$myTable = $classTable = 'table'; ?>
<!-- Jadual <?php echo $myTable ?> ########################################### --><?php
	echo "\n\t\t\t";
	$html->papar_jadual($this->senarai['yuran'], $myTable, 
	$pilih = '1_khas', $classTable, $header, $idTable); echo "\n";
?><!-- Jadual <?php echo $myTable ?> ########################################### -->

</div>

<br> * All fees paid are not refundable
<br> * failure to give 3 months written notece of withdrawal will incure

</div><!-- class="container" -->
<?php //include 'dibawah.php'; ?>