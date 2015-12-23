<?php

$src = __DIR__ . "/..";
include_once $src . "/src/Interfaces/AccountInterface.php";
include_once $src . "/src/Interfaces/CaptionsInterface.php";
include_once $src . "/src/Interfaces/CurlInterface.php";
include_once $src . "/src/Interfaces/CustomizationsInterface.php";
include_once $src . "/src/Interfaces/MediasInterface.php";
include_once $src . "/src/Interfaces/OutputInterface.php";
include_once $src . "/src/Interfaces/ProjectsInterface.php";
include_once $src . "/src/Interfaces/SharingsInterface.php";

include_once $src . "/src/Utility/Curl/Curl.php";
include_once $src . "/src/Utility/Output/Output.php";
include_once $src . "/src/Utility/Uri/Uri.php";
include_once $src . "/src/Utility/Uri/UriFactory.php";

include_once $src . "/src/Resources/Resource.php";
include_once $src . "/src/Resources/Account/Account.php";
include_once $src . "/src/Resources/Captions/Captions.php";
include_once $src . "/src/Resources/Customizations/Customizations.php";
include_once $src . "/src/Resources/Medias/Medias.php";
include_once $src . "/src/Resources/Projects/Projects.php";
include_once $src . "/src/Resources/Sharings/Sharings.php";

include_once $src . "/src/Wistia/Wistia.php";