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

// SOAP client
// this opens the SOAP connection, you can use it multiple times on one page if you have multiple calls, just remember to close it before the page loads
$wsdl = 'https://amtwcfservice.azurewebsites.net/IAMTService.svc?wsdl';
$soapClient = new SoapClient($wsdl);


// When you run any SOAP call you pass it parameters, in our case we always pass the $login for extra security
// Getting this line incorrect is the main cause of errors when debugging
$loginData = ['login' => $login, 'id' => $_GET["id"], 'value' => $_GET["value"], 'table' => $_GET["table"]];

try
{
	// call the SOAP Method
	$result = $soapClient->GetActiveMakeModels($loginData);
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
$retJSON = $result->GetActiveMakeModelsResult;

// Decode the JSON results
// this is not needed if the result is not returned in JSON
$retArray = json_decode($retJSON, true);

// Dump all data of the Array
echo "<HR><BR>Simpler <B>methodResult contents</B><BR>";
echo "<pre>\n";
print_r($retArray);
echo "<HR></pre>";


// code continues on errors - maybe you don't want it to continue !
try
{
	// TOP LEVEL
	echo "<B>LOOP THROUGH DATA <BR>Rowcount = </B>" . $retArray['rowcount'] . "<BR>";

	// ONE LEVEL DOWN
	echo "<BR><B>ROW 1 (array row 0) </B> <BR>";
	echo $retArray['makemodels'][0]['make'] . "<BR>";
	echo $retArray['makemodels'][0]['model'] . "<BR>";
	echo $retArray['makemodels'][0]['dealscount'] . "<BR>";
	echo "<HR>";


	// Loop through multi-dimensional array
		//loop through the MakeModels array
		$count=0;
		$newArray = $retArray['makemodels'];
		foreach($newArray as $makemodelArray) {
			echo "<BR>Row " . $count . "<BR>";
			$count++;
			$make = $makemodelArray['make'];
			$model = $makemodelArray['model'];
			$dealscount = $makemodelArray['dealscount'];
			echo "<BR>Make=" . $count . " = " . $make;
			echo "<BR>Model=" . $count . " = " . $model;
			echo "<BR>Deals Count=" . $count . " = " . $dealscount;
			echo "<HR>";
        }
}
catch (SoapFault $fault)
{
	// error handling - probably better to put this to console.log
	echo "<HR><B>Fault code:</B> {$fault->faultcode}<BR>";
	echo "<BR><B>Fault string:</B> {$fault->faultstring} <HR>";
}


?>
