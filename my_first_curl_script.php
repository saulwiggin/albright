<?php
	$curl = curl_init();
	$fp = fopen("somefile.txt","w");
	curl_setopt ($curl, CURLOPT_URL, "http://ww.php.net");
	curl_setopt($curl, CURLOPT_FILE, $fp);
	curl_setopt($curl, CURLOPT_VERBOSE, 1);
//	echo "Hello World";
//	$result = curl_exec($curl);
	curl_close($curl);
//	print $result;
	?>