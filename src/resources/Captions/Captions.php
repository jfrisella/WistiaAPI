<?php
/**
*   Wistia Captions Class
*/
namespace Wistia\Resources\Captions;

class Captions extends \Wistia\Resources\Resource implements \Wistia\Interfaces\iCaption
{
    
    /**
    *   Resource Name
    *
    *   @var string
    */
     const RESOURCE_NAME = "Captions";

    
    /**
    *   Create new Captions instance
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
    
    
    public function index(){}
    public function create(){}
    public function update(){}
    public function delete(){}
    public function purchase(){}

}
