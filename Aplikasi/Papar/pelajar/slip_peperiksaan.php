<?php 
//include 'diatas_menu.php';
$html = new \Aplikasi\Kitab\HTML_Table();
//$classTable = 'excel';
$classTable = 'table table-condensed';
$header = null;
?>
<div class="container">
<!-- ********************************************************************* -->
	<div class="row">
		<div class="col-sm-8">
			<strong><?php echo $this->tajukbesar1; ?></strong>
			<div class="row">
				<div class="col-xs-6 col-sm-6">
	<!-- ********************************************************************* --><?php
	echo "\n\t\t";
	$html->papar_jadual($this->senarai['bhgn1'], 'bhgn1', 
	$pilih = 3, $classTable); echo "\n\t";
?>	<!-- ********************************************************************* -->
				</div>
				<div class="col-xs-6 col-sm-6">
	<!-- ********************************************************************* --><?php
	echo "\n\t\t";
	$html->papar_jadual($this->senarai['bhgn2'], 'bhgn2',
	$pilih = 3, $classTable); echo "\n\t";
?><!-- ********************************************************************* -->
				</div>
			</div>
		</div>
	</div>
<!-- ********************************************************************* -->
<!-- ********************************************************************* -->
	<div class="row">
		<div class="col-sm-12">
			<strong><?php echo $this->tajukbesar2; ?></strong>
			<div class="row">
				<div class="col-xs-12 col-sm-12">
	<!-- ********************************************************************* --><?php
	echo "\n\t\t\t";
	$html->papar_jadual($this->senarai['subject'], 'subject', 
	$pilih = '4_1', $classTable); echo "\n\t";
?><!-- ********************************************************************* -->
				</div>
			</div>
		</div>
	</div>
<!-- ********************************************************************* -->
<!-- ********************************************************************* -->
	<div class="row">
		<div class="col-sm-8">
			<div class="row">
				<div class="col-xs-6 col-sm-6">
					<strong><?php echo $this->tajukbesar3; ?></strong>
	<!-- ********************************************************************* --><?php
	echo "\n\t\t";
	$html->papar_jadual($this->senarai['Summary'], 'Summary',
	$pilih = 3, $classTable); echo "\n\t";
?><!-- ********************************************************************* -->
				</div>
				<div class="col-xs-6 col-sm-6">
					<strong><?php echo $this->tajukbesar4; ?></strong>
	<!-- ********************************************************************* --><?php
	echo "\n\t\t\t";
	$html->papar_jadual($this->senarai['Grade Referennce'], 'Grade Referennce', 
	$pilih = '4_1', $classTable); echo "\n\t";
?><!-- ********************************************************************* -->
				</div>
			</div>
		</div>
	</div>
<!-- ********************************************************************* -->
</div><!-- / class="container" -->
<?php
/*# Semak data $this->senarai
echo '<pre>$this->senarai:<br>'; 
print_r($this->senarai);
echo '</pre>|';//*/
