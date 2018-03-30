<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__; 
class Homeadmin extends \Aplikasi\Kitab\Kawal
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
	public function website($action)
	{
		# Set pemboleubah utama
		//echo 'kite sekarang berada di kelas Homeadmin function website';
		//echo '<pre>action:'; print_r($action); echo '</pre>';

		# untuk add form
		$this->papar->myTable = 'admin_website';
		$this->papar->medan = array('website_name','website_link','note');
		$medan = '`website_id`,`website_name`,`website_link`,`note`';
		# untuk list data dari myTable
			$this->papar->senarai['website'] = $this->tanya->
				//tatasusunanCari(//	cariSql( 
				cariSemuaData(
				$this->papar->myTable, $medan, NULL, NULL);

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('form_list_website', $noInclude = 1);
	}
#==========================================================================================
	public function item($action)
	{
		# Set pemboleubah utama
		//echo 'kite sekarang berada di kelas Homeadmin function item';
		//echo '<pre>sebelum:'; print_r($_POST); echo '</pre>';

		# untuk add form
		$this->papar->myTable = 'admin_item';
		$this->papar->medan = array('item_name','item_website', 'link_item', 'link_picture', 'description');
		$medan = '`item_id`,`item_name`,`link_item`,`link_picture`, `description`';

		# untuk list data dari myTable
			$this->papar->senarai[$this->papar->myTable] = $this->tanya->
				//tatasusunanCari(//	cariSql( 
				cariSemuaData(
				$this->papar->myTable, $medan, $carian, NULL);	

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('form_list_item', $noInclude = 1);
	}
#==========================================================================================
	public function category($action)
	{
		# Set pemboleubah utama
		//echo 'kite sekarang berada di kelas Homeadmin function category';
		//echo '<pre>sebelum:'; print_r($_POST); echo '</pre>';

		# untuk add form
		$this->papar->myTable = 'admin_category';
		$this->papar->medan = array('category_name', 'item_id', 'website_id');


		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('form_add_category', $noInclude = 1);
	}
#==========================================================================================
	public function rating($action)
	{
		# Set pemboleubah utama
		//echo 'kite sekarang berada di kelas Homeadmin function rating';
		//echo '<pre>sebelum:'; print_r($_POST); echo '</pre>';

		# untuk add form
		$this->papar->myTable = 'rating';
		$this->papar->medan = array('user_id', 'website_id', 'rating', 'category_id');

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('form_add_rating', $noInclude = 1);
	}
#==========================================================================================
	public function addform($action = NULL)
	{
		# Set pemboleubah utama
		//echo 'kite sekarang berada di kelas Homeadmin function rating';
		//echo '<pre>sebelum:'; print_r($_POST); echo '</pre>';

		# Set pemboleubah utama
		list($myTable, $senarai, $medan)= $this->tanya->selectTable($action);

		# bentuk tatasusunan
		$posmen = $this->tanya->semakPOST($myTable, $senarai, $_POST);
		$senaraiData = $this->tanya->ubahPosmen($posmen);
		# sql insert
		//$this->tanya->tambahSqlBanyakNilai($myTable, $medan, $senaraiData); 
		$this->tanya->tambahBanyakNilai($myTable, $medan, $senaraiData); 
		//$this->log_sql($myTable, $medan, $senaraiData);
		# semak data
			//echo '<pre>$_POST='; print_r($_POST) . '</pre>';
			//echo '<pre>$posmen='; print_r($posmen) . '</pre>';
			//echo '<pre>$senaraiData='; print_r($senaraiData) . '</pre>';
        # pergi papar kandungan
		//echo '<br>location: ' . URL . $this->_folder . '/rangkabaru/selesai';
		header('location: ' . URL . 'homeadmin');
		//*/
	}
#==========================================================================================
	public function list($action = NULL)
	{
		# Set pemboleubah utama
		echo 'kite sekarang berada di kelas Homeadmin function list';
		//echo '<pre>sebelum:'; print_r($_POST); echo '</pre>';

		# Set pemboleubah utama
		list($myTable, $senarai, $medan)= $this->tanya->selectTable($action);
		# bentuk tatasusunan
		
	}
#==========================================================================================
	public function updateform($action = NULL, $cariID)
	{
		# Set pemboleubah utama
		//echo 'kite sekarang berada di kelas Homeadmin function updateform';
		//echo '<pre>sebelum:'; print_r($_POST); echo '</pre>';

		# Set pemboleubah utama
		$this->papar->cariID = $cariID;
		list($this->papar->myTable, $senarai, $medan)= $this->tanya->updateTable($action);
		$carian[] = array('fix'=>'x=','atau'=>'WHERE','medan'=>'website_id','apa'=>$cariID);
		/*echo '<pre>action:'; print_r($action); echo '</pre>';
		echo '<pre>myTable:'; print_r($myTable); echo '</pre>';
		echo '<pre>senarai:'; print_r($senarai); echo '</pre>';
		echo '<pre>medan:'; print_r($medan); echo '</pre>';//*/

		# untuk list data dari myTable
			$this->papar->senarai[$this->papar->myTable] = $this->tanya->
				//tatasusunanCari(//	cariSql( 
				cariSemuaData(
				$this->papar->myTable, $medan, $carian, NULL);	

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('form_update_website', $noInclude = 1);
	}
#==========================================================================================
	public function deleteform($action = NULL)
	{
		# Set pemboleubah utama
		//echo 'kite sekarang berada di kelas Homeadmin function deleteform';
		//echo '<pre>sebelum:'; print_r($_POST); echo '</pre>';

		# Set pemboleubah utama
		list($myTable, $senarai, $medan)= $this->tanya->selectTable($action);

		
	}
#==========================================================================================
	public function updateSave($action, $dataID)
	{
		# Set pemboleubah utama
		/*echo 'kite sekarang berada di kelas Homeadmin function updateSave';
		echo '<pre>sebelum:'; print_r($_POST); echo '</pre>';//*/

		list($myTable, $senarai, $medan)= $this->tanya->selectTable($action);
		$medanID = 'website_id';
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
		
		# pergi papar kandungan
		$link = 'homeadmin/updateform/' . $myTable . '/';
		//echo 'location: ' . URL . 'kawalan/ubah/' . $dataID;
		header('location: ' . URL . $link . $dataID); //*/

	}
#==========================================================================================
#==========================================================================================
#==========================================================================================
#==========================================================================================
#==========================================================================================
#==========================================================================================
}