<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>

    <form action="loginuser" method="POST">
        @csrf
        <label for="email">Email: </label>
        <input type="text" placeholder="Email" name="email"> <br>
        <label for="password">Password: </label>
        <input type="text" placeholder="Password" name="password"> <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
