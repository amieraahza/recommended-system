<?php
namespace Aplikasi\Tanya; //echo __NAMESPACE__; 
class Login_Tanya extends \Aplikasi\Kitab\Tanya
{
#==========================================================================================
	public function __construct()
	{
		parent::__construct();
	}
	
	function registerid($medan = 'namaawal,namaakhir,phone_number,email,password1,password2', $jadual = 'biodata')
	{
		$namaawal = $_POST[$jadual]['namaawal'];
		$namaakhir = $_POST[$jadual]['namaakhir'];
		$phonenumber = $_POST[$jadual]['phone_number'];
		$email = $_POST[$jadual]['email'];
		$password1 = $_POST[$jadual]['password1'];
		$password2 = $_POST[$jadual]['password2'];
		$password = ($password1 == $password2) ? $password1: NULL;
		$password = \Aplikasi\Kitab\RahsiaHash::rahsia('md5', $password);

		$semakLogin = "
			INSERT INTO `$jadual` ($medan) VALUES
			($namaawal, $namaakhir, $phone_number, $email, $password)  
			";

		echo "<pre> $semakLogin </pre>";
	}

	public function semakPost($myTable, $senarai, $post)
	{
		# validasi data $_POST, masuk dalam $posmen, validasi awal
		foreach ($post as $myTable => $value)
			if ( in_array($myTable,$senarai) )
				foreach ($value as $key => $value2)
					foreach ($value2 as $kekunci => $papar)
						$posmen[$myTable][0][$kekunci] = bersih($papar);
						//echo "$kekunci";
		
		# pulangkan pemboleubah
		return $posmen;		
	}
	
	public function ubahPosmen($posmen)
	{
		$password1 = $posmen['biodata'][0]['password1'];
		$password2 = $posmen['biodata'][0]['password2'];
		$password = ($password1 == $password2) ? $password1: NULL;
		$password = \Aplikasi\Kitab\RahsiaHash::rahsia('md5', $password);
		$level = 'user';

		$senaraiData = array();
		foreach ($posmen as $key => $value1):
			foreach ($value1 as $key2 => $dataS):
				$senaraiData[] = "('" 
					. ($dataS['namaawal']) . "', '" 
					. ($dataS['namaakhir']) . "', '" 
					. ($dataS['phone_number']) . "', '" 
					. ($dataS['email']) . "', '" 
					. ($password) . "', '" 
					. ($level) . "', '" 
					. "')";
			endforeach;
		endforeach;

		$senaraiData[0] = substr($senaraiData[0], 0, -5) . ')';
		# pulangkan pemboleubah
		return $senaraiData;
	}
	function dapatid($nama)
	{
		//echo '<pre>$_POST->'; print_r($_POST) . '</pre>| ';
		echo '<pre>$nama->'; print_r($nama) . '</pre>| ';
		//echo 'Kod:' . \Aplikasi\Kitab\RahsiaHash::rahsia('md5', $nama) . ': ';
		//echo 'Kod:' . RahsiaHash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY) . ': ';
		# rujuk https://gist.github.com/odan/1d4ff4c4088e906a5a49
		$garam = \Aplikasi\Kitab\RahsiaHash::cincang($nama);
		echo '<br>Kod:' . $garam . ': ';
		//$nama = $nama . 'cubaan';
		echo '<br>Kod:' . \Aplikasi\Kitab\RahsiaHash::sahkan($nama, $garam) . ': ';
		//*/
	}

	function ujiID($medan = 'namaPenuh,namaPendek,email,kataLaluan,level', $jadual = 'nama_pengguna')
	{
		echo 'class Login_Tanya::ujiID() extends \Aplikasi\Kitab\Tanya<br>';
		$username =  $_POST['username'];
		$password = \Aplikasi\Kitab\RahsiaHash::rahsia('md5', $_POST['password']);

		$cari[] = array('fix'=>'x=','atau'=>'WHERE','medan'=>'email','apa'=>$username);
		$cari[] = array('fix'=>'x=','atau'=>'AND','medan'=>'kataLaluan','apa'=>$password);
		# tanya Sql
		$hasil = $this->//tatasusunanUbah2A//cariSemuaData//
			cariSql($jadual, $medan, $cari, $susun = null);
	}

	function semakid($medan = 'namaPenuh,namaPendek,email,kataLaluan,level', $jadual = 'nama_pengguna')
	{
		/*$semakLogin = $this->db->prepare("
			SELECT  $medan FROM  $jadual WHERE 
			email = :username AND kataLaluan = :password");

		$semakLogin->execute(array(
			':username' => $_POST['username'],
			':password' => \Aplikasi\Kitab\RahsiaHash::rahsia('md5', $_POST['password'])
			//':password' => \Aplikasi\Kitab\RahsiaHash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
		));

		//$semakLogin->debugDumpParams(); # semak $sth->debugDumpParams()
		$data = $semakLogin->fetch(); # dapatkan medan terlibat
		$kira = $semakLogin->rowCount(); # kira jumlah data
		//*/
		$data = $this->data_contoh(0); # data olok-olok | dapatkan medan terlibat
		$kira = $this->data_contoh(1); # data olok-olok | kira jumlah data	
		//echo ' |<pre>$data='; print_r($data); echo '</pre> | $kira=' . $kira;

		$this->kunciPintu($kira, $data); # pilih pintu masuk
	}

	function data_contoh($pilih)
	{
		$data = array(
			'namaPendek' => 'james007',
			'namaPenuh' => 'Polan Bin Polan',
			'level' => 'pelawat'
		); # dapatkan medan terlibat
		$kira = 1; # kira jumlah data
		
		return ($pilih==1) ? $kira : $data; # pulangkan nilai
	}

	function kunciPintu($kira, $data)
	{
		if ($kira == 1) 
		{	# login berjaya
			\Aplikasi\Kitab\Sesi::init(); # setkan $_SESSION utk 
			# namaPenuh,namaPendek,kataLaluan,level 
			\Aplikasi\Kitab\Sesi::set('namaPendek', $data['namaPendek']);
			\Aplikasi\Kitab\Sesi::set('namaPenuh', $data['namaPenuh']);
			\Aplikasi\Kitab\Sesi::set('levelPengguna', $data['level']);
			\Aplikasi\Kitab\Sesi::set('loggedIn', true);
			//echo '<hr>Berjaya';
			$this->levelPengguna($kira, $data, $data['level']);
		} 
		else # login gagal
		{	//echo '<hr>Tidak Berjaya';
			header('location:' . URL . 'login/salah');
		}//*/
	}

	function levelPengguna($kira, $data, $level)
	{
		//header('location:' . URL . 'ruangtamu');
		if ($level != 'pelawat')
			header('location:' . URL . 'ruangtamu');
		else
			header('location:' . URL . 'ruangtamu/pelawat'); //*/
	}
#---------------------------------------------------------------------------------------------------#
}