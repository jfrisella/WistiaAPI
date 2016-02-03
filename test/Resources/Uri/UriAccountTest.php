<?php
/**
*   Uri Account Test
*/

class UriAccountTest extends PHPUnit_Framework_TestCase
{

    public function testAccountGet(){
        $resource = "Account";
        $action = "get";
        
        $this->assertEquals(
            "https://api.wistia.com/v1/account.json", 
            \Wistia\Resources\UriFactory::getUri($resource, $action)
        );
    }

}