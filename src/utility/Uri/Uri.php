<?php
/**
*   Uri Builder
*/
namespace Wistia\Utility\Uri;

class Uri
{

    /**
    *   Main API Uri
    *   
    *   @var string
    */
    protected $api = "https://api.wistia.com/v1/";

    
    /**
    *   Response Type
    *
    *   @var string
    */
    protected static $extension = "json";
    
    
    /**
    *   API Resource  
    *
    *   @var string
    */
    protected static $resource;
    
    
    /**
    *   Resource Action
    *
    *   @var string
    */
    protected static $action;
    
    
    /**
    *   API Resource/Action List
    *
    *   @var array
    */
    protected $apiList = [
        "Projects" => [
            "listOf" => [
                "method" => "GET",
                "uri" => "projects"
            ],
            "show" => [
                "method" => "GET",
                "uri" => "projects/{{ITEM-ID}}"
            ],
            "create" => [
                "method" => "POST",
                "uri" => "projects"
            ],
            "update" => [
                "method" => "PUT",
                "uri" => "projects/{{ITEM-ID}}"
            ],
            "delete" => [
                "method" => "DELETE",
                "uri" => "projects/{{ITEM-ID}}"
            ],
            "copy" => [
                "method" => "POST",
                "uri" => "projects/{{ITEM-ID}}/copy"
            ]
        ]
    ];

    
    /**
    *   Create new ApiFactory instance
    */
    public function __construct(){}
    
    
    /**
    *   Get Uri
    *       - maybe change this in the future to take assoc array
    *       and loop through array elements and str_replace with values
    *
    *   @param $item_id (optional) - wistia item id - project or media 
    */
    public  function getUri($item_id){
        if(!isset(static::$resource) || !isset(static::$action)){
            throw new \Exception("ApiFactory : getUri : resource or action is not set", 400);
        }
        
        $l = $this->apiList[static::$resource][static::$action]["uri"];
        $url = str_replace("{{ITEM-ID}}", $item_id, $l);
        return $this->api . $url . "." . static::$extension;
    }
    
    
    /**
    *   Get Method
    */
    public function getMethod(){
        if(!isset(static::$resource) || !isset(static::$action)){
            throw new \Exception("ApiFactory : getMethod : resource or action is not set", 400);
        }
        return $this->apiList[static::$resource][static::$action]["method"];
    }
    
    
    /**
    *   Set Resource
    *
    *   @param $resource - api resource name
    */
    public function setResource($resource){
        static::$resource = $resource;
    }
    
    
    /**
    *   Set Action
    *
    *   @param $action - api resource action
    */
    public function setAction($action){
        static::$action = $action;
    }
    
    
    /**
    *   Set Extension
    *
    *   @param $extension - json or xml response type
    */
    public function setExtension($extension){
        static::$extension = $extension;
    }
    
}
