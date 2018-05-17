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
#-------------------------------------------------------------------------------------------
	public function search()
	{
		# Set pemboleubah utama
		//echo '<pre>sebelum:'; print_r($_POST); echo '</pre>';
		# https://stackoverflow.com/questions/41592249/how-to-use-php-client-for-google-custom-search-engine

		$searchTerm = (isset($_POST['search'])) ? $_POST['search'] : 'samsung'; # cari barang apa 
		//$service = new \Aplikasi\Kitab\GoogleResults();
		//$items = $service->getSearchResults($searchTerm);
		//echo '<pre>' . $searchTerm . ' | $results=><hr>'; print_r($items); echo '</pre>';
		//$this->readApi($items);
		$this->saveApi($searchTerm, $items);

		/*
		https://stackoverflow.com/questions/23051160/google-oauth-library-working-in-session-in-mvc-php
		https://stackoverflow.com/questions/30284721/adding-google-api-client-to-codeigniter
		https://stackoverflow.com/questions/23051160/google-oauth-library-working-in-session-in-mvc-php
		//*/
	}
#-------------------------------------------------------------------------------------------
	public function readApi($results)
	{
		for($kira = 0; $kira <= count($results); $kira++)
		{
			$og_title = (isset($results[$kira]['pagemap']['metatags'][0]['og:title'])) ?
				$results[$kira]['pagemap']['metatags'][0]['og:title']
				: '<font color="red">not tittle found</font>';
			$og_url = (isset($results[$kira]['pagemap']['metatags'][0]['og:url'])) ?
				$results[$kira]['pagemap']['metatags'][0]['og:url']
				: '#not url found';
			$og_image = (isset($results[$kira]['pagemap']['metatags'][0]['og:image'])) ? 
				$results[$kira]['pagemap']['metatags'][0]['og:image']
				: '';
			$og_description = (isset($results[$kira]['pagemap']['metatags'][0]['og:description'])) ?
				$results[$kira]['pagemap']['metatags'][0]['og:description']
				: '<font color="red">not description found</font>';

			echo '<h1>' . $kira . ':' . $og_title . '</h1>';
			echo '<h6>' . $og_description . '</h6>';
			echo '<br><a target="blank" href="' . $og_url . '">' . $og_url . '</a>';
			echo '<br><img src="' . $og_image . '"></a>';
			echo '<hr>';
		}
	}
#-------------------------------------------------------------------------------------------
	public function saveApi($searchTerm, $items)
	{
		# debug $_POST
		//echo '<pre>Test $_POST->'; print_r($_POST) . '</pre>';
		//$this->tanya->dapatid($_POST['password']);

		# Set pemboleubah utama
		//$myTable = 'admin_item2';
		//$senarai = array($myTable);
		//$medan = '`cacheId`,`item_name`,`item_website`,`link_item`,`link_picture`,`description`';

		# bentuk tatasusunan
		//$posmen = $this->tanya->semakApi($myTable, $senarai, $items);
		//$senaraiData = $this->tanya->ubahPosmen($posmen, $myTable);
		# sql insert
		//$this->tanya->tambahSqlBanyakNilai($myTable, $medan, $senaraiData); 
		//$this->tanya->tambahBanyakNilai($myTable, $medan, $senaraiData); 
		//$this->log_sql($myTable, $medan, $senaraiData);
		# semak data
			//echo '<pre>$_POST='; print_r($_POST) . '</pre>';
			//echo '<pre>$posmen='; print_r($posmen) . '</pre>';
			//echo '<pre>$senaraiData='; print_r($senaraiData) . '</pre>';
		
		# pergi papar kandungan
		//echo '<br>location: ' . URL . $this->_folder . '/rangkabaru/selesai';
		header('location: ' . URL . 'homeuser/items/' . $searchTerm);
		//*/
	}
#-------------------------------------------------------------------------------------------
	public function items($searchTerm)
	{
		# Set pemboleubah utama
		//echo 'kite sekarang berada di kelas Homeadmin function item';
		//echo '<pre>sebelum:'; print_r($_POST); echo '</pre>';

		# untuk add form
		$this->papar->searchItem = $searchTerm;
		$this->papar->myTable = 'admin_item2';
		$this->papar->medan = array('item_name','item_website', 'price', 'colour', 'picture', 'description');
		//$medan = '`item_id`,`item_name`,`link_item`,`link_picture`, `description`';
		$medan = '`item_id`,`item_name`,  TRIM(`item_website`) as `item_website`,`price`, `colour`,'
		. ' concat_ws("","<img height=\"200\" width=\"200\" src=\"",`link_picture`,"\">") as picture,'
		. ' `description`, `rating`';
		
		# untuk list data dari myTable
			$carian[] = array('fix'=>'x=','atau'=>'WHERE',
			'medan'=>'delete_status','apa'=>'0');
			$carian[] = array('fix'=>'x=','atau'=>'AND',
			'medan'=>'search_item','apa'=> $searchTerm);
			$susun[0]['susun'] = 'rating DESC';
			//$susun[0]['dari'];
			//$susun[0]['max'];
			$this->papar->senarai[$this->papar->myTable] = $this->tanya->
				//tatasusunanCari(//	cariSql( 
				cariSemuaData(
				$this->papar->myTable, $medan, $carian, $susun);

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('list_item', $noInclude = 1);
	}
#-------------------------------------------------------------------------------------------
	public function saveRating($medanID, $dataID, $searchItem)
	{
		//echo '<br> dalam medanID = ' . $medanID;
		//echo '<br> dalam cariID = ' . $dataID;

		# Set pemboleubah utama
		//echo 'kite sekarang berada di kelas Homeadmin function item';
		//echo '<pre>sebelum:'; print_r($_POST); echo '</pre>';

		if ($_POST['butang'] == 'Buang') 
		{
			//echo 'kita akan buang data';
			list($myTable, $deleteLink) = $this->updateDelete($medanID, $dataID, $_POST);
		}
		elseif ($_POST['butang'] == 'Simpan')
		{
			//echo 'kita akan update data';
			list($myTable, $deleteLink) = $this->updateDataSave($medanID, $dataID, $_POST);
		}

		# pergi papar kandungan
		$link = 'homeuser/items/' . $searchItem;
		//echo 'location: ' . URL . $link;
		header('location: ' . URL . $link); //*/
	}
#--------------------------------------------------------------------------------------------------
	private function updateDelete($medanID, $dataID)
	{
		# Set pemboleubah utama
		/*echo 'kite sekarang berada di kelas Homeadmin function updateDelete';
		echo '<br>$action ' . $action . ' <br> ';
		echo '<pre>sebelum:'; print_r($_POST); echo '</pre>';//*/

		list($myTable, $senarai, $medan, 
			$medanID, $updateLink, $deleteLink) 
			= $this->tanya->updateForm($medanID);
		$senaraiJadual = array($myTable);

		# ubahsuai $posmen
		$posmen = array();
		$posmen = $this->tanya->semakPost3($_POST, $myTable, $senaraiJadual, 
			$medanID, $dataID);
		//$posmen = $this->tanya->semakPosmen($senaraiJadual[0], $posmen);
		//echo '<br>$dataID=' . $dataID . '<br>';
		//echo '<pre>$_POST='; print_r($_POST) . '</pre>';
		//echo '<pre>$posmen='; print_r($posmen) . '</pre>';
		# mula ulang $senaraiJadual
		foreach ($senaraiJadual as $kunci => $jadual)
		{# mula ulang table
			$this->tanya->//
			ubahSqlSimpan
			//ubahSimpan
			($posmen[$jadual], $jadual, $medanID);
		}# tamat ulang table//*/

		//return array($myTable, $deleteLink);
	}
#--------------------------------------------------------------------------------------------------
	private function updateDataSave($medanID, $dataID)
	{
		# Set pemboleubah utama
		/*echo 'kite sekarang berada di kelas Homeadmin function updateDataSave';
		echo '<br>$action ' . $action . ' <br> ';
		echo '<pre>sebelum:'; print_r($_POST); echo '</pre>';//*/
		
		list($myTable, $senarai, $medan, 
			$medanID, $updateLink, $deleteLink) 
			= $this->tanya->updateForm($medanID);
		$senaraiJadual = array($myTable);

		# ubahsuai $posmen
		$posmen = array();
		$posmen = $this->tanya->semakPost2($_POST, $myTable, $senaraiJadual, 
			$medanID, $dataID);
		//$posmen = $this->tanya->semakPosmen($senaraiJadual[0], $posmen);
		//echo '<br>$dataID=' . $dataID . '<br>';
		//echo '<pre>$_POST='; print_r($_POST) . '</pre>';
		//echo '<pre>$posmen='; print_r($posmen) . '</pre>';
		# mula ulang $senaraiJadual
		foreach ($senaraiJadual as $kunci => $jadual)
		{# mula ulang table
			$this->tanya->//ubahSqlSimpan
			ubahSimpan
			($posmen[$jadual], $jadual, $medanID);
		}# tamat ulang table//*/

		return array($myTable, $deleteLink);
	}
#--------------------------------------------------------------------------------------------------
	function recommendWeb($searchItem)
	{
		//echo 'kita sekarang berada di ' . __METHOD__ . '';

		# untuk list data dari myTable
			list($this->papar->myTable, $medan, $carian, $susun) = $this->tanya->dataWebsite($searchItem);
			$this->papar->senarai[$this->papar->myTable] = $this->tanya->
				//tatasusunanCari(//	cariSql( 
				cariSemuaData(
				$this->papar->myTable, $medan, $carian, $susun);

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('list_web', $noInclude = 1);
	}
#--------------------------------------------------------------------------------------------------
	function recommendWeb2()
	{
		//echo 'kita sekarang berada di ' . __METHOD__ . '';

		# untuk list data dari myTable
			$this->papar->myTable = $myTable = 'admin_item2';
			$medan = 'search_item, item_website, count(*) as recommend';
			$carian[] = array('fix'=>'x>','atau'=>'WHERE',
			'medan'=>'rating','apa'=>'3');
			$susun[0]['susun'] = '2 ASC';
			$susun[0]['kumpul'] = '1, 2';
			//$susun[0]['dari'];
			$susun[0]['max'] = '5';
			$this->papar->senarai[$myTable] = $this->tanya->
				//tatasusunanCari(//	cariSql( 
				cariSemuaData(
				$myTable, $medan, $carian, $susun);

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('list_web', $noInclude = 1);
	}
#--------------------------------------------------------------------------------------------------
	function dataTable()
	{
		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('papar_jadual4', $noInclude = 1);
	}
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------

	function logout()
	{
		\Aplikasi\Kitab\Sesi::init();
		//echo '<pre>sebelum:'; print_r($_SESSION) . '</pre>';
		\Aplikasi\Kitab\Sesi::destroy();
		//echo '<pre>selepas:'; print_r($_SESSION) . '</pre>';
		header('location: ' . URL);
		//exit;
	}
#--------------------------------------------------------------------------------------------------
}

/*
		//include_once __DIR__ . '/vendor/autoload.php';
		//include_once  __DIR__ . '/google-api-php-client-2.2.1/vendor/autoload.php';

		//$GCSE_API_KEY = "nqwkoigrhe893utnih_gibberish_q2ihrgu9qjnr";
		$GCSE_API_KEY = "AIzaSyD1KORf2kRrS7r6n5rT4nwL9QBGD8QCAgk";
		//$GCSE_SEARCH_ENGINE_ID = "937592689593725455:msi299dkne4de";
		$GCSE_SEARCH_ENGINE_ID = '016724384925099384635:s9jmb6xrf-w';

		$client = new GoogleResults();
		$client->setApplicationName("My_App");
		$client->setDeveloperKey(GCSE_API_KEY);
		$service = new Google_Service_Customsearch($client);
		//$optParams = array("cx"=>self::GCSE_SEARCH_ENGINE_ID);    
		$optParams = array("cx"=>GCSE_SEARCH_ENGINE_ID);    
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
		    [og:description] => * NEW UPGRADED VERSION  * A1 RATED FOR FASTER MOBILE APP PERFOMANCE (98MB/s to 100MB/s) 
			* 16GB-32GB :Up to 98MB/s read speed  * 64GB-128GB :Up to 100MB/s read speed 
			* Original stock from SanDisk Malaysia distributor 
			* Genuine set, come with adapter, with 10 years warranty 
			* One to one swap 10 years warranty * All sealed in retail pack (NOT BULK PACK) 
			* Capture higher quality photos and capture full HD video  
			* Capacity up to 128GB, can shoot, carry and complete preservation  
			* Class 10 video rating for full HD video capture  * Increase capacity for ANDROID devices  
			* Play faster app performance to capture better photos  Capture higher quality photos and capture full HD video  
			Use the Extreme high speed mobile MicroSDXC UHS-I memory card with Class 10 video rating, can give full play to 
			your mobile devices and camera performance. This versatile microSD memory card is equipped with an SD ™ card adapter 
			and is ideal for applications that support SD memory card devices such as cameras, camco
		)
		//*/


//*/
#-------------------------------------------------------------------------------------------
