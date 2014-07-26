<?php 
	function getData($path){
		$myCurl=curl_init();
		curl_setopt($myCurl, CURLOPT_URL, "http://api.gobiernoabierto.gob.sv/".$path."/index.xml");
		curl_setopt($myCurl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($myCurl, CURLOPT_HTTPHEADER, array(
		  'Authorization:  Token  token="36bc11762f97f155729497f7099d76c4"'
		));
		$response = curl_exec($myCurl);
		$xml = new SimpleXMLElement($response);

		return $xml;
	}

?>