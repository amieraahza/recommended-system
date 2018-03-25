<?php 
namespace Aplikasi\Kitab; //echo __NAMESPACE__; 
class Tatasusunan
{
#==========================================================================================
	function array_to_xml($array, &$xml_user_info) 
	{# buat pecahan tatasusunan
		//echo '<hr>Array_Xml<hr>';
		foreach($array as $key => $value)
		{
			if(is_array($value)) 
			{
				if(!is_numeric($key))
				{
					$subnode = $xml_user_info->addChild("$key");
					$this->array_to_xml($value, $subnode);
				}
				else
				{
					//$subnode = $xml_user_info->addChild("item$key");
					$subnode = $xml_user_info->addChild("item");
					$this->array_to_xml($value, $subnode);
				}
			}
			else
			{
				$xml_user_info->addChild("$key",htmlspecialchars("$value"));
			}
		}
	}
#==========================================================================================
#==========================================================================================
}
