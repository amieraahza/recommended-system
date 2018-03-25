<?php 
include 'diatas_menu.php';
/*echo '<pre>';
echo '<br>$this->medanbaru:'; print_r($this->medanbaru);
echo '</pre>'; //*/
$panggilFormat = new \Aplikasi\Kitab\HTML();
?>
<form method="POST" action="<?php echo URL ?>pelajar/semakDaftarBaru" class="form-horizontal">
<!-- mula - input tengah ------------------------------------------------------------------------------------------- -->
<div class="form-group">
	<div class="col-sm-8">
		<div class="input-group input-group-lg">
		<span class="input-group-addon">Contoh Borang Bersama Input</span>
		</div>
	</div>
</div>
<?php foreach ($this->medanbaru as $namaMedan => $senarai): ?><div class="form-group">
	<label for="inputTajuk" class="col-sm-2 control-label"><?php echo $senarai['nama_label'] ?></label>
	<div class="col-sm-6">
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --><?php
	$tab = "\n\t\t";
	echo $tab . $panggilFormat->tambahIkutType($this->jadual,$namaMedan,$senarai);
	echo "\n";
?><!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
	</div><!-- / class="col-sm-6" -->
</div><!-- / class="form-group" -->
<?php endforeach; ?>
<div class="form-group">
	<div class="col-sm-8">
		<div class="input-group input-group-lg">
		<span class="input-group-addon">Contoh Borang Bersama Input Submit
			<input type="hidden" name="jadual" value="@jadual">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary btn-large">
			<input type="reset" name="Reset" value="Reset" class="btn btn-default btn-large">
		</span>
		</div>	
	</div>
</div>
<!-- tamat - input tengah ------------------------------------------------------------------------------------------- -->
</form>
