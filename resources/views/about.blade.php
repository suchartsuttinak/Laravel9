<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>About Page</h1>
   <h1>{{ $company }}</h1>
    <a href="{{route('welcome')}}">หน้าหลัก</a>
    <ul>
        @foreach ($user as $user )
        <li>{{ $user }}</li>

        @endforeach

    </ul>

</body>
</html>
