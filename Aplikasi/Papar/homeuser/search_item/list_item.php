<?php $pautan = URL . 'sumber/rangka-dawai/homeuser/';
\Aplikasi\Kitab\Sesi::init();
//echo '<pre>'; print_r($_SESSION); echo '</pre>';
$classTable[] = "table table-bordered table-striped";
$classTable[] = "table table-bordered table-striped with-check";
$classTable[] = "table table-bordered data-table";
$papar_jadual = "3.3";
$jquery_khas = "file_jquery_list_item";

include 'file_header.php';
include 'file_menubar.php';

echo '<h1 class="btn btn-primary btn-lg">Recommendation for you:'
. '<a class="label label-success"
href="' . URL . 'homeuser/recommendWeb/' . $this->searchItem . '">'
. $this->searchItem .'</a></h1>';

include 'papar_jadual3.php';
include 'file_footer.php';