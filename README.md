# WistiaAPI

This is a `PHP` wrapper for the Wistia Data Api.

This is still in development.  I will remove this warning when it is safe to use.


Scenario 1: If you wanted to `show` a particular project with the id of `1234`

```php

$apikey = "Your api key from wistia";

//Get Projects Object
$projects = \Wistia\Wistia::getResource("Projects", $apikey);

//Then call the method on the projects
$results = $projects->show("1234");

if($results->isSuccess()){

	echo $results->getResults();

}else{
	
	echo $results->getStatus();
	echo $results->getResults();

}

```

Scenario 2: If you wanted to `delete` a caption for a video `1234` with language `eng`

```php

$apikey = "Your api key from wistia";

//Get Projects Object
$projects = \Wistia\Wistia::getResource("Captions", $apikey);

//Then call the method on the projects
$results = $projects->delete("1234", "eng");

//do some stuff with the results output object

```


The full list of Objects and Methods,  map directly to the Wistia Data Api (for the most part).
Any place wistia uses `list`  we have to use `listOf`, since list is a protected word in php.

* Projects
	- listOf
	- show
	- create
	- update
	- delete
	- copy

* Sharings
	- listOf
	- show
	- create
	- update
	- delete

* Medias
	- listOf
	- show
	- update
	- delete
	- copy
	- stats

* Account
	- get

* Customizations
	- show
	- create
	- update
	- delete

* Captions
	- index
	- create
	- show
	- update
	- delete
	- purchase


