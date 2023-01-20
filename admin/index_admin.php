<!doctype html>
<html lang="en">

<head>
    <title>Administración PP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script ></script>
</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-ligth bg-ligth mb-3 shadow">
            <div class="container mt-3 mb-3">
                <a href="#" class="navbar-brand">POLO POSITIVO</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="Controller/cerrar.php" class="nav-item nav-link bi bi-box-arrow-left"> Cerrar
                            Sesión</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row justify-content-around mt-5">
                <div class="col-4">
                    <div class="card text-white bg-dark mb-5" style="width: 25rem;">
                        <div class="card-body text-center text-blue">
                            <img src="Includes/svg/mensaje.svg" alt="" srcset="">
                            <h5 class="card-title">Mensajes por resonder</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <script type="text/javascript">
                                var d = new Date();
                                document.write(d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear());
                                </script>
                            </h6>
                            <h1 class="card-text"><?php // echo count($usuarios) ?></h1>

                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card text-white bg-dark mb-5" style="width: 25rem;">
                        <div class="card-body text-center text-blue">
                            <h5 class="card-title">Total mensajes recibidos</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <script type="text/javascript">
                                var d = new Date();
                                document.write(d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear());
                                </script>
                            </h6>
                            <h1 class="card-text"><?php // echo count($usuarios) ?></h1>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>