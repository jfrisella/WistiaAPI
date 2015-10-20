# Wistia API Wrapper

This is a `PHP` wrapper for the Wistia Data Api. A full list of Objects and Methods are at the bottom.

Basic usage:
```php
//Your wistia api key
$apikey = "abcdefg123456";

//A wistia media id
$media_id = "xyz123";

//Get a Medias Resource
$media = \Wistia\Wistia::getResource("Medias", $apikey);

//Call the Api Method on the resource
$results = $media->show($media_id);

//Now test if api call was successful
if($results->isSuccess()){
	
	//It was successful
	//now get results
	//and do something
	echo $results->getResults();

}else{

	//Not successful
	//So do something
	echo $results->getStatus();

}

```

<br />
<br />
Scenario 1: If you wanted to `show` a particular project with the id of `xyz123`

```php
//Your wistia api key
$apikey = "abcdefg123456";

$project_id = "xyz123";

//Get Projects Resource
$projects = \Wistia\Wistia::getResource("Projects", $apikey);

//Then call the method on the project
$results = $projects->show($project_id);

```
<br />
<br />
Scenario 2: If you wanted to `delete` a caption for a video `xyz123` with language `eng`

```php
//Your wistia api key
$apikey = "abcdefg123456";

$media_id = "xyz123";

//Get Captions Object
$captions = \Wistia\Wistia::getResource("Captions", $apikey);

//Then call the method on captions
$results = $captions->delete($media_id, array(
											"language" => "eng"
										));

```
<br />
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

<br />
If for some weird reason you would like to instantiate the classes directly, you can!

```php
//Your wistia api key
$apikey = "abcdefg123456";

$media_id = "xyz123";

//Get Captions Object
$captions = new \Wistia\Resources\Captions\Captions($apikey);

//Then call the method on captions
$results = $captions->delete($media_id, array(
											"language"
										));
```

<br />
The full list of Objects, Methods and their parameters,  map directly to the Wistia Data Api (for the most part).
Any place wistia uses `list`  we have to use `listOf`, since list is a protected word in php. The break down of the list below is
`Object -> Method -> Parameter`.  `[$param] =  Optional parameter`
<br><br>


* Projects
	- listOf
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- show
		* $project_id - wistia api hashed project id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- create
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- update
		* $project_id - wistia api hashed project id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- delete
		* $project_id - wistia api hashed project id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- copy
		* $project_id - wistia api hashed project id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
		<br/>

* Sharings
	- listOf
		* $project_id - wistia api hashed project id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- show
		* $project_id - wistia api hashed project id
		* $sharing_id - wistia api hashed sharing id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- create
		* $project_id - wistia api hashed project id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- update
		* $project_id - wistia api hashed project id
		* $sharing_id - wistia api hashed sharing id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- delete
		* $project_id - wistia api hashed project id
		* $sharing_id - wistia api hashed sharing id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
		<br/>

* Medias
	- listOf
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- show
		* $media_id - wistia api hashed media id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- update
		* $media_id - wistia api hashed media id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- delete
		* $media_id - wistia api hashed media id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- copy
		* $media_id - wistia api hashed media id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- stats
		* $media_id - wistia api hashed media id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
		<br/>

* Account
	- get
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
		<br/>

* Customizations
	- show
		* $media_id - wistia api hashed media id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- create
		* $media_id - wistia api hashed media id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- update
		* $media_id - wistia api hashed media id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- delete
		* $media_id - wistia api hashed media id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
		<br/>

* Captions
	- index
		* $media_id - wistia api hashed media id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- create
		* $media_id - wistia api hashed media id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- show
		* $media_id - wistia api hashed media id
		* $language_code - ISO-639-2 language code - three letter code
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- update
		* $media_id - wistia api hashed media id
		* $language_code - ISO-639-2 language code - three letter code
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- delete
		* $media_id - wistia api hashed media id
		* $language_code - ISO-639-2 language code - three letter code
		* [$params] - wistia api parameters see Wistia documentation
		<br/>
	- purchase
		* $media_id - wistia api hashed media id
		* [$params] - wistia api parameters see Wistia documentation
		<br/>


