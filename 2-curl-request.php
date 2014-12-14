<?php

function curlGet($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	
	curl_setopt($ch, CURLOPT_URL, $url);
	
	$results = curl_exec($ch);
	
	curl_close($ch);
	
	return $results;
}

$packtPage = curlGet('http://www.packtpub.com/oop-php-5/book');

echo "Hello";
echo empty($packtPage);
echo $packtPage;

?>