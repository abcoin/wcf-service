<?php
	// create a client instance to
	$client = new SoapClient('http://btccds.com/DummyService.svc?wsdl');
	// var_dump($client->__getFunctions());
	$address = "";
	$symbol = "";
	$result = $client->GetAssetFromFaucet($address,$symbol);
	echo $result;
?>