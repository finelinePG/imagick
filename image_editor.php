<link rel="stylesheet" href="resources/editimage.css" type="text/css">
<?php 
$fullUrl = $_GET['fullUrl'];
?>
<html>
<head>


</head>
<body>
 <h1>Image Editor</h1>
<div class="fullContainer">

	<div class="imageWindow">
		<img src="<?php echo $fullUrl;?>"/>
	</div>
	
	<div class="editTools">
		<h3>Blur Image</h3>
		<form action="blur.php" method="get">
			<input type="hidden" name="fullUrl" value="<?php echo $fullUrl;?>">
			<input type="submit" value="Blur Image">
			</form>
			
		<h3>Flip Image</h3>
		<form action="flip.php" method="get">
			<input type="hidden" name="fullUrl" value="<?php echo $fullUrl;?>">
			<input type="submit" value="Flip Image">
			</form>
			
			
	</div>

	<div class="footer"></div>
</div>

</body>
</html>

