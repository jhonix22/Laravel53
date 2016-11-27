<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        {{-- Style Sheets --}}
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body>
        <div class="container">
            <div class="container">
                 @include('pages.include.header')
            </div>
            <div class="container-fluid">
               @yield('content')
            </div>
            <div class="container">
                 @include('pages.include.footer')
            </div>
        </div>
    </body>
</html>
