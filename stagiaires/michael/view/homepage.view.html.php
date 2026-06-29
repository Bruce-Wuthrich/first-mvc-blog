<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Accueil du blog de Pitz Michaël" />
        <meta name="author" content="Pitz Michaël" />
        <title>Mon Blog | Accueil</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <?php
        // appel du menu
        include BASE_URL."/view/inc/menu.view.html.php";
        ?>
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                <h1>Le blog de Pitz Michaël</h1>
                <p class="lead">du blabla</p>
                <p>Bootstrap v5.2.3</p>
                <?php
            var_dump($_GET, $menu,$articles);
                ?>
            </div>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3"> <div class="feature col"> <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"> <svg class="bi" width="1em" height="1em" aria-hidden="true"><use xlink:href="#collection"></use></svg> </div> <h3 class="fs-2 text-body-emphasis">Featured title</h3> <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p> <a href="#" class="icon-link">
Call to action
<svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg> </a> </div> <div class="feature col"> <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"> <svg class="bi" width="1em" height="1em" aria-hidden="true"><use xlink:href="#people-circle"></use></svg> </div> <h3 class="fs-2 text-body-emphasis">Featured title</h3> <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p> <a href="#" class="icon-link">
Call to action
<svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg> </a> </div> <div class="feature col"> <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"> <svg class="bi" width="1em" height="1em" aria-hidden="true"><use xlink:href="#toggles2"></use></svg> </div> <h3 class="fs-2 text-body-emphasis">Featured title</h3> <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p> <a href="#" class="icon-link">
Call to action
<svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg> </a> </div> </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>