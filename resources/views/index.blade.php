<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Muven</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #FFF;
                color: #636B6F;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .container {
                align-items: center;
                display: flex;
                height: 100vh;
                justify-content: center;
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 5.25rem;
                font-weight: 200;
            }

            .links > a {
                color: #636B6F;
                padding: 0 1.5625rem;
                font-size: 0.8125rem;
                font-weight: 600;
                letter-spacing: 0.1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="m-b-md">
                    <h1 class="title">Booya!</h1>
                    <p>Your application has fired up successfully and now it's time to get <strong>Muven!</strong></p>
                </div>

                <div class="links">
                    <a href="https://github.com/pdeans/mvps-muven">GitHub</a>
                    <a href="https://laravel.com/docs">Laravel Docs</a>
                </div>
            </div>
        </div>
    </body>
</html>
