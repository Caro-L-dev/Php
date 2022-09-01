<!-- Header -->
<header>


    <!-- Nav Bar -->
    <nav>

        <a href="#">
            <!-- <img src="images/logo.svg" alt="logo"> -->
            <h1 class="text-dark">DKVelo</h1>
        </a>
        <ul class="d-flex justify-content-end align-items-center">
            <li><a href="#" class="active">Boutique</a></li>
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
                <li id="login">
                    <button class="btn btn-success text-white" >
                    <a href="/inscription">Se connecter</a>
                </button>
            </li>
                <li id="signup">
                    <button class="btn btn-success text-white" >
                        <a href="/inscription">
                            S'inscrire
                        </a>
                    </button>
                </li>
            </div>
        </ul>
    </nav>
    <p class="btn">menu</p>
</header>