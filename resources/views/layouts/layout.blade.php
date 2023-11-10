<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="931d7b5e-cf8f-4a82-9cab-bae2096f17ff"
        data-blockingmode="auto" type="text/javascript"></script>
    <!---favicon --->
    <link rel="icon" href="image/favicons/favicon.ico">
    <!--------      style css ------------------>
    <style>
        body {
            padding-top: 50px;
            background-color: rgb(240, 240, 240);
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .flex-container {
            display: flex;
            background-color: rgb(224, 224, 224);
        }
    </style>
    <title>@yield('title')</title>
</head>

<!---header --->
<!-- As a link -->
<!--  <img src="images/1698845677.png" alt="Bootstrap" width="201" height="37"> -->
<!--nav class="navbar fixed-top bg-black"> -->
<!-- alinear mnenu a la derecha:     <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto"> -->
<!-- As a heading -->

<body>
    <nav class="navbar fixed-top navbar-expand-lg bg-black">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/1699047451.png" alt="Bootstrap" width="162" height="37" padding-bottom="10px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!------------- -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid justify-content-center ">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" flex-grow-0 id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Subir Selfie
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Subir selfie</a></li>
                            <li><a class="dropdown-item" href="#">Subir INE</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Subir Archivos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Subir selfie</a></li>
                            <li><a class="dropdown-item" href="#">Subir INE</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Foto combinada</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ayuda</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</body>
<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="931d7b5e-cf8f-4a82-9cab-bae2096f17ff"
    data-blockingmode="auto" type="text/javascript"></script>



@yield('content')

<!---footer --->
<!---script --->
@yield('script')



</html>
