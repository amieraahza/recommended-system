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
		<textarea class="form-control" rows="6">
Assalamualaikum dan Selamat sejahtera

Tahniah anak anda <?php echo $this->data['anak'] ?> telah berjaya
mendaftar menjadi pelajar di Sek Darul Iman.
		</textarea>
		<!-- pre class="help-block">140</pre -->
		<div class="input-group input-group-sm">
			<span class="input-group-addon">140</span>
			<input type="submit" class="btn btn-default" value="SEND THIS SMS...">
		</div>
	</div>
</div>
<!-- tamat - input tengah ------------------------------------------------------------------------------------------- -->
</form>

</div><!-- class="container" -->
