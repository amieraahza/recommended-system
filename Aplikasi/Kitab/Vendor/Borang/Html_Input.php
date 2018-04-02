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
	public function updateInput($myTable,$kira, $namaMedan, $data)
	{
		# istihar pembolehubah 
		$jenisMedan = isset($senarai['jenis_medan'])? $senarai['jenis_medan']: '';
		$jenisData = isset($senarai['jenis_data'])? $senarai['jenis_data']: '';
		//$labelDibawah = isset($senarai['label_dibawah'])? $senarai['label_dibawah']: '';
		$labelDibawah = $data;
		$name = 'name="' . $myTable . '[' . $namaMedan . ']"';
		//$input = $name . ' value="' . $data . '"';
		$inputText = $name;
		$tabline = "\n\t\t\t";
		$tabline2 = "\n\t\t";
		$tabline4 = "\n\t\t\t\t";
		# butang 
		$birutua = 'btn btn-primary btn-mini';
		$birumuda = 'btn btn-info btn-mini';
		$merah = 'btn btn-danger btn-mini';

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
		elseif(in_array($namaMedan,array('website_id', 'item_id', 'category_id', 'rating_id')))
		{#untuk medan primary key
			$data = null;
			$input = '<div class="input-group input-group">' . $tabline
				   //. '<span class="input-group-addon"></span>' . $tabline
				   . '<span class="input-group-addon">' . $labelDibawah . '</span>'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($namaMedan,array('website_name', 'website_link', 'note')))
		{#senarai medan untuk table admin_website
			//$data = null;
			$input = '<div class="input-group input-group">' . $tabline
				   //. '<span class="input-group-addon"></span>' . $tabline
				   . '<input type="text" ' . $name 
				   . ' value="' . $data . '"'
				   . ' class="form-control">' . $tabline
				   . '<span class="input-group-addon">' . $labelDibawah . '</span>'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($namaMedan,array('item_name', 'item_website', 'link_item', 
			'link_picture', 'description')))
		{#senarai medan untuk table admin_item
			//$data = null;
			$input = '<div class="input-group input-group">' . $tabline
				   //. '<span class="input-group-addon"></span>' . $tabline
				   . '<input type="text" ' . $name 
				   . ' value="' . $data . '"'
				   . ' class="form-control">' . $tabline
				   . '<span class="input-group-addon">' . $labelDibawah . '</span>'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($namaMedan,array('category_name', 'item_id', 'website_id')))
		{#senarai medan untuk table admin_item
			//$data = null;
			$input = '<div class="input-group input-group">' . $tabline
				   //. '<span class="input-group-addon"></span>' . $tabline
				   . '<input type="text" ' . $name 
				   . ' value="' . $data . '"'
				   . ' class="form-control">' . $tabline
				   . '<span class="input-group-addon">' . $labelDibawah . '</span>'
				   . $tabline2 . '</div>'
				   . '';
		}
		elseif(in_array($namaMedan,array('user_id', 'website_id', 'rating', 'category_id')))
		{#senarai medan untuk table admin_item
			//$data = null;
			$input = '<div class="input-group input-group">' . $tabline
				   //. '<span class="input-group-addon"></span>' . $tabline
				   . '<input type="text" ' . $name 
				   . ' value="' . $data . '"'
				   . ' class="form-control">' . $tabline
				   . '<span class="input-group-addon">' . $labelDibawah . '</span>'
				   . $tabline2 . '</div>'
				   . '';
		}
		
		return $input; # pulangkan nilai
	}
#------------------------------------------------------------------------------------------

#------------------------------------------------------------------------------------------
#------------------------------------------------------------------------------------------
#------------------------------------------------------------------------------------------
#------------------------------------------------------------------------------------------
#==========================================================================================
}
