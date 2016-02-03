<?php
/**
*   Resource - Extendable Class
*/
namespace Wistia\Resources;

class Resource
{

    /**
    *   Curl Object
    * 
    *   @var curl object
    */
    protected $curl;

    /**
    *   Create new Resource instance
    *
    *   @param $apikey - wistia apikey
    */
    public function __construct($apikey, $curl = NULL){
        
        $this->curl = (isset($curl) && $curl instanceof \Wistia\Resources\Curl) 
                ? $curl : new \Wistia\Resources\Curl();

        //Set apikey here
        //so don't have to in every resource
        \Wistia\Resources\Curl::$apikey = $apikey;
    }

}
