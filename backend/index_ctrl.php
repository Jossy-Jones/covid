<?php 
require "lib/SausageHTTP.php";

function getCovidData() {
    $client = new SausageHTTP\SausageHTTP\SausageHTTP();
    $client->setRequest([
            "URL" => 'https://api.covid19api.com/summary', 
            "METHOD" => 'GET', 
            "OPTIONS" => array(
                
            ) 
        ]);
    
        return $client->response;
}

function getCovidCtry($ctry) {
    $client = new SausageHTTP\SausageHTTP\SausageHTTP();
    $client->setRequest([
            "URL" => 'https://api.covid19api.com/country/'.$ctry.'/', 
            "METHOD" => 'GET', 
            "OPTIONS" => array(
                
            ) 
        ]);
    
        return $client->response;
}



function getFlag($arg) {
        return '<img src="https://www.countryflags.io/'.$arg.'/flat/24.png">';
}



$data =  json_decode(getCovidData());
$countries = $data->Countries;
$global = $data->Global;


   
?>