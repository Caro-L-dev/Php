<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DKVelo</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Google fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"> -->

</head>

<body>

    <!-- Header -->
    <header>
        <a href="#">
            <!-- <img src="images/logo.svg" alt="logo"> -->
            <h1>DKVelo</h1>
        </a>

        <!-- Nav Bar -->
        <nav>
            <ul>
                <li><a href="#" class="active">Boutique</a></li>
                <li><a href="#">Panier</a></li>
                <li id="login"><a href="#">Se connecter</a></li>
                <li id="signup"><a href="#">S'inscrire</a></li>
            </ul>
        </nav>
        <p class="btn">menu</p>
    </header>

    <section>



        <?php foreach ($products as $index => $product) {
            if ($index % 3 == 0) {
                echo '<div class="row"> ';
            }
        ?>

            <article>
                <a href="#">
                    <figure>
                        <div class="img">
                            <img src="<?php echo $product['image']; ?>" alt="<?= $product['name'] ?>">
                        </div>
                        <figcaption>
                            <h3><?php echo $product['name']; ?></h3>
                            <p><?php echo $product['price']; ?> €</p>
                        </figcaption>
                    </figure>
                </a>
            </article>

        <?php if ($index % 3 == 2) {
                echo '</div> ';
            }
        } ?>


    </section>

    <!-- Footer -->
    <footer>
        <div>
            <h3>A propos</h3>
            <ul>
                <li><a href="#">Fonctionnement du site</a></li>
                <li><a href="#">Conditions générales de vente</a></li>
                <li><a href="#">Données et confidentialité</a></li>
            </ul>
        </div>

        <div id="assistance">
            <h3>Assistance</h3>
            <ul>
                <li><a href="#">Centre d'aide</a></li>
                <li><a href="#">Nous contacter</a></li>
            </ul>
        </div>
    </footer>

</body>

</html>