<?php
/**
*   Output
*/
namespace Wistia\Resources;

class Output implements \Wistia\Resources\Interfaces\OutputInterface
{


    /**
    *   Output factory
    *
    *   @param $status {int} - call status
    *   @param $results {array} - call results
    *   @return new Output instance
    */
    public static function createOutput($status, $results = array()){
        return new self($status, $results);
    }


    /**
    *   Status
    *
    *   @var int/string
    */
    protected $status;
    
    
    /**
    *   Results
    *
    *   @var array/string
    */
    protected $results;
    

    /**
    *   Creates new Output instance
    *
    *   @param $status {int} - call status
    *   @param $results {array} - call results
    */
    public function __construct($status, $results){
        $this->status = $status;
        $this->results = $results;
    }
    
    
    /**
    *   Get results
    *
    *   @return results from curl call
    */
    public function getResults(){
        return $this->results;
    }
    
    
    /**
    *   Get status
    *
    *   @return status of curl call
    */
    public function getStatus(){
        return $this->status;
    }
    
    
    /**
    *   is Call success
    *
    *   @return boolean
    */
    public function isSuccess(){
        return intval($this->status) === 200 || intval($this->status) === 201;
    }

}
