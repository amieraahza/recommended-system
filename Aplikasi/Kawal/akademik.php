<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__; 
class Akademik extends \Aplikasi\Kitab\Kawal
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
		# Set pembolehubah utama
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
	function analisa($pilih, $namaTajukGraf)
	{
		# Set pembolehubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->senarai['AnalisaSubjek'] = $this->tanya->grafAnalisaSubjek($jadual);
		$this->papar->senarai['Graf1'][] = array();
		//$this->papar->senarai['Graf2'][] = array();
		$this->papar->_jadual = $jadual;
		$this->papar->jenisBorang = 'laporan';
		$this->papar->namaTajukGraf = $namaTajukGraf;

		# Scrip untuk js dan css
		$this->papar->js = array('http://code.highcharts.com/highcharts.js',
			'https://code.highcharts.com/modules/data.js',
			'http://code.highcharts.com/modules/exporting.js');

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('index_jadual');
	}
#==========================================================================================
}