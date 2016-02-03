<?php
/**
*   Wistia Medias Class
*/
namespace Wistia\Resources;

class Medias extends \Wistia\Resources\Resource implements \Wistia\Resources\Interfaces\MediaInterface
{
    
    /**
    *   Resource Name
    *
    *   @var string
    */
     const RESOURCE_NAME = "Medias";

    
    /**
    *   Create new Medias instance
    *
    *   @param $apikey - wistia provided api key
    */
    public function __construct($apikey, $curl = NULL){
        parent::__construct($apikey, $curl);
    }
    
    
    /**
    *   Medias List
    *
    *   @param $params - listing parameters see Wistia API
    */
    public function listOf(array $params = array()){

        $uri = \Wistia\Resources\UriFactory::getUri(self::RESOURCE_NAME, "listOf");

        return $this->curl->get($uri, $params);
        
    }
    
    
    /**
    *   Show Medias
    *
    *   @param $media_id - wistia media id
    *   @param $params - api parameters see Wistia API
    */
    public function show($media_id, array $params = array()){

        $uri = \Wistia\Resources\UriFactory::getUri(self::RESOURCE_NAME, "show", ["MEDIA-ID" => $media_id]);

        return $this->curl->get($uri, $params);
        
    }
    
    
    /**
    *   Update Medias
    *
    *   @param $media_id - wistia media id
    *   @param $params - api parameters see Wistia API
    */
    public function update($media_id, array $params = array()){

        $uri = \Wistia\Resources\UriFactory::getUri(self::RESOURCE_NAME, "update", ["MEDIA-ID" => $media_id]);

        return $this->curl->put($uri, $params);
    }
    
    
    /**
    *   Delete Medias
    *
    *   @param $media_id - wistia media id
    *   @param $params - api parameters see Wistia API
    */
    public function delete($media_id, array $params = array()){

        $uri = \Wistia\Resources\UriFactory::getUri(self::RESOURCE_NAME, "delete", ["MEDIA-ID" => $media_id]);

        return $this->curl->delete($uri, $params);
    }
    
    
    /**
    *   Copy Medias
    *
    *   @param $media_id - wistia media id
    *   @param $params - api parameters see Wistia API
    */
    public function copy($media_id, array $params = array()){

        $uri = \Wistia\Resources\UriFactory::getUri(self::RESOURCE_NAME, "copy", ["MEDIA-ID" => $media_id]);

        return $this->curl->post($uri, $params);
    }
    
    
    /**
    *   Stats Medias
    *
    *   @param $media_id - wistia media id
    *   @param $params - api parameters see Wistia API
    */
    public function stats($media_id, array $params = array()){

        $uri = \Wistia\Resources\UriFactory::getUri(self::RESOURCE_NAME, "stats", ["MEDIA-ID" => $media_id]);

        return $this->curl->get($uri, $params);
    }

}
