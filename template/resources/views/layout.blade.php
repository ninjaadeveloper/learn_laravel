<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Template')</title>
</head>

<body>

    <a href="/">Home</a> |
    <a href="about">About</a> |
    <a href="contact">Contact</a> |
    <a href="service">Services</a> 
    <hr>

    @yield('content','No Content Found')


    <hr>
    <b>This is my footer</b>

</body>

</html>
