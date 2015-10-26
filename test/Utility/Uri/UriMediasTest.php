<?php
/**
*   Uri Medias Test
*/

class UriMediasTest extends PHPUnit_Framework_TestCase
{

    public function testMediasListOf(){
        $resource = "Medias";
        $action = "listOf";
        
        $this->assertEquals(
            "https://api.wistia.com/v1/medias.json", 
            \Wistia\Utility\Uri\UriFactory::getUri($resource, $action)
        );
    }
    
    public function testMediasShow(){
        $resource = "Medias";
        $action = "show";
        $items = [
            "MEDIA-ID" => "xyz123"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/medias/xyz123.json", 
            \Wistia\Utility\Uri\UriFactory::getUri($resource, $action, $items)
        );
    }

    public function testMediasUpdate(){
        $resource = "Medias";
        $action = "update";
        $items = [
            "MEDIA-ID" => "xyz123"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/medias/xyz123.json", 
            \Wistia\Utility\Uri\UriFactory::getUri($resource, $action, $items)
        );
    }
    
    public function testMediasDelete(){
        $resource = "Medias";
        $action = "delete";
        $items = [
            "MEDIA-ID" => "xyz123"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/medias/xyz123.json", 
            \Wistia\Utility\Uri\UriFactory::getUri($resource, $action, $items)
        );
    }
    
    public function testMediasCopy(){
        $resource = "Medias";
        $action = "copy";
        $items = [
            "MEDIA-ID" => "xyz123"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/medias/xyz123/copy.json", 
            \Wistia\Utility\Uri\UriFactory::getUri($resource, $action, $items)
        );
    }
    
    public function testMediasStats(){
        $resource = "Medias";
        $action = "stats";
        $items = [
            "MEDIA-ID" => "xyz123"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/medias/xyz123/stats.json", 
            \Wistia\Utility\Uri\UriFactory::getUri($resource, $action, $items)
        );
    }
    
}