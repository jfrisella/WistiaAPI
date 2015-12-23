<?php
/**
*   Wistia Sharings Class
*/
namespace Wistia\Resources\Sharings;

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
    *   List Sharings
    *   
    *   @param $project_id - wistia project id
    *   @param $params - listing parameters see Wistia API
    */
    public function listOf($project_id, array $params = array()){
    
        $uri = \Wistia\Utility\Uri\UriFactory::getUri(self::RESOURCE_NAME, "listOf", ["PROJECT-ID" => $project_id]);
        
        $curl = new \Wistia\Utility\Curl\Curl();
        return $curl->get($uri, $params);
    }
    
    
    /**
    *   Show Sharings
    *   See the details of a particular sharing on a project.
    *
    *   @param $project_id - wistia project id
    *   @param $sharing_id - wistia id of a specific sharing object
    *   @param $params - other parameters
    */
    public function show($project_id, $sharing_id, array $params = array()){
        
        $uri = \Wistia\Utility\Uri\UriFactory::getUri(self::RESOURCE_NAME, "show", ["PROJECT-ID" => $project_id, "SHARING-ID" => $sharing_id]);
        
        $curl = new \Wistia\Utility\Curl\Curl();
        return $curl->get($uri, $params);
        
    }
    
    
    /**
    *   Create Project Sharings
    *
    *   @param $project_id - wistia project id
    *   @param $params - other parameters
    */
    public function create($project_id, array $params = array()){
    
        $uri = \Wistia\Utility\Uri\UriFactory::getUri(self::RESOURCE_NAME, "create", ["PROJECT-ID" => $project_id]);
        
        $curl = new \Wistia\Utility\Curl\Curl();
        return $curl->post($uri, $params);
    }
    
    
    /**
    *   Update Project Sharings
    *
    *   @param $project_id - wistia project id
    *   @param $sharing_id - wistia id of a specific sharing object
    *   @param $params - other parameters
    */
    public function update($project_id, $sharing_id, array $params = array()){
        
        $uri = \Wistia\Utility\Uri\UriFactory::getUri(self::RESOURCE_NAME, "update", ["PROJECT-ID" => $project_id, "SHARING-ID" => $sharing_id]);
        
        $curl = new \Wistia\Utility\Curl\Curl();
        return $curl->put($uri, $params);
    }
    
    
    /**
    *   Delete Project Sharings
    *
    *   @param $project_id - wistia project id
    *   @param $sharing_id - wistia id of a specific sharing object
    *   @param $params - other parameters
    */
    public function delete($project_id, $sharing_id, array $params = array()){
        
        $uri = \Wistia\Utility\Uri\UriFactory::getUri(self::RESOURCE_NAME, "delete", ["PROJECT-ID" => $project_id, "SHARING-ID" => $sharing_id]);
        
        $curl = new \Wistia\Utility\Curl\Curl();
        return $curl->delete($uri, $params);
    }
    

}
