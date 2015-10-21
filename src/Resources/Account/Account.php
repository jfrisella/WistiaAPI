<?php
/**
*   Wistia Account Class
*/
namespace Wistia\Resources\Account;

class Account extends \Wistia\Resources\Resource implements \Wistia\Interfaces\iAccount
{
    
    /**
    *   Resource Name
    *
    *   @var string
    */
     const RESOURCE_NAME = "Account";

    
    /**
    *   Create new Account instance
    *
    *   @param $apikey - wistia provided api key
    */
    public function __construct($apikey){
        parent::__construct($apikey);
    }
    
    
    /**
    *   Get Account
    *
    *   @param $params - listing parameters see Wistia API
    */
    public function get(array $params = array()){
        
        $uri = \Wistia\Utility\Uri\UriFactory::getUri(self::RESOURCE_NAME, "get");
        
        $curl = new \Wistia\Utility\Curl\Curl();
        return $curl->get($uri, $params);
        
    }

}
