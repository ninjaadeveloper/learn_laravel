@extends('person.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center">Users</h2>
                <a href={{ Route('add') }}>
                    <button class="btn btn-outline-primary">Add User</button>
                </a>
                <table class="table mt-3">
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
            </div>
        </div>
    </div>
@endsection
