<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DKVelo</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <?php
    include 'includes/header.php';

    if (isset($result) && $result === false) { ?>
        <p class="bg-danger text-white text-center">Echec de l'inscription</p>
    <?php }
    ?>


    <section>

        <h1 class="text-center">Inscription</h1>

        <h2 class="text-center">-</h2>

        <div class="d-flex justify-content-center">

            <form class="d-flex flex-column w-50 p-3" action="/inscription/post" method="post">
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" id="firstname" placeholder="Prénom" required>
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" placeholder="Nom" required>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                <input class="btn btn-primary mt-3" type="submit" value="Valider">
            </form>

        </div>

    </section>

    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap. -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>