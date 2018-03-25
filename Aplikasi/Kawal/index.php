<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__;
class Index extends \Aplikasi\Kitab\Kawal
{
#==========================================================================================
	function __construct()
	{
		//echo '<br>class Index extends \Aplikasi\Kitab\Kawal';
		parent::__construct();
		\Aplikasi\Kitab\Kebenaran::kawalMasuk();
		$this->_folder = huruf('kecil', namaClass($this));
	}

	function index()
	{
		# Set pemboleubah utama
		$this->papar->Tajuk_Muka_Surat='Enjin';

		# Pergi papar kandungan
		//$this->semakPembolehubah(); # Semak data dulu
		$this->paparKandungan($this->_folder, 'login', $noInclude=1); # $noInclude=0
	}

	public function paparKandungan($folder, $fail, $noInclude)
	{
		//$theme = array(0,1,2,3,4);
		//$template = $theme[rand(0, count($theme)-1)];
		# jika tidak mahu include apa2, letak $noInclude=1,

		# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=4);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$folder . '/' . $fail, $jenis, $noInclude); # $noInclude=0
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
	function muar()
	{
		# Set pemboleubah utama
		$this->papar->Tajuk_Muka_Surat='Enjin';
		$this->papar->senaraiIP = dpt_ip(); # dapatkan senarai IP yang dibenarkan
		$this->papar->ip = $ip = $_SERVER['REMOTE_ADDR'];
		$this->papar->ip2 = substr($ip,0,10);
		$this->papar->hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
		$this->papar->server = $_SERVER['SERVER_NAME'];
		$this->papar->tajuk = 'Login Untuk Muar';

		# Pergi papar kandungan
		//$this->semakPembolehubah(); # Semak data dulu
		$this->paparKandungan($this->_folder, 'muar', $noInclude=0); # $noInclude=0
	}

	function login($user)
	{
		# Set pemboleubah utama
		$this->papar->nama = $user; # dapatkan nama pengguna
		$this->papar->IP = dpt_ip(); # dapatkan senarai IP yang dibenarkan

		# Pergi papar kandungan
		//$this->semakPembolehubah(); # Semak data dulu
		$this->paparKandungan($this->_folder, 'login', $noInclude=0); # $noInclude=0
	}

	function login_automatik($user)
	{
		# Set pemboleubah utama
		$this->papar->nama = $user; # dapatkan nama pengguna
		$this->papar->IP = dpt_ip(); # dapatkan senarai IP yang dibenarkan

		# Pergi papar kandungan
		//$this->semakPembolehubah(); # Semak data dulu
		$this->paparKandungan($this->_folder, 'login_automatik', $noInclude=0); # $noInclude=0
	}

	function keluar()
	{
		# Set pemboleubah utama
		$this->papar->IP = dpt_ip(); # dapatkan senarai IP yang dibenarkan

		# Pergi papar kandungan
		//$this->semakPembolehubah(); # Semak data dulu
		$this->paparKandungan($this->_folder, 'keluar', $noInclude=0); # $noInclude=0
	}	
#==========================================================================================
	function register()
	{
		//echo 'sekarang kita berada di kelas index function register';
		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->mesej); # Semak data dulu
		$this->paparKandungan('index', 'register', $noInclude=1); # $noInclude=0
	}
#==========================================================================================
	function kaunter()
	{
		# Set pemboleubah utama
		if( isset($this->tanya->dudukmana) ):
			echo 'awek tanya ada'; 
		else:
			//echo 'awek tanya tiada'; 
			\Aplikasi\Kitab\Route::classTanyaTidakWujud('$this->tanya->dudukmana tak wujud');
		endif;
		//*/
	}
#==========================================================================================
}
