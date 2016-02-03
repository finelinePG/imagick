<?php

    // Include the PhotoGallery class
    include('resources/PhotoGallery.php');
	
	//Get folder to load
	if (isset($_GET['variable']))
    {
   $variable = $_GET['variable'] ;
    }
    else
    {
     $variable = './gallery-images/4-Color Process'; // default folder
    }
	
    // Initialize the PhotoGallery object
    $gallery = new PhotoGallery();

    // Initialize the gallery array
    $galleryArray = $gallery->readImageDirectory($variable);

    // Define theme path
    if (!defined('THEMEPATH')) {
        define('THEMEPATH', $gallery->getThemePath());
    }

    // Set path to theme index
    $themeIndex = $gallery->getThemePath(true) . '/index.php';

    // Initialize the theme
    if (file_exists($themeIndex)) {
        include($themeIndex);
    } else {
        die('ERROR: Failed to initialize theme');
    }
?>