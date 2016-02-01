<link rel="stylesheet" href="resources/editimage.css" type="text/css">
<?php 
$fullUrl = $_GET['fullUrl'];

?>
<div class="fullContainer">
	<div class="imageWindow">
		<img src="<?php echo $fullUrl;?>"/>
	</div>
	
	<div class="editTools">
		<h2>Blur Image</h2>
		<form action="blur.php" method="get">
			<input type="hidden" name="fullUrl" value="<?php echo $fullUrl;?>">
			<input type="submit">
	</div>

	<div class="footer"></div>
</div>

