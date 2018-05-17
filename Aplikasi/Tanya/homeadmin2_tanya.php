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
		//echo '<pre>$posmen='; print_r($posmen); echo '</pre>';
		$cantum = "";
		$senaraiData = array();
		foreach ($posmen as $key => $value1):
			//echo '<br> $value1 = ' . $value1;
			foreach ($value1 as $key2):
			//echo '<br> $key2 = ' . $key2;
			$cantum .= "('"; 
			foreach ($key2 as $key3 => $dataS):
				echo '<br> $value1 = ' . $value1;
				$cantum .= ($dataS) . "', '"; 
			endforeach;
			$cantum .= "'),\r";
		endforeach;
		$senaraiData[] = $cantum;
		//$senaraiData[$key] = substr($senaraiData[$key], 0, -5) . ')';
		endforeach;
		//$cantum .= "'),\r";
		
		//echo '<pre>$senaraiData='; print_r($senaraiData); echo '</pre>';
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
			$medan = '`website_name`,`website_link`,`note`, `key_googleapi`, `cse_googleapi`';
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
			$medan = '`website_id`,`website_name`,`website_link`,`note`, `key_googleapi`, `cse_googleapi`';
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
	public function semakApi($myTable, $senarai, $items)
	{
		# validasi data $_POST, masuk dalam $posmen, validasi awal
		//$this->semakPembolehubah($items);
		//echo 'jumlah senarai adalah ' . count($items) . '<hr>';
		# paparkan items yang tertentu sahaja
		for($kira = 0; $kira < count($items); $kira++)
		{
			$cacheId = (isset($items[$kira]['cacheId'])) ?
				$items[$kira]['cacheId']
				: '#no cacheId found';
			$og_title = (isset($items[$kira]['pagemap']['metatags'][0]['og:title'])) ?
				$items[$kira]['pagemap']['metatags'][0]['og:title']
				: '#no title found';
			$website = (isset($items[$kira]['displayLink'])) ?
				$items[$kira]['displayLink']
				: '#no website found';
			$og_url = (isset($items[$kira]['pagemap']['metatags'][0]['og:url'])) ?
				$items[$kira]['pagemap']['metatags'][0]['og:url']
				: '#not url found';
			$og_image = (isset($items[$kira]['pagemap']['metatags'][0]['og:image'])) ? 
				$items[$kira]['pagemap']['metatags'][0]['og:image']
				: '#no image found';
			$og_description = (isset($items[$kira]['pagemap']['metatags'][0]['og:description'])) ?
				$items[$kira]['pagemap']['metatags'][0]['og:description']
				: '#no description found';
			$bestrating = (isset($results[$kira]['pagemap']['aggregaterating'][0]['bestrating'])) ?
				$results[$kira]['pagemap']['aggregaterating'][0]['bestrating']
				: '#no bestrating found';
			$ratingvalue = (isset($results[$kira]['pagemap']['aggregaterating'][0]['ratingvalue'])) ?
				$results[$kira]['pagemap']['aggregaterating'][0]['ratingvalue']
				: '#no ratingvalue found';
			$reviewcount = (isset($results[$kira]['pagemap']['aggregaterating'][0]['reviewcount'])) ?
				$results[$kira]['pagemap']['aggregaterating'][0]['reviewcount']
				: '#no reviewcount found';                          

			//echo 'tajuk ' . $kira . '<br>';
			//echo '0)cacheId:' . $cacheId . '<br>'; 
			$posmen[$myTable][$kira]['cacheId'] = bersih($cacheId);
			//echo '1)item_name:' . $og_title . '<br>';
			$posmen[$myTable][$kira]['item_name'] = bersih($og_title);
			//echo '2)item_website:' . $website . '<br>';
			$posmen[$myTable][$kira]['item_website'] = bersih($website);
			//echo '3)link_item:' . $og_url . '<br>';
			$posmen[$myTable][$kira]['link_item'] = bersih($og_url);
			//echo '4)item_picture:' . $og_image . '<br>';
			$posmen[$myTable][$kira]['item_picture'] = bersih($og_image);
			//echo '5)description:' . $og_description . '<br>';
			$posmen[$myTable][$kira]['description'] = bersih($og_description);
			//echo '<hr>';
			$posmen[$myTable][$kira]['bestrating'] = bersih($bestrating);
			//echo '<hr>';
			$posmen[$myTable][$kira]['ratingvalue '] = bersih($ratingvalue);
			//echo '<hr>';
			$posmen[$myTable][$kira]['reviewcount'] = bersih($reviewcount);
			//echo '<hr>';
		}//*/
		
		# pulangkan pemboleubah
		return $posmen;		
	}  
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#

#====================================================================================================
}