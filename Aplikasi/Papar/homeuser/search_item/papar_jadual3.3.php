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
		$khas['id'] = 'item_id';
		$khas['idData'] = $row[$kira]['item_id'];
		$khas['gambar'] = 'picture';
		$khas['gambarData'] = $row[$kira]['picture'];
		$khas['searchItem'] = $this->searchItem;
		foreach ( $row[$kira] as $key=>$data ) 
		{	
			//$data = bersih($data);
			$html->paparURL($key, $data, $this->myTable, $khas);
		} 
		?></tr>
	<?php
	}#-----------------------------------------------------------------
	?></tbody>
	<tfoot>
		<tr><th>#</th><th>item_id</th><th>item_name</th><th>item_website</th>
			<th>price</th><th>colour</th><th>picture</th><th>description</th></tr>
	</tfoot>
	</table>