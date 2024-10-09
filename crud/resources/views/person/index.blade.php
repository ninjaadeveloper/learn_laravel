<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <h1>Index</h1>

    <table border="1">
        <thead>
            <th>S.No</th>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Salary</th>
            <th>Mobile</th>
        </thead>

        <tbody>
            @foreach ($data as $person)
                <tr>
                    <td>{{ $person->id }}</td>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->age }}</td>
                    <td>{{ $person->email }}</td>
                    <td>{{ $person->salary }}</td>
                    <td>{{ $person->mobile }}</td>
                </tr>
            @endforeach
            <tr></tr>


        </tbody>


    </table>

</body>

</html>
