# MVPS Muven Framework

Develop rapid, robust, and powerful web applications.

## About MVPS Muven

Muven was created to speed up MVPS development efforts for web applications. Built on upon a stripped down version of the Laravel framework, Muven provides developers an expansive toolset to build rich and enjoyable web applications. The framework offers a service provider to the [pdeans Miva JSON API](https://github.com/pdeans/miva-api) library to quickly set up projects and integrations that tie into the Miva JSON API.

Checkout the the `ExampleController` under the `app/Http/Controllers` path for an example of getting setup with the API service provider.

## Getting Started

To get started, run the following command to create a new Muven project in the directory of your choosing.

```bash
composer create-project pdeans/mvps-muven muven
```

Make sure to follow the steps for getting a [Laravel application](https://laravel.com/docs/7.x#installing-laravel) setup, and then it's time to get Muven!

## Further Reading

As the framework is built largely on the Laravel framework, it is highly recommended to checkout the [Laravel documentation](https://laravel.com/docs) and work along side it as you build out your applications.

If your application will be interacting with the Miva JSON API, make sure to update the `.env` in the project root with your credentials and store information, then checkout the [pdeans Miva JSON API documentation](https://github.com/pdeans/miva-api).

