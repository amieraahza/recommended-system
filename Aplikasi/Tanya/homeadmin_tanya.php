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
	}
#---------------------------------------------------------------------------------------------------#
	public function updateForm($action)
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

		# bentuk tatasusunan
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

		# bentuk tatasusunan
	}
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#

#====================================================================================================
}