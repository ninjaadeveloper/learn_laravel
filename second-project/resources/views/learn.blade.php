<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning Blade Syntax</title>
</head>

<body>
    {{-- comment aesy huta ha --}}
    <h1>Let's learn blade syntax !!!</h1>

    {{-- echo is tarah huta ha --}}
    {{ 'Good Morning from blade syntax' }}

    @php
        //  variable es tarah define huta ha.
        $name = 'Mudassir';
    @endphp

    {{-- variable es tarah call huta ha --}}
    {{ $name }}

    {{-- script ko as it is print karwaye gey. --}}
    {{-- {{ "<script>alert('Hello from blade syntax')</script>" }} --}}

    {{-- agar actual script ko chalana hu. --}}
    {{-- {!! "<script>alert('Hello from blade syntax')</script>" !!} --}}


    @php
        $fruits = ['Mango', 'Grapes', 'Orange', 'Banana', 'Apple'];
        $student = ['name' => 'Affan', 'age' => 19, 'email' => 'affan@gmail.com'];
    @endphp

    <ul>
        {{-- @for ($i = 0; $i < 10; $i++)
        <li>{{$i}}</li>
        @endfor --}}
    </ul>

    <ol>
        {{-- @foreach ($fruits as $fru)
            <li> {{ $fru }}</li>
        @endforeach --}}
    </ol>

    <ol>
        @foreach ($student as $key => $std)
            <li> {{$key}} - {{ $std }}</li>
        @endforeach
    </ol>
  

    





</body>

</html>
