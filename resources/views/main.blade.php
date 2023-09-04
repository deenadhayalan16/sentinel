<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <script src="{{ asset('assets/js/jquery.min.css') }}"></script>
    <script src="{{ asset('assets/js/popper.min.css') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.css') }}"></script>
</head>

<body>
    <div class="container">
        @yield("content")
    </div>
</body>

</html>