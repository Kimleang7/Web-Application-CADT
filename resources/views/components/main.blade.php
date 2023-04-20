<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    <title>{{$title}}</title>--}}
</head>
<body>
    <header>
        <h1>Use component Main</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/home') }}">Home Page</a></li>
                <li><a href="{{ url('/about') }}">About us</a></li>
                <li>contact us</li>
            </ul>
        </nav>
    </header>

{{$slot}}

</body>
</html>
