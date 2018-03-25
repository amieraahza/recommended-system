<?php include 'diatas.php'; ?>
<div class="container">
<form class="form-horizontal">
<!-- mula - input tengah ------------------------------------------------------------------------------------------- -->
<div class="form-group">
	<div class="col-sm-8">
		<div class="input-group input-group-lg">
		<span class="input-group-addon">Email Composer</span>
		</div>	
	</div>
</div>
<div class="form-group">
	<div class="col-sm-8">
		<div class="input-group input-group-sm">
			<span class="input-group-addon">Subject :</span>
			<input type="text" class="form-control">
		</div>	
	</div>
</div>
<div class="form-group">
	<div class="col-sm-8">
		<textarea class="form-control" rows="6">
Dear Sir/Madam

<u>LETTER OF ACCEPTANCE</u>

We are happy to inform you that your child, <strong><?php echo $this->data['anak'] ?></strong>,
NRIC/Passport No: <strong><?php echo $this->data['nokp_anak'] ?></strong> has ben successful in obtaining a place at our school in
Kindergarten/Primary/Secondary <strong><?php echo $this->data['darjah'] ?></strong> for academic year <strong><?php echo $this->data['tahun'] ?></strong>.

For futher infomation, kindly contact our Admission &amp; Markerting Department at +603-4021 2490.

Thank you.

Your fatihfully,
<strong><?php echo $this->data['syarikat'] ?></strong>

<?php echo $this->data['kerani_nama'] ?>
<?php echo $this->data['kerani_pangkat'] ?>
		</textarea>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-8">
		<label for="exampleInputFile">Attachment :</label>
		<div class="input-group input-group-sm">
			<input type="file" id="exampleInputFile">
			<input type="file" id="exampleInputFile">
			<input type="file" id="exampleInputFile">
		</div>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-8">
		<input type="submit" class="btn btn-default" value="SEND THIS EMAIL">
	</div>
</div>
<!-- tamat - input tengah ------------------------------------------------------------------------------------------- -->
</form>

</div><!-- class="container" -->
</div><!-- class="container" -->
<?php include 'dibawah.php'; ?>