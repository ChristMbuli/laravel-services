<!DOCTYPE html>
<html lang="fr">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<title>Test Micro-Service</title>
    <!-- Inclure les ressources CSS ici -->
</head>

<body>
    <div class="">
        <!-- Inclure une barre de navigation, en-tête, etc. -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary p-3    ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Micro-Service CRUD <i class="fa-brands fa-laravel" style="color: red"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
                    </ul>
                    <a href="http://localhost:3000/" class="btn btn-success">
                        Ajouter un article <i class="fa-solid fa-plus"></i>
                    </a>
                </div>
            </div>
        </nav>
        
        @yield('content')  <!-- Cette directive Blade permet d'inclure le contenu spécifique à chaque vue -->
        
        <!-- Inclure un pied de page, scripts JS, etc. -->
        <div class="container  ">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-4 my-4 border-top">
                <p class="col-md-6 mb-0 text-body-secondary">&copy; 2024, All rights reserved. designed by <a
                        href="https://portfolio-frontend-three-kappa.vercel.app/" target="_blank">Christ Mbuli</a></p>
        
                <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><a href="http://localhost/micro-service/php/" class="nav-link px-2 text-body-secondary">Accueil</a></li>
                    <li class="nav-item"><a href="http://localhost:3000/" class="nav-link px-2 text-body-secondary">Nouveau</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Parametres</a></li>
                    <li class="nav-item"><a href="https://portfolio-frontend-three-kappa.vercel.app/" target="_blank"
                            class="nav-link px-2 text-body-secondary">Contact</a></li>
        
        
                </ul>
            </footer>
        </div>
    </div>

    <!-- Inclure les scripts JS ici -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/e147eaff6b.js" crossorigin="anonymous"></script>
</body>

</html>
