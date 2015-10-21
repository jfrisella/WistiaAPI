<?php
/**
*   Api Factory
*/
namespace Wistia\Utility\Uri;

class UriFactory
{

    /**
    *   Create new Uri instance
    *
    *   @param $resource
    *   @param $action
    *   @param $item_id
    *   @return new Uri instance
    */
    public static function getUri($resource, $action, array $items = array()){
        $uri = new \Wistia\Utility\Uri\Uri();
        $uri->setResource($resource);
        $uri->setAction($action);
        return $uri->getUri($items);
    }

}
