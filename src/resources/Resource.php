<?php
/**
*   Resource - Extendable Class
*/
namespace Wistai\Resources;

abstract class Resource
{

    /**
    *   Create new Resource instance
    *
    *   @param $apikey - wistia apikey
    */
    public function __construct($apikey){
    
        //Set apikey here
        //so don't have to in every resource
        \Wistia\Utility\Curl\Curl::$apikey = $apikey;
    }

}