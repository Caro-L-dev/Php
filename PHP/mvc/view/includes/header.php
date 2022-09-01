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
                            Catégorie
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <?php foreach ($categories as $category) { ?>

                                <a class="dropdown-item" href="http://mvc-dev/categorie/<?php echo $category['category_id']; ?>">
                                    <?php echo $category['title']; ?>
                                </a>
                            <?php } ?>

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
                        <button type="button" class="nav-link text-dark" data-toggle="modal" data-target="#exampleModal">
                            <a href="/inscription">S'inscrire</a>
                        </button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Se connecter</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Espace modal -->


    </header>