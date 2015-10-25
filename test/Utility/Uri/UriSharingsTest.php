<?php
/**
*   Uri Sharings Test
*/

class UriSharingsTest extends PHPUnit_Framework_TestCase
{

    public function testSharingsListOf(){
        $resource = "Sharings";
        $action = "listOf";
        $items = [
            "PROJECT-ID" => "xyz123"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/projects/xyz123/sharings.json", 
            \Wistia\Utility\Uri\UriFactory::getUri($resource, $action, $items)
        );
    }
    
    public function testSharingsShow(){
        $resource = "Sharings";
        $action = "show";
        $items = [
            "PROJECT-ID" => "xyz123",
            "SHARING-ID" => "abc789"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/projects/xyz123/sharings/abc789.json", 
            \Wistia\Utility\Uri\UriFactory::getUri($resource, $action, $items)
        );
    }
    
    public function testSharingsCreate(){
        $resource = "Sharings";
        $action = "create";
        $items = [
            "PROJECT-ID" => "xyz123"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/projects/xyz123/sharings.json", 
            \Wistia\Utility\Uri\UriFactory::getUri($resource, $action, $items)
        );
    }

    public function testSharingsUpdate(){
        $resource = "Sharings";
        $action = "update";
        $items = [
            "PROJECT-ID" => "xyz123",
            "SHARING-ID" => "abc789"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/projects/xyz123/sharings/abc789.json", 
            \Wistia\Utility\Uri\UriFactory::getUri($resource, $action, $items)
        );
    }
    
    public function testSharingsDelete(){
        $resource = "Sharings";
        $action = "delete";
        $items = [
            "PROJECT-ID" => "xyz123",
            "SHARING-ID" => "abc789"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/projects/xyz123/sharings/abc789.json", 
            \Wistia\Utility\Uri\UriFactory::getUri($resource, $action, $items)
        );
    }
    
}