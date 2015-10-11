# WistiaAPI

This is a `PHP` wrapper for the Wistia Data Api. A full list of Objects and Methods are at the bottom.

This is still in development.  I will remove this warning when it is safe to use.

<br />
Scenario 1: If you wanted to `show` a particular project with the id of `1234`

```php
$apikey = "Your api key from wistia";

//Get Projects Object
$projects = \Wistia\Wistia::getResource("Projects", $apikey);

//Then call the method on the projects
$results = $projects->show("1234");

```
<br />
Scenario 2: If you wanted to `delete` a caption for a video `1234` with language `eng`

```php
$apikey = "Your api key from wistia";

//Get Captions Object
$captions = \Wistia\Wistia::getResource("Captions", $apikey);

//Then call the method on captions
$results = $captions->delete("1234", "eng");

```
<br />
The `$results` you receive from the methods is a simple object with three methods.

```php
$results = $projects->show("project id");

//Get Status Code from Response Header
$results->getStatus();    //200 or 201 or 404 ...

//Get Response JSON string 
$results->getResults();   //{"wistia":"json"}

//Test if result is Successful
//returns true if status === 200 or 201
//and false for everything else
$results->isSuccess();		

```


If for some weird reason you would like to instantiate the classes directly, you can!

```php
$apikey = "Your api key from wistia";

//Get Captions Object
$captions = new \Wistia\Resources\Captions\Captions($apikey);

//Then call the method on captions
$results = $captions->delete("1234", "eng");
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


