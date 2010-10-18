
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


/**
 * SOAP Function: GetP11DData
 * 	Type Description:
 * 
 * 	 GetP11DData (int Subscriber_ID,string Password,string Database,int CAPID,int Year1,int Year2,int Year3)
 * 
 * 	 GetP11DDataResponse (CAPDataSetResult GetP11DDataResult)
 * 
 * 		GetP11DDataResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetP11DData $parameters (int Subscriber_ID,string Password,string Database,int CAPID,int Year1,int Year2,int Year3)
 *  @return GetP11DDataResponse (CAPDataSetResult GetP11DDataResult)
 * 
 */

function GetP11DData($parameters ){
	try {
		$funcRet = $this->client->GetP11DData($parameters );
	} catch ( Exception $e ) {
		echo '(GetP11DData) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetNVDChangeDates
 * 	Type Description:
 * 
 * 	 GetNVDChangeDates (int Subscriber_ID,string Password,string Database,int CAPID)
 * 
 * 	 GetNVDChangeDatesResponse (CAPDataSetResult GetNVDChangeDatesResult)
 * 
 * 		GetNVDChangeDatesResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetNVDChangeDates $parameters (int Subscriber_ID,string Password,string Database,int CAPID)
 *  @return GetNVDChangeDatesResponse (CAPDataSetResult GetNVDChangeDatesResult)
 * 
 */

function GetNVDChangeDates($parameters ){
	try {
		$funcRet = $this->client->GetNVDChangeDates($parameters );
	} catch ( Exception $e ) {
		echo '(GetNVDChangeDates) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetGenericOptions
 * 	Type Description:
 * 
 * 	 GetGenericOptions (int Subscriber_ID,string Password,string Database)
 * 
 * 	 GetGenericOptionsResponse (CAPDataSetResult GetGenericOptionsResult)
 * 
 * 		GetGenericOptionsResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetGenericOptions $parameters (int Subscriber_ID,string Password,string Database)
 *  @return GetGenericOptionsResponse (CAPDataSetResult GetGenericOptionsResult)
 * 
 */

function GetGenericOptions($parameters ){
	try {
		$funcRet = $this->client->GetGenericOptions($parameters );
	} catch ( Exception $e ) {
		echo '(GetGenericOptions) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetColourHoodLinks
 * 	Type Description:
 * 
 * 	 GetColourHoodLinks (int Subscriber_ID,string Password,string Database,int CAPID,dateTime CHDate,boolean JustCurrent)
 * 
 * 	 GetColourHoodLinksResponse (CAPDataSetResult GetColourHoodLinksResult)
 * 
 * 		GetColourHoodLinksResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetColourHoodLinks $parameters (int Subscriber_ID,string Password,string Database,int CAPID,dateTime CHDate,boolean JustCurrent)
 *  @return GetColourHoodLinksResponse (CAPDataSetResult GetColourHoodLinksResult)
 * 
 */

function GetColourHoodLinks($parameters ){
	try {
		$funcRet = $this->client->GetColourHoodLinks($parameters );
	} catch ( Exception $e ) {
		echo '(GetColourHoodLinks) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetColourTrimLinks
 * 	Type Description:
 * 
 * 	 GetColourTrimLinks (int Subscriber_ID,string Password,string Database,int CAPID,dateTime CTDate,boolean JustCurrent)
 * 
 * 	 GetColourTrimLinksResponse (CAPDataSetResult GetColourTrimLinksResult)
 * 
 * 		GetColourTrimLinksResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetColourTrimLinks $parameters (int Subscriber_ID,string Password,string Database,int CAPID,dateTime CTDate,boolean JustCurrent)
 *  @return GetColourTrimLinksResponse (CAPDataSetResult GetColourTrimLinksResult)
 * 
 */

function GetColourTrimLinks($parameters ){
	try {
		$funcRet = $this->client->GetColourTrimLinks($parameters );
	} catch ( Exception $e ) {
		echo '(GetColourTrimLinks) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetTechnicalData
 * 	Type Description:
 * 
 * 	 GetTechnicalData (int Subscriber_ID,string Password,string Database,int CAPID,dateTime TechDate,boolean JustCurrent)
 * 
 * 	 GetTechnicalDataResponse (CAPDataSetResult GetTechnicalDataResult)
 * 
 * 		GetTechnicalDataResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetTechnicalData $parameters (int Subscriber_ID,string Password,string Database,int CAPID,dateTime TechDate,boolean JustCurrent)
 *  @return GetTechnicalDataResponse (CAPDataSetResult GetTechnicalDataResult)
 * 
 */

function GetTechnicalData($parameters ){
	try {
		$funcRet = $this->client->GetTechnicalData($parameters );
	} catch ( Exception $e ) {
		echo '(GetTechnicalData) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetStandardEquipment
 * 	Type Description:
 * 
 * 	 GetStandardEquipment (int Subscriber_ID,string Password,string Database,int CAPID,dateTime SEDate,boolean JustCurrent)
 * 
 * 	 GetStandardEquipmentResponse (CAPDataSetResult GetStandardEquipmentResult)
 * 
 * 		GetStandardEquipmentResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetStandardEquipment $parameters (int Subscriber_ID,string Password,string Database,int CAPID,dateTime SEDate,boolean JustCurrent)
 *  @return GetStandardEquipmentResponse (CAPDataSetResult GetStandardEquipmentResult)
 * 
 */

function GetStandardEquipment($parameters ){
	try {
		$funcRet = $this->client->GetStandardEquipment($parameters );
	} catch ( Exception $e ) {
		echo '(GetStandardEquipment) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPOptionsBundle
 * 	Type Description:
 * 
 * 	 GetCAPOptionsBundle (int Subscriber_ID,string Password,string Database,int CAPID,dateTime OptionDate,boolean JustCurrent,boolean DescriptionRS,boolean OptionsRS,boolean RelationshipsRS,boolean PackRS,boolean TechnicalRS)
 * 
 * 	 GetCAPOptionsBundleResponse (CAPDataSetResult GetCAPOptionsBundleResult)
 * 
 * 		GetCAPOptionsBundleResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPOptionsBundle $parameters (int Subscriber_ID,string Password,string Database,int CAPID,dateTime OptionDate,boolean JustCurrent,boolean DescriptionRS,boolean OptionsRS,boolean RelationshipsRS,boolean PackRS,boolean TechnicalRS)
 *  @return GetCAPOptionsBundleResponse (CAPDataSetResult GetCAPOptionsBundleResult)
 * 
 */

function GetCAPOptionsBundle($parameters ){
	try {
		$funcRet = $this->client->GetCAPOptionsBundle($parameters );
	} catch ( Exception $e ) {
		echo '(GetCAPOptionsBundle) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetP11DData
 * 	Type Description:
 * 
 * 	 GetP11DData (int Subscriber_ID,string Password,string Database,int CAPID,int Year1,int Year2,int Year3)
 * 
 * 	 GetP11DDataResponse (CAPDataSetResult GetP11DDataResult)
 * 
 * 		GetP11DDataResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetP11DData $parameters (int Subscriber_ID,string Password,string Database,int CAPID,int Year1,int Year2,int Year3)
 *  @return GetP11DDataResponse (CAPDataSetResult GetP11DDataResult)
 * 
 */

function GetP11DData($parameters ){
	try {
		$funcRet = $this->client->GetP11DData($parameters );
	} catch ( Exception $e ) {
		echo '(GetP11DData) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetNVDChangeDates
 * 	Type Description:
 * 
 * 	 GetNVDChangeDates (int Subscriber_ID,string Password,string Database,int CAPID)
 * 
 * 	 GetNVDChangeDatesResponse (CAPDataSetResult GetNVDChangeDatesResult)
 * 
 * 		GetNVDChangeDatesResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetNVDChangeDates $parameters (int Subscriber_ID,string Password,string Database,int CAPID)
 *  @return GetNVDChangeDatesResponse (CAPDataSetResult GetNVDChangeDatesResult)
 * 
 */

function GetNVDChangeDates($parameters ){
	try {
		$funcRet = $this->client->GetNVDChangeDates($parameters );
	} catch ( Exception $e ) {
		echo '(GetNVDChangeDates) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetGenericOptions
 * 	Type Description:
 * 
 * 	 GetGenericOptions (int Subscriber_ID,string Password,string Database)
 * 
 * 	 GetGenericOptionsResponse (CAPDataSetResult GetGenericOptionsResult)
 * 
 * 		GetGenericOptionsResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetGenericOptions $parameters (int Subscriber_ID,string Password,string Database)
 *  @return GetGenericOptionsResponse (CAPDataSetResult GetGenericOptionsResult)
 * 
 */

function GetGenericOptions($parameters ){
	try {
		$funcRet = $this->client->GetGenericOptions($parameters );
	} catch ( Exception $e ) {
		echo '(GetGenericOptions) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetColourHoodLinks
 * 	Type Description:
 * 
 * 	 GetColourHoodLinks (int Subscriber_ID,string Password,string Database,int CAPID,dateTime CHDate,boolean JustCurrent)
 * 
 * 	 GetColourHoodLinksResponse (CAPDataSetResult GetColourHoodLinksResult)
 * 
 * 		GetColourHoodLinksResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetColourHoodLinks $parameters (int Subscriber_ID,string Password,string Database,int CAPID,dateTime CHDate,boolean JustCurrent)
 *  @return GetColourHoodLinksResponse (CAPDataSetResult GetColourHoodLinksResult)
 * 
 */

function GetColourHoodLinks($parameters ){
	try {
		$funcRet = $this->client->GetColourHoodLinks($parameters );
	} catch ( Exception $e ) {
		echo '(GetColourHoodLinks) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetColourTrimLinks
 * 	Type Description:
 * 
 * 	 GetColourTrimLinks (int Subscriber_ID,string Password,string Database,int CAPID,dateTime CTDate,boolean JustCurrent)
 * 
 * 	 GetColourTrimLinksResponse (CAPDataSetResult GetColourTrimLinksResult)
 * 
 * 		GetColourTrimLinksResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetColourTrimLinks $parameters (int Subscriber_ID,string Password,string Database,int CAPID,dateTime CTDate,boolean JustCurrent)
 *  @return GetColourTrimLinksResponse (CAPDataSetResult GetColourTrimLinksResult)
 * 
 */

function GetColourTrimLinks($parameters ){
	try {
		$funcRet = $this->client->GetColourTrimLinks($parameters );
	} catch ( Exception $e ) {
		echo '(GetColourTrimLinks) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetTechnicalData
 * 	Type Description:
 * 
 * 	 GetTechnicalData (int Subscriber_ID,string Password,string Database,int CAPID,dateTime TechDate,boolean JustCurrent)
 * 
 * 	 GetTechnicalDataResponse (CAPDataSetResult GetTechnicalDataResult)
 * 
 * 		GetTechnicalDataResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetTechnicalData $parameters (int Subscriber_ID,string Password,string Database,int CAPID,dateTime TechDate,boolean JustCurrent)
 *  @return GetTechnicalDataResponse (CAPDataSetResult GetTechnicalDataResult)
 * 
 */

function GetTechnicalData($parameters ){
	try {
		$funcRet = $this->client->GetTechnicalData($parameters );
	} catch ( Exception $e ) {
		echo '(GetTechnicalData) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetStandardEquipment
 * 	Type Description:
 * 
 * 	 GetStandardEquipment (int Subscriber_ID,string Password,string Database,int CAPID,dateTime SEDate,boolean JustCurrent)
 * 
 * 	 GetStandardEquipmentResponse (CAPDataSetResult GetStandardEquipmentResult)
 * 
 * 		GetStandardEquipmentResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetStandardEquipment $parameters (int Subscriber_ID,string Password,string Database,int CAPID,dateTime SEDate,boolean JustCurrent)
 *  @return GetStandardEquipmentResponse (CAPDataSetResult GetStandardEquipmentResult)
 * 
 */

function GetStandardEquipment($parameters ){
	try {
		$funcRet = $this->client->GetStandardEquipment($parameters );
	} catch ( Exception $e ) {
		echo '(GetStandardEquipment) SOAP Error: - ' . $e->getMessage ();
	}
	return $funcRet; 
}


/**
 * SOAP Function: GetCAPOptionsBundle
 * 	Type Description:
 * 
 * 	 GetCAPOptionsBundle (int Subscriber_ID,string Password,string Database,int CAPID,dateTime OptionDate,boolean JustCurrent,boolean DescriptionRS,boolean OptionsRS,boolean RelationshipsRS,boolean PackRS,boolean TechnicalRS)
 * 
 * 	 GetCAPOptionsBundleResponse (CAPDataSetResult GetCAPOptionsBundleResult)
 * 
 * 		GetCAPOptionsBundleResult = (boolean Success,string FailMessage,Returned_DataSet Returned_DataSet)
 * 
 * 			Returned_DataSet = (anyXML schema,anyXML any)
 * 
 * 
 * 
 *  @param GetCAPOptionsBundle $parameters (int Subscriber_ID,string Password,string Database,int CAPID,dateTime OptionDate,boolean JustCurrent,boolean DescriptionRS,boolean OptionsRS,boolean RelationshipsRS,boolean PackRS,boolean TechnicalRS)
 *  @return GetCAPOptionsBundleResponse (CAPDataSetResult GetCAPOptionsBundleResult)
 * 
 */

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
