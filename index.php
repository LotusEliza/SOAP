<?php 

// $soapclient = new SoapClient('http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso?WSDL');
//var_dump($soapclient->__getFunctions());
// $response = $soapclient->ListOfContinentsByName()->ListOfContinentsByNameResult->tContinent;
//var_dump($response);
//   $response = $soapclient->CapitalCity(['sCountryISOCode'=>'CA']);
//   var_dump($response->CapitalCityResult);
//   echo $response->CapitalCityResult;
//--------------------------------------------------------------

//******************************************** SOAP
// include 'Soap.php';

// $soap_test = new Soap();
// $continents = $soap_test->list_continents();
// $capital = $soap_test->capital_city('CA');

// foreach($continents as $key=>$value){
//     echo $value->sName . "</br>";
// }

// echo $capital;


//***********************************  CURL
 
                //Data, connection, auth
                $dataFromTheForm = $_POST['fieldName']; // request data from the form
                $soapUrl = "http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso?WSDL"; // asmx URL of WSDL
            
                // xml post structure
                $xml_post_string = '<?xml version="1.0" encoding="utf-8"?>
                                    <soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
                                        <soap:Body>
                                            <CapitalCity xmlns="http://www.oorsprong.org/websamples.countryinfo">
                                            <sCountryISOCode>CA</sCountryISOCode>
                                            </CapitalCity>
                                        </soap:Body>
                                    </soap:Envelope>';   // data from the form, e.g. some ID number
        
                   $headers = array(
                                "Content-type: text/xml;charset=\"utf-8\"",
                                "Content-length: ".strlen($xml_post_string),
                            ); //SOAPAction: your op URL
        
                    $url = $soapUrl;
        
                    // PHP cURL  for https connection with auth
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
                    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
                    // converting
                    $response = curl_exec($ch); 
                    curl_close($ch);
                    $response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $response);
                    $xml = new SimpleXMLElement($response);
                    $value = (string) $xml->soapBody->mCapitalCityResponse->mCapitalCityResult;

                    echo $value;
       