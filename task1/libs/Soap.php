<?php

class Soap implements iGetData
{

    protected $soapclient;

    public function __construct(){
        $this->soapclient = new SoapClient(WSDL);
    }

    public function listContinents(){
        $continents = $this->soapclient->ListOfContinentsByName()->ListOfContinentsByNameResult->tContinent;
        return $continents;
    }

    public function capitalCity($code){
        $response = $this->soapclient->CapitalCity(['sCountryISOCode'=>$code]);
        return $response->CapitalCityResult;
    }
}