<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Сессия CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="/">
            Сессия
        </a>

        <div class='links'>
                <a class='links-link' href="/">Оценки</a>
        </ul>
    </nav>
    <div class="page">
        @yield('content')
    </div>
</body>

</html>
<style>
    .navbar{
        padding: 0 20px;
    }
    .page {
        padding: 20px;
    }
    .links{
        display: flex;
        flex-direction: row;
        
        gap: 5px;
    }

    .links-link{
        text-decoration: none;
        color:black;
    }

    .links-link:hover{
        text-decoration: underline
    }
</style>
