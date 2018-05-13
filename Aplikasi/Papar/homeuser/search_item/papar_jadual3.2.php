<table id="example" class="display" style="width:100%">
	<?php
	$printed_headers = false; # mula bina jadual
	#-----------------------------------------------------------------
	for ($kira=0; $kira < count($row); $kira++)
	{	
		if ( !$printed_headers ) # papar tajuk medan sekali sahaja: 	
		{
			?><thead><tr class="active"><th>#</th><?php
			foreach ( array_keys($row[$kira]) as $tajuk ) 
			{	# anda mempunyai kunci integer serta kunci rentetan
				# kerana cara PHP mengendalikan tatasusunan.
				?><th><?php echo $tajuk ?></th><?php 	
			}
			?></tr></thead>
	<?php	$printed_headers = true; 
		}
	}?><tbody><?php echo "\n\t";
	for ($kira=0; $kira < count($row); $kira++)
	{# papar data $row ------------------------------------------------
	?><tr><td><?php echo ($kira+1)?></td><?php
		$html = new \Aplikasi\Kitab\Html_TD;
		foreach ( $row[$kira] as $key=>$data ) 
		{	
			$html->paparURL($key, $data, $this->myTable);
		} 
		?></tr>
	<?php
	}#-----------------------------------------------------------------
	?></tbody>
	<tfoot>
		<tr><th>#</th><th>search_item</th><th>item_website</th><th>recommend</th></tr>
	</tfoot>
	</table>