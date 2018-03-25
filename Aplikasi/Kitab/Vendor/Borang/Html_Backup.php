<?php
namespace Aplikasi\Kitab; //echo __NAMESPACE__; 
class Html_Backup
{
#==========================================================================================
	public function tambah1Input($paparSahaja,$jadual,$kira,$medan,$data)
	{	# istihar pembolehubah 
		$name = 'name="' . $jadual  . '[' . $kira . '][' . $medan . ']"';
		$tabline = "\n\t\t";
		$tabline2 = "\n\t\t\t\t";

		if(in_array($medan,array('nama','alamat1','alamat2','bandar'))):
			$input = '<textarea ' . $name . ' rows="1" cols="20"' . $tabline2 
				   . ' class="form-control">' . $data . '</textarea>'
				   . $tabline2 //. '<pre>' . $data . '</pre>'
				   . '';
		else:
			$input = '' //. '<span class="input-group-addon"></span>'
				   . '<input type="text" ' . $name 
				   . ( (empty($data)) ? '': ' value="' . $data . '"')
				   . ' placeholder=' . $medan . '[' . $kira . ']' 
				   . ' class="form-control">'
				   . '';
		endif;

		# pulangkan nilai
		return '<td>' . $input . '</td>' . $tabline;
	}

	public function tambahInput($paparSahaja,$jadual,$kira,$key,$data)
	{	# istihar pembolehubah 
		$name = 'name="' . $jadual . '[' . $key . ']"';
		$inputText = $name . ' value="' . $data . '"';
		$tabline = "\n\t\t\t\t\t";
		$tabline2 = "\n\t\t\t\t";
		# butang 
		$birutua = 'btn btn-primary btn-mini';
		$birumuda = 'btn btn-info btn-mini';
		$merah = 'btn btn-danger btn-mini';

		//if ( in_array($key,array(...)) )
		if(in_array($key,array('nota','catatan')))
		{#kod utk textarea
			$input = '<textarea ' . $name . ' rows="1" cols="20"' . $tabline2 
				   . ' class="form-control">' . $data . '</textarea>'
				   . $tabline2 . '<pre>' . $data . '</pre>'
				   . '';
		}
		elseif(in_array($key,array('nama','email','responden','fe')))
		{#kod utk input text saiz besar
			$input = '<div class="input-group input-group-lg">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($key,array('respon','respon2')))
		{#kod utk input text 3 aksara sahaja
			$input = '<div class="input-group input-group">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($key,array('notel','nofax','nohp')))
		{#kod utk input text saiz kecil
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($key,array('hasil','belanja','staf','gaji','aset','stok')))
		{#kod utk input paparkan nilai asal sebelum ubah
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">Nilai</span>'
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">' . $tabline
				   . '<span class="input-group-addon">' . kira($data) . '</span>'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif ( in_array($key,array('password')) )
		{#kod untuk input password
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<input type="password" ' . $name
				   . $tabline . ' placeholder="Tukar kata laluan"'
				   . ' class="form-control">'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif ( in_array($key,array('lawat','terima','hantar','hantar_prosesan')) )
		{#kod utk input tarikh
		#terima - style="font-family:sans-serif;font-size:10px;"
			$tandaX = 'name="' . $jadual . '[' . $key . 'X]"';
			$dataX = ($key=='hantar_prosesan') ?
				'<input type="checkbox" ' . $tandaX . ' value="x">Utk Prosesan : ' . $data
				: '<input type="checkbox" ' . $tandaX . ' value="x">' . $data;
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">' . $dataX . '</span>' . $tabline
				   . '<input type="date" ' . $inputText //. 'class="input-date tarikh" readonly>'
				   . $tabline . ' class="form-control date-picker"'
				   . $tabline . ' placeholder="Cth: 2014-05-01"'
				   . $tabline . ' id="date' . $key . '" data-date-format="yyyy/mm/dd"/>'
				   . $tabline2 . '</div>'
				   . '';			   
		}
		elseif ( in_array($key,array('jantina')) )
		{#kod untuk input select option
			# set pembolehubah
			$input2 = null;
			$senaraiJantina = array('lelaki','perempuan');

			foreach ($senaraiJantina as $key => $value)
			{
				$input2 .= '<option value="' . $value . '"';
				$input2 .= ($value == $data) ? ' selected>*' : '>';
				$input2 .= ucfirst(strtolower($value));
				$input2 .= '</option>' . $tabline;
			}

			# cantumkan dalam input
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<select ' . $name . ' class="form-control">' . $tabline
				   . $input2 . '</select>'
				   . $tabline2 . '</div>'
				   . '';
		}
		# kod html untuk bukan input type
		elseif ( in_array($key,array('keterangan')) )
		{#kod untuk papar jadual
			//echo '$paparSahaja-><pre>'; print_r($paparSahaja) . '<pre>';
			//var_export($paparSahaja) . '<pre>';
			# set nama class untuk jadual
			$jadual1 = ' table-striped'; # tambah zebra
			$jadual2 = ' table-bordered';
			$jadual3 = ' table-hover';
			$jadual4 = ' table-condensed'; 
			$classJadual = 'table' . $jadual4 . $jadual3;
			foreach ($paparSahaja as $myTable => $bilang)
			{# mula ulang $bilang
				$this->papar_jadual($bilang, $myTable, $pilih=4, $classJadual);
			}# tamat ulang $bilang //*/

			$input = '';
		}
		elseif ( in_array($key,array('alamat_baru')) )
		{#kod untuk  blockquote
			$input = '<blockquote>'
				   . '<p class="form-control-static text-info">' . $data . '</p>'
				   //. '<small>Alamat <cite title="Source Title">baru</cite></small>'
				   . '</blockquote>';
		}
		else
		{#kod untuk lain2
			$input = '<p class="form-control-static text-info">' . $data . '</p>';
		}

		return $input; # pulangkan nilai
	}
#==========================================================================================
	public function cariInput($paparSahaja,$jadual,$kira,$key,$data)
	{	# istihar pembolehubah 
		$name = 'name="' . $jadual . '[' . $key . ']"';
		$inputText = $name . ' value="' . $data . '"';
		$dataType = myGetType($data);
		$tabline = "\n\t\t\t\t\t";
		$tabline2 = "\n\t\t\t\t";
		# butang 
		$birutua = 'btn btn-primary btn-mini';
		$birumuda = 'btn btn-info btn-mini';
		$merah = 'btn btn-danger btn-mini';

		//if ( in_array($key,array(...)) )
		if(in_array($key,array('nota','catatan','Mesej')))
		{#kod utk textarea
			$input = '<textarea ' . $name . ' rows="1" cols="20"' . $tabline2 
				   . ' class="form-control">' . $data . '</textarea>'
				   . $tabline2 . '<pre>' . $data . '</pre>'
				   . '';
		}
		elseif(in_array($key,array('posdaftar')))
		{#kod utk kesan API dan input text saiz besar
			# tatasusuan API posdaftar
			list($k,$btn) = $this->posdaftar($data);
			$data2 = ($data==null) ? $data :
				'<a target="_blank" href="' . $k[3] . '">' . $data . '</a>';
			$input = '<div class="input-group input-group-lg">' . $tabline
				   . '<span class="input-group-addon">' . $data2 . '</span>' . $tabline
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($key,array('namax','emailx','responden','fe')))
		{#kod utk input text saiz besar
			$input = '<div class="input-group input-group-lg">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($key,array('respon','nobatch','feprosesan')))
		{#kod utk input text 3 aksara sahaja
			$input = '<div class="input-group input-group">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($key,array('Bayaran','Status','temujanji')))
		{#kod utk input text saiz biasa
			$input = '<div class="input-group input-group">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($key,array('notel','nofax','nohp')))
		{#kod utk input text saiz kecil
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($key,array('hasil','belanja','bilpekerja','gaji','hartatetap','stokakhir',
			'staf','aset','stok')))
		{#kod utk input paparkan nilai asal sebelum ubah
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">Nilai</span>'
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">' . $tabline
				   . '<span class="input-group-addon">' . kira($data) . '</span>'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($key,array('output','input','nilaitambah','ioratio')))
		{#kod utk input paparkan nilai asal sebelum ubah
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">Nilai</span>'
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">' . $tabline
				   . '<span class="input-group-addon">' . kira($data) . '</span>'
				   . $tabline2 . '</div>'
				   . '';
		}//*/
		elseif ( in_array($key,array('password','kataLaluan')) )
		{#kod untuk input password
			$input = ''//'<div class="input-group input-group-sm">' . $tabline
				   //. '<span class="input-group-addon"></span>' . $tabline
				   . '<input type="password" ' . $name
				   . $tabline . ' placeholder="Tukar kata laluan"'
				   . ' class="form-control">'
				   //. $tabline2 . '</div>'
				   . '';
		}
		elseif ( in_array($key,array('lawat','terima','hantar','hantar_prosesan')) )
		{#kod utk input tarikh
		#terima - style="font-family:sans-serif;font-size:10px;"
			$tandaX = 'name="' . $jadual . '[' . $key . 'X]"';
			$dataX = ($key=='hantar_prosesan') ?
				'<input type="checkbox" ' . $tandaX . ' value="x">Utk Prosesan : ' . $data
				: '<input type="checkbox" ' . $tandaX . ' value="x">' . $data;
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">' . $dataX . '</span>' . $tabline
				   . '<input type="date" ' . $inputText //. 'class="input-date tarikh" readonly>'
				   . $tabline . ' class="form-control date-picker"'
				   . $tabline . ' placeholder="Cth: 2014-05-01"'
				   . $tabline . ' id="date' . $key . '" data-date-format="yyyy/mm/dd"/>'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif ( in_array($key,array('posdaftar_terima')) )
		{#kod untuk input select option
			# set pembolehubah
			$input2 = null;
			$senaraiInput = array('Belum','Proses','Terima','KadKuning','Borang');

			foreach ($senaraiInput as $key => $value)
			{
				$input2 .= '<option value="' . $value . '"';
				$input2 .= ($value == $data) ? ' selected>*' : '>';
				$input2 .= ucfirst(strtolower($value));
				$input2 .= '</option>' . $tabline;
			}

			# cantumkan dalam input
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<select ' . $name . ' class="form-control">' . $tabline
				   . $input2 . '</select>'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif ( in_array($key,array('jantina')) )
		{#kod untuk input select option
			# set pembolehubah
			$input2 = null;
			$senaraiJantina = array('lelaki','perempuan');

			foreach ($senaraiJantina as $key => $value)
			{
				$input2 .= '<option value="' . $value . '"';
				$input2 .= ($value == $data) ? ' selected>*' : '>';
				$input2 .= ucfirst(strtolower($value));
				$input2 .= '</option>' . $tabline;
			}

			# cantumkan dalam input
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
				   . '<select ' . $name . ' class="form-control">' . $tabline
				   . $input2 . '</select>'
				   . $tabline2 . '</div>'
				   . '';
		}
		# kod html untuk bukan input type
		elseif ( in_array($key,array('keterangan')) )
		{#kod untuk papar jadual
			//echo '$paparSahaja-><pre>'; print_r($paparSahaja) . '<pre>';
			//var_export($paparSahaja) . '<pre>';
			# set nama class untuk jadual
			$jadual1 = ' table-striped'; # tambah zebra
			$jadual2 = ' table-bordered';
			$jadual3 = ' table-hover';
			$jadual4 = ' table-condensed'; 

			$classJadual = 'table' . $jadual4 . $jadual3;
			foreach ($paparSahaja as $myTable => $bilang)
			{# mula ulang $bilang
				$this->papar_jadual($bilang, $myTable, $pilih=4, $classJadual);
			}# tamat ulang $bilang //*/

			$input = '';
		}
		elseif ( in_array($key,array('alamat_baru')) )
		{#kod untuk  blockquote
			$input = '<blockquote>'
				   . '<p class="form-control-static text-info">' . $data . '</p>'
				   //. '<small>Alamat <cite title="Source Title">baru</cite></small>'
				   . '</blockquote>';
		}
		/*elseif($dataType=='string' && !in_array($key,array('level')))
		{
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<span class="input-group-addon">' . $data . '</span>'
				   . '<input type="text" ' . $inputText 
				   . ' class="form-control">' . $tabline
				   . $tabline2 . '</div>'
				   . '';
		}*/
		//elseif($dataType=='numeric')
		//elseif($dataType=='NULL')
		else
		{#kod untuk lain2
			$input = '<p class="form-control-static text-info">' . $data . '</p>';
		}

		return $input; # pulangkan nilai
	}
#==========================================================================================
}
