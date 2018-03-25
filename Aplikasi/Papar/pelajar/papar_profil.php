<?php 
//include 'diatas_menu.php';
$html = new \Aplikasi\Kitab\HTML(); 
//$classTable = 'excel';
$classTable = 'table table-condensed';
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
?><!-- ********************************************************************* -->
				</div>
				<div class="col-xs-6 col-sm-6">
	<!-- ********************************************************************* --><?php
	echo "\n\t";
	$html->papar_jadual($this->senarai['bhgn2'], 'bhgn2',
	$pilih = 3 $classTable); echo "\n\t";
?><!-- ********************************************************************* -->
				</div>
			</div>
		</div>
	</div>
<!-- ********************************************************************* -->
<!-- ********************************************************************* -->
	<div class="row">
		<div class="col-sm-8">
			<strong><?php echo $this->tajukbesar2; ?></strong>
			<div class="row">
				<div class="col-xs-6 col-sm-6">
	<!-- ********************************************************************* --><?php
	echo "\n\t";
	$html->papar_jadual($this->senarai['bhgn3'], 'bhgn3', 
	$pilih = 3, $classTable); echo "\n\t";
?><!-- ********************************************************************* -->
				</div>
				<div class="col-xs-6 col-sm-6">
	<!-- ********************************************************************* --><?php
	echo "\n\t";
	$html->papar_jadual($this->senarai['bhgn4'], 'bhgn4',
	$pilih = 3, $classTable); echo "\n\t";
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
	echo "\n\t";
	$html->papar_jadual($this->senarai['bhgn5'], 'bhgn5',
	$pilih = 3, $classTable); echo "\n\t";
?><!-- ********************************************************************* -->
				</div>
				<div class="col-xs-6 col-sm-6">
					<strong><?php echo $this->tajukbesar4; ?></strong>
	<!-- ********************************************************************* --><?php
	echo "\n\t";
	$html->papar_jadual($this->senarai['bhgn6'], 'bhgn6', 
	$pilih = 3, $classTable); echo "\n\t";
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
