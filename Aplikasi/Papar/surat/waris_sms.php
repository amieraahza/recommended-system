<div class="container">
<h1>SMS COMPOSER</h1>

<ol>
<li>Tick at the recepient name</li>
<li>Type your message</li>
<li>Click send button</li>
</ol>

<form class="form-horizontal">
<!-- mula - input tengah ------------------------------------------------------------------------------------------- -->
<div class="form-group">
	<div class="col-sm-6">
		<textarea class="form-control" id="kiraSMS" rows="6">
Assalamualaikum dan Selamat sejahtera

Mesyuarat PIBG akan diadakan esok bertempat
di dewan sekolah.
Terima kasih
		</textarea>
		<pre class="help-block" id="paparSMS">889</pre>
		<div class="input-group input-group-sm">
			<label class="radio-inline">
				<input type="radio" name="hebahanSms" id="hebahanSms1" 
				value="<?php echo $this->data['nohp_waris1'] ?>"> SMS Father
			</label>
			<label class="radio-inline">
				<input type="radio" name="hebahanSms" id="hebahanSms2" 
				value="<?php echo $this->data['nohp_waris2'] ?>"> SMS Mother
			</label>
			<label class="radio-inline">
				<input type="radio" name="hebahanSms" id="hebahanSms3" 
				value="<?php echo $this->data['nohp_waris'] ?>"> SMS Main Contact&nbsp;
			</label>		
			<input type="submit" class="btn btn-default" value="SEND THIS SMS(CLICK)">
		</div>
		<p class="help-block">
			You can chooce to send SMS to either one, Main Contact, or Father, or Mother<br>
			if you want to send to multiple contact eg. Both Father and Mother, sent is twice.	
		</p>
	</div>
</div>
<div class="form-group"><div class="col-sm-6"></div></div>
<!-- tamat - input tengah ------------------------------------------------------------------------------------------- -->
</form>

</div><!-- class="container" -->