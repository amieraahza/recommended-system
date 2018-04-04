<?php
namespace Aplikasi\Tanya; //echo __NAMESPACE__; 
class Homeuser_Tanya extends \Aplikasi\Kitab\Tanya
{
#====================================================================================================
	public function __construct()
	{
		parent::__construct();
	}
#---------------------------------------------------------------------------------------------------#
	public function semakPembolehubah($senarai)
	{
		echo '<pre>$senarai:<br>';
		print_r($senarai);
		echo '</pre>|';//*/
	}
#---------------------------------------------------------------------------------------------------#	
	public function semakApi($myTable, $senarai, $items)
	{
		# validasi data $_POST, masuk dalam $posmen, validasi awal
		//$this->semakPembolehubah($items);
		echo 'jumlah senarai adalah ' . count($items) . '<hr>';
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

			//echo 'tajuk ' . $kira . '<br>';
			//echo '0)cacheId:' . $cacheId . '<br>'; 
			$posmen[$kira]['cacheId'] = bersih($cacheId);
			//echo '1)item_name:' . $og_title . '<br>';
			$posmen[$kira]['item_name'] = bersih($og_title);
			//echo '2)item_website:' . $website . '<br>';
			$posmen[$kira]['item_website'] = bersih($website);
			//echo '3)link_item:' . $og_url . '<br>';
			$posmen[$kira]['link_item'] = bersih($og_url);
			//echo '4)item_picture:' . $og_image . '<br>';
			$posmen[$kira]['item_picture'] = bersih($og_image);
			//echo '5)description:' . $og_description . '<br>';
			$posmen[$kira]['description'] = bersih($og_description);
			//echo '<hr>';
		}//*/
		
		# pulangkan pemboleubah
		return $posmen;		
	}
#---------------------------------------------------------------------------------------------------#
	public function ubahPosmen($posmen, $myTable)
	{
		//echo '<pre>$posmen='; print_r($posmen) . '</pre>';
		$senaraiData = array();
		foreach ($posmen as $key => $value1):
			$senaraiData[$key] = "('";
			foreach ($value1 as $key2 => $dataS):
				$senaraiData[$key] .= bersih($dataS) . "', '";
				//echo 'key=' . $key . '<br>';
				//echo 'dataS=' . $dataS . '<br>';
			endforeach;
			$senaraiData[$key] .= "')";
			$senaraiData[$key] = substr($senaraiData[$key], 0, -5) . ')';
		endforeach;//*/

		# pulangkan pemboleubah
		return $senaraiData;
	}
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#
#---------------------------------------------------------------------------------------------------#
#====================================================================================================
}