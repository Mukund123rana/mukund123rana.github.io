<?php

# Check if the 'url' GET variable is set
if (isset($_GET['image_url'])){
$url = $_GET['image_url'];

# Fetch the image from the user supplied URL
$file = fopen($url, 'rb');

# Send proper header for png images
header("Content-Type: image/png");

# Dump image file
fpassthru($file);
}

# Notify user if he didn't enter a URL
echo 'Please enter image url'

?>