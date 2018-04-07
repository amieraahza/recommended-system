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
			echo "\n"; 
			?><td><?php $this->popupPicture($data, $khas) ?></td><?php
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
		  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#my<?php echo $khas['idData'] ?>">
		  my<?php echo $khas['idData'] ?>
		  </button>

		  <!-- Modal -->
		  <?php $mencari2 = URL . 'homeuser/oneItem/' . $khas['id'] . '/' . $khas['idData'] ; ?> 
		  <form method="POST" action="<?php echo $mencari2 ?>" target="_blank">
		  <div class="modal fade" id="my<?php echo $khas['idData'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <h4 class="modal-title" id="myModalLabel">My<?php echo $khas['idData'] ?></h4>
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
	}

#==========================================================================================
	public function form($data, $khas)
	{	//https://stackoverflow.com/questions/8118266/integrating-css-star-rating-into-an-html-form
		echo '<div align="center">';
		echo $khas['gambarData'];
		?></div><div align="center">
		<ul class="form">
		<li class="rating">
		<input type="radio" name="rating" value="0" checked /><span class="hide"></span>
		<input type="radio" name="rating" value="1" /><span></span>
		<input type="radio" name="rating" value="2" /><span></span>
		<input type="radio" name="rating" value="3" /><span></span>
		<input type="radio" name="rating" value="4" /><span></span>
		<input type="radio" name="rating" value="5" /><span></span>
		</li>
		</ul><?php
		echo '</div>';?>
		<?php
	}
#==========================================================================================

#==========================================================================================

#==========================================================================================
#==========================================================================================
}
