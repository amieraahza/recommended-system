<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__;
class Pelajar extends \Aplikasi\Kitab\Kawal
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
	function daftarBaru()
	{
		# Set pembolehubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->medanbaru = $this->tanya->medanbaru($jadual);
		$this->papar->jadual = $jadual;
		$this->papar->jenisBorang = 'baru';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->medanbaru); # Semak data dulu
		$this->paparKandungan('pendaftaran');
	}
#------------------------------------------------------------------------------------------------
	function semakDaftarBaru()
	{
		# Semak data $_POST
		echo '<pre>$_POST->'; print_r($_POST) . '</pre>| ';
	}
#------------------------------------------------------------------------------------------------
	function paparBiodata()
	{
		# Set pembolehubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->senarai['Registration Proses'] = $this->tanya->datapelajar($jadual);
		$this->papar->_jadual = $jadual;
		$this->papar->jenisBorang = 'papar';		

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('senarai_pelajar');
	}
#------------------------------------------------------------------------------------------------
	function laporanDaftar()
	{
		# Set pembolehubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->senarai['Registration Report'] = $this->tanya->laporanDaftar($jadual);
		$this->papar->_jadual = $jadual;
		$this->papar->jenisBorang = 'laporan';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('laporan_pendaftaran');
	}
#------------------------------------------------------------------------------------------------
	public function paparSemua()
	{
		# Set pembolehubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->senarai['Senarai Semua Pelajar'] = $this->tanya->profilSemua($jadual);
		$this->papar->_jadual = $jadual;
		$this->papar->jenisBorang = 'papar';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('profil_pelajar');
	}
#------------------------------------------------------------------------------------------------
	public function papar($profil,$id)
	{
		# Set pembolehubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->senarai = $this->tanya->profilSeorang($jadual, $id);
		$this->papar->_jadual = $jadual;
		$this->papar->jenisBorang = 'papar';
		$this->papar->tajukbesar1 = 'Student Infomation';
		$this->papar->tajukbesar2 = 'Profil';
		$this->papar->tajukbesar3 = 'Father Infomation';
		$this->papar->tajukbesar4 = 'Mother Infomation';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('papar_profil');
	}
#------------------------------------------------------------------------------------------------
	public function slippeperiksaan($profil,$id = null)
	{
		# Set pembolehubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->senarai = $this->tanya->dataSlipPeperiksaan($jadual, $id);
		$this->papar->_jadual = $jadual;
		$this->papar->jenisBorang = 'papar';
		$this->papar->tajukbesar1 = 'Student Assessment Result';
		$this->papar->tajukbesar2 = null;
		$this->papar->tajukbesar3 = 'Summary';
		$this->papar->tajukbesar4 = 'Grade Reference';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('slip_peperiksaan');
	}
#------------------------------------------------------------------------------------------------
	public function peperiksaan($profil,$id = null)
	{
		# Set pembolehubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->senarai['Report Class Examination'] = $this->tanya->laporanPeperiksaan($jadual, $id);
		$this->papar->_jadual = $jadual;

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('index_jadual');
	}
#------------------------------------------------------------------------------------------------
	public function laporanSubjek($profil,$id = null)
	{
		# Set pembolehubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->senarai = $this->tanya->laporanSubjek($jadual, $id);
		//$this->papar->senarai['Graf1'][] = array();
		$this->papar->_jadual = $jadual;

		# Scrip untuk js dan css
		$this->papar->js = array('http://code.highcharts.com/highcharts.js',
			'https://code.highcharts.com/modules/data.js',
			'http://code.highcharts.com/modules/exporting.js');

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		//$this->paparKandungan('index_jadual');
		$this->paparKandungan('laporan_peperiksaan_subjek');
	}
#------------------------------------------------------------------------------------------------
	public function analisapencapaian()
	{
		# Set pembolehubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->senarai['Analisis By Subject'] = $this->tanya->laporanAnalisaPencapaianPelajar($jadual);
		$this->papar->_jadual = $jadual;
		$this->papar->jenisBorang = 'papar';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('index_jadual');
	}
#------------------------------------------------------------------------------------------------
	public function kedatangan()
	{
		# Set pembolehubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->senarai['Kedatangan Pelajar'] = $this->tanya->laporanKedatanganPelajar($jadual);
		$this->papar->_jadual = $jadual;
		$this->papar->jenisBorang = 'papar';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('index_jadual');
	}
#------------------------------------------------------------------------------------------------
	public function hafazan()
	{
		# Set pembolehubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->senarai['Pengurusan Hafazan'] = $this->tanya->laporanPengurusanHafazan($jadual);
		$this->papar->_jadual = $jadual;
		$this->papar->jenisBorang = 'papar';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('index_jadual');
	}
#------------------------------------------------------------------------------------------------
#==========================================================================================
}
