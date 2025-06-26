<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="imagex/png" href="assets/images/logo_4C4452.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <?php
    foreach ($style as $href) {
        echo "<link rel='stylesheet' href='$href'>";
    }
    ?>

    <title>CARE<?php echo $titulo ?> </title>

</head>

<body class="body-guest">
    <header class="header-default">
        <nav class="navbar navbar-expand-md navbar-expand-lg shadow">
            <div class="container-fluid row-gap-2 mx-2">
                <a class="navbar-brand px-4 headlines" href="#" style="font-size: 1.5rem">C.A.R.E.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto my-2 my-md-0 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link px-4" href="#">Contate-nos</a>
                        </li>
                        <li class="nav-item">
                            <button class="btn nav-link px-4" data-bs-toggle="modal" data-bs-target="#loginModal">Sua
                                Conta</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
