<!doctype html>
<html lang="en" xmlns:color="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    @if(Session::has('review_status'))
        {{session('review_status')}}
    @endif
    <form method="post" action="/cars/{{ $car->id }}/reviews">
        @csrf

        <div align="center" style="margin: 10px">
            <label for="review">Review Text</label>
            <input type="text" name="review_text" id="review" value="{{ old('review_text') }}">
            @error('review_text')
                <br><small style="color: red">{{ $message }}</small>
            @enderror
        </div>
        <div align="center">
            <button type="submit">Review Vehicle</button>
        </div>
    </form>
</body>
</html>
