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
                <th>Review ID</th>
                <th>Make</th>
                <th>Model</th>
                <th>Review</th>
            </tr>
            @foreach($car->reviews as $review)
                <tr>
                    <td>{{ $review->id }}</td>
                    <td>{{ $car->make }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $review->review_text }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
