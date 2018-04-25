<table class="<?php echo $classTable[0] ?>">
	<?php
	$printed_headers = false; # mula bina jadual
	#-----------------------------------------------------------------
	for ($kira=0; $kira < count($row); $kira++)
	{	
		if ( !$printed_headers ) # papar tajuk medan sekali sahaja: 	
		{
			?><thead><tr><?php
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
		$cariA = $cariB = 0;
		foreach ( $row[$kira] as $key=>$data ) 
		{	
			$html->paparURL($key, $data, $myTable, $cariA, $cariB);
		} 
		?></tr></tbody>
	<?php
	}#-----------------------------------------------------------------
	?>
	</table>