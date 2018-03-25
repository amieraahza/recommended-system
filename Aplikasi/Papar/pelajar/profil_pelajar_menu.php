<?php
function menupapar($nav, $jenisBorang)
{?>
	<ul class="nav nav-pills">
	<li><a href="#">
		<i class="fa fa-print fa-2x" aria-hidden="true"></i>
		Print</a></li>
	<li><a href="<?php echo URL ?>surat/profil/sms">
		<i class="fa fa-comments fa-2x" aria-hidden="true"></i>
		Sms</a></li>
	<li><a href="<?php echo URL ?>surat/profil/email">
		<i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
		Email</a></li>
	<li><a href="#">
		<i class="fa fa-refresh fa-2x fa-spin" aria-hidden="true"></i>
		Refresh</a></li>
	<li><a href="#">
		<i class="fa fa-list fa-2x" aria-hidden="true"></i>
		Option</a></li>
	<li><a href="#">
		<i class="fa fa-file-excel-o fa-2x" aria-hidden="true"
		style="color:green"></i>
		Download Excel</a></li>
	</ul>
<?php
}
?>