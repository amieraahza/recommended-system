
	<h1 class="my-4">Shop Name</h1>
	<?php 
	$mencari2 = URL . 'homeadmin2/crawl/admin_website';
	$myTable = 'admin_website';
	$namaMedan = 'search';
	$name = 'name="' . $namaMedan . '"';
	?>

	<form method="POST" action="<?php echo $mencari2 ?>">
    <div class="list-group">
    <input type="text" <?php echo $name ?> placeholder="search item" class="form-control"> 
    <input type="submit" name="website_name" value="lazada" class="list-group-item active">
    <input type="submit" name="website_name" value="shopee" class="list-group-item">
    <input type="submit" name="website_name" value="11street" class="list-group-item">
    <input type="submit" name="website_name" value="lelong" class="list-group-item">
    <input type="submit" name="website_name" value="mudah" class="list-group-item">
    </div>
	</form>