<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dessert Bucin | {{ $judul }}</title>
    <link rel="stylesheet" href="/bootstrap5/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fontawesome6/css/all.min.css">
</head>

<body class="bg-light">
    @include('partials.navbar')
    <!-- <div class="container-fluid"> -->
    @yield('main_utama')

    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Miftakhudin 2022



            </p>
        </div>
    </footer>
    <!-- </div> -->
    <script src="/bootstrap5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/fontawesome6/js/all.min.js"></script>
</body>

</html>
