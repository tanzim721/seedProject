<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.2/examples/dashboard/dashboard.css" rel="stylesheet">
</head>
<body>
    

    @include('layout1.menu')
    @include('layout1.sidebar')

    <br>
    @yield('content1')
    

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://getbootstrap.com/docs/5.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.31.0/feather.min.js"></script>
    <script>
        feather.replace();
    </script>
</body>
</html>
