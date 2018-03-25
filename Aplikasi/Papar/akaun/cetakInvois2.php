<?php 
function tukartarikh($lama)
{
	$baru1 = @date_format($lama, 'j F, Y, g:i a');
	$baru2 = date("j F, Y, g:i a");	
	$baru = ($lama == '0000-00-00 00:00:00') ? $baru2 : $baru1;
	return $baru;
}
include 'diatas_style.php';
?><div class="site-wrapper">
<div class="site-wrapper-inner">
<div class="cover-container">
	<!-- div class="masthead clearfix">
		<div class="inner">
			<h3 class="masthead-brand">Cover</h3>
				<nav>
				<ul class="nav masthead-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Features</a></li>
				<li><a href="#">Contact</a></li>
				</ul>
				</nav>
		</div>
	</div -->
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
else: # set pembolehubah
	$mencari = URL . 'akaun/ubahCari/';
	$carian = null;
	$mesej = '::' . $this->cariID . ' tiada dalam ' . $this->_jadual;
endif;
//echo '<div align="center">' . $mencari . '</div>'; ?><?php 

if ($this->carian=='[tiada id diisi]')
    echo 'data kosong<br>';
elseif(!isset($this->akaun['kes'][0]['id']))
	echo 'data kosong juga<br>';
else # $this->carian=='ada' - mula 
{
	/*$namaOrang = '';
	$namaSyarikat = '';
	$alamat = '';
	$notel = '';
	$namaBank = '';
	$namaAkaunBank = ''; //*/

	$namaOrang = 'Khairil Iszuddin Ismail';
	$namaSyarikat = 'My Awesome Company Name';
	$alamat = '200 Jalan Lurus,<br> Taman Bunga Orchid,<br> 53300 Kuala Lumpur';
	$notel = '012-222 4455';
	$namaBank = 'CIMB BANK';
	$namaAkaunBank = '8000522622';//*/

	$kira = count($this->akaun['kes']);
	for($i = 1; $i <= $kira; $i++):
		$tarikh = tukartarikh($this->akaun['kes'][$i]['Tarikh']);
		/*
		$this->akaun['kes'][0]['id'] 
		$this->akaun['kes'][0]['Nama'] 
		$this->akaun['kes'][0]['Tajuk']
		$this->akaun['kes'][0]['Mesej'] 
		$this->akaun['kes'][0]['Email'] 
		$this->akaun['kes'][0]['Bayaran']
		$this->akaun['kes'][0]['Status'] 
		$this->akaun['kes'][0]['Temujanji']	//*/
?>
<div class="inner cover" style="page-break-before:always">

	<div class="row">
		<div class="col-md-9">	
			<h4 class="cover-heading"><?php echo $namaSyarikat ?></h4>
			<h4><?php echo $alamat . ' - Tel: ' . $notel ?></h4>
		</div>
		<div class="col-md-3">
			<div class="teksBesar">INVOICE - <span class="text-danger">PAID</span></div>
		</div>
	</div>
	<ul>
	<li><?php echo $this->akaun['kes'][$i]['Nama'] ?></li>
	<li><?php echo $this->akaun['kes'][$i]['Email'] ?></li>
	<li>Note : <?php echo $this->akaun['kes'][$i]['Temujanji'] ?></li>
	<!-- li>100-10 Bangunan Terkemuka,</li -->
	<!-- li>54321 Kuala Lumpur, Malaysia</li -->
	<!-- li>Attn: Ahmad Kasan</li -->
	<!-- li>Ref:	RUJUKAN-2014-01(1/3)</li -->
	<!-- li>Date:	March 10, 2014</li -->
	<!-- li>Date: <?php //echo $tarikh ?></li -->
	</ul>

	<h4>Please find the invoice below for the services rendered:</h4><hr>

	<div class="row">
		<div class="col-md-2"> <strong>Subjek :</strong> <?php 
			echo nl2br($this->akaun['kes'][$i]['Tajuk']); ?></div>
		<div class="col-md-10"> <strong>Mesej  :</strong> <?php 
			//echo nl2br($this->akaun['kes'][$i]['Mesej']); ?></div>
	</div><hr>
	<table class="table table-condensed">
	<!-- table class="excel" -->
	<tr>
		<td> Items </td><td> Price (RM) </td><td> Qty </td><td> Total (RM) </td>
	</tr>
	<tr>
		<td> 1 </td><td> 500 </td><td> 1 </td><td> 500 </td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td><td> All Total (RM) </td><td> 500 </td>
	</tr>
	</table><hr>

	<h4>Cheque or direct bank deposit. <br> 
	Please notify us if you made any direct bank deposits. <br>
	Payments can be made to:</h4>
	<ul>
	<li> <?php echo $namaSyarikat ?> </li>
	<li> <?php echo $namaBank ?> </li>
	<li> A/C NO.: <?php echo $namaAkaunBank ?> </li>
	</ul>

	<h4>Any questions or inquiries can be directed to <?php echo $namaOrang ?> at the number <?php echo $notel ?></h4>
	<h4> Regards, </h4>

	<ul>
	<li> <?php echo $namaOrang ?> </li>
	<li> Web Programmer </li>
	<li> <?php echo $namaSyarikat ?> </li>
	</ul>

</div><!-- / class="inner cover" -->
<?php
	endfor; # endfor
} # $this->carian=='ada' - tamat 
//*/
?>
	<div class="mastfoot">
	<div class="inner">
		<p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
	</div>
	</div>
</div><!-- / class="cover-container" -->
</div><!-- / class="site-wrapper-inner" -->
</div><!-- / class="site-wrapper" -->


<?php
include 'dibawah.php';