<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__; 
class Homeuser extends \Aplikasi\Kitab\Kawal
{
#==========================================================================================
	function __construct()
	{
		parent::__construct();
		//\Aplikasi\Kitab\Kebenaran::kawalMasuk();
		//\Aplikasi\Kitab\Kebenaran::kawalKeluar();
		$this->_folder = huruf('kecil', namaClass($this));
	}

	public function index()
	{
		# Set pemboleubah utama
		//$this->papar->tajuk = namaClass($this);
		//echo '<hr> Nama class : ' . namaClass($this) . '<hr>';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('index', $noInclude = 1);
	}

	public function paparKandungan($fail, $noInclude = 0)
	{	# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/' . $fail, $jenis, $noInclude); # $noInclude=0
			//'mobile/mobile',$jenis,0); # $noInclude=0
		//*/
	}

	public function semakPembolehubah($senarai)
	{
		echo '<pre>$senarai:<br>';
		print_r($senarai);
		echo '</pre>|';//*/
	}
#==========================================================================================
	public function search()
	{
		# Set pemboleubah utama
		echo '<pre>sebelum:'; print_r($_POST); echo '</pre>';
		# https://stackoverflow.com/questions/41592249/how-to-use-php-client-for-google-custom-search-engine

		$cariApa = (isset($_POST['find'])) ? $_GET['find'] : 'samsung'; # cari barang apa 

		//include_once __DIR__ . '/vendor/autoload.php';
		//include_once  __DIR__ . '/google-api-php-client-2.2.1/vendor/autoload.php';

		//$GCSE_API_KEY = "nqwkoigrhe893utnih_gibberish_q2ihrgu9qjnr";
		$GCSE_API_KEY = "AIzaSyD1KORf2kRrS7r6n5rT4nwL9QBGD8QCAgk";
		//$GCSE_SEARCH_ENGINE_ID = "937592689593725455:msi299dkne4de";
		$GCSE_SEARCH_ENGINE_ID = '016724384925099384635:s9jmb6xrf-w';

		$client = new GoogleResults();
		$client->setApplicationName("My_App");
		$client->setDeveloperKey($GCSE_API_KEY);
		$service = new Google_Service_Customsearch($client);
		//$optParams = array("cx"=>self::GCSE_SEARCH_ENGINE_ID);    
		$optParams = array("cx"=>$GCSE_SEARCH_ENGINE_ID);    
		$results = $service->cse->listCse($cariApa, $optParams);

		//echo '<pre>$results=>'; print_r($results); echo '</pre>';

		//echo '<pre>$link=>'; print_r($results['items'][0]['link']); echo '</pre>';
		//echo '<pre>$gambar=>'; print_r($results['items'][1]['pagemap']['metatags'][0]); echo '</pre>';
		echo '<pre>$gambar=>'; echo count($results['items']); echo '</pre>';

		for($kira = 0; $kira <= count($results['items']); $kira++)
		{
			$og_title = (isset($results['items'][$kira]['pagemap']['metatags'][0]['og:title'])) ?
				$results['items'][$kira]['pagemap']['metatags'][0]['og:title']
				: '<font color="red">not tittle found</font>';
			$og_url = (isset($results['items'][$kira]['pagemap']['metatags'][0]['og:url'])) ?
				$results['items'][$kira]['pagemap']['metatags'][0]['og:url']
				: '#not url found';
			$og_image = (isset($results['items'][$kira]['pagemap']['metatags'][0]['og:image'])) ? 
				$results['items'][$kira]['pagemap']['metatags'][0]['og:image']
				: '';
			$og_description = (isset($results['items'][$kira]['pagemap']['metatags'][0]['og:description'])) ?
				$results['items'][$kira]['pagemap']['metatags'][0]['og:description']
				: '<font color="red">not description found</font>';

			echo '<h1>' . $kira . ':' . $og_title . '</h1>';
			echo '<h6>' . $og_description . '</h6>';
			echo '<br><a target="blank" href="' . $og_url . '">' . $og_url . '</a>';
			echo '<br><img src="' . $og_image . '"></a>';
			echo '<hr>';
		}
		/*
		$gambar=>Array
		(
		    [viewport] => width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no
		    [og:title] => SanDisk 100MB/s ULTRA A1 Class 10 Micro SD Card 128GB / 64GB / 32GB / 16GB | Shopee Malaysia
		    [og:type] => website
		    [og:url] => https://shopee.com.my/SanDisk-100MB-s-ULTRA-A1-Class-10-Micro-SD-Card-128GB-64GB-32GB-16GB-i.180984.62503407
		    [og:image] => https://cfshopeecommy-a.akamaihd.net/file/b313d8839a356f2efadb8cf63bf7bb9e
		    [og:description] => * NEW UPGRADED VERSION  * A1 RATED FOR FASTER MOBILE APP PERFOMANCE (98MB/s to 100MB/s) * 16GB-32GB :Up to 98MB/s read speed  * 64GB-128GB :Up to 100MB/s read speed * Original stock from SanDisk Malaysia distributor * Genuine set, come with adapter, with 10 years warranty * One to one swap 10 years warranty * All sealed in retail pack (NOT BULK PACK) * Capture higher quality photos and capture full HD video  * Capacity up to 128GB, can shoot, carry and complete preservation  * Class 10 video rating for full HD video capture  * Increase capacity for ANDROID devices  * Play faster app performance to capture better photos  Capture higher quality photos and capture full HD video  Use the Extreme high speed mobile MicroSDXC UHS-I memory card with Class 10 video rating, can give full play to your mobile devices and camera performance. This versatile microSD memory card is equipped with an SD ™ card adapter and is ideal for applications that support SD memory card devices such as cameras, camco
		)
		//*/

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		//$this->paparKandungan('pelawat');
	}
#-------------------------------------------------------------------------------------------
	function logout()
	{
		\Aplikasi\Kitab\Sesi::init();
		//echo '<pre>sebelum:'; print_r($_SESSION) . '</pre>';
		\Aplikasi\Kitab\Sesi::destroy();
		//echo '<pre>selepas:'; print_r($_SESSION) . '</pre>';
		header('location: ' . URL);
		//exit;
	}
#==========================================================================================
}
