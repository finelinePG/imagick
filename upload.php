<?php
$valid_formats = array("jpg", "png", "gif", "zip", "bmp", "tif", "tiff");
$max_file_size = 25000000; //25 Mb
$path = "gallery-images/"; // Upload directory
$count = 0;

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	// Loop $_FILES to execute all files
	foreach ($_FILES['files']['name'] as $f => $name) {     
	    if ($_FILES['files']['error'][$f] == 4) {
	        continue; // Skip file if any error found
	    }	       
	    if ($_FILES['files']['error'][$f] == 0) {	           
	        if ($_FILES['files']['size'][$f] > $max_file_size) {
	            $message[] = "$name is too large!.";
	            continue; // Skip large files
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				$message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
			}
	        else{ // No error found! Move uploaded files 
	            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name)) {
	            	$count++; // Number of successfully uploaded files
	            }
	        }
	    }
	}
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Asset Management</title>
<style type="text/css">
a{ text-decoration: none; color: #333}
h1{ font-size: 1.9em; margin: 10px 0}
p{ margin: 8px 0}
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-font-smoothing: antialiased;
	-moz-font-smoothing: antialiased;
	-o-font-smoothing: antialiased;
	font-smoothing: antialiased;
	text-rendering: optimizeLegibility;
}
body{
	font: 12px Arial,Tahoma,Helvetica,FreeSans,sans-serif;
	text-transform: inherit;
	color: #333;
	background: #e7edee;
	width: 100%;
	line-height: 18px;
}
.wrap{
	width: 500px;
	margin: 15px auto;
	padding: 20px 25px;
	background: white;
	border: 2px solid #DBDBDB;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	overflow: hidden;
	text-align: center;
}
.status{
	/*display: none;*/
	padding: 8px 35px 8px 14px;
	margin: 20px 0;
	text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
	color: #468847;
	background-color: #dff0d8;
	border-color: #d6e9c6;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.error{
	/*display: none;*/
	padding: 8px 35px 8px 14px;
	margin: 20px 0;
	text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
	color: #fff;
	background-color: #990000;
	border-color: #d6e9c6;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}


input[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:#012168;
	color:#FFF;
	margin: 20px 0;
	padding: 10px;
	border-radius:5px;
}
input[type="submit"]:hover {
	background:#00A7E1;
	color: #fff;
	-webkit-transition:background 0.6s ease-in-out;
	-moz-transition:background 0.6s ease-in-out;
	transition:background-color 0.6s ease-in-out;
}
input[type="submit"]:active {
	box-shadow:inset 0 1px 3px rgba(0,0,0,0.5);
}
.flbutton {
	color: #012168;
	padding: 10px 20px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	border: 1px solid #012168;
}

.flbutton:hover {
	background:#00A7E1;
	border: 1px solid #00A7E1;
	color: #fff;
	-webkit-transition:background 0.6s ease-in-out;
	-moz-transition:background 0.6s ease-in-out;
	transition:background-color 0.6s ease-in-out;
}


</style>

</head>
<body>
	<div class="wrap">
		<h1>Upload Files</a></h1>
		<?php
		# error messages
		if (isset($message)) {
			foreach ($message as $msg) {
				printf("<p class='error'>%s</p></ br>\n", $msg);
			}
		}
		# success message
		if($count !=0){
			printf("<p class='status'>%d files added successfully!</p>\n", $count);
		}
		?>
		<p>Max file size 25Mb, Valid formats jpg, png, gif, tif</p>
		<br />
		<br />
		<!-- Multiple file upload html form-->
		<form action="" method="post" enctype="multipart/form-data">
			<input type="file" name="files[]" multiple="multiple" accept="image/*">
			<input type="submit" value="Upload">
		</form>
	<a href="index.php" class="flbutton">Go to Gallery</a>
	</div>
	
</body>
</html>