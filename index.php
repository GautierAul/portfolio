<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/assets/styles/main.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/d5fdf5eb18.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title>Portfolio - AULNER Gautier</title>
</head>

<header>
    <?php include_once('layouts/header.php'); ?>
</header>

<body>

    <?php
    include_once('layouts/contact.php');
    include_once('layouts/cv.php');
    ?>

    <div class="container p-3 ps-5">
        <h1 class="text-center">Mon portfolio</h1>
        <hr />

        <?php
        include_once('layouts/creation.php');
        include_once('layouts/parcours.php');
        ?>

        <div id="blockMain">
            <div id="pres_1" class="pres p-3 mb-3">
                <p>
                    Je suis AULNER Gautier, un jeune étudiant en informatique.
                </p>
                <div class="borderBottom"></div>
            </div>
            <div id="pres_2" class="pres p-3 mb-3">
                <p>
                    L'informatique m'as toujours fasciné depuis l'enfance, j'ai ensuite découvert ma passion pour le développement Web au lycée.
                </p>
                <div class="borderBottom"></div>

            </div>
            <div id="pres_3" class="pres p-3 mb-3">
                <p>
                    Aujourd'hui, je souhaite réaliser ma carrière en tant que Développeur Back-end.
                </p>
                <div class="borderBottom"></div>

            </div>


        </div>

    </div>

</body>

<script type="text/javascript" src="assets/scripts/main.js"></script>

</html>