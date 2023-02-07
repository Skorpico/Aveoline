<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aveoline</title>
        <!--Fuente--><link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!--Estilo Boostrap--><link rel="stylesheet" href="css/bootstrap.min.css">
        <!--Estilo Aveoline--><link rel="stylesheet" href="css/estiloAveoline.css">
    </head>
    <body class="antialiased bg-body-secondary">
        <!-- Barra de Navegación-->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar w/ text</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                    </ul>
                <span class="navbar-text">
                    Navbar text with an inline element
                </span>
            </div>
            </div>
        </nav><!-- Fin de la Barra de Navegación-->
        <br>
    </body>
    <!--Boostrap js--><script src="js/bootstrap.min.js"></script>
</html>
