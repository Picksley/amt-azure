<?php
// ALL THIS CAN GO IN AN INCLUDE FILE //
class LoginCredentials
{
    public $username="";
	   public $password="";
}

$login = new LoginCredentials();
$login->username="PHP";
$login->password="AMT_PHP_WORLD";

//


// SOAP client
// this opens the SOAP connection, you can use it multiple times on one page if you have multiple calls, just remember to close it before the page loads
$wsdl = 'https://amtwcfservice.azurewebsites.net/IAMTService.svc?wsdl';
$soapClient = new SoapClient($wsdl);


// When you run any SOAP call you pass it parameters, in our case we always pass the $login for extra security
// Getting this line incorrect is the main cause of errors when debugging
$loginData = ['login' => $login, "Format" => 0, "VehicleType" => "Car" , "MakeFilter" => "ALL", "MaxRows" => 99999 ];


// code continues on errors - maybe you don't want it to continue !
try
{
	// call the SOAP Method
	$result = $soapClient->GetDealsVolumeByManufacturer($loginData);
	// each Method has a <method>Result - the <method>Result is not mentioned anywhere so you need to be aware of it when getting the results
}
catch (SoapFault $fault)
{
	// error handling - probably better to put this to console.log
	echo "<HR><B>Fault code:</B> {$fault->faultcode}<BR>";
	echo "<BR><B>Fault string:</B> {$fault->faultstring} <HR>";

	// close the SOAP connection
	if ($soapClient != null) { $soapClient = null; }
	exit();
}


// close the SOAP connection - the returned data is now in the $result variable
if ($soapClient != null) { $soapClient = null; }

// the SOAP will probably return a JSON result so this needs to be decoded
// NOTE: the <method>Result holds the data returned inside the returned Object

$retJSON = $result->GetDealsVolumeByManufacturerResult;

// Decode the JSON results
// this is not needed if the result is not returned in JSON
$retArray = json_decode($retJSON, true);
?>
