# WistiaAPI

This is a `PHP` wrapper for the Wistia Data Api.

This is still in development.  I will remove this warning when it is safe to use.


Basic Usage: 

```php

$apikey = "Your api key from wistia";

//Request a particular resource
$projects = \Wistia\Wistia::getResource("Projects", $apikey);

//Then call the action on the resource

$results = $projects->show("some project id");

//or

$results = $projects->delete("some project id");


```
