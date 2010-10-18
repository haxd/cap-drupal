<?php

/**
 * 
 * Generated Proxy Class : CAPNVDClass (to interact with SOAP server at http://www.capnetwork.co.uk/CAPNVD_Webservice/CAPNVD.asmx?WSDL)
 * @package CAPNVD
 * @version 1.00
 * @author www.ApiGenerator.com - Copyright (c) 2010. All rights reserved.
 * 
 * We take no responsibility for the accuracy of this generated code. Use or edit at your own risk.
 * 
 */
	
class CAPNVD {
var $client = null;
var $soapUrl = 'http://www.capnetwork.co.uk/CAPNVD_Webservice/CAPNVD.asmx?WSDL';
var $options = array(); 

/**
 * 
 * Class: CAPNVD - Construct Method
 * 
 */

function __construct()
{
$this->client = new SoapClient($this->soapUrl, $this->options);
//Insert Additional Constructor Code
}

/**
 * 
 * Class: CAPNVD - Destruct Method
 * 
 */

function __destruct()
{
unset ($this->client);
//Insert Destructor Code
}



function GetP11DData($parameters ){
	try {
		$funcRet = $this->client->GetP11DData($parameters );
	} catch ( Exception $e ) {
		echo '(GetP11DData) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}



function GetNVDChangeDates($parameters ){
	try {
		$funcRet = $this->client->GetNVDChangeDates($parameters );
	} catch ( Exception $e ) {
		echo '(GetNVDChangeDates) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}



function GetGenericOptions($parameters ){
	try {
		$funcRet = $this->client->GetGenericOptions($parameters );
	} catch ( Exception $e ) {
		echo '(GetGenericOptions) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}



function GetColourHoodLinks($parameters ){
	try {
		$funcRet = $this->client->GetColourHoodLinks($parameters );
	} catch ( Exception $e ) {
		echo '(GetColourHoodLinks) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}



function GetColourTrimLinks($parameters ){
	try {
		$funcRet = $this->client->GetColourTrimLinks($parameters );
	} catch ( Exception $e ) {
		echo '(GetColourTrimLinks) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}



function GetTechnicalData($parameters ){
	try {
		$funcRet = $this->client->GetTechnicalData($parameters );
	} catch ( Exception $e ) {
		echo '(GetTechnicalData) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}



function GetStandardEquipment($parameters ){
	try {
		$funcRet = $this->client->GetStandardEquipment($parameters );
	} catch ( Exception $e ) {
		echo '(GetStandardEquipment) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}



function GetCAPOptionsBundle($parameters ){
	try {
		$funcRet = $this->client->GetCAPOptionsBundle($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPOptionsBundle) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}
}
?>
