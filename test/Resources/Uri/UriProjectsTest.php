<?php
/**
*   Uri Projects Test
*/

class UriProjectsTest extends PHPUnit_Framework_TestCase
{

    public function testProjectsListOf(){
        $resource = "Projects";
        $action = "listOf";
        
        $this->assertEquals(
            "https://api.wistia.com/v1/projects.json", 
            \Wistia\Resources\UriFactory::getUri($resource, $action)
        );
    }

    public function testProjectsShow(){
        $resource = "Projects";
        $action = "show";
        $items = [
            "PROJECT-ID" => "xyz123"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/projects/xyz123.json", 
            \Wistia\Resources\UriFactory::getUri($resource, $action, $items)
        );
    }
    
    public function testProjectsCreate(){
        $resource = "Projects";
        $action = "create";
        
        $this->assertEquals(
            "https://api.wistia.com/v1/projects.json", 
            \Wistia\Resources\UriFactory::getUri($resource, $action)
        );
    }
    
    public function testProjectsUpdate(){
        $resource = "Projects";
        $action = "update";
        $items = [
            "PROJECT-ID" => "xyz123"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/projects/xyz123.json", 
            \Wistia\Resources\UriFactory::getUri($resource, $action, $items)
        );
    }
    
    public function testProjectsDelete(){
        $resource = "Projects";
        $action = "delete";
        $items = [
            "PROJECT-ID" => "xyz123"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/projects/xyz123.json", 
            \Wistia\Resources\UriFactory::getUri($resource, $action, $items)
        );
    }
    
    public function testProjectsCopy(){
        $resource = "Projects";
        $action = "copy";
        $items = [
            "PROJECT-ID" => "xyz123"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/projects/xyz123/copy.json", 
            \Wistia\Resources\UriFactory::getUri($resource, $action, $items)
        );
    }
    
}