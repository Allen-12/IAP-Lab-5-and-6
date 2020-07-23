<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <h2>Car Details</h2>
    <h3>Make:</h3><p>{{ $car->make }}</p>
    <h3>Model:</h3><p>{{ $car->model }}</p>
    <h3>Produced On:</h3><p>{{ $car->produced_on }}</p>
</body>
</html>
