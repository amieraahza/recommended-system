<?php
namespace Aplikasi\Kitab; //echo __NAMESPACE__; 
class Html_TD
{
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
		elseif(in_array($key,array('Picture')))
		{
			?><td><?php $this->popupPicture($data) ?></td><?php
		}
		else
		{
			?><td><?php echo $data ?></td><?php
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
	public function popupPicture($data)
	{
		
	}

#==========================================================================================

#==========================================================================================

#==========================================================================================

#==========================================================================================
#==========================================================================================
}
