<?php
/**
*   Projects Test - Show
*/

class ProjectsTestShow extends PHPUnit_Framework_TestCase
{

    protected $curl;

    protected function setUp(){

        //Setup Mock Curl
        $this->curl = $this->getMockBuilder('\Wistia\Resources\Curl')
                     ->getMock();

    }


    public function testProjectShowSuccessData(){
        
        //Set the Curl get call
        $this->curl
                ->method('get')
                ->willReturn(file_get_contents("test/Resources/Json/projects_show.json"));


        $projects = \Wistia\Wistia::getResource("Projects", "apikey");
        $projects->setCurl($this->curl);
        $results = $projects->show("ln2k6qwi9k");

        $j = json_decode($results, true);

        $this->assertTrue(isset($j["medias"]));

    }
    
}