<?php

class Soap{

    protected $soapclient;

    public function __construct(){
        $this->soapclient = new SoapClient(WSDL);
    }

    public function list_continents(){
        $continents = $this->soapclient->ListOfContinentsByName()->ListOfContinentsByNameResult->tContinent;
        return $continents;
    }

    public function capital_city($code){
        $response = $this->soapclient->CapitalCity(['sCountryISOCode'=>$code]);
        return $response->CapitalCityResult;
    }
}