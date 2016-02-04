<?php
/**
*   Projects Test - Create
*/

class ProjectsCreateTest extends PHPUnit_Framework_TestCase
{

    protected $curl;

    protected function setUp(){

        //Setup Mock Curl
        $this->curl = $this->getMockBuilder('\Wistia\Resources\Curl')
                     ->getMock();

    }


    public function testProjectCreateSuccessData(){
        
        //Set the Curl get call
        $this->curl
                ->method('post')
                ->willReturn(file_get_contents("test/Resources/Json/projects_create.json"));


        $projects = \Wistia\Wistia::getResource("Projects", "apikey");
        $projects->setCurl($this->curl);
        $results = $projects->create();

        $j = json_decode($results, true);

        $this->assertTrue(isset($j["id"]));

    }
    
}