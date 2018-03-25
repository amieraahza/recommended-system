<?php
namespace Aplikasi\Kitab; //echo __NAMESPACE__; 
class Html_Input
{
#==========================================================================================
	public static function dropmenuInsert($tabline, $jenisData)
	{
		$input2 = '';
		$tatasusunan = @explode(',', $jenisData);
		foreach ($tatasusunan as $key => $value)
		{
			$input2 .= $tabline;
			$input2 .= ($key==0) ? '<option>' :
				'<option value="' . $value . '">';
			$input2 .= ucfirst($value);
			$input2 .= '</option>';
		}

		return $input2;
	}
#------------------------------------------------------------------------------------------
	public static function labelBawah($labelDibawah)
	{
		$input2 = null;
		$input2 = ($labelDibawah==null) ? '' : 
				'<span class="input-group-addon">' 
				. $labelDibawah . '</span>';

		return $input2;
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}
