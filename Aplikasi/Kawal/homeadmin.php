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
		//echo '<pre>sebelum:'; print_r($_POST); echo '</pre>';

		# untuk add form
		$this->papar->myTable = 'admin_website';
		$this->papar->senarai = array('admin_website');
		$this->papar->medan = '`website_name`,`website_link`,`note`';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('form_add_website', $noInclude = 1);
	}
#==========================================================================================
	public function item($action)
	{
		# Set pemboleubah utama
		//echo 'kite sekarang berada di kelas Homeadmin function item';
		//echo '<pre>sebelum:'; print_r($_POST); echo '</pre>';

		# untuk add form
		$this->papar->myTable = 'admin_item';
		$this->papar->senarai = array('admin_item');
		$this->papar->medan = '`item_name`,`item_website	`,`link_item`,`link_picture`, `description`';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('form_add_item', $noInclude = 1);
	}
#==========================================================================================
	public function category($action)
	{
		# Set pemboleubah utama
		//echo 'kite sekarang berada di kelas Homeadmin function category';
		//echo '<pre>sebelum:'; print_r($_POST); echo '</pre>';

		# untuk add form
		$this->papar->myTable = 'admin_category';
		$this->papar->senarai = array('admin_category');
		$this->papar->medan = '`category_name`, `item_id`, `website_id`';


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
		$this->papar->senarai = array('rating');
		$this->papar->medan = '`user_id`, `website_id`, `rating`, `category_id`';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('form_add_rating', $noInclude = 1);
	}
#==========================================================================================

}
