<?php
namespace Aplikasi\Kitab; //echo __NAMESPACE__; 
class Html
{
#==========================================================================================
	# tambah input berasaskan type
	function tambahIkutType($jadual,$namaMedan,$senarai)
	{	# istihar pembolehubah 
		$jenisMedan = isset($senarai['jenis_medan'])? $senarai['jenis_medan']: '';
		$jenisData = isset($senarai['jenis_data'])? $senarai['jenis_data']: '';
		$labelDibawah = isset($senarai['label_dibawah'])? $senarai['label_dibawah']: '';
		$name = 'name="' . $jadual . '[' . $namaMedan . ']"';
		//$input = $name . ' value="' . $data . '"';
		$inputText = $name;
		$tabline = "\n\t\t\t";
		$tabline2 = "\n\t\t";
		$tabline4 = "\n\t\t\t\t";
		# butang 
		$birutua = 'btn btn-primary btn-mini';
		$birumuda = 'btn btn-info btn-mini';
		$merah = 'btn btn-danger btn-mini';

		//if ( in_array($jenisMedan,array(...)) )
		if(in_array($jenisMedan,array('textbox')))
		{#kod utk input text 
			$data = null;
			$input = '<div class="input-group input-group">' . $tabline
				   //. '<span class="input-group-addon"></span>' . $tabline
				   . '<input type="text" ' . $name . ' class="form-control">' . $tabline
				   . '<span class="input-group-addon">' . $labelDibawah . '</span>'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif ( in_array($jenisMedan,array('textboxtik')) )
		{#kod untuk textbox dan tik
			$data = null;
			$pecah = explode('|', $jenisData);
			$input = '<div class="input-group input-group">' . $tabline
				   //. '<span class="input-group-addon"></span>' . $tabline
				   . '<input type="text" ' . $inputText . ' value="' . $pecah[0] . '"'
				   . ' class="form-control">' . $tabline
				   . '<span class="input-group-addon">'
				   . $tabline . '<input type="checkbox" value="x">'
				   . $pecah[1] . '</span>'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif ( in_array($jenisMedan,array('textbox2textbox')) )
		{#kod untuk textbox dan tik
			$input = '';
			$nama = @explode('-', $namaMedan);
			$label = @explode('|', $labelDibawah);
			$i2 = '';
			for($m = 0; $m < count($nama); $m++):
				$i2 .= '<span class="input-group-addon">' . $label[$m] . '</span>' . $tabline;
				$i2 .= '<input type="text" ' . $nama[$m] . ' class="form-control">' . $tabline;
			endfor;

			$input	.= '<div class="input-group input-group">' . $tabline
					. $i2 . $tabline2 . '</div>' 
					. '';
		}
		elseif ( in_array($jenisMedan,array('password','kataLaluan')) )
		{#kod untuk input password
			$input = '<input type="password" ' . $name
				   . $tabline . ' placeholder="Tukar kata laluan"'
				   . ' class="form-control">'
				   . '';
		}
		elseif(in_array($jenisMedan,array('textarea')))
		{#kod utk textarea
			$input = '<div class="input-group input-group">' . $tabline
				   . '<textarea ' . $name . ' rows="5" cols="20"' . $tabline
				   . ' class="form-control"></textarea>' . $tabline 
				   . '<span class="input-group-addon">' . $labelDibawah . '</span></div>'
				   . '';
		}
		elseif ( in_array($jenisMedan,array('select')) )
		{#kod untuk input select option
			# set pembolehubah
			$input2 = Html_Input::dropmenuInsert($tabline, $jenisData);

			# cantumkan dalam input
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . '<select ' . $name . ' class="form-control">' . $tabline
				   . $input2 . '</select>' . $labelBawah($labelDibawah)
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif ( in_array($jenisMedan,array('select2select')) )
		{#kod untuk input select option
			# set pembolehubah
			$i2 = null;
			$nama = @explode('-', $namaMedan);
			$label = @explode('|', $labelDibawah);

			for($mula = 0; $mula < count($nama); $mula++):
				$i2 .= $tabline . '<span class="input-group-addon">' 
					. $label[$mula] . '</span>' . $tabline
					. $tabline4 . '<select name="' . $jadual 
					. '[' . $nama[$mula] . ']"'
					. ' class="form-control">'
					. Html_Input::dropmenuInsert($tabline4, $jenisData)
					. '</select>';
			endfor;

			# cantumkan dalam input
			$input = '<div class="input-group input-group">' . $tabline
			       . $i2 . $tabline2 . '</div>' . '';
		}
		elseif ( in_array($jenisMedan,array('manyselect')) )
		{#kod untuk input select option
			# set pembolehubah
			$input2 = null;
			$pecahan = @explode('|', $jenisData);
			$nama = @explode('-', $namaMedan);

			$input2 .= '<div class="row"><!-- added div.row -->';
			for($mula = 0; $mula < count($pecahan); $mula++):		
				$input2 .= $tabline . '<div class="col-sm-4">'
						. $tabline4 . '<select name="' . $jadual 
						. '[' . $nama[$mula] . ']"'
						. ' class="form-control">'
						. Html_Input::dropmenuInsert($tabline4, $pecahan[$mula])
						. $tabline4 . '</select>' . $tabline
						. '</div><!-- class="col-sm-4" -->';
			endfor;
			$input2 .= $tabline . '</div><!-- class="row" -->';

			# cantumkan dalam input
			$input = '<div class="input-group input-group-sm">' . $tabline
			       . $input2 . $tabline2 . '</div>' . '';
		}
		elseif ( in_array($jenisMedan,array('selecttiktextbox')) )
		{#kod untuk input select option
			# set pembolehubah
			$input2 = null;
			$kosong = '&nbsp;&nbsp;';
			$tatasusunan = explode(',', $jenisData);
			$input2 .= '<span class="input-group-addon">';
			foreach ($tatasusunan as $key => $value)
			{
				$input2 .= $tabline 
						. '<input type="radio" ' . $name
						. ' value="' . ucfirst($value) . '">'
						. $kosong . ucfirst($value) . $kosong;
			}
			$lain2 = $tabline . ' | ' //'<input type="radio">' 
				. $kosong . $labelDibawah . $kosong;
			$input2 .= $tabline . $lain2
					. '</span>' . $tabline;

			# cantum dengan textbox
			$input = '<input type="text" ' . $name . ' class="form-control">';

			# cantumkan dalam input
			$input = '<div class="input-group input-group-sm">' . $tabline
				   . $input2 . $input
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif ( in_array($jenisMedan,array('blockquote')) )
		{#kod untuk blockquote
			$data = null;
			$input = '<blockquote>'
				   . '<p class="form-control-static text-info">' . $data . '</p>'
				   //. '<small>Alamat <cite title="Source Title">baru</cite></small>'
				   . '</blockquote>';
		}
		else
		{#kod untuk lain2
			$data = $jenisData;
			$input = '<p class="form-control-static text-info">' . $data . '</p>';
		}

		return $input; # pulangkan nilai		
	}
###///////////////////////////////////////////////////////////////////////////////////////////////////////
	# mula untuk kod php+html 
	function papar_jadual($row, $myTable, $pilih, $classTable = null)
	{
		if ($pilih == 1) 
		{
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
			?><!-- Jadual <?php echo $myTable ?> -->
			<table border="1" class="excel" id="example">
			<?php $printed_headers = false; # mula bina jadual
			#-----------------------------------------------------------------
			for ($kira=0; $kira < count($row); $kira++)
			{	# print the headers once: 
				if ( !$printed_headers ) : ?><thead><tr>
			<th>#</th><?php foreach ( array_keys($row[$kira]) as $tajuk ) :
			?><th><?php echo $tajuk ?></th>
			<?php endforeach; ?></tr></thead>
			<?php	$printed_headers = true; 
				endif;
			#- print the data row --------------------------------------------
			?><tbody><tr>
			<td><?php echo $kira+1 ?></td>	
			<?php foreach ( $row[$kira] as $key=>$data ) : 
			?><td><?php echo $data ?></td>
			<?php endforeach; ?></tr></tbody>
			<?php
			}#-----------------------------------------------------------------
			?></table><?php echo "\r" ?><!-- Jadual <?php echo $myTable ?> --><?php
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
		} elseif ($pilih == 2) {
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
			?><!-- Jadual <?php echo $myTable ?> -->
			<table border="1" class="excel" id="example"><?php
			$printed_headers = false; # mula bina jadual
			#-----------------------------------------------------------------
			for ($kira=0; $kira < count($row); $kira++)
			{	# cetak tajuk hanya sekali sahaja :
				if ( !$printed_headers ) : ?>
			<thead><tr>
			<th>#</th><?php
					foreach ( array_keys($row[$kira]) AS $tajuk ) 
					{ 	if ( !is_int($tajuk) ) :
							$paparTajuk = ($tajuk=='nama') ?
							$tajuk . '(jadual:' . $myTable . ')'
							: $tajuk; ?>
			<th><?php echo $paparTajuk ?></th>
			<?php		endif;
					}
			?></tr></thead><?php
					$printed_headers = true; 
				endif; 
			#- cetak hasil $data ---------------------------------------------?>
			<tbody><tr>
			<td><?php echo $kira+1 ?></td>	
			<?php
				foreach ( $row[$kira] AS $key=>$data ) 
				{
					?><td><?php echo $data ?></td><?php
				} 
				?></tr></tbody>
			<?php
			}
			#-----------------------------------------------------------------
			?></table><!-- Jadual <?php echo $myTable ?> --><?php
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
		} elseif ($pilih == 3) {
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
			?><!-- Jadual <?php echo $myTable ?>  --><?php
			for ($kira=0; $kira < count($row); $kira++)
			{// ulang untuk $kira++ ?>
			<table border="1" class="<?php echo $classTable ?>" id="example">
			<tbody><?php foreach ( $row[$kira] as $key=>$data ):?>
			<tr>
			<td><?php echo $key ?></td>
			<td><?php echo $data ?></td>
			</tr>
			<?php endforeach; ?></tbody>
			</table>
			<?php
			}# ulang untuk $kira++ ?>
			<!-- Jadual <?php echo $myTable ?> --><?php
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
		} elseif ($pilih == 4) { 
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
			?><!-- Jadual <?php echo $myTable ?> -->
			<table class="<?php echo $classTable ?>">
			<?php $printed_headers = false; # mula bina jadual
			#-----------------------------------------------------------------
			for ($kira=0; $kira < count($row); $kira++)
			{	# cetak tajuk hanya sekali sahaja :
				if ( !$printed_headers ) : ?><thead><tr>
			<th>#</th><?php foreach ( array_keys($row[$kira]) as $tajuk ) :
			?><th><?php echo $tajuk ?></th><?php endforeach; 
			?></tr></thead>
			<?php	$printed_headers = true; 
				endif;
			# cetak hasil $data --------------------------------------------
			?><tbody><tr>
			<td><?php echo $kira+1 ?></td><?php 
				foreach ( $row[$kira] as $key=>$data ) : 
			?><td><?php echo $data ?></td><?php 
				endforeach; ?>  
			</tr></tbody>
			<?php
			}
			#-----------------------------------------------------------------
			?></table><?php echo "\r\t\t\t"; ?><!-- Jadual <?php echo $myTable ?> --><?php echo "\r\t\t\t";
	//////////////////////////////////////////////////////////////////////////////////////////////////////////
		} elseif ($jadual == 5) { 
		# nilai akan dipulangkan balik
			$bil_tajuk = $row['bil_tajuk'];// => 8
			$bil_baris = $row['bil_baris']; 

			$output  = null; 
			//$output .= '<br>$bil_tajuk=' . $bil_tajuk;
			//$output .= '<br>$bil_baris=' . $bil_baris;
			$output .= '<table border="1" class="excel" id="example">
			<thead><tr>
			<th colspan="' . $bil_tajuk . '">
			<strong>Jadual ' . $myTable . ' : ' . $bil_tajuk . '
			</strong></th>
			</tr></thead>';

			$printed_headers = false; # mula bina jadual
			#-----------------------------------------------------------------
			for ($kira=0; $kira < $bil_baris; $kira++)
			{	# print the headers once:
				if ( !$printed_headers ) 
				{##=================================================
				$output .= "\r\t<thead><tr>\r\t<th>#</th>";
				foreach ( array_keys($row[$kira]) as $tajuk ) :
					$output .= "\r\t" . '<th>' . $tajuk . '</th>';
				endforeach;
				$output .= "\r\t" . '</tr></thead>';
				##==================================================
					$printed_headers = true; 
				} 
			#--- print the data row ------------------------------------------
				$output .= "\r\t<tbody><tr>\r\t<td>" . ($kira+1) . '</td>';
				foreach ( $row[$kira] as $key=>$data ) :
					$output .= "\r\t" . '<td>' . $data . '</td>';
				endforeach; 
				$output .= "\r\t" . '</tr></tbody>';
			}
			#-----------------------------------------------------------------
			$output .= "\r\t" . '</table>';

			return $output;

		} # tamat if ($jadual == 5
	}
	# tamat untuk kod php+html 
#==========================================================================================
	function paparURL($key, $data, $myTable = null, $cariA= null, $cariB = null)
	{
		if ($key=='no')
		{# primary key
				$k0 = URL . 'pelajar/papar/profil/' . $data;
				$p0 = '<a target="_blank" href="' . $k0 . '">'
				. $this->iconFA(0) . '</a>&nbsp;';

				$k1 = URL . 'pelajar/ubah/profil/' . $data;
				$p1 = '<a target="_blank" href="' . $k1 . '">'
				. $this->iconFA(1) . '</a>&nbsp;';

			?><td><?php echo $p0 . $p1 ?></td><?php
			?><td><?php echo $data ?></td><?php
		}
		elseif(in_array($key,array('posdaftar')))
		{
				list($k,$btn) = $this->posdaftar($data);
				$pautan = ($data==null) ? $data :
				'<a target="_blank" href="' . $k[3] . '" class="' 
				. $this->butang . '">' . $data . '</a>';

			?><td><?php echo $pautan ?></td><?php
		}
		elseif(in_array($key,array('Mesej')))
		{
			?><td><?php echo nl2br($data) ?></td><?php
		}
		elseif(in_array($key, array('website_id', 'item_id')))
		{
			$k0 = URL . 'homeadmin/updateform/' . $myTable . '/' . $data;
			$p0 = '<a target="_blank" href="' . $k0 . '">'
				. $this->iconFA(1) . '</a>&nbsp;';

			?><td><?php echo $p0 . $data
			?></td><?php
		}
		else
		{
			?><td><?php echo $data ?></td><?php
		}//*/
	}
#==========================================================================================
	public function paparLink($jenis = '0')
	{
		# papar URL yang terlibat
		$k[0] = URL . 'kawalan/posdaftar/';
		
		if ($jenis == '2')
		{	
			echo $pautan = '<a target="_blank" href="#" class="' 
			. $this->butang . '">' . $a . '</a>';
		}
		elseif($jenis == '1')
		{
			echo '<td>' . $a[0] . '&nbsp;' . $a[1] . '</td>';
		}
		else
		{
			echo '<td><input type="checkbox" value="x"></td>';
		}//*/
	}
#==========================================================================================
	public function butang($warna = 'info',$saiz = 'kecil')
	{ 
		$btnW['primary'] = 'btn btn-primary'; # birutua
		$btnW['info'] = 'btn btn-info'; # birumuda - utama
		$btnW['danger'] = 'btn btn-danger'; # merah
		$btnW['success'] = 'btn btn-success'; #hijau
		$btnS['kecil'] = ' btn-mini'; # - utama
		
		$btn = $btnW[$warna] . $btnS[$saiz];
		return $btn;
	}
#==========================================================================================
	public function iconFA($pilih)
	{# icon font awesome
		$a[0] = '<i class="fa fa-user-o" aria-hidden="true"></i>';
		$a[1] = '<i class="fa fa-pencil" aria-hidden="true"></i>';

		return $a[$pilih];
	}
#==========================================================================================
	public function pautanTD($target, $href, $class, $data)
	{
		if ($target == null) { $t = ''; }
		else { $t = ' target="' . $target . '"'; }
	
		?><a<?php echo $t ?> href="<?php echo $href ?>" class="<?php
		echo $class ?>"><?php echo $data ?></a><?php
	}
#==========================================================================================
	public function posdaftar($data)
	{
		$k[0] = URL . 'kawalan/posdaftar/' . $data;
		$k[1] = 'http://poslajutracking.herokuapp.com/track/' . $data;
		$k[2] = 'http://www.pos.com.my/postal-services/quick-access/?track-trace#trackingIds=' . $data;
		$k[3] = 'https://track.aftership.com/malaysia-post/' . $data;

		# butang 
		$btn = $this->butang('birumuda');

		return array($k,$btn);
	}
#==========================================================================================
}
