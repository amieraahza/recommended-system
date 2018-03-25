<h1>LETTER SETTING</h1>

Tips
<ol>
<li>Select letter</li>
<li>Select student status</li>
<li>Select letter template</li>
</ol>

<div class="btn-group" role="group" aria-label="...">
	<div class="btn-group" role="group">
		<button type="button" class="btn btn-default dropdown-toggle" 
		data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		- All Status-<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li><a href="<?php echo URL ?>surat/tawaran/surat">Letter Of Offer</a></li>
			<li><a href="#">Accesptance Letter</a></li>
			<li><a href="#">Rejection Letter</a></li>
		</ul>
	</div>
	<a class="btn btn-default">Edit Template</a>
</div>

<form class="form-horizontal">
<!-- mula - input tengah ------------------------------------------------------------------------------------------- -->
<div class="form-group">
	<div class="col-sm-4">
		<div class="checkbox">
			<label><input type="checkbox">Do you want this letter send as an email??</label>
			<label><input type="checkbox">Do you want CC this email</label>
		</div>
		<input type="submit" class="btn btn-default" value="Generate This Letter">
	</div>
</div>

<!-- tamat - input tengah ------------------------------------------------------------------------------------------- -->
</form>