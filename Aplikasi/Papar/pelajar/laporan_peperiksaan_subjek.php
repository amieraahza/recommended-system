<?php 
//include 'diatas_menu.php';
$html = new \Aplikasi\Kitab\HTML_Table();
//$classTable = 'excel';
$classTable = 'table table-condensed';
$header = null;
?>

<div class="tabbable tabs-top">
	<ul class="nav nav-tabs putih">
		<li><a href="#kelas" data-toggle="tab">
		<span class="badge badge-success">kelas</span>
		</a></li>
		<li><a href="#graf" data-toggle="tab">
		<span class="badge badge-success">graf</span>
		</a></li>
<?php $bilGraf = 6; for($mula = 2; $mula <= $bilGraf; $mula++): ?>
		<li><a href="#graf<?php echo $mula ?>" data-toggle="tab">
		<span class="badge badge-success">graf<?php echo $mula ?></span>
		</a></li>
<?php endfor; ?>
	</ul>
	<div class="tab-content">
		<div class="tab-pane" id="kelas">
<!-- ********************************************************************* -->
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<div class="row">
				<div class="col-xs-6 col-sm-6">
	<!-- ********************************************************************* --><?php
	echo "\n\t\t";
	$html->papar_jadual($this->senarai['kelas'], 'Kelas', 
	$pilih = 1, $classTable, null, 'kelas'); echo "\n\t";
?>	<!-- ********************************************************************* -->
				</div>
				<div class="col-xs-6 col-sm-6">
	<!-- ********************************************************************* --><?php
	echo "\n\t\t";
	$html->papar_jadual($this->senarai['datatable'], 'datatable',
	$pilih = '4_1', $classTable, null, 'datatable'); echo "\n\t";
?><!-- ********************************************************************* -->
				</div>
			</div>
		</div>
	</div>
</div><!-- / class="container" -->
<!-- ********************************************************************* -->
		</div>
		<div class="tab-pane" id="graf">
<!-- ********************************************************************* -->
<div id="container" style="min-width: 500px; height: 500px; margin: 0 auto"></div>
<!-- ********************************************************************* -->
		</div>
<?php for($mula = 2; $mula <= $bilGraf; $mula++): ?>
		<div class="tab-pane" id="graf<?php echo $mula ?>">
<!-- ********************************************************************* -->
<div id="kontena<?php echo $mula ?>" style="min-width: 500px; height: 500px; margin: 0 auto"></div>
<!-- ********************************************************************* -->
		</div>
<?php endfor; ?>
	</div><!-- class="tab-content" -->
</div><!-- /tabbable -->
<?php
/*# Semak data $this->senarai
echo '<pre>$this->senarai:<br>';
print_r($this->senarai);
echo '</pre>|';//*/
