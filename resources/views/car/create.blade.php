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
    @if(Session::has('form_status'))
        {{session('form_status')}}
    @endif
    <form method="post" action="/cars" enctype="multipart/form-data">
        @csrf

        <div align="center" style="margin: 10px">
            <label for="make">Make</label>
            <input type="text" name="make" id="make" value="{{ old('make') }}">
            @error('make')
                <br><small style="color: red">{{ $message }}</small>
            @enderror
        </div>
        <div align="center" style="margin: 10px">
            <label for="model">Model</label>
            <input type="text" name="model" id="model" value="{{ old('model') }}">
            @error('model')
                <br><small style="color: red">{{ $message }}</small>
            @enderror
        </div>
        <div align="center" style="margin: 10px">
            <label for="producedOn">Produced On</label>
            <input type="date" name="produced_on" id="producedOn" value="{{ old('produced_on') }}">
            @error('produced_on')
                <br><small style="color: red">{{ $message }}</small>
            @enderror
        </div>
        <div align="center" style="margin: 10px">
            <label for="image">Image Path</label>
            <input type="file" name="image_path" id="image" value="{{ old('image_path') }}">
            @error('image_path')
                <br><small style="color: red">{{ $message }}</small>
            @enderror
        </div>
        <div align="center">
            <button type="submit">Create Car</button>
        </div>
    </form>
</body>
</html>
