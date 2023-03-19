<?php

// URL to fetch data from
$url = "http://localhost/laravel/curl/index.php";

// Initialize curl
$ch = curl_init($url);

// Set curl options
curl_setopt($ch, CURLOPT_URL, $url);  // Set URL to fetch data from
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'secret=noodles');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  // Return the data instead of printing it
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  // Follow any redirects
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // Don't verify SSL certificate



// Execute curl and fetch data
$data = curl_exec($ch);

echo $data;
