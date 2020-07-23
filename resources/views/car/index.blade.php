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
    <div>
        <table align="center" style="border: 1px solid black">
            <tr>
                <th>ID</th>
                <th>Make</th>
                <th>Model</th>
                <th>Produced On</th>
            </tr>
            @foreach($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->make }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->produced_on }}</td>
                    <td><a href="/cars/{{ $car->id }}">View Car</a></td>
                    <td><a href="/cars/{{ $car->id }}/reviews/create">Review Car</a></td>
                    <td><a href="/cars/{{ $car->id }}/reviews/index">View Reviews</a></td>
                </tr>
            @endforeach
        </table>
    </div>
    <div>
        <a href="/cars/create">Add Vehicle</a>
    </div>
</body>
</html>
