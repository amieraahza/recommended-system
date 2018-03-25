<?php include 'diatas.php'; ?>
<div class="container">

<h3 align="center"><strong><?php echo $this->data['sekolah'] ?></strong>
<br><?php echo $this->data['syarikat'] ?>
<br><?php echo $this->data['alamat1_syarikat'] ?>
<br><?php echo $this->data['alamat2_syarikat'] ?>
<br>Tel: <?php echo $this->data['notel_syarikat'] ?> Fax : <?php echo $this->data['nofax_syarikat'] ?>
<br><?php echo $this->data['website_syarikat'] ?></h3>

<div class="row">
	<div class="col-md-2"><em> <?php echo $this->data['tarikh_tawaran'] ?> </em></div>
	<div class="col-md-2 col-md-offset-1"><em> Ref. No.:<?php echo $this->data['refno'] ?> </em></div>
</div>

<br><?php echo $this->data['nama_waris1'] ?>
<br><?php echo $this->data['nama_waris2'] ?>
<br><?php echo $this->data['alamat1_waris'] ?>
<br><?php echo $this->data['poskod_waris'] ?>
<br><?php echo $this->data['bandar_waris'] ?>

<br><br>Dear Sir/Madam

<br><br><u>LETTER OF ACCEPTANCE</u>

<br><br>We are happy to inform you that your child, <strong><?php echo $this->data['anak'] ?></strong>,
<br>NRIC/Passport No: <strong><?php echo $this->data['nokp_anak'] ?></strong> has ben successful in obtaining a place at our school in
<br>Kindergarten/Primary/Secondary <strong><?php echo $this->data['darjah'] ?></strong> for academic year <strong><?php echo $this->data['tahun'] ?></strong>.

<br><br>For futher infomation, kindly contact our Admission &amp; Markerting Department at +603-4021 2490.

<br><br>Thank you.

<br><br>Your fatihfully,
<br><strong><?php echo $this->data['syarikat'] ?></strong>

<br><br><?php echo $this->data['kerani_nama'] ?>
<br><?php echo $this->data['kerani_pangkat'] ?>

</div><!-- class="container" -->
<?php include 'dibawah.php'; ?>