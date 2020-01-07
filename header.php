<!DOCTYPE html>
<html lang="et">
    <head>
        <title>Riina Puukool</title>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/custom.css">
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300" rel="stylesheet" type='text/css'>
        <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container">
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/">Riina Puukool</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item             
                        <?php
                            $uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
                            $link_array = explode('/',$uri_parts[0]);
                            if(end($link_array) == "") echo "active";
                            ?>">
                        <a class="nav-link" href="/">Avaleht</a>
                    </li>
                    <li class="nav-item dropdown <?php
                            $uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
                            $link_array = explode('/',$uri_parts[0]);
                            if(end($link_array) == "andmebaasid.php") echo "active";
                            ?>">
                        <a class="nav-link dropdown-toggle" href="" id="navbarTaimed" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Andmebaasid
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarTaimed">
                            <a class="dropdown-item" href="andmebaasid.php?type=lehtpuud">Lehtpuud</a>
                            <a class="dropdown-item" href="andmebaasid.php?type=okaspuud">Okaspuud</a>
                        </div>
                    </li>
                    <li class="nav-item             
                        <?php
                            $uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
                            $link_array = explode('/',$uri_parts[0]);
                            if(end($link_array) == "kontakt.php") echo "active";
                            ?>">
                        <a class="nav-link" href="kontakt.php">Kontakt</a>
                    </li>
                </ul>
                <form class="otsing form-inline my-2 my-lg-0" action="andmebaasid.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Otsing" name="otsing">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Otsi</button>
                </form>
            </div>
        </nav>