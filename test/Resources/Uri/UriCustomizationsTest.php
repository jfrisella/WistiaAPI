<?php
/**
*   Uri Customizations Test
*/

class UriCustomizationsTest extends PHPUnit_Framework_TestCase
{

    public function testCustomizationsShow(){
        $resource = "Customizations";
        $action = "show";
        $items = [
            "MEDIA-ID" => "xyz123"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/medias/xyz123/customizations.json", 
            \Wistia\Resources\UriFactory::getUri($resource, $action, $items)
        );
    }
    
    public function testCustomizationsCreate(){
        $resource = "Customizations";
        $action = "create";
        $items = [
            "MEDIA-ID" => "xyz123"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/medias/xyz123/customizations.json", 
            \Wistia\Resources\UriFactory::getUri($resource, $action, $items)
        );
    }
    
    public function testCustomizationsUpdate(){
        $resource = "Customizations";
        $action = "update";
        $items = [
            "MEDIA-ID" => "xyz123"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/medias/xyz123/customizations.json", 
            \Wistia\Resources\UriFactory::getUri($resource, $action, $items)
        );
    }
    
    public function testCustomizationsDelete(){
        $resource = "Customizations";
        $action = "delete";
        $items = [
            "MEDIA-ID" => "xyz123"
        ];
        
        $this->assertEquals(
            "https://api.wistia.com/v1/medias/xyz123/customizations.json", 
            \Wistia\Resources\UriFactory::getUri($resource, $action, $items)
        );
    }

}