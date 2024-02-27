<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css') }}">
</head>

<body>
    <div class="container-fluid">
        @yield('content')
    </div>
    @yield('models')
    <script src="{{ asset('bootstrap/bootstrap.js') }}"></script>
</body>

</html>
