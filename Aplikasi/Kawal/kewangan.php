<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__; 
class Kewangan extends \Aplikasi\Kitab\Kawal
{
#==========================================================================================
	function __construct()
	{
		parent::__construct();
		//\Aplikasi\Kitab\Kebenaran::kawalMasuk();
		\Aplikasi\Kitab\Kebenaran::kawalKeluar();
		$this->_folder = huruf('kecil', namaClass($this));
	}

	public function index()
	{
		# Set pemboleubah utama
		$this->papar->tajuk = namaClass($this);
		echo '<hr> Nama class : ' . namaClass($this) . '<hr>';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		//$this->paparKandungan('index');
	}

	public function paparKandungan($fail)
	{	# Pergi papar kandungan
		$jenis = $this->papar->pilihTemplate($template=0);
		$this->papar->bacaTemplate(
		//$this->papar->paparTemplate(
			$this->_folder . '/' . $fail, $jenis, 0); # $noInclude=0
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
#------------------------------------------------------------------------------------------
	function semua($a = null, $b = null)
	{
		# Set pemboleubah utama
		$jadual = 'yuran_pelajar';
		$this->papar->senarai['resit_semua'][] = $this->tanya->semuaOrang($jadual);
		$this->papar->jenisBorang = 'papar';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('index_jadual');
	}
#------------------------------------------------------------------------------------------
	function yuran($a = null, $b = null)
	{
		# Set pemboleubah utama
		$jadual = 'yuran_pelajar';
		$this->papar->senarai = $this->tanya->seOrang($jadual);
		$this->papar->jenisBorang = 'papar';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('resit_seorang');
	}
#------------------------------------------------------------------------------------------
	function hubungiwaris($a = null, $b = null)
	{
		# Set pemboleubah utama
		$jadual = 'yuran_pelajar';
		$this->papar->senarai['waris'][] = $this->tanya->waris($jadual);
		$this->papar->jenisBorang = 'papar';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('index_jadual');
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}
