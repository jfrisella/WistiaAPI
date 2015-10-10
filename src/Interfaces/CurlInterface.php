<?php
/**
*   Curl Interface
*/
namespace Wistia\Interfaces;

interface iCurl
{

    public function get();
    public function post();
    public function put();
    public function delete();

}
