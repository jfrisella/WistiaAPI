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
                "uri" => "projects/{{PROJECT-ID}}"
            ],
            "create" => [
                "method" => "POST",
                "uri" => "projects"
            ],
            "update" => [
                "method" => "PUT",
                "uri" => "projects/{{PROJECT-ID}}"
            ],
            "delete" => [
                "method" => "DELETE",
                "uri" => "projects/{{PROJECT-ID}}"
            ],
            "copy" => [
                "method" => "POST",
                "uri" => "projects/{{PROJECT-ID}}/copy"
            ]
        ],
        
        "Sharings" => [
            "listOf" => [
                "method" => "GET",
                "uri" => "projects/{{PROJECT-ID}}/sharings"
            ],
            "show" => [
                "method" => "GET",
                "uri" => "projects/{{PROJECT-ID}}/sharings/{{SHARING-ID}}"
            ],
            "create" => [
                "method" => "POST",
                "uri" => "projects/{{PROJECT-ID}}/sharings"
            ],
            "update" => [
                "method" => "PUT",
                "uri" => "projects/{{PROJECT-ID}}/sharings/{{SHARING-ID}}"
            ],
            "delete" => [
                "method" => "DELETE",
                "uri" => "projects/{{PROJECT-ID}}/sharings/{{SHARING-ID}}"
            ]
        ],
        
        "Medias" => [
            "listOf" => [
                "method" => "GET",
                "uri" => "medias"
            ],
            "show" => [
                "method" => "GET",
                "uri" => "medias/{{MEDIA-ID}}"
            ],
            "update" => [
                "method" => "PUT",
                "uri" => "medias/{{MEDIA-ID}}"
            ],
            "delete" => [
                "method" => "DELETE",
                "uri" => "medias/{{MEDIA-ID}}"
            ],
            "copy" => [
                "method" => "POST",
                "uri" => "medias/{{MEDIA-ID}}/copy"
            ],
            "stats" => [
                "method" => "GET",
                "uri" => "medias/{{MEDIA-ID}}/stats"
            ]
        ],
        
        "Account" => [
            "get" => [
                "method" => "GET",
                "uri" => "account"
            ]
        ],
        
        "Customizations" => [
            "show" => [
                "method" => "GET",
                "uri" => "medias/{{MEDIA-ID}}/customizations"
            ],
            "create" => [
                "method" => "POST",
                "uri" => "medias/{{MEDIA-ID}}/customizations"
            ],
            "update" => [
                "method" => "PUT",
                "uri" => "medias/{{MEDIA-ID}}/customizations"
            ],
            "delete" => [
                "method" => "DELETE",
                "uri" => "medias/{{MEDIA-ID}}/customizations"
            ]
        ],
        
        "Captions" => [
            "index" => [
                "method" => "GET",
                "uri" => "medias/{{MEDIA-ID}}/captions"
            ],
            "create" => [
                "method" => "POST",
                "uri" => "medias/{{MEDIA-ID}}/captions"
            ],
            "show" => [
                "method" => "GET",
                "uri" => "medias/{{MEDIA-ID}}/captions/{{LANGUAGE}}"
            ],
            "update" => [
                "method" => "PUT",
                "uri" => "medias/{{MEDIA-ID}}/captions/{{LANGUAGE}}"
            ],
            "delete" => [
                "method" => "DELETE",
                "uri" => "medias/{{MEDIA-ID}}/captions/{{LANGUAGE}}"
            ],
            "purchase" => [
                "method" => "POST",
                "uri" => "medias/{{MEDIA-ID}}/captions/purchase"
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
    *   @param $url_params (optional) - associative array of items to be added to uri
    */
    public function getUri(array $url_params = array()){
        if(!isset(static::$resource) || !isset(static::$action)){
            throw new \Exception("ApiFactory : getUri : resource or action is not set", 400);
        }
        
        $uri = $this->apiList[static::$resource][static::$action]["uri"];
        
        foreach($url_params as $key => $value){
            $uri = str_replace("{{" . $key . "}}", $value, $uri);
        }
        
        return $this->api . $uri . "." . static::$extension;
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
