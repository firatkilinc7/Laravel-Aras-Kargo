<?php

use App\Services\ArasKargo;

function exampleForQueryType1(){
    $config = [
        "QueryType"       => "1",
        "IntegrationCode" => "123",
    ];

    $aras = new ArasKargo();
    $aras->ArasKargo();
    $aras->ConfigRequest = $config;
    $response = json_decode($aras->GetDataGetQueryJSON()->GetQueryJSONResult);
    dd($response);
}

function exampleForQueryType2(){
    $config = [
        "QueryType" => "1",
        "Date"      => "02.02.2024",
    ];

    $aras = new ArasKargo();
    $aras->ArasKargo();
    $aras->ConfigRequest = $config;
    $response = json_decode($aras->GetDataGetQueryJSON()->GetQueryJSONResult);
    dd($response);
}

function exampleForQueryType5(){
    $config = [
        "QueryType" => "5",
    ];

    $aras = new ArasKargo();
    $aras->ArasKargo();
    $aras->ConfigRequest = $config;
    $response = json_decode($aras->GetDataGetQueryJSON()->GetQueryJSONResult);
    dd($response);
}

function exampleForQueryType12(){
    $config = [
        "QueryType" => "12",
        "StartDate" => "02.02.2023",
        "EndDate"   => "02.01.2023",
    ];

    $aras = new ArasKargo();
    $aras->ArasKargo();
    $aras->ConfigRequest = $config;
    $response = json_decode($aras->GetDataGetQueryJSON()->GetQueryJSONResult);
    dd($response);
}

