<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Tutorials
                </div>
<div style="text-align:left;text-decoration:none;color:green">
<a href="/">HOME</a>
<br/>List of api 
<ul >
<li><a href="api/articles">api/articles</a></li>
<li>GET, POST, PUT, DELETE
</ul>
</div>
                <div class="links">
                    <a href="https://www.toptal.com/laravel/restful-laravel-api-tutorial">Toptal.com Restful API</a>
                    <a href="https://laravel-news.com/generate-a-json-feed-with-laravel">Laravel Generate JSON feed</a>
                    <a href="https://medium.com/@dinotedesco/using-laravel-5-5-resources-to-create-your-own-json-api-formatted-api-2c6af5e4d0e8">Resource classes for JSON</a>
		<a href="http://ddecode.com/hexdecoder/?results=409e01fbc6f68f1c4208bc628dc7c095">DDencode tools</a>
                </div>
            </div>
        </div>
    </body>
</html>
