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
			<input type="text" class="form-control" value="OFFER LETTER">
		</div>	
	</div>
</div>
<div class="form-group">
	<div class="col-sm-8">
		<textarea class="form-control" rows="6">
Dear Sir/Madam

<u>ADMISSION INTO SEKOLAH KEBANGSAAN DARUL IMAN - OFFER LETTER</u>

We are pleases to inform you that admission of <strong><?php echo $this->data['anak'] ?></strong>,
NRIC/Passport No: <strong><?php echo $this->data['nokp_anak'] ?></strong> 
into Kindergarten/Primary/Secondary <strong><?php echo $this->data['darjah'] ?></strong> 
for academic year <strong><?php echo $this->data['tahun'] ?></strong> has been provision approves.
If you deside that you wish to enrol the Child, you must do the following.

1. Sign School Contract

You must sign the School Contract. The School Contract sets out the terms and conditions applicable to the Child's attendance at 
the School including the provisional approval of the Child's attendance. Please read these terms and condition carefully
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
		<div class="input-group input-group-sm">
			<label class="radio-inline">
				<input type="radio" name="hebahanEmail" id="hebahanEmail1" 
				value="<?php echo $this->data['email_waris1'] ?>"> Email Father
			</label>
			<label class="radio-inline">
				<input type="radio" name="hebahanEmail" id="hebahanEmail2" 
				value="<?php echo $this->data['email_waris2'] ?>"> Email Mother
			</label>
			<label class="radio-inline">
				<input type="radio" name="hebahanEmail" id="hebahanEmail3" 
				value="<?php echo $this->data['email_waris'] ?>"> Email Main Contact&nbsp;
			</label>		
			<input type="submit" class="btn btn-default" value="SEND THIS EMAIL (CLICK)">
		</div>
		<p class="help-block">
			You can chooce to send Email to either one, Main Contact, or Father, or Mother<br>
			if you want to send to multiple contact eg. Both Father and Mother, sent is twice.	
		</p>
	</div>
</div>
<!-- tamat - input tengah ------------------------------------------------------------------------------------------- -->
</form>

</div><!-- class="container" -->
<?php include 'dibawah.php'; ?>