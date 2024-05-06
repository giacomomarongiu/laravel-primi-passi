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
            <li><a href="{{route('home')}}">{{ $link }}</a></li>
            <li><a href="{{route('about')}}">{{ $linkTwo }}</a></li>
        </ul>
    </nav>
</header>

    <h1>{{ $message }}</h1>

</body>

</html>

<style>
nav{
    width: 100%;
}

</style>