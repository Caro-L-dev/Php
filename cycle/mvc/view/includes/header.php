<header>

    <nav>
        <a href="/cycles">
            <h1 class="text-dark">DKVelo</h1>
        </a>


        <ul class="d-flex justify-content-end align-items-center">

            <!-- welcome message when user is logged -->
            <li class="mt-3">
                    <?php if (isset($_SESSION['userId'])) { ?>
                        <p>
                            Bonjour
                            <strong>
                                <?php echo $_SESSION['username']; ?>
                            </strong>
                            , vous êtes pile à l'heure !
                        </p>
                    <?php } ?>
                

            </li>

            <li><a href="/cycles" class="active">Boutique</a></li>
            <li><a class="text-dark" href="#">Panier</a></li>
            <li class=" dropdown">
                <a class="dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Catégorie
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <?php foreach ($categories as $category) { ?>

                        <a class="dropdown-item" href="http://cycles-dev/categorie/<?php echo $category['category_id']; ?>">
                            <?php echo $category['title']; ?>
                        </a>
                    <?php } ?>

                </div>
            </li>
            <div class="d-flex align-items-center">

                <li id="signup">
                    <button class="btn btn-primary text-white">
                        <a href="/inscription">
                            S'inscrire
                        </a>
                    </button>
                </li>

                <?php if (isset($_SESSION['userId'])) { ?>
                    <li id="login">
                        <button class="btn btn-danger text-white">
                            <a href="/deconnexion">Se déconnecter</a>
                        </button>
                    </li>
                <?php } else { ?>
                    <li id="login">
                        <button class="btn btn-success text-white">
                            <a href="/connexion">Se connecter</a>
                        </button>
                    </li>
                <?php } ?>

            </div>
        </ul>
    </nav>
    <p class="btn">menu</p>
</header>