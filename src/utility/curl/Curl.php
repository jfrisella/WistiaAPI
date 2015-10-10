<?php
/**
*   Curl Class
*/
namespace Wistia\Utility\Curl;

class Curl implements \Wistia\Interfaces\iCurl
{

    /**
    *   Wistia Apikey
    *
    *   @var string
    */
    public static $apikey;
    
    
    /**
    *   Wistia Api Username
    *
    *   @var string
    */
    protected static $apiuser = "api";
    
    
    /**
    *   Get Wistia Api Basic Auth string
    *
    *   @return basic auth string
    */
    protected static function getBasicAuth(){
        return static::$apiuser . ":" . static::$apikey;
    }
    
    
    /**
    *   Get Http
    *
    *   @param $url - api url
    *   @param $params - api parameters
    *   @return wistia output object
    */
    public function get($url, array $params = array()){
        return $this->_get($url, $params);
    }
    
    
    /**
    *   Post Http
    *
    *   @param $url - api url
    *   @param $params - api parameters
    *   @return wistia output object
    */
    public function post($url, array $params = array()){
        return $this->_post($url, $params);
    }
    
    
    /**
    *   Put Http
    *
    *   @param $url - api url
    *   @param $params - api parameters
    *   @return wistia output object
    */
    public function put($url, array $params = array()){
        $params["_method"] = "put";
        return $this->_post($url, $params);
    }
    
    
    /**
    *   Delete Http
    *
    *   @param $url - api url
    *   @param $params - api parameters
    *   @return wistia output object
    */
    public function delete($url, array $params = array()){
        $params["_method"] = "delete";
        return $this->_post($url, $params);
    }
    
    
    /**
    *   Get Curl Call
    *
    *   @param $url - api url
    *   @param $params - api parameters
    *   @return wistia output object
    */
    protected function _get($url, array $params = array()){
    
        $q = http_build_query($params);
    
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url . $q);
		curl_setopt($ch, CURLOPT_USERPWD, static::getBasicAuth());
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		
		$result = curl_exec($ch);
        
        $h = curl_getinfo($ch);
        $status = $h["http_code"];
        
        // Check for errors and display the error message
        if($errno = \curl_errno($ch))
        {
            $error_message = \curl_strerror($errno);
            \curl_close($ch);
            throw new \Exception($error_message, 400);
        }
        
		\curl_close($ch);
		return \Wistia\Utility\Output\Output::createOutput($status, $result);
    }
    
    
    /**
    *   Post Curl Call
    *
    *   @param $url - api url
    *   @param $params - api parameters
    *   @return wistia output object
    */
    protected function _post($url, array $params = array()){
    
        $q = http_build_query($params);
    
		$ch = \curl_init();
		\curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		\curl_setopt($ch, CURLOPT_URL, $url);
		\curl_setopt($ch, CURLOPT_USERPWD, static::getBasicAuth());
		\curl_setopt($ch, CURLOPT_POSTFIELDS, $q);
        \curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		\curl_setopt($ch, CURLOPT_POST, TRUE);
		
		$result = \curl_exec($ch);
        
        $h = \curl_getinfo($ch);
        $status = $h["http_code"];
        
        
        // Check for errors and display the error message
        if($errno = \curl_errno($ch))
        {
            $error_message = \curl_strerror($errno);
            \curl_close($ch);
            throw new \Exception($error_message, 400);
        }
        
		\curl_close($ch);
		return \Wistia\Utility\Output\Output::createOutput($status, $result);
    }
    
    
}
