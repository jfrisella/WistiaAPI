<?php
/**
*   Uri Captions Test
*/

class UriCaptionsTest extends PHPUnit_Framework_TestCase
{

    public function testCaptionsIndex(){
        $resource = "Captions";
        $action = "index";
        $items = [
            "MEDIA-ID" => "xyz123"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/medias/xyz123/captions.json", 
            \Wistia\Utility\Uri\UriFactory::getUri($resource, $action, $items)
        );
    }
    
    public function testCaptionsCreate(){
        $resource = "Captions";
        $action = "create";
        $items = [
            "MEDIA-ID" => "xyz123"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/medias/xyz123/captions.json", 
            \Wistia\Utility\Uri\UriFactory::getUri($resource, $action, $items)
        );
    }
    
    public function testCaptionsShow(){
        $resource = "Captions";
        $action = "show";
        $items = [
            "MEDIA-ID" => "xyz123",
            "LANGUAGE" => "eng"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/medias/xyz123/captions/eng.json", 
            \Wistia\Utility\Uri\UriFactory::getUri($resource, $action, $items)
        );
    }
    
    public function testCaptionsUpdate(){
        $resource = "Captions";
        $action = "update";
        $items = [
            "MEDIA-ID" => "xyz123",
            "LANGUAGE" => "eng"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/medias/xyz123/captions/eng.json", 
            \Wistia\Utility\Uri\UriFactory::getUri($resource, $action, $items)
        );
    }
    
    public function testCaptionsDelete(){
        $resource = "Captions";
        $action = "delete";
        $items = [
            "MEDIA-ID" => "xyz123",
            "LANGUAGE" => "eng"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/medias/xyz123/captions/eng.json", 
            \Wistia\Utility\Uri\UriFactory::getUri($resource, $action, $items)
        );
    }
    
    public function testCaptionsPurchase(){
        $resource = "Captions";
        $action = "purchase";
        $items = [
            "MEDIA-ID" => "xyz123"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/medias/xyz123/captions/purchase.json", 
            \Wistia\Utility\Uri\UriFactory::getUri($resource, $action, $items)
        );
    }

}