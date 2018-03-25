<?php
# set pembolehubah
$target = null; //$target = ' target="_blank"';
# butang / icon
$birutua = 'btn btn-primary btn-mini';
$birumuda = 'btn btn-info btn-mini';
$merah = 'btn btn-danger btn-mini';
$cetakIcon = '<i class="fa fa-print fa-2x pull-left"></i> ';
$butangHantar = 'cari apa?';
?>
<div class="container"><?php echo (!isset($cetak)) ? null : "\r$cetak" ?>

	<div align="center"><form method="GET" action="<?=$mencari?>" class="form-inline" autocomplete="off">
	<?php //echo $mencari . '<br>' . "\r" ?>
	<div class="form-group"><div class="input-group">
		<input type="text" name="cari" class="form-control" autofocus
		placeholder="Contoh : 000000123456"
		id="inputString" onkeyup="lookup(this.value);" onblur="fill();">
		<span class="input-group-addon">
		<input type="submit" value="<?=$butangHantar?>">
		</span>
	</div></div>
	<div class="suggestionsBox" id="suggestions" style="display: none; " >
		<div class="suggestionList" id="autoSuggestionsList">&nbsp;</div>
	</div>
	</form></div><br>

</div><!-- / class="container" -->
<!-- mula - baca jadual berulang ///////////////////////////////////////////////////////////////////////// -->
<?php 
if (isset($this->cariApa) )
	include 'papar_jadual_berulang.php'; 
?>
<!-- tamat - baca jadual berulang //////////////////////////////////////////////////////////////////////// -->