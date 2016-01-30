<?php
/**
*   Main Wistia Class
*/
namespace Wistia;

class Wistia
{

    
    /**
    *   Wistia resources
    *
    *   @var array
    */
    protected static $resources = array(
        "projects",
        "sharings",
        "medias",
        "account",
        "customizations",
        "captions"
    );


    /**
    *   Get Wistia Resource
    *       gonna make this static for ease of use
    *   
    *   @param $resource - name of wistia resource
    *   @return Wistia resource object
    */
    public static function getResource($resource, $apikey){
        if(!in_array(strtolower($resource), static::$resources)){
            throw new \Exception("\\Wistia\\Wistia::getResource : Resource does not exist : " . $resource , 400);
        }
        
        if(!isset($apikey) || empty($apikey)){
            throw new \Exception("\\Wistia\\Wistia::getResource : Api Key is not set or empty" , 400);
        }
        
        
        switch(strtolower($resource)){
            case "projects":
                $obj = new \Wistia\Resources\Projects($apikey);
                break;
            case "sharings":
                $obj = new \Wistia\Resources\Sharings($apikey);
                break;
            case "medias":
                $obj = new \Wistia\Resources\Medias($apikey);
                break;
            case "account":
                $obj = new \Wistia\Resources\Account($apikey);
                break;
            case "customizations":
                $obj = new \Wistia\Resources\Customizations($apikey);
                break;
            case "captions":
                $obj = new \Wistia\Resources\Captions($apikey);
                break;
            default:
                throw new \Exception("\\Wistia\\Wistia::getResource : Resource does not exist : " . $resource , 400);
        }
        
        return $obj;
    }
        
    
    /**
    *   List Wisita Resources
    *       don't really need this but thought it would be nice
    *
    *   @return array of wistia resource names 
    */
    public static function listResources(){
        return static::$resources;
    }
    
}