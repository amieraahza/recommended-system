<style>
.floating-menu 
{
	padding: 5px;
	width: 300px;
	z-index: 100;
	position: fixed;
	bottom: 0px;
	right: 0px;
}
</style>
<?php 
/*echo '<pre>';
echo '$this->akaun:<br>'; print_r($this->akaun); 
echo '<br>$this->carian:'; print_r($this->carian); 
echo '<br>$this->cariID:'; print_r($this->cariID); 
echo '</pre>'; //*/

if(isset($this->akaun['kes'][0]['id'])):
	# set pembolehubah
	$mencari = URL . 'akaun/ubahCari/';
	$carian = $this->cariID;
	$mesej = ''; //$carian .' ada dalam ' . $this->_jadual;
	/*?><nav class="floating-menu">
	<p class="bg-primary">
	<?php echo "\n&nbsp;" . $namaSyarikat ?>
	</p></nav>
	<?php //*/
else: # set pembolehubah
	$mencari = URL . 'akaun/ubahCari/';
	$carian = null;
	$mesej = '::' . $this->cariID . ' tiada dalam ' . $this->_jadual;
endif;
//echo '<div align="center">' . $mencari . '</div>'; ?>
<div align="center">
<form method="GET" action="<?=$mencari;?>" class="form-inline" autocomplete="off">
<div class="form-group">
	<h1>Ubah Data<?=$mesej?>
	<div class="input-group">
		<input type="text" name="cari" class="form-control" value="<?=$carian;?>"
		id="inputString" onkeyup="lookup(this.value);" onblur="fill();">
		<span class="input-group-addon">
			<input type="submit" value="mencari">
		</span>
	</div>
	</h1>
</div>
<div class="suggestionsBox" id="suggestions" style="display: none;">
	<div class="suggestionList" id="autoSuggestionsList">&nbsp;</div>
</div>
</form></div><br>
<?php 
if ($this->carian=='[tiada id diisi]')
    echo 'data kosong<br>';
elseif(!isset($this->akaun['kes'][0]['id']))
	echo 'data kosong juga<br>';
else # $this->carian=='ada' - mula 
{ 	$mencari2 = URL . 'akaun/ubahSimpan/' . $this->cariID; ?>
	<form method="POST" action="<?php echo $mencari2 ?>"
	class="form-horizontal"><?php
	$html = new Aplikasi\Kitab\Html;
	foreach ($this->akaun as $myTable => $row)
	{# mula ulang $row
		for ($kira=0; $kira < count($row); $kira++)
		{# print the data row -------------------------------------------------------
		foreach ($row[$kira] as $key=>$data): echo "\n\t\t";
			?><div class="form-group">
			<label for="input<?php echo $key 
			?>" class="col-sm-2 control-label"><?php echo $key ?></label>
			<div class="col-sm-6">
			<?php echo $html->cariInput(null,$this->_jadual,$kira, $key, $data);
			echo "\n\t\t\t"; ?></div>
		</div><?php 
		endforeach;
		}# final print the data row -------------------------------------------------
	}# tamat ulang $row
	echo "\n\t\t";
	if(isset($this->akaun['kes'][0]['id'])):
		butangHantar($this->_jadual, $this->cariID);
	endif;
	?></form><hr><?php 	
} # $this->carian=='ada' - tamat 
//*/
function butangHantar($_jadual, $cariID)
{
	$cetakSebutHarga = URL . 'akaun/cetakSebutHarga/' . $_jadual . '/' . $cariID;
	$cetakInvois = URL . 'akaun/cetakInvois/' . $_jadual . '/' . $cariID;
	?><div class="form-group">
			<label for="inputSubmit" class="col-sm-3 control-label"><?=$_jadual?></label>
			<div class="col-sm-6">
				<input type="hidden" name="jadual" value="<?=$_jadual?>">
				<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary btn-large">
				<a target="_blank" href="<?php echo $cetakSebutHarga ?>" class="btn btn-warning btn-large">Cetak Sebut Harga</a>
				<a target="_blank" href="<?php echo $cetakInvois ?>" class="btn btn-success btn-large">Cetak Invois</a>
			</div>
		</div>
	<?php
}