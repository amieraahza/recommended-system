<?php 
function tukartarikh($lama)
{
	$baru1 = @date_format($lama, 'j F, Y, g:i a');
	$baru2 = date("j F, Y, g:i a");	
	$baru = ($lama == '0000-00-00 00:00:00') ? $baru2 : $baru1;

	return $baru;
}
function pecahTarikhMesej($mesej)
{
	@list($dataAsal, $data) = explode('Tarikh',$mesej);
	//@list($tarikh, $data2) = explode('Masa',$data);
	@list($tarikh, $data2) = explode('Takwim',$data);
	@list($dataPC, $data3) = explode('Mesej',$data2);
	$data4 = (isset($data3)) ? $data3 : '';
	@list($dataMesej, $dataAkhir) = explode('-',$data4);
	$dataMesej = (isset($dataMesej)) ? $dataMesej : '';

	return array($tarikh, $dataMesej);
}
include 'diatas.php';
?><h1 align="center">Khas Untuk Paparan Pihak Bank Sahaja</h1><?php
/*echo '<pre>';
echo '$this->akaun:<br>'; print_r($this->akaun);
echo '<br>$this->carian:'; print_r($this->carian);
echo '<br>$this->cariID:'; print_r($this->cariID);
echo '</pre>'; //*/
		/* --
		$this->akaun['kes'][0]['id']
		$this->akaun['kes'][0]['Nama']
		$this->akaun['kes'][0]['Tajuk']
		$this->akaun['kes'][0]['Mesej']
		$this->akaun['kes'][0]['Email']
		$this->akaun['kes'][0]['Bayaran']
		$this->akaun['kes'][0]['Status']
		$this->akaun['kes'][0]['Temujanji']	//*/

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
	$namaAkaunBank = '';//*/

	$namaOrang = 'Khairil Iszuddin Ismail'; # contoh sahaja
	$namaSyarikat = 'My Awesome Company Name';
	$alamat = '200 Jalan Lurus,<br> Taman Bunga Orchid,<br> 53300 Kuala Lumpur';
	$notel = '012-222 4455';
	$namaBank = 'CIMB BANK';
	$namaAkaunBank = '8000522622';//*/

	$kiraPesanan = count($this->akaun['kes']);
	for($i = 0; $i < $kiraPesanan; $i++):
		list($tarikh,$dataMesej) = pecahTarikhMesej($this->akaun['kes'][$i]['Mesej']);
		# untuk semakan ID
		$bilRujukan =  \Aplikasi\Kitab\RahsiaHash::rahsia('md5', $dataMesej);
		$id = $this->akaun['kes'][0]['id'];
		$bilRujukan = $bilRujukan . '@'. $i . '@' . $id . '/' . $kiraPesanan;
		# untuk semakan email
		$email = ($this->akaun['kes'][$i]['Email']);
		$email = (isset($email)) ? $email : '';
		/*echo '<pre>jumlah data = ' . $kiraPesanan . '</pre>'; # debug data
		echo '<pre>$tarikh '; print_r($tarikh); echo '</pre>';
		echo '<pre>$dataMesej:'; print_r($dataMesej); echo '</pre>';//*/
?>
<div class="container" style="page-break-before:always">
<div class="jumbotron">

	<div class="row">
		<div class="col-md-9">
			<h4><?php echo $namaSyarikat ?></h4>
			<h4><?php echo $alamat . ' - Tel: ' . $notel ?></h4>
		</div>
		<div class="col-md-3">
			<div class="teksBesar">QUOTE</div>
		</div>
	</div>
	<ul>
	<li><?php echo $this->akaun['kes'][$i]['Nama'] ?></li>
	<li><?php echo $this->akaun['kes'][$i]['Email'] ?></li>
	<li>Note : <?php echo $this->akaun['kes'][$i]['Temujanji'] ?></li>
	<li>Bil Rujukan : <?php echo $bilRujukan ?>/PAID</li>
	<!-- li>100-10 Bangunan Terkemuka,</li -->
	<!-- li>54321 Kuala Lumpur, Malaysia</li -->
	<!-- li>Attn: Ahmad Kasan</li -->
	<!-- li>Ref:	RUJUKAN-2014-01(1/3)</li -->
	<!-- li>Date:	March 10, 2014</li -->
	<li>Date Email <?php echo nl2br($tarikh) ?></li>
	</ul>

	<h4>Please find our quotation for the inquired products and services below:</h4><hr>

	<div class="row">
		<div class="col-md-2"> <strong>Subjek :</strong> <?php 
			echo nl2br($this->akaun['kes'][$i]['Tajuk']); ?></div>
		<div class="col-md-10"> <strong>Kandungan Mesej  :</strong> <?php
			echo nl2br($dataMesej); ?></div>
	</div><hr>
	<table class="table table-condensed">
	<!-- table class="excel" -->
	<tr><td> Items </td><td> Price (RM) </td><td> Day </td><td> Total (RM) </td></tr>
	<tr><td> 1 </td><td> 500 </td><td> 1 </td><td> 500 </td></tr>
	<tr><td colspan="2">&nbsp;</td><td> All Total (RM) </td><td> 500 </td></tr>
	</table><hr>

	<strong>Project Scope:</strong>
	<p>To create an awesome wordpress plugin to do marvelous things on your website</p>

	<strong>Features To Include</strong>:
	<ul>
	<li> Wordpress plugin is able to produce candy from thin air </li>
	<li> Option panel to allow admin to choose candy size, flavour and colour of the candy </li>
	<li> Option panel to schedule candy making </li>
	<li> Option to save candy creation configuration </li>
	</ul> 

	<strong>Payment Terms</strong>:
	<ul>
	<li> 20% payment is required upon project kick-off. </li>
	<li> Another 30% payment is required after first project demo. </li>
	<li> Balance to be paid before full delivery of codes. </li>
	</ul> 

	<strong>Payment Method</strong>:
	<ul>
	<li> Cheque or direct bank deposit. </li>
	<li> Please notify us if you made any direct bank deposits. </li>
	<li> Payments can be made to:  
		<ul>
		<li> <?php echo $namaSyarikat ?> </li>
		<li> <?php echo $namaBank ?> </li>
		<li> A/C NO.: <?php echo $namaAkaunBank ?> </li>
		</ul>
	</li>
	</ul>

	<h4><strong>Validity</strong>:</h4>
	<p>This quote is valid for 14 days from the date of this document.</p>

	<h4><strong>Warranty</strong>:</h4>
	<p>30-day warranty is provided to ensure that website is working properly and bug-free. 
	Any bug fix requests reported after the 30-day period is chargeable. 
	This does not include development of new features and enhancements.</p>

	<h4><strong>Ownership</strong>:</h4>
	<p>All works will be the ownership of the client except for third-party works used in the project 
	such as and not limited to open source libraries, artworks, commercial libraries which comes 
	with their own license agreement. Client is to abide by the license terms 
	and hold full responsibility for using them.</p>

	<h4><strong>Other Terms</strong>:</h4>
	<p>This quote does not include charges such as acquiring stock photos, acquiring fonts, 
	professional photography, pre- and post-video production, talents and others. Other charges, 
	like those will be quoted separately upon request. Price quoted is subject to change based on 
	client’s requests of other services and additional features.</p>

	<p>We trust that you will find the quote above satisfactory. 
	We look forward to working with you. 
	Please contact us should have any questions at all.</p>

	<p>Any questions or inquiries can be directed to <?php echo $namaOrang ?> at the number <?php echo $notel ?></p>

	<p> Regards, </p>
	<ul>
	<li> <?php echo $namaOrang ?> </li>
	<li> Web Programmer </li>
	<li> <?php echo $namaSyarikat ?> </li>
	</ul>

</div><!-- / class="jumbotron" -->
</div><!-- / class="container" -->

<?php
	endfor; # endfor
} # $this->carian=='ada' - tamat 
//*/

include 'dibawah.php';