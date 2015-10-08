<?php
/**
*   Uri Builder
*/
namespace Wistia\Utility\API;

class ApiFactory
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
    protected $extension = "json";
    
    
    /**
    *   API Resource  
    *
    *   @var string
    */
    protected $resource;
    
    
    /**
    *   Resource Action
    *
    *   @var string
    */
    protected $action;
    
    
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
    *
    *   @param $item_id (optional) - wistia item id - project or media 
    */
    public function getUri($item_id){
        if(!isset($this->resource) || !isset($this->action)){
            throw new \Exception("ApiFactory : getUri : resource or action is not set", 400);
        }
        
        $l = $this->apiList[$this->resource][$this->action]["uri"];
        $url = str_replace("{{ITEM-ID}}", $item_id, $l);
        return $this->api . $url . "." . $extension;
    }
    
    
    /**
    *   Get Method
    */
    public function getMethod(){
        if(!isset($this->resource) || !isset($this->action)){
            throw new \Exception("ApiFactory : getMethod : resource or action is not set", 400);
        }
        return $this->apiList[$this->resource][$this->action]["method"];
    }
    
    
    /**
    *   Set Resource
    *
    *   @param $resource - api resource name
    */
    public function setResource($resource){
        $this->resource = $resource;
    }
    
    
    /**
    *   Set Action
    *
    *   @param $action - api resource action
    */
    public function setAction($action){
        $this->action = $action;
    }
    
    
    /**
    *   Set Extension
    *
    *   @param $extension - json or xml response type
    */
    public function setExtension($extension){
        $this->extension = $extension;
    }
    
}
