<?php
/**
*   Projects Test - List
*/

class ProjectsListTest extends PHPUnit_Framework_TestCase
{

    protected $curl;

    protected function setUp(){

        //Setup Mock Curl
        $this->curl = $this->getMockBuilder('\Wistia\Resources\Curl')
                     ->getMock();

    }


    public function testProjectListSuccessData(){
        
        //Set the Curl get call
        $this->curl
                ->method('get')
                ->willReturn(file_get_contents("test/Resources/Json/projects_list.json"));


        $projects = \Wistia\Wistia::getResource("Projects", "apikey");
        $projects->setCurl($this->curl);
        $results = $projects->listOf();

        $j = json_decode($results, true);

        $this->assertTrue(is_array($j));

    }
    
}