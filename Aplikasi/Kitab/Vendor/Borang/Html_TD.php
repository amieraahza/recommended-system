<?php
namespace Aplikasi\Kitab; //echo __NAMESPACE__; 
class Html_TD
{
#==========================================================================================
	function paparURL($key, $data, $myTable = null, $khas = null, $cariB = null)
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
		elseif(in_array($key,array('item_website')))
		{
			$k1 = 'http://' . bersih($data);
			$p1 = '<a target="_blank" href="' . $k1 . '">'
				. ($k1) . '</a>&nbsp;';

			?><td><?php echo $p1 ?></td><?php

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
		elseif(in_array($key,array('rating')))
		{
			//echo "<td>$data</td>"; 
			echo "\n";
			?><td><?php $this->popupPicture($data, $khas) ?></td><?php
		}
		elseif(in_array($key,array('website_id')))
		{
				$k[1] = URL . 'homeadmin2/updateform/' 
				. $myTable . '/' . $data;
				$pautan = ($data==null) ? $data :
				'<a target="_blank" href="' . $k[1] . '" class="' 
				. $this->butang() . '">' . $data . '</a>';

			?><td><?php echo $pautan ?></td><?php
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
	public function popupPicture($data, $khas)
	{
		?>
		<!-- Button trigger modal | start ------------------------------------------------------------------------------------------------------- -->
		  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#rate<?php echo $khas['idData'] ?>">
		  Rate item
		  </button>

		  <!-- Modal -->
		  <?php $mencari2 = URL . 'homeuser/saveRating/' . $khas['id'] . '/' 
		  	. $khas['idData'] . '/' . $khas['searchItem'] ; ?> 
		  <form method="POST" action="<?php echo $mencari2 ?>">
		  <div class="modal fade" id="rate<?php echo $khas['idData'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <h4 class="modal-title" id="myModalLabel">Rate Item!</h4>
				</div>
				<div class="modal-body">
<!-- form start------------------------------------------------------------------------------------------------------------------------------- -->
<?php $this->form($data, $khas); echo "\n"; ?>
<!-- form end------------------------------------------------------------------------------------------------------------------------------- -->
				</div>
				<div class="modal-footer">
					<input type="submit" name="butang" value="Simpan" class="btn btn-primary btn-large">
					<!-- input type="submit" name="butang" value="Buang" class="btn btn-danger btn-large" -->
				</div>
			  </div>
			</div>
		  </div>
		  </form>
		<!-- Button trigger modal | end ------------------------------------------------------------------------------------------------------- -->
		<?php
		//echo '<br>data=' . $data;
		$this->paparRating($data, $khas);
	}

#==========================================================================================
	public function form($data, $khas)
	{	//https://stackoverflow.com/questions/8118266/integrating-css-star-rating-into-an-html-form
		echo '<div align="center">';
		echo $khas['gambarData'];
		?></div><div align="center">
		<ul class="form">
		<li class="rating">
		<input type="radio" name="admin_item2[0][rating]" value="0" checked /><span class="hide"></span>
		<input type="radio" name="admin_item2[0][rating]" value="1" /><span></span>
		<input type="radio" name="admin_item2[0][rating]" value="2" /><span></span>
		<input type="radio" name="admin_item2[0][rating]" value="3" /><span></span>
		<input type="radio" name="admin_item2[0][rating]" value="4" /><span></span>
		<input type="radio" name="admin_item2[0][rating]" value="5" /><span></span>
		</li>
		</ul><?php
		echo '</div>';?>
		<?php
	}
#==========================================================================================
		public function form1($data, $khas)
	{	//https://stackoverflow.com/questions/8118266/integrating-css-star-rating-into-an-html-form
		echo '<div align="center">' . "\n" . $khas['gambarData'] . "\n" ?>
		<ul class="form">
		<li class="rating">
		<input type="radio" name="admin_item2[0][rating]" id="str0" value="0"><label for="str0"></label>
	    <input type="radio" name="admin_item2[0][rating]" id="str1" value="1"><label for="str1"></label>
	    <input type="radio" name="admin_item2[0][rating]" id="str2" value="2"><label for="str2"></label>
	    <input type="radio" name="admin_item2[0][rating]" id="str3" value="3"><label for="str3"></label>
	    <input type="radio" name="admin_item2[0][rating]" id="str4" value="4"><label for="str4"></label>
	    <input type="radio" name="admin_item2[0][rating]" id="str5" value="5"><label for="str5"></label>
		</li>
		</ul><?php
		echo '</div>';?>
		<?php
	}
#==========================================================================================
	public function paparRating($data, $khas)
	{	//https://stackoverflow.com/questions/8118266/integrating-css-star-rating-into-an-html-form
		if($data == NULL): ?>
		give rating
		<?php else: ?><div align="center">
		<?php for($kira = 0; $kira < $data; $kira++): ?>
		<i class="fa fa-star" aria-hidden="true"></i>
		<?php endfor; ?>
		</div>
		<?php
		endif; 
	}
#==========================================================================================

#==========================================================================================
#==========================================================================================
}
