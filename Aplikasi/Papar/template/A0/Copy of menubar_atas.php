<?php 
//$nav = 'data-toggle="dropdown" class="dropdown-toggle active"';
$nav = 'class="dropdown-toggle" data-toggle="dropdown"';
$url = URL;
$kini = ( !isset($this->kini) ) ? null : $this->kini;
//<ul class="nav navbar-nav navbar-right">
$classUL = 'nav navbar-nav navbar-right';
$icon['User'] = '<span class="glyphicon glyphicon-user"></span>';
$icon['Barcode'] = '<span class="glyphicon glyphicon-barcode"></span>';
$icon['Filter'] = '<span class="glyphicon glyphicon-filter"></span>';
$icon['Stats'] = '<span class="glyphicon glyphicon-stats"></span>';
?>
<ul class="<?php echo $classUL ?>">
<li class="dropdown">
	<a <?php echo $nav ?> href="#"><?=$icon['User']?>Apps
	<b class="caret"></b></a>
	<ul class="dropdown-menu">
	<li><a href="<?php echo $url ?>profile/ubah">
		<?=$icon['User']?>Profile <?=$pengguna?>
	</a></li>
	<li class="divider"></li><?php 
	if ( !in_array($paras,array('feprosesan','pegawaiprosesan'))	): ?>
	<li><a href="<?php echo $url ?>operasi/pesanan"><?=$icon['Barcode']?>Pesanan</a></li>
	<li><a href="<?php echo $url ?>operasi/sebutharga"><?=$icon['Barcode']?>Sebutharga</a></li>
	<li><a href="<?php echo $url ?>operasi/invois"><?=$icon['Barcode']?>Invois</a></li><?php 
	elseif ( in_array($paras,array('feprosesan','pegawaiprosesan'))	): ?>
	<li><a href="<?php echo $url ?>rangkabaru/luarsample/1"><?=$icon['Barcode']?>Tambah Kes Luar Sample</a></li>
	<li><a href="<?php echo $url ?>prosesan/batch"><?=$icon['Barcode']?>Terima Di Prosesan</a></li><?php else: endif; ?>
	<li class="divider"></li>
	<li><a href="<?php echo $url ?>ruangtamu/logout">
		<span class="glyphicon glyphicon-off"></span>Keluar
	</a></li>
	</ul>
</li>
<li class="dropdown">
	<a <?php echo $nav ?> href="#">
		<?=$icon['Filter']?>Cari
	<b class="caret"></b></a>
	<ul class="dropdown-menu">
	<li><a href="<?php echo $url ?>cari/tentang/msic/1"><?=$icon['Filter']?>MSIC</a></li>
	<li><a href="<?php echo $url ?>cari/tentang/produk/1"><?=$icon['Filter']?>PRODUK</a></li>
	<li><a href="<?php echo $url ?>cari/tentang/johor/2"><?=$icon['Filter']?>LOKALITI JOHOR</a></li>
	<li><a href="<?php echo $url ?>cari/tentang/malaysia/2"><?=$icon['Filter']?>LOKALITI MALAYSIA</a></li>
	<li><a href="<?php echo $url ?>cari/tentang/prosesan/1"><?=$icon['Filter']?>Prosesan</a></li>
	</ul>
</li>
<li class="dropdown">
	<a <?php echo $nav ?> href="#">
		<span class="glyphicon glyphicon-question-sign"></span>Bantuan
	<b class="caret"></b></a>
	<ul class="dropdown-menu">
	<li><a href="../#">Sistem</a></li>
	<li><a href="<?php echo $url ?>forum/perdana">Forum</a></li>
	<li><a href="<?php echo $url ?>mesej/utama">Email</a></li>
	</ul>
</li>
</ul>
<li class="dropdown"><a <?php echo $nav ?> href="#">Utama</a></li>
<li class="dropdown"><a <?php echo $nav ?> href="#">Utama</a></li>
<li class="dropdown"><a <?php echo $nav ?> href="#">Utama</a></li>
<li class="dropdown"><a <?php echo $nav ?> href="#">Utama</a></li>
<li class="dropdown"><a <?php echo $nav ?> href="#">Utama</a></li>
<li class="dropdown"><a <?php echo $nav ?> href="#">Utama</a></li>
<li class="dropdown"><a <?php echo $nav ?> href="#">Utama</a></li>
<li class="dropdown"><a <?php echo $nav ?> href="#">Utama</a></li>
</ul>