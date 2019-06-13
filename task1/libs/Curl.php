<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 6/12/19
 * Time: 9:52 AM
 */

class Curl implements iGetData
{

    public function __construct(){

    }

    public function list_continents(){

        //Data, connection, auth
        $soapUrl = WSDL; // asmx URL of WSDL

        // xml post structure
        $xml_post_string = '<?xml version="1.0" encoding="utf-8"?>
                            <soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
                            <soap:Body>
                            <ListOfContinentsByName xmlns="http://www.oorsprong.org/websamples.countryinfo">
                            </ListOfContinentsByName>
                            </soap:Body>
                            </soap:Envelope>';

        $headers = array(
            CONT_TYPE,
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

        $continents=[];
        foreach ($xml->soapBody->mListOfContinentsByNameResponse->mListOfContinentsByNameResult->mtContinent as $element){
            array_push($continents, $element->msName);
        }

        return $continents;
    }

    public function capital_city($code){

        //Data, connection, auth
        $soapUrl = WSDL; // asmx URL of WSDL

        // xml post structure
        $xml_post_string = '<?xml version="1.0" encoding="utf-8"?>
                            <soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
                            <soap:Body>
                            <CapitalCity xmlns="http://www.oorsprong.org/websamples.countryinfo">
                            <sCountryISOCode>' . $code . '</sCountryISOCode>
                            </CapitalCity>
                            </soap:Body>
                            </soap:Envelope>';

        $headers = array(
            CONT_TYPE,
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
        $capital = (string) $xml->soapBody->mCapitalCityResponse->mCapitalCityResult;

        return $capital;
    }
}