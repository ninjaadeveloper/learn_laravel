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
                        <th>Action</th>
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
                                <td class="d-flex">
                                    <a href="" class="btn btn-outline-primary"> View </a>&nbsp;
                                    <a href={{ Route('edit', $person->id) }} class="btn btn-outline-success">
                                        Edit
                                    </a>
                                    &nbsp;
                                    <a href={{ Route('delete', $person->id) }} class="btn btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        <tr></tr>


                    </tbody>


                </table>
            </div>
        </div>
    </div>
@endsection
