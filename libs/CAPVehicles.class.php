<?php

/**
 * 
 * Generated Proxy Class : CAPVehiclesClass (to interact with SOAP server at http://www.capnetwork.co.uk/CAPVehicles_Webservice/CAPVehicles.asmx?WSDL)
 * @package CAPVehicles
 * @version 1.00
 * @author www.ApiGenerator.com - Copyright (c) 2010. All rights reserved.
 * 
 * We take no responsibility for the accuracy of this generated code. Use or edit at your own risk.
 * 
 */
	
class CAPVehicles {
var $client = null;
var $soapUrl = 'http://www.capnetwork.co.uk/CAPVehicles_Webservice/CAPVehicles.asmx?WSDL';
var $options = array(); 

/**
 * 
 * Class: CAPVehicles - Construct Method
 * 
 */

function __construct()
{
$this->client = new SoapClient($this->soapUrl, $this->options);
//Insert Additional Constructor Code
}

/**
 * 
 * Class: CAPVehicles - Destruct Method
 * 
 */

function __destruct()
{
unset ($this->client);
//Insert Destructor Code
}



function GetHostAddress($parameters ){
	try {
		$funcRet = $this->client->GetHostAddress($parameters );
	} catch ( Exception $e ) {
		echo '(GetHostAddress) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}



function GetCAPMan($parameters ){
	try {
		$funcRet = $this->client->GetCAPMan($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPMan) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}



function GetCAPRange($parameters ){
	try {
		$funcRet = $this->client->GetCAPRange($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPRange) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}



function GetCAPMod($parameters ){
	try {
		$funcRet = $this->client->GetCAPMod($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPMod) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}



function GetCAPDer($parameters ){
	try {
		$funcRet = $this->client->GetCAPDer($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPDer) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}



function GetCAPDerFromRange($parameters ){
	try {
		$funcRet = $this->client->GetCAPDerFromRange($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPDerFromRange) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}



function GetCAPModelYears($parameters ){
	try {
		$funcRet = $this->client->GetCAPModelYears($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPModelYears) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}



function GetCAPDescriptionFromID($parameters ){
	try {
		$funcRet = $this->client->GetCAPDescriptionFromID($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPDescriptionFromID) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}



function GetCAPcodeFromCAPID($parameters ){
	try {
		$funcRet = $this->client->GetCAPcodeFromCAPID($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPcodeFromCAPID) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}



function GetCAPIDFromCAPcode($parameters ){
	try {
		$funcRet = $this->client->GetCAPIDFromCAPcode($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPIDFromCAPcode) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


		
}

?>
