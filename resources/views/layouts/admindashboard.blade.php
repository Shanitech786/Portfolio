<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layouts.dashboard_el.cs')
</head>

<body class="skin-blue">
    <div class="wrapper">
        <header class="main-header">
            @include('layouts.dashboard_el.top_nav')
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            @include('layouts.dashboard_el.side_nav')
        </aside>
        <!-- Right side column. Contains the navbar and content of the page -->
        @include('layouts.dashboard_el.main')

        <footer class="main-footer">
           @include('layouts.dashboard_el.footer')
        </footer>

    </div><!-- ./wrapper -->

    @include('layouts.dashboard_el.js')

</body>

</html>
