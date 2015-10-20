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
    *   Index Captions
    *
    *   @param $media_id - wistia media id
    *   @param $params - api parameters see Wistia API
    */
    public function index($media_id, array $params = array()){
        
        $uri = \Wistia\Utility\Uri\UriFactory::getUri(self::RESOURCE_NAME, "index", ["MEDIA-ID" => $media_id]);
        
        $curl = new \Wistia\Utility\Curl\Curl();
        return $curl->get($uri, $params);
    }
    
    
    /**
    *   Show Captions
    *
    *   @param $media_id - wistia media id
    *   @param $language_code - three letter language code
    *   @param $params - api parameters see Wistia API
    */
    public function show($media_id, $language_code, array $params = array()){
        
        $uri = \Wistia\Utility\Uri\UriFactory::getUri(self::RESOURCE_NAME, "show", ["MEDIA-ID" => $media_id, "LANGUAGE" => $language_code]);
        
        $curl = new \Wistia\Utility\Curl\Curl();
        return $curl->get($uri, $params);
    }
    
    
    /**
    *   Create Captions
    *
    *   @param $media_id - wistia media id
    *   @param $params - api parameters see Wistia API
    */
    public function create($media_id, array $params = array()){
        
        $uri = \Wistia\Utility\Uri\UriFactory::getUri(self::RESOURCE_NAME, "create", ["MEDIA-ID" => $media_id]);
        
        $curl = new \Wistia\Utility\Curl\Curl();
        return $curl->post($uri, $params);
    }
    
    
    /**
    *   Update Captions
    *
    *   @param $media_id - wistia media id
    *   @param $language_code - three letter language code
    *   @param $params - api parameters see Wistia API
    */
    public function update($media_id, $language_code, array $params = array()){
        
        $uri = \Wistia\Utility\Uri\UriFactory::getUri(self::RESOURCE_NAME, "update", ["MEDIA-ID" => $media_id, "LANGUAGE" => $language_code]);
        
        $curl = new \Wistia\Utility\Curl\Curl();
        return $curl->put($uri, $params);
    }
    
    
    /**
    *   Delete Captions
    *
    *   @param $media_id - wistia media id
    *   @param $language_code - three letter language code
    *   @param $params - api parameters see Wistia API
    */
    public function delete($media_id, $language_code, array $params = array()){
        
        $uri = \Wistia\Utility\Uri\UriFactory::getUri(self::RESOURCE_NAME, "delete", ["MEDIA-ID" => $media_id, "LANGUAGE" => $language_code]);
        
        $curl = new \Wistia\Utility\Curl\Curl();
        return $curl->delete($uri, $params);
    }
    
    
    /**
    *   Purchase Captions
    *
    *   @param $media_id - wistia media id
    *   @param $params - api parameters see Wistia API
    */
    public function purchase($media_id, array $params = array()){
        
        $uri = \Wistia\Utility\Uri\UriFactory::getUri(self::RESOURCE_NAME, "purchase", ["MEDIA-ID" => $media_id]);
        
        $curl = new \Wistia\Utility\Curl\Curl();
        return $curl->post($uri, $params);
    }

}
