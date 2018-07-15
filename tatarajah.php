<?php
# 4 folder utama
define('KAWAL', 'Aplikasi/Kawal');
define('PAPAR', 'Aplikasi/Papar');
define('TANYA', 'Aplikasi/Tanya');
define('KITAB', 'Aplikasi/Kitab');

# Fungsi Global
require KITAB . '/Fungsi.php';
require '../belajar/googleAPI/google-api-php-client-2.2.1/vendor/autoload.php'; # Tambah api google

# Sentiasa menyediakan garis condong di belakang (/) pada hujung jalan
define('SPORT', ':' . $_SERVER['SERVER_PORT']);
define('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . SPORT . $_SERVER['PHP_SELF']) . '/');
define('SERVER_NAME', $_SERVER['SERVER_NAME'] . SPORT . '/');
define('Tajuk_Muka_Surat', '***');

# setkan jquery, bootstrap dan font awesome sama ada local atau cdn
## cdn
      $jquery_cdn = 'https://code.jquery.com/jquery-2.2.3.min.js';
 $bootstrapJS_cdn = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js';
$bootstrapCSS_cdn = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css';
 $ceruleanCSS_cdn = 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css';
 $fontawesome_cdn = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
## local
            $sumber = 'sumber/utama/';
      $jquery_local = $sumber . 'jquery/jquery-2.2.3.min.js';
 $bootstrapJS_local = $sumber . 'bootstrap/3.3.7/js/bootstrap.min.js';
$bootstrapCSS_local = $sumber . 'bootstrap/3.3.7/css/bootstrap.min.css'; 
 $fontawesome_local = $sumber . 'font-awesome/4.7.0/css/font-awesome.min.css';
############################################################################################
## isytihar konsan MYSQL dan GAMBAR ikut lokasi $server
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$server = $_SERVER['SERVER_NAME'];

/*
echo "<br>Alamat IP : <font color='red'>" . $ip . "</font> |
\r<br>Nama PC : <font color='red'>" . $hostname . "</font> |
\r<br>Server : <font color='red'>" . $server . "</font>\r";
//*/

if ($server == 'laman.web.anda')
{	# isytihar tatarajah mysql
	define('DB_TYPE', 'mysql');
	define('DB_HOST', 'localhost');
	define('DB_NAME', '***');
	define('DB_USER', '***');
	define('DB_PASS', '***');
	# isytihar lokasi folder js
	define('SUMBER', 'http://' . $_SERVER['SERVER_NAME'] . '/sumberonline/');
	define('JQUERY', $jquery_cdn);
	define('FONTAWESOME', $fontawesome_cdn);
	define('BOOTSTRAPJS', $bootstrapJS_cdn);
	define('BOOTSTRAPCSS', $bootstrapCSS_cdn);
}
else 
{	# isytihar tatarajah mysql
	define('DB_TYPE', 'mysql');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'recommendationsystem');
	define('DB_USER', 'root');
	define('DB_PASS', 'root');
	# isytihar lokasi folder js
	define('SUMBER', 'http://' . $_SERVER['SERVER_NAME'] . '/sumberoffline/');
	define('JQUERY', $jquery_cdn);
	define('FONTAWESOME', $fontawesome_cdn);
	define('BOOTSTRAPJS', $bootstrapJS_cdn);
	define('BOOTSTRAPCSS', $bootstrapCSS_cdn);
}
//echo DB_HOST . "," . DB_USER . "," . DB_PASS . ",," . DB_NAME . "<br>";
############################################################################################
# buat tatasusunan ikut serialize
define('KAKITANGAN', serialize( 
	array ('abu','bakar','umar','osman','ali','hasan')
	));
## data dalam database lain
$e = 'db_lain.';
define('MSICBARU', serialize (
	array($e.'msic08',$e.'msic2008',
		$e.'msic_v1',$e.'msic_bandingan',
		$e.'msic',$e.'msic_nota_kaki')
	));	