	<table border="1" class="table" id="example">
	<thead><tr><th rowspan="2" valign="middle">Status</th><?php
	foreach ( $tajuk1 as $Tajuk1 ) 
	{
		?><th colspan="3" align="center"><?php echo $Tajuk1 ?></th><?php
	}	?></tr><tr><?php
	foreach ( $tajuk2 as $Tajuk2 ) 
	{
		?><th><?php echo $Tajuk2 ?></th><?php
	}	?></tr></thead>
	<?php $kiraData = array();
	#-----------------------------------------------------------------
	for ($kira=0; $kira < count($row); $kira++)
	{# papar data $row ------------------------------------------------
	?><tbody><tr><?php
		echo $tabline = "\n\t\t";
		foreach ( $row[$kira] as $key=>$data ) 
		{
			echo '<td>' . $data . '</td>';
			@$kiraData[$key] = $kiraData[$key]+$data;
		}	?></tr></tbody>
	<?php
	}#-----------------------------------------------------------------
	$kiraData['status'] = 'Total Registered';
	foreach( $kiraData  as $jumKey => $jumData )
	{	echo '<td>' . $jumData . '</td>';	}
	#-----------------------------------------------------------------
	?>
	</table>