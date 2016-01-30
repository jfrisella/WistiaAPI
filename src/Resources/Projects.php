<?php
/**
*   Wistia Projects Class
*/
namespace Wistia\Resources;

class Projects extends \Wistia\Resources\Resource implements \Wistia\Resources\Interfaces\ProjectInterface
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

        $uri = \Wistia\Resources\UriFactory::getUri(self::RESOURCE_NAME, "show", ["PROJECT-ID" => $project_id]);

        $curl = new \Wistia\Resources\Curl();
        return $curl->get($uri);
        
    }
    
    
    /**
    *   List Projects
    *       this uses paging and will take any parameters for that
    *
    *   @param $params - parameters to pass to wistia
    *   @return wistia output object
    */
    public function listOf(array $params = array()){

        $uri = \Wistia\Resources\UriFactory::getUri(self::RESOURCE_NAME, "listOf");

        $curl = new \Wistia\Resources\Curl();
        return $curl->get($uri, $params);
    }
    
    
    /**
    *   Create Project
    *
    *   @param $params - parameters to pass to wistia
    *   @return wistia output object
    */
    public function create(array $params = array()){

        $uri = \Wistia\Resources\UriFactory::getUri(self::RESOURCE_NAME, "create");

        $curl = new \Wistia\Resources\Curl();
        return $curl->post($uri, $params);
    }
    
    
    /**
    *   Update Project
    *
    *   @param $project_id - id of wistia project to update
    *   @param $params - parameters to pass to wistia
    *   @return wistia output object
    */
    public function update($project_id, array $params = array()){

        $uri = \Wistia\Resources\UriFactory::getUri(self::RESOURCE_NAME, "update",["PROJECT-ID" => $project_id]);

        $curl = new \Wistia\Resources\Curl();
        return $curl->put($uri, $params);
    }
    
    
    /**
    *   Delete Project
    *
    *   @param $project_id - id of wistia project to delete
    *   @return wistia output object
    */
    public function delete($project_id){

        $uri = \Wistia\Resources\UriFactory::getUri(self::RESOURCE_NAME, "delete", ["PROJECT-ID" => $project_id]);

        $curl = new \Wistia\Resources\Curl();
        return $curl->delete($uri);
    }
    
    
    /**
    *   Copy Project
    *
    *   @param $project_id - id of wistia project to copy
    *   @param $params - parameters to pass to wistia
    *   @return wistia output object
    */
    public function copy($project_id, array $params = array()){

        $uri = \Wistia\Resources\UriFactory::getUri(self::RESOURCE_NAME, "copy", ["PROJECT-ID" => $project_id]);

        $curl = new \Wistia\Resources\Curl();
        return $curl->post($uri, $params);
    }
    

}
