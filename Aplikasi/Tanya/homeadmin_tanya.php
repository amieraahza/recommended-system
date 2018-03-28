<?php
namespace Aplikasi\Tanya; //echo __NAMESPACE__; 
class Homeadmin_Tanya extends \Aplikasi\Kitab\Tanya
{
#====================================================================================================
	public function __construct()
	{
		parent::__construct();
	}
#---------------------------------------------------------------------------------------------------#
	public function jadualModul()
	{
		# ada nilai
		$hasil = array ( 
			'0' => array (
				'menu' => 'LAPORAN',
				'pengguna' => 'Pengetua/Guru Besar',
				'pendaftaran/adminission' => 'pendaftaran',
				'hal ehwal akademik' => 'peperiksaan',
				'kewangan pelajar' => 'yuran',
				'hal ehwal pelajar' => 'displin',
				'lain-lain sokongan' => 'web portal',
			),	
			'1' => array (
				'menu' => 'DASHBOARD',
				'pengguna' => 'Guru',
				'pendaftaran/adminission' => 'temuduga',
				'hal ehwal akademik' => 'kedatangan',
				'kewangan pelajar' => 'kutipan yuran',
				'hal ehwal pelajar' => 'asrama',
				'lain-lain sokongan' => 'sms',
			),	
			'2' => array (
				'menu' => 'INDEKS PRESTASI',
				'pengguna' => 'Ibu Bapa/Penjaga',
				'pendaftaran/adminission' => 'penilaian',
				'hal ehwal akademik' => 'kerja rumah',
				'kewangan pelajar' => 'tunggakan',
				'hal ehwal pelajar' => 'kokurikulum',
				'lain-lain sokongan' => 'finger print',
			),	
			'3' => array (
				'menu' => 'KOMUNIKASI',
				'pengguna' => 'Pelajar',
				'pendaftaran/adminission' => 'profil',
				'hal ehwal akademik' => 'quranic',
				'kewangan pelajar' => 'peringatan',
				'hal ehwal pelajar' => 'kedatangan',
				'lain-lain sokongan' => 'buletin',
			),	
			'4' => array (
				'menu' => 'DAN HEBAHAN',
				'pengguna' => '',
				'pendaftaran/adminission' => 'penempatan',
				'hal ehwal akademik' => 'rancangan mengajar',
				'kewangan pelajar' => 'sekatan',
				'hal ehwal pelajar' => 'profil',
				'lain-lain sokongan' => 'peringatan',
			),	
			'5' => array (
				'menu' => '',
				'pengguna' => '',
				'pendaftaran/adminission' => '',
				'hal ehwal akademik' => '',
				'kewangan pelajar' => '',
				'hal ehwal pelajar' => '',
				'lain-lain sokongan' => '',
			),	
			'6' => array (
				'menu' => '',
				'pengguna' => '',
				'pendaftaran/adminission' => '',
				'hal ehwal akademik' => '',
				'kewangan pelajar' => '',
				'hal ehwal pelajar' => '',
				'lain-lain sokongan' => '',
			),	
		);

		$hasil2 = array(); # tiada nilai

		return $hasil; # pulangkan pemboleubah	
	}
#---------------------------------------------------------------------------------------------------#
#====================================================================================================
}