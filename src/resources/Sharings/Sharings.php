<?php
/**
*   Wistia Sharings Class
*/
namespace Wistia\Resources\Projects;

class Sharings extends \Wistia\Resources\Resource implements \Wistia\Interfaces\iSharing
{
    
    /**
    *   Resource Name
    *
    *   @var string
    */
     const RESOURCE_NAME = "Sharings";

    
    /**
    *   Create new Sharings instance
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
    
    
    public function listOf(){}
    public function create(){}
    public function update(){}
    public function delete(){}
    public function copy(){}

}
