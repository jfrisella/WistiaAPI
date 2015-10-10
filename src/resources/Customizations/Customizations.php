<?php
/**
*   Wistia Customizations Class
*/
namespace Wistia\Resources\Customizations;

class Customizations extends \Wistia\Resources\Resource implements \Wistia\Interfaces\iCustomization
{
    
    /**
    *   Resource Name
    *
    *   @var string
    */
     const RESOURCE_NAME = "Customizations";

    
    /**
    *   Create new Customizations instance
    *
    *   @param $apikey - wistia provided api key
    */
    public function __construct($apikey){
        parent::__construct($apikey);
    }
    
    
    /**
    *
    *
    *
    */
    public function show($project_id){
        
        $uri = \Wistia\Utility\Uri\UriFactory::getUri(self::RESOURCE_NAME, "show", $project_id);
        
        $curl = new \Wistia\Utility\Curl\Curl();
        return $curl->get($uri);
        
    }
    
    
    public function create(){}
    public function update(){}
    public function delete(){}

}
