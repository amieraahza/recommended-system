<?php
namespace Aplikasi\Kawal; //echo __NAMESPACE__; 
class Surat extends \Aplikasi\Kitab\Kawal
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
	function buatsurat()
	{
		# Set pemboleubah utama
		$this->papar->jenisBorang = 'baru';

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->medanbaru); # Semak data dulu
		$this->paparKandungan('buat_surat');
	}

	function tawaran($pilih)
	{
		# Set pemboleubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->data = $this->tanya->suratTawaran($jadual);
		$this->papar->jadual = $jadual;
		$this->papar->jenisBorang = 'baru';

		# pilih hantar tawaran melalui apa
		if ($pilih == 'surat'): $fail = 'surat_tawaran';
		elseif ($pilih == 'sms'): $fail = 'sms_tawaran';
		elseif ($pilih == 'email'): $fail = 'email_tawaran';
		endif;

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->data); # Semak data dulu
		$this->paparKandungan($fail);
	}

	function terimatawaran()
	{
		# Set pemboleubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->senarai['Registration Proses'] = $this->tanya->datapelajar($jadual);
		$this->papar->_jadual = $jadual;

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('senarai_pelajar');
	}

	function tolaktawaran()
	{
		# Set pemboleubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->senarai['Registration Proses'] = $this->tanya->datapelajar($jadual);
		$this->papar->_jadual = $jadual;

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan('senarai_pelajar');
	}
#------------------------------------------------------------------------------------------------
	function profil($pilih = 'am')
	{
		# Set pemboleubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->data = $this->tanya->suratHebahan($jadual);
		$this->papar->jadual = $jadual;
		$this->papar->jenisBorang = 'papar';

		# pilih hantar tawaran melalui apa
		if ($pilih == 'surat'): $fail = 'hebahan_surat';
		elseif ($pilih == 'sms'): $fail = 'hebahan_sms';
		elseif ($pilih == 'email'): $fail = 'hebahan_email';
		else: $fail = 'hebahan_am';
		endif;//*/

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->data); # Semak data dulu
		$this->paparKandungan($fail);
	}
#------------------------------------------------------------------------------------------------
	function hubungiwaris($pilih = 'semua')
	{
		# Set pemboleubah utama
		$jadual = 'biodata_pelajar';
		$this->papar->senarai['Parent Informain'] = $this->tanya->paparWaris($jadual);
		$this->papar->tajukUtama = $this->tanya->paparWarisHeader($jadual);
		$this->papar->jadual = $jadual;
		$this->papar->jenisBorang = 'papar';

		# pilih hantar tawaran melalui apa
		if ($pilih == 'surat'): $fail = 'waris_surat';
		elseif ($pilih == 'sms'): $fail = 'waris_sms';
		elseif ($pilih == 'email'): $fail = 'waris_email';
		else: $fail = 'waris_am';
		endif;//*/

		# Pergi papar kandungan
		//$this->semakPembolehubah($this->papar->senarai); # Semak data dulu
		$this->paparKandungan($fail);
	}
#------------------------------------------------------------------------------------------------
#==========================================================================================
}
