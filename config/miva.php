<?php

return [

	/*
	|--------------------------------------------------------------------------
	| API Credentials
	|--------------------------------------------------------------------------
	|
	| Miva API credentials.
	|
	*/

	'api' => [
		'key' => env('MM_API_KEY'),
		'token' => env('MM_API_TOKEN'),
		'url' => env('MM_API_URL'),
	],

	/*
	|--------------------------------------------------------------------------
	| Store Settings
	|--------------------------------------------------------------------------
	|
	| Miva store settings.
	|
	*/

	'store' => [
		'code' => env('STORE_CODE'),
		'graphics_path' => env('STORE_GRAPHICS_PATH'),
		'root_path' => env('STORE_ROOT_PATH'),
		'url'  => env('STORE_URL'),
	],

];
