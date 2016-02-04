<?php
/**
*   Projects Test - Delete
*/

class ProjectsDeleteTest extends PHPUnit_Framework_TestCase
{

    protected $curl;

    protected function setUp(){

        //Setup Mock Curl
        $this->curl = $this->getMockBuilder('\Wistia\Resources\Curl')
                     ->getMock();

    }


    public function testProjectDeleteSuccessData(){
        
        //Set the Curl get call
        $this->curl
                ->method('delete')
                ->willReturn(file_get_contents("test/Resources/Json/projects_delete.json"));


        $projects = \Wistia\Wistia::getResource("Projects", "apikey");
        $projects->setCurl($this->curl);
        $results = $projects->delete("ln2k6qwi9k");

        $j = json_decode($results, true);

        $this->assertTrue(isset($j["id"]));

    }
    
}