<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
</head>

<body>
<header>
    <nav class="">
        <ul>
            @foreach ($links as $link)
            <li><a href="{{route($link)}}">{{ $link }}</a></li>
            @endforeach
        </ul>
    </nav>
</header>

    <h1>{{$message}}</h1>

</body>

</html>

<style>
nav{
    width: 100%;
}

</style>