<?php

namespace App\Services;

use Exception;
use SoapClient;

class ArasKargo
{

    var $Servis;
    var $DefaultEncoding = 'UTF-8';
    var $Url             = "ARAS_API_REQUEST_URL";
    var $UserName        = "ARAS_API_USERNAME";
    var $Password        = "ARAS_API_PASSWORD";
    var $CustomerCode    = "ARAS_API_CUSTOMER_CODE";
    var $ConfigRequest   = [];

    var $data            = array();
    var $Error           = array();


    function ArasKargo(){
        try {
            $return = $this->Servis = new SoapClient($this->Url, array('encoding'=>$this->DefaultEncoding));
        } catch(Exception $exp) {
            echo  $this->Error['construct'] = $exp->getMessage();
        }
    }

    function GetDataGetQueryJSON(){

        $loginInfo         = '<LoginInfo><UserName>'. $this->UserName .'</UserName><Password>'. $this->Password .'</Password><CustomerCode>'. $this->CustomerCode .'</CustomerCode></LoginInfo>';
        $queryInfo = '<QueryInfo>';
        collect($this->ConfigRequest)->map(function ($value, $key) use (&$queryInfo) {
            $queryInfo .= '<' . $key . '>' . $value . '</' . $key . '>';
        });
        $queryInfo .= '</QueryInfo>';

        try {
            $return = $this->Servis->GetQueryJSON(array("loginInfo"=>$loginInfo,"queryInfo"=>$queryInfo));
            return $return;
        } catch(Exception $exp) {
            echo $this->Error['CreateShipment'] = $exp->getMessage();
        }
    }

    function GetDataGetQueryDS(){
        $loginInfo         = '<LoginInfo><UserName>'. $this->UserName .'</UserName><Password>'. $this->Password .'</Password><CustomerCode>'. $this->CustomerCode .'</CustomerCode></LoginInfo>';
        $queryInfo = '<QueryInfo><QueryType>' . $this->QueryType . '</QueryType>';
        collect($this->ConfigRequest)->map(function ($value, $key) use (&$queryInfo) {
            $queryInfo .= '<' . $key . '>' . $value . '</' . $key . '>';
        });
        $queryInfo .= '</QueryInfo>';
        try {
            $return = $this->Servis->GetQueryDS(array("loginInfo"=>$loginInfo,"queryInfo"=>$queryInfo));
            return $return;
        } catch(Exception $exp) {
            echo $this->Error['CreateShipment'] = $exp->getMessage();
        }
    }

    function GetDataGetQueryXML(){
        $loginInfo         = '<LoginInfo><UserName>'. $this->UserName .'</UserName><Password>'. $this->Password .'</Password><CustomerCode>'. $this->CustomerCode .'</CustomerCode></LoginInfo>';
        $queryInfo = '<QueryInfo><QueryType>' . $this->QueryType . '</QueryType>';
        collect($this->ConfigRequest)->map(function ($value, $key) use (&$queryInfo) {
            $queryInfo .= '<' . $key . '>' . $value . '</' . $key . '>';
        });
        $queryInfo .= '</QueryInfo>';

        try {
            $return = $this->Servis->GetQueryXML(array("loginInfo"=>$loginInfo,"queryInfo"=>$queryInfo));
            return $return;
        } catch(Exception $exp) {
            echo $this->Error['CreateShipment'] = $exp->getMessage();
        }
    }
}
