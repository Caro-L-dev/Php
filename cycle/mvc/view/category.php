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

    <?php include 'includes/header.php'; ?>

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
                            <img src="<?php echo '/' . $product['image']; ?>" alt="<?= $product['name'] ?>">
                        </div>
                        <figcaption>
                            <h3><?php echo $product['name']; ?></h3>
                            <p class="text-dark text-center"><?php echo $product['description']; ?></p>
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

    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap. -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>