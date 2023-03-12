<?php

$file_name = './ostad.txt';


// Check if the file exists
if (!file_exists($file_name)) {
  // If it does not exist, create it
  $file = fopen($file_name, "w");
  fclose($file);
}

// Open the file for reading and writing
$file = fopen($file_name, "r+");


// Read the contents of the file
$file_size = filesize($file_name);
$file_contents = $file_size > 0 ? fread($file, $file_size) : '';

// Add the current date and time to the file
$file_contents .= "\n" . date("Y-m-d H:i:s");

// Seek
fseek($file, 0);

// updated the file
fwrite($file, $file_contents);

// close it

fclose($file);

$filename = basename($file_name);

echo "{$filename} File updated successfully.";
