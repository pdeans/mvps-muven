<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use pdeans\Miva\Api\Manager as MivaApi;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(MivaApi::class, function ($app) {
			return new MivaApi([
				'url'          => config('miva.api.url'),
				'store_code'   => config('miva.store.code'),
				'access_token' => config('miva.api.token'),
				'private_key'  => config('miva.api.key'),
			]);
		});
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}
}
