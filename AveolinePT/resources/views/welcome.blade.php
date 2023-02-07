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
        <nav class="navbar navbar-expand-lg" id="navBgColor">
            <div class="container-fluid">
                <span class="navbar-brand" >Aveoline</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">link1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link2</a>
                        </li>
                    </ul>
                <span class="navbar-text">
                    Sistema de órdenes de compra
                </span>
            </div>
            </div>
        </nav><!-- Fin de la Barra de Navegación-->
        <br>
        <!--Formulario de Ingreso-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-md-offset-3">
                    <div class="card">
                        <div class="card-header">
                            <h1>Inicio de Sesión</h1>
                        </div>
                        <div class="card-body">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="username">Nombre de Usuario:</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña:</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="role">Rol:</label>
                                    <select name="role" class="form-control">
                                        <option>Gerente</option>
                                        <option>Usuario</option>
                                        <option>Cliente</option>
                                    </select>
                                </div><br>
                                <input type="submit" value="Acceder" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <!--Boostrap js--><script src="js/bootstrap.min.js"></script>
</html>
