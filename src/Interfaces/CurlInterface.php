<?php
/**
*   Curl Interface
*/
namespace Wistia\Interfaces;

interface iCurl
{

    public function get($url, array $params = array());
    public function post($url, array $params = array());
    public function put($url, array $params = array());
    public function delete($url, array $params = array());

}
