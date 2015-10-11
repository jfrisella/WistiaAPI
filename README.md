# WistiaAPI

This is a `PHP` wrapper for the Wistia Data Api.

This is still in development.  I will remove this warning when it is safe to use.


Basic Usage: 

```php

$apikey = "Your api key from wistia";

//Request a particular resource object
$projects = \Wistia\Wistia::getResource("Projects", $apikey);

//Then call the method on the resource

$results = $projects->show("some project id");

//or

$results = $projects->delete("some project id");

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


