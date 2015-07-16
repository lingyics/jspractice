<?php
/**
 * Created by PhpStorm.
 * Coder: star cat
 * Date: 7/14/15
 * Time: 1:57 PM
 * testing the bigcommerce api with cURL command
 */

$curl = curl_init();
curl_setopt ($curl, CURLOPT_URL, "http://www.php.net");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec ($curl);
curl_close ($curl);
print $result;

