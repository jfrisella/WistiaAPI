<?php
/**
*   Wistia Customizations Class
*/
namespace Wistia\Resources;

class Customizations extends \Wistia\Resources\Resource implements \Wistia\Resources\Interfaces\CustomizationInterface
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
    public function __construct($apikey, $curl = NULL){
        parent::__construct($apikey, $curl);
    }
    
    
    /**
    *   Show Customizations
    *
    *   @param $media_id - wistia media id
    *   @param $params - api parameters see Wistia API
    */
    public function show($media_id, array $params = array()){

        $uri = \Wistia\Resources\UriFactory::getUri(self::RESOURCE_NAME, "show", ["MEDIA-ID" => $media_id]);

        return $this->curl->get($uri);
        
    }
    
    
    /**
    *   Create Customizations
    *
    *   @param $media_id - wistia media id
    *   @param $params - api parameters see Wistia API
    */
    public function create($media_id, array $params = array()){

        $uri = \Wistia\Resources\UriFactory::getUri(self::RESOURCE_NAME, "create", ["MEDIA-ID" => $media_id]);

        return $this->curl->post($uri);
    }
    
    
    /**
    *   Update Customizations
    *
    *   @param $media_id - wistia media id
    *   @param $params - api parameters see Wistia API
    */
    public function update($media_id, array $params = array()){

        $uri = \Wistia\Resources\UriFactory::getUri(self::RESOURCE_NAME, "update", ["MEDIA-ID" => $media_id]);

        return $this->curl->put($uri);
    }
    
    
    /**
    *   Delete Customizations
    *
    *   @param $media_id - wistia media id
    *   @param $params - api parameters see Wistia API
    */
    public function delete($media_id, array $params = array()){

        $uri = \Wistia\Resources\UriFactory::getUri(self::RESOURCE_NAME, "delete", ["MEDIA-ID" => $media_id]);

        return $this->curl->delete($uri);
    }

}
