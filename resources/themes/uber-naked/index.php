<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style>
.select-style {
    padding: 0;
    margin: 0;
    border: 1px solid #ccc;
    width: 120px;
    border-radius: 3px;
    overflow: hidden;
    background-color: #fff;
    background: #fff;
    position: relative;
	float:left;
	
}

.select-style:after {
    top: 50%;
    left: 87%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(0, 0, 0, 0);
    border-top-color: #000000;
    border-width: 5px;
    margin-top: -2px;
    z-index: 100;
}

.select-style select {
    padding: 5px 8px;
    width: 130%;
    border: none;
    box-shadow: none;
    background-color: transparent;
    background-image: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.select-style select:focus {
    outline: none;
}

.clearfix {
	clear:both;
}


</style>
<head>
    <title>Finelink 2.0 Asset Management</title>
    <link rel="shortcut icon" href="<?php echo THEMEPATH; ?>/images/favicon.png" />

    <link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/style.css" />
    <?php echo $gallery->getColorboxStyles(1); ?>

    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <?php echo $gallery->getColorboxScripts(); ?>

    <?php file_exists('googleAnalytics.inc') ? include('googleAnalytics.inc') : false; ?>
</head>

<body>
	
    <div class="headertitle"><h1>Finelink 2.0 Asset Management</h1></div>
	
	<div class="folderSelect">
		<form action="" method="get" enctype="multipart/form-data">
			<div class="select-style">
				<select name="variable">
					<option value="" selected="selected">Select a folder</option>
						<?php
							$dirs = glob("gallery-images/*", GLOB_ONLYDIR);
							foreach($dirs as $val){
							echo '<option value="'.$val.'">'.$val."</option>\n";
							}
						?>
				</select>
			</div>
		<input type="submit" value="Go" class="goButton">
		</form>
	</div>
<div class="clearfix">
    <?php
        $galleryArray['relText'] = 'colorbox';
        echo $gallery->readTemplate('templates/defaultGallery.php', $galleryArray);
    ?>
	</div>

</body>

</html>
