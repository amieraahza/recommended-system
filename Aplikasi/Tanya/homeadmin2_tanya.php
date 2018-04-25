<?php
namespace Aplikasi\Tanya; //echo __NAMESPACE__; 
class Homeadmin2_Tanya extends \Aplikasi\Kitab\Tanya
{
#====================================================================================================
	public function __construct()
	{
		parent::__construct();
	}
#---------------------------------------------------------------------------------------------------#
	public function semakPost($myTable, $senarai, $post)
	{
		# validasi data $_POST, masuk dalam $posmen, validasi awal
		foreach ($post as $myTable => $value)
			if ( in_array($myTable,$senarai) )
				foreach ($value as $key => $value2)
					foreach ($value2 as $kekunci => $papar)
						$posmen[$myTable][0][$kekunci] = bersih($papar);
						//echo "$kekunci";
		
		# pulangkan pemboleubah
		return $posmen;		
	}
#---------------------------------------------------------------------------------------------------#
	public function semakPost2($post, $myTable, $senaraiJadual, $medanID, $dataID)
	{
		$posmen = array();
		foreach ($post as $myTable => $value)
			if ( in_array($myTable,$senaraiJadual) )
				foreach ($value as $kekunci => $papar)
				{
					$posmen[$myTable][$kekunci] = bersih($papar);
					//$posmen[$myTable][$medanID] = $dataID;
				}   $posmen[$senaraiJadual[0]][$medanID] = $dataID;


		return $posmen;
	}
#---------------------------------------------------------------------------------------------------#
	public function semakPost3($post, $myTable, $senaraiJadual, $medanID, $dataID)
	{
		$posmen = array();
		$posmen[$myTable]['delete_status'] = '1';
		$posmen[$senaraiJadual[0]][$medanID] = $dataID;

		return $posmen;
	}
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#
	public function ubahPosmen($posmen)
	{
		//echo '<pre>$posmen='; print_r($posmen) . '</pre>';
		$cantum = "('";
		$senaraiData = array();
		foreach ($posmen as $key => $value1):
			foreach ($value1 as $key2): 
			foreach ($key2 as $key3 => $dataS):
				$cantum .= ($dataS) . "', '"; 
			endforeach;
		endforeach;
		endforeach;
		$cantum .= "')";
		$senaraiData[0] = $cantum;
		$senaraiData[0] = substr($senaraiData[0], 0, -5) . ')';
		# pulangkan pemboleubah
		return $senaraiData;
	}
#---------------------------------------------------------------------------------------------------#
	public function selectTable($action)
	{
		# Set pemboleubah utama
		if ($action == 'admin_website') 
		{
			$myTable = 'admin_website';
			$senarai = array('admin_website');
			$medan = '`website_name`,`website_link`,`note`';
		}
		elseif ($action == 'admin_item') 
		{
			$myTable = 'admin_item';
			$senarai = array('admin_item');
			$medan = '`item_name`,`item_website`, `link_item`, `link_picture`, `description`';
		}
		elseif ($action == 'admin_category') 
		{
			$myTable = 'admin_category';
			$senarai = array('admin_category');
			$medan = '`category_name`, `item_id`, `website_id`';

		}
		elseif ($action == 'rating')
		{
			$myTable = 'rating';
			$senarai = array('rating');
			$medan = '`user_id`, `website_id`, `rating`, `category_id`';
		}

		/*echo 'kite berada di kelas Homeadmin_Tanya function selectTable';
		echo '<pre>action:'; print_r($action); echo '</pre>';
		echo '<pre>myTable:'; print_r($myTable); echo '</pre>';
		echo '<pre>senarai:'; print_r($senarai); echo '</pre>';
		echo '<pre>medan:'; print_r($medan); echo '</pre>';//*/

		return array($myTable, $senarai, $medan);
	}
#---------------------------------------------------------------------------------------------------#
	public function list($action)
	{
		if ($action == 'admin_website') 
		{
			$myTable = 'admin_website';
			$senarai = array('admin_website');
			$medan = '`website_name`,`website_link`,`note`';
		}
		elseif ($action == 'admin_item') 
		{
			$myTable = 'admin_item';
			$senarai = array('admin_item');
			$medan = '`item_name`,`item_website`, `link_item`, `link_picture`, `description`';
		}
		elseif ($action == 'admin_category') 
		{
			$myTable = 'admin_category';
			$senarai = array('admin_category');
			$medan = '`category_name`, `item_id`, `website_id`';

		}
		elseif ($action == 'rating')
		{
			$myTable = 'rating';
			$senarai = array('rating');
			$medan = '`user_id`, `website_id`, `rating`, `category_id`';
		}

		/*echo '<pre>action:'; print_r($action); echo '</pre>';
		echo '<pre>myTable:'; print_r($myTable); echo '</pre>';
		echo '<pre>senarai:'; print_r($senarai); echo '</pre>';
		echo '<pre>medan:'; print_r($medan); echo '</pre>';*/

		return array($myTable, $senarai, $medan);
	}
#---------------------------------------------------------------------------------------------------#
	public function updateForm($action)
	{
		if ($action == 'admin_website') 
		{
			$myTable = 'admin_website';
			$senarai = array('admin_website');
			$medan = '`website_id`,`website_name`,`website_link`,`note`';
			$cariMedan = 'website_id';
			$updateLink = 'form_update_website';
			$deleteLink = 'website/list/';
		}
		elseif ($action == 'admin_item') 
		{
			$myTable = 'admin_item';
			$senarai = array('admin_item');
			$medan = '`item_id`,`item_name`,`item_website`, `link_item`, `link_picture`, `description`';
			$cariMedan = 'item_id';
			$updateLink = 'form_update_item';
			$deleteLink = 'item/list/';
		}
		elseif ($action == 'admin_category') 
		{
			$myTable = 'admin_category';
			$senarai = array('admin_category');
			$medan = '`category_id`,`category_name`, `item_id`, `website_id`';
			$cariMedan = 'category_id';
			$updateLink = 'form_update_category';
			$deleteLink = 'category/list/';
		}
		elseif ($action == 'rating')
		{
			$myTable = 'rating';
			$senarai = array('rating');
			$medan = '`rating_id`,`user_id`, `website_id`, `rating`, `category_id`';
			$cariMedan = 'rating_id';
			$updateLink = 'form_update_rating';
			$deleteLink = 'rating/list/';
		}

		/*echo '<pre>action:'; print_r($action); echo '</pre>';
		echo '<pre>myTable:'; print_r($myTable); echo '</pre>';
		echo '<pre>senarai:'; print_r($senarai); echo '</pre>';
		echo '<pre>medan:'; print_r($medan); echo '</pre>';//*/

		return array($myTable, $senarai, $medan, $cariMedan, $updateLink, $deleteLink);
	}
#---------------------------------------------------------------------------------------------------#
	public function updateTable($action)
	{
		if ($action == 'admin_website') 
		{
			$myTable = 'admin_website';
			$senarai = array('admin_website');
			$medan = '`website_id`,`website_name`,`website_link`,`note`';
		}
		elseif ($action == 'admin_item') 
		{
			$myTable = 'admin_item';
			$senarai = array('admin_item');
			$medan = '`item_id`,`item_name`,`item_website`, `link_item`, `link_picture`, `description`';
		}
		elseif ($action == 'admin_category') 
		{
			$myTable = 'admin_category';
			$senarai = array('admin_category');
			$medan = '`category_id`,`category_name`, `item_id`, `website_id`';

		}
		elseif ($action == 'rating')
		{
			$myTable = 'rating';
			$senarai = array('rating');
			$medan = '`rating_id`,`user_id`, `website_id`, `rating`, `category_id`';
		}

		/*echo '<pre>action:'; print_r($action); echo '</pre>';
		echo '<pre>myTable:'; print_r($myTable); echo '</pre>';
		echo '<pre>senarai:'; print_r($senarai); echo '</pre>';
		echo '<pre>medan:'; print_r($medan); echo '</pre>';//*/

		return array($myTable, $senarai, $medan);
	}
#---------------------------------------------------------------------------------------------------#
	public function deleteform($action)
	{
		# Set pemboleubah utama
		if ($action == 'admin_website') 
		{
			$myTable = 'admin_website';
			$senarai = array('admin_website');
			$medan = '`website_name`,`website_link`,`note`';
		}
		elseif ($action == 'admin_item') 
		{
			$myTable = 'admin_item';
			$senarai = array('admin_item');
			$medan = '`item_name`,`item_website`, `link_item`, `link_picture`, `description`';
		}
		elseif ($action == 'admin_category') 
		{
			$myTable = 'admin_category';
			$senarai = array('admin_category');
			$medan = '`category_name`, `item_id`, `website_id`';

		}
		elseif ($action == 'rating')
		{
			$myTable = 'rating';
			$senarai = array('rating');
			$medan = '`user_id`, `website_id`, `rating`, `category_id`';
		}

		/*echo '<pre>action:'; print_r($action); echo '</pre>';
		echo '<pre>myTable:'; print_r($myTable); echo '</pre>';
		echo '<pre>senarai:'; print_r($senarai); echo '</pre>';
		echo '<pre>medan:'; print_r($medan); echo '</pre>';*/

		return array($myTable, $senarai, $medan);
	}
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#

#====================================================================================================
}