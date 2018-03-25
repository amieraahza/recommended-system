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
			<input type="text" class="form-control" 
			value="JEMPUTAN KE MESYUARAT AGUNG PIBG SK DARUL IMAN KE-14">
		</div>	
	</div>
</div>
<div class="form-group">
	<div class="col-sm-8">
		<textarea class="form-control" rows="6">
yb DATO' / DATIN / TUAN / PUAN
<u>JEMPUTAN KE MESYUARAT AGUNG PIBG SK DARUL IMAN KE-14</u>

Dengan segala hormatnya perkara di atas dirujuki.

2.	Berhubung perkara di atas, pihak sekolah menjemput untuk menghadiri 
Mesyuarat Agung PIBG SK DARUL IMAN kali ke-14 yang akan diadakan 
seperti butiran berikut:
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