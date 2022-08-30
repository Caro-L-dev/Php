<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DKShoes - Boutique</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
            <a class="navbar-brand" href="#">DKShoes</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">
                            Boutique<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Catégories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Hommes</a>
                        <a class="dropdown-item" href="#">Femmes</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="account.php">
                            Mon compte
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Panier</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            S'incrire
                        </button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Se connecter</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
        </button> -->
    
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="p-3" action="#" method="post">
                    <div class="row mb-3">
                        <label class="col-12 col-md-3 pl-0" for="firstname">Prénom</label>
                        <input class="col-12 col-md-9" type="text" name="firstname" id="firstname" placeholder="Prénom">
                    </div>
                    <div class="row mb-3">
                        <label class="col-12 col-md-3 pl-0" for="name">Nom</label>
                        <input class="col-12 col-md-9" type="text" name="name" id="name" placeholder="Nom">
                    </div>
                    <div class="row mb-3">
                        <label class="col-12 col-md-3 pl-0" for="email">Email</label>
                        <input class="col-12 col-md-9" type="email" name="email" id="email" placeholder="Adresse email">
                    </div>
                    <div class="row mb-3">
                        <label class="col-12 col-md-3 pl-0" for="password">Mot de passe</label>
                        <input class="col-12 col-md-9" type="password" name="password" id="password" placeholder="Mot de passe">
                    </div>
                    <input type="hidden" name="action" value="signup">
                    <div class="row mb-3 justify-content-end">
                        <input  class="" type="submit" value="Valider">
                    </div>
                </form>
            </div>
            <div class="modal-footer h-0">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
            </div>
        </div>
        </div>
    </header>
    <main class="container my-4">
        <h1 class="text-center">Boutique</h1>
        <section>
            <h2>Derniers Ajouts</h2>
            <div class="row">

                <?php foreach ($products as $product) { ?>

                <article class="col-12 col-md-6 col-xl-3 mb-3">
                    <figure>
                        <div>
                            <img class="w-100" src="<?php echo $product['image']; ?>" alt="<?= $product['name'] ?>" >
                        </div>
                        <figcaption class="px-3 py-2">
                            <h3 class="h5"><?= $product['name'] ?></h3>
                            <p class="m-0"><?= $product['price'] ?></p>
                        </figcaption>
                    </figure>
                </article>
                <?php } ?>

                           </div>
        </section>
    </main>
    <footer class="row bg-dark text-white p-3">
        <div class="col-12 col-md-6">
            <h2>A Propos</h2>
            <ul>
                <li><a href="">Fonctionnement du site</a></li>
                <li><a href="">Conditions générales de vente</a></li>
                <li><a href="">Données et confidentialité</a></li>
            </ul>
        </div>
    
        <div class="col-12 col-md-6 text-right">
            <h2>Assistance</h2>
            <ul>
                <li><a href="">Centre d'aide</a></li>
                <li><a href="">Nous contacter</a></li>
            </ul>
        </div>
    </footer>

    <!-- Bootstrap. -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>