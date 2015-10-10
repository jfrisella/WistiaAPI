<?php
/**
*   Test
*/

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once "src/Interfaces/CurlInterface.php";
require_once "src/Interfaces/OutputInterface.php";
require_once "src/Interfaces/ProjectsInterface.php";

require_once "src/Resources/Resource.php";
require_once "src/Resources/Projects/Projects.php";

require_once "src/Utility/Curl/Curl.php";
require_once "src/Utility/Output/Output.php";
require_once "src/Utility/Uri/Uri.php";
require_once "src/Utility/Uri/UriFactory.php";


$project = new \Wistia\Resources\Projects\Projects("apikey");
$results = $project->show("1234");

if($results->isSuccess()){
    echo "true";
}else{
    echo $results->getResults();
}