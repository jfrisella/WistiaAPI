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
    public function __construct($apikey){
        
        $this->curl = new \Wistia\Resources\Curl();

        //Set apikey here
        //so don't have to in every resource
        \Wistia\Resources\Curl::$apikey = $apikey;
    }

    /**
    *   Set Curl Object
    *   - this is used for testing
    */
    public function setCurl($curl){
        if($curl instanceof \Wistia\Resources\Curl){
            $this->curl = $curl;
        }
    }

}
