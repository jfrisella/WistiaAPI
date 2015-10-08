<?php
/**
*   Curl Interface
*/
namespace Wistia\Interfaces\Curl;

interface iCurl
{

    public function get();
    public function post();
    public function put();
    public function delete();

}
