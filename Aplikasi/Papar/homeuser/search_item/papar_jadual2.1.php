<table class="<?php echo $classTable[0] ?>">
	<?php
	$printed_headers = false; # mula bina jadual
	#-----------------------------------------------------------------
	for ($kira=0; $kira < count($row); $kira++)
	{	
		if ( !$printed_headers ) # papar tajuk medan sekali sahaja: 	
		{
			?><thead><tr style="background:#EE82EE"><?php
			foreach ( array_keys($row[$kira]) as $tajuk ) 
			{	# anda mempunyai kunci integer serta kunci rentetan
				# kerana cara PHP mengendalikan tatasusunan.
				?><th><?php echo $tajuk ?></th><?php 	
			}
			?></tr></thead>
	<?php	$printed_headers = true; 
		} 
	# papar data $row ------------------------------------------------
	?><tbody><tr><?php
		$html = new \Aplikasi\Kitab\Html_TD;
		$khas['id'] = 'item_id';
		$khas['idData'] = $row[$kira]['item_id'];
		$khas['gambar'] = 'picture';
		$khas['gambarData'] = $row[$kira]['picture'];
		$khas['searchItem'] = $this->searchItem;
		foreach ( $row[$kira] as $key=>$data ) 
		{	
			$html->paparURL($key, $data, $this->myTable, $khas);
		} 
		?></tr></tbody>
	<?php
	}#-----------------------------------------------------------------
	?>
	</table>