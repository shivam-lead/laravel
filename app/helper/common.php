<?php

use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;

function geoip(){
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    // Use the IP address to retrieve the country code
    $countryCode = Location::get($ipAddress)->countryCode;
    // dd($countryCode);
     

}