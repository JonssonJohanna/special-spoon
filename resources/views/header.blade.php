<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <title>Document</title>
</head>

<body>
    <h1>Dish randomizer</h1>
    <nav>
        @if (Auth::guest())
        <a href="register">Register here</a>
        @endif
    </nav>
</body>

</html>
