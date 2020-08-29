<?php

namespace App\Http\Controllers;

use pdeans\Miva\Api\Manager as MivaApi;

class ExampleController extends Controller
{
	protected $mv_api;

	public function __construct(MivaApi $mv_api)
	{
		$this->mv_api = $mv_api;
	}

	public function index()
	{
		$response = $this->mv_api->func('ProductList_Load_Query')
			->count(5)
			->add()
			->send();

		return dp($response->getBody());
	}
}
