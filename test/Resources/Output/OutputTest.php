<?php
/**
*   Output Test
*/

class OutputTest extends PHPUnit_Framework_TestCase
{

    protected $output;

    protected function setUp(){
        
        $status = 200;
        $results = [
            "result" => true
        ];
    
        $this->output = \Wistia\Resources\Output::createOutput($status, $results);
    
    }
    
    
    public function testStatus(){
    
        $this->assertEquals(200, $this->output->getStatus());
        
    }
    
    public function testResults(){
    
        $this->assertEquals(["result" => true], $this->output->getResults());
    
    }

    public function testSuccess(){
    
        $this->assertTrue($this->output->isSuccess());
    
    }
}


