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
        "Projects",
        "Sharings",
        "Medias",
        "Account",
        "Customizations",
        "Captions"
    );


    /**
    *   Get Wistia Resource
    *       gonna make this static for ease of use
    *   
    *   @param $resource - name of wistia resource
    *   @return Wistia resource object
    */
    public static function getResource($resource, $apikey){
        if(!in_array($resource, static::$resources)){
            throw new \Exception("\\Wistia\\Resources\\Wistia::getResource : Resource does not exist : " . $resource , 400);
        }
        
        if(!isset($apikey) || empty($apikey)){
            throw new \Exception("\\Wistia\\Resources\\Wistia::getResource : Api Key is not set or empty" , 400);
        }
        
        
        switch($resource){
            case "Projects":
                $obj = new \Wistia\Resources\Projects\Projects($apikey);
                break;
            case "Sharings":
                $obj = new \Wistia\Resources\Sharings\Sharings($apikey);
                break;
            case "Medias":
                $obj = new \Wistia\Resources\Medias\Medias($apikey);
                break;
            case "Account":
                $obj = new \Wistia\Resources\Account\Account($apikey);
                break;
            case "Customizations":
                $obj = new \Wistia\Resources\Customizations\Customizations($apikey);
                break;
            case "Captions":
                $obj = new \Wistia\Resources\Captions\Captions($apikey);
                break;
            default:
                throw new \Exception("\\Wistia\\Resources\\Wistia::getResource : Resource does not exist : " . $resource , 400);
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