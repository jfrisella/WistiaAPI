<?php
/**
*   Wistia Projects Class
*/
namespace Wistia\Resources\Projects;

class Projects extends \Wistia\Resources\Resource implements \Wistia\Interfaces\iProject
{
    
    /**
    *   Resource Name
    *
    *   @var string
    */
     const RESOURCE_NAME = "Projects";

    
    /**
    *   Create new Projects instance
    *
    *   @param $apikey - wistia provided api key
    */
    public function __construct($apikey){
        parent::__construct($apikey);
    }
    
    
    /**
    *   Show Projects
    *
    *   @param $project_id - id of wistia project
    *   @return wistia output object
    */
    public function show($project_id){
        
        $uri = \Wistia\Utility\Uri\UriFactory::getUri(self::RESOURCE_NAME, "show", $project_id);
        
        $curl = new \Wistia\Utility\Curl\Curl();
        return $curl->get($uri);
        
    }
    
    
    public function listOf(){
        
        $uri = \Wistia\Utility\Uri\UriFactory::getUri(self::RESOURCE_NAME, "listOf", $project_id);
        
        $curl = new \Wistia\Utility\Curl\Curl();
        return $curl->get($uri);
    }
    
    public function create(){}
    public function update(){}
    public function delete(){}
    public function copy(){}

}
