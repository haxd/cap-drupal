
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


/**
 * SOAP Function: GetHostAddress
 * 	Type Description:
 * 
 * 	 GetHostAddress ()
 * 
 * 	 GetHostAddressResponse (string GetHostAddressResult)
 * 
 * 
 *  @param GetHostAddress $parameters ()
 *  @return GetHostAddressResponse (string GetHostAddressResult)
 * 
 */

function GetHostAddress($parameters ){
	try {
		$funcRet = $this->client->GetHostAddress($parameters );
	} catch ( Exception $e ) {
		echo '(GetHostAddress) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPMan
 * 	Type Description:
 * 
 * 	 GetCAPMan (int Subscriber_ID,string Password,string Database,boolean JustCurrentManufacturers,string BodyStyleFilter)
 * 
 * 	 GetCAPManResponse (CAPDataSetResult GetCAPManResult)
 * 
 * 		GetCAPManResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPMan $parameters (int Subscriber_ID,string Password,string Database,boolean JustCurrentManufacturers,string BodyStyleFilter)
 *  @return GetCAPManResponse (CAPDataSetResult GetCAPManResult)
 * 
 */

function GetCAPMan($parameters ){
	try {
		$funcRet = $this->client->GetCAPMan($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPMan) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPRange
 * 	Type Description:
 * 
 * 	 GetCAPRange (int Subscriber_ID,string Password,string Database,int ManCode,boolean JustCurrentRanges,string BodyStyleFilter)
 * 
 * 	 GetCAPRangeResponse (CAPDataSetResult GetCAPRangeResult)
 * 
 * 		GetCAPRangeResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPRange $parameters (int Subscriber_ID,string Password,string Database,int ManCode,boolean JustCurrentRanges,string BodyStyleFilter)
 *  @return GetCAPRangeResponse (CAPDataSetResult GetCAPRangeResult)
 * 
 */

function GetCAPRange($parameters ){
	try {
		$funcRet = $this->client->GetCAPRange($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPRange) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPMod
 * 	Type Description:
 * 
 * 	 GetCAPMod (int Subscriber_ID,string Password,string Database,int ManRanCode,boolean ManRanCode_IsMan,boolean JustCurrentModels,string BodyStyleFilter)
 * 
 * 	 GetCAPModResponse (CAPDataSetResult GetCAPModResult)
 * 
 * 		GetCAPModResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPMod $parameters (int Subscriber_ID,string Password,string Database,int ManRanCode,boolean ManRanCode_IsMan,boolean JustCurrentModels,string BodyStyleFilter)
 *  @return GetCAPModResponse (CAPDataSetResult GetCAPModResult)
 * 
 */

function GetCAPMod($parameters ){
	try {
		$funcRet = $this->client->GetCAPMod($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPMod) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPDer
 * 	Type Description:
 * 
 * 	 GetCAPDer (int Subscriber_ID,string Password,string Database,int ModCode,boolean JustCurrentDerivatives)
 * 
 * 	 GetCAPDerResponse (CAPDataSetResult GetCAPDerResult)
 * 
 * 		GetCAPDerResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPDer $parameters (int Subscriber_ID,string Password,string Database,int ModCode,boolean JustCurrentDerivatives)
 *  @return GetCAPDerResponse (CAPDataSetResult GetCAPDerResult)
 * 
 */

function GetCAPDer($parameters ){
	try {
		$funcRet = $this->client->GetCAPDer($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPDer) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPDerFromRange
 * 	Type Description:
 * 
 * 	 GetCAPDerFromRange (int Subscriber_ID,string Password,string Database,int RanCode,boolean JustCurrentDerivatives)
 * 
 * 	 GetCAPDerFromRangeResponse (CAPDataSetResult GetCAPDerFromRangeResult)
 * 
 * 		GetCAPDerFromRangeResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPDerFromRange $parameters (int Subscriber_ID,string Password,string Database,int RanCode,boolean JustCurrentDerivatives)
 *  @return GetCAPDerFromRangeResponse (CAPDataSetResult GetCAPDerFromRangeResult)
 * 
 */

function GetCAPDerFromRange($parameters ){
	try {
		$funcRet = $this->client->GetCAPDerFromRange($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPDerFromRange) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPModelYears
 * 	Type Description:
 * 
 * 	 GetCAPModelYears (int Subscriber_ID,string Password,string Database,int CAPID)
 * 
 * 	 GetCAPModelYearsResponse (CAPDataSetResult GetCAPModelYearsResult)
 * 
 * 		GetCAPModelYearsResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPModelYears $parameters (int Subscriber_ID,string Password,string Database,int CAPID)
 *  @return GetCAPModelYearsResponse (CAPDataSetResult GetCAPModelYearsResult)
 * 
 */

function GetCAPModelYears($parameters ){
	try {
		$funcRet = $this->client->GetCAPModelYears($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPModelYears) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPDescriptionFromID
 * 	Type Description:
 * 
 * 	 GetCAPDescriptionFromID (int Subscriber_ID,string Password,string Database,int CAPID)
 * 
 * 	 GetCAPDescriptionFromIDResponse (CAPDataSetResult GetCAPDescriptionFromIDResult)
 * 
 * 		GetCAPDescriptionFromIDResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPDescriptionFromID $parameters (int Subscriber_ID,string Password,string Database,int CAPID)
 *  @return GetCAPDescriptionFromIDResponse (CAPDataSetResult GetCAPDescriptionFromIDResult)
 * 
 */

function GetCAPDescriptionFromID($parameters ){
	try {
		$funcRet = $this->client->GetCAPDescriptionFromID($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPDescriptionFromID) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPcodeFromCAPID
 * 	Type Description:
 * 
 * 	 GetCAPcodeFromCAPID (int Subscriber_ID,string Password,string Database,int CAPID)
 * 
 * 	 GetCAPcodeFromCAPIDResponse (CAPDataSetResult GetCAPcodeFromCAPIDResult)
 * 
 * 		GetCAPcodeFromCAPIDResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPcodeFromCAPID $parameters (int Subscriber_ID,string Password,string Database,int CAPID)
 *  @return GetCAPcodeFromCAPIDResponse (CAPDataSetResult GetCAPcodeFromCAPIDResult)
 * 
 */

function GetCAPcodeFromCAPID($parameters ){
	try {
		$funcRet = $this->client->GetCAPcodeFromCAPID($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPcodeFromCAPID) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPIDFromCAPcode
 * 	Type Description:
 * 
 * 	 GetCAPIDFromCAPcode (int Subscriber_ID,string Password,string Database,string CAPcode)
 * 
 * 	 GetCAPIDFromCAPcodeResponse (CAPDataSetResult GetCAPIDFromCAPcodeResult)
 * 
 * 		GetCAPIDFromCAPcodeResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPIDFromCAPcode $parameters (int Subscriber_ID,string Password,string Database,string CAPcode)
 *  @return GetCAPIDFromCAPcodeResponse (CAPDataSetResult GetCAPIDFromCAPcodeResult)
 * 
 */

function GetCAPIDFromCAPcode($parameters ){
	try {
		$funcRet = $this->client->GetCAPIDFromCAPcode($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPIDFromCAPcode) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetHostAddress
 * 	Type Description:
 * 
 * 	 GetHostAddress ()
 * 
 * 	 GetHostAddressResponse (string GetHostAddressResult)
 * 
 * 
 *  @param GetHostAddress $parameters ()
 *  @return GetHostAddressResponse (string GetHostAddressResult)
 * 
 */

function GetHostAddress($parameters ){
	try {
		$funcRet = $this->client->GetHostAddress($parameters );
	} catch ( Exception $e ) {
		echo '(GetHostAddress) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPMan
 * 	Type Description:
 * 
 * 	 GetCAPMan (int Subscriber_ID,string Password,string Database,boolean JustCurrentManufacturers,string BodyStyleFilter)
 * 
 * 	 GetCAPManResponse (CAPDataSetResult GetCAPManResult)
 * 
 * 		GetCAPManResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPMan $parameters (int Subscriber_ID,string Password,string Database,boolean JustCurrentManufacturers,string BodyStyleFilter)
 *  @return GetCAPManResponse (CAPDataSetResult GetCAPManResult)
 * 
 */

function GetCAPMan($parameters ){
	try {
		$funcRet = $this->client->GetCAPMan($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPMan) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPRange
 * 	Type Description:
 * 
 * 	 GetCAPRange (int Subscriber_ID,string Password,string Database,int ManCode,boolean JustCurrentRanges,string BodyStyleFilter)
 * 
 * 	 GetCAPRangeResponse (CAPDataSetResult GetCAPRangeResult)
 * 
 * 		GetCAPRangeResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPRange $parameters (int Subscriber_ID,string Password,string Database,int ManCode,boolean JustCurrentRanges,string BodyStyleFilter)
 *  @return GetCAPRangeResponse (CAPDataSetResult GetCAPRangeResult)
 * 
 */

function GetCAPRange($parameters ){
	try {
		$funcRet = $this->client->GetCAPRange($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPRange) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPMod
 * 	Type Description:
 * 
 * 	 GetCAPMod (int Subscriber_ID,string Password,string Database,int ManRanCode,boolean ManRanCode_IsMan,boolean JustCurrentModels,string BodyStyleFilter)
 * 
 * 	 GetCAPModResponse (CAPDataSetResult GetCAPModResult)
 * 
 * 		GetCAPModResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPMod $parameters (int Subscriber_ID,string Password,string Database,int ManRanCode,boolean ManRanCode_IsMan,boolean JustCurrentModels,string BodyStyleFilter)
 *  @return GetCAPModResponse (CAPDataSetResult GetCAPModResult)
 * 
 */

function GetCAPMod($parameters ){
	try {
		$funcRet = $this->client->GetCAPMod($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPMod) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPDer
 * 	Type Description:
 * 
 * 	 GetCAPDer (int Subscriber_ID,string Password,string Database,int ModCode,boolean JustCurrentDerivatives)
 * 
 * 	 GetCAPDerResponse (CAPDataSetResult GetCAPDerResult)
 * 
 * 		GetCAPDerResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPDer $parameters (int Subscriber_ID,string Password,string Database,int ModCode,boolean JustCurrentDerivatives)
 *  @return GetCAPDerResponse (CAPDataSetResult GetCAPDerResult)
 * 
 */

function GetCAPDer($parameters ){
	try {
		$funcRet = $this->client->GetCAPDer($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPDer) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPDerFromRange
 * 	Type Description:
 * 
 * 	 GetCAPDerFromRange (int Subscriber_ID,string Password,string Database,int RanCode,boolean JustCurrentDerivatives)
 * 
 * 	 GetCAPDerFromRangeResponse (CAPDataSetResult GetCAPDerFromRangeResult)
 * 
 * 		GetCAPDerFromRangeResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPDerFromRange $parameters (int Subscriber_ID,string Password,string Database,int RanCode,boolean JustCurrentDerivatives)
 *  @return GetCAPDerFromRangeResponse (CAPDataSetResult GetCAPDerFromRangeResult)
 * 
 */

function GetCAPDerFromRange($parameters ){
	try {
		$funcRet = $this->client->GetCAPDerFromRange($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPDerFromRange) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPModelYears
 * 	Type Description:
 * 
 * 	 GetCAPModelYears (int Subscriber_ID,string Password,string Database,int CAPID)
 * 
 * 	 GetCAPModelYearsResponse (CAPDataSetResult GetCAPModelYearsResult)
 * 
 * 		GetCAPModelYearsResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPModelYears $parameters (int Subscriber_ID,string Password,string Database,int CAPID)
 *  @return GetCAPModelYearsResponse (CAPDataSetResult GetCAPModelYearsResult)
 * 
 */

function GetCAPModelYears($parameters ){
	try {
		$funcRet = $this->client->GetCAPModelYears($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPModelYears) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPDescriptionFromID
 * 	Type Description:
 * 
 * 	 GetCAPDescriptionFromID (int Subscriber_ID,string Password,string Database,int CAPID)
 * 
 * 	 GetCAPDescriptionFromIDResponse (CAPDataSetResult GetCAPDescriptionFromIDResult)
 * 
 * 		GetCAPDescriptionFromIDResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPDescriptionFromID $parameters (int Subscriber_ID,string Password,string Database,int CAPID)
 *  @return GetCAPDescriptionFromIDResponse (CAPDataSetResult GetCAPDescriptionFromIDResult)
 * 
 */

function GetCAPDescriptionFromID($parameters ){
	try {
		$funcRet = $this->client->GetCAPDescriptionFromID($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPDescriptionFromID) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPcodeFromCAPID
 * 	Type Description:
 * 
 * 	 GetCAPcodeFromCAPID (int Subscriber_ID,string Password,string Database,int CAPID)
 * 
 * 	 GetCAPcodeFromCAPIDResponse (CAPDataSetResult GetCAPcodeFromCAPIDResult)
 * 
 * 		GetCAPcodeFromCAPIDResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPcodeFromCAPID $parameters (int Subscriber_ID,string Password,string Database,int CAPID)
 *  @return GetCAPcodeFromCAPIDResponse (CAPDataSetResult GetCAPcodeFromCAPIDResult)
 * 
 */

function GetCAPcodeFromCAPID($parameters ){
	try {
		$funcRet = $this->client->GetCAPcodeFromCAPID($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPcodeFromCAPID) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPIDFromCAPcode
 * 	Type Description:
 * 
 * 	 GetCAPIDFromCAPcode (int Subscriber_ID,string Password,string Database,string CAPcode)
 * 
 * 	 GetCAPIDFromCAPcodeResponse (CAPDataSetResult GetCAPIDFromCAPcodeResult)
 * 
 * 		GetCAPIDFromCAPcodeResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPIDFromCAPcode $parameters (int Subscriber_ID,string Password,string Database,string CAPcode)
 *  @return GetCAPIDFromCAPcodeResponse (CAPDataSetResult GetCAPIDFromCAPcodeResult)
 * 
 */

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
