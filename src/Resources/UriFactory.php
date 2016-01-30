<?php
/**
*   Uri Factory
*/
namespace Wistia\Resources;

class UriFactory
{

    /**
    *   Create new Uri instance
    *
    *   @param $resource
    *   @param $action
    *   @param $item_id
    *   @return Uri string
    */
    public static function getUri($resource, $action, array $items = array()){
        $uri = new \Wistia\Resources\Uri();
        $uri->setResource($resource);
        $uri->setAction($action);
        return $uri->getUri($items);
    }

}
