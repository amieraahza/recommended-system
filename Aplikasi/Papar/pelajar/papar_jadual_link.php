	<table border="1" class="table" id="example">
	<?php
	$printed_headers = false; # mula bina jadual
	#-----------------------------------------------------------------
	for ($kira=0; $kira < count($row); $kira++)
	{
		if ( !$printed_headers ) # papar tajuk medan sekali sahaja:
		{
			?><thead><tr><th>#</th><?php
			foreach ( array_keys($row[$kira]) as $tajuk ) 
			{
				?><th><?php echo $tajuk ?></th><?php
			}
			?></tr></thead>
	<?php	$printed_headers = true;
		}
	# papar data $row ------------------------------------------------
	?><tbody><tr><?php
		//$html->paparLink($jenis = '0');
		foreach ( $row[$kira] as $key=>$data ) 
		{
			$html->paparURL($key, $data, $myTable);
		}
		?></tr></tbody>
	<?php
	}#-----------------------------------------------------------------
	?>
	</table>
