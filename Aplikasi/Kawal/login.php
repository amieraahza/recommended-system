<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__; 
class Login extends \Aplikasi\Kitab\Kawal
{
#==========================================================================================
	function __construct()
	{
		//echo '<br>class Index extends Kawal';
		parent::__construct();
		//\Aplikasi\Kitab\Kebenaran::kawalMasuk();
		$this->_folder = huruf('kecil', namaClass($this));
	}
#==========================================================================================
	public function index()
	{
		# Set pemboleubah utama
		$this->papar->menuatas = 'tak';
		$this->papar->TajukBesar = 'Sila Login';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->mesej); # Semak data dulu
		$this->paparKandungan($this->_folder, 'index');
	}

	public function paparKandungan($folder, $fail)
	{	# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$folder . '/' . $fail, $jenis, 0); # $noInclude=0
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
	function registerid()
	{
		# debug $_POST
		echo '<pre>Test $_POST->'; print_r($_POST) . '</pre>';
		//$this->tanya->dapatid($_POST['password']);

		# semak data $this->tanya->ujiID(); 
		//$this->tanya->semakid();
		//*/
	}
	
	function semakid()
	{
		# debug $_POST
		//echo '<pre>Test $_POST->'; print_r($_POST) . '</pre>';
		//$this->tanya->dapatid($_POST['password']);

		# semak data $this->tanya->ujiID(); 
		$this->tanya->semakid();
		//*/
	}
	function salah()
	{
		# debug
		//$this->tanya->dapatid($_POST['password']);
		$this->papar->mesej = 'Ada masalah pada user dan password';

		# Set pemboleubah utama
		$this->papar->sesat = 'Enjin Carian - Sesat';
		$this->papar->isi = '';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->mesej); # Semak data dulu
		$this->paparKandungan('index', 'salah');
	}
#==========================================================================================
	function register()
	{
		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->mesej); # Semak data dulu
		$this->paparKandungan('index', 'register');
	}
#==========================================================================================
	function semaknama($nama)
	{
		# semak data $_POST
		//echo '<pre>Test $_POST->'; print_r($_POST) . '</pre>';
		$this->tanya->dapatid($nama);
		//$this->tanya->ujiID();
	}
#==========================================================================================
}
