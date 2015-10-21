<?php
/**
*   Uri Test
*/

class UriTest extends PHPUnit_Framework_TestCase
{

    public function testProjectsListOf(){
        $resource = "Projects";
        $action = "listOf";
        
        $this->assertEquals(
            "https://api.wistia.com/v1/projects.json", 
            \Wistia\Utility\Uri\UriFactory::getUri($resource, $action)
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
            \Wistia\Utility\Uri\UriFactory::getUri($resource, $action, $items)
        );
    }
    
    
}