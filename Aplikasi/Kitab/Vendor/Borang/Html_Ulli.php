<?php
namespace Aplikasi\Kitab; //echo __NAMESPACE__;
class Html_Ulli
{
#==========================================================================================
#------------------------------------------------------------------------------------------
	public static function paparUl($senarai)
	{
		foreach ($senarai as $jadual => $baris)
		{
			if ( count($baris)==0 )	echo ''; 
			else
			{
				HTML_Ulli::paparLi($jadual, $baris);
			}
		} 
	}
#------------------------------------------------------------------------------------------
	public static function paparLi($jadual, $baris)
	{
		echo "\n\t\t";
		?><li><a href="#<?php echo $jadual ?>" data-toggle="tab">
		<span class="badge badge-success"><?php echo $jadual ?></span>
		<span class="badge"><?php echo count($baris) ?></span>
		</a></li><?php
	}
#------------------------------------------------------------------------------------------
	public static function paparUlKhas($senarai)
	{
		foreach ($senarai as $jadual => $baris)
		{
			if ( count($baris)==0 )	echo ''; 
			else
			{
				HTML_Ulli::paparLi($jadual, $baris);
			}
		} 
	}
#------------------------------------------------------------------------------------------
	public static function paparGraf0($id)
	{
		echo "\t\t";
		?><div id="<?php echo $id ?>" style="min-width: 500px; height: 500px;<?php
		?> margin: 0 auto"></div><?php
		echo "\n";
	}
#------------------------------------------------------------------------------------------
	public static function paparGraf1($myTable)
	{
		echo "\t\t";
		?><div class="tab-pane" id="<?php echo $myTable ?>"><?php echo "\n\t\t\t";
		?><div id="kontena1" style="min-width: 500px; height: 500px;<?php
		?> margin: 0 auto"></div><?php
		echo "\n\t\t";
		?></div<!-- class="tab-pane" id="<?php echo $myTable ?>" --><?php  echo "\n";
	}
#------------------------------------------------------------------------------------------
	public static function paparGraf2($myTable)
	{
?><div class="tab-pane" id="<?php echo $myTable ?>">
	<div id="kontena2" style="min-width: 500px; height: 500px; margin: 0 auto"></div>
</div><!-- class="tab-pane" id="<?php echo $myTable ?>" --><?php echo "\n";
	}
#------------------------------------------------------------------------------------------
#==========================================================================================
}
