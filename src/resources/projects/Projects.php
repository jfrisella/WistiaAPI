<?php
/**
*   Wistia Projects Class
*/
namespace Wistia\Resources\Projects;

class Project extends \Wistia\Resources\Resource implements \Wistia\Interfaces\Projects\iProject
{
    
    
    /**
    *   Create new Projects instance
    *
    *   @param $apikey - wistia provided api key
    */
    public function __construct($apikey){
        parent::__construct($apikey);
    }
    
    
    /**
    *
    *
    *
    */
    public function listOf(){}
    public function show(){}
    public function create(){}
    public function update(){}
    public function delete(){}
    public function copy(){}

}
