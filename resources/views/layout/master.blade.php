<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/sytle.css">
    <title>@yield('title')</title>

    @yield('style')
</head>
<body>
    <a href="">Home</a>
    <a href="/about">About</a>
    <a href="/contact">Contact</a>
    <a href="/extra">Extra</a>
    

    @yield('content')

    @section('extr')
      <h1>Lorem Ipsum</h1>
    @show
</body>
</html>