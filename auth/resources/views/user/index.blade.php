<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <h1>Users</h1>

    {{ Auth::user() }}

    {{-- @if (Auth::check() )
        
    @endif --}}


  <form action="/logout" method="POST">
    @csrf
    <input type="submit"  value="Logout" />
    
  </form>

</body>

</html>
