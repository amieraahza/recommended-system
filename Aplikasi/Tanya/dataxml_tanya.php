<?php
namespace Aplikasi\Tanya; //echo __NAMESPACE__; 
class Dataxml_Tanya extends \Aplikasi\Kitab\Tanya
{
#==========================================================================================
	public function __construct() { parent::__construct(); }

	public function medanUbah2($cariID)
	{
		$senaraiMedan = 'no,Nama_Penuh nama,email,nohp';

		return $senaraiMedan; # pulangkan pemboleubah
	}

	public function tatasusunanCariID($jadual, $medan, $cari, $susun) 
	{
		# ada nilai
		$hasil = array ( '0' => array (
				'newss' => '000000123654',
				'ssm' => 'fulan@mail.com',
				'nama' => 'Fulan Bin Fulan',
				'operator' => 'Fulan2 Bin Fulan2',
				'alamat' => 'no 1000, ' . "\r" 
					. 'jalan 2000, ' . "\r" 
					. 'taman 3000 ' . "\r" 
					. 'poskod 40000',
				));

		$hasil2 = array(); # tiada nilai

		return $hasil; # pulangkan pemboleubah
	}

	public function tatasusunanCariMFG($jadual, $medan, $cari, $susun)
	{
		# ada nilai
		$hasil = array ( '0' => array (
				'newss' => '000000123654',
				'ssm' => 'fulan@mail.com',
				'nama' => 'Fulan Bin Fulan',
				'operator' => 'Fulan2 Bin Fulan2',
				'kumpulanIndustri' => 'MFG',
				'terimaProsesan' => 'J001',
				));

		$hasil2 = array(); # tiada nilai

		return $hasil; # pulangkan pemboleubah
	}

	public function tatasusunanCariPPT($jadual, $medan, $cari, $susun)
	{
		# ada nilai
		$hasil = array ( '0' => array (
				'newss' => '000000123654',
				'ssm' => 'fulan@mail.com',
				'nama' => 'Fulan Bin Fulan',
				'operator' => 'Fulan2 Bin Fulan2',
				'kumpulanIndustri' => 'PPT',
				'hantar_prosesan' => 'J001',
				));

		$hasil2 = array(); # tiada nilai

		return $hasil; # pulangkan pemboleubah
	}

	public function tatasusunanUbah2A($jadual, $medan, $cari, $susun) 
	{
		# ada nilai - cantum semua tatasusunan dalam satu
		$hasil = array (
			'msic2008' => array (
				0 => array (
						'S' => 'S',
						'msic2000' => '93099p',
						'msic' => '96094',
						'keterangan' => 'Perkhidmatan jagaan haiwan(2)',
						'notakaki' => '(2) Termasuk: penumpangan, perapian, mendudukkan dan melatih binatang peliharaan',
					),
				),
			'msic_v1' => array (
				0 => array (
						'msic' => '96094',
						'kp' => '85',
						'staf' => NULL,
						'keterangan' => 'Perkhidmatan jagaan haiwan',
						'notakaki' => 'Pet care services INCLUDE boarding, grooming, sitting and training pets '
								. 'NOT INCLUDE veterinary activities, see 7500 activities of fitness centres, see 93118',
					),
			),
			'msic_bandingan' => array (
				0 => array (
						'sv_newss' => '332',
						'sv_sidap' => '85',
						'msic2000p' => '93099p',
						'msic2000' => '93099',
						'msic' => '96094',
						'keterangan' => 'Aktiviti Perkhidmatan Persendirian',
						'Sektor' => 'Perkhidmatan (Lain-lain)',
					),
			),
			'msic2000' => array (),
			'msic2000_notakaki' => array (),
		);

		# ada nilai - pecah tatasusunan kepada beberapa bahagian
		$hasil1['satu'] = array ( 
			'0' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1'),
			'1' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1'),
			'2' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1')
			);
		$hasil1['dua'] = array ( 
			'0' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1'),
			'1' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1'),
			'2' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1')
			);
		$hasil1['tiga'] = array ( 
			'0' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1'),
			'1' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1'),
			'2' => array ('kira' => '1', 'A' => 'A1', 'B' => 'B1')
			);

		$hasil2 = array(); # tiada nilai

		return $hasil; # pulangkan pemboleubah
	}

	public function medanUbah($cariID) 
	{
		# Set pemboleubah
		# buat link
		$alamat1 = 'http://xxx/crud/ubah2/",kp,"/'.$cariID.'/2010/2015/'; 
		$url1 = '" <a target=_blank href=' . $alamat1 . '>SEMAK 1</a>"';
		$url2 = 'concat("<a target=_blank href=' . $alamat1 . '>SEMAK 2</a>")';
		# Set pemboleubah untuk sql
        $senaraiMedan = 'id,'
			. 'concat_ws("|",nama,operator,' . $url1 . ',' . $url2 . ') nama,'
			. ' concat_ws("|",' . "\r"
			. ' 	concat_ws("="," hasil",format(hasil,0)),' . "\r"
			. ' 	concat_ws("="," belanja",format(belanja,0)),' . "\r"
			. ' 	concat_ws("="," gaji",format(gaji,0)),' . "\r"
			. ' 	concat_ws("="," aset",format(aset,0)),' . "\r"
			. ' 	concat_ws("="," staf",format(staf,0)),' . "\r"
			. ' 	concat_ws("="," stok akhir",format(stok,0))' . "\r"
 			. ' ) as data5P,'
			. ' concat_ws("|",' . "\r"
			. ' 	concat_ws("="," tel",tel),' . "\r"
			. ' 	concat_ws("="," fax",fax),' . "\r"
			. ' 	concat_ws("="," orang",orang),' . "\r"
			. ' 	concat_ws("="," notel",notel),' . "\r"
			. ' 	concat_ws("="," nofax",nofax)' . "\r"
 			. ' ) as dataHubungi,'
			. 'concat_ws(" ",alamat1,alamat2,poskod,bandar) as alamat,' . "\r"
			//. 'concat_ws(" ",no,batu,( if (jalan is null, "", concat("JALAN ",jalan) ) ),tmn_kg,poskod,dp_baru) alamat_baru,' . "\r"
			. 'tel,notel,fax,nofax,responden,orang,email,esurat,'
			. 'hasil,belanja,gaji,aset,staf,stok' . "\r" 
			. '';

		# pulangkan pemboleubah
		return $senaraiMedan;
	}

	public function semakPost($senarai, $nilaiRM, $medanID, $dataID) 
	{
        foreach ($_POST as $myTable => $value)
        {   if ( in_array($myTable,$senarai) )
            {   foreach ($value as $kekunci => $papar)
				{	$posmen[$myTable][$kekunci]= 
						( in_array($kekunci,$nilaiRM) ) ? # $nilaiRM rujuk line 154
						str_replace( ',', '', bersih($papar) ) # buang koma	
						: bersih($papar);
				}	$posmen[$myTable][$medanID] = $dataID;
            }
        }

		return $posmen; # pulangkan nilai
	}

	public function semakPosmen($posmen, $jadual) 
	{
		# valid guna gelung foreach
		foreach ($nilaiRM as $keyRM) # $nilaiRM rujuk line 154
		{# kod php untuk formula matematik
			$data = null;
			if(isset($posmen[$jadual][$keyRM])):
				eval( '$data = (' . $posmen[$jadual][$keyRM] . ');' );
				$posmen[$jadual][$keyRM] = $data;
			endif;
		}/*$nilaiTEKS = array('no','batu','jalan','tmn_kg');
		foreach ($nilaiTEKS as $keyTEKS)
		{# kod php untuk besarkan semua huruf aka uppercase
			if(isset($posmen[$jadual][$keyTEKS])):
				$posmen[$jadual][$keyTEKS] = strtoupper($posmen[$jadual][$keyTEKS]);
			endif;
		}//*/ # valid guna if
		if (isset($posmen[$jadual]['email']))
			$posmen[$jadual]['email']=strtolower($posmen[$jadual]['email']);
		//if (isset($posmen[$jadual]['dp_baru']))
		//	$posmen[$jadual]['dp_baru']=ucwords(strtolower($posmen[$jadual]['dp_baru']));
		if (isset($posmen[$jadual]['responden']))
			$posmen[$jadual]['responden']=mb_convert_case($posmen[$jadual]['responden'], MB_CASE_TITLE);
		if (isset($posmen[$jadual]['password']))
		{
			//$pilih = null;
			$pilih = 'md5'; # Hash::rahsia('md5', $posmen[$jadual]['password'])
			//$pilih = 'sha256'; # Hash::create('sha256', $posmen[$jadual]['password'], HASH_PASSWORD_KEY)
			if (empty($posmen[$jadual]['password']))
				unset($posmen[$jadual]['password']);
			elseif ($pilih == 'md5')
				$posmen[$jadual]['password'] = 
				\Aplikasi\Kitab\Hash::rahsia('md5', $posmen[$jadual]['password']);
			elseif ($pilih == 'sha256')
				$posmen[$jadual]['password'] = 
				\Aplikasi\Kitab\Hash::create('sha256', $posmen[$jadual]['password'], HASH_PASSWORD_KEY);
		}//*/

		return $posmen; # pulangkan nilai
	}
#------------------------------------------------------------------------------------------------------------------
	public function medanCari($cariID) 
	{ 
		# Set pemboleubah untuk sql
        $senaraiMedan = ''
			. 'msic,keterangan,'
			. ' concat_ws("|",' . "\r"
			. ' 	concat_ws("","",seksyen),' . "\r"
			. ' 	concat_ws("","",bahagian),' . "\r"
			. ' 	concat_ws("","",kumpulan),' . "\r"
			. ' 	concat_ws("","",kelas)' . "\r"
 			. ' ) as jenis,'
			. 'msic2000,'
			. 'notakaki'
			. '';

		# pulangkan pemboleubah
		return $senaraiMedan;
	}
#------------------------------------------------------------------------------------------------------------------
	public function medanCari2($cariID) 
	{ 
		# Set pemboleubah untuk sql
        $senaraiMedan = ''
			. 'msic,kod_produk,keterangan,'
			. ' concat_ws("-",' . "\r"
			. ' 	concat_ws("","",msic),' . "\r"
			. ' 	concat_ws("","",p),' . "\r"
			. ' 	concat_ws("","",a)' . "\r"
 			. ' ) as jenis,'
			. 'mcpa2005,unit,code'
			. '';

		# pulangkan pemboleubah
		return $senaraiMedan;
	}
#------------------------------------------------------------------------------------------------------------------
	public function tukar_data_xml($dataCantum,$xml_user_info)
	{
		# function call to convert array to xml
		$xmlData = new \Aplikasi\Kitab\Tatasusunan;
		$xmlData->array_to_xml($dataCantum,$xml_user_info);

		# saving generated xml file
		//$namafail = 'sumber/fail/xml/emsic2008.xml';
		$namafail = 'sumber/fail/xml/emcpa2009.xml';
		$xml_file = $xml_user_info->asXML($namafail);
		//$xml_file = $xml_user_info->asXML();

		# success and error message based on xml creation
		if($xml_file)
		{
			echo 'XML file have been generated successfully.'
			. '<a target="_blank" href="' . URL . $namafail . '">Click here</a> | '
			. '<a href="' . URL . 'ruangtamu/pelawat">Ruang Legar</a>';
			//echo $xml_file;
		}
		else
		{
			echo 'XML file generation error.';
		}
		//*/
	}
#------------------------------------------------------------------------------------------------------------------
#==========================================================================================
}