<?php
	function tinyUrl($url) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://tinyurl.com/api-create.php?url='.urlencode($url));
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);	
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}
	echo tinyUrl("http://www.pegoga.com");
?>